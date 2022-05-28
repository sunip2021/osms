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
<nav class="navbar navbar-dark fixed-top bg-danger flex-md-nowrap p-0 shadow"><a class="navbar-brand col-sm-3 col-md-2 mr-0" href="requesterProfile.php">OSMS</a></nav>
    
    <div class="container-fluid" style="margin-top:40px;">
      <div class="row">
        <nav class="col-sm-2 bg-light sidebar py-5 d-print-none"><!--sidebar-->
          <div class="sidebar-sticky">
            <ul class="nav flex-column">
              <li class="nav-item">
                <a class="nav-link <?php  if(PAGE == 'RequesterProfile' ){ echo 'active'; } ?>" href="requesterProfile.php" ><i class="fas fa-user"></i>Profile</a>
              </li>
              <li class="nav-item">
                <a class="nav-link <?php  if(PAGE == 'SubmitRequest' ){ echo 'active'; } ?>" href="submitrequest.php" ><i class="fab fa-accessible-icon"></i>Submit Request</a>
              </li>
              <li class="nav-item">
                <a class="nav-link <?php  if(PAGE == 'CheckStatus' ){ echo 'active'; } ?>" href="checkstatus.php" ><i class="fas fa-align-center"></i>Check Status</a>
              </li>
              <li class="nav-item">
                <a class="nav-link <?php  if(PAGE == 'ChangePassword' ){ echo 'active'; } ?>" href="requesterchangepass.php" ><i class="fas fa-key"></i>Change Password</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="../logout.php" ><i class="fas fa-sign-out-alt"></i>Logout</a>
              </li>
            </ul>
          </div>
        </nav>
        
     