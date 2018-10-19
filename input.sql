-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 19 Okt 2018 pada 05.05
-- Versi server: 10.1.34-MariaDB
-- Versi PHP: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db7`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `input`
--

CREATE TABLE `input` (
  `NIM` varchar(20) NOT NULL,
  `Nama` varchar(20) NOT NULL,
  `Tangal Lahir` varchar(255) NOT NULL,
  `Jenis Kelamin` varchar(20) NOT NULL,
  `Program Studi` varchar(20) NOT NULL,
  `Fakultas` varchar(20) NOT NULL,
  `Asal` varchar(20) NOT NULL,
  `Moto Hidup` varchar(255) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `input`
--

INSERT INTO `input` (`NIM`, `Nama`, `Tangal Lahir`, `Jenis Kelamin`, `Program Studi`, `Fakultas`, `Asal`, `Moto Hidup`, `id`) VALUES
('6701145633', 'Yasa', '2019-02-17', 'Laki-Laki', 'D3 SISTEM INFORMASI', 'FIT', 'medan', 'fdhdfh', 0),
('6701174092', 'Sri Haryatini', '2017-06-19', 'Perempuan', 'TEKNIK TELEKOMUNIKAS', 'INFORMATIKA', 'bandung', 'Berjuang', 0);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `input`
--
ALTER TABLE `input`
  ADD PRIMARY KEY (`NIM`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
