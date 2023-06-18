<?php
include('connection.php');
$idproduit=$_GET['idproduit'];
$req="delete from produit where id=$idproduit ";
if($con->query($req)){
    echo"<script>alert('deleted successfully');history.go(-1);</script>";
}
else{
    echo"<script>alert('deleted unsuccessfully');history.go(-1);</script>";
}


?>