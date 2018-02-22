-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 22, 2018 at 12:59 PM
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
-- Table structure for table `survei3`
--

CREATE TABLE `survei3` (
  `bank1` varchar(40) NOT NULL,
  `no_rek` varchar(40) NOT NULL,
  `t_tinggal` varchar(30) NOT NULL,
  `lama_tinggal` varchar(40) NOT NULL,
  `jml_mohon` int(30) NOT NULL,
  `penggunaan1` varchar(40) NOT NULL,
  `penggunaan2` varchar(40) NOT NULL,
  `syarat_minimun` varchar(40) NOT NULL,
  `nama_waris` varchar(40) NOT NULL,
  `hubungan` varchar(40) NOT NULL,
  `nama_p_tanah` varchar(40) NOT NULL,
  `no_shm` varchar(40) NOT NULL,
  `klurah` varchar(40) NOT NULL,
  `kcamatan` varchar(40) NOT NULL,
  `ktkb` varchar(40) NOT NULL,
  `provinsi` varchar(40) NOT NULL,
  `l_tanah` varchar(40) NOT NULL,
  `n_bangunan` int(30) NOT NULL,
  `idsurvei3` int(30) NOT NULL,
  `idsurvei2` int(30) DEFAULT NULL,
  `t_usaha` varchar(225) DEFAULT NULL,
  `lama_tinggal_usaha` varchar(225) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `survei3`
--

INSERT INTO `survei3` (`bank1`, `no_rek`, `t_tinggal`, `lama_tinggal`, `jml_mohon`, `penggunaan1`, `penggunaan2`, `syarat_minimun`, `nama_waris`, `hubungan`, `nama_p_tanah`, `no_shm`, `klurah`, `kcamatan`, `ktkb`, `provinsi`, `l_tanah`, `n_bangunan`, `idsurvei3`, `idsurvei2`, `t_usaha`, `lama_tinggal_usaha`) VALUES
('45000', '3224345454', 'Kontrak', '', 100000000, 'Tambahan modal', 'Memperluas Tempat usaha', '50000000', 'irvan', 'saudara', 'iqbal salman', '2628', 'iqbal salman', 'jabotabek', '3604', '36', '1234x126', 800000, 1, 1, NULL, NULL),
('45000', '3224345454', 'Kontrak', '2 tahun', 100000000, 'Tambahan modal', 'Memperluas Tempat usaha', '50000000', 'irvan', 'saudara', 'iqbal salman', '2628', 'iqbal salman', 'jabotabek', '3604', '36', '1234x126', 800000, 2, 2, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `survei3`
--
ALTER TABLE `survei3`
  ADD PRIMARY KEY (`idsurvei3`),
  ADD KEY `survei_lll` (`idsurvei2`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `survei3`
--
ALTER TABLE `survei3`
  MODIFY `idsurvei3` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `survei3`
--
ALTER TABLE `survei3`
  ADD CONSTRAINT `survei_lll` FOREIGN KEY (`idsurvei2`) REFERENCES `survei2` (`idsurvei2`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
