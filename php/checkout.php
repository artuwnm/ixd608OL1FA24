<?php 
include_once "../php/functions.php";
include_once "../parts/templates.php";
$cart = getCartItems();
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Checkout</title>

	<?php include "../parts/meta.php"; ?>

</head>
<body>
	
	<?php include "../parts/navbar.php"; ?>


<div class="container">
	<div class="grid gap" style="margin-bottom: 4em; margin-top: 1em;"
>
			<div class="col-xs-12 col-md-5">
		<div class="card soft">
			<h2>Item Review</h2>
			<div class="card-section">
			
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
		</div>

	</div>
		<div class="col-xs-12 col-md-7">
			<div class="card soft">
				<h2>Product Checkout</h2>

	<form class="form">
		<h3 id="controls">Address</h3>
		<div class="form-control">
			<label class="form-label">Name</label>
			<input type="text" placeholder="First name, Last name" class="form-input">
		</div>
		<div class="form-control">
			<label class="form-label">Phone</label>
			<input type="text" placeholder="Phone" class="form-input">
		</div>
		<div class="form-control">
			<label class="form-label">Address</label>
			<input type="text" placeholder="Address" class="form-input">
		</div>
		<div class="form-control display-flex flex-align-center">
			<div class="flex-none">
				<label class="form-label">State</label>
			</div>
			<div class="flex-stretch">
				<input type="text" placeholder="State" class="form-input">
			</div>
			<div class="flex-none">
				<label class="form-label">Zip</label>
			</div>
			<div class="flex-stretch">
				<input type="text" placeholder="Zip" class="form-input">
			</div>
		</div>
	


	<h3 id="controls">Payment</h3>
	
		<div class="form-control">
			<label class="form-label">Name on card</label>
			<input type="text" placeholder="Last name, First name" class="form-input">
		</div>
		<div class="form-control">
			<label class="form-label">Card number</label>
			<input type="text" placeholder="Card number" class="form-input">
		</div>
		<div class="form-control">
			<label class="form-label">CVV</label>
			<input type="text" placeholder="3 CVV number on card" class="form-input">
		</div>
		<div class="form-control display-flex flex-align-center">
			<div class="flex-none">
				<label class="form-label">Address</label>
			</div>
			<div class="flex-stretch">
				<input type="text" placeholder="Address" class="form-input">
			</div>
			<div class="flex-none">
				<label class="form-label">Zip</label>
			</div>
			<div class="flex-stretch">
				<input type="text" placeholder="Zip" class="form-input">
			</div>
		</div>
		<div class="form-control">
	<a href="thankyou.php" class="form-button">Complete Checkout</a>
</div>
	</form>

</div>
</div>

</div>
</div>



	

	 <?php include "../parts/footer.php"; ?>
</body>
</html>