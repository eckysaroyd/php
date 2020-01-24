<html>
<head>
<title>message</title>
</head>
<body>
<form method="post">
<input type="text" name="message">
<input type="submit" name="submit" value="send">
</form>
</body>
</html>
<?php
include'conn.php';
if(isset($_POST['submit']))
{
	$msg=$_POST['message'];
	$sql="insert into message(message) values('$msg')";
	$query=mysqli_query($con,$sql);
	if($query)
	{
		$fetch="select * from message order by message_id
		desc";
		$new=mysqli_query($con,$fetch);
		while($row=mysqli_fetch_array($new)){
		echo $row['message']."<br>";
		}
	}
	else
		{
			echo mysqli_error($con);
		}
}
?>
		