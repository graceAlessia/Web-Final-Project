function generatePassword() {
  let length = document.getElementById("lengthSlider").value;
  let includeUppercase = document.getElementById("uppercase").checked;
  let includeLowercase = document.getElementById("lowercase").checked;
  let includeNumbers = document.getElementById("numbers").checked;
  let includeSymbols = document.getElementById("symbols").checked;

  let characters = "";
  if (includeUppercase) characters += "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
  if (includeLowercase) characters += "abcdefghijklmnopqrstuvwxyz";
  if (includeNumbers) characters += "0123456789";
  if (includeSymbols) characters += "!@#$%^&*()_+[]{}|;:,.<>?";

  let password = "";
  for (let i = 0; i < length; i++) {
    password += characters.charAt(
      Math.floor(Math.random() * characters.length)
    );
  }

  document.getElementById("passwordField").value = password;

  // Save the generated password to history
  savePassword(password);
}

function savePassword(password) {
  $.post("save_history.php", { password: password }, function (data) {
    fetchPasswordHistory(); // Refresh history after saving
  });
}

function fetchPasswordHistory() {
  $.get("get_password_history.php", function (data) {
    let history = JSON.parse(data);
    let historyList = document.getElementById("passwordHistory");
    historyList.innerHTML = "";
    history.forEach(function (password, index) {
      let listItem = document.createElement("li");
      listItem.className =
        "list-group-item d-flex justify-content-between align-items-center";
      listItem.innerHTML = `
              <span>${password}</span>
              <div>
                  <button class="btn btn-outline-light btn-sm btn-copy" onclick="copyToClipboard('${password}')" 
                      style="background: url('assets/imgs/copy.svg') no-repeat center center; background-size: contain; width: 20px; height: 20px; border: none; cursor: pointer;">
                  </button>
                  <button class="btn btn-danger btn-sm btn-delete" onclick="deletePassword(${index})">Delete</button>
              </div>
          `;
      historyList.appendChild(listItem);
    });
  });
}

function clearHistory() {
  $.ajax({
    url: "clear_history.php",
    type: "DELETE",
    success: function (result) {
      fetchPasswordHistory(); // Refresh history after clearing
    },
    error: function (xhr) {
      alert("Error clearing history: " + xhr.responseText);
    },
  });
}

function copyToClipboard(password) {
  const tempInput = document.createElement("input");
  document.body.appendChild(tempInput);
  tempInput.value = password;
  tempInput.select();
  document.execCommand("copy");
  document.body.removeChild(tempInput);
  // alert("Password copied to clipboard");
}

document.getElementById("lengthSlider").oninput = function () {
  document.getElementById("sliderValue").textContent = this.value;
};

// Initialize history on page load
$(document).ready(function () {
  fetchPasswordHistory();
});
