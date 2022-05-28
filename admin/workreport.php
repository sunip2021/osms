<?php
define('PAGE','workreport');
define('TITLE','WorkReport');
include 'includes/header.php';
include '../dbConnection.php';
session_start();
if(isset($_SESSION['is_adminlogin'])){
  $aEmail=$_SESSION['aEmail'];
}else{
  echo "<script>location.href='login.php'</script>";
}
?>
<div class="col-sm-6 col-md-10 mt-5 text-center">
    
    
      
    <form action=""  method="post" class="d-print-none">
    <div class="form-row">
      
      <div class="form-group col-md-2">
        
        <input type="date" class="form-control" id="startdate" name="startdate">

      </div>
      <span>to</span>
      <div class="form-group col-md-2">
        
      <input type="date" class="form-control" id="enddate" name="enddate">

      </div>
      
      <div class="form-group">
      
      <input type="submit" class="btn btn-secondary" name="searchsubmit" value="search">

      </div>
    </div>
      
      
    </form>
    <?php
    if(isset($_POST['searchsubmit'])){
           $startdate=$_POST['startdate'];
           $enddate=$_POST['enddate'];
           $sql="SELECT * FROM assignwork_tb WHERE assign_date BETWEEN '$startdate' AND '$enddate'";
           $result=$conn->query($sql);
           if($result->num_rows>0){
                  echo '<p class="bg-dark text-white p-2 mt-4">Details</p>';
                  echo '<table class="table">';
                 echo '<thead>';
                 echo '<tr>';
                echo '<th scope="col">Requester ID</th>';
                echo '<th scope="col">Request Info</th>';
                echo '<th scope="col">Request Description</th>';
                echo '<th scope="col">Requester Name</th>';
                echo '<th scope="col">Requester Address1</th>';
                echo '<th scope="col">Requester Address2</th>';
                echo '<th scope="col">Requester City</th>';
                echo '<th scope="col">Requester State</th>';
                echo '<th scope="col">Requester Zip</th>';
                echo '<th scope="col">Requester Zip</th>';
                echo '<th scope="col">Requester Mobile</th>';
                echo '<th scope="col">Requester Email</th>';
                echo '<th scope="col">Assign Date</th>';
                
               
                echo '</tr>';
                echo '<tbody>';
                while($row=$result->fetch_assoc()){
                       echo '<tr>';
                       echo '<td>'.$row['request_id'].'</td>';
                       echo '<td>'.$row['request_info'].'</td>';
                       echo '<td>'.$row['request_desc'].'</td>';
                       echo '<td>'.$row['requester_name'].'</td>';
                       echo '<td>'.$row['requester_add1'].'</td>';
                       echo '<td>'.$row['requester_add2'].'</td>';
                       echo '<td>'.$row['requester_city'].'</td>';
                       echo '<td>'.$row['requester_state'].'</td>';
                       echo '<td>'.$row['requestert_zip'].'</td>';
                       echo '<td>'.$row['requester_email'].'</td>';
                       echo '<td>'.$row['requester_mobile'].'</td>';
                       echo '<td>'.$row['assign_tech'].'</td>';
                       echo '<td>'.$row['assign_date'].'</td>';
                       
                       echo '</tr>';
                }
                echo '<tr>';
                echo '<td>';
                echo '<input type="submit" value="Print" class="btn btn-danger d-print-none" onClick="window.print()">';
                echo '</td>';
                echo '</tr>';
                echo '</tbody>';
                 echo '</thead>';


                  echo '</table>';
           }else{
           echo '<div class="alert alert-warning col-sm-6 ml-5 mt-2" role="alert">No Record Found</div>';
           }
    }

    ?>
  
    </div>
 <?php 
        include 'includes/footer.php';
        ?>