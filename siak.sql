-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 16, 2018 at 12:38 PM
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

--
-- Dumping data for table `transaksi_bank`
--

INSERT INTO `transaksi_bank` (`id`, `tanggal_referensi`, `referensi`, `akun_bank`, `status`, `tanggal`, `diterima`, `deskripsi`, `akun`, `deskripsi_akun`, `kuantitas`, `harga_satuan`, `catatan`) VALUES
(1, '2018-03-21', 'tidak tahu', '', 'aaa', '2018-03-06', 'siapa', 'aaaa', 'aaaaaa', 'aaa', 'aaaa', '12', 'aaa');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `transaksi_bank`
--
ALTER TABLE `transaksi_bank`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `transaksi_bank`
--
ALTER TABLE `transaksi_bank`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
