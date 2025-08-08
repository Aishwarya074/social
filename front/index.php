
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Social Service Platform</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
  
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet" />
 
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;600;700&display=swap" rel="stylesheet" />

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;600;700&display=swap" rel="stylesheet" />
  
  <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet" />


  <style>
    body {
      font-family: 'Poppins', sans-serif;
      background: #e9f5fe;
      color: #0d1b2a;
      overflow-x: hidden;
      margin: 0;
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

    .hero-section {
      min-height: 90vh;
      background: url('https://images.unsplash.com/photo-1506744038136-46273834b3fb?auto=format&fit=crop&w=1470&q=80') center center/cover no-repeat;
      position: relative;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      text-align: center;
      padding: 0 1rem;
      color: white;
    }
    .hero-section::before {
      content: "";
      position: absolute;
      inset: 0;
      background: rgba(0, 0, 50, 0.5);
      z-index: 0;
      border-radius: 0 0 80px 80px;
    }
    .hero-section > * {
      position: relative;
      z-index: 1;
    }
    .hero-section h1 {
      font-size: 3.8rem;
      font-weight: 700;
      margin-bottom: 1rem;
      text-shadow: 3px 3px 15px rgba(0,0,0,0.6);
    }
    .hero-section p.lead {
      font-size: 1.4rem;
      max-width: 650px;
      margin: 0 auto 2rem auto;
      opacity: 0.95;
      text-shadow: 2px 2px 10px rgba(0,0,0,0.5);
    }

    .hero-section .btn {
      font-weight: 600;
      font-size: 1.15rem;
      padding: 0.85rem 2.2rem;
      border-radius: 50px;
      box-shadow: 0 8px 15px rgba(0, 153, 255, 0.5);
      transition: all 0.3s ease;
    }
    .hero-section .btn.btn-light {
      background: white;
      color: #007bff;
    }
    .hero-section .btn.btn-light:hover {
      background: #007bff;
      color: white;
      box-shadow: 0 12px 30px rgba(0, 123, 255, 0.7);
      transform: translateY(-3px);
    }
    .hero-section .btn-outline-light {
      border-color: white;
      color: white;
    }
    .hero-section .btn-outline-light:hover {
      background: white;
      color: #007bff;
      transform: translateY(-3px);
    }

    .feature-card {
      background-color: #fff;
      transition: transform 0.3s ease;
      height: 100%;
      }
    .feature-card:hover {
      transform: translateY(-5px);
      
    }
    .feature-icon {
      font-size: 4.5rem;
      color: #0099ff;
      margin-bottom: 1.25rem;
      transition: color 0.3s ease;
    }
    .feature-card:hover .feature-icon {
      color: #0056b3;
    }
    .feature-image {
      width: 100%;
      height: 200px;
      object-fit: cover;
      border-radius: 12px;
    }
    .feature-card:hover .feature-image {
      transform: scale(1.05);
    }
    .section-title {
      font-weight: 700;
      font-size: 2.8rem;
      margin-bottom: 4rem;
      color: #003f7f;
      text-align: center;
    }

    .card {
      border-radius: 15px;
      box-shadow: 0 10px 25px rgba(0, 0, 0, 0.08);
      transition: box-shadow 0.3s ease, transform 0.3s ease;
    }
    .card:hover {
      box-shadow: 0 20px 50px rgba(0, 0, 0, 0.15);
      transform: translateY(-10px);
    }
    .card-img-top {
      border-top-left-radius: 15px;
      border-top-right-radius: 15px;
      height: 180px;
      object-fit: cover;
    }

    .cta-section {
      background: linear-gradient(135deg, #66ccff 0%, #0099ff 100%);
      color: white;
      padding: 4rem 1rem;
      text-align: center;
      border-radius: 40px 40px 0 0;
      box-shadow: 0 -8px 40px rgba(0, 153, 255, 0.2);
    }
    .cta-section h2 {
      font-weight: 700;
      font-size: 2.8rem;
      margin-bottom: 1rem;
      
    }

    footer {
      background: #e3f2fd;
      color: #0056b3;
      padding: 1.25rem 0;
      text-align: center;
      font-weight: 600;
    }
     .section-title {
      text-align: center;
      font-size: 2.5rem;
      margin-bottom: 2rem;
      font-weight: 700;
    }

    .counter {
      font-size: 3rem;
      font-weight: 700;
      color: #007bff;
    }

    #ngoMap {
      height: 500px;
      border-radius: 15px;
      box-shadow: 0 8px 25px rgba(0, 0, 0, 0.1);
    }

    .fab {
      position: fixed;
      bottom: 30px;
      right: 30px;
      width: 60px;
      height: 60px;
      border-radius: 50%;
      background-color: #007bff;
      color: white;
      font-size: 1.5rem;
      display: flex;
      justify-content: center;
      align-items: center;
      box-shadow: 0 8px 20px rgba(0, 123, 255, 0.3);
      z-index: 1000;
    }

    .back-to-top {
      position: fixed;
      bottom: 100px;
      right: 30px;
      z-index: 999;
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
              <li class="btn btn-outline-primary rounded-pill px-4 fw-semibold"><a class="nav-link active" href="index.php">Home</a></li>
              <li class="nav-item"><a class="nav-link" href="about.php">About Us</a></li>
              <li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
              <li class="nav-item"><a class="nav-link" href="login.php">Login</a></li>
              <li class="nav-item"><a class="nav-link" href="register.php">Register</a></li>
            </ul>
          </div>
        </div>
      </nav>


      <section class="hero-section">
        <div class="container">
          <h1>Empower Your Community</h1>
          <p class="lead">Connect with those in need and make a difference by reporting and donating effortlessly.</p>
          <div>
            <a href="report.php" class="btn btn-light me-3 shadow">
              <i class="bi bi-camera-fill me-2"></i>Report Needy Person
            </a>
            <a href="donate.php" class="btn btn-outline-light shadow">
              <i class="bi bi-box-seam me-2"></i>Donate Leftover Food
            </a>
          </div>
        </div>
      </section>


      <section class="py-5">
        <div class="container">
          <h2 class="section-title">Platform Features</h2>
          <div class="row g-4 justify-content-center">
          
            <div class="col-md-4">
              <div class="feature-card text-center p-3 shadow rounded-4">
                <a href="report.php" class="btn btn-light me-3 shadow">
                <img src="https://images.unsplash.com/photo-1504384308090-c894fdcc538d?auto=format&fit=crop&w=600&q=80" alt="Report" class="feature-image">
                <i class="bi bi-camera-video feature-icon"></i>
                
                    <h4>Photo & Location Reporting</h4>
                    <p>Snap photos and tag locations of people in need to notify NGOs instantly.</p>
                  </a>
              </div>
            </div>
            
            <div class="col-md-4">
              <div class="feature-card text-center p-3 shadow rounded-4">
                <a href="food_donate.php" class="btn btn-light me-3 shadow">
                <img src="https://images.unsplash.com/photo-1504674900247-0877df9cc836?auto=format&fit=crop&w=600&q=80" alt="Food" class="feature-image">
                <i class="bi bi-basket2 feature-icon"></i>
                <h4>Leftover Food Donation</h4>
                <p>Schedule pickup for extra food to help feed those in need.</p>
                 </a>
              </div>
            </div>
         <div class="col-md-4">
        <div class="feature-card text-center p-3 shadow rounded-4">
          <a href="cloth_donate.php" class="btn btn-light me-3 shadow">
            <img src="https://static.vecteezy.com/system/resources/previews/018/991/609/original/people-giving-a-donation-box-with-clothes-for-charity-and-solidarity-vector.jpg"
              alt="Cloth Donation"
              class="feature-image img-fluid rounded mb-3">
            <i class="bi bi-bag-heart feature-icon fs-1 text-primary"></i>
            <h4 class="mt-2">Cloth Donation</h4>
            <p class="text-secondary">
              Donate wearable clothes in good condition to shelters and NGOs.
            </p>
          </a>
        </div>
      </div>


            
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="py-5 bg-light">
        <div class="container">
          <h2 class="section-title" data-aos="fade-up">Our Impact</h2>
          <div class="row text-center">
            <div class="col-md-4" data-aos="zoom-in">
              <h1 class="counter" data-target="3000">0</h1>
              <p>Meals Donated</p>
            </div>
            <div class="col-md-4" data-aos="zoom-in" data-aos-delay="200">
              <h1 class="counter" data-target="900">0</h1>
              <p>People Helped</p>
            </div>
            <div class="col-md-4" data-aos="zoom-in" data-aos-delay="400">
              <h1 class="counter" data-target="120">0</h1>
              <p>Volunteers</p>
            </div>
          </div>
        </div>
      </section>

      <section class="py-5">
        <div class="container">
          <h2 class="section-title" data-aos="fade-up">Find Nearby NGOs</h2>
          <div id="ngoMap" data-aos="fade-up" data-aos-delay="100"></div>
        </div>
      </section>


      <section class="py-5 bg-light">
        <div class="container">
          <h2 class="section-title" data-aos="fade-up">What People Say</h2>
          <div id="testimonialCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner text-center">
              <div class="carousel-item active">
                <blockquote>"This platform helped us feed 100+ people!"</blockquote>
                <p>- NGO Partner</p>
              </div>
              <div class="carousel-item">
                <blockquote>"I finally found a way to help my community."</blockquote>
                <p>- Volunteer</p>
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#testimonialCarousel" data-bs-slide="prev">
              <span class="carousel-control-prev-icon"></span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#testimonialCarousel" data-bs-slide="next">
              <span class="carousel-control-next-icon"></span>
            </button>
          </div>
        </div>
      </section>

      <section class="py-5">
        <div class="container">
          <h2 class="section-title" data-aos="fade-up">FAQ</h2>
          <div class="accordion" id="faqAccordion">
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq1">
                  What is SocialService?
                </button>
              </h2>
              <div id="faq1" class="accordion-collapse collapse show">
                <div class="accordion-body">
                  It's a platform to report needy individuals and donate resources.
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2">
                  How can I volunteer?
                </button>
              </h2>
              <div id="faq2" class="accordion-collapse collapse">
                <div class="accordion-body">
                  Just register on the platform and select areas you want to help with.
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>


      <section class="cta-section">
        <div class="container">
          <h2>Become a Part of the Change</h2>
          <p class="lead">Register now and start helping your community today.</p>
          <a href="register.html" class="btn btn-light me-3">Register</a>
          <a href="login.html" class="btn btn-outline-light">Login</a>
        </div>
      </section>

      <a href="report.php" class="fab"><i class="bi bi-camera-fill"></i></a>


    <button onclick="window.scrollTo({top: 0, behavior: 'smooth'})" class="btn btn-secondary back-to-top">↑</button>

    <div class="modal fade" id="announcementModal" tabindex="-1">
    <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header"><h5 class="modal-title">Important Announcement</h5></div>
      <div class="modal-body">We’ve helped over 10,000 people this year. Join the mission!</div>
      <div class="modal-footer"><button class="btn btn-secondary" data-bs-dismiss="modal">Close</button></div>
    </div>
    </div>
    </div>

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
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&callback=initMap"></script>

  <script>
  AOS.init();

  // Counter Animation
  const counters = document.querySelectorAll(".counter");
  counters.forEach(counter => {
    const update = () => {
      const target = +counter.getAttribute("data-target");
      const count = +counter.innerText;
      const speed = target / 200;
      if (count < target) {
        counter.innerText = Math.ceil(count + speed);
        setTimeout(update, 10);
      } else {
        counter.innerText = target;
      }
    };
    update();
  });

  // Google Map Initialization
  function initMap() {
    const center = { lat: 28.6139, lng: 77.2090 };
    const map = new google.maps.Map(document.getElementById("ngoMap"), {
      zoom: 12,
      center: center,
    });

    const ngos = [
      { name: "Helping Hands NGO", lat: 28.6139, lng: 77.2090, info: "Education & Health support." },
      { name: "Food For All", lat: 28.6289, lng: 77.2080, info: "Leftover food collection." },
      { name: "ClothShare Foundation", lat: 28.6189, lng: 77.2190, info: "Clothes donation services." }
    ];

    ngos.forEach(ngo => {
      const marker = new google.maps.Marker({
        position: { lat: ngo.lat, lng: ngo.lng },
        map,
        title: ngo.name,
        icon: "https://img.icons8.com/color/48/non-profit-organization.png"
      });

      const infoWindow = new google.maps.InfoWindow({
        content: `<strong>${ngo.name}</strong><br>${ngo.info}`
      });

      marker.addListener("click", () => {
        infoWindow.open(map, marker);
      });
    });
  }

  // Dark Mode Toggle
  function toggleDarkMode() {
    document.body.classList.toggle('dark-mode');
  }
  </script>


</body>
</html>


