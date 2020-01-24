<html>
<head>
<title>
search_items
</title>
</head>
<body>
<form method="post">
<input type="text" name="search" placeholder="search" class="search1">
<input type="submit" name="submit">
</form>
</body>
</html>
<?php
include"connection.php";
if(isset($_POST['submit']))
{
	$search=$_POST['search'];
	if($search=='')
	{
		echo"you forget to Enter Something";
		exit;
	}
	$search=trim($search);
	$sql="select * from search where title like '%$search%' or description like '%$search%'";
	$query=mysqli_query($con,$sql) or die(mysqli_error($con));
	if($query)
	{
		while($row=mysqli_fetch_array($query))
		{
			?>
			<a href=""> <?php echo $row['title']; ?> </a><br>
			<a href=""> <?php echo $row['description']; ?> </a></br>
		<?php
		}
	}
	$ifanymatch=mysqli_num_rows($query);
	if($ifanymatch==0)
	{
		echo "No results Found";
	}
}
?>