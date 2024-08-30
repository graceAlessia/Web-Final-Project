<?php
include 'server/db_connection.php';

function decryptPassword($encrypted)
{
    $encryption_key = base64_decode('your_secret_key_here');
    list($encrypted_data, $iv) = explode('::', base64_decode($encrypted), 2);
    return openssl_decrypt($encrypted_data, 'aes-256-cbc', $encryption_key, 0, $iv);
}

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    if (isset($_SESSION['user_id'])) {
        $user_id = $_SESSION['user_id'];
        $stmt = $conn->prepare("SELECT password FROM password_history WHERE user_id = ? ORDER BY created_at DESC");
        $stmt->bind_param("i", $user_id);
    } else {
        $session_token = $_SESSION['session_token'];
        $stmt = $conn->prepare("SELECT password FROM password_history WHERE session_token = ? ORDER BY created_at DESC");
        $stmt->bind_param("s", $session_token);
    }

    $stmt->execute();
    $result = $stmt->get_result();
    $history = [];
    while ($row = $result->fetch_assoc()) {
        $history[] = decryptPassword($row['password']);
    }
    echo json_encode($history);
    $stmt->close();
}

$conn->close();
