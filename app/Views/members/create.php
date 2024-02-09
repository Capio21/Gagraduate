


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
                    <li class="nav-item side-bar"><a class="nav-link" href="/"><i
                                class="bi bi-person-circle"></i>&nbsp;Add Events</a></li>
                    <li class="nav-item side-bar"><a class="nav-link" href="register"><i
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
                          

                        <a href="/members" id="signup-link" class="btn btn-secondary mt-3">Back</a>
    <h2>Add Member</h2> 

<form action="/submit" method="post">
    <div class="mb-3">
        <label for="username" class="form-label">Username:</label>
        <input type="text" class="form-control" name="username" required>
    </div>

    <div class="mb-3">
        <label for="email" class="form-label">Email:</label>
        <input type="email" class="form-control" name="email" required>
    </div>

    <div class="mb-3">
        <label for="password" class="form-label">Password:</label>
        <input type="password" class="form-control" name="password" required>
    </div>

    <div class="mb-3">
        <label for="full_name" class="form-label">Full Name:</label>
        <input type="text" class="form-control" name="full_name" required>
    </div>

    <div class="mb-3">
        <label for="address" class="form-label">Address:</label>
        <input type="text" class="form-control" name="address" required>
    </div>

    <div class="row mb-3">
        <div class="col">
            <label for="contact_number" class="form-label">Contact Number:</label>
            <input type="text" class="form-control" name="contact_number" required>
        </div>
        <div class="col">
            <label for="date_of_birth" class="form-label">Date of Birth:</label>
            <input type="date" class="form-control" name="date_of_birth" required>
        </div>
    </div>

    <div class="row mb-3">
        <div class="col">
            <label for="gender" class="form-label">Gender:</label>
            <select class="form-select" name="gender" required>
                <option value="male">Male</option>
                <option value="female">Female</option>
            </select>
        </div>
        <div class="col">
            <label for="occupation" class="form-label">Occupation:</label>
            <input type="text" class="form-control" name="occupation" required>
        </div>
    </div>

    <div class="row mb-3">
        <div class="col">
            <label for="date_joined" class="form-label">Date Joined:</label>
            <input type="date" class="form-control" name="date_joined" required>
        </div>
        <div class="col">
            <label for="membership_type" class="form-label">Membership Type:</label>
            <input type="text" class="form-control" name="membership_type" required>
        </div>
    </div>
   
    <button type="submit" class="btn btn-primary">Submit in the Admin</button> 

    
</form>
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
