
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
      <a href="index.html" class="logo"><img src="assets/img/exp-fin1.png" alt="" class="img-fluid"></a>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">About Us</a></li>
          <li><a class="nav-link scrollto" href="#services">Services</a></li>
          <li><a class="nav-link scrollto" href="contactUs.php">Contact Us</a></li>
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
          <input class= "Contact_input" type="text"  name="Name" placeholder="Enter Name" required>

          <label for="Email id" class="contact_label">Email id:</label>
          <input class= "Contact_input"  type="text"  name="Email" placeholder="Enter Email" required>
         
          <label for ="message" class="contact_label">Message:</label>
          <textarea class="contact_text"  placeholder="Enter message" name="Message" row="6" ></textarea>
      
          <div class="contact_center">
              <input class="Contact_input" type="submit"  value="Submit">
              <p id="success"></p>
          </div>
      </form>
  </div>
  </section>

<!-- ======= Footer ======= -->
<footer id="footer">

<div class="footer-top">
  <div class="container">
    <div class="row">

      <div class="col-lg-4 col-md-6 footer-contact">
        <h3>PRIVA TECHNOLOGIES PRIVATE LIMITED</h3>
        <!-- <p>Experience The Future</p> -->
        <br>
        <strong></strong><b>Akhilesh Sontakke</b> : +49 15906425200<br>
            <strong></strong><b>Ugam Kholkar</b> : +91 7875679948<br>
            <strong></strong><b>Ayush Bhambore</b> : +91 9422811800<br>
            <strong></strong><b>E-mail ID</b> : privatechnologies22@gmail.com<br>
        
      </div>

      <div class="col-lg-4 col-md-6 footer-links">
        <h4>Useful Links</h4>
        <ul>
          <li><a href="C:\Users\DNYANESHWAR KENGAR\Desktop\priva\PRIVA_LIVE\index.html">Home</a></li>
          <li><a href="C:\Users\DNYANESHWAR KENGAR\Desktop\priva\PRIVA_LIVE\about.html">About Us</a></li>
          <li><a href="C:\Users\DNYANESHWAR KENGAR\Desktop\priva\PRIVA_LIVE\customer.html">Products</a></li>
          <li><a href="C:\Users\DNYANESHWAR KENGAR\Desktop\priva\PRIVA_LIVE\contactUs.php">Contact us</a></li>
        </ul>
      </div>

      

      <div class="col-lg-4 col-md-6 footer-newsletter">
        <h4>Join Our Newsletter</h4>
        <p>Stay up to date with our latest news, promotions, and special offers by subscribing to our newsletter.
          Simply enter your email address below and we'll add you to our list. We promise to only send you
          relevant and valuable content</p>
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
      
      <a href="https://www.linkedin.com/company/privatechnologies22/" target="_blank" class="linkedin"><i class="bx bxl-linkedin"></i></a>
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




