<?php
session_start();
require_once 'config.php';

// Validate input
$donor_name = mysqli_real_escape_string($conn, $_POST['donor_name']);
$location = mysqli_real_escape_string($conn, $_POST['location']);
$food_type = mysqli_real_escape_string($conn, $_POST['food_type']);

// Image upload handling
if (isset($_FILES['image']) && $_FILES['image']['error'] === UPLOAD_ERR_OK) {
    $fileTmpPath = $_FILES['image']['tmp_name'];
    $fileName = basename($_FILES['image']['name']);
    $fileSize = $_FILES['image']['size'];
    $fileType = $_FILES['image']['type'];

    // Allowed file extensions
    $allowedExtensions = ['jpg', 'jpeg', 'png', 'gif'];
    $fileExtension = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));

    if (in_array($fileExtension, $allowedExtensions)) {
        // Create a unique name for the image to avoid overwriting
        $newFileName = uniqid('food_') . '.' . $fileExtension;
        $uploadFileDir = 'uploads/';
        $dest_path = $uploadFileDir . $newFileName;

        if (move_uploaded_file($fileTmpPath, $dest_path)) {
            // Insert data into the database
            $sql = "INSERT INTO donations (donor_name, location, food_type, image) VALUES ('$donor_name', '$location', '$food_type', '$newFileName')";

            if ($conn->query($sql) === TRUE) {
                // Redirect to dashboard with success message
                $_SESSION['message'] = "Donation submitted successfully!";
                header("Location: dashboard.php");
                exit();
            } else {
                $error = "Database error: " . $conn->error;
            }
        } else {
            $error = "Error moving the uploaded file.";
        }
    } else {
        $error = "Invalid file type. Only JPG, JPEG, PNG, and GIF allowed.";
    }
} else {
    $error = "Error uploading file.";
}

if (isset($error)) {
    $_SESSION['error'] = $error;
    header("Location: donate.html");
    exit();
}
?>
