<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Asap:wght@100&family=Cutive+Mono&family=Darker+Grotesque:wght@300&family=Gruppo&family=Lilita+One&family=Rajdhani:wght@300&display=swap"
        rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>
    <script src="https://kit.fontawesome.com/48e236d0cb.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Italianno&family=La+Belle+Aurore&family=Libre+Franklin:wght@100&family=Monsieur+La+Doulaise&family=Moon+Dance&family=Parisienne&family=Tajawal:wght@200&family=Tangerine&display=swap"
        rel="stylesheet">
    <link href="css/admin.css " rel="stylesheet">
    <title>DAILYBLOG</title>
</head>

<body>
    <?php
session_start();
if(!isset($_SESSION['idadmin'])){
header('location:index.php');
}

?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-2 p-0 " style="width: 300px; ">
                <nav class="navbar navbar-expand-lg navbar-light ">
                    <div class="d-flex flex-column sidebar">
                        <ul class="navbar-nav flex-column">
                            <li class="nav-item">
                                <a href="account.php" class="logo text-white text-center">Admin Panel</a>
                            </li>
                            <li class="nav-item sideitem">
                                <a class="nav-link text-dark  text-center tool " href="addpro-admin.php">
                                    <i class="fa-solid fa-house icon"></i></i><b>Add Product</b></a>
                            </li>
                            <li class="nav-item sideitem">
                                <a class="nav-link text-dark  text-center tool " href="feedback.php">
                                    <i class="fa-sharp fa-regular fa-comments icon"></i><b>Client's Feedback</b></a>
                            </li>
                            <li class="nav-item sideitem">
                                <a class="nav-link text-dark  text-center tool " href="product-list.php">
                                    <i class="fa fa-light fa-cart-shopping icon"></i><b>List of Products</b></a>
                            </li>
                            <li class="nav-item sideitem">
                                <a class="nav-link text-dark  text-center tool " href="product-list.php">
                                    <i class="fa fa-light fa-cart-shopping icon"></i><b>List of Products</b></a>
                            </li>
                            <li class="nav-item sideitem">
                                <a class="nav-link text-dark  text-center tool " href="users-list.php">
                                    <i class="fa fa-circle-user icon"></i><b>List of Users</b></a>
                            </li>
                            <li class="nav-item sideitem">
                                <a class="nav-link text-dark  text-center tool " href="logout.php">
                                    <b>Log Out</b></a>
                            </li>
                        </ul>
                    </div>
                </nav>

            </div>
            <div class="col-lg-9 main">
                <div class="product">
                    <h1 class="text-center" style="margin-bottom:30px;margin-right:140px;">List of commands</h1>
                    <table>
                        <thead>
                            <tr>
                                <th>Produit</th>
                                <th>Commande</th>
                                <th>Idpanier</th>
                                <th>Quantite</th>
                                <th>size</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                require('connection.php');
                        $req1 = "SELECT * FROM commande";
                        $res1 = $con->query($req1);
                        if($row1= $res1->fetch_assoc()){
                        $idpanier=$row1['idpanier'];
                        $idcommande=$row1['numcmd'];
                        $req2 = "SELECT * FROM panier where id=$idpanier";
                        $res2= $con->query($req2);
                        while ($row2= $res2->fetch_assoc()) {
                        $quantite = $row2['quantite'];
                        $size = $row2['size'];
                        $idproduit = $row2['id_produit'];
                        $req3="select * from produit where id=$idproduit";
                        $res3=$con->query($req3);
                        $row3=$res3->fetch_assoc();
                        $image=$row3['image'];
                        echo '<tr>
                            <td class="title"><img src='.$image.' class="imgproduct"></td>
                            <td class="text-center">'.$idcommande.'</td>
                            <td class="text-center">'.$idpanier.'</td>
                            <td class="text-center">'.$quantite.'</td>
                            <td class="theme text-center">'.$size.'</td>
                            <td><a href="delcmd-admin.php?idproduit='.$idproduit.'&idpanier='.$idpanier.'"><button class="btndelete">Delete</button></a></td>
                        </tr>';
                        }}
                ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>



</body>

</html>