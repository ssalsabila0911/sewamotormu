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

<body class="d-flex flex-column min-vh-100">
    <!-- NAVBAR -->
    <header class="fixed-top bg-info">
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container-fluid px-4 px-lg-5">
                <a class="navbar-brand fw-bold fs-4" href="<?php echo base_url('homepage'); ?>">
                    <img src="<?php echo base_url('assets/img/icon-motor.png'); ?>" alt="Icon" class="icon-header">
                    sewamotormu
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                    <ul class="navbar-nav gap-lg-4">
                        <!-- Link Home -->
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo base_url('motor'); ?>">Unit</a>
                        </li>
                        <!-- Link Riwayat -->
                        <?php if ($this->session->userdata('logged_in')): ?>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo base_url('sewa/riwayat'); ?>">Riwayat</a>
                            </li>
                        <?php endif; ?>
                        <!-- Dropdown Halo User -->
                        <?php if ($this->session->userdata('logged_in')): ?>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle d-flex align-items-center" href="#" id="userDropdown"
                                    role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Halo <?php echo $this->session->userdata('nama'); ?> <!-- Menampilkan username -->
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="userDropdown">
                                    <li><a class="dropdown-item" href="<?php echo base_url('profile'); ?>">Profile</a></li>
                                    <li><a class="dropdown-item" href="<?php echo base_url('auth/logout'); ?>">Sign Out</a></li>
                                </ul>
                            </li>
                        <?php else: ?>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo base_url('auth/login'); ?>">Login</a>
                            </li>
                        <?php endif; ?>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    
    <?php if ($this->session->flashdata('popup_message')): ?>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            let message = "<?php echo $this->session->flashdata('popup_message'); ?>";
            let modalHtml = `
                <div class="modal fade" id="popupModal" tabindex="-1" aria-labelledby="popupModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="popupModalLabel">Notifikasi</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                ${message}
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-primary" data-bs-dismiss="modal">OK</button>
                            </div>
                        </div>
                    </div>
                </div>`;
            
            document.body.insertAdjacentHTML('beforeend', modalHtml);
            let popupModal = new bootstrap.Modal(document.getElementById('popupModal'));
            popupModal.show();
        });
    </script>
<?php endif; ?>
