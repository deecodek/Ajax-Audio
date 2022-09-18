<?php 

include "connection.php";

error_reporting(0);

$sql = "SELECT * FROM payment";

$result = $conn->query($sql);

?>

<!DOCTYPE html>

<html>

<head>

    <title>View Page</title>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

</head>

<body>
<?php include 'adminheader.php'?>
    <div class="container">

        <h1>Order Received</h1>
        

<table class="table">

    <thead>

        <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Address</th>
        <th>Zip</th>
        <th>Card</th>
        <th>Card Number</th>
        <th>Product</th>
        <th>Quantity</th>        
    </tr>
    </thead>
    <tbody> 

        <?php

            if ($result->num_rows > 0) {

                while ($row = $result->fetch_assoc()) {

        ?>

                    <tr>

                    

                    <td><?php echo $row['firstname']; ?></td>

                    <td><?php echo $row['email']; ?></td>

                    <td><?php echo $row['address']; ?><?php echo $row['city']; ?><?php echo $row['state']; ?></td>

                    <td><?php echo $row['zip']; ?></td>

                    <td><?php echo $row['card name']; ?></td>

                    <td><?php echo $row['card number']; ?><td>
                   <td><?php echo $row['product']; ?></td>
                    <td><?php echo $row['quantity']; ?></td>
                    

                    </tr>                       

        <?php       }

            }

        ?>                

    </tbody>

</table>

    </div> 

</body>

</html>