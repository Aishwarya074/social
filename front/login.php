
<?php
session_start();

// Prevent caching
header("Cache-Control: no-cache, no-store, must-revalidate");
header("Pragma: no-cache");
header("Expires: 0");

// Redirect if already logged in
// if (isset($_SESSION['user_id'])) {
//     header("Location: ".($_SESSION['user_type'] == 'admin' ? 'admin_dashboard.php' : 'user_dashboard.php'));
//     exit();
// }

// DB connection
$conn = new mysqli("localhost", "root", "", "service");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$login_error = "";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = trim($_POST['email']);
    $password = $_POST['password'];

    // Check in users table (adjust columns to match your actual table structure)
    $stmt = $conn->prepare("SELECT id, name,email, password, 'user' AS user_type FROM users WHERE email = ?");
    if (!$stmt) {
        die("Prepare failed: " . $conn->error);
    }
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();
    $user = $result->fetch_assoc();
    $stmt->close();

    // If not found, check in admins table (adjust columns as needed)
    if (!$user) {
        $stmt = $conn->prepare("SELECT id, username, password, 'admin' AS user_type FROM admins WHERE email = ?");
        if (!$stmt) {
            die("Prepare failed: " . $conn->error);
        }
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();
        $user = $result->fetch_assoc();
        $stmt->close();
    }

    if ($user && password_verify($password, $user['password'])) {
        $_SESSION['id'] = $user['id'] ?? $user['id']; // Use whichever ID exists
        $_SESSION['name'] = $user['name']; // Changed from 'name' to 'username'
        $_SESSION['email'] = $user['email'];
        $_SESSION['user_type'] = $user['user_type'];
        
        header("Location: ".($_SESSION['user_type'] == 'admin' ? 'admin_dashboard.php' : 'user_dashboard.php'));
        exit();
    } else {
        $login_error = "Invalid email or password";
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Login - Social Service Platform</title>
  <link rel="stylesheet" href="style.css" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet" />
  <link rel="stylesheet" href="style.css" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;600;700&display=swap" rel="stylesheet" />
  <style>
    body {font-family: 'Poppins', sans-serif;background: #f8f9fa;}
    .navbar {background: #ffffff;box-shadow: 0 2px 4px rgba(0,0,0,0.05);}
    .hover-bg:hover {background-color: rgba(0, 123, 255, 0.1);}
    .card {background: #ffffff;border: none;}
    .footer-links a:hover {text-decoration: underline;}
    .error-message {color: #dc3545; font-size: 0.875rem;}
  </style>
</head>
<body>
<nav class="navbar navbar-expand-lg fixed-top">
  <div class="container">
    <a class="navbar-brand fw-bold text-primary" href="index.php">SocialService</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto align-items-center gap-3">
        <li class="nav-item">
          <a class="nav-link text-primary hover-bg rounded-pill px-3 fw-semibold" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-primary hover-bg rounded-pill px-3 fw-semibold" href="about.php">About Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-primary hover-bg rounded-pill px-3 fw-semibold" href="contact.php">Contact</a>
        </li>
        <li class="nav-item">
          <a class="btn btn-outline-primary rounded-pill px-4 fw-semibold" href="login.php">Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-primary hover-bg rounded-pill px-3 fw-semibold" href="register.php">Register</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<section class="py-5 mt-5">
  <div class="container mt-5 pt-5">
    <div class="row justify-content-center">
      <div class="col-md-6 col-lg-5">
        <div class="card shadow rounded-4 p-4">
          <h2 class="text-center mb-4 text-primary">Login</h2>
          <?php if (!empty($login_error)): ?>
            <div class="alert alert-danger"><?php echo $login_error; ?></div>
          <?php endif; ?>
          <form action="login_process.php" method="POST">
            <div class="mb-3">
              <label for="email" class="form-label fw-semibold">Email address</label>
              <input type="email" class="form-control rounded-pill" id="email" name="email" placeholder="example@email.com" required>
            </div>
            <div class="mb-3">
              <label for="password" class="form-label fw-semibold">Password</label>
              <input type="password" class="form-control rounded-pill" id="password" name="password" placeholder="••••••••" required>
            </div>
            <div class="d-grid">
              <button type="submit" class="btn btn-primary rounded-pill fw-semibold">Log In</button>
            </div>
            <div class="text-center mt-3">
              <small>Don't have an account? <a href="register.php" class="text-primary">Register here</a></small>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>
<footer class="text-white pt-5 mt-5" style="background: linear-gradient(to right, #007bff, #00bfff);">
  <div class="container">
    <div class="row text-center text-md-start">
      <div class="col-md-4 mb-4">
        <h5 class="fw-bold">SocialService</h5>
        <p>Empowering communities through compassion, food, and clothing support. Join us in making a change.</p>
        <div class="d-flex justify-content-center justify-content-md-start gap-3">
          <a href="#" class="text-white"><i class="bi bi-facebook fs-4"></i></a>
          <a href="#" class="text-white"><i class="bi bi-twitter-x fs-4"></i></a>
          <a href="#" class="text-white"><i class="bi bi-instagram fs-4"></i></a>
          <a href="#" class="text-white"><i class="bi bi-linkedin fs-4"></i></a>
        </div>
      </div>
      <div class="col-md-4 mb-4">
        <h5 class="fw-bold">Quick Links</h5>
        <ul class="list-unstyled footer-links">
          <li><a href="about.php" class="text-white text-decoration-none">About Us</a></li>
          <li><a href="contact.php" class="text-white text-decoration-none">Contact</a></li>
          <li><a href="register.php" class="text-white text-decoration-none">Register</a></li>
          <li><a href="login.php" class="text-white text-decoration-none">Login</a></li>
        </ul>
      </div>
      <div class="col-md-4 mb-4">
        <h5 class="fw-bold">Newsletter</h5>
        <form>
          <div class="input-group">
            <input type="email" class="form-control" placeholder="Your email" aria-label="Email">
            <button class="btn btn-light" type="submit"><i class="bi bi-envelope-fill"></i></button>
          </div>
        </form>
        <small class="d-block mt-2">Stay updated with our mission.</small>
      </div>
    </div>
    <hr class="border-light" />
    <div class="text-center pb-3">
      <small>&copy; 2025 Social Service Platform — Made with ❤ for a better world.</small>
    </div>
  </div>
</footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>

