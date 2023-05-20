
<head>
    <link href="css/app.css" rel="stylesheet">
</head><section class="product">
	<div class="product__photo">
		<div class="photo-container">
			<div class="photo-main">
				<div class="controls">
					<i class="material-icons">share</i>
					<i class="material-icons">favorite_border</i>
                    <?php
require('connection.php');
$idproduit = $_GET['id'];
$_SESSION['idproduit'] = $idproduit;
$req = "SELECT * FROM produit WHERE id = 3408";
$res = $con->query($req);
$product = $res->fetch_assoc();
?>

<section class="product">
	<div class="product__photo">
		<div class="photo-container">
			<div class="photo-main">
				<div class="controls">
					<i class="material-icons">share</i>
					<i class="material-icons">favorite_border</i>
				</div>
				<img src="<?php echo $product['image']; ?>" alt="green apple slice">
			</div>
			<div class="photo-album">
				<ul>
					<li><img src="https://res.cloudinary.com/john-mantas/image/upload/v1537302064/codepen/delicious-apples/green-apple2.png" alt="green apple"></li>
					<li><img src="https://res.cloudinary.com/john-mantas/image/upload/v1537303532/codepen/delicious-apples/half-apple.png" alt="half apple"></li>
					<li><img src="https://res.cloudinary.com/john-mantas/image/upload/v1537303160/codepen/delicious-apples/green-apple-flipped.png" alt="green apple"></li>
					<li><img src="https://res.cloudinary.com/john-mantas/image/upload/v1537303708/codepen/delicious-apples/apple-top.png" alt="apple top"></li>
				</ul>
			</div>
		</div>
	</div>
	<div class="product__info">
		<div class="title">
			<h1>Delicious Apples</h1>
			<span>COD: 45999</span>
		</div>
		<div class="price">
			R$ <span>7.93</span>
		</div>
		<div class="variant">
			<h3>SELECT A COLOR</h3>
			<ul>
				<li><img src="https://res.cloudinary.com/john-mantas/image/upload/v1537302064/codepen/delicious-apples/green-apple2.png" alt="green apple"></li>
				<li><img src="https://res.cloudinary.com/john-mantas/image/upload/v1537302752/codepen/delicious-apples/yellow-apple.png" alt="yellow apple"></li>
				<li><img src="https://res.cloudinary.com/john-mantas/image/upload/v1537302427/codepen/delicious-apples/orange-apple.png" alt="orange apple"></li>
				<li><img src="https://res.cloudinary.com/john-mantas/image/upload/v1537302285/codepen/delicious-apples/red-apple.png" alt="red apple"></li>
			</ul>
		</div>
		<div class="description">
			<h3>BENEFITS</h3>
			<ul>
				<li>Apples are nutritious</li>
				<li>Apples may be good for weight loss</li>
				<li>Apples may be good for bone health</li>
				<li>They're linked to a lower risk of diabetes</li>
			</ul>
		</div>
		<form action="cart.php" method="post">
			<div class="wrapper">
				<div class="card-section">
					<div class="description">
						<h3 class="text-center"><?php echo $product['description']; ?></h3>
						<p><?php echo $product['desc_detailed']; ?></p>
					</div>
					<div class="price">
						<p>Price: <?php echo $product['price']; ?> DH</p>
					</div>
					<label>Choose Size:</label>
					<select name="size" class="size input">
						<option value="s">S</option>
						<option value="xs">XS</option>
						<option value="xl">XL</option>
						<option value="l">L</option>
					</select>
					<br>
					<label>Choose Quantity:</label>
					<input type="text" name="quantite" class="input" placeholder="Enter Quantity...">
					<br>
					<input type="submit" class="cart buy--btn" value="Place in Cart">
				</div>
			</div>
		</form>
	</div>
</section>


