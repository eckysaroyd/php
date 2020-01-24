<html>
<head>
<title></title>
</head>
<body>
<form method="post" enctype="multipart/form-data">
<input type="file" name="img">
<input type="submit" name="submit" value="upload">
<form>
</body>
</html>
<?php
if(isset($_POST['submit']))
{
$new=$_FILES['img']['name'];
$loc=$_FILES['img']['tmp_name'];
$fol="upload/";
if(move_uploaded_file($loc,$fol.$new))
{
echo"<script>alert('successfully');</script>";
}
else
{
echo"<script>alert('error');</script>";
}
}
?>