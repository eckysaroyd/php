<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Alfadli  Admin Page</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="vendors/iconfonts/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- inject:css -->
  <link rel="stylesheet" href="css/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="images/favicon.jpg" />
  <script src="jquery1.js"></script>
  <script src="validation.js"></script>
</head>
<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
        <a class="navbar-brand brand-logo" href="home.php">Alfadli Company Admin</a>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-stretch">
        <div class="search-field d-none d-md-block">
          <form class="d-flex align-items-center h-100" action="#">
            <div class="input-group">
              <div class="input-group-prepend bg-transparent">
                              
              </div>
            </div>
          </form>
        </div>
        <ul class="navbar-nav navbar-nav-right">
          <li class="nav-item nav-profile dropdown">
            <a class="nav-link dropdown-toggle" id="profileDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
              <div class="nav-profile-img">
                <img src="images/faces/face1.jpg" alt="image">
                <span class="availability-status online"></span>             
              </div>
              <div class="nav-profile-text">
                <p class="mb-1 text-black">Alfadli Company</p>
              </div>
            </a>
            <div class="dropdown-menu navbar-dropdown" aria-labelledby="profileDropdown">
              <a class="dropdown-item" href="home.php">
                <i class="mdi mdi-cached mr-2 text-success"></i>
                homepage
              </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">
                <i class="mdi mdi-logout mr-2 text-primary"></i>
                Signout
              </a>
            </div>
          </li>
          <li class="nav-item d-none d-lg-block full-screen-link">
            <a class="nav-link">
              <i class="mdi mdi-fullscreen" id="fullscreen-button"></i>
            </a>
          </li>
          <!-- logout button -->
          <li class="nav-item nav-logout d-none d-lg-block">
            <a class="nav-link" href="#">
              <i class="mdi mdi-power"></i>
            </a>
          </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="mdi mdi-menu"></span>
        </button>
      </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item nav-profile">
            <a href="#" class="nav-link">
              <div class="nav-profile-image">
                <img src="images/faces/face1.jpg" alt="profile">
                <span class="login-status online"></span> <!--change to offline or busy as needed-->              
              </div>
              <div class="nav-profile-text d-flex flex-column">
                <span class="font-weight-bold mb-2">Alfadli</span>
                <span class="text-secondary text-small">Admin uses</span>
              </div>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="home.php">
              <span class="menu-title">Dashboard</span>
              <i class="mdi mdi-home menu-icon"></i>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="employeePage.php">
              <span class="menu-title">Employees Page</span>
              <i class="mdi mdi-account-multiple menu-icon"></i>
            </a>
          </li>
                    <li class="nav-item">
            <a class="nav-link" href="AddEmp.php">
              <span class="menu-title">Add Employee</span>
              <i class="mdi mdi-account-card-details menu-icon"></i>
            </a>
          </li>
        </ul>
     <!--    end of left dashbord -->
      </nav>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="page-header">
            <h3 class="page-title">
              <span class="page-title-icon bg-gradient-info text-white mr-2">
                <i class="mdi mdi-account-card-details"></i>                 
              </span>
              Add Employee Details
            </h3>
            <nav aria-label="breadcrumb">
              <ul class="breadcrumb">
                <li class="breadcrumb-item active" aria-current="page">
                  <span></span>Overview
                  <i class="mdi mdi-alert-circle-outline icon-sm text-primary align-middle"></i>
                </li>
              </ul>
            </nav>
          </div>
         <!--  here is our employee members Database -->
          <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Employee List</h4>
            <!-- form it will be here -->
<div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Add Employee Details </h4>
                  <p class="card-description">
                    Employee Details
                  </p>
                  <form class="forms-sample">
                    <div class="form-group">
                      <label for="exampleInputName1">Employee Name</label>
                      <input type="text" class="form-control" id="name" placeholder=" Enter your Employee Name" name="name">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail3">Employee Email address</label>
                      <input type="text" class="form-control" id="email" placeholder="Enter your Employee Email" name="email">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail3">Employees Salary</label>
                      <input type="text" class="form-control" id="salary" placeholder="Enter your Employee Salary" name="salary">
                    </div>
                    <div class="form-group">
                      <label for="exampleSelectGender">Gender</label>
                        <select class="form-control" id="gender" name="gender">
                          <option value="-1">Gender</option>
                          <option value="male">Male</option>
                          <option value="female">Female</option>
                        </select>
                      </div>
                    <div class="form-group">
                      <label for="exampleInputPassword4"> Employee Password</label>
                      <input type="password" class="form-control" id="password" placeholder="Enter your Employee Password" name="password">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword4">Confirm Employee Password</label>
                      <input type="password" class="form-control" id="cpassword" name="cpasword" placeholder="Confirm your Employee Password">
                    </div>
                    <button type="submit" id="submit"class="btn btn-gradient-success mr-2">Submit</button>
                    <button class="btn btn-light">Cancel</button>
                  </form>
                </div>
              </div>
            </div>
            <!-- end of form will be here -->
                </div>
              </div>
            </div>
          </div>
        </div>
  <!-- END  here is our employee members Database -->
    
        <!-- startting of our footer Page -->
        <footer class="footer">
          <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2019 <a href="#" target="_blank">USS</a>. All rights reserved.</span>
          </div>
        </footer>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <!-- plugins:js -->
  <script src="vendors/js/vendor.bundle.base.js"></script>
  <script src="vendors/js/vendor.bundle.addons.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="js/off-canvas.js"></script>
  <script src="js/misc.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="js/dashboard.js"></script>
  <!-- End custom js for this page-->
</body>
</html>

<?php
include 'conn.php';
if(isset($_POST['submit']))
{
  $name=$_POST['name'];
  $email=$_POST['email'];
  $salary=$_POST['salary'];
  $gender=$_POST['gender'];
  $password=$_POST['password'];
  
$sql="insert into reg(name,email,salary,gender,password) values('$name','$email','$salary','$gender','$password')";
$query=mysqli_query($conn,$sql);
  if($query)
  {
    echo"SUCCESS";
  }
  else
  {
    echo mysqli_error($conn);
  }
}
?>