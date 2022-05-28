<?php
define('TITLE','Submit Request');
define('PAGE','SubmitRequest');
include 'include/header.php';
include '../dbConnection.php';
session_start();
if ($_SESSION['is_login']) {
  $remail = $_SESSION['rEmail'];
} else {
  header("location:requester_login.php");
}
if(isset($_POST['submitrequest'])){
    if(($_POST['requestinfo']=="") || ($_POST['requestdesc']=="") || ($_POST['rname']=="")|| ($_POST['raddress1']=="")|| ($_POST['raddress2']=="")|| ($_POST['rcity']=="")|| ($_POST['rstate']=="")|| ($_POST['rzip']=="")|| ($_POST['remail']=="")|| ($_POST['rzip']=="")|| ($_POST['remail']=="")|| ($_POST['rmobile']=="")|| ($_POST['rdate']=="")){
        $msg= '<div class="alert alert-warning col-sm-6 ml-5 mt-2" role="alert">Fill All Fields</div>';
    }else{
        $requestinfo=$_POST['requestinfo'];
$requestdesc=$_POST['requestdesc'];
$rname=$_POST['rname'];
$rname=$_POST['rname'];
$raddress1=$_POST['raddress1'];
$raddress2=$_POST['raddress2'];
$rcity=$_POST['rcity'];
$rstate=$_POST['rstate'];
$rzip=$_POST['rzip'];
$remail=$_POST['remail'];
$rmobile=$_POST['rmobile'];
$rdate=$_POST['rdate'];
$sql="INSERT INTO `submitrequest_tb` ( `request_info`, `reequest_desc`, `request_name`, `requester_add1`, `requester_add2`, `requester_city`, `requster_state`, `requster_zip`, `requester_email`, `requester_mobile`, `request_date`) VALUES ('$requestinfo', '$requestdesc', '$rname', '$raddress1', '$raddress2', '$rcity', '$rstate', '$rzip', '$remail', '$rmobile', '$rdate')";
if($conn->query($sql)==true){
    $genid=mysqli_insert_id($conn);
    $msg= '<div class="alert alert-success col-sm-6 ml-5 mt-2" role="alert">Request Submitted Successfully</div>';
    $_SESSION['myid']=$genid;
    header("location:submitrequestsuccess.php");
}
else{
    $msg='<div class="alert alert-danger col-sm-6 ml-5 mt-2" role="alert">Unable to submit Your Request</div>';
}

    }
}

?>

   <div class="col-sm-9 col-md-10 mt-5"><!--start second column-->
   <form class="mx-5" action="" method="post">
       <div class="form-group">
           <label for="inputRequestInfo">Request Info</label>
           <input type="text" class="form-control" name="requestinfo" id="inputRequestInfo" placeholder="Request Info">

       </div>
       <div class="form-group">
           <label for="inputRequestDescription">Description</label>
           <input type="text" class="form-control" name="requestdesc" id="inputRequestDescription" placeholder="Write Description">

       </div>
       <div class="form-group">
           <label for="rname">Name</label>
           <input type="text" class="form-control" name="rname" id="rname" placeholder="Write Description">

       </div>
       <div class="form-row">
       <div class="form-group col-md-6">
           <label for="raddress1">Address Line 1</label>
           <input type="text" class="form-control" name="raddress1" id="raddress1" placeholder="raddress">

       </div>
       <div class="form-group col-md-6">
           <label for="raddress2">Address Line 2</label>
           <input type="text" class="form-control" name="raddress2" id="raddress2" placeholder="raddress2">

       </div>
       </div>
       <div class="form-row">

       <div class="form-group col-md-6">
           <label for="rcity">City</label>
           <input type="text" class="form-control" name="rcity" id="rname" placeholder="Write Description">

       </div>
       <div class="form-group col-md-4">
           <label for="rstate">State</label>
           <input type="text" class="form-control" name="rstate" id="rstate" placeholder="rstate">

       </div>
       <div class="form-group col-md-2">
           <label for="rzip">Zip</label>
           <input type="text" class="form-control" name="rzip" id="rzip" placeholder="rzip" onkeypress="isInputNumber(event)">

       </div>
       </div>
       <div class="form-row">
       <div class="form-group col-md-6">
           <label for="remail">Email</label>
           <input type="email" class="form-control" name="remail" id="remail" placeholder="remail">

       </div>
       <div class="form-group col-md-2">
           <label for="rmobile">Mobile</label>
           <input type="text" class="form-control" name="rmobile" id="rmobile" placeholder="rmobile" onkeypress="isInputNumber(event)">

       </div>
       <div class="form-group col-md-2">
           <label for="date">Date</label>
           <input type="date" class="form-control" name="rdate" id="date" placeholder="date">

       </div>
       </div>
       <button type="submit" class="btn btn-danger" name="submitrequest">Submit</button>
       <button type="reset" class="btn btn-secondary">Reset</button>
   </form>
   <?php 
   if(isset($msg)){
       echo $msg;
   }
   ?>

   </div><!--end second column-->
   <script>
       function isInputNumber(evt){
           var ch=String.fromCharCode(evt.which);
           if(!(/[0-9]/.test(ch))){
               evt.preventDefault();

           }
       }
   </script>
    <?php 
    
    include 'include/footer.php';
    ?>
</body>
</html>