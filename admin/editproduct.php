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
    <h3 class="text-center">Update Asset Details</h3>
    <?php
   if(isset($_POST['edit'])){
       $sql="SELECT * FROM  assets_tb WHERE  pid={$_POST['id']}";
       $result=$conn->query($sql);
       $row=$result->fetch_assoc();
       

   }
   if(isset($_POST['empupdate'])){
    if(($_POST['pid']=="")||($_POST['pname']=="")||($_POST['pdop']=="")||($_POST['pava']=="")||($_POST['ptotal']=="")||($_POST['poriginalprice']=="")||($_POST['psellingprice']=="")){
        $msg='<div class="alert alert-warning col-sm-6 ml-5 mt-2">Fill All Fields</div>';

    }else{
        $pid=$_POST['pid'];
        $pname=$_POST['pname'];
        $pdop=$_POST['pdop'];
        $pava=$_POST['pava'];
        $ptotal=$_POST['ptotal'];
        $poriginalprice=$_POST['poriginalprice'];
        $psellingprice=$_POST['psellingprice'];
        $sql="UPDATE assets_tb SET pid='$pid', pname='$pname',pdop='$pdop', pava='$pava', ptotal='$ptotal', poriginalprice='$poriginalprice', psellingprice='$psellingprice' WHERE pid='$pid' ";
       
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
            <label for="empid">Product ID</label>
            <input type="text" name="pid" id="pid" class="form-control" value="<?php if(isset($row['pid'])){ echo $row['pid']; } ?>" readonly>
        </div>
        <div class="form-group">
            <label for="pname">Product Name</label>
            <input type="text" name="pname" id="pname" class="form-control" value="<?php if(isset($row['pname'])){ echo $row['pname']; } ?>" >
        </div>
        <div class="form-group">
            <label for="empCity">DOP</label>
            <input type="text" name="pdop" id="pdop" class="form-control" value="<?php if(isset($row['pdop'])){ echo $row['pdop']; } ?>" >
        </div>
        
        <div class="form-group">
            <label for="r_name">Available</label>
            <input type="text" name="pava" id="pava" class="form-control" value="<?php if(isset($row['pava'])){ echo $row['pava']; } ?>" >
        </div>
        <div class="form-group">
            <label for="ptotal">Total</label>
            <input type="text" name="ptotal" id="ptotal" class="form-control" value="<?php if(isset($row['ptotal'])){ echo $row['ptotal']; } ?>" >
        </div>
        <div class="form-group">
            <label for="poriginalprice">Original Cost Each</label>
            <input type="text" name="poriginalprice" id="poriginalprice" class="form-control" value="<?php if(isset($row['poriginalprice'])){ echo $row['poriginalprice']; } ?>" >
        </div>
        <div class="form-group">
            <label for="psellingprice">Selling Cost Each</label>
            <input type="text" name="psellingprice" id="psellingprice" class="form-control" value="<?php if(isset($row['psellingprice'])){ echo $row['psellingprice']; } ?>" >
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