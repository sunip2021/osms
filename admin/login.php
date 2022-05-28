<?php
include '../dbConnection.php';
session_start();
if(!isset($_SESSION['is_adminlogin'])){
if(isset($_POST['aemail'])){
    $aemail=mysqli_real_escape_string($conn,$_POST['aemail']) ;
$apassword=mysqli_real_escape_string($conn,$_POST['apassword']) ;
$sql="SELECT a_email,a_password FROM adminlogin_tb WHERE a_email='".$aemail."' AND a_password='".$apassword."' limit 1";
$result=$conn->query($sql);
if($result->num_rows==1){
    $_SESSION['is_adminlogin']=true;
    $_SESSION['aEmail']=$aemail;
    
    header("location:dashboard.php");
    

}
else{
    $msg='<div class="alert alert-danger mt-2" role="alert">enter valid email and password</div>';
}

}
}else{
  header("location:dashboard.php");
}





?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
  <link rel="stylesheet" href="../css/all.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@500&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/custom.css">
    <title>Login</title>
</head>
<body>
    <div class="mt-5 text-center" style="font-size:30px ;">
    <i class="fas fa-stethoscope"></i>
    <span>Online Service Management System</span>

    </div>
    <p class="text-center" style="font-size: 20px;;"><i class="fas fa-user-secret text-danger"></i> Requester Area</p>
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-sm-6 col-md-4">
            <form action="" class="shadow-lg p-4" method="post">
         
          <div class="form-group">
            <i class="fas fa-user"></i><label for="email" class="font-weight-bold pl-2">Email</label>
            <input type="email" class="form-control" placeholder="email" name="aemail">

          </div>
          <div class="form-group">
            <i class="fas fa-key"></i><label for="pass" class="font-weight-bold pl-2">New Password</label>
            <input type="password" class="form-control" placeholder="password" name="apassword">

          </div>
          <button type="submit" class="btn-outline-danger mt-3 font-weight-bold btn-block">Login</button>

          
          
         
        </form>
        <div class="text-center"><a href="../index.php" class="btn btn-info mt-3 font-weight-bold shadow-sm">Back to Home</a></div>
            </div>
        </div>
    </div>
    
<script src="../js/jquery.min.js"></script>
  <script src="../js/popper.min.js"></script>
  <script src="../js/bootstrap.min.js"></script>

  <script src="../js/all.min.js"></script>
</body>
</html>