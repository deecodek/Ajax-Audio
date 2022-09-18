 <?php 

include "connection.php";
error_reporting (1); 


 $name=$_GET['nm'];
 $query="DELETE FROM gallery WHERE name='$name'";
 $data=mysqli_query($conn,$query);
 if($data)
 {
    echo"Record deleted from databse";
 }
 else{
     echo"Unable to delete record";
 }
?>