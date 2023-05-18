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
    <link href="css/product.css" rel="stylesheet">
    <title>H&k-Morocco</title>
</head>

<body>
    <?php 
        session_start();
        ?>
    <header>
        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.php">
                    <img src="images/logo.png" alt="logo" width="100px" height="30px">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Women
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item"
                                        href=<?php echo "products.php?gender=women&category=coats" ?>>Coats</a></li>
                                <li><a class="dropdown-item"
                                        href=<?php echo "products.php?gender=women&category=jackets" ?>>Jackets</a></li>
                                <li><a class="dropdown-item"
                                        href=<?php echo "products.php?gender=women&category=dresses" ?>>Dresses</a></li>
                                <li><a class="dropdown-item"
                                        href=<?php echo "products.php?gender=women&category=skirts" ?>>Skirts</a></li>
                                <li><a class="dropdown-item"
                                        href=<?php echo "products.php?gender=women&category=sweaters" ?>>Sweaters</a>
                                </li>
                                <li><a class="dropdown-item"
                                        href=<?php echo "products.php?gender=women&category=hoodies" ?>>Hoodies</a></li>
                                <li><a class="dropdown-item"
                                        href=<?php echo "products.php?gender=women&category=accessories" ?>>Accessories</a>
                                </li>
                                <li><a class="dropdown-item"
                                        href=<?php echo "products.php?gender=women&category=shoes" ?>>Shoes</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Men
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item"
                                        href=<?php echo "products.php?gender=men&category=blazers" ?>>Blazers</a></li>
                                <li><a class="dropdown-item"
                                        href=<?php echo "products.php?gender=men&category=jackets" ?>>Jackets</a></li>
                                <li><a class="dropdown-item"
                                        href=<?php echo "products.php?gender=men&category=accessories" ?>>Accessories</a>
                                </li>
                                <li><a class="dropdown-item"
                                        href=<?php echo "products.php?gender=men&category=pants" ?>>Pants</a></li>
                                <li><a class="dropdown-item"
                                        href=<?php echo "products.php?gender=men&category=shirts" ?>>Shirts</a></li>
                                <li><a class="dropdown-item"
                                        href=<?php echo "products.php?gender=men&category=sweaters" ?>>Sweaters</a></li>
                                <li><a class="dropdown-item"
                                        href=<?php echo "products.php?gender=men&category=hoodies" ?>>Hoodies</a></li>
                                <li><a class="dropdown-item"
                                        href=<?php echo "products.php?gender=men&category=shoes" ?>>Shoes</a></li>
                            </ul>
                        </li>

                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">About</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

    </header>
    <?php
    
  require('connection.php');
  $idproduit=$_GET['id'];
  $_SESSION['idproduit']=$idproduit;
  $req="select * from produit where id=$idproduit";
  $res=$con->query($req);
  $product=$res->fetch_assoc();
?>
    <form action="cart.php" method="post">
        <div class="wrapper">
            <div class="image-section">
                <img src="<?php echo $product['image']; ?>" height="420" width="450">
            </div>
            <div class="card-section">
                <div class="card">
                    <div class="description">
                        <h3><i><?php echo $product['description']; ?></i></h3>
                        <p><?php echo $product['desc_detailed']; ?></p>
                    </div>
                    <div class="price">
                        <p><span>$<?php echo $product['price']; ?></span></p>
                    </div>
                    <label>choose size:</label>
                    <select name="size" class="size" class="input">
                        <option value="s">S</option>
                        <option value="xs">XS</option>
                        <option value="xl">XL</option>
                        <option value="l">L</option>
                    </select></br>
                    <label>Choose Quantity</label>
                    <input type="text" name="quantite" class="input">
                    </br>
                    <input type="submit"  value="Place in cart" >
                    <button><a href="cart.php"></a></button>
    </form>
    </div>
    </div>
    </div>

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