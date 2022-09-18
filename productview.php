<?php 

include "connection.php";

error_reporting(0);

$sql = "SELECT * FROM gallery";

$result = $conn->query($sql);

?>

<!DOCTYPE html>

<html>

<head>

    <title>View Page</title>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<style>
    .button {
  background-color: transparent; /* Green */
 
  border-color:blue;
  color: black;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}
.button2:hover{
background-color:blue;
color:white;
border-color:blue;
}
</style>
</head>

<body>
<?php include 'adminheader.php'?>
    <div class="container">

        <h1>Product Management</h1>
        <div>
          <a href="cart/galleryupload.php" style="font-size: xx-large;
">Add Product</a>
        </div>
<br>
<br><br>
<table class="table">

    <thead>

        <tr>

        <th>Product Name</th>

        <th>Discription</th>

        <th>Price</th>

        <th>Picsource</th>

        

    </tr>

    </thead>

    <tbody> 

        <?php

            if ($result->num_rows > 0) {

                while ($row = $result->fetch_assoc()) {

        ?>

                    <tr>

                    

                    <td><?php echo $row['name']; ?></td>

                    <td><?php echo $row['discription']; ?></td>

                    <td><?php echo $row['price']; ?></td>

                    <td><?php echo $row['picsource']; ?></td>

                    

                    <td>
                    &nbsp;
                    <a class="btn btn-danger" href="productdelete.php?nm=<?php echo $row['name']; ?>"> Delete </a></td>

                    </tr>                       

        <?php       }

            }

        ?>                

    </tbody>

</table>

    </div> 

</body>

</html>