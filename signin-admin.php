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
    <link href="css/login.css" rel="stylesheet">
    <title>sign-in</title>

</head>

<body>
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
                            <a class="nav-link" aria-current="page" href="#"> <b>Home</b></a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                <b> Women </b>
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item"
                                        href=<?php echo "section.php?gender=women&category=coats" ?>>Coats</a></li>
                                <li><a class="dropdown-item"
                                        href=<?php echo "section.php?gender=women&category=jackets" ?>>Jackets</a></li>
                                <li><a class="dropdown-item"
                                        href=<?php echo "section.php?gender=women&category=dresses" ?>>Dresses</a></li>
                                <li><a class="dropdown-item"
                                        href=<?php echo "section.php?gender=women&category=skirts" ?>>Skirts</a></li>
                                <li><a class="dropdown-item"
                                        href=<?php echo "section.php?gender=women&category=sweaters" ?>>Sweaters</a>
                                </li>
                                <li><a class="dropdown-item"
                                        href=<?php echo "section.php?gender=women&category=hoodies" ?>>Hoodies</a></li>
                                <li><a class="dropdown-item"
                                        href=<?php echo "section.php?gender=women&category=accessories" ?>>Accessories</a>
                                </li>
                                <li><a class="dropdown-item"
                                        href=<?php echo "section.php?gender=women&category=shoes" ?>>Shoes</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                <b> Men </b>
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item"
                                        href=<?php echo "section.php?gender=men&category=blazers" ?>>Blazers</a></li>
                                <li><a class="dropdown-item"
                                        href=<?php echo "section.php?gender=men&category=jackets" ?>>Jackets</a></li>
                                <li><a class="dropdown-item"
                                        href=<?php echo "section.php?gender=men&category=accessories" ?>>Accessories</a>
                                </li>
                                <li><a class="dropdown-item"
                                        href=<?php echo "section.php?gender=men&category=pants" ?>>Pants</a></li>
                                <li><a class="dropdown-item"
                                        href=<?php echo "section.php?gender=men&category=shirts" ?>>Shirts</a></li>
                                <li><a class="dropdown-item"
                                        href=<?php echo "section.php?gender=men&category=sweaters" ?>>Sweaters</a></li>
                                <li><a class="dropdown-item"
                                        href=<?php echo "section.php?gender=men&category=hoodies" ?>>Hoodies</a></li>
                                <li><a class="dropdown-item"
                                        href=<?php echo "section.php?gender=men&category=shoes" ?>>Shoes</a></li>
                            </ul>
                        </li>

                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="aboutus.php"> <b>About </b></a>
                        </li>

                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <form class="form" method="post" action="validadmin.php">
        <img src="images/logo.png" alt="logo" class="logo">
        <label>
            <input required="" placeholder="" type="id" class="input" required name="id">
            <span>Id</span>
        </label>

        <label>
            <input required="" placeholder="" type="password" class="input" required name="password">
            <span>Password</span>
        </label>

        <input class="submit" type="submit" value="Submit">
    </form>
</body>
<footer>
    <div class="container p-4 ">
        <div class="row">
            <div class="col-lg-4 col-md-6 mb-4 mb-md-0">
                <h4>Shop</h4>
                <br>
                <a href="index.php" class="link">Women</a>
                <br>
                <a href="indexx.php" class="link">Men</a>
            </div>
            <div class="col-lg-4 col-md-6 mb-4 mb-md-0">
                <h4>Help</h4>
                <br>
                <a href="login.php" class="link">My Account</a>
                <br>
                <a href="payement.php" class="link">Payment</a>
            </div>
            <div class="col-lg-4 col-md-6 mb-4 mb-md-0">
                <h4>Contact</h4>
                <br>
                <a href="#" class="link"><i class="fa-brands fa-facebook-f footer-link fb"></i> H&K_clothing</a><br>
                <a href="#" class="link"><i class="fa-brands fa-instagram footer-link insta"></i> H&K_clothing</a><br>
                <a href="#" class="link"><i class="fa-solid fa-envelope footer-link gg"></i> H&K_Morocco@gmail.com</a>
            </div>
        </div>
    </div>
</footer>

</html>