<?php
	$con = mysqli_connect("localhost","root","","callmylawyer_db");
	if(!$con)
	{
		die("Database Connection Unsuccessful");
	}
	else
	{
		$db=mysqli_select_db($con,"callmylawyer_db");

		$email_f=$_POST["newsletter"];

		$query="INSERT INTO newsletter_emails(email) VALUES('".$email_f."')";

		if(mysqli_query($con,$query)){
			echo "<script type='text/javascript'>alert('You have successfully Subscribed to the Newsletter');</script>";
			header("Location: http://localhost/call_my_lawyer_php/i/index.html");
		}
		else{
			echo "Something went wrong. Please go back and resubmit";
		}
		mysqli_close($con);
	}
?>