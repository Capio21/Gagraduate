<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registration Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .neomorphic-btn {
            border: none;
            padding: 10px 20px;
            cursor: pointer;
            border-radius: 5px;
            background-color: #fff;
            box-shadow: 3px 3px 5px #bfbfbf, -3px -3px 5px #ffffff;
        }
        .neomorphic-btn:hover {
            box-shadow: 2px 2px 3px #bfbfbf, -2px -2px 3px #ffffff;
        }
    </style>
</head>
<body>
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
                                    <option value="address1">Address 1</option>
                                    <option value="address2">Address 2</option>
                                    <option value="address3">Address 3</option>
                                    <option value="address4">Address 4</option>
                                    <option value="address5">Address 5</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="contact_number" class="form-label">Contact Number</label>
                                <input type="tel" id="contact_number" name="contact_number" placeholder="Contact Number" class="form-control">
                            </div>
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
                                    <option value="basic">Basic</option>
                                    <option value="premium">Premium</option>
                                    <option value="vip">VIP</option>
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
                            <div class="mb-3">
                                <label for="confirmpassword" class="form-label">Confirm Password</label>
                                <input type="password" id="confirmpassword" name="confirmpassword" placeholder="Confirm Password" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="d-grid gap-2 mt-3">
                                <button type="submit" class="neomorphic-btn">Save Account</button>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="d-grid gap-2 mt-3">
                                <a href="/" class="neomorphic-btn">Login Account</a>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <br>
    <br>
</body>
</html>
