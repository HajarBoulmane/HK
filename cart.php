<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>
    <script src="https://kit.fontawesome.com/48e236d0cb.js" crossorigin="anonymous"></script>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=GFS+Didot&family=Julius+Sans+One&family=Lustria&family=Sofia+Sans+Condensed:wght@1&display=swap"
        rel="stylesheet">
    <link href="css/cart.css" rel="stylesheet">
    <title>H&k-Morocco</title>
</head>

<body>
    <?php 
        session_start();
        ?>

    <div class="offcanvas offcanvas-start" id="demo">
        <div class="offcanvas-header">
            <h1 class="offcanvas-title">
                <a class="navbar-brand" href="index.php">
                    <img src="images/logo.png" alt="logo" width="100px" height="30px">
                </a>
            </h1>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas"></button>
        </div>
        <div class="offcanvas-body">
            <div class="container mt-3 canvalist">
                <ul class="list-unstyled">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Women
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="section.php?gender=women&category=coats">Coats</a></li>
                            <li><a class="dropdown-item" href="section.php?gender=women&category=jackets">Jackets</a>
                            </li>
                            <li><a class="dropdown-item" href="section.php?gender=women&category=dresses">Dresses</a>
                            </li>
                            <li><a class="dropdown-item" href="section.php?gender=women&category=skirts">Skirts</a></li>
                            <li><a class="dropdown-item" href="section.php?gender=women&category=sweaters">Sweaters</a>
                            </li>
                            <li><a class="dropdown-item" href="section.php?gender=women&category=hoodies">Hoodies</a>
                            </li>
                            <li><a class="dropdown-item"
                                    href="section.php?gender=women&category=accessories">Accessories</a></li>
                            <li><a class="dropdown-item" href="section.php?gender=women&category=shoes">Shoes</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown2" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Men
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown2">
                            <li><a class="dropdown-item" href="section.php?gender=men&category=blazers">Blazers</a></li>
                            <li><a class="dropdown-item" href="section.php?gender=men&category=jackets">Jackets</a></li>
                            <li><a class="dropdown-item"
                                    href="section.php?gender=men&category=accessories">Accessories</a>
                            </li>
                            <li><a class="dropdown-item" href="section.php?gender=men&category=pants">Pants</a></li>
                            <li><a class="dropdown-item" href="section.php?gender=men&category=shirts">Shirts</a></li>
                            <li><a class="dropdown-item" href="section.php?gender=men&category=sweaters">Sweaters</a>
                            </li>
                            <li><a class="dropdown-item" href="section.php?gender=men&category=hoodies">Hoodies</a></li>
                            <li><a class="dropdown-item" href="section.php?gender=men&category=shoes">Shoes</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <nav class="navbar navbar-expand-sm">
        <div class="container-fluid ">
            <ul class="navbar-nav">
                <div class="menu">
                    <li class="nav-item ">
                        <button class="btn " type="button" data-bs-toggle="offcanvas" data-bs-target="#demo">
                            <i class="fas fa-bars"></i>
                            Menu
                        </button>
                    </li>
                </div>
                <div class="logo">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">
                            <img src="images/logo.png" alt="logo" width="100px" height="30px">
                        </a>
                    </li>
                </div>
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="cart.php"><i class="fa fa-cart-shopping"></i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="fa fa-user"></i></a>
                </li>
            </ul>
        </div>
    </nav>
    <?php
require('connection.php');
$req="select count(*) as nb from panier";
$res=$con->query($req);
$row=$res->fetch_assoc();
$code=$row['nb']+1;

$size=$_POST['size'];
$quantite=$_POST['quantite'];
$idproduit=$_SESSION['idproduit'];
if (isset($_SESSION['idcart'])){
    $idcart=$_SESSION['idcart'];
    $req1="insert into panier values($idcart,$idproduit,$quantite,'$size')";
}
else{
    $_SESSION['idcart']=$code;
    $idcart=$_SESSION['idcart'];
    $req1="insert into panier values($idcart,$idproduit,$quantite,'$size')";

}

$con->query($req1);

?>
    <?php
$req1 = "SELECT * FROM panier WHERE id = $idcart";
$res1 = $con->query($req1);

echo "<div class='cart-container'>";

while ($row1 = $res1->fetch_assoc()) {
    $idproduit = $row1['id_produit'];
    $req2 = "SELECT * FROM produit WHERE id = $idproduit";
    $res2 = $con->query($req2);

    while ($row2 = $res2->fetch_assoc()) {
        echo "
        <div class='cart-item'>
          <div class='card'>
            <img class='card-img-top' src='" . $row2['image'] . "' alt='" . $row2['description'] . "'>
            <div class='card-body'>
              <h5 class='card-title'>" . $row2['description'] . "</h5>
              <p class='card-text'>" . $row2['category'] . "</p>
              <p class='card-price'>" . $row2['price'] . "DH</p>
              <a href='product.php?id=" . $row2['id'] . "'>
                <button type='button' class='button'>
                  <strong>View Product</strong>
                  <div id='container-stars'>
                    <div id='stars'></div>
                  </div>
                  <div id='glow'>
                    <div class='circle'></div>
                    <div class='circle'></div>
                  </div>
                </button>
              </a>
            </div>
          </div>
        </div>";
    }
}
echo"</div>";
?>
        <a href="valider.php"><button class="btnvalider">valider</button></a>
 
    <footer>
        <div class="container p-4 ">
            <div class="row">
                <div class="col-lg-4 col-md-6 mb-4 mb-md-0">
                    <h4>Shop</h4>
                    <br>
                    <p>Women</p>
                    <p>Men</p>
                    <p>Trend</p>
                </div>
                <div class="col-lg-4 col-md-6 mb-4 mb-md-0">
                    <h4>Help</h4>
                    <br>
                    <p>My Account</p>
                    <p>Product</p>
                    <p>Payment</p>
                </div>
                <div class="col-lg-4 col-md-6 mb-4 mb-md-0">
                    <h4>Contact</h4>
                    <br>
                    <p><i class="fa-brands fa-facebook-f footer-link"></i> H&K_clothing</p>
                    <p><i class="fa-brands fa-instagram footer-link"></i> H&K_clothing</p>
                    <p><i class="fa-solid fa-envelope footer-link"></i> H&K_Morocco@gmail.com</p>
                </div>
            </div>
        </div>
    </footer>
</body>

</html>