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
            align: center;
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

        /* Larger labels and text boxes */
        label {
            font-size: 18px; /* Adjust font size as needed */
        }

        input[type="text"],
        input[type="password"],
        input[type="tel"],
        select {
            font-size: 18px; /* Adjust font size as needed */
            height: 40px; /* Adjust height as needed */
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
                    <li class="nav-item"><a class="nav-link" href="#" data-toggle="modal" data-target="#adminWelcomeModal"><i class="bi bi-person"></i>&nbsp;Hello Admin</a></li>
                    <li class="nav-item active"><a class="nav-link" title="View Website" href="#"><i class="bi bi-globe"></i></a></li>
                    <!-- Logout Modal -->
                    
                    <li class="nav-item"><a class="nav-link" href="/" data-toggle="modal" data-target="#logoutModal"><i class="bi bi-box-arrow-right"></i>Logout</a></li>

                    <li class="nav-item"><a class="nav-link" href="/joining"  class="bi bi-box-arrow-right"></i>Joining List</a></li>
                   
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

                    <li class="nav-item side-bar"><a class="nav-link" href="Admin_index"><i
                                class="bi bi-gear"></i>&nbsp;Add WorkShop</a></li>
                    
                
                </ul>

                </ul>
            </nav>

            <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <h2 class="mb-4">Register User</h2>
                <form action="<?= base_url('/user/store') ?>" method="post">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="username" class="form-label">Username</label>
                                <input type="text" id="username" name="username" placeholder="Username" value="<?= set_value('username') ?>" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" id="password" name="password" placeholder="Password" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="confirmpassword" class="form-label">Confirm Password</label>
                                <input type="password" id="confirmpassword" name="confirmpassword" placeholder="Confirm Password" class="form-control">
                            </div>
                        </div>
                    </div>

                    <!-- Additional form fields with labels -->
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="full_name" class="form-label">Full Name</label>
                                <input type="text" id="full_name" name="full_name" placeholder="Full Name" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="address" class="form-label">Address</label>
                                <select id="address" name="address" class="form-select">
                                    <option value="" disabled selected>Select Address</option>
                                    <option value="Centro">Centro</option>
                                    <option value="Sityo Kanluran">Sityo Kanluran </option>
                                    <option value="Sityo Silangan">Sityo Silangan</option>
                                    <option value="Sityo Labasan">Sityo Labasan</option>
                                    <option value="Boundery">Boundery </option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                        <div class="mb-3">
    <label for="contact_number" class="form-label">Contact Number</label>
    <input type="tel" id="contact_number" name="contact_number" placeholder="Contact Number" class="form-control" maxlength="11">
    <small id="contact_number_help" class="form-text text-danger d-none">Please enter a valid 11-digit contact number.</small>
</div>

<script>
    document.getElementById('contact_number').addEventListener('input', function(event) {
        let input = event.target.value;
        // Remove non-numeric characters
        let cleanedInput = input.replace(/\D/g, '');
        // Update the input field value with cleaned input
        event.target.value = cleanedInput;
        // Show error message if the input length exceeds 11 digits
        let errorMessage = document.getElementById('contact_number_help');
        if (cleanedInput.length > 11) {
            errorMessage.classList.remove('d-none');
        } else {
            errorMessage.classList.add('d-none');
        }
    });
</script>

                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="date_of_birth" class="form-label">Date of Birth</label>
                                <input type="date" id="date_of_birth" name="date_of_birth" placeholder="Date of Birth" class="form-control">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="gender" class="form-label">Gender</label>
                                <select id="gender" name="gender" class="form-select">
                                    <option value="" disabled selected>Select Gender</option>
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                    <option value="other">Other</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="occupation" class="form-label">Occupation</label>
                                <input type="text" id="occupation" name="occupation" placeholder="Occupation" class="form-control">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="membership_type" class="form-label">Membership Type</label>
                                <select id="membership_type" name="membership_type" class="form-select">
                                    <option value="" disabled selected>Select Membership Type</option>
                                    <option value="Distributer">Distributer</option>
                                    <option value="Senior Citizen">Senior Citizen</option>
                                    <option value="Officer">Officer</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="date_joined" class="form-label">Date Joined</label>
                                <input type="date" id="date_joined" name="date_joined" placeholder="Date Joined" class="form-control">
                            </div>
                        </div>
                    </div>
                    <!-- End of additional form fields -->

                    
                    <div class="row">
                        <div class="col-md-6">
                            <div class="d-grid gap-2 mt-3">
                                <button type="submit" class="neomorphic-btn">Save Account</button>
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
    <br>
    <br>
    <br>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.7/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
