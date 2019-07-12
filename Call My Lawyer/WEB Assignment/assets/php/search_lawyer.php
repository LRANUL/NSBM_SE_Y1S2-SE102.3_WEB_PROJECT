<?php
	$con=mysqli_connect("localhost","root","","callmylawyer_db");
	if(!$con) echo "Database Connection Unsuccessful";
	$db=mysqli_select_db($con,"callmylawyer_db");
	$type_lawyer_f = $_POST["type_lawyer"];
	$query = "SELECT * FROM lawyer_record_logs WHERE type_of_lawyer='".$type_lawyer_f."'";
	$result=mysqli_query($con,$query);
?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="search_lawyer.css">
	<title>Searching Lawyer</title>
</head>
	<body>
		<center>
			<img src="assets/images/logo.png" alt="logo" width="50%">
		</center>
		<table id="table" align="center" border="1px">
			<tr>
				<td colspan="8"><center><h2>Lawyers Found</h2></center></td>
			</tr>
			<tr>
				<td><p class="column_heading_txt">Type of Lawyer</p></td>
				<td><p class="column_heading_txt">Name</p></td>
				<td><p class="column_heading_txt">Qualification</p></td>
				<td><p class="column_heading_txt">Practice Area</p></td>
				<td><p class="column_heading_txt">Contact No.</p></td>
				<td><p class="column_heading_txt">Email</p></td>
				<td><p class="column_heading_txt">Address</p></td>
				<td><p class="column_heading_txt">Consultation Fee (Rs.)</p></td>
			</tr>

			<?php
				while($row=mysqli_fetch_assoc($result))
				{
			?>
					<tr>
						<td><p class="column_text"> <?php echo $row['type_of_lawyer']; ?> </p></td>
						<td><p class="column_text"> <?php echo $row['name']; ?> </p></td>
						<td><p class="column_text"> <?php echo $row['qualification']; ?> </p></td>
						<td><p class="column_text"> <?php echo $row['practice_area']; ?> </p></td>
						<td><p class="column_text"> <?php echo $row['contact_no']; ?> </p></td>
						<td><p class="column_text"> <?php echo $row['email']; ?> </p></td>
						<td><p class="column_text"> <?php echo $row['address']; ?> </p></td>
						<td><p class="column_text"> <?php echo $row['consultation_fee']; ?> </p></td>
					</tr>
			<?php
				}
			?>
		</table>
		<br><br>
		<h3 id="link_text"><center><a href='http://localhost/call_my_lawyer_php/section_dashboard/dashboard.html'>Click here to redirect you to the <i>Call My Lawyer Dashboard</i></a></center></h3>
	</body>
</html>