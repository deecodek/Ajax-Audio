<!DOCTYPE html>
<html>
<head>
	<title>LOGIN</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="font.css">
	
</head>
<body>
     <form action="loginauth.php" method="post">
	 <style>
body {
  background-image: url('earphones.jpg');
}
</style>
     	<h2>LOGIN</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
     	<label>User Name</label>
     	<input type="text" name="uname" placeholder="User Name"><br>

     	<label>User Name</label>
     	<input type="password" name="password" placeholder="Password"><br>

     	<button type="submit">Login</button>
		 
		 <div class="link">
	 <a   href="register.php" type="button" >Register</a>
		 <a  href="index.php" type="button" >Home</a>
	 </div>
     </form>
	 
</body>
</html>