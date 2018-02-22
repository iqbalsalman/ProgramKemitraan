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
-- Table structure for table `kegiatan_usaha`
--

CREATE TABLE `kegiatan_usaha` (
  `jenis_produksi` varchar(30) DEFAULT NULL,
  `kapasitas` varchar(30) DEFAULT NULL,
  `bahan_baku_produksi` varchar(40) DEFAULT NULL,
  `alat_produksi` varchar(40) DEFAULT NULL,
  `pengunaan_teknologi` varchar(40) DEFAULT NULL,
  `desaint` varchar(30) DEFAULT NULL,
  `kualitas` varchar(40) DEFAULT NULL,
  `bahan_baku_penolong` varchar(40) DEFAULT NULL,
  `kebutuhan_bahan_baku` int(30) DEFAULT NULL,
  `omset` int(30) DEFAULT NULL,
  `usaha_non_produksi` int(30) DEFAULT NULL,
  `omset_non_produksi` int(30) DEFAULT NULL,
  `ttl_nomproduksi` int(40) DEFAULT NULL,
  `jml_tenaga_kerja` varchar(30) DEFAULT NULL,
  `pendidikan` varchar(40) DEFAULT NULL,
  `jml_tng_ahli` varchar(40) DEFAULT NULL,
  `kursus` varchar(40) DEFAULT NULL,
  `jama_kerja` varchar(40) DEFAULT NULL,
  `upah_rata` int(40) DEFAULT NULL,
  `upah_lembur` int(30) DEFAULT NULL,
  `terdaftar_jamsostek` varchar(40) DEFAULT NULL,
  `konsumen` varchar(30) DEFAULT NULL,
  `lokal_s` varchar(30) DEFAULT NULL,
  `regions` varchar(30) DEFAULT NULL,
  `nasional_p` varchar(30) DEFAULT NULL,
  `ekspor_i` varchar(40) DEFAULT NULL,
  `distribusi` varchar(40) DEFAULT NULL,
  `sistem_pembayaran` varchar(40) DEFAULT NULL,
  `tahun_usaha1` date DEFAULT NULL,
  `tahun_usaha2` date DEFAULT NULL,
  `tenaga_kerja1` varchar(30) DEFAULT NULL,
  `tenaga_kerja2` varchar(30) DEFAULT NULL,
  `produksi1` int(30) DEFAULT NULL,
  `produksi2` int(30) DEFAULT NULL,
  `omset_rata1` int(30) DEFAULT NULL,
  `omset_rata2` int(30) DEFAULT NULL,
  `tabungan1` int(30) DEFAULT NULL,
  `tabungan2` int(30) DEFAULT NULL,
  `m_manajemen` varchar(40) DEFAULT NULL,
  `m_produksi` varchar(40) DEFAULT NULL,
  `pemasaran_produk` varchar(40) DEFAULT NULL,
  `penjuplan` varchar(40) DEFAULT NULL,
  `keuangan` varchar(40) DEFAULT NULL,
  `m_lain` varchar(40) DEFAULT NULL,
  `jml_bantuan_pinajaman` int(40) DEFAULT NULL,
  `modal_kerja` int(40) DEFAULT NULL,
  `investasi` int(30) DEFAULT NULL,
  `dana_tersedia` int(40) DEFAULT NULL,
  `prospek_dana` varchar(40) DEFAULT NULL,
  `kasanggupan_angsuran` int(30) DEFAULT NULL,
  `idpendapatan` int(20) DEFAULT NULL,
  `smb_bahan_baku` varchar(30) DEFAULT NULL,
  `idkegitanusaha` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kegiatan_usaha`
--

INSERT INTO `kegiatan_usaha` (`jenis_produksi`, `kapasitas`, `bahan_baku_produksi`, `alat_produksi`, `pengunaan_teknologi`, `desaint`, `kualitas`, `bahan_baku_penolong`, `kebutuhan_bahan_baku`, `omset`, `usaha_non_produksi`, `omset_non_produksi`, `ttl_nomproduksi`, `jml_tenaga_kerja`, `pendidikan`, `jml_tng_ahli`, `kursus`, `jama_kerja`, `upah_rata`, `upah_lembur`, `terdaftar_jamsostek`, `konsumen`, `lokal_s`, `regions`, `nasional_p`, `ekspor_i`, `distribusi`, `sistem_pembayaran`, `tahun_usaha1`, `tahun_usaha2`, `tenaga_kerja1`, `tenaga_kerja2`, `produksi1`, `produksi2`, `omset_rata1`, `omset_rata2`, `tabungan1`, `tabungan2`, `m_manajemen`, `m_produksi`, `pemasaran_produk`, `penjuplan`, `keuangan`, `m_lain`, `jml_bantuan_pinajaman`, `modal_kerja`, `investasi`, `dana_tersedia`, `prospek_dana`, `kasanggupan_angsuran`, `idpendapatan`, `smb_bahan_baku`, `idkegitanusaha`) VALUES
('Roti dan kue', '2 Ton / bln', 'Tepung Terigu,Telor,Gula dll', 'Mixer, Oven, Loyang, dll', 'otomatis', 'pasar', 'nasional', 'mudah', 0, 0, 0, 0, 0, '', 'SLTA', '', '', '', 0, 0, 'Sudah', 'anggota', '', '', '', '', 'Langsung', 'Tunai', '2018-02-14', '2018-02-20', '', '', 0, 0, 0, 0, 0, 0, '', '', '', '', '', '', 458000000, 8000000, 78000000, 0, '', 0, 1, 'lokal', 1),
('Roti dan kue', '2 Ton / bln', 'Tepung Terigu,Telor,Gula dll', 'Mixer, Oven, Loyang, dll', 'otomatis', 'pasar', 'nasional', 'mudah', 0, 0, 0, 0, 0, '', 'Sarjana', '', '', '', 0, 0, 'Sudah', 'anggota', '', '', '', '', 'Distribusi', 'Sistim Pembayaran', '0000-00-00', '0000-00-00', '', '', 0, 0, 0, 0, 0, 0, '', '', '', '', '', '', 458000000, 8000000, 78000000, 80000000, '', 0, 2, 'import', 2),
('Roti dan kue', '2 Ton / bln', 'Tepung Terigu,Telor,Gula dll', '', 'otomatis', 'selera sendiri', 'lokal', 'mudah', 0, 0, 0, 0, 0, '', 'Pendidikan Terakhir', '', '', '', 0, 0, 'Belum', 'anggota', '', '', '', '', 'Distribusi', 'Sistim Pembayaran', '0000-00-00', '0000-00-00', '', '', 0, 0, 0, 0, 0, 0, '', '', '', '', '', '', 458000000, 8000000, 78000000, 80000000, '', 0, 3, 'lokal', 3),
('Roti dan kue', '2 Ton / bln', 'Tepung Terigu,Telor,Gula dll', 'Mixer, Oven, Loyang, dll', 'otomatis', 'selera sendiri', 'nasional', 'mudah', 0, 0, 0, 0, 0, '', 'SLTP', '', '', '', 0, 0, 'Sudah', 'umum', '', '', '', '', 'Langsung', 'Kredit', '2018-02-14', '2018-02-22', '', '', 0, 0, 0, 0, 0, 0, '', '', '', '', '', '', 0, 0, 0, 0, '', 0, 4, 'lokal', 4);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kegiatan_usaha`
--
ALTER TABLE `kegiatan_usaha`
  ADD PRIMARY KEY (`idkegitanusaha`),
  ADD KEY `fk_usaha` (`idpendapatan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kegiatan_usaha`
--
ALTER TABLE `kegiatan_usaha`
  MODIFY `idkegitanusaha` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `kegiatan_usaha`
--
ALTER TABLE `kegiatan_usaha`
  ADD CONSTRAINT `fk_usaha` FOREIGN KEY (`idpendapatan`) REFERENCES `pendapatan` (`idpendapatan`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
