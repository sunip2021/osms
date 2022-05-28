<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/all.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@500&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/custom.css">
  <title>Document</title>
</head>

<body>
  <!--start navbar-->
  <nav class="navbar navbar-expand-sm navbar-dark bg-danger pl-5 fixed-top">
    <a class="navbar-brand" href="index.php">OSMS</a>
    <span class="navbar-text">Customer's happiness is our aim</span>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#myMenu">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="myMenu">
      <ul class="navbar-nav pl-5 custom-nav">
        <li class="nav-item">
          <a class="nav-link" href="#">Home </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Services </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="user_registration.php">Registration </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="requester/requester_login.php">Login </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">contact </a>
        </li>

      </ul>




    </div>
  </nav>
  <header class="jumbotron back-image" style="background-image:url(images/banner1.jpeg);">
    <div class="mainHeading">
      <h1 class="text-uppercase text-danger font-weight-bold">Welcome to OSMS</h1>
      <P class="font-italic">Customer's Happiness is our Aim</P>
      <a href="requester/requester_login.php" class="btn btn-success mr-4">Login</a>
      <a href="#" class="btn btn-danger mr-4">Sign Up</a>

    </div>
    <!--  -->
    <!-- <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
    <hr class="my-4">
    <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
    <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a> -->
  </header>
  <div class="container">
    <div class="jumbotron">
      <h3 class="text-center">OSMS Service</h3>
      <p>
        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Est quos autem et ipsum iure alias repellendus ratione eligendi quo earum! Maxime dolorum eligendi illum quae modi quod adipisci natus ex? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio, rem eveniet? Vero ratione error cumque autem a unde asperiores explicabo dignissimos. Voluptates aut asperiores adipisci. At facilis assumenda nisi pariatur. Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi, omnis? Illum ipsam porro adipisci vel laboriosam accusantium quae? Ea natus nobis esse similique tempore culpa deserunt odio totam, ratione placeat! Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nulla necessitatibus maxime aut a consequuntur ratione maiores adipisci voluptates nihil. Voluptas earum aliquid animi delectus minima voluptates totam quo sed ratione! Lorem ipsum dolor sit amet consectetur, adipisicing elit. Fugiat fugit facilis voluptatum sed molestias rem necessitatibus! Ipsum, quae sapiente perferendis necessitatibus sit facilis adipisci ad voluptas excepturi, laboriosam est hic!
      </p>

    </div>

  </div>
  <!--end introduction-->
  <div class="container text-center border-buttom">
    <h2>Our Services</h2>
    <div class="row mt-4">
      <div class="col-sm-4 mb-4">
        <a href="#"><i class="fas fa-tv fa-8x text-success"></i></a>
        <h4 class="mt-4">Electronic Appliances</h4>
      </div>
      <div class="col-sm-4 mb-4">
        <a href="#"><i class="fas fa-sliders-h fa-8x text-primary"></i></a>
        <h4 class="mt-4">Preventive Maintenance</h4>
      </div>
      <div class="col-sm-4 mb-4">
        <a href="#"><i class="fas fa-cogs fa-8x text-info"></i></a>
        <h4 class="mt-4">Fault Repair</h4>
      </div>
    </div>
  </div>
  <!--end service section container-->
  <!--registration form-->
  <?php include 'user_registration.php'; ?>
  <!--end registration form-->
  <!--start happy customer-->
  <div class="jumbotron bg-danger">
    <div class="container">
      <h2 class="text-center text-white">
        Happy customer
      </h2>
      <div class="row mt-5">
        <div class="col-lg-3 col-sm-6">
          <div class="card shadow-lg mb-2">
            <div class="card-body text-center">
              <img src="images/image1.jpeg" class="img-fluid" style="display: inline-block; position: relative; width: 200px; height: 200px; overflow: hidden; border-radius: 50%;" alt="">
              <h4 class="card-title">Rahul Kumar</h4>
              <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim voluptatibus molestiae distinctio eveniet quasi, corrupti</p>
            </div>
          </div>
        </div>
        <!--end 1st column-->
        <div class="col-lg-3 col-sm-6">
          <div class="card shadow-lg mb-2">
            <div class="card-body text-center">
              <img src="images/image2.jpeg" class="img-fluid" style="display: inline-block; position: relative; width: 200px; height: 200px; overflow: hidden; border-radius: 50%;" alt="">
              <h4 class="card-title">Rahul Kumar</h4>
              <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim voluptatibus molestiae distinctio eveniet quasi, corrupti</p>
            </div>
          </div>
        </div>
        <!--end 2nd column-->
        <div class="col-lg-3 col-sm-6">
          <div class="card shadow-lg mb-2">
            <div class="card-body text-center">
              <img src="images/image3.jpeg" class="img-fluid" style="display: inline-block; position: relative; width: 200px; height: 200px; overflow: hidden; border-radius: 50%;" alt="">
              <h4 class="card-title">Rahul Kumar</h4>
              <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim voluptatibus molestiae distinctio eveniet quasi, corrupti</p>
            </div>
          </div>
        </div>
        <!--end 3rd column-->
        <div class="col-lg-3 col-sm-6">
          <div class="card shadow-lg mb-2">
            <div class="card-body text-center">
              <img src="images/image4.jpeg" class="img-fluid" style="display: inline-block; position: relative; width: 200px; height: 200px; overflow: hidden; border-radius: 50%;" alt="">
              <h4 class="card-title">Rahul Kumar</h4>
              <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim voluptatibus molestiae distinctio eveniet quasi, corrupti</p>
            </div>
          </div>
        </div>
        <!--end 4th column-->
      </div>
    </div>
  </div>
  <!--end happy customer-->
  <!--start contact us-->
  <div class="container">
    <h2 class="text-center mb-4">
      Contact Us
    </h2>
    <div class="row">
     <?php include 'contact.php'; ?>
      <!--end 1st column-->
      <div class="col-md-4 text-center">
        <strong>Headquater:</strong><br>
        OSMS pvt Ltd, <br>
        Badamtala,Burdwan,wb<br>
        wb-111111 <br>
        phone:+0000000000<br>
        <a href="#" target="_blank">www.osms.com</a><br>
        <br><br>
        <strong>Branch:</strong><br>
        Badamtala,Burdwan,wb<br>
        wb-111111 <br>
        phone:+0000000000<br>
        <a href="#" target="_blank">www.osms.com</a><br>
        <br><br>

      </div>
    </div>
  </div>
  <!--end contact us-->
  <footer class="container-fluid bg-dark mt-5 text-white">
    <div class="container">
      <div class="row py-3">
        <div class="col-md-6">
          <span class="pr-2">Follow Us:</span>
          <a href="#" target="_blank" class="pr-2 fi-color"><i class="fab fa-facebook-f"></i></a>
          <a href="#" target="_blank" class="pr-2 fi-color"><i class="fab fa-twitter"></i></a>
          <a href="#" target="_blank" class="pr-2 fi-color"><i class="fab fa-youtube"></i></a>



        </div>
        <!--end 1st column-->
        <civ class="col-md-6 text-right">
          <small>Designed by Sunip &copy; 2022</small>
          <small class="ml-2"><a href="admin/login.php">Admin Login</a></small>
        </civ>
      </div>
    </div>

  </footer>




  <script src="js/jquery.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>

  <script src="js/all.min.js"></script>
</body>

</html>