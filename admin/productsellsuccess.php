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
$sql="SELECT * FROM customer_tb WHERE customerid={$_SESSION['myid']}";
$result=$conn->query($sql);
if($result->num_rows==1){
    $row=$result->fetch_assoc();
    echo "<div class='ml-5 mt-5'>
    <h3 class='text-center'>Customer Bill</h3>
    <table class='table'>
    <tbody>
    <tr>
    <th>Customer ID</th>
    <td>".$row['customerid']."</td>
    </tr>
    <tr>
    <th>Customer Name</th>
    <td>".$row['cname']."</td>
    </tr>
    <tr>
    <th>Customer Address</th>
    <td>".$row['caddress']."</td>
    </tr>
    <tr>
    <th>Product Name</th>
    <td>".$row['pname']."</td>
    </tr>
    <tr>
    <th>Customer ID</th>
    <td>".$row['pquantity']."</td>
    </tr>
    <tr>
    <th>Price Each</th>
    <td>".$row['product_price']."</td>
    </tr>
    <tr>
    <th>Total Price</th>
    <td>".$row['total_price']."</td>
    </tr>
    <tr>
    <th>Date</th>
    <td>".$row['date']."</td>
    </tr>
    <tr>
    <td><form class='d-print-none'><input class='btn btn-danger' type='submit' value='Print'
    onClick='window.print()'></form></td>
    <td><a href='assets.php' class='btn btn-secondary d-print-none'>Close</a></td>
    </tr>
    </tbody>
    </table></div>";
    

}
?>
<?php 
        include 'includes/footer.php';
        ?>