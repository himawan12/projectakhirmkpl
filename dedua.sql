-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 14 Nov 2019 pada 18.42
-- Versi server: 10.1.30-MariaDB
-- Versi PHP: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dedua`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `absensi`
--

CREATE TABLE `absensi` (
  `id_absensi` varchar(64) NOT NULL,
  `tanggal` varchar(255) NOT NULL,
  `tidak_hadir` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `absensi`
--

INSERT INTO `absensi` (`id_absensi`, `tanggal`, `tidak_hadir`) VALUES
('5dcd912a2d407', '1 Januari 2020', 'Bambang, Uvuvwevwevwe onyetenyevwe ugwemubwem osas'),
('5dcd91c2bf0ef', '17 Januari 2018', '-'),
('5dcd91ed91a1f', '12 Desember 2019', 'Ethan, Bradberry');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jasa`
--

CREATE TABLE `jasa` (
  `id_jasa` varchar(64) NOT NULL,
  `nama_jasa` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL DEFAULT 'default.jpg',
  `harga_jasa` int(11) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `jasa`
--

INSERT INTO `jasa` (`id_jasa`, `nama_jasa`, `image`, `harga_jasa`, `keterangan`) VALUES
('5d15d787e9a8d', 'Carwash Express', '5d15d787e9a8d.jpg', 30000, 'Size S'),
('5d39b62f9b188', 'Carwash Express', '5d39b62f9b188.jpg', 40000, 'Size L'),
('5d39b672b7c71', 'Carwash Express', '5d39b672b7c71.jpg', 35000, 'Size M');

-- --------------------------------------------------------

--
-- Struktur dari tabel `produk`
--

CREATE TABLE `produk` (
  `id_produk` varchar(64) NOT NULL,
  `nama_produk` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL DEFAULT 'default.jpg',
  `kategori` varchar(255) NOT NULL,
  `harga_produk` int(11) NOT NULL,
  `keterangan` text NOT NULL,
  `post_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `produk`
--

INSERT INTO `produk` (`id_produk`, `nama_produk`, `image`, `kategori`, `harga_produk`, `keterangan`, `post_date`) VALUES
('5d11e25341278', 'Liqui moly', '5d11e25341278.jpg', 'Oli', 550000, 'Tipe 10W-40', '2019-07-07 16:36:01'),
('5dcd91935c0d4', 'Soul Stone', 'default.jpg', '?', 0, 'Soul for soul', '2019-11-14 17:40:35');

-- --------------------------------------------------------

--
-- Struktur dari tabel `recordjasa`
--

CREATE TABLE `recordjasa` (
  `id_recordjasa` varchar(64) NOT NULL,
  `nama_jasa` varchar(255) NOT NULL,
  `harga_jasa` int(11) NOT NULL,
  `nama_konsumen` varchar(255) NOT NULL,
  `dikerjakan_oleh` varchar(255) NOT NULL,
  `tanggal` varchar(255) NOT NULL,
  `jam` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `recordjasa`
--

INSERT INTO `recordjasa` (`id_recordjasa`, `nama_jasa`, `harga_jasa`, `nama_konsumen`, `dikerjakan_oleh`, `tanggal`, `jam`) VALUES
('5dcac6c757d18', 'Ganti oli', 20000, 'Aris Setiawan', 'Salim', '12 November 2019', '13:24 - 14:15'),
('5dcac8e44d4c4', 'We live in a society', 35000, 'Arthur', 'Fleck', '23 Maret 1981', '00:00 - 05:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`username`, `password`) VALUES
('admin', 'admin123'),
('himawan', 'lupa');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `absensi`
--
ALTER TABLE `absensi`
  ADD PRIMARY KEY (`id_absensi`);

--
-- Indeks untuk tabel `jasa`
--
ALTER TABLE `jasa`
  ADD PRIMARY KEY (`id_jasa`);

--
-- Indeks untuk tabel `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`);

--
-- Indeks untuk tabel `recordjasa`
--
ALTER TABLE `recordjasa`
  ADD PRIMARY KEY (`id_recordjasa`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
