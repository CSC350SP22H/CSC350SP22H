<?php

$servername="localhost";
$username="root";
$password= "root";
$connect=mysqli_connect($servername,$username,$password);
if(!$connect)  die("Error"); //else echo "connected";
/********** CREATE QUERY**********/
//$sql = "SELECT * FROM termproject.student";

$sql =
"INSERT INTO laundryshema.people (apartmentNo, username, email, password)
VALUES ('".$_REQUEST['apartmentNo']."','".$_REQUEST['username']."','".$_REQUEST['email']."','".$_REQUEST['psw']."')";

$result = mysqli_query($connect, $sql); 	// Send the query to the database
if($result)
	echo '<script>window.location.href = "calendar.html";</script>';
	exit;
else
	echo "STUDENT NOT INSERTED";
?>
