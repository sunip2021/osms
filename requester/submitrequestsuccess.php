<?php
define('TITLE','SubmitSuccess');
include 'include/header.php';
include '../dbConnection.php';
session_start();
$id=$_SESSION['myid'];
if ($_SESSION['is_login']) {
  $remail = $_SESSION['rEmail'];
} else {
  header("location:requester_login.php");
}
$sql="SELECT * FROM submitrequest_tb WHERE request_id={$id}";
$result=$conn->query($sql);
echo $result->num_rows;
if($result->num_rows==1){
    $row=$result->fetch_assoc();
    echo "<div class='ml-5 mt-5'>
    <table class='table'>
    <tbody>
    <tr>
    <th>Request ID</th>
    <td>".$row['request_id']."</td>
    </tr>
    <tr>
    <th>Request Name</th>
    <td>".$row['request_name']."</td>
    </tr>
    <tr>
    <th>Request email</th>
    <td>".$row['requester_email']."</td>
    </tr>
    <tr>
    <th>Request Info</th>
    <td>".$row['request_info']."</td>
    </tr>
    <tr>
    <th>Request Description</th>
    <td>".$row['reequest_desc']."</td>
    </tr>
    <tr>
    <td><form class='d-print-none'><input class='btn btn-danger' type='submit' value='Print'
    onClick='window.print()'></form></td>
    </tr>
    </tbody>
    </table>
    </div>

    ";
}else{
  echo "failed";
}

?>