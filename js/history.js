// Function to update the slider value
function updateSliderValue(value) {
  document.getElementById("sliderValue").textContent = value;
}

// Copy password to clipboard from the password generator
function copyPassword() {
  const password = document.getElementById("passwordField").value;
  copyToClipboard(password);
}

// Copy password to clipboard
function copyToClipboard(password) {
  const tempInput = document.createElement("input");
  document.body.appendChild(tempInput);
  tempInput.value = password;
  tempInput.select();
  document.execCommand("copy");
  document.body.removeChild(tempInput);
  // alert('Password copied to clipboard');
}

// Fetch and display password history
function fetchPasswordHistory() {
  $.get("get_password_history.php", function (data) {
    let history = JSON.parse(data);
    let historyHtml = "";
    history.forEach(function (password, index) {
      historyHtml += `
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    <span>${password}</span>
                    <div>
                        <button class="btn btn-outline-light btn-sm btn-copy" onclick="copyToClipboard('${password}')" 
                            style="background: url('assets/imgs/copy.svg') no-repeat center center; background-size: contain; width: 20px; height: 20px; border: none; cursor: pointer;">
                        </button>
                        <button class="btn btn-outline-light btn-sm btn-delete" onclick="deletePassword(${index})"  style="background: url('assets/imgs/delete.svg') no-repeat center center; background-size: contain; width: 24px; height: 24px; border: none; cursor: pointer;"></button>
                    </div>
                </li>
            `;
    });
    $("#passwordHistory").html(historyHtml);
  });
}

// Delete password from history
function deletePassword(index) {
  $.ajax({
    url: "delete_password.php",
    type: "POST",
    data: {
      index: index,
    },
    success: function (response) {
      fetchPasswordHistory(); // Refresh the history after deletion
      // alert('Password deleted successfully');
    },
  });
}

// Clear password history
function clearHistory() {
  $.ajax({
    url: "clear_history.php",
    type: "DELETE",
    success: function (result) {
      fetchPasswordHistory(); // Refresh the history after clearing
      // alert('Password history cleared');
    },
    error: function (xhr) {
      alert("Error clearing history: " + xhr.responseText);
    },
  });
}

// Fetch history when the page loads
$(document).ready(function () {
  fetchPasswordHistory();
});
