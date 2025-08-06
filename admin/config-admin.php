<?php
$servername = "localhost";
$username = "admin_db_user";       // your MySQL user for admin DB
$password = "admin_db_password";   // your MySQL password for admin DB
$dbname = "social_admin";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Admin DB Connection failed: " . $conn->connect_error);
}
?>
