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
-- Table structure for table `login2`
--

CREATE TABLE `login2` (
  `idakun` int(30) NOT NULL,
  `username` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL,
  `jenis_akses` varchar(40) NOT NULL,
  `email` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login2`
--

INSERT INTO `login2` (`idakun`, `username`, `password`, `jenis_akses`, `email`) VALUES
(1, 'gunawan', 'f0f53215c4bdd1ad4af61b922fd8470b', 'administrator', 'gunawan@peruri.co.id'),
(2, 'andini', 'f0f53215c4bdd1ad4af61b922fd8470b', 'sekertariat', 'andini@peruri.co.id'),
(6, 'bowo', 'f0f53215c4bdd1ad4af61b922fd8470b', 'evaluator', 'bowoinfo@peruri.co.id'),
(7, 'iqbal', 'f0f53215c4bdd1ad4af61b922fd8470b', 'kepala_pkbl', 'iqbal@peruri.co.id'),
(8, 'andy', 'f0f53215c4bdd1ad4af61b922fd8470b', 'surveyor', 'andini@peruri.co.id');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login2`
--
ALTER TABLE `login2`
  ADD PRIMARY KEY (`idakun`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `login2`
--
ALTER TABLE `login2`
  MODIFY `idakun` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
