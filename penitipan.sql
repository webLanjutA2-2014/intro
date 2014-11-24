-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 21, 2014 at 06:51 AM
-- Server version: 5.6.16
-- PHP Version: 5.5.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `penitipan`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `nama` varchar(20) DEFAULT NULL,
  `password` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`nama`, `password`) VALUES
('yanto', 'komsi');

-- --------------------------------------------------------

--
-- Table structure for table `nitip`
--

CREATE TABLE IF NOT EXISTS `nitip` (
  `id` varchar(10) NOT NULL DEFAULT '',
  `nama_pengguna` varchar(20) DEFAULT NULL,
  `deskripsi` varchar(30) DEFAULT NULL,
  `no_hp` varchar(20) DEFAULT NULL,
  `no_loker` varchar(20) DEFAULT NULL,
  `waktu_penitipan` datetime DEFAULT NULL,
  `waktu_pengambilan` datetime DEFAULT NULL,
  `status` varchar(20) DEFAULT NULL,
  `selisih` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nitip`
--

INSERT INTO `nitip` (`id`, `nama_pengguna`, `deskripsi`, `no_hp`, `no_loker`, `waktu_penitipan`, `waktu_pengambilan`, `status`, `selisih`) VALUES
('SV45', 'Daryanto', 'Sepeda', '87826123456', '12', '2014-11-21 08:51:34', '2014-11-21 12:51:09', '3000', 3);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
