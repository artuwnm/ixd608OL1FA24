<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<?php include "parts/meta.php"; ?>

	<title>Cart confirmation</title>
</head>
<body>
	
	<?php include "parts/navbar.php"; ?>


	<div class="container">
		<h2>Cart confirmation</h2>
		<div class="card soft">
			<p>Item added to cart # <?= $_GET['id'] ?></p>
		</div>
	</div>

<div class="container ">
	<div class="grid gap display-flex flex-align-center">
		<div class="col-xs-12 col-md-6">
			<div class="form-control"><a href="index.php" class="form-button">Shop some more</a></div>
		</div>	
		<div class="col-xs-12 col-md-6">	
			<div class="form-control"><a href="checkout.php?id=1" class="form-button">Checkout</a></div>
		</div>
	</div>
</div>


<?php include "parts/footer.php"; ?>
	
</body>
</html>

