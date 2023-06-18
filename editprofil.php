<?php
    require('connection.php');
    session_start();
    $id = $_SESSION['idclient'];
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $adresse=$_POST['adresse'];
    $tel = $_POST['tel'];
    $username = $_POST['username'];
    $pswd1 = $_POST['password1'];
    $pswd2 = $_POST['password2'];
    
    if ($pswd1 === $pswd2) {
        $req = "UPDATE client SET nom='$nom',adresse='$adresse',prenom='$prenom', tel=$tel, username='$username', password='$pswd1' WHERE id=$id";
        $con->query($req);
        echo "<script>alert('Modified successfully'); history.go(-1);</script>";
    } else {
        echo "<script>alert('Mot de passe invalide'); history.go(-1);</script>";
    }
?>
