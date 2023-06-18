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
    <link href="css/facture.css " rel="stylesheet">
    <title>H&K-Morocco</title>
</head>

<body>
    <?php
    session_start();
    require('connection.php');
  if(!$_SESSION['idclient']){
    header('location:index.php');
  }
  else{
    $idclient=$_SESSION['idclient'];
  }
  ?>
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <a class="navbar-brand " href="index.php">
                <h2 class="logo"><i class="fa fa-cart-shopping icon"></i>Invoice</h2>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
            </div>
        </div>
    </nav>
</body>
<div class="facture">
    <table style="width:800px;">
        <tr>
            <th>Produit</th>
            <th>PU</th>
            <th>Quantite</th>
            <th>Total</th>
        </tr>
        <?php  
    $req2="select * from commande where idclient=$idclient";
    $res2=$con->query($req2);
    $totaux=0;
    while($row2=$res2->fetch_assoc()){
    $idpanier=$row2['idpanier'];
    $req3="select * from panier where id=$idpanier";
    $res3=$con->query($req3);
    $total=0;
    while($row3=$res3->fetch_assoc()){
        $idproduit=$row3['id_produit'];
        $quantite=$row3['quantite'];
        $req4="select * from produit where id=$idproduit";
        $res4=$con->query($req4);
        $row4=$res4->fetch_assoc();
        $description=$row4['description'];
        $price=$row4['price'];
        $pu=$price;
        $total=$total+$price*$quantite;
        $totaux=$totaux+$total;
        echo'<tr>
        <td class="desc">'.$description.'</td>
        <td>'.$pu.' DH</td>
        <td>'.$quantite.'</td>
        <td class="total">'.$total.' DH</td>
        </tr>
        
        ';
    }}
    ?>
        <tr>
            <td class="totaux text-center">total</td>
            <td class="totauxpr"><?php echo"$totaux" ?><Datag></Datag>DH</td>
        </tr>
    </table>


</div>

<script
    src="https://www.paypal.com/sdk/js?client-id=AZ0RG1WnFYv6sLm48gnZcI6TGZm6EBdm1181IpcJjehU8Uwn390D0DQwqpAVocypnVb37SVKtXS0fYf0">
</script>
<!-- Set up a container element for the button -->
<div id="paypal-button-container" style="margin:100px 450px;width:400px;"></div>
<script>
paypal.Buttons({
    style: {
        color: 'blue',
        shape: 'pill'
    },
    createOrder: function(data, actions) {
        return actions.order.create({
            purchase_units: [{
                amount: {
                    value: '0.1'
                }
            }]
        });
    },
    onApprove: function(data, actions) {
        return actions.order.capture().then(function(details) {
            console.log(details)
           alert('payement done successfully');
        })
    },
    onCancel: function(data) {
        alert('payement failed');
    }
}).render('#paypal-button-container');
</script>



</html>