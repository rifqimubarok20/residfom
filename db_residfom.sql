-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 08, 2022 at 03:29 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

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
-- Table structure for table `fasilitas`
--

CREATE TABLE `fasilitas` (
  `id` int(11) NOT NULL,
  `nama_peminjam` varchar(35) NOT NULL,
  `nama_fasilitas` varchar(35) NOT NULL,
  `jumlah` int(4) NOT NULL,
  `tgl_pinjam` date NOT NULL,
  `tgl_kembali` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fasilitas`
--

INSERT INTO `fasilitas` (`id`, `nama_peminjam`, `nama_fasilitas`, `jumlah`, `tgl_pinjam`, `tgl_kembali`) VALUES
(15, 'hgf', 'kursiss', 15, '2022-12-25', '2022-12-22');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_koordinatrumah`
--

CREATE TABLE `tbl_koordinatrumah` (
  `id_koordinatrumah` int(11) NOT NULL,
  `rumah_id` int(11) DEFAULT NULL,
  `latitude` varchar(24) CHARACTER SET latin1 DEFAULT NULL,
  `longitude` varchar(24) CHARACTER SET latin1 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_koordinatrumah`
--

INSERT INTO `tbl_koordinatrumah` (`id_koordinatrumah`, `rumah_id`, `latitude`, `longitude`) VALUES
(1, 10, '-6.805269942752937', '110.86828172250534'),
(2, 11, '-6.798451816110629', '110.87042748971726'),
(3, 10, '-6.797083410951623', '110.85572555873382');

-- --------------------------------------------------------

--
-- Table structure for table `tb_news`
--

CREATE TABLE `tb_news` (
  `id` int(11) NOT NULL,
  `title` varchar(126) NOT NULL,
  `slug` varchar(128) NOT NULL,
  `body` text NOT NULL,
  `created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_news`
--

INSERT INTO `tb_news` (`id`, `title`, `slug`, `body`, `created`) VALUES
(1, 'Berita 1 update', 'berita-1', 'gdagcdvasfcvvasghdfweyh bcsdtygfsevdgasfcd asb vfgwefdastgdjhaeufh', '2022-11-27 12:07:46'),
(3, 'Berita 2 update', 'Berita-2', 'tafdtfagdfyqjwgdtegdfasfyadtgtyfawdgjatduefdtweftydf', '2022-11-29 14:09:21'),
(7, 'Berita 3', 'Berita-3', 'cajhsdfthafhdgajhshdyjewdjhasfcasdmfgyadcgfsdvfsdydcasjhgcfasfsdftyff', '2022-11-29 17:59:10'),
(8, 'Berita 4', 'Berita-4', 'cagsdtfahtdjyagdteaudtgatysfdgfawtyedfty', '2022-11-29 17:59:52'),
(9, 'Berita 5', 'Berita-5', 'cgyuwetyjfgejaduiqwyrafgyufgyuweyfuwegfaygyufweguifgyegdfyuwetgftgwsef', '2022-11-29 18:41:42');

-- --------------------------------------------------------

--
-- Table structure for table `warga`
--

CREATE TABLE `warga` (
  `id` int(11) NOT NULL,
  `nama` varchar(35) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `jk` char(1) NOT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `warga`
--

INSERT INTO `warga` (`id`, `nama`, `tgl_lahir`, `jk`, `alamat`) VALUES
(8, 'Elektro', '2022-11-11', 'L', 'asd'),
(9, 'hari ini', '2022-11-14', 'L', 'asd'),
(10, 'coba', '2022-12-16', 'L', 'adge'),
(11, 'mencoba', '2022-12-23', 'P', 'ytrewq'),
(12, 'asadasf', '2022-12-07', 'L', 'adge'),
(13, 'jaja', '2022-12-19', 'P', 'ytrewq');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `fasilitas`
--
ALTER TABLE `fasilitas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_koordinatrumah`
--
ALTER TABLE `tbl_koordinatrumah`
  ADD PRIMARY KEY (`id_koordinatrumah`),
  ADD KEY `rumah_id` (`rumah_id`);

--
-- Indexes for table `tb_news`
--
ALTER TABLE `tb_news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `warga`
--
ALTER TABLE `warga`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `fasilitas`
--
ALTER TABLE `fasilitas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `tbl_koordinatrumah`
--
ALTER TABLE `tbl_koordinatrumah`
  MODIFY `id_koordinatrumah` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tb_news`
--
ALTER TABLE `tb_news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `warga`
--
ALTER TABLE `warga`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_koordinatrumah`
--
ALTER TABLE `tbl_koordinatrumah`
  ADD CONSTRAINT `tbl_koordinatrumah_ibfk_1` FOREIGN KEY (`rumah_id`) REFERENCES `warga` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
