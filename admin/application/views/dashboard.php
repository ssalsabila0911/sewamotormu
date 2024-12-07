<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SewaMotormu Dashboard</title>
  <link rel="stylesheet" href="<?php echo base_url('assets/css/sidebar.css'); ?>">
  <style>
    /* Style for notification */
    .notification {
      position: fixed;
      top: -50px;
      left: 50%;
      transform: translateX(-50%);
      background-color: #28a745;
      color: white;
      padding: 15px 20px;
      border-radius: 5px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
      font-size: 16px;
      font-weight: bold;
      z-index: 1000;
      transition: top 0.5s ease-in-out;
    }
    .notification.show {
      top: 10px;
    }
  </style>
</head>
<body>
  <div class="main-content">
    <h1>Welcome to the Dashboard</h1>
    <p>Ini adalah halaman dashboard tempat Anda dapat mengelola berbagai data.</p>

    <!-- Dashboard Cards/Widgets -->
    <div class="dashboard-widgets">
      <div class="widget">
        <h3>Data Motor</h3>
        <p>Total motor yang tersedia: 50</p>
      </div>
      <div class="widget">
        <h3>Data Sewa</h3>
        <p>Total sewa: 150</p>
      </div>
      <div class="widget">
        <h3>Data Customer</h3>
        <p>Total customer: 200</p>
      </div>
    </div>
  </div>

  <!-- Notification -->
  <?php if ($this->session->flashdata('login_success')): ?>
    <div id="notification" class="notification">
      <?php echo $this->session->flashdata('login_success'); ?>
    </div>
  <?php endif; ?>

  <script>
    document.addEventListener("DOMContentLoaded", function () {
      const notification = document.getElementById("notification");
      if (notification) {
        // Show notification
        notification.classList.add("show");

        // Hide notification after 3 seconds
        setTimeout(() => {
          notification.classList.remove("show");
        }, 3000);
      }
    });
  </script>
</body>
</html>
