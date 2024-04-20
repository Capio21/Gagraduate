<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>E-commerce System Login</title>

    <style>
        body {
            /* Remove the background-color property */
            background-image: url('cococo.jpg'); /* Replace 'background.jpg' with the path to your image */
            background-size: cover; /* Make sure the background image covers the entire viewport */
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .form-container {
            background-color: rgba(255, 255, 255, 0.9); /* White background color with transparency */
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.1); /* Box shadow for depth */
        }

        .login-logo {
            text-align: center;
            margin-bottom: 20px;
        }

        .login-logo img {
            max-width: 150px;
            height: auto;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="form-container">
                    <div class="login-logo">
                        <img src="logo.png" alt="E-commerce Logo">
                    </div>
                    <h2 class="text-center mb-4">LOG IN TO YOUR ACCOUNT</h2>
                    <?php if(session()->getFlashdata('msg')): ?>
                        <div class="alert alert-warning">
                            <?= session()->getFlashdata('msg') ?>
                        </div>
                    <?php endif; ?>
                    <form action="<?php echo base_url(); ?>/signin/loginAuth" method="post">
                        <div class="mb-3">
                            <input type="text" name="username" placeholder="Username or Email" value="<?= set_value('username') ?>" class="form-control" required>
                        </div>
                        <div class="mb-3">
    <input type="password" name="password" id="password" placeholder="Password" class="form-control" required>
    <input type="checkbox" onclick="togglePasswordVisibility()"> Show Password
</div>
                        
                        <div class="d-grid">
                            <button type="submit" class="btn btn-primary btn-lg">Log In</button>
                        </div>
                    </form>

                    <!-- Add the Register Account button -->
                    <div class="text-center mt-3">
                        <p>Don't have an account yet? <a href="/register">Sign up here</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
    function togglePasswordVisibility() {
        var passwordField = document.getElementById("password");
        if (passwordField.type === "password") {
            passwordField.type = "text";
        } else {
            passwordField.type = "password";
        }
    }
</script>
</body>
</html>
