<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Somalia Laundry Services</title>

  <!-- Bootstrap -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="css/animate.css">
  <link rel="stylesheet" href="css/font-awesome.min.css">
  <link rel="stylesheet" href="css/jquery.bxslider.css">
  <link rel="stylesheet" type="text/css" href="css/normalize.css" />
  <link rel="stylesheet" type="text/css" href="css/demo.css" />
  <link rel="stylesheet" type="text/css" href="css/set1.css" />
  <link href="css/overwrite.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="css/bootstrap-social/bootstrap-social.css">
  <link href="css/style.css" rel="stylesheet">
  <script type="text/javascript" src="jquery.js"></script>
  <script type="text/javascript" src="my.js"></script>
  <script type="text/javascript" src="my2.js"></script>
<link rel="shortcut icon" href="img/favicon.png" />
  <!-- =======================================================
    finish our head part now we are going to start topnavbar
  ======================================================= -->
</head>

<body>
  <nav class="navbar navbar-default navbar-fixed-top coal" role="navigation">
    <div class="container">
       <div class="row">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse.collapse">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="index.php"><span><img src="img/somali_logo.png" width="80px" height="80px" style="margin-top: 0px;"></span><span class="hhead1" style="color: #E6B819; font-weight: bold;"> Somali</span><span class="hhead11" style="color: white;  font-weight: bold;"> Laundry</span></a>
      </div>
      <div class="navbar-collapse collapse">
        <div class="menu">
          <ul class="nav nav-tabs" role="tablist">
            <li role="presentation"><a href="index.php" class="lin">Home</a></li>
            <li role="presentation"><a href="services.php" class="lin">Services</a></li>
           <li role="presentation"><a href="price.php"> Price</a></li>
            <li role="presentation"><a href="portfolio.php" class="lin">Images</a></li>
            <li role="presentation"><a href="contact.php" class="lin">Contact</a></li>
            <li role="presentation"><a href="signup.php" class="lin">SignUp</a></li>
            <li> <button class="btn btn-green juu navbar-btn" id="myBtn" ><span class="glyphicon glyphicon-off ala"></span>login</button></li>
            
<!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->            <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header" style="padding:35px 50px;">
          <button type="button" class="close closex" data-dismiss="modal">&times;</button>
          <h4 class="vichwa">login to somali laundry</h4>
        </div>
        <div class="modal-body" style="padding:40px 50px;">
          <form role="form">
            <div class="form-group">
              <label for="usrname"><span class="glyphicon glyphicon-user"></span> Username</label>
              <input type="text" class="form-control" id="usrname" placeholder="Enter email">
            </div>
            <div class="form-group">
              <label for="psw"><span class="glyphicon glyphicon-eye-open"></span> Password</label>
              <input type="text" class="form-control" id="psw" placeholder="Enter password">
            </div>
            <div class="checkbox">
              <label><input type="checkbox" value="" checked>Remember me</label>
            </div>
              <button type="submit" class="btn btn-success btn-block" id="btn1"><span class="glyphicon glyphicon-off"></span> Login</button>
          </form>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-danger btn-default pull-left reds" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> exit</button>
  </div> 
</div>
 
<script>
$(document).ready(function(){
    $("#myBtn").click(function(){
        $("#myModal").modal();
    });
});
</script>
               </ul>
        </div>
      </div>
    </div>
   </div>
  </nav>

<div class="container">
<div class="row">
</br>
<br>
<br>
<br>
<br>
</div>
</div> 



<div class="container">
<div class="row">
  <div class="col-md-3">
&nbsp;
</div>
<div class="col-md-6">
  <h2 class="tab1 "><center>OUR PRICES</center></h2>
<hr class="tab1">
</div>
<div class="col-md-3">
&nbsp;
</div>
</div>
</div>


<!-- see our price list -->
<div class="container">
<div class="row">

<div class="showhim">
        <center>  <b><p class="tab1 pp">Wash and Dry</p></b> </center><br>
<center> <img src="img/wash_and_dry.jpg" class="ord1"></center> <div class="showme">
 <center> <table class="table table-hover  table-striped">
    <thead>
      <tr>
        <th>CLOTHES</th>
        <th>BUNDLE</th>
        <th>AMOUNT</th>
      </tr>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>T-shirt</td>
        <td>1kg</td>
        <td>100 Rs</td>
      </tr>
    </tbody>
    </table>
    </center> 
