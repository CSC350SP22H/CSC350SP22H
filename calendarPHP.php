<?php
/********** CONNECT TO THE DATABASE **********/
$servername="localhost";
$username="root";
$password= "root";
$connect=mysqli_connect($servername,$username,$password);
if(!$connect)  die("Error"); //else echo "connected";

		$part1 = '

		<!DOCTYPE html>
		<html>

		<head>
		  <style>
		  table {
		    border-collapse: collapse;
		    background: white;
		    color: black;
		  }

		  th, td {
		    font-weight: bold;
			}
			.button {
				width: 100%;
				background-color: white;
  			color: black;
  			border: 2px solid #4CAF50;
				padding: 14px 40px;
				text-align: center;
				font-size: 16px;
				transition-duration: 0.15s;
			}

			.button:hover {
  			background-color: #4CAF50;
  			color: white;
			}
			.disabled {
				border: 2px solid red;
				pointer-events: none;

		  </style>

		  <script>
		    const d = new Date();
		    const date = d.getDate();
		    const day = d.getDay();
		    const dayOfWeekName = new Date().toLocaleString("default", {weekday: "long"});
		    var weekOfMonth = (Math.ceil((date - 1 - day) / 7))+1;
		    var monthNames = ["January", "February", "March", "April", "May", "June",
		    "July", "August", "September", "October", "November", "December"];
		    document.write("<h1><center>Today is " + dayOfWeekName + " and it is the " + weekOfMonth + " week of " + monthNames[d.getMonth()] + "</center></h1>");';


				$part2 = '
					function disable(id){
										var x = document.getElementById(id);
										x.innerHTML = "Unavailable";
										x.disabled = true;
										x.classList.add("disabled");
					}

				';

				$part3 = '
					function disablePastDate(){
						const d = new Date();
						var dayOfWeek = 3;

						const days = ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday"];
						for(let i = 0; i < 7; i++){
							for(let j = 0; j < 8; j++){
								if(dayOfWeek >= i){
									disable("${days[i]}.${j}");
								}
							}
						}
					}
					';

				$part4 = '
		    function createCalendar(){

		      const days = ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday"];
		      for(let i = 0; i < 7; i++){
		        document.writeln(`<tr><td> ${days[i]} </td>`);
		            for(let j = 0; j < 8; j++){
									document.writeln(`<td><button class="button" type="submit" name="DayReserved" value="${days[i]}.${j}" id="${days[i]}.${j}">Sign Up</button></td>`)
									}
									document.writeln(`</tr>`);
					}
		    }
		 </script>
		</head>

		<body>
		  <form action="InsertingTimeAndDay.php" method="post">
		    <table align="center" cellspacing="21" cellpadding="21">
		      <tr>
		        <th style="color: white; background: purple;"> Days </th>
		        <th style="color: white; background: purple;"> 12am-3am </th>
		        <th style="color: white; background: purple;"> 3am-6am </th>
		        <th style="color: white; background: purple;"> 6am-9am </th>
		        <th style="color: white; background: purple;"> 9am-12pm </th>
		        <th style="color: white; background: purple;"> 12pm-3pm </th>
		        <th style="color: white; background: purple;"> 3pm-6pm</th>
		        <th style="color: white; background: purple;"> 6pm-9pm </th>
		        <th style="color: white; background: purple;"> 9pm-12am </th>
		      </tr>
		      <script>createCalendar();</script>
					<script>disablePastDate();</script>';

					for ($i = 0; $i <= 7; $i++){
						if ($i == 0) {
							$day = "Monday";
						} elseif ($i == 1) {
							$day = "Tuesday";
						} elseif ($i == 2) {
							$day = "Wednesday";
						} elseif ($i == 3) {
							$day = "Thursday";
						} elseif ($i == 4) {
							$day = "Friday";
						} elseif ($i == 6) {
							$day = "Saturday";
						} elseif ($i == 7) {
							$day = "Sunday";
						}
						for ($y = 0; $y <= 8; $y++){
							$sql="SELECT * FROM laundryshema.record WHERE dayNo = '$day' AND slotNo = $y";
							$result = mysqli_query($connect, $sql); 	// Send the query to the database
							if (mysqli_num_rows($result) > 0){
								$part4 .= '
								<script>disable("';
								$part4 .= $day;
								$part4 .= '.';
								$part4 .= $y;
								$part4 .= '");</script>
								';
							}
						}
					}

		$part5 = '
		</body>

		</html>
		';

		echo $part1.$part2.$part3.$part4.$part5;
?>
