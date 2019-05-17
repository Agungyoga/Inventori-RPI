-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 17 Bulan Mei 2019 pada 18.55
-- Versi server: 10.1.34-MariaDB
-- Versi PHP: 7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `inventori`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `barang`
--

CREATE TABLE `barang` (
  `id_barang` int(20) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `stok` int(100) NOT NULL,
  `kategori` varchar(100) NOT NULL,
  `foto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `barang`
--

INSERT INTO `barang` (`id_barang`, `nama`, `stok`, `kategori`, `foto`) VALUES
(4, 'Arduino Uno', 5, 'Hardware', 'arduino.jpg'),
(6, 'Arduino Mega', 10, 'Hardware', 'mega.jpg'),
(7, 'Arduino Nano', 2, 'Hardware', 'nano.jpg'),
(8, 'Remote Radiolink AT9', 2, 'Hardware', 'at9.jpg'),
(9, 'Remote Futaba', 1, 'Hardware', 'futaba.jpg'),
(10, 'Bor duduk', 1, 'Mekanik', 'bor duduk.jpg'),
(11, 'Sensor garis', 20, 'Hardware', 'garis.jpg'),
(12, 'Gerinda', 1, 'Mekanik', 'gerinda.jpg'),
(14, 'Ping Paralax', 5, 'Hardware', 'ping.png'),
(15, 'Receiver Futaba', 1, 'Hardware', 'receiver futaba.jpg'),
(16, 'Receiver Radiolink', 2, 'Hardware', 'receiver radiolink.jpg'),
(17, 'Relay 8 chanel', 3, 'Hardware', 'relay 6c.jpg'),
(18, 'Sensor Cahaya', 5, 'Hardware', 'sensor cahaya.jpg'),
(19, 'Sensor Flame', 5, 'Hardware', 'sensor flame.jpg'),
(20, 'Sensor Jarak', 10, 'Hardware', 'sensor jarak.jpg');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id_barang`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `barang`
--
ALTER TABLE `barang`
  MODIFY `id_barang` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
