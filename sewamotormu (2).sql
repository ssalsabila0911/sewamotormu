-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 05, 2024 at 11:44 PM
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
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `detail_riwayat`
--

CREATE TABLE `detail_riwayat` (
  `id_detail` int(11) NOT NULL,
  `id_riwayat` int(11) NOT NULL,
  `plat_motor` varchar(20) NOT NULL,
  `id_user` int(11) NOT NULL,
  `status_sewa` varchar(20) NOT NULL,
  `total` int(11) NOT NULL,
  `tgl_sewa` date NOT NULL,
  `tgl_kembali` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `motor`
--

CREATE TABLE `motor` (
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

INSERT INTO `motor` (`plat_motor`, `motor`, `merk`, `status`, `gambar`, `harga`, `deskripsi`) VALUES
('AA 2667 BR', 'Honda Beat', 'Honda', 'Disewa', 'motor4.png', 25000, 'blablabla'),
('AB 9447 JH', 'Yamaha Vilano', 'Yamaha', 'Tersedia', 'motor1.jpg', 35000, 'aaaaaaaaaaaaaaaaaaa'),
('AD 1856 YT', 'Honda Vario', 'Honda', 'Tersedia', 'motor5.jpg', 35000, 'bbbbbbbbbbbbbbbbbb'),
('D 4567 UB', 'Beat', 'Honda', 'Tersedia', 'motor1.jpg', 30000, 'tttttttttttttttttttttt'),
('E 5111 TU', 'Honda Scoopy', 'Honda', 'Disewa', 'motor3.jpg', 30000, 'cccccccccccccccccc'),
('R 2345 BM', 'Yamaha FreeGo', 'Yamaha', 'Tersedia', 'motor2.jpg', 30000, 'ddddddddddddd');

-- --------------------------------------------------------

--
-- Table structure for table `riwayat`
--

CREATE TABLE `riwayat` (
  `id_riwayat` int(11) NOT NULL,
  `id_sewa` int(11) NOT NULL,
  `tgl_sewa` date NOT NULL,
  `total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sewa`
--

CREATE TABLE `sewa` (
  `id_sewa` int(11) NOT NULL,
  `plat_motor` varchar(20) NOT NULL,
  `id_user` int(11) NOT NULL,
  `tgl_sewa` date NOT NULL,
  `tgl_kembali` date NOT NULL,
  `status_bayar` varchar(20) NOT NULL,
  `notifikasi` varchar(50) NOT NULL,
  `NIK` varchar(20) NOT NULL,
  `total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
  `jenkel` char(1) DEFAULT NULL,
  `foto` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama`, `email`, `password`, `no_tlp`, `alamat`, `jenkel`, `foto`) VALUES
(1, 'Syifa Salsabila', 'syifasalsabila@gmail.com', '$2y$10$Ou5C2eq1xRkVhXreiCBZQe5rAcuKQblw/z.7eNDKriwEyyIl94v32', '0878888', NULL, NULL, NULL),
(2, 'Arkalino', 'ssalsabila@gmail.com', '$2y$10$hJhBjn4vlE/Q.aeo.e1DcOko1bJmRyDyZ/6tjZOYWiHQDpkNFFPG6', '08788889', NULL, NULL, NULL),
(4, 'sipa', 'sipa@gmail.com', '$2y$10$wrBiv4CuB6Pt.PTj2.1qGeh9191o1uPHaryrQI/wFVSn8t0NAgrJS', '087888891011', NULL, NULL, NULL),
(6, 'syifa', 'syifa@gmail.com', '$2y$10$1Xb44IQzeM0MmjABT2ykbeGtB6h52aNT1LCaI.Uujhmqrm3a8ITmS', '08798765', NULL, NULL, NULL),
(7, 'Jeyra Lee', 'jeyra@gmail.com', '$2y$10$jBOSKFTrceD.sP2SD05J2e7MotyHtlf4KPVnAc4LOKuVOtDkP5.aG', '08798765', NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `detail_riwayat`
--
ALTER TABLE `detail_riwayat`
  ADD PRIMARY KEY (`id_detail`),
  ADD UNIQUE KEY `id_riwayat` (`id_riwayat`),
  ADD UNIQUE KEY `plat_motor` (`plat_motor`),
  ADD UNIQUE KEY `id_user` (`id_user`);

--
-- Indexes for table `motor`
--
ALTER TABLE `motor`
  ADD PRIMARY KEY (`plat_motor`);

--
-- Indexes for table `riwayat`
--
ALTER TABLE `riwayat`
  ADD PRIMARY KEY (`id_riwayat`),
  ADD UNIQUE KEY `id_sewa` (`id_sewa`);

--
-- Indexes for table `sewa`
--
ALTER TABLE `sewa`
  ADD PRIMARY KEY (`id_sewa`),
  ADD UNIQUE KEY `plat_motor` (`plat_motor`),
  ADD UNIQUE KEY `id_user` (`id_user`);

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
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `detail_riwayat`
--
ALTER TABLE `detail_riwayat`
  MODIFY `id_detail` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `riwayat`
--
ALTER TABLE `riwayat`
  MODIFY `id_riwayat` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `detail_riwayat`
--
ALTER TABLE `detail_riwayat`
  ADD CONSTRAINT `detail_riwayat_ibfk_1` FOREIGN KEY (`id_riwayat`) REFERENCES `riwayat` (`id_riwayat`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `detail_riwayat_ibfk_2` FOREIGN KEY (`plat_motor`) REFERENCES `motor` (`plat_motor`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `detail_riwayat_ibfk_3` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `riwayat`
--
ALTER TABLE `riwayat`
  ADD CONSTRAINT `riwayat_ibfk_1` FOREIGN KEY (`id_sewa`) REFERENCES `sewa` (`id_sewa`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `sewa`
--
ALTER TABLE `sewa`
  ADD CONSTRAINT `sewa_ibfk_1` FOREIGN KEY (`plat_motor`) REFERENCES `motor` (`plat_motor`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `sewa_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
