<html>
<head>
<title>forminphp</title>
</head>
<body>

<form method="post">
<input type="text" name="text">
<input type="submit" name="submit" value="submit">
</form>
<?php

if(isset($_POST['submit']))
{
$ecky=$_POST['text'];
echo $ecky;
}
?>
</body>
</html>