<div class="container mt-5 pt-6 flex-grow-1">
    <div class="card shadow-lg mx-auto" style="max-width: 800px;">
        <div class="card-body">
            <h5 class="card-title">Edit Profil Pengguna</h5>
            <form method="POST" action="<?php echo site_url('profile/update'); ?>">
                <div class="row mb-3">
                    <label class="col-sm-3 col-form-label">Nama</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="nama" value="<?php echo $user['nama']; ?>" required>
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-3 col-form-label">Email</label>
                    <div class="col-sm-9">
                        <input type="email" class="form-control" name="email" value="<?php echo $user['email']; ?>" required>
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-3 col-form-label">Telepon</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="no_tlp" value="<?php echo $user['no_tlp']; ?>" required>
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-3 col-form-label">Jenis Kelamin</label>
                    <div class="col-sm-9">
                        <select class="form-control" name="jenkel">
                            <option value="Laki-Laki" <?php echo ($user['jenkel'] == 'Laki-Laki') ? 'selected' : ''; ?>>Laki-Laki</option>
                            <option value="Perempuan" <?php echo ($user['jenkel'] == 'Perempuan') ? 'selected' : ''; ?>>Perempuan</option>
                        </select>
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-3 col-form-label">Alamat</label>
                    <div class="col-sm-9">
                        <textarea class="form-control" name="alamat" required><?php echo $user['alamat']; ?></textarea>
                    </div>
                </div>
                <div class="text-end">
                    <a href="<?php echo site_url('profile'); ?>" class="btn btn-danger">Batal</a>
                    <button type="submit" class="btn btn-success">Simpan Perubahan</button>
                </div>
            </form>
        </div>
    </div>
</div>
