<?php
include "connection.php";
if(isset($_POST['submit']))
{
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$email=$_POST['email'];
$password=$_POST['password'];
$day=$_POST['day'];
$month=$_POST['month'];
$year=$_POST['year'];
$dob=$day."/".$month."/".$year;
$gender=$_POST['gender'];
$new="insert into users1(fname,lname,email,password,dateofbirth,gender)values('$fname','$lname','$email','$password','$dob','$gender')";
$que= mysqli_query($con,$new);
if($que)
{
	echo "<script>alert('user record saved');</script>";
}
else
{
	echo mysqli_error($con);
}
}
?>
<html>
<head>
<title>MCube_FREE CHAT</title>
<link type="text/css" rel="stylesheet" href="fb.css"/>
<script type="text/javascript" src="javascript.js"></script>
</head>
<body>
	<!-- Header Part -->
<div class="main">
<div class="left">
<h1>CHAT</h1>
</div>
<div class="right">
<table class="color">
<tr>
<td>Email</td>
<td>Password</td>
<td>&nbsp;</td>
</tr>
<form onsubmit="return(emailvalidation())" method="post">
<tr>
<td><input type="text" name="email" id="email"></td>
<td><input type="password" name="password" id="password"></td>
<td><input type="submit" name="login" value="login"> </td>
</tr>
</form>
<tr>
<td>&nbsp;</td>
<td><a href="" class="fog">Forget account?</a></td>
<td>&nbsp;</td>
</table>
</div>
</div>
<?php
if(isset($_POST['login']))
{
$email=$_POST['email'];
$password=$_POST['password'];
$sql="select user_id,fname,email,password from users1 where email='$email' and password='$password'";
$query=mysqli_query($con,$sql);
$count=mysqli_num_rows($query);
if($count)
{
	$row= mysqli_fetch_array($query);
	$fname =$row['fname'];
	$userid= $row['user_id'];
session_start();
$_SESSION['fname']=$fname;
$_SESSION['userid']=$userid;
header('location:home.php');
}
else
{
echo "<script> alert('Email or Password incorrect, Please try again'); </script>";
}
}
?>
<!-- end header part -->
<!-- login page -->
<div class="mainy">
<div class="lef">
<h2>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="Chatting1.jpg" class="pic1"></h2>
</div>
<div class="rig">
<h1>Create an account</h1>
<form action="" onsubmit="return(emailvalidation1())" name="myform" method="post">
<input type="text" placeholder="First name" class="fbform" id="name1" name="fname">
<input type="text"  placeholder="Surname" class="fbform" id="name2" name="lname"></br>
<input type="text"  placeholder="Email address" class="fbform1" id="eml" name="email"></br>
<input type="password"  placeholder="New password" class="fbform1" id="psswrd" name="password">
</br> </br>
Birthday<br>
<select id="day1" name="day" class="day11">
<option value="dd">Day</option>
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
<select id="month1" name="month" class="day11">
<option value="mm">Month</option>
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
<select id="year1" name="year" class="day11">
<option value="yy">Year</option>
<option value="1990">1990</option>
<option value="1991">1991</option>
<option value="1992">1992</option>
<option value="1993">1993</option>
<option value="1994">1994</option>
<option value="1995">1995</option>
<option value="1996">1996</option>
<option value="1997">1997</option>
<option value="1998">1998</option>
<option value="1999">1999</option>
<option value="2000">2000</option>
<option value="2001">2001</option>
<option value="2002">2002</option>
<option value="2003">2003</option>
<option value="2004">2004</option>
<option value="2005">2005</option>
<option value="2006">2006</option>
<option value="2007">2007</option>
<option value="2008">2008</option>
<option value="2009">2009</option>
<option value="2010">2010</option>
<option value="2011">2011</option>
<option value="2012">2012</option>
<option value="2013">2013</option>
<option value="2014">2014</option>
<option value="2015">2015</option>
<option value="2016">2016</option>
<option value="2017">2017</option>
<option value="2018">2018</option>
</select></br>
<input type="radio" name="gender" value="female" >Female
<input type="radio" name="gender" value="male">Male</br>
<input type="submit" name="submit" value="Create Account" class="button">
</form>
</div>
</div>
<!-- end login page -->
</body>
</html>

