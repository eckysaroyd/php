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
    $("button").click(function(){
        $("#div1").fadeToggle(7000);
        $("#div2").fadeToggle("slow");
        $("#div3").fadeToggle(10000);
    });
});
</script>
</head>
<body>

<p>Demonstrate fadeIn() with different parameters.</p>

<button>Click to fade in boxes</button><br><br>

<div id="div1" style="width:80px;height:80px;display:none;background-color:red;"></div><br>
<div id="div2" style="width:80px;height:80px;display:none;background-color:green;"></div><br>
<div id="div3" style="width:80px;height:80px;display:none;background-color:blue;"></div>

</body>
</html>
