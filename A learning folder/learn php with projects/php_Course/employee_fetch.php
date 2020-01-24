<html>
<head>
<style>
table
	{
		margin-left:160px;
		border-collapse: collapse;
		border:2px solid green;
	}
	
	th,td
	{
		color:olive;
		padding:8px;
		border:2px solid green;
		height:30px;
		vertical-align: buttom;
		text-align:center;
	}
	tr:nth-child(even)
	{
		background-color:#f2f2f2;
	}
	tr:nth-child(odd)
	{
		background-color:silver;
	}
	th
	{
		color:white;
		background-color:MediumSeaGreen;
	
	}
	</style>
<title>employee_fetch</title>
</head>
<body>
<table border>
<tr>
<th>employee_id</th>
<th>employee_name</th>
<th>employee_email</th>
<th>employee_salary</th>
<th>edit</th>
<th>delete</th>
</tr>
<?php
include 'connection.php';
$ab="select * from salary";
$result= mysqli_query($con,$ab);
if($result)
{
while($bc=mysqli_fetch_array($result))
{
	?>
	<tr>
<td><?php echo $bc['employee_id']; ?></td>
<td><?php echo $bc['employee_name']; ?></td>
<td><?php echo $bc['employee_email']; ?></td>
<td><?php echo $bc['employee_salary']; ?></td>
<td><a href="employee_updtate.php?ez=<?php echo $bc['employee_id']; ?>">edit</a></td>
<td><a href="employee_delete.php?a=<?php echo $bc['employee_id']; ?>">delete</a></td>
</tr>
<?php
}
?>
</table>
<?php
}
else
{
	echo mysqli_error($con);
}
?>
</body>
</html>
	