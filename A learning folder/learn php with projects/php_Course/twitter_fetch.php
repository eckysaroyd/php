<html>
<head>
<title>twitter</title>
<style>
body
{
background:#e7f4fd;
}
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
</head>
<body>
<table border>
<tr>
<th>Email Adrress</th>
<th>Password</th>
<th>Edit</th>
<th>Delete</th>
</tr>
<?php
include 'connection.php';
$ss="select * from twitter";
$result= mysqli_query($con,$ss);
if($result)
{
while($u=mysqli_fetch_array($result))
{
	?>
	<tr>
	<td><?php echo $u['email']; ?></td>
	<td><?php echo $u['password']; ?></td>
	<td><a href="twitter_delete.php?z=<?php echo $u['user_id']; ?></td>
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
