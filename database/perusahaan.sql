-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 22, 2018 at 12:58 PM
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
-- Table structure for table `perusahaan`
--

CREATE TABLE `perusahaan` (
  `idperusahaan` int(30) NOT NULL,
  `nama_perusahaan` varchar(50) DEFAULT NULL,
  `tpemilik_koprasi` varchar(50) DEFAULT NULL,
  `p_binaan_pk` date DEFAULT NULL,
  `kd_binaan` int(10) DEFAULT NULL,
  `bidang_usaha` varchar(40) DEFAULT NULL,
  `jenis_usaha` varchar(40) DEFAULT NULL,
  `alamat_perusahaan` text,
  `kelurahan_perusahaan` varchar(30) DEFAULT NULL,
  `kecamatan_perusahaan` varchar(30) DEFAULT NULL,
  `kota_perusahaan` varchar(30) DEFAULT NULL,
  `provinsi_p` varchar(30) DEFAULT NULL,
  `kode_pos_p` int(20) DEFAULT NULL,
  `notlp_perusahaan` int(20) DEFAULT NULL,
  `upload_struk_organisasi` varchar(100) DEFAULT NULL,
  `stt_usaha` varchar(30) DEFAULT NULL,
  `thn_sttusaha` date DEFAULT NULL,
  `siup` varchar(30) DEFAULT NULL,
  `tdp` varchar(30) DEFAULT NULL,
  `ho` varchar(30) DEFAULT NULL,
  `situ` varchar(30) DEFAULT NULL,
  `sku` varchar(30) DEFAULT NULL,
  `npwp` int(20) DEFAULT NULL,
  `nmpgang_hak` varchar(40) DEFAULT NULL,
  `lokasi_tanah` varchar(40) DEFAULT NULL,
  `luas_tanah` varchar(40) DEFAULT NULL,
  `srs_tansi` varchar(100) DEFAULT NULL,
  `berdiri_tahun` date DEFAULT NULL,
  `jml_karyawan` int(20) DEFAULT NULL,
  `jml_teng_ahli` int(20) DEFAULT NULL,
  `jml_pengurus` int(11) DEFAULT NULL,
  `rekening_koran` varchar(40) DEFAULT NULL,
  `nama_bank_koran` varchar(50) DEFAULT NULL,
  `alamat_bank_koran` text,
  `nomer_buku_tabungan` varchar(40) DEFAULT NULL,
  `nama_bank` varchar(50) DEFAULT NULL,
  `alamat_tabungan` text,
  `bantuan_l` int(30) DEFAULT NULL,
  `idresi` int(15) DEFAULT NULL,
  `no_tanah` varchar(11) DEFAULT NULL,
  `bdn_hukum` varchar(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `perusahaan`
--

INSERT INTO `perusahaan` (`idperusahaan`, `nama_perusahaan`, `tpemilik_koprasi`, `p_binaan_pk`, `kd_binaan`, `bidang_usaha`, `jenis_usaha`, `alamat_perusahaan`, `kelurahan_perusahaan`, `kecamatan_perusahaan`, `kota_perusahaan`, `provinsi_p`, `kode_pos_p`, `notlp_perusahaan`, `upload_struk_organisasi`, `stt_usaha`, `thn_sttusaha`, `siup`, `tdp`, `ho`, `situ`, `sku`, `npwp`, `nmpgang_hak`, `lokasi_tanah`, `luas_tanah`, `srs_tansi`, `berdiri_tahun`, `jml_karyawan`, `jml_teng_ahli`, `jml_pengurus`, `rekening_koran`, `nama_bank_koran`, `alamat_bank_koran`, `nomer_buku_tabungan`, `nama_bank`, `alamat_tabungan`, `bantuan_l`, `idresi`, `no_tanah`, `bdn_hukum`) VALUES
(1, 'Kopda', 'Muhamad Iqbal S.AMD.KOM', '2018-02-08', 4533, 'Industri', 'Produksi Kue', 'jln paletahan', '2101011002', '2101011', '2101', '21', 9808, 2147483647, 'yoman.jpg', 'Milik Sendiri', '2018-02-20', '567', '890', '7890', '76768', '6767', 2147483647, 'iqbal salman', 'jabotabek', '1234x123', 'contoh.JPG', '2018-02-27', 45, 0, 0, '', '', '', '', '', '', 0, 1, '78786', '7676'),
(2, 'ladaku pisan', 'choerul', '2018-02-14', 4533, 'Koperasi', 'Produksi Kue', 'sdfsfsdfsf', '1903010014', '1903010', '1903', '19', 4543, 2147483647, 'contoh1.JPG', 'Kontrak', '2018-02-21', '567', '890', '7890', '76768', '6767', 2147483647, 'iqbal salman', 'jabotabek', '1234x123', 'contoh2.JPG', '2018-02-22', 45, 43, 0, '45353453456', 'dfgdgfdd', '', '', '', '', 0, 2, '78786', '7676'),
(3, 'irvan fahmi', 'dfsdfsf', '2018-02-20', 4533, 'Industri', 'Produksi Kue', 'jln paletahan MORO, MORO KABUPATEN KARIMUN KEPULAUAN RIAU', '3604251001', '3604251', '3604', '36', 9808, 2147483647, 'contoh3.JPG', 'Milik Sendiri', '2018-02-19', '567', '6565', '7890', '76768', '6767', 2147483647, 'iqbal salman', 'jabotabek', '1234x126', 'yoman1.jpg', '2018-02-20', 45, 43, 45, '45353453453', 'dfgdgfdd', '', '', '', '', 0, 3, '673943', '7676'),
(4, 'salman', 'iqbal salman', '2018-02-20', 4533, 'Industri', 'fdfsfddsfsdfsd', 'jln paletahan', '3215150007', '3215150', '3215', '32', 9808, 2147483647, 'yoman2.jpg', 'Milik Sendiri', '2018-02-28', '567', '890', '7890', '76768', '6767', 2147483647, 'iqbal salman', 'jabotabek', '1234x123', 'contoh4.JPG', '2018-02-21', 45, 43, 45, '45353453456', 'dfgdgfdd', 'gdfgdgd', '5464566', 'dfgdgdf', 'dfgdfgdfgd', 0, 4, '673943', '7676');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `perusahaan`
--
ALTER TABLE `perusahaan`
  ADD PRIMARY KEY (`idperusahaan`),
  ADD KEY `fk_biodata` (`idresi`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `perusahaan`
--
ALTER TABLE `perusahaan`
  MODIFY `idperusahaan` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `perusahaan`
--
ALTER TABLE `perusahaan`
  ADD CONSTRAINT `fk_biodata` FOREIGN KEY (`idresi`) REFERENCES `biodata` (`idresi`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
