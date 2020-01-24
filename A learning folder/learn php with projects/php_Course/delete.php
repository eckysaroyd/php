<?php
include'connection.php';
$id=$_GET['id'];
$sql="delete from signup where user_id='$id'";
$result=mysqli_query($con,$sql);
if($result)
{
	//echo"delete";
	header('location:fetch.php');
}
else
{
	echo mysqli_error($con);
}
?>