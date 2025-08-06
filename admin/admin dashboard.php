<?php
session_start();
if (!isset($_SESSION['admin_logged_in'])) {
    header("Location: index.php");
    exit();
}
require_once '../config.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Admin Dashboard</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <!-- Bootstrap CDN -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  
  <!-- ✅ Link to your custom admin CSS -->
  <link rel="stylesheet" href="style.css">
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm">
  <div class="container">
    <a class="navbar-brand fw-bold text-primary" href="#">Admin Panel</a>
    <div class="ms-auto">
      <a class="btn btn-outline-danger" href="logout.php">Logout</a>
    </div>
  </div>
</nav>

<div class="container my-5">

  <!-- Users Table -->
  <h3 class="mb-4">📋 Registered Users</h3>
  <div class="table-responsive">
    <table class="table table-striped table-bordered">
      <thead class="table-light">
        <tr>
          <th>ID</th>
          <th>Name</th>
          <th>Email</th>
          <th>Registered At</th>
        </tr>
      </thead>
      <tbody>
        <?php
        $result = $conn->query("SELECT * FROM users ORDER BY id DESC");
        while ($row = $result->fetch_assoc()) {
          echo "<tr>
                  <td>{$row['id']}</td>
                  <td>{$row['name']}</td>
                  <td>{$row['email']}</td>
                  <td>{$row['created_at']}</td>
                </tr>";
        }
        ?>
      </tbody>
    </table>
  </div>

  <!-- Reports Table -->
  <h3 class="mt-5 mb-4">🧍‍♂️ Needy People Reports</h3>
  <div class="table-responsive">
    <table class="table table-striped table-bordered">
      <thead class="table-light">
        <tr>
          <th>ID</th>
          <th>Name</th>
          <th>Location</th>
          <th>Description</th>
          <th>Image</th>
        </tr>
      </thead>
      <tbody>
        <?php
        $result = $conn->query("SELECT * FROM reports ORDER BY id DESC");
        while ($row = $result->fetch_assoc()) {
          echo "<tr>
                  <td>{$row['id']}</td>
                  <td>{$row['name']}</td>
                  <td>{$row['location']}</td>
                  <td>{$row['description']}</td>
                  <td><img src='../uploads/{$row['image']}' width='80' height='80' class='rounded'></td>
                </tr>";
        }
        ?>
      </tbody>
    </table>
  </div>

  <!-- Donations Table -->
  <h3 class="mt-5 mb-4">🍱 Food Donations</h3>
  <div class="table-responsive">
    <table class="table table-striped table-bordered">
      <thead class="table-light">
        <tr>
          <th>ID</th>
          <th>Donor</th>
          <th>Location</th>
          <th>Food Type</th>
          <th>Image</th>
        </tr>
      </thead>
      <tbody>
        <?php
        $result = $conn->query("SELECT * FROM donations ORDER BY id DESC");
        while ($row = $result->fetch_assoc()) {
          echo "<tr>
                  <td>{$row['id']}</td>
                  <td>{$row['donor_name']}</td>
                  <td>{$row['location']}</td>
                  <td>{$row['food_type']}</td>
                  <td><img src='../uploads/{$row['image']}' width='80' height='80' class='rounded'></td>
                </tr>";
        }
        ?>
      </tbody>
    </table>
  </div>

</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
