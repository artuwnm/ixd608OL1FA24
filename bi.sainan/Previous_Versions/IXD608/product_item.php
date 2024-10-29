<!DOCTYPE html>
<html lang="en">
<head>

   <?php include "parts/meta.php"; ?>

</head>
<body>

   <?php include "parts/navbar.php"; ?>

      
<div class="container">
   <h1>Product Name</h1>
   <div class="grid gap container">
      <div class="container col-xs-12 col-md-6">
         <div class="card soft">
            <figure class="figure">
                <img src="https://www.knoll.com/media/911/106/11613_c.jpg" alt="">
                <h4>Item #<?=$_GET['id']?> Barcelona Chair </h4>
            </figure>
         </div>
      </div>
      
      <div class="container col-xs-12 col-md-6">
         <h3>Description</h3>
               <p>Barcelona Chair designed by renowned architect Mies Van der Rohe</p>

         <br>

         <h3>Price</h3>
         <h2>$ 000.00</h2>

         <hr>
         <br>
         
         <div class="form-control nobullet">
          <li><a href="cart.php" class="form-button">Add to Cart</a></li>
         </div>

      </div>
   </div>
</div>

</body>
</html>