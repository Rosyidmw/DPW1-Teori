-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 10, 2024 at 08:51 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_dpw1`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_berita`
--

CREATE TABLE `tbl_berita` (
  `id` int(5) NOT NULL,
  `judul` varchar(150) NOT NULL,
  `isi_berita` text NOT NULL,
  `gambar` varchar(70) NOT NULL,
  `kategori` char(10) NOT NULL,
  `iduser` int(2) NOT NULL,
  `tanggal` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_berita`
--

INSERT INTO `tbl_berita` (`id`, `judul`, `isi_berita`, `gambar`, `kategori`, `iduser`, `tanggal`) VALUES
(8, 'MU Juara Piala FA 2024', 'Manchester United berhasil mengalahkan Manchester City pada final piala FA 2024 dengan skor 2-1. Seluruh gol dicetak oleh pemain muda dari kedua tim.', 'computex24.jpeg', 'sport', 1, '2024-06-05 08:58:48'),
(9, 'Real Madrid Juara 15 UCL', 'Real Madrid, tim asal ibu kota negara Spanyol ini berhasil menjuarai UCL untuk ke-15 kali. Menjadi tim dengan kemenangan pada final UCL terbanyak untuk saat ini, rekor yang sangat susah untuk dipecahkan oleh tim lain.', 'xiaomi-su7-4_169.jpeg', '', 1, '2024-06-05 09:04:23'),
(10, 'Hidup Sehat, Agar Tetap Kuat!', 'Hidup sehat merupakan sebuah nikmat yang tidak dapat dihitung dengan apapun. Oleh karena itu, kita harus menjaga kesehatan. Berikut tipsnya!', 'sehat.jpg', 'lifestyle', 1, '2024-06-05 09:26:46'),
(11, 'Team Valorant Paper Rex Gugur', 'Team asal region APAC, Paper Rex akhirnya gugur diajang VCT Master Shanghai Cina usai kalah skor 1-2 dengan 100 Thieves. ', 'prxv1t.jpeg', 'technology', 1, '2024-06-05 09:28:52'),
(12, 'Paper Rex Turun ke Lower Bracket', 'PRX tim asal Singapura harus turun ke lower bracker usai kalah menghadapi G2 tim asal region Amerika', 'prxvg2.jpeg', 'technology', 1, '2024-06-05 09:30:02'),
(13, 'Xiaomi Luncurkan Mobil Listrik Canggih', 'Xiaomi, akhirnya merilis mobil listrik milik mereka. Akankah Tesla menjadi target saingan utama dari Xiaomi?', 'xiaomi-su7-4_169.jpeg', 'otomotif', 3, '2024-06-05 09:31:37'),
(14, 'Pengumuman SNBT 2024 Sebentar lagi! Catat Tanggalnya!', 'Tidak terasa pengumuman SNBT sebentar lagi, jangan sampai kelupaan untuk mengecek hasilnya ya!', 'snbt.png', 'education', 3, '2024-06-05 09:32:58');

-- --------------------------------------------------------

--
-- Table structure for table `user_account`
--

CREATE TABLE `user_account` (
  `iduser` int(11) NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL,
  `role` enum('admin','reporter','user') NOT NULL,
  `update_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_account`
--

INSERT INTO `user_account` (`iduser`, `fullname`, `email`, `password`, `role`, `update_date`) VALUES
(1, 'rosyid', 'rosyidmktwbw@gmail.com', '21232f297a57a5a743894a0e4a801fc3', 'reporter', '2024-05-29 11:23:45'),
(2, 'Mukti', 'mkt@gmail.com', '21232f297a57a5a743894a0e4a801fc3', 'user', '2024-06-04 19:42:10'),
(3, 'wibowo', 'wibowo@gmail.com', '21232f297a57a5a743894a0e4a801fc3', 'reporter', '2024-06-04 19:56:18'),
(4, 'admin', 'admin@gmail.com', '21232f297a57a5a743894a0e4a801fc3', 'admin', '2024-06-04 19:56:49');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_berita`
--
ALTER TABLE `tbl_berita`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_user_account_iduser` (`iduser`);

--
-- Indexes for table `user_account`
--
ALTER TABLE `user_account`
  ADD PRIMARY KEY (`iduser`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_berita`
--
ALTER TABLE `tbl_berita`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `user_account`
--
ALTER TABLE `user_account`
  MODIFY `iduser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_berita`
--
ALTER TABLE `tbl_berita`
  ADD CONSTRAINT `fk_user_account_iduser` FOREIGN KEY (`iduser`) REFERENCES `user_account` (`iduser`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
