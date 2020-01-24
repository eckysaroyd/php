<html>
<head>
<title>image upload</title>
</head>
<body>
<form method="post" enctype="multipart/form-data">
<input type="file" name="pic"><br>
<input type="submit" name="submit" value="upload"\>
</form>

<?php
if(isset($_POST['submit']))
{
	$pic=$_FILES['pic']['name'];
	$loc=$_FILES['pic']['tmp_name'];
	$fold="upload/";
	if(move_uploaded_file($loc,$fold.$pic))
	{
	echo "success";
	}else
	{
		echo "error";
	}
}
?>

	