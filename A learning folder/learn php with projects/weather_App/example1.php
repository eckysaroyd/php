<?php $json_string = file_get_contents("http://api.wunderground.com/api/2ea138a9dd52eabe /geolookup/conditions/q/IA/Cedar_Rapids.json"); 
$parsed_json = json_decode($json_string); 
$location = $parsed_json->{'location'}->{'city'}; 
$temp_f = $parsed_json->{'current_observation'}->{'temp_f'}; 
echo "Current temperature in ${location} is: ${temp_f}\n"; 
?> 



<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js"></script> 
<script> jQuery(document).ready(function($) { 
$.ajax({ 
url : "http://api.wunderground.com/api/2ea138a9dd52eabe/geolookup/conditions /q/IA/Cedar_Rapids.json", dataType : "jsonp", success : function(parsed_json) { 
var location = parsed_json['location']['city']; 
var temp_f = parsed_json['current_observation']['temp_f']; 
alert("Current temperature in " + location + " is: " + temp_f); 
} }); }); </script> 