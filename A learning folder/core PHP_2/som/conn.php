<?php
$con = mysqli_connect('localhost','root','','somali');
if(!$con)
	{
	die('could not connect to database'.mysqli_connect_error());
	}
?>