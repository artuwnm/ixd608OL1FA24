<?php 
include_once "lib/php/functions.php";
include_once "parts/templates.php";

$cart = makeQuery(makeConn(),"SELECT * FROM `products` WHERE `id` IN (3,4,7)");

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
		<div class="grid gap">
			<div class="col-xs-12 col-md-7">
				<div class="card">
					<?= array_reduce($cart,'cartListTemplate') ?>
				</div>
			</div>	

			<div class="col-xs-12 col-md-5">
				<div class="card">
					<div class="card-section display-flex">
						<div class="flex-stretch"><strong>Sub total</strong></div>
						<div class="flex-none">&dollar;3.50</div>
					</div>
					<div class="card-section display-flex">
						<div class="flex-stretch"><strong>Taxes</strong></div>
						<div class="flex-none">&dollar;3.50</div>
					</div>
					<div class="card-section display-flex">
						<div class="flex-stretch"><strong>Total</strong></div>
						<div class="flex-none">&dollar;7.00</div>
					</div>
					
				</div>

				<div class="form-control"><button class="form-button outline"><a href="checkout.php?id=1">Checkout</a></button></div>
			</div>
		</div>
	</div>



<?php include "parts/footer.php"; ?>
	
</body>
</html>