<main class="container flex-grow-1 d-flex justify-content-center align-items-center" style="min-height: 80vh; margin-top: 5rem;">
    <div class="container">
        <div class="row align-items-center" style="height: 100%;"> <!-- Tambahkan height untuk memusatkan kolom -->
            <div class="col-md-6 text-center" style="padding-top: 2rem;"> <!-- Tambahkan padding-top untuk menggeser gambar -->
                <img src="<?php echo $this->config->item('url_motor') . $motor['gambar']; ?>" alt="Gambar Motor" class="img-fluid rounded" style="max-width: 100%; margin-bottom: 2rem;">
            </div>
            <div class="col-md-6">
                <h2>Checkout Sewa Motor</h2>
                <form method="post" action="<?php echo site_url('sewa/proses_sewa'); ?>">
                    <input type="hidden" name="id_motor" value="<?php echo $motor['id_motor']; ?>">
                    <input type="hidden" name="id_user" value="<?php echo $this->session->userdata('id_user'); ?>">


                    <div class="form-group mb-4">
                        <label for="plat_motor">Plat Motor:</label>
                        <input type="text" id="plat_motor" class="form-control" value="<?php echo $motor['plat_motor']; ?>" readonly>
                    </div>
                    <div class="form-group mb-4">
                        <label for="nama_motor">Nama Motor:</label>
                        <input type="text" id="nama_motor" class="form-control" value="<?php echo $motor['motor']; ?>" readonly>
                    </div>
                    <div class="form-group mb-4">
                        <label for="harga">Harga (per hari):</label>
                        <input type="text" id="harga" class="form-control" value="Rp <?php echo number_format($motor['harga'], 0, ',', '.'); ?>" readonly>
                        <input type="hidden" name="harga" value="<?php echo $motor['harga']; ?>">

                    </div>
                    <div class="form-group mb-4">
                        <label for="lama_sewa">Lama Sewa (hari):</label>
                        <input type="number" name="lama_sewa" id="lama_sewa" class="form-control" required>
                    </div>
                    <div class="form-group mb-4">
                        <label for="nik">NIK:</label>
                        <input type="text" name="nik" id="nik" class="form-control" required>
                    </div>
                    <button type="submit" class="btn btn-success mb-4">Sewa</button>
                </form>
            </div>
        </div>
    </div>
</main>
