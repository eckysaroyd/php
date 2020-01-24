<html>
<head>
<title>image upload</title>
</head>
<body>
<form method="post" enctype="multipart/form-data">
Upload Image<input type="file" name="image"><br>

<input type="submit" name="submit" value="Upload">
</form>

<?php
include 'connection.php';
if(isset($_POST['submit']))
{
	$pic = $_FILES['image']['name'];
	$location = $_FILES['image']['tmp_name'];
	$folder ="upload/";
	if(move_uploaded_file($location,$folder.$pic))
	{
		$sql="insert into image(image_name)values('$pic')";
		$result=mysqli_query($con,$sql);
		if($result)
		{
			echo"<script>alert('successfully');</script>";
	}
	else
	{
		echo "<script>alert('error');</script>";
	}
	$id=mysqli_insert_id($con);
	$query="select image_name from image where image_id='$id'";
	$run=mysqli_query($con,$query);
	$row=mysqli_fetch_array($run);
	$img=$row['image_name'];
	echo"<img src='upload/$img' width='150' height='150'>";
}
}
?>