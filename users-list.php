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
    <link href="css/users.css " rel="stylesheet">
    <title>DAILYBLOG</title>
</head>

<body>
    <?php
session_start();
if(!isset($_SESSION['idadmin'])){
header('location:index.php');
}

?>
   <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link text-white aria-current="page" href="admin.php"> <b>Home</b></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" aria-current="page" href="logout.php"> <b>logout</b></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
            </div>
            <div class="col-lg-9 main">
                <div class="blogs">
                    <h1 class="text-center" style="margin-bottom:30px;margin-left:270px;">List of Users</h1>
                    <table>
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Nom</th>
                                <th>Prenom</th>
                                <th>Adresse</th>
                                <th>Tel</th>
                                <th>Email</th>
                                <th>Username</th>
                                <th>Password</th>
                                <th>Date_creation</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                require('connection.php');
                        $req = "SELECT * FROM client";
                        $res = $con->query($req);
                        while ($row= $res->fetch_assoc()) {
                        $id = $row['id'];
                        $nom = $row['nom'];
                        $prenom = $row['prenom'];
                        $adresse = $row['adresse'];
                        $tel = $row['tel'];
                        $email= $row['email'];
                        $username=$row['username'];
                        $password=$row['password'];
                        $date_creation=$row['date_creation'];
                        echo '<tr>
                            <td class="text-center">'.$id.'</td>
                            <td class="text-center">'.$nom.'</td>
                            <td class="text-center">'.$prenom.'</td>
                            <td class="text-center">'.$adresse.'</td>
                            <td class="text-center">'.$tel.'</td>
                            <td class="text-center">'.$email.'</td>
                            <td class="text-center">'.$username.'</td>
                            <td class=" text-center">'.$password.'</td>
                            <td class=" text-center">'.$date_creation.'</td>
                            <td><a href="editcommande.php?idproduit='.$id.'"><button class="btnedit">Edit</button></a></td>
                            <td><a href="deletecommande.php?idproduit='.$id.'"><button class="btndelete">Delete</button></a></td>
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