<?php
$session = session();
$username = $session->get('username');
$full_name = $session->get('full_name');
?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <title>Fruitables - Vegetable Website Template</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="keywords">
        <meta content="" name="description">

        <!-- Google Web Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Raleway:wght@600;800&display=swap" rel="stylesheet"> 

        <!-- Icon Font Stylesheet -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"/>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

        <!-- Libraries Stylesheet -->
        <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">
        <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

        
<!-- Bootstrap CSS -->
<link href="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/css/bootstrap.min.css" rel="stylesheet">

<!-- Bootstrap JavaScript Bundle (includes Popper) -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>


        <!-- Customized Bootstrap Stylesheet -->
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="css/style.css" rel="stylesheet">
    </head>
    <style>
        .contact_us_green * {
  font-family: Nunito, sans-serif;
}

.contact_us_green .responsive-container-block {
  min-height: 75px;
  height: fit-content;
  width: 100%;
  display: flex;
  flex-wrap: wrap;
  justify-content: flex-start;
  margin-top: 0px;
  margin-right: auto;
  margin-bottom: 60px;
  margin-left: auto;
}

.contact_us_green input:focus {
  outline-color: initial;
  outline-style: none;
  outline-width: initial;
}

.contact_us_green textarea:focus {
  outline-color: initial;
  outline-style: none;
  outline-width: initial;
}

.contact_us_green .text-blk {
  margin-top: 0px;
  margin-right: 0px;
  margin-bottom: 0px;
  margin-left: 0px;
  line-height: 25px;
}

.contact_us_green .responsive-cell-block {
  min-height: 75px;
}

.contact_us_green .responsive-container-block.container {
  max-width: 1320px;
  margin-top: 60px;
  margin-right: auto;
  margin-bottom: 60px;
  margin-left: auto;
}

.contact_us_green .responsive-container-block.big-container {
  padding-top: 0px;
  padding-right: 50px;
  padding-bottom: 0px;
  padding-left: 50px;
}

.contact_us_green .text-blk.contactus-head {
  font-size: 40px;
  line-height: 50px;
  font-weight: 700;
  margin-top: 0px;
  margin-right: 0px;
  margin-bottom: 10px;
  margin-left: 0px;
}

.contact_us_green .text-blk.contactus-subhead {
  max-width: 385px;
  color: #939393;
  font-size: 18px;
  margin-top: 0px;
  margin-right: 0px;
  margin-bottom: 50px;
  margin-left: 0px;
}

.contact_us_green .contact-svg {
  padding-top: 0px;
  padding-right: 25px;
  padding-bottom: 0px;
  padding-left: 0px;
  width: 65px;
  height: 40px;
}

.contact_us_green .social-media-links {
  margin-top: 80px;
  margin-right: auto;
  margin-bottom: 0px;
  margin-left: auto;
  width: 250px;
  display: flex;
  justify-content: space-evenly;
}

.contact_us_green .social-svg {
  width: 35px;
  height: 35px;
}

.contact_us_green .text-box {
  display: flex;
  margin-top: 0px;
  margin-right: 0px;
  margin-bottom: 50px;
  margin-left: 0px;
}

.contact_us_green .contact-text {
  color: #939393;
}

.contact_us_green .input {
  height: 50px;
  width: 90%;
  border-top-width: 2.5px;
  border-right-width: 2.5px;
  border-bottom-width: 2.5px;
  border-left-width: 2.5px;
  border-top-style: solid;
  border-right-style: solid;
  border-bottom-style: solid;
  border-left-style: solid;
  border-top-color: #a2a2a2;
  border-right-color: #a2a2a2;
  border-bottom-color: #a2a2a2;
  border-left-color: #a2a2a2;
  border-image-source: initial;
  border-image-slice: initial;
  border-image-width: initial;
  border-image-outset: initial;
  border-image-repeat: initial;
  border-top-left-radius: 5px;
  border-top-right-radius: 5px;
  border-bottom-right-radius: 5px;
  border-bottom-left-radius: 5px;
  font-size: 16px;
  padding-top: 5px;
  padding-right: 15px;
  padding-bottom: 5px;
  padding-left: 15px;
}

