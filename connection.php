<?php
$server="localhost";
$user="root";
$password="";
$bd="pfe";
$con=new mysqli($server,$user,$password,$bd);
if ($con->connect_error)
die("connection failed ".$con->connect_error);
?>