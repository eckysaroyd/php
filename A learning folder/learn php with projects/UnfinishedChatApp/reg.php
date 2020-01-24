<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>TASIJA_Registration</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		
		<!-- MATERIAL DESIGN ICONIC FONT -->
		<link rel="stylesheet" href="fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">

		<!-- STYLE CSS -->
		<link rel="stylesheet" href="css/style.css">
		<script type="text/javascript" src="jquery.js"></script>
		<script type="text/javascript" src="validation.js"></script>
	</head>

	<body>

		<div class="wrapper hi" style="background-image: url('images/th.jpg');">
			<div class="inner">
				<div class="image-holder">
					<img src="images/pict1.jpg" alt="">
				</div>
				<form method="post">
					<h3>Registration Form</h3>
					<div class="form-group">
						<input type="text" placeholder="First Name" class="form-control" id="fname">
						<input type="text" placeholder="Last Name" class="form-control" id="lname">
					</div>
					<div class="form-wrapper">
						<input type="email" placeholder="Enter Email Adress" class="form-control" id="email">
						<i class="zmdi zmdi-account"></i>
					</div>
				
					<div class="form-wrapper">
						<select name="" id="gender" class="form-control">
							<option value="-1">Gender</option>
							<option value="male">Male</option>
							<option value="female">Female</option>
						</select>
						<i class="zmdi zmdi-caret-down" style="font-size: 17px"></i>
					</div>
					<div class="form-wrapper">
						<input type="text" placeholder="Enter Mobile No" class="form-control" id="rno">
						<i class="zmdi zmdi-account"></i>
					</div>
					<div class="form-wrapper">
						<input type="password" placeholder="Password" class="form-control" id="password">
						<i class="zmdi zmdi-lock"></i>
					</div>
					<div class="form-wrapper">
						<input type="password" placeholder="Confirm Password" class="form-control" id="password1">
						<i class="zmdi zmdi-lock"></i>
					</div>
					<button type="submit" id="register">Register
						<i class="zmdi zmdi-arrow-right"></i>
					</button>
				</form>
			</div>
		</div>
		
	</body>
</html>
<?php
include 'conn.php';
if(isset($_POST['submit']))
{
	$fname=$_POST['fname'];
	$lname=$_POST['lname'];
	$email=$_POST['email'];
	$gender=$_POST['gender'];
	$mobileno=$_POST['mobileno'];
	$password=$_POST['password'];
	
$sql="insert into chat(fname,lname,email,gender,mobileno,password) values('$fname','$lname','$email','$gender','$mobileno','$password')";
$query=mysqli_query($conn,$sql);
	if($query)
	{
		echo"SUCCESS";
	}
	else
	{
		echo mysqli_error($conn);
	}
}
?>