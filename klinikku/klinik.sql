-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 20, 2020 at 06:27 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `klinik`
--

-- --------------------------------------------------------

--
-- Table structure for table `buku_tamu`
--

CREATE TABLE `buku_tamu` (
  `id` int(255) NOT NULL,
  `nama_pelanggan` varchar(50) NOT NULL,
  `jns_kel` enum('Laki - Laki','Perempuan') NOT NULL,
  `ket_kunjungan` enum('Check Up','Periksa Gigi') NOT NULL,
  `keperluan` text NOT NULL,
  `tanggal_kunjungan` date NOT NULL,
  `no_ktp` varchar(255) NOT NULL,
  `no_telp` varchar(255) NOT NULL,
  `alamat_email` varchar(255) NOT NULL,
  `file_loc` varchar(255) NOT NULL,
  `tanggal_submit` datetime NOT NULL,
  `status` int(5) NOT NULL,
  `tanggal_rapid` date NOT NULL,
  `id_dep` smallint(3) DEFAULT NULL,
  `alasan_tolak` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `buku_tamu`
--

INSERT INTO `buku_tamu` (`id`, `nama_pelanggan`, `jns_kel`, `ket_kunjungan`, `keperluan`, `tanggal_kunjungan`, `no_ktp`, `no_telp`, `alamat_email`, `file_loc`, `tanggal_submit`, `status`, `tanggal_rapid`, `id_dep`, `alasan_tolak`) VALUES
(10, 'jajal', 'Laki - Laki', 'Periksa Gigi', '  testing', '2020-12-13', '879887', '41232131', 'cripx@protonmail.ch', 'tamuwinner/img/WhatsApp Image 2020-06-15 at 09.13.39.jpeg', '2020-12-13 03:33:37', 3, '2020-12-13', 0, 'ok silahkan'),
(11, 'jajal', 'Laki - Laki', 'Check Up', '  testing', '2020-12-13', '879887', '41232131', 'cripx@protonmail.ch', 'tamuwinner/img/WhatsApp Image 2020-06-15 at 09.13.39.jpeg', '2020-12-13 03:33:37', 2, '2020-12-13', 0, 'ok silahkan'),
(12, 'sadads', 'Laki - Laki', 'Check Up', '  sdasd', '2020-12-13', '879887', '41232131', 'cripx@protonmail.ch', 'tamuwinner/img/WhatsApp Image 2020-06-15 at 09.13.39.jpeg', '2020-12-13 03:33:37', 1, '2020-12-13', 0, 'sadas'),
(13, 'sadads', 'Laki - Laki', 'Check Up', '  sdasd', '2020-12-13', '879887', '41232131', 'cripx@protonmail.ch', 'tamuwinner/img/WhatsApp Image 2020-06-15 at 09.13.39.jpeg', '2020-12-13 03:33:37', 1, '2020-12-13', 0, 'boleh');

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `id_dep` int(11) NOT NULL,
  `department_name` varchar(255) DEFAULT NULL,
  `email_manager` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`id_dep`, `department_name`, `email_manager`) VALUES
(0, 'Dokter Gigi', 'samsul.umu@gmail.com'),
(1, 'Dokter Umum', 'joyced@protonmail.ch');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `telp` varchar(20) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` enum('administrator','default') DEFAULT NULL,
  `active` enum('0','1') NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `nama`, `alamat`, `telp`, `username`, `password`, `level`, `active`) VALUES
(1, 'TEST', 'Jl. Sepakat No. 53', '080989999', 'administrator', '$2y$10$B2ztsNPm8JZyGR/E12rRU.itsFuvdnYCsDg/L4SZ.xCx7usFzvXUG', 'administrator', '1'),
(2, 'geblex', '-', '2131232', 'geblex', 'geblex', 'administrator', '1'),
(3, 'jajal', '-', '-', 'jajal', '$2y$10$zfAJjhUroZVjCYTF23DP8OubPro6NgWgir4ycGRQGGwkRbagRFgIK', 'administrator', '1'),
(5, 'sdf', 'eds', '132', 'oke', 'oke', 'administrator', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buku_tamu`
--
ALTER TABLE `buku_tamu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`id_dep`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `buku_tamu`
--
ALTER TABLE `buku_tamu`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
