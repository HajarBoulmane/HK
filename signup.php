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
    <link href="css/signup.css" rel="stylesheet">
    <title>signup</title>
   
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
        <?php

include 'connection.php';

// Initialize variables
$errors = [];

// Register user
if (isset($_POST['signup'])) {
    // Receive all input values from the form
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $adresse = $_POST['adresse'];
    $telephone = $_POST['telephone'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password_1 = $_POST['password_1'];
    $password_2 = $_POST['password_2'];
    $date_created = date("Y-m-d");

    // First, check the database to make sure
    // a user does not already exist with the same username and/or email
    $stmt = $con->prepare("SELECT * FROM client WHERE username=? OR email=? LIMIT 1");
    $stmt->bind_param("ss", $username, $email);
    $stmt->execute();
    $result = $stmt->get_result();
    $user = $result->fetch_assoc();
    $stmt->close();

    if ($user) { // If user exists
        if ($user['username'] === $username) {
            echo "<script>alert('Username already exists')</script>";
        }

        if ($user['email'] === $email) {
            echo "<script>alert('Email already exists')</script>";
        }
    } else {
        
       if ($password_1 !== $password_2) {
            echo "<script>alert('The passwords do not match')</script>";
        } else {
            // Finally, register the user if there are no errors in the form
           $hashed_password = password_hash($password_1, PASSWORD_DEFAULT);

            $stmt = $con->prepare("INSERT INTO client (nom, prenom, adresse, telephone, email, username, password, date_creation) 
                VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
            $stmt->bind_param("ssssssss", $firstname, $lastname, $adresse, $telephone, $email, $username, $hashed_password, $date_created);
            $stmt->execute();
            $stmt->close();

            session_start();
            $_SESSION['username'] = $username;
            
            header('location: index.php');
            exit();
        }
    }
}

?>



    </header>
    <form class="form">
    <img src="images/logo.png" alt="">
    <p class="message">Signup now and get full access to our app. </p>
        <div class="flex" >
        <label>
            <input required="" name="prenom" type="text" class="input">
            <span>Firstname</span>
        </label>

        <label>
            <input required="" name="nom" type="text" class="input">
            <span>Lastname</span>
        </label>
    </div>  
    <label>
            <input required="" name="adresse" type="text" class="input">
            <span>adresse</span>
        </label>
        <label>
            <input required="" name="telephone" type="text" class="input">
            <span>telephone</span>
        </label>
            
    <label>
        <input required="" name="email" type="email" class="input">
        <span>Email</span>
    </label> 
    <label>
            <input required="" name="username" type="text" class="input">
            <span>username</span>
        </label>
        
    <label>
        <input required="" name="password_1" type="password" class="input">
        <span>Password</span>
    </label>
    <label>
        <input required="" name="password_2" type="password" class="input">
        <span>re-enter your Password</span>
    </label>
    
    <button class="submit" name="signup">Submit</button>
    <p class="signin">Already have an acount ? <a href="login.php">Signin</a> </p>
</form>
</body>
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
</html>