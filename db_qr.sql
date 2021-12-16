-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 16, 2021 at 11:14 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_qr`
--

-- --------------------------------------------------------

--
-- Table structure for table `qrcode`
--

CREATE TABLE `qrcode` (
  `id_QR` int(3) NOT NULL,
  `nama_member` varchar(50) NOT NULL,
  `kode_pasien` varchar(50) NOT NULL,
  `gambar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `qrcode`
--

INSERT INTO `qrcode` (`id_QR`, `nama_member`, `kode_pasien`, `gambar`) VALUES
(34, 'https://goo.gl/maps/cq414o3s38LrnfG5A', 'maps msglow', 'https://goo.gl/maps/cq414o3s38LrnfG5A.png'),
(36, 'Konser Full One Ok Rock', 'https://drive.google.com/drive/folders/1ws15ZZlKSa', 'Konser Full One Ok Rock.png'),
(37, 'maps_depok', 'goo.gl/maps/kmptYMJh5svWePzc6', 'maps_depok.png'),
(38, 'maps_malang', 'goo.gl/maps/cq414o3s38LrnfG5A', 'maps_malang.png'),
(39, 'map medan', 'goo.gl/maps/ekRTc2Dk9qvzMBm88', 'map medan.png'),
(40, 'map medan putih', 'goo.gl/ekRTc2Dk9qvzMBm88', 'map medan putih.png'),
(41, 'map medan fix', 'maps.app.goo.gl/ekRTc2Dk9qvzMBm88', 'map medan fix.png'),
(42, 'maps semarang', 'maps.app.goo.gl/hkSckfj3P8sjShDG9', 'maps semarang.png'),
(43, 'mapsidoarjo', 'goo.gl/maps/YCy5GLit2wntchiV7', 'mapsidoarjo.png'),
(44, 'maps_sby', 'goo.gl/maps/reAr4hj7S7hsNewH7', 'maps_sby.png'),
(45, 'maps_bdg', 'goo.gl/maps/3zo5ZjE8peEFRTHX7', 'maps_bdg.png'),
(46, 'maps_bks', 'goo.gl/maps/vnMsFkhthqa9L1T68', 'maps_bks.png'),
(47, 'maps_mdn', 'goo.gl/maps/ZnVryTehoAVBFvii6', 'maps_mdn.png'),
(54, 'medan_belakang', 'goo.gl/maps/aFuDXYMy3bMPNWc38', 'medan_belakang.png'),
(55, 'ig_mlg', 'instagram.com/msglowclinicmlg', 'ig_mlg.png'),
(56, 'code_referal', 'ytTZSh', 'code_referal.png'),
(87, 'ig_bks', 'instagram.com/msglowclinicbekasi/', 'ig_bks.png'),
(88, 'ig_bdg', 'instagram.com/msglowclinicbdg/', 'ig_bdg.png'),
(89, 'ig_dpk', 'instagram.com/msglowclinicdepokk', 'ig_dpk.png'),
(90, 'ig_bks', 'instagram.com/msglowclinicbekasi', 'ig_bks.png'),
(91, 'ig_mdn', 'instagram.com/msglowclinicmedan', 'ig_mdn.png'),
(92, 'ig_sby', 'instagram.com/msglowclinicsurabaya', 'ig_sby.png'),
(93, 'ig_sda', 'instagram.com/msglowclinicsidoarjo', 'ig_sda.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `qrcode`
--
ALTER TABLE `qrcode`
  ADD PRIMARY KEY (`id_QR`),
  ADD UNIQUE KEY `kode_pasien` (`kode_pasien`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `qrcode`
--
ALTER TABLE `qrcode`
  MODIFY `id_QR` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=94;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
