-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 01 Bulan Mei 2024 pada 04.13
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.1.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `belowater`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `namaPelanggan` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `noTelp` varchar(20) DEFAULT NULL,
  `tanggalPemesanan` date DEFAULT NULL,
  `mtdPembayaran` varchar(50) DEFAULT NULL,
  `voucherid` varchar(50) DEFAULT NULL,
  `paket` varchar(50) DEFAULT NULL,
  `destinasi` varchar(50) DEFAULT NULL,
  `totalPaket` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `orders`
--

INSERT INTO `orders` (`id`, `namaPelanggan`, `email`, `noTelp`, `tanggalPemesanan`, `mtdPembayaran`, `voucherid`, `paket`, `destinasi`, `totalPaket`) VALUES
(1, 'Shifa', 'shifahana06@gmail.com', '085158052278', '2024-05-02', 'transfer bank', 'UTBKHEALING', 'paket1', 'derawan', 0),
(2, 'Shifa', 'shifahana06@gmail.com', '085158052278', '2024-05-01', 'transfer bank', 'UTBKHEALING', 'paket1', 'derawan', 0),
(3, 'Shifa', 'shifahana06@gmail.com', '085158052278', '2024-05-01', 'transfer bank', 'UTBKHEALING', 'paket1', 'derawan', 0),
(4, 'Shifa', 'shifahana06@gmail.com', '085158052278', '2024-05-23', 'credit', '', 'paket1', 'wakatobi', 0);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
