<?php

function productListTemplate($r,$o) {
return $r.<<<HTML
<a class="col-xs-12 col-md-4" href="product_item.php?id=$o->id">
	<figure class="figure product display-flex flex-column">
		<div class="flex-stretch">
			<img src="img/$o->thumbnail" alt="">
		</div>
		<figcaption class="flex-none">
			<div>$o->name</div>
			<div>&dollar;$o->price</div>
		</figcaption>
	</figure>
</a>
HTML;
}


function selectAmount($amount=1,$total=10) {
	$output = "<select name='amount'>";
	for($i=1;$i<=$total;$i++) {
		$output .= "<option ".($i==$amount?"selected":"").">$i</option>";
	}
	$output .="</select>";
	//print_p($output);
	return $output;
}


function cartListTemplate($r,$o){
$totalfixed = number_format($o->total,2,'.','');
$selectAmount = selectAmount($o->amount,10);
return $r.<<<HTML
<div class="display-flex">
	<div class="flex-none images-thumbs">
		<img src="img/$o->thumbnail">
	</div>
	<div class="flex-stretch">
		<strong>$o->name ($o->material)</strong>
		<form action="cart_actions.php?action=delete-cart-item" method="post">
			<input type="hidden" name="id" value="$o->id">
			<input type="submit" class="form-button inline" value="Delete" style="font-size: 0.8em">
		</form>
	</div>
	<div class="flex-none">
		<div>&dollar;$totalfixed</div>
		<form action="cart_actions.php?action=update-cart-item" method="post" onchange="this.submit()">
			<input type="hidden" name="id" value="$o->id">
			<div class="form-select" style="font-size: 0.8em">
				$selectAmount
			</div>
		</form>
	</div>
</div>
HTML;
}


function cartTotals() {
	$cart = getCartItems();

	$cartprice = array_reduce($cart,function($r,$o){return $r + $o->total;},0);

	$pricefixed = number_format($cartprice,2,'.','');
	$taxfixed = number_format($cartprice*0.09125,2,'.','');
	$taxedfixed = number_format($cartprice*1.09125,2,'.','');

return <<<HTML
<div class="card-section display-flex">
	<div class="flex-stretch"><strong>Sub Total</strong></div>
	<div class="flex-none">&dollar;$pricefixed</div>
</div>
<div class="card-section display-flex">
	<div class="flex-stretch"><strong>Tax</strong></div>
	<div class="flex-none">&dollar;$taxfixed</div>
</div>
<div class="card-section display-flex">
	<div class="flex-stretch"><strong>Total</strong></div>
	<div class="flex-none">&dollar;$taxedfixed</div>
</div>
<div class="card-section">
	<a href="product_checkout.php" class="form-button">Checkout</a>
</div>
HTML;
}

function showCart($cart_items) {
	$cart = array_reduce($cart_items,'cartListTemplate');
	$cartTotal = cartTotals();

	if (empty($cart_items)) {
return <<<HTML
<card class="soft">
	<h2>You got an empty cart.</h2>
	<p><a href="product_list.php">Continue Shopping</a></p>
</card>
HTML;
	} else {

return <<<HTML
<h2>In your Cart</h2>
<div class="grid gap">
	<div class="col-xs-12 col-md-7">
		<div class="card soft">
			$cart
		</div>
	</div>
	<div class="col-xs-12 col-md-5">
		<div class="card soft flat">
			$cartTotal
		</div>
	</div>
</div>
HTML;
	}
}


function cartMiniList($r,$o){
//print_p($o);
//$totalfixed = number_format($o->total,2,'.','');
return $r.<<<HTML
<p>$o->name ($o->material) * $o->amount</p>
HTML;
}



function showMiniSummary() {
	$cart = getCartItems();

	$cartMiniList = array_reduce($cart,'cartMiniList');

	$cartprice = array_reduce($cart,function($r,$o){return $r + $o->total;},0);

	$pricefixed = number_format($cartprice,2,'.','');
	$taxfixed = number_format($cartprice*0.09125,2,'.','');
	$taxedfixed = number_format($cartprice*1.09125,2,'.','');

return <<<HTML
<div class="card-section">
	<div><strong>Summary</strong></div>
	<div>$cartMiniList</div>
</div>
<div class="card-section display-flex">
	<div class="flex-stretch"><strong>Sub Total</strong></div>
	<div class="flex-none">&dollar;$pricefixed</div>
</div>
<div class="card-section display-flex">
	<div class="flex-stretch"><strong>Tax</strong></div>
	<div class="flex-none">&dollar;$taxfixed</div>
</div>
<div class="card-section display-flex">
	<div class="flex-stretch"><strong>Total</strong></div>
	<div class="flex-none">&dollar;$taxedfixed</div>
</div>
<div class="card-section">
	<a href="product_checkout.php" class="form-button">Checkout</a>
</div>
HTML;
}
