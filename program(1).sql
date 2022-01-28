-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 28 Jan 2022 pada 10.27
-- Versi server: 10.4.14-MariaDB
-- Versi PHP: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `program`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `2022_log_aktivity`
--

CREATE TABLE `2022_log_aktivity` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `posisi` varchar(100) NOT NULL,
  `ip` varchar(100) NOT NULL,
  `tanggal` datetime NOT NULL,
  `aktivitas` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `2022_log_aktivity`
--

INSERT INTO `2022_log_aktivity` (`id`, `nama`, `posisi`, `ip`, `tanggal`, `aktivitas`) VALUES
(1, 'Samsul Bahri', 'Kepala Cabang', '127.0.0.1', '2022-01-13 14:39:14', 'Samsul Bahri sebagai Kepala Cabang telah mendaftarkan anak yatim terbaru dengan nama serasehran'),
(2, 'Samsul Bahri', 'Kepala Cabang', '127.0.0.1', '2022-01-13 14:48:08', 'Samsul Bahri sebagai Kepala Cabang telah mengubah nama lengkap anak yatim Serasehran yatim menjadi Serasehran'),
(3, 'Bima', 'Guru Yatim', '127.0.0.1', '2022-01-13 14:50:10', 'Bima Telah Login Halaman Guru Yatim'),
(4, 'Bima', 'Guru Yatim', '127.0.0.1', '2022-01-13 14:50:17', 'Bima sebagai Guru Yatim telah melaporkan perkembangan anak yatim terbaru yang bernama Serasehran'),
(5, 'Samsul Bahri', 'Kepala Cabang', '127.0.0.1', '2022-01-13 14:51:16', 'Samsul Bahri Telah Login Halaman Kepala Cabang'),
(6, 'Samsul Bahri', 'Kepala Cabang', '127.0.0.1', '2022-01-13 14:51:27', 'Samsul Bahri sebagai Kepala Cabang telah mengubah nama lengkap anak yatim Serasehran yatim menjadi shintai muyai'),
(7, 'Samsul Bahri', 'Kepala Cabang', '127.0.0.1', '2022-01-13 14:53:31', 'Samsul Bahri sebagai Kepala Cabang telah mengubah nama lengkap anak yatim Shintai Muyai yatim menjadi Shintai Muyai 2'),
(8, 'Samsul Bahri', 'Kepala Cabang', '127.0.0.1', '2022-01-13 14:57:30', 'Samsul Bahri sebagai Kepala Cabang telah mengubah nama lengkap anak yatim Shintai Muyai 2 yatim menjadi Shintai '),
(9, 'Samsul Bahri', 'Kepala Cabang', '127.0.0.1', '2022-01-13 15:00:54', 'Samsul Bahri sebagai Kepala Cabang telah mengubah nama lengkap anak yatim Shintai  yatim menjadi Shintai merkuni'),
(10, 'Samsul Bahri', 'Kepala Cabang', '127.0.0.1', '2022-01-13 15:04:56', 'Samsul Bahri sebagai Kepala Cabang telah mengubah nama lengkap anak yatim Shintai Merkuni yatim menjadi feri irawaan'),
(11, 'Samsul Bahri', 'Kepala Cabang', '127.0.0.1', '2022-01-13 15:06:07', 'Samsul Bahri sebagai Kepala Cabang telah mengubah nama ibu dari anak Feri Irawaan yatim menjadi tes'),
(12, 'Samsul Bahri', 'Kepala Cabang', '127.0.0.1', '2022-01-13 15:07:28', 'Samsul Bahri sebagai Kepala Cabang telah mengubah nama ibu dari anak Feri Irawaan yatim menjadi '),
(13, 'Samsul Bahri', 'Kepala Cabang', '127.0.0.1', '2022-01-13 15:07:52', 'Samsul Bahri sebagai Kepala Cabang telah mendaftarkan anak yatim terbaru dengan nama sulaliman'),
(14, 'Samsul Bahri', 'Kepala Cabang', '127.0.0.1', '2022-01-13 15:08:50', 'Samsul Bahri sebagai Kepala Cabang telah mendaftarkan anak yatim terbaru dengan nama tess kaljta'),
(15, 'Samsul Bahri', 'Kepala Cabang', '127.0.0.1', '2022-01-13 15:09:04', 'Samsul Bahri sebagai Kepala Cabang telah mengubah nama lengkap anak yatim Tess Kaljta yatim menjadi bukan nama'),
(16, 'Samsul Bahri', 'Kepala Cabang', '127.0.0.1', '2022-01-13 15:09:35', 'Samsul Bahri sebagai Kepala Cabang telah mengubah nama lengkap anak yatim Bukan Nama yatim menjadi ini siaoa'),
(17, 'Samsul Bahri', 'Kepala Cabang', '127.0.0.1', '2022-01-13 15:14:34', 'Samsul Bahri Telah Login Halaman Kepala Cabang'),
(18, 'Bima', 'Guru Yatim', '127.0.0.1', '2022-01-13 15:41:13', 'Bima Telah Login Halaman Guru Yatim'),
(19, 'Bima', 'Guru Yatim', '127.0.0.1', '2022-01-13 15:41:19', 'Bima sebagai Guru Yatim telah mendaftarkan anak yatim terbaru dengan nama dasfdas'),
(20, 'Bima', 'Guru Yatim', '127.0.0.1', '2022-01-13 15:42:43', 'Bima Divisi Guru Yatim Telah Mengganti nama lengkapnya'),
(21, 'Bima', 'Guru Yatim', '127.0.0.1', '2022-01-13 15:50:24', 'Bima Divisi Guru Yatim Telah Mengganti nama lengkapnya'),
(22, 'Bima', 'Guru Yatim', '127.0.0.1', '2022-01-13 15:56:02', 'Bima Divisi Guru Yatim Telah Mengganti nama lengkapnya'),
(23, 'Bima', 'Guru Yatim', '127.0.0.1', '2022-01-13 15:59:16', 'Bima Divisi Guru Yatim Telah Mengganti nama lengkapnya'),
(24, 'Bima', 'Guru Yatim', '127.0.0.1', '2022-01-13 15:59:20', 'Bima Divisi Guru Yatim Telah Mengganti nama lengkapnya'),
(25, 'Bima', 'Guru Yatim', '127.0.0.1', '2022-01-13 15:59:26', 'Bima Divisi Guru Yatim Telah Mengganti nama lengkapnya'),
(26, 'Bima', 'Guru Yatim', '127.0.0.1', '2022-01-13 16:00:46', 'Bima Divisi Guru Yatim Telah Mengganti nama lengkapnya'),
(27, 'Bima', 'Guru Yatim', '127.0.0.1', '2022-01-13 16:01:14', 'Bima Divisi Guru Yatim Telah Mengganti nama lengkapnya'),
(28, 'Bima', 'Guru Yatim', '127.0.0.1', '2022-01-13 16:01:44', 'Bima Divisi Guru Yatim Telah Mengganti nama lengkapnya'),
(29, 'Bima', 'Guru Yatim', '127.0.0.1', '2022-01-13 16:01:48', 'Bima Divisi Guru Yatim Telah Mengganti nama lengkapnya'),
(30, 'Bima', 'Guru Yatim', '127.0.0.1', '2022-01-13 16:01:51', 'Bima Divisi Guru Yatim Telah Mengganti nama lengkapnya'),
(31, 'bima septiana13', 'Guru Yatim', '127.0.0.1', '2022-01-13 16:07:36', 'bima septiana13 Telah Login Halaman Guru Yatim'),
(32, 'bima septiana13', 'Guru Yatim', '127.0.0.1', '2022-01-13 16:08:23', 'bima septiana13 Divisi Guru Yatim Telah Mengganti nama lengkapnya'),
(33, 'bima septiana13', 'Guru Yatim', '127.0.0.1', '2022-01-13 16:08:25', 'bima septiana13 Divisi Guru Yatim Telah Mengganti nama lengkapnya'),
(34, 'bima septiana13', 'Guru Yatim', '127.0.0.1', '2022-01-13 16:08:33', 'bima septiana13 Divisi Guru Yatim Telah Mengganti nama lengkapnya'),
(35, 'bima septiana13', 'Guru Yatim', '127.0.0.1', '2022-01-13 16:10:24', 'bima septiana13 Divisi Guru Yatim Telah Mengganti nama lengkapnya'),
(36, 'bima septiana13', 'Guru Yatim', '127.0.0.1', '2022-01-13 16:11:23', 'bima septiana13 Divisi Guru Yatim Telah Mengganti nama lengkapnya'),
(37, 'Titi Sugianti', 'Kepala Program', '127.0.0.1', '2022-01-14 09:16:37', 'Titi Sugianti Telah Login Halaman Kepala Program'),
(38, 'Titi Sugianti', 'Kepala Program', '127.0.0.1', '2022-01-14 09:20:49', 'Titi Sugianti Telah Login Halaman Kepala Program'),
(39, 'Titi Sugianti', 'Kepala Program', '127.0.0.1', '2022-01-14 09:23:50', 'Titi Sugianti sebagai Kepala Program telah mengubah nama lengkap anak yatim Dasfdas yatim menjadi aidan'),
(40, 'Samsul Bahri', 'Kepala Cabang', '127.0.0.1', '2022-01-14 09:31:12', 'Samsul Bahri Telah Login Halaman Kepala Cabang'),
(41, 'Isnia Damayanti', 'Kepala Program', '127.0.0.1', '2022-01-14 10:18:09', 'Isnia Damayanti Telah Login Halaman Kepala Program'),
(42, 'Isnia Damayanti', 'Kepala Program', '127.0.0.1', '2022-01-14 10:20:10', 'Isnia Damayanti sebagai Kepala Program telah mendaftarkan anak yatim terbaru dengan nama ffasfa'),
(43, 'Isnia Damayanti', 'Kepala Program', '127.0.0.1', '2022-01-14 10:20:13', 'Isnia Damayanti sebagai Kepala Program telah mendaftarkan anak yatim terbaru dengan nama fgrgadsa'),
(44, 'Riki Subagja', 'Ketua Yayasan', '127.0.0.1', '2022-01-14 11:01:24', 'Riki Subagja Telah Login Halaman Ketua Yayasan'),
(45, 'Heru', 'Guru Yatim', '127.0.0.1', '2022-01-14 11:09:59', 'Heru Telah Login Halaman Guru Yatim'),
(46, 'Titi Sugianti', 'Kepala Program', '127.0.0.1', '2022-01-14 11:10:21', 'Titi Sugianti Telah Login Halaman Kepala Program'),
(47, 'Riki Subagja', 'Ketua Yayasan', '127.0.0.1', '2022-01-14 11:11:52', 'Riki Subagja Telah Login Halaman Ketua Yayasan'),
(48, 'bima septiana13fadaffa', 'Guru Yatim', '127.0.0.1', '2022-01-14 11:37:19', 'bima septiana13fadaffa Telah Login Halaman Guru Yatim'),
(49, 'Riki Subagja', 'Ketua Yayasan', '127.0.0.1', '2022-01-14 11:49:18', 'Riki Subagja Telah Login Halaman Ketua Yayasan'),
(50, 'bima septiana13fadaffa', 'Guru Yatim', '127.0.0.1', '2022-01-14 13:19:42', 'bima septiana13fadaffa Telah Login Halaman Guru Yatim'),
(51, 'bima septiana13fadaffa', 'Guru Yatim', '127.0.0.1', '2022-01-14 13:38:33', 'bima septiana13fadaffa sebagai Guru Yatim telah melaporkan perkembangan anak yatim terbaru yang bernama aidan'),
(52, 'bima septiana13fadaffa', 'Guru Yatim', '127.0.0.1', '2022-01-14 13:51:22', 'bima septiana13fadaffa sebagai Guru Yatim telah melaporkan perkembangan anak yatim terbaru yang bernama feri irawaan'),
(53, 'bima septiana13fadaffa', 'Guru Yatim', '127.0.0.1', '2022-01-14 13:54:39', 'bima septiana13fadaffa Divisi Guru Yatim Telah Mengganti nama lengkapnya'),
(54, 'Isnia Damayanti', 'Kepala Program', '127.0.0.1', '2022-01-14 13:55:00', 'Isnia Damayanti Telah Login Halaman Kepala Program'),
(55, 'Isnia Damayanti', 'Kepala Program', '127.0.0.1', '2022-01-14 13:55:11', 'Isnia Damayanti Divisi Kepala Program Telah Mengganti nama lengkapnya'),
(56, 'Isnia Damayanti', 'Kepala Program', '127.0.0.1', '2022-01-14 13:55:34', 'Isnia Damayanti Divisi Kepala Program Telah Mengganti nama lengkapnya'),
(57, 'Riki Subagja', 'Ketua Yayasan', '127.0.0.1', '2022-01-14 14:08:57', 'Riki Subagja Telah Login Halaman Ketua Yayasan'),
(58, 'isnia damayanti', 'Kepala Program', '127.0.0.1', '2022-01-14 14:23:17', 'isnia damayanti Telah Login Halaman Kepala Program'),
(59, 'bima septiana', 'Guru Yatim', '127.0.0.1', '2022-01-14 14:27:14', 'bima septiana Telah Login Halaman Guru Yatim'),
(60, 'bima septiana', 'Guru Yatim', '127.0.0.1', '2022-01-14 14:53:21', 'bima septiana sebagai Guru Yatim telah melaporkan perkembangan anak yatim terbaru yang bernama aidan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `akun_pengurus`
--

CREATE TABLE `akun_pengurus` (
  `id` int(11) NOT NULL,
  `id_pengurus` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `cabang` varchar(200) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(256) NOT NULL,
  `profil` varchar(200) NOT NULL,
  `posisi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `akun_pengurus`
--

INSERT INTO `akun_pengurus` (`id`, `id_pengurus`, `nama`, `cabang`, `username`, `password`, `profil`, `posisi`) VALUES
(1, 'ketua_yayasan', 'Riki Subagja', 'Depok', 'riki1011', '$2y$10$1Xsqtyw79xIEqPvy2jHjg.2F3QPVWP1Ppbp/M.U6ZMrd6hizAXChW', 'profil.png', 'Ketua Yayasan'),
(2, 'guru', 'bima septiana', 'Bogor', 'bimaa', '$2y$10$TGxXBvTkCfgJxRNC/xOtF.d.gnb68QL0bU5BCRp4ZCBJViU0my.ti', 'profil.png', 'Guru Yatim'),
(3, 'guru', 'Aris Ramadhan', 'Depok', 'aris12', '$2y$10$dTf6MihH/ml67mSj6h0EyOmYv5/EpsMw1VlvkIuVagrTShf7I2rgS', 'profil.png', 'Guru Yatim'),
(4, 'guru', 'Sainan', 'Bogor', 'sainan', '$2y$10$kpJLg90cl7K6FAkAe0Hd7OuTRlzK.q0yIjUo2OZxYbjY.hawRbgyq', 'profil.png', 'Guru Yatim'),
(5, 'guru', 'Heru', 'Depok', 'heru1', '$2y$10$kRDpjU5rXPav5AUX106BkulJseYIZUYCnjuTr4ZYsp5rBD5tYsFeu', 'profil.png', 'Guru Yatim'),
(6, 'kepala_program', 'isnia damayanti', 'Depok', 'program_depok', '$2y$10$1Xsqtyw79xIEqPvy2jHjg.2F3QPVWP1Ppbp/M.U6ZMrd6hizAXChW', 'profil.png', 'Kepala Program'),
(7, 'kepala_cabang', 'Samsul Bahri', 'Bogor', 'kepala_cabang', '$2y$10$1Xsqtyw79xIEqPvy2jHjg.2F3QPVWP1Ppbp/M.U6ZMrd6hizAXChW', 'profil.png', 'Kepala Cabang'),
(8, 'kepala_program', 'Titi Sugianti', 'Bogor', 'program_bogor', '$2y$10$1Xsqtyw79xIEqPvy2jHjg.2F3QPVWP1Ppbp/M.U6ZMrd6hizAXChW', 'profil.png', 'Kepala Program');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_yatim`
--

CREATE TABLE `data_yatim` (
  `id` int(11) NOT NULL,
  `nomor_id` varchar(100) NOT NULL,
  `id_pengurus` varchar(100) NOT NULL,
  `posisi` varchar(100) NOT NULL,
  `cabang` varchar(100) NOT NULL,
  `guru` varchar(100) NOT NULL,
  `nama_yatim` text NOT NULL,
  `usia` varchar(100) NOT NULL,
  `alamat` text NOT NULL,
  `tempatLahir` varchar(100) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `nama_ibu` varchar(100) NOT NULL,
  `nama_ayah` varchar(100) NOT NULL,
  `asal_sekolah` varchar(100) NOT NULL,
  `kelas` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `data_yatim`
--

INSERT INTO `data_yatim` (`id`, `nomor_id`, `id_pengurus`, `posisi`, `cabang`, `guru`, `nama_yatim`, `usia`, `alamat`, `tempatLahir`, `tgl_lahir`, `nama_ibu`, `nama_ayah`, `asal_sekolah`, `kelas`) VALUES
(1, '7', 'kepala_cabang', 'Kepala Cabang', 'Bogor', 'Samsul Bahri', 'feri irawaan', '', '', '', '0000-00-00', '', '', '', ''),
(2, '7', 'kepala_cabang', 'Kepala Cabang', 'Bogor', 'Samsul Bahri', 'sulaliman', '', '', '', '0000-00-00', '', '', '', ''),
(3, '7', 'kepala_cabang', 'Kepala Cabang', 'Bogor', 'Samsul Bahri', 'ini siaoa', '', '', '', '0000-00-00', '', '', '', ''),
(4, '2', 'Kepala Cabang', 'Kepala Cabang', 'Bogor', 'Samsul Bahri', 'aidan', '', '', '', '0000-00-00', '', '', '', ''),
(5, '6', 'kepala_program', 'Kepala Program', 'Depok', 'isnia damayanti', 'ffasfa', '', '', '', '0000-00-00', '', '', '', ''),
(6, '6', 'kepala_program', 'Kepala Program', 'Depok', 'isnia damayanti', 'fgrgadsa', '', '', '', '0000-00-00', '', '', '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `perkembangan_yatim`
--

CREATE TABLE `perkembangan_yatim` (
  `id` int(11) NOT NULL,
  `nomor_id` varchar(100) NOT NULL,
  `id_pengurus` varchar(100) NOT NULL,
  `guru` varchar(100) NOT NULL,
  `nama_yatim` varchar(100) NOT NULL,
  `cabang` varchar(100) NOT NULL,
  `perkembangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `perkembangan_yatim`
--

INSERT INTO `perkembangan_yatim` (`id`, `nomor_id`, `id_pengurus`, `guru`, `nama_yatim`, `cabang`, `perkembangan`) VALUES
(1, '2', 'guru', 'bima septiana', 'aidan', 'Bogor', 'mampu mengfahal juz 30'),
(2, '2', 'guru', 'bima septiana', 'feri irawaan', 'Bogor', 'fdsafsd'),
(3, '2', 'guru', 'bima septiana', 'aidan', 'Bogor', 'mampu menghafal juz am\'ma');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `2022_log_aktivity`
--
ALTER TABLE `2022_log_aktivity`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `akun_pengurus`
--
ALTER TABLE `akun_pengurus`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `data_yatim`
--
ALTER TABLE `data_yatim`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `perkembangan_yatim`
--
ALTER TABLE `perkembangan_yatim`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `2022_log_aktivity`
--
ALTER TABLE `2022_log_aktivity`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT untuk tabel `akun_pengurus`
--
ALTER TABLE `akun_pengurus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `data_yatim`
--
ALTER TABLE `data_yatim`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `perkembangan_yatim`
--
ALTER TABLE `perkembangan_yatim`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
