<!--

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Report Needy Person</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">

 
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="style.css">
  <style>
    video, canvas {
      width: 100%;
      border-radius: 8px;
    }
  </style>
</head>
<body>


<nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm">
  <div class="container">
    <a class="navbar-brand text-primary fw-bold" href="index.php">Social Service</a>
    <div class="ms-auto">
      <a href="dashboard.php" class="btn btn-outline-primary me-2">Dashboard</a>
      <a href="logout.php" class="btn btn-outline-danger">Logout</a>
    </div>
  </div>
</nav>



<form action="report_process.php" method="POST" enctype="multipart/form-data" class="border p-4 bg-white shadow rounded" id="reportForm">

  <div class="mb-3">
    <label class="form-label">Capture Photo <span class="text-danger">*</span></label>
    <video id="camera" autoplay playsinline></video><br><br>
    <div class="d-grid">
      <button type="button" class="btn btn-outline-info" onclick="capturePhoto()">📸 Capture</button>
    </div>
    <canvas id="snapshot" style="display:none;"></canvas>
    <input type="hidden" name="image_data" id="image_data" required>
  </div>

  <div class="mb-3">
    <label class="form-label">Person's Name (optional)</label>
    <input type="text" class="form-control" name="name" placeholder="If known">
  </div>

  <div class="mb-3">
    <label class="form-label">Location <span class="text-danger">*</span></label>
    <input type="text" class="form-control" name="location" id="location" required>
  </div>

  <div class="mb-3">
    <label class="form-label">Date</label>
    <input type="text" class="form-control" name="date" id="date" readonly>
  </div>

  <div class="mb-3">
    <label class="form-label">Time</label>
    <input type="text" class="form-control" name="time" id="time" readonly>
  </div>

  <div class="mb-3">
    <label class="form-label">Situation / Description <span class="text-danger">*</span></label>
    <textarea class="form-control" name="description" rows="4" placeholder="Describe the situation..." required></textarea>
  </div>

  <button type="submit" class="btn btn-primary">Submit Report</button>
</form>

</div>


<footer class="text-center mt-5 mb-3 text-muted">
  &copy; <?php echo date("Y"); ?> Social Service Platform
</footer>


<script>
  const now = new Date();
  document.getElementById("date").value = now.toLocaleDateString();
  document.getElementById("time").value = now.toLocaleTimeString();

  if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(
      pos => {
        const lat = pos.coords.latitude.toFixed(6);
        const lon = pos.coords.longitude.toFixed(6);
        document.getElementById("location").value = `Lat: ${lat}, Lng: ${lon}`;
      },
      err => {
        document.getElementById("location").value = "Unable to get location";
      }
    );
  }

  const video = document.getElementById('camera');
  const canvas = document.getElementById('snapshot');
  const imageInput = document.getElementById('image_data');

  navigator.mediaDevices.getUserMedia({ video: true })
    .then(stream => {
      video.srcObject = stream;
    })
    .catch(err => {
      alert("Camera access denied or not supported.");
    });

  function capturePhoto() {
    const context = canvas.getContext('2d');
    canvas.width = video.videoWidth;
    canvas.height = video.videoHeight;
    context.drawImage(video, 0, 0, canvas.width, canvas.height);

    canvas.style.display = 'block';
    video.style.display = 'none';

    imageInput.value = canvas.toDataURL('image/jpeg');
  }

  document.getElementById("reportForm").addEventListener("submit", function(e) {
    const img = document.getElementById("image_data").value;
    if (!img) {
      e.preventDefault();
      alert("Please capture a photo before submitting.");
    }
  });
