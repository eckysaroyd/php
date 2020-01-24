$(document).ready(function(){
$('#btn1').click(function(){
var usrname=$.trim($('#usrname').val());
var psw=$.trim($('#psw').val());
if(usrname=='')
{
	alert('Please, Enter Your Login Details');
	$('#usrname').focus();
	return false;
}
if(psw=='')
{
	alert("Please, Enter  Your Password");
	$('#psw').focus();
	return false;
}
});
});