.contact_us_green .textinput {
  height: 200px;
  width: 95%;
  border-top-width: 2px;
  border-right-width: 2px;
  border-bottom-width: 2px;
  border-left-width: 2px;
  border-top-style: solid;
  border-right-style: solid;
  border-bottom-style: solid;
  border-left-style: solid;
  border-top-color: #a2a2a2;
  border-right-color: #a2a2a2;
  border-bottom-color: #a2a2a2;
  border-left-color: #a2a2a2;
  border-image-source: initial;
  border-image-slice: initial;
  border-image-width: initial;
  border-image-outset: initial;
  border-image-repeat: initial;
  border-top-left-radius: 5px;
  border-top-right-radius: 5px;
  border-bottom-right-radius: 5px;
  border-bottom-left-radius: 5px;
  font-size: 16px;
  padding-top: 20px;
  padding-right: 30px;
  padding-bottom: 20px;
  padding-left: 20px;
}
@import url('https://fonts.googleapis.com/css2?family=Nunito:wght@200;300;400;600;700;800&amp;display=swap');

*,
*:before,
*:after {
  -moz-box-sizing: border-box;
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
}

body {
  margin: 0;
}

.wk-desk-1 {
  width: 8.333333%;
}

.wk-desk-2 {
  width: 16.666667%;
}

.wk-desk-3 {
  width: 25%;
}

.wk-desk-4 {
  width: 33.333333%;
}

.wk-desk-5 {
  width: 41.666667%;
}

.wk-desk-6 {
  width: 50%;
}

.wk-desk-7 {
  width: 58.333333%;
}

.wk-desk-8 {
  width: 66.666667%;
}

.wk-desk-9 {
  width: 75%;
}

.wk-desk-10 {
  width: 83.333333%;
}

.wk-desk-11 {
  width: 91.666667%;
}

.wk-desk-12 {
  width: 100%;
}

@media (max-width: 1024px) {
  .wk-ipadp-1 {
    width: 8.333333%;
  }

  .wk-ipadp-2 {
    width: 16.666667%;
  }

  .wk-ipadp-3 {
    width: 25%;
  }

  .wk-ipadp-4 {
    width: 33.333333%;
  }

  .wk-ipadp-5 {
    width: 41.666667%;
  }

  .wk-ipadp-6 {
    width: 50%;
  }

  .wk-ipadp-7 {
    width: 58.333333%;
  }

  .wk-ipadp-8 {
    width: 66.666667%;
  }

  .wk-ipadp-9 {
    width: 75%;
  }

  .wk-ipadp-10 {
    width: 83.333333%;
  }

  .wk-ipadp-11 {
    width: 91.666667%;
  }

  .wk-ipadp-12 {
    width: 100%;
  }
}

@media (max-width: 768px) {
  .wk-tab-1 {
    width: 8.333333%;
  }

  .wk-tab-2 {
    width: 16.666667%;
  }

  .wk-tab-3 {
    width: 25%;
  }

  .wk-tab-4 {
    width: 33.333333%;
  }

  .wk-tab-5 {
    width: 41.666667%;
  }

  .wk-tab-6 {
    width: 50%;
  }

  .wk-tab-7 {
    width: 58.333333%;
  }

  .wk-tab-8 {
    width: 66.666667%;
  }

  .wk-tab-9 {
    width: 75%;
  }

  .wk-tab-10 {
    width: 83.333333%;
  }

  .wk-tab-11 {
    width: 91.666667%;
  }

  .wk-tab-12 {
    width: 100%;
  }
}

@media (max-width: 500px) {
  .wk-mobile-1 {
    width: 8.333333%;
  }

  .wk-mobile-2 {
    width: 16.666667%;
  }

  .wk-mobile-3 {
    width: 25%;
  }

  .wk-mobile-4 {
    width: 33.333333%;
  }

  .wk-mobile-5 {
    width: 41.666667%;
  }

  .wk-mobile-6 {
    width: 50%;
  }

  .wk-mobile-7 {
    width: 58.333333%;
  }

  .wk-mobile-8 {
    width: 66.666667%;
  }

  .wk-mobile-9 {
    width: 75%;
  }

  .wk-mobile-10 {
    width: 83.333333%;
  }

  .wk-mobile-11 {
    width: 91.666667%;
  }

  .wk-mobile-12 {
    width: 100%;
  }
}
.contact_us_green .submit-btn {
  min-width: 290px;
  height: 60px;
  background-color: #1c3b28;
  font-size: 18px;
  font-weight: 700;
  color: white;
  border-top-width: 2px;
  border-right-width: 2px;
  border-bottom-width: 2px;
  border-left-width: 2px;
  border-top-style: none;
  border-right-style: none;
  border-bottom-style: none;
  border-left-style: none;
  border-top-color: #767676;
  border-right-color: #767676;
  border-bottom-color: #767676;
  border-left-color: #767676;
  border-image-source: initial;
  border-image-slice: initial;
  border-image-width: initial;
  border-image-outset: initial;
  border-image-repeat: initial;
  border-top-left-radius: 5px;
  border-top-right-radius: 5px;
  border-bottom-right-radius: 5px;
  border-bottom-left-radius: 5px;
  margin-top: 0px;
  margin-right: auto;
  margin-bottom: 0px;
  margin-left: auto;
  cursor: pointer;
}

