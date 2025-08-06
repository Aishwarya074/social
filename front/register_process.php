<?php
session_start();

// DB connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "service";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Client DB Connection failed: " . $conn->connect_error);
}

// Only allow POST requests
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Sanitize and collect input data
    $name     = trim($_POST['name']);
    $email    = trim($_POST['email']);
    $password = $_POST['password'];

    // Validate inputs
    if (empty($name) || empty($email) || empty($password)) {
        die("All fields are required.");
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        die("Invalid email format.");
    }

    // Hash password
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    // Prepare statement
    $stmt = $conn->prepare("INSERT INTO users (name, email, password) VALUES (?, ?, ?)");
    
    if (!$stmt) {
        die("Prepare failed: " . $conn->error);
    }

    // Bind parameters
    $stmt->bind_param("sss", $name, $email, $hashedPassword);

    // Execute
    if ($stmt->execute()) {
        header('Location: login.php?success=1');
        exit();
    } else {
        echo "Something went wrong. " . $stmt->error;
    }

    $stmt->close();
} else {
    http_response_code(405);
    echo "Method not allowed.";
}

$conn->close();
?>
