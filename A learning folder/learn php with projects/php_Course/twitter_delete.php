<?php
include 'connection.php';
$z=$_GET['ec'];
$ss="select * from twitter where user_id='$z'";
$result= mysqli_query($con,$ss);
if($result)
{
header('location:twitter_fetch.php');
}
else
{
echo mysqli_error($con);
}
?>