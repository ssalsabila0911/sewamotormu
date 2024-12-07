<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Admin</title>
  <link rel="stylesheet" href="<?php echo base_url('assets/css/style.css'); ?>">
</head>
<body>
  <div class="login-container">
    <!-- Left Section with Image -->
    <div class="login-left">
      <div class="illustration">
        <img src="<?php echo base_url('assets/img/icon_admin.png'); ?>" alt="Motor Icon">
      </div>
    </div>
    
    <!-- Right Section with Form -->
    <div class="login-right">
      <h2>Login Admin</h2>
      <form action="<?php echo base_url('akun/proses_login'); ?>" method="post">
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" placeholder="Masukkan Email Anda" required>
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" id="password" name="password" placeholder="Masukkan Password Anda" required>
        </div>
        <button type="submit">LOGIN</button>
      </form>

      <?php if ($this->session->flashdata('error')): ?>
      <div class="alert alert-danger">
          <?php echo $this->session->flashdata('error'); ?>
      </div>
      <?php endif; ?>

    </div>
  </div>
</body>
</html>
