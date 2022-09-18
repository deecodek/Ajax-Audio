<?php 

include "connection.php";

error_reporting(0);

$sql = "SELECT * FROM register";

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

        <h1>Users</h1>
        <div>
          <a href="/online_shop/create.php" style="font-size: xx-large;
">Create User</a>
        </div>

<table class="table">

    <thead>

        <tr>

        

        <th>First Name</th>

        <th>Last Name</th>

        <th>Email</th>

        <th>Password</th>

        <th>Repeat Password</th>

        <th>Action</th>


    </tr>

    </thead>

    <tbody> 

        <?php

            if ($result->num_rows > 0) {

                while ($row = $result->fetch_assoc()) {

        ?>

                    <tr>

                    

                    <td><?php echo $row['fname']; ?></td>

                    <td><?php echo $row['lname']; ?></td>

                    <td><?php echo $row['email']; ?></td>

                    <td>*******</td>

                    <td>*******</td>

                    <td><a class="btn btn-info" href="update.php?fn=<?php echo $row['fname']; ?> & ln=<?php echo $row['lname']; ?> & em=<?php echo $row['email']; ?>">Edit</a>
                    &nbsp;
                    <a class="btn btn-danger" href="delete.php?em=<?php echo $row['email']; ?>"> Delete </a></td>

                    </tr>                       

        <?php       }

            }

        ?>                

    </tbody>

</table>

    </div> 

</body>

</html>