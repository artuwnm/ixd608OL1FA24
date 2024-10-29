<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Checkout</title>

   <?php include "parts/meta.php"; ?>

</head>
<body>

   <?php include "parts/navbar.php"; ?>

   <br>

   <?php include "parts/nav_order.php"; ?>

   <hr class="container">

      
<div class="container">

    <div class="grid gap container flex-stretch">

       <div class="container col-xs-12 col-md-6">
           <h1>Payment Info</h1>
           <div class="card soft">
                <form>
                    <div class="form-control">
                        <label class="form-label"></label>
                        <input type="text" placeholder="Name" class="form-input">
                    </div>
                    <div class="form-control">
                        <label class="form-label"></label>
                        <input type="number" placeholder="Card No." class="form-input">
                    </div>
                    <div class="form-control display-flex flex-align-center">
                        <div class="flex-none">
                            <label class="form-label"></label>
                        </div>
                        <div class="flex-stretch">
                            <input type="search" placeholder="Exp." class="form-input flex-stretch">
                        </div>
                        <div class="flex-none">
                            <label class="form-label"></label>
                        </div>
                        <div class="flex-stretch">
                            <input type="search" placeholder="Code" class="form-input flex-stretch">
                        </div>
                    </div>
                </form>
           </div>
        </div>
      
        <div class="container col-xs-12 col-md-6">
            <h1>Order Summary</h1>
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
           <h3>&nbsp; Order Total &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; $ 00.00</h3>
        </div>
        
    </div>

   <br>
   <hr>
   <br>
   
   <div class="form-control nobullet">
       <li><a href="checkout.php" class="form-button">Pay</a></li>
   </div>

</div>

</body>
</html>