<html>
<head>
<title>
fetch data
</title>
</head>
<body>
<table border>
<tr>
<th>Student ID</th>
<th>Student First Name</th>
<th>Student Last Name</th>
<th>Student Email</th>
<th>Edit</th>
<th>Delete</th>
</tr>
<?php
include "conn.php";
$eck="select * from names";
$result=mysqli_query($con,$eck);
if($result)
{
	while($ab=mysqli_fetch_array($result))
	{
		?>
		<tr>
		<td><?php echo $ab['names_id']; ?> </td>
		<td> <?php echo $ab['fname']; ?> </td>
		<td> <?php echo $ab['lname']; ?> </td>
		<td> <?php echo $ab['email']; ?> </td>
		<td> <a href="update.php?id=<?php echo $ab['names_id'];?>">edit</a></td>
		<td> <a href="delete.php?id=<?php echo $ab['names_id'];?>">delete</a></td>
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
</html>