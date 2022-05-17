<?php

$servername="localhost";
$username="root";
$password= "root";
$connect=mysqli_connect($servername,$username,$password);
if(!$connect)  die("Error"); //else echo "connected";

$sql = "SELECT * FROM laundryshema.people WHERE username = '".$_REQUEST['username']."' AND password = '".$_REQUEST['password1']."'";
$result = mysqli_query($connect, $sql);
if (mysqli_num_rows($result) > 0) 			// If there are rows present
{
	session_start();
	$_SESSION["username"] = $_REQUEST['username'];

	$sql = "SELECT apartmentNo FROM laundryshema.people WHERE username = '".$_SESSION['username']."'";
	$result = mysqli_query($connect, $sql);
	$row = mysqli_fetch_row($result);
	$appN = $row[0];
	$_SESSION['appN'] = $row[0];
	$sql = "SELECT * FROM laundryshema.record WHERE apartmentNo = $appN";
	$result = mysqli_query($connect, $sql);
	$row = mysqli_fetch_row($result);
	if (mysqli_num_rows($result) > 0){
		$part1 = "<h1><center>Your appartment ";
		$part2 = $row[0];
		$part3 = " is already signed up for ";
		$part4 = $row[1];
		$part5 = " in ";
		$timeslot = $row[2];
		$times = array("12am-3am", "3am-6am", "6am-9am", "9am-12pm", "12pm-3pm", "3pm-6pm", "6pm-9pm", "9pm-12am");
		$part6 = $times[$timeslot];
		$part7 = " time slot.</h1><center>";
		echo $part1.$part2.$part3.$part4.$part5.$part6.$part7;
	}
	else{
		header("Location: http://localhost/project/calendarproj3.html", TRUE, 301);
		exit();
	}
}
else
	echo "<h1><center>No such account has been found.</center></h1>"
?>