.contact_us_green .btn-wrapper {
  display: flex;
  justify-content: center;
}

.contact_us_green .text-blk.input-title {
  font-size: 18px;
  font-weight: 600;
  line-height: 28px;
  margin-top: 0px;
  margin-right: 0px;
  margin-bottom: 15px;
  margin-left: 0px;
}

.contact_us_green .responsive-cell-block.wk-ipadp-6.wk-tab-12.wk-mobile-12.wk-desk-6 {
  margin-top: 0px;
  margin-right: 0px;
  margin-bottom: 30px;
  margin-left: 0px;
}

.contact_us_green .responsive-cell-block.wk-tab-12.wk-mobile-12.wk-desk-5.wk-ipadp-10 {
  padding-top: 0px;
  padding-right: 0px;
  padding-bottom: 0px;
  padding-left: 60px;
  display: flex;
  flex-direction: column;
  align-items: center;
}

.contact_us_green .head-text-box {
  display: none;
}

.contact_us_green .line {
  border-right-width: 1.8px;
  border-right-style: solid;
  border-right-color: #a2a2a2;
}

.contact_us_green .responsive-cell-block.wk-tab-12.wk-mobile-12.wk-desk-7.wk-ipadp-10.line {
  padding-top: 0px;
  padding-right: 20px;
  padding-bottom: 0px;
  padding-left: 0px;
}

@media (max-width: 1024px) {
  .contact_us_green .responsive-container-block.container {
    justify-content: center;
  }

  .contact_us_green .text-blk.contactus-subhead {
    max-width: 90%;
  }

  .contact_us_green .head-text-box {
    display: block;
  }

  .contact_us_green .responsive-cell-block.wk-tab-12.wk-mobile-12.wk-desk-7.wk-ipadp-10.line {
    padding-top: 0px;
    padding-right: 20px;
    padding-bottom: 60px;
    padding-left: 0px;
  }

  .contact_us_green .line {
    border-right-width: initial;
    border-right-style: none;
    border-right-color: initial;
    border-bottom-width: 1.8px;
    border-bottom-style: solid;
    border-bottom-color: #a2a2a2;
  }

  .contact_us_green .responsive-cell-block.wk-tab-12.wk-mobile-12.wk-desk-5.wk-ipadp-10 {
    margin-top: 60px;
    margin-right: 0px;
    margin-bottom: 0px;
    margin-left: 0px;
  }

  .contact_us_green .workik-contact-bigbox {
    display: flex;
  }

  .contact_us_green .responsive-cell-block.wk-tab-12.wk-mobile-12.wk-desk-5.wk-ipadp-10 {
    padding-top: 0px;
    padding-right: 0px;
    padding-bottom: 0px;
    padding-left: 0px;
  }
}

@media (max-width: 768px) {
  .contact_us_green .text-content {
    display: none;
  }

  .contact_us_green .input {
    width: 100%;
  }

  .contact_us_green .textinput {
    width: 100%;
  }

  .contact_us_green .text-blk.contactus-head {
    font-size: 30px;
  }
}

@media (max-width: 500px) {
  .contact_us_green .responsive-container-block.big-container {
    padding-top: 0px;
    padding-right: 20px;
    padding-bottom: 0px;
    padding-left: 20px;
  }

  .contact_us_green .workik-contact-bigbox {
    display: block;
  }

  .contact_us_green .text-blk.input-title {
    font-size: 16px;
  }

  .contact_us_green .text-blk.contactus-head {
    font-size: 26px;
  }

  .contact_us_green .text-blk.contactus-subhead {
    font-size: 16px;
    line-height: 23px;
  }

  .contact_us_green .input {
    height: 45px;
  }

  .contact_us_green .responsive-cell-block.wk-ipadp-6.wk-tab-12.wk-mobile-12.wk-desk-6 {
    margin: 0 0 25px 0;
  }
}
.button {
  background-color: green;
  border: none;
  color: black;
  padding: 15px 25px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
  border-radius: 10px;
}

