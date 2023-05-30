<!doctype html>
<html lang="en">
<head>
    <title>Admin</title>
</head>
<body>

<div class="container py-2">
    <?php
        if(!isset($_SESSION['client'])){
            header('location: login.php');
        }
    ?>

        <script> alert ("Bonjour <?php echo $_SESSION['client']['username'] ?>")</script>
</div>

</body>
</html>