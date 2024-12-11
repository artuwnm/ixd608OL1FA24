
 <?php 

 include_once "lib/php/functions.php";
 include_once "parts/templates.php";

 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Checkout</title>

   <?php include "parts/meta.php"; ?>

</head>
<body>

   <?php include "parts/header.php"; ?>

   <br>

   <?php include "parts/crumb_order.php"; ?>

      
<div class="container">

    <div class="grid gap">

       <div class="col-xs-12 col-md-7">

           <div class="container">
               <h1>Payment Info</h1>
               <div class="card soft">
                    <form>

                        <div class="form-control">
                            <label class="form-label">Name</label>
                            <input type="text" placeholder="Name of Cardholder" class="form-input">
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
                                <input type="date" placeholder="Expiration Date" class="form-input flex-stretch">
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
               <h1>Shipping Info</h1>
               <div class="card soft">
                    <form>
                        <div class="form-control">
                            <label class="form-label">Name</label>
                            <input type="text" placeholder="Name of Recipient" class="form-input">
                        </div>
                        <div class="form-control">
                            <label class="form-label">Phone</label>
                            <input type="text" placeholder="Contact Number" class="form-input">
                        </div>
                        <div class="form-control">
                            <label class="form-label">Address Line 1</label>
                            <input type="text" placeholder="Apt, Street" class="form-input">
                        </div>
                        <div class="form-control display-flex flex-align-center">
                            <div class="flex-none">
                                <label class="form-label">Address Line 2</label>
                            </div>
                            <div class="flex-stretch">
                                <input type="text" placeholder="City, State" class="form-input flex-stretch">
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
            <h1 class="text-center">Order Summary</h1>
                <hr>
                <div><?= cartTotals() ?></div>
        </div>
        
    </div>

   <br>
   <hr class="container">
   <br>
   
   <div class="container">
       <a href="confirmation.php" class="form-button">Pay</a>
   </div>

</div>

    <br>
    <br>
    <br>
    
   <?php include "parts/footer.php"; ?>

</body>
</html>