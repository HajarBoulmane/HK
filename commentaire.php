<?php
require("connection.php");
$name=$_POST['firstname']." " .$_POST['lastname'];
$email=$_POST['email'];
$commentaire=$_POST['commentaire'];
$date=date('Y-m-d');
$req="insert into commentaire (user,email,comment,date) values ('$name','$email','$commentaire','$date')";
if($con->query($req)){
    echo"<script>alert('Merci pour votre commentaire');history.go(-1);</script>";
}

?>