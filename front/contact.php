

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Contact Us - Social Service Platform</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
  
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet" />
  
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;600;700&display=swap" rel="stylesheet" />

  <style>
    body {
      font-family: 'Poppins', sans-serif;
      background: #e9f5fe;
      color: #0d1b2a;
      margin: 0;
      padding-top: 70px; /* space for fixed navbar */
    }
    .navbar {
      background: #ffffffcc;
      backdrop-filter: saturate(180%) blur(20px);
      box-shadow: 0 2px 15px rgb(13 27 42 / 0.1);
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
    .contact-section {
      max-width: 600px;
      margin: 2rem auto;
      background: white;
      padding: 2rem 2.5rem;
      border-radius: 20px;
      box-shadow: 0 8px 25px rgba(0,0,0,0.08);
    }
    .section-title {
      text-align: center;
      font-weight: 700;
      font-size: 2.8rem;
      color: #003f7f;
      margin-bottom: 2rem;
    }
    footer {
      background: #e3f2fd;
      color: #0056b3;
      padding: 1.25rem 0;
      text-align: center;
      font-weight: 600;
      position: fixed;
      bottom: 0;
      width: 100%;
    }
  </style>
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


<section class="contact-section">
  <h2 class="section-title">Contact Us</h2>
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
</section>

<footer>
  <small>&copy; 2025 Social Service Platform — Made with ❤️</small>
</footer>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>

