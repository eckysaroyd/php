<?php
include 'connection.php';
$id=$_GET['id'];
$sql="select * from signup where user_id='$id'";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_array($result);
?>
<form method="post">
Name<input type="text" name="name" value="<?php echo $row['name']; ?>"><br>
Email<input type="email" name="email" value="<?php echo $row['email'];?>"><br>
<input type="submit" name="update" value="update">
</form>
<?php
if(isset($_POST['update']))
{
	$name=$_POST['name'];
	$email=$_POST['email'];
	$query="update signup set name='$name', email='$email' where user_id='$id'";
	$run_query= mysqli_query($con,$query);
	if($run_query)
	{
		//echo "successfully updated";
		header('location:fetch.php');
	}
	else
	{
		echo mysqli_error($con);
	}
}
?>