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

<!--  <div class="container">
  <div id="googleMap" style="width:100%;height:400px;"></div>

<script>
function myMap() {
var mapProp= {
    center:new google.maps.LatLng(51.508742,-0.120850),
    zoom:5,
};
var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);
}
</script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBu-916DdpKAjTmJNIgngS6HL_kDIKU0aU&callback=myMap"></script> -->
<br>
<br>
<br><center>Contact Us</center>
<div class="container">
        <div class="row row-content">
           <div class="col-12">
             <strong><center>  <h3>Information</h3></center></strong> 
           </div>
            <div class="col-12 col-sm-4 offset-sm-1">
                  <strong><h5>Our Address</h5></strong> 
                  <address style="font-size:100% ; color:black;">
                  <i>Law Gate</i><br>

                  <i class="fa fa-phone"></i>: +91-7995659081<br>
                  <i class="fa fa-fax"></i>:   +91-9966989404<br>
                   <i class="fa fa-fax"></i>:  +91-9988309404<br>
                  <i class="fa fa-envelope"></i>:
                        <a href="www.somalilaundryservice.com">www.somalilaundryservice.com</a>
               </address>
            </div>

             <br>
            <br>
            <div class="col-12 col-sm-11 offset-sm-1">
                
                <div class="btn-group" role="group">
                  
                    <a role="button" class="btn btn-info"><i class="fa fa-skype"></i> Skype</a>
                    <a role="button" class="btn btn-success" href="sparkle@gmail.com"><i class="fa fa-envelope-o"></i> Email</a>
                   <!--  <a role="button" class="btn btn-primary" href="tel:+919877431687"><i class="fa fa-phone"></i> Call</a> -->



                </div>

            </div>
        </div>
      </div>
      <div class="container">
        <div class="row">
          <br><br>
        </div>
      </div>

<div class="container">
<div class="row row-content">
           <div class="col-12">
              <center><strong><h3>Send us your Feedback</h3></strong></center>
              <hr>
           </div>
            <div class="col-12 col-md-9">
               
                <form>
                    <div class="form-group row">
                        <label for="firstname" class="col-md-2 col-form-label">First Name
                            
                        </label>
                        <div class="col-md-10">
                            <input type="text"  class="form-control" id="firstname" name="firstname" placeholder="First Name">
                        </div>
                    </div>

                    <div class="form-group row">
                        
                        <label for="lastname" class="col-md-2 col-form-label">Last Name
                            
                        </label>
                        <div class="col-md-10">
                            <input type="text"  class="form-control" id="lastname" name="lastname" placeholder="Last Name">
                        </div>
                    </div>

                 <div class="form-group row">
                        <label for="telnum" class="col-12 col-md-2 col-form-label">Contact Tel.
                            
                        </label>
                        <div class="col-5 col-md-3">
                            <input type="tel"  class="form-control" id="areacode" name="areacode" placeholder="Area Code">
                        </div>
                             <div class="col-7 col-md-7">
                            <input type="tel"  class="form-control" id="telnum" name="telnum" placeholder="Tel. Number">
                        </div>
                    </div>

                    <div class="form-group row">
                        
                        <label for="emailid" class="col-md-2 col-form-label">Email
                        </label>
                        <div class="col-md-10">
                            <input type="email"  class="form-control" id="emailid" name="emailid" placeholder="Email">
                        </div>
                    </div>

                   <div class="form-group row">
                        <div class="col-md-6 offset-md-2">
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" name="approve" id="approve" value="">
                                <label class="form-check-label" for="approve">
                                <strong>May we contact you?</strong>
                                    
                                </label>
                            </div>
                        </div>
                        <div class="col-md-3 offset-md-1">
                            <select class="form-control">
                                <option>Tel.</option>
                                <option>Email</option>

                            </select>
                        </div>
                    </div>
                <div class="form-group row">
                        
                        <label for="feedback" class="col-md-2 col-form-label">Your Feedback
                        </label>
                        <div class="col-md-10">
                            <textarea  class="form-control" id="feedback" name="feedback" rows="12"></textarea>
                        </div>
                    </div>
                <div class="form-group row">
                    <div class="offset-md-2 col-md-10">
                        <center><button type="submit" class="btn btn-primary">
                            Send Feedback
                        </button></center>
                    </div>
                </div>
                </form>

            </div>
             <div class="col-12 col-md">
            </div>
       </div>

    </div>


        



  <footer>
    <div class="inner-footer">
      <div class="container">
        <div class="row">
        


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
