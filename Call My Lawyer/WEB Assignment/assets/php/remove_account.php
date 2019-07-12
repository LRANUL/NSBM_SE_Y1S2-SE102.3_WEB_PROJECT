<?php
	echo "<center><img src='logo.png' width='50%'></center>";

	echo "<br><br>";

	$con = mysqli_connect("localhost","root","","callmylawyer_db");
	
	if(!$con){
		die("Database Connection Unsuccessful!");
	}
	else{
		$db = mysqli_select_db($con,"callmylawyer_db");

		$email_f=$_POST["email_a"];

		$query_v="SELECT * FROM client_record_logs";

		$result=mysqli_query($con,$query_v);

		while($row=mysqli_fetch_row($result)){
			$email_db = $row[4];

			if($email_db == $email_f){
				$query_d="DELETE FROM client_record_logs WHERE email='".$email_f."'";
				mysqli_query($con,$query_d);
				echo "<h1><center>Account Successfully Removed</center></h1><br>";
				echo "<h3><center><a href='https://www.google.com/'>Click here to redirect you to the <i>Call My Lawyer Settings Page</i></a></center></h3>";
				echo "<h3><center><a href='https://www.google.com/'>Click here to redirect you to the <i>Call My Lawyer Home Page</i></a></center></h3>";
				break;
			}
			else{
				echo "<h1><center><b>Something went wrong! Please refill form and resubmit</a></center></h1>";
				echo "<h3><center><a href='#'>Click here to redirect you to the <i>Call My Laywer Settings Page</i></a></center></h3>";
				echo "<h3><center><a href='#'>Click here to redirect you to the <i>Call My Laywer Home Page</i></a></center></h3>";
				break;
			}
		}
		mysqli_close($con);
	}
?>