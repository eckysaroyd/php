
$(document).ready(function(){
$('button').click(function(){
var fname=$.trim($('#fname').val());
var lname=$.trim($('#lname').val());
var rno=$.trim($('#rno').val());
var course=$.trim($('#course').val());
var year=$.trim($('#year').val());
var pssword=$.trim($('#password').val());
var pssword1=$.trim($('#password1').val());
if(fname=='')
{
	alert('Please Enter Your First Name');
	$('#fname').focus();
	return false;
}
if(lname=='')
{
	alert('Please Enter Your Last Name');
	$('#lname').focus();
	return false;
}
if(rno=='')
{
	alert('Please Enter Your Registration Number');
	$('#rno').focus();
	return false;
}
if(isNaN(rno))
{
	alert('Enter a Right Registration number');
	$('#rno').focus();
	return false;
}
if(pssword=='')
{
	alert("Please Enter  Your Password");
	$('#password').focus();
	return false;
}
if(pssword1=='')
{
	alert("Please Confirm Your Password");
	$('#password1').focus();
	return false
}
if(pssword1=!pssword)
{
	alert("Your Password Is Not Matchng");
	$('#password1').focus();
	return false
}

});
});