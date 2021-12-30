-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 28 Nov 2021 pada 11.07
-- Versi server: 10.4.21-MariaDB
-- Versi PHP: 7.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rawatinap`
--
CREATE DATABASE IF NOT EXISTS `rawatinap` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `rawatinap`;

-- --------------------------------------------------------

--
-- Struktur dari tabel `jeniskamar`
--

DROP TABLE IF EXISTS `jeniskamar`;
CREATE TABLE `jeniskamar` (
  `idjkamar` int(10) NOT NULL,
  `jeniskamar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `jeniskamar`
--

INSERT INTO `jeniskamar` (`idjkamar`, `jeniskamar`) VALUES
(1, 'Kelas 3'),
(2, 'Kelas 2'),
(3, 'Kelas 1'),
(4, 'VIP');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kamar`
--

DROP TABLE IF EXISTS `kamar`;
CREATE TABLE `kamar` (
  `idkamar` int(10) NOT NULL,
  `jnskamar` int(10) NOT NULL,
  `namakamar` varchar(100) NOT NULL,
  `status` int(10) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kamar`
--

INSERT INTO `kamar` (`idkamar`, `jnskamar`, `namakamar`, `status`) VALUES
(1, 1, 'Flamboyan', 0),
(2, 1, 'Flamboyan', 0),
(3, 1, 'Flamboyan', 31),
(4, 1, 'Flamboyan', 0),
(5, 1, 'Flamboyan', 0),
(6, 1, 'Flamboyan', 0),
(7, 1, 'Mawar', 0),
(8, 1, 'Mawar', 0),
(9, 1, 'Mawar', 0),
(10, 1, 'Mawar', 0),
(11, 1, 'Mawar', 0),
(12, 1, 'Mawar', 0),
(13, 2, 'Melati', 0),
(14, 2, 'Melati', 0),
(15, 2, 'Melati', 0),
(16, 2, 'Melati', 0),
(17, 2, 'Melati', 0),
(18, 2, 'Melati', 0),
(19, 2, 'Kamboja', 0),
(20, 2, 'Kamboja', 0),
(21, 2, 'Kamboja', 0),
(22, 2, 'Kamboja', 0),
(23, 2, 'Kamboja', 0),
(24, 2, 'Kamboja', 0),
(25, 2, 'Kamboja', 0),
(26, 3, 'Kelimutu', 9),
(27, 3, 'Kelimutu', 0),
(28, 3, 'Kelimutu', 0),
(29, 3, 'Kelimutu', 0),
(30, 3, 'Kelimutu', 0),
(31, 3, 'Kelimutu', 0),
(32, 4, 'Komodo', 0),
(33, 4, 'Komodo', 0),
(34, 4, 'Komodo', 0),
(35, 4, 'Komodo', 0),
(36, 4, 'Komodo', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pasien`
--

DROP TABLE IF EXISTS `pasien`;
CREATE TABLE `pasien` (
  `idpasien` int(10) NOT NULL,
  `namapasien` varchar(100) NOT NULL,
  `jeniskelamin` varchar(1) NOT NULL,
  `tgllahir` date NOT NULL,
  `tglmasuk` date NOT NULL,
  `tglkeluar` date NOT NULL,
  `jenis-penyakit` varchar(200) NOT NULL,
  `kamar` int(10) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pasien`
--

INSERT INTO `pasien` (`idpasien`, `namapasien`, `jeniskelamin`, `tgllahir`, `tglmasuk`, `tglkeluar`, `jenis-penyakit`, `kamar`) VALUES
(9, 'Katerina', 'P', '2021-11-16', '2021-11-24', '0000-00-00', 'fafa', 51),
(10, 'Maria', 'P', '2021-11-16', '2021-11-25', '0000-00-00', 'fdfa', 0),
(11, 'Mathen', 'L', '2021-11-08', '2021-11-15', '0000-00-00', 'adfa', 0),
(31, 'Samuel', 'L', '2021-11-18', '2021-11-26', '0000-00-00', 'DFA', 3),
(34, 'MARINA', 'P', '2021-11-22', '2021-11-29', '0000-00-00', 'sakit parah', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pasiensembuh`
--

DROP TABLE IF EXISTS `pasiensembuh`;
CREATE TABLE `pasiensembuh` (
  `idpasien` int(10) NOT NULL,
  `namapasien` varchar(100) NOT NULL,
  `jeniskelamin` varchar(1) NOT NULL,
  `tgllahir` date NOT NULL,
  `tglmasuk` date NOT NULL,
  `tglkeluar` date NOT NULL,
  `jenis-penyakit` varchar(200) NOT NULL,
  `kamar` int(10) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pasiensembuh`
--

INSERT INTO `pasiensembuh` (`idpasien`, `namapasien`, `jeniskelamin`, `tgllahir`, `tglmasuk`, `tglkeluar`, `jenis-penyakit`, `kamar`) VALUES
(7, 'Paulinaewe', 'P', '2021-11-19', '2021-11-18', '2021-11-28', 'parah sekali', 61),
(8, 'Joseph', 'L', '2021-11-26', '2021-11-26', '2021-11-28', 'adfa', 2),
(12, 'Ferdikus', 'L', '2021-11-24', '2021-11-25', '2021-11-28', 'adfa', 63),
(28, 'Paulina', 'P', '2021-11-27', '2021-11-27', '2021-11-27', 'parah', 6),
(32, 'STEPANHUS', 'L', '2021-11-22', '2021-11-29', '2021-11-28', 'MALARIA', 33),
(33, 'KEMBAR', 'L', '2021-11-28', '2021-11-28', '2021-11-28', 'MADFFD', 36);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `iduser` int(10) NOT NULL,
  `user` varchar(100) NOT NULL,
  `pass` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`iduser`, `user`, `pass`, `nama`) VALUES
(1, 'admin', '12345', 'JUNAIDIN');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `jeniskamar`
--
ALTER TABLE `jeniskamar`
  ADD PRIMARY KEY (`idjkamar`);

--
-- Indeks untuk tabel `kamar`
--
ALTER TABLE `kamar`
  ADD PRIMARY KEY (`idkamar`);

--
-- Indeks untuk tabel `pasien`
--
ALTER TABLE `pasien`
  ADD PRIMARY KEY (`idpasien`);

--
-- Indeks untuk tabel `pasiensembuh`
--
ALTER TABLE `pasiensembuh`
  ADD PRIMARY KEY (`idpasien`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`iduser`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `jeniskamar`
--
ALTER TABLE `jeniskamar`
  MODIFY `idjkamar` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `kamar`
--
ALTER TABLE `kamar`
  MODIFY `idkamar` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT untuk tabel `pasien`
--
ALTER TABLE `pasien`
  MODIFY `idpasien` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT untuk tabel `pasiensembuh`
--
ALTER TABLE `pasiensembuh`
  MODIFY `idpasien` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `iduser` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
