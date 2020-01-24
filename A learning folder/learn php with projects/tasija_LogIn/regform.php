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
	</head>
	<script>
	
$(document).ready(function(){
$('button').click(function(){
var fname=$.trim($('#fname').val());
var lname=$.trim($('#lname').val());
var rno=$.trim($('#rno').val());
var course=$.trim($('#course').val());
var year=$.trim($('#year').val());
var pssword=$.trim($('#password').val());
var pssword1=$.trim($('#password1').val());
if(fname=='')
{
	alert('Please Enter Your First Name');
	$('#fname').focus();
	return false;
}
if(lname=='')
{
	alert('Please Enter Your Last Name');
	$('#lname').focus();
	return false;
}
if(rno=='')
{
	alert('Please Enter Your Registration Number');
	$('#rno').focus();
	return false;
}
if(isNaN(rno))
{
	alert('Enter a Right Registration number');
	$('#rno').focus();
	return false;
}
if(course=='')
{
alert('Please Select Your Course');
$('#course').focus();
return false;
}
if(pssword=='')
{
	alert("Please Enter  Your Password");
	$('#password').focus();
	return false;
}
if(pssword1=='')
{
	alert("Please Confirm Your Password");
	$('#password1').focus();
	return false
}
if(pssword1=!pssword)
{
	alert("Your Password Is Not Matchng");
	$('#password1').focus();
	return false
}

});
});
</script>

	<body>

		<div class="wrapper hi" style="background-image: url('images/th.jpg');">
			<div class="inner">
				<div class="image-holder">
					<img src="images/pict1.jpg" alt="">
				</div>
				<form action="login.html">
					<h3>Registration Form</h3>
					<div class="form-group">
						<input type="text" placeholder="First Name" class="form-control" id="fname">
						<input type="text" placeholder="Last Name" class="form-control" id="lname">
					</div>
					<div class="form-wrapper">
						<input type="text" placeholder="Registration NO" class="form-control" id="rno">
						<i class="zmdi zmdi-account"></i>
					</div>
					<div class="form-wrapper">
						<input type="text" placeholder="Course" class="form-control" id="course">
						<i class="zmdi zmdi-account"></i>
					</div>
					<div class="form-wrapper">
						<select name="" id="year" class="form-control">
							<option value="" disabled selected>Year</option>
							<option value="1year">1st Year</option>
							<option value="2year">2nd Year</option>
							<option value="3year">3rd Year</option>
							<option value="4year">4th Year</option>
							<option value="5year">5th Year</option>
							<option value="6year">6th Year</option>
							<option value="7year">7th Year</option>
						</select>
						<i class="zmdi zmdi-caret-down" style="font-size: 17px"></i>
					</div>
					<div class="form-wrapper">
						<input type="password" placeholder="Password" class="form-control" id="password">
						<i class="zmdi zmdi-lock"></i>
					</div>
					<div class="form-wrapper">
						<input type="password" placeholder="Confirm Password" class="form-control" id="password1">
						<i class="zmdi zmdi-lock"></i>
					</div>
					<button>Register
						<i class="zmdi zmdi-arrow-right"></i>
					</button>
				</form>
			</div>
		</div>
		
	</body>
</html>