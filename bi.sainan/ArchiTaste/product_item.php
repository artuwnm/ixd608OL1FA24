
 <?php 

 include_once "lib/php/functions.php";

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

   <?php include "parts/navbar.php"; ?>

   <br>

   <?php include "parts/nav_product.php"; ?>

   <hr class="container">

      
<div class="container">
   <h1><?= $product->name ?></h1>
   <div class="container flex spread">
      <div style="width: 500px;">
         <div class="card soft">
            <figure class="figure image-main">
                <img src="<?= $product->thumbnail ?>" alt="">
            </figure>
            <div class="image-thumb"><?= $image_elements ?></div>
         </div>
      </div>
      
      <div style="width: 500px;">
         <h2>Description</h2>
               <p><?= $product->description ?></p>

         <br>

         <h2>Price</h2>
         <h1>&dollar;<?= $product->price ?></h1>

         <br>

         <h2>Amount</h2>
                 <div class="flex">
                    <div class="form-select">
                        <select style="background-color: var(--color-beige-light);">
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

         <br>
         <hr>
         <br>
         
         <div class="nobullet">
          <li><a href="addedtocart.php?id=<?= $product->id ?>" class="form-button">Add to Cart</a></li>
         </div>



      </div>
   </div>
</div>

    <br>
    <br>
    <br>
   
   <?php include "parts/footer.php"; ?>

</body>
</html>