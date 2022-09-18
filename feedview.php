<?php 

include "connection.php";

error_reporting(0);

$sql = "SELECT * FROM feedback";

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

        <h1>Feedback</h1>
       
<table class="table">

    <thead>

        <tr>
        <th>First Name</th>
        <th>Email</th>
        <th>Comment</th>
    </tr>

    </thead>

    <tbody> 

        <?php

            if ($result->num_rows > 0) {

                while ($row = $result->fetch_assoc()) {

        ?>

                    <tr>

                    

                    <td><?php echo $row['name']; ?></td>

                    

                    <td><?php echo $row['email']; ?></td>

                    <td><?php echo $row['comment']; ?></td>

                    <td>
                    <a class="btn btn-danger" href="feeddelete.php?em=<?php echo $row['email']; ?>"> Delete </a></td>
                    </td>

                    </tr>                       

        <?php       }

            }

        ?>                

    </tbody>

</table>

    </div> 

</body>

</html>