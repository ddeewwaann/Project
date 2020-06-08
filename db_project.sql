-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 08 Jun 2020 pada 05.34
-- Versi server: 10.1.37-MariaDB
-- Versi PHP: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_project`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `account`
--

CREATE TABLE `account` (
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `role` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `account`
--

INSERT INTO `account` (`username`, `password`, `role`) VALUES
('admin', 'admin', 1),
('user', 'user', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `assembly1`
--

CREATE TABLE `assembly1` (
  `waktu` varchar(20) NOT NULL,
  `planning` float NOT NULL,
  `actual` float NOT NULL,
  `ar` float NOT NULL,
  `reject` float NOT NULL,
  `rr` float NOT NULL,
  `problem` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `assembly1_2`
--

CREATE TABLE `assembly1_2` (
  `waktu` varchar(20) NOT NULL,
  `planning` float NOT NULL,
  `actual` float NOT NULL,
  `ar` float NOT NULL,
  `reject` float NOT NULL,
  `rr` float NOT NULL,
  `problem` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `assembly2`
--

CREATE TABLE `assembly2` (
  `waktu` varchar(20) NOT NULL,
  `planning` float NOT NULL,
  `actual` float NOT NULL,
  `ar` float NOT NULL,
  `reject` float NOT NULL,
  `rr` float NOT NULL,
  `problem` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `assembly2_2`
--

CREATE TABLE `assembly2_2` (
  `waktu` varchar(20) NOT NULL,
  `planning` float NOT NULL,
  `actual` float NOT NULL,
  `ar` float NOT NULL,
  `reject` float NOT NULL,
  `rr` float NOT NULL,
  `problem` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `bonding`
--

CREATE TABLE `bonding` (
  `waktu` varchar(20) NOT NULL,
  `planning` float NOT NULL,
  `actual` float NOT NULL,
  `ar` float NOT NULL,
  `reject` float NOT NULL,
  `rr` float NOT NULL,
  `problem` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `bonding2`
--

CREATE TABLE `bonding2` (
  `waktu` varchar(20) NOT NULL,
  `planning` float NOT NULL,
  `actual` float NOT NULL,
  `ar` float NOT NULL,
  `reject` float NOT NULL,
  `rr` float NOT NULL,
  `problem` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `bonding2`
--

INSERT INTO `bonding2` (`waktu`, `planning`, `actual`, `ar`, `reject`, `rr`, `problem`) VALUES
('16:30-17:30', 4, 5, 125, 6, 120, '7');

-- --------------------------------------------------------

--
-- Struktur dari tabel `curring`
--

CREATE TABLE `curring` (
  `waktu` varchar(20) NOT NULL,
  `planning` float NOT NULL,
  `actual` float NOT NULL,
  `ar` float NOT NULL,
  `reject` float NOT NULL,
  `rr` float NOT NULL,
  `problem` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `curring2`
--

CREATE TABLE `curring2` (
  `waktu` varchar(20) NOT NULL,
  `planning` float NOT NULL,
  `actual` float NOT NULL,
  `ar` float NOT NULL,
  `reject` float NOT NULL,
  `rr` float NOT NULL,
  `problem` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `extrude`
--

CREATE TABLE `extrude` (
  `waktu` varchar(20) NOT NULL,
  `planning` float NOT NULL,
  `actual` float NOT NULL,
  `ar` float NOT NULL,
  `reject` float NOT NULL,
  `rr` float NOT NULL,
  `problem` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `extrude2`
--

CREATE TABLE `extrude2` (
  `waktu` varchar(20) NOT NULL,
  `planning` float NOT NULL,
  `actual` float NOT NULL,
  `ar` float NOT NULL,
  `reject` float NOT NULL,
  `rr` float NOT NULL,
  `problem` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `finishing`
--

CREATE TABLE `finishing` (
  `waktu` varchar(20) NOT NULL,
  `planning` float NOT NULL,
  `actual` float NOT NULL,
  `ar` float NOT NULL,
  `reject` float NOT NULL,
  `rr` float NOT NULL,
  `problem` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `finishing2`
--

CREATE TABLE `finishing2` (
  `waktu` varchar(20) NOT NULL,
  `planning` float NOT NULL,
  `actual` float NOT NULL,
  `ar` float NOT NULL,
  `reject` float NOT NULL,
  `rr` float NOT NULL,
  `problem` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `frictionwelding`
--

CREATE TABLE `frictionwelding` (
  `waktu` varchar(20) NOT NULL,
  `planning` float NOT NULL,
  `actual` float NOT NULL,
  `ar` float NOT NULL,
  `reject` float NOT NULL,
  `rr` float NOT NULL,
  `problem` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `frictionwelding2`
--

CREATE TABLE `frictionwelding2` (
  `waktu` varchar(20) NOT NULL,
  `planning` float NOT NULL,
  `actual` float NOT NULL,
  `ar` float NOT NULL,
  `reject` float NOT NULL,
  `rr` float NOT NULL,
  `problem` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `line1`
--

CREATE TABLE `line1` (
  `waktu` varchar(20) NOT NULL,
  `planning` float NOT NULL,
  `actual` float NOT NULL,
  `ar` float NOT NULL,
  `reject` float NOT NULL,
  `rr` float NOT NULL,
  `problem` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `line1_2`
--

CREATE TABLE `line1_2` (
  `waktu` varchar(20) NOT NULL,
  `planning` float NOT NULL,
  `actual` float NOT NULL,
  `ar` float NOT NULL,
  `reject` float NOT NULL,
  `rr` float NOT NULL,
  `problem` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `line2`
--

CREATE TABLE `line2` (
  `waktu` varchar(20) NOT NULL,
  `planning` float NOT NULL,
  `actual` float NOT NULL,
  `ar` float NOT NULL,
  `reject` float NOT NULL,
  `rr` float NOT NULL,
  `problem` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `line2_2`
--

CREATE TABLE `line2_2` (
  `waktu` varchar(20) NOT NULL,
  `planning` float NOT NULL,
  `actual` float NOT NULL,
  `ar` float NOT NULL,
  `reject` float NOT NULL,
  `rr` float NOT NULL,
  `problem` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `machining`
--

CREATE TABLE `machining` (
  `waktu` varchar(20) NOT NULL,
  `planning` float NOT NULL,
  `actual` float NOT NULL,
  `ar` float NOT NULL,
  `reject` float NOT NULL,
  `rr` float NOT NULL,
  `problem` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `machining2`
--

CREATE TABLE `machining2` (
  `waktu` varchar(20) NOT NULL,
  `planning` float NOT NULL,
  `actual` float NOT NULL,
  `ar` float NOT NULL,
  `reject` float NOT NULL,
  `rr` float NOT NULL,
  `problem` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `mesin`
--

CREATE TABLE `mesin` (
  `waktu` varchar(20) NOT NULL,
  `no_mesin` varchar(10) NOT NULL,
  `status` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `mesin`
--

INSERT INTO `mesin` (`waktu`, `no_mesin`, `status`) VALUES
('04:30-05:30', '1', 'Problem Supply Material');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mesin2`
--

