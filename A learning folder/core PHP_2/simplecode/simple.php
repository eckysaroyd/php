<html>
<head>
<title>
</title>
</head>
<body>
<form method="POST">
<input type="text" name="fname" id="fname" placeholder="YOUR NAME"><br>
<input type="text" name="email" id="email" placeholder="YOUR EMAIL"><br>
<input type="text" name="header" id="header"  placeholder="HEADING"><br>
<textarea rows="5" cols="40"  name="address" id="address"  placeholder="TEXT US HERE"></textarea><br>
<input type="submit" name="submit" value="submit">
<?php
if(isset($_POST['submit']))
{
$fname=$_POST['fname'];
$email=$_POST['email'];
$head=$_POST['header'];
$address=$_POST['address'];
 $to = "enyato98@gmail.com";
         $subject = "CONTACT US FORM VALUES:-";
         
         $message = "<b>FIRST NAME:-".$fname."</b>";
		 $message = "<b>Email:-".$email."</b>";
		 $message = "<b>header:-".$head."</b>";
         $message = "<b>Address:-".$address."</b>";
         
         $header = "From:".$email." \r\n";
         //$header .= "Cc:afgh@somedomain.com \r\n";
         $header .= "MIME-Version: 1.0\r\n";
         $header .= "Content-type: text/html\r\n";
         
         $retval = mail ($to,$subject,$message,$header);
         
         if( $retval == true ) {
            echo "Message sent successfully...";
         }else {
            echo "Message could not be sent...";
         }
}
?>
</body>
</form>
</html>
