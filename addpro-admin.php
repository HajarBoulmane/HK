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
    <link href="css/edit.css " rel="stylesheet">
    <title>DAILYBLOG</title>
</head>

<body>
    <?php
session_start();
if(!isset($_SESSION['idadmin'])){
header('location:index.php');
}

?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-2 p-0 " style="width: 300px; ">
                <nav class="navbar navbar-expand-lg navbar-light ">
                    <div class="d-flex flex-column sidebar">
                        <ul class="navbar-nav flex-column">
                            <li class="nav-item">
                                <a href="account.php" class="logo text-white text-center">Admin Panel</a>
                            </li>
                            <li class="nav-item sideitem">
                                <a class="nav-link text-dark  text-center tool " href="admin.php">
                                    <i class="fa-solid fa-house icon"></i></i><b>Home</b></a>
                            </li>
                            <li class="nav-item sideitem">
                                <a class="nav-link text-dark  text-center tool " href="admin.php">
                                    <i class="fa fa-bag-shopping icon"></i><b>list of Commands</b></a>
                            </li>
                            <li class="nav-item sideitem">
                                <a class="nav-link text-dark  text-center tool " href="feedback.php">
                                    <i class="fa-sharp fa-regular fa-comments icon"></i><b>Client's Feedback</b></a>
                            </li>
                            <li class="nav-item sideitem">
                                <a class="nav-link text-dark  text-center tool " href="product-list.php">
                                    <i class="fa fa-light fa-cart-shopping icon"></i><b>List of Products</b></a>
                            </li>
                            <li class="nav-item sideitem">
                                <a class="nav-link text-dark  text-center tool " href="users-list.php">
                                    <i class="fa fa-circle-user icon"></i><b>List of Users</b></a>
                            </li>
                            <li class="nav-item sideitem">
                                <a class="nav-link text-dark  text-center tool " href="logout.php">
                                    <b>Log Out</b></a>
                            </li>
                        </ul>
                    </div>
                </nav>

            </div>
            <div class="col-lg-9 main">
                <div class="blogs">
                    <h1 class="text-center" style="margin-bottom:30px;">Add Product</h1>
                    <div class="col-lg-6 main">
                        <div class="product">
                            <form action="addpro.php" method="post">
                                <table>
                                    <tr>
                                        <td><label>ID</label></td>
                                    </tr>
                                    <tr>
                                        <td><input type="text" name="id" required class="input"></td>
                                    </tr>
                                    <tr>
                                        <td><label>Description</label></td>
                                    </tr>
                                    <tr>
                                        <td><input type="text" name="description" required class="input"></td>
                                    </tr>
                                    <tr>
                                        <td><label>Category</label></td>
                                    </tr>
                                    <tr>
                                        <td><input type="text" name="category" required class="input"></td>
                                    </tr>
                                    <tr>
                                        <td><label>Price</label></td>
                                    </tr>
                                    <tr>
                                        <td><input type="text" name="price" required class="input"></td>
                                    </tr>
                                    <tr>
                                        <td><label>Detailed_description</label></td>
                                    </tr>
                                    <tr>
                                        <td><textarea type="text" name="desc_detailed" required
                                                class="textarea"></textarea></td>
                                    </tr>
                                    <tr>
                                        <td><label>Gender</label></td>
                                    </tr>
                                    <tr>
                                        <td><input type="text" name="gender" required class="input"></td>
                                    </tr>
                                    <tr>
                                        <td><label>Quantite_stock</label></td>
                                    </tr>
                                    <tr>
                                        <td><input type="text" name="qtestock" required class="input"></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label for="image">Image</label>
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="image" name="image"
                                                    accept="image/.jpg,image/.jpeg,image/.png" required class="input">
                                                <label class="custom-file-label" for="image"></label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-right" colspan="2">
                                            <input type="submit" class="btn btnvalider" value="Add">
                                        </td>
                                    </tr>
                                </table>
                            </form>
                        </div>
                    </div>
                </div>
            </div>



</body>

</html>