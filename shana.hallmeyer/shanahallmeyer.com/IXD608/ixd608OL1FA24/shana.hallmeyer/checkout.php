<?php 
include_once "lib/php/functions.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<?php include "parts/meta.php"; ?>

	<title>Checkout</title>
</head>
<body>
	
	<?php include "parts/navbar.php"; ?>


	<div class="container">
		<h2>Checkout</h2>
		<div>
			<h3>Shipping information</h3>
		</div>

		<form>
			<input type="text" placeholder="First name" class="form-input">
			<input type="text" placeholder="Last name" class="form-input">
			<input type="text" placeholder="Street address" class="form-input">
			<input type="text" placeholder="City" class="form-input">
			<input type="text" placeholder="State" class="form-input">
			<input type="numbers" placeholder="Zip code" class="form-input">
			<input type="numbers" placeholder="Phone number" class="form-input">
		</form>
	</div>

	<div class="container">
		<div>
			<h3>Payment</h3>
		</div>

		<form>
			<input type="text" placeholder="Name on card" class="form-input">
			<input type="numbers" placeholder="Credit card number" class="form-input">
			<input type="numbers" placeholder="Expiration date" class="form-input">
			<input type="password" placeholder="CVC" class="form-input">
		</form>
	</div>

	<div class="container">
		<div class="form-control"><a href="purchase_confirmation.php?id=1" class="form-button">Finish checkout</a></div>
	</div>	


<?php include "parts/footer.php"; ?>
	
</body>
</html>