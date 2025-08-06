<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Donate Leftover Food</title>
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
      <a href="dashboard.php" class="btn btn-outline-primary me-2">Dashboard</a>
      <a href="logout.php" class="btn btn-outline-danger">Logout</a>
    </div>
  </div>
</nav>

<!-- Donation Form -->
<div class="container mt-5">
  <h2 class="text-primary mb-4">🍲 Donate Leftover Food</h2>
  <form action="donate_process.php" method="POST" enctype="multipart/form-data" class="border p-4 bg-white shadow rounded">
    
    <div class="mb-3">
      <label for="donor_name" class="form-label">Your Name <span class="text-danger">*</span></label>
      <input type="text" class="form-control" name="donor_name" id="donor_name" required placeholder="Enter your full name" />
    </div>

    <div class="mb-3">
      <label for="location" class="form-label">Pickup Location <span class="text-danger">*</span></label>
      <input type="text" class="form-control" name="location" id="location" required placeholder="Where to pick up the food?" />
    </div>

    <div class="mb-3">
      <label for="food_type" class="form-label">Food Description <span class="text-danger">*</span></label>
      <textarea class="form-control" name="food_type" id="food_type" rows="4" required placeholder="Describe the food you want to donate..."></textarea>
    </div>

    <div class="mb-3">
      <label for="image" class="form-label">Upload Photo of Food <span class="text-danger">*</span></label>
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
