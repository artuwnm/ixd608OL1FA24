<?php 

function productListTemplate($r,$o) {
	return $r.<<<HTML


<div class="col-xs-12 col-md-4">
	<figure class="figure product" style="background-color: #f7f7f7;">
	<img src="$o->thumbnail" alt="">
		<figcaption style="padding: 0; padding-left: 1em;">
			<h3 style="margin-bottom: .5em;">$o->name</h3>
			<h2 style="margin-top: 0; color: green;">&dollar;$o->price</h2>
		</figcaption>
	</figure>
</div>

HTML;	
}