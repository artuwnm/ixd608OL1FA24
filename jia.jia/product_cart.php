<?php

include_once "lib/php/functions.php";
include_once "parts/templates.php";

//$cart = makeQuery(makeConn(), "SELECT * FROM `products` WHERE `id` IN (4,7,10)");

$cart_items = getCartItems();
//print_p($cart_items);

?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	
	<title>Cart Page</title>

	<?php include "parts/meta.php"; ?>
</head>
<body>
	<?php include "parts/navbar.php"; ?>


	<div class="container">
		<?= showCart($cart_items); ?>
	</div>

</body>
</html>