.icon {
  margin-right: 10px;
}
   /* Style for the modal */
   /* Modal styles */

   .offcanvas-content {
  width: 80%; /* Adjust the width as needed */
}

.profile-details {
  text-align: center; /* Center the profile details */
}



.modal {
  display: none; 
  position: fixed; 
  z-index: 1; 
  left: 0;
  top: 0;
  width: 100%; 
  height: 100%; 
  overflow: auto; 
  background-color: rgba(0,0,0,0.4);
}

.modal-content {
  background-color: #fefefe;
  margin: 15% auto; 
  padding: 20px;
  border: 1px solid #888;
  width: 40%; 
  text-align: center;
}

.close {
  color: #aaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: black;
  text-decoration: none;
  cursor: pointer;
}


</style>
    <body>

        <!-- Spinner Start -->
        <div id="spinner" class="show w-100 vh-100 bg-white position-fixed translate-middle top-50 start-50  d-flex align-items-center justify-content-center">
            <div class="spinner-grow text-primary" role="status"></div>
        </div>
        <!-- Spinner End -->


        <!-- Navbar start -->
        <div class="container-fluid fixed-top">
            <div class="container topbar bg-primary d-none d-lg-block">
                <div class="d-flex justify-content-between">
                   
                </div>
            </div>
            <div class="container px-0">
                <nav class="navbar navbar-light bg-white navbar-expand-xl">
                    <a href="/Landing" class="navbar-brand"><h1 class="text-primary display-6">MUCOFACO</h1></a>
                    <button class="navbar-toggler py-2 px-3" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                        <span class="fa fa-bars text-primary"></span>
                    </button>
                    <div class="collapse navbar-collapse bg-white" id="navbarCollapse">
                    <div class="navbar-nav mx-auto">
                    <a href="/user" class="nav-item nav-link active">Home</a>
                            <a href="/shop" class="nav-item nav-link">Shop</a>
                            <a href="workshop" class="nav-item nav-link">Workshop</a>
                           
                            <a href="/event" class="nav-item nav-link">Events</a>
                            
                            <a href="/contact" class="nav-item nav-link">Contact</a>
                            <a href="/about" class="nav-item nav-link">About</a>
                            <a href="/reports" class="nav-item nav-link">Reports</a>
                            <a href="/" class="nav-item nav-link">Sign-out</a>
                        </div>
                       
<div></div>
<!-- Modal -->
<!-- Bootstrap button with Font Awesome icon -->
<!-- Profile button -->
<!-- Profile button as an image button -->
<button class="btn btn-primary rounded-circle" id="profileButton" type="button" style="width: 50px; height: 50px;">
    <svg xmlns="http://www.w3.org/2000/svg" width="22" height="24" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 15 16">
        <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0"/>
        <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1"/>
    </svg>
</button>






<!-- Offcanvas section -->
<div class="offcanvas offcanvas-end d-flex align-items-center justify-content-center" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
  <div class="offcanvas-content">
    <div class="offcanvas-header">

      
    </div>
    <div class="offcanvas-body">
   <!-- Profile details content -->
<div class="profile-details">
    <div class="profile-header">
        <h1>Welcome, <?php echo $full_name; ?></h1>
        <p><?php echo $username; ?></p>
        <!-- Logout Button -->
        
    </div>
</div>

<!-- Logout Modal -->



<!-- Logout Modal -->


<!-- Logout Modal -->



       
        <!-- Other content of user dashboard -->
      </div>
    </div>
  </div>
</div>


<script>
    document.getElementById('profileButton').addEventListener('click', function () {
        var offcanvasElement = document.getElementById('offcanvasRight');
        var offcanvas = new bootstrap.Offcanvas(offcanvasElement);
        offcanvas.toggle();
    });






