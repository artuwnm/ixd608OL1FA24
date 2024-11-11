<?php 

function productListTemplate($r,$o) {
	return $r.<<<HTML


<a class="col-xs-12 col-md-6" href="product_item.php?id=$o->id">
	<figure class="figure product-overlay">
	<img src="img/$o->thumbnail" alt="">
	<figcaption>
		<div class="caption-body">
		<div>$o->name</div>
		<div>&dollar;$o->price</div>
		</div>
	</figcaption>
	</figure>
</a>

HTML;	
}

function cartListTemplate($r,$o){
return $r. <<<HTML
<div class="display-flex">
	<div class="flex-none images-thumbs">
		<img src="img/$o->thumbnail">
	</div>
	<div class="flex-stretch">
		<strong>$o->name</strong>
		<div><p>Remove</p></div>
	</div>
	<div class="flex-none">
		&dollar;$o->price
 	</div>
</div>
HTML;
}



