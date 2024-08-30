<?php
include 'server/db_connection.php';

if ($_SERVER['REQUEST_METHOD'] === 'DELETE') {
    if (isset($_SESSION['user_id'])) {
        $user_id = $_SESSION['user_id'];
        $stmt = $conn->prepare("DELETE FROM password_history WHERE user_id = ?");
        $stmt->bind_param("i", $user_id);
    } else {
        $session_token = $_SESSION['session_token'];
        $stmt = $conn->prepare("DELETE FROM password_history WHERE session_token = ?");
        $stmt->bind_param("s", $session_token);
    }

    if ($stmt->execute()) {
        echo "History cleared successfully";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
}

$conn->close();
