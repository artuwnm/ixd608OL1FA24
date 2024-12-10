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
	
	
		<?php include "parts/navbar.php"; ?>
	<div class="container">	

		<h2>Added to Cart</h2>
		<div class="card soft">
			<h4>You added <?= $product->name ?> to your cart.</h4>
			<div class="form-control"></div>
			<p>There is now <?= $cart_product->amount?> of <?= $product->name ?> in your cart</p>
			<div class="form-control"></div>
			<div class="display-flex flex-wrap">
				<div class=" flex-none  ">
					<ul>
						<li class="form-button"><a href="product_list.php">Continue Shopping</a></li>
					</ul>
				</div>
				<div class="flex-stretch"></div>
				<div class="flex-none">
					<ul>
						<li class="form-button"><a href="cart.php">Go to Cart</a></li>
					</ul>
				</div>
			</div>
			
		</div>
	</div>

	

</body>
<?php include "parts/footer.php"; ?>
</html>