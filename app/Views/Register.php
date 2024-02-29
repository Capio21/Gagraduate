<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registration Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
       body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
        }

        .container {
            background-color: #ffffff;
            border-radius: 15px;
            padding: 40px;
            box-shadow: 0px 10px 15px rgba(0, 0, 0, 0.1);
        }

        .form-label {
            font-weight: bold;
            color: #495057;
        }

        .form-control {
            border-radius: 8px;
            border: 1px solid #ced4da;
            padding: 10px;
        }

        .neomorphic-btn {
            border: none;
            padding: 12px 24px;
            cursor: pointer;
            border-radius: 8px;
            background-color: #ffffff;
            box-shadow: 8px 8px 15px #d9d9d9, -8px -8px 15px #ffffff;
            color: #495057;
            font-weight: bold;
            transition: all 0.3s ease;
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
