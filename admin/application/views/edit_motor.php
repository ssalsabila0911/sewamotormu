<main class="container my-5 pt-7">
    <h2 class="fw-bold">Edit Motor</h2>
    <form action="<?= base_url('motor/proses_edit/'.$motor['id_motor']) ?>" method="POST" enctype="multipart/form-data">
        <div class="form-group">
            <label for="plat">Plat Motor:</label>
            <input type="text" class="form-control" id="plat" name="plat" value="<?= $motor['plat_motor'] ?>" required>
        </div>
        <div class="form-group">
            <label for="motor">Motor:</label>
            <input type="text" class="form-control" id="motor" name="motor" value="<?= $motor['motor'] ?>" required>
        </div>
        <div class="form-group">
            <label for="merk">Merk:</label>
            <input type="text" class="form-control" id="merk" name="merk" value="<?= $motor['merk'] ?>" required>
        </div>
        <div class="form-group">
            <label for="harga">Harga:</label>
            <input type="number" class="form-control" id="harga" name="harga" value="<?= $motor['harga'] ?>" required>
        </div>
        <div class="form-group">
            <label for="status">Status:</label>
            <select class="form-control" id="status" name="status" required>
                <option value="Tersedia" <?= $motor['status'] === 'Tersedia' ? 'selected' : '' ?>>Tersedia</option>
                <option value="Disewa" <?= $motor['status'] === 'Disewa' ? 'selected' : '' ?>>Disewa</option>
            </select>
        </div>
        <div class="form-group">
            <label for="deskripsi">Deskripsi:</label>
            <textarea class="form-control" id="deskripsi" name="deskripsi" required><?= $motor['deskripsi'] ?></textarea>
        </div>
        <div class="form-group">
            <label for="gambar">Gambar Motor:</label>
            <input type="file" class="form-control" id="gambar" name="gambar">
            <input type="hidden" name="gambar_lama" value="<?= $motor['gambar'] ?>">
            <!-- Menampilkan gambar lama -->
            <?php if ($motor['gambar']): ?>
                <img src="<?= base_url('assets/motor/'.$motor['gambar']) ?>" width="100" alt="Gambar Motor">
            <?php endif; ?>
        </div>
        <button type="submit" class="btn btn-primary btn-sm">Simpan Perubahan</button>
        <a href="<?php echo base_url('motor'); ?>" class="btn btn-warning btn-sm">Kembali</a>
    </form>
</main>
