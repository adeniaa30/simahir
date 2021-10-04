-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 04 Okt 2021 pada 05.17
-- Versi server: 10.4.17-MariaDB
-- Versi PHP: 7.4.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `simahir`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `paket_belajar`
--

CREATE TABLE `paket_belajar` (
  `id` int(11) NOT NULL,
  `jenis` varchar(50) NOT NULL,
  `harga` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `paket_belajar`
--

INSERT INTO `paket_belajar` (`id`, `jenis`, `harga`) VALUES
(1, '3x Latihan @ 50 menit', 180000),
(2, '5x Latihan @ 50 menit', 300000),
(3, '6x Latihan @ 50 menit', 360000),
(4, '8x Latihan @ 50 menit', 480000),
(5, '10x Latihan @ 50 menit', 600000),
(6, '12x Latihan @ 50 menit', 660000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pendaftaran`
--

CREATE TABLE `pendaftaran` (
  `username` varchar(50) NOT NULL,
  `id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `no_wa` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `paket` varchar(50) NOT NULL,
  `hari` varchar(50) NOT NULL,
  `jam` varchar(50) NOT NULL,
  `metode` varchar(50) NOT NULL,
  `catatan` varchar(100) NOT NULL,
  `catatan_admin` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pendaftaran`
--

INSERT INTO `pendaftaran` (`username`, `id`, `email`, `nama`, `no_wa`, `alamat`, `paket`, `hari`, `jam`, `metode`, `catatan`, `catatan_admin`) VALUES
('sasa', 8, 'sasaaa@gmail.com', 'yryryry', '37373737', 'dhhdhfdh', '3x Latihan @ 50 Menit', 'Minggu', '08.00', 'Offline', 'eiieei', 'BELUM LUNAS'),
('adien cantik', 9, 'adiencantik@gmail.com', 'adenia', '2358457457', 'surodinawan', '6x Latihan @ 50 Menit', 'Minggu', '10.00', 'Offline', 'tidak ada', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `registrasi`
--

CREATE TABLE `registrasi` (
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `registrasi`
--

INSERT INTO `registrasi` (`username`, `email`, `password`) VALUES
('adenia', 'adenia@gmail.com', '301101'),
('adien cantik', 'adiencantik@gmail.com', '1234'),
('admin', 'admin@gmail.com', 'admin'),
('owner', 'owner@gmail.com', '123'),
('sasa', 'sasa@gmail.com', 'sasa');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `username` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `paket_belajar`
--
ALTER TABLE `paket_belajar`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pendaftaran`
--
ALTER TABLE `pendaftaran`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `registrasi`
--
ALTER TABLE `registrasi`
  ADD PRIMARY KEY (`username`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `paket_belajar`
--
ALTER TABLE `paket_belajar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `pendaftaran`
--
ALTER TABLE `pendaftaran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
