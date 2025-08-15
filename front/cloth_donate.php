<!--
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Cloth Donation - Social Service Platform</title>

  <!-- Bootstrap CSS --
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
  <!-- Bootstrap Icons --
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet" />
  <!-- Google Fonts --
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;600;700&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="style.css" />

</head>
<body>

<!-- Navbar (reuse your existing navbar code here) --
<nav class="navbar navbar-expand-lg fixed-top bg-white shadow-sm">
  <div class="container">
    <a class="navbar-brand" href="index.html">SocialService</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
      data-bs-target="#navbarNav" aria-controls="navbarNav"
      aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto gap-3">
        <li class="nav-item"><a class="nav-link" href="index.html">Home</a></li>
        <li class="nav-item"><a class="nav-link" href="about.html">About Us</a></li>
        <li class="nav-item"><a class="nav-link" href="contact.html">Contact</a></li>
        <li class="nav-item"><a class="nav-link" href="login.html">Login</a></li>
        <li class="nav-item"><a class="nav-link" href="register.html">Register</a></li>
      </ul>
    </div>
  </div>
</nav>

<!-- Cloth Donation Form --
<section class="py-5 mt-5">
  <div class="container" style="max-width: 600px;">
    <h2 class="mb-4 text-primary">Cloth Donation Form</h2>
    <form action="cloth-donate-process.php" method="POST" enctype="multipart/form-data" novalidate>
      <div class="mb-3">
        <label for="donorName" class="form-label">Your Name</label>
        <input type="text" class="form-control" id="donorName" name="donorName" required />
      </div>
      <div class="mb-3">
        <label for="donorEmail" class="form-label">Email address</label>
        <input type="email" class="form-control" id="donorEmail" name="donorEmail" required />
      </div>
      <div class="mb-3">
        <label for="donorPhone" class="form-label">Phone Number</label>
        <input type="tel" class="form-control" id="donorPhone" name="donorPhone" required />
      </div>
      <div class="mb-3">
        <label for="clothDescription" class="form-label">Description of Cloth Items</label>
        <textarea class="form-control" id="clothDescription" name="clothDescription" rows="3" placeholder="e.g. 10 T-shirts, 5 jackets..." required></textarea>
      </div>
      <div class="mb-3">
        <label for="pickupAddress" class="form-label">Pickup Address</label>
        <textarea class="form-control" id="pickupAddress" name="pickupAddress" rows="2" required></textarea>
      </div>
      <div class="mb-3">
        <label for="pickupDate" class="form-label">Preferred Pickup Date</label>
        <input type="date" class="form-control" id="pickupDate" name="pickupDate" required />
      </div>
      <div class="mb-3">
        <label for="clothImage" class="form-label">Upload Photo of Cloth Items (optional)</label>
        <input class="form-control" type="file" id="clothImage" name="clothImage" accept="image/*" />
      </div>
      <button type="submit" class="btn btn-primary">Submit Donation</button>
    </form>
  </div>
</section>

<!-- Bootstrap JS --
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
-->




<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Donate Clothes</title>
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />

  <!-- Custom CSS -->
  <link rel="stylesheet" href="style.css" />
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm">
  <div class="container">
    <a class="navbar-brand text-primary fw-bold" href="index.html">Social Service</a>
    <div class="ms-auto">
      <a href="user_dashbord.php" class="btn btn-outline-primary me-2">Dashboard</a>
      <a href="logout.php" class="btn btn-outline-danger">Logout</a>
    </div>
  </div>
</nav>

<!-- Donation Form -->
<div class="container mt-5">
  <h2 class="text-primary mb-4">👕 Donate Clothes</h2>
  <form action="donate_clothes_process.php" method="POST" enctype="multipart/form-data" class="border p-4 bg-white shadow rounded">
    
    <div class="mb-3">
      <label for="donor_name" class="form-label">Your Name <span class="text-danger">*</span></label>
      <input type="text" class="form-control" name="donor_name" id="donor_name" required placeholder="Enter your full name" />
    </div>

    <div class="mb-3">
      <label for="location" class="form-label">Pickup Location <span class="text-danger">*</span></label>
      <input type="text" class="form-control" name="location" id="location" required placeholder="Where to pick up the clothes?" />
    </div>

    <div class="mb-3">
      <label for="cloth_type" class="form-label">Clothing Description <span class="text-danger">*</span></label>
      <textarea class="form-control" name="cloth_type" id="cloth_type" rows="4" required placeholder="Describe the clothes you want to donate (e.g., shirts, trousers, dresses, winter wear, sizes, etc.)"></textarea>
    </div>

    <div class="mb-3">
      <label for="condition" class="form-label">Condition of Clothes <span class="text-danger">*</span></label>
      <select class="form-control" name="condition" id="condition" required>
        <option value="">Select condition</option>
        <option value="New">New</option>
        <option value="Like New">Like New</option>
        <option value="Gently Used">Gently Used</option>
      </select>
    </div>

    <div class="mb-3">
      <label for="image" class="form-label">Upload Photo of Clothes <span class="text-danger">*</span></label>
      <input type="file" class="form-control" name="image" id="image" accept="image/*" required />
    </div>

    <button type="submit" class="btn btn-success">Submit Donation</button>
  </form>
</div>

<!-- Footer -->
<footer class="text-center mt-5 mb-3 text-muted">
  &copy; <?php echo date("Y"); ?> Social Service Platform
</footer>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
