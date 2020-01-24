<!-- starting jquery -->
<html>
<head>
<title>
my first JQUERY
</title>
<script type="text/javascript" src="jquery.js"></script>
</head>
<body>
<script>
$(document).ready(function(){
$("p").click(function(){
$(this).hide();
});
$("h1").click(function(){
	$(this).hide();
});
});
</script>
<p>HELLO ECKY</p>
<p> THIS IS MY NEW PAGE</p>
<p> YOU CAN START STUDYING HERE</p>
<p>JQUERY ITS EASY WAY TO PERFORM </p>
<p>EASY THAN JAVASCRIPT</p>
<h1> THIS IS MY FIRST HEADING</h1>
</body>
</html>