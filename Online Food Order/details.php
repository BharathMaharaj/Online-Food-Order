<?php

$servername="localhost";
$username="root";
$password="";

$dbname="login";
$name=$_POST['username'];
$pass=$_POST['password'];

$conn = new mysqli($servername,$username,$password,$dbname);

if($conn->connect_error){
	die('unable to connect'.$conn->connect_error);
}

$sql="INSERT INTO 2logindetails(name,pass) VALUES('$username','$password')";

if($conn->query($sql)===TRUE){
	include('success.html');
}
else{
	echo"error".$sql."<br>".$conn->error;
}

$conn->close();
?>

