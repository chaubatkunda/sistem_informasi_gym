-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 18, 2020 at 05:04 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbgym_ta`
--

-- --------------------------------------------------------

--
-- Table structure for table `t_fasilitas`
--

CREATE TABLE `t_fasilitas` (
  `id_fasilitas` char(11) NOT NULL,
  `fasilitas` varchar(50) DEFAULT NULL,
  `harga` int(11) DEFAULT NULL,
  `tgl_masuk` date DEFAULT NULL,
  `tgl_rusak` date DEFAULT NULL,
  `ket` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_fasilitas`
--

INSERT INTO `t_fasilitas` (`id_fasilitas`, `fasilitas`, `harga`, `tgl_masuk`, `tgl_rusak`, `ket`) VALUES
('001', 'Treadmill', 30000, '2019-12-31', '2020-01-22', 2),
('003', 'Mesin Eliptis dan Pijakan Tangga', 30000, '2020-01-01', '2020-02-13', 2),
('004', 'Rowing Machine', 20000, '2020-01-22', '0000-00-00', 1),
('005', 'Smith Machine', 20000, '2020-01-10', '0000-00-00', 1),
('006', 'Cable Machine', 20000, '2020-01-04', NULL, 1),
('007', 'Squat Rack', 25000, '2020-01-03', '0000-00-00', 1),
('008', 'Tredmil', 35000, '2020-01-24', '2020-02-15', 2),
('009', 'Alat Terapi Kaki', 45000, '2020-01-24', '0000-00-00', 1),
('010', 'Treadmill', 40000, '2020-02-15', '0000-00-00', 1),
('011', 'Treadmill', 40000, '2020-02-16', '0000-00-00', 1),
('012', 'Treadmill', 40000, '2020-02-16', '0000-00-00', 1),
('013', 'Treadmill', 45000, '0000-00-00', '2020-02-16', 2);

-- --------------------------------------------------------

--
-- Table structure for table `t_instruktur`
--

