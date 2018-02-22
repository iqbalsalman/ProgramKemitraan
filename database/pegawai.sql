-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 22, 2018 at 12:56 PM
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
-- Table structure for table `pegawai`
--

CREATE TABLE `pegawai` (
  `idpegawai` int(20) NOT NULL,
  `np_pegawai` int(30) NOT NULL,
  `nama_pegawai` varchar(30) NOT NULL,
  `nohp_pegawai` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `s_jabatan` varchar(50) NOT NULL,
  `status` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pegawai`
--

INSERT INTO `pegawai` (`idpegawai`, `np_pegawai`, `nama_pegawai`, `nohp_pegawai`, `email`, `s_jabatan`, `status`) VALUES
(1, 67011, 'dinda', '085778686973', 'dinda@peruri.co.id', 'Bagian Keuangan', 'Tidak Terjadwalkan'),
(2, 6710123, 'gunawan', '081234658971', 'gunawanl@peruri.co.id', 'Staaf ', ''),
(3, 678788, 'Sugianto', '08373232112', 'sugianto@peruri.co.id', 'Kepala PKBL', ''),
(4, 6712, 'alif', '08673728373', 'alif@peruri.co.id', 'keuangan', 'Tidak Terjadwalkan'),
(5, 672382, 'fandy', '0867656554', 'fandyl@peruri.co.id', 'Angkutan ', ''),
(7, 5806, 'saridewi', '08129465784', 'saridewi@gmail.com', 'Surveyor', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`idpegawai`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pegawai`
--
ALTER TABLE `pegawai`
  MODIFY `idpegawai` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
