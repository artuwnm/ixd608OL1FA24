<?php 

include "../lib/php/functions.php";

$empty_product = (object)[
	"name"=>"",
	"designer"=>"",
	"description"=>"",
	"price"=>"",
	"stock"=>"",
	"category"=>"",
	"id_custom"=>"",
	"thumbnail"=>"",
	"images"=>""
];


// LOGIC
try {
	$conn = makePDOConn();
	switch($_GET['action']) {
		case "update":
			$statement = $conn->prepare("UPDATE
				`products`
				SET
				`name`=?,
				`designer`=?,
				`description`=?,
				`price`=?,
				`stock`=?,
				`category`=?,
				`id_custom`=?,
				`thumbnail`=?,
				`images`=?
				WHERE `id`=?
				");
			$statement->execute([
				$_POST['product-name'],
				$_POST['product-designer'],
				$_POST['product-description'],
				$_POST['product-price'],
				$_POST['product-stock'],
				$_POST['product-category'],
				$_POST['product-id_custom'],
				$_POST['product-thumbnail'],
				$_POST['product-images'],
				$_GET['id']
			]);

			header("location:{$_SERVER['PHP_SELF']}? id = {$_GET['id']}");
			break;
		
		case "create":
			$statement = $conn->prepare("INSERT INTO
				`products`
				(
					`name`,
					`designer`,
					`description`,
					`price`,
					`stock`,
					`category`,
					`id_custom`,
					`thumbnail`,
					`images`,
					`date_create`,
					`date_modify`
				)
				VALUES (?,?,?,?,?,?,?,?,?,NOW(),NOW())
				");
			$statement->execute([
				$_POST['product-name'],
				$_POST['product-designer'],
				$_POST['product-description'],
				$_POST['product-price'],
				$_POST['product-stock'],
				$_POST['product-category'],
				$_POST['product-id_custom'],
				$_POST['product-thumbnail'],
				$_POST['product-images']
			]);
			$id = $conn->lastInsertId();

			header("location:{$_SERVER['PHP_SELF']}? id = $id");
			break;
			
		case "delete":
			$statement = $conn->prepare("DELETE FROM `products` WHERE id=?");
			$statement->execute([$_GET['id']]);
			header("location:{$_SERVER['PHP_SELF']}");
			break;
	}

} catch (PDOException $e) {
	die ($e->getMessage());
}


// TEMPLATES
function productListItem($r,$o) {
return $r.<<<HTML
<div class="card soft">
	<div class="flex align-center">
		<div class="flex-none image-thumb"><img src='$o->thumbnail'>
		</div>
		<div class="flex-stretch" style="padding-left: 1em;">
			<h3 style="margin-top: .5em;"><a href="{$_SERVER['PHP_SELF']}?id=$o->id">$o->name <span style="font-size: .5em">by</span> $o->designer</a></h3>
		</div>
		<div class="flex-none underline" style="padding: 1em;"><a href="{$_SERVER['PHP_SELF']}?id=$o->id">Edit</a>
		</div>
		<div class="flex-none underline" style="padding: 1em;"><a href='{$_SERVER['PHP_SELF']}?id=$o->id&action=delete'>Delete</a>
		</div>
	</div>
</div>
HTML;
}

function showProductPage($o) {

	$id = $_GET['id'];
	$addoredit = $id == "new" ? "Add" : "Edit";
	$createorupdate = $id == "new" ? "create" : "update";
	$images = array_reduce(explode(",", $o->images),function($r,$o){return $r."<img src='$o'>";});

$display = <<<HTML
<div>
	<h2>$o->name</h2>
	<div class="form-control">
		<label class="form-label">Product Name</label>
		<span>$o->name</span>
	</div>
	<div class="form-control">
		<label class="form-label">Artist/Designer/Brand</label>
		<span>$o->designer</span>
	</div>
	<div class="form-control">
		<label class="form-label">Description</label>
		<span>$o->description</span>
	</div>
	<div class="form-control">
		<label class="form-label">Price</label>
		<span>&dollar;$o->price</span>
	</div>
	<div class="form-control">
		<label class="form-label">Stock</label>
		<span>$o->stock</span>
	</div>
	<div class="form-control">
		<label class="form-label">Category</label>
		<span>$o->category</span>
	</div>
	<div class="form-control">
		<label class="form-label">Product ID</label>
		<span>$o->id_custom</span>
	</div>
	<div class="form-control">
		<label class="form-label">Thumbnail</label>
		<span class="image-thumb"><img src='$o->thumbnail'></span>
	</div>
	<div class="form-control">
		<label class="form-label">Images</label>
		<span class="image-thumb">$images</span>
	</div>
</div>
HTML;

$form = <<<HTML

<div>
	<h2>$addoredit Product</h2>
	<form method="post" action="{$_SERVER['PHP_SELF']}?id=$id&action=$createorupdate">

	   <div class="form-control">
	       <label class="form-label" for="product-name">Product Name</label>
	       <input class="form-input" name="product-name" id="product-name" type="text" value="$o->name" placeholder="Enter Product Name">
	   </div>

	   <div class="form-control">
	       <label class="form-label" for="product-designer">Artist/Designer/Brand</label>
	       <input class="form-input" name="product-designer" id="product-designer" type="text" value="$o->designer" placeholder="Enter Designer/Brand">
	   </div>

	   <div class="form-control">
	       <label class="form-label" for="product-description">Description</label>
	       <textarea class="form-input" name="product-description" id="product-description" type="text" placeholder="Enter Description">$o->description</textarea>
	   </div>

	   <div class="form-control">
	       <label class="form-label" for="product-price">Price</label>
	       <input class="form-input" name="product-price" id="product-price" type="number" min="0" max="1000" step="0.01" value="$o->price" placeholder="Enter Price">
	   </div>

	   <div class="form-control">
	       <label class="form-label" for="product-stock">Stock</label>
	       <input class="form-input" name="product-stock" id="product-stock" type="number" min="0" max="200" step="1" value="$o->stock" placeholder="Enter Stock">
	   </div>

	   <div class="form-control">
	       <label class="form-label" for="product-category">Category</label>
	       <input class="form-input" name="product-category" id="product-category" type="text" value="$o->category" placeholder="Enter Category">
	   </div>

	   <div class="form-control">
	       <label class="form-label" for="product-id_custom">Product ID</label>
	       <input class="form-input" name="product-id_custom" id="product-id_custom" type="text" value="$o->id_custom" placeholder="Enter Product ID">
	   </div>

	   <div class="form-control">
	       <label class="form-label" for="product-thumbnail">Thumbnail</label>
	       <input class="form-input" name="product-thumbnail" id="product-thumbnail" type="text" value="$o->thumbnail" placeholder="Enter Product Thumbnail">
	   </div>

	   <div class="form-control">
	       <label class="form-label" for="product-images">Images</label>
	       <input class="form-input" name="product-images" id="product-images" type="text" value="$o->images" placeholder="Enter Product Images">
	   </div>

	   <br>

		<div class="form-control">
		    <input class="form-button" type="submit" value="Save">
		</div>

	</form>
</div>

HTML;

$output = $id == "new" ? "<div class='soft card'>$form</div>" :
	"<div class='grid gap'>
		<div class='col-xs-12 col-md-7'><div class='card soft'>$display</div></div>
		<div class='col-xs-12 col-md-5'><div class='soft card'>$form</div></div>
	</div>
	";

$delete = $id == "new" ? "" : "<a href='{$_SERVER['PHP_SELF']}?id=$id&action=delete'>Delete</a>";
	
echo <<<HTML
<div class="card soft">
	<nav class="display-flex">
		<div class="flex-stretch"><a href="{$_SERVER['PHP_SELF']}">
			< Back to List</a></div>
		<div class="flex-none">$delete</div>
	</nav>
</div>
$output
HTML;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">

	<title>Product Admin Page</title>

   <?php include "../parts/meta.php"; ?>

</head>

<body>

	<header>
		<div class="container display-flex align-center">
			<div class="flex-none">
				<h1>Product Admin</h1>
			</div>
			<div class="flex-stretch"></div>
			<nav class="nav">
				<ul class="flex">
					<li><a href="<?= $_SERVER['PHP_SELF'] ?>">Product List</a></li>
					<li><a href="<?= $_SERVER['PHP_SELF'] ?>?id=new">Add New Product</a></li>
				</ul>
			</nav>
		</div>
	</header>

	<br>

	<div class="container">


		<?php

		if(isset($_GET['id'])) { 
			showProductPage(
				$_GET['id']=="new" ?
				$empty_product :
				makeQuery(makeConn(), "SELECT * FROM `products` WHERE `id`=".$_GET['id'])[0]
			);
			// showProductPage();
		} else {

		?>

		<div class="flex spread">
			<h1>Product List</h1>
			<h4 style="padding-right: 1em; padding-top: 1em;"><a href="<?= $_SERVER['PHP_SELF'] ?>?id=new">+ Add New Product</a></h4>
		</div>

		<div>
			<?php
			
			$result = makeQuery(makeConn(), "SELECT * FROM `products` ORDER BY `id` DESC");

			
			echo array_reduce($result,'productListItem');
			
			}
			
			?>
		</div>

	</div>

	<div style="height: 3em;"></div>
    
	<footer>
		<div class="footer">
	        <p>&copy; 2024 ArchiTaste. All rights reserved.</p>
		</div>
	</footer>

</body>