</div></div>


<div class="showhim">
        <center>  <b><p class="tab1 pp">Dry</p></b> </center><br>
<center> <img src="img/dry1.jpg"  class="ord1"></center> <div class="showme">
 <center> <table class="table table-hover  table-striped">
    <thead>
      <tr>
        <th>CLOTHES</th>
        <th>BUNDLE</th>
        <th>AMOUNT</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Shirt</td>
        <td>1KG</td>
        <td>120 Rs</td>
      </tr>
    </tbody>
         </table>
    </center> 
</div></div>


<div class="showhim">
        <center>  <b><p class="tab1 pp">Blanket</p></b> </center><br>
<center> <img src="img/blank1.jpg"  class="ord1"></center> <div class="showme">
 <center> <table class="table table-hover  table-striped">
    <thead>
      <tr>
        <th>CLOTHES</th>
        <th>BUNDLE</th>
        <th>AMOUNT</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Blanket</td>
        <td>1</td>
        <td>250 Rs</td>
      </tr>
    </tbody>
    </table>
    </center> 
</div></div>

</div>
</div>

<div class="container">
<div class="row">

<div class="showhim">
        <center>  <b><p class="tab1 pp">Iron</p></b> </center><br>
<center> <img src="img/iron123.jpg"  class="ord1"></center> <div class="showme">
 <center> <table class="table table-hover  table-striped">
    <thead>
      <tr>
        <th>CLOTHES</th>
        <th>BUNDLE</th>
        <th>AMOUNT</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>all clothes</td>
        <td>1KG</td>
        <td>200 Rs</td>
      </tr>
    </tbody>
    </table>
    </center> 
</div></div>


<div class="showhim">
        <center>  <b><p class="tab1 pp">Dry Cleaning</p></b> </center><br>
<center> <img src="img/dry_cleaning.jpg"  class="ord1"></center> <div class="showme">
 <center> <table class="table table-hover  table-striped">
    <thead>
      <tr>
        <th>CLOTHES</th>
        <th>BUNDLE</th>
        <th>AMOUNT</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>all type</td>
        <td>1kg</td>
        <td>180rs</td>
      </tr>
    </tbody>
    </table>
    </center> 
</div></div>


<div class="showhim">
        <center>  <b><p class="tab1 pp">Stiching</p></b> </center><br>
<center> <img src="img/stiching1.jpg"  class="ord1"></center> <div class="showme">
 <center> <table class="table table-hover  table-striped">
    <thead>
      <tr>
        <th>CLOTHES</th>
        <th>BUNDLE</th>
        <th>AMOUNT</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>all type of clothes</td>
        <td>per 1 clothes</td>
        <td>50 Rs</td>
      </tr>
    </tbody>
    </table>
    </center> 
</div></div>

</div>
</div>


<div class="container">
<div class="row">

<div class="showhim">
        <center>  <b><p class="tab1 pp">Carpets & Sofa Cleaning</p></b> </center><br>
<center> <img src="img/SofaCleaning.jpg"  class="ord1"></center> <div class="showme">
 <center> <table class="table table-hover  table-striped">
    <thead>
      <tr>
        <th>GARMET</th>
        <th>BUNDLE</th>
        <th>AMOUNT</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>sofa </td>
        <td>per 1 set clothes</td>
        <td>100rs</td>
      </tr>
            <tr>
        <td>carpet</td>
        <td>per 1 meter</td>
        <td>100rs</td>
      </tr>
    </tbody>
    </table>
    </center> 
</div></div>


<div class="showhim">
        <center>  <b><p class="tab1 pp">House Cleaning and Vacuum</p></b> </center><br>
<center> <img src="img/house_vacuum.jpg"  class="ord1"></center> <div class="showme">
 <center> <table class="table table-hover  table-striped">
    <thead>
      <tr>
        <th>CLOTHES</th>
        <th>BUNDLE</th>
        <th>AMOUNT</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Rooms</td>
        <td>per 1 room</td>
        <td>100rs</td>
      </tr>
            <tr>
        <td>sitting room</td>
        <td>per 1 room</td>
        <td>100rs</td>
      </tr>
    </tbody>
    </table>
    </center> 
</div></div>


</div>
</div>


