
    <?php
    session_start();
require('connection.php');
$req="select count(*) as nb from panier";
$res=$con->query($req);
$row=$res->fetch_assoc();
$code=$row['nb']+1;

$size=$_POST['size'];
$quantite=$_POST['quantite'];
$idproduit=$_SESSION['idproduit'];
if (isset($_SESSION['idcart'])){
    $idcart=$_SESSION['idcart'];
    $req1="insert into panier values($idcart,$idproduit,$quantite,'$size')";
    header('location:cart.php');
}
else{
    $_SESSION['idcart']=$code;
    $idcart=$_SESSION['idcart'];
    $req1="insert into panier values($idcart,$idproduit,$quantite,'$size')";
    header('location:cart.php');
}

$con->query($req1);

?>