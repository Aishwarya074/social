<?php
// Database connection
$servername = "localhost"; // Change if needed
$username = "root";        // DB username
$password = "";            // DB password
$dbname = "social_service"; // Your DB name

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$successMsg = $errorMsg = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $adminName = trim($_POST['admin_name']);
    $email = trim($_POST['email']);
    $passwordHash = password_hash($_POST['password'], PASSWORD_DEFAULT);

    // Check if email already exists
    $check = $conn->prepare("SELECT id FROM admins WHERE email = ?");
    $check->bind_param("s", $email);
    $check->execute();
    $check->store_result();

    if ($check->num_rows > 0) {
        $errorMsg = "Email already registered!";
    } else {
        // Insert admin data
        $stmt = $conn->prepare("INSERT INTO admins (admin_name, email, password) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $adminName, $email, $passwordHash);

        if ($stmt->execute()) {
            $successMsg = "Admin registered successfully!";
        } else {
            $errorMsg = "Error: " . $stmt->error;
        }
        $stmt->close();
    }
    $check->close();
}
$conn->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Registration - Social Service Platform</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(120deg, #4cafef, #6a1b9a);
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 420px;
            margin: 60px auto;
            background: #fff;
            padding: 25px;
            border-radius: 10px;
            box-shadow: 0 8px 16px rgba(0,0,0,0.2);
            text-align: center;
        }
        h2 {
            color: #4cafef;
            margin-bottom: 20px;
        }
        input {
            width: 90%;
            padding: 10px;
            margin: 8px 0;
            border-radius: 5px;
            border: 1px solid #ccc;
            outline: none;
        }
        input:focus {
            border-color: #4cafef;
        }
        button {
            background: #4cafef;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: 0.3s;
        }
        button:hover {
            background: #388ed1;
        }
        .message {
            margin-top: 15px;
            padding: 10px;
            border-radius: 5px;
        }
        .success {
            background: #d4edda;
            color: #155724;
        }
        .error {
            background: #f8d7da;
            color: #721c24;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Admin Registration</h2>

        <?php if ($successMsg) echo "<div class='message success'>$successMsg</div>"; ?>
        <?php if ($errorMsg) echo "<div class='message error'>$errorMsg</div>"; ?>

        <form method="POST">
            <input type="text" name="admin_name" placeholder="Full Name" required>
            <input type="email" name="email" placeholder="Email Address" required>
            <input type="password" name="password" placeholder="Password" required>
            <button type="submit">Register Admin</button>
        </form>
    </div>
</body>
</html>
