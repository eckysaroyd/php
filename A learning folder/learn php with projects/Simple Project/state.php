<?php 
include 'connection.php';
$get=$_GET['value'];

$sql="select * from state where country_id='$get'";
$result=mysqli_query($con,$sql);
if($result)
{
	echo '<option value=""> SELECT STATE</option>';
	while($row=mysqli_fetch_array($result))
	{
		?>
		
		<option value="<?php echo $row['state_id']; ?> "><?php echo $row['state_name']; ?> </option>
		<?php
	}
}



?>