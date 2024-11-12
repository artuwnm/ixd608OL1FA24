
 <?php 

 include_once "lib/php/functions.php";;
 include_once "parts/templates.php";

$cart = makeQuery(makeConn(),"SELECT * FROM `products` WHERE `serial#` IN (01,03,05)");

 ?>


<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Shopping Cart</title>

   <?php include "parts/meta.php"; ?>

</head>
<body>

   <?php include "parts/navbar.php"; ?>

   <br>

   <?php include "parts/nav_order.php"; ?>

   <hr class="container">

      
<div class="container">

    <div class="grid gap">
        <div class="col-xs-12 col-md-7">
   <h1>Shopping Cart</h1>
            <div class="card soft container block nobullet">
                <li><a href="product_item.php?id=1"><?= array_reduce($cart,'cartListTemplate') ?></a></li>
            </div>
        </div>


        <div class="col-xs-12 col-md-1">
        </div>


        <div class="col-xs-12 col-md-4">
            <div>
                       <div>
            <h1 class="centertext">Order Summary</h1>
            <br>
            <script>
           const makeTable = (classes='') => {
               const head = ['ID','Name','QTY','Price'];
               const body = [
                   ['Product Name','1','00.00',],
                   ['Product Name','1','00.00',],
                   ['Product Name','1','00.00',],
               ];
               document.write(`
               <table class="${classes}">
                   <thead><tr>${head.reduce((r,o)=>r+`<th>${o}</th>`,'')}</tr></thead>
                   <tbody>${body.reduce((r,o,i)=>r+
                       `<tr>${
                           [i+1,...o].reduce((r,o)=>r+`<td>${o}</td>`,'')
                       }</tr>`,'')
                   }</tbody>
               </table>
               `);
           }
           </script>
           <div class="container" id="tables">
              <div>
                 <script>makeTable('table lined horizontal')</script>
              </div>
           </div>
           <hr>
           <h3>&nbsp; Order Total &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 00.00</h3>
        </div>
            </div>
        </div>
    </div>

    <br>
    <hr>
    <br>

   <div class="nobullet">
       <li><a href="checkout.php" class="form-button">Checkout</a></li>
   </div>

</div>

    <br>
    <br>
    <br>
    
   <?php include "parts/footer.php"; ?>

</body>
</html>