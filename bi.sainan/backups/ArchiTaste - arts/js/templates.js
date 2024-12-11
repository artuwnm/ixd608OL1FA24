
const listItemTemplate = templater (o=>`

<a class="col-xs-12 col-md-4" href="product_item.php?id=${o.id}">
	<figure class="figure product flex vertical">
	<div class="flex-stretch"><img src="${o.thumbnail}" alt=""></div>
		<figcaption style="padding: 0; padding-left: 1em;" class="flex-none">
			<h2 style="margin-bottom: 0; color: #5F9EA0;">&dollar;${o.price}</h2>
			<div class="flex">
				<h3 style="margin-top: .5em;">${o.name}</h3>
				<h5 style="margin: 1em .5em;">by</h5>
				<h3 style="margin-top: .5em;">${o.designer}</h3>
			</div>
		</figcaption>
	</figure>
</a>

`);