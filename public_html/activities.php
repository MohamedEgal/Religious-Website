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
    <title>Islamic Faith - Activities</title>
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

<main>

  <!--Start of introducion-->
    <div id="activity">    
        <div class="row content">
          <div class="col-sm-2 sidenav">
           
          </div>
          <div class="col-sm-8 text-center"> 
            <h1>Activities</h1>
            <p>There are many different activities available for kids, teenagers, adults and elderly people. Creating a strong bond in the community, helping individuals with Islamic knowledge and being active is one of our goals.</p>
            <hr>
          </div>
          <div class="col-sm-2 sidenav">
            <div class="well">
            </div>
          </div>
        </div>
      </div>
    </main>
      <!--End of introduction-->


<!--Start of services program-->
<section>
    <div>
          
        <div class="row gx-lg-5">
            <div class="col-lg-6 col-xxl-4 mb-5">
                <div class="card bg-light border-0 h-100">
                    <div class="card-body text-center p-4 p-lg-5 pt-0 pt-lg-0">
                        <div class="feature bg-primary bg-gradient text-white rounded-3 mb-4 mt-n4"></div>
                        <a href="https://www.greenlanemasjid.org/social-activities/glm-fc/" class="text1" target=”_blank” >
                          <h2 class="fs-4 fw-bold">Football Club</h2>
                          <p class="mb-0">Fotball club for kids aged 6-15. It is a fantastic opportunity for kids to meet, socialise and get fit surrounded by people with similar faith.</p>
                      </a>
                    </div>
                </div>
            </div>
          
            <div class="col-lg-6 col-xxl-4 mb-5">
                <div class="card bg-light border-0 h-100">
                    <div class="card-body text-center p-4 p-lg-5 pt-0 pt-lg-0">
                        <div class="feature bg-primary bg-gradient text-white rounded-3 mb-4 mt-n4"></div>
                        <a href="https://www.greenlanemasjid.org/social-activities/elderly-meet-up/" class="text2" target=”_blank” >
                        <h2 class="fs-4 fw-bold">Elderly Meet Up</h2>
                        <p class="mb-0">A free monthly gathering for the elderly where they can socialise and get to know other people over a bite to eat.</p>
                    </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-xxl-4 mb-5">
                <div class="card bg-light border-0 h-100">
                    <div class="card-body text-center p-4 p-lg-5 pt-0 pt-lg-0">
                        <div class="feature bg-primary bg-gradient text-white rounded-3 mb-4 mt-n4"></div>
                        <a href="https://www.greenlanemasjid.org/social-activities/scouts/" target=”_blank” >
                        <h2 class="fs-4 fw-bold">Scouts</h2>
                        <p class="mb-0">An exciting program for young people to partake in. The scouts do a range of activities from kayaking to coding. They develop necessary skills that will further help them throughout their lives.</p>
                      </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-xxl-4 mb-5">
                <div class="card bg-light border-0 h-100">
                    <div class="card-body text-center p-4 p-lg-5 pt-0 pt-lg-0">
                        <div class="feature bg-primary bg-gradient text-white rounded-3 mb-4 mt-n4"></div>
                        <a href="https://www.greenlanemasjid.org/social-activities/kickboxing/" target=”_blank” >
                        <h2 class="fs-4 fw-bold">Kickboxing</h2>
                        <p class="mb-0">This is a fantastic opportunity for kids aged 12-21 to learn not only self defence, but also to stay fit and active.</p>
                      </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
  <!--End of services program-->

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