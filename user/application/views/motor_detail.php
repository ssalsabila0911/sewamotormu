<main class="container flex-grow-1 d-flex justify-content-center align-items-center" style="min-height: 80vh; margin-top: 5rem;">
  <div class="row justify-content-center w-100">
    <div class="col-md-10">
      <!-- Kotak Container dengan border yang berubah sesuai status -->
      <div class="border rounded p-5 
           <?php echo (strtolower($motor['status']) === 'tersedia') ? 'border-success' : 'border-danger'; ?>">
        <div class="row align-items-center g-4">
          <!-- Gambar -->
          <div class="col-md-6 text-center">
            <img src="<?php echo $this->config->item('url_motor') . $motor['gambar']; ?>" alt="Motor Image" 
              class="img-fluid rounded p-3" style="max-width: 450px;">
          </div>
          <!-- Keterangan -->
          <div class="col-md-6">
            <h1 class="fw-bold"><?php echo $motor['motor']; ?></h1>
            
            <!-- Status Badge -->
            <span class="badge 
                <?php echo (strtolower($motor['status']) === 'tersedia') ? 'bg-success' : 'bg-danger'; ?>" 
                style="font-size: 1.2rem;">
                <?php echo ucfirst(strtolower($motor['status'])); ?>
            </span>

            <p class="mt-3"><?php echo $motor['deskripsi']; ?></p>

            <!-- Tombol SEWA hanya jika statusnya tersedia -->
            <?php if (strtolower($motor['status']) === 'tersedia'): ?>
            <a class="btn btn-warning" style="font-size: 1rem;" href="<?php echo site_url('sewa/checkout/' . $motor['id_motor']); ?>">Sewa Sekarang</a>
            <?php endif; ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</main>
