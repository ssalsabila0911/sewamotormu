<main class="container mt-5 pt-5 flex-grow-1" style="margin-top: 20rem;">
  <div class="row justify-content-center">
    <div class="col-md-10">
      <!-- Kotak Container -->
      <div class="border border-danger rounded p-5" style="border-color: #ccc;">
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
            <div class="mb-3">
              <label for="rental-duration" class="form-label">Lama Sewa (hari):</label>
              <input type="number" id="rental-duration" class="form-control" placeholder="Masukkan jumlah hari" min="1">
            </div>
            <button class="btn btn-warning" style="font-size: 1.2rem;">SEWA</button>
            <?php endif; ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</main>
