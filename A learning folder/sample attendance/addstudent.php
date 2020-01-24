
<!DOCTYPE html>
<html>
<title>Student Attendance</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<body>

<div class="w3-container">
  <center><h2> students name Form</h2></center>
  
  <div class="w3-card-4">
    <div class="w3-container w3-green">
    <center><h2>add students name</h2></center>
    </div>

    <form class="w3-container" method="post">
      <p>
      <label>Reg No</label>
      <input class="w3-input" type="text" name="regno">
      </p>
      <p>  
      <label> Name</label>   
      <input class="w3-input" type="text" name="name">
     </p>
      <p>     
      <input class="w3-input" type="submit" name="submit" value="add student">
      </p>
    </form>
  </div>
</div>

</body>
</html>
<?php
include 'conn.php';
if(isset($_POST['submit']))
{
  $regno=$_POST['regno'];
  $name=$_POST['name'];
$sql="insert into students(regno,name)values('$regno','$name')";
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