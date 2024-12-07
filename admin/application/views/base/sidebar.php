<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SewaMotormu Dashboard</title>
  <link rel="stylesheet" href="<?php echo base_url('assets/css/sidebar.css'); ?>">
</head>
<body>
  <div class="container">
    <!-- Sidebar -->
    <aside class="sidebar">
      <div class="logo">
        <h2>SEWAMOTORMU</h2>
      </div>
      <nav>
        <ul>
          <li class="active">Dashboard</li>
          <li>Data Motor</li>
          <li>Data Sewa</li>
          <li>Data Customer</li>
        </ul>
      </nav>
      <a href="<?php echo base_url('akun/logout'); ?>" class="logout">Logout</a>
    </aside>
    
  </div>
</body>
</html>
