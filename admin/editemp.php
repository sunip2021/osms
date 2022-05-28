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
    <h3 class="text-center">Update Technician Details</h3>
    <?php
   if(isset($_POST['edit'])){
       $sql="SELECT * FROM  technician_tb WHERE empid={$_POST['id']}";
       $result=$conn->query($sql);
       $row=$result->fetch_assoc();
       

   }
   if(isset($_POST['empupdate'])){
    if(($_POST['empid']=="")||($_POST['empName']=="")||($_POST['empCity']=="")||($_POST['empMobile']=="")||($_POST['empEmail']=="")){
        $msg='<div class="alert alert-warning col-sm-6 ml-5 mt-2">Fill All Fields</div>';

    }else{
        $empid=$_POST['empid'];
        $empName=$_POST['empName'];
        $empCity=$_POST['empCity'];
        $empMobile=$_POST['empMobile'];
        $empEmail=$_POST['empEmail'];
        $sql="UPDATE technician_tb SET empid='$empid', empName='$empName',empCity='$empCity', empMobile='$empMobile', empEmail='$empEmail' WHERE empid='$empid' ";
       
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
            <label for="empid">Emp ID</label>
            <input type="text" name="empid" id="empid" class="form-control" value="<?php if(isset($row['empid'])){ echo $row['empid']; } ?>" readonly>
        </div>
        <div class="form-group">
            <label for="empName">Emp Name</label>
            <input type="text" name="empName" id="empName" class="form-control" value="<?php if(isset($row['empName'])){ echo $row['empName']; } ?>" >
        </div>
        <div class="form-group">
            <label for="empCity">City</label>
            <input type="text" name="empCity" id="empCity" class="form-control" value="<?php if(isset($row['empCity'])){ echo $row['empCity']; } ?>" >
        </div>
        <div class="form-group">
            <label for="r_name">Mobile No.</label>
            <input type="text" name="empMobile" id="empMobile" class="form-control" value="<?php if(isset($row['empMobile'])){ echo $row['empMobile']; } ?>" >
        </div>
        <div class="form-group">
            <label for="empEmail">Email</label>
            <input type="email" name="empEmail" id="empEmail" class="form-control" value="<?php if(isset($row['empEmail'])){ echo $row['empEmail']; } ?>">
        </div>
        <div class="text-center">
            <button type="submit" class="btn btn-danger" id="empupdate" name="empupdate">Update</button>
            <a href="requester.php" class="btn btn-secondary">Close</a>
        </div>
        <?php if(isset($msg)){ echo $msg;} ?>
    </form>
</div><!--end 2nd column-->
<?php 
        include 'includes/footer.php';
        ?>