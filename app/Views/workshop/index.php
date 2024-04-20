


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
          .workshop-image {
            max-width: 100px;
            height: auto;
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
                       
                    </div>
                </nav>
            </div>
        </div>
        <!-- Navbar End -->




    <div class="container-fluid py-5 mb-5 hero-header">
        <div class="container py-5" style="height:50px;">
            <div class="row g-5 align-items-center">
                <div class="col-md-12 col-lg-7" style="position:absolute;">
                <br><br><br><br>
                    <h4 class="mb-3 text-secondary">TRAINING/WORKSHOP</h4>
                    <h1 class="mb-5 display-3 text-primary">WORKSHOP UPDATE</h1>
                </div>
                </div>
                </div>
    </div>
<div class="container">
       
        <div class="row">
    <?php foreach ($workshops as $workshop): ?>
        <div class="col-md-6 col-lg-4 mb-4">
            <div class="card">
                <img src="<?= base_url($workshop['image_url']) ?>" class="card-img-top workshop-image" alt="Workshop Image">
                <div class="card-body">
                    <h5 class="card-title"><?= $workshop['title'] ?></h5>
                    <p class="card-text"><?= $workshop['description'] ?></p>
                    <p class="card-text"><strong>Date:</strong> <?= $workshop['date'] ?></p>
                    <?php if (!empty($workshop['additional_info'])): ?>
                        <p class="card-text"><strong>Additional Info:</strong> <?= $workshop['additional_info'] ?></p>
                    <?php endif; ?>
                    <button type="button" class="btn btn-primary btn-join"
                            data-title="<?= $workshop['title'] ?>"
                            data-description="<?= $workshop['description'] ?>"
                            data-date="<?= $workshop['date'] ?>"
                            data-toggle="modal" data-target="#exampleModalCenter">
                        Join
                    </button>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</div>


<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Add New Joining</h5>
        
        <div class="modal-body">
  
    <form action="/joining" method="post" class="row g-3">
     <h5 id="workshop-title" name="title"></h5>
    <p id="workshop-description" name="description"></p>
    <input type="hidden" id="workshop-title" name="title">
            <input type="text" id="workshop-description" name="description" style="border:none;" readonly>
            <input type="text" id="workshop-date" name="date" style="border:none; position:absolute; margin-top:112px; margin-left:50px; width:100px;" readonly>
    <p><strong>Date:</strong> <span id="workshop-date" name="date"></span></p>
        <div class="col-md-6">
            <label for="name" class="form-label">Name:</label>
            <input type="text" id="name" name="name" class="form-control">
            <label for="middle_name" class="form-label">Middle Name:</label>
            <input type="text" id="middle_name" name="middle_name" class="form-control">
            <label for="age" class="form-label">Age:</label>
            <input type="number" id="age" name="age" class="form-control">
        </div>
        <!-- Second Column -->
        <div class="col-md-6">
            <label for="sex" class="form-label">Sex:</label>
            <select id="sex" name="sex" class="form-select">
                <option value="Male">Male</option>
                <option value="Female">Female</option>
                <option value="Others">Others</option>
            </select>
            <label for="location" class="form-label">Location:</label>
            <input type="text" id="location" name="location" class="form-control">
            <label for="contact_number" class="form-label">Contact Number:</label>
            <input type="text" id="contact_number" name="contact_number" class="form-control" pattern="\d{11}" date="Please enter 11 digits." maxlength="11">
        </div>
        <div class="col-12">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
</div>

      </div>
    </div>
  </div>
</div>



        


        <!-- Modal Search Start -->
        <div class="modal fade" id="searchModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-fullscreen">
                <div class="modal-content rounded-0">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Search by keyword</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body d-flex align-items-center">
                        <div class="input-group w-75 mx-auto d-flex">
                            <input type="search" class="form-control p-3" placeholder="keywords" aria-describedby="search-icon-1">
                            <span id="search-icon-1" class="input-group-text p-3"><i class="fa fa-search"></i></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal Search End -->
        


<!-- Modal -->


<!-- Display existing joinings -->


    
        <!-- Hero End -->


        <!-- Featurs Section Start -->
        
        <!-- Featurs Section End -->

        <!-- Copyright End -->


<div class="modal fade" id="joinModal" tabindex="-1" role="dialog" aria-labelledby="joinModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="joinModalLabel">Join Us</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="/joinings" method="post">
          <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" name="name">
          </div>
          <!-- Add other form fields for middle name, age, sex, location, contact number, additional info here -->
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>
    </div>
  </div>
</div>
        <!-- Back to Top -->
        <a href="#" class="btn btn-primary border-3 border-primary rounded-circle back-to-top"><i class="fa fa-arrow-up"></i></a>   

        <!-- jQuery -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

<!-- Bootstrap JS Bundle (including Popper.js) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>

<!-- Your custom JavaScript code -->
<script>
    $(document).ready(function(){
        // Listen for click event on the "Join" button
        $('.btn-join').click(function(){
            // Get workshop details from the data attributes
            var title = $(this).data('title');
            var description = $(this).data('description');
            var date = $(this).data('date');
            
            // Set modal content with workshop details
            $('#exampleModalCenter .modal-title').text(title);
            $('#exampleModalCenter #workshop-title').val(title);
            $('#exampleModalCenter #workshop-description').val(description);
            $('#exampleModalCenter #workshop-date').val(date);
            
            // Trigger the modal to open
            $('#exampleModalCenter').modal('show');
        });
    });
</script>



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


