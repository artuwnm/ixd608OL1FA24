<?php 

function productListTemplate($r,$o) {
	return $r.<<<HTML


<a class="col-xs-12 col-md-4" href="product_item.php?id=$o->id">
	<figure class="figure product flex vertical">
	<div class="flex-stretch"><img src="$o->thumbnail" alt=""></div>
		<figcaption style="padding: 0; padding-left: 1em;" class="flex-none">
			<h2 style="margin-bottom: 0; color: #008B8B;">&dollar;$o->price</h2>
			<h3 style="margin-top: .5em;">$o->name</h3>
		</figcaption>
	</figure>
</a>

HTML;	
}



function cartListTemplate($r,$o) {
	return $r.<<<HTML

<div  class="flex card-section align-center">

    <input type="checkbox" id="input-1"></label>

	<div class="flex-none thumb">
		<a href="product_item.php?id=$o->id"><img src="$o->thumbnail">
	</div>

	<h3 class="flex-stretch" style="padding-left: 1em;">
		<a href="product_item.php?id=$o->id"><strong>$o->name</strong></a>
		
	</h3>

	<h3 class="flex-none">
		&dollar;$o->price
	</h3>

     <div class="flex" style="padding-left: 1.5em;">
        <div class="form-select">
            <select style="background-color: var(--color-beige-light);">
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
                <option>6</option>
                <option>7</option>
                <option>8</option>
                <option>9</option>
                <option>10</option>
            </select>
        </div>
     </div>
</div>



HTML;	
}