<?php

include_once "../php/functions.php";

?>

<input type="checkbox" id="menu" class="hidden">
<header class="navbar">
		<div class="container display-flex">
			<div class="flex-none">
				<h1>Natural Essence</h1>
			</div>
			<div class="flex-stretch"></div>
			<div class="flex-none menu-button">
				<label for="menu">&equiv;</label>
			</div>
			<nav class="nav nav-flex flex-none">
				<ul>
					<li><a href="../php/home.php">Home</a></li>
					<li><a href="../php/about.php">About</a></li>
					<li><a href="../php/product_list.php">Store</a></li>
					<li><a href="../php/cart.php">
					<span>Cart</span>
					<span class="badge"><?= makeCartBadge(); ?></span>
					</a></li>
				</ul>
			</nav>
		</div>
	</header>