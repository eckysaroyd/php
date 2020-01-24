<html>
<head>
<title></title>
<style>	
.div1
{
width: 100%;
height:400px;
background-color: lightCyan;
padding-left:100px;
padding-top:50px;
}	
.hform
	{
		width: 200px;
		height: 30px;
		border-radius: 5px;
		color:chocolate;
		background-color: blanchedalmond;
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
</head>
<body>
<?php
include 'connection.php';
$bc=$_GET['ez'];
$d="select * from salary where employee_id='$bc'";
$result= mysqli_query($con,$d);
$ab=mysqli_fetch_array($result);
?>
<div class="div1">
<form method="post">
<table>
<tr>
<th>Employee_name:</th>
<th>Employee_email:</th>
<th>Employee_salary:</th>
<th>&nbsp;</th>
</tr>
<tr>
<td><input type="text" name="name" value="<?php echo $ab['employee_name']; ?>" class="hform"></td>
<td><input type="text" name="email" value="<?php echo $ab['employee_email']; ?>" class="hform"></td>
<td><input type="text" name="total" value="<?php echo $ab['employee_salary']; ?>" class="hform"></td>
<td><input type="submit" value="update" name="update" class="hform1"></td>
</table>
</form>
</div>
</body>
<?php
if(isset($_POST['update']))
{
	$name=$_POST['name'];
	$email=$_POST['email'];
	$cash=$_POST['total'];
	$qur="update salary set employee_name='$name', employee_email='$email', employee_salary='$cash' where employee_id='$bc'";
	$len= mysqli_query($con,$qur);
	if($len)
	{
		header('location:employee_fetch.php');
	}
	else
	{
		echo mysqli_error($con);
	}
}
	?>
	
	