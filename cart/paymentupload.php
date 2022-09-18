

<?php
include 'connection.php';
error_reporting(0);



$fn=$_GET['firstname'];
$em=$_GET['email'];
$adr=$_GET['address'];
$city=$_GET['city'];
$state=$_GET['state'];
$zip=$_GET['zip'];
$cname=$_GET['cardname'];
$cnum=$_GET['cardnumber'];
$product=$_GET['hide1'];
$quantity=$_GET['hide2'];


$query="INSERT INTO payment VALUES('$fn','$em','$adr','$city','$state','$zip','$cname','$cnum','$product','$quantity')";
$data=mysqli_query($conn,$query);
if($data)
{
  echo "Your Order Has Been Recorded";
}
else
{
  echo"Failed To Insert Data";
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>Body {background-image: url("thankyou2.jpg");
  color: black;
        
}
h1 {
    color: white;
}
h1 {
    text-align: center;
}
h1 {
    color: crimson;
   padding: 200px; 
}
 h1  { 
  font-size: 300%;
}
p {
    text-align: center;
}</style>
    <title>Document</title>
</head>
<h1>Thank You For Shopping With Us</h1>

<p>Your order has been successfully recorded</p>

<p class = "text-center">Click here to get back to<a href="http://localhost/online_shop3/index.php"target = "_blank"> Homepage </a>.</p>




<html>
  <body class="img-responsive"background="http://static.srcdn.com/wp-content/uploads/2017/02/Thanos-2016-comics-wallpaper.jpg"</html>
  </body>
</html>