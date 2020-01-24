<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>login</title>
	<style>
	.color{
		background-color:blue;
	}
	
	.top{
	
		
		padding-top:100px;
		padding-buttom:100px;
		
	}
	.main
	{
		background-color:yellow;
		border: 1px solid black;
		border-radius:20px;
		width:450px;
		height:350px;

	}
	</style>
</head>
<body class="color">
<div class="container">
<div class="row">
<div class="col-md-12 top">
&nbsp;
</div>
</div>
</div>
<!--header bar-->
<div class="container">
<div class="row">
<div class="col-md-4">
&nbsp;
</div>
<div class="col-md-4">
<!--<h3> MONPHIL CHAT</h3>-->
</div>
<div class="col-md-4">
&nbsp;
</div>
</div>
</div>
<!--login bar-->
<div class="container">
<div class="row">
<div class="col-md-3">
&nbsp;
</div>
<div class=" col-md-7 main">
<div class="container">
  <h2>Login</h2>
  <form class="form-horizontal" action="homepage.php">
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Email:</label>
      <div class="col-sm-10">
        <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Password:</label>
      <div class="col-sm-10">          
        <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd">
      </div>
    </div>
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <div class="checkbox">
          <label><input type="checkbox" name="remember"> Remember me</label>
        </div>
      </div>
    </div>
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default">Submit</button>
      </div>
    </div>
  </form>
</div>
</div>
<div class="col-md-2">
&nbsp;
</div>
</div>
</div>
</body>
</html>