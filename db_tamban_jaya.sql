-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 04, 2020 at 08:49 PM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_tamban_jaya`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nama` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`, `nama`) VALUES
('admin', 'admin', 'Administrator Desa');

-- --------------------------------------------------------

--
-- Table structure for table `belanja`
--

DROP TABLE IF EXISTS `belanja`;
CREATE TABLE IF NOT EXISTS `belanja` (
  `kd_belanja` varchar(20) NOT NULL,
  `nama_belanja` text NOT NULL,
  PRIMARY KEY (`kd_belanja`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `belanja`
--

INSERT INTO `belanja` (`kd_belanja`, `nama_belanja`) VALUES
('5.1', 'Belanja Pegawai'),
('5.2', 'Belanja Barang dan Jasa'),
('5.3', 'Belanja Modal'),
('5.4', 'Belanja Tak Terduga');

-- --------------------------------------------------------

--
-- Table structure for table `bidang`
--

DROP TABLE IF EXISTS `bidang`;
CREATE TABLE IF NOT EXISTS `bidang` (
  `kd_bidang` tinyint(3) UNSIGNED NOT NULL,
  `nama_bidang` text NOT NULL,
  PRIMARY KEY (`kd_bidang`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bidang`
--

INSERT INTO `bidang` (`kd_bidang`, `nama_bidang`) VALUES
(1, 'BIDANG PENYELENGGARAAN PEMERINTAHAN DESA'),
(2, 'BIDANG PELAKSANAAN PEMBANGUNAN DESA'),
(3, 'BIDANG PEMBINAAN KEMASYARAKATAN DESA'),
(4, 'BIDANG PEMBERDAYAAN MASYARAKAT DESA'),
(5, 'BIDANG PENANGGULANGAN BENCANA, KEADAAN DARURAT DAN MENDESAK');

-- --------------------------------------------------------

--
-- Table structure for table `imunisasi`
--

