<?php 
include_once "../lib/php/functions.php";
include "../parts/meta.php";

$empty_product = (object)[
	"name"=>"Deck",
	"price"=>"120.00",
	"description"=>"lorem",
	"size"=>"8",
	"color"=>"Blue",
	"category"=>"Decks",
	"thumbnail"=>"deck_baker_thumb.jpg",
	"images"=>"deck_baker_1.jpg"
];




// LOGIC

try {
	$conn = MakePDOConn();
	switch ($_GET['action']) {
		case 'update':
			$statement = $conn->prepare("UPDATE
				`products`
				SET
					`name`=?,
					`price`=?,
					`description`=?,
					`size`=?,
					`color`=?,
					`category`=?,
					`thumbnail`=?,
					`images`=?,
					`date_modify`=NOW()
				WHERE `id`=?	
				");
			$statement->execute([
				$_POST['product-name'],
				$_POST['product-price'],
				$_POST['product-description'],
				$_POST['product-size'],
				$_POST['product-color'],
				$_POST['product-category'],
				$_POST['product-thumbnail'],
				$_POST['product-images'],
				$_GET['id']
			]);
			header("location:{$_SERVER['PHP_SELF']}?id={$_GET['id']}");
			break;	
		case 'create':
		$statement = $conn->prepare("INSERT INTO
				`products`
				(
					`name`,
					`price`,
					`description`,
					`size`,
					`color`,
					`category`,
					`thumbnail`,
					`images`,
					`date_create`,
					`date_modify`
					)
				VALUES(?,?,?,?,?,?,?,?,NOW(),NOW())
				");
			$statement->execute([
				$_POST['product-name'],
				$_POST['product-price'],
				$_POST['product-description'],
				$_POST['product-size'],
				$_POST['product-color'],
				$_POST['product-category'],
				$_POST['product-thumbnail'],
				$_POST['product-images']
			]);
			$id = $conn->lastInsertId();
			header("location:{$_SERVER['PHP_SELF']}?id=$id");
			break;
		case 'delete':
			$statement = $conn->prepare("DELETE FROM `products` WHERE id=?");
			$statement->execute([$_GET['id']]);
			header("location:{$_SERVER['PHP_SELF']}");
			break;
	}
} catch(PDOException $e) {
	die($e->getMessage());
}




// TEMPLATES

function productListItem($r,$o){
return $r.<<<HTML
<div class="card">
	<div class="display-flex">
		<div class="flex-none images-thumbs"><img src='img/$o->thumbnail'></div>
		<div class="flex-stretch" style="padding: 1em;">$o->name</div>
		<div class="flex-none"><a href="{$_SERVER['PHP_SELF']}?id=$o->id" class="form-button">Edit</a></div>		
	</div>
</div>	
HTML;
}



function showProductPage($o){
$id = $_GET['id'];
$addoredit = $id == "new" ? "Add" : "Edit";
$createorupdate = $id == "new" ? "create" : "update";
$images = array_reduce(explode(",", $o->images),function($r,$o){return $r."<img src='img/$o'>";});


$display = <<<HTML

<div class="container">
	<div class="card">
	<div>
		<h3>$o->name</h3>
		<div class="form-control">
			<label class="form-label">Price</label>
			<span>&dollar;$o->price</span>
		</div>
		<div class="form-control">
			<label class="form-label">Description</label>
			<span>$o->description</span>
		</div>
		<div class="form-control">
			<label class="form-label">Size</label>
			<span>$o->size</span>
		</div>
		<div class="form-control">
			<label class="form-label">Color</label>
			<span>$o->color</span>
		</div>
		<div class="form-control">
			<label class="form-label">Category</label>
			<span>$o->category</span>
		</div>
		<div class="form-control">
			<label class="form-label">Thumbnail</label>
			<span class="images-thumbs"><img src='img/$o->thumbnail'></span>
		</div>
		<div class="form-control">
			<label class="form-label">Other images</label>
			<span class="images-thumbs">$images</span>
		</div>
	</div>
	</div>
</div>
HTML;



$form = <<<HTML

<div class="container">
	<div class="card">

		<form method="post" action="{$_SERVER['PHP_SELF']}?id=$id&action=$createorupdate">
			<h3>$addoredit product</h3>
			<div class="form-control">
				<label class="form-label" for="product-name">Name</label>
				<input class="form-input" name="product-name" id="product-name" type=text value="$o->name" placeholder="Enter the product name">
			</div>
			<div class="form-control">
				<label class="form-label" for="product-price">Price</label>
				<input class="form-input" name="product-price" id="product-price" type=Number min="0" max="1000" step="0.01" value="$o->price" placeholder="Enter price">
			</div>
			<div class="form-control">
				<label class="form-label" for="product-description">Description</label>
				<textarea class="form-input" name="product-description" id="product-description" placeholder="Enter the product description">$o->description</textarea>
			</div>
			<div class="form-control">
				<label class="form-label" for="product-size">Size</label>
				<input class="form-input" name="product-size" id="product-size" type=text value="$o->size" placeholder="Enter the product size">
			</div>
			<div class="form-control">
				<label class="form-label" for="product-color">Color</label>
				<input class="form-input" name="product-color" id="product-color" type=text value="$o->color" placeholder="Enter the product color">
			</div>
			<div class="form-control">
				<label class="form-label" for="product-category">Category</label>
				<input class="form-input" name="product-category" id="product-category" type=text value="$o->category" placeholder="Enter the product category">
			</div>
			<div class="form-control">
				<label class="form-label" for="product-thumbnail">Thumbnail</label>
				<input class="form-input" name="product-thumbnail" id="product-thumbnail" type=text value="$o->thumbnail" placeholder="Enter the product thumbnail">
			</div>
			<div class="form-control">
				<label class="form-label" for="product-images">Other images</label>
				<input class="form-input" name="product-images" id="product-images" type=text value="$o->images" placeholder="Enter the product images">
			</div>
			
			<div class="form-control">
				<input class="form-button" type="submit" value="Save changes">
			</div>	
		</form>
	</div>	
</div>
HTML;

$output = $id == "new" ? $form :
	"<div class='grid gap'>
		<div class='col-xs-12 col-md-7'>$display</div>
		<div class='col-xs-12 col-md-5'>$form</div>
	</div>	
	";

$delete = $id == "new" ? "" : "<a href='{$_SERVER['PHP_SELF']}?id=$id&action=delete'>Delete</a>";

echo <<<HTML
<nav class="display-flex">
	<div class="flex-stretch"><a href="{$_SERVER['PHP_SELF']}">Back</a></div>
	<div class="flex-none">$delete</div>
</nav>
$output
HTML;
}

 ?>



<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<?php include "../parts/meta.php"; ?>
	<title>Product admin page</title>
</head>
<body>
	
	<header class="navbar">
		<div class="container-nav display-flex">
			<div class="flex-none">
				<h1>Product Administration</h1>
			</div>

			<div class="flex-stretch"></div>
			<nav class="nav nav-flex flex-none">
				<ul>
					<li><a href="<?= $_SERVER['PHP_SELF'] ?>">Product list</a></li>
					<li><a href="<?= $_SERVER['PHP_SELF'] ?>?id=new">Add new product</a></li>
				</ul>				
			</nav>
		</div>
	</header>



	<div class="container">

		<?php 

		if (isset($_GET['id'])) {
			showProductPage(
				$_GET['id']=="new" ?
					$empty_product :
					makeQuery(makeConn(),"SELECT * FROM `products` WHERE `id`=".$_GET['id'])[0]
			);

		//showProductPage();
		} else {

		?>


		<h2>Product list</h2>
		
		<?php 

		$result = makeQuery(makeConn(),"SELECT * FROM `products` ORDER BY `date_create` DESC");

		echo array_reduce($result,'productListItem');

		}

		?>

	</div>
	</div>

	<?php include "../parts/footer.php"; ?>	
	
</body>

