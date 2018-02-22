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
-- Table structure for table `survei2`
--

CREATE TABLE `survei2` (
  `jb_modal` varchar(40) NOT NULL,
  `s_pembelian` int(30) NOT NULL,
  `asal_pembelian` varchar(40) NOT NULL,
  `k_stok_barang` int(30) NOT NULL,
  `t_stok_barang` varchar(50) NOT NULL,
  `k_stok_barang_r` int(30) NOT NULL,
  `t_stok_barang_r` varchar(50) NOT NULL,
  `k_penjualan_r` varchar(50) NOT NULL,
  `nilai_penjualan_r` int(30) NOT NULL,
  `p_laba_angsur` int(30) NOT NULL,
  `j_baku_bibit` varchar(50) NOT NULL,
  `s_baku` varchar(50) NOT NULL,
  `s_bibit` varchar(50) NOT NULL,
  `k_butuhan_baku` int(30) NOT NULL,
  `t_butuhan_baku` int(30) NOT NULL,
  `j_bahan_penolong` varchar(40) NOT NULL,
  `s_bahan_penolong` int(30) NOT NULL,
  `k_bahan_penolong` int(30) NOT NULL,
  `t_bahan_penolong` int(30) NOT NULL,
  `h_peroduksi` varchar(50) NOT NULL,
  `k_peroduksi_rata` varchar(50) NOT NULL,
  `k_penjualan_rata` int(30) NOT NULL,
  `n_penjualan_rata` int(30) NOT NULL,
  `k_angsur_rata` int(30) NOT NULL,
  `p_pinjaman_anggota` int(30) NOT NULL,
  `k_pemberi_pinjaman` int(30) NOT NULL,
  `bunga_anggota` int(30) NOT NULL,
  `n_bunga_anggota` int(30) NOT NULL,
  `jangka_waktu` varchar(50) NOT NULL,
  `k_yisih_laba` int(30) NOT NULL,
  `pelanggan_tetap` varchar(50) NOT NULL,
  `c_pembayaran` varchar(50) NOT NULL,
  `bn_bayar` varchar(50) NOT NULL,
  `c_pengiriman` varchar(50) NOT NULL,
  `w_pasaran` varchar(50) NOT NULL,
  `kemitraan_assosiasi1` varchar(50) NOT NULL,
  `kemitraan_assosiasi2` varchar(50) NOT NULL,
  `jml_pegawai` int(30) NOT NULL,
  `t_ahli` varchar(50) NOT NULL,
  `t_sedang` varchar(40) NOT NULL,
  `t_kurang` varchar(50) NOT NULL,
  `c_orang` varchar(50) NOT NULL,
  `jml_orang` varchar(50) NOT NULL,
  `upah_rendah` int(30) NOT NULL,
  `upah_tinggi` int(30) NOT NULL,
  `c_memperoleh` int(30) NOT NULL,
  `jml_pengurus` varchar(40) NOT NULL,
  `jml_anggota` varchar(40) NOT NULL,
  `manajemen_p` varchar(40) NOT NULL,
  `ke_produksi` varchar(40) NOT NULL,
  `pemasaran_produk` varchar(40) NOT NULL,
  `keuangan` varchar(40) NOT NULL,
  `pesaing` varchar(40) NOT NULL,
  `langkah_dilakukan` varchar(40) NOT NULL,
  `langkah_lainnya` varchar(40) NOT NULL,
  `idsurvei2` int(30) NOT NULL,
  `idsurvei1` int(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `survei2`
--

INSERT INTO `survei2` (`jb_modal`, `s_pembelian`, `asal_pembelian`, `k_stok_barang`, `t_stok_barang`, `k_stok_barang_r`, `t_stok_barang_r`, `k_penjualan_r`, `nilai_penjualan_r`, `p_laba_angsur`, `j_baku_bibit`, `s_baku`, `s_bibit`, `k_butuhan_baku`, `t_butuhan_baku`, `j_bahan_penolong`, `s_bahan_penolong`, `k_bahan_penolong`, `t_bahan_penolong`, `h_peroduksi`, `k_peroduksi_rata`, `k_penjualan_rata`, `n_penjualan_rata`, `k_angsur_rata`, `p_pinjaman_anggota`, `k_pemberi_pinjaman`, `bunga_anggota`, `n_bunga_anggota`, `jangka_waktu`, `k_yisih_laba`, `pelanggan_tetap`, `c_pembayaran`, `bn_bayar`, `c_pengiriman`, `w_pasaran`, `kemitraan_assosiasi1`, `kemitraan_assosiasi2`, `jml_pegawai`, `t_ahli`, `t_sedang`, `t_kurang`, `c_orang`, `jml_orang`, `upah_rendah`, `upah_tinggi`, `c_memperoleh`, `jml_pengurus`, `jml_anggota`, `manajemen_p`, `ke_produksi`, `pemasaran_produk`, `keuangan`, `pesaing`, `langkah_dilakukan`, `langkah_lainnya`, `idsurvei2`, `idsurvei1`) VALUES
('Beras', 0, 'kartika', 2, 'Kredit', 2, 'Kredit', '2000', 0, 505000, 'Tepung Terigu gula dll', 'Lokal', 'dari bandung', 100000000, 0, 'pewarna makanan', 0, 500000, 0, 'Aneka roti', '8000 pcs', 7000, 141000000, 5000000, 500000, 400000, 2, 5, '8', 69000000, 'Ada', 'Kredit', 'Minggu', 'diambil', 'Regional', '', '', 10, '3', '5', '2', 'dibawah 17 tahun', '15', 40000, 50000, 0, '45', '0', '', '', 'jakarta', 'Kekurangan Modal Usaha', 'ada', 'Menggunakan modal yang ada', '', 1, 1),
('Beras', 0, 'kartika', 0, 'Kredit', 3434343, 'Kredit', '2000', 0, 505000, 'Tepung Terigu gula dll', 'Lokal', 'dari bandung', 100000000, 0, 'pewarna makanan', 0, 500000, 0, 'Aneka roti', '8000 pcs', 7000, 141000000, 5000000, 500000, 400000, 34, 5, '8', 69000000, 'Ada', 'Kredit', 'Minggu', 'diambil', 'Regional', '', '', 10, '10', '5', '0', '17-25 tahun', '15', 40000, 50000, 0, '45', '0', 'sfsdfs', 'sdfsdf', 'ggg', 'Kekurangan Modal Usaha', 'ada', 'Menggunakan modal yang ada', '', 2, 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `survei2`
--
ALTER TABLE `survei2`
  ADD PRIMARY KEY (`idsurvei2`),
  ADD KEY `fk_survei_ll` (`idsurvei1`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `survei2`
--
ALTER TABLE `survei2`
  MODIFY `idsurvei2` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `survei2`
--
ALTER TABLE `survei2`
  ADD CONSTRAINT `fk_survei_ll` FOREIGN KEY (`idsurvei1`) REFERENCES `survei1` (`idsurvei1`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
