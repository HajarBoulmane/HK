        <?php
        require('connection.php');
        session_start();
        $nom=$_POST['nom'];
        $prenom=$_POST['prenom'];
        $tel=$_POST['tel'];
        $adresse=$_POST['adresse'];
        $email=$_POST['email'];
        $username=$_POST['username'];
        $pswd1=$_POST['password1'];
        $pswd2=$_POST['password2'];
        $date=date('Y-m-d');
        if($pswd1===$pswd2){
            $req1="select * from client where  email='$email'";
            $res1=$con->query($req1);
            if($res1->num_rows >0){
                echo"<script>alert('Cet email existe déjà');history.go(-1);</script>";
            }
            else{
                $req2="insert into client (nom,prenom,adresse,tel,email,username,password,date_creation) values ('$nom','$prenom','$adresse','$tel','$email','$username','$pswd1','$date')";
                $con->query($req2);
                $req3="select * from client where  email='$email'";
                $res3=$con->query($req3);
                $row=$res3->fetch_assoc();
                $_SESSION['idclient']=$row['id'];
                header('location:cart.php');

            }
        }
        else{
            echo"<script>alert('Mot de passe invalide');history.go(-1);</script>";
        }



        ?>