<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="<?php echo base_url('assets/img/icon-motor.png'); ?>" type="image/png">
    <title>Rental Motor</title>
    <!-- Link Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- CSS CUSTOM -->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/style.css'); ?>">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css"
        integrity="sha384-tViUnnbYAV00FLIhhi3v/dWt3Jxw4gZQcNoSCxCIFNJVCx7/D55/wXsrNIRANwdD" crossorigin="anonymous" />
</head>

<body>
    <!-- NAVBAR -->
    <header class="fixed-top bg-info">
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container-fluid px-4 px-lg-5">
                <a class="navbar-brand fw-bold fs-4" href="#">
                    <img src="<?php echo base_url('assets/img/icon-motor.png'); ?>" alt="Icon" class="icon-header">
                    sewamotormu</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                    <ul class="navbar-nav gap-lg-5">
                        <li class="nav-item">
                            <a class="nav-link" href="#home">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#about">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#contact">Contact Us</a>
                        </li>
                        <a href="<?php echo base_url('login'); ?>" class="nav-profile-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" class="bi bi-person-circle"
                                viewBox="0 0 16 16">
                                <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0" />
                                <path fill-rule="evenodd"
                                    d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1" />
                            </svg>
                        </a>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

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
                    <div class="col-lg-6 order-1 order-lg-2 align-item-center">
                        <img src="<?php echo base_url('assets/img/jumbotron.png'); ?>" alt="Motor Rental" class="img-fluid img-jumbotron" />
                    </div>
                </div>
            </div>
        </section>
        <!-- ABOUT US -->
        <section id="about" class="py-5">
                <div class="container">
                    <div class="row align-items-center">
                        <h2 class="fw-bold fs-2 text-center mb-4">About Us</h2>
                        <!-- About Text -->
                        <div class="col-lg-6 mb-4 mb-lg-0 text-center text-lg-start">
                            <p class="text-about1">
                                <strong>SewaMotorMu</strong> adalah platform penyewaan motor yang didedikasikan untuk memberikan
                                solusi transportasi yang mudah dan terjangkau untuk Anda. Kami memiliki berbagai pilihan motor yang dapat
                                disesuaikan dengan kebutuhan Anda. Dengan proses yang cepat dan mudah, Anda dapat menikmati perjalanan
                                yang nyaman tanpa harus memikirkan biaya transportasi yang tinggi.
                            </p>
                            <p class="text-about2">
                                Kami percaya bahwa transportasi yang efisien adalah kunci untuk mendukung mobilitas masyarakat,
                                terutama bagi pelajar dan pekerja yang membutuhkan solusi transportasi fleksibel. Dengan harga yang
                                kompetitif dan layanan yang ramah, kami siap menjadi mitra perjalanan Anda.
                            </p>
                        </div>
                        <!-- About Image -->
                        <div class="col-lg-6 text-center">
                            <img src="<?php echo base_url('assets/img/aboutus.png'); ?>" alt="About Us Image"
                                class="img-fluid img-aboutus mx-auto d-block">
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
                                <a href="<?php echo base_url('motor'); ?>" style="text-decoration: none; color: inherit;">
                                    <div class="card shadow-sm">
                                        <img src="<?php echo $this->config->item('url_motor').$motor['gambar']; ?>" class="card-img-top" alt="<?php echo $motor['motor']; ?>">
                                        <div class="card-body">
                                            <h5 class="card-title"><?php echo $motor['motor']; ?></h5>
                                            <p class="card-text text-muted">Harga sewa: Rp<?php echo number_format($motor['harga'], 0, ',', '.'); ?>/hari</p>
                                            <span class="btn btn-dark">Sewa Sekarang</span>
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



        <!-- CONTACT US -->
            <section id="contact" class="py-5">
                <div class="container">
                    <div class="text-center">
                        <h2 class="mb-5 fw-bold text-contact">Contact Us</h2>
                    </div>
                    <!-- Kolom Peta dan Informasi Kontak -->
                    <div class="row">
                        <!-- Map Section -->
                        <div class="col-lg-6 mb-4">
                            <div class="ratio ratio-16x9 w-100">
                                <iframe
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5590.788524539407!2d110.40691770433317!3d-7.759624368521459!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a599bd3bdc4ef%3A0x6f1714b0c4544586!2sUniversity%20of%20Amikom%20Yogyakarta!5e0!3m2!1sen!2sid!4v1732278183565!5m2!1sen!2sid"
                                    width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"
                                    referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                        </div>
                        <!-- Contact Information -->
                        <div class="col-lg-6">
                            <p class="text-muted">Jika Anda memiliki pertanyaan, jangan ragu untuk menghubungi kami melalui
                                informasi berikut:</p>
                            <!-- Email and WhatsApp -->
                            <ul class="list-unstyled mb-4">
                                <li>
                                    <a href="mailto:info@sewamotormu.com" class="d-flex align-items-center gap-2 text-decoration-none text-dark">
                                        <i class="bi bi-envelope-fill icon-email"></i>
                                        <span>info@sewamotormu.com</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://wa.me/6281234567890" class="d-flex align-items-center gap-2 text-decoration-none text-dark">
                                        <i class="bi bi-whatsapp icon-wa"></i>
                                        <span>+62 812 3456 7890</span>
                                    </a>
                                </li>
                            </ul>
                            <!-- Social Media Section -->
                            <div>
                                <h5 class="fw-bold">Social Media</h5>
                                <ul class="list-unstyled">
                                    <li>
                                        <a href="https://instagram.com" target="_blank" class="d-flex align-items-center gap-2 text-decoration-none text-dark">
                                            <i class="bi bi-instagram icon-ig"></i>
                                            <span>Instagram</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.facebook.com" target="_blank" class="d-flex align-items-center gap-2 text-decoration-none text-dark">
                                            <i class="bi bi-facebook icon-fb"></i>
                                            <span>Facebook</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
    </main>
        <!-- FOOTER -->
        <footer class="bg-info text-black py-2">
        <hr class="bg-white mt-4">
        <div class="text-center small">
            <p class="mb-0">&copy; 2024 SewaMotorMu. All Rights Reserved.</p>
        </div>
    </footer>

    <!-- BOOSTRAP JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <!-- JS CUSTOM -->
    <script src="<?php echo base_url('assets/js/script.js'); ?>"></script>

        <!-- ALERT -->
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <?php if ($this->session->flashdata('pesan_sukses')):?>
    <script>swal("Sukses!", "<?php echo $this->session->flashdata('pesan_sukses'); ?>", "success");</script>
    <?php endif ?>
   
   <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <?php if ($this->session->flashdata('pesan_gagal')):?>
    <script>swal("Gagal!", "<?php echo $this->session->flashdata('pesan_gagal'); ?>", "error");</script>
    <?php endif ?>
</body>

</html>
