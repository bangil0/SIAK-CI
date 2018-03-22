-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 22, 2018 at 05:31 PM
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
(5, 'mochammad faishal', 2121, 0);

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

--
-- Dumping data for table `inter_account_transfer`
--

INSERT INTO `inter_account_transfer` (`id`, `tanggal`, `referensi`, `deskripsi`, `dibayarkan_dari`, `jumlah`, `dana_masuk`) VALUES
(1, '2018-03-15', 'hehehehe', 'hehehehe', 'hehehehe', '12', '2');

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

--
-- Dumping data for table `pelanggan`
--

INSERT INTO `pelanggan` (`id`, `nama`, `kode`, `tanda_pengenal_bisnis`, `alamat_penagihan`, `alamat_surel`, `telepon`, `faksimili`, `ponsel`, `informasi_tambahan`, `pagu_kredit`) VALUES
(1, 'hehehe', '12', 'hehehe', 'hehehe', 'hehehe', 987, 'hehehe', 9, 'hehehe', 'hehehe'),
(2, 'hehehe', '12', 'hehehe', 'hehehe', 'hehehe', 987, 'hehehe', 9, 'hehehe', 'hehehe');

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

--
-- Dumping data for table `penawaran_penjualan`
--

INSERT INTO `penawaran_penjualan` (`id`, `judul`, `tanggal_diterbitkan`, `nomor_penawaran`, `pelanggan`, `alamat_penagihan`, `deskripsi`, `deskripsi_harga`, `kuantitas`, `harga_satuan`, `catatan`) VALUES
(1, 'hehehe', '2018-03-14', '1', 'hehehe', 'hehehe', 'hehehe', '1', 'hehehe', 1, 'hehehe'),
(2, 'hehehe', '2018-03-14', '1', 'hehehe', 'hehehe', 'hehehe', '1', 'hehehe', 1, 'hehehe');

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

--
-- Dumping data for table `pesanan_penjualan`
--

INSERT INTO `pesanan_penjualan` (`id`, `judul`, `tanggal_diterbitkan`, `nomor_penawaran`, `pelanggan`, `alamat_penagihan`, `deskripsi`, `deskripsi_harga`, `kuantitas`, `harga_satuan`, `tanggal_kirim`, `alamat_pengiriman`, `instruksi_pengiriman`, `diotorisasi_oleh`) VALUES
(1, 'hehehe', '2018-03-28', '1', 'hehehe', 'hehehe', 'hehehe', 'hehehe', 'hehehe', 1, '2018-03-13', 'hehehe', 'hehehe', 'hehehe'),
(2, 'hehehe', '2018-03-28', '1', 'hehehe', 'hehehe', 'hehehe', 'hehehe', 'hehehe', 1, '2018-03-13', 'hehehe', 'hehehe', 'hehehe');

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

--
-- Dumping data for table `reimburse`
--

INSERT INTO `reimburse` (`id`, `tanggal_referensi`, `referensi`, `diterima_dari`, `diterima_oleh`, `deskripsi`, `akun`, `deskripsi_akun`, `kuantitas`, `harga_satuan`, `catatan`) VALUES
(1, '2018-03-28', 'hehehe', 'hehehe', 'hehehe', 'hehehe', 'hehehe', 'hehehe', 'hehehe', '1', 'hehehe'),
(2, '2018-03-28', 'hehehe', 'hehehe', 'hehehe', 'hehehe', 'hehehe', 'hehehe', 'hehehe', '1', 'hehehe');

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
(21, 'tes', 'tes', '', '', 'tes');

-- --------------------------------------------------------

--
-- Table structure for table `rincian_transaksi`
--

CREATE TABLE `rincian_transaksi` (
  `id` int(11) NOT NULL,
  `id_transaksi` int(11) NOT NULL,
  `akun` varchar(255) NOT NULL,
  `pelanggan` varchar(11) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `kuantitas` double NOT NULL,
  `harga` double NOT NULL,
  `jumlah` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rincian_transaksi`
--

INSERT INTO `rincian_transaksi` (`id`, `id_transaksi`, `akun`, `pelanggan`, `deskripsi`, `kuantitas`, `harga`, `jumlah`) VALUES
(28, 43, 'Pengeluaran Tagihan', 's', 'cuk', 6, 6, 36),
(29, 43, 'Pengeluaran Tagihan', 'e', 'tes', 7, 8, 56);

-- --------------------------------------------------------

--
-- Table structure for table `transaksi_bank`
--

CREATE TABLE `transaksi_bank` (
  `id` int(11) NOT NULL,
  `tanggal_referensi` date NOT NULL,
  `referensi` varchar(255) NOT NULL,
  `akun_bank` int(11) NOT NULL,
  `status` varchar(255) NOT NULL,
  `tanggal` date NOT NULL,
  `diterima` varchar(255) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `catatan` varchar(255) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `jenis` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaksi_bank`
--

INSERT INTO `transaksi_bank` (`id`, `tanggal_referensi`, `referensi`, `akun_bank`, `status`, `tanggal`, `diterima`, `deskripsi`, `catatan`, `jumlah`, `jenis`) VALUES
(43, '2018-03-21', 'tes', 20, 'sesuai', '2018-03-12', 'tertunda', '5', 'y', 92, 'penerimaan');

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
-- Dumping data for table `transaksi_kas`
--

INSERT INTO `transaksi_kas` (`id`, `tanggal_referensi`, `referensi`, `akun_bank`, `status`, `tanggal`, `diterima`, `deskripsi`, `akun`, `deskripsi_akun`, `kuantitas`, `harga_satuan`, `catatan`) VALUES
(1, '2018-03-08', 'hahahahaha', 'hahahahaha', 'hahahahaha', '2018-03-23', 'hahahahaha', 'hahahahaha', 'hahahahaha', 'hahahahaha', 'hahahahaha', '12', 'hahahahaha');

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
-- Indexes for table `rincian_transaksi`
--
ALTER TABLE `rincian_transaksi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_Rincian` (`akun`),
  ADD KEY `rincian_transaksi_ibfk_1` (`pelanggan`),
  ADD KEY `rincian_transaksi_ibfk_2` (`id_transaksi`);

--
-- Indexes for table `transaksi_bank`
--
ALTER TABLE `transaksi_bank`
  ADD PRIMARY KEY (`id`),
  ADD KEY `akun_bank` (`akun_bank`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `inter_account_transfer`
--
ALTER TABLE `inter_account_transfer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `nota_kredit`
--
ALTER TABLE `nota_kredit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pelanggan`
--
ALTER TABLE `pelanggan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `penawaran_penjualan`
--
ALTER TABLE `penawaran_penjualan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pesanan_penjualan`
--
ALTER TABLE `pesanan_penjualan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `reimburse`
--
ALTER TABLE `reimburse`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `rekening_bank`
--
ALTER TABLE `rekening_bank`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `rincian_transaksi`
--
ALTER TABLE `rincian_transaksi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `transaksi_bank`
--
ALTER TABLE `transaksi_bank`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `transaksi_kas`
--
ALTER TABLE `transaksi_kas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `rincian_transaksi`
--
ALTER TABLE `rincian_transaksi`
  ADD CONSTRAINT `rincian_transaksi_ibfk_2` FOREIGN KEY (`id_transaksi`) REFERENCES `transaksi_bank` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `transaksi_bank`
--
ALTER TABLE `transaksi_bank`
  ADD CONSTRAINT `transaksi_bank_ibfk_1` FOREIGN KEY (`akun_bank`) REFERENCES `rekening_bank` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
