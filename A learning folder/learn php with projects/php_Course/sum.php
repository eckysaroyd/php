<html>
<head>
<title>forminphp</title>
<style>
.text
{
	height:90px;
	width:300px;
	padding:10px;
	margin:10px;
	border-radius:10px;
}
.text1
{
	height:90px;
	width:200px;
	padding:10px;
	margin:10px;
	border-radius:10px;
}
</style>
</head>
<body>

<form method="post">
ENTER 1:<input type="text" name="text" class="text"><br>
ENTER 2:<input type="text" name="text2" class="text"><br>

&nbsp;&nbsp;&nbsp;<input type="submit" name="submit" value="submit" class="text1">
</form>
<?php

if(isset($_POST['submit']))
{
$text=$_POST['text'];
$text2=$_POST['text2'];
$text3=$text+$text2;
$text4=$text-$text2;
$text5=$text*$text2;
$text6=$text/$text2;
echo $text."<br>";
echo $text."<br>";
echo $text2."<br>";
echo "SUM IS&nbsp;".$text3."<br>";
echo "SUBSTRACTION IS&nbsp;".$text4."<br>";
echo "MULTIPLICATION IS&nbsp;".$text5."<br>";
echo "DIVISION IS&nbsp;".$text6."<br>";
}
?>
</body>
</html>