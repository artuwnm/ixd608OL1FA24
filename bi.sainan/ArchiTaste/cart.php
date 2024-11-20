
 <?php 

 include_once "lib/php/functions.php";;
 include_once "parts/templates.php";

$cart = makeQuery(makeConn(),"SELECT * FROM `products` WHERE `custom#` IN (01,03,05)");

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

   <?php include "parts/crumb_order.php"; ?>

   <hr class="container">

      
<div class="container">

    <div class="grid gap">

        <div class="col-xs-12 col-md-7">
            <h1>Shopping Cart</h1>
            <div class="card soft container block nobullet">
                <div><?= array_reduce($cart,'cartListTemplate') ?></div>
            </div>
        </div>

        <div class="col-xs-12 col-md-1">
            <hr class="vr">
        </div>

        <div class="col-xs-12 col-md-4">
                <h1 class="centertext">Order Summary</h1>
                <hr>
                <script>
               const makeTable = (classes='') => {
                   const head = ['ID','Name','QTY','Price'];
                   const body = [
                       ['Barcelona Chair','1','899.99',],
                       ['LC3 Longue','1','599.99',],
                       ['Egg Chair','1','599.99',],
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

               <div class="flex">
                     <div class="flex-stretch"><h2>Subtotal</h2></div>
                     <div><h2>2099.97</h2></div>
               </div>
        </div>

    </div>

    <br>
    <hr>
    <br>

   <div>
       <a href="checkout.php" class="form-button">Checkout</a>
   </div>

</div>

    <br>
    <br>
    <br>
    
   <?php include "parts/footer.php"; ?>

</body>
</html>