<?php

include_once "../php/functions.php";
include_once"../parts/templates.php";

//$cart = makeQuery(makeConn(),"SELECT * FROM `Products` WHERE `id` IN (4,6,10)");

$cart_items = getCartItems();

$cart = getCart();


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
		<?php

		if(count($cart)){
		?>
		<div class="grid gap">
			<div class="col-xs-12 col-md-7">
				<div class="card soft">
					<?= array_reduce($cart_items,'cartListTemplate') ?>
				</div>
				
			</div>
			<div class="col-xs-12 col-md-5">
				<div class="card soft flat">
					<?= cartTotals() ?>
					<div class="card-section">
                        <a href="checkout.php" class="form-button">Checkout</a>
                    </div>
				</div>
				
			</div>
		</div>
		<?php
	} else {
		?>
		<div class="card soft">
			<p>No items in cart</p>
		</div>
		<h3>Other Recommendations</h3>
		<?php recommendedAnything(6); ?>
		<?php

	}
	?>
	</div>

<?php include "../parts/footer.php"; ?>
</body>
</html>