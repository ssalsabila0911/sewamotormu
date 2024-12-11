<main>
        <!-- JUMBOTRON HOME -->
        <section class="p-5" id="home">
            <div class="container bg-pink rounded-5 mt-5">
                <div
                    class="row d-flex justify-content-center align-items-center p-5 gap-5 gap-lg-0 text-center text-lg-start">
                    <!-- Kolom Teks -->
                    <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column gap-3">
                        <h1 class="fw-bold fs-1 lh-base">
                            Solusi Transportasi yang Praktis untuk Keseharian Anda
                        </h1>
                        <p class="text-muted">
                            Dengan <strong>SewaMotorMu</strong>, Anda dapat dengan mudah menyewa motor dengan harga
                            terjangkau dan berbagai pilihan kendaraan untuk memenuhi kebutuhan perjalanan Anda.
                        </p>
                        <div class="d-flex flex-column flex-lg-row gap-2 gap-lg-4">
                            <a class="btn btn-dark p-2 rounded-2" href="<?php echo base_url('motor'); ?>">Sewa Sekarang</a>
                        </div>
                    </div>

                    <!-- Kolom Gambar -->
                    <div class="col-lg-6 order-1 order-lg-2">
                        <img src="<?php echo base_url('assets/img/jumbotron.png'); ?>" alt="Motor Rental" class="img-fluid img-jumbotron" />
                    </div>
                </div>
            </div>
        </section>

        <!-- DATA MOTOR -->
        <section id="motor" class="py-5">
    <div class="container">
        <div class="text-center">
            <h2 class="mb-5 fw-bold text-motor">Unit Terlaris</h2>
        </div>
        <div class="row">
            <?php foreach ($motors as $motor): ?>
                <div class="col-md-6 col-lg-3 mb-4">
                    <a href="<?php echo site_url('motor/detail_motor/'.$motor['id_motor']); ?>" class="text-decoration-none">
                    <div class="card shadow-sm">
                        <img src="<?php echo $this->config->item('url_motor').$motor['gambar']; ?>" class="card-img-top" alt="<?php echo $motor['motor']; ?>">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $motor['motor']; ?></h5>
                            <p class="card-text text-muted">Harga sewa: Rp<?php echo number_format($motor['harga'], 0, ',', '.'); ?>/hari</p>
                        </div>
                    </div>
                </a>
                </div>
            <?php endforeach; ?>
        </div>
        <div class="mt-2 text-end">
            <a href="<?php echo base_url('motor'); ?>">
                <button class="btn btn-success">More</button>
            </a>
        </div>
    </div>
</section>

    </main>