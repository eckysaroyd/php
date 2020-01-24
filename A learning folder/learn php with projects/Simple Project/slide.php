<html>
<head>
<title>slide down effect
</title>
<script src="jquery.js" type="text/javascript"></script>
<style>
.div1
{
	height:40px;
	width:300px;
	margin-left:200px;
	margin-top:20px;
	background-color:yellow;
	padding:10px;
}
.div2
{
	height:100px;
	width:300px;
	margin-left:200px;
	background-color:blue;
	padding:10px;
	display:none;
}
.div3
{
	height:40px;
	width:300px;
	margin-left:200px;
	margin-top:20px;
	background-color:yellow;
	padding:10px;
}
.div4
{
	height:100px;
	width:300px;
	margin-left:200px;
	background-color:blue;
	padding:10px;
}
</style>
</head>
<body>
<script>
$(document).ready(function()
{
	$(".div1").click(function()
	{
		$(".div2").slideDown("slow");
	});
	$(".div3").click(function()
	{
		$(".div4").slideUp("slow");
	});
});
	
</script>
<div class="div1">
<p>click for slidedown</p>
</div>
<div class="div2">
<p>this is slidedown show</p>
</div>
<div class="div3">
<p>click for slideup</p>
</div>
<div class="div4">
<p>this is slideup show</p>
</div>
</body>
</html>