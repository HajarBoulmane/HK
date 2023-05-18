<?php

include('connection.php');
$req="select count(*) as nb from panier";
$res=$con->query($req);
$row=$res->fetch_assoc();
$code=$row['nb']+1;


?>