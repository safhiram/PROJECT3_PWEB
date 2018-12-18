-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 18, 2018 at 07:55 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bookesma`
--

-- --------------------------------------------------------

--
-- Table structure for table `sumbang`
--

CREATE TABLE `sumbang` (
  `id_sumbang` int(11) NOT NULL,
  `nrp` char(14) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `no_hp` varchar(50) NOT NULL,
  `departemen` varchar(50) NOT NULL,
  `universitas` varchar(50) NOT NULL,
  `judul_bukusumbang` varchar(100) NOT NULL,
  `jumlah_halamansumbang` int(11) NOT NULL,
  `deskripsi_bukusumbang` varchar(250) NOT NULL,
  `status` int(11) NOT NULL,
  `semester` int(11) NOT NULL,
  `gambarsumbang` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sumbang`
--

INSERT INTO `sumbang` (`id_sumbang`, `nrp`, `nama`, `email`, `no_hp`, `departemen`, `universitas`, `judul_bukusumbang`, `jumlah_halamansumbang`, `deskripsi_bukusumbang`, `status`, `semester`, `gambarsumbang`) VALUES
(1, '05111740001200', 'rangga', 'rangga@gmail.com', '08996569365', 'Informatika', 'ITS', 'C++ Pro', 123, 'hehe', 0, 0, 'buku-sumbang/C++ Pro'),
(2, '05111740001200', 'rangga', 'rangga@gmail.com', '08996569365', 'Informatika', 'ITS', 'C++ Pro', 222, 'fefe', 0, 0, 'buku-sumbang/C++ Pro.jpg'),
(3, '05111740001205', 'rangga', 'rangga@gmail.com', '08996569365', 'Informatika', 'ITS', 'C++ Pro', 787, 'reres', 0, 0, 'buku-sumbang/C++ Pro.jpg'),
(4, '05111740001205', 'ade', 'rangga@gmail.com', '08996569365', 'Informatika', 'ITS', 'Advanced C++', 124, 'ini bagus', 0, 0, 'buku-sumbang/Advanced C++.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `sumbang`
--
ALTER TABLE `sumbang`
  ADD PRIMARY KEY (`id_sumbang`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `sumbang`
--
ALTER TABLE `sumbang`
  MODIFY `id_sumbang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
