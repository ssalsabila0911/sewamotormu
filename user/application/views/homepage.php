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
                            <button class="btn btn-dark p-2 rounded-2">Sewa Sekarang</button>
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
                    <h2 class="mb-5 fw-bold text-motor">Unit Tersedia</h2>
                </div>
                <!-- Kolom Data Motor -->
                <div class="row">
                    <!-- Contoh Motor 1 -->
                    <div class="col-md-6 col-lg-3 mb-4">
                        <div class="card shadow-sm">
                            <img src="<?php echo base_url('assets/img/motor1.jpg'); ?>" class="card-img-top" alt="Motor 1">
                            <div class="card-body">
                                <h5 class="card-title">Yamaha NMAX</h5>
                                <p class="card-text text-muted">Harga sewa: Rp100,000/hari</p>
                                <button class="btn btn-dark">Sewa Sekarang</button>
                            </div>
                        </div>
                    </div>
                    <!-- Contoh Motor 2 -->
                    <div class="col-md-6 col-lg-3 mb-4">
                        <div class="card shadow-sm">
                            <img src="<?php echo base_url('assets/img/motor2.jpg'); ?>" class="card-img-top" alt="Motor 2">
                            <div class="card-body">
                                <h5 class="card-title">Honda Vario</h5>
                                <p class="card-text text-muted">Harga sewa: Rp80,000/hari</p>
                                <button class="btn btn-dark">Sewa Sekarang</button>
                            </div>
                        </div>
                    </div>
                    <!-- Contoh Motor 3 -->
                    <div class="col-md-6 col-lg-3 mb-4">
                        <div class="card shadow-sm">
                            <img src="<?php echo base_url('assets/img/motor3.jpg'); ?>" class="card-img-top" alt="Motor 3">
                            <div class="card-body">
                                <h5 class="card-title">Suzuki Address</h5>
                                <p class="card-text text-muted">Harga sewa: Rp70,000/hari</p>
                                <button class="btn btn-dark">Sewa Sekarang</button>
                            </div>
                        </div>
                    </div>
                    <!-- Contoh Motor 4 -->
                    <div class="col-md-6 col-lg-3 mb-4">
                        <div class="card shadow-sm">
                            <img src="<?php echo base_url('assets/img/motor3.jpg'); ?>" class="card-img-top" alt="Motor 4">
                            <div class="card-body">
                                <h5 class="card-title">Honda Beat</h5>
                                <p class="card-text text-muted">Harga sewa: Rp60,000/hari</p>
                                <button class="btn btn-dark">Sewa Sekarang</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mt-2 text-end">
                    <a href="../pages/motor.html">
                        <button class="btn btn-success">More</button>
                    </a>
                </div>
            </div>
        </section>
    </main>