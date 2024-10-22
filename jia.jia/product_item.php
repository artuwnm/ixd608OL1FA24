<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	
	<title>Product Item</title>

	<?php include "parts/meta.php"; ?>
</head>
<body>

	<?php include "parts/navbar.php"; ?>

	<div class="container">
		<div class="card soft">
			<p>This is item # <?= $_GET['id']?></p>
		</div>
		<div class="grid gap">
			<div class="col-xs-12 col-md-4">
				<figure class="figure">
					<img src="https://via.placeholder.com/400x400?text=product" alt="">
					<figcaption>Product</figcaption>
				</figure>
			</div>
			<div class="col-xs-12 col-md-8">
				<div class="card soft">
					<p>Eveniet quos ea, error nisi ipsa, sapiente excepturi? Laboriosam quaerat in nobis eaque voluptatem animi optio necessitatibus dolore repellat vero ab quo pariatur maiores repellendus, exercitationem nihil quis obcaecati ea sint error vel nulla fugiat. Eligendi accusantium nam id autem.</p>
				</div>
				<div class="form-select">
						<select>
							<option>1</option>
							<option>2</option>
							<option>3</option>
							<option>4</option>
						</select>
				</div>
				<div class="form-control">
					<button type="button" class="form-button">Add to Cart</button>
				</div>
			</div>
		</div>
	</div>

</body>
</html>