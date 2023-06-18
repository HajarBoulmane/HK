<?php
        require('connection.php');
        session_start();
        $id=$_POST['id'];
        $pswd=$_POST['password'];

            $req1="select * from admin where  id=$id and password='$pswd'";
            $res1=$con->query($req1);
            if($res1->num_rows >0){
                $row=$res1->fetch_assoc();
                $_SESSION['idadmin']=$row['id'];
                header('location:admin.php');
            }
            else{
                echo"<script>alert('login ou mot de passe invalide');history.go(-1);</script>";

            }




        ?>