<?php

include_once "lib/php/functions.php";

?>


<input type="checkbox" id="menu" class="hidden">
<header class="navbar">
	<div class="container display-flex">
		<div class="flex-none">
			<h1>niki designs</h1>
		</div>
		<div class="flex-stretch"></div>
		<div class=" flex-none menu-button ">
			<label for="menu">&equiv;</label>
		</div>
		<nav class="nav nav-flex flex-none">
			<ul>
				<li><a href="index.php">home</a></li>
				<li><a href="product_list.php">shop</a></li>
				<li><a href="cart.php">
					<span>cart</span>
					<span class="badge"><?= makeCartBadge(); ?></span>
				</a></li>			
				<li><a href="checkout.php">checkout</a></li>
			</ul>
		</nav>
	</div>	
</header>

<div class="container">
	<div class="dipslay-flex flex-justify-center">
	<h1>niki designs</h1>
	</div>
		<div class="nav nav-pills nav-stretch" id="low-nav">
			<ul>
				<li><a href="index.php">home</a></li>
				<li><a href="product_list.php">shop</a></li>
				<li><a href="cart.php">
					<span>cart</span>
					<span class="badge"><?= makeCartBadge(); ?></span>
				</a></li>			
				<li><a href="checkout.php">checkout</a></li>
			</ul>
		</div>
	</div>
</div>
