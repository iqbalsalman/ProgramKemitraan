-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 03, 2018 at 05:27 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pk`
--

-- --------------------------------------------------------

--
-- Table structure for table `t_nitifikasifb`
--

CREATE TABLE `t_nitifikasifb` (
  `idno` int(15) NOT NULL,
  `pesan` varchar(225) DEFAULT NULL,
  `tgl` int(10) DEFAULT NULL,
  `oleh` varchar(30) DEFAULT NULL,
  `ling` varchar(100) DEFAULT NULL,
  `nopesan` varchar(15) DEFAULT NULL,
  `id` int(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_nitifikasifb`
--

INSERT INTO `t_nitifikasifb` (`idno`, `pesan`, `tgl`, `oleh`, `ling`, `nopesan`, `id`) VALUES
(1, 'Telah membuat akun cmb', 1500281930, NULL, 'http://localhost/pk/index.php/akun/index', '01', NULL),
(2, 'Sebagai Kepala PKBL Telah menjadwalkan survei', 1500282001, 'sugianto', 'http://localhost/pk/index.php/notifikasi/penjadwalan', '05', NULL),
(3, 'Sebagai Kepala PKBL Telah Meresejul jadwal anda', 1500282111, 'sugianto', 'http://localhost/pk/index.php/notifikasi/resekejul', '07', NULL),
(4, 'Sebagai Kepala PKBL Telah menjadwalkan survei', 1500282217, 'sugianto', 'http://localhost/pk/index.php/notifikasi/penjadwalan', '05', NULL),
(5, 'Sebagai Kepala PKBL Telah Meresejul jadwal anda', 1500282298, 'sugianto', 'http://localhost/pk/index.php/notifikasi/resekejul', '07', NULL),
(6, 'Sebagai Kepala PKBL Telah menjadwalkan survei', 1500282610, 'sugianto', 'http://localhost/pk/index.php/notifikasi/penjadwalan', '05', NULL),
(7, 'Telah membuat akun cmb', 1500282970, NULL, 'http://localhost/pk/index.php/akun/index', '01', NULL),
(8, 'Sebagai evaluator telah mengevaluasi proposal', 1500529880, 'andy', 'http://localhost/pk/index.php/penilaian/detailnilai1', '04', NULL),
(9, 'Sebagai Kepala PKBL Telah menjadwalkan survei', 1500530183, 'sugianto', 'http://localhost/pk/index.php/notifikasi/penjadwalan', '05', NULL),
(10, 'Sebagai surveyor telah mengsurvei anda', 1500530718, 'dinda', 'http://localhost/pk/index.php/penilaian/detailnilai2', '06', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `t_nitifikasifb`
--
ALTER TABLE `t_nitifikasifb`
  ADD PRIMARY KEY (`idno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `t_nitifikasifb`
--
ALTER TABLE `t_nitifikasifb`
  MODIFY `idno` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
