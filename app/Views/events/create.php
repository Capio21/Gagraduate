
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.24.0/font/bootstrap-icons.css">
    <style>
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
                    <li class="nav-item side-bar"><a class="nav-link" href="events/create"><i
                                class="bi bi-person-circle"></i>&nbsp;Add Events</a></li>
                    <li class="nav-item side-bar"><a class="nav-link" href="admin_register"><i
                                class="bi bi-person-check"></i>&nbsp;Register a User/Member</a></li>           

                    <li class="nav-item side-bar"><a class="nav-link" href="#"><i
                                class="bi bi-gear"></i>&nbsp;Settings</a></li>
                    
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
                    <div class="row justify-content-center">
                        <div class="col-md-8">
                        
    <div class="container mt-5">
        <h1>Create Event</h1>
        <form action="/events/store" method="post">
            <div class="form-group">
                <label for="title">Title:</label>
                <input type="text" class="form-control" id="title" name="title">
            </div>
            <div class="form-group">
                <label for="description">Description:</label>
                <textarea class="form-control" id="description" name="description"></textarea>
            </div>
            <div class="form-group">
                <label for="time">Time:</label>
                <input type="datetime-local" class="form-control" id="time" name="time">
            </div>
            <div class="form-group">
                <label for="location">Location:</label>
                <input type="text" class="form-control" id="location" name="location">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>



            
        </form>

    </div>
<br>
<br>

                    </div>
                </div>
            </main>
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
</div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.7/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>