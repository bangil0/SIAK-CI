-- phpMyAdmin SQL Dump
-- version 3.3.9.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 09, 2013 at 05:57 AM
-- Server version: 5.5.9
-- PHP Version: 5.3.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `travel`
--

-- --------------------------------------------------------

--
-- Table structure for table `armada`
--

CREATE TABLE `armada` (
  `id_armada` int(11) NOT NULL AUTO_INCREMENT,
  `armada` varchar(30) NOT NULL,
  `kapasitas` int(11) NOT NULL,
  PRIMARY KEY (`id_armada`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `armada`
--

INSERT INTO `armada` VALUES(1, 'L-300', 7);
INSERT INTO `armada` VALUES(2, 'ELF', 12);

-- --------------------------------------------------------

--
-- Table structure for table `jadwal`
--

CREATE TABLE `jadwal` (
  `id_jadwal` int(11) NOT NULL AUTO_INCREMENT,
  `tujuan` int(11) NOT NULL,
  `jam` varchar(5) NOT NULL,
  `armada` int(11) NOT NULL,
  PRIMARY KEY (`id_jadwal`),
  KEY `tujuan` (`tujuan`),
  KEY `armada` (`armada`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `jadwal`
--

INSERT INTO `jadwal` VALUES(1, 1, '07:00', 1);
INSERT INTO `jadwal` VALUES(2, 2, '07:30', 2);
INSERT INTO `jadwal` VALUES(3, 1, '08:00', 1);
INSERT INTO `jadwal` VALUES(4, 2, '08:30', 2);
INSERT INTO `jadwal` VALUES(5, 1, '09:00', 2);
INSERT INTO `jadwal` VALUES(6, 2, '09:30', 2);

-- --------------------------------------------------------

--
-- Table structure for table `pelanggan`
--

CREATE TABLE `pelanggan` (
  `id_pelanggan` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `telepon` varchar(15) NOT NULL,
  PRIMARY KEY (`id_pelanggan`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `pelanggan`
--

INSERT INTO `pelanggan` VALUES(1, 'Doni', 'Jl. Kaliurang KM 5', '081222322232');
INSERT INTO `pelanggan` VALUES(2, 'Rena', 'Jl. Monjali 32', '0123212112');

-- --------------------------------------------------------

--
-- Table structure for table `reservasi`
--

CREATE TABLE `reservasi` (
  `id_reservasi` int(11) NOT NULL AUTO_INCREMENT,
  `pelanggan` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `jadwal` int(11) NOT NULL,
  `kursi` varchar(2) NOT NULL,
  PRIMARY KEY (`id_reservasi`),
  KEY `pelanggan` (`pelanggan`,`jadwal`),
  KEY `jadwal` (`jadwal`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `reservasi`
--

INSERT INTO `reservasi` VALUES(1, 1, '2012-12-19', 2, '3');
INSERT INTO `reservasi` VALUES(2, 2, '2012-12-22', 2, '5');
INSERT INTO `reservasi` VALUES(3, 1, '2013-02-21', 5, '4');

-- --------------------------------------------------------

--
-- Table structure for table `tujuan`
--

CREATE TABLE `tujuan` (
  `id_tujuan` int(11) NOT NULL AUTO_INCREMENT,
  `tujuan` varchar(50) NOT NULL,
  PRIMARY KEY (`id_tujuan`),
  UNIQUE KEY `tujuan` (`tujuan`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tujuan`
--

INSERT INTO `tujuan` VALUES(1, 'Semarang');
INSERT INTO `tujuan` VALUES(2, 'Solo');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `jadwal`
--
ALTER TABLE `jadwal`
  ADD CONSTRAINT `jadwal_ibfk_3` FOREIGN KEY (`tujuan`) REFERENCES `tujuan` (`id_tujuan`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `jadwal_ibfk_4` FOREIGN KEY (`armada`) REFERENCES `armada` (`id_armada`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `reservasi`
--
ALTER TABLE `reservasi`
  ADD CONSTRAINT `reservasi_ibfk_1` FOREIGN KEY (`pelanggan`) REFERENCES `pelanggan` (`id_pelanggan`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `reservasi_ibfk_2` FOREIGN KEY (`jadwal`) REFERENCES `jadwal` (`id_jadwal`) ON DELETE CASCADE ON UPDATE CASCADE;
