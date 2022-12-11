-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 11, 2022 at 04:34 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jadwal_sidang_tugas_akhir`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_acak_akhir`
--

CREATE TABLE `data_acak_akhir` (
  `kode_akhir` varchar(10) NOT NULL,
  `hari` varchar(10) NOT NULL,
  `jam` varchar(10) NOT NULL,
  `ruangan` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_acak_akhir`
--

INSERT INTO `data_acak_akhir` (`kode_akhir`, `hari`, `jam`, `ruangan`) VALUES
('2', '1', '2', '2'),
('3', '1', '3', '1');

-- --------------------------------------------------------

--
-- Table structure for table `data_acak_semhas`
--

CREATE TABLE `data_acak_semhas` (
  `kode_semhas` varchar(10) NOT NULL,
  `hari` varchar(10) NOT NULL,
  `jam` varchar(10) NOT NULL,
  `ruangan` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_acak_semhas`
--

INSERT INTO `data_acak_semhas` (`kode_semhas`, `hari`, `jam`, `ruangan`) VALUES
('1', '3', '3', '5');

-- --------------------------------------------------------

--
-- Table structure for table `data_acak_up`
--

CREATE TABLE `data_acak_up` (
  `kode_up` varchar(10) NOT NULL,
  `hari` varchar(10) NOT NULL,
  `jam` varchar(10) NOT NULL,
  `ruangan` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_acak_up`
--

INSERT INTO `data_acak_up` (`kode_up`, `hari`, `jam`, `ruangan`) VALUES
('1', '2', '1', '1'),
('2', '4', '1', '1'),
('3', '5', '4', '1'),
('4', '3', '1', '2'),
('5', '3', '2', '1'),
('7', '2', '5', '1'),
('8', '3', '2', '3'),
('9', '5', '4', '1'),
('10', '4', '2', '1'),
('12', '4', '1', '2'),
('13', '1', '4', '3'),
('18', '2', '1', '1'),
('19', '3', '4', '2'),
('20', '1', '1', '1');

-- --------------------------------------------------------

--
-- Table structure for table `dosen`
--

CREATE TABLE `dosen` (
  `id_dosen` char(12) NOT NULL,
  `nama_dosen` varchar(50) NOT NULL,
  `username` varchar(25) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `notlp` varchar(13) NOT NULL,
  `email` varchar(50) NOT NULL,
  `jurusan` varchar(9) NOT NULL,
  `status_dos` char(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dosen`
--

INSERT INTO `dosen` (`id_dosen`, `nama_dosen`, `username`, `alamat`, `notlp`, `email`, `jurusan`, `status_dos`) VALUES
('0001', 'tes', 'tes1', '', '', 'admin@gmail.com', 'TIF', '13'),
('0004', 'teguh', 'teguh', '', '', 'teguh@gmail.com', 'DKV', '14'),
('01', 'admin', 'admin', '-', '-', '-', '', '11'),
('0301095902', 'Yustina Sri Suharini, MT', 'buyustina', '', '', 'yustin@gmail.com', 'IF', '14'),
('0305128109', 'Melani Indriasari, M. Kom', 'melani', '', '', 'melani@gmail.com', 'IF', '14'),
('0309088101', 'Sunarto, M. Kom', 'sunarto', '', '', 'sunarto@gmail.com', 'IF', '14'),
('1', 'informatika', 'informatika', '', '', '', 'IF', '13'),
('1151900001', 'Hamdan Fauzaan', 'Hamdan', '', '', 'hamdan@gmail.com', 'IF', '15'),
('1151900003', 'Godam Kharisma Jaya', 'godam', '', '', 'godam@gmail.com', 'IF', '15'),
('1151900011', 'Kelfin Maulana', 'kelfin', '', '', 'kelfin@gmail.com', 'IF', '15'),
('1151900030', 'Luthfiya Rifqi Bahasuan', 'luffy', '', '', 'luffy@gmail.com', 'IF', '15'),
('1151900031', 'Nur Apita Lia Andini', 'tata', '', '', 'tata@gmail.com', 'IF', '15'),
('1241244', 'Koordinator TA', 'prodi', '', '', 'prodi@gmail.com', 'IF', '13'),
('2', 'dkv', 'dkv', '', '', '', 'DKV', '13'),
('2001', 'dendi', 'dendi', '', '', 'dendi@gmail.com', 'DKV', '14'),
('3', 'industri', 'industri', '', '', '', 'TI', '13'),
('99', 'akademik', 'akademik', '', '08123212121', 'akademik@sttb.com', '', '12'),
('999', 'WK1', 'wk1', '-', '-', 'WK1@sttb.com', '-', '15'),
('DOSTI01', 'GEA ARISTI, ST., M.KOM', 'bugea', '', '', 'geaaristi@gmail.com', 'TI', '14'),
('DOSTI02', 'YUSUF SUMARYANA, ST., M.KOM', 'payusuf', '', '', 'yusufsumaryana@gmail.com', 'IF', '14'),
('DOSTI03', 'ASO SUDIARJO, M.KOM', 'paaso', '', '', 'asosudiarjo@gmail.com', 'IF', '14'),
('DOSTI04', 'RUUHWAN, ST., M.KOM', 'paruuhwan', '', '', 'ruuhwan@gmail.com', 'IF', '14'),
('DOSTI05', 'RANDI RIZAL, ST., M.KOM', 'parandi', '', '', 'randirizal@gmail.com', 'IF', '14'),
('DOSTI06', 'MISSI HIKMATYAR, ST., M.KOM', 'pamissi', '', '', 'missihikmatyar@gmail.com', 'IF', '14');

-- --------------------------------------------------------

--
-- Table structure for table `hari`
--

CREATE TABLE `hari` (
  `kode_hari` int(10) NOT NULL,
  `nama_hari` varchar(50) DEFAULT NULL,
  `keterangan_hari` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hari`
--

INSERT INTO `hari` (`kode_hari`, `nama_hari`, `keterangan_hari`) VALUES
(1, 'Senin', 'RP'),
(2, 'Selasa', 'RP'),
(3, 'Rabu', 'RP'),
(4, 'Kamis', 'RP'),
(5, 'Jumat', 'RP');

-- --------------------------------------------------------

--
-- Table structure for table `jadwal_akhir`
--

CREATE TABLE `jadwal_akhir` (
  `kode_jadwal` varchar(20) NOT NULL,
  `kode_akhir` varchar(10) NOT NULL,
  `hari` varchar(10) NOT NULL,
  `jam` varchar(10) NOT NULL,
  `ruangan` varchar(10) NOT NULL,
  `tahun_ajaran` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jadwal_akhir`
--

INSERT INTO `jadwal_akhir` (`kode_jadwal`, `kode_akhir`, `hari`, `jam`, `ruangan`, `tahun_ajaran`) VALUES
('TA20221112007', '1', '4', '1', '1', '2022 - 2023'),
('TA20221112007', '1', '3', '1', '1', '2022 - 2023'),
('TA20221112007', '2', '1', '5', '1', '2022 - 2023'),
('TA20221112008', '2', '1', '2', '2', '2022 - 2023'),
('TA20221112008', '3', '1', '3', '1', '2022 - 2023');

-- --------------------------------------------------------

--
-- Table structure for table `jadwal_semhas`
--

CREATE TABLE `jadwal_semhas` (
  `kode_jadwal` varchar(20) NOT NULL,
  `kode_semhas` varchar(10) NOT NULL,
  `hari` varchar(10) NOT NULL,
  `jam` varchar(10) NOT NULL,
  `ruangan` varchar(10) NOT NULL,
  `tahun_ajaran` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jadwal_semhas`
--

INSERT INTO `jadwal_semhas` (`kode_jadwal`, `kode_semhas`, `hari`, `jam`, `ruangan`, `tahun_ajaran`) VALUES
('SH20220912001', '1', '3', '3', '5', '2022 - 2023');

-- --------------------------------------------------------

--
-- Table structure for table `jadwal_up`
--

CREATE TABLE `jadwal_up` (
  `kode_jadwal` varchar(20) NOT NULL,
  `kode_up` varchar(10) NOT NULL,
  `hari` varchar(10) NOT NULL,
  `jam` varchar(10) NOT NULL,
  `ruangan` varchar(10) NOT NULL,
  `tahun_ajaran` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jadwal_up`
--

INSERT INTO `jadwal_up` (`kode_jadwal`, `kode_up`, `hari`, `jam`, `ruangan`, `tahun_ajaran`) VALUES
('UP20221112001', '1', '3', '2', '3', '2022 - 2023'),
('UP20221112001', '2', '3', '1', '1', '2022 - 2023'),
('UP20221112001', '3', '2', '5', '2', '2022 - 2023'),
('UP20221112001', '4', '1', '2', '1', '2022 - 2023'),
('UP20221112001', '5', '2', '1', '3', '2022 - 2023'),
('UP20221112001', '7', '1', '5', '3', '2022 - 2023'),
('UP20221112001', '8', '3', '1', '3', '2022 - 2023'),
('UP20221112001', '9', '3', '1', '2', '2022 - 2023'),
('UP20221112001', '10', '3', '5', '1', '2022 - 2023'),
('UP20221112001', '12', '3', '3', '1', '2022 - 2023'),
('UP20221112001', '13', '4', '5', '2', '2022 - 2023'),
('UP20221112001', '14', '1', '3', '1', '2022 - 2023'),
('UP20221112002', '1', '1', '1', '1', '2022 - 2023'),
('UP20221112002', '2', '1', '1', '2', '2022 - 2023'),
('UP20221112002', '3', '4', '2', '1', '2022 - 2023'),
('UP20221112002', '4', '2', '3', '1', '2022 - 2023'),
('UP20221112002', '5', '1', '1', '1', '2022 - 2023'),
('UP20221112002', '7', '2', '4', '1', '2022 - 2023'),
('UP20221112002', '8', '5', '1', '1', '2022 - 2023'),
('UP20221112002', '9', '1', '3', '3', '2022 - 2023'),
('UP20221112002', '10', '5', '5', '2', '2022 - 2023'),
('UP20221112002', '12', '5', '2', '2', '2022 - 2023'),
('UP20221112002', '13', '3', '2', '1', '2022 - 2023'),
('UP20221112002', '14', '1', '1', '1', '2022 - 2023'),
('UP20221112003', '1', '2', '1', '3', '2022 - 2023'),
('UP20221112003', '2', '4', '4', '2', '2022 - 2023'),
('UP20221112003', '3', '2', '1', '1', '2022 - 2023'),
('UP20221112003', '4', '5', '2', '3', '2022 - 2023'),
('UP20221112003', '5', '1', '2', '1', '2022 - 2023'),
('UP20221112003', '7', '3', '2', '1', '2022 - 2023'),
('UP20221112003', '8', '5', '2', '2', '2022 - 2023'),
('UP20221112003', '9', '2', '5', '1', '2022 - 2023'),
('UP20221112003', '10', '1', '5', '1', '2022 - 2023'),
('UP20221112003', '12', '3', '1', '3', '2022 - 2023'),
('UP20221112003', '13', '2', '3', '3', '2022 - 2023'),
('UP20221112003', '14', '5', '4', '1', '2022 - 2023'),
('UP20221112003', '15', '5', '1', '3', '2022 - 2023'),
('UP20221112004', '1', '4', '1', '1', '2022 - 2023'),
('UP20221112004', '2', '4', '2', '3', '2022 - 2023'),
('UP20221112004', '3', '3', '1', '1', '2022 - 2023'),
('UP20221112004', '4', '2', '2', '1', '2022 - 2023'),
('UP20221112004', '5', '5', '1', '3', '2022 - 2023'),
('UP20221112004', '7', '5', '1', '1', '2022 - 2023'),
('UP20221112004', '8', '1', '1', '2', '2022 - 2023'),
('UP20221112004', '9', '3', '1', '1', '2022 - 2023'),
('UP20221112004', '10', '3', '3', '2', '2022 - 2023'),
('UP20221112004', '12', '5', '3', '1', '2022 - 2023'),
('UP20221112004', '13', '5', '1', '3', '2022 - 2023'),
('UP20221112004', '14', '4', '1', '2', '2022 - 2023'),
('UP20221112004', '15', '3', '5', '3', '2022 - 2023'),
('UP20221112004', '16', '2', '5', '1', '2022 - 2023'),
('UP20221112004', '17', '5', '1', '2', '2022 - 2023'),
('UP20221112005', '1', '4', '1', '1', '2022 - 2023'),
('UP20221112005', '2', '3', '3', '2', '2022 - 2023'),
('UP20221112005', '3', '3', '1', '3', '2022 - 2023'),
('UP20221112005', '4', '1', '5', '1', '2022 - 2023'),
('UP20221112005', '5', '2', '5', '1', '2022 - 2023'),
('UP20221112005', '7', '5', '3', '2', '2022 - 2023'),
('UP20221112005', '8', '1', '5', '1', '2022 - 2023'),
('UP20221112005', '9', '5', '2', '3', '2022 - 2023'),
('UP20221112005', '10', '3', '3', '3', '2022 - 2023'),
('UP20221112005', '12', '2', '3', '1', '2022 - 2023'),
('UP20221112005', '13', '5', '4', '2', '2022 - 2023'),
('UP20221112005', '18', '2', '3', '3', '2022 - 2023'),
('UP20221112006', '1', '1', '2', '1', '2022 - 2023'),
('UP20221112006', '2', '1', '5', '2', '2022 - 2023'),
('UP20221112006', '3', '1', '1', '1', '2022 - 2023'),
('UP20221112006', '4', '1', '5', '1', '2022 - 2023'),
('UP20221112006', '5', '3', '1', '2', '2022 - 2023'),
('UP20221112006', '7', '1', '1', '2', '2022 - 2023'),
('UP20221112006', '8', '1', '1', '1', '2022 - 2023'),
('UP20221112006', '9', '4', '2', '3', '2022 - 2023'),
('UP20221112006', '10', '2', '2', '1', '2022 - 2023'),
('UP20221112006', '12', '1', '1', '1', '2022 - 2023'),
('UP20221112006', '13', '3', '2', '2', '2022 - 2023'),
('UP20221112006', '18', '4', '3', '1', '2022 - 2023'),
('UP20221112006', '19', '5', '4', '1', '2022 - 2023'),
('UP20221112007', '1', '2', '1', '1', '2022 - 2023'),
('UP20221112007', '2', '4', '1', '1', '2022 - 2023'),
('UP20221112007', '3', '5', '4', '1', '2022 - 2023'),
('UP20221112007', '4', '3', '1', '2', '2022 - 2023'),
('UP20221112007', '5', '3', '2', '1', '2022 - 2023'),
('UP20221112007', '7', '2', '5', '1', '2022 - 2023'),
('UP20221112007', '8', '3', '2', '3', '2022 - 2023'),
('UP20221112007', '9', '5', '4', '1', '2022 - 2023'),
('UP20221112007', '10', '4', '2', '1', '2022 - 2023'),
('UP20221112007', '12', '4', '1', '2', '2022 - 2023'),
('UP20221112007', '13', '1', '4', '3', '2022 - 2023'),
('UP20221112007', '18', '2', '1', '1', '2022 - 2023'),
('UP20221112007', '19', '3', '4', '2', '2022 - 2023'),
('UP20221112007', '20', '1', '1', '1', '2022 - 2023');

-- --------------------------------------------------------

--
-- Table structure for table `jadwal_up_fix`
--

CREATE TABLE `jadwal_up_fix` (
  `kode_jadwal` varchar(20) NOT NULL,
  `kode_kelas` varchar(20) NOT NULL,
  `hari` varchar(10) NOT NULL,
  `jam` varchar(10) NOT NULL,
  `ruangan` varchar(10) NOT NULL,
  `tahun_ajaran` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `jam`
--

CREATE TABLE `jam` (
  `kode_jam` int(10) NOT NULL,
  `range_jam` varchar(50) DEFAULT NULL,
  `keterangan` char(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jam`
--

INSERT INTO `jam` (`kode_jam`, `range_jam`, `keterangan`) VALUES
(1, '08.00-09.00', 'RP'),
(2, '09.00-10.00', 'RP'),
(3, '10.00-11.00', 'RP'),
(4, '11.00-12.00', 'RP'),
(5, '13.00-14.00', 'RP');

-- --------------------------------------------------------

--
-- Table structure for table `jurusan`
--

CREATE TABLE `jurusan` (
  `kode_jurusan` int(11) NOT NULL,
  `nama_jurusan` varchar(5) NOT NULL,
  `keterangan` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jurusan`
--

INSERT INTO `jurusan` (`kode_jurusan`, `nama_jurusan`, `keterangan`) VALUES
(1, 'IF', 'teknik informatika'),
(2, 'TS', 'teknik sipil'),
(3, 'AK', 'akuntasi'),
(4, 'MNJ', 'management'),
(5, 'PGSD', 'pgsd'),
(6, 'ARG', 'argoteknologi'),
(7, 'ARB', 'argibisnis');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `kode_kategori` int(10) NOT NULL,
  `nama_kategori` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`kode_kategori`, `nama_kategori`) VALUES
(1, 'analisis'),
(2, 'jaringan'),
(3, 'sistem informasi'),
(4, 'multimedia'),
(5, 'robotika');

-- --------------------------------------------------------

--
-- Table structure for table `kategori_dos`
--

CREATE TABLE `kategori_dos` (
  `kode_kategori_dos` int(10) NOT NULL,
  `id_dosen` varchar(25) NOT NULL,
  `nama_dosen` varchar(50) NOT NULL,
  `kategori` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kategori_dos`
--

INSERT INTO `kategori_dos` (`kode_kategori_dos`, `id_dosen`, `nama_dosen`, `kategori`) VALUES
(1, 'DOSTI01', 'GEA ARISTI, ST., M.KOM', 1),
(3, 'DOSTI01', 'GEA ARISTI, ST., M.KOM', 3),
(6, 'DOSTI02', 'YUSUF SUMARYANA, ST., M.KOM', 3),
(7, 'DOSTI02', 'YUSUF SUMARYANA, ST., M.KOM', 4),
(9, 'DOSTI03', 'ASO SUDIARJO, M.KOM', 1),
(13, 'DOSTI03', 'ASO SUDIARJO, M.KOM', 5),
(15, 'DOSTI04', 'RUUHWAN, ST., M.KOM', 2),
(18, 'DOSTI05', 'RANDI RIZAL, ST., M.KOM', 2),
(19, 'DOSTI05', 'RANDI RIZAL, ST., M.KOM', 3),
(21, 'DOSTI05', 'RANDI RIZAL, ST., M.KOM', 5),
(32, 'DOSTI06', 'MISSI HIKMATYAR, ST., M.KOM', 3),
(33, 'DOSTI06', 'MISSI HIKMATYAR, ST., M.KOM', 5),
(34, 'DOSTI04', 'RUUHWAN, ST., M.KOM', 3),
(35, 'DOSTI06', 'MISSI HIKMATYAR, ST., M.KOM', 1),
(36, '0305128109', 'Melani Indriasari, M. Kom', 1),
(37, '0305128109', 'Melani Indriasari, M. Kom', 2),
(38, '0305128109', 'Melani Indriasari, M. Kom', 3),
(39, '0305128109', 'Melani Indriasari, M. Kom', 4);

-- --------------------------------------------------------

--
-- Table structure for table `kelas`
--

CREATE TABLE `kelas` (
  `id_kelas` char(8) NOT NULL,
  `nama_kelas` varchar(10) NOT NULL,
  `jurusan` varchar(4) NOT NULL,
  `populasi` int(3) NOT NULL,
  `sesi` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `ketersediaan`
--

CREATE TABLE `ketersediaan` (
  `kode_ketersediaan` int(11) NOT NULL,
  `id_dosen` char(12) NOT NULL,
  `nama_dosen` varchar(50) NOT NULL,
  `hari` char(2) NOT NULL,
  `sesi` char(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ketersediaan`
--

INSERT INTO `ketersediaan` (`kode_ketersediaan`, `id_dosen`, `nama_dosen`, `hari`, `sesi`) VALUES
(1, 'DOSTI01', 'GEA ARISTI, ST., M.KOM', '1', '1'),
(2, 'DOSTI01', 'GEA ARISTI, ST., M.KOM', '1', '2'),
(3, 'DOSTI01', 'GEA ARISTI, ST., M.KOM', '1', '3'),
(4, 'DOSTI01', 'GEA ARISTI, ST., M.KOM', '2', '1'),
(5, 'DOSTI01', 'GEA ARISTI, ST., M.KOM', '2', '2'),
(6, 'DOSTI01', 'GEA ARISTI, ST., M.KOM', '2', '3'),
(7, 'DOSTI01', 'GEA ARISTI, ST., M.KOM', '3', '1'),
(8, 'DOSTI01', 'GEA ARISTI, ST., M.KOM', '3', '2'),
(9, 'DOSTI01', 'GEA ARISTI, ST., M.KOM', '3', '3'),
(10, 'DOSTI01', 'GEA ARISTI, ST., M.KOM', '4', '1'),
(11, 'DOSTI01', 'GEA ARISTI, ST., M.KOM', '4', '2'),
(12, 'DOSTI01', 'GEA ARISTI, ST., M.KOM', '4', '3'),
(13, 'DOSTI02', 'YUSUF SUMARYANA, ST., M.KOM', '2', '1'),
(14, 'DOSTI02', 'YUSUF SUMARYANA, ST., M.KOM', '2', '2'),
(15, 'DOSTI02', 'YUSUF SUMARYANA, ST., M.KOM', '2', '3'),
(16, 'DOSTI02', 'YUSUF SUMARYANA, ST., M.KOM', '3', '1'),
(17, 'DOSTI02', 'YUSUF SUMARYANA, ST., M.KOM', '3', '2'),
(18, 'DOSTI02', 'YUSUF SUMARYANA, ST., M.KOM', '3', '3'),
(19, 'DOSTI02', 'YUSUF SUMARYANA, ST., M.KOM', '5', '1'),
(20, 'DOSTI02', 'YUSUF SUMARYANA, ST., M.KOM', '5', '2'),
(21, 'DOSTI02', 'YUSUF SUMARYANA, ST., M.KOM', '5', '3'),
(22, 'DOSTI02', 'YUSUF SUMARYANA, ST., M.KOM', '4', '1'),
(23, 'DOSTI02', 'YUSUF SUMARYANA, ST., M.KOM', '4', '2'),
(24, 'DOSTI02', 'YUSUF SUMARYANA, ST., M.KOM', '4', '3'),
(25, 'DOSTI04', 'RUUHWAN, ST., M.KOM', '1', '1'),
(26, 'DOSTI04', 'RUUHWAN, ST., M.KOM', '1', '2'),
(27, 'DOSTI04', 'RUUHWAN, ST., M.KOM', '3', '1'),
(28, 'DOSTI04', 'RUUHWAN, ST., M.KOM', '3', '2'),
(29, 'DOSTI04', 'RUUHWAN, ST., M.KOM', '4', '1'),
(30, 'DOSTI04', 'RUUHWAN, ST., M.KOM', '4', '2'),
(31, 'DOSTI04', 'RUUHWAN, ST., M.KOM', '5', '1'),
(32, 'DOSTI04', 'RUUHWAN, ST., M.KOM', '5', '2'),
(33, 'DOSTI03', 'ASO SUDIARJO, M.KOM', '1', '1'),
(34, 'DOSTI03', 'ASO SUDIARJO, M.KOM', '1', '2'),
(35, 'DOSTI03', 'ASO SUDIARJO, M.KOM', '1', '3'),
(36, 'DOSTI03', 'ASO SUDIARJO, M.KOM', '1', '4'),
(37, 'DOSTI03', 'ASO SUDIARJO, M.KOM', '1', '5'),
(38, 'DOSTI03', 'ASO SUDIARJO, M.KOM', '2', '1'),
(39, 'DOSTI03', 'ASO SUDIARJO, M.KOM', '2', '2'),
(40, 'DOSTI03', 'ASO SUDIARJO, M.KOM', '2', '3'),
(41, 'DOSTI03', 'ASO SUDIARJO, M.KOM', '2', '4'),
(42, 'DOSTI03', 'ASO SUDIARJO, M.KOM', '2', '5'),
(43, 'DOSTI03', 'ASO SUDIARJO, M.KOM', '3', '1'),
(44, 'DOSTI03', 'ASO SUDIARJO, M.KOM', '3', '2'),
(45, 'DOSTI03', 'ASO SUDIARJO, M.KOM', '3', '3'),
(46, 'DOSTI03', 'ASO SUDIARJO, M.KOM', '3', '4'),
(47, 'DOSTI03', 'ASO SUDIARJO, M.KOM', '3', '5'),
(48, 'DOSTI03', 'ASO SUDIARJO, M.KOM', '4', '1'),
(49, 'DOSTI03', 'ASO SUDIARJO, M.KOM', '4', '2'),
(50, 'DOSTI03', 'ASO SUDIARJO, M.KOM', '4', '3'),
(51, 'DOSTI03', 'ASO SUDIARJO, M.KOM', '4', '4'),
(52, 'DOSTI03', 'ASO SUDIARJO, M.KOM', '4', '5'),
(53, 'DOSTI03', 'ASO SUDIARJO, M.KOM', '5', '1'),
(54, 'DOSTI03', 'ASO SUDIARJO, M.KOM', '5', '2'),
(55, 'DOSTI03', 'ASO SUDIARJO, M.KOM', '5', '3'),
(56, 'DOSTI03', 'ASO SUDIARJO, M.KOM', '5', '4'),
(57, 'DOSTI03', 'ASO SUDIARJO, M.KOM', '5', '5'),
(58, 'DOSTI05', 'RANDI RIZAL, ST., M.KOM', '1', '1'),
(59, 'DOSTI05', 'RANDI RIZAL, ST., M.KOM', '1', '2'),
(60, 'DOSTI05', 'RANDI RIZAL, ST., M.KOM', '3', '1'),
(61, 'DOSTI05', 'RANDI RIZAL, ST., M.KOM', '3', '2'),
(62, 'DOSTI05', 'RANDI RIZAL, ST., M.KOM', '4', '1'),
(63, 'DOSTI05', 'RANDI RIZAL, ST., M.KOM', '4', '2'),
(64, 'DOSTI05', 'RANDI RIZAL, ST., M.KOM', '4', '3'),
(83, 'DOSTI06', 'MISSI HIKMATYAR, ST., M.KOM', '1', '1'),
(84, 'DOSTI06', 'MISSI HIKMATYAR, ST., M.KOM', '1', '2'),
(85, 'DOSTI06', 'MISSI HIKMATYAR, ST., M.KOM', '1', '3'),
(86, 'DOSTI06', 'MISSI HIKMATYAR, ST., M.KOM', '2', '1'),
(87, 'DOSTI06', 'MISSI HIKMATYAR, ST., M.KOM', '2', '2'),
(88, 'DOSTI06', 'MISSI HIKMATYAR, ST., M.KOM', '2', '3'),
(89, 'DOSTI06', 'MISSI HIKMATYAR, ST., M.KOM', '3', '1'),
(90, 'DOSTI06', 'MISSI HIKMATYAR, ST., M.KOM', '3', '2'),
(91, 'DOSTI06', 'MISSI HIKMATYAR, ST., M.KOM', '3', '3'),
(92, 'DOSTI06', 'MISSI HIKMATYAR, ST., M.KOM', '2', '1'),
(93, 'DOSTI06', 'MISSI HIKMATYAR, ST., M.KOM', '2', '2'),
(94, 'DOSTI06', 'MISSI HIKMATYAR, ST., M.KOM', '2', '3'),
(95, 'DOSTI06', 'MISSI HIKMATYAR, ST., M.KOM', '2', '4'),
(96, 'DOSTI06', 'MISSI HIKMATYAR, ST., M.KOM', '2', '5'),
(97, '0301095902', 'Yustina Sri Suharini, MT', '2', '1'),
(98, '0301095902', 'Yustina Sri Suharini, MT', '2', '2'),
(99, '0301095902', 'Yustina Sri Suharini, MT', '2', '3'),
(100, '0301095902', 'Yustina Sri Suharini, MT', '2', '4'),
(101, '0301095902', 'Yustina Sri Suharini, MT', '3', '1'),
(102, '0301095902', 'Yustina Sri Suharini, MT', '3', '2'),
(103, '0301095902', 'Yustina Sri Suharini, MT', '3', '3'),
(104, '0305128109', 'Melani Indriasari, M. Kom', '1', '1'),
(105, '0305128109', 'Melani Indriasari, M. Kom', '1', '4'),
(106, '0305128109', 'Melani Indriasari, M. Kom', '3', '3'),
(107, '0305128109', 'Melani Indriasari, M. Kom', '3', '4'),
(108, '0305128109', 'Melani Indriasari, M. Kom', '3', '5');

-- --------------------------------------------------------

--
-- Table structure for table `penelitian`
--

CREATE TABLE `penelitian` (
  `kode_penelitian` char(15) NOT NULL,
  `nim` int(25) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `judul_penelitian` varchar(200) NOT NULL,
  `jurusan` varchar(4) NOT NULL,
  `jml_sks` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `penelitian`
--

INSERT INTO `penelitian` (`kode_penelitian`, `nim`, `nama`, `judul_penelitian`, `jurusan`, `jml_sks`) VALUES
('IFTA001', 1151900011, 'Kelfin Maulana', 'aaaaaaaaaa', 'IF', 1),
('IFTA002', 1151900011, '', 'Rancang Bangun Alat Monitoring Kecepatan Angin Dengan Koneksi Wireless Menggunakan Arduino Uno', 'IF', 1),
('IFTA003', 0, '', 'Sentimen analisis pilpress menggunakan Naiv bayes', 'IF', 1),
('IFTA004', 1151900003, '1151900003', 'Perancangan Analisis SIstem Pembuatan Jadwal SIdang', 'IF', 1),
('IFTA005', 1151900001, '1151900001', 'Sentimen analisis pilpress menggunakan Naiv bayes', 'IF', 1),
('IFTA006', 1151900031, 'Nur Apita Lia Andini', 'Penelitian Tentang analisis Sistem Informasi', 'IF', 1),
('IFTA007', 1151900030, 'Luthfiya Rifqi Bahasuan', 'Analisis Perancangan Model Aritmatika', 'IF', 1),
('TITA001', 1703010008, 'Panji Petualang', 'RANCANG BANGUN SISTEM INFORMASI HEWAN TERNAK KAMBING PADA PETERNAKAN HAJI AAN BERBASIS WEB DENGAN MENGGUNAKAN METODE AGLIE', 'TI', 1),
('TITA002', 1703010004, 'TRISNA WAHANA', 'SISTEM INFORMASI GEOGRAFIS SIMULASI BENCANA BANJIR BERBASIS WEB', 'TI', 1),
('TITA003', 1703010047, 'METO RIZKY MMELMI', 'IMPLEMENTASI ALGORITMA APRIORI PADA TRANSAKSI PENYEWAAN OUTDOR', 'TI', 1),
('TITA004', 1703010040, 'EGA NUGRAHA', 'SITEM BUKA KUNCI OTOMATIS RFID BERDASARKAN SI PENJADWALAN GENETIKA', 'TI', 1),
('TITA005', 1703010077, 'JULIA REFOLIANI', 'SISTEM INFORMASI DATA HASIL TERA UKUR DI UPTD BANJAR BERBASIS WEB MENGGUNAKAN METODE PROTOTYPE', 'TI', 1),
('TITA006', 1703010074, 'BELA AYU  FEBRIANI', 'SISTEM INFORMASI PENGELOLAAN DATA PENDUDUK KELURAHAN KESEMENAK BERBASIS WEB MENGGUNAKAN METODE PROTOTYPE', 'TI', 1),
('TITA007', 1703010027, 'IRPAN PAUJI', 'PENGEMBANGAN SISTEM PENJADWALAN SKRIPSI DENGAN MENGGUNAKAN ALGORITMA GENETIKA', 'TI', 1),
('TITA008', 1703010095, 'GARNIS TRI LASMI', 'AUDIT TATA KELOLA TEKNOLOGI INFORMASI MENGGUNAKAN FRAMEWORK COBIT 5 DOMAIN MEA', 'TI', 1),
('TITA009', 1703010070, 'ROSNA MIFTAHUL JANAH', 'SISTEM INFORMASI MANAGEMENT PERALATAN KEMETROLOGIAN BERBASIS WEB MENGGUNAKAN METODE XP', 'TI', 1),
('TITA010', 1703010022, 'DEVI NURFAILASARI', 'IMPLEMENTASI ALGORITMA LEVENSHTEN DALAM PENCARIAN JUDUL SKRIPSI', 'TI', 1),
('TITA011', 1703010011, 'shakilla', 'naon we', 'TI', 1);

-- --------------------------------------------------------

--
-- Table structure for table `plot_akhir`
--

CREATE TABLE `plot_akhir` (
  `kode_akhir` int(10) NOT NULL,
  `penelitian` varchar(10) NOT NULL,
  `mhs` varchar(50) NOT NULL,
  `dosen` varchar(50) NOT NULL,
  `dosen2` varchar(50) NOT NULL,
  `kategori` int(10) NOT NULL,
  `dosen3` varchar(50) NOT NULL,
  `dosen4` varchar(50) NOT NULL,
  `jurusan` varchar(10) NOT NULL,
  `keterangan` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `plot_akhir`
--

INSERT INTO `plot_akhir` (`kode_akhir`, `penelitian`, `mhs`, `dosen`, `dosen2`, `kategori`, `dosen3`, `dosen4`, `jurusan`, `keterangan`) VALUES
(2, 'IFTA006', 'Nur Apita Lia Andini', 'Yustina Sri Suharini, MT', 'Sunarto, M. Kom', 3, 'GEA ARISTI, ST., M.KOM', 'YUSUF SUMARYANA, ST., M.KOM', 'IF', ''),
(3, 'IFTA007', 'Luthfiya Rifqi Bahasuan', 'Yustina Sri Suharini, MT', 'Melani Indriasari, M. Kom', 1, 'GEA ARISTI, ST., M.KOM', 'ASO SUDIARJO, M.KOM', 'IF', '');

-- --------------------------------------------------------

--
-- Table structure for table `plot_semhas`
--

CREATE TABLE `plot_semhas` (
  `kode_semhas` int(25) NOT NULL,
  `penelitian` varchar(20) NOT NULL,
  `dosen` varchar(50) NOT NULL,
  `dosen2` varchar(50) NOT NULL,
  `jurusan` varchar(11) NOT NULL,
  `keterangan` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `plot_semhas`
--

INSERT INTO `plot_semhas` (`kode_semhas`, `penelitian`, `dosen`, `dosen2`, `jurusan`, `keterangan`) VALUES
(1, 'TITA005', 'GEA ARISTI, ST., M.KOM', 'RUUHWAN, ST., M.KOM', 'TI', 'lulus'),
(2, 'TITA008', 'GEA ARISTI, ST., M.KOM', 'RUUHWAN, ST., M.KOM', 'TI', 'lulus'),
(3, 'IFTA006', 'Yustina Sri Suharini, MT', 'Sunarto, M. Kom', 'IF', 'lulus'),
(4, 'IFTA007', 'Yustina Sri Suharini, MT', 'Melani Indriasari, M. Kom', 'IF', 'lulus');

-- --------------------------------------------------------

--
-- Table structure for table `plot_up`
--

CREATE TABLE `plot_up` (
  `kode_up` int(11) NOT NULL,
  `penelitian` varchar(200) NOT NULL,
  `dosen` varchar(50) NOT NULL,
  `dosen2` varchar(50) NOT NULL,
  `jurusan` varchar(25) NOT NULL,
  `keterangan` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `plot_up`
--

INSERT INTO `plot_up` (`kode_up`, `penelitian`, `dosen`, `dosen2`, `jurusan`, `keterangan`) VALUES
(1, 'TITA001', 'GEA ARISTI, ST., M.KOM', 'MISSI HIKMATYAR, ST., M.KOM', 'TI', ''),
(2, 'TITA002', 'MISSI HIKMATYAR, ST., M.KOM', 'GEA ARISTI, ST., M.KOM', 'TI', ''),
(3, 'TITA003', 'RUUHWAN, ST., M.KOM', 'RANDI RIZAL, ST., M.KOM', 'TI', ''),
(4, 'TITA004', 'MISSI HIKMATYAR, ST., M.KOM', 'GEA ARISTI, ST., M.KOM', 'TI', 'lulus'),
(5, 'TITA005', 'GEA ARISTI, ST., M.KOM', 'RUUHWAN, ST., M.KOM', 'TI', 'lulus'),
(7, 'TITA006', 'GEA ARISTI, ST., M.KOM', 'RUUHWAN, ST., M.KOM', 'TI', 'lulus'),
(8, 'TITA008', 'GEA ARISTI, ST., M.KOM', 'RUUHWAN, ST., M.KOM', 'TI', 'lulus'),
(9, 'TITA009', 'GEA ARISTI, ST., M.KOM', 'RUUHWAN, ST., M.KOM', 'TI', 'lulus'),
(10, 'TITA010', 'RUUHWAN, ST., M.KOM', 'RANDI RIZAL, ST., M.KOM', 'TI', ''),
(12, 'TITA007', 'MISSI HIKMATYAR, ST., M.KOM', 'YUSUF SUMARYANA, ST., M.KOM', 'TI', 'lulus'),
(13, 'TITA011', 'ASO SUDIARJO, M.KOM', 'RUUHWAN, ST., M.KOM', 'TI', ''),
(18, 'IFTA005', 'Yustina Sri Suharini, MT', 'Sunarto, M. Kom', 'IF', 'lulus'),
(19, 'IFTA006', 'Yustina Sri Suharini, MT', 'Sunarto, M. Kom', 'IF', 'lulus'),
(20, 'IFTA007', 'Yustina Sri Suharini, MT', 'Melani Indriasari, M. Kom', 'IF', 'lulus');

-- --------------------------------------------------------

--
-- Table structure for table `ruang_belajar`
--

CREATE TABLE `ruang_belajar` (
  `kode_ruangan` int(11) NOT NULL,
  `nama_ruangan` varchar(10) NOT NULL,
  `kapasitas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ruang_belajar`
--

INSERT INTO `ruang_belajar` (`kode_ruangan`, `nama_ruangan`, `kapasitas`) VALUES
(1, '1', 35),
(2, '2', 35),
(3, '3', 35);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_dosen` char(12) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `status_log` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_dosen`, `username`, `password`, `status_log`) VALUES
('0001', 'tes1', '123', '1'),
('0003', 'randi', '123', '1'),
('0004', 'teguh', '123', '1'),
('01', 'admin', '123', '1'),
('0301095902', 'buyustina', '123', '1'),
('0305128109', 'melani', '123', '1'),
('0309088101', 'sunarto', '123', '1'),
('04214112', 'yustina', '123', '1'),
('1', 'informatika', 'kaprodi', '1'),
('1151900001', 'Hamdan', '123', '1'),
('1151900003', 'godam', '123', '1'),
('1151900011', 'kelfin', '123', '1'),
('1151900030', 'luffy', '123', '1'),
('1151900031', 'tata', '123', '1'),
('1241244', 'prodi', '123', '1'),
('2', 'dkv', 'kaprodi', '1'),
('2001', 'dendi', 'sttb123', '1'),
('3', 'industri', 'kaprodi', '1'),
('99', 'akademik', 'akademik', '1'),
('999', 'WK1', 'WK1', '1'),
('DOSTI01', 'bugea', '123', '1'),
('DOSTI02', 'payusuf', '123', '1'),
('DOSTI03', 'paaso', '123', '1'),
('DOSTI04', 'paruuhwan', '123', '1'),
('DOSTI05', 'parandi', '123', '1'),
('DOSTI06', 'pamissi', '123', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dosen`
--
ALTER TABLE `dosen`
  ADD PRIMARY KEY (`id_dosen`,`email`);

--
-- Indexes for table `hari`
--
ALTER TABLE `hari`
  ADD PRIMARY KEY (`kode_hari`);

--
-- Indexes for table `jam`
--
ALTER TABLE `jam`
  ADD PRIMARY KEY (`kode_jam`);

--
-- Indexes for table `jurusan`
--
ALTER TABLE `jurusan`
  ADD PRIMARY KEY (`kode_jurusan`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`kode_kategori`);

--
-- Indexes for table `kategori_dos`
--
ALTER TABLE `kategori_dos`
  ADD PRIMARY KEY (`kode_kategori_dos`);

--
-- Indexes for table `ketersediaan`
--
ALTER TABLE `ketersediaan`
  ADD PRIMARY KEY (`kode_ketersediaan`);

--
-- Indexes for table `penelitian`
--
ALTER TABLE `penelitian`
  ADD PRIMARY KEY (`kode_penelitian`);

--
-- Indexes for table `plot_akhir`
--
ALTER TABLE `plot_akhir`
  ADD PRIMARY KEY (`kode_akhir`);

--
-- Indexes for table `plot_semhas`
--
ALTER TABLE `plot_semhas`
  ADD PRIMARY KEY (`kode_semhas`);

--
-- Indexes for table `plot_up`
--
ALTER TABLE `plot_up`
  ADD PRIMARY KEY (`kode_up`);

--
-- Indexes for table `ruang_belajar`
--
ALTER TABLE `ruang_belajar`
  ADD PRIMARY KEY (`kode_ruangan`,`nama_ruangan`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_dosen`,`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `hari`
--
ALTER TABLE `hari`
  MODIFY `kode_hari` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `jurusan`
--
ALTER TABLE `jurusan`
  MODIFY `kode_jurusan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `kode_kategori` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `kategori_dos`
--
ALTER TABLE `kategori_dos`
  MODIFY `kode_kategori_dos` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `ketersediaan`
--
ALTER TABLE `ketersediaan`
  MODIFY `kode_ketersediaan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=109;

--
-- AUTO_INCREMENT for table `plot_akhir`
--
ALTER TABLE `plot_akhir`
  MODIFY `kode_akhir` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `plot_semhas`
--
ALTER TABLE `plot_semhas`
  MODIFY `kode_semhas` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `plot_up`
--
ALTER TABLE `plot_up`
  MODIFY `kode_up` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
