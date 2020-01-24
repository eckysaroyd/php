function emailvalidation()
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
if(document.getElementById('password').value=='')
{
alert('PLEASE ENTER YOUR PASSWORD');
document.getElementById('password').focus();
return false;
}
if(document.getElementById('password').value.length<5)
{
alert('INVALID PASSWORD');
document.getElementById('password').focus();
return false;
}
return true;
}
function emailvalidation1()
{
if(document.getElementById('name1').value=='')
{
alert('PLEASE ENTER YOUR FIRST NAME');
document.getElementById('name1').focus();
return false;
}
if(document.getElementById('name2').value=='')
{
alert('PLEASE ENTER YOUR SURNAME');
document.getElementById('name2').focus();
return false;
}
var a=document.getElementById('eml').value;
var b=a.indexOf('@');
var c=a.lastIndexOf('.');
if(b<1 || c<b+2 || c+2>=a.length)
{
alert('Please Enter Valid Email ID');
document.getElementById('eml').focus();
return false;
}
if(document.getElementById('psswrd').value=='')
{
alert('PLEASE ENTER YOUR PASSWORD');
document.getElementById('psswrd').focus();
return false;
}
if(document.getElementById('psswrd').value.length<5)
{
alert('PLEASE YOUR PASSWORD IS TOO SHORT');
document.getElementById('psswrd').focus();
return false;
}
if(document.getElementById('day1').value=='dd')
{
alert('PLEASE SELECT DAY');
document.getElementById('day1').focus();
return false;
}
if(document.getElementById('month1').value=='mm')
{
alert('PLEASE SELECT MONTH');
document.getElementById('month1').focus();
return false;
}
if(document.getElementById('year1').value=='yy')
{
alert('PLEASE SELECT YEAR');
document.getElementById('year1').focus();
return false;
}
if((myform.gender[0].checked==false && myform.gender[1].checked==false))
{
alert('SELECT MALE OR FEMALE');
return false;
}
return true;
}
function emailvalidation111()
{
	if(document.getElementById('text1').value=='')
{
alert('PLEASE ENTER SOMETHING');
document.getElementById('text1').focus();
return false;
}
return true;
}

