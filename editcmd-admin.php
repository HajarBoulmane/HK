<?php
include('connection.php');
$idproduit=$_GET['idproduit'];
$idpanier=$_GET['idpanier'];
$req="update panier set =$idproduit and id=$idpanier";
if($con->query($req)){
    echo"<script>alert('delete successfully');history.go(-1);</script>";
}
else{
    echo"<script>alert('delete unsuccessfully');history.go(-1);</script>";
}


?>