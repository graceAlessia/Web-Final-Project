// Function to generate a password
function generatePassword() {
  const length = document.getElementById("lengthSlider").value;
  const includeUppercase = document.getElementById("uppercase").checked;
  const includeLowercase = document.getElementById("lowercase").checked;
  const includeNumbers = document.getElementById("numbers").checked;
  const includeSymbols = document.getElementById("symbols").checked;

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

// Save the password to history
function savePassword(password) {
  $.post("save_history.php", { password: password }, function () {
    fetchPasswordHistory(); // Refresh history after saving
  });
}

// Fetch and display password history
function fetchPasswordHistory() {
  $.get("get_password_history.php", function (data) {
    const history = JSON.parse(data);
    const historyList = document.getElementById("passwordHistory");
    historyList.innerHTML = "";
    history.forEach((password, index) => {
      const listItem = document.createElement("li");
      listItem.className =
        "list-group-item d-flex justify-content-between align-items-center";
      listItem.innerHTML = `
        <span>${password}</span>
        <div>
          <button class="btn btn-outline-light btn-sm btn-copy" onclick="copyToClipboard('${password}', this)" 
            style="background: url('assets/imgs/copy.svg') no-repeat center center; background-size: contain; width: 20px; height: 20px; border: none; cursor: pointer;">
          </button>
          <button class="btn btn-danger btn-sm btn-delete" onclick="deletePassword(${index})">Delete</button>
        </div>
      `;
      historyList.appendChild(listItem);
    });
  });
}

// Clear password history
function clearHistory() {
  if (confirm("Are you sure you want to clear the history?")) {
    $.ajax({
      url: "clear_history.php",
      type: "DELETE",
      success: function () {
        fetchPasswordHistory(); // Refresh history after clearing
      },
      error: function (xhr) {
        console.error("Error clearing history: " + xhr.responseText);
      },
    });
  }
}

// Copy password to clipboard with a message box
function copyToClipboard(password, element) {
  const tempInput = document.createElement("input");
  document.body.appendChild(tempInput);
  tempInput.value = password;
  tempInput.select();
  document.execCommand("copy");
  document.body.removeChild(tempInput);

  // Create a small message box near the copy button
  const copyMessage = document.createElement("div");
  copyMessage.textContent = "Password copied!";
  copyMessage.className = "copy-message";
  document.body.appendChild(copyMessage);

  // Position the message near the button
  const rect = element.getBoundingClientRect();
  copyMessage.style.position = "absolute";
  copyMessage.style.top = `${rect.top + window.scrollY - 30}px`;
  copyMessage.style.left = `${rect.left + window.scrollX}px`;
  copyMessage.style.backgroundColor = "#092047";
  copyMessage.style.color = "white";
  copyMessage.style.padding = "5px 10px";
  copyMessage.style.borderRadius = "5px";
  copyMessage.style.fontSize = "12px";
  copyMessage.style.zIndex = "1000";

  // Fade out after 2 seconds
  setTimeout(() => {
    copyMessage.style.opacity = "0";
    setTimeout(() => document.body.removeChild(copyMessage), 500);
  }, 2000);
}

// Copy password from the generator
function copyPassword() {
  const password = document.getElementById("passwordField").value;
  copyToClipboard(password, document.querySelector(".btn-outline-light"));
}

// Update slider value display
function updateSliderValue(value) {
  document.getElementById("sliderValue").textContent = value;
}

// Event listener for slider input
document.getElementById("lengthSlider").oninput = function () {
  updateSliderValue(this.value);
};

// Initialize history on page load
$(document).ready(function () {
  fetchPasswordHistory();
});
