<?php
			
include_once "lib/php/functions.php";

$product = makeQuery(makeConn(),"SELECT * FROM `products` WHERE `id`=".$_GET['id'])[0];

$cart_product = cartItemById($_GET['id']);

//print_p($product);


?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Confirmation</title>

	<?php include "parts/meta.php"; ?>

</head>
<body>
	
	<div class="container">
		<?php include "parts/navbar.php"; ?>


		<h2>Added to Cart</h2>
		<div class="card soft">
			<h4>You added <?= $product->name ?> to your cart.</h4>
			<p>There is now <?= $cart_product->amount?> of <?= $product->name ?> in your cart</p>
			<div class="display-flex">
				<div class=" flex-none nav nav-pills ">
					<ul>
						<li><a href="product_list.php">Continue Shopping</a></li>
					</ul>
				</div>
				<div class="flex-stretch"></div>
				<div class="flex-none nav nav-pills">
					<ul>
						<li><a href="cart.php">Go to Cart</a></li>
					</ul>
				</div>
				<!--<div class="flex-none"><a href="product_list.php">Continue Shopping</a></div>
				<div class="flex-stretch"></div>
				<div class="flex-none "><a href="cart.php">Go to Cart</a></div>-->
			</div>
			
		</div>
	</div>

	<?php include "parts/footer.php"; ?>

</body>
</html>