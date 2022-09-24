<?php 
session_start();
if(isset($_POST['submit'])){
    $to = "mohegal@outlook.com"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $subject3 = $_POST['subject'];
        $subject2 = "Copy of your form submission: ".$subject3;
    $subject = "Islamic Faith: ".$subject3;
    $message = $first_name . " " . $last_name . " wrote the following:" . "\n\n" . $_POST['message'];
    $message2 = "Here is a copy of your message " . $first_name . "\n\n" . $_POST['message'];

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
    echo "Mail Sent. Thank you " . $first_name . ", we will contact you shortly.";
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    }
    
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
    
?>

<!Doctype html>
<html lang="en">
  <head>

    <link rel="icon" type="image/png" href="images/Logo.png">

    
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    
    <!-- Style -->
    <link rel="stylesheet" href="css/navbar.css">
    <!-- Style -->
    <link rel="stylesheet" href="css/style.css">
    
    <title>Islamic Faith - Contact us</title>
  </head>
  <body>


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



    <section class="ftco-section">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-6 text-center mb-5">
            <h2 class="heading-section">Contact</h2>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-lg-10">
            <div class="wrapper">
              <div class="row no-gutters">
                <div class="col-md-6 d-flex align-items-stretch">
                  <div class="contact-wrap w-100 p-md-5 p-4 py-5">
                    <h3 class="mb-4">Write to us</h3>
                    <div id="form-message-warning" class="mb-4"></div> 
                    <div id="form-message-success" class="mb-4">
                    </div>
                    <form method="post" name="contactForm" class="contactForm">
                      <div class="row">
                        <div class="col-md-12">
                          <div class="form-group">
                            <input type="text" class="form-control" name="first_name" id="first_name" placeholder="First Name" required>
                            <span id="name-error" style="display: none;"></span>
                          </div>
                        </div>
                        <div class="col-md-12">
                          <div class="form-group">
                            <input type="text" class="form-control" name="last_name" id="last_name" placeholder="Last Name" required>
                            <span id="name-error" style="display: none;"></span>
                          </div>
                        </div>
                        <div class="col-md-12"> 
                          <div class="form-group">
                            <input type="text" class="form-control" name="email" id="email" placeholder="Email" required>
                            <span id="email-error" style="display: none;" ></span>
                          </div>
                        </div>
                        <div class="col-md-12">
                          <div class="form-group">
                            <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
                            <span id="subject-error" style="display: none;" ></span>
                          </div>
                        </div>
                        <div class="col-md-12">
                          <div class="form-group">
                            <textarea name="message" class="form-control" id="message" cols="30" rows="6" placeholder="Message" required></textarea>
                            <span id="message-error" style="display: none;" ></span>
                          </div>
                        </div>
                        <div class="col-md-12">
                          <div class="form-group">
                            <input type="submit" value="Send Message" name="submit" class="btn btn-primary" id="button1">
                            <div class="submitting"></div>
                          </div>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
                <div class="col-md-6 d-flex align-items-stretch">
                  <div class="info-wrap w-100 p-md-5 p-4 py-5 img">
                    <h3>Contact information</h3>
                    <p class="mb-4">We're open for any suggestion or just to have a chat</p>
                    <div class="dbox w-100 d-flex align-items-start">
                      <div class="icon d-flex align-items-center justify-content-center">
                        <span class="fa fa-map-marker"></span>
                      </div>
                      <div class="text pl-3">
                        <p><span>Address:</span> Matthew Boulton College, 1 Jennens Rd, Birmingham B4 7PS</p>
                      </div>
                    </div>
                    <div class="dbox w-100 d-flex align-items-center">
                      <div class="icon d-flex align-items-center justify-content-center">
                        <span class="fa fa-phone"></span>
                      </div>
                      <div class="text pl-3">
                        <p><span>Phone:</span> <a href="tel://1234567920">07123987654</a></p>
                      </div>
                    </div>
                    <div class="dbox w-100 d-flex align-items-center">
                      <div class="icon d-flex align-items-center justify-content-center">
                        <span class="fa fa-paper-plane"></span>
                      </div>
                      <div class="text pl-3">
                        <p><span>Email:</span> <a href="mailto:info@yoursite.com">BMC192022586@student.bmet.ac.uk</a></p>
                      </div>
                    </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

 
  

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
              <p class="mb-0"><small>&copy; Mohamed Egal 2021. All Rights Reserved.</small></p>
            </div>


          </div>
        </div>
      </div>
    </footer>

  
    
    
   <script src="js/formSubmit.js"></script>
   <script src="js/carousel.js"></script> 
   <script src="js/main.js"></script>
   <script src="js/cookie.js"></script>
   <script src="js/navbar.js"></script>
    <script></script>
  <style>
  </body>
</html>