<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" href="<?php echo base_url('assets/img/icon-motor.png'); ?>" type="image/png">
  <title>Register Page</title>
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
    <div class="card shadow-sm p-4" style="width: 24rem;">
      <a href="<?php echo base_url(''); ?>" class="btn-close position-absolute top-0 end-0 m-2" aria-label="Close"></a>
      <h2 class="text-center mb-4">Register</h2>
      
      <!-- Flash Message for Error or Success -->
      <?php if ($this->session->flashdata('error')): ?>
          <div class="alert alert-danger" role="alert">
              <?php echo $this->session->flashdata('error'); ?>
          </div>
      <?php endif; ?>
      <?php if ($this->session->flashdata('success')): ?>
          <div class="alert alert-success" role="alert">
              <?php echo $this->session->flashdata('success'); ?>
          </div>
      <?php endif; ?>

      <form action="<?php echo base_url('register'); ?>" method="POST">
        <div class="mb-3">
          <label for="name" class="form-label">Nama Lengkap:</label>
          <input type="text" class="form-control" id="name" name="name" value="<?php echo set_value('name'); ?>" required>
        </div>
        <div class="mb-3">
          <label for="email" class="form-label">Email:</label>
          <input type="email" class="form-control" id="email" name="email" value="<?php echo set_value('email'); ?>" required>
        </div>
        <div class="mb-3">
          <label for="password" class="form-label">Password:</label>
          <input type="password" class="form-control" id="password" name="password" required>
          <!-- Menampilkan pesan error jika password kurang dari 6 karakter -->
          <?php if (form_error('password')): ?>
            <div class="text-danger">
                <?php echo form_error('password'); ?>
            </div>
          <?php endif; ?>
        </div>
        <div class="mb-3">
          <label for="no-telp" class="form-label">Nomor Telepon:</label>
          <input type="text" class="form-control" id="no-telp" name="no-telp" value="<?php echo set_value('no-telp'); ?>" required>
        </div>
        <button type="submit" class="btn btn-primary w-100">Register</button>
        <div class="text-center mt-3">
          <p>Already have an account? <a href="<?php echo base_url('login'); ?>">Login here</a>.</p>
        </div>
      </form>
    </div>
  </div>
  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
