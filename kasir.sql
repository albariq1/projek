-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 24, 2020 at 06:33 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kasir`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_barang`
--

CREATE TABLE `tb_barang` (
  `id` int(11) NOT NULL,
  `barcode` varchar(200) NOT NULL,
  `nama_barang` varchar(100) NOT NULL,
  `stock_awal` varchar(500) NOT NULL,
  `harga_beli` varchar(200) NOT NULL,
  `harga_jual` varchar(200) NOT NULL,
  `id_catagory` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `update_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_barang`
--

INSERT INTO `tb_barang` (`id`, `barcode`, `nama_barang`, `stock_awal`, `harga_beli`, `harga_jual`, `id_catagory`, `created_at`, `update_at`) VALUES
(2, '987', 'ayam', '100', '20000', '40000', 2, '0000-00-00 00:00:00', '2020-10-24 11:24:07'),
(8, '098789087', 'popopo', '987667', '878', '87890', 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(9, '9876678', 'momo', '0', '20000', '30', 5, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(10, '123321', 'asik', '9857', '20000', '10000', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(11, '098712', 'poiuio', '681', '20000', '10000', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(14, '989098', 'admadoo', '20', '90000', '20000', 2, '2020-10-12 21:37:03', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tb_catagory`
--

CREATE TABLE `tb_catagory` (
  `id` int(20) NOT NULL,
  `catagory` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_catagory`
--

INSERT INTO `tb_catagory` (`id`, `catagory`) VALUES
(1, 'makanan'),
(2, 'minuman'),
(3, 'bababayyy'),
(4, 'makanin'),
(5, 'makanonkomoomo');

-- --------------------------------------------------------

--
-- Table structure for table `tb_laporan`
--

CREATE TABLE `tb_laporan` (
  `id` int(11) NOT NULL,
  `nama` varchar(35) NOT NULL,
  `total` varchar(200) NOT NULL,
  `modal` varchar(200) NOT NULL,
  `laba` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_pegawai`
--

CREATE TABLE `tb_pegawai` (
  `id` int(11) NOT NULL,
  `Nama` varchar(25) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `Password` varchar(100) NOT NULL,
  `level` enum('ADMIN','PEMILIK','KARYAWAN','MANAGER') NOT NULL,
  `date_create` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_pegawai`
--

INSERT INTO `tb_pegawai` (`id`, `Nama`, `tanggal_lahir`, `Password`, `level`, `date_create`) VALUES
(3, 'budi', '2020-09-17', '$2y$10$cgKcZSFBGxJA2F7Yz/LynOQJxeY/JwzLGN4KF43ntkfrU/bZ878r6', 'ADMIN', '0000-00-00'),
(6, 'didi', '2020-09-10', '$2y$10$fut7/ON1xAUF3Hu1bbDXOO7PtPtZo1AgjEkkoU1YXtTy2tict6lUe', 'PEMILIK', '0000-00-00'),
(7, 'daodo', '2020-09-16', '$2y$10$sN31hIkPq1BaIf/lEGBKNO/TwQ38Ig9dUWfAsVr1rHMZsNVIZnJdC', 'ADMIN', '0000-00-00'),
(8, 'dmadl', '2020-09-06', '$2y$10$xkqdI3T3YdFtMsrJFwuyjuXaoHaovaAjbZNGQn/hZaWkMkuTZpZcu', 'ADMIN', '0000-00-00'),
(9, 'admin', '2020-09-07', '$2y$10$.avjxH43WwW5ZVJ1KCBglupWeN/w3fcuRTeYeaIWowUOUuDbiqqvS', 'ADMIN', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `tb_penjualan`
--

CREATE TABLE `tb_penjualan` (
  `id_penjualan` varchar(15) NOT NULL,
  `id_pegawai` int(11) NOT NULL,
  `total_belanja` double NOT NULL,
  `total_bayar` double NOT NULL,
  `kembalian` double NOT NULL,
  `tgl_penjualan` date NOT NULL,
  `waktu` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_penjualan`
--

INSERT INTO `tb_penjualan` (`id_penjualan`, `id_pegawai`, `total_belanja`, `total_bayar`, `kembalian`, `tgl_penjualan`, `waktu`) VALUES
('cbVSI6JhdRQr5gK', 9, 1370, 20000, 18630, '2020-10-24', '11:08:17'),
('K6AwtScfsgbEIqT', 9, 200000, 300000, 100000, '2020-10-24', '11:20:20'),
('uOnHqsYNVpIzvhW', 9, 200800, 1000000, 799200, '2020-10-12', '21:36:10'),
('Zq2N5mneHiXhsMg', 9, 200, 300, 100, '2020-10-10', '15:42:51');

-- --------------------------------------------------------

--
-- Table structure for table `tb_penjualan_detail`
--

CREATE TABLE `tb_penjualan_detail` (
  `id_detail` int(11) NOT NULL,
  `id_penjualan` varchar(15) NOT NULL,
  `id_barang` int(11) NOT NULL,
  `id_pegawai` int(11) NOT NULL,
  `qty` double NOT NULL,
  `total_harga` double NOT NULL,
  `status` enum('keranjang','checkout','','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_penjualan_detail`
--

INSERT INTO `tb_penjualan_detail` (`id_detail`, `id_penjualan`, `id_barang`, `id_pegawai`, `qty`, `total_harga`, `status`) VALUES
(16, 'cbVSI6JhdRQr5gK', 2, 9, 5, 200, 'checkout'),
(17, 'cbVSI6JhdRQr5gK', 2, 9, 20, 800, 'checkout'),
(18, 'uOnHqsYNVpIzvhW', 10, 9, 20, 200000, 'checkout'),
(19, 'cbVSI6JhdRQr5gK', 2, 9, 20, 800, 'checkout'),
(20, 'cbVSI6JhdRQr5gK', 9, 9, 19, 570, 'checkout'),
(21, 'K6AwtScfsgbEIqT', 11, 9, 20, 200000, 'checkout');

--
-- Triggers `tb_penjualan_detail`
--
DELIMITER $$
CREATE TRIGGER `penjualan_barang` AFTER INSERT ON `tb_penjualan_detail` FOR EACH ROW BEGIN 
	UPDATE tb_barang SET stock_awal=stock_awal-NEW.qty
    WHERE id =NEW.id_barang;
END
$$
DELIMITER ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_barang`
--
ALTER TABLE `tb_barang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_catagory`
--
ALTER TABLE `tb_catagory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_laporan`
--
ALTER TABLE `tb_laporan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_pegawai`
--
ALTER TABLE `tb_pegawai`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_penjualan`
--
ALTER TABLE `tb_penjualan`
  ADD PRIMARY KEY (`id_penjualan`);

--
-- Indexes for table `tb_penjualan_detail`
--
ALTER TABLE `tb_penjualan_detail`
  ADD PRIMARY KEY (`id_detail`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_barang`
--
ALTER TABLE `tb_barang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tb_catagory`
--
ALTER TABLE `tb_catagory`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tb_laporan`
--
ALTER TABLE `tb_laporan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_pegawai`
--
ALTER TABLE `tb_pegawai`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tb_penjualan_detail`
--
ALTER TABLE `tb_penjualan_detail`
  MODIFY `id_detail` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
