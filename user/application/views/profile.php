<div class="container mt-5 pt-6 flex-grow-1">
    <div class="card shadow-lg mx-auto" style="max-width: 800px;">
        <div class="card-body">
            <h5 class="card-title">Profil Pengguna</h5>
            <form>
                <div class="row mb-3">
                    <label class="col-sm-3 col-form-label">Nama</label>
                    <div class="col-sm-9">
                        <p class="form-control-plaintext"><?php echo $user['nama']; ?></p>
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-3 col-form-label">Email</label>
                    <div class="col-sm-9">
                        <p class="form-control-plaintext"><?php echo $user['email']; ?></p>
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-3 col-form-label">Telepon</label>
                    <div class="col-sm-9">
                        <p class="form-control-plaintext"><?php echo $user['no_tlp']; ?></p>
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-3 col-form-label">Jenis Kelamin</label>
                    <div class="col-sm-9">
                        <p class="form-control-plaintext"><?php echo $user['jenkel']; ?></p>
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-3 col-form-label">Alamat</label>
                    <div class="col-sm-9">
                        <p class="form-control-plaintext"><?php echo $user['alamat']; ?></p>
                    </div>
                </div>
                <div class="text-end">
                    <a href="<?php echo site_url('homepage'); ?>" class="btn btn-warning">Kembali</a>
                    <a href="<?php echo site_url('profile/edit'); ?>" class="btn btn-info">Edit Profil</a>
                </div>
            </form>
        </div>
    </div>
</div>
