<html>
<head>
<title>
search_ITEMS
</title>
</head>
<body>
<form method="post">
<input type="text" name="search" >
<input type="submit" name="submit" value="search">
</form>
</body>
</html>
<?php
include 'connection.php';
if(isset($_POST['submit']))
{
	$input=$_POST['search'];
if($input=='')
{
	echo"you forget to enter search name";
	exit;
}
	$input=trim($input);
	$sql="select * from search where title like '%$input%' or description like '%$input%' ";
	$query=mysqli_query($con,$sql) or die (mysqli_error($con));
	if($query)
	{
		while($row=mysqli_fetch_array($query))
		{
			echo $row['title']."<br>";
			echo $row['description']."<br>";
		}
	}
		$anymatch=mysqli_num_rows($query);
		if($anymatch==0){
	
echo "sorry,no results found";
}
}
?>