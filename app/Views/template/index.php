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

        


        <!-- Customized Bootstrap Stylesheet -->
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="css/style.css" rel="stylesheet">
    </head>
    <style>
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
                        </div>
                       

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
         <!-- Button trigger modal -->
<!-- Button to trigger the modal -->



<!-- Modal -->

         
<!-- Logout Modal -->



         
        </div>

       
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
      
        <!-- Modal Search End -->


        <!-- Hero Start -->
        <div class="container-fluid py-5 mb-5 hero-header">
            <div class="container py-5">
                <div class="row g-5 align-items-center">
                    
                    <div class="col-md-12 col-lg-7">
                        <h4 class="mb-3 text-secondary">Mulawin Coconut Farmers Coop.</h4>
                        <h1 class="mb-5 display-3 text-primary">Workshop and Products</h1>
                  
                    </div>
                    
                    
                    <a class="button" href="https://www.facebook.com/messages/t/61550955003982"> 
  <i class="fab fa-facebook-messenger icon"></i>
  Message Us
</a>
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/-VTFszV2uCQ" frameborder="0" allowfullscreen></iframe>
                            </button>
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

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
    </body>

</html>


