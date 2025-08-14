
<?php
session_start();

// 1. DB connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "service";

$conn = new mysqli($servername, $username, $password, $dbname);

// 2. Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// 3. Check for POST request
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // 4. Sanitize input
    $email = trim($_POST['email']);
    $password = $_POST['password'];

    // 5. Use prepared statement
    $stmt = $conn->prepare("SELECT id, name, password FROM users WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    // 6. Check user and password
    if ($result->num_rows == 1) {
        $user = $result->fetch_assoc();

        if (password_verify($password, $user['password'])) {
            // Set session variables
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['user_name'] = $user['name'];

            // Redirect to home or dashboard
            header("Location: user_dashbord.php");
            exit();
        } else {
            echo "<script>alert('Incorrect password'); window.location.href='login.php';</script>";
        }
    } else {
        echo "<script>alert('No account found with that email'); window.location.href='login.php';</script>";
    }

    $stmt->close();
} else {
    echo "Invalid request.";
}

$conn->close();
?>