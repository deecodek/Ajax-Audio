<?php
include "connection.php";
error_reporting(0);
$prc=$_GET['price'];
$prprc=$_GET['prprc'];
$prname=$_GET['prname'];
$prqty=$_GET['prqty'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@300&display=swap" rel="stylesheet">
 <link rel="stylesheet" href="checkout.css" class="css">
    <title>Ajax Checkout</title>
</head>
<body>
<h2> Checkout </h2>

<div class="row">
  <div class="col-75">
    <div class="container">
      <form action="paymentupload.php" action="thankyou.php"method="get">
      <input type="hidden" value="<?=$prname=$_GET['prname'];?>" name="hide1">
      <input type="hidden" value="<?=$prname=$_GET['prqty'];?>" name="hide2">
        <div class="row">
          <div class="col-50">
            <h3>Billing Address</h3>
            <label for="fname"><i class="fa fa-user"></i> Full Name</label>
            <input type="text" id="fname" name="firstname" placeholder="JExample. E Example">
            <label for="email"><i class="fa fa-envelope"></i> Email</label>
            <input type="text" id="email" name="email" placeholder="me@example.com">
            <label for="adr"><i class="fa fa-address-card-o"></i> Address</label>
            <input type="text" id="adr" name="address" placeholder="542 W. 15th Street">
            <label for="city"><i class="fa fa-institution"></i> City</label>
            <input type="text" id="city" name="city" placeholder="New Delhi">
            <div class="row">
              <div class="col-50">
                <label for="state">State</label>
                <input type="text" id="state" name="state" placeholder="New Delhi">
              </div>
              <div class="col-50">
                <label for="zip">Zip</label>
                <input type="text" id="zip" maxlenghth="6" name="zip" placeholder="10001">
              </div>
            </div>
          </div>

          <div class="col-50">
            <h3>Payment</h3>
            <label for="fname">Accepted Cards</label>
            <div class="icon-container">
              <i class="fa fa-cc-visa" style="color:navy;"></i>
              <i class="fa fa-cc-amex" style="color:blue;"></i>
              <i class="fa fa-cc-mastercard" style="color:red;"></i>
              <i class="fa fa-cc-discover" style="color:orange;"></i>
            </div>
            <label for="cname">Name on Card</label>
            <input type="text" id="cname" name="cardname" placeholder="John More Doe">
            <label for="ccnum">Credit card number</label>
            <input type="text" id="ccnum" name="cardnumber" maxlength="16" placeholder="1111-2222-3333-4444">
            <label for="expmonth">Exp Month</label>
            <input type="text" id="expmonth" name="expmonth" maxlength="2" placeholder="September">
            <div class="row">
              <div class="col-50">
                <label for="expyear">Exp Year</label>
                <input type="text" id="expyear" name="expyear" maxlength="4"  placeholder="2018">
              </div>
              <div class="col-50">
                <label for="cvv">CVV</label>
                <input type="text" id="cvv" name="cvv" maxlength="3" placeholder="352">
              </div>
            </div>
          </div>
          
        </div>
        
        <input type="submit" name="submit" id="reg" value="Buy Now " >  
        
    </div>
  </div>
 
  <div class="col-25">
    <div class="container">
      <h4>Cart <span class="price" style="color:black"><i class="fa fa-shopping-cart"></i> Quantity: &nbsp; <b> <?=  $prqty?></b></span></h4>
      <p><?= $prname=$_GET['prname'];?> &nbsp; <span class="price"><?=  $prprc?>	₹</span></p>
      
      <hr>
      <p>Total <span class="price" style="color:black"><b><?=$prc?></b></span></p>
      </form>
    </div>
  </div>
  
</div>
</body>
</html>
