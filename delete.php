 <?php 

include "connection.php";
error_reporting (1); 


 $email=$_GET['em'];
 $query="DELETE FROM REGISTER WHERE EMAIL='$email'";
 $data=mysqli_query($conn,$query);
 if($data)
 {
    echo"Record deleted from databse";
 }
 else{
     echo"Unable to delete record";
 }
?>