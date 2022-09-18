<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Admin Login</title>

<link href="adminlogin.css" rel="stylesheet" type="text/css" />
<style>
    .button {
  background-color: #4CAF50; /* Green */
  border-color:blue;
  color: black;
  padding: 10px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 30px 100px;
  cursor: pointer;
}
.button2:hover{
background-color:blue;
color:white;
border-color:blue;
}
.button2 {background-color: transparent;} 
</style>
</head>

<body>

<form action="adminauth.php" method="post">
<div style="padding: 100px 0 0 250px;">


<div id="login-box">

<H2 align="center">Admin Login</H2>
<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
<br />
<br />
<div id="login-box-name" style="margin-top:20px;">User ID:</div><div id="login-box-field" style="margin-top:20px;"><input name="userid" class="form-login" title="Username" value="" size="30" maxlength="2048" /></div>
<div id="login-box-name">Password:</div><div id="login-box-field"><input name="pass" type="password" class="form-login" title="Password" value="" size="30" maxlength="2048" /></div>
<br />
<br>&nbsp;
<br>&nbsp;
<br> &nbsp;
<button class="button button2">LOG IN</button>
</div>

</div>
</form>
</body>
</html>
