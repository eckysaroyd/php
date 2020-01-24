<?php
include 'connection.php';
$em=$_GET['a'];
$b="delete from salary where employee_id='$em'";
$result= mysqli_query($con,$b);
if($result)
{
	header('location:employee_fetch.php');	
}
else
{
	echo mysqli_error($con);
}
?>