<html>
<head>
<title>forminphp</title>
<style>
.text
{
	height:90px;
	width:300px;
}
</style>
</head>
<body>

<form method="post">
NAME:<input type="text" name="text"><br>
EMAIL:<input type="email" name="email"><br>
CONTACT:<input type="text" name="contact"><br>
ADDRESS:<textarea name="adress"></textarea><br>
&nbsp;&nbsp;&nbsp;<input type="submit" name="submit" value="submit">
</form>
<?php
if(isset($_POST['submit']))
{
$text=$_POST['text'];
$email=$_POST['email'];
$contact=$_POST['contact'];
$adress=$_POST['adress'];
echo $text."<br>";
echo $email."<br>";
echo $contact."<br>";
echo $adress."<br>";
}
?>
</body>
</html>