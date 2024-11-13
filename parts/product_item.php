<?php

include_once "../php/functions.php";
$product = makeQuery(makeConn(),"SELECT * FROM `Products` WHERE `id`=".$_GET['id'])[0];

//print_p($product);
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Product Item</title>

	<?php include "../parts/meta.php"; ?>

</head>
<body>

	<?php include "../parts/navbar.php"; ?>

	<?php include "../parts/viewwindow.php"; ?>

	<div class="container">
		<div class="grid gap">
			<div class="col-xs-12 col-md-7">
				<div class="card soft">
					<div class="images-main">
					<img src="/wangyujingzhang_aau/aau/ixd608/img/<?= $product->thumbnail ?>">
				</div>
				</div>
			</div>
			<div class="col-xs-12 col-md-5">
				<div class="card soft flat">
					<div class="card-section">
					<h2 class="product-name"><?= $product->name ?></h2>
					<div class="product-price">&dollar;<?= $product->price ?></div>
					<div class="product-description"><?= $product->description ?></div>
				</div>

					<div class="card-section">
						<label for="product-amount" class="form-label">Amount</label>
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

						
					</div>
	
					<div class="card-section">
						<a href="/wangyujingzhang_aau/aau/ixd608/php/addtocart.php?id=<?= $product->id ?>" class="form-button">Add to cart</a>
					</div>
				</div>


			
		</div>
		
	</div>
</div>

	


<?php include "../parts/footer.php"; ?>
</body>
</html>