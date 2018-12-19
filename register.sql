-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 19, 2018 at 05:02 AM
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
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `nrp` char(14) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` char(32) NOT NULL,
  `role` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `username`, `nrp`, `email`, `password`, `role`) VALUES
(1, 'Rangga K', '05111740000120', 'ranggakusumad@gmail.com', 'e5b2a975d9b73165bcc8b5e63ce488ff', 'admin'),
(3, 'as', '0511175', 'asd@ss', 'f970e2767d0cfe75876ea857f92e319b', 'user'),
(4, 'assa', '1234567', 'asdasd@asd', '6c91ac4424af4cde0b243066010c74a0', 'user'),
(5, 'asda', 'asdasd', 'asdasda@asdas', '7815696ecbf1c96e6894b779456d330e', 'user'),
(6, 'asa', 'asas', 'asas@asdas', '7815696ecbf1c96e6894b779456d330e', 'user'),
(7, 'asdas', 'asda', 'asdas@asdwe', 'adbf5a778175ee757c34d0eba4e932bc', 'user'),
(8, 'Olo', 'ytu', 'tyu@sdfsf', '36f3af6226e0b5303e19b824e7442272', 'user'),
(9, 'yoga', '05111740000169', 'yoga@gmail.com', '807659cd883fc0a63f6ce615893b3558', 'admin'),
(10, 'safhira', '05111740000027', 'safhira@gmail.com', '671013584f385cac85afed86e0a6ad0e', 'admin'),
(11, 'User', '05111740000120', 'raka@raka.com', 'db26ee047a4c86fbd2fba73503feccb6', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
