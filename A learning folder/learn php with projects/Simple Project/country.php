<html>
<head>
<script src="jquery.js"></script>
</head>
<body>
<script>
$(document).ready(function(){
	$("#select_1").change(function(){
		var country=$(this).val();
		
		$.ajax({
			type:'get',
			url:'state.php',
			data:{value:country},
			success:function(data)
			{
				$("#select2").html(data);
			}
		});
	});
	$("#select_1").change(function(){
		var country=$(this).val();
		
		$.ajax({
			type:'get',
			url:'state.php',
			data:{value:country},
			success:function(data)
			{
				$("#select2").html(data);
			}
		});
	});
});
		
</script>
country<select id="select_1">
<option>Select</option>
<?php
include 'connection.php';
$sql="select * from country";
$result=mysqli_query($con,$sql);
if($result)
{
	while($row=mysqli_fetch_array($result))
	{
		?>
		<option value="<?php echo $row['country_id'];?>"><?php echo $row['country_name']; ?></option>
		<?php
	}
}

?>
</select>

<br><br>

state<select  id="select2">
</select>

</body>
</html>