<?php
$servername="localhost";
$username="root";
$password="";
$dbname="online_shop_try";

$conn=mysqli_connect($servername,$username,$password,$dbname);
if($conn)
{
    echo "Connection OK";
}
else
{
    echo" Connecion Failed".mysqli_connect_error();
}
?>