-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 22, 2018 at 12:55 PM
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
-- Table structure for table `evaluasi`
--

CREATE TABLE `evaluasi` (
  `idevaluasi` int(20) NOT NULL,
  `thn_anggaran` date NOT NULL,
  `ktkb` varchar(50) NOT NULL,
  `nm_usaha` varchar(50) NOT NULL,
  `nm_pemilik` varchar(50) NOT NULL,
  `jenis_usaha` varchar(50) NOT NULL,
  `p_binaan_pk` date NOT NULL,
  `kd_binaan` varchar(20) NOT NULL,
  `alamat_perusahaan` varchar(1000) NOT NULL,
  `status_usaha` varchar(40) NOT NULL,
  `notlp_perusahaan` int(30) NOT NULL,
  `thn_berdiri` date NOT NULL,
  `jml_karyawan` int(20) NOT NULL,
  `jml_pengurus` int(30) NOT NULL,
  `neraca` varchar(30) NOT NULL,
  `nilai_asset` int(30) NOT NULL,
  `nilai_asset_tahun` int(30) NOT NULL,
  `laba_bersih` int(30) NOT NULL,
  `npwp` int(30) NOT NULL,
  `kendala_usaha` varchar(40) NOT NULL,
  `jml_permohonan` int(30) NOT NULL,
  `penggunaan_modal` varchar(40) NOT NULL,
  `srs_tansie` varchar(40) NOT NULL,
  `rasio_likuiditas` varchar(50) NOT NULL,
  `rasio_aktifitas` int(30) NOT NULL,
  `legalitas` int(30) NOT NULL,
  `pemasaran` int(30) NOT NULL,
  `tgl_evaluasi` date NOT NULL,
  `perkiraan_dana` int(30) NOT NULL,
  `idkegitanusaha` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `evaluasi`
--

INSERT INTO `evaluasi` (`idevaluasi`, `thn_anggaran`, `ktkb`, `nm_usaha`, `nm_pemilik`, `jenis_usaha`, `p_binaan_pk`, `kd_binaan`, `alamat_perusahaan`, `status_usaha`, `notlp_perusahaan`, `thn_berdiri`, `jml_karyawan`, `jml_pengurus`, `neraca`, `nilai_asset`, `nilai_asset_tahun`, `laba_bersih`, `npwp`, `kendala_usaha`, `jml_permohonan`, `penggunaan_modal`, `srs_tansie`, `rasio_likuiditas`, `rasio_aktifitas`, `legalitas`, `pemasaran`, `tgl_evaluasi`, `perkiraan_dana`, `idkegitanusaha`) VALUES
(1, '2018-02-07', 'KABUPATEN MALINAU', 'Kopda', 'Muhamad Iqbal S.AMD.KOM', 'Industri', '2018-02-08', '4533', 'jln paletahan MAHAK BARU, SUNGAI BOH KABUPATEN MALINAU KALIMANTAN UTARA', 'Milik Sendiri', 2147483647, '2018-02-27', 45, 0, '', 13976000, 167712000, 100551400, 2147483647, '', 458000000, '', 'Ada', 'Baik', 5, 2, 0, '2018-02-28', 1000000, 1),
(2, '2018-02-21', 'KABUPATEN TANAH LAUT', 'ladaku pisan', 'choerul', 'Koperasi', '2018-02-14', '4533', 'sdfsfsdfsf BATAKAN, PANYIPATAN KABUPATEN TANAH LAUT KALIMANTAN SELATAN', 'Kontrak', 2147483647, '2018-02-22', 45, 0, '', 67219000, 806628000, -1108456800, 2147483647, 'Kekurangan Modal Usaha', 458000000, 'investasi', 'Ada', 'Baik', 5, 2, 0, '2018-02-21', 1000000, 2),
(3, '2018-02-15', 'KABUPATEN KARIMUN', 'irvan fahmi', 'dfsdfsf', 'Industri', '2018-02-20', '4533', 'jln paletahan MORO, MORO KABUPATEN KARIMUN KEPULAUAN RIAU MORO, MORO KABUPATEN KARIMUN KEPULAUAN RIAU', 'Milik Sendiri', 2147483647, '2018-02-20', 45, 45, 'Ada', 4779000, 57348000, -58117000, 2147483647, 'Kekurangan Modal Usaha', 458000000, 'investasi', 'Ada', 'Baik', 5, 2, 0, '2018-02-20', 1000000, 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `evaluasi`
--
ALTER TABLE `evaluasi`
  ADD PRIMARY KEY (`idevaluasi`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
