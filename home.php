<?php 
session_start();

if ( isset($_SESSION['email'])) {

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>HOME</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
     <h1>Hello, <?php echo $_SESSION['fname']; ?></h1>
     <a href="cart/index.php">Continue Shopping</a>
</body>
</html>

<?php 
}else{
     header("Location: index.php");
     exit();
}
 ?>