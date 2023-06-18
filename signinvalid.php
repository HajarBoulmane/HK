<?php
        require('connection.php');
        session_start();
        $email=$_POST['email'];
        $pswd=$_POST['password'];

            $req1="select * from client where  email='$email' and password='$pswd'";
            $res1=$con->query($req1);
            if($res1->num_rows >0){
                $row=$res1->fetch_assoc();
                $_SESSION['idclient']=$row['id'];
                header('location:cart.php');
            }
            else{
                echo"<script>alert('login ou mot de passe invalide');history.go(-1);</script>";

            }


        ?>