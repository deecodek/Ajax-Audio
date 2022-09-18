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
    <title>Document</title>
    <link rel="stylesheet" href="font.css">
    <link rel="stylesheet" href="feedback.css">
</head>
<body>
    <div id="form-main">
  <div id="form-div">
    <form class="form" id="form1">
      
      <p class="name">
        <input name="name" type="text" class="validate[required,custom[onlyLetter],length[0,100]] feedback-input" placeholder="Name" id="name" />
      </p>
      
      <p class="email">
        <input name="email" type="text" class="validate[required,custom[email]] feedback-input" id="email" placeholder="Email" />
      </p>
      
      <p class="text">
        <textarea name="text" class="validate[required,length[6,300]] feedback-input" id="comment" placeholder="Comment"></textarea>
      </p>
      
      
      <div class="submit">
        <input type="submit" value="SEND" id="button-blue"/>
        <div class="ease"></div>
      </div>
    </form>
  </div>
</body>
</html>
<?php
$nm=$_GET['name'];
$em=$_GET['email'];
$txt=$_GET['text'];

$query="INSERT INTO feedback VALUES('$nm','$em','$txt')";
$data=mysqli_query($conn,$query);
if($data)
{
    echo "Thank You For Your Feedback";
  }
  else
  {
    echo"Feedback Not Received";
  }
?>