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
-- Table structure for table `biodata`
--

CREATE TABLE `biodata` (
  `idresi` int(15) NOT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `upload_ktp` varchar(100) DEFAULT NULL,
  `ta_lahir` varchar(30) DEFAULT NULL,
  `tgl_l` date DEFAULT NULL,
  `jenis_kelamin` varchar(30) DEFAULT NULL,
  `status_kawin` varchar(40) DEFAULT NULL,
  `jml_anak` int(30) DEFAULT NULL,
  `pekerjaan` varchar(40) DEFAULT NULL,
  `nmkerja` varchar(30) DEFAULT NULL,
  `alamat_rumah` text,
  `klurah` varchar(40) DEFAULT NULL,
  `kcamatan` varchar(40) DEFAULT NULL,
  `ktkb` varchar(40) DEFAULT NULL,
  `provinsi` char(2) DEFAULT NULL,
  `kode_pos` int(20) DEFAULT NULL,
  `tlpr` int(30) DEFAULT NULL,
  `No_kk` int(30) DEFAULT NULL,
  `upload_kk` varchar(100) DEFAULT NULL,
  `bsd` date DEFAULT NULL,
  `status_tinggal` varchar(40) DEFAULT NULL,
  `pendidikan_f` varchar(40) DEFAULT NULL,
  `plt_k` varchar(40) DEFAULT NULL,
  `proposalk` varchar(80) DEFAULT NULL,
  `lembaga` varchar(30) DEFAULT NULL,
  `idproposal` int(17) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `biodata`
--

INSERT INTO `biodata` (`idresi`, `nama`, `upload_ktp`, `ta_lahir`, `tgl_l`, `jenis_kelamin`, `status_kawin`, `jml_anak`, `pekerjaan`, `nmkerja`, `alamat_rumah`, `klurah`, `kcamatan`, `ktkb`, `provinsi`, `kode_pos`, `tlpr`, `No_kk`, `upload_kk`, `bsd`, `status_tinggal`, `pendidikan_f`, `plt_k`, `proposalk`, `lembaga`, `idproposal`) VALUES
(1, 'Muhamad iqbal salman', 'yoman.jpg', 'karawang', '2018-02-20', 'Laki-laki', 'Kawin', 2, 'Swasta', 'pns', 'desa Dukuhkarya', '6502080002', '6502080', '6502', '65', 4545445, 546456, 2147483647, 'contoh1.JPG', '2018-02-21', 'Kontrak', 'SLTA', 'Seminar internasional', 'contoh.JPG', 'UKM terpadu', 1),
(2, 'Muhamad iqbal', 'contoh2.JPG', 'karawang', '2018-02-19', 'Laki-laki', 'Kawin', 34, 'Peg Negeri', 'pns', 'desa Dukuhkarya', '6310051006', '6310051', '6310', '63', 4545445, 546456, 6767676, 'contoh3.JPG', '2018-02-27', 'Kontrak', 'dfgdfgd', '', 'yoman1.jpg', 'UKM terpadu', 2),
(3, 'irvan fahmi', 'contoh4.JPG', 'karawang', '2018-02-27', 'Laki-laki', 'Kawin', 1, 'Swasta', 'pns', 'desa Dukuhkarya', '2101033001', '2101033', '2101', '21', 45334, 0, 6767676, 'contoh5.JPG', '2018-02-26', 'Kontrak', 'D3 Teknik komputer', '', 'yoman2.jpg', 'UKM terpadu', 3),
(4, 'iyan maulana', 'contoh6.JPG', 'karawang', '2018-02-28', 'Laki-laki', 'Kawin', 2, 'Swasta', 'Petani', 'desa Dukuhkarya', '3215150006', '3215150', '3215', '32', 34343, 214454646, 2147483647, 'yoman4.jpg', '2018-02-21', 'Milik Sendiri', 'D3 Teknik komputer', 'Seminar internasional', 'yoman3.jpg', 'Lolo', 4);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `biodata`
--
ALTER TABLE `biodata`
  ADD PRIMARY KEY (`idresi`),
  ADD KEY `fk_proposal_masuk` (`idproposal`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `biodata`
--
ALTER TABLE `biodata`
  MODIFY `idresi` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `biodata`
--
ALTER TABLE `biodata`
  ADD CONSTRAINT `fk_proposal_masuk` FOREIGN KEY (`idproposal`) REFERENCES `proposal_masuk` (`idproposal`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
