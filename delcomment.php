<?php
include('connection.php');
$idcomment=$_GET['idcomment'];
$req="delete from commentaire where id=$idcomment ";
if($con->query($req)){
    echo"<script>alert('deleted successfully');history.go(-1);</script>";
}
else{
    echo"<script>alert('deleted unsuccessfully');history.go(-1);</script>";
}


?>