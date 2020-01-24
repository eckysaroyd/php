<?php 
include 'connection.php';
$get=$_GET['value'];

$sql="select * from state where state_id='$get'";
$result=mysqli_query($con,$sql);
if($result)
{
	echo '<option value=""> SELECT CITY</option>';
	while($row=mysqli_fetch_array($result))
	{
		?>
		
		<option value="<?php echo $row['city_id']; ?> "><?php echo $row['city_name']; ?> </option>
		<?php
	}
}



?>