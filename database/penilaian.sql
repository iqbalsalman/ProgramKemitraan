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
-- Table structure for table `penilaian`
--

CREATE TABLE `penilaian` (
  `idpenilaian` int(30) NOT NULL,
  `status` varchar(40) NOT NULL,
  `catatan` varchar(150) NOT NULL,
  `idkegiatanusaha` int(30) NOT NULL,
  `idevaluasi` int(20) DEFAULT NULL,
  `idsurvei3` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `penilaian`
--

INSERT INTO `penilaian` (`idpenilaian`, `status`, `catatan`, `idkegiatanusaha`, `idevaluasi`, `idsurvei3`) VALUES
(1, 'Layak Survei', 'dana sangat memenuhi', 1, 1, 0),
(2, 'Ditunda', 'Tidak cukup', 2, 2, 1),
(3, 'Tidak Layak Survei', 'Tidak cukup', 3, 3, 0),
(4, 'Lolos Administrasi Proposal', 'Telah Memenuhi Persyaratan', 4, NULL, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `penilaian`
--
ALTER TABLE `penilaian`
  ADD PRIMARY KEY (`idpenilaian`),
  ADD KEY `fk_p_adminis` (`idkegiatanusaha`),
  ADD KEY `fk_p_evaluasi` (`idevaluasi`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `penilaian`
--
ALTER TABLE `penilaian`
  MODIFY `idpenilaian` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `penilaian`
--
ALTER TABLE `penilaian`
  ADD CONSTRAINT `fk_p_adminis` FOREIGN KEY (`idkegiatanusaha`) REFERENCES `kegiatan_usaha` (`idkegitanusaha`),
  ADD CONSTRAINT `fk_p_evaluasi` FOREIGN KEY (`idevaluasi`) REFERENCES `evaluasi` (`idevaluasi`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
