<?php
$servername = "localhost";
$username = "root";     // your MySQL user for client DB
$password = ""; // your MySQL password for client DB
$dbname = "service";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Client DB Connection failed: " . $conn->connect_error);
}
?>
