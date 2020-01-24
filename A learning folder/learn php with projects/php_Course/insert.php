<html>
<head>
<title>signup</title>
</head>
<body>
<form method="post">
<input type="text" name="name" placeholder="name"><br>
<input type="email" name="email" placeholder="email"><br>
<input type="submit" name="submit" value="submit">
</form>
<?php
include 'connection.php';
if(isset($_POST['submit']))
{
$name=$_POST['name'];
$email=$_POST['email'];
$sql="insert into signup(name,email)values('$name','$email')";
$result=mysqli_query($con,$sql);
if($result)
{
	echo"<script type='text/javascript'>alert('successfully inserted');</script>";
}
else
{
	echo mysqli_error($con);
}
}

?>

</body>
</html>
