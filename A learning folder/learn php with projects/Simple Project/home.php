<?php
session_start();
$fname=$_SESSION['fname'];
$userid = $_SESSION['userid'];
?>
<html>
<head>
<title></title>
<link type="text/css" rel="stylesheet" href="fb.css"/>
<script type="text/javascript" src="javascript.js"></script>
</head>
<body>
<div class="div1">
<div class="div2">
<b>CHAT</b>
<form method="post">
&nbsp;&nbsp;<input type="text" name="search" placeholder="search" class="search1">
<input type="submit" name="submitsearch" value="search" class="kaka">
</div>
<div class="div3" >
<img src="prof.jpg" >
<b class="prfl2"><?php echo $fname; ?></b>
<b class="prfl23">inbox</b>
<a href='logout.php'><b class="prfl23">Logout</b></a>
</div>
<div class="div4">
<?php
include"connection.php";
if(isset($_POST['submitsearch']))
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
<div class="div5">
<form method="post" enctype="multipart/form-data" onsubmit="return(function emailvalidation111())">
<input type="text" name="words" placeholder="write Comment" id="text1" class="text11"><br>
<input type="submit" name="submit" value="POST" class="upload1">
</form>
</div>
<?php
include "connection.php";
if(isset($_POST['submit']))
{
	$words=$_POST['words'];
    $sql="insert into comment(user_id,words)values('$userid','$words')";
		$result=mysqli_query($con,$sql);
		if($result)
		{
			//echo"<script>alert('successfully inserted');</script>";
	}
	else
	{
		echo mysqli_error($con);
	}
}
	$comment_id = mysqli_insert_id($con);
	$eck="select words from comment where user_id='$userid' order by comment_id desc";
$query=mysqli_query($con,$eck);

while($ab=mysqli_fetch_array($query))
{
?>

<div class="div6">
<?php
echo $ab['words'];

?>
</div>
<?php
}
?>

</div>

</body>
</html>
