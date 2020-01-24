<html>
<head>
<style>
.div1
{
width: 100%;
height:700px;
background-color: lightCyan;
padding-left:200px;
padding-top:30px;
}	
	
.hform
	{
		width: 200px;
		height: 30px;
		border-radius: 5px;
		color:white;
		background-color: silver;
		font-style: 15px;
		padding-left: 10px;
	}
	/*first main header-form(login input)*/
	.hform1
	{
		width: 100px;
		height: 25px;
		border-radius: 5px;
		color:white;
		background-color: MediumSeaGreen;
		font-style: 15px;
		padding-left: 10px;
		margin-left: 50px;

	}
</style>
<title>employee</title>
</head>
<body>
<div class="div1">
<form method="post">
<input type="text" name="employee_name" placeholder="employee_name" class="hform"></br>
<input type="text" name="employee_email" placeholder="employee_email" class="hform"></br>
<input type="text" name="employee_salary" placeholder="employee_salary" class="hform"></br>
<input type="submit" name="submit" value="submit" class="hform1">
</form>
</div>
<?php
include 'connection.php';
if(isset($_POST['submit']))
{
$employee_name=$_POST['employee_name'];
$employee_email=$_POST['employee_email'];
$employee_salary=$_POST['employee_salary'];
$new="insert into salary(employee_name,employee_email,employee_salary)value('$employee_name','$employee_email','$employee_salary')";
$nw=mysqli_query($con,$new);
if($nw)
{
	echo "<script> alert('Record Save'); </script>";
}
else
{
	echo mysqli_error($con);
}
}
?>
</body>
</html>