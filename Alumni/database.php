<?php
$servername="localhost";
$username="root";
$password="";
$database="alumni";
$conn=mysqli_connect($servername,$username,$password,$database);
if($conn)
{
	//echo "connection OK";
}
else{
	echo "Connection Failed" .mysqli_connect_error();
}

?>