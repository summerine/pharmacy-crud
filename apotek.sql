-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 10, 2018 at 09:26 PM
-- Server version: 5.7.20-log
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `apotek`
--

-- --------------------------------------------------------

--
-- Table structure for table `bentuk`
--

CREATE TABLE `bentuk` (
  `id` int(4) NOT NULL,
  `bentuk` varchar(2) NOT NULL,
  `keterangan` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `golongan`
--

CREATE TABLE `golongan` (
  `id` int(4) NOT NULL,
  `golongan` char(1) NOT NULL,
  `keterangan` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `golongan`
--

INSERT INTO `golongan` (`id`, `golongan`, `keterangan`) VALUES
(1, 'B', 'Obat Bebas '),
(2, 'T', 'Obat Bebas Terbatas '),
(3, 'K', 'Obat Keras'),
(4, 'P', 'Obat Psikotropika'),
(5, 'N', 'Obat Narkotika');

-- --------------------------------------------------------

--
-- Table structure for table `obat`
--

CREATE TABLE `obat` (
  `id_obat` varchar(5) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `tipe` char(1) NOT NULL,
  `golongan` char(1) NOT NULL,
  `tgl_expire` date NOT NULL,
  `harga_beli` double NOT NULL,
  `harga_jual` double NOT NULL,
  `id_supplier` varchar(5) NOT NULL,
  `stok` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `obat`
--

INSERT INTO `obat` (`id_obat`, `nama`, `tipe`, `golongan`, `tgl_expire`, `harga_beli`, `harga_jual`, `id_supplier`, `stok`) VALUES
('K0002', 'Intunal', 'D', 'B', '2020-11-01', 1500, 2000, 'P0002', '25'),
('O0001', 'Paracetamol', 'D', 'B', '2019-06-09', 2000, 3000, 'P0001', '30'),
('T0002', 'Amoxicillin', 'D', 'K', '2019-01-01', 1500, 2000, 'P0004', '10'),
('T0003', 'Cetirizine', 'D', 'B', '2018-09-20', 3000, 3500, 'P0003', '3');

-- --------------------------------------------------------

--
-- Table structure for table `pegawai`
--

CREATE TABLE `pegawai` (
  `id_pegawai` varchar(6) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `alamat` varchar(30) NOT NULL,
  `no_telpon` varchar(10) NOT NULL,
  `posisi` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pegawai`
--

INSERT INTO `pegawai` (`id_pegawai`, `nama`, `alamat`, `no_telpon`, `posisi`) VALUES
('AP0001', 'Sakura', 'Sunny Islands', '111111', 'Apoteker'),
('AS0001', 'Luffy D.', 'Sunny Islands', '457891', 'Asisten'),
('PO0001', 'Naruto', 'Konoha', '0123456', 'Cashier');

-- --------------------------------------------------------

--
-- Table structure for table `penjualan`
--

CREATE TABLE `penjualan` (
  `id_penjualan` int(10) NOT NULL,
  `nama_pembeli` varchar(20) NOT NULL,
  `id_obat` varchar(15) NOT NULL,
  `jumlah` double NOT NULL,
  `tgl_jual` date NOT NULL,
  `id_pegawai` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

CREATE TABLE `supplier` (
  `id_supplier` varchar(5) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `kota` varchar(20) NOT NULL,
  `no_telpon` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `supplier`
--

INSERT INTO `supplier` (`id_supplier`, `nama`, `alamat`, `kota`, `no_telpon`) VALUES
('S0002', 'PT. Graha Farma', 'Jln. Tegal Rotan Raya No. 10, Pondok Jaya, Pondok Aren', '', '888888');

-- --------------------------------------------------------

--
-- Table structure for table `tipe`
--

CREATE TABLE `tipe` (
  `id` int(4) NOT NULL,
  `tipe` char(1) NOT NULL,
  `keterangan` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tipe`
--

INSERT INTO `tipe` (`id`, `tipe`, `keterangan`) VALUES
(1, 'D', 'Dagang'),
(2, 'G', 'Generik');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bentuk`
--
ALTER TABLE `bentuk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `golongan`
--
ALTER TABLE `golongan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `obat`
--
ALTER TABLE `obat`
  ADD PRIMARY KEY (`id_obat`);

--
-- Indexes for table `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`id_pegawai`);

--
-- Indexes for table `penjualan`
--
ALTER TABLE `penjualan`
  ADD PRIMARY KEY (`id_penjualan`);

--
-- Indexes for table `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`id_supplier`);

--
-- Indexes for table `tipe`
--
ALTER TABLE `tipe`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bentuk`
--
ALTER TABLE `bentuk`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `penjualan`
--
ALTER TABLE `penjualan`
  MODIFY `id_penjualan` int(10) NOT NULL AUTO_INCREMENT;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
