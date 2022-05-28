<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
  <link rel="stylesheet" href="../css/all.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@500&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="../css/custom.css">
    <title><?php echo TITLE  ?></title>
</head>
<body>
<nav class="navbar navbar-dark fixed-top bg-danger flex-md-nowrap p-0 shadow"><a class="navbar-brand col-sm-3 col-md-2 mr-0" href="dashboard.php">OSMS</a></nav>
    
    <div class="container-fluid" style="margin-top:40px;">
      <div class="row">
        <nav class="col-sm-2 bg-light sidebar py-5 d-print-none"><!--sidebar-->
          <div class="sidebar-sticky">
            <ul class="nav flex-column">
              <li class="nav-item">
                <a class="nav-link <?php  if(PAGE == 'dashboard' ){ echo 'active'; } ?>" href="dashboard.php" ><i class="fas fa-user"></i>Dashboard</a>
              </li>
              <li class="nav-item">
                <a class="nav-link <?php  if(PAGE == 'work' ){ echo 'active'; } ?>" href="work.php" ><i class="fab fa-accessible-icon"></i>Work Order</a>
              </li>
              <li class="nav-item">
                <a class="nav-link <?php  if(PAGE == 'request' ){ echo 'active'; } ?> " href="request.php" ><i class="fas fa-align-center"></i>Requests</a>
              </li>
              <li class="nav-item">
                <a class="nav-link <?php  if(PAGE == 'asset' ){ echo 'active'; } ?> " href="asset.php" ><i class="fas fa-database center"></i>Assets</a>
              </li>
              <li class="nav-item">
                <a class="nav-link <?php  if(PAGE == 'technician' ){ echo 'active'; } ?>" href="technician.php" ><i class="fab fa-teamspeak center"></i>Technician</a>
              </li>
              <li class="nav-item">
                <a class="nav-link <?php  if(PAGE == 'requester' ){ echo 'active'; } ?> " href="requester.php" ><i class="fas fa-users center"></i>Requester</a>
              </li>
              <li class="nav-item">
                <a class="nav-link <?php  if(PAGE == 'sellreport' ){ echo 'active'; } ?> " href="sellreport.php" ><i class="fas fa-table center"></i>Sell Report</a>
              </li>
              <li class="nav-item">
                <a class="nav-link <?php  if(PAGE == 'workreport' ){ echo 'active'; } ?> " href="workreport.php" ><i class="fas fa-table center"></i>Work Report</a>
              </li>
              <li class="nav-item">
                <a class="nav-link <?php  if(PAGE == 'ChangePassword' ){ echo 'active'; } ?>" href="changepassword.php" ><i class="fas fa-key"></i>Change Password</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="../logout.php" ><i class="fas fa-sign-out-alt"></i>Logout</a>
              </li>
            </ul>
          </div>
        </nav>