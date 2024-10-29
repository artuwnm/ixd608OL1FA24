<!DOCTYPE html>
<html lang="en">
<head>

   <?php include "parts/meta.php"; ?>

</head>
<body>

   <?php include "parts/navbar.php"; ?>

<div class="container">
   <h1>Shopping Cart</h1>
   <div class="card soft grid">
      <nav class="nav.material col-xs-12 col-md-6">
         <ul>
            <li><a href="product_item.php?id=1">Item 1</a></li>
         </ul>
      </nav>
      <div class="display-flex col-xs-12 col-md-6">
          <div class="flex-stretch"></div>
          <div class="flex-none">
              <div class="form-select">
                  <select>
                      <option>1</option>
                      <option>2</option>
                      <option>3</option>
                      <option>4</option>
                  </select>
              </div>
          </div>
      </div>
   </div>

   <div class="card soft grid">
      <nav class="nav.material col-xs-12 col-md-6">
         <ul>
            <li><a href="product_item.php?id=1">Item 2</a></li>
         </ul>
      </nav>
      <div class="display-flex col-xs-12 col-md-6">
          <div class="flex-stretch"></div>
          <div class="flex-none">
              <div class="form-select">
                  <select>
                      <option>1</option>
                      <option>2</option>
                      <option>3</option>
                      <option>4</option>
                  </select>
              </div>
          </div>
      </div>
   </div>

   <div class="card soft grid">
      <nav class="nav.material col-xs-12 col-md-6">
         <ul>
            <li><a href="product_item.php?id=1">Item 3</a></li>
         </ul>
      </nav>
      <div class="display-flex col-xs-12 col-md-6">
          <div class="flex-stretch"></div>
          <div class="flex-none">
              <div class="form-select">
                  <select>
                      <option>1</option>
                      <option>2</option>
                      <option>3</option>
                      <option>4</option>
                  </select>
              </div>
          </div>
      </div>
   </div>

<hr>
<br>

   <div class="form-control nobullet">
       <li><a href="checkout.php" class="form-button">Check Out</a></li>
   </div>
</div>

</body>
</html>