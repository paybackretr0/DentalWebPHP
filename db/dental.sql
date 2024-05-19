-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 19, 2024 at 01:43 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dental`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `id` varchar(25) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `nik` varchar(50) NOT NULL,
  `tglLahir` date NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `jk` varchar(20) NOT NULL,
  `noWA` varchar(20) NOT NULL,
  `tglJanji` date NOT NULL,
  `jam` varchar(50) NOT NULL,
  `jenispelayanan` varchar(50) NOT NULL,
  `status` char(1) NOT NULL,
  `pesan` varchar(255) DEFAULT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`id`, `nama`, `nik`, `tglLahir`, `alamat`, `jk`, `noWA`, `tglJanji`, `jam`, `jenispelayanan`, `status`, `pesan`, `user_id`) VALUES
('P4185', 'andre', '13711319231847185', '2024-03-22', 'adwdaw', 'Pria', '1237128781', '2024-03-27', '17.00-18.00', 'Tambal Gigi', 'P', '', 1),
('P4815', 'Meja', '234234425', '2024-03-07', 'dawsdaw', 'Pria', '31231312', '2024-03-13', '19.00-20.00', 'Pembersihan Karang Gigi', 'R', 'Dokter pulkam', 3),
('P4960', 'Bima', '1831827318', '1985-03-12', 'Kuranji, padang', 'Pria', '1237128781', '2024-03-08', '17.00-18.00', 'Pembersihan Karang Gigi', 'R', NULL, 27),
('P6334', 'awdad', '1831827318', '2024-02-28', 'adwdaw', 'Pria', '082313012', '2024-03-08', '19.00-20.00', 'Pembuatan Gigi Palsu', 'Y', NULL, 3),
('P6400', 'Meja', '13711319231847185', '2024-03-03', 'adwdaw', 'Pria', '1237128781', '2024-03-27', '16.00-17.00', 'Pasang Behel', 'R', 'Cuti', 27),
('P7978', 'sdawdaw', '131231313', '2024-03-21', 'dawdadwa', 'Pria', '13231311', '2024-03-16', '16.00-17.00', 'Promo 250K', 'Y', NULL, 3),
('P9707', 'danial', '1831827318', '2024-03-07', 'Kuranji, padang', 'Pria', '082313012', '2024-03-13', '16.00-17.00', 'Pembersihan Karang Gigi', 'R', 'Klinik tutup', 3);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `idLogin` int(11) NOT NULL,
  `username` varchar(25) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `email` varchar(50) NOT NULL,
  `noWA` varchar(25) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`idLogin`, `username`, `nama`, `email`, `noWA`, `password`) VALUES
(1, 'dental', '', '', '', '517586c0f7b172af4efea9381360a59e'),
(3, 'danial22', 'danial', 'danial@contoh.com', '123141', 'bcbe3365e6ac95ea2c0343a2395834dd'),
(27, 'dika22', 'dika', 'dika@contoh.com', '35234', 'bcbe3365e6ac95ea2c0343a2395834dd');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_user_riwayat` (`user_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`idLogin`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `idLogin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
