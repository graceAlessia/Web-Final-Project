<?php
require 'server/db_connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Retrieve user from database
    $sql = "SELECT id, username, password_hash FROM users WHERE username=? OR email=?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $username, $username);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows === 1) {
        $user = $result->fetch_assoc();
        if (password_verify($password, $user['password_hash'])) {
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['username'] = $user['username'];
            header("Location: index.php");
            exit();
        } else {
            echo "Invalid password.";
        }
    } else {
        echo "No user found.";
    }

    $stmt->close();
    $conn->close();
}
