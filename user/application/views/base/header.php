<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
                <a class="navbar-brand fw-bold fs-4" href="#">
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
                            <a class="nav-link" href="#home">Home</a>
                        </li>
                        <!-- Icon Notifikasi -->
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" class="bi bi-bell-fill"
                                    viewBox="0 0 16 16">
                                    <path
                                        d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2m.995-14.901a1 1 0 1 0-1.99 0A5 5 0 0 0 3 6c0 1.098-.5 6-2 7h14c-1.5-1-2-5.902-2-7 0-2.42-1.72-4.44-4.005-4.901" />
                                </svg>
                            </a>
                        </li>
                        <!-- Dropdown Halo User -->
                        <?php if ($this->session->userdata('logged_in')): ?>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle d-flex align-items-center" href="#" id="userDropdown"
                                    role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Halo <?php echo $this->session->userdata('nama'); ?> <!-- Menampilkan username -->
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="userDropdown">
                                    <li><a class="dropdown-item" href="#">Profile</a></li>
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
