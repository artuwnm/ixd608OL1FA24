<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Checkout</title>

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

           <div class="container">
               <h1>Payment Info</h1>
               <div class="card soft">
                    <form>
                        <div class="form-control">
                            <label class="form-label">Name</label>
                            <input type="text" placeholder="Full Name" class="form-input">
                        </div>
                        <div class="form-control">
                            <label class="form-label">Card No.</label>
                            <input type="text" placeholder="Card Number" class="form-input">
                        </div>
                        <div class="form-control display-flex flex-align-center">
                            <div class="flex-none">
                                <label class="form-label">Exp.</label>
                            </div>
                            <div class="flex-stretch">
                                <input type="datetime" placeholder="Expiration Date" class="form-input flex-stretch">
                            </div>
                            <div class="flex-none">
                                <label class="form-label">Code</label>
                            </div>
                            <div class="flex-stretch">
                                <input type="text" placeholder="CVV Code" class="form-input flex-stretch">
                            </div>
                        </div>
                    </form>
               </div>
           </div>

            <div class="container">
               <h1>Billing Info</h1>
               <div class="card soft">
                    <form>
                        <div class="form-control">
                            <label class="form-label">Name</label>
                            <input type="text" placeholder="Full Name" class="form-input">
                        </div>
                        <div class="form-control">
                            <label class="form-label">Phone</label>
                            <input type="text" placeholder="Phone Number" class="form-input">
                        </div>
                        <div class="form-control">
                            <label class="form-label">Address</label>
                            <input type="text" placeholder="Address Line 1" class="form-input">
                        </div>
                        <div class="form-control display-flex flex-align-center">
                            <div class="flex-none">
                                <label class="form-label">Address</label>
                            </div>
                            <div class="flex-stretch">
                                <input type="text" placeholder="Address Line 2" class="form-input flex-stretch">
                            </div>
                            <div class="flex-none">
                                <label class="form-label">Zip</label>
                            </div>
                            <div class="flex-stretch">
                                <input type="text" placeholder="Zip Code" class="form-input flex-stretch">
                            </div>
                        </div>
                    </form>
               </div>
            </div>

        </div>
      
        
        <div class="col-xs-12 col-md-1">
            <hr class="vr">
        </div>


        <div class="col-xs-12 col-md-4">
            <h1 class="centertext">Order Total</h1>

           <hr>
            
             <div class="flex card-section">
                 <div class="flex-stretch"><h3>Subtotal</h3></div>
                 <div><h3>2099.97</h3></div>
             </div>

             <div class="flex card-section">
                 <div class="flex-stretch"><h3>Taxes</h3></div>
                 <div><h3>50.00</h3></div>
             </div>

             <div class="flex card-section">
                 <div class="flex-stretch"><h3>Shipping</h3></div>
                 <div><h3>00.00</h3></div>
             </div>

             <div class="flex card-section" style="color: green;">
                 <div class="flex-stretch"><h3>Discount</h3></div>
                 <div><h3>- 100.00</h3></div>
             </div>

           <hr>

             <div class="flex">
                 <div class="flex-stretch"><h2>Total</h2></div>
                 <div><h2>2049.97</h2></div>
             </div>
        </div>
        
    </div>

   <br>
   <hr>
   <br>
   
   <div>
       <a href="confirmation.php" class="form-button">Pay</a>
   </div>

</div>

    <br>
    <br>
    <br>
    
   <?php include "parts/footer.php"; ?>

</body>
</html>