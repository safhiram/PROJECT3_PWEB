-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 17 Des 2018 pada 10.25
-- Versi server: 10.1.35-MariaDB
-- Versi PHP: 7.2.9

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
-- Struktur dari tabel `book`
--

CREATE TABLE `book` (
  `id` int(11) NOT NULL,
  `judul_buku` varchar(100) NOT NULL,
  `jumlah_halaman` int(11) NOT NULL,
  `deskripsi_buku` varchar(250) NOT NULL,
  `tersedia` int(11) NOT NULL,
  `semester` int(11) NOT NULL,
  `gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `book`
--

INSERT INTO `book` (`id`, `judul_buku`, `jumlah_halaman`, `deskripsi_buku`, `tersedia`, `semester`, `gambar`) VALUES
(1, 'The C++ Programming Language (Fourth Edition)', 1000, 'The C++ Programming Language, Fourth Edition, delivers meticulous, richly explained, and integrated coverage of the entire language—its facilities, abstraction mechanisms, standard libraries, and key design techniques. Throughout, Stroustrup presents', 10, 1, 'p1.jpg'),
(2, 'C++ Primer Plus (Sixth Edition)', 1200, 'C++ Primer Plus is a carefully crafted, complete tutorial on one of the most significant and widely used programming languages today. An accessible and easy-to-use self-study guide, this book is appropriate for both serious students of programming as', 10, 1, 'p2.jpg'),
(3, 'Beginning C++ Through Game Programming (Third Edition))', 1200, 'When it comes to game programming, C++ is the name of the game. If you aspire to move from game player to game creator, it all starts with learning the fundamentals of C++ and game-programming basics.\r\n', 10, 1, 'p3.jpg'),
(4, 'The C++ Programming Language (Fourth Edition)', 1000, 'The C++ Programming Language, Fourth Edition, delivers meticulous, richly explained, and integrated coverage of the entire language—its facilities, abstraction mechanisms, standard libraries, and key design techniques. Throughout, Stroustrup presents', 10, 2, 'p1.jpg'),
(5, 'C++ Primer Plus (Sixth Edition)', 1200, 'C++ Primer Plus is a carefully crafted, complete tutorial on one of the most significant and widely used programming languages today. An accessible and easy-to-use self-study guide, this book is appropriate for both serious students of programming as', 10, 2, 'p2.jpg'),
(6, 'Beginning C++ Through Game Programming (Third Edition))', 1200, 'When it comes to game programming, C++ is the name of the game. If you aspire to move from game player to game creator, it all starts with learning the fundamentals of C++ and game-programming basics.\r\n', 10, 2, 'p3.jpg'),
(7, 'The C++ Programming Language (Fourth Edition)', 1000, 'The C++ Programming Language, Fourth Edition, delivers meticulous, richly explained, and integrated coverage of the entire language—its facilities, abstraction mechanisms, standard libraries, and key design techniques. Throughout, Stroustrup presents', 10, 3, 'p1.jpg'),
(8, 'C++ Primer Plus (Sixth Edition)', 1200, 'C++ Primer Plus is a carefully crafted, complete tutorial on one of the most significant and widely used programming languages today. An accessible and easy-to-use self-study guide, this book is appropriate for both serious students of programming as', 10, 3, 'p2.jpg'),
(9, 'Beginning C++ Through Game Programming (Third Edition))', 1200, 'When it comes to game programming, C++ is the name of the game. If you aspire to move from game player to game creator, it all starts with learning the fundamentals of C++ and game-programming basics.\r\n', 10, 3, 'p3.jpg'),
(10, 'The C++ Programming Language (Fourth Edition)', 1000, 'The C++ Programming Language, Fourth Edition, delivers meticulous, richly explained, and integrated coverage of the entire language—its facilities, abstraction mechanisms, standard libraries, and key design techniques. Throughout, Stroustrup presents', 10, 4, 'p1.jpg'),
(11, 'C++ Primer Plus (Sixth Edition)', 1200, 'C++ Primer Plus is a carefully crafted, complete tutorial on one of the most significant and widely used programming languages today. An accessible and easy-to-use self-study guide, this book is appropriate for both serious students of programming as', 10, 4, 'p2.jpg'),
(12, 'Beginning C++ Through Game Programming (Third Edition))', 1200, 'When it comes to game programming, C++ is the name of the game. If you aspire to move from game player to game creator, it all starts with learning the fundamentals of C++ and game-programming basics.\r\n', 10, 4, 'p3.jpg'),
(13, 'The C++ Programming Language (Fourth Edition)', 1000, 'The C++ Programming Language, Fourth Edition, delivers meticulous, richly explained, and integrated coverage of the entire language—its facilities, abstraction mechanisms, standard libraries, and key design techniques. Throughout, Stroustrup presents', 10, 5, 'p1.jpg'),
(14, 'C++ Primer Plus (Sixth Edition)', 1200, 'C++ Primer Plus is a carefully crafted, complete tutorial on one of the most significant and widely used programming languages today. An accessible and easy-to-use self-study guide, this book is appropriate for both serious students of programming as', 10, 5, 'p2.jpg'),
(15, 'Beginning C++ Through Game Programming (Third Edition))', 1200, 'When it comes to game programming, C++ is the name of the game. If you aspire to move from game player to game creator, it all starts with learning the fundamentals of C++ and game-programming basics.\r\n', 10, 5, 'p3.jpg'),
(16, 'The C++ Programming Language (Fourth Edition)', 1000, 'The C++ Programming Language, Fourth Edition, delivers meticulous, richly explained, and integrated coverage of the entire language—its facilities, abstraction mechanisms, standard libraries, and key design techniques. Throughout, Stroustrup presents', 10, 6, 'p1.jpg'),
(17, 'C++ Primer Plus (Sixth Edition)', 1200, 'C++ Primer Plus is a carefully crafted, complete tutorial on one of the most significant and widely used programming languages today. An accessible and easy-to-use self-study guide, this book is appropriate for both serious students of programming as', 10, 6, 'p2.jpg'),
(18, 'Beginning C++ Through Game Programming (Third Edition))', 1200, 'When it comes to game programming, C++ is the name of the game. If you aspire to move from game player to game creator, it all starts with learning the fundamentals of C++ and game-programming basics.\r\n', 10, 6, 'p3.jpg'),
(19, 'The C++ Programming Language (Fourth Edition)', 1000, 'The C++ Programming Language, Fourth Edition, delivers meticulous, richly explained, and integrated coverage of the entire language—its facilities, abstraction mechanisms, standard libraries, and key design techniques. Throughout, Stroustrup presents', 10, 7, 'p1.jpg'),
(20, 'C++ Primer Plus (Sixth Edition)', 1200, 'C++ Primer Plus is a carefully crafted, complete tutorial on one of the most significant and widely used programming languages today. An accessible and easy-to-use self-study guide, this book is appropriate for both serious students of programming as', 10, 7, 'p2.jpg'),
(21, 'Beginning C++ Through Game Programming (Third Edition))', 1200, 'When it comes to game programming, C++ is the name of the game. If you aspire to move from game player to game creator, it all starts with learning the fundamentals of C++ and game-programming basics.\r\n', 10, 7, 'p3.jpg'),
(22, 'The C++ Programming Language (Fourth Edition)', 1000, 'The C++ Programming Language, Fourth Edition, delivers meticulous, richly explained, and integrated coverage of the entire language—its facilities, abstraction mechanisms, standard libraries, and key design techniques. Throughout, Stroustrup presents', 10, 8, 'p1.jpg'),
(23, 'C++ Primer Plus (Sixth Edition)', 1200, 'C++ Primer Plus is a carefully crafted, complete tutorial on one of the most significant and widely used programming languages today. An accessible and easy-to-use self-study guide, this book is appropriate for both serious students of programming as', 10, 8, 'p2.jpg'),
(24, 'Beginning C++ Through Game Programming (Third Edition))', 1200, 'When it comes to game programming, C++ is the name of the game. If you aspire to move from game player to game creator, it all starts with learning the fundamentals of C++ and game-programming basics.\r\n', 10, 8, 'p3.jpg');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `book`
--
ALTER TABLE `book`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
