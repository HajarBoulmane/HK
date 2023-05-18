<?php
include('connection.php');

if(isset($_SESSION['idclient'])){
    $idclient = $_SESSION['idclient'];
    $idcart=$_SESSION['idcart'];
    $req="insert into commande values('$idclient',getdate(),$idcart)";
    $con->query($req);
}

?>