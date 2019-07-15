-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Generation Time: 15 Jul 2019 pada 11.34
-- Versi Server: 10.1.28-MariaDB
-- PHP Version: 5.6.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbliga`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `hasil_pertandingan`
--

CREATE TABLE `hasil_pertandingan` (
  `ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `jadwal`
--

CREATE TABLE `jadwal` (
  `ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `klasmen`
--

CREATE TABLE `klasmen` (
  `ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `klub`
--

CREATE TABLE `klub` (
  `ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `kompetisi`
--

CREATE TABLE `kompetisi` (
  `ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `member_klub`
--

CREATE TABLE `member_klub` (
  `ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `news`
--

CREATE TABLE `news` (
  `news_id` int(11) NOT NULL,
  `news_judul` varchar(200) NOT NULL,
  `news_isi` text NOT NULL,
  `news_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pages`
--

CREATE TABLE `pages` (
  `pages_id` int(11) NOT NULL,
  `pages_judul` varchar(200) NOT NULL,
  `pages_isi` text NOT NULL,
  `pages_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `profils`
--

CREATE TABLE `profils` (
  `member_id` int(11) NOT NULL,
  `member_nama` varchar(100) NOT NULL,
  `member_hp` varchar(20) NOT NULL,
  `member_alamat` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `top_skore`
--

CREATE TABLE `top_skore` (
  `ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `member_id` int(11) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `status` enum('Y','N') NOT NULL DEFAULT 'N',
  `tgl_daftar` datetime NOT NULL,
  `verify` enum('Y','N') NOT NULL DEFAULT 'N',
  `valid_key` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `webadmin`
--

CREATE TABLE `webadmin` (
  `admin_id` int(11) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `admin_nama` varchar(100) NOT NULL,
  `status` enum('Y','N') NOT NULL DEFAULT 'N'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `webadmin`
--

INSERT INTO `webadmin` (`admin_id`, `email`, `password`, `admin_nama`, `status`) VALUES
(1, 'admin@ligaindramayu.co', '21232f297a57a5a743894a0e4a801fc3', 'Admin', 'Y');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `hasil_pertandingan`
--
ALTER TABLE `hasil_pertandingan`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `jadwal`
--
ALTER TABLE `jadwal`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `klasmen`
--
ALTER TABLE `klasmen`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `klub`
--
ALTER TABLE `klub`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `kompetisi`
--
ALTER TABLE `kompetisi`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `member_klub`
--
ALTER TABLE `member_klub`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`news_id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`pages_id`);

--
-- Indexes for table `profils`
--
ALTER TABLE `profils`
  ADD PRIMARY KEY (`member_id`);

--
-- Indexes for table `top_skore`
--
ALTER TABLE `top_skore`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD KEY `id_member` (`member_id`);

--
-- Indexes for table `webadmin`
--
ALTER TABLE `webadmin`
  ADD PRIMARY KEY (`admin_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `hasil_pertandingan`
--
ALTER TABLE `hasil_pertandingan`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jadwal`
--
ALTER TABLE `jadwal`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `klasmen`
--
ALTER TABLE `klasmen`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `klub`
--
ALTER TABLE `klub`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kompetisi`
--
ALTER TABLE `kompetisi`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `member_klub`
--
ALTER TABLE `member_klub`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `news_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `pages_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `profils`
--
ALTER TABLE `profils`
  MODIFY `member_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `top_skore`
--
ALTER TABLE `top_skore`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `webadmin`
--
ALTER TABLE `webadmin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `fk_member` FOREIGN KEY (`member_id`) REFERENCES `profils` (`member_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
