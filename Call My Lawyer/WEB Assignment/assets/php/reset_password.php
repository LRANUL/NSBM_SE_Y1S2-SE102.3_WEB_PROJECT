<?php
	echo "<center><img src='http://localhost/WEB%20Assignment/assets/images/logo.png' width='50%'></center>";

	echo "<br><br>";

	$con = mysqli_connect("localhost","root","root","callmylawyer_db");
	
	if(!$con){
		die("Database Connection Unsuccessful!");
	}
	else{
		$db = mysqli_select_db($con,"callmylawyer_db");

		$email_f=$_POST["email"];
		$new_password_f=$_POST["c_n_password"];

		$query_v="SELECT * FROM client_record_logs";

		$result=mysqli_query($con,$query_v);

		while($row=mysqli_fetch_row($result)){
			$email_db = $row[4];

			if($email_db == $email_f){
				$query_u="UPDATE client_record_logs SET password='".$new_password_f."' WHERE email='".$email_f."'";
				mysqli_query($con,$query_u);
				echo "<h1><center>Your Password has been Updated Successfully</center></h1><br>";
				echo "<h3><center><a href='http://localhost/WEB%20Assignment/login.html'>Click here to redirect you to the <i>Call My Lawyer Login Page</i></a></center></h3>";
				echo "<h3><center><a href='http://localhost/WEB%20Assignment/index.html'>Click here to redirect you to the <i>Call My Lawyer Home Page</i></a></center></h3>";
				break;
			}
			else{
				echo "<h1><center><b>Something went wrong! Please enter valid details, recheck form and resubmit</a></center></h1>";
				echo "<h3><center><a href='http://localhost/WEB%20Assignment/reset_password.html'>Click here to redirect you to the <i>Call My Lawyer Reset Password Page</i></a></center></h3>";
				echo "<h3><center><a href='http://localhost/WEB%20Assignment/index.html'>Click here to redirect you to the <i>Call My Laywer Home Page</i></a></center></h3>";
				break;
			}
		}
		mysqli_close($con);
	}
?>