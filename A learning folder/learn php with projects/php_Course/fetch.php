<html>
<head>
<title>fetch</title>
</head>
<body>
<table border>
<tr>
<th>user_id</th>
<th>name</th>
<th>email</th>
<th>Edit</th>
<th>Delete</th>
</tr>

<?php
include 'connection.php';
$eck="select * from signup";
$result=mysqli_query($con,$eck);
if($result)
{
while($ab=mysqli_fetch_array($result))
{
?>
<tr>
<td><?php echo $ab['user_id'];?></td>
<td><?php echo $ab['name']; ?></td>
<td><?php echo $ab['email'];?></td>
<td><a href='update.php?id=<?php echo $ab['user_id'];?>'>Edit</a></td>
<td><a href='delete.php?id=<?php echo $ab['user_id'];?>	'>Delete</td>
</tr>	
<?php
}
?>
</table>
<?php 
}else{
	echo mysqli_error($con);
}
?>
</body>
</html>

