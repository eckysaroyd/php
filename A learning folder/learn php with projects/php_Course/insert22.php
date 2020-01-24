<html>
<head>
<title>signup</title>
<style>
.form1
{
	font-size:18px;
	color:grey;
	background-color:white;
	width:300px;
	height: 30px;
	margin-top: 5px;
	margin-left:10px;
	padding:5px;
}
.form2
{
	font-size:18px;
	color:white;
	background-color:green;
	width:200px;
	height: 30px;
	margin-top: 5px;
	margin-left:100px;
	padding:5px;
}

</style>
</head>
<body>
<form method="post">
<input type="text" name="name" placeholder="name" class="form1"><br>
<input type="email" name="email" placeholder="email" class="form1"><br>
<input type="text" name="contact" placeholder="contact" class="form1"><br>
<input type="text" name="address" placeholder="address" class="form1"><br>
<input type="submit" name="submit" value="submit" class="form2">
</form>
<?php
include 'connection.php';
if(isset($_POST['submit']))
{
$name=$_POST['name'];
$email=$_POST['email'];
$contact=$_POST['contact'];
$address=$_POST['address'];
$a="insert into login(name,email,contact,address)values('$name','$email','$contact','$address')";
$result=mysqli_query($con,$a);
if($result)
{
	echo"
	<script type='text/javascript'>
	alert('successfully inserted');
	</script>
	";
}
else
{
	echo mysqli_error($con);
}
}

?>

</body>
</html>
