$(document).ready(function(){
$('#submit').click(function(){
var name=$.trim($('#name').val());
var email=$.trim($('#email').val());
var atpos=email.indexOf('@');
var dotpos=email.lastIndexOf('.');
var salary=$.trim($('#salary').val());
var gender=$.trim($('#gender').val());
var password=$.trim($('#password').val());
var cpassword=$.trim($('#cpassword').val());
if(name=='')
{
	alert('Please Enter Employee Name');
	$('#name').focus();
	return false;
}
if(email=='')
{
	alert('Please Enter Employee Mail');
	$('#email').focus();
	return false;
}
if(atpos<1 || dotpos<atpos+2 || dotpos+2>=email.length)
{
alert('Please Enter Valid Email ID');
$("#email").focus();
	return false;
}
if(salary=='')
{
	alert('Please Enter Employee Salary');
	$('#salary').focus();
	return false;
}
if(isNaN(salary))
{
	alert('Enter Numbers format');
	$('#salary').focus();
	return false;
}
if(gender=='-1')
{
	alert('Please Select Your Gender');
	$('#gender').focus();
	return false;
}
if(password=='')
{
	alert("Please Enter Employee Password");
	$('#password').focus();
	return false;
}
if(password.length<5)
{
	alert("Please Your Password Is Too Short");
	$('#password').focus();
	return false;
}
if(cpassword=='')
{
	alert("Please Confirm Your Employee  Password");
	$('#cpassword').focus();
	return false
}
if(cpassword!=password)
{
	alert("Your Password Is Not Matchng");
	$('#cpassword').focus();
	return false
}
});
});