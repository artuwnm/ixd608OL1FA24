<?php

include_once "../php/functions.php";
$product = makeQuery(makeConn(),"SELECT * FROM `Products` WHERE `id`=".$_GET['id'])[0];

$cart_product = cartItemById($_GET['id']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>aAdded to cart</title>

	<?php include "../parts/meta.php"; ?>

</head>
<body>
	
	<?php include "../parts/navbar.php"; ?>

	<?php include "../parts/viewwindow.php"; ?>

	<div class="container">
	<p>Added <?= $product->name ?> to cart.</p>
	<p>There are now <?= $cart_product->amount ?> of <?= $product->name ?> in your cart.</p>

	<div class="display-flex">
	<div class="flex-none"><a href="product_list.php">Continue shopping</a></div>
	<div class="flex-stretch"></div>
	<div class="flex-none"><a href="cart.php">Go to cart</a></div>
</div>
</div>


	 <?php include "../parts/footer.php"; ?>
</body>
</html>