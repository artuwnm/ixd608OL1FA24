	<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Checkout</title>

	<?php include "../parts/meta.php"; ?>

</head>
<body>
	
	<?php include "../parts/navbar.php"; ?>


	
	<div class="card soft">
		<h3 id="controls">Address</h3>
	<form>
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




	

	 <?php include "../parts/footer.php"; ?>
</body>
</html>