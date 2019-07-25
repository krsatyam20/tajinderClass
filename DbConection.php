<?php
$servername="localhost";
$username="root";
$password="";
//$db="university";


$conn=new mysqli($servername,$username,$password);

if($conn->connect_error){
	die("Connection Failed:".$conn->connect_error);
}
else{
	echo "Database Connected Successfully";
}



?>