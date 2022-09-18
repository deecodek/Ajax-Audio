<?php
include "connection.php";
error_reporting(0);
echo $fn=$_GET['fn'];
echo $ln=$_GET['ln'];
echo $em=$_GET['em'];


?>

<!DOCTYPE html>

<html>
<head>
  <link rel="stylesheet" href="formcss.css">
</head>
<body>

<?php include 'adminheader.php'?>

<h2>Update Form</h2>
<div >
  <style>.div{ margin:70px 450px;}</style>
<form action="" method="GET">

  <fieldset>

    <legend>Personal information:</legend>

    First name:<br>

    <input type="text" value="<?php echo "$fn"?>" name="firstname">

    <br>

    Last name:<br>

    <input type="text" value="<?php echo "$ln"?>" name="lastname">

    <br>

    Email:<br>

    <input type="text" value="<?php echo "$em"?>" name="email">

    <br>


    <input type="submit" name="submit" value="submit">

  </fieldset>

</form>
</div>
</body>

</html>

<?php
if($_GET['submit'])
{
    $fn=$_GET['firstname'];
    $ln=$_GET['lastname'];
    $em=$_GET['email'];
    $query="UPDATE REGISTER SET fname='$fn',lname='$ln',email='$em' WHERE email='$em'";

    $data=mysqli_query($conn,$query);
    if ($data){
        echo "<script> alert ('Data Updated') </script>";
    }
    else{
      echo"Failed To Insert Data";
    }
}
?>