<html>
<head>
<title></title>
</head>
<body>
<h3> SHOW MY IMAGES NAMES</h3>
<table border>
<tr>
<th>IMAGE_ID</th>
<th>IMAGE</th>
</tr>
<?php
include 'connection.php';
$ss="select * from image";
$result= mysqli_query($con,$ss);
if($result)
{
while($u=mysqli_fetch_array($result)){
	$img=$u['image_name'];

?>
	<tr>
	<td><?php echo $u['image_id']; ?></td>
	<td><?php echo "<img src='upload/$img' width='150' height='150'>" ?></td>
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

	
