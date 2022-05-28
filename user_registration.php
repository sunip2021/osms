<?php
include 'dbConnection.php';
if(isset($_POST['rsignup'])){
    if(($_POST['rname']=="") || ($_POST['remail']=="") || ($_POST['rpassword']=="")){
        $regmsg='<div class="alert alert-warning mt-2" role="alert">All Fields are Required</div>';
        
    }else{
        $sql1="SELECT r_email FROM requesterlogin_tb WHERE r_email='".$_POST['remail']."'";
        $result=$conn->query($sql1);
        if($result->num_rows>0){
            $regmsg= '<div class="alert alert-warning mt-2" role="alert">email id already registered</div>';
        }else{
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
}



?>
<div class="container pt-5">
    <h2 class="text-center">Create an account</h2>
    <div class="row mt-4 mb-4 ml-5 justify-content-center">
      <div class="col-md-6 offset-mb-3">
        <form action="" class="shadow-lg p-4" method="post">
          <div class="form-group">
            <i class="fas fa-user"></i><label for="name" class="font-weight-bold pl-2">Name</label>
            <input type="text" class="form-control" placeholder="name" name="rname">

          </div>
          <div class="form-group">
            <i class="fas fa-user"></i><label for="email" class="font-weight-bold pl-2">Email</label>
            <input type="email" class="form-control" placeholder="email" name="remail">

          </div>
          <div class="form-group">
            <i class="fas fa-key"></i><label for="pass" class="font-weight-bold pl-2">New Password</label>
            <input type="password" class="form-control" placeholder="password" name="rpassword">

          </div>
          <button type="submit" class="btn btn-danger mt-5 btn-block shadow-sm font-weight-bold" name="rsignup">Sign Up</button>
          <em style="font-size:10px;">Note- By clicking Sign up , you agree to our Terms,Data Policy and Cookie Policy</em>
          <?php 
          if(isset($regmsg)){
            echo $regmsg;

          }
            ?>
        </form>
      </div>
    </div>


  </div>