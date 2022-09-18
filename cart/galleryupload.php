<?php
error_reporting(0);
include("connection.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="formcss.css"></link>
    <css></css>
</head>
<body>
  <div>
<form action="" method="POST" enctype="multipart/form-data">
Product Name: <br>
<input type="text" name="name"><br><br>
Product Discription:<br>
<input type="text" name="discription"><br><br>
Product Price:<br>
<input type="text" name="price"><br><br>
Product Image File:<br>
    <input type="file" name="uploadfile">
    <input type="submit" name="submit" value="upload">
</div>
</body>
</html>
<?php
if($_POST['submit'])
{
  $nm=$_POST['name'];
    $discript=$_POST['discription'];
    $prc=$_POST['price'];
$filename = $_FILES["uploadfile"]["name"];
$tempname = $_FILES["uploadfile"]["tmp_name"];
$folder = "uploads/".$filename;
move_uploaded_file($tempname,$folder);
$_FILES["uploadfile"];
echo $folder ;

if($filename!="")
  {
    $query = "INSERT INTO gallery VALUES('$nm','$discript','$prc','$folder')";
    $data = mysqli_query($conn,$query);
    
    if($data)
    {
        echo "inserted";
    }
  }
  else
  {
       echo "failed";
  }
}
?>