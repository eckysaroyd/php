
<html>
<head>
<title>students details</title>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>
<div class="container">
<div class="row">
<div class="col-md-12">
<form method="post">
<div class="col-md-6">
<b>First Name<b>
</div>
<div class="col-md-6">
<input type="text" name="fname"><br>
</div>
</div>
</div>
</div>
<div class="container">
<div class="row">
<div class="col-md-12">
<div class="col-md-6">
<b>Last Name</b>
</div>
<div class="col-md-6">
<input type="text" name="lname"><br>
</div>
</div>
</div>
</div>
<div class="container">
<div class="row">
<div class="col-md-12">
<div class="col-md-6">
<b>Email</b>
</div>
<div class="col-md-6">
<input type="text" name="email">
</div>
</div>
</div>
</div>
<div class="container">
<div class="row">
<div class="col-md-12">
<div class="col-md-6">
<input type="submit" name="submit">
</div>
<div class="col-md-6">
</div>
</div>
</div>
</div>
</form>
</body>
</html>
<?php
include "conn.php";
if(isset($_POST['submit']))
{
	$fname=$_POST['fname'];
	$lname=$_POST['lname'];
	$email=$_POST['email'];
	
	$sql="insert into names(fname,lname,email) values('$fname','$lname','$email')";
	$query=mysqli_query($con,$sql);
	if($query)
	{
		echo"SUCCESS";
	}
	else
	{
		echo mysqli_error($con);
	}
}

?>