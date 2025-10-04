
<?php
session_start();

if (!isset($_SESSION['user_id'])) {
    // User not logged in, redirect to login page
    header('Location: login.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Contact Us - Social Service Platform</title>

  <!-- Bootstrap + Icons -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;600;700&display=swap" rel="stylesheet" />

  <style>
    html, body 
    {
      height: 100%;
      margin: 0;
      font-family: 'Poppins', sans-serif;
      background-color: #e9f5fe;
      display: flex;
      flex-direction: column;
    }

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

    .main-content {
      flex: 1;
      padding: 100px 20px 40px;
      display: flex;
      justify-content: center;
      align-items: flex-start;
    }

    .contact-card {
      background: #ffffff;
      border-radius: 20px;
      padding: 40px;
      box-shadow: 0 8px 25px rgba(0, 0, 0, 0.08);
      max-width: 700px;
      width: 100%;
    }

    .contact-card h2 {
      text-align: center;
      font-weight: 700;
      font-size: 2.5rem;
      color: #003f7f;
      margin-bottom: 30px;
    }

    footer {
      background: linear-gradient(to right, #007bff, #00bfff);
      color: white;
      padding: 2rem 0 1rem;
      margin-top: auto;
    }

    footer a {
      color: white;
      text-decoration: none;
    }

    footer a:hover {
      text-decoration: underline;
    }

    hr.border-light {
      border-color: rgba(255, 255, 255, 0.3);
    }

    @media (max-width: 768px) {
      .contact-card {
        padding: 25px;
      }

      .contact-card h2 {
        font-size: 2rem;
      }
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
        <li class="btn btn-outline-primary rounded-pill px-4 fw-semibold"><a class="nav-link active" href="contact.php">Contact</a></li>
        <li class="nav-item"><a class="nav-link" href="logout.php">Logout</a></li>
        <li class="nav-item"><a class="nav-link" href="register.php">Register</a></li>
      </ul>
    </div>
  </div>
</nav>

<!-- Contact Section -->
<section class="main-content">
  <div class="contact-card">
    <h2>Contact Us</h2>
    <form>
      <div class="mb-3">
        <label for="name" class="form-label fw-semibold">Name</label>
        <input type="text" class="form-control" id="name" placeholder="Your full name" required />
      </div>
      <div class="mb-3">
        <label for="email" class="form-label fw-semibold">Email address</label>
        <input type="email" class="form-control" id="email" placeholder="name@example.com" required />
      </div>
      <div class="mb-3">
        <label for="message" class="form-label fw-semibold">Message</label>
        <textarea class="form-control" id="message" rows="4" placeholder="Write your message here..." required></textarea>
      </div>
      <button type="submit" class="btn btn-primary w-100">Send Message</button>
    </form>
  </div>
</section>

<!-- Footer -->
<footer class="text-white pt-5">
  <div class="container">
    <div class="row text-center text-md-start">
      
      <div class="col-md-4 mb-4">
        <h5 class="fw-bold">SocialService</h5>
        <p>Empowering communities through compassion, food, and clothing support. Join us in making a change.</p>
        <div class="d-flex justify-content-center justify-content-md-start gap-3">
          <a href="#"><i class="bi bi-facebook fs-4"></i></a>
          <a href="#"><i class="bi bi-twitter-x fs-4"></i></a>
          <a href="#"><i class="bi bi-instagram fs-4"></i></a>
          <a href="#"><i class="bi bi-linkedin fs-4"></i></a>
        </div>
      </div>

      <div class="col-md-4 mb-4">
        <h5 class="fw-bold">Quick Links</h5>
        <ul class="list-unstyled">
          <li><a href="about.php">About Us</a></li>
          <li><a href="contact.php">Contact</a></li>
          <li><a href="register.php">Register</a></li>
          <li><a href="login.php">Login</a></li>
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
    <div class="text-center pb-2">
      <small>&copy; 2025 Social Service Platform — Made with ❤ for a better world.</small>
    </div>
  </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
