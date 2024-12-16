<?php
			
include_once "lib/php/functions.php";
include_once "parts/templates.php";

$product = makeQuery(makeConn(),"SELECT * FROM `products` WHERE `id`=".$_GET['id'])[0];

$images = explode(",", $product->images);

$image_elements = array_reduce($images,function($r,$o){
	return $r. "<img src='$o'>";
});

//print_p($_SESSION);


?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Product Item</title>

	<?php include "parts/meta.php"; ?>
	<script src="js/product_thumbs.js"></script>
</head>
<body>

	<?php include "parts/navbar.php"; ?>

	<div class="container">
	
		<div class="grid gap">
			<div class="col-xs-12 col-md-7">
				<div class="card soft">
					<div class="images-main">
						<img src="<?= $product->thumbnail ?>" alt="">
					</div>
					<div class="images-thumbs">
						<?= $image_elements ?>
					</div>
				</div>
			</div>	
			
			<div class="col-xs-12 col-md-5">
				<form class="card soft flat" method="post" action="cart_actions.php?action=add-to-cart">
					
					<input type="hidden" name="product-id" value="<?= $product->id ?>">
					
					<div class="card-section">
						<h2 class="product-name"><?= $product->name ?></h2>
						<div class="form-control"></div>
						<label for="product-category" class="form-label">Category</label>
						<div class="product-category"><?= $product->category ?></div>
						<div class="form-control"></div>
						<label for="product-price" class="form-label">Price</label>
						<div class="product-price">&dollar;<?= $product->price ?></div>
					</div>
					<div class="card-section">
						<label for="product-amount" class="form-label">Amount</label>
						<div class="form-select" >
							<select id="product-amount" name="product-amount">
								<option>1</option>
								<option>2</option>
								<option>3</option>
								<option>4</option>
								<option>5</option>
								<option>6</option>
								<option>7</option>
								<option>8</option>
							</select>
						</div>
					</div>
					<div class="card-section">
						<input type="submit" class="form-button " value="Add to Cart">
					</div>
					<div class="card-section">
						<div class="form-control"></div>
						<label for="product-description" class="form-label">Description</label>
						<div class="product-description"><?= $product->description ?></div>
					</div>
				</form>
			</div>
		</div>

		<h2>Recommended Products</h2>
		<?php
			recommendedSimilar($product->category,$product->id);
		?>

	</div>


	
	
</body>
<?php include "parts/footer.php"; ?>
</html>