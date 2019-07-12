<?php
	echo "<center><img src='logo.png' width='50%'></center>";

	echo "<br><br>";

	$con = mysqli_connect("localhost","root","","callmylawyer_db");
	
	if(!$con){
		die("Database Connection Unsuccessful!");
	}
	else{
		$db = mysqli_select_db($con,"callmylawyer_db");

		$email_f = $_POST["email"];
		$password_f = $_POST["password"];

		$query="SELECT * FROM client_record_logs";

		$result=mysqli_query($con,$query);

		while($row=mysqli_fetch_row($result)){
			$email_db = $row[4];
			$password_db = $row[5];

			if($email_db == $email_f && $password_db == $password_f){        //must add home page links
				header("Location: http://localhost/call_my_lawyer_php/3.section_dashboard/dashboard.html");
			}
			
			else if($email_db !== $email_f && $password_db !== $password_f){
				echo "<script type='text/javascript'>alert('Email Address and Password is incorrect. Please Re-enter');</script>";
				echo "<h1><center>Email Address and Password is incorrect. Please Re-enter</center></h1><br>";
				echo "<h3><center><a href='http://localhost/call_my_lawyer_php/section_login/login.php'>Click here to redirect you to the <i>Call My Lawyer Login Page</i></a></center></h3>";
				echo "<h3><center><a href='index.html'>Click here to redirect you to the <i>Call My Lawyer Home Page</i></a></center></h3>";
				break;
			}

			else if($email_db !== $email_f){			
				echo "<script type='text/javascript'>alert('Email Address is incorrect. Please Re-enter');</script>";
				echo "<h1><center>Email Address is incorrect. Please Re-enter</center></h1><br>";
				echo "<h3><center><a href='assets/php/login.php'>Click here to redirect you to the <i>Call My Lawyer Login Page</i></a></center></h3>";
				echo "<h3><center><a href='#'>Click here to redirect you to the <i>Call My Lawyer Home Page</i></a></center></h3>";
				break;
			}	
				
			else if($password_db !== $password_f){
				echo "<script type='text/javascript'>alert('Password is incorrect. Please Re-enter');</script>";
				echo "<h1><center>Password is incorrect. Please Re-enter</center></h1><br>";
				echo "<h3><center><a href='http://localhost/call_my_lawyer_php/section_login/login.php'>Click here to redirect you to the <i>Call My Lawyer Login Page</i></a></center></h3>";
				echo "<h3><center><a href='index.html'>Click here to redirect you to the <i>Call My Lawyer Home Page</i></a></center></h3>";
				break;
			}		
		}
		mysqli_close($con);
	}
?>