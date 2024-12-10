<?php 
include_once "lib/php/functions.php";
include_once "parts/templates.php";

//$cart = makeQuery(makeConn(),"SELECT * FROM `products` WHERE `id` IN (3,4,7)");

$cart_items = getCartItems();
$cart = getCart();



?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<?php include "parts/meta.php"; ?>

	<title>Cart</title>
</head>
<body>
	
	<?php include "parts/navbar.php"; ?>



	<div class="container"> 
		<h2>Cart</h2>
		
		<?php  
		if(count($cart)){
		?>
			<div class="grid gap">
				<div class="col-xs-12 col-md-7">
					<div class="card">
						<?= array_reduce($cart_items,'cartListTemplate') ?>
					</div>
				</div>	
	
				<div class="col-xs-12 col-md-5">
					<div class="card">
						<?= cartTotals() ?>
						

							<div class="form-control"><button class="form-button outline"><a href="checkout.php?id=1">Checkout</a></button></div>
						
					</div>
				</div>
			</div>
		<?php  
		} else{
		?>
		<div class="card">
			<p>No items in cart</p> 
		</div>

		<div class="container">
			<h2>Check these out</h2>
			<?php
			recommendedAnything(); 
			?>
		</div>

		<?php 
		}
		?>
	</div>	




<?php include "parts/footer.php"; ?>
	
</body>
</html>