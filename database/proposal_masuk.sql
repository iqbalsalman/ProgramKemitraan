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
-- Table structure for table `proposal_masuk`
--

CREATE TABLE `proposal_masuk` (
  `idproposal` int(17) NOT NULL,
  `resi_p` varchar(17) DEFAULT NULL,
  `idakun` int(30) NOT NULL,
  `tglmasuk` date DEFAULT NULL,
  `nik` int(25) DEFAULT NULL,
  `nama` varchar(225) NOT NULL,
  `tlhp` varchar(50) DEFAULT NULL,
  `nlpcmb` varchar(50) DEFAULT NULL,
  `alamatcmb` text,
  `nama_dinas` varchar(225) DEFAULT NULL,
  `tlphp` varchar(50) DEFAULT NULL,
  `almatdinas` text,
  `nosurat_pemohon` varchar(225) DEFAULT NULL,
  `perihal` varchar(225) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `proposal_masuk`
--

INSERT INTO `proposal_masuk` (`idproposal`, `resi_p`, `idakun`, `tglmasuk`, `nik`, `nama`, `tlhp`, `nlpcmb`, `alamatcmb`, `nama_dinas`, `tlphp`, `almatdinas`, `nosurat_pemohon`, `perihal`) VALUES
(1, '0001/PKBL/II/2018', 2, '2018-02-15', 2147483647, 'Muhamad iqbal', '085671876534', '0216765438', 'jln ahmat yani', 'Dinas Koperasi dan perdagangan  purwakarta', '0216754890', 'jogja', '021/Dinas/Bandung', 'Pengajuan Permohonan Pinjaman '),
(2, '0002/PKBL/II/2018', 2, '2018-02-21', 2147483647, 'Muhamad iqbal', '085671876534', '0216765438', 'jln ahmat yani', 'Dinas Koperasi dan perdagangan  purwakarta', '0216754890', 'powekerto', '021/Dinas/Bandung', 'Pengajuan Permohonan Pinjaman '),
(3, '0003/PKBL/II/2018', 2, '2018-02-21', 2147483647, 'irvan fahmi', '085671876535', '0216765438', 'jln ahmat yani', 'Dinas Koperasi dan perdagangan  karawang', '0216754891', 'powekerto', '021/Dinas/Jogja', 'Banduan Permodalan'),
(4, '0004/PKBL/II/2018', 2, '2018-02-16', 2147483647, 'iyan maulana', '085671876535', '0216765434', 'jln ahmat yani', 'Dinas Koperasi dan perdagangan  purwakarta', '1234567890', 'powekerto', '021/Dinas/Bandung', 'Pengajuan Permohonan Pinjaman ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `proposal_masuk`
--
ALTER TABLE `proposal_masuk`
  ADD PRIMARY KEY (`idproposal`),
  ADD KEY `fk_proposal_masuk` (`idakun`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `proposal_masuk`
--
ALTER TABLE `proposal_masuk`
  MODIFY `idproposal` int(17) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
