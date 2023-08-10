-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 13, 2023 at 07:40 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_web_telur`
--

-- --------------------------------------------------------

--
-- Table structure for table `detail_transaksi`
--

CREATE TABLE `detail_transaksi` (
  `id_detail` int(11) NOT NULL,
  `id_transaksi` int(11) NOT NULL,
  `id_telur` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `harga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tabel_admin`
--

CREATE TABLE `tabel_admin` (
  `id_adm` int(11) NOT NULL,
  `nama_adm` varchar(255) NOT NULL,
  `username_adm` varchar(255) NOT NULL,
  `password_adm` varchar(255) NOT NULL,
  `avatar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tabel_admin`
--

INSERT INTO `tabel_admin` (`id_adm`, `nama_adm`, `username_adm`, `password_adm`, `avatar`) VALUES
(1, 'Hafidz Dwi Rahmansyah', 'hafidz12', 'hafidz123', 'https://w7.pngwing.com/pngs/922/214/png-transparent-computer-icons-avatar-businessperson-interior-design-services-corporae-building-company-heroes-thumbnail.png'),
(3, 'Hafidz Dwi Rahmansyah', 'dwihafidz', 'dwi123', 'https://propami.com/assets/corals/images/avatars/avatar_4.png'),
(7, 'Syaikhah Aditya Ramadhani', 'Sya123', 'sya12345', 'https://cdn3.iconfinder.com/data/icons/business-avatar-1/512/11_avatar-512.png');

-- --------------------------------------------------------

--
-- Table structure for table `tabel_jenis_tel`
--

CREATE TABLE `tabel_jenis_tel` (
  `id_jenis` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tabel_jenis_tel`
--

INSERT INTO `tabel_jenis_tel` (`id_jenis`, `nama`) VALUES
(10, 'Telur Bebek'),
(12, 'Telur Ayam'),
(13, 'Telur Puyuh'),
(14, 'Telur Kalkun');

-- --------------------------------------------------------

--
-- Table structure for table `tabel_telur`
--

CREATE TABLE `tabel_telur` (
  `id_telur` int(11) NOT NULL,
  `id_jenis_tel` int(11) NOT NULL,
  `harga_tel` varchar(255) NOT NULL,
  `total_tel` int(11) NOT NULL,
  `img_tel` varchar(255) NOT NULL,
  `kategori` enum('baik','pecah','busuk') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tabel_telur`
--

INSERT INTO `tabel_telur` (`id_telur`, `id_jenis_tel`, `harga_tel`, `total_tel`, `img_tel`, `kategori`) VALUES
(1, 12, '12000', 150, 'https://images.tokopedia.net/img/cache/700/product-1/2019/7/27/5444739/5444739_6b322a93-120a-4648-b0a5-fd09e3a4da23_554_554.jpg', 'baik'),
(2, 10, '20000', 100, 'https://asset.kompas.com/crops/lWq1zYbSS82ku45QHjDPaJS9Mgw=/187x34:862x483/750x500/data/photo/2020/06/19/5eec5a9fe4d01.jpg', 'baik'),
(3, 13, '25000', 200, 'https://gdmagri.com/wp-content/uploads/2021/11/harga-telur-puyuh.jpg', 'baik'),
(4, 14, '25000', 150, 'https://i0.wp.com/jualayamhias.com/wp-content/uploads/2022/08/Telur-ayam-kalkun.jpg', 'baik');

-- --------------------------------------------------------

--
-- Table structure for table `tabel_transaksi`
--

CREATE TABLE `tabel_transaksi` (
  `id_transaksi` int(11) NOT NULL,
  `nm_admin` varchar(255) NOT NULL,
  `tgl_transaksi` varchar(255) NOT NULL,
  `harga_total` int(11) NOT NULL,
  `bayar` int(11) NOT NULL,
  `kembalian` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `detail_transaksi`
--
ALTER TABLE `detail_transaksi`
  ADD PRIMARY KEY (`id_detail`),
  ADD KEY `id_telur` (`id_telur`),
  ADD KEY `id_transaksi` (`id_transaksi`);

--
-- Indexes for table `tabel_admin`
--
ALTER TABLE `tabel_admin`
  ADD PRIMARY KEY (`id_adm`);

--
-- Indexes for table `tabel_jenis_tel`
--
ALTER TABLE `tabel_jenis_tel`
  ADD PRIMARY KEY (`id_jenis`);

--
-- Indexes for table `tabel_telur`
--
ALTER TABLE `tabel_telur`
  ADD PRIMARY KEY (`id_telur`),
  ADD KEY `id_jenis_tel` (`id_jenis_tel`);

--
-- Indexes for table `tabel_transaksi`
--
ALTER TABLE `tabel_transaksi`
  ADD PRIMARY KEY (`id_transaksi`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `detail_transaksi`
--
ALTER TABLE `detail_transaksi`
  MODIFY `id_detail` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tabel_admin`
--
ALTER TABLE `tabel_admin`
  MODIFY `id_adm` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tabel_jenis_tel`
--
ALTER TABLE `tabel_jenis_tel`
  MODIFY `id_jenis` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tabel_telur`
--
ALTER TABLE `tabel_telur`
  MODIFY `id_telur` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tabel_transaksi`
--
ALTER TABLE `tabel_transaksi`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `detail_transaksi`
--
ALTER TABLE `detail_transaksi`
  ADD CONSTRAINT `detail_transaksi_ibfk_1` FOREIGN KEY (`id_telur`) REFERENCES `tabel_telur` (`id_telur`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `detail_transaksi_ibfk_2` FOREIGN KEY (`id_transaksi`) REFERENCES `tabel_transaksi` (`id_transaksi`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tabel_telur`
--
ALTER TABLE `tabel_telur`
  ADD CONSTRAINT `tabel_telur_ibfk_1` FOREIGN KEY (`id_jenis_tel`) REFERENCES `tabel_jenis_tel` (`id_jenis`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
