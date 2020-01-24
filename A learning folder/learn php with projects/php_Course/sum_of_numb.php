<html>
<head>
<title>
sum of data
</title>
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
<input type="text" name="text" placeholder="number1" class="form1">
<input type="text" name="text1" placeholder="number2" class="form1"><br>
<input type="submit" name="sum" value="sum" class="form2">
</form>
<?php
include "connection.php";
if(isset ($_POST['sum']))
{
$txt1=$_POST['text'];
$txt2=$_POST['text1'];
$txt3=$txt1 + $txt2;
$na= "insert into numbers(numb1,numb2,total)values('$txt1','$txt2','$txt3')";
$pa=mysqli_query($con,$na);
if($pa)
{
echo"<script>alert('total sum saved');</script>";
}
else
{
	echo mysqli_error($con);
}
}
?>
</body>
</html>