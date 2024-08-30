<?php include('layouts/header.php') ?>

<div class="container">
    <div class="row mt-5">
        <!-- Password Generator -->
        <div class="col-lg-6 col-md-6 col-sm-12">
            <h3 class="mb-4 text-left text-uppercase" style=" letter-spacing: 15px;  font-family: 'Roboto', sans-serif; font-weight: 100;">
                password <br> <span style="margin-left: 20px;">generator</span>
            </h3>
            <div class="input-group mb-3">
                <input type="text" id="passwordField" class="form-control bg-transparent text-white" readonly>
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
        <div class="col-lg-6 col-md-6 col-sm-12">
            <h4 class="text-center">PASSWORD HISTORY</h4>
            <ul id="passwordHistory" class="list-group list-group-flush text-white">
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