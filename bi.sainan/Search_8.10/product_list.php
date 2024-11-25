<?php 

    include_once "lib/php/functions.php";
    include_once "parts/templates.php";

     ?>

<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Product List</title>

   <?php include "parts/meta.php"; ?>

    <script src="lib/js/functions.js"></script>
    <script src="js/templates.js"></script>
    <script src="js/product_list.js"></script>

    <script>
       query({type:'products_all'}).then(d=>{
        $(".productlist").html(listItemTemplate(d.result))
       });
    </script>

</head>
<body>

   <?php include "parts/navbar.php"; ?>

   <br>

   <?php include "parts/crumb_product.php"; ?>

   <hr class="container">


<div class="container">
    <div class="container">
       <h1>Products</h1>

       <div class='grid gap productlist'></div>

    <?php 
/*
    $result = makeQuery(
        makeConn(),
        "SELECT *
        FROM `products`
        ORDER BY `custom#` ASC
        LIMIT 15
        "
    );

    echo "<div class='grid gap productlist'>",array_reduce($result,'productListTemplate'),"</div>";
*/
     ?>

    </div>
    
        <br>
        <br>
        <hr>
        <br>
    
        <div class="form-control">
        <a href="product_list.php" class="form-button">Next Page</a>
        </div>
</div>

    <br>
    <br>
    <br>

   <?php include "parts/footer.php"; ?>

</body>
</html>