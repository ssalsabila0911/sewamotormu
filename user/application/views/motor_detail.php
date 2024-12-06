<main class="container d-flex align-items-center justify-content-center"
    style="min-height: 565px;">
    <div class="row align-items-center">
      <!-- Image -->
      <div class="col-md-6 text-center mb-4 mb-md-0">
        <img src="<?php echo $this->config->item('url_motor') . $motor['gambar']; ?>" alt="Motor Image" class="img-fluid rounded p-2"
          style="max-width: 400px;">
      </div>
      <!-- Details -->
      <div class="col-md-6">
        <h1 class="fw-bold"><?php echo $motor['motor']; ?></h1>
        
        <!-- Status Badge -->
        <span class="badge 
            <?php echo (strtolower($motor['status']) === 'tersedia') ? 'bg-success' : 'bg-danger'; ?>">
            <?php echo ucfirst(strtolower($motor['status'])); ?>
        </span>

        <p><?php echo $motor['deskripsi']; ?></p>

        <!-- Tombol SEWA hanya jika statusnya tersedia -->
        <?php if (strtolower($motor['status']) === 'tersedia'): ?>
        <div class="mb-3">
          <label for="rental-duration" class="form-label">Lama Sewa (hari):</label>
          <input type="number" id="rental-duration" class="form-control" placeholder="Masukkan jumlah hari" min="1">
        </div>
        <button class="btn btn-warning">SEWA</button>
        <?php endif; ?>
      </div>
    </div>
</main>
