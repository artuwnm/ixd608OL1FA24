<?php

include_once "../lib/php/functions.php";

if (!isset($_GET['action'])) die("No Action Set");

switch ($_GET['action']) {
	case "add-to-cart":
		
		addToCart($_GET['id'], $_GET['amount'], $_GET['price']);
		header("location:../product_added_to_cart.php?id={$_GET['id']}&n=4");
		break;

	case "update-cart-amount":
		cartItemByID($_GET['id'])->amount = $_GET['amount'];
		header("location:../product_cart.php?n=4");
		break;

	case "delete-cart-item":
	    $new_cart = [];
	    if (!empty($_SESSION['cart'])) {
	        foreach ($_SESSION['cart'] as $key => $val) {
	            if ($val->id == $_GET['id']) {
	                unset($_SESSION['cart'][$key]);
	            }
	        }
	    }
	    header("location:../product_cart.php?n=4");
		break;

	case "update-cart-choice":
		// Placeholder for future functionality
		break;
}

print_p([$_GET, $_SESSION]);
?>
