<?php
include("connection.php");
error_reporting(0);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="register.css">
  <link rel="stylesheet" href="font.css">
  
  <title>Document</title>
</head>
<body>
  <h2><span>AJAX</span> &nbsp;SignUps</h2><br>    
  <div class="login">    

  <form id="login" method="get">    
      <label><b>First Name     
      </b>    
      </label>    
      <input type="text" name="firstname" id="fname" placeholder="First Name">    
      <br><br>    
      <label>
        <b>Last Name</b>    
      </label>    
      <input type="text" name="lastname" id="lname" placeholder="Last Name">    
      <br>
      <br>  
      <label>
        <b>E-Mail</b> <br>   
      </label>    
      <input type="text" name="email" id="email" placeholder="E-mail">    
      <br>
      <br>  
      <label>
        <b>Password</b>    
      </label>    
      <input type="Password"  id="Pass" name="password" placeholder="Password">    
      <br>
      <br>  
      <label>
        <b> Repeat Password</b>    
      </label>    
      <input type="Password" name="reppassword" id="Pass" placeholder=" Repeat Password">    
      <br>
      <br>    
      <input type="submit" name="submit" id="reg" value="Sign Up">  
      <br>
      <br>
      <a href="index.php">HOME</a>
    
      <a href="login.php">Log In</a> 
      <br>    
  </form>     
</div>
</body>
</html>
<?php
$fn=$_GET['firstname'];
$ln=$_GET['lastname'];
$em=$_GET['email'];
$pwd=$_GET['password'];
$reppwd=$_GET['reppassword'];



$query="INSERT INTO REGISTER VALUES('$fn','$ln','$em','$pwd','$reppwd')";
$data=mysqli_query($conn,$query);
if($data)
{
  echo "Data inserted into database";
}
else
{
  echo"Failed To Insert Data";
}
?>
