<?php
define('PAGE','Update_requester');
define('TITLE','Sell product');
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
    <h3 class="text-center">Customer Bill</h3>
    <?php
   if(isset($_POST['issue'])){
       $sql="SELECT * FROM  assets_tb WHERE  pid={$_POST['id']}";
       $result=$conn->query($sql);
       $row=$result->fetch_assoc();
       

   }
   if(isset($_POST['psubmit'])){
    if(($_POST['pid']=="")||($_POST['cname']=="")||($_POST['cadd']=="")||($_POST['cpname']=="")||($_POST['pava']=="")||($_POST['cpquantity']=="")||($_POST['psellingprice']=="")||($_POST['totalPrice']=="")||($_POST['date']=="")){
        $msg='<div class="alert alert-warning col-sm-6 ml-5 mt-2">Fill All Fields</div>';

    }else{
        $pid=$_POST['pid'];
        $pava=$_POST['pava']-$_POST['cpquantity'];

        $cname=$_POST['cname'];
$cadd=$_POST['cadd'];
$cpname=$_POST['cpname'];
$cpquantity=$_POST['cpquantity'];
$psellingprice=$_POST['psellingprice'];
$totalPrice=$_POST['totalPrice'];
$date=$_POST['date'];
$sql="INSERT INTO `customer_tb` (`cname`, `caddress`, `pname`,`pquantity`,`product_price`,`total_price`,`date`) VALUES ('$cname', '$cadd', '$cpname','$cpquantity','$psellingprice','$totalPrice','$date') ";
if($conn->query($sql)==true){
   $lastcid=mysqli_insert_id($conn);
 
  $_SESSION['myid']=$lastcid;
  echo "<script>location.href='productsellsuccess.php'</script>";
  }
  $sqlup="UPDATE assets_tb SET  pava='$pava' WHERE pid=$pid ";
  $conn->query($sqlup);
      
 }

}
    ?>
    <form action="" method="POST">
        <div class="form-group">
            <label for="pid">Product ID</label>
            <input type="text" name="pid" id="pid" class="form-control" value="<?php if(isset($row['pid'])){ echo $row['pid']; } ?>" readonly>
        </div>
        <div class="form-group">
            <label for="cname">Customer Name</label>
            <input type="text" name="cname" id="cname" class="form-control"  >
        </div>
        <div class="form-group">
            <label for="cadd">Customer Address</label>
            <input type="text" name="cadd" id="cadd" class="form-control"  >
        </div>
        <div class="form-group">
            <label for="cpname">Product Name</label>
            <input type="text" name="cpname" id="cpname" class="form-control" value="<?php if(isset($row['pname'])){ echo $row['pname']; } ?>" >
        </div>
        
        
        <div class="form-group">
            <label for="r_name">Available</label>
            <input type="text" name="pava" id="pava" class="form-control" value="<?php if(isset($row['pava'])){ echo $row['pava']; } ?>" readonly >
        </div>
        <div class="form-group">
            <label for="cpquantity">Quantity</label>
            <input type="text" name="cpquantity" id="cpquantity" class="form-control"  >
        </div>
        
        <div class="form-group">
            <label for="psellingprice">Price Each</label>
            <input type="text" name="psellingprice" id="psellingprice" class="form-control" value="<?php if(isset($row['psellingprice'])){ echo $row['psellingprice']; } ?>" >
        </div>
        <div class="form-group">
            <label for="totalPrice">Total Price</label>
            <input type="text" name="totalPrice" id="totalPrice" class="form-control"  >
        </div>
        <div class="form-group col-md-4">
            <label for="date">Date</label>
            <input type="date" name="date" id="date" class="form-control"  >
        </div>
        
        
        <div class="text-center">
            <button type="submit" class="btn btn-danger" id="empupdate" name="psubmit">Submit</button>
            <a href="requester.php" class="btn btn-secondary">Close</a>
        </div>
        <?php if(isset($msg)){ echo $msg;} ?>
    </form>
</div><!--end 2nd column-->
<?php 
        include 'includes/footer.php';
        ?>