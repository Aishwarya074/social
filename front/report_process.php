<?php
session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "service";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Client DB Connection failed: " . $conn->connect_error);
}

if (!isset($_SESSION['user_id'])) {
    die("Access denied. Please log in.");
}

$user_id     = $_SESSION['user_id'];
$name        = htmlspecialchars($_POST['name'] ?? '');
$location    = htmlspecialchars($_POST['location'] ?? '');
$date        = htmlspecialchars($_POST['date'] ?? '');
$time        = htmlspecialchars($_POST['time'] ?? '');
$description = htmlspecialchars($_POST['description'] ?? '');
$image_data  = $_POST['image_data'] ?? '';

// Validation
if (empty($location) || empty($description) || empty($image_data)) {
    die("Missing required data.");
}

// Decode and save image
$image_clean = str_replace('data:image/jpeg;base64,', '', $image_data);
$image_clean = str_replace(' ', '+', $image_clean);
$image_binary = base64_decode($image_clean);

$image_name = 'uploads/' . uniqid('report_', true) . '.jpg';
if (!is_dir('uploads')) {
    mkdir('uploads', 0755, true);
}
if (file_put_contents($image_name, $image_binary) === false) {
    die("Unable to save photo.");
}

$reported_at = date('Y-m-d H:i:s', strtotime("$date $time"));

$stmt = $conn->prepare("INSERT INTO reports (user_id, name, description, photo, location, reported_at) VALUES (?, ?, ?, ?, ?, ?)");
$stmt->bind_param("isssss", $user_id, $name, $description, $image_name, $location, $reported_at);

if ($stmt->execute()) {
    echo "<script>alert('📋 Report submitted successfully!'); window.location.href='dashboard.php';</script>";
} else {
    echo "Database error: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>
