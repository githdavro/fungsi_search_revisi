-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Waktu pembuatan: 22. Februari 2021 jam 06:19
-- Versi Server: 5.5.16
-- Versi PHP: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `spp`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_pembayaran`
--

CREATE TABLE IF NOT EXISTS `data_pembayaran` (
  `id_bayar` int(6) NOT NULL,
  `tgl_bayar` date NOT NULL,
  `tahun_bayar` varchar(255) NOT NULL,
  `jumlah_bayar` varchar(20) NOT NULL,
  `no_induk` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data_pembayaran`
--

INSERT INTO `data_pembayaran` (`id_bayar`, `tgl_bayar`, `tahun_bayar`, `jumlah_bayar`, `no_induk`) VALUES
(111, '2021-01-07', '2040', '150000', 444),
(10, '2021-02-09', '2040', '750000', 200);

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_siswa`
--

CREATE TABLE IF NOT EXISTS `data_siswa` (
  `no_induk` int(6) NOT NULL,
  `nama_siswa` varchar(50) NOT NULL,
  `alamat_siswa` varchar(100) NOT NULL,
  `no_hp_siswa` varchar(13) NOT NULL,
  `kelas` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data_siswa`
--

INSERT INTO `data_siswa` (`no_induk`, `nama_siswa`, `alamat_siswa`, `no_hp_siswa`, `kelas`) VALUES
(225, 'rizky', 'gkb', '08935277123', '11'),
(444, 'dimas', 'jaksa', '08754533683', '10'),
(422, 'munaaa', 'abr', '088753336255', '12'),
(145, 'tifany pualam', 'JL. R. A. Kartini', '085730929997', '11'),
(567, 'Gith', 'Di hatimu', '081235802381', '12'),
(267, 'bauno', 'jl  cinta', '0876746807699', '11'),
(998, 'nissa sabyan', 'sirih', '0834251768276', '10'),
(123, 'faris', 'jakarta', '08366678832', '11'),
(200, 'tata', 'kramat', '0856341763713', '12'),
(765, 'yemm cantik cekaliii', 'palsu', '087654321', '10');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
