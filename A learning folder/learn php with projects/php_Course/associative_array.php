<?php
$a=array("ali"=>"1","det"=>"apple","ghi"=>"lichi");
/*{
echo $a['det'];*/
foreach($a as $key=>$value)
{
	echo "key is&nbsp; ".$key."&nbsp; And value is&nbsp; ".$value."<br>";
}
?>