<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" href="<?php echo base_url('assets/img/icon-motor.png'); ?>" type="image/png">
  <title>Login Page</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      height: 100vh;
      margin: 0;
      background-image: url('../user/assets/img/sewamotormu.png');
      background-size: cover;
      background-position: center;
      background-repeat: no-repeat;
    }
    .card {
      background: rgba(252, 251, 251, 0.719);
    }
    .btn-close:hover {
      background-color: red;
      opacity: 0.8;
    }
  </style>
</head>
<body>
  <div class="container vh-100 d-flex justify-content-center align-items-center">
    <div class="card shadow-sm p-4" style="width: 22rem;">
    <a href="<?php echo base_url(''); ?>" class="btn-close position-absolute top-0 end-0 m-2"></a>
      <h2 class="text-center mb-4">Login</h2>

      <!-- Menampilkan Pesan Kesalahan -->
      <?php if ($this->session->flashdata('error')): ?>
          <div class="alert alert-danger" role="alert">
              <?php echo $this->session->flashdata('error'); ?>
          </div>
      <?php endif; ?>

      <!-- Menampilkan Pesan Sukses Registrasi -->
      <?php if ($this->session->flashdata('success')): ?>
          <div class="alert alert-success" role="alert">
              <?php echo $this->session->flashdata('success'); ?>
          </div>
      <?php endif; ?>

      <form action="<?php echo base_url('auth/proses_login'); ?>" method="POST">
        <div class="mb-3">
          <label for="email" class="form-label">Email:</label>
          <input type="email" class="form-control" id="email" name="email" required>
        </div>
        <div class="mb-3">
          <label for="password" class="form-label">Password:</label>
          <input type="password" class="form-control" id="password" name="password" required>
        </div>
        <button type="submit" class="btn btn-primary w-100">Login</button>
        <div class="text-center mt-3">
          <p>Don't have an account? <a href="<?php echo base_url('register'); ?>">Register here</a>.</p>
        </div>
      </form>
    </div>
  </div>
  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

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
