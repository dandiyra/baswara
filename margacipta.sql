-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Sep 28, 2021 at 02:21 AM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `margacipta`
--

-- --------------------------------------------------------

--
-- Table structure for table `access`
--

DROP TABLE IF EXISTS `access`;
CREATE TABLE IF NOT EXISTS `access` (
  `idAccess` int(11) NOT NULL AUTO_INCREMENT,
  `idUser` int(50) NOT NULL,
  `menu_id` int(50) NOT NULL,
  PRIMARY KEY (`idAccess`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `access`
--

INSERT INTO `access` (`idAccess`, `idUser`, `menu_id`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 1, 3),
(4, 1, 4),
(5, 1, 5),
(9, 2, 3),
(7, 2, 4),
(10, 3, 3),
(11, 3, 4),
(12, 1, 6);

-- --------------------------------------------------------

--
-- Table structure for table `career`
--

DROP TABLE IF EXISTS `career`;
CREATE TABLE IF NOT EXISTS `career` (
  `idKarir` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `tanggalU` varchar(200) NOT NULL,
  `tanggalL` varchar(500) NOT NULL,
  `NIK` varchar(1000) NOT NULL,
  `status` varchar(100) NOT NULL,
  `slug` varchar(1000) NOT NULL,
  `telepon` varchar(1000) NOT NULL,
  PRIMARY KEY (`idKarir`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `career`
--

INSERT INTO `career` (`idKarir`, `nama`, `email`, `gender`, `tanggalU`, `tanggalL`, `NIK`, `status`, `slug`, `telepon`) VALUES
(1, 'Jonathan Keane', 'jk.jonathan@hotmail.com', 'laki-laki', '1632718630', '2021-09-11', '31730806061981001', 'Belum menikah', 'Sales-Marketing', '082297643766');

-- --------------------------------------------------------

--
-- Table structure for table `home`
--

DROP TABLE IF EXISTS `home`;
CREATE TABLE IF NOT EXISTS `home` (
  `idHome` int(11) NOT NULL AUTO_INCREMENT,
  `nGambar` varchar(100) NOT NULL,
  `gambar` varchar(2000) NOT NULL,
  `tanggal` varchar(1000) NOT NULL,
  PRIMARY KEY (`idHome`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `hr`
--

DROP TABLE IF EXISTS `hr`;
CREATE TABLE IF NOT EXISTS `hr` (
  `idHr` int(11) NOT NULL AUTO_INCREMENT,
  `pekerjaan` varchar(200) NOT NULL,
  `slugC` varchar(1000) NOT NULL,
  `requirement` text NOT NULL,
  `deskripsi` text NOT NULL,
  `gambar` varchar(1000) NOT NULL,
  `tanggalD` varchar(200) NOT NULL,
  `dUpload` varchar(500) NOT NULL,
  PRIMARY KEY (`idHr`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hr`
--

INSERT INTO `hr` (`idHr`, `pekerjaan`, `slugC`, `requirement`, `deskripsi`, `gambar`, `tanggalD`, `dUpload`) VALUES
(1, 'Test Lowongan', 'Test-Lowongan', '', '', 'download_(1)2.jpg', '2021-09-09', '1632795614');

-- --------------------------------------------------------

--
-- Table structure for table `katproduk`
--

DROP TABLE IF EXISTS `katproduk`;
CREATE TABLE IF NOT EXISTS `katproduk` (
  `idKat` int(11) NOT NULL AUTO_INCREMENT,
  `nKategori` varchar(100) NOT NULL,
  `gambar` varchar(1000) NOT NULL,
  `deskripsi` varchar(250) NOT NULL,
  `bahasa` varchar(10) NOT NULL,
  `tanggal` varchar(100) NOT NULL,
  `uidKat` varchar(50) NOT NULL,
  PRIMARY KEY (`idKat`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `katproduk`
--

INSERT INTO `katproduk` (`idKat`, `nKategori`, `gambar`, `deskripsi`, `bahasa`, `tanggal`, `uidKat`) VALUES
(1, 'asdasd', 'supplier-milesight1.jpg', 'asdasdasd', 'id', '1632732894', 'fjo3TM4hE7I2mYHWRvFr'),
(2, '', 'supplier-milesight1.jpg', '', 'en', '1632732894', 'fjo3TM4hE7I2mYHWRvFr');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

DROP TABLE IF EXISTS `menu`;
CREATE TABLE IF NOT EXISTS `menu` (
  `idMenu` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(200) NOT NULL,
  `url` varchar(300) NOT NULL,
  `icon` varchar(500) NOT NULL,
  PRIMARY KEY (`idMenu`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`idMenu`, `title`, `url`, `icon`) VALUES
(1, 'Home', 'Website', 'mdi mdi-web'),
(2, 'Data User', 'AdmM', 'mdi mdi-view-dashboard-outline'),
(3, 'Produk', 'Produk', 'mdi mdi-folder-multiple-outline'),
(4, 'News', 'News', 'mdi mdi-newspaper'),
(5, 'User Access', 'Access', 'mdi mdi-database-lock'),
(6, 'HRD', 'Hr', 'mdi mdi-tie');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

DROP TABLE IF EXISTS `news`;
CREATE TABLE IF NOT EXISTS `news` (
  `idNews` int(11) NOT NULL AUTO_INCREMENT,
  `meta` varchar(1000) NOT NULL,
  `keyword` varchar(1000) NOT NULL,
  `judul` varchar(500) NOT NULL,
  `kategori` varchar(100) NOT NULL,
  `tanggal` varchar(200) NOT NULL,
  `slug` varchar(200) NOT NULL,
  `berita` text NOT NULL,
  `gambar` varchar(1000) DEFAULT NULL,
  PRIMARY KEY (`idNews`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`idNews`, `meta`, `keyword`, `judul`, `kategori`, `tanggal`, `slug`, `berita`, `gambar`) VALUES
(1, 'Test Sweet rubah alert', 'Test Sweet rubah alert', 'Test Sweet rubah alert', 'Test Sweet rubah alert', '1632733982', 'Test-Sweet-rubah-alert', '<p>Test Sweet rubah alert</p>', 'CCTV-technology.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

DROP TABLE IF EXISTS `produk`;
CREATE TABLE IF NOT EXISTS `produk` (
  `idProduk` int(20) NOT NULL AUTO_INCREMENT,
  `produk` varchar(100) NOT NULL,
  `header` varchar(100) NOT NULL,
  `keterangan` varchar(1000) NOT NULL,
  `gambar` varchar(7000) DEFAULT NULL,
  `deskripsi` varchar(1000) NOT NULL,
  `kategori` varchar(200) NOT NULL,
  `spesifikasi` text,
  `keunggulan` text,
  `tanggal` varchar(500) NOT NULL,
  `bahasa` varchar(500) DEFAULT NULL,
  `Fuuid` varchar(1000) NOT NULL,
  PRIMARY KEY (`idProduk`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`idProduk`, `produk`, `header`, `keterangan`, `gambar`, `deskripsi`, `kategori`, `spesifikasi`, `keunggulan`, `tanggal`, `bahasa`, `Fuuid`) VALUES
(2, '', '', '', 'download_(2).jpg', '', '', '', '', '1632732691', 'en', '5ntyValjC42WPpkNs3S0');

-- --------------------------------------------------------

--
-- Table structure for table `sub_menu`
--

DROP TABLE IF EXISTS `sub_menu`;
CREATE TABLE IF NOT EXISTS `sub_menu` (
  `idSub` int(11) NOT NULL AUTO_INCREMENT,
  `menu_id` int(10) NOT NULL,
  `title` varchar(100) NOT NULL,
  `url` varchar(100) NOT NULL,
  `icon` varchar(100) NOT NULL,
  PRIMARY KEY (`idSub`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sub_menu`
--

INSERT INTO `sub_menu` (`idSub`, `menu_id`, `title`, `url`, `icon`) VALUES
(1, 6, 'Kandidat', 'Hr/applier', 'mdi mdi-account'),
(2, 3, 'Kategori Produk', 'Kategori', 'mdi mdi-tag');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `idUser` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(500) NOT NULL,
  `telepon` varchar(200) NOT NULL,
  `roleId` int(10) NOT NULL,
  `cookie` varchar(1000) NOT NULL,
  PRIMARY KEY (`idUser`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`idUser`, `nama`, `email`, `password`, `telepon`, `roleId`, `cookie`) VALUES
(1, 'Jonathan Keane', 'jk.jonathan@hotmail.com', '$2y$10$cy5ubSfFBtm94LklaIwVE.Rf89aNAOF/MdRBZWV2U0T73UgGfuUu6', '08161403601', 0, 'mKcjMBJlwthDtHbkAYwyuxPURgFiiNLronOvqlVTZHbWQQkITSCmBZfzdahSEgeN'),
(2, 'Deo', 'deo@gmail.com', '$2y$10$qRiuyQKu2CTi/RC/C0up9eGp6jSLfq.EGTZ0sSWA2xcxfSybO3fQG', '082297643766', 1, '');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
