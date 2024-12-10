<?php 
include_once "lib/php/functions.php";
include_once "parts/templates.php";
$cart = getCartItems();
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

	<div class="container" style="margin-bottom: 0; padding-bottom: 0;">
		<h2>Checkout</h2>
	</div>

	<div class="container">
		<div class="grid gap">
			<div class="col-xs-12 col-md-7">
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

				
		</div>

			<div class="col-xs-12 col-md-5">
				<div class="card">
					<div class="card-section">
						<h3>Review items</h3>
						<?php 
						echo array_reduce($cart,function($r,$o){
							$totalfixed = number_format($o->total,2,'.','');
							return $r."<div class='display-flex'>
								<div class='flex-stretch'>$o->name</div>
								<div class='flex-none'>&dollar;$totalfixed</div>
							</div>";
						}) ?>
						</div>
						<?= cartTotals(); ?>
						<div class="form-control" style="margin-bottom: 0; padding-bottom: 0;"><a href="purchase_confirmation.php?id=1" class="form-button">Finish checkout</a></div>
					</div>
				</div>
			</div>
		</div>
	</div>


<?php include "parts/footer.php"; ?>
	
</body>
</html>