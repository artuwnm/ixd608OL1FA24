<?php include_once "lib/php/functions.php"; 
resetCart();
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
	
		<h2>Success!</h2>
		<div class="card soft">
			<h3>Your purchase is confirmed.</h3>
			<p>Thanks for shopping "small". Our business is small but your support is HUGE!!!</p>
			<p><a href="product_list.php">Continue Shopping</a></p>
			
		</div>
	</div>

	

</body>
<?php include "parts/footer.php"; ?>
</html>