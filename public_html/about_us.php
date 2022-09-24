<?php
session_start();
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}

?>


<!--Telling the browser what document this file is-->
<!doctype html>
<html lang="en">

<!-- HEADER STARTS HERE -->
  <head>
    
<!--Logo which will show up on the page bar on the browser-->
    <link rel="icon" type="image/png" href="images/Logo.png">

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

      <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
   
      <!-- Own style sheets -->
    <link rel="stylesheet" href="css/navbar.css">
    <link rel="stylesheet" href="css/style.css">
    
      <!--Title of the webpage-->
    <title>Islamic Faith - About us</title>
  </head>
  <!--HEADER ENDS HERE-->

  <!--BODY STARTS HERE-->
  <body>

    <!--START OF NAVIGATION BAR-->
    <header class="site-navbar site-navbar-target" role="banner">
      <nav class="navbar navbar-expand justify-content-between">
           <a href="#" class="navbar-brand">
        <img src="images/Logo.png" height="100" alt="CoolBrand">
    </a>
            <div class="nav">
                <div class="navbar-nav">
                    <a href="index.php" class="nav-item nav-link active">Home</a>
                    <a href="activities.php" class="nav-item nav-link">Activities</a>
                    <a href="services.php" class="nav-item nav-link">Services</a>
                    <a href="about_us.php" class="nav-item nav-link">About us</a>
                    <a href="contactform.php" class="nav-item nav-link">Contact</a>
                </div>
                <div class="navbar-nav ml-auto">
                    <a href="logoutPage.php" class="nav-item nav-link">Logout</a>
                </div>
            </div>
    </nav>
    </header>
      <!--END OF NAVIGATION BAR-->
 


  <!--About us information starts-->
  <section>
    <div id="activity">    
      <div class="row content">
        <div class="col-sm-2 sidenav">
         
        </div>
        <div class="col-sm-8 text-center"> 
          <h1>About us</h1>
          <p>Islamic faith was made with the aim of reaching out to individuals who are muslims or non-muslims, to bring informatiion and resources that will help them in wherever they are in life. Whether it be wanting to do an activity, getting married to their significant other or just trying to understand about Islam.</p>
          <p>Our mission is to inspire and educate people on Islam. We believe in creating a better communityby encouraging dialogue and activity, to hopefully have a worldwide understanding of Islam.</p>
          <hr>
        </div>
        <div class="col-sm-2 sidenav">
          <div class="well">
          </div>
        </div>
      </div>
    </div>
  </section>
<!--About us information ends-->


  
<!--START OF FOOTER-->
<footer class="footer-16371">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-9 text-center">
        <div class="footer-site-logo mb-4">
          <a href="index.html"><img id="Logo2" src="images/Logo.png" alt="Logo"></a>
        </div>
        <ul class="list-unstyled nav-links mb-5">
          <li><a href="index.php">Home</a></li>
          <li><a href="activities.php">Activities</a></li>
          <li><a href="services.php">Services</a></li>
          <li><a href="about_us.php">About us</a></li>
          <li><a href="contactform.php">Contact</a></li>
        </ul>



        <div class="copyright">
          <p class="mb-0"><small>&copy; Mohamed Egal 2022. All Rights Reserved.</small></p>
        </div>


      </div>
    </div>
  </div>
</footer>
<!--END OF FOOTER-->
  

  </body>
<!--END OF BODY-->

</html>
<!--END OF WEBSITE CODE-->