CREATE TABLE `t_instruktur` (
  `id_instruktur` int(11) NOT NULL,
  `nama_instruktur` varchar(100) DEFAULT NULL,
  `no_hp` varchar(12) DEFAULT '',
  `alamat` text DEFAULT NULL,
  `id_senam` int(11) DEFAULT NULL,
  `aktif` enum('1','0') DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_instruktur`
--

INSERT INTO `t_instruktur` (`id_instruktur`, `nama_instruktur`, `no_hp`, `alamat`, `id_senam`, `aktif`) VALUES
(1, 'Chau Batkunda', '081247046058', 'Malang', 1, '1'),
(2, 'Yerry Kalele', '0995334', 'Malang', NULL, '1'),
(3, 'Lina Mawaddah W.', '034438402', 'Malang', NULL, '1'),
(5, 'Adam Sambogo 88', '12345678900', 'Jombang', NULL, '1');

-- --------------------------------------------------------

--
-- Table structure for table `t_jadwal`
--

CREATE TABLE `t_jadwal` (
  `id_jadwal` int(11) NOT NULL,
  `hari` char(50) DEFAULT NULL,
  `jam_masuk` time DEFAULT NULL,
  `jam_selesai` time DEFAULT NULL,
  `id_senam` char(50) DEFAULT NULL,
  `id_fasilitas` int(11) DEFAULT NULL,
  `id_instruktur` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_jadwal`
--

INSERT INTO `t_jadwal` (`id_jadwal`, `hari`, `jam_masuk`, `jam_selesai`, `id_senam`, `id_fasilitas`, `id_instruktur`) VALUES
(3, 'Selasa', '09:00:00', '11:00:00', '0003', NULL, 2),
(4, 'Minggu', '09:00:00', '11:00:00', '0005', NULL, 5),
(7, 'Rabu', '09:00:00', '11:00:00', '0006', NULL, 2),
(10, 'Senin', '10:00:00', '12:00:00', '0001', NULL, 2),
(11, 'Kamis', '09:00:00', '11:00:00', '0004', NULL, 2),
(12, 'Jumat', '09:00:00', '11:00:00', '0003', NULL, 1),
(13, 'Sabtu', '09:00:00', '11:00:00', '0002', NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `t_jenis_senam`
--

CREATE TABLE `t_jenis_senam` (
  `id_senam` char(11) NOT NULL,
  `jenis_senam` varchar(255) DEFAULT NULL,
  `harga_senam` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_jenis_senam`
--

INSERT INTO `t_jenis_senam` (`id_senam`, `jenis_senam`, `harga_senam`) VALUES
('0001', 'Zumba', 20000),
('0002', 'Aerobic BI', 15000),
('0003', 'Fitnes', 20000),
('0004', 'Work Out Fitnes', 20000),
('0005', 'Yoga', 20000),
('0006', 'Pilates', 30000),
('0007', 'Aerobic BI1', 30000),
('0008', 'Aerobic Yoga 01', 45000),
('0009', 'Yoga 01', 35000);

-- --------------------------------------------------------

--
-- Table structure for table `t_level`
--

CREATE TABLE `t_level` (
  `id` int(11) NOT NULL,
  `level` varchar(20) DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_level`
--

INSERT INTO `t_level` (`id`, `level`) VALUES
(1, 'Admin'),
(2, 'Member'),
(3, 'Non-member');

-- --------------------------------------------------------

--
-- Table structure for table `t_member`
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
-- Dumping data for table `t_member`
--

INSERT INTO `t_member` (`idm`, `id_member`, `id_user`, `alamat`, `notelp`, `tgl_daftar`) VALUES
(72, '00000001', 7, 'Malang', '081247046058', '2020-02-15 00:00:00'),
(73, '00000002', 8, 'Malang', '081247046058', '2020-02-15 00:00:00'),
(74, '00000003', 9, 'Malang', '081247046058', '2020-02-15 00:00:00'),
(75, '00000004', 10, 'Malang', '081247046058', '2020-02-15 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `t_paket`
--

CREATE TABLE `t_paket` (
  `id_paket` char(11) NOT NULL,
  `nama_paket` varchar(10) DEFAULT NULL,
  `harga` int(11) DEFAULT NULL,
  `tgl_awal` date DEFAULT NULL,
  `tgl_akhir` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_paket`
--

INSERT INTO `t_paket` (`id_paket`, `nama_paket`, `harga`, `tgl_awal`, `tgl_akhir`) VALUES
('0001', 'A', 250000, '2020-01-25', '2020-04-25'),
('0002', 'B', 200000, '2020-01-26', '2020-04-26'),
('0003', 'C', 400000, '2020-01-29', '2020-04-29'),
('0004', 'E', 50000, '2020-02-14', '2020-05-14');

-- --------------------------------------------------------

--
-- Table structure for table `t_setingpaket`
--

CREATE TABLE `t_setingpaket` (
  `id_setingpaket` int(11) NOT NULL,
  `id_paket` char(11) DEFAULT '',
  `id_jenis_senam` int(11) DEFAULT NULL,
  `kuota` int(11) DEFAULT NULL,
  `date1` date DEFAULT NULL,
  `date2` date DEFAULT NULL,
  `jam_mulai` varchar(50) DEFAULT NULL,
  `jam_selesai` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_setingpaket`
--

INSERT INTO `t_setingpaket` (`id_setingpaket`, `id_paket`, `id_jenis_senam`, `kuota`, `date1`, `date2`, `jam_mulai`, `jam_selesai`) VALUES
(93, '0001', 1, 2, '2020-01-06', '2020-02-08', '03:03', '04:03'),
(94, '0001', 3, 2, '2020-02-09', '2020-02-11', '12:00', '13:00'),
(95, '0001', 2, 2, '2020-02-06', '2020-02-08', '09:00', '11:00'),
(96, '0002', 3, 2, '2020-02-08', '2020-02-11', '09:00', '10:00'),
(97, '0002', 4, 2, '2020-02-11', '2020-02-13', '11:00', '12:00'),
(98, '0003', 6, 2, '2020-02-08', '2020-02-11', '09:00', '10:00'),
(99, '0003', 2, 2, '2020-02-06', '2020-02-09', '08:00', '09:00'),
(100, '0003', 4, 2, '2020-02-08', '2020-02-11', '08:00', '09:00'),
(101, '0003', 5, 2, '2020-02-08', '2020-02-10', '09:00', '10:00'),
(102, '0002', 5, 2, '2020-02-14', '2020-02-17', '13:00', '14:00'),
(105, '0003', 9, 2, '2020-02-08', '2020-02-10', '11:00', '12:00'),
(106, '0004', 3, 2, '2020-02-15', '2020-02-16', '09:00', '10:00'),
(107, '0004', 2, 2, '2020-02-17', '2020-02-18', '09:00', '10:00');

-- --------------------------------------------------------

--
-- Table structure for table `t_transfasilitas`
--

CREATE TABLE `t_transfasilitas` (
  `id_transfasilitas` int(11) NOT NULL,
  `tgl_transfasilitas` date DEFAULT NULL,
  `id_member` char(11) DEFAULT NULL,
  `tgl_booking` date DEFAULT NULL,
  `jam_mulai` time DEFAULT NULL,
  `jam_selesai` time DEFAULT NULL,
  `nama_fasilitas` varchar(50) DEFAULT NULL,
  `kode_pembelian` char(20) DEFAULT NULL,
  `total_bayar` int(11) DEFAULT NULL,
  `bukti_pembayaran` varchar(255) DEFAULT NULL,
  `ket_bayar` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_transfasilitas`
--

INSERT INTO `t_transfasilitas` (`id_transfasilitas`, `tgl_transfasilitas`, `id_member`, `tgl_booking`, `jam_mulai`, `jam_selesai`, `nama_fasilitas`, `kode_pembelian`, `total_bayar`, `bukti_pembayaran`, `ket_bayar`) VALUES
(15, '2020-02-15', '00000003', '2020-02-17', '10:00:00', '12:00:00', 'Rowing Machine', '00000001', 20000, 'Jaket2.png', 1),
(16, '2020-02-15', '00000004', '2020-02-16', '11:00:00', '13:00:00', 'Rowing Machine', '00000002', 20000, 'EDC', 1),
(17, '2020-02-15', '00000001', '2020-02-19', '10:00:00', '12:00:00', 'Squat Rack', '00000003', 25000, 'Tunai', 1),
(18, '2020-02-16', '00000001', '2020-02-17', '13:00:00', '15:00:00', 'Rowing Machine', '00000004', 20000, 'EDC', 1),
(19, '2020-02-16', '00000001', '2020-02-18', '10:00:00', '12:00:00', 'Alat Terapi Kaki', '00000005', 45000, 'EDC', 1),
(20, '2020-02-18', '00000001', '2020-02-18', '16:30:00', '18:30:00', 'Squat Rack', '00000006', 25000, 'Tunai', 1),
(21, '2020-02-18', '00000001', '2020-02-18', '16:30:00', '18:30:00', 'Rowing Machine', '00000007', 20000, 'Tunai', 3);

-- --------------------------------------------------------

--
-- Table structure for table `t_transisipaket`
--

CREATE TABLE `t_transisipaket` (
  `id_transisip` int(11) NOT NULL,
  `kode_pembelian` char(20) DEFAULT '',
  `jenis_senam` varchar(100) DEFAULT NULL,
  `kuota` int(11) DEFAULT NULL,
  `date1` date DEFAULT NULL,
  `date2` date DEFAULT NULL,
  `jam1` time DEFAULT NULL,
  `jam2` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_transisipaket`
--

INSERT INTO `t_transisipaket` (`id_transisip`, `kode_pembelian`, `jenis_senam`, `kuota`, `date1`, `date2`, `jam1`, `jam2`) VALUES
(170, '00000001', 'Zumba', 2, '2020-01-06', '2020-02-08', '03:03:00', '04:03:00'),
(171, '00000001', 'Aerobic BI', 2, '2020-02-06', '2020-02-08', '09:00:00', '11:00:00'),
(172, '00000001', 'Fitnes', 2, '2020-02-09', '2020-02-11', '12:00:00', '13:00:00'),
(173, '00000002', 'Aerobic BI', 2, '2020-02-06', '2020-02-09', '08:00:00', '09:00:00'),
(174, '00000002', 'Work Out Fitnes', 2, '2020-02-08', '2020-02-11', '08:00:00', '09:00:00'),
(175, '00000002', 'Yoga', 2, '2020-02-08', '2020-02-10', '09:00:00', '10:00:00'),
(176, '00000002', 'Pilates', 2, '2020-02-08', '2020-02-11', '09:00:00', '10:00:00'),
(177, '00000002', 'Yoga 01', 2, '2020-02-08', '2020-02-10', '11:00:00', '12:00:00'),
(191, '00000003', 'Zumba', 2, '2020-01-06', '2020-02-08', '03:03:00', '04:03:00'),
(192, '00000003', 'Aerobic BI', 2, '2020-02-06', '2020-02-08', '09:00:00', '11:00:00'),
(193, '00000003', 'Fitnes', 2, '2020-02-09', '2020-02-11', '12:00:00', '13:00:00'),
(194, '00000004', 'Aerobic BI', 2, '2020-02-06', '2020-02-09', '08:00:00', '09:00:00'),
(195, '00000004', 'Work Out Fitnes', 2, '2020-02-08', '2020-02-11', '08:00:00', '09:00:00'),
(196, '00000004', 'Yoga', 2, '2020-02-08', '2020-02-10', '09:00:00', '10:00:00'),
(197, '00000004', 'Pilates', 2, '2020-02-08', '2020-02-11', '09:00:00', '10:00:00'),
(198, '00000004', 'Yoga 01', 2, '2020-02-08', '2020-02-10', '11:00:00', '12:00:00'),
(199, '00000005', 'Aerobic BI', 2, '2020-02-06', '2020-02-09', '08:00:00', '09:00:00'),
(200, '00000005', 'Work Out Fitnes', 2, '2020-02-08', '2020-02-11', '08:00:00', '09:00:00'),
(201, '00000005', 'Yoga', 2, '2020-02-08', '2020-02-10', '09:00:00', '10:00:00'),
(202, '00000005', 'Pilates', 2, '2020-02-08', '2020-02-11', '09:00:00', '10:00:00'),
(203, '00000005', 'Yoga 01', 2, '2020-02-08', '2020-02-10', '11:00:00', '12:00:00'),
(207, '00000006', 'Aerobic BI', 2, '2020-02-06', '2020-02-09', '08:00:00', '09:00:00'),
(208, '00000006', 'Work Out Fitnes', 2, '2020-02-08', '2020-02-11', '08:00:00', '09:00:00'),
(209, '00000006', 'Yoga', 2, '2020-02-08', '2020-02-10', '09:00:00', '10:00:00'),
(210, '00000006', 'Pilates', 2, '2020-02-08', '2020-02-11', '09:00:00', '10:00:00'),
(211, '00000006', 'Yoga 01', 2, '2020-02-08', '2020-02-10', '11:00:00', '12:00:00'),
(212, '00000007', 'Fitnes', 2, '2020-02-08', '2020-02-11', '09:00:00', '10:00:00'),
(213, '00000007', 'Work Out Fitnes', 2, '2020-02-11', '2020-02-13', '11:00:00', '12:00:00'),
(214, '00000007', 'Yoga', 2, '2020-02-14', '2020-02-17', '13:00:00', '14:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `t_transjenissenam`
--

CREATE TABLE `t_transjenissenam` (
  `id_transsenam` int(11) NOT NULL,
  `tgl_transsenam` timestamp NULL DEFAULT current_timestamp(),
  `id_calon_member` int(11) DEFAULT NULL,
  `tgl_booking` date DEFAULT NULL,
  `jam_mulai` varchar(10) DEFAULT '',
  `jam_selesai` varchar(10) DEFAULT NULL,
  `nama_senam` varchar(50) DEFAULT NULL,
  `kode_pembelian` char(20) DEFAULT NULL,
  `total_bayar` int(11) DEFAULT NULL,
  `bukti_pembayaran` varchar(255) DEFAULT NULL,
  `ket_bayar` enum('2','1','0') DEFAULT '2'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t_transpaket`
--

CREATE TABLE `t_transpaket` (
  `id_transp` int(12) NOT NULL,
  `tgl_trans` date DEFAULT NULL,
  `kode_pembelian` char(20) DEFAULT NULL,
  `id_member` varchar(20) DEFAULT '',
  `nama_paket` varchar(10) DEFAULT NULL,
  `harga_paket` int(12) DEFAULT NULL,
  `ket_bayar` int(11) DEFAULT 2,
  `bukti_pembayaran` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_transpaket`
--

INSERT INTO `t_transpaket` (`id_transp`, `tgl_trans`, `kode_pembelian`, `id_member`, `nama_paket`, `harga_paket`, `ket_bayar`, `bukti_pembayaran`) VALUES
(1, '2020-02-15', '00000001', '00000001', 'A', 250000, 1, 'Jaket.png'),
(2, '2020-02-15', '00000002', '00000002', 'C', 400000, 1, 'EDC'),
(3, '2020-02-15', '00000003', '00000001', 'A', 250000, 1, 'Jaket22.png'),
(4, '2020-02-15', '00000004', '00000001', 'C', 400000, 1, 'EDC'),
(5, '2020-02-15', '00000005', '00000001', 'C', 400000, 1, 'Tunai'),
(6, '2020-02-16', '00000006', '00000002', 'C', 400000, 1, 'Tunai'),
(7, '2020-02-16', '00000007', '00000002', 'B', 200000, 3, 'logo_unaor.png');

-- --------------------------------------------------------

--
-- Table structure for table `t_user`
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
-- Dumping data for table `t_user`
--

INSERT INTO `t_user` (`id`, `nama`, `username`, `password`, `level`, `aktif`, `foto`) VALUES
(0, 'Lina Mawaddah', '16510031', '$2y$10$vDLXtvZlBWD4IDDKHlv1DOlIIKW3JcVclwqJx973M2psJlt1JmrC2', 2, 1, 'default.png'),
(6, 'Chau Batkunda', 'chau', '$2y$10$iyRTu0yDdKt/L99t7DU0qehgj4RLbGC3/8Xv2XoP.4zloLtQpCyCm', 1, 1, 'default.png'),
(7, 'Yerry', '16510014', '$2y$10$G08cjZws06kBj9NcAFNsIeP5Iis.JJBwpc5dhjcnfMx3ks/9nvYHy', 2, 1, 'default.png'),
(8, 'Lina', '16510018', '$2y$10$x8bETh.MEkN57jpvQwJl1utveDocqhQnDZW0ck.5zrfGI96pi6d3C', 2, 1, 'default.png'),
(9, 'Catur', '16510012', '$2y$10$eYFLzBQp/MRR9153X5DERO4zzBDxriwx0rJPjyducshEHO0H/RQnq', 2, 2, 'default.png'),
(10, 'Elfin', '16510005', '$2y$10$0qmaTIXM.1tiYxtNlOm3Q.g/Jj3A2K4B2Co8G49Ns5sud8ItCdL2G', 2, 1, 'default.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `t_fasilitas`
--
ALTER TABLE `t_fasilitas`
  ADD PRIMARY KEY (`id_fasilitas`);

--
-- Indexes for table `t_instruktur`
--
ALTER TABLE `t_instruktur`
  ADD PRIMARY KEY (`id_instruktur`);

--
-- Indexes for table `t_jadwal`
--
ALTER TABLE `t_jadwal`
  ADD PRIMARY KEY (`id_jadwal`);

--
-- Indexes for table `t_jenis_senam`
--
ALTER TABLE `t_jenis_senam`
  ADD PRIMARY KEY (`id_senam`);

--
-- Indexes for table `t_level`
--
ALTER TABLE `t_level`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_member`
--
ALTER TABLE `t_member`
  ADD PRIMARY KEY (`idm`) USING BTREE;

--
-- Indexes for table `t_paket`
--
ALTER TABLE `t_paket`
  ADD PRIMARY KEY (`id_paket`);

--
-- Indexes for table `t_setingpaket`
--
ALTER TABLE `t_setingpaket`
  ADD PRIMARY KEY (`id_setingpaket`);

--
-- Indexes for table `t_transfasilitas`
--
ALTER TABLE `t_transfasilitas`
  ADD PRIMARY KEY (`id_transfasilitas`);

--
-- Indexes for table `t_transisipaket`
--
ALTER TABLE `t_transisipaket`
  ADD PRIMARY KEY (`id_transisip`);

--
-- Indexes for table `t_transjenissenam`
--
ALTER TABLE `t_transjenissenam`
  ADD PRIMARY KEY (`id_transsenam`);

--
-- Indexes for table `t_transpaket`
--
ALTER TABLE `t_transpaket`
  ADD PRIMARY KEY (`id_transp`);

--
-- Indexes for table `t_user`
--
ALTER TABLE `t_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `t_instruktur`
--
ALTER TABLE `t_instruktur`
  MODIFY `id_instruktur` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `t_jadwal`
--
ALTER TABLE `t_jadwal`
  MODIFY `id_jadwal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `t_level`
--
ALTER TABLE `t_level`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `t_member`
--
ALTER TABLE `t_member`
  MODIFY `idm` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;

--
-- AUTO_INCREMENT for table `t_setingpaket`
--
ALTER TABLE `t_setingpaket`
  MODIFY `id_setingpaket` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=109;

--
-- AUTO_INCREMENT for table `t_transfasilitas`
--
ALTER TABLE `t_transfasilitas`
  MODIFY `id_transfasilitas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `t_transisipaket`
--
ALTER TABLE `t_transisipaket`
  MODIFY `id_transisip` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=215;

--
-- AUTO_INCREMENT for table `t_transjenissenam`
--
ALTER TABLE `t_transjenissenam`
  MODIFY `id_transsenam` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
