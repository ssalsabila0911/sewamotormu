<div class="container my-5 pt-5 flex-grow-1">
    <div class="card shadow-lg mx-auto" style="max-width: 800px;">
        <div class="card-body">
            <h4 class="card-title fw-bold mb-4">Data Customer</h4>
            
            <!-- NIK -->
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">NIK</label>
                <div class="col-sm-9">
                    <p class="form-control-plaintext">
                        <?php echo $customer['NIK'] ?? 'Data tidak tersedia'; ?>
                    </p>
                </div>
            </div>
            
            <!-- Nama -->
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Nama</label>
                <div class="col-sm-9">
                    <p class="form-control-plaintext">
                        <?php echo $customer['nama'] ?? 'Data tidak tersedia'; ?>
                    </p>
                </div>
            </div>
            
            <!-- Jenis Kelamin -->
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Jenis Kelamin</label>
                <div class="col-sm-9">
                    <p class="form-control-plaintext">
                        <?php echo $customer['jenkel'] ?? 'Data tidak tersedia'; ?>
                    </p>
                </div>
            </div>
            
            <!-- Email -->
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Email</label>
                <div class="col-sm-9">
                    <p class="form-control-plaintext">
                        <?php echo $customer['email'] ?? 'Data tidak tersedia'; ?>
                    </p>
                </div>
            </div>
            
            <!-- Nomor Telepon -->
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Nomor Telepon</label>
                <div class="col-sm-9">
                    <p class="form-control-plaintext">
                        <?php echo $customer['no_tlp'] ?? 'Data tidak tersedia'; ?>
                    </p>
                </div>
            </div>
            
            <!-- Alamat -->
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Alamat Lengkap</label>
                <div class="col-sm-9">
                    <p class="form-control-plaintext">
                        <?php echo $customer['alamat'] ?? 'Data tidak tersedia'; ?>
                    </p>
                </div>
            </div>
            
            <div class="text-end">
                <a href="<?php echo base_url('customer'); ?>" class="btn btn-warning">Kembali</a>
            </div>
        </div>
    </div>
</div>
