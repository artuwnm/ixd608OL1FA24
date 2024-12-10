<?php 
include_once "lib/php/functions.php";
include_once "parts/templates.php";

$product = makeQuery(makeConn(),"SELECT * FROM `products` WHERE `id`=".$_GET['id'])[0];

$images = explode(",", $product->images);

$image_elements = array_reduce($images,function($r,$o){
	return $r."<img src='img/$o'>";
});

//print_p($_SESSION);

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
				<div class="card light">
				<figure class="images-main">
					<img src="img/<?= $product->thumbnail ?>">
				</figure>
				<figure class="images-thumbs"> 
					<?= $image_elements ?>
				</figure>
				</div>

			</div>	

			<form class="col-xs-12 col-md-5" method="post" action="cart_actions.php?action=add-to-cart">

				<input type="hidden" name="product-id" value="<?= $product->id ?>">

				<h2><?= $product->name ?></h2>
				<h3>&dollar;<?= $product->price ?></h3>
				<p><?= $product->description ?></p>
				
				<h4>Amount</h4>
				<div class="form-select">
					<select id="product-amount" name="product-amount">
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
				<div class="form-select">
					<select id="product-size" name="product-size">
						<option>8</option>
						<option>8.25</option>
						<option>8.37</option>
						<option>8.5</option>
						<option>10.4</option>
						<option>52mm</option>
						<option>60mm</option>
					</select>
				</div>

				<h4>Color</h4>
				<div class="form-select">
					<select id="product-color" name="product-color">
						<option>Orange</option>
						<option>Yellow</option>
						<option>Green</option>
					</select>
				</div>

				<div class="form-control">
					<input type="submit" class="form-button outline" value="Add to cart">
				</div>
			</form>	
			
		</div>
	</div>

	<div class="container">
		<div class="col-xs-12 col-md-4">
			<h2>Check these out</h2>
			<?php 
			recommendedSimilar($product->category,$product->id);
			 ?>
		</div> 
	</div>
	

<?php include "parts/footer.php"; ?>
	
</body>
</html>