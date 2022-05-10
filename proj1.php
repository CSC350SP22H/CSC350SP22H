<?php
/********** CONNECT TO THE DATABASE **********/
$servername="localhost";
$username="root";
$password= "root";
$connect=mysqli_connect($servername,$username,$password);
if(!$connect)  die("Error"); //else echo "connected";
/********** CREATE QUERY**********/
//$sql = "SELECT * FROM termproject.student";
$num=intval( $_REQUEST['Number']);
$sql = "SELECT * FROM laundry.laundryma WHERE IDasssigned = '$num' and MotDePass='". $_REQUEST['Password']."'  ";
$result = mysqli_query($connect, $sql); 	// Send the query to the database

if ($result) 			// If there are rows present
{
		echo '
<html>
  
<head>
    <style>
        table {
            border-collapse: collapse;
            background: white;
            color: black;
        }
          
        th,
        td {
            font-weight: bold;
        }
    </style>
</head>
  
<body>
   
    <h2 align="center" style="color: orange;">
        Month
    </h2>
    <br />
  
    <table bgcolor="lightgrey" align="center" 
        cellspacing="21" cellpadding="21">
  
       
        <thead>
            <tr>
                <th style="color: white; background: purple;">
                    Time</th>
                <th style="color: white; background: purple;">
                    Sun</th>
                <th style="color: white; background: purple;">
                    Mon</th>
                <th style="color: white; background: purple;">
                    Tue</th>
                <th style="color: white; background: purple;">
                    Wed</th>
                <th style="color: white; background: purple;">
                    Thu</th>
                <th style="color: white; background: purple;">
                    Fri</th>
                <th style="color: white; background: purple;">
                    Sat</th>
            </tr>
        </thead>
  <form method="post" action="proj2.php">
        <tbody>
            <tr>
                <td>12am-3am</td>';
				$sql='select * from laundry.laundrymachine where DayofWeek="Sunday" and AvailableSlots=1';
				$result = mysqli_query($connect, $sql); 	// Send the query to the database
				if ($result){
					echo '<td><button type="submit" disabled>Sign Up</button></td>';
				}
				else{
					echo '<td><button type="submit" name="DayReserved" value="Sunday.1">Sign Up</button></td>';
				}
                echo '<td><button type="submit" name="DayReserved" value="Monday.1">Sign Up</button></td>
				<td><button type="submit" name="DayReserved" value="Tuesday.1">Sign Up</button></td>
				<td><button type="submit" name="DayReserved" value="Wednesday.1">Sign Up</button></td>
				<td><button type="submit" name="DayReserved" value="Thursday.1">Sign Up</button></td>
				<td><button type="submit" name="DayReserved" value="Friday.1">Sign Up</button></td>
				<td><button type="submit" name="DayReserved" value="Saturday.1">Sign Up</button></td>
            </tr>
            <tr></tr>
            <tr>
                <td>3am-6am</td>;
				$sql='select * from laundry.laundrymachine where DayofWeek="Sunday" and AvailableSlots=1';
				$result = mysqli_query($connect, $sql); 	// Send the query to the database
				if ($result){
					echo '<td><button type="submit" disabled>Sign Up</button></td>';
				}
				else{
					echo '<td><button type="submit" name="DayReserved" value="Sunday.2">Sign Up</button></td>';
				}
                echo '<td><button type="submit" name="DayReserved" value="Monday.2">Sign Up</button></td>
				<td><button type="submit" name="DayReserved" value="Tuesday.2">Sign Up</button></td>
				<td><button type="submit" name="DayReserved" value="Wednesday.2">Sign Up</button></td>
				<td><button type="submit" name="DayReserved" value="Thursday.2">Sign Up</button></td>
				<td><button type="submit" name="DayReserved" value="Friday.2">Sign Up</button></td>
				<td><button type="submit" name="DayReserved" value="Saturday.2">Sign Up</button></td>
            </tr>
            <tr>
                <td>6am-9am</td>;
				$sql='select * from laundry.laundrymachine where DayofWeek="Sunday" and AvailableSlots=1';
				$result = mysqli_query($connect, $sql); 	// Send the query to the database
				if ($result){
					echo '<td><button type="submit" disabled>Sign Up</button></td>';
				}
				else{
					echo '<td><button type="submit" name="DayReserved" value="Sunday.3">Sign Up</button></td>';
				}
                echo '<td><button type="submit" name="DayReserved" value="Monday.3">Sign Up</button></td>
				<td><button type="submit" name="DayReserved" value="Tuesday.3">Sign Up</button></td>
				<td><button type="submit" name="DayReserved" value="Wednesday.3">Sign Up</button></td>
				<td><button type="submit" name="DayReserved" value="Thursday.3">Sign Up</button></td>
				<td><button type="submit" name="DayReserved" value="Friday.3">Sign Up</button></td>
				<td><button type="submit" name="DayReserved" value="Saturday.3">Sign Up</button></td>
            </tr>
            <tr>
                <td>9am-12pm</td>;
				$sql='select * from laundry.laundrymachine where DayofWeek="Sunday" and AvailableSlots=1';
				$result = mysqli_query($connect, $sql); 	// Send the query to the database
				if ($result){
					echo '<td><button type="submit" disabled>Sign Up</button></td>';
				}
				else{
					echo '<td><button type="submit" name="DayReserved" value="Sunday.4">Sign Up</button></td>';
				}
                echo '<td><button type="submit" name="DayReserved" value="Monday.4">Sign Up</button></td>
				<td><button type="submit" name="DayReserved" value="Tuesday.4">Sign Up</button></td>
				<td><button type="submit" name="DayReserved" value="Wednesday.4">Sign Up</button></td>
				<td><button type="submit" name="DayReserved" value="Thursday.4">Sign Up</button></td>
				<td><button type="submit" name="DayReserved" value="Friday.4">Sign Up</button></td>
				<td><button type="submit" name="DayReserved" value="Saturday.4">Sign Up</button></td>
            </tr>
            <tr>
               <td>12pm-3pm</td>;
			   $sql='select * from laundry.laundrymachine where DayofWeek="Sunday" and AvailableSlots=1';
				$result = mysqli_query($connect, $sql); 	// Send the query to the database
				if ($result){
					echo '<td><button type="submit" disabled>Sign Up</button></td>';
				}
				else{
					echo '<td><button type="submit" name="DayReserved" value="Sunday.5">Sign Up</button></td>';
				}
                echo '<td><button type="submit" name="DayReserved" value="Monday.5">Sign Up</button></td>
				<td><button type="submit" name="DayReserved" value="Tuesday.5">Sign Up</button></td>
				<td><button type="submit" name="DayReserved" value="Wednesday.5">Sign Up</button></td>
				<td><button type="submit" name="DayReserved" value="Thursday.5">Sign Up</button></td>
				<td><button type="submit" name="DayReserved" value="Friday.5">Sign Up</button></td>
				<td><button type="submit" name="DayReserved" value="Saturday.5">Sign Up</button></td>
            </tr>
            <tr>
                <td>3pm-6pm</td>;
				$sql='select * from laundry.laundrymachine where DayofWeek="Sunday" and AvailableSlots=1';
				$result = mysqli_query($connect, $sql); 	// Send the query to the database
				if ($result){
					echo '<td><button type="submit" disabled>Sign Up</button></td>';
				}
				else{
					echo '<td><button type="submit" name="DayReserved" value="Sunday.6">Sign Up</button></td>';
				}
                echo '<td><button type="submit" name="DayReserved" value="Monday.6">Sign Up</button></td>
				<td><button type="submit" name="DayReserved" value="Tuesday.6">Sign Up</button></td>
				<td><button type="submit" name="DayReserved" value="Wednesday.6">Sign Up</button></td>
				<td><button type="submit" name="DayReserved" value="Thursday.6">Sign Up</button></td>
				<td><button type="submit" name="DayReserved" value="Friday.6">Sign Up</button></td>
				<td><button type="submit" name="DayReserved" value="Saturday.6">Sign Up</button></td>
            </tr>
			<tr>
                <td>6pm-9pm</td>;
				$sql='select * from laundry.laundrymachine where DayofWeek="Sunday" and AvailableSlots=1';
				$result = mysqli_query($connect, $sql); 	// Send the query to the database
				if ($result){
					echo '<td><button type="submit" disabled>Sign Up</button></td>';
				}
				else{
					echo '<td><button type="submit" name="DayReserved" value="Sunday.7">Sign Up</button></td>';
				}
                echo '<td><button type="submit" name="DayReserved" value="Monday.7">Sign Up</button></td>
				<td><button type="submit" name="DayReserved" value="Tuesday.7">Sign Up</button></td>
				<td><button type="submit" name="DayReserved" value="Wednesday.7">Sign Up</button></td>
				<td><button type="submit" name="DayReserved" value="Thursday.7">Sign Up</button></td>
				<td><button type="submit" name="DayReserved" value="Friday.7">Sign Up</button></td>
				<td><button type="submit" name="DayReserved" value="Saturday.7">Sign Up</button></td>
            </tr>
			<tr>
                <td>9pm-12pm</td>;
				$sql='select * from laundry.laundrymachine where DayofWeek="Sunday" and AvailableSlots=1';
				$result = mysqli_query($connect, $sql); 	// Send the query to the database
				if ($result){
					echo '<td><button type="submit" disabled>Sign Up</button></td>';
				}
				else{
					echo '<td><button type="submit" name="DayReserved" value="Sunday.8">Sign Up</button></td>';
				}
                echo '<td><button type="submit" name="DayReserved" value="Monday.8">Sign Up</button></td>
				<td><button type="submit" name="DayReserved" value="Tuesday.8">Sign Up</button></td>
				<td><button type="submit" name="DayReserved" value="Wednesday.8">Sign Up</button></td>
				<td><button type="submit" name="DayReserved" value="Thursday.8">Sign Up</button></td>
				<td><button type="submit" name="DayReserved" value="Friday.8">Sign Up</button></td>
				<td><button type="submit" name="DayReserved" value="Saturday.8">Sign Up</button></td>
            </tr>
        </tbody>
		</form>
    </table>
</body>
  
</html>

';
		
}
else{
	echo "NO";
}

?>