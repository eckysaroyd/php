<?php
include "conn.php";
$id=$_GET['id'];
$sql="select * from names where names_id='$id'";
$query=mysqli_query($con,$sql);
$row=mysqli_fetch_array($query);
?>
<form method="post">
first Name<input type="text" name="fname" value="<?php echo $row['fname'] ?>" ><br>
Last Name<input type="text" name="lname" value="<?php echo $row['lname'] ?>"><br>
Email<input type="text" name="email" value="<?php echo $row['email'] ?>"><br>
<input type="submit" name="update" value="update">
</form>
<?php
if(isset($_POST['update']))
{
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$email=$_POST['email'];
$ans="update names set fname='$fname',lname='$lname',email='$email' where names_id='$id'";
$run_ans=mysqli_query($con,$ans);
if($run_ans)
{
	//echo "successful update";
	header('location:fetch.php');
}
else
{
	echo mysqli_error($con);
}
}
?>
