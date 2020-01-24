$(document).ready(function(){
$('#register').click(function(){
var email=$.trim($("#email").val());
var atpos=email.indexOf('@');
var dotpos=email.lastIndexOf('.');
var fname=$.trim($('#fname').val());
var lname=$.trim($('#lname').val());
var gender=$.trim($('#gender').val());
var rno=$.trim($('#rno').val());
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
if(email=='')
{
	alert("Please Enter Your Right Email");
	$("#email").focus();
	return false;
}
if(atpos<1 || dotpos<atpos+2 || dotpos+2>=email.length)
{
alert('Please Enter Valid Email ID');
$("#email").focus();
	return false;
}
if(gender=='-1')
{
	alert('Please Select Your Gender');
	$('#gender').focus();
	return false;
}

if(rno=='')
{
	alert('Please Enter Your Mobile Number');
	$('#rno').focus();
	return false;
}
if(isNaN(rno))
{
	alert('Please!! It is not Mobile number');
	$('#rno').focus();
	return false;
}
if(pssword=='')
{
	alert("Please Enter  Your Password");
	$('#password').focus();
	return false;
}
if(pssword.length<5)
{
	alert("Please Your Password Is Too Short");
	$('#password').focus();
	return false;
}
if(pssword1=='')
{
	alert("Please Confirm Your Password");
	$('#password1').focus();
	return false;
}
if(pssword1!=pssword)
{
	alert("Your Password Is Not Matchng");
	$('#password1').focus();
	return false;
}

});
});

/* login page validation -- */
$(document).ready(function(){
$('#button1').click(function(){
var loginid=$.trim($('#loginid').val());
var password111=$.trim($('#password111').val());
if(loginid=='')
{
	alert('Please Enter Your email Adress');
	$('#loginid').focus();
	return false;
}
if(password111=='')
{
	alert("Please Enter  Your Password");
	$('#password111').focus();
	return false;
}
});
});
/* end login page validation -- */