<?php
include('connection.php');
session_start();
$size=$_POST['size'];
$quantite=$_POST['quantite'];
$idproduit=$_SESSION['idproduit'];
$idpanier=$_SESSION['idpanier'];
$req = "UPDATE panier SET size='$size', quantite=$quantite WHERE id_produit=$idproduit AND id=$idpanier";
if($con->query($req)){
    echo"<script>alert('modified successfully');history.go(-1);</script>";
}
else{
    echo"<script>alert('modified unsuccessfully');history.go(-1);</script>";
}


?>