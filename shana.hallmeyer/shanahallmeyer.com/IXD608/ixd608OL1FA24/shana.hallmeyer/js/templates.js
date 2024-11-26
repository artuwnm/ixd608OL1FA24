const listItemTemplate = templater (o=>`
	<a class="col-xs-12 col-md-6" href="product_item.php?id=${o.id}">
	<figure class="figure product-overlay">
	<img src="img/${o.thumbnail}" alt="">
	<figcaption>
		<div class="caption-body">
		<div>${o.name}</div>
		<div>&dollar;${o.price.toFixed(2)}</div>
		</div>
	</figcaption>
	</figure>
</a>

`);