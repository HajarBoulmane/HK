<?php
include('connection.php');
$idproduit=$_GET['idproduit'];
$idpanier=$_GET['idpanier'];
$req="delete from panier where id_produit=$idproduit and id=$idpanier";
if($con->query($req)){
    echo"<script>alert('delete successfully');history.go(-1);</script>";
}
else{
    echo"<script>alert('delete unsuccessfully');history.go(-1);</script>";
}


?>