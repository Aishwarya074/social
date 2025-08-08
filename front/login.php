<!--
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Login - Social Service Platform</title>

  
  <link rel="stylesheet" href="style.css" />

 
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
  
 
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet" />

  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;600;700&display=swap" rel="stylesheet" />
</head>
<body>


<nav class="navbar navbar-expand-lg fixed-top">
  <div class="container">
    <a class="navbar-brand" href="index.php">SocialService</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto gap-3">
        <li class="nav-item"><a class="nav-link active" href="index.php">Home</a></li>
        <li class="nav-item"><a class="nav-link" href="about.php">About Us</a></li>
        <li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
        <li class="nav-item"><a class="nav-link" href="login.php">Login</a></li>
        <li class="nav-item"><a class="nav-link" href="register.php">Register</a></li>
      </ul>
    </div>
  </div>
</nav>



<section class="py-5 mt-5">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-6 col-lg-5">
        <div class="card shadow rounded-4 p-4">
          <h2 class="text-center mb-4 text-primary">Login</h2>
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
              <small>Don't have an account? <a href="register.html" class="text-primary">Register here</a></small>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>


<footer class="pt-5 pb-4 text-white" style="background-color: #343a40;">
  <div class="container-lg">
    <div class="row text-center text-md-start align-items-start">
      
      
      <div class="col-md-4 mb-5">
        <h3 class="fw-bold mb-3">🌟 SocialService</h3>
        <p class="fs-5">
          Empowering lives through support, compassion, and kindness. Together we create change.
        </p>
        <div class="d-flex justify-content-center justify-content-md-start gap-4 mt-4">
          <a href="#" class="text-white fs-3"><i class="bi bi-facebook"></i></a>
          <a href="#" class="text-white fs-3"><i class="bi bi-twitter-x"></i></a>
          <a href="#" class="text-white fs-3"><i class="bi bi-instagram"></i></a>
          <a href="#" class="text-white fs-3"><i class="bi bi-linkedin"></i></a>
        </div>
      </div>

 
      <div class="col-md-4 mb-5">
        <h4 class="fw-semibold mb-3">Quick Links</h4>
        <ul class="list-unstyled fs-5">
          <li class="mb-2"><a href="about.php" class="text-white text-decoration-none">About Us</a></li>
          <li class="mb-2"><a href="contact.php" class="text-white text-decoration-none">Contact</a></li>
          <li class="mb-2"><a href="register.php" class="text-white text-decoration-none">Register</a></li>
          <li class="mb-2"><a href="login.php" class="text-white text-decoration-none">Login</a></li>
        </ul>
      </div>

      <div class="col-md-4 mb-5">
        <h4 class="fw-semibold mb-3">Stay Updated</h4>
        <p class="fs-5">Join our newsletter to get the latest updates and stories.</p>
        <form class="d-flex mt-3">
          <input type="email" class="form-control me-2" placeholder="Your email" aria-label="Email">
          <button class="btn btn-light px-3" type="submit"><i class="bi bi-envelope-fill"></i></button>
        </form>
      </div>

    </div>

    <hr class="border-light mt-5" />

    
    <div class="text-center mt-3 fs-6">
      <small>&copy; 2025 Social Service Platform — Built with ❤️ for a better tomorrow.</small>
    </div>
  </div>
</footer>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

-->




<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Login - Social Service Platform</title>

  <!-- External CSS -->
  <link rel="stylesheet" href="style.css" />

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
  
  <!-- Bootstrap Icons -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet" />

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;600;700&display=swap" rel="stylesheet" />

  <!-- Custom Styles -->
  <style>
    body {
      background: url('images/login-bg.jpg') no-repeat center center fixed;
      background-size: cover;
      font-family: 'Poppins', sans-serif;
    }
    .card {
      background: rgba(255, 255, 255, 0.92);
      box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
    }
    .navbar {
      background-color: rgba(52, 58, 64, 0.9);
    }
    .navbar .nav-link,
    .navbar .navbar-brand {
      color: #fff !important;
    }
  </style>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg fixed-top">
  <div class="container">
    <a class="navbar-brand" href="index.php">SocialService</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto gap-3">
        <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
        <li class="nav-item"><a class="nav-link" href="about.php">About Us</a></li>
        <li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
        <li class="nav-item"><a class="nav-link active" href="login.php">Login</a></li>
        <li class="nav-item"><a class="nav-link" href="register.php">Register</a></li>
      </ul>
    </div>
  </div>
</nav>

<!-- Login Form Section -->
<section class="py-5 mt-5">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-6 col-lg-5">
        <div class="card shadow rounded-4 p-4">
          <h2 class="text-center mb-4 text-primary">Login</h2>
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

<!-- Footer -->
<footer class="pt-5 pb-4 text-white" style="background-color: #343a40;">
  <div class="container-lg">
    <div class="row text-center text-md-start align-items-start">
      <div class="col-md-4 mb-5">
        <h3 class="fw-bold mb-3">🌟 SocialService</h3>
        <p class="fs-5">
          Empowering lives through support, compassion, and kindness. Together we create change.
        </p>
        <div class="d-flex justify-content-center justify-content-md-start gap-4 mt-4">
          <a href="#" class="text-white fs-3"><i class="bi bi-facebook"></i></a>
          <a href="#" class="text-white fs-3"><i class="bi bi-twitter-x"></i></a>
          <a href="#" class="text-white fs-3"><i class="bi bi-instagram"></i></a>
          <a href="#" class="text-white fs-3"><i class="bi bi-linkedin"></i></a>
        </div>
      </div>

      <!-- Quick Links -->
      <div class="col-md-4 mb-5">
        <h4 class="fw-semibold mb-3">Quick Links</h4>
        <ul class="list-unstyled fs-5">
          <li class="mb-2"><a href="about.php" class="text-white text-decoration-none">About Us</a></li>
          <li class="mb-2"><a href="contact.php" class="text-white text-decoration-none">Contact</a></li>
          <li class="mb-2"><a href="register.php" class="text-white text-decoration-none">Register</a></li>
          <li class="mb-2"><a href="login.php" class="text-white text-decoration-none">Login</a></li>
        </ul>
      </div>

      <!-- Newsletter -->
      <div class="col-md-4 mb-5">
        <h4 class="fw-semibold mb-3">Stay Updated</h4>
        <p class="fs-5">Join our newsletter to get the latest updates and stories.</p>
        <form class="d-flex mt-3">
          <input type="email" class="form-control me-2" placeholder="Your email" aria-label="Email">
          <button class="btn btn-light px-3" type="submit"><i class="bi bi-envelope-fill"></i></button>
        </form>
      </div>
    </div>

    <hr class="border-light mt-5" />

    <!-- Copyright -->
    <div class="text-center mt-3 fs-6">
      <small>&copy; 2025 Social Service Platform — Built with ❤️ for a better tomorrow.</small>
    </div>
  </div>
</footer>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
