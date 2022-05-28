<?php
define('TITLE','RequesterProfile');
define('PAGE','RequesterProfile');
include '../dbConnection.php';
session_start();
if ($_SESSION['is_login']) {
  $remail = $_SESSION['rEmail'];
  
} else {
  header("location:requester_login.php");
}
$sql = "SELECT * FROM requesterlogin_tb WHERE r_email='$remail'";
$result = $conn->query($sql);

if ($result->num_rows == 1) {
  $row = $result->fetch_assoc();
  $rname1 = $row['r_name'];
  
}else{
  echo "not successful";
}
if (isset($_POST['nameupdate'])) {
  if ($_POST['rname'] == "") {
    $passmsg = "fill all fields";
  } else {
    $rname = $_POST['rname'];
    $sql = "UPDATE requesterlogin_tb SET r_name='$rname' WHERE r_email='$remail'";
    if ($conn->query($sql) == true) {
      $passmsg = "Updated Successfully";
    } else {
      $passmsg = "Unable to Update";
    }
  }
}

?>
<?php
include 'include/header.php';

?>
<!--end side bar-->
<div class="col-sm-6">
  <form action="" class="mx-5" method="post">

    <div class="form-group">
      <label for="email" class="font-weight-bold pl-2 mt-5">Email</label>
      <input type="email" class="form-control" placeholder="email" name="remail" value="<?php echo $remail; ?>" readonly>

    </div>
    <div class="form-group">
      <label for="name" class="font-weight-bold pl-2">Name</label>
      <input type="text" class="form-control" placeholder="name" name="rname" value="<?php echo $rname1; ?>">

    </div>

    <button type="submit" class="btn btn-danger" name="nameupdate">Update</button>
    <?php if (isset($passmsg)) {
      echo $passmsg;
    } ?>




  </form>
</div>


<?php
include 'include/footer.php';

?>