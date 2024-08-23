<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Generator</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body class="bg-dark text-light">
    <nav class="navbar navbar-expand-lg" style="background-color: #121212; border-bottom: 2px solid #00ff99; box-shadow: 0 0 10px #00ff99;">
        <a class="navbar-brand" href="#" style="color: #00ff99; text-shadow: 0 0 10px #00ff99, 0 0 20px #00ff99;">Password Generator</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="login.php" style="color: #00ff99; text-shadow: 0 0 10px #00ff99, 0 0 20px #00ff99;">Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="signup.php" style="color: #00ff99; text-shadow: 0 0 10px #00ff99, 0 0 20px #00ff99;">Signup</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="logout.php" style="color: #00ff99; text-shadow: 0 0 10px #00ff99, 0 0 20px #00ff99;">Logout</a>
                </li>
            </ul>
        </div>
    </nav>


    <div class="container">
        <div class="row mt-5">
            <!-- Password Generator -->
            <div class="col-md-8">
                <h1 class="mb-4 text-center">PASSWORD GENERATOR</h1>
                <div class="input-group mb-3">
                    <input type="text" id="passwordField" class="form-control bg-dark text-white" readonly>
                    <div class="input-group-append">
                        <button class="btn btn-outline-light" onclick="copyPassword()"><i class="fas fa-copy"></i></button>
                    </div>
                </div>
                <button class="btn btn-outline-light mt-3 btn-block" onclick="generatePassword()">GENERATE PASSWORD</button>
                
                <div class="mt-4">
                    <label for="lengthSlider">PASSWORD LENGTH</label>
                    <input type="range" id="lengthSlider" class="custom-range" min="8" max="20" value="14" oninput="updateSliderValue(this.value)">
                    <span id="sliderValue" class="d-block mt-2 text-center">14</span>
                </div>

                <div class="d-flex justify-content-around mt-3">
                    <div>
                        <label class="d-block">Uppercase letters</label>
                        <input type="checkbox" id="uppercase" checked>
                    </div>
                    <div>
                        <label class="d-block">Lowercase letters</label>
                        <input type="checkbox" id="lowercase" checked>
                    </div>
                    <div>
                        <label class="d-block">Numbers</label>
                        <input type="checkbox" id="numbers" checked>
                    </div>
                    <div>
                        <label class="d-block">Symbols</label>
                        <input type="checkbox" id="symbols" checked>
                    </div>
                </div>
            </div>

            <!-- Password History -->
            <div class="col-md-4">
                <h4 class="text-center">PASSWORD HISTORY</h4>
                <ul id="passwordHistory" class="list-group list-group-flush bg-dark text-white">
                    <!-- History will be appended here -->
                </ul>
                <p class="text-center mt-3">
                    <a href="#" class="text-light" onclick="clearHistory()">Clear history</a>
                </p>
            </div>

        </div>
    </div>

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="js/script.js"></script>
</body>
</html>
