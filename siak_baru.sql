-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 02, 2018 at 07:03 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.2

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
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` tinyint(4) NOT NULL DEFAULT '0',
  `token` varchar(16) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `update_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `email`, `password`, `role`, `token`, `created_at`, `update_at`) VALUES
(18, 'admin@admin.com', '$2y$10$UuRoHpovAaNwrYuv/gUMqug69KASFBCvgwsab8aqF5rMlnt5VhZC2', 1, 'f05QzXYcSJn4HZpv', '2018-04-23 13:29:31', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `akun_kas`
--

CREATE TABLE `akun_kas` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `kode` int(30) NOT NULL,
  `saldo` int(30) NOT NULL,
  `user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `akun_kas`
--

INSERT INTO `akun_kas` (`id`, `nama`, `kode`, `saldo`, `user`) VALUES
(6, 'tes', 111, 0, 17),
(7, 'faishal uii', 1, 0, 19);

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
  `akun_bank` int(11) NOT NULL,
  `status` varchar(255) NOT NULL,
  `tanggal` date NOT NULL,
  `diterima` varchar(255) NOT NULL,
  `diterima_oleh` varchar(255) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `catatan` varchar(255) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reimburse`
--

INSERT INTO `reimburse` (`id`, `tanggal_referensi`, `referensi`, `akun_bank`, `status`, `tanggal`, `diterima`, `diterima_oleh`, `deskripsi`, `catatan`, `jumlah`, `user`) VALUES
(2, '2018-04-23', 'tes', 22, 'tertunda', '1970-01-01', 'tes', 'tes', 'tes', 'tes', 4, 17);

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
  `nama` varchar(255) NOT NULL,
  `user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rekening_bank`
--

INSERT INTO `rekening_bank` (`id`, `kode`, `kredit`, `rekonsiliasi`, `neraca`, `nama`, `user`) VALUES
(22, 'd', 'd', '', '', 'd', 17);

-- --------------------------------------------------------

--
-- Table structure for table `rincian_transaksi`
--

CREATE TABLE `rincian_transaksi` (
  `id` int(11) NOT NULL,
  `id_transaksi` int(11) NOT NULL,
  `akun` varchar(255) NOT NULL,
  `pelanggan` varchar(255) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `kuantitas` double NOT NULL,
  `harga` double NOT NULL,
  `jumlah` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rincian_transaksi`
--

INSERT INTO `rincian_transaksi` (`id`, `id_transaksi`, `akun`, `pelanggan`, `deskripsi`, `kuantitas`, `harga`, `jumlah`) VALUES
(1, 1, 'Adversting and Promotion', '-', '2', 2, 2, 4),
(2, 2, 'Bank Charges', '-', '2', 2, 2, 4);

-- --------------------------------------------------------

--
-- Table structure for table `rincian_transaksi_kas`
--

CREATE TABLE `rincian_transaksi_kas` (
  `id` int(11) NOT NULL,
  `id_transaksi` int(11) NOT NULL,
  `akun` varchar(255) NOT NULL,
  `pelanggan` varchar(255) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `kuantitas` double NOT NULL,
  `harga` double NOT NULL,
  `jumlah` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rincian_transaksi_kas`
--

INSERT INTO `rincian_transaksi_kas` (`id`, `id_transaksi`, `akun`, `pelanggan`, `deskripsi`, `kuantitas`, `harga`, `jumlah`) VALUES
(119, 125, 'Accounting Fees', '-', 'D', 2, 2, 4),
(120, 126, 'Sales', '-', 'apa', 2, 5000, 10000),
(121, 126, '', '', 'haha', 1, 75000, 75000);

-- --------------------------------------------------------

--
-- Table structure for table `rincian_transaksi_reimburse`
--

CREATE TABLE `rincian_transaksi_reimburse` (
  `id` int(11) NOT NULL,
  `id_transaksi` int(11) NOT NULL,
  `akun` varchar(255) NOT NULL,
  `pelanggan` varchar(255) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `kuantitas` double NOT NULL,
  `harga` double NOT NULL,
  `jumlah` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rincian_transaksi_reimburse`
--

INSERT INTO `rincian_transaksi_reimburse` (`id`, `id_transaksi`, `akun`, `pelanggan`, `deskripsi`, `kuantitas`, `harga`, `jumlah`) VALUES
(2, 2, 'Accounting Fees', '-', 'tes', 2, 2, 4);

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
  `jenis` varchar(255) NOT NULL,
  `user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaksi_bank`
--

INSERT INTO `transaksi_bank` (`id`, `tanggal_referensi`, `referensi`, `akun_bank`, `status`, `tanggal`, `diterima`, `deskripsi`, `catatan`, `jumlah`, `jenis`, `user`) VALUES
(1, '2018-04-23', 'w', 22, 'tertunda', '1970-01-01', 'w', 'w', 'd', 4, 'penerimaan', 17),
(2, '2018-04-23', '22', 22, 'tertunda', '1970-01-01', 'e', 'e', 'e', 4, 'pengeluaran', 17);

-- --------------------------------------------------------

--
-- Table structure for table `transaksi_kas`
--

CREATE TABLE `transaksi_kas` (
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
  `jenis` varchar(255) NOT NULL,
  `user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaksi_kas`
--

INSERT INTO `transaksi_kas` (`id`, `tanggal_referensi`, `referensi`, `akun_bank`, `status`, `tanggal`, `diterima`, `deskripsi`, `catatan`, `jumlah`, `jenis`, `user`) VALUES
(125, '2018-04-23', 'W', 22, 'tertunda', '1970-01-01', 'W', 'W', 'D', 4, 'penerimaan', 17),
(126, '2018-04-24', '1', 22, 'sesuai', '1970-01-01', 'bang patul', 'beli kopi', 'tidak ada\r\n', 85000, 'penerimaan', 19);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` tinyint(4) NOT NULL DEFAULT '0',
  `token` varchar(16) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `update_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `role`, `token`, `created_at`, `update_at`) VALUES
(17, 'tes@tes.com', '$2y$10$JiMt.ADE.kMYvB3OUYq8XOnbOjqWPWp73fcrxFTWf0CQZYK182H2W', 1, '2kmn3gyh6ofadIDi', '2018-04-23 08:21:14', NULL),
(18, 'tes1@tes1.com', '$2y$10$/KlHf.4nXPFq5hQKrfsslujZUnw83ZDSVmaR2WWUfN3hHgvI.WrTu', 1, 'PFXZI7RjoLU5NcfD', '2018-04-23 13:48:52', NULL),
(19, 'faishal@gmail.com', '$2y$10$OSSeCcYHxk9yDPkHhbUfzO7zHyxwnIWQcV4PSjkOdzDvIva0bMK0O', 1, 'GUutvWzwAqCLIDsB', '2018-04-24 08:48:00', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `akun_kas`
--
ALTER TABLE `akun_kas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user` (`user`);

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
  ADD PRIMARY KEY (`id`),
  ADD KEY `transaksi_kas_ibfk_1` (`akun_bank`),
  ADD KEY `user` (`user`);

--
-- Indexes for table `rekening_bank`
--
ALTER TABLE `rekening_bank`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user` (`user`);

--
-- Indexes for table `rincian_transaksi`
--
ALTER TABLE `rincian_transaksi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_Rincian` (`akun`),
  ADD KEY `rincian_transaksi_ibfk_1` (`pelanggan`),
  ADD KEY `rincian_transaksi_ibfk_2` (`id_transaksi`);

--
-- Indexes for table `rincian_transaksi_kas`
--
ALTER TABLE `rincian_transaksi_kas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `rincian_transaksi_kas_ibfk_1` (`id_transaksi`);

--
-- Indexes for table `rincian_transaksi_reimburse`
--
ALTER TABLE `rincian_transaksi_reimburse`
  ADD PRIMARY KEY (`id`),
  ADD KEY `rincian_transaksi_kas_ibfk_1` (`id_transaksi`);

--
-- Indexes for table `transaksi_bank`
--
ALTER TABLE `transaksi_bank`
  ADD PRIMARY KEY (`id`),
  ADD KEY `akun_bank` (`akun_bank`),
  ADD KEY `user` (`user`);

--
-- Indexes for table `transaksi_kas`
--
ALTER TABLE `transaksi_kas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `transaksi_kas_ibfk_1` (`akun_bank`),
  ADD KEY `user` (`user`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `akun_kas`
--
ALTER TABLE `akun_kas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `rincian_transaksi`
--
ALTER TABLE `rincian_transaksi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `rincian_transaksi_kas`
--
ALTER TABLE `rincian_transaksi_kas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=122;

--
-- AUTO_INCREMENT for table `rincian_transaksi_reimburse`
--
ALTER TABLE `rincian_transaksi_reimburse`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `transaksi_bank`
--
ALTER TABLE `transaksi_bank`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `transaksi_kas`
--
ALTER TABLE `transaksi_kas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=127;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `akun_kas`
--
ALTER TABLE `akun_kas`
  ADD CONSTRAINT `akun_kas_ibfk_1` FOREIGN KEY (`user`) REFERENCES `users` (`id`);

--
-- Constraints for table `reimburse`
--
ALTER TABLE `reimburse`
  ADD CONSTRAINT `reimburse_ibfk_1` FOREIGN KEY (`akun_bank`) REFERENCES `rekening_bank` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `reimburse_ibfk_2` FOREIGN KEY (`user`) REFERENCES `users` (`id`);

--
-- Constraints for table `rekening_bank`
--
ALTER TABLE `rekening_bank`
  ADD CONSTRAINT `rekening_bank_ibfk_1` FOREIGN KEY (`user`) REFERENCES `users` (`id`);

--
-- Constraints for table `rincian_transaksi`
--
ALTER TABLE `rincian_transaksi`
  ADD CONSTRAINT `rincian_transaksi_ibfk_2` FOREIGN KEY (`id_transaksi`) REFERENCES `transaksi_bank` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `rincian_transaksi_kas`
--
ALTER TABLE `rincian_transaksi_kas`
  ADD CONSTRAINT `rincian_transaksi_kas_ibfk_1` FOREIGN KEY (`id_transaksi`) REFERENCES `transaksi_kas` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `rincian_transaksi_reimburse`
--
ALTER TABLE `rincian_transaksi_reimburse`
  ADD CONSTRAINT `rincian_transaksi_reimburse_ibfk_1` FOREIGN KEY (`id_transaksi`) REFERENCES `reimburse` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `transaksi_bank`
--
ALTER TABLE `transaksi_bank`
  ADD CONSTRAINT `transaksi_bank_ibfk_1` FOREIGN KEY (`akun_bank`) REFERENCES `rekening_bank` (`id`),
  ADD CONSTRAINT `transaksi_bank_ibfk_2` FOREIGN KEY (`user`) REFERENCES `users` (`id`);

--
-- Constraints for table `transaksi_kas`
--
ALTER TABLE `transaksi_kas`
  ADD CONSTRAINT `transaksi_kas_ibfk_1` FOREIGN KEY (`akun_bank`) REFERENCES `rekening_bank` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `transaksi_kas_ibfk_2` FOREIGN KEY (`user`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
