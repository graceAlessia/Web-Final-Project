<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/signup.css">
</head>

<body class="bg-dark text-light">
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card text-light">
                    <div class="card-header text-center">
                        <h2>SIGN UP</h2>
                    </div>
                    <div class="card-body">
                        <?php
                        // Check if there is an error and display the appropriate message
                        if (isset($_GET['error']) && $_GET['error'] == 'username_or_email_exists') {
                            echo '<div class="alert alert-danger" role="alert">Username or Email already exists. Please choose another.</div>';
                        }
                        ?>
                        <form action="signup_process.php" method="post">
                            <div class="form-group">
                                <label for="username">Username</label>
                                <input type="text" class="form-control" id="username" name="username" required>
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" id="email" name="email" required>
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" class="form-control" id="password" name="password" required>
                            </div>
                            <div class="form-group">
                                <label for="confirmPassword">Confirm Password</label>
                                <input type="password" class="form-control" id="confirmPassword" name="confirmPassword" required>
                            </div>
                            <button type="submit" class="btn btn-signup btn-block">SIGN UP</button>
                        </form>
                    </div>
                    <div class="card-footer text-center">
                        <a href="login.php" class="text-light" style="text-decoration: none;">Already have an account? Login here.</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>