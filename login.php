<?php

$servername="localhost";
$username="root";
$password= "root";
$connect=mysqli_connect($servername,$username,$password);
if(!$connect)  die("Error"); //else echo "connected";
/********** CREATE QUERY**********/
//$sql = "SELECT * FROM termproject.student";

$email=$_REQUEST['email'];
$password=$_REQUEST['psw'];
$sql = "Insert into laundry.laundryma(email, MotDePass) VALUES('$email', '$password') ";
$result = mysqli_query($connect, $sql); 	// Send the query to the database
if($result){
	echo 'You signed up successfully!';
}
?>