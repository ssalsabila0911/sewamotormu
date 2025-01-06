<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Admin</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="<?php echo base_url('assets/css/styles.css'); ?>">
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
      <h2 class="fw-bold">Login Admin</h2>

      <!-- Tampilkan Pesan Logout -->
      <?php if ($this->session->flashdata('logout')): ?>
        <p class="text-success mt-2"><?php echo $this->session->flashdata('logout'); ?></p>
      <?php endif; ?>

      <!-- Tampilkan Pesan Error -->
      <?php if ($this->session->flashdata('error')): ?>
        <p class="text-danger mt-2"><?php echo $this->session->flashdata('error'); ?></p>
      <?php endif; ?>

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
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
      
  <!-- ALERT -->
      <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <?php if ($this->session->flashdata('pesan_sukses')):?>
    <script>swal("Sukses!", "<?php echo $this->session->flashdata('pesan_sukses'); ?>", "success");</script>
    <?php endif ?>
   
   <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <?php if ($this->session->flashdata('pesan_gagal')):?>
    <script>swal("Gagal!", "<?php echo $this->session->flashdata('pesan_gagal'); ?>", "error");</script>
    <?php endif ?>
    
</body>
</html>
