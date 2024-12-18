<?php 

include "../lib/php/functions.php";

$empty_product = (object)[
	"name"=>"",
	"designer"=>"",
	"description"=>"",
	"price"=>"",
	"category"=>"",
	"thumbnail"=>"",
	"images"=>"",
];

// LOGIC
if(isset($_GET['action'])) {
	switch ($_GET['action']) {
		case 'update':
			header("location:{$_SERVER['PHP_SELF']}? id = {$_GET['id']}");
			break;
		
		case 'create':
			header("location:{$_SERVER['PHP_SELF']}? id = $id");
			break;
			
		case 'delete':
			header("location:{$_SERVER['PHP_SELF']}");
			break;
	}
}

// TEMPLATES
function productListItem($r,$o) {
return $r.<<<HTML
<div class="card soft">
	<div class="flex align-center">
		<div class="flex-none image-thumb"><img src='$o->thumbnail'></div>
		<div class="flex flex-stretch" style="padding-left: 1em;">
			<h3 style="margin-top: .5em;">$o->name</h3>
			<h5 style="margin: 1em .5em;">by</h5>
			<h3 style="margin-top: .5em;">$o->designer</h3>
		</div>
		<div class="flex-none underline" style="padding: 1em;"><a href="{$_SERVER['PHP_SELF']}?id=$o->id">Edit</a></div>
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
		<label class="form-label">Product</label>
		<span>$o->name</span>
	</div>
	<div class="form-control">
		<label class="form-label">Designer</label>
		<span>$o->designer</span>
	</div>
	<div class="form-control">
		<label class="form-label">Price</label>
		<span>&dollar;$o->price</span>
	</div>
	<div class="form-control">
		<label class="form-label">Category</label>
		<span>$o->category</span>
	</div>
	<div class="form-control">
		<label class="form-label">Description</label>
		<span>$o->description</span>
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
	       <label class="form-label" for="user-name">Product Name</label>
	       <input class="form-input" name="user-name" id="user-name" type="text" value="$o->name" placeholder="Enter Product Name">
	   </div>

	   <div class="form-control">
	       <label class="form-label" for="user-designer">Artist/Designer</label>
	       <input class="form-input" name="user-designer" id="user-designer" type="text" value="$o->designer" placeholder="Enter Artist Name">
	   </div>

	   <div class="form-control">
	       <label class="form-label" for="user-price">Price</label>
	       <input class="form-input" name="user-price" id="user-price" type="number" min="0" max="1000" step="0.01" value="$o->price" placeholder="Enter Product Price">
	   </div>

	   <div class="form-control">
	       <label class="form-label" for="user-category">Category</label>
	       <input class="form-input" name="user-category" id="user-category" type="text" value="$o->category" placeholder="Enter Product Category">
	   </div>

	   <div class="form-control">
	       <label class="form-label" for="user-description">Description</label>
	       <textarea class="form-input" name="user-description" id="user-description" type="text" placeholder="Enter Product Description">$o->description</textarea>
	   </div>

	   <div class="form-control">
	       <label class="form-label" for="user-thumbnail">Thumbnail</label>
	       <input class="form-input" name="user-thumbnail" id="user-thumbnail" type="text" value="$o->thumbnail" placeholder="Enter Product Thumbnail">
	   </div>

	   <div class="form-control">
	       <label class="form-label" for="user-images">Images</label>
	       <input class="form-input" name="user-images" id="user-images" type="text" value="$o->images" placeholder="Enter Product Images">
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
		<div class="flex-stretch"><a href="{$_SERVER['PHP_SELF']}">Back</a></div>
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
					<li><a href="<?= $_SERVER['PHP_SELF'] ?>?id=new">Product User</a></li>
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

		<h2>Product List</h2>

		<div>
			<?php
			
			$result = makeQuery(makeConn(),"SELECT * FROM `products`");
			
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