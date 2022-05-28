<?php
define('TITLE','Password');
define('PAGE','ChangePassword');
include 'include/header.php';
include '../dbConnection.php';
session_start();
if ($_SESSION['is_login']) {
  $remail = $_SESSION['rEmail'];
} else {
  header("location:requester_login.php");
}

if (isset($_POST['passupdate'])) {
    if ($_POST['rpassword'] == "") {
        $msg = "fill all fields";
      }else {
        $rpassword = $_POST['rpassword'];
        $sql = "UPDATE requesterlogin_tb SET r_password='$rpassword' WHERE r_email='$remail'";
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
      <input type="email" class="form-control" placeholder="email" name="remail" value="<?php echo $remail; ?>" readonly>

    </div>
    <div class="form-group">
      <label for="name" class="font-weight-bold pl-2">New Password</label>
      <input type="password" class="form-control" placeholder="password" name="rpassword" value="">

    </div>

    <button type="submit" class="btn btn-danger" name="passupdate">Update</button>
    <?php if (isset($msg)) {
      echo $msg;
    } ?>
<?php

include 'include/footer.php';
?>