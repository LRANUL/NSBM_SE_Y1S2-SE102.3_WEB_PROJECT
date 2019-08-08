<?php
	echo "<center><img src='http://localhost/WEB%20Assignment/assets/images/logo.png' width='50%'></center>";

	echo "<br><br>";

	$con = mysqli_connect("localhost","root","root","callmylawyer_db");
	
	if(!$con){
		die("Database Connection Unsuccessful!");
	}
	else{
		$db = mysqli_select_db($con,"callmylawyer_db");

		$email_f = $_POST["email"];
		$password_f = $_POST["password"];

		$query="SELECT * FROM client_record_logs WHERE email = '".$email_f."'";

		$result=mysqli_query($con,$query);

		while($row=mysqli_fetch_assoc($result)){
			$email_db = $row['email'];
			$password_db = $row['password'];

			if($email_db == $email_f && $password_db == $password_f){        //must add home page links
				header("Location: http://localhost/WEB%20Assignment/dashboard.html");
			}
			
			else if($email_db !== $email_f && $password_db !== $password_f){
				echo "<script type='text/javascript'>alert('Email Address and Password is incorrect. Please Re-enter');</script>";
				echo "<h1><center>Email Address and Password is incorrect. Please Re-enter</center></h1><br>";
				echo "<h3><center><a href='http://localhost/WEB%20Assignment/login.html'>Click here to redirect you to the <i>Call My Lawyer Login Page</i></a></center></h3>";
				echo "<h3><center><a href='http://localhost/WEB%20Assignment/index.html'>Click here to redirect you to the <i>Call My Lawyer Home Page</i></a></center></h3>";
				break;
			}

			else if($email_db !== $email_f){			
				echo "<script type='text/javascript'>alert('Email Address is incorrect. Please Re-enter');</script>";
				echo "<h1><center>Email Address is incorrect. Please Re-enter</center></h1><br>";
				echo "<h3><center><a href='http://localhost/WEB%20Assignment/login.html'>Click here to redirect you to the <i>Call My Lawyer Login Page</i></a></center></h3>";
				echo "<h3><center><a href='http://localhost/WEB%20Assignment/index.html'>Click here to redirect you to the <i>Call My Lawyer Home Page</i></a></center></h3>";
				break;
			}	
				
			else if($password_db !== $password_f){
				echo "<script type='text/javascript'>alert('Password is incorrect. Please Re-enter');</script>";
				echo "<h1><center>Password is incorrect. Please Re-enter</center></h1><br>";
				echo "<h3><center><a href='http://localhost/WEB%20Assignment/login.html'>Click here to redirect you to the <i>Call My Lawyer Login Page</i></a></center></h3>";
				echo "<h3><center><a href='http://localhost/WEB%20Assignment/index.html'>Click here to redirect you to the <i>Call My Lawyer Home Page</i></a></center></h3>";
				break;
			}		
		}
		mysqli_close($con);
	}
?>