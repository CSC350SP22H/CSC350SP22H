<?php

$servername="localhost";
$username="root";
$password= "root";
$connect=mysqli_connect($servername,$username,$password);
if(!$connect)  die("Error"); //else echo "connected";
/********** CREATE QUERY**********/
//$sql = "SELECT * FROM termproject.student";

$sql = "SELECT * FROM laundryshema.people WHERE username = '".$_REQUEST['username']."' AND password = '".$_REQUEST['password1']."'";
$result = mysqli_query($connect, $sql);
if (mysqli_num_rows($result) > 0) 			// If there are rows present
{
	header("Location: http://localhost/project/calendarproj.html", TRUE, 301);
	exit();
}
else
	echo "Error"
?>
