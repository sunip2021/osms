<?php
if(session_id()==''){
    session_start();
}
if(isset($_SESSION['is_adminlogin'])){
  $aEmail=$_SESSION['aEmail'];
}else{
  echo "<script>location.href='login.php'</script>";
}
if(isset($_POST['view'])){
$sql="SELECT * FROM submitrequest_tb WHERE request_id={$_POST['id']}";
$result=$conn->query($sql);
$row=$result->fetch_assoc();
}
if(isset($_POST['close'])){
       $sql="DELETE FROM submitrequest_tb WHERE request_id={$_POST['id']} ";
       if($conn->query($sql)==TRUE){
              echo '<meta http-equiv="refresh" content="0; URL=?closed"/>';
       }else{
              echo "unable to delete";
       }
}
if(isset($_POST['assign'])){
    if(($_POST['requestid']=="")|| ($_POST['requestinfo']=="") || ($_POST['requestdesc']=="") || ($_POST['rname']=="") || ($_POST['raddress1']=="") || ($_POST['raddress2']=="") || ($_POST['rcity']=="") ||($_POST['rstate']=="") || ($_POST['rzip']=="") || ($_POST['remail']=="") || ($_POST['rmobile']=="") || ($_POST['assigntech']=="")|| ($_POST['inputdate']=="")){
        $msg='<div class="alert alert-warning col-sm-6 ml-5 mt-2">Fill All Fields</div>';
    }else{
$rid=$_POST['requestid'];
$rinfo=$_POST['requestinfo'];
$rdesc=$_POST['requestdesc'];
$rname=$_POST['rname'];
$radd1=$_POST['raddress1'];
$radd2=$_POST['raddress2'];
$rcity=$_POST['rcity'];
$rstate=$_POST['rstate'];
$rzip=$_POST['rzip'];
$remail=$_POST['remail'];
$rmobile=$_POST['rmobile'];
$assigntech=$_POST['assigntech'];
$inputdate=$_POST['inputdate'];
$sql="INSERT INTO `assignwork_tb` (`request_id`, `request_info`, `request_desc`, `requester_name`, `requester_add1`, `requester_add2`, `requester_city`, `requester_state`, `requestert_zip`, `requester_email`, `requester_mobile`, `assign_tech`, `assign_date`) VALUES ('$rid', '$rinfo', '$rdesc', '$rname', '$radd1', '$radd2', '$rcity', '$rstate', '$rzip', '$remail', '$rmobile', '$assigntech', '$inputdate') ";
if($conn->query($sql)==TRUE){
    $msg='<div class="alert alert-success col-sm-6 ml-5 mt-2">Work Assigned Successfully</div>';
}else{
    $msg='<div class="alert alert-danger col-sm-6 ml-5 mt-2">Unable to assign work</div>';
}

    }
}


?>
<!--start 3rd column-->
<div class="col-sm-5  mt-5 jumbotron">
   <form  action="" method="post">
          <h5 class="text-center">Assign Work Oreder Request</h5>
          <div class="form-group">
           <label for="inputRequestInfo" >Request ID</label>
           <input type="text" class="form-control" name="requestid" id="requestid" value="<?php if(isset($row['request_id'])){ echo $row['request_id']; } ?>" readonly>

       </div>
       <div class="form-group">
           <label for="inputRequestInfo">Request Info</label>
           <input type="text" class="form-control" name="requestinfo" id="inputRequestInfo" value="<?php if(isset($row['request_info'])){ echo $row['request_info']; } ?>" placeholder="Request Info">

       </div>
       <div class="form-group">
           <label for="inputRequestDescription">Description</label>
           <input type="text" class="form-control" name="requestdesc" id="inputRequestDescription" value="<?php if(isset($row['reequest_desc'])){ echo $row['reequest_desc']; } ?>"  placeholder="Write Description">

       </div>
       <div class="form-group">
           <label for="rname">Name</label>
           <input type="text" class="form-control" name="rname" id="rname" value="<?php if(isset($row['request_name'])){ echo $row['request_name']; } ?>" placeholder="Write Description">

       </div>
       <div class="form-row">
       <div class="form-group col-md-6">
           <label for="raddress1">Address Line 1</label>
           <input type="text" class="form-control" name="raddress1" id="raddress1" value="<?php if(isset($row['requester_add1'])){ echo $row['requester_add1']; } ?>" placeholder="raddress">

       </div>
       <div class="form-group col-md-6">
           <label for="raddress2">Address Line 2</label>
           <input type="text" class="form-control" name="raddress2" id="raddress2" value="<?php if(isset($row['requester_add2'])){ echo $row['requester_add2']; } ?>" placeholder="raddress2">

       </div>
       </div>
       <div class="form-row">

       <div class="form-group col-md-4">
           <label for="rcity">City</label>
           <input type="text" class="form-control" name="rcity" id="rcity" value="<?php if(isset($row['requester_city'])){ echo $row['requester_city']; } ?>" placeholder="Write Description">

       </div>
       <div class="form-group col-md-4">
           <label for="rstate">State</label>
           <input type="text" class="form-control" name="rstate" id="rstate" value="<?php if(isset($row['requster_state'])){ echo $row['requster_state']; } ?>" placeholder="rstate">

       </div>
       <div class="form-group col-md-4">
           <label for="rzip">Zip</label>
           <input type="text" class="form-control" name="rzip" id="rzip" value="<?php if(isset($row['requster_zip'])){ echo $row['requster_zip']; } ?>" placeholder="rzip" onkeypress="isInputNumber(event)">

       </div>
       </div>
       <div class="form-row">
       <div class="form-group col-md-6">
           <label for="remail">Email</label>
           <input type="email" class="form-control" name="remail" id="remail" value="<?php if(isset($row['requester_email'])){ echo $row['requester_email']; } ?>" placeholder="remail">

       </div>
       <div class="form-group col-md-6">
           <label for="rmobile">Mobile</label>
           <input type="text" class="form-control" name="rmobile" id="rmobile" value="<?php if(isset($row['requester_mobile'])){ echo $row['requester_mobile']; } ?>" placeholder="rmobile" onkeypress="isInputNumber(event)">

       </div>
      
       </div>
       <div class="form-row">
       <div class="form-group col-md-6">
           <label for="date">Assign to Technician</label>
           <input type="text" class="form-control" name="assigntech" id="assigntech"  placeholder="">
           </div>


              <div class="form-group col-md-6">
           <label for="date">Date</label>
           <input type="date" class="form-control" name="inputdate" id="inputdate"  placeholder="date">
           </div>


       </div>
       <div class="float-right">
       <button type="submit" class="btn btn-danger" name="assign">Assign</button>
       <button type="reset" class="btn btn-secondary">Reset</button>
       </div>
   </form>
   <?php if(isset($msg)){
       echo $msg;
   } ?>

</div><!--end Assigned Work 3rd Column-->
<script>
       function isInputNumber(evt){
           var ch=String.fromCharCode(evt.which);
           if(!(/[0-9]/.test(ch))){
               evt.preventDefault();

           }
       }
    </script>