<?php

include('layouts/header.php');

// Check if the user is logged in
$isUserLoggedIn = isset($_SESSION['user_id']);
?>

<div class="container">
    <div class="row mt-5">
        <!-- Password Generator -->
        <div class="col-lg-6 col-md-6 col-sm-12">
            <h3 class="mb-4 text-left text-uppercase" style="  font-family: 'Roboto', sans-serif; font-weight: 100;">
                password generator
            </h3>
            <div class="input-group mx-3">
                <div>
                    <input type="text" id="passwordField" class="form-control bg-transparent text-white" readonly style="width: 300px; margin:10px;">
                </div>

                <div class="input-group-append">
                    <button class="btn btn-outline-light py-4" onclick="copyPassword()" style="background: url('assets/imgs/copy.svg') no-repeat center center; background-size: contain; width: 20px; height: 20px; border: none; cursor: pointer;">
                    </button>
                </div>

                <button class="btn-generate mt-3 w-50 w-md-50" onclick="generatePassword()">GENERATE PASSWORD</button>

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
        </div>

        <!-- Password History -->
        <div class="col-lg-6 col-md-6 col-sm-12">
            <?php if ($isUserLoggedIn): ?>
                <h4 class="text-center">PASSWORD HISTORY</h4>
                <ul id="passwordHistory" class="list-group list-group-flush text-white">
                    <!-- History items will be appended here -->
                </ul>
                <p class="text-center mt-3">
                    <a href="#" class="text-light" onclick="clearHistory()">Clear history</a>
                </p>
            <?php else: ?>
                <h4 class="text-center text-danger">Please log in to view password history.</h4>
            <?php endif; ?>
        </div>

    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="js/script.js"></script>
    </body>

    </html>