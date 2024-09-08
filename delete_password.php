<?php
session_start();
include 'server/db_connection.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $index = $_POST['index'];

    if (isset($_SESSION['user_id'])) {
        $user_id = $_SESSION['user_id'];
        // Fetch password history to get the specific password to delete
        $stmt = $conn->prepare("SELECT id FROM password_history WHERE user_id = ? ORDER BY created_at DESC LIMIT 1 OFFSET ?");
        $stmt->bind_param("ii", $user_id, $index);
    } else {
        $session_token = $_SESSION['session_token'];
        $stmt = $conn->prepare("SELECT id FROM password_history WHERE session_token = ? ORDER BY created_at DESC LIMIT 1 OFFSET ?");
        $stmt->bind_param("si", $session_token, $index);
    }

    $stmt->execute();
    $result = $stmt->get_result();
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $password_id = $row['id'];

        // Now delete the password
        $delete_stmt = $conn->prepare("DELETE FROM password_history WHERE id = ?");
        $delete_stmt->bind_param("i", $password_id);

        if ($delete_stmt->execute()) {
            echo "Password deleted successfully";
        } else {
            echo "Error: " . $delete_stmt->error;
        }

        $delete_stmt->close();
    } else {
        echo "Password not found";
    }

    $stmt->close();
}

$conn->close();
