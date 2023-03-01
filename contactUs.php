
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Priva | Home</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

 

  <!-- Google Fonts -->
  <link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
    rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
  <!-- <script>
    function submitfunction(){
      const message = document.getElementById("Submitted").innerHTML = "Your Message is Submitted";
    }
  </script>  -->

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">
    <div class="container-fluid d-flex align-items-center justify-content-between">
    
      <!-- Uncomment below if you prefer to use an image logo -->
      <a href="index.html" class="logo"><img src="assets/img/exp-fin.png" alt="" class="img-fluid"></a>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto" href="index.html">Home</a></li>
          <li><a class="nav-link scrollto" href="about.html">About Us</a></li>
          <li class="dropdown"><a href="#services"><span>Products</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="customer.html">PRIVA 7.4 AC Charger</a></li>
              <li><a href="customer.html#PRIVA50" id="PRIVA50">PRIVA 50 DC Charger</a></li>
              <!-- <li><a href="#services">PRIVA EV</a></li> -->
              
            </ul>
          </li>
          <!-- <li><a class="nav-link scrollto" href="careers.html">Careers</a></li> -->
          <li><a class="nav-link scrollto active"" href="#">Contact Us</a></li>
          <!-- <li><a class="nav-link scrollto" href="login.html">Login</a></li> -->

          <!-- <li><a class=" primary-link" href="#contact">LOGIN</a></li> -->
         
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <section>
    <div class = 'first'> 
      <form class="contact_form"  action="contact_user.php" method="post">
      <div id="error_message">
     
     </div>
         <h1 class="contact_heading">Contact Us</h1> 

          <label  for="name" class="contact_label">Name:</label>
          <input class= "Contact_input" type="text"  name="Name" placeholder="Enter Name">

          <label for="Email id" class="contact_label">Email id:</label>
          <input class= "Contact_input"  type="text"  name="Email" placeholder="Enter Email">
         
          <label for ="message" class="contact_label">Message:</label>
          <textarea class="contact_text"  placeholder="Enter message" name="Message" row="6" ></textarea>
      
          <div class="contact_center">
              <input class="Contact_input" type="submit"  value="Submit">
              <p id="success"></p>
          </div>
      </form>
  </div>
  </section>


  <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>PRIVA TECHNOLOGIES PRIVATE LIMITED</h3>
            <!-- <p>Experience The Future</p> -->
            <p>
              Mardicotto
              Cuncolim South Goa, 403703 India<br><br>
            <p>GST: 30AANCP4459L1Z1</p>
            <p>CIN: U34300GA2022PTC015678</p> <br>
              <strong></strong>+91 7822042937<br>
              <strong></strong>privatechnologies22@gmail.com<br>
            </p>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <ul>
              <li><a href="index.html">Home</a></li>
              <li><a href="about.html">About Us</a></li>
              <li><a href="customer.html">Product</a></li>
              <li><a href="contactUs.php">Contact us</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <!-- <h4>PRODUCT</h4> -->
            <ul>
              <li><a href="#">PRIVA 7.4</a></li>
              <li> <a href="#">PRIVA 50</a></li>
              <!-- <li><a href="#">PRIVA</a></li> -->
              
              
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Join Our Newsletter</h4>
            <p>Stay up to date with our latest news, promotions, and special offers by subscribing to our newsletter. Simply enter your email address below and we'll add you to our list. We promise to only send you relevant and valuable content</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>
          </div>

        </div>
      </div>
    </div>

    <div class="container">

      <div class="copyright-wrap d-md-flex py-4">
        <div class="me-md-auto text-center text-md-start">
          <div class="copyright">
            &copy; Copyright <strong><span>PRIVA TECHNOLOGIES PRIVATE LIMITED</span></strong>. All Rights Reserved
          </div>
          <div class="credits">
            <!-- All the links in the footer should remain intact. -->
            <!-- You can delete the links only if you purchased the pro version. -->
            <!-- Licensing information: https://bootstrapmade.com/license/ -->
            <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/techie-free-skin-bootstrap-3/ -->
            Designed by <a href="index.html">PRIVA TECHNOLOGIES PRIVATE LIMITED</a>
          </div>
        </div>
        <div class="social-links text-center text-md-right pt-3 pt-md-0">
          <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
          <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
          <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
          <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
          <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
        </div>
      </div>

    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
      class="bi bi-arrow-up-short"></i></a>
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  
  

</body>

</html>




