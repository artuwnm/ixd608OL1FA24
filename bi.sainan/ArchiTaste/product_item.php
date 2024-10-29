<!DOCTYPE html>
<html lang="en">
<head>
   
   <title>Product Details</title>

   <?php include "parts/meta.php"; ?>

</head>
<body>

   <?php include "parts/navbar.php"; ?>

   <br>

   <?php include "parts/nav_product.php"; ?>

   <hr class="container">

      
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

         <h3>Choices</h3>
         <div class="display-flex">
             <div class="flex-none">
                 <div class="form-select options">
                     <select>
                         <option>Option A</option>
                         <option>Option B</option>
                         <option>Option C</option>
                         <option>Option D</option>
                     </select>
                 </div>
             </div>
         </div>

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

    <br>
    <br>
    <br>
   
   <?php include "parts/footer.php"; ?>

</body>
</html>