<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/login.css">
</head>

<body>
    <div class="container justify-content-center custom-mt">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header text-center">
                        <h2>LOGIN</h2>
                    </div>
                    <div class="card-body">
                        <!-- Display error message -->
                        <?php
                        session_start();
                        if (isset($_SESSION['error'])) {
                            echo "<div class='alert alert-danger text-center'>" . $_SESSION['error'] . "</div>";
                            unset($_SESSION['error']); // Clear error message after showing it
                        }
                        ?>
                        <form action="login_process.php" method="post">
                            <div class="form-group">
                                <label for="username">Username or Email</label>
                                <input type="text" class="form-control" id="username" name="username" required>
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" class="form-control" id="password" name="password" required>
                            </div>
                            <button type="submit" class="btn btn-login btn-block">LOGIN</button>
                        </form>
                    </div>
                    <div class="card-footer text-center">
                        <a href="signup.php" class="text-light" style="text-decoration: none;">Don't have an account? Sign up here.</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>