&nbsp;<br>
&nbsp;<br>
&nbsp;<br>



<div class="container">
<div class="row">
  <div class="col-md-3">
&nbsp;
</div>
<div class="col-md-6">
  <h2 class="tab1"><center> Our Others Prices</center></h2>
<hr>
</div>
<div class="col-md-3">
&nbsp;
</div>
</div>
</div>



    <div class="container">
<div class="row">
  <div class="col-md-2">
&nbsp;&nbsp;
</div>
<div class="col-md-8">
<center>        
  <table class="table table-hover  table-striped">
    <thead>
      <tr>
        <th>Clothes</th>
        <th>how many</th>
        <th>Amount</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>T-shirt</td>
        <td>1</td>
        <td>10rs</td>
      </tr>
      <tr>
        <td>Shirt</td>
        <td>1</td>
        <td>10 Rs</td>
      </tr><tr>
        <td>Jeans</td>
        <td>1</td>
        <td>10 Rs</td>
      </tr><tr>
        <td>Jacket</td>
        <td>1</td>
        <td>10 Rs</td>
      </tr><tr>
        <td>Socks</td>
        <td>1</td>
        <td>5 Rs</td>
      </tr><tr>
        <td>Pants</td>
        <td>1</td>
        <td>5 Rs</td>
      </tr>
    </tbody>
  </table>
</center>
</div>
<div class="col-md-2">
&nbsp;
</div>
</div>
</div>

<footer class="footer">
        <div class="container" align=center>
            
                <div class="col-7 col-sm-5">
                    <h3 >Our Address</h3>
                    <address>
                  <a href="#" style="color: blue;>
              <i class="fa fa-envelope"></i> www.somalilaundryservice.com
            </a></br>
            <br>
             <i class="fa fa-phone"></i> <a href="tel:+917995659081">+91-7995659081</a><br><i>&nbsp;&nbsp;&nbsp;</i> <a href="tel:+919966989404">+91-9966989404</a></br>&nbsp;&nbsp;&nbsp;&nbsp;<a href="tel:+919988309404">+91-9988309404</a><br>&nbsp;&nbsp;&nbsp;
             <br>
            <i class="fa fa-home"></i> LPU, Lawgate, Ramamandi,<br> <i>&nbsp;&nbsp;&nbsp;&nbsp;</i>Deep Nager, Phagwara, Jalandhar and Dakoha</br>
              <br>
               </address>
                </div>
                <div class="col-12 col-sm-4 align-self-center">
                    <div class="text-center">
                        <a class="btn btn-social-icon btn-instagram" href="http://instagram.com/+"><i class="fa fa-instagram fa-lg"></i></a>
                        <a class="btn btn-social-icon btn-facebook" href="https://www.facebook.com/Sparkle-Laundry-2158800311049804/"><i class="fa fa-facebook fa-lg"></i></a>
                        <a class="btn btn-social-icon btn-linkedin" href="http://www.linkedin.com/in/"><i class="fa fa-linkedin fa-lg"></i></a>
                        <a class="btn btn-social-icon btn-twitter" href="http://twitter.com/"><i class="fa fa-twitter fa-lg"></i></a>
                        <a  class="btn btn-social-icon btn-google" href="http://youtube.com/"><i class="fa fa-youtube fa-lg"></i></a>
                        <a class="btn btn-social-icon" href="mailto:"><i class="fa fa-envelope-o fa-lg"></i></a>
                    </div>
                </div>
           </div>
           <div class="row justify-content-center">             
                <div class="col-auto">
                    <p style="font-size: 14px; font-weight: bold; text-align: center;"> &copy; Ultimax Software Solution. All Rights Reserved</p>
                </div>
           </div>
        </div>

      <a href="" class="scrollup"><img src="img/Tshirt-Scroll.png" width="80px"  height="70px"><!-- <i class="fa fa-chevron-up"> --></i></a>


    </div>
  </footer>

  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="js/jquery-2.1.1.min.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="js/bootstrap.min.js"></script>
  <script src="js/wow.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.isotope.min.js"></script>
  <script src="js/jquery.bxslider.min.js"></script>
  <script type="text/javascript" src="js/fliplightbox.min.js"></script>
  <script src="js/functions.js"></script>
  <script type="text/javascript">
    $('.portfolio').flipLightBox()
  </script>

</body>

</html>
