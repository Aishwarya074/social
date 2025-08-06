<?php
session_start();
$admin_email = "admin@example.com";
$admin_pass = "admin123";

if ($_POST['email'] === $admin_email && $_POST['password'] === $admin_pass) {
    $_SESSION['admin_logged_in'] = true;
    header("Location: dashboard.php");
} else {
    echo "<script>alert('Invalid');window.location='index.php';</script>";
}
?>
