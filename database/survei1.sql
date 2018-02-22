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
-- Table structure for table `survei1`
--

CREATE TABLE `survei1` (
  `tgl_anggaran` varchar(30) NOT NULL,
  `nm_pemilik` varchar(50) NOT NULL,
  `n_ktp` int(30) NOT NULL,
  `tgl_berlaku` date NOT NULL,
  `n_usaha` varchar(40) NOT NULL,
  `sektor_usaha` varchar(50) NOT NULL,
  `alamat_usaha` varchar(40) NOT NULL,
  `provinsi_e` varchar(40) NOT NULL,
  `kota_kab` varchar(30) NOT NULL,
  `kecamatan` varchar(30) NOT NULL,
  `kelurahan_e` varchar(30) NOT NULL,
  `pembinaan` varchar(30) NOT NULL,
  `tahap` varchar(30) NOT NULL,
  `thn_binaan` date NOT NULL,
  `no_binaan` varchar(30) NOT NULL,
  `nm_bumn_lain` varchar(40) NOT NULL,
  `sls_bina` date NOT NULL,
  `kas_t` int(30) NOT NULL,
  `bank` int(30) NOT NULL,
  `piutang` int(30) NOT NULL,
  `bhn_baku` int(30) NOT NULL,
  `p_produksi` int(30) NOT NULL,
  `p_kantor` int(30) NOT NULL,
  `jml_asset` int(30) NOT NULL,
  `bangunan` int(30) NOT NULL,
  `tanah` int(30) NOT NULL,
  `jml_assettetap` int(40) NOT NULL,
  `total_asset` int(40) NOT NULL,
  `h_barang` int(40) NOT NULL,
  `jml_bln` int(40) NOT NULL,
  `jml_bulanan` int(40) NOT NULL,
  `jml_tahunan` int(40) NOT NULL,
  `h_pokokpenjualan` int(40) NOT NULL,
  `b_operasional` int(40) NOT NULL,
  `jml_hpp` int(40) NOT NULL,
  `laba_bersih_e` int(30) NOT NULL,
  `pb_hutang` varchar(40) NOT NULL,
  `sisa_hutang` int(30) NOT NULL,
  `angsuran_bln` int(30) NOT NULL,
  `sisa_angsuran` varchar(30) NOT NULL,
  `idsurvei1` int(15) NOT NULL,
  `idevaluasi` int(20) DEFAULT NULL,
  `perkiraan_dana` int(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `survei1`
--

INSERT INTO `survei1` (`tgl_anggaran`, `nm_pemilik`, `n_ktp`, `tgl_berlaku`, `n_usaha`, `sektor_usaha`, `alamat_usaha`, `provinsi_e`, `kota_kab`, `kecamatan`, `kelurahan_e`, `pembinaan`, `tahap`, `thn_binaan`, `no_binaan`, `nm_bumn_lain`, `sls_bina`, `kas_t`, `bank`, `piutang`, `bhn_baku`, `p_produksi`, `p_kantor`, `jml_asset`, `bangunan`, `tanah`, `jml_assettetap`, `total_asset`, `h_barang`, `jml_bln`, `jml_bulanan`, `jml_tahunan`, `h_pokokpenjualan`, `b_operasional`, `jml_hpp`, `laba_bersih_e`, `pb_hutang`, `sisa_hutang`, `angsuran_bln`, `sisa_angsuran`, `idsurvei1`, `idevaluasi`, `perkiraan_dana`) VALUES
('2018', 'choerul', 2147483647, '2018-02-27', 'ladaku pisan', 'Perdagangan', 'sdfsfsdfsf BATAKAN, PANYIPATAN KABUPATEN', '63', '6301', '6301010', '6301010001', 'Sudah', 'II', '2018-02-21', '880', 'sa', '2018-02-23', 58000, 45000, 10000, 56000, 50000, 67000000, 67219000, 8000, 67000, 75000, 67294000, 8000, 0, 8000, 96000, 995000, 9375000, 10370000, -10362000, '8000000', 900000, 0, '', 1, 2, 1000000),
('2018', 'Muhamad Iqbal S.AMD.KOM', 2147483647, '2018-02-21', 'Kopda', 'Industri', 'jln paletahan MAHAK BARU, SUNGAI BOH KAB', '32', '3215', '3215150', '3215150005', 'Sudah', 'II', '2018-02-21', '880', 'sa', '2018-02-28', 80000, 3500000, 780000, 56000, 5000000, 4560000, 13976000, 100000000, 67000, 100067000, 114043000, 100000000, 0, 100000000, 1200000000, 13900000, 9623900, 23523900, 76476100, '800000', 70000, 0, '', 2, 1, 65000000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `survei1`
--
ALTER TABLE `survei1`
  ADD PRIMARY KEY (`idsurvei1`),
  ADD KEY `fk_survei_l` (`idevaluasi`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `survei1`
--
ALTER TABLE `survei1`
  MODIFY `idsurvei1` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `survei1`
--
ALTER TABLE `survei1`
  ADD CONSTRAINT `fk_survei_l` FOREIGN KEY (`idevaluasi`) REFERENCES `evaluasi` (`idevaluasi`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
