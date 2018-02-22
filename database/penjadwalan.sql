-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 22, 2018 at 12:57 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 5.6.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
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
-- Table structure for table `penjadwalan`
--

CREATE TABLE `penjadwalan` (
  `idpenjadwalan` int(30) NOT NULL,
  `nip` int(30) DEFAULT NULL,
  `nama_surveyor` varchar(40) DEFAULT NULL,
  `tgl_tugas1` date DEFAULT NULL,
  `tgl_tugas2` date DEFAULT NULL,
  `idpegawai` int(30) DEFAULT NULL,
  `status_j` varchar(50) DEFAULT NULL,
  `jmlhari` int(30) DEFAULT NULL,
  `idakun` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `penjadwalan`
--

INSERT INTO `penjadwalan` (`idpenjadwalan`, `nip`, `nama_surveyor`, `tgl_tugas1`, `tgl_tugas2`, `idpegawai`, `status_j`, `jmlhari`, `idakun`) VALUES
(1, 67011, 'dinda', '2018-02-21', '2018-02-21', 1, 'Tidak bisa bertugas karena sakit', 0, '1'),
(2, 6712, 'alif', '2018-02-19', '2018-02-22', 4, 'sudah menyelesaikan Tugas', 3, '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `penjadwalan`
--
ALTER TABLE `penjadwalan`
  ADD PRIMARY KEY (`idpenjadwalan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `penjadwalan`
--
ALTER TABLE `penjadwalan`
  MODIFY `idpenjadwalan` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
