


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="order.css">
    <title>Order</title>
</head>
<body>


     <div class="container">
         <form action="order2.php" method="POST">
         <div class="row">

            <div class="firstcolum">
                 <h3 class="title">Billing Address</h3>
                 <div class="inputbox">
                    <span>Fill Name:</span>
                    <input type="text" name="name" placeholder="Enter Your Name">
                 </div>

                 <div class="inputbox">
                    <span>Email:</span>
                    <input type="text" name="email" placeholder="Enter Your Email">
                 </div>
                 <div class="inputbox">
                    <span>Address:</span>
                    <input type="text" name="address" placeholder="Enter Your Address">
                 </div>
                 <div class="inputbox">
                    <span>City:</span>
                    <input type="text" name="city" placeholder="Enter Your City">
                 </div>


                 <div class="flex">
                   <div class="inputbox">
                    <span>State:</span>
                    <input type="text" name="state" placeholder="Enter Your State">
                 </div>
                 <div class="inputbox">
                    <span>Zip Code:</span>
                    <input type="text" name="zip" placeholder="Zip Code">
                 </div>
                 </div>


</div>





<div class="firstcolum">
                 <h3 class="title">Payment</h3>
                

                 <div class="inputbox">
                    <span>Cards:</span>
                   <img src="card_pic.png" alt="">
                 </div>
                 <div class="inputbox">
                    <span>Cardholder Name:</span>
                    <input type="text" name="holderName" placeholder="Enter Your Name">
                 </div>
                 <div class="inputbox">
                    <span>Credit card Number:</span>
                    <input type="text" name="card"  placeholder="111-222-333">
                 </div>
                 <div class="inputbox">
                    <span>Exp Month:</span>
                    <input type="text" name="expireM" placeholder="January">
                 </div>


                 <div class="flex">
                   <div class="inputbox">
                    <span>Exp Year:</span>
                    <input type="number" name="expireY" placeholder="2025">
                 </div>
                 <div class="inputbox">
                    <span>CVV:</span>
                    <input type="text" name="cvv"  placeholder="1234">
                 </div>
                 </div>


</div>
</div>
   <input type="submit" name="submit" value="SUBMIT" class="submit-btn">
</form>



     </div>
</body>
</html>