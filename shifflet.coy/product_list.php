
<?php

include_once "lib/php/functions.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
	
    <title>Product List</title>

   <?php include "parts/meta.php"; ?>

    <script src="lib/js/functions.js"></script>
    <script src="js/templates.js"></script>
    <script src="js/product_list.js"></script>

</head>
<body>

	<?php include "parts/navbar.php"; ?>
  

    <div class="container">
        <h2>Product List</h2>

        <div class="form-control">
            <form class="hotdog light" id="product_search">
                <input type="search" placeholder="Search Products">
            </form>
        </div>
        <div class="form-control display-flex">
                        <div class="flex-none">
                            <button data-filter="category" data-value="all" type="button" class="form-button">All</button>
                        </div>
                        <div class="flex-none">
                            <button data-filter="category" data-value="laptops" type="button" class="form-button">Laptops</button>
                        </div>
                        <div class="flex-none">
                            <button data-filter="category" data-value="mobile" type="button" class="form-button">Mobile</button>
                        </div>
                        <div class="flex-none">
                            <button data-filter="category" data-value="health" type="button" class="form-button">Health</button>
                        </div>
                        <div class="flex-none">
                            <button data-filter="category" data-value="smart" type="button" class="form-button">Smart</button>
                        </div>
                    </div>
                    <div class="flex-none">
                        <div class="form-select">
                            <select class="js-sort">
                                <option value="1">Newest</option>
                                <option value="2">Oldest</option>
                                <option value="3">Least Expensive</option>
                                <option value="4">Most Expensive</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="grid gap productlist">
            
        </div>

    </div>


    <?php include "parts/footer.php" ?>
    
</body>
</html>

