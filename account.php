<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Asap:wght@100&family=Cutive+Mono&family=Darker+Grotesque:wght@300&family=Gruppo&family=Lilita+One&family=Rajdhani:wght@300&display=swap"
        rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>
    <script src="https://kit.fontawesome.com/48e236d0cb.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Italianno&family=La+Belle+Aurore&family=Libre+Franklin:wght@100&family=Monsieur+La+Doulaise&family=Moon+Dance&family=Parisienne&family=Tajawal:wght@200&family=Tangerine&display=swap"
        rel="stylesheet">
    <link href="css/account.css " rel="stylesheet">
    <title>H&K-Morocco</title>
</head>

<body>
    <?php
session_start();
if(!isset($_SESSION['idclient'])){
    header('location:signup.php');
    }
?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-2 p-0 " style="width: 250px; ">
                <nav class="navbar navbar-expand-lg navbar-light ">
                    <div class="d-flex flex-column sidebar">
                        <ul class="navbar-nav flex-column">
                            <li class="nav-item">
                                <a href="account.php" class="logo text-white"><i class="fa fa-circle-user"></i></a>
                            </li>
                            <li class="nav-item sideitem">
                                <a class="nav-link text-dark  text-center tool " href="index.php">
                                    <i class="fa-solid fa-house icon"></i><b>Home</b></a>
                            </li>
                            <li class="nav-item sideitem">
                                <a class="nav-link text-dark  text-center tool " href="profil.php">
                                    <i class="fa fa-user icon"></i><b>Profil</b></a>
                            </li>
                            <li class="nav-item dropdown sideitem">
                                <a class="nav-link dropdown-toggle text-center text-dark tool" href="#"
                                    id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <b><i class="fa fa-light fa-cart-shopping"></i> Women </b>
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item"
                                            href=<?php echo "section.php?gender=women&category=coats" ?>>Coats</a></li>
                                    <li><a class="dropdown-item"
                                            href=<?php echo "section.php?gender=women&category=jackets" ?>>Jackets</a>
                                    </li>
                                    <li><a class="dropdown-item"
                                            href=<?php echo "section.php?gender=women&category=dresses" ?>>Dresses</a>
                                    </li>
                                    <li><a class="dropdown-item"
                                            href=<?php echo "section.php?gender=women&category=skirts" ?>>Skirts</a>
                                    </li>
                                    <li><a class="dropdown-item"
                                            href=<?php echo "section.php?gender=women&category=sweaters" ?>>Sweaters</a>
                                    </li>
                                    <li><a class="dropdown-item"
                                            href=<?php echo "section.php?gender=women&category=hoodies" ?>>Hoodies</a>
                                    </li>
                                    <li><a class="dropdown-item"
                                            href=<?php echo "section.php?gender=women&category=accessories" ?>>Accessories</a>
                                    </li>
                                    <li><a class="dropdown-item"
                                            href=<?php echo "section.php?gender=women&category=shoes" ?>>Shoes</a></li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown sideitem">
                                <a class="nav-link dropdown-toggle tool text-center text-dark" href="#"
                                    id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <b> <i class="fa fa-light fa-cart-shopping"></i>Men </b>
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item"
                                            href=<?php echo "section.php?gender=men&category=blazers" ?>>Blazers</a>
                                    </li>
                                    <li><a class="dropdown-item"
                                            href=<?php echo "section.php?gender=men&category=jackets" ?>>Jackets</a>
                                    </li>
                                    <li><a class="dropdown-item"
                                            href=<?php echo "section.php?gender=men&category=accessories" ?>>Accessories</a>
                                    </li>
                                    <li><a class="dropdown-item"
                                            href=<?php echo "section.php?gender=men&category=pants" ?>>Pants</a></li>
                                    <li><a class="dropdown-item"
                                            href=<?php echo "section.php?gender=men&category=shirts" ?>>Shirts</a></li>
                                    <li><a class="dropdown-item"
                                            href=<?php echo "section.php?gender=men&category=sweaters" ?>>Sweaters</a>
                                    </li>
                                    <li><a class="dropdown-item"
                                            href=<?php echo "section.php?gender=men&category=hoodies" ?>>Hoodies</a>
                                    </li>
                                    <li><a class="dropdown-item"
                                            href=<?php echo "section.php?gender=men&category=shoes" ?>>Shoes</a></li>
                                </ul>
                            </li>
                            <li class="nav-item sideitem ">
                                <a class="nav-link text-dark  text-center tool " href="facture.php">
                                    <b>Invoice</b></a>
                            </li>
                            <li class="nav-item sideitem logout">
                                <a class="nav-link text-dark  text-center tool " href="logout.php">
                                    <b>Log Out</b></a>
                            </li>
                        </ul>
                    </div>
                </nav>

            </div>
            <div class="col-lg-9 main">
                <div class="blogs">
                    <button class="btn" type="button">
                        <strong>Your Product</strong>
                        <div id="container-stars">
                            <div id="stars"></div>
                        </div>

                        <div id="glow">
                            <div class="circle"></div>
                            <div class="circle"></div>
                        </div>
                    </button>
                    <table>
                        <thead>
                            <tr>
                                <th>Produit</th>
                                <th>Commande</th>
                                <th>Quantite</th>
                                <th>size</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                require('connection.php');
                        $idclient=$_SESSION['idclient'];
                        $req1 = "SELECT * FROM commande where idclient=$idclient";
                        $res1 = $con->query($req1);
                        while($row1= $res1->fetch_assoc()){
                        $idpanier=$row1['idpanier'];
                        $idcommande=$row1['numcmd'];
                        $req2 = "SELECT * FROM panier where id=$idpanier";
                        $res2= $con->query($req2);
                        while ($row2= $res2->fetch_assoc()) {
                        $quantite = $row2['quantite'];
                        $size = $row2['size'];
                        $idproduit = $row2['id_produit'];
                        $req3="select * from produit where id=$idproduit";
                        $res3=$con->query($req3);
                        $row3=$res3->fetch_assoc();
                        $image=$row3['image'];
                        echo '<tr>
                            <td class="title"><img src='.$image.' class="imgblog"></td>
                            <td class="text-center">'.$idcommande.'</td>
                            <td class="text-center">'.$quantite.'</td>
                            <td class="theme text-center">'.$size.'</td>
                            <td><a href="modifypro-cl.php?idproduit='.$idproduit.'&idpanier='.$idpanier.'"><button class="btnedit">Edit</button></a></td>
                            <td><a href="delpro-cl.php?idproduit='.$idproduit.'&idpanier='.$idpanier.'"><button class="btndelete">Delete</button></a></td>
                        </tr>';
                        }}
                ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>



</body>

</html>