-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 07, 2024 at 10:22 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laundrydb`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_admin`
--

CREATE TABLE `tb_admin` (
  `idAdmin` int(11) NOT NULL,
  `namaAdmin` varchar(255) NOT NULL,
  `passwordAdmin` varchar(255) NOT NULL,
  `posisiAdmin` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_admin`
--

INSERT INTO `tb_admin` (`idAdmin`, `namaAdmin`, `passwordAdmin`, `posisiAdmin`) VALUES
(24042402, 'admin', 'admin', 'Admin'),
(24042403, 'Adi', 'adi', 'Kasir'),
(24042405, 'Teduh', 'teduh', 'Kasir'),
(24042406, 'aldi', 'aldi', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `tb_customer`
--

CREATE TABLE `tb_customer` (
  `idCust` int(11) NOT NULL,
  `namaCust` varchar(255) NOT NULL,
  `alamatCust` text NOT NULL,
  `teleponCust` varchar(15) NOT NULL,
  `emailCust` varchar(50) NOT NULL,
  `genderCust` varchar(15) NOT NULL,
  `statusCust` varchar(15) NOT NULL,
  `passwordCust` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_customer`
--

INSERT INTO `tb_customer` (`idCust`, `namaCust`, `alamatCust`, `teleponCust`, `emailCust`, `genderCust`, `statusCust`, `passwordCust`) VALUES
(1001, 'Pelanggan1', 'Surabaya', '0819832734', 'pelanggan1@gmail.com', 'Perempuan', 'Not Member', 'pelanggan1'),
(1002, 'aldi', 'Surabaya, Indonesia', '081231743600', 'aldibagushermawan10@gmail.com', 'Male', 'Not Member', 'aldi2002'),
(1003, 'adi', 'KALIJUDAN TARUNA V NO. 8, RT. 05/RW. 03', '081323734087', 'aldibagushermawan10@gmail.com', 'Male', 'Not Member', '123'),
(1004, 'Aldi Bagus Hermawan ', 'KALIJUDAN TARUNA V NO. 8, RT. 05/RW. 03', '081323734087', 'aldibagushermawan10@gmail.com', 'Male', 'Not Member', '123'),
(1005, 'Teduh', 'Bojonegoro', '098097487', 'teduh@gmail.com', 'Male', 'Not Member', '12345'),
(1006, 'pelanggan', 'pelanggan', '09329838', 'pelanggan@gmail.com', 'Male', 'Not Member', '12345'),
(1007, 'pelanggan', 'pelanggan', '09329838', 'pelanggan@gmail.com', 'Male', 'Not Member', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `tb_layanan`
--

CREATE TABLE `tb_layanan` (
  `id_layanan` int(11) NOT NULL,
  `nama_layanan` text NOT NULL,
  `harga_layanan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_layanan`
--

INSERT INTO `tb_layanan` (`id_layanan`, `nama_layanan`, `harga_layanan`) VALUES
(62, 'Cuci Basah', 18000),
(64, 'Cuci Kering', 31000),
(66, 'Cuci Setrika ', 36000),
(67, 'Setrika Saja', 23000);

-- --------------------------------------------------------

--
-- Table structure for table `tb_owner`
--

CREATE TABLE `tb_owner` (
  `idOwner` int(11) NOT NULL,
  `namaOwner` text NOT NULL,
  `passwordOwner` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_owner`
--

INSERT INTO `tb_owner` (`idOwner`, `namaOwner`, `passwordOwner`) VALUES
(1, 'owner', 'owner');

-- --------------------------------------------------------

--
-- Table structure for table `tb_transaksi`
--

CREATE TABLE `tb_transaksi` (
  `id_transaksi` int(11) NOT NULL,
  `idCust` int(11) NOT NULL,
  `nama_customer` varchar(100) NOT NULL,
  `noTlp_Cust` varchar(15) NOT NULL,
  `alamat_Ambil` varchar(100) NOT NULL,
  `layanan` varchar(100) NOT NULL,
  `harga_perItem` int(11) NOT NULL,
  `jumlah_item` int(11) NOT NULL,
  `keterangan` varchar(500) NOT NULL,
  `total_transaksi` int(11) NOT NULL,
  `metodeBayar` varchar(15) NOT NULL,
  `total_bayar` int(11) NOT NULL,
  `waktuAmbil` varchar(20) DEFAULT NULL,
  `status_transaksi` varchar(20) NOT NULL,
  `tanggal_pesan` date DEFAULT curdate()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_transaksi`
--

INSERT INTO `tb_transaksi` (`id_transaksi`, `idCust`, `nama_customer`, `noTlp_Cust`, `alamat_Ambil`, `layanan`, `harga_perItem`, `jumlah_item`, `keterangan`, `total_transaksi`, `metodeBayar`, `total_bayar`, `waktuAmbil`, `status_transaksi`, `tanggal_pesan`) VALUES
(0, 0, 'aldi', '097595739', 'Surabaya, Indonesia', 'Cuci Setrika ', 36000, 1, 'uji coba2', 36000, 'DANA', 36000, '13.00 - 15.00', 'diproses', '2023-11-30'),
(1, 0, '', '', '', '', 0, 0, '', 0, '', 100000, '', 'diproses', '2023-12-29'),
(2, 0, '', '', '', '', 0, 0, '', 0, '', 76000, '', 'selesai', '2023-12-30'),
(3, 0, '', '', '', '', 0, 0, '', 0, '', 18000, '', 'diantar', '2023-12-30'),
(4, 0, '', '', '', '', 0, 0, '', 0, '', 16000, '', 'diantar', '2023-12-30'),
(5, 0, 'Aldi Bagus Hermawan ', '000000999', 'Surabaya', '64', 31000, 1, '', 31000, 'ShopeePay', 31000, '09.00 - 12.00', 'diantar', '2024-03-30'),
(6, 0, 'Adinanda', '000000999', 'Surabaya', 'Cuci Kering', 31000, 1, 'uji coba', 31000, 'ShopeePay', 31000, '13.00 - 15.00', 'selesai', '2024-03-30'),
(8, 1002, 'Teduh', '0939274878', 'Surabaya, Indonesia', 'Cuci Setrika ', 36000, 1, 'uji 3', 36000, 'DANA', 36000, '13.00 - 15.00', 'diambil', '2024-04-30'),
(9, 1004, 'Aldi Bagus Hermawan ', '0876788', 'Surabaya', 'Cuci Basah', 18000, 2, 'cuci yang bersih', 36000, 'ShopeePay', 36000, '13.00 - 15.00', 'diambil', '2024-04-30'),
(10, 1003, 'Teduh', '000000999', 'Surabaya', 'Cuci Kering', 31000, 2, 'uji coba aja', 62000, 'ShopeePay', 62000, '16.00 - 18.00', 'diambil', '2024-05-30'),
(11, 1003, 'Aldi Bagus Hermawan ', '000000999', 'Surabaya', 'Cuci Kering', 31000, 1, '', 31000, 'ShopeePay', 31000, '16.00 - 18.00', 'diambil', '2024-05-30'),
(12, 1004, 'admin', '343434', 'Surabaya', 'Cuci Basah', 18000, 0, '', 0, 'ShopeePay', 0, '13.00 - 15.00', 'diambil', '2024-05-30'),
(13, 1002, 'aldi', '0939274878', 'Surabaya, Indonesia', 'Cuci Setrika ', 36000, 1, '', 36000, 'DANA', 36000, '13.00 - 15.00', 'diambil', '2024-05-30'),
(14, 1002, 'Masako Ayam', '0939274878', 'Surabaya, Indonesia', 'Cuci Setrika ', 36000, 1, '', 36000, 'DANA', 36000, '13.00 - 15.00', 'diambil', '2024-05-30');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`idAdmin`);

--
-- Indexes for table `tb_customer`
--
ALTER TABLE `tb_customer`
  ADD PRIMARY KEY (`idCust`);

--
-- Indexes for table `tb_layanan`
--
ALTER TABLE `tb_layanan`
  ADD PRIMARY KEY (`id_layanan`);

--
-- Indexes for table `tb_owner`
--
ALTER TABLE `tb_owner`
  ADD PRIMARY KEY (`idOwner`);

--
-- Indexes for table `tb_transaksi`
--
ALTER TABLE `tb_transaksi`
  ADD PRIMARY KEY (`id_transaksi`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_admin`
--
ALTER TABLE `tb_admin`
  MODIFY `idAdmin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24042407;

--
-- AUTO_INCREMENT for table `tb_customer`
--
ALTER TABLE `tb_customer`
  MODIFY `idCust` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1026;

--
-- AUTO_INCREMENT for table `tb_layanan`
--
ALTER TABLE `tb_layanan`
  MODIFY `id_layanan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT for table `tb_owner`
--
ALTER TABLE `tb_owner`
  MODIFY `idOwner` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_transaksi`
--
ALTER TABLE `tb_transaksi`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
