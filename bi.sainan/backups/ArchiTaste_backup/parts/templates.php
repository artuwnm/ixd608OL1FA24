<?php 

function productListTemplate($r,$o) {
	return $r.<<<HTML

	<a class="col-xs-12 col-md-4" href="product_item.php?id=$o->id">
		<figure class="figure product flex vertical">
		<div class="flex-stretch"><img src="$o->thumbnail" alt=""></div>
			<figcaption style="padding: 0; padding-left: 1em;" class="flex-none">
				<h2 style="margin-bottom: 0; color: #5F9EA0;">&dollar;$o->price</h2>
				<h3 style="margin-top: .5em;">$o->name <span style="font-size: .5em">by</span> $o->designer</h3>
			</figcaption>
		</figure>
	</a>

HTML;
}

function selectAmount($amount=1, $total=10) {
	$output = "<select name='amount'>";
	for($i=1;$i<=$total;$i++) {
		$output .= "<option ".($i==$amount?"selected":"").">$i</option>";
	}
	$output .= "</select>";
	return $output;
}

function cartListTemplate($r,$o) {
	$totalfixed = number_format($o->total,2,'.','');
	$selectamount = selectAmount($o->amount,10);
	return $r.<<<HTML

	<div class="card soft container flex" style="padding: .5em 1em; margin: 1em;">

	<div class="mobile-only" style="margin-top: 0;">
		<form action="cart_actions.php?action=delete-cart-item" method="post">
			<input type="hidden" name="id" value="$o->id">
			<input type="submit" class="delete" value="X" style="font-size: .8em; color: orange; border: 1px solid orange;">
		</form>
	</div>
		
		<div class="flex align-center flex-stretch">
		
			<div class="flex-none thumb" style="padding-right: 1em;">
				<a href="product_item.php?id=$o->id"><img src="$o->thumbnail">
			</div>
		
			<div>
				<h3 style="margin-bottom: .25em;">
					<a href="product_item.php?id=$o->id">$o->name</a>
				</h3>
				<hr>
				<h3 style="margin-top: .25em;">
					&dollar;$o->price
				</h3>
			</div>
		
			<div class="flex-stretch"></div>
		
			<form action="cart_actions.php?action=update-cart-item" method="post" onchange="this.submit()">
				<input type="hidden" name="id" value="$o->id">
				<div class="form-select">$selectamount</div>
			</form>
		
			<h2 class="flex-none" style="font-size: 1.2em; padding-left: 1em;">
				&dollar;$o->total</h2>
		
		</div>
		
		<div style="padding-left: 1em;" class="desktop-only">
			<form action="cart_actions.php?action=delete-cart-item" method="post">
				<input type="hidden" name="id" value="$o->id">
				<input type="submit" class="delete" value="X" style="font-size: .8em; color: orange; border: 1px solid orange;">
			</form>
		</div>
		
	</div>


HTML;
}


function cartTotals() {
	$cart = getCartItems();
	$cartprice = array_reduce($cart,function($r,$o){return $r + $o->total;},0);

	$pricefixed = number_format($cartprice,2,'.','');
	$taxfixed = number_format($cartprice*0.0725,2,'.','');
	$taxedfixed = number_format($cartprice*1.0725,2,'.','');

	return <<<HTML
            
             <div class="flex card-section">
                 <div class="flex-stretch"><h3>Subtotal</h3></div>
                 <div><h3>&dollar;$cartprice</h3></div>
             </div>

             <div class="flex card-section">
                 <div class="flex-stretch"><h3>Taxes</h3></div>
                 <div><h3>&dollar;$taxfixed</h3></div>
             </div>

             <div class="flex card-section" style="color: green;">
                 <div class="flex-stretch"><h3>Shipping</h3></div>
                 <div><h3>FREE</h3></div>
             </div>

           <hr>

             <div class="flex">
                 <div class="flex-stretch"><h2>Total</h2></div>
                 <div><h2>&dollar;$taxedfixed</h2></div>
             </div>
					
</div>

HTML;
}



function recommendedProducts ($a) {
	$products = array_reduce ($a, 'productListTemplate');
	echo <<<HTML
	<div class="grid gap productlist">$products</div>
	HTML;
}


function recommendedId($cat, $limit=3) {
	$result = makeQuery (makeConn(),"SELECT * FROM `products` WHERE `category`='$cat' ORDER BY `id_custom` ASC LIMIT $limit");
	recommendedProducts($result);
}

function recommendedDate($cat, $limit=3) {
	$result = makeQuery (makeConn(),"SELECT * FROM `products` ORDER BY `id` DESC LIMIT $limit");
	recommendedProducts($result);
}

function recommendedCategory($cat, $limit=3) {
	$result = makeQuery (makeConn(),"SELECT * FROM `products` WHERE `category`='$cat' ORDER BY `date_create` DESC LIMIT $limit");
	recommendedProducts($result);
}

function recommendedSimilar($cat, $id=0, $limit=3) {
	$result = makeQuery (makeConn(),"SELECT * FROM `products` WHERE `category`='$cat' AND `id`<>$id ORDER BY rand() LIMIT $limit");
	recommendedProducts($result);
}