</script>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
-->

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Report Needy Person</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

  <style>
    /* Gradient background animation */
    body {
      margin: 0;
      padding: 0;
      background: linear-gradient(270deg, #ff6a00, #ffcc00, #00c6ff, #0072ff);
      background-size: 800% 800%;
      animation: gradientBG 20s ease infinite;
      font-family: Arial, sans-serif;
      color: #fff;
    }
    @keyframes gradientBG {
      0% { background-position: 0% 50%; }
      50% { background-position: 100% 50%; }
      100% { background-position: 0% 50%; }
    }

    /* Content box */
    .content-box {
      background: rgba(0, 0, 0, 0.5);
      padding: 30px;
      border-radius: 15px;
      margin: 40px auto;
      max-width: 800px;
    }

    /* Camera elements */
    video, canvas {
      width: 100%;
      border-radius: 8px;
    }

    /* Social icons hover */
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

    /* Newsletter button glow */
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

    /* Extra spacing from both sides */
    .container {
      padding-left: 30px;
      padding-right: 30px;
    }
  </style>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm">
  <div class="container">
    <a class="navbar-brand text-primary fw-bold" href="index.php">Social Service</a>
    <div class="ms-auto">
      <a href="dashboard.php" class="btn btn-outline-primary me-2">Dashboard</a>
      <a href="logout.php" class="btn btn-outline-danger">Logout</a>
    </div>
  </div>
</nav>

<!-- Content -->
<div class="container">
  <div class="content-box">
    <h2 class="text-center mb-4">Report a Needy Person</h2>

    <!-- Report Form -->
    <form action="report_process.php" method="POST" enctype="multipart/form-data" id="reportForm">

      <div class="mb-3">
        <label class="form-label">Capture Photo <span class="text-danger">*</span></label>
        <video id="camera" autoplay playsinline></video><br><br>
        <div class="d-grid">
          <button type="button" class="btn btn-outline-info" onclick="capturePhoto()">📸 Capture</button>
        </div>
        <canvas id="snapshot" style="display:none;"></canvas>
        <input type="hidden" name="image_data" id="image_data" required>
      </div>

      <div class="mb-3">
        <label class="form-label">Person's Name (optional)</label>
        <input type="text" class="form-control" name="name" placeholder="If known">
      </div>

      <div class="mb-3">
        <label class="form-label">Location <span class="text-danger">*</span></label>
        <input type="text" class="form-control" name="location" id="location" required>
      </div>

      <div class="mb-3">
        <label class="form-label">Date</label>
        <input type="text" class="form-control" name="date" id="date" readonly>
      </div>

      <div class="mb-3">
        <label class="form-label">Time</label>
        <input type="text" class="form-control" name="time" id="time" readonly>
      </div>

      <div class="mb-3">
        <label class="form-label">Situation / Description <span class="text-danger">*</span></label>
        <textarea class="form-control" name="description" rows="4" placeholder="Describe the situation..." required></textarea>
      </div>

      <button type="submit" class="btn btn-newsletter w-100">Submit Report</button>
    </form>
  </div>
</div>

<!-- Footer -->
<footer class="text-center mt-5 mb-3 text-muted">
  <div class="social-icons mb-3">
    <a href="#"><i class="fab fa-facebook-f"></i></a>
    <a href="#"><i class="fab fa-twitter"></i></a>
    <a href="#"><i class="fab fa-instagram"></i></a>
    <a href="#"><i class="fab fa-linkedin-in"></i></a>
  </div>
  &copy; <?php echo date("Y"); ?> Social Service Platform
</footer>

<!-- JS Scripts -->
<script>
  const now = new Date();
  document.getElementById("date").value = now.toLocaleDateString();
  document.getElementById("time").value = now.toLocaleTimeString();

  if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(
      pos => {
        const lat = pos.coords.latitude.toFixed(6);
        const lon = pos.coords.longitude.toFixed(6);
        document.getElementById("location").value = `Lat: ${lat}, Lng: ${lon}`;
      },
      err => {
        document.getElementById("location").value = "Unable to get location";
      }
    );
  }

  const video = document.getElementById('camera');
  const canvas = document.getElementById('snapshot');
  const imageInput = document.getElementById('image_data');

  navigator.mediaDevices.getUserMedia({ video: true })
    .then(stream => {
      video.srcObject = stream;
    })
    .catch(err => {
      alert("Camera access denied or not supported.");
    });

  function capturePhoto() {
    const context = canvas.getContext('2d');
    canvas.width = video.videoWidth;
    canvas.height = video.videoHeight;
    context.drawImage(video, 0, 0, canvas.width, canvas.height);

    canvas.style.display = 'block';
    video.style.display = 'none';

    imageInput.value = canvas.toDataURL('image/jpeg');
  }

  document.getElementById("reportForm").addEventListener("submit", function(e) {
    const img = document.getElementById("image_data").value;
    if (!img) {
      e.preventDefault();
      alert("Please capture a photo before submitting.");
    }
  });
</script>

</body>
</html>
