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
?>
<!--start 2nd column-->
<div class="col-sm-6 mt-5 mx-3 jumbotron">
    <h3 class="text-center">Update Requester Details</h3>
    <?php
   if(isset($_POST['edit'])){
       $sql="SELECT * FROM  requesterlogin_tb WHERE r_login_id={$_POST['id']}";
       $result=$conn->query($sql);
       $row=$result->fetch_assoc();
       

   }
   if(isset($_POST['requpdate'])){
    if(($_POST['r_login_id']=="")||($_POST['r_name']=="")||($_POST['r_email'])==""){
        $msg='<div class="alert alert-warning col-sm-6 ml-5 mt-2">Fill All Fields</div>';

    }else{
        $rid=$_POST['r_login_id'];
        $rname=$_POST['r_name'];
        $remail=$_POST['r_email'];
        $sql="UPDATE requesterlogin_tb SET r_login_id='$rid', r_name='$rname',r_email='$remail' WHERE r_login_id='$rid' ";
       
        if($conn->query($sql)==TRUE){
         $msg='<div class="alert alert-warning col-sm-6 ml-5 mt-2">Updated successfully</div>';
        }else{
         $msg='<div class="alert alert-success col-sm-6 ml-5 mt-2">Unable to update</div>'; 
        }
 }

}
    ?>
    <form action="" method="POST">
        <div class="form-group">
            <label for="r_login_id">Request ID</label>
            <input type="text" name="r_login_id" id="r_login_id" class="form-control" value="<?php if(isset($row['r_login_id'])){ echo $row['r_login_id']; } ?>" readonly>
        </div>
        <div class="form-group">
            <label for="r_name">Name</label>
            <input type="text" name="r_name" id="r_name" class="form-control" value="<?php if(isset($row['r_name'])){ echo $row['r_name']; } ?>" >
        </div>
        <div class="form-group">
            <label for="r_email">Request ID</label>
            <input type="email" name="r_email" id="r_email" class="form-control" value="<?php if(isset($row['r_email'])){ echo $row['r_email']; } ?>">
        </div>
        <div class="text-center">
            <button type="submit" class="btn btn-danger" id="requpdate" name="requpdate">Update</button>
            <a href="requester.php" class="btn btn-secondary">Close</a>
        </div>
        <?php if(isset($msg)){ echo $msg;} ?>
    </form>
</div><!--end 2nd column-->
<?php 
        include 'includes/footer.php';
        ?>