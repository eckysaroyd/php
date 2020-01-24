<html>
<head>
<title>signup</title>
<style>
.form1
{
	font-size:18px;
	color:grey;
	background-color:white;
	width:300px;
	height: 30px;
	margin-top: 5px;
	margin-left:10px;
	padding:5px;
}
.form2
{
	font-size:18px;
	color:white;
	background-color:green;
	width:200px;
	height: 30px;
	margin-top: 5px;
	margin-left:100px;
	padding:5px;
}

</style>
</head>
<body>
<form method="post">
<input type="text" name="name" placeholder="name" class="form1"><br>
<input type="email" name="email" placeholder="email" class="form1"><br>
<input type="password" name="password" placeholder="password" class="form1"><br>
<p>Birthday</p><br>
<select name="day">
<option>Day</option>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
<option value="6">6</option>
<option value="7">7</option>
<option value="8">8</option>
<option value="9">9</option>
<option value="10">10</option>
<option value="11">11</option>
<option value="12">12</option>
<option value="13">13</option>
<option value="14">14</option>
<option value="15">15</option>
<option value="16">16</option>
<option value="17">17</option>
<option value="18">18</option>
<option value="19">19</option>
<option value="20">20</option>
<option value="21">21</option>
<option value="22">22</option>
<option value="23">23</option>
<option value="24">24</option>
<option value="25">25</option>
<option value="26">26</option>
<option value="27">27</option>
<option value="28">28</option>
<option value="29">29</option>
<option value="30">30</option>
<option value="31">31</option>
</select>
<select name="month">
<option>Month</option>
<option value="Jan">Jan</option>
<option value="Feb">Feb</option>
<option value="Mar">Mar</option>
<option value="Apr">Apr</option>
<option value="May">May</option>
<option value="Jun">Jun</option>
<option value="Jul">Jul</option>
<option value="Aug">Aug</option>
<option value="Sep">Sep</option>
<option value="Oct">Oct</option>
<option value="Nov">Nov</option>
<option value="Dec">Dec</option>
</select>
<select name="year">
<option>Year</option>
<option value="2010">2010</option>
<option value="2011">2011</option>
<option value="2015">2015</option>
<option value="2016">2016</option>
<option value="2018">2018</option>
</select></br>
<input type="radio" name="gender" value="female">Fermale</br>
<input type="radio" name="gender" value="male">Male</br>
<input type="submit" name="submit" value="submit" class="form2">
</form>
<?php
include "connection.php";
if(isset($_POST['submit']))
{
	$name=$_POST['name'];
	$email=$_POST['email'];
	$password=$_POST['password'];
	$day=$_POST['day'];
	$month=$_POST['month'];
	$year=$_POST['year'];
	$dob=$day."-".$month."-".$year;
	$gender=$_POST['gender'];
	$new="insert into dob(name,email,password,dateofbirth,gender)values('$name','$email','$password','$dob','$gender')";
	$nw=mysqli_query($con,$new);
	if($nw)	
	{
	echo "<script> alert('Record Save'); </script>";
	}
else
{
	echo mysqli_error($con);
}
}
?>	
</body>
</html>