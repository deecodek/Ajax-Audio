<?php 

include "connection.php";

  if (isset($_POST['submit'])) {

    $first_name = $_POST['firstname'];

    $last_name = $_POST['lastname'];

    $email = $_POST['email'];

    $password = $_POST['password'];

    $repeatpassword = $_POST['repeatpassword'];

    $sql = "INSERT INTO `register`(`fname`, `lname`, `email`, `pass`, `reppass`) VALUES ('$first_name','$last_name','$email','$password','$repeatpassword')";

    $result = $conn->query($sql);

    if ($result == TRUE) {

      echo "New record created successfully.";

    }else{

      echo "Error:". $sql . "<br>". $conn->error;

    } 

    $conn->close(); 

  }

?>

<!DOCTYPE html>

<html>
<head><link rel="stylesheet" href="formcss.css"></head>
<body>

<?php include 'adminheader.php'?>
<div>
<h2>Signup Form</h2>

<form action="" method="POST">

  <fieldset>

    <legend>Personal information:</legend>

    First name:<br>

    <input type="text" name="firstname">

    <br>

    Last name:<br>

    <input type="text" name="lastname">

    <br>

    Email:<br>

    <input type="email" name="email">

    <br>

    Password:<br>

    <input type="password" name="password">

    <br>

    Repeat Password:<br>

<input type="password" name="repeatpassword">
<br>

    <input type="submit" name="submit" value="submit">

  </fieldset>

</form>
</div>
</body>

</html>