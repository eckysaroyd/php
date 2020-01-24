<?php
include'connection.php';
$in=$_GET['ec'];
$sql="delete from signup where student_id='$in'";
$result=mysqli_query($con,$sql);
if($result)
{
	//echo"delete";
	header('location:fetch2.php');
}
else
{
	echo mysqli_error($con);
}
?>