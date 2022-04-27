<?php
	$servername="localhost";
	$username="root";
	$password= "root";
	$connect=mysqli_connect($servername,$username,$password);
	if(!$connect)  die("Error"); //else echo "connected";
		$sql = 
		"INSERT INTO animalType.animals (Animal,Type) 
		VALUES ('".$_REQUEST['Ground']."','".$_REQUEST['Sea']."','".$_REQUEST['Sky']."')";
		$result = mysqli_query($connect, $sql); 	// Send the query to the database
		
		echo $sql;
		
		if($result)
			echo "ANIMAL INSERTED";
		else
			echo "ANIMAL NOT INSERTED";
?>
