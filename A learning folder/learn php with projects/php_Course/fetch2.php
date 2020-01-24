<html>
<head>
<title>
</title>
</head>
<body>
<table border>
<tr>
<td>student_id</td>
<td>name</td>
<td>email</td>
<td>password</td>
<td>dateofbirth</td>
<td>gender</td>
<td>delete</td>

</tr>
<?php
include 'connection.php';
$ec='select * from dob';
$result=mysqli_query($con,$ec);
if($result)
{
while($ab=mysqli_fetch_array($result))
{
?>
<tr>
<td><?php echo $ab['student_id']; ?></td>
<td><?php echo $ab['name']; ?></td>
<td><?php echo $ab['email']; ?></td>
<td><?php echo $ab['password']; ?></td>
<td><?php echo $ab['dateofbirth']; ?></td>
<td><?php echo $ab['gender']; ?></td>
<td><a href="delete2.php?ec=<?php echo $ab['student_id'];?>">delete</a></td>
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