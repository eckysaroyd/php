</<html>
<head>
<title></title>
<style>	
.div1
{
width: 100%;
height:400px;
background-color: lightCyan;
padding-left:100px;
padding-top:50px;
}	
.hform
	{
		width: 200px;
		height: 30px;
		border-radius: 5px;
		color:chocolate;
		background-color: blanchedalmond;
		font-style: 15px;
		padding-left: 10px;
	}
	/*first main header-form(login input)*/
	.hform1
	{
		width: 100px;
		height: 25px;
		border-radius: 5px;
		color:white;
		background-color: MediumSeaGreen;
		font-style: 15px;
		padding-left: 10px;
		margin-left: 50px;

	}
	</style>
</head>
<body>
<?php
include'connection.php';
$id=$_GET['ie'];
$sql="select * from twitter where user_id='$id'";
$result=mysqli_query($con,$sql);
$pp=mysqli_fetch_array($result);
