<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Report Needy Person</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
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


<!-- Report Form -->
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

<!-- Footer -->
<footer class="text-center mt-5 mb-3 text-muted">
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

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
