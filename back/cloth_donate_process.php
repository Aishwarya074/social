
 <?php
// cloth-donate-process.php

// Start session if needed
session_start();

// Database connection (adjust credentials)
$host = "localhost";
$dbUser = "root";
$dbPass = "";
$dbName = "social_service";

$conn = new mysqli($host, $dbUser, $dbPass, $dbName);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Sanitize POST inputs
$donorName = $conn->real_escape_string($_POST['donorName'] ?? '');
$donorEmail = $conn->real_escape_string($_POST['donorEmail'] ?? '');
$donorPhone = $conn->real_escape_string($_POST['donorPhone'] ?? '');
$clothDescription = $conn->real_escape_string($_POST['clothDescription'] ?? '');
$pickupAddress = $conn->real_escape_string($_POST['pickupAddress'] ?? '');
$pickupDate = $conn->real_escape_string($_POST['pickupDate'] ?? '');

if (empty($donorName) || empty($donorEmail) || empty($donorPhone) || empty($clothDescription) || empty($pickupAddress) || empty($pickupDate)) {
    die("Please fill all required fields.");
}

// Handle file upload (optional)
$uploadDir = "uploads/cloth_images/";
if (!is_dir($uploadDir)) {
    mkdir($uploadDir, 0755, true);
}

$clothImagePath = NULL;

if (isset($_FILES['clothImage']) && $_FILES['clothImage']['error'] === UPLOAD_ERR_OK) {
    $fileTmpPath = $_FILES['clothImage']['tmp_name'];
    $fileName = basename($_FILES['clothImage']['name']);
    $fileExt = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));
    $allowedExts = ['jpg', 'jpeg', 'png', 'gif'];

    if (in_array($fileExt, $allowedExts)) {
        $newFileName = uniqid('cloth_', true) . '.' . $fileExt;
        $destPath = $uploadDir . $newFileName;

        if (move_uploaded_file($fileTmpPath, $destPath)) {
            $clothImagePath = $destPath;
        } else {
            die("Error uploading image file.");
        }
    } else {
        die("Invalid image file type. Allowed types: jpg, jpeg, png, gif.");
    }
}

// Insert into database
$sql = "INSERT INTO cloth_donations 
        (donor_name, donor_email, donor_phone, description, pickup_address, pickup_date, image_path) 
        VALUES 
        (?, ?, ?, ?, ?, ?, ?)";

$stmt = $conn->prepare($sql);
$stmt->bind_param("sssssss", $donorName, $donorEmail, $donorPhone, $clothDescription, $pickupAddress, $pickupDate, $clothImagePath);

if ($stmt->execute()) {
    // Redirect or success message
    echo "<script>alert('Thank you for your cloth donation!'); window.location.href='index.html';</script>";
} else {
    echo "Error: " . $conn->error;
}

$stmt->close();
$conn->close();
?>









