<?php 
include_once "lib/php/functions.php";

?>

	<header class="navbar">
		<div class="container-nav display-flex">
			<div class="flex-none">
				<h1>Dozer</h1>
			</div>

			<div class="flex-stretch"></div>
			<nav class="nav nav-flex flex-none">
				<ul>
					<li><a href="index.php">Home</a></li>
					<li><a href="about.php">About</a></li>
					<li><a href="product_list.php">Shop</a></li>
					<li><a href="cart.php">
						<span>Cart</span>
						<span class="badge"><?= markeCartBadge(); ?></span>
					</a></li>
				</ul>				
			</nav>
		</div>
	</header>

