<?php
session_start(); // Make sure session is started
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
            // Successful login
            session_regenerate_id(true); // Regenerate session ID for security
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['username'] = $user['username'];
            header("Location: index.php"); // Redirect to index after successful login
            exit();
        } else {
            // Password is incorrect
            $_SESSION['error'] = "Invalid password. Please try again.";
        }
    } else {
        // No user found
        $_SESSION['error'] = "No user found with the given username or email.";
    }

    // Redirect back to login.php with an error
    header("Location: login.php");
    exit();
}
