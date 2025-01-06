-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 06, 2025 at 05:27 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sewamotormu`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `email`, `password`) VALUES
(1, 'admin@gmail.com', 'f865b53623b121fd34ee5426c792e5c33af8c227');

-- --------------------------------------------------------

--
-- Table structure for table `detail_sewa`
--

CREATE TABLE `detail_sewa` (
  `id_detail_sewa` int(11) NOT NULL,
  `id_sewa` int(11) NOT NULL,
  `id_motor` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `status_bayar` varchar(20) NOT NULL,
  `total` int(11) NOT NULL,
  `tgl_sewa` date NOT NULL,
  `tgl_kembali` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `detail_sewa`
--

INSERT INTO `detail_sewa` (`id_detail_sewa`, `id_sewa`, `id_motor`, `id_user`, `status_bayar`, `total`, `tgl_sewa`, `tgl_kembali`) VALUES
(1, 20, 1, 8, 'Lunas', 50000, '2024-12-12', '2024-12-14'),
(2, 21, 3, 7, 'Lunas', 35000, '2024-12-13', '2024-12-14'),
(3, 23, 4, 7, 'Belum Dibayar', 60000, '2024-12-13', '2024-12-15'),
(4, 24, 1, 8, 'Belum Dibayar', 50000, '2024-12-14', '2024-12-16'),
(5, 25, 1, 8, 'Belum Dibayar', 50000, '2024-12-14', '2024-12-16'),
(6, 26, 2, 8, 'Belum Dibayar', 70000, '2024-12-14', '2024-12-16'),
(7, 27, 3, 7, 'Belum Dibayar', 70000, '2024-12-14', '2024-12-16'),
(8, 28, 1, 7, 'Belum Dibayar', 50000, '2024-12-14', '2024-12-16'),
(9, 29, 1, 8, 'Belum Dibayar', 50000, '2024-12-17', '2024-12-19'),
(10, 30, 4, 8, 'Belum Dibayar', 60000, '2024-12-17', '2024-12-19'),
(11, 31, 1, 8, 'Belum Dibayar', 50000, '2024-12-17', '2024-12-19'),
(12, 32, 1, 7, 'Belum Dibayar', 50000, '2024-12-17', '2024-12-19'),
(13, 33, 3, 7, 'Belum Dibayar', 70000, '2024-12-17', '2024-12-19'),
(14, 34, 1, 7, 'Belum Dibayar', 50000, '2024-12-17', '2024-12-19'),
(15, 35, 2, 8, 'Belum Dibayar', 70000, '2024-12-17', '2024-12-19');

-- --------------------------------------------------------

--
-- Table structure for table `motor`
--

CREATE TABLE `motor` (
  `id_motor` int(11) NOT NULL,
  `plat_motor` varchar(20) NOT NULL,
  `motor` varchar(50) NOT NULL,
  `merk` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `harga` int(11) NOT NULL,
  `deskripsi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `motor`
--

INSERT INTO `motor` (`id_motor`, `plat_motor`, `motor`, `merk`, `status`, `gambar`, `harga`, `deskripsi`) VALUES
(1, 'AA 2667 BR', 'Honda Beat', 'Honda', 'Tersedia', 'motor4.png', 25000, 'Honda Beat Keluaran Tahun 2020 dengan nomor plat AA 2667 BR. Kondisi mulus tanpa lecet seperti baruu'),
(2, 'AB 9447 JH', 'Yamaha Vilano', 'Yamaha', 'Disewa', 'motor1.jpg', 35000, 'Yamaha Vilano Keluaran Tahun 2019 dengan nomor plat AB 9447 JH. Kondisi mulus tanpa lecet seperti baru.'),
(3, 'AD 1856 YT', 'Honda Vario', 'Honda', 'Tersedia', 'motor5.jpg', 35000, 'Honda Vario Keluaran Tahun 2017 dengan nomor plat AD 1856 YT. Kondisi mulus tanpa lecet seperti baru.'),
(4, 'E 5111 TU', 'Honda Scoopy', 'Honda', 'Disewa', 'motor3.jpg', 30000, 'Honda Scoopy Keluaran Tahun 2018 dengan nomor plat E 5111 TU. Kondisi mulus tanpa lecet seperti baru.'),
(5, 'R 2345 BM', 'Yamaha FreeGo', 'Yamaha', 'Disewa', 'motor2.jpg', 30000, 'Yamaha FreeGo Keluaran Tahun 2019 dengan nomor plat R 2345 BM. Kondisi mulus tanpa lecet seperti baru.'),
(11, 'AD 1987 CA', 'Beat', 'Honda', 'Tersedia', 'motor.png', 30000, 'ini motor');

