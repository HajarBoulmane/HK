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
    <link href="css/feed.css " rel="stylesheet">
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
                    <h1 class="text-center" style="margin-bottom:30px;">Feedbacks</h1>
                    <table>
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>User</th>
                                <th>Email</th>
                                <th>Comment</th>
                                <th>Date</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                require('connection.php');
                        $req = "SELECT * FROM commentaire";
                        $res = $con->query($req);
                        while ($row= $res->fetch_assoc()) {
                        $id = $row['id'];
                        $user = $row['user'];
                        $email = $row['email'];
                        $comment= $row['comment'];
                        $date = $row['date'];
                        echo '<tr>
                            <td class="text-center">'.$id.'</td>
                            <td class="text-center">'.$user.'</td>
                            <td class="text-center">'.$email.'</td>
                            <td class="text-center">'.$comment.'</td>
                            <td class="text-center">'.$date.'</td>
                            <td><a href="delcomment.php?idcomment='.$id.'"><button class="btndelete">Delete</button></a></td>
                        </tr>';
                        }
                ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>



</body>

</html>