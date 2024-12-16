<?php include_once "../php/functions.php";
resetCart();
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Thank you</title>

	<?php include "../parts/meta.php"; ?>

</head>
<body>
	
	<?php include "../parts/navbar.php"; ?>

	<?php include "../parts/viewwindow.php"; ?>

	<div class="container">
	<p>Thank you for your order!</p>

	<div class="display-flex">
	<a href="product_list.php">Continue shopping</a>
</div>
</div>


	 <?php include "../parts/footer.php"; ?>
</body>
</html>