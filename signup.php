<?php

$servername="localhost";
$username="root";
$password= "root";
$connect=mysqli_connect($servername,$username,$password);
if(!$connect)  die("Error"); //else echo "connected";

session_start();
$_SESSION["username"] = $_REQUEST['username'];
$_SESSION['appN'] = $_REQUEST['apartmentNo'];

$appN = $_REQUEST['apartmentNo'];
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
	exit();
}

$sql =
"INSERT INTO laundryshema.people (apartmentNo, username, email, password)
VALUES ('".$_REQUEST['apartmentNo']."','".$_REQUEST['username']."','".$_REQUEST['email']."','".$_REQUEST['psw']."')";

$result = mysqli_query($connect, $sql); 	// Send the query to the database
if(!$result)
	echo "<h1><center>Error Occured. Please Try Again.</center></h1>";
else{
	session_start();
	$_SESSION["username"] = $_REQUEST['username'];
	header("Location: http://localhost/project/calendarPHP.php", TRUE, 301);
	exit();
}
?>
