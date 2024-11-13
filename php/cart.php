<?php

include_once "../php/functions.php";
include_once"../parts/templates.php";

$cart = makeQuery(makeConn(),"SELECT * FROM `Products` WHERE `id` IN (4,6,10)");


?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Your cart</title>

	<?php include "../parts/meta.php"; ?>

</head>
<body>

	<?php include "../parts/navbar.php"; ?>


		<div class="container">
		<h2>Your cart</h2>
		<div class="grid gap">
			<div class="col-xs-12 col-md-7">
				<div class="card soft">
					<?= array_reduce($cart,'cartListTemplate') ?>
				</div>
				
			</div>
			<div class="col-xs-12 col-md-5">
				<div class="card soft flat">
					<div class="card section display-flex">
						<div class="flex stretch"><strong>Sub Total</strong></div>
						<div class="flex none">&dollar;74.00</div>
					</div>
					<div class="card section display-flex">
						<div class="flex stretch"><strong>Taxes</strong></div>
						<div class="flex none">&dollar;7.40</div>
					</div>
					<div class="card section display-flex">
						<div class="flex stretch"><strong>Total</strong></div>
						<div class="flex none">&dollar;81.40</div>
					</div>
					<div class="card-section">
						<a href="checkout.php" class="form-button">Checkout</a>
					</div>
				</div>
				
			</div>
		</div>
	</div>

<?php include "../parts/footer.php"; ?>
</body>
</html>