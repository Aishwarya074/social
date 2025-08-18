
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Register - Social Service Platform</title>

  <!-- External CSS -->
  <link rel="stylesheet" href="style.css" />

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />

  <!-- Bootstrap Icons -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet" />

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;600;700&display=swap" rel="stylesheet" />
  <style>
   .navbar {
      background: #ffffffcc;
      backdrop-filter: saturate(180%) blur(20px);
      box-shadow: 0 2px 15px rgba(13, 27, 42, 0.1);
    }

    .navbar-brand {
      font-weight: 700; 
      color: #007bff;
      font-size: 1.8rem;
    }

    .nav-link {
      color: #007bff;
      font-weight: 600;
      transition: color 0.3s ease;
    }

    .nav-link:hover {
      color: #0056b3;
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
        <li class="nav-item"><a class="nav-link" href="logout.php">Logout</a></li>

         <li class="btn btn-outline-primary rounded-pill px-4 fw-semibold"><a class="nav-link active" href="register.php">Register</a></li>
      </ul>
    </div>
  </div>
</nav>

<!-- Register Form -->
<section class="py-5 mt-5">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-6 col-lg-5">
        <div class="card shadow rounded-4 p-4">
          <h2 class="text-center mb-4 text-primary">Create Account</h2>
          <form action="./register_process.php" method="POST">
            <div class="mb-3">
              <label for="name" class="form-label fw-semibold">Full Name</label>
              <input type="text" class="form-control rounded-pill" id="name" name="name" placeholder="Your full name" required>
            </div>
            <div class="mb-3">
              <label for="email" class="form-label fw-semibold">Email Address</label>
              <input type="email" class="form-control rounded-pill" id="email" name="email" placeholder="example@email.com" required>
            </div>
            <div class="mb-3">
              <label for="password" class="form-label fw-semibold">Password</label>
              <input type="password" class="form-control rounded-pill" id="password" name="password" placeholder="Choose a password" required>
            </div>
            <div class="d-grid">
              <button type="submit" class="btn btn-primary rounded-pill fw-semibold">Register</button>
            </div>
            <div class="text-center mt-3">
              <small>Already have an account? <a href="login.html" class="text-primary">Login here</a></small>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>

<footer class="text-white pt-5" style="background: linear-gradient(to right, #007bff, #00bfff);">
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
        <ul class="list-unstyled">
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


<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>



<!--

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Register - Social Service Platform</title>

  <!-- Bootstrap CSS --
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
  <!-- Bootstrap Icons --
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet" />
  <!-- Font Awesome --
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

  <style>
    body {
      margin: 0;
      padding: 0;
      background: linear-gradient(270deg, #ff6a00, #ffcc00, #00c6ff, #0072ff);
      background-size: 800% 800%;
      animation: gradientBG 20s ease infinite;
      color: #fff;
      font-family: Arial, sans-serif;
      display: flex;
      flex-direction: column;
      min-height: 100vh;
    }

    @keyframes gradientBG {
      0% { background-position: 0% 50%; }
      50% { background-position: 100% 50%; }
      100% { background-position: 0% 50%; }
    }

    /* Footer Box */
    .content-box {
      background: rgba(0, 0, 0, 0.5);
      padding: 40px;
      border-radius: 15px;
      margin: 40px auto;
      max-width: 1000px;
    }

    /* Social Icons */
    .social-icons a {
      font-size: 30px;
      margin: 0 10px;
      color: white;
      transition: transform 0.3s ease, color 0.3s ease;
    }
    .social-icons a:hover {
      transform: scale(1.2);
      color: #ffcc00;
    }

    /* Newsletter Button */
    .btn-newsletter {
      background-color: #ffcc00;
      color: #000;
      font-weight: bold;
      padding: 10px 25px;
      border-radius: 50px;
      transition: box-shadow 0.4s ease;
    }
    .btn-newsletter:hover {
      box-shadow: 0 0 20px #ffcc00, 0 0 40px #ffcc00;
      color: #000;
    }

    /* Push footer to bottom */
    main {
      flex: 1;
    }
  </style>
</head>
<body>

<!-- Navbar --
<nav class="navbar navbar-expand-lg fixed-top bg-light shadow-sm">
  <div class="container">
    <a class="navbar-brand fw-bold text-primary" href="index.php">SocialService</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto align-items-center gap-3">
        <li class="nav-item"><a class="nav-link text-primary" href="index.php">Home</a></li>
        <li class="nav-item"><a class="nav-link text-primary" href="about.php">About Us</a></li>
        <li class="nav-item"><a class="nav-link text-primary" href="contact.php">Contact</a></li>
        <li class="nav-item"><a class="nav-link text-primary" href="login.php">Login</a></li>
        <li class="nav-item"><a class="btn btn-outline-primary rounded-pill px-4 fw-semibold" href="register.php">Register</a></li>
      </ul>
    </div>
  </div>
</nav>

<main class="pt-5">
  <!-- Register Form --
  <section class="py-5 mt-5">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-6 col-lg-5">
          <div class="card shadow rounded-4 p-4">
            <h2 class="text-center mb-4 text-primary">Create Account</h2>
            <form action="./register_process.php" method="POST">
              <div class="mb-3">
                <label for="name" class="form-label fw-semibold">Full Name</label>
                <input type="text" class="form-control rounded-pill" id="name" name="name" placeholder="Your full name" required>
              </div>
              <div class="mb-3">
                <label for="email" class="form-label fw-semibold">Email Address</label>
                <input type="email" class="form-control rounded-pill" id="email" name="email" placeholder="example@email.com" required>
              </div>
              <div class="mb-3">
                <label for="password" class="form-label fw-semibold">Password</label>
                <input type="password" class="form-control rounded-pill" id="password" name="password" placeholder="Choose a password" required>
              </div>
              <div class="d-grid">
                <button type="submit" class="btn btn-primary rounded-pill fw-semibold">Register</button>
              </div>
              <div class="text-center mt-3">
                <small>Already have an account? <a href="login.php" class="text-primary">Login here</a></small>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>

<!-- Footer --
<footer>
  <div class="container">
    <div class="content-box text-center">
      <h1 class="mb-4">Leads with Vision and Heart</h1>
      <p class="mb-4">
        Our mission is to bring meaningful change by connecting communities, empowering individuals, 
        and building a future where compassion drives progress.
      </p>

      <div class="social-icons mb-4">
        <a href="#"><i class="fab fa-facebook-f"></i></a>
        <a href="#"><i class="fab fa-twitter"></i></a>
        <a href="#"><i class="fab fa-instagram"></i></a>
        <a href="#"><i class="fab fa-linkedin-in"></i></a>
      </div>

      <form class="d-flex justify-content-center mt-4">
        <input type="email" class="form-control w-50 me-2" placeholder="Enter your email" required>
        <button type="submit" class="btn btn-newsletter">Subscribe</button>
      </form>
    </div>
  </div>
</footer>

<!-- Bootstrap JS --
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>

















