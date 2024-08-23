<?php
session_start();

// Regenerate session ID to prevent session fixation
if (!isset($_SESSION['initialized'])) {
    session_regenerate_id(true);
    $_SESSION['initialized'] = true;
}

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "password_generator_db";

// Create connection with the database
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Generate a secure session token for non-logged-in users if not already set
if (!isset($_SESSION['session_token'])) {
    $_SESSION['session_token'] = bin2hex(random_bytes(32));
}

?>
