<?php 
include_once "lib/php/functions.php";

$product = makeQuery(makeConn(),"SELECT * FROM `products` WHERE `id`=".$_GET['id'])[0];

$images = explode(",", $product->images);

$image_elements = array_reduce($images,function($r,$o){
	return $r."<img src='img/$o'>";
});

//print_p($product);

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<?php include "parts/meta.php"; ?>
	<script src="lib/js/product_thumbs.js"></script>

	<title>Product Item</title>
</head>
<body>
	
	<?php include "parts/navbar.php"; ?>

<div class="container"> 
		<div class="grid gap">
			<div class="col-xs-12 col-md-7">
				<figure class="images-main">
					<img src="img/<?= $product->thumbnail ?>">
				</figure>
				<figure class="images-thumbs"> 
					<?= $image_elements ?>
				</figure>
			

			</div>	

			<div class="col-xs-12 col-md-5">

				<h2><?= $product->name ?></h2>
				<h3>&dollar;<?= $product->price ?></h3>
				<p><?= $product->description ?></p>
				
				<h4>Amount</h4>
				<div class="form-select" id="product-amount">
					<select>
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

				<h4>Size</h4>
				<div class="grid gap display-inline-flex">
				<div class="size">
					<input type="checkbox" id="size-60" class="hidden">
					<label for="size-60">60</label>
				</div>
				<div class="size">
					<input type="checkbox" id="size-58" class="hidden">
					<label for="size-58">58</label>
				</div>
				<div class="size">
					<input type="checkbox" id="size-56" class="hidden">
					<label for="size-56">56</label>
				</div>
				</div>

				<h4>Color</h4>
				<div class="grid gap display-inline-flex">
				<div class="blue-check">
    				<input type="checkbox" id="color-blue" class="hidden">
    				<label for="color-blue"></label>
				</div>
				<div class="yellow-check">
    				<input type="checkbox" id="color-yellow" class="hidden">
    				<label for="color-yellow"></label>
				</div>
				<div class="red-check">
    				<input type="checkbox" id="color-red" class="hidden">
    				<label for="color-red"></label>
				</div>
				</div>

				<div class="form-control"><button class="form-button outline"><a href="cart_confirmation.php?id=<?= $product->id ?>">Add to cart</a></button></div>
			</div>	
			
		</div>
	</div>

	<div class="container" id="figures">
		<h2>Lorem ipsum</h2>
		<div class="grid gap">
					<div class="col-xs-12 col-md-4">
						<figure class="figure">
						<img src="https://via.placeholder.com/400x400?text=product" alt="">
						<figcaption>Product</figcaption>
						</figure>
					</div>
					<div class="col-xs-12 col-md-4">
						<figure class="figure">
						<img src="https://via.placeholder.com/400x400?text=product" alt="">
						<figcaption>Product</figcaption>
						</figure>
					</div>
					<div class="col-xs-12 col-md-4">
						<figure class="figure">
						<img src="https://via.placeholder.com/400x400?text=product" alt="">
						<figcaption>Product</figcaption>
						</figure>
					</div>
		</div>
	</div>
	

<?php include "parts/footer.php"; ?>
	
</body>
</html>