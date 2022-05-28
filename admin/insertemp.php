<?php
define('PAGE','Update_Technician');
define('TITLE','technician');
include 'includes/header.php';
include '../dbConnection.php';
session_start();
if(isset($_SESSION['is_adminlogin'])){
  $aEmail=$_SESSION['aEmail'];
}else{
  echo "<script>location.href='login.php'</script>";
}
if(isset($_POST['empsubmit'])){
  if(($_POST['empName']=="") || ($_POST['empCity']=="") || ($_POST['empMobile']=="")|| ($_POST['empEmail']=="")){
      $regmsg='<div class="alert alert-warning mt-2" role="alert">All Fields are Required</div>';
      
  }
      else{
          $empName=$_POST['empName'];
$empCity=$_POST['empCity'];
$empMobile=$_POST['empMobile'];
$empEmail=$_POST['empEmail'];

$sql="INSERT INTO `technician_tb` (`empName`, `empCity`, `empMobile`,`empEmail`) VALUES ('$empName', '$empCity', '$empMobile','$empEmail') ";
      


      
if($conn->query($sql)==true){
  $regmsg= '<div class="alert alert-success mt-2" role="alert">Added successfully</div>';

}else{
  $regmsg='<div class="alert alert-danger mt-2" role="alert">Unable to add</div>';
}

  }
  


}
?>
<!--start 2nd column-->
<div class="col-sm-6 mt-5 mx-3 jumbotron">
    <h2 class="text-center">Add New Technician</h2>
    
      
        <form action=""  method="post">
          <div class="form-group">
           <label for="empName" class="font-weight-bold pl-2">Name</label>
            <input type="text" class="form-control" placeholder="name" name="empName">

          </div>
          <div class="form-group">
            <label for="email" class="font-weight-bold pl-2">City</label>
            <input type="text" class="form-control" placeholder="City" name="empCity">

          </div>
          <div class="form-group">
            <label for="empMobile" class="font-weight-bold pl-2">Mobile No.</label>
            <input type="text" class="form-control" placeholder="Mobile" name="empMobile">

          </div>
          <div class="form-group">
            <label for="empEmail" class="font-weight-bold pl-2">Email</label>
            <input type="email" class="form-control" placeholder="Email" name="empEmail">

          </div>
          <div class="text-center">
          <button type="submit" class="btn btn-danger " name="empsubmit">Submit</button>
          <a href="technician.php" class="btn btn-secondary" >Close</a>

          </div>
          
          
          <?php 
          if(isset($regmsg)){
            echo $regmsg;

          }
            ?>
        </form>
      


  </div>
<?php 
        include 'includes/footer.php';
        ?>