</script>





                    </div>
                </nav>
            </div>
        </div>
        <!-- Navbar End -->

       
        <!-- Modal Search Start -->
      
                    
                    <div class="container-fluid py-5 mb-5 hero-header">
        <div class="container py-5" style="height:50px;">
            <div class="row g-5 align-items-center">
                <div class="col-md-12 col-lg-7" style="position:absolute;">
                <br><br><br><br>
                    <h4 class="mb-3 text-secondary">You can find us in this Details</h4>
                    <h1 class="mb-5 display-3 text-primary">CONTACTS</h1>
                </div>
                </div>
                </div>
    </div>
                   
                  
                    <div class="container mt-5">
                    <div class="contact_us_green">
  <div class="responsive-container-block big-container">
    <div class="responsive-container-block container">
      <div class="responsive-cell-block wk-tab-12 wk-mobile-12 wk-desk-7 wk-ipadp-10 line" id="i69b-2">
        <form class="form-box">
          <div class="container-block form-wrapper">
            <div class="head-text-box">
              <p class="text-blk contactus-head">
                Contact us
              </p>
              <p class="text-blk contactus-subhead">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna al iqua. Ut enim
              </p>
            </div>
            <div class="responsive-container-block">
              <div class="responsive-cell-block wk-ipadp-6 wk-tab-12 wk-mobile-12 wk-desk-6" id="i10mt-6">
                <p class="text-blk input-title">
                  FIRST NAME
                </p>
                <input class="input" id="ijowk-6" name="FirstName">
              </div>
              <div class="responsive-cell-block wk-desk-6 wk-ipadp-6 wk-tab-12 wk-mobile-12">
                <p class="text-blk input-title">
                  LAST NAME
                </p>
                <input class="input" id="indfi-4" name="Last Name">
              </div>
              <div class="responsive-cell-block wk-desk-6 wk-ipadp-6 wk-tab-12 wk-mobile-12">
                <p class="text-blk input-title">
                  EMAIL
                </p>
                <input class="input" id="ipmgh-6" name="Email">
              </div>
              <div class="responsive-cell-block wk-desk-6 wk-ipadp-6 wk-tab-12 wk-mobile-12">
                <p class="text-blk input-title">
                  PHONE NUMBER
                </p>
                <input class="input" id="imgis-5" name="PhoneNumber">
              </div>
              <div class="responsive-cell-block wk-tab-12 wk-mobile-12 wk-desk-12 wk-ipadp-12" id="i634i-6">
                <p class="text-blk input-title">
                  WHAT DO YOU HAVE IN MIND
                </p>
                <textarea class="textinput" id="i5vyy-6" placeholder="Please enter query..."></textarea>
              </div>
            </div>
            <div class="btn-wrapper">
              <button class="submit-btn">
                Submit
              </button>
            </div>
          </div>
        </form>
      </div>
      <div class="responsive-cell-block wk-tab-12 wk-mobile-12 wk-desk-5 wk-ipadp-10" id="ifgi">
        <div class="container-box">
          <div class="text-content">
            <p class="text-blk contactus-head">
              Contact us
            </p>
            <p class="text-blk contactus-subhead">
              Welcome MucoFam you can contact us or message in our social media
            </p>
          </div>
          <div class="workik-contact-bigbox">
            <div class="workik-contact-box">
              <div class="phone text-box">
                <img class="contact-svg" src="https://workik-widget-assets.s3.amazonaws.com/widget-assets/images/ET21.jpg">
                <p class="contact-text">
                  09267772634
                </p>
              </div>
              <div class="address text-box">
                <img class="contact-svg" src="https://workik-widget-assets.s3.amazonaws.com/widget-assets/images/ET22.jpg">
                <p class="contact-text">
                  capioallan091929@gmail.com
                </p>
              </div>
              <div class="mail text-box">
                <img class="contact-svg" src="https://workik-widget-assets.s3.amazonaws.com/widget-assets/images/ET23.jpg">
                <p class="contact-text">
                 Mulawin Naujan Oriental Mindoro
                </p>
              </div>
            </div>
            <div class="social-media-links">
              <a href="">
                <img class="social-svg" id="is9ym" src="https://workik-widget-assets.s3.amazonaws.com/widget-assets/images/gray-mail.svg">
              </a>
              <a href="">
                <img class="social-svg" id="i706n" src="https://workik-widget-assets.s3.amazonaws.com/widget-assets/images/gray-twitter.svg">
              </a>
              <a href="">
                <img class="social-svg" id="ib9ve" src="https://workik-widget-assets.s3.amazonaws.com/widget-assets/images/gray-insta.svg">
              </a>
              <a href="https://www.facebook.com/profile.php?id=61550955003982">
                <img class="social-svg" id="ie9fx" src="https://workik-widget-assets.s3.amazonaws.com/widget-assets/images/gray-fb.svg">
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
   

        </div>
        <!-- Hero End -->
       
        <!-- Featurs Section Start -->
        

        
        <!-- Back to Top -->
        <a href="#" class="btn btn-primary border-3 border-primary rounded-circle back-to-top"><i class="fa fa-arrow-up"></i></a>   

        
    <!-- JavaScript Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/lightbox/js/lightbox.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>


    <!-- Template Javascript -->
    <script src="js/main.js"></script>
    
    </body>

</html>


