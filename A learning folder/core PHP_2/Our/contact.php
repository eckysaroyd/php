<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>USS - Ultimate Software Solution</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Clean responsive bootstrap website template">
  <meta name="author" content="uss">
  <!-- styles -->
  <link href="assets/css/bootstrap.css" rel="stylesheet">
  <link href="assets/css/bootstrap-responsive.css" rel="stylesheet">
  <link href="assets/css/docs.css" rel="stylesheet">
  <link href="assets/css/prettyPhoto.css" rel="stylesheet">
  <link href="assets/js/google-code-prettify/prettify.css" rel="stylesheet">
  <link href="assets/css/flexslider.css" rel="stylesheet">
  <link href="assets/css/refineslide.css" rel="stylesheet">
  <link href="assets/css/font-awesome.css" rel="stylesheet">
  <link href="assets/css/animate.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:400italic,400,600,700" rel="stylesheet">

  <link href="assets/css/style.css" rel="stylesheet">
  <link href="assets/color/default.css" rel="stylesheet">

  <!-- fav and touch icons -->
  <link rel="shortcut icon" href="assets/ico/favicon.ico">
  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
  <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">

</head>

<body>
  <header>
    <!-- Navbar
    ================================================== -->
    <div class="cbp-af-header">
      <div class=" cbp-af-inner">
        <div class="container">
          <div class="row">

            <div class="span4">

              <!-- logo -->
              <div class="logo">
                 <h1><img src="assets/img/logo.png" alt="" class="logo1 " /></h1>
               <!-- <h1> <a href="index.html">USS</a></h1> -->
             
              </div>
              <!-- end logo -->
            </div>

            <div class="span8">
              <!-- top menu -->
              <div class="navbar">
                <div class="navbar-inner">
                  <nav>
                    <ul class="nav topnav">
                      <li class="dropdown">
                        <a href="index.php">Home</a>
                      </li>

                      <li class="dropdown">
                        <a href="">Services</a>
                        <ul class="dropdown-menu">
                          <li><a href="service.php">Our Services</a></li>
                          <li><a href="price.php">Our Price </a></li>
                          <li><a href="about.php">About us</a></li>
                        </ul>
                      </li>
                      <li>
                        <a href="blog.php">Blog</a>
                      </li>

                      <li>
                        <a href="contact.php">Contact</a>
                      </li>
                    </ul>
                  </nav>
                </div>
              </div>
              <!-- end menu -->
            </div>

          </div>
        </div>
      </div>
    </div>
  </header>

  <!--STARTING MAIN BODY-->
