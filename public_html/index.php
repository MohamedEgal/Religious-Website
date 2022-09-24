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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" 
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
   
      <!-- Own style sheets -->
    <link rel="stylesheet" href="css/navbar.css">
    <link rel="stylesheet" href="css/style.css">
    
      <!--Title of the webpage-->
    <title>Islamic Faith - Home</title>
  </head>
  <!--HEADER ENDS HERE-->

  <!--BODY STARTS HERE-->
  <body onload="checkCookie()" >

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


  <!--Slideshow starts here-->
 <main>
  <div class="carousel-wrapper">
    <div class="carousel">

      <img class="carousel__photo initial" src="images/dubai.jpg">
      <img class="carousel__photo" src="images/islamhd.jpg">
      <img class="carousel__photo" src="images/Reading.jpg">
      <img class="carousel__photo" src="images/quran.jpg">
      <img class="carousel__photo" src="images/light.jpg">
      
      
      <div class="carousel__button--next"></div>
      <div class="carousel__button--prev"></div>

    </div>
  </div>
  <section>
  <div class="container marketing">
<!--Slideshow ends here-->


    <!-- Three columns of text below the carousel -->
    <div class="row" id="Columns">
      <div class="col-lg-4">
        <img src="images/Praying.jpg" alt="Man praying" height="150" width="200" style="border-radius: 20px; padding-bottom: 5px;">
        <h2>Prayer times</h2>
        <p>Here you can find the prayer times from anywhere in the world.</p>
        <p><a class="btn btn-secondary" href="https://www.islamicfinder.org/world/" role="button">Learn more</a></p>
      </div>
      <div class="col-lg-4">
        <img src="images/RedPraying.jpg" alt="Muslims praying" width="200" height="150" style="border-radius: 20px; padding-bottom: 5px;">
        <h2>How to pray</h2>
        <p>The second of five pillars in the religion and must be done five times a day at a set of times.</p>
        <p><a class="btn btn-secondary" href="https://muslimhands.org.uk/latest/2020/07/how-to-perform-salah" role="button">Learn more</a></p>
      </div>
      <div class="col-lg-4">
        <img src="images/islamhd.jpg" alt="Mosque during dawn" width="200" height="150" style="border-radius: 20px; padding-bottom: 5px;">
        <h2>Quran</h2>
        <p>The Quran contains 114 surahs (chapters) and each 'chapter' are divided into ayahs (verses).</p>
        <p><a class="btn btn-secondary" href="https://quran.com/" role="button">Learn more</a></p>
      </div>
    </div>
<!--END OF COLUMNS-->

    <!-- START THE FEATURETTES -->
    <hr class="featurette-divider">
    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading">The Kaaba. <span class="text-muted">The sacred site of Islam.</span></h2>
        <p class="lead">The Kaaba is considered to be the most sacred place for all muslims. It is the 'House of Allah' and also the direction muslims face when praying. It is surrounded by pilgrims every day to perform what is known as Hajj.</p>
        <a href="https://www.khanacademy.org/humanities/ap-art-history/introduction-cultures-religions-apah/islam-apah/a/the-kaaba"><p class="learnMore">Learn More</p></a>
      </div>
      <div class="col-md-5">
       <a href="https://www.khanacademy.org/humanities/ap-art-history/introduction-cultures-religions-apah/islam-apah/a/the-kaaba" > <img id="shw1" class="featurette-image img-fluid mx-auto" src="images/Mecca.jpg" alt="Muslims in front of The Kaaba" ></a>
      </div>
    </div>
    <hr class="featurette-divider">
    <div class="row featurette">
      <div class="col-md-7 order-md-2">
        <h2 class="featurette-heading">Find your local mosque. <span class="text-muted">Get connected.</span></h2>
        <p class="lead">Finding a local mosque can be difficult, especially if you've recently converted to Islam. This resource will help you find the closest mosque to you.</p>
        <a href="https://www.visitmymosque.org/find-my-mosque/"><p class="learnMore">Learn More</p></a>
      </div>
      <div class="col-md-5 order-md-1">
       <a href="https://www.visitmymosque.org/find-my-mosque/"><img id="shw2" class="featurette-image img-fluid mx-auto" src="images/Muslim Family.jpg"  alt="Muslim family"></a>
      </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading">Jum'ah. <span class="text-muted">The Friday Prayer.</span></h2>
        <p class="lead">The Friday prayers are a congretational worship where muslims gather to pray during midday. The leader of the congretion delivers a two part sermon covering a wide of topics.</p>
        <a href="https://pluralism.org/jum%E2%80%99ah-the-friday-prayer"><p class="learnMore">Learn More</p></a>
      </div>
      <div class="col-md-5">
        <a href="https://pluralism.org/jum%E2%80%99ah-the-friday-prayer"><img id="shw3" class="featurette-image img-fluid mx-auto" src="images/ZoomPraying.jpg" alt="Muslims praying the Friday prayer"></a>
      </div>
    </div>
    <hr class="featurette-divider">
  </div>
  </section>
  </main>
    <!-- /END THE FEATURETTES -->
  
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
  
    
    

<!--JavaScript-->
<script src="js/carousel.js"></script> 
<script src="js/cookie.js"></script>

  </body>
<!--END OF BODY-->

</html>
<!--END OF WEBSITE CODE-->