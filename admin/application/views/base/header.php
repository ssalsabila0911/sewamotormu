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
    <link rel="stylesheet" href="<?php echo base_url('assets/css/styles.css'); ?>">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css"
        integrity="sha384-tViUnnbYAV00FLIhhi3v/dWt3Jxw4gZQcNoSCxCIFNJVCx7/D55/wXsrNIRANwdD" crossorigin="anonymous" />
</head>

<body class="d-flex flex-column min-vh-100">
    <!-- NAVBAR -->
    <header class="fixed-top bg-blue">
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container-fluid px-4 px-lg-5">
                <a class="navbar-brand fw-bold fs-4" href="<?php echo base_url('dashboard'); ?>">
                    <img src="<?php echo base_url('assets/img/icon-motor.png'); ?>" alt="Icon" class="icon-header">
                    ADMIN sewamotormu
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                    <ul class="navbar-nav gap-lg-4">
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo base_url('dashboard'); ?>">Dashboard</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo base_url('motor'); ?>">Data Motor</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo base_url('customer'); ?>">Data Customer</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo base_url('sewa'); ?>">Data Sewa</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo base_url('akun/logout'); ?>">Log Out</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
