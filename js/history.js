// Copy password to clipboard
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
                <button class="btn btn-outline-light btn-sm btn-copy" onclick="copyToClipboard('${password}', this)" 
                    style="background: url('assets/imgs/copy.svg') no-repeat center center; background-size: contain; width: 20px; height: 20px; border: none; cursor: pointer;">
                </button>
                <button class="btn btn-outline-light btn-sm btn-delete" onclick="deletePassword(${index})" 
                    style="background: url('assets/imgs/delete.svg') no-repeat center center; background-size: contain; width: 24px; height: 24px; border: none; cursor: pointer;">
                </button>
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
