<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>TASIJA</title>
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
				<form action="">
					<h3>LogIn Form</h3>
					<div class="form-wrapper">
						<input type="text" placeholder="Username" class="form-control" id="loginid">
						<i class="zmdi zmdi-account"></i>
					</div>
					<div class="form-wrapper">
						<input type="password" placeholder="Enter Your Password" class="form-control" id="password111">
						<i class="zmdi zmdi-lock"></i>
					</div>
					<div class="form-wrapper">
						<a href="reg.php" class="text-muted newlink"><b>Register New Account</b></a>&nbsp;&nbsp;&nbsp;
						<a href="" class="text-muted newlink">forget Password</a>
					</div>
					<button id="button1">LogIn
						<i class="zmdi zmdi-arrow-right"></i>
					</button>
				</form>
			</div>
		</div>
		
	</body>
</html>