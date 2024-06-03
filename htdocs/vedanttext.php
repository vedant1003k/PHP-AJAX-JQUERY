<?php
$servername = "localhost";
$username = "root";
$password = ""; // Default password for root in XAMPP is empty
$dbname = "try";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Prepare and bind
$stmt = $conn->prepare("INSERT INTO login (email, password) VALUES (?, ?)");
$stmt->bind_param("ss", $email, $password);

// Set parameters and execute
$email = $_POST['email'];
$password = $_POST['password'];

if ($stmt->execute()) {
    echo "New record created successfully";
} else {
    echo "Error: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>
