<?php
              require('connection.php');
                $id=$_POST['id'];
                $image='images/'.$_POST['image'];
                $description = $_POST['description'];
                $desc_detailed = $_POST['desc_detailed'];
                $category = $_POST['category'];
                $price = $_POST['price'];
                $gender = $_POST['gender'];
                $qtestock = $_POST['qtestock'];

                $req= "insert into produit values ($id,'$description','$category',$price,'$gender','$image','$desc_detailed',$qtestock)";
               
                if( $con->query($req)){
                  echo"<script>alert('added successfully');history.go(-1);</script>";
                }
                else{
                echo"<script>alert('added unsuccessfuly'); history.go(-1);</script>";
                }
              ?>