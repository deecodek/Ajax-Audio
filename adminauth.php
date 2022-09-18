<?php 
session_start(); 
include "connection.php";

if (isset($_POST['userid']) && isset($_POST['pass'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$uname = validate($_POST['userid']);
	$pass = validate($_POST['pass']);

	if (empty($uname)) {
		header("Location: adminlogin.php?error=User ID is required");
	    exit();
	}else if(empty($pass)){
        header("Location: adminlogin.php?error=Password is required");
	    exit();
	}else{
		$sql = "SELECT * FROM adminlogin WHERE userid='$uname' AND password='$pass'";

		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) === 1) {
			$row = mysqli_fetch_assoc($result);
            if ($row['userid'] === $uname && $row['password'] === $pass) {
				echo'login successful';
            	$_SESSION['email'] = $row['email'];
            	$_SESSION['fname'] = $row['fname'];
            	header("Location: view.php");
		        exit();
            }else{
				header("Location: adminlogin.php?error=Incorect User name or password");
		        exit();
			}
		}else{
			header("Location: adminlogin.php?error=Incorect User name or password");
	        exit();
		}
	}
	
}else{
	header("Location: login.php");
	exit();
}