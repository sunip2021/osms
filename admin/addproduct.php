<?php
define('PAGE','asset');
define('TITLE','Asset');
include 'includes/header.php';
include '../dbConnection.php';
session_start();
if(isset($_SESSION['is_adminlogin'])){
  $aEmail=$_SESSION['aEmail'];
}else{
  echo "<script>location.href='login.php'</script>";
}

if(isset($_POST['psubmit'])){
  if(($_POST['pname']=="") || ($_POST['pdop']=="")|| ($_POST['pava']=="")|| ($_POST['ptotal']=="")|| ($_POST['poriginalprice']=="")|| ($_POST['psellingprice']=="")){
      $regmsg='<div class="alert alert-warning mt-2" role="alert">All Fields are Required</div>';
      
  }
      else{
          
$pname=$_POST['pname'];
$pdop=$_POST['pdop'];
$pava=$_POST['pava'];
$ptotal=$_POST['ptotal'];
$poriginalprice=$_POST['poriginalprice'];
$psellingprice=$_POST['psellingprice'];

$sql="INSERT INTO `assets_tb` (`pname`, `pdop`, `pava`,`ptotal`,`poriginalprice`,`psellingprice`) VALUES ('$pname', '$pdop', '$pava','$ptotal','$poriginalprice','$psellingprice') ";
      


      
if($conn->query($sql)==true){
  $regmsg= '<div class="alert alert-success mt-2" role="alert">Added successfully</div>';

}else{
  $regmsg='<div class="alert alert-danger mt-2" role="alert">Unable to add</div>';
}

  }
  


}
?>
<!--start 2nd column-->
<div class="col-sm-6 mt-5 mx-3 jumbotron">
    <h2 class="text-center">Add New Technician</h2>
    
      
        <form action=""  method="post">
          
          <div class="form-group">
            <label for="pname" class="font-weight-bold pl-2">Product Name</label>
            <input type="text" class="form-control" placeholder="Product Name" name="pname">

          </div>
          <div class="form-group">
            <label for="pdop" class="font-weight-bold pl-2">DOP</label>
            <input type="date" class="form-control" placeholder="DOP" name="pdop">

          </div>
          <div class="form-group">
            <label for="pava" class="font-weight-bold pl-2">Available</label>
            <input type="text" class="form-control" placeholder="Available" name="pava">

          </div>
          <div class="form-group">
            <label for="ptotal" class="font-weight-bold pl-2">Total</label>
            <input type="text" class="form-control" placeholder="Total" name="ptotal">

          </div>
          <div class="form-group">
            <label for="poriginalprice" class="font-weight-bold pl-2">Original Cost Each</label>
            <input type="text" class="form-control" placeholder="Original Cost Each" name="poriginalprice">

          </div>
          <div class="form-group">
            <label for="psellingprice" class="font-weight-bold pl-2">Selling Cost Each</label>
            <input type="text" class="form-control" placeholder="Selling Cost Each" name="psellingprice">

          </div>
          <div class="text-center">
          <button type="submit" class="btn btn-danger " name="psubmit">Submit</button>
          <a href="technician.php" class="btn btn-secondary" >Close</a>

          </div>
          
          
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