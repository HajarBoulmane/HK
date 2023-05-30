<?php
session_start();
require_once 'connexion.php';
?>
<!doctype html>
<html lang="en">
<head>
    <title>Panier</title>
</head>
<body>
<div class="container py-2">
    <?php
    if (isset($_POST['vider'])) {
        $_SESSION['panier'][$id_client] = [];
        header('location: panier.php');
    }


    $id_client = $_SESSION['client']['id'] ?? 0;
    $panier = $_SESSION['panier'][$id_client] ?? [];

    if (!empty($panier)) {
        $idProduits = array_keys($panier);
        $idProduits = implode(',', $idProduits);
        $produits = $con->query("SELECT * FROM produit WHERE id IN ($idProduits)")->fetch_assoc();
    }
    if (isset($_POST['valider'])) {
        $sql = 'INSERT INTO ligne_commande(id_produit,id_commande,prix,quantite,total) VALUES';
        $total = 0;
        $prixProduits = [];
        foreach ($produits as $produit) {
            $idProduit = $produit['id'];
            $qty = $panier[$idProduit];
            $discount = $produit['discount'];
            $prix = ($produit['prix'], $discount);

            $total += $qty * $prix;
            $prixProduits[$idProduit] = [
                'id' => $idProduit,
                'prix' => $prix,
                'total' => $qty * $prix,
                'qty' => $qty
            ];
        }

        $sqlStateCommande = $pdo->prepare('INSERT INTO commande(id_client,total) VALUES(?,?)');
        $sqlStateCommande->execute([$idUtilisateur, $total]);
        $idCommande = $pdo->lastInsertId();
        $args = [];
        foreach ($prixProduits as $produit) {
            $id = $produit['id'];
            $sql .= "(:id$id,'$idCommande',:prix$id,:qty$id,:total$id),";
        }
        $sql = substr($sql, 0, -1);
        $sqlState = $pdo->prepare($sql);
        foreach ($prixProduits as $produit) {
            $id = $produit['id'];
            $sqlState->bindParam(':id' . $id, $produit['id']);
            $sqlState->bindParam(':prix' . $id, $produit['prix']);
            $sqlState->bindParam(':qty' . $id, $produit['qty']);
            $sqlState->bindParam(':total' . $id, $produit['total']);
        }
        $inserted = $sqlState->execute();
        if ($inserted) {

            $_SESSION['panier'][$idUtilisateur] = [];
            header('location: panier.php?success=true&total=' . $total);
        } else {
            ?>
            <div class="alert alert-error" role="alert">
                Erreur (contactez l'administrateur).
            </div>
            <?php
        }
    }
    if (isset($_GET['success'])) {
        ?>
        <h1>Merci ! </h1>
        <div class="alert alert-success" role="alert">
            Votre commande avec le montant <strong>(<?php echo $_GET['total'] ?? 0 ?>)</strong> <i class="fa fa-solid fa-dollar"></i> est bien ajoutée.
        </div>
        <hr>
        <?php
    }
    if (!isset($_GET['success'])) {

        ?>
        <h4>Panier (<?php echo $productCount; ?>)</h4>
        <?php
    }
    ?>
    <div class="container">
        <div class="row">
            <?php
            if (empty($panier)) {
                if (!isset($_GET['success'])) {
                    ?>
                    <div class="alert alert-warning" role="alert">
                        Votre panier est vide !
                        Commençez vos achats <a class="btn btn-success btn-sm" href="./index.php">Acheter des
                            produits</a>
                    </div>
                    <?php
                }
            } else {

                ?>
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Image</th>
                        <th scope="col">Libelle</th>
                        <th scope="col">Quantité</th>
                        <th scope="col">Prix</th>
                        <th scope="col">Remise</th>
                        <th scope="col"><i class="fa fa-percent"></i> prix remise</th>
                        <th scope="col">Total</th>
                    </tr>
                    </thead>
                    <?php
                    $total = 0;
                    foreach ($produits as $produit) {
                        $idProduit = $produit['id'];
                        $totalProduit = ($produit['prix'] $produit['discount'] ) * $panier[$idProduit];
                        $total += $totalProduit;
                        ?>
                        <tr>
                            <td><?php echo $produit['id'] ?></td>
                            
                            <td><?php echo $produit['libelle'] ?></td>
                            <td><?php echo $produit['prix'] ?> <i class="fa fa-solid fa-dollar"></i></td>
                            <td> - <?= $produit['discount'] ?> %</td>
                            <td> <i class="fa fa-solid fa-dollar"></i></td>
                            <td>  <i class="fa fa-solid fa-dollar"></i></td>
                        </tr>

                        <?php
                    }
                    ?>
                    <tfoot>
                    <tr>
                        <td colspan="7" ><strong>Total</strong></td>
                        <td><?php echo $total ?> <i class="fa fa-solid fa-dollar"></i></td>
                    </tr>
                    <tr>
                        <td colspan="8" >
                            <form method="post">
                                <input type="submit" class="btn btn-success" name="valider" value="Valider la commande">
                                <input onclick="return confirm('Voulez vous vraiment vider le panier ?')" type="submit"
                                       class="btn btn-danger" name="vider" value="Vider le panier">
                            </form>
                        </td>
                    </tr>
                    </tfoot>
                </table>
                <?php
            }
            ?>
        </div>
    </div>
</div>
</body>
</html>