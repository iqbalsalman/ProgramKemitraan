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
-- Table structure for table `keuangan`
--

CREATE TABLE `keuangan` (
  `idkeuangan` int(20) NOT NULL,
  `idperusahaan` int(30) DEFAULT NULL,
  `thn1` date DEFAULT NULL,
  `thn2` date DEFAULT NULL,
  `kas1` int(30) DEFAULT NULL,
  `kas2` int(30) DEFAULT NULL,
  `bank1` int(30) DEFAULT NULL,
  `bank2` int(30) DEFAULT NULL,
  `piutang1` int(30) DEFAULT NULL,
  `piutang2` int(30) DEFAULT NULL,
  `pes_barang1` int(30) DEFAULT NULL,
  `pes_barang2` int(30) DEFAULT NULL,
  `per_produksi1` int(30) DEFAULT NULL,
  `per_produksi2` int(30) DEFAULT NULL,
  `per_kantor1` int(30) DEFAULT NULL,
  `per_kantor2` int(30) DEFAULT NULL,
  `total_af1` int(30) DEFAULT NULL,
  `total_af2` int(30) DEFAULT NULL,
  `bangunan1` int(30) DEFAULT NULL,
  `bangunan2` int(30) DEFAULT NULL,
  `tanah1` int(30) DEFAULT NULL,
  `tanah2` int(40) DEFAULT NULL,
  `lain1` int(30) DEFAULT NULL,
  `lain2` int(30) DEFAULT NULL,
  `total_akv1` int(30) DEFAULT NULL,
  `total_akv2` int(30) DEFAULT NULL,
  `htnb1` int(30) DEFAULT NULL,
  `htnb2` int(30) DEFAULT NULL,
  `hutang_dagang1` int(30) NOT NULL,
  `hutang_dagang2` int(30) DEFAULT NULL,
  `hlain1` int(30) DEFAULT NULL,
  `hlain2` int(30) DEFAULT NULL,
  `modal1` int(30) DEFAULT NULL,
  `modal2` int(30) DEFAULT NULL,
  `laba_ditahan1` int(30) DEFAULT NULL,
  `laba_ditahan2` int(30) DEFAULT NULL,
  `total_pasiva1` int(30) DEFAULT NULL,
  `total_pasiva2` int(30) DEFAULT NULL,
  `nama_bank` varchar(50) DEFAULT NULL,
  `pok_pinjaman` int(30) DEFAULT NULL,
  `besar_Bunga` int(30) DEFAULT NULL,
  `prosentasi_bunga` int(10) DEFAULT NULL,
  `sisa_pinjaman` varchar(20) DEFAULT NULL,
  `sisa_kali_ansur` int(20) DEFAULT NULL,
  `jml_angsuran` int(20) DEFAULT NULL,
  `nama_perusahaan_d` varchar(50) DEFAULT NULL,
  `pokok_pinjaman_dagang` int(30) DEFAULT NULL,
  `Besar_bunga_dagang` int(30) DEFAULT NULL,
  `prosentase_bunga_dagang` int(30) DEFAULT NULL,
  `sisa_pinjaman_dagang` int(30) DEFAULT NULL,
  `sisa_angsuran_dagang` int(30) DEFAULT NULL,
  `jml_angsuran_dagang` int(30) DEFAULT NULL,
  `nama_bumn` varchar(50) DEFAULT NULL,
  `pokok_pinjaman_bumn` int(30) DEFAULT NULL,
  `besar_bunga_bumn` int(30) DEFAULT NULL,
  `prosentase_bunga_bumn` int(30) DEFAULT NULL,
  `sisa_pinjaman_bumn` int(30) DEFAULT NULL,
  `sisa_angsuran_bumn` int(30) DEFAULT NULL,
  `jml_angsuran_bumn` int(30) DEFAULT NULL,
  `nama_badan` varchar(40) DEFAULT NULL,
  `pokok_pinjaman_badan` int(30) DEFAULT NULL,
  `besar_bunga_badan` int(30) DEFAULT NULL,
  `prosentase_bunga_badan` int(30) DEFAULT NULL,
  `sisa_pinjaman_badan` int(30) DEFAULT NULL,
  `sisa_angsuran_badan` int(30) DEFAULT NULL,
  `jml_angsuran_badan` int(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `keuangan`
--

INSERT INTO `keuangan` (`idkeuangan`, `idperusahaan`, `thn1`, `thn2`, `kas1`, `kas2`, `bank1`, `bank2`, `piutang1`, `piutang2`, `pes_barang1`, `pes_barang2`, `per_produksi1`, `per_produksi2`, `per_kantor1`, `per_kantor2`, `total_af1`, `total_af2`, `bangunan1`, `bangunan2`, `tanah1`, `tanah2`, `lain1`, `lain2`, `total_akv1`, `total_akv2`, `htnb1`, `htnb2`, `hutang_dagang1`, `hutang_dagang2`, `hlain1`, `hlain2`, `modal1`, `modal2`, `laba_ditahan1`, `laba_ditahan2`, `total_pasiva1`, `total_pasiva2`, `nama_bank`, `pok_pinjaman`, `besar_Bunga`, `prosentasi_bunga`, `sisa_pinjaman`, `sisa_kali_ansur`, `jml_angsuran`, `nama_perusahaan_d`, `pokok_pinjaman_dagang`, `Besar_bunga_dagang`, `prosentase_bunga_dagang`, `sisa_pinjaman_dagang`, `sisa_angsuran_dagang`, `jml_angsuran_dagang`, `nama_bumn`, `pokok_pinjaman_bumn`, `besar_bunga_bumn`, `prosentase_bunga_bumn`, `sisa_pinjaman_bumn`, `sisa_angsuran_bumn`, `jml_angsuran_bumn`, `nama_badan`, `pokok_pinjaman_badan`, `besar_bunga_badan`, `prosentase_bunga_badan`, `sisa_pinjaman_badan`, `sisa_angsuran_badan`, `jml_angsuran_badan`) VALUES
(1, 1, '2018-02-07', '2018-02-17', 80000, 789000, 3500000, 80000, 780000, 980000, 56000, 700000, 5000000, 6700, 4560000, 4570000, 13976000, 7125700, 100000000, 800000, 67000, 6780000, 6700000, 680000, 106767000, 8260000, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 0, 0, 0, '', 0, 0, '', 0, 0, 0, 0, 0, 0, '', 0, 0, 0, 0, 0, 0, '', 0, 0, 0, 0, 0, 0),
(2, 2, '2018-02-28', '2018-02-14', 58000, 789000, 45000, 80000, 10000, 980000, 56000, 700000, 50000, 6700, 67000000, 45000000, 67219000, 47555700, 8000, 800000, 67000, 6780000, 6700000, 680000, 6775000, 8260000, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 0, 0, 0, '', 0, 0, '', 0, 0, 0, 0, 0, 0, '', 0, 0, 0, 0, 0, 0, '', 0, 0, 0, 0, 0, 0),
(3, 3, '2018-02-20', '2018-02-08', 58000, 789000, 45000, 80000, 10000, 980000, 56000, 700000, 50000, 6700000, 4560000, 4570000, 4779000, 13819000, 8000000, 800000, 670000000, 6780000, 6700000, 680000, 684700000, 8260000, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 0, 0, 0, '', 0, 0, '', 0, 0, 0, 0, 0, 0, '', 0, 0, 0, 0, 0, 0, '', 0, 0, 0, 0, 0, 0),
(4, 4, '2018-02-22', '2018-02-25', 1000000, 4500000, 3500000, 80000, 780000, 980000, 890000, 75000000, 5000000, 4000000, 45600, 45000000, 11215600, 129560000, 8000000, 800000, 67000, 6780000, 780000, 680000, 8847000, 8260000, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 0, 0, 0, '', 0, 0, '', 0, 0, 0, 0, 0, 0, '', 0, 0, 0, 0, 0, 0, '', 0, 0, 0, 0, 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `keuangan`
--
ALTER TABLE `keuangan`
  ADD PRIMARY KEY (`idkeuangan`),
  ADD KEY `fk_perusahaan` (`idperusahaan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `keuangan`
--
ALTER TABLE `keuangan`
  MODIFY `idkeuangan` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `keuangan`
--
ALTER TABLE `keuangan`
  ADD CONSTRAINT `fk_perusahaan` FOREIGN KEY (`idperusahaan`) REFERENCES `perusahaan` (`idperusahaan`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
