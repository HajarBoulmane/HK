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
    <link href="css/aboutus.css" rel="stylesheet">
    <title>H&k-Morocco</title>
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
                            
                <a class="nav-link" href="login.php"><i class="fa fa-user"></i></a>
            </li>   
                    </ul>
                </div>
            </div>
        </nav>

    </header>

    <div class="image-container ">
        <img src="images/imag1.jpg" alt="fashion Image">
        <div class="image-content ">
            <br>
            <br>
            <p class="style-font">
            </p>
            
        </div>
    </div>

    <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">

                <img src="images/imag2.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
            <div class="paragraph">
                <p>H&K is a popular e-commerce site catering to fashion-conscious people looking for stylish clothing and accessories.
                     H&K offers a wide range of trendy and high-quality products,
                      providing fashion lovers with an unparalleled shopping experience.</p>
            </div>
        </div>
            </div>

            <div class="carousel-item">
                <img src="images/imag3.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block " style="color:black" font-size="20px" >
                <div class="paragraph2">
                    <p>At H&K, customers can browse a diverse collection of apparel including tops, bottoms, dresses, outerwear and more.
                     The site showcases the latest fashion trends so customers can stay ahead of the curve when it comes to style. 
                     From casual wear to formal wear,
                     H&K is your one stop shop for all your fashion needs, with items for every occasion.</p>
                    </div>
            </div>
            <div class="carousel-item">
                <img src="images/imag4.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block " style="color:black" font-size="20px" >
                <div class="paragraph3">
                    <p>H&K places a strong emphasis on customer satisfaction and aims to provide exceptional service
                    . They offer various convenient features, such as secure online payments,
                     flexible return policies, and efficient shipping options,
                      ensuring a seamless and enjoyable shopping experience. 
                      Additionally, H&K provides personalized recommendations based on customers' preferences
                       and browsing history, making it easier for them to discover 
                       new and exciting fashion choices.</p>
            </div>

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