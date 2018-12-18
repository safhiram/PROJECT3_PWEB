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
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `id_buku` int(11) NOT NULL,
  `judul_buku` varchar(100) NOT NULL,
  `jumlah_halaman` int(11) NOT NULL,
  `deskripsi_buku` varchar(250) NOT NULL,
  `tersedia` int(11) NOT NULL,
  `semester` int(11) NOT NULL,
  `gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`id_buku`, `judul_buku`, `jumlah_halaman`, `deskripsi_buku`, `tersedia`, `semester`, `gambar`) VALUES
(1, 'The C++ Programming Language (Fourth Edition)#1', 1000, 'The C++ Programming Language, Fourth Edition, delivers meticulous, richly explained, and integrated coverage of the entire language—its facilities, abstraction mechanisms, standard libraries, and key design techniques. Throughout, Stroustrup presents', 10, 1, 'buku/p1.jpg'),
(2, 'C++ Primer Plus (Sixth Edition)#1', 1200, 'C++ Primer Plus is a carefully crafted, complete tutorial on one of the most significant and widely used programming languages today. An accessible and easy-to-use self-study guide, this book is appropriate for both serious students of programming as', 10, 1, 'buku/p2.jpg'),
(3, 'Beginning C++ Through Game Programming (Third Edition))#1', 1200, 'When it comes to game programming, C++ is the name of the game. If you aspire to move from game player to game creator, it all starts with learning the fundamentals of C++ and game-programming basics.\r\n', 10, 1, 'buku/p3.jpg'),
(4, 'The C++ Programming Language (Fourth Edition)#2', 1000, 'The C++ Programming Language, Fourth Edition, delivers meticulous, richly explained, and integrated coverage of the entire language—its facilities, abstraction mechanisms, standard libraries, and key design techniques. Throughout, Stroustrup presents', 10, 2, 'buku/p4.jpg'),
(5, 'C++ Primer Plus (Sixth Edition)#2', 1200, 'C++ Primer Plus is a carefully crafted, complete tutorial on one of the most significant and widely used programming languages today. An accessible and easy-to-use self-study guide, this book is appropriate for both serious students of programming as', 10, 2, 'buku/p5.jpg'),
(6, 'Beginning C++ Through Game Programming (Third Edition))#2', 1200, 'When it comes to game programming, C++ is the name of the game. If you aspire to move from game player to game creator, it all starts with learning the fundamentals of C++ and game-programming basics.\r\n', 10, 2, 'buku/p6.jpg'),
(7, 'The C++ Programming Language (Fourth Edition)#3', 1000, 'The C++ Programming Language, Fourth Edition, delivers meticulous, richly explained, and integrated coverage of the entire language—its facilities, abstraction mechanisms, standard libraries, and key design techniques. Throughout, Stroustrup presents', 10, 3, 'buku/q1.jpg'),
(8, 'C++ Primer Plus (Sixth Edition)#3', 1200, 'C++ Primer Plus is a carefully crafted, complete tutorial on one of the most significant and widely used programming languages today. An accessible and easy-to-use self-study guide, this book is appropriate for both serious students of programming as', 10, 3, 'buku/q2.jpg'),
(9, 'Beginning C++ Through Game Programming (Third Edition))#3', 1200, 'When it comes to game programming, C++ is the name of the game. If you aspire to move from game player to game creator, it all starts with learning the fundamentals of C++ and game-programming basics.\r\n', 10, 3, 'buku/q3.jpg'),
(10, 'The C++ Programming Language (Fourth Edition)#4', 1000, 'The C++ Programming Language, Fourth Edition, delivers meticulous, richly explained, and integrated coverage of the entire language—its facilities, abstraction mechanisms, standard libraries, and key design techniques. Throughout, Stroustrup presents', 10, 4, 'buku/q4.jpg'),
(11, 'C++ Primer Plus (Sixth Edition)#4', 1200, 'C++ Primer Plus is a carefully crafted, complete tutorial on one of the most significant and widely used programming languages today. An accessible and easy-to-use self-study guide, this book is appropriate for both serious students of programming as', 10, 4, 'buku/q5.jpg'),
(12, 'Beginning C++ Through Game Programming (Third Edition))#4', 1200, 'When it comes to game programming, C++ is the name of the game. If you aspire to move from game player to game creator, it all starts with learning the fundamentals of C++ and game-programming basics.\r\n', 10, 4, 'buku/q6.jpg'),
(13, 'The C++ Programming Language (Fourth Edition)#5', 1000, 'The C++ Programming Language, Fourth Edition, delivers meticulous, richly explained, and integrated coverage of the entire language—its facilities, abstraction mechanisms, standard libraries, and key design techniques. Throughout, Stroustrup presents', 10, 5, 'buku/r1.jpg'),
(14, 'C++ Primer Plus (Sixth Edition)#5', 1200, 'C++ Primer Plus is a carefully crafted, complete tutorial on one of the most significant and widely used programming languages today. An accessible and easy-to-use self-study guide, this book is appropriate for both serious students of programming as', 10, 5, 'buku/r2.jpg'),
(15, 'Beginning C++ Through Game Programming (Third Edition))#5', 1200, 'When it comes to game programming, C++ is the name of the game. If you aspire to move from game player to game creator, it all starts with learning the fundamentals of C++ and game-programming basics.\r\n', 10, 5, 'buku/r3.jpg'),
(16, 'The C++ Programming Language (Fourth Edition)#6', 1000, 'The C++ Programming Language, Fourth Edition, delivers meticulous, richly explained, and integrated coverage of the entire language—its facilities, abstraction mechanisms, standard libraries, and key design techniques. Throughout, Stroustrup presents', 10, 6, 'buku/r4.jpg'),
(17, 'C++ Primer Plus (Sixth Edition)#6', 1200, 'C++ Primer Plus is a carefully crafted, complete tutorial on one of the most significant and widely used programming languages today. An accessible and easy-to-use self-study guide, this book is appropriate for both serious students of programming as', 10, 6, 'buku/r5.jpg'),
(18, 'Beginning C++ Through Game Programming (Third Edition))#6', 1200, 'When it comes to game programming, C++ is the name of the game. If you aspire to move from game player to game creator, it all starts with learning the fundamentals of C++ and game-programming basics.\r\n', 10, 6, 'buku/r6.jpg'),
(19, 'The C++ Programming Language (Fourth Edition)#7', 1000, 'The C++ Programming Language, Fourth Edition, delivers meticulous, richly explained, and integrated coverage of the entire language—its facilities, abstraction mechanisms, standard libraries, and key design techniques. Throughout, Stroustrup presents', 10, 7, 'buku/s1.jpg'),
(20, 'C++ Primer Plus (Sixth Edition)#7', 1200, 'C++ Primer Plus is a carefully crafted, complete tutorial on one of the most significant and widely used programming languages today. An accessible and easy-to-use self-study guide, this book is appropriate for both serious students of programming as', 10, 7, 'buku/s2.jpg'),
(21, 'Beginning C++ Through Game Programming (Third Edition))#7', 1200, 'When it comes to game programming, C++ is the name of the game. If you aspire to move from game player to game creator, it all starts with learning the fundamentals of C++ and game-programming basics.\r\n', 10, 7, 'buku/s3.jpg'),
(22, 'The C++ Programming Language (Fourth Edition)#8', 1000, 'The C++ Programming Language, Fourth Edition, delivers meticulous, richly explained, and integrated coverage of the entire language—its facilities, abstraction mechanisms, standard libraries, and key design techniques. Throughout, Stroustrup presents', 10, 8, 'buku/s4.jpg'),
(23, 'C++ Primer Plus (Sixth Edition)#8', 1200, 'C++ Primer Plus is a carefully crafted, complete tutorial on one of the most significant and widely used programming languages today. An accessible and easy-to-use self-study guide, this book is appropriate for both serious students of programming as', 10, 8, 'buku/s5.jpg'),
(24, 'Beginning C++ Through Game Programming (Third Edition))#8', 1200, 'When it comes to game programming, C++ is the name of the game. If you aspire to move from game player to game creator, it all starts with learning the fundamentals of C++ and game-programming basics.\r\n', 10, 8, 'buku/s6.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`id_buku`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `book`
--
ALTER TABLE `book`
  MODIFY `id_buku` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
