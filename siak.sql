-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 10, 2018 at 04:59 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `siak`
--

-- --------------------------------------------------------

--
-- Table structure for table `akun_kas`
--

CREATE TABLE `akun_kas` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `kode` int(30) NOT NULL,
  `saldo` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `akun_kas`
--

INSERT INTO `akun_kas` (`id`, `nama`, `kode`, `saldo`) VALUES
(1, 'test', 110, 110);

-- --------------------------------------------------------

--
-- Table structure for table `inter_account_transfer`
--

CREATE TABLE `inter_account_transfer` (
  `id` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `referensi` varchar(255) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `dibayarkan_dari` varchar(255) NOT NULL,
  `jumlah` varchar(30) NOT NULL,
  `dana_masuk` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `nota_kredit`
--

CREATE TABLE `nota_kredit` (
  `id` int(11) NOT NULL,
  `tanggal_diterbitkan` date NOT NULL,
  `nomor_penawaran` varchar(255) NOT NULL,
  `pelanggan` varchar(255) NOT NULL,
  `alamat_penagihan` varchar(10000) NOT NULL,
  `deskripsi` varchar(1000) NOT NULL,
  `akun` varchar(255) NOT NULL,
  `deskripsi_harga` varchar(255) NOT NULL,
  `kuantitas` varchar(255) NOT NULL,
  `harga_satuan` double NOT NULL,
  `faktur_penjualan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pelanggan`
--

CREATE TABLE `pelanggan` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `kode` varchar(255) NOT NULL,
  `tanda_pengenal_bisnis` varchar(255) NOT NULL,
  `alamat_penagihan` varchar(10000) NOT NULL,
  `alamat_surel` varchar(255) NOT NULL,
  `telepon` int(25) NOT NULL,
  `faksimili` varchar(255) NOT NULL,
  `ponsel` int(25) NOT NULL,
  `informasi_tambahan` varchar(255) NOT NULL,
  `pagu_kredit` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `penawaran_penjualan`
--

CREATE TABLE `penawaran_penjualan` (
  `id` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `tanggal_diterbitkan` date NOT NULL,
  `nomor_penawaran` varchar(255) NOT NULL,
  `pelanggan` varchar(255) NOT NULL,
  `alamat_penagihan` varchar(10000) NOT NULL,
  `deskripsi` varchar(1000) NOT NULL,
  `deskripsi_harga` varchar(255) NOT NULL,
  `kuantitas` varchar(255) NOT NULL,
  `harga_satuan` double NOT NULL,
  `catatan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pesanan_penjualan`
--

CREATE TABLE `pesanan_penjualan` (
  `id` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `tanggal_diterbitkan` date NOT NULL,
  `nomor_penawaran` varchar(255) NOT NULL,
  `pelanggan` varchar(255) NOT NULL,
  `alamat_penagihan` varchar(10000) NOT NULL,
  `deskripsi` varchar(1000) NOT NULL,
  `deskripsi_harga` varchar(255) NOT NULL,
  `kuantitas` varchar(255) NOT NULL,
  `harga_satuan` double NOT NULL,
  `tanggal_kirim` date NOT NULL,
  `alamat_pengiriman` varchar(10000) NOT NULL,
  `instruksi_pengiriman` varchar(10000) NOT NULL,
  `diotorisasi_oleh` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `reimburse`
--

CREATE TABLE `reimburse` (
  `id` int(11) NOT NULL,
  `tanggal_referensi` date NOT NULL,
  `referensi` varchar(255) NOT NULL,
  `diterima_dari` varchar(255) NOT NULL,
  `diterima_oleh` varchar(255) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `akun` varchar(255) NOT NULL,
  `deskripsi_akun` varchar(255) NOT NULL,
  `kuantitas` varchar(255) NOT NULL,
  `harga_satuan` varchar(255) NOT NULL,
  `catatan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `rekening_bank`
--

CREATE TABLE `rekening_bank` (
  `id` int(11) NOT NULL,
  `kode` varchar(255) NOT NULL,
  `kredit` varchar(255) NOT NULL,
  `rekonsiliasi` varchar(255) NOT NULL,
  `neraca` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rekening_bank`
--

INSERT INTO `rekening_bank` (`id`, `kode`, `kredit`, `rekonsiliasi`, `neraca`, `nama`) VALUES
(18, 'aa', 'a', '', '', 'a'),
(19, 's', 's', '', '', 's'),
(20, 'v', 'v', '', '', 'v'),
(21, '', '', '', '', 'v'),
(22, '', '', '', '', 'vvvv'),
(23, '', '', '', '', 'zcc,k'),
(24, '', '', '', '', 'kkkk'),
(25, '', '', '', '', 'vkkkkm');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi_bank`
--

CREATE TABLE `transaksi_bank` (
  `id` int(11) NOT NULL,
  `tanggal_referensi` date NOT NULL,
  `referensi` varchar(255) NOT NULL,
  `akun_bank` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `tanggal` date NOT NULL,
  `diterima` varchar(255) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `akun` varchar(255) NOT NULL,
  `deskripsi_akun` varchar(255) NOT NULL,
  `kuantitas` varchar(255) NOT NULL,
  `harga_satuan` varchar(255) NOT NULL,
  `catatan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `transaksi_kas`
--

CREATE TABLE `transaksi_kas` (
  `id` int(11) NOT NULL,
  `tanggal_referensi` date NOT NULL,
  `referensi` varchar(255) NOT NULL,
  `akun_bank` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `tanggal` date NOT NULL,
  `diterima` varchar(255) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `akun` varchar(255) NOT NULL,
  `deskripsi_akun` varchar(255) NOT NULL,
  `kuantitas` varchar(255) NOT NULL,
  `harga_satuan` varchar(255) NOT NULL,
  `catatan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `akun_kas`
--
ALTER TABLE `akun_kas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `inter_account_transfer`
--
ALTER TABLE `inter_account_transfer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nota_kredit`
--
ALTER TABLE `nota_kredit`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `penawaran_penjualan`
--
ALTER TABLE `penawaran_penjualan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pesanan_penjualan`
--
ALTER TABLE `pesanan_penjualan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reimburse`
--
ALTER TABLE `reimburse`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rekening_bank`
--
ALTER TABLE `rekening_bank`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transaksi_bank`
--
ALTER TABLE `transaksi_bank`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transaksi_kas`
--
ALTER TABLE `transaksi_kas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `akun_kas`
--
ALTER TABLE `akun_kas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `inter_account_transfer`
--
ALTER TABLE `inter_account_transfer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `nota_kredit`
--
ALTER TABLE `nota_kredit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pelanggan`
--
ALTER TABLE `pelanggan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `penawaran_penjualan`
--
ALTER TABLE `penawaran_penjualan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pesanan_penjualan`
--
ALTER TABLE `pesanan_penjualan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `reimburse`
--
ALTER TABLE `reimburse`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `rekening_bank`
--
ALTER TABLE `rekening_bank`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `transaksi_bank`
--
ALTER TABLE `transaksi_bank`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `transaksi_kas`
--
ALTER TABLE `transaksi_kas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