DROP TABLE IF EXISTS `imunisasi`;
CREATE TABLE IF NOT EXISTS `imunisasi` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `nik_s` varchar(16) NOT NULL,
  `nama_s` varchar(100) NOT NULL,
  `nik_i` varchar(16) NOT NULL,
  `nama_i` varchar(100) NOT NULL,
  `no_surat` varchar(50) NOT NULL,
  `input_nama` varchar(100) NOT NULL,
  `tanggal` date NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id` (`id`),
  KEY `nik_s` (`nik_s`),
  KEY `nik_i` (`nik_i`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `imunisasi`
--

INSERT INTO `imunisasi` (`id`, `nik_s`, `nama_s`, `nik_i`, `nama_i`, `no_surat`, `input_nama`, `tanggal`) VALUES
(1, '1111', 'Budi', '2222', 'Ani', '001/440/Ds-TJ/PEMDES/VI/2020', 'percobaan input', '2020-06-21'),
(2, '2222', 'Ani', '1111', 'Budi', '002/440/Ds-TJ/PEMDES/VI/2020', 'Admin Desa', '2020-06-30'),
(3, '2222', 'Ani', '1111', 'Budi', '003/440/Ds-TJ/PEMDES/VI/2020', 'Ani', '2020-06-30');

-- --------------------------------------------------------

--
-- Table structure for table `informasi`
--

DROP TABLE IF EXISTS `informasi`;
CREATE TABLE IF NOT EXISTS `informasi` (
  `id` int(1) NOT NULL AUTO_INCREMENT,
  `teks` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `informasi`
--

INSERT INTO `informasi` (`id`, `teks`) VALUES
(1, '<p>Selamat Datang Di Website Desa</p><ol><li>Anda Sudah Login</li><li>Anda Bisa Logut</li></ol>');

-- --------------------------------------------------------

--
-- Table structure for table `ktps`
--

DROP TABLE IF EXISTS `ktps`;
CREATE TABLE IF NOT EXISTS `ktps` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `nik` varchar(16) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `tempat` varchar(100) NOT NULL,
  `tgl` date NOT NULL,
  `jenkel` varchar(12) NOT NULL,
  `agama` varchar(10) NOT NULL,
  `stts` varchar(50) NOT NULL,
  `pekerjaan` varchar(100) NOT NULL,
  `alamat` text NOT NULL,
  `rt` varchar(3) NOT NULL,
  `rw` varchar(3) NOT NULL,
  `keperluan` varchar(100) NOT NULL,
  `no_surat` varchar(50) NOT NULL,
  `input_nama` varchar(100) NOT NULL,
  `tanggal` date NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id` (`id`),
  KEY `nik` (`nik`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ktps`
--

INSERT INTO `ktps` (`id`, `nik`, `nama`, `tempat`, `tgl`, `jenkel`, `agama`, `stts`, `pekerjaan`, `alamat`, `rt`, `rw`, `keperluan`, `no_surat`, `input_nama`, `tanggal`) VALUES
(1, '1111', 'Budi', 'Pulang Pisau', '1990-02-13', 'Laki-laki', 'Hindu', 'Sudah Menikah', 'Bertani', 'Jl Poros', '01', '01', 'Percobaan Pertama', '001/471/Ds-TJ/SK-P/VI/2020', 'percobaan input', '2020-06-21'),
(2, '2222', 'Ani', 'Kapuas', '1980-02-12', 'Perempuan', 'Islam', 'Budha', 'Berkebun', 'Jl Poros', '012', '01', 'Percobaan Pertama', '002/471/Ds-TJ/SK-P/VI/2020', 'percobaan input', '2020-06-23');

-- --------------------------------------------------------

--
-- Table structure for table `pendapatan`
--

DROP TABLE IF EXISTS `pendapatan`;
CREATE TABLE IF NOT EXISTS `pendapatan` (
  `kd_pendapatan` varchar(20) NOT NULL,
  `nama_pendapatan` text NOT NULL,
  PRIMARY KEY (`kd_pendapatan`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pendapatan`
--

INSERT INTO `pendapatan` (`kd_pendapatan`, `nama_pendapatan`) VALUES
('1.1', 'Pendapatan Asli Desa'),
('1.2', 'Pendapatan Transfer'),
('1.3', 'Pendapatan Lain-lain'),
('3.1', 'Penerimaan Pembiayaan');

-- --------------------------------------------------------

--
-- Table structure for table `penduduk`
--

DROP TABLE IF EXISTS `penduduk`;
CREATE TABLE IF NOT EXISTS `penduduk` (
  `nik` varchar(16) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `tempat` varchar(100) NOT NULL,
  `tgl` date NOT NULL,
  `jenkel` varchar(12) NOT NULL,
  `agama` varchar(10) NOT NULL,
  `stts` varchar(50) NOT NULL,
  `pekerjaan` varchar(100) NOT NULL,
  `alamat` text NOT NULL,
  `rt` varchar(3) NOT NULL,
  `rw` varchar(3) NOT NULL,
  `desa` varchar(100) NOT NULL,
  `kec` varchar(100) NOT NULL,
  `foto` text NOT NULL,
  PRIMARY KEY (`nik`),
  KEY `nik` (`nik`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `penduduk`
--

INSERT INTO `penduduk` (`nik`, `nama`, `tempat`, `tgl`, `jenkel`, `agama`, `stts`, `pekerjaan`, `alamat`, `rt`, `rw`, `desa`, `kec`, `foto`) VALUES
('1111', 'Budi', 'Pulang Pisau', '1990-02-13', 'Laki-laki', 'Hindu', 'Sudah Menikah', 'Bertani', 'Jl Poros', '01', '01', 'Tamban Jaya', 'Tamban Catur', '922777.jpg'),
('2222', 'Ani', 'Kapuas', '1980-02-12', 'Perempuan', 'Islam', 'Budha', 'Berkebun', 'Jl Poros', '012', '01', 'Tamban Jaya', 'Tamban Catur', '884272.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `penghasilan`
--

DROP TABLE IF EXISTS `penghasilan`;
CREATE TABLE IF NOT EXISTS `penghasilan` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `nik_ay` varchar(16) NOT NULL,
  `nama_ay` varchar(100) NOT NULL,
  `nik_an` varchar(16) NOT NULL,
  `nama_an` varchar(100) NOT NULL,
  `nominal` varchar(11) NOT NULL,
  `penulisan` varchar(100) NOT NULL,
  `no_surat` varchar(50) NOT NULL,
  `input_nama` varchar(100) NOT NULL,
  `tanggal` date NOT NULL,
  PRIMARY KEY (`id`),
  KEY `nik_ay` (`nik_ay`),
  KEY `nik_an` (`nik_an`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `penghasilan`
--

INSERT INTO `penghasilan` (`id`, `nik_ay`, `nama_ay`, `nik_an`, `nama_an`, `nominal`, `penulisan`, `no_surat`, `input_nama`, `tanggal`) VALUES
(1, '2222', 'Ani', '1111', 'Budi', '1000', 'Seribu', '001/400/Ds-TJ/SK-P/VI/2020', 'percobaan input', '2020-06-21');

-- --------------------------------------------------------

--
-- Table structure for table `rekening`
--

DROP TABLE IF EXISTS `rekening`;
CREATE TABLE IF NOT EXISTS `rekening` (
  `kd_rekening` varchar(20) NOT NULL,
  `nama_rekening` text NOT NULL,
  `kd_bidang` tinyint(3) UNSIGNED NOT NULL,
  PRIMARY KEY (`kd_rekening`),
  KEY `kd_bidang` (`kd_bidang`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rekening`
--

INSERT INTO `rekening` (`kd_rekening`, `nama_rekening`, `kd_bidang`) VALUES
('1.1', 'Penyelenggaraan Belanja Siltap, Tunjangan dan Operasional Pemerintah Desa', 1),
('1.2', 'Penyediaan Saran Prasarana Pemerintahan Desa', 1),
('1.3', 'Pengelolaan Administrasi Kependudukan, Pencatatan Sipil, Statistik dan Kearsipan', 1),
('1.4', 'Penyelenggaraan Tata Praja Pemerintahan, Perencanaan, Keuangan dan Pelaporan', 1),
('1.5', 'Sub Bidang Pertanahan', 1),
('2.1', 'Pelayanan Dasar', 2);

-- --------------------------------------------------------

--
-- Table structure for table `skck`
--

DROP TABLE IF EXISTS `skck`;
CREATE TABLE IF NOT EXISTS `skck` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `nik` varchar(16) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `tempat` varchar(100) NOT NULL,
  `tgl` date NOT NULL,
  `jenkel` varchar(12) NOT NULL,
  `agama` varchar(10) NOT NULL,
  `stts` varchar(50) NOT NULL,
  `pekerjaan` varchar(100) NOT NULL,
  `alamat` text NOT NULL,
  `rt` varchar(3) NOT NULL,
  `rw` varchar(3) NOT NULL,
  `no_surat` varchar(50) NOT NULL,
  `input_nama` varchar(100) NOT NULL,
  `tanggal` date NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id` (`id`),
  KEY `nik` (`nik`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `skck`
--

INSERT INTO `skck` (`id`, `nik`, `nama`, `tempat`, `tgl`, `jenkel`, `agama`, `stts`, `pekerjaan`, `alamat`, `rt`, `rw`, `no_surat`, `input_nama`, `tanggal`) VALUES
(1, '1111', 'Budi', 'Pulang Pisau', '1990-02-13', 'Laki-laki', 'Hindu', 'Sudah Menikah', 'Bertani', 'Jl Poros', '01', '01', '001/145/Ds-TJ/SK-BB/VI/2020', 'percobaan input', '2020-06-21'),
(2, '1111', 'Budi', 'Pulang Pisau', '1990-02-13', 'Laki-laki', 'Hindu', 'Sudah Menikah', 'Bertani', 'Jl Poros', '01', '01', '002/145/Ds-TJ/SK-BB/VI/2020', '', '2020-06-30'),
(3, '2222', 'Ani', 'Kapuas', '1980-02-12', 'Perempuan', 'Islam', 'Budha', 'Berkebun', 'Jl Poros', '012', '01', '003/145/Ds-TJ/SK-BB/VI/2020', '', '2020-06-30'),
(4, '1111', 'Budi', 'Pulang Pisau', '1990-02-13', 'Laki-laki', 'Hindu', 'Sudah Menikah', 'Bertani', 'Jl Poros', '01', '01', '004/145/Ds-TJ/SK-BB/VI/2020', '', '2020-06-30');

-- --------------------------------------------------------

--
-- Table structure for table `sub_rekening`
--

DROP TABLE IF EXISTS `sub_rekening`;
CREATE TABLE IF NOT EXISTS `sub_rekening` (
  `kd_sub_rekening` varchar(20) NOT NULL,
  `nama_sub_rekening` text NOT NULL,
  `kd_rekening` varchar(20) NOT NULL,
  PRIMARY KEY (`kd_sub_rekening`),
  KEY `kd_rekening` (`kd_rekening`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sub_rekening`
--

INSERT INTO `sub_rekening` (`kd_sub_rekening`, `nama_sub_rekening`, `kd_rekening`) VALUES
('1.1.01', 'Penyediaan Penghasilan Tetap dan Tunjangan Kepala Desa', '1.1'),
('1.1.02', 'Penyediaan Penghasilan Tetap dan Tunjangan Perangkat Desa', '1.1'),
('1.1.03', 'Penyediaan Jaminan Sosial bagi Kepala Desa dan Perangkat Desa', '1.1'),
('1.1.04', 'Penyediaan Operasional Pemerintah Desa (ATK, Honorarium PKPKD dan\r\nPPKD dll)', '1.1'),
('1.1.05', 'Penyediaan Tunjangan BPD', '1.1'),
('1.1.06', 'Penyediaan Operasional BPD (rapat, ATK, Makan Minum, Pakaian Seragam, Listrik dll)', '1.1'),
('1.1.07', 'Penyediaan Insetif/Operasional RT/RW', '1.1'),
('1.2.01', 'Penyediaan sarana (aset tetap) perkantoran/pemerintahan', '1.2'),
('1.2.02', 'Pemeliharaan Gedung/Prasarana Kantor Desa', '1.2'),
('1.3.01', 'Pelayanan Administrasi Umum dan Kependudukan', '1.3'),
('1.3.02', 'Penyusunan/Pendataan/Pemutakhiran Profil Desa', '1.3'),
('1.3.03', 'Pengelolaan Administrasi dan Kearsipan Pemerintahan Desa', '1.3');

-- --------------------------------------------------------

--
-- Table structure for table `sumber`
--

DROP TABLE IF EXISTS `sumber`;
CREATE TABLE IF NOT EXISTS `sumber` (
  `kd_sumber` tinyint(3) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nama_sumber` varchar(255) NOT NULL,
  `singkatan` varchar(20) NOT NULL,
  PRIMARY KEY (`kd_sumber`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sumber`
--

INSERT INTO `sumber` (`kd_sumber`, `nama_sumber`, `singkatan`) VALUES
(1, 'Alokasi Dana Desa', 'ADD'),
(2, 'Pendapatan Asli Desa', 'PAD'),
(3, 'Dana Desa yang Bersumber Dari APBN', 'DDS'),
(4, 'Penerimaan Bagi Hasil Pajak Retribusi', 'PBH'),
(5, 'Bantuan Keuangan dari APBD Provinsi', 'BKP'),
(6, 'Bantuan Keuangan dari APBD Kab/Kota', 'BKK'),
(7, 'Lain-lain Pendapatan Desa yang Sah', 'DLL');

-- --------------------------------------------------------

--
-- Table structure for table `tahun`
--

DROP TABLE IF EXISTS `tahun`;
CREATE TABLE IF NOT EXISTS `tahun` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_tahun` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tahun`
--

INSERT INTO `tahun` (`id`, `nama_tahun`) VALUES
(1, 2020),
(2, 2021),
(3, 2022),
(4, 2023);

-- --------------------------------------------------------

--
-- Table structure for table `trans_belanja`
--

DROP TABLE IF EXISTS `trans_belanja`;
CREATE TABLE IF NOT EXISTS `trans_belanja` (
  `id_belanja` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `besar_belanja` int(11) NOT NULL,
  `thn_belanja` int(11) NOT NULL,
  `kd_sumber` tinyint(3) UNSIGNED NOT NULL,
  `kd_sub_rekening` varchar(20) NOT NULL,
  `kd_belanja` varchar(20) NOT NULL,
  PRIMARY KEY (`id_belanja`),
  KEY `kd_sumber` (`kd_sumber`),
  KEY `kd_sub_rekening` (`kd_sub_rekening`),
  KEY `kd_belanja` (`kd_belanja`)
) ENGINE=InnoDB AUTO_INCREMENT=54 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `trans_belanja`
--

INSERT INTO `trans_belanja` (`id_belanja`, `besar_belanja`, `thn_belanja`, `kd_sumber`, `kd_sub_rekening`, `kd_belanja`) VALUES
(3, 51600000, 2020, 1, '1.1.01', '5.1'),
(4, 192518400, 2020, 1, '1.1.02', '5.1'),
(5, 1000, 2021, 2, '1.2.02', '5.3'),
(6, 13820400, 2020, 1, '1.1.03', '5.1'),
(11, 28381800, 2020, 1, '1.1.04', '5.2'),
(15, 42000000, 2020, 1, '1.1.05', '5.1'),
(16, 5000000, 2020, 1, '1.1.06', '5.2'),
(17, 86400000, 2020, 1, '1.1.07', '5.2'),
(18, 37260000, 2020, 1, '1.2.01', '5.2'),
(19, 17400000, 2020, 1, '1.2.01', '5.3'),
(20, 1200000, 2020, 1, '1.3.01', '5.2'),
(21, 51600000, 2020, 1, '1.1.01', '5.1'),
(22, 192518400, 2020, 1, '1.1.02', '5.1'),
(23, 1000, 2021, 2, '1.2.02', '5.3'),
(24, 13820400, 2020, 1, '1.1.03', '5.1'),
(25, 28381800, 2020, 1, '1.1.04', '5.2'),
(26, 42000000, 2020, 1, '1.1.05', '5.1'),
(27, 5000000, 2020, 1, '1.1.06', '5.2'),
(28, 86400000, 2020, 1, '1.1.07', '5.2'),
(29, 37260000, 2020, 1, '1.2.01', '5.2'),
(30, 17400000, 2020, 1, '1.2.01', '5.3'),
(31, 1200000, 2020, 1, '1.3.01', '5.2'),
(32, 51600000, 2020, 1, '1.1.01', '5.1'),
(33, 192518400, 2020, 1, '1.1.02', '5.1'),
(34, 1000, 2021, 2, '1.2.02', '5.3'),
(35, 13820400, 2020, 1, '1.1.03', '5.1'),
(36, 28381800, 2020, 1, '1.1.04', '5.2'),
(37, 42000000, 2020, 1, '1.1.05', '5.1'),
(38, 5000000, 2020, 1, '1.1.06', '5.2'),
(39, 86400000, 2020, 1, '1.1.07', '5.2'),
(40, 37260000, 2020, 1, '1.2.01', '5.2'),
(41, 17400000, 2020, 1, '1.2.01', '5.3'),
(42, 1200000, 2020, 1, '1.3.01', '5.2'),
(43, 51600000, 2020, 1, '1.1.01', '5.1'),
(44, 192518400, 2020, 1, '1.1.02', '5.1'),
(45, 1000, 2021, 2, '1.2.02', '5.3'),
(46, 13820400, 2020, 1, '1.1.03', '5.1'),
(47, 28381800, 2020, 1, '1.1.04', '5.2'),
(48, 42000000, 2020, 1, '1.1.05', '5.1'),
(49, 5000000, 2020, 1, '1.1.06', '5.2'),
(50, 86400000, 2020, 1, '1.1.07', '5.2'),
(51, 37260000, 2020, 1, '1.2.01', '5.2'),
(52, 17400000, 2020, 1, '1.2.01', '5.3'),
(53, 1200000, 2020, 1, '1.3.01', '5.2');

-- --------------------------------------------------------

--
-- Table structure for table `trans_pendapatan`
--

DROP TABLE IF EXISTS `trans_pendapatan`;
CREATE TABLE IF NOT EXISTS `trans_pendapatan` (
  `id_pendapatan` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `besar_pendapatan` int(11) NOT NULL,
  `thn_pendapatan` int(11) NOT NULL,
  `kd_pendapatan` varchar(20) NOT NULL,
  PRIMARY KEY (`id_pendapatan`),
  KEY `kd_pendapatan` (`kd_pendapatan`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `trans_pendapatan`
--

INSERT INTO `trans_pendapatan` (`id_pendapatan`, `besar_pendapatan`, `thn_pendapatan`, `kd_pendapatan`) VALUES
(8, 1506307000, 2020, '1.1'),
(9, 14773600, 2020, '3.1'),
(10, 1477360, 2021, '1.1'),
(11, 1477360, 2021, '1.3');

-- --------------------------------------------------------

--
-- Table structure for table `t_usaha`
--

DROP TABLE IF EXISTS `t_usaha`;
CREATE TABLE IF NOT EXISTS `t_usaha` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `nik` varchar(16) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `tempat` varchar(100) NOT NULL,
  `tgl` date NOT NULL,
  `jenkel` varchar(12) NOT NULL,
  `agama` varchar(10) NOT NULL,
  `stts` varchar(50) NOT NULL,
  `pekerjaan` varchar(100) NOT NULL,
  `alamat` text NOT NULL,
  `rt` varchar(3) NOT NULL,
  `rw` varchar(3) NOT NULL,
  `usaha` varchar(100) NOT NULL,
  `no_surat` varchar(50) NOT NULL,
  `input_nama` varchar(100) NOT NULL,
  `tanggal` date NOT NULL,
  PRIMARY KEY (`no_surat`),
  KEY `id` (`id`),
  KEY `nik` (`nik`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_usaha`
--

INSERT INTO `t_usaha` (`id`, `nik`, `nama`, `tempat`, `tgl`, `jenkel`, `agama`, `stts`, `pekerjaan`, `alamat`, `rt`, `rw`, `usaha`, `no_surat`, `input_nama`, `tanggal`) VALUES
(1, '2222', 'Ani', 'Kapuas', '1980-02-12', 'Perempuan', 'Islam', 'Budha', 'Berkebun', 'Jl Poros', '012', '01', 'cek usaha user', '001/503/Ds-TJ/SK-U/VI/2020', 'percobaan input', '2020-06-21'),
(2, '1111', 'Budi', 'Pulang Pisau', '1990-02-13', 'Laki-laki', 'Hindu', 'Sudah Menikah', 'Bertani', 'Jl Poros', '01', '01', 'cek usaha user', '002/503/Ds-TJ/SK-U/VI/2020', 'percobaan input', '2020-06-21'),
(3, '1111', 'Budi', 'Pulang Pisau', '1990-02-13', 'Laki-laki', 'Hindu', 'Sudah Menikah', 'Bertani', 'Jl Poros', '01', '01', 'cek usaha1', '003/503/Ds-TJ/SK-U/VI/2020', 'Ani', '2020-06-30');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nik` varchar(16) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `nik` (`nik`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nik`, `nama`, `username`, `password`) VALUES
(1, '1111', 'Budi', 'budi01', 'budibudi'),
(2, '2222', 'Ani', 'ani', 'ani');

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_anggaran`
-- (See below for the actual view)
--
DROP VIEW IF EXISTS `v_anggaran`;
CREATE TABLE IF NOT EXISTS `v_anggaran` (
`id_pendapatan` int(10) unsigned
,`tahun` int(11)
,`total_pendapatan` decimal(32,0)
,`id_belanja` int(10) unsigned
,`kd_belanja` varchar(20)
,`total_belanja` decimal(32,0)
,`sisa_anggaran` decimal(33,0)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_total_belanja`
-- (See below for the actual view)
--
DROP VIEW IF EXISTS `v_total_belanja`;
CREATE TABLE IF NOT EXISTS `v_total_belanja` (
`id_belanja` int(10) unsigned
,`kd_belanja` varchar(20)
,`total_belanja` decimal(32,0)
,`thn_belanja` int(11)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_total_pendapatan`
-- (See below for the actual view)
--
DROP VIEW IF EXISTS `v_total_pendapatan`;
CREATE TABLE IF NOT EXISTS `v_total_pendapatan` (
`id_pendapatan` int(10) unsigned
,`thn_pendapatan` int(11)
,`total_pendapatan` decimal(32,0)
);

-- --------------------------------------------------------

--
-- Structure for view `v_anggaran`
--
DROP TABLE IF EXISTS `v_anggaran`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_anggaran`  AS  select `v_total_pendapatan`.`id_pendapatan` AS `id_pendapatan`,`v_total_pendapatan`.`thn_pendapatan` AS `tahun`,`v_total_pendapatan`.`total_pendapatan` AS `total_pendapatan`,`v_total_belanja`.`id_belanja` AS `id_belanja`,`v_total_belanja`.`kd_belanja` AS `kd_belanja`,`v_total_belanja`.`total_belanja` AS `total_belanja`,`v_total_pendapatan`.`total_pendapatan` - `v_total_belanja`.`total_belanja` AS `sisa_anggaran` from (`v_total_pendapatan` join `v_total_belanja` on(`v_total_pendapatan`.`thn_pendapatan` = `v_total_belanja`.`thn_belanja`)) ;

-- --------------------------------------------------------

--
-- Structure for view `v_total_belanja`
--
DROP TABLE IF EXISTS `v_total_belanja`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_total_belanja`  AS  select `trans_belanja`.`id_belanja` AS `id_belanja`,`trans_belanja`.`kd_belanja` AS `kd_belanja`,sum(`trans_belanja`.`besar_belanja`) AS `total_belanja`,`trans_belanja`.`thn_belanja` AS `thn_belanja` from `trans_belanja` group by `trans_belanja`.`kd_belanja`,`trans_belanja`.`thn_belanja` ;

-- --------------------------------------------------------

--
-- Structure for view `v_total_pendapatan`
--
DROP TABLE IF EXISTS `v_total_pendapatan`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_total_pendapatan`  AS  select `trans_pendapatan`.`id_pendapatan` AS `id_pendapatan`,`trans_pendapatan`.`thn_pendapatan` AS `thn_pendapatan`,sum(`trans_pendapatan`.`besar_pendapatan`) AS `total_pendapatan` from `trans_pendapatan` group by `trans_pendapatan`.`thn_pendapatan` ;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `imunisasi`
--
ALTER TABLE `imunisasi`
  ADD CONSTRAINT `imunisasi_ibfk_1` FOREIGN KEY (`nik_s`) REFERENCES `penduduk` (`nik`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `imunisasi_ibfk_2` FOREIGN KEY (`nik_i`) REFERENCES `penduduk` (`nik`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `ktps`
--
ALTER TABLE `ktps`
  ADD CONSTRAINT `ktps_ibfk_1` FOREIGN KEY (`nik`) REFERENCES `penduduk` (`nik`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `penghasilan`
--
ALTER TABLE `penghasilan`
  ADD CONSTRAINT `penghasilan_ibfk_1` FOREIGN KEY (`nik_ay`) REFERENCES `penduduk` (`nik`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `rekening`
--
ALTER TABLE `rekening`
  ADD CONSTRAINT `rekening_ibfk_1` FOREIGN KEY (`kd_bidang`) REFERENCES `bidang` (`kd_bidang`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `skck`
--
ALTER TABLE `skck`
  ADD CONSTRAINT `skck_ibfk_1` FOREIGN KEY (`nik`) REFERENCES `penduduk` (`nik`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `sub_rekening`
--
ALTER TABLE `sub_rekening`
  ADD CONSTRAINT `sub_rekening_ibfk_1` FOREIGN KEY (`kd_rekening`) REFERENCES `rekening` (`kd_rekening`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `trans_belanja`
--
ALTER TABLE `trans_belanja`
  ADD CONSTRAINT `trans_belanja_ibfk_1` FOREIGN KEY (`kd_sub_rekening`) REFERENCES `sub_rekening` (`kd_sub_rekening`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `trans_belanja_ibfk_2` FOREIGN KEY (`kd_sumber`) REFERENCES `sumber` (`kd_sumber`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `trans_belanja_ibfk_3` FOREIGN KEY (`kd_belanja`) REFERENCES `belanja` (`kd_belanja`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `trans_pendapatan`
--
ALTER TABLE `trans_pendapatan`
  ADD CONSTRAINT `trans_pendapatan_ibfk_1` FOREIGN KEY (`kd_pendapatan`) REFERENCES `pendapatan` (`kd_pendapatan`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `t_usaha`
--
ALTER TABLE `t_usaha`
  ADD CONSTRAINT `t_usaha_ibfk_1` FOREIGN KEY (`nik`) REFERENCES `penduduk` (`nik`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`nik`) REFERENCES `penduduk` (`nik`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
