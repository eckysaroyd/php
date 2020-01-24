<?php
$cord='31.2536,-75.7037';
$weather="https://api.darksky.net/forecast/677a6bd61607483aabb2633e09274c70/".$cord;
$new=json_decode(file_get_contents($weather));
echo '<pre>';
print_r($new);
echo '</pre>';
$temp1 = round($new->currently->temperature);
$sum1 =$new->currently->summary;
$wind1=round($new->currently->windSpeed);
$humi1=$new->currently->humidity*100;
?>

<html>
<head>
<title>navquery</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
</head>
<body oncontextmenu="return false">
<main class="container text-center">
<h3 class="display-1">navquery</h3>
  <div class="card p-4" style="margin: 0 auto; max-width:320px;">
	<h2>current weather</h2>
		<h3 class="display-2"> <?php echo $temp1; ?> &deg;</h3>
		<h3>humidity : <?php echo $humi1; ?>% </h3>
		<p class="lead"> <?php echo $sum1; ?></p>
		<p class="lead"> windspeed : <?php echo $wind1; ?><abbr title="miles per hour"> mi/h</abbr></p>
		
   </div>
<ul class="list-group" style="margin: 0 auto; max-width:320px;">
<?php  
//for each loop
foreach($new->hourly->data as $hour):
?>
  <li class="list-group-item"> <?php echo round($hour->temperature); ?>&deg; </li>

 <?php
 
 endforeach;
 
 ?>
 
</ul>
  </main>
</body>
</html>