-- --------------------------------------------------------

--
-- Table structure for table `sewa`
--

CREATE TABLE `sewa` (
  `id_sewa` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_motor` int(11) NOT NULL,
  `tgl_sewa` date NOT NULL,
  `lama_sewa_hari` int(11) NOT NULL,
  `tgl_kembali` date NOT NULL,
  `notifikasi` varchar(50) NOT NULL,
  `NIK` varchar(20) NOT NULL,
  `total` int(11) NOT NULL,
  `status_bayar` varchar(20) NOT NULL,
  `status_sewa` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sewa`
--

INSERT INTO `sewa` (`id_sewa`, `id_user`, `id_motor`, `tgl_sewa`, `lama_sewa_hari`, `tgl_kembali`, `notifikasi`, `NIK`, `total`, `status_bayar`, `status_sewa`) VALUES
(21, 7, 3, '2024-12-13', 1, '2024-12-14', 'Belum', '33333333333333333333', 35000, 'Lunas', 'Selesai'),
(22, 8, 5, '2024-12-13', 2, '2024-12-15', 'Belum', '123465778980', 60000, 'Belum Dibayar', 'Selesai'),
(23, 7, 4, '2024-12-13', 2, '2024-12-15', 'Belum', '33333333333333333333', 60000, 'Belum Dibayar', 'Selesai'),
(24, 8, 1, '2024-12-14', 2, '2024-12-16', 'Belum', '123465778980', 50000, 'Lunas', 'Selesai'),
(25, 8, 1, '2024-12-14', 2, '2024-12-16', 'Belum', '123465778980', 50000, 'Lunas', 'Selesai'),
(26, 8, 2, '2024-12-14', 2, '2024-12-16', 'Belum', '123465778980', 70000, 'Lunas', 'Selesai'),
(27, 7, 3, '2024-12-14', 2, '2024-12-16', 'Belum', '33333333333333333333', 70000, 'Lunas', 'Selesai'),
(34, 7, 1, '2024-12-17', 2, '2024-12-19', 'Sudah', '123465778980', 50000, 'Belum Dibayar', 'Selesai'),
(35, 8, 2, '2024-12-17', 2, '2024-12-19', 'Belum', '33333333333333333333', 70000, 'Belum Dibayar', 'Aktif');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `no_tlp` varchar(16) NOT NULL,
  `alamat` varchar(60) DEFAULT NULL,
  `jenkel` char(20) DEFAULT NULL,
  `foto` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama`, `email`, `password`, `no_tlp`, `alamat`, `jenkel`, `foto`) VALUES
(7, 'Jeyra Lee Arkalino', 'jeyra@gmail.com', '$2y$10$jBOSKFTrceD.sP2SD05J2e7MotyHtlf4KPVnAc4LOKuVOtDkP5.aG', '081903425024', 'Banyumas', 'Perempuan', NULL),
(8, 'Ini User 1', 'user@gmail.com', '$2y$10$RLB/VrWQ8tf4yDpIOG//2uA28iihpid8njTYWbaGzEkiXcvEjkBWK', '08754911', 'Kulon Progo', 'Laki-Laki', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `detail_sewa`
--
ALTER TABLE `detail_sewa`
  ADD PRIMARY KEY (`id_detail_sewa`);

--
-- Indexes for table `motor`
--
ALTER TABLE `motor`
  ADD PRIMARY KEY (`id_motor`);

--
-- Indexes for table `sewa`
--
ALTER TABLE `sewa`
  ADD PRIMARY KEY (`id_sewa`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `detail_sewa`
--
ALTER TABLE `detail_sewa`
  MODIFY `id_detail_sewa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `motor`
--
ALTER TABLE `motor`
  MODIFY `id_motor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `sewa`
--
ALTER TABLE `sewa`
  MODIFY `id_sewa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
