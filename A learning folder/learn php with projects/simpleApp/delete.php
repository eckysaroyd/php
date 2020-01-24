<?php
include'conn.php';
$id=$_GET['id'];
$sql="delete from names where names_id='$id'";
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