<section id="subintro">

    <div class="container">
      <div class="row">
        <div class="span4">
          <h3>Get <strong>in touch</strong></h3>
        </div>
        <div class="span8">
          <ul class="breadcrumb notop">
            <li><a href="index.php">Home</a><span class="divider">/</span></li>
            <li class="active">Contact</li>
          </ul>
        </div>
      </div>
    </div>

  </section>

  <section id="maincontent">
    <div class="container">
      <div class="row">
        <div class="span4">
          <aside>
            <div class="widget">
              <h4>Get in touch with us</h4>
              <ul>
                <li><label><strong>Phone : </strong></label>
                  <p>
                    +255 000 000
                  </p>
                </li>
                <li><label><strong>Email : </strong></label>
                  <p>
                    sendus@ultimatesoftwaresolution.com
                  </p>
                </li>
                <li><label><strong>Office address : </strong></label>
                  <p>
                     P.O BOX 34314,  Dar-Es-Salaam, Tanzania
                  </p>
                </li>
              </ul>
            </div>
            <div class="widget">
              <h4>Social network</h4>
              <ul class="social-links">
                <li><a href="#" title="Twitter"><i class="icon-bg-light icon-twitter icon-circled icon-1x active"></i></a></li>
                <li><a href="#" title="Facebook"><i class="icon-bg-light icon-facebook icon-circled icon-1x active"></i></a></li>
                <li><a href="#" title="Google plus"><i class="icon-bg-light icon-google-plus icon-circled icon-1x active"></i></a></li>
                <li><a href="#" title="Linkedin"><i class="icon-bg-light icon-linkedin icon-circled icon-1x active"></i></a></li>
                <li><a href="#" title="instagram"><i class="icon-bg-light icon-pinterest icon-circled icon-1x active"></i></a></li>
              </ul>
            </div>
          </aside>
        </div>
        <div class="span8">
          <div class="map-container">
           <!--  <div id="google-map" data-latitude="40.713417" data-longitude="-74.0092125"></div> -->
             <div class="mapouter"><div class="gmap_canvas"><iframe width="100%" height="400px" id="gmap_canvas" src="https://maps.google.com/maps?q=ramamandi%20&t=k&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>`</div><style>.mapouter{text-align:right;height:500px;width:600px;}.gmap_canvas {overflow:hidden;background:none!important;height:500px;width:600px;}</style></div>
          </div>
          <div class="spacer30">
          </div>

          <div id="sendmessage">Your message has been sent. Thank you!</div>
          <div id="errormessage"></div>
          <form action="" method="post" role="form" class="contactForm">
            <div class="row">
              <div class="span4 form-group">
                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                <div class="validation"></div>
              </div>

              <div class="span4 form-group">
                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                <div class="validation"></div>
              </div>
              <div class="span8 form-group">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                <div class="validation"></div>
              </div>
              <div class="span8 form-group">
                <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                <div class="validation"></div>
                <div class="text-center">
                  <button class="btn btn-color btn-rounded" type="submit">Send message</button>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>

  <!--END OF MAIN BODY-->

  <!-- Footer
 ================================================== -->
  <footer class="footer">
    <div class="container">
      <div class="row">
        <div class="span3">
          <div class="widget">
            <!-- logo -->
            <div class="footerlogo">

              <h6><a href="index.html"><img src="assets/img/logo.png" alt="" class="logo1 " /></a></h6>
              <!-- <img src="assets/img/logo.png" alt="" /> -->
            </div>
            <!-- end logo -->
            <div class="adress1">
            <address>
               <ul class="list list-double-angle-right adress1">
        <li>P.O BOX 34134</li>
       <li>Dar es salaam Tanzania</li>
        <li><abbr title="Phone number">P:</abbr> (+255) 000 000 </li></address>
      </div>
          </div>
        </div>
        <div class="span3">
          <div class="widget">
            <div class="adress1">
            <h5>Do You know ?</h5>
            <ul class="list list-share-alt colored strong adress1">
              <li><a href="https://www.navquery.com/">Do you Know NavQuery is the best Search</a></li>
              <li><a href="#">New Laundry Sercvice in Moshi. PeaceBlessing Laundry </a></li>
              <li><a href="#">Book Your Bus Ticket Now</a></li>
              
            </ul>
          </div>
        </div>
        </div>
        <div class="span3">
          <div class="widget">
            <h5></h5>

          </div>
        </div>
        <div class="span3">
          <div class="widget">
           <div class="adress1" >
            <h5>Keep updated</h5>
            <p>
              Enter your email to subcribe and receive our feedback
            </p>
            <form>
              <div class="input-append">
                <input class="span2" id="appendedInputButton" type="text">
                <button class="btn btn-color" type="submit">Subscribe</button>
              </div>
            </form>
            <ul class="social-network">
              <li><a href="#"><i class="icon-bg-light icon-facebook icon-circled icon-1x"></i></a></li>
              <li><a href="#" title="Twitter"><i class="icon-bg-light icon-twitter icon-circled icon-1x"></i></a></li>
              <li><a href="#" title="Linkedin"><i class="icon-bg-light icon-linkedin icon-circled icon-1x"></i></a></li>
              <li><a href="#" title="instagram"><i class="icon-bg-light icon-instagram icon-circled icon-1x"></i></a></li>
              <li><a href="#" title="Google plus"><i class="icon-bg-light icon-google-plus icon-circled icon-1x"></i></a></li>
            </ul>
          </div>
        </div>
        </div>
      </div>
    </div>
    <div class="subfooter">
      <div class="container">
        <div class="row">
          <div class="adress1" >
          <div class="span6">
            <p>
              &copy; USS - All right reserved
            </p>
          </div>
          <div class="span6">
            <div class="pull-right">
              <div class="credits">


                Designed by <a href="#">USS</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      </div>
    </div>
  </footer>

  <script src="assets/js/jquery.js"></script>
  <script src="assets/js/modernizr.js"></script>
  <script src="assets/js/jquery.easing.1.3.js"></script>
  <script src="assets/js/google-code-prettify/prettify.js"></script>
  <script src="assets/js/bootstrap.js"></script>
  <script src="assets/js/jquery.prettyPhoto.js"></script>
  <script src="assets/js/portfolio/jquery.quicksand.js"></script>
  <script src="assets/js/portfolio/setting.js"></script>
  <script src="assets/js/hover/jquery-hover-effect.js"></script>
  <script src="assets/js/jquery.flexslider.js"></script>
  <script src="assets/js/classie.js"></script>
  <script src="assets/js/cbpAnimatedHeader.min.js"></script>
  <script src="assets/js/jquery.refineslide.js"></script>
  <script src="assets/js/jquery.ui.totop.js"></script>

  <!-- Template Custom Javascript File -->
  <script src="assets/js/custom.js"></script>

</body>

</html>
