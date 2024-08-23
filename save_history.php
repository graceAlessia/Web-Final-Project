<?php
include 'db_connection.php';

// Password encryption and storage logic
function encryptPassword($password) {
    $encryption_key = base64_decode('your_secret_key_here');
    $iv = openssl_random_pseudo_bytes(openssl_cipher_iv_length('aes-256-cbc'));
    $encrypted = openssl_encrypt($password, 'aes-256-cbc', $encryption_key, 0, $iv);
    return base64_encode($encrypted . '::' . $iv);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $password = encryptPassword($_POST['password']);

    if (isset($_SESSION['user_id'])) {
        $user_id = $_SESSION['user_id'];
        $stmt = $conn->prepare("INSERT INTO password_history (user_id, password) VALUES (?, ?)");
        $stmt->bind_param("is", $user_id, $password);
    } else {
        $session_token = $_SESSION['session_token'];
        $stmt = $conn->prepare("INSERT INTO password_history (session_token, password) VALUES (?, ?)");
        $stmt->bind_param("ss", $session_token, $password);
    }

    if ($stmt->execute()) {
        echo "Password stored successfully";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
}

$conn->close();
?>
