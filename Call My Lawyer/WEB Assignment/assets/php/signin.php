<?php
	echo "<center><img src='logo.png' width='50%'></center>";

	echo "<br><br>";

	$con = mysqli_connect("localhost","root","","callmylawyer_db");
	
	if(!$con){
		die("Database Connection Unsuccessful!");
	}
	else{
		$db = mysqli_select_db($con,"callmylawyer_db");

	$f_name=$_POST["fname"];
	$l_name=$_POST["lname"];
	$nic=$_POST["nic"];
	$email=$_POST["email"];
	$password=$_POST["c_password"];
	$mobile_number_areacode=$_POST["mnumberac"];
	$mobile_number_phonenumber=$_POST["mnumber"];
	$land_number_areacode=$_POST["lnumberac"];
	$land_number_phonenumber=$_POST["lnumber"];
	$address_line_1=$_POST["saddress"];
	$address_line_2=$_POST["saddressline2"];
	$city=$_POST["city"];
	$province=$_POST["province"];
	$p_zipcode=$_POST["postal/zipcode"];

	$query="INSERT INTO client_record_logs(first_name,last_name,nic,email,password,mobile_number_area_code,mobile_number_phone_number,land_number_area_code,land_number_phone_number,street_address_line_1,street_address_line_2,address_city,address_province,address_postal_zipcode) VALUES('".$f_name."','".$l_name."','".$nic."','".$email."','".$password."','.$mobile_number_areacode.','.$mobile_number_phonenumber.','.$land_number_areacode.','.$land_number_phonenumber.','".$address_line_1."','".$address_line_2."','".$city."','".$province."','".$p_zipcode."')";
	
	if(mysqli_query($con,$query)){
		echo "<h1><center>You have successfully registered.</center></h1><br>";
		echo "<h3><center><a href='http://localhost/call_my_lawyer_php/section_login/login.html'>Click here to redirect you to the <i>Call My Lawyer Login Page</i></a></center></h3>";
		echo "<h3><center><a href='#'>Click here to redirect you to the <i>Call My Lawyer Home Page</i></a></center></h3>";
	}
	else{
		echo "<h1><center><b>Something went wrong! Please refill form and resubmit</a></center></h1>";
		echo "<h3><center><a href='http://localhost/call_my_lawyer_php/section_signin/signin.html'>Click here to redirect you to the <i>Call My Laywer Registration Page</i></a></center></h3>";
		echo "<h3><center><a href='#'>Click here to redirect you to the <i>Call My Laywer Home Page</i></a></center></h3>";
	}

	mysqli_close($con);
	}
?>