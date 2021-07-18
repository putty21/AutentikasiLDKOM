-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 18 Jul 2021 pada 10.49
-- Versi server: 10.4.18-MariaDB
-- Versi PHP: 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crud`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `nama` varchar(50) NOT NULL,
  `nim` varchar(10) NOT NULL,
  `ttl` date NOT NULL,
  `jk` varchar(10) NOT NULL,
  `asal` varchar(20) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `image` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `mahasiswa`
--

INSERT INTO `mahasiswa` (`nama`, `nim`, `ttl`, `jk`, `asal`, `alamat`, `image`) VALUES
('Hanifa ', '1011', '2021-07-25', '1', 'Pariaman', 'Jl Jalan', '12.png'),
('Annisa Suptima', '1015', '2021-07-31', '', 'Solok', 'Jl Buah Batu', 'circle-cropped_(1).p'),
('Dhinda Amalia K', '1002', '2021-08-03', '1', 'Bukittingi', 'Jl in aja dulu', 'dhinda.jpg'),
('Budi', '1111', '2021-07-16', '', 'Badnung', 'Jl Buah Batu', 'circle-cropped_(2).p'),
('farhan naufal otra', '2026', '2000-02-05', '2', 'padang', 'apdang', '1.png'),
('puty syalima', '1811522014', '2021-11-21', '1', 'padang', 'padang', '4.jpg'),
('Putri', '1811522012', '2000-11-21', '1', 'Padang', 'Padang', '653220-6374787840129');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `level` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `level`) VALUES
(1, 'admin', '$2y$10$CbZBFs0QmichYRyK1zzfjuFqvocZ9oOEGYx/eAlVHh0qZ4ChTEgVS', 'admin'),
(2, 'user', '$2y$10$XKYy78WkG.r.XLUSug6JK.tIVfqtBVssCaguTOkW77bhDxPC2yLOa', 'user');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
