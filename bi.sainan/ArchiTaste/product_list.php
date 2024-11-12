<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Product List</title>

   <?php include "parts/meta.php"; ?>

</head>
<body>

   <?php include "parts/navbar.php"; ?>

   <br>

   <?php include "parts/nav_product.php"; ?>

   <hr class="container">


<div class="container">
    <div class="container">
       <h1>Products</h1>
    


    <?php 

    include_once "lib/php/functions.php";
    include_once "parts/templates.php";

    $result = makeQuery(
        makeConn(),
        "SELECT *
        FROM `products`
        ORDER BY `serial#` ASC
        LIMIT 15
        "
    );

    echo "<div class='grid gap productlist'>",array_reduce($result,'productListTemplate'),"</div>";

     ?>

    </div>
    
        <br>
        <br>
        <hr>
        <br>
    
        <div class="form-control nobullet">
        <li><a href="product_list.php" class="form-button">Next Page</a></li>
        </div>
</div>

    <br>
    <br>
    <br>

   <?php include "parts/footer.php"; ?>

</body>
</html>