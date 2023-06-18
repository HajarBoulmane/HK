<?php
require('connection.php');
 $id=$_POST['id'];
 $description=$_POST['description'];
 $desc_detailed=$_POST['desc_detailed'];
 $gender=$_POST['gender'];
 $price=$_POST['price'];
 $image=$_POST['image'];
 $quantite_stock=$_POST['quantite_stock'];
 $category=$_POST['category'];

 $req = "UPDATE produit SET description='$description', gender='$gender', price=$price, image='images/$image', quantite_stock='$quantite_stock' WHERE id=$id";
 if($con->query($req)){
    echo"<script>alert('updated successfully');history.go(-1);</script>";
}
else{
    echo"<script>alert('updated unsuccessfully');history.go(-1);</script>";

}



                        ?>