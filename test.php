<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Generator</title>
    <link rel="stylesheet" href="path/to/your/styles.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="js/script.js"></script>
</head>

<body>
    <div class="container">
        <div class="password-generator-container p-4" style="border: 2px solid #ccc; border-radius: 8px;">
            <h3 class="mb-4 text-left text-uppercase" style="font-family: 'Roboto', sans-serif; font-weight: 100;">
                Password Generator
            </h3>
            <div class="input-group mx-3">
                <input type="text" id="passwordField" class="form-control bg-transparent text-white" readonly style="width: 300px; margin:10px;">
                <button class="btn btn-outline-light py-4" onclick="copyPassword()" style="background: url('assets/imgs/copy.svg') no-repeat center center; background-size: contain; width: 20px; height: 20px; border: none; cursor: pointer;"></button>
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
    </div>
</body>

</html>