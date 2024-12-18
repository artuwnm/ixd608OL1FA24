
 <?php 

 include_once "lib/php/functions.php";
 include_once "parts/templates.php";

$product = makeQuery(makeConn(),"SELECT * FROM `products` WHERE `id`=".$_GET['id'])[0];

$images = explode(",", $product->images);

$image_elements = array_reduce($images,function($r,$o){
   return $r."<img src='$o'>";
});


 ?>

<!DOCTYPE html>
<html lang="en">
<head>
   
   <title>Product Details</title>

   <?php include "parts/meta.php"; ?>

   <script src="js/product_thumbs.js"></script>

</head>
<body>

   <?php include "parts/header.php"; ?>

   <br>

   <?php include "parts/crumb_product.php"; ?>

      
<div class="container">

   <form method="post" action="cart_actions.php?action=add-to-cart">

      <input type="hidden" name="product-id" value="<?= $product->id ?>">

      <h1><?= $product->name ?> <span style="font-size: .5em;">by</span> <?= $product->designer ?></h1>

      <div class="container flex spread">

         <div class="card soft" style="width: 500px; margin: 0;">
            <figure class="figure image-main">
                <img src="<?= $product->thumbnail ?>" alt="">
            </figure>
            <br>
            <div class="image-thumb"><?= $image_elements ?></div>
         </div>

         <div style="width: 500px;">

            <h2 style="margin-top: 0;">Description</h2>
            <p><?= $product->description ?></p>
         
            <br>

            <label for="product-options" class="form-label h2">Options</label>
            <div class="form-select">
               <select id="product-options" name="product-options" style="background-color: var(--color-beige-light);">
                   <option>brown</option>
                   <option>white</option>
                   <option>black</option>
               </select>
            </div>
      
            <br>
      
            <div class="flex spread">
               <div>
                  <h2>Price</h2>
                  <h1 style="font-weight: normal;">&dollar;<?= $product->price ?></h1>
               </div>
                     
               <div>
                  <br>
                  <label for="product-amount" class="form-label h2">Amount</label>
                  <div style="padding-bottom: 1em;"></div>
                  <div class="form-select">
                     <select id="product-amount" name="product-amount"style="background-color: var(--color-beige-light);">
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
            </div>
            
            <hr><br>
            
            <div style="margin-bottom: 0;">
             <input type="submit" class="form-button" value="Add to Cart">
            </div>

         </div>
         
      </div>
      
   </form>
      
            <br><br><br><hr>
            

   <h3>Recommended For You</h3>

   <?php 
      
      recommendedSimilar($product->category, $product->id)

   ?>
         
</div>

    <br>
    <br>
    <br>
    <br>
   
   <?php include "parts/footer.php"; ?>

</body>
</html>