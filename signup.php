<?php

$servername="localhost";
$username="root";
$password= "root";
$connect=mysqli_connect($servername,$username,$password);
if(!$connect)  die("Error"); //else echo "connected";

$sql =
"INSERT INTO laundryshema.people (apartmentNo, username, email, password)
VALUES ('".$_REQUEST['apartmentNo']."','".$_REQUEST['username']."','".$_REQUEST['email']."','".$_REQUEST['psw']."')";

$result = mysqli_query($connect, $sql); 	// Send the query to the database
if(!$result)
	echo "<h1><center>Error Occured. Please Try Again.<h1><center>";
else
	session_start();
	$_SESSION["username"] = $_REQUEST['username'];
	header("Location: http://localhost/project/calendarproj.html", TRUE, 301);
	exit();
?>
