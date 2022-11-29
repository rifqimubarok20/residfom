-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 29 Nov 2022 pada 14.01
-- Versi server: 10.4.22-MariaDB
-- Versi PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_residfom`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_news`
--

CREATE TABLE `tb_news` (
  `id` int(11) NOT NULL,
  `title` varchar(126) NOT NULL,
  `slug` varchar(128) NOT NULL,
  `body` text NOT NULL,
  `created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_news`
--

INSERT INTO `tb_news` (`id`, `title`, `slug`, `body`, `created`) VALUES
(1, 'Berita 1 update', 'berita-1', 'gdagcdvasfcvvasghdfweyh bcsdtygfsevdgasfcd asb vfgwefdastgdjhaeufh', '2022-11-27 12:07:46'),
(3, 'Berita 2 update', 'Berita-2', 'tafdtfagdfyqjwgdtegdfasfyadtgtyfawdgjatduefdtweftydf', '2022-11-29 14:09:21'),
(7, 'Berita 3', 'Berita-3', 'cajhsdfthafhdgajhshdyjewdjhasfcasdmfgyadcgfsdvfsdydcasjhgcfasfsdftyff', '2022-11-29 17:59:10'),
(8, 'Berita 4', 'Berita-4', 'cagsdtfahtdjyagdteaudtgatysfdgfawtyedfty', '2022-11-29 17:59:52'),
(9, 'Berita 5', 'Berita-5', 'cgyuwetyjfgejaduiqwyrafgyufgyuweyfuwegfaygyufweguifgyegdfyuwetgftgwsef', '2022-11-29 18:41:42');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_news`
--
ALTER TABLE `tb_news`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_news`
--
ALTER TABLE `tb_news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
