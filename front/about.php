<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>About Us - Social Service Platform</title>

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
  <!-- Bootstrap Icons -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet" />
  <!-- Google Fonts -->
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
    .nav-link:hover, .nav-link.active {
      color: #0056b3;
    }
    /* Hero Section */
    .hero-section {
      background: url('https://images.unsplash.com/photo-1506744038136-46273834b3fb?auto=format&fit=crop&w=1470&q=80') center center/cover no-repeat;
      color: white;
      padding: 6rem 1rem;
      text-align: center;
      text-shadow: 2px 2px 10px rgba(0,0,0,0.7);
      border-radius: 0 0 40px 40px;
      margin-bottom: 4rem;
    }
    .hero-section h1 {
      font-weight: 700;
      font-size: 3.5rem;
      margin-bottom: 1rem;
    }
    .hero-section p {
      font-size: 1.3rem;
      max-width: 650px;
      margin: 0 auto;
      font-weight: 500;
      opacity: 0.9;
    }
    /* Mission & Vision Cards */
    .info-cards .card {
      border-radius: 20px;
      box-shadow: 0 8px 30px rgba(0, 123, 255, 0.15);
      transition: transform 0.3s ease, box-shadow 0.3s ease;
      padding: 2rem;
      text-align: center;
    }
    .info-cards .card:hover {
      transform: translateY(-10px);
      box-shadow: 0 15px 40px rgba(0, 123, 255, 0.3);
    }
    .info-cards .card i {
      font-size: 3.5rem;
      color: #007bff;
      margin-bottom: 1rem;
    }
    .info-cards .card h3 {
      font-weight: 700;
      margin-bottom: 1rem;
      color: #003f7f;
    }
    .info-cards .card p {
      font-weight: 500;
      color: #1a2e4a;
    }
    /* Team Section */
    .team-section {
      margin-top: 5rem;
      text-align: center;
    }
    .team-section h2 {
      font-weight: 700;
      font-size: 2.8rem;
      margin-bottom: 3rem;
      color: #003f7f;
    }
    .team-member {
      border-radius: 15px;
      background: white;
      padding: 2rem 1.5rem;
      box-shadow: 0 8px 30px rgba(0, 0, 0, 0.08);
      transition: box-shadow 0.3s ease, transform 0.3s ease;
      margin-bottom: 2.5rem;
      width: 270px;  
      height: 280px; 
      margin: auto;
    }
    .team-member:hover {
      box-shadow: 0 20px 50px rgba(0, 0, 0, 0.15);
      transform: translateY(-10px);
    }
    .team-member img {
      width: 130px;
      height: 130px;
      object-fit: cover;
      border-radius: 50%;
      margin-bottom: 1rem;
      border: 4px solid #007bff;
      transition: border-color 0.3s ease;
    }
    .team-member:hover img {
      border-color: #0056b3;
    }
    .team-member h4 {
      font-weight: 700;
      margin-bottom: 0.5rem;
      color: #007bff;
    }
    .team-member p.position {
      font-style: italic;
      color: #555;
      margin-bottom: 1rem;
    }
    .team-member p.bio {
      font-size: 0.95rem;
      color: #0d1b2a;
      font-weight: 500;
    }

    /* Footer */
    footer {
      background: #e3f2fd;
      color: #0056b3;
      padding: 1.25rem 0;
      text-align: center;
      font-weight: 600;
      margin-top: 5rem;
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
        <li class="btn btn-outline-primary rounded-pill px-4 fw-semibold"><a class="nav-link" href="about.php">About Us</a></li>
        <li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
        <li class="nav-item"><a class="nav-link" href="logout.php">Logout</a></li>
        <li class="nav-item"><a class="nav-link" href="register.php">Register</a></li>
      </ul>
    </div>
  </div>
</nav>


<section class="hero-section">
  <h1>About Social Service Platform</h1>
  <p>Connecting communities, empowering change, and creating hope for those who need it most.</p>
</section>

<section class="py-5" style="background-color: #eef7ff;">
  <div class="container">
    <div class="row text-center mb-4">
      <h2 class="fw-bold text-primary"><u>What We Stand For</u></h2><br><br><br><br>
    </div>
    <div class="row g-4">

<section class="container info-cards mb-5">
  <div class="row justify-content-center g-4">
    <div class="col-md-6 col-lg-4">
      <div class="card">
        <i class="bi bi-bullseye"></i>
        <h3>Our Mission</h3>
        <p>To bridge the gap between generous donors and those in urgent need, fostering a caring and supportive community.</p>
      </div>
    </div>
    <div class="col-md-6 col-lg-4">
      <div class="card">
        <i class="bi bi-eye"></i>
        <h3>Our Vision</h3>
        <p>A world where no one goes hungry or unnoticed, and everyone has the opportunity to thrive with dignity.</p>
      </div>
    </div>
    <div class="col-md-6 col-lg-4">
      <div class="card">
        <i class="bi bi-people"></i>
        <h3>Our Values</h3>
        <p>Compassion, transparency, inclusiveness, and sustainability drive everything we do.</p>
      </div>
    </div>
  </div>
</section>
  




<section class="team-section container">
  <h2>Meet Our Team</h2>
  <div class="row justify-content-center g-4">
    <div class="col-sm-6 col-md-4 col-lg-3">
      <div class="team-member">
        <img src="" alt=Prasad Shete" />
        <h4>Prasad Shete</h4>
       <b> <p class="position">Founder & CEO</p></b><br>
        <p class="bio"></p>Leading with vision and a compassionate heart.</p>
      </div>
    </div>
    <div class="col-sm-6 col-md-4 col-lg-3">
      <div class="team-member">
        <img src="" alt="Aishwarya Bharsawade" />
        <h4>Aishwarya Bharsawade</h4>
       <b> <p class="position">CTO</p></b><br>
        <p class="bio"> Innovates with  smart tech solutions.</p>
      </div>
    </div>
    <div class="col-sm-6 col-md-4 col-lg-3">
      <div class="team-member">
        <img src="" alt="Pradnya Paikrao" />
        <h4>Pradnya Paikrao</h4>
       <b> <p class="position">Community Manager</p></b><br><br>
        <p class="bio">Builds strong and happy connections.</p>
      </div>
    </div>
    <div class="col-sm-6 col-md-4 col-lg-3">
      <div class="team-member">
        <img src="" alt="Aarti Nivale" />
        <h4>Aarti Nivale</h4>
       <b> <p class="position">Operations Lead</p></b><br><br>
        <p class="bio">Keeps everything running smoothly .</p>
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


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
