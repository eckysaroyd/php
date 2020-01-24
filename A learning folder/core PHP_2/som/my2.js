$(document).ready(function(){
	$('#submit1').click(function(){
var fname=$.trim($('#fname').val());
var lname=$.trim($('#lname').val());
var email=$.trim($('#email').val());
var atpos=email.indexOf('@');
var dotpos=email.lastIndexOf('.');
var contact=$.trim($('#contact').val());
var student_id=$.trim($('#student_id').val());
var password=$.trim($('#password').val());
var cpassword=$.trim($('#cpassword').val());
if(fname=='')
{
	alert('Please, Enter Your First Name');
	$('#fname').focus();
	return false;
}
if(lname=='')
{
	alert('Please, Enter Your Last Name');
	$('#lname').focus();
	return false;
}
if(email=='')
{
	alert('Please, Enter Your Email Address');
	$('#email').focus();
	return false;
}
if(atpos<1 || dotpos<atpos+2 || dotpos+2>=email.length)
{
alert('Please, Enter Valid Email ID');
$("#email").focus();
	return false;
}
if(contact=='')
{
	alert('Please. Enter Your Contact Address');
	$('#contact').focus();
	return false;
}
if(isNaN(contact==''))
{
	alert('Please. Enter a Valid Contact Address');
	$('#contact').focus();
	return false;
}
if(contact.length<10)
{
	alert("Please Enter a Valid Contact Address");
	$('#contact').focus();
	return false;
}
if(student_id=='')
{
	alert('Please, Enter Your Student_ID');
	$('#student_id').focus();
	return false;
}
if(student_id.length<8)
{
	alert("Please Enter a Valid Student_ID");
	$('student_id').focus();
	return false;
}
if(isNaN(student_id==''))
{
	alert('Please, Enter a Valid Student_ID');
	$('#student_id').focus();
	return false;
}

}
if(password=='')
{
	alert('Please, Enter Your Password');
	$('#password').focus();
	return false;
}
if(password.length<5)
{
	alert("Your Password Is Too Short!!");
	$('#password').focus();
	return false;
}
if(cpassword=='')
{
	alert('Please, Confirm Your Password');
	$('#cpassword').focus();
	return false;
}
if(cpassword!=password)
{
	alert('Please, You Enter Wrong Password');
	$('#cpassword').focus();
	return false;
}
});
});