<?php

$servername="localhost";
$username="root";
$password= "root";
$connect=mysqli_connect($servername,$username,$password);
if(!$connect)  die("Error"); //else echo "connected";

session_start();
$reservation=$_REQUEST['DayReserved'];
$split=explode(".", $reservation);
$day=$split[0];
$slot=intval($split[1]);


$sql = "INSERT INTO laundryshema.record(apartmentNo, dayNo, slotNo) VALUES('$appN', '$day', '$slot')";
$result = mysqli_query($connect, $sql); 	// Send the query to the database
if($result)
	echo 'You signed up successfully!';
else
	echo "Error";
}
?>