<!-- starting jquery -->
<html>
<head>
<title>
my first JQUERY
</title>
<script type="text/javascript" src="jquery.js"></script>
<style>
.div1
{
	height:100px; 
	width:100px; 
	background-color:blue;
	padding:5px;
	float:left;
	margin-top:100px;
}
</style>
</head>
<body>
<script>
$(document).ready(function(){
	$("h1").click(function(){
	$(this).hide();
});
$("h1").click(function(){
	$(this).show;
});
$("p").click(function(){
	$(this).hide();
});
$(".div1").click(function(){
	$(this).hide();
});
$(".button").click(function(){
$("p").hide();
$("h1").hide();
$(".div1").hide();
});
$(".button1").click(function(){
$("p").show();
$("h1").show();
$(".div1").show();
});
});
</script>
<p>HELLO ECKY</p>
<p> THIS IS MY NEW PAGE</p>
<p> YOU CAN START STUDYING HERE</p>
<p>JQUERY ITS EASY WAY TO PERFORM </p>
<p>EASY THAN JAVASCRIPT</p>
<h1> THIS IS MY FIRST HEADING</h1>
<button class="button">click</button>
<button class="button1">show</button>
<div class="div1">
<p>hello</p>
</div> 
</body>
</html>