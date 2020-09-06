-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 06 Sep 2020 pada 13.53
-- Versi server: 10.4.13-MariaDB
-- Versi PHP: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db-gym`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_fasilitas`
--

CREATE TABLE `t_fasilitas` (
  `id_fasilitas` char(50) NOT NULL DEFAULT '',
  `fasilitas` varchar(50) DEFAULT NULL,
  `harga` int(11) DEFAULT NULL,
  `tgl_masuk` date DEFAULT NULL,
  `jml_jmpakai` int(3) DEFAULT NULL,
  `tgl_rusak` date DEFAULT NULL,
  `ket` int(11) DEFAULT NULL,
  `tgl_add` datetime DEFAULT current_timestamp(),
  `tgl_update` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `t_fasilitas`
--

INSERT INTO `t_fasilitas` (`id_fasilitas`, `fasilitas`, `harga`, `tgl_masuk`, `jml_jmpakai`, `tgl_rusak`, `ket`, `tgl_add`, `tgl_update`) VALUES
('FS1506200001', 'Squat Track', 30000, '2020-06-16', 2, '2020-06-18', 2, '2020-06-15 15:20:11', '2020-06-18 04:06:42'),
('FS1707200001', 'Bench Presh', 40000, '2020-06-17', 2, '0000-00-00', 1, '2020-07-17 04:12:13', '2020-07-17 04:12:13'),
('FS1806200001', 'Rowing Machine', 50000, '2020-06-17', 2, '0000-00-00', 1, '2020-06-18 04:04:42', '2020-06-18 04:04:42'),
('FS1806200002', 'Treadmill', 50000, '2020-06-19', 2, '0000-00-00', 1, '2020-06-18 04:05:44', '2020-06-18 04:05:44');

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_galeri`
--

CREATE TABLE `t_galeri` (
  `id` int(11) NOT NULL,
  `senam_id` int(11) NOT NULL,
  `ket` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_instruktur`
--

CREATE TABLE `t_instruktur` (
  `id_instruktur` int(11) NOT NULL,
  `nama_instruktur` varchar(100) DEFAULT NULL,
  `no_hp` varchar(12) DEFAULT '',
  `alamat` text DEFAULT NULL,
  `aktif` enum('1','0') DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `t_instruktur`
--

INSERT INTO `t_instruktur` (`id_instruktur`, `nama_instruktur`, `no_hp`, `alamat`, `aktif`) VALUES
(6, 'Adam', '081247046058', 'Jl. Joyosari No 26D', '1'),
(7, 'M. Riant', '085700904321', 'Jl. Galunggung', '1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_instruktur_detail`
--

CREATE TABLE `t_instruktur_detail` (
  `id` int(11) NOT NULL,
  `senam_id` char(50) NOT NULL,
  `instruktur_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `t_instruktur_detail`
--

INSERT INTO `t_instruktur_detail` (`id`, `senam_id`, `instruktur_id`) VALUES
(1, 'SN1606200001', 6),
(2, 'SN1606200005', 6),
(3, 'SN1606200003', 7);

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_jenis_senam`
--

CREATE TABLE `t_jenis_senam` (
  `id_senam` char(50) NOT NULL DEFAULT '',
  `jenis_senam` varchar(255) DEFAULT NULL,
  `harga_senam` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `t_jenis_senam`
--

INSERT INTO `t_jenis_senam` (`id_senam`, `jenis_senam`, `harga_senam`) VALUES
('SN1606200001', 'Zumba', 20000),
('SN1606200002', 'Yoga', 25000),
('SN1606200003', 'Pilates', 30000),
('SN1606200004', 'Aerobic', 30000),
('SN1606200005', 'Fitnes', 50000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_member`
--

CREATE TABLE `t_member` (
  `idm` int(11) NOT NULL,
  `id_member` varchar(20) DEFAULT '',
  `id_user` int(11) DEFAULT NULL,
  `alamat` text DEFAULT '',
  `notelp` varchar(16) DEFAULT NULL,
  `tgl_daftar` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `t_member`
--

INSERT INTO `t_member` (`idm`, `id_member`, `id_user`, `alamat`, `notelp`, `tgl_daftar`) VALUES
(1, 'MB1707200001', 1, '', NULL, '2020-07-17 06:34:57'),
(2, 'MB1707200002', 2, 'Malang', '081247046058', '2020-07-17 00:00:00'),
(3, 'MB1707200003', 3, '', NULL, '2020-07-17 09:33:53'),
(4, 'MB1707200004', 3, 'Jl. Joyosary No 26J', '081247046058', '2020-07-17 09:35:50'),
(5, 'MB0209200001', 4, '', NULL, '2020-09-02 10:29:03');

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_paket`
--

CREATE TABLE `t_paket` (
  `id_paket` char(11) NOT NULL,
  `nama_paket` varchar(10) DEFAULT NULL,
  `harga` int(11) DEFAULT NULL,
  `tgl_awal` date DEFAULT NULL,
  `tgl_akhir` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `t_paket`
--

INSERT INTO `t_paket` (`id_paket`, `nama_paket`, `harga`, `tgl_awal`, `tgl_akhir`) VALUES
('0001', 'A', 250000, '2020-06-15', '2020-07-15'),
('0002', 'B', 200000, '2020-06-17', '2020-08-17'),
('0003', 'C', 250000, '2020-06-17', '2020-08-17');

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_setingpaket`
--

CREATE TABLE `t_setingpaket` (
  `id_setingpaket` int(11) NOT NULL,
  `id_paket` char(11) DEFAULT '',
  `id_jenis_senam` char(50) DEFAULT NULL,
  `kuota` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `t_setingpaket`
--

INSERT INTO `t_setingpaket` (`id_setingpaket`, `id_paket`, `id_jenis_senam`, `kuota`) VALUES
(1, '0001', 'SN1606200001', 1),
(2, '0001', 'SN1606200005', 2),
(3, '0002', 'SN1606200003', 1),
(4, '0002', 'SN1606200005', 2),
(5, '0003', 'SN1606200003', 1),
(6, '0003', 'SN1606200004', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_setpaket_det`
--

CREATE TABLE `t_setpaket_det` (
  `id_det` int(11) NOT NULL,
  `id_setpaket` char(50) NOT NULL DEFAULT '0',
  `tgl_masuk` date DEFAULT NULL,
  `jam_mulai` time DEFAULT NULL,
  `jam_selesai` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `t_setpaket_det`
--

INSERT INTO `t_setpaket_det` (`id_det`, `id_setpaket`, `tgl_masuk`, `jam_mulai`, `jam_selesai`) VALUES
(158, '1', '2020-06-17', '10:00:00', '11:00:00'),
(161, '2', '2020-06-17', '18:00:00', '19:00:00'),
(162, '2', '2020-06-18', '10:00:00', '11:00:00'),
(164, '3', '2020-06-18', '08:00:00', '09:00:00'),
(167, '4', '2020-06-19', '10:00:00', '11:00:00'),
(168, '4', '2020-06-20', '18:00:00', '19:00:00'),
(170, '5', '2020-07-18', '22:00:00', '23:00:00'),
(173, '6', '2020-07-18', '15:00:00', '16:00:00'),
(174, '6', '2020-07-19', '08:00:00', '09:00:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_transfasilitas`
--

CREATE TABLE `t_transfasilitas` (
  `id_transfasilitas` int(11) NOT NULL,
  `tgl_transfasilitas` datetime DEFAULT NULL,
  `id_member` char(50) DEFAULT NULL,
  `tgl_booking` date DEFAULT NULL,
  `jam_mulai` time DEFAULT NULL,
  `jam_selesai` time DEFAULT NULL,
  `nama_fasilitas` varchar(50) DEFAULT NULL,
  `kode_pembelian` char(20) DEFAULT NULL,
  `total_bayar` int(11) DEFAULT NULL,
  `bukti_pembayaran` varchar(255) DEFAULT NULL,
  `ket_bayar` int(11) DEFAULT NULL,
  `is_success` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `t_transfasilitas`
--

INSERT INTO `t_transfasilitas` (`id_transfasilitas`, `tgl_transfasilitas`, `id_member`, `tgl_booking`, `jam_mulai`, `jam_selesai`, `nama_fasilitas`, `kode_pembelian`, `total_bayar`, `bukti_pembayaran`, `ket_bayar`, `is_success`) VALUES
(1, '2020-07-17 00:00:00', 'MB1707200002', '2020-07-18', '06:39:00', '08:39:00', 'Treadmill', 'TF2007170001', 50000, NULL, 2, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_transisipaket`
--

CREATE TABLE `t_transisipaket` (
  `id_transisip` int(11) NOT NULL,
  `setpaket_id` int(11) NOT NULL DEFAULT 0,
  `kode_pembelian` char(20) DEFAULT '',
  `jenis_senam` varchar(100) DEFAULT NULL,
  `kuota` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `t_transisipaket`
--

INSERT INTO `t_transisipaket` (`id_transisip`, `setpaket_id`, `kode_pembelian`, `jenis_senam`, `kuota`) VALUES
(1, 3, 'TR1707200001', 'Pilates', 1),
(2, 4, 'TR1707200001', 'Fitnes', 2),
(3, 3, 'TR1707200002', 'Pilates', 1),
(4, 4, 'TR1707200002', 'Fitnes', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_transisipaket_det`
--

CREATE TABLE `t_transisipaket_det` (
  `id_trisi` int(11) NOT NULL,
  `setpaket_id` int(11) NOT NULL DEFAULT 0,
  `kode_pembelian` char(50) NOT NULL DEFAULT '0',
  `tgl_mulai` date DEFAULT NULL,
  `jam_mulai` time DEFAULT NULL,
  `jam_selesai` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `t_transisipaket_det`
--

INSERT INTO `t_transisipaket_det` (`id_trisi`, `setpaket_id`, `kode_pembelian`, `tgl_mulai`, `jam_mulai`, `jam_selesai`) VALUES
(1, 3, 'TR1707200001', '2020-06-18', '08:00:00', '09:00:00'),
(2, 4, 'TR1707200001', '2020-06-19', '10:00:00', '11:00:00'),
(3, 4, 'TR1707200001', '2020-06-20', '18:00:00', '19:00:00'),
(4, 3, 'TR1707200002', '2020-06-18', '08:00:00', '09:00:00'),
(5, 4, 'TR1707200002', '2020-06-19', '10:00:00', '11:00:00'),
(6, 4, 'TR1707200002', '2020-06-20', '18:00:00', '19:00:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_transpaket`
--

CREATE TABLE `t_transpaket` (
  `id_transp` int(12) NOT NULL,
  `tgl_trans` date DEFAULT NULL,
  `kode_pembelian` char(20) DEFAULT NULL,
  `id_member` varchar(20) DEFAULT '',
  `nama_paket` varchar(10) DEFAULT NULL,
  `harga_paket` int(12) DEFAULT NULL,
  `ket_bayar` int(11) DEFAULT 2,
  `bukti_pembayaran` varchar(255) DEFAULT NULL,
  `is_success` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `t_transpaket`
--

INSERT INTO `t_transpaket` (`id_transp`, `tgl_trans`, `kode_pembelian`, `id_member`, `nama_paket`, `harga_paket`, `ket_bayar`, `bukti_pembayaran`, `is_success`) VALUES
(1, '2020-07-17', 'TR1707200001', 'MB1707200002', 'B', 200000, 2, NULL, 1),
(2, '2020-07-17', 'TR1707200002', 'MB1707200003', 'B', 200000, 1, 'bukti_pembayaran.jpeg', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_user`
--

CREATE TABLE `t_user` (
  `id` int(11) NOT NULL,
  `nama` varchar(125) DEFAULT NULL,
  `username` varchar(100) DEFAULT '',
  `password` varchar(100) DEFAULT NULL,
  `level` int(11) DEFAULT NULL,
  `aktif` int(11) DEFAULT NULL,
  `foto` varchar(128) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `t_user`
--

INSERT INTO `t_user` (`id`, `nama`, `username`, `password`, `level`, `aktif`, `foto`) VALUES
(1, 'Esau Batkunda', '16510013', '$2y$10$hTWK6f0jLRuWwDLMRiA5geQWE8ecC7jKwUjPf3uVVAsWHeD8Ne1Om', 1, 1, 'default.png'),
(2, 'Lina', '16510031', '$2y$10$lVbh/0tuBCo.ja/Vj9IC9etU4VOIn2ZUT7O64aatvHsHUk7wGb1hC', 2, 1, 'default.png'),
(3, 'Alan', '16510018', '$2y$10$0Xv0jh6p9IEpC4dU838B.OBk3aN7t.ULnsNtIJkr4w.uu3R3w0k/e', 2, 1, 'default.png'),
(4, 'Rindang', '16510017', '$2y$10$CvTGstSuBVg0fucHdy5SseEfcRGWPduC2o4WxO7w6v.VUJ67zwST6', 3, 1, 'default.png');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `t_fasilitas`
--
ALTER TABLE `t_fasilitas`
  ADD PRIMARY KEY (`id_fasilitas`);

--
-- Indeks untuk tabel `t_galeri`
--
ALTER TABLE `t_galeri`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `t_instruktur`
--
ALTER TABLE `t_instruktur`
  ADD PRIMARY KEY (`id_instruktur`);

--
-- Indeks untuk tabel `t_instruktur_detail`
--
ALTER TABLE `t_instruktur_detail`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `t_jenis_senam`
--
ALTER TABLE `t_jenis_senam`
  ADD PRIMARY KEY (`id_senam`);

--
-- Indeks untuk tabel `t_member`
--
ALTER TABLE `t_member`
  ADD PRIMARY KEY (`idm`) USING BTREE;

--
-- Indeks untuk tabel `t_paket`
--
ALTER TABLE `t_paket`
  ADD PRIMARY KEY (`id_paket`);

--
-- Indeks untuk tabel `t_setingpaket`
--
ALTER TABLE `t_setingpaket`
  ADD PRIMARY KEY (`id_setingpaket`);

--
-- Indeks untuk tabel `t_setpaket_det`
--
ALTER TABLE `t_setpaket_det`
  ADD PRIMARY KEY (`id_det`);

--
-- Indeks untuk tabel `t_transfasilitas`
--
ALTER TABLE `t_transfasilitas`
  ADD PRIMARY KEY (`id_transfasilitas`),
  ADD KEY `id_member` (`id_member`);

--
-- Indeks untuk tabel `t_transisipaket`
--
ALTER TABLE `t_transisipaket`
  ADD PRIMARY KEY (`id_transisip`);

--
-- Indeks untuk tabel `t_transisipaket_det`
--
ALTER TABLE `t_transisipaket_det`
  ADD PRIMARY KEY (`id_trisi`);

--
-- Indeks untuk tabel `t_transpaket`
--
ALTER TABLE `t_transpaket`
  ADD PRIMARY KEY (`id_transp`);

--
-- Indeks untuk tabel `t_user`
--
ALTER TABLE `t_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `t_galeri`
--
ALTER TABLE `t_galeri`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `t_instruktur`
--
ALTER TABLE `t_instruktur`
  MODIFY `id_instruktur` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `t_instruktur_detail`
--
ALTER TABLE `t_instruktur_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `t_member`
--
ALTER TABLE `t_member`
  MODIFY `idm` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `t_setpaket_det`
--
ALTER TABLE `t_setpaket_det`
  MODIFY `id_det` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=179;

--
-- AUTO_INCREMENT untuk tabel `t_transfasilitas`
--
ALTER TABLE `t_transfasilitas`
  MODIFY `id_transfasilitas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `t_transisipaket`
--
ALTER TABLE `t_transisipaket`
  MODIFY `id_transisip` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `t_transisipaket_det`
--
ALTER TABLE `t_transisipaket_det`
  MODIFY `id_trisi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `t_transpaket`
--
ALTER TABLE `t_transpaket`
  MODIFY `id_transp` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
