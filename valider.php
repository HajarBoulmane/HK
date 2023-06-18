<?php
include('connection.php');
session_start();    
if(isset($_SESSION['idclient'])){
    $idclient = $_SESSION['idclient'];
    $idcart=$_SESSION['idcart'];
    $date=date('Y-m-d');
    $req="insert into commande (idclient,datecmd,idpanier) values('$idclient',$date,$idcart)";
    $con->query($req);
    echo"<script>alert('your command is up to date');history.go(-1);</script>";
}
else{
    header('location:signup.php');
}
?>