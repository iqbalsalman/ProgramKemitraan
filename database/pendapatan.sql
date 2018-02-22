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
-- Table structure for table `pendapatan`
--

CREATE TABLE `pendapatan` (
  `idpendapatan` int(20) NOT NULL,
  `thn_pendapatan1` date NOT NULL,
  `thn_pendapatan2` date NOT NULL,
  `penjualanr_s1` int(30) DEFAULT NULL,
  `penjualanr_s2` int(30) DEFAULT NULL,
  `penjualan_s1` int(30) NOT NULL,
  `penjualan_s2` int(30) NOT NULL,
  `h_pendapatan1` int(40) NOT NULL,
  `h_pendapatan2` int(40) NOT NULL,
  `idkeuangan` int(20) DEFAULT NULL,
  `bahan_baku1` int(30) NOT NULL,
  `bahan_baku2` int(30) NOT NULL,
  `bahan_penolong1` int(30) NOT NULL,
  `bahan_penolong2` int(30) NOT NULL,
  `hplain_lain1` int(30) NOT NULL,
  `hplain_lain2` int(30) NOT NULL,
  `total_hpp1` int(40) NOT NULL,
  `total_hpp2` int(40) NOT NULL,
  `laba_rugi1` int(30) NOT NULL,
  `laba_rugi2` int(30) NOT NULL,
  `adminis_atk1` int(30) NOT NULL,
  `adminis_atk2` int(30) NOT NULL,
  `biaya_penjualan1` int(30) NOT NULL,
  `biaya_penjualan2` int(30) NOT NULL,
  `telepon1` int(30) NOT NULL,
  `telepon2` int(30) NOT NULL,
  `air1` int(30) NOT NULL,
  `air2` int(30) NOT NULL,
  `listrik1` int(30) NOT NULL,
  `listrik2` int(30) NOT NULL,
  `biaya_penyusutan1` int(30) NOT NULL,
  `biaya_penyusutan2` int(30) NOT NULL,
  `biaya_gaji1` int(30) NOT NULL,
  `biaya_gaji2` int(30) NOT NULL,
  `Biaya_tenaga_kerja1` int(30) NOT NULL,
  `Biaya_tenaga_kerja2` int(30) NOT NULL,
  `biaya_kesehatan1` int(30) NOT NULL,
  `biaya_kesehatan2` int(30) NOT NULL,
  `biaya_transportasi1` int(30) NOT NULL,
  `biaya_transportasi2` int(30) NOT NULL,
  `biaya_pendidikan1` int(30) NOT NULL,
  `biaya_pendidikan2` int(30) NOT NULL,
  `biaya_promosi1` int(30) NOT NULL,
  `biaya_promosi2` int(30) NOT NULL,
  `biaya_rumah_tangga1` int(30) NOT NULL,
  `biaya_rumah_tangga2` int(30) NOT NULL,
  `biaya_sekolah1` int(30) NOT NULL,
  `biaya_sekolah2` int(30) NOT NULL,
  `total_adm_umum1` bigint(40) DEFAULT NULL,
  `total_adm_umum2` bigint(40) DEFAULT NULL,
  `laba_bersih1` int(30) DEFAULT NULL,
  `laba_bersih2` bigint(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pendapatan`
--

INSERT INTO `pendapatan` (`idpendapatan`, `thn_pendapatan1`, `thn_pendapatan2`, `penjualanr_s1`, `penjualanr_s2`, `penjualan_s1`, `penjualan_s2`, `h_pendapatan1`, `h_pendapatan2`, `idkeuangan`, `bahan_baku1`, `bahan_baku2`, `bahan_penolong1`, `bahan_penolong2`, `hplain_lain1`, `hplain_lain2`, `total_hpp1`, `total_hpp2`, `laba_rugi1`, `laba_rugi2`, `adminis_atk1`, `adminis_atk2`, `biaya_penjualan1`, `biaya_penjualan2`, `telepon1`, `telepon2`, `air1`, `air2`, `listrik1`, `listrik2`, `biaya_penyusutan1`, `biaya_penyusutan2`, `biaya_gaji1`, `biaya_gaji2`, `Biaya_tenaga_kerja1`, `Biaya_tenaga_kerja2`, `biaya_kesehatan1`, `biaya_kesehatan2`, `biaya_transportasi1`, `biaya_transportasi2`, `biaya_pendidikan1`, `biaya_pendidikan2`, `biaya_promosi1`, `biaya_promosi2`, `biaya_rumah_tangga1`, `biaya_rumah_tangga2`, `biaya_sekolah1`, `biaya_sekolah2`, `total_adm_umum1`, `total_adm_umum2`, `laba_bersih1`, `laba_bersih2`) VALUES
(1, '2018-02-14', '2018-02-06', 12000000, 130000000, 0, 0, 12000000, 130000000, 1, 5000000, 8000000, 8000000, 9000000, 900000, 180000, 13900000, 17180000, -1900000, 112820000, 89000, 17000, 9000000, 800000, 8000, 18000, 19000, 10000, 9000, 8500000, 9500, 1800, 1900, 90000, 89000, 7800, 70000, 8000, 500, 800000, 80000, 89000, 80000, 1900000, 90000, 18000, 78000, 9000, 9623900, 12268600, -11523900, 100551400),
(2, '2018-02-21', '2018-02-27', 0, 0, 0, 0, 0, 0, 2, 5000, 8000000, 90000, 9000, 900000, 180000, 995000, 8189000, -995000, -8189000, 89000, 17000, 9000000, 800000, 8000, 18000, 19000, 10000, 9000, 8500000, 9500, 1800000, 60000, 90000000, 45000, 7800, 6700, 80000000, 90000, 8000, 9000, 89000, 1800, 19000000, 9000, 18000, 19000, 900000000, 9375000, 1100267800, -10370000, -1108456800),
(3, '2018-02-17', '2018-02-22', 12000000, 130000000, 0, 0, 12000000, 130000000, 3, 5000000, 8000000, 8000000, 9000000, 900000, 180000, 13900000, 17180000, -1900000, 112820000, 1200000, 17000000, 9000000, 800000, 8000000, 18000000, 890000, 1000000, 900000, 8500000, 780000, 1800000, 1900000, 9000000, 89000, 7800000, 6700000, 80000000, 90000, 8000000, 9000, 10000000, 1800, 19000, 9000, 18000, 19000, 9000000, 29587800, 170937000, -31487800, -58117000),
(4, '2018-02-19', '2018-02-27', 2147483647, 2147483647, 0, 0, 2147483647, 2147483647, 4, 5000, 8000000, 8000, 9000000, 900000, 180000, 913000, 17180000, 2147483647, 2147483647, 89000, 17000000, 9000, 7000, 8000000, 18000000, 890000, 10000, 900000, 8500000, 78000000, 9800000, 1900000, 90000000, 890000, 7800000, 6700000, 80000000, 9000000, 8000000, 9000000, 1000000, 1800000, 1900000, 9000000, 1800000, 7800000, 9000000, 133978000, 252817000, 2147483647, 1199730003000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pendapatan`
--
ALTER TABLE `pendapatan`
  ADD PRIMARY KEY (`idpendapatan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pendapatan`
--
ALTER TABLE `pendapatan`
  MODIFY `idpendapatan` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `pendapatan`
--
ALTER TABLE `pendapatan`
  ADD CONSTRAINT `fk_pendapatan` FOREIGN KEY (`idpendapatan`) REFERENCES `keuangan` (`idkeuangan`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
