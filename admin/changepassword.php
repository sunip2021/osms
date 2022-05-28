<?php
define('PAGE','ChangePassword');
define('TITLE','ChangePassword');
include 'includes/header.php';
include '../dbConnection.php';


session_start();
if(isset($_SESSION['is_adminlogin'])){
  $aEmail=$_SESSION['aEmail'];
}else{
  echo "<script>location.href='login.php'</script>";
}
if (isset($_POST['passupdate'])) {
    if ($_POST['apassword'] == "") {
        $msg = "fill all fields";
      }else {
        $apassword = $_POST['apassword'];
        $sql = "UPDATE adminlogin_tb SET a_password='$apassword' WHERE a_email='$aEmail'";
        if ($conn->query($sql) == true) {
          $msg = "Updated Successfully";
        } else {
          $msg = "Unable to Update";
        }
      }


}


?>
<div class="col-sm-9 col-md-10">
  <form action="" class="mt-5 mx-5" method="post">

    <div class="form-group">
      <label for="email" class="font-weight-bold pl-2 mt-5">Email</label>
      <input type="email" class="form-control" placeholder="email" name="aemail" value="<?php echo $aEmail; ?>" readonly>

    </div>
    <div class="form-group">
      <label for="name" class="font-weight-bold pl-2">New Password</label>
      <input type="password" class="form-control" placeholder="password" name="apassword" value="">

    </div>

    <button type="submit" class="btn btn-danger" name="passupdate">Update</button>
    <?php if (isset($msg)) {
      echo $msg;
    } ?>
    <?php 
        include 'includes/footer.php';
        ?>