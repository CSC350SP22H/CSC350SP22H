<?php
$reservation=$_REQUEST['DayReserved'];
$split=explode(".",$reservation);
$day=$split[0];
$slot=intval($split[1]);
$servername="localhost";
$username="root";
$password= "root";
$connect=mysqli_connect($servername,$username,$password);
if(!$connect)  die("Error"); //else echo "connected";
/********** CREATE QUERY**********/
//$sql = "SELECT * FROM termproject.student";
$sql = "Insert into laundry.laundrymachine(DayofWeek, AvailableSlots) VALUES('$day', '$slot') ";
$result = mysqli_query($connect, $sql); 	// Send the query to the database
if($result){
	echo 'You signed up successfully!';
	echo $split[2];
}
?>