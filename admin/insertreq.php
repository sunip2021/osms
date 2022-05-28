<?php
define('PAGE','Update_requester');
define('TITLE','Requester');
include 'includes/header.php';
include '../dbConnection.php';
session_start();
if(isset($_SESSION['is_adminlogin'])){
  $aEmail=$_SESSION['aEmail'];
}else{
  echo "<script>location.href='login.php'</script>";
}
if(isset($_POST['reqsubmit'])){
  if(($_POST['rname']=="") || ($_POST['remail']=="") || ($_POST['rpassword']=="")){
      $regmsg='<div class="alert alert-warning mt-2" role="alert">All Fields are Required</div>';
      
  }
      else{
          $rname=$_POST['rname'];
$remail=$_POST['remail'];
$rpassword=$_POST['rpassword'];
$sql="INSERT INTO `requesterlogin_tb` (`r_name`, `r_email`, `r_password`) VALUES ('$rname', '$remail', '$rpassword') ";
      


      
if($conn->query($sql)==true){
  $regmsg= '<div class="alert alert-success mt-2" role="alert">Account successfully inserted</div>';

}else{
  $regmsg='<div class="alert alert-danger mt-2" role="alert">Unable to create account</div>';
}

  }
  


}
?>
<!--start 2nd column-->
<div class="col-sm-6 mt-5 mx-3 jumbotron">
    <h2 class="text-center">Add New Requester</h2>
    
      
        <form action=""  method="post">
          <div class="form-group">
            <i class="fas fa-user"></i><label for="name" class="font-weight-bold pl-2">Name</label>
            <input type="text" class="form-control" placeholder="name" name="rname">

          </div>
          <div class="form-group">
            <i class="fas fa-user"></i><label for="email" class="font-weight-bold pl-2">Email</label>
            <input type="email" class="form-control" placeholder="email" name="remail">

          </div>
          <div class="form-group">
            <i class="fas fa-key"></i><label for="pass" class="font-weight-bold pl-2">Password</label>
            <input type="password" class="form-control" placeholder="password" name="rpassword">

          </div>
          <button type="submit" class="btn btn-danger " name="reqsubmit">Submit</button>
          <button type="submit" class="btn btn-secondary " name="rsignup">Close</button>
          
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