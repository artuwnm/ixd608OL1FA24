<?php

include_once "../php/functions.php";
include_once "../parts/templates.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Product list</title>

	<?php include "../parts/meta.php"; ?>

	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

	<script src="../js/functions.js"></script>
	<script src="../js/templates.js"></script>
	<script src="../js/product_list.js"></script>

</head>
<body>

	<?php include "../parts/navbar.php"; ?>

	<?php include "../parts/viewwindow.php"; ?>

<div class="container">

    <h2>Product List</h2>

    <div class="form-control">
        <form class="hotdog light" id="product-search">
            <input type="search" placeholder="Search Products">
        </form>
    </div> 

    <div class="form-control">
    <div class="card soft">
        <div class="display-flex flex-wrap">
            <div class="flex-stretch display-flex">
                <div class="flex-none">
                    <button data-filter="category" data-value="" type="button" class="form-button">All</button>
                </div>
                <div class="flex-none">
                    <button data-filter="category" data-value="Pure Scents" type="button" class="form-button">Pure Scents</button>
                </div>
                <div class="flex-none">
                    <button data-filter="category" data-value="Scent Blends" type="button" class="form-button">Scent Blends</button>
                </div>
            </div> <!-- flex-stretch -->
            <div class="flex-none">
                <div class="form-select">
                    <select class="js-sort">
                        <option value="1">Newest</option>
                        <option value="2">Oldest</option>
                        <option value="3">Price Low to High</option>
                        <option value="4">Price High to Low</option>
                    </select>
                </div> <!-- form-select -->
            </div> <!-- flex-none -->
        </div> <!-- display-flex -->
    </div> <!-- card soft -->
</div> <!-- form-control -->


     <div class='productlist grid gap' style="margin-bottom: 4em;">
     </div>


<?php include "../parts/footer.php"; ?>
</body>
</html>