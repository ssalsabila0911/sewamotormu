<main class="container my-5 pt-6">
    <div class="form-card">
        <h3 class="fw-bold">Tambah Data Motor</h3>
        <form action="<?php echo base_url('motor/proses_tambah'); ?>" method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <label for="plat">Plat Nomor</label>
                <input type="text" id="plat" name="plat" placeholder="Masukkan plat nomor" required>
            </div>
            <div class="form-group">
                <label for="motor">Motor</label>
                <input type="text" id="motor" name="motor" placeholder="Masukkan nama motor" required>
            </div>
            <div class="form-group">
                <label for="merk">Merk</label>
                <input type="text" id="merk" name="merk" placeholder="Masukkan merk motor" required>
            </div>
            <div class="form-group">
                <label for="harga">Harga Sewa (Rp/hari)</label>
                <input type="number" id="harga" name="harga" placeholder="Masukkan harga sewa" required>
            </div>
            <div class="form-group">
                <label for="status">Status</label>
                <select class="form-control" id="status" name="status" required>
                    <option value="Tersedia">Tersedia</option>
                    <option value="Disewa">Disewa</option>
                </select>
            </div>
            <div class="form-group">
                <label for="deskripsi">Deskripsi</label>
                <textarea  class="form-control" id="deskripsi" name="deskripsi" placeholder="Masukkan deskripsi motor" required></textarea>
            </div>
            <div class="form-group">
                <label for="gambar">Gambar Motor</label>
                <input type="file" id="gambar" name="gambar" accept="image/*" required>
            </div>
            <div class="form-actions">
                <!-- Menggunakan tombol submit -->
                <button type="submit" class="btn btn-primary btn-sm">Simpan</button>
                <a href="<?php echo base_url('motor'); ?>" class="btn btn-warning btn-sm">Kembali</a>
            </div>
        </form>
    </div>
</main>
