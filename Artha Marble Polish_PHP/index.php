<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="css/bootstrap.min.css">

  <!-- Font Awesome CSS -->
  <link rel="stylesheet" href="css/all.min.css">

  <!-- Google Font -->
  <link href="https://fonts.googleapis.com/css?family=Baloo+Bhai|Bree+Serif&display=swap" rel="stylesheet">
  <!-- Custom CSS -->
  <link rel="stylesheet" href="css/custom.css">

  <title>Artha Marble Polish</title>
</head>

<body>
  <!-- Start Navigation -->
  <nav class="navbar navbar-expand-sm navbar-dark bg-danger pl-5 fixed-top">
    <a href="index.php" class="navbar-brand">Artha Marble Polish</a>
    <span class="navbar-text">Customer's Happiness is our Aim</span>
    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#myMenu">
      <span class="navbar-toggler-icon"></span>
    </button>
    <style>
      body {
            font-family: Baloo Bhai, sans-serif;
            margin: 0;
            padding: 0;
        }
    .navbar-nav .nav-link h5 strong {
        color: white; /* Set default color to black */
        transition: color 0.3s; /* Add a smooth color transition */
    }

    .navbar-nav .nav-link:hover h5 strong {
        color: palevioletred; /* Change color to white on hover */
    }
    
</style>

<div class="collapse navbar-collapse" id="myMenu">
    
    <ul class="navbar-nav ml-auto">
    <li class="nav-item"><a href="index.php" class="nav-link"><h5><strong>Home</strong></h5></a></li>
        <li class="nav-item"><a href="#Services" class="nav-link"><h5><strong>Services</strong></h5></a></li>
        <li class="nav-item"><a href="#Contact" class="nav-link"><h5><strong>Contact us</strong></h5></a></li>
        <li class="nav-item"><a href="about.php" class="nav-link"><h5><strong>About us</strong></h5></a></li>
        <li class="nav-item"><a href="feedback.php" class="nav-link"><h5><strong>Feedback</strong></h5></a></li>
        <li class="nav-item"><a href="Admin/login.php" class="nav-link"><h5><strong>Admin Login</strong></h5></a></li>
        
    </ul>
</div>


  </nav> <!-- End Navigation -->

  <!-- Start Header Jumbotron-->
  <header class="jumbotron back-image" style="background-image: url(images/background\ image.jpg);">
    <div class="myclass mainHeading">
    <h1 class="text" style="font-family: Baloo Bhai, sans-serif;"><strong>WELCOME TO ARTHA MARBLE POLISH</strong></h1>
    <P><h5 class="text" style="font-family: Baloo Bhai, sans-serif;">A Platform where you enhance beauty of your marbles.</h5></P>
      <a href="Requester/RequesterLogin.php" class="btn btn-success mr-4">Login</a>
      <a href="#registration" class="btn btn-danger mr-4">Sign Up</a>
    </div>
    </header> <!-- End Header Jumbotron -->
    
  <div class="container">
    <!--Introduction Section-->
    <style>
    .jumbotron {
        background-image: url('images/intro.jpeg');
        background-size: cover;
        background-position:cover; 
        padding: 20px; /* Add padding as needed */
        color: black; /* Set text color to white for better readability */
    }
</style>
    <div class="jumbotron">
  <h3 class="text-center" style="font-family: Baloo Bhai, sans-serif;"><strong><u>Artha Marble Polishing Services</u></strong></h3>