CREATE TABLE `mesin2` (
  `waktu` varchar(20) NOT NULL,
  `no_mesin` varchar(10) NOT NULL,
  `status` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `mesin2`
--

INSERT INTO `mesin2` (`waktu`, `no_mesin`, `status`) VALUES
('16:30-17:30', '1', 'Tidak Ada MP');

-- --------------------------------------------------------

--
-- Struktur dari tabel `painting`
--

CREATE TABLE `painting` (
  `waktu` varchar(20) NOT NULL,
  `planning` float NOT NULL,
  `actual` float NOT NULL,
  `ar` float NOT NULL,
  `reject` float NOT NULL,
  `rr` float NOT NULL,
  `problem` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `painting2`
--

CREATE TABLE `painting2` (
  `waktu` varchar(20) NOT NULL,
  `planning` float NOT NULL,
  `actual` float NOT NULL,
  `ar` float NOT NULL,
  `reject` float NOT NULL,
  `rr` float NOT NULL,
  `problem` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `phospating`
--

CREATE TABLE `phospating` (
  `waktu` varchar(20) NOT NULL,
  `planning` float NOT NULL,
  `actual` float NOT NULL,
  `ar` float NOT NULL,
  `reject` float NOT NULL,
  `rr` float NOT NULL,
  `problem` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `phospating2`
--

CREATE TABLE `phospating2` (
  `waktu` varchar(20) NOT NULL,
  `planning` float NOT NULL,
  `actual` float NOT NULL,
  `ar` float NOT NULL,
  `reject` float NOT NULL,
  `rr` float NOT NULL,
  `problem` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pressing`
--

CREATE TABLE `pressing` (
  `waktu` varchar(20) NOT NULL,
  `planning` float NOT NULL,
  `actual` float NOT NULL,
  `ar` float NOT NULL,
  `reject` float NOT NULL,
  `rr` float NOT NULL,
  `problem` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pressing2`
--

CREATE TABLE `pressing2` (
  `waktu` varchar(20) NOT NULL,
  `planning` float NOT NULL,
  `actual` float NOT NULL,
  `ar` float NOT NULL,
  `reject` float NOT NULL,
  `rr` float NOT NULL,
  `problem` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pressing_line_1`
--

CREATE TABLE `pressing_line_1` (
  `waktu` varchar(20) NOT NULL,
  `planning` float NOT NULL,
  `actual` float NOT NULL,
  `ar` float NOT NULL,
  `reject` float NOT NULL,
  `rr` float NOT NULL,
  `problem` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pressing_line_1_2`
--

CREATE TABLE `pressing_line_1_2` (
  `waktu` varchar(20) NOT NULL,
  `planning` float NOT NULL,
  `actual` float NOT NULL,
  `ar` float NOT NULL,
  `reject` float NOT NULL,
  `rr` float NOT NULL,
  `problem` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pressing_line_2`
--

CREATE TABLE `pressing_line_2` (
  `waktu` varchar(20) NOT NULL,
  `planning` float NOT NULL,
  `actual` float NOT NULL,
  `ar` float NOT NULL,
  `reject` float NOT NULL,
  `rr` float NOT NULL,
  `problem` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pressing_line_2`
--

INSERT INTO `pressing_line_2` (`waktu`, `planning`, `actual`, `ar`, `reject`, `rr`, `problem`) VALUES
('04:30-05:30', 4, 5, 125, 6, 120, '7');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pressing_line_2_2`
--

CREATE TABLE `pressing_line_2_2` (
  `waktu` varchar(20) NOT NULL,
  `planning` float NOT NULL,
  `actual` float NOT NULL,
  `ar` float NOT NULL,
  `reject` float NOT NULL,
  `rr` float NOT NULL,
  `problem` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `sanblast`
--

CREATE TABLE `sanblast` (
  `waktu` varchar(20) NOT NULL,
  `planning` float NOT NULL,
  `actual` float NOT NULL,
  `ar` float NOT NULL,
  `reject` float NOT NULL,
  `rr` float NOT NULL,
  `problem` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `sanblast2`
--

CREATE TABLE `sanblast2` (
  `waktu` varchar(20) NOT NULL,
  `planning` float NOT NULL,
  `actual` float NOT NULL,
  `ar` float NOT NULL,
  `reject` float NOT NULL,
  `rr` float NOT NULL,
  `problem` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
