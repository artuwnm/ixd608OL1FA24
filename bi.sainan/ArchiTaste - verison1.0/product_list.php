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

</head>
<body>

   <?php include "parts/navbar.php"; ?>

   <br>

   <?php include "parts/crumb_product.php"; ?>

   <hr class="container">

   <br>

   <div class="container" id="searchbar">
       <form id="product-search">
           <input type="search" class="hotdog" placeholder="Search">
       </form>

   <br>

       <div class="flex">
           <div class="flex form-control">
               <div style="padding-right: 1em;"><button data-filter="category" data-value="" type="button" class="filter">All</button></div>
               <div style="padding-right: 1em;"><button data-filter="category" data-value="furniture" type="button" class="filter">Furniture</button></div>
               <div style="padding-right: 1em;"><button data-filter="category" data-value="lighting" type="button" class="filter">Lighting</button></div>
               <div><button data-filter="category" data-value="model" type="button" class="filter">Model</button></div>
           </div>
           
           <div class="stretch"></div>
           
           <div class="form-select sort">
             <select class="js-sort">
                 <option value="1">Newest</option>
                 <option value="2">Oldest</option>
                 <option value="3">Lowest Price</option>
                 <option value="4">Highest Price</option>
             </select>
            </div>
       </div>

   </div>


<div class="container">
    <div class="container">
       <h1>Products</h1>

       <div class='grid gap productlist'></div>

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