<p><h5>
      <p>Artha Marble Polish is a service provider specializing in marble polishing and related services.</p>

      <p>Here are some points about  Our services:</p>

      <p>Professional Marble Polishing:Artha Marble Polish offers professional marble polishing services to restore the shine and beauty of dull or damaged marble surfaces.</p>

      <p>Marble Cleaning and Sealing: They provide thorough cleaning services to remove dirt, stains, and grime from marble surfaces. They also offer sealing services to protect the marble from future damage.</p>

      <p>Marble Restoration:Artha Marble Polish can restore damaged or worn marble surfaces through grinding, honing, and polishing, bringing them back to their original condition.</p>

      <p>Marble Repair:They offer repair services for chipped, cracked, or otherwise damaged marble, using specialized techniques to seamlessly blend repairs with the rest of the surface.</p>

      <p>Customized Services:Artha Marble Polish can tailor their services to meet the specific needs of each client, ensuring the best possible results for their marble surfaces.</p>

      <p>Experienced Team:With a team of experienced professionals, Artha Marble Polish ensures high-quality workmanship and customer satisfaction.</p>

      <p>Environmentally Friendly:They may use environmentally friendly products and techniques to minimize their impact on the environment.</p>

      <p>Competitive Pricing:Artha Marble Polish offers competitive pricing for their services, making professional marble care accessible to a wide range of customers.</p>
    </h5></p>

    </div>
  </div>
  <!--Introduction Section End-->
  <!-- Start Services -->
  <div class="container text-center border-bottom" id="Services">
    <h2 class= text style="font-family: 'Baloo Bhai', sans-serif;">Our Services</h2>
    <header style="background-image: url(images/background\ image.jpg);">

    <div class="row mt-4">
      <div class="col-sm-4 mb-4">
        <a href="#"><i class="fas fa-tv fa-8x text-success"></i></a>
        <h4 class="mt-4">24/7 Available</h4>
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
  </div> <!-- End Services -->

  <!-- Start Registration  -->
  <?php include('userRegistration.php') ?>
  <!-- End Registration  -->

  <!-- Start Happy Customer  -->
  <div class="jumbotron bg-danger" id="Customer">
    <!-- Start Happy Customer Jumbotron -->
    <div class="container">
      <!-- Start Customer Container -->
      <h2 class="text-center text-blackclass="text style="font-family: Baloo Bhai, sans-serif;">Happy Customers</h2>
      <div class="row mt-5">
        <div class="col-lg-3 col-sm-6">
          <!-- Start Customer 1st Column-->
          <div class="card shadow-lg mb-2">
            <div class="card-body text-center">
              <img src="images/avtar1.jpeg" class="img-fluid" style="border-radius: 100px;">
              <h4 class="card-title">Rahul Kumar</h4>
              <p class="card-text">Itaque illo explicabo voluptatum, saepe libero rerum, ad
                ducimus voluptas
                nesciunt debitis numquam.</p>
            </div>
          </div>
        </div> <!-- End Customer 1st Column-->

        <div class="col-lg-3 col-sm-6">
          <!-- Start Customer 2nd Column-->
          <div class="card shadow-lg mb-2">
            <div class="card-body text-center">
              <img src="images/avtar2.jpeg" class="img-fluid" style="border-radius: 100px;">
              <h4 class="card-title">Sonam Sharma</h4>
              <p class="card-text">Itaque illo explicabo voluptatum, saepe libero rerum, ad
                ducimus voluptas
                nesciunt debitis numquam.</p>
            </div>
          </div>
        </div> <!-- End Customer 2nd Column-->

        <div class="col-lg-3 col-sm-6">
          <!-- Start Customer 3rd Column-->
          <div class="card shadow-lg mb-2">
            <div class="card-body text-center">
              <img src="images/avtar3.jpeg" class="img-fluid" style="border-radius: 100px;">
              <h4 class="card-title">Sumit Vyas</h4>
              <p class="card-text">Itaque illo explicabo voluptatum, saepe libero rerum, ad
                ducimus voluptas
                nesciunt debitis numquam.</p>
            </div>
          </div>
        </div> <!-- End Customer 3rd Column-->

        <div class="col-lg-3 col-sm-6">
          <!-- Start Customer 4th Column-->
          <div class="card shadow-lg mb-2">
            <div class="card-body text-center">
              <img src="images/avtar4.jpeg" class="img-fluid" style="border-radius: 100px;">
              <h4 class="card-title">Jyoti Sinha</h4>
              <p class="card-text">Itaque illo explicabo voluptatum, saepe libero rerum, ad
                ducimus voluptas
                nesciunt debitis numquam.</p>
            </div>
          </div>
        </div> <!-- End Customer 4th Column-->
      </div> <!-- End Customer Row-->
    </div> <!-- End Customer Container -->
  </div> <!-- End Customer Jumbotron -->
  <!--Start Contact Us-->
  <div class="container" id="Contact">
    <!--Start Contact Us Container-->
    <h2 class="text-center mb-4"style="font-family: 'Baloo Bhai', sans-serif;">Contact US</h2> <!-- Contact Us Heading -->
    <div class="row">

      <!--Start Contact Us Row-->
      <?php include('contactform.php'); ?>
      <!-- End Contact Us 1st Column -->

      <div class="col-md-4 text-center">
        <!-- Start Contact Us 2nd Column-->
      <class= text style="font-family: 'Baloo Bhai', sans-serif;">Headquarter:</strong> <br>
        Artha Marble Polish Pvt Ltd, <br>
        Nallasopara(east)- 401209 <br>
        Phone: +91 9820819843 <br>
        <a href="#" target="_blank">www.amp.com</a> <br>

        <br><br>
      </div> <!-- End Contact Us 2nd Column-->
    </div> <!-- End Contact Us Row-->
  </div> <!-- End Contact Us Container-->
  <!-- End Contact Us -->
  <footer class="container-fluid bg-dark text-white mt-5" style="border-top: 3px solid #DC3545; position: relative;">
    <div class="container">
        <!-- Start Footer Container -->
        <div class="row py-3">
            <!-- Start Footer Row -->
            <div class="col-md-6">
                <!-- Start Footer 1st Column -->
                <span class="pr-2">Follow Us: </span>
                <a href="#" target="_blank" class="pr-2 fi-color"><i class="fab fa-facebook-f"></i></a>
                <a href="#" target="_blank" class="pr-2 fi-color"><i class="fab fa-twitter"></i></a>
                <a href="#" target="_blank" class="pr-2 fi-color"><i class="fab fa-youtube"></i></a>
                <a href="#" target="_blank" class="pr-2 fi-color"><i class="fab fa-google-plus-g"></i></a>
                <a href="#" target="_blank" class="pr-2 fi-color"><i class="fas fa-rss"></i></a>
            </div> <!-- End Footer 1st Column -->

            <div class="col-md-6 text-right">
                <!-- Start Footer 2nd Column -->
                <h6 style="position: absolute; bottom: 5px; right: 10px;">Designed by Sapna &copy; 2024.</h6>
            </div> <!-- End Footer 2nd Column -->
        </div> <!-- End Footer Row -->
    </div> <!-- End Footer Container -->
</footer> <!-- End Footer -->

  <!-- Boostrap JavaScript -->
  <script src="js/jquery.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/all.min.js"></script>
</body>

</html>