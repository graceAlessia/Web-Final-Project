function generatePassword() {
    let length = document.getElementById('lengthSlider').value;
    let includeUppercase = document.getElementById('uppercase').checked;
    let includeLowercase = document.getElementById('lowercase').checked;
    let includeNumbers = document.getElementById('numbers').checked;
    let includeSymbols = document.getElementById('symbols').checked;

    let characters = '';
    if (includeUppercase) characters += 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    if (includeLowercase) characters += 'abcdefghijklmnopqrstuvwxyz';
    if (includeNumbers) characters += '0123456789';
    if (includeSymbols) characters += '!@#$%^&*()_+[]{}|;:,.<>?';

    let password = '';
    for (let i = 0; i < length; i++) {
        password += characters.charAt(Math.floor(Math.random() * characters.length));
    }

    document.getElementById('passwordField').value = password;
    savePassword(password);
}

function savePassword(password) {
    $.post('save_history.php', { password: password }, function(data) {
        fetchHistory();
    });
}

function fetchHistory() {
    $.get('get_password_history.php', function(data) {
        let history = JSON.parse(data);
        let historyList = document.getElementById('passwordHistory');
        historyList.innerHTML = '';
        history.forEach(function(password) {
            let listItem = document.createElement('li');
            listItem.className = 'list-group-item';
            listItem.textContent = password;
            historyList.appendChild(listItem);
        });
    });
}

function clearHistory() {
    $.ajax({
        url: 'clear_history.php',
        type: 'DELETE',
        success: function(result) {
            fetchHistory();
        }
    });
}

function copyPassword() {
    var passwordField = document.getElementById("passwordField");

    passwordField.select();
    passwordField.setSelectionRange(0, 99999); // For mobile devices

    document.execCommand("copy");
}

document.getElementById('lengthSlider').oninput = function() {
    document.getElementById('sliderValue').textContent = this.value;
};

fetchHistory(); // Load history on page load
