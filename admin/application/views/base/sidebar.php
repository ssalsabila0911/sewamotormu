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
      <li class="<?php echo ($active_page == 'dashboard') ? 'active' : ''; ?>"><a href="<?php echo base_url('dashboard'); ?>">Dashboard</a></li>
      <li class="<?php echo ($active_page == 'data_motor') ? 'active' : ''; ?>"><a href="<?php echo base_url('motor'); ?>">Data Motor</a></li>
      <li class="<?php echo ($active_page == 'data_sewa') ? 'active' : ''; ?>"><a href="<?php echo base_url('sewa'); ?>">Data Sewa</a></li>
      <li class="<?php echo ($active_page == 'data_customer') ? 'active' : ''; ?>"><a href="<?php echo base_url('customer'); ?>">Data Customer</a></li>
    </ul>
  </nav>
  <a href="<?php echo base_url('akun/logout'); ?>" class="logout">Logout</a>
</aside>

    
  </div>
