



<!DOCTYPE html>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.24.0/font/bootstrap-icons.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa; /* Light gray background color */
            padding: 20px;
        }

        .form-container {
            background-color: #ffffff; /* White background color */
            border-radius: 10px;
            padding: 30px;
            box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.1); /* Box shadow for depth */
        }

        .form-title {
            text-align: center;
            margin-bottom: 30px;
        }

        .form-label {
            font-weight: bold;
        }

        .form-control {
            border-radius: 8px;
            border: 1px solid #ced4da;
            padding: 10px;
        }

        .submit-btn {
            border: none;
            padding: 12px 24px;
            border-radius: 8px;
            background-color: #007bff; /* Blue submit button */
            color: #fff; /* White text color */
            font-weight: bold;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .submit-btn:hover {
            background-color: #0056b3; /* Darker blue on hover */
        }
     body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa; /* Light gray background color */
            padding: 20px;
        }

        .form-container {
            background-color: #ffffff; /* White background color */
            border-radius: 10px;
            padding: 30px;
            box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.1); /* Box shadow for depth */
        }

        .form-title {
            text-align: center;
            margin-bottom: 30px;
        }

        .form-label {
            font-weight: bold;
        }

        .form-control {
            border-radius: 8px;
            border: 1px solid #ced4da;
            padding: 10px;
        }

        .submit-btn {
            border: none;
            padding: 12px 24px;
            border-radius: 8px;
            background-color: #007bff; /* Blue submit button */
            color: #fff; /* White text color */
            font-weight: bold;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .submit-btn:hover {
            background-color: #0056b3; /* Darker blue on hover */
        }


        
        body {
            padding-top: 80px;
        }

        #sidebar {
            position: fixed;
            top: 50px;
            left: 0;
            width: 220px;
            border: none;
            border-radius: 0;
            overflow-y: auto;
            background-color: #222;
            bottom: 0;
            overflow-x: hidden;
            padding-bottom: 40px;
        }

        .side-bar li a {
            color: #eee;
            width: 220px;
            display: block;
            padding: 15px;
            text-decoration: none;
        }

        .side-bar li a:hover,
        .side-bar li a:focus {
            background-color: #333;
        }

        .tmargin {
            margin-top: 15px;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="/">Admin Panel</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav ml-auto">
                   
                    


<!-- Your HTML content -->
<li class="nav-item"><a class="nav-link" href="#" data-toggle="modal" data-target="#adminWelcomeModal"><i class="bi bi-person"></i>&nbsp;Hello Admin</a></li>




                    <li class="nav-item active"><a class="nav-link" title="View Website" href="#"><i class="bi bi-globe"></i></a></li>
                    <!-- Logout Modal -->
                    <li class="nav-item"><a class="nav-link" href="/" data-toggle="modal" data-target="#logoutModal"><i class="bi bi-box-arrow-right"></i>Logout</a></li>
                    <li class="nav-item"><a class="nav-link" href="/joining"  class="bi bi-box-arrow-right"></i>Joining List</a></li>
                    <li class="nav-item"><a class="nav-link" href="/orders"  class="bi bi-box-arrow-right"></i>Order List</a></li>
                    <li class="nav-item"><a class="nav-link" href="/documentaries"  class="bi bi-box-arrow-right"></i>Documents</a></li>
                    
                    <li class="nav-item"><a class="nav-link" href="/upload"  class="bi bi-box-arrow-right"></i>  <svg xmlns="http://www.w3.org/2000/svg" width="31" height="30" fill="currentColor" class="bi bi-upload" viewBox="0 0 20 16">
  <path d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5"/>
  <path d="M7.646 1.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 2.707V11.5a.5.5 0 0 1-1 0V2.707L5.354 4.854a.5.5 0 1 1-.708-.708z"/>
</svg></a></li>
                   
                    <!-- Button trigger modal -->


<!-- Modal -->
<!-- Button trigger modal -->
<!-- Button trigger modal -->


<!-- Modal -->




                   
                </ul>
            </div>
        </div>
    </nav>

    <div class="container-fluid">
        <div class="row">
            <nav id="sidebar" class="col-md-3">
                <div class="container-fluid tmargin">
                    <div class="input-group">
                        <button class="btn btn-default"><i class="bi bi-search"></i></button>
                    </div>
                </div>

                <ul class="nav flex-column side-bar">

                    <li class="nav-item side-bar tmargin"><a class="nav-link" href="/admin"><i
                                class="bi bi-house"></i>&nbsp;Dashboard</a></li>
                    <li class="nav-item side-bar"><a class="nav-link" href="/members"><i
                                class="bi bi-flag"></i>&nbsp;Member Master List </a></li>
                    <li class="nav-item side-bar"><a class="nav-link" href="/insert"><i
                                class="bi bi-star"></i>&nbsp;Add Product</a></li>
                    <li class="nav-item side-bar"><a class="nav-link" href="create"><i
                                class="bi bi-person-circle"></i>&nbsp;Add Events</a></li>
                    <li class="nav-item side-bar"><a class="nav-link" href="admin_register"><i
                                class="bi bi-person-check"></i>&nbsp;Register a User/Member</a></li>           

                    <li class="nav-item side-bar"><a class="nav-link" href="Admin_index"><i
                                class="bi bi-gear"></i>&nbsp;Add WorkShop</a></li>

                    
                    
                
                </ul>
                    <!-- ... other menu items ... -->
                </ul>
            </nav>

             <main role="main" class="col-md-9 ml-sm-auto col-lg-9 px-4 animated bounce" style="margin-right:110px;">
                <h1 class="page-header">Dashboard</h1>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><i class="bi bi-house-door"></i>&nbsp;Home</li>
                    <li class="breadcrumb-item"><a href="#"><i class="bi bi-list"></i>Dashboard</a></li>
                </ul>
                <div class="container mt-5">
                <div class="container">
                <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="form-container">
                    <h2 class="form-title">Edit Documentary</h2>
                    <form action="/documentaries/update/<?= $documentary['id']; ?>" method="post">
                        <div class="mb-3">
                            <label class="form-label">Title:</label>
                            <input type="text" name="title" value="<?= $documentary['title']; ?>" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Description:</label>
                            <textarea name="description" class="form-control" rows="4"><?= $documentary['description']; ?></textarea>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Date:</label>
                            <input type="date" name="date" value="<?= $documentary['date']; ?>" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Image:</label>
                            <input type="text" name="image" value="<?= $documentary['image']; ?>" class="form-control">
                        </div>
                        <div class="d-grid">
                            <input type="submit" value="Update" class="submit-btn">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>  

    <!-- Logout Modal -->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="logoutModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="logoutModalLabel">Logout Confirmation</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>Are you sure you want to logout?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    <a href="/" class="btn btn-primary">Logout</a>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="adminWelcomeModal" tabindex="-1" aria-labelledby="adminWelcomeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="adminWelcomeModalLabel">Welcome, Admin!</h5>
        <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p>Hello Admin, welcome to our website! Thank you for visiting.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>


  




    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.7/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
