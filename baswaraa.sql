-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 30 Sep 2021 pada 12.00
-- Versi server: 10.4.6-MariaDB
-- Versi PHP: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `baswaraa`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `access`
--

CREATE TABLE `access` (
  `idAccess` int(11) NOT NULL,
  `idUser` int(50) NOT NULL,
  `menu_id` int(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `access`
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
-- Struktur dari tabel `career`
--

CREATE TABLE `career` (
  `idKarir` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `tanggalU` varchar(200) NOT NULL,
  `tanggalL` varchar(500) NOT NULL,
  `NIK` varchar(1000) NOT NULL,
  `status` varchar(100) NOT NULL,
  `slug` varchar(1000) NOT NULL,
  `telepon` varchar(1000) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `career`
--

INSERT INTO `career` (`idKarir`, `nama`, `email`, `gender`, `tanggalU`, `tanggalL`, `NIK`, `status`, `slug`, `telepon`) VALUES
(1, 'Jonathan Keane', 'jk.jonathan@hotmail.com', 'laki-laki', '1632718630', '2021-09-11', '31730806061981001', 'Belum menikah', 'Sales-Marketing', '082297643766');

-- --------------------------------------------------------

--
-- Struktur dari tabel `home`
--

CREATE TABLE `home` (
  `idHome` int(11) NOT NULL,
  `nGambar` varchar(100) NOT NULL,
  `gambar` varchar(2000) NOT NULL,
  `tanggal` varchar(1000) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `home`
--

INSERT INTO `home` (`idHome`, `nGambar`, `gambar`, `tanggal`) VALUES
(5, 'Orang1', 'about11.jpg', '1632818824'),
(6, 'Test1', 'about21.jpg', '1632818839');

-- --------------------------------------------------------

--
-- Struktur dari tabel `hr`
--

CREATE TABLE `hr` (
  `idHr` int(11) NOT NULL,
  `pekerjaan` varchar(200) NOT NULL,
  `slugC` varchar(1000) NOT NULL,
  `requirement` text NOT NULL,
  `deskripsi` text NOT NULL,
  `gambar` varchar(1000) NOT NULL,
  `tanggalD` varchar(200) NOT NULL,
  `dUpload` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `katproduk`
--

CREATE TABLE `katproduk` (
  `idKat` int(11) NOT NULL,
  `nKategori` varchar(100) NOT NULL,
  `gambar` varchar(1000) NOT NULL,
  `deskripsi` varchar(250) NOT NULL,
  `bahasa` varchar(10) NOT NULL,
  `tanggal` varchar(100) NOT NULL,
  `uidKat` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `katproduk`
--

INSERT INTO `katproduk` (`idKat`, `nKategori`, `gambar`, `deskripsi`, `bahasa`, `tanggal`, `uidKat`) VALUES
(1, 'asdasd', 'supplier-milesight1.jpg', 'asdasdasd', 'id', '1632732894', 'fjo3TM4hE7I2mYHWRvFr'),
(2, '', 'supplier-milesight1.jpg', '', 'en', '1632732894', 'fjo3TM4hE7I2mYHWRvFr');

-- --------------------------------------------------------

--
-- Struktur dari tabel `menu`
--

CREATE TABLE `menu` (
  `idMenu` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `url` varchar(300) NOT NULL,
  `icon` varchar(500) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `menu`
--

INSERT INTO `menu` (`idMenu`, `title`, `url`, `icon`) VALUES
(1, 'Home', 'Website', 'mdi mdi-web'),
(2, 'Data User', 'AdmM', 'mdi mdi-view-dashboard-outline'),
(4, 'News', 'News', 'mdi mdi-newspaper'),
(5, 'User Access', 'Access', 'mdi mdi-database-lock');

-- --------------------------------------------------------

--
-- Struktur dari tabel `news`
--

CREATE TABLE `news` (
  `idNews` int(11) NOT NULL,
  `meta` varchar(1000) NOT NULL,
  `keyword` varchar(1000) NOT NULL,
  `judul` varchar(500) NOT NULL,
  `kategori` varchar(100) NOT NULL,
  `tanggal` varchar(200) NOT NULL,
  `slug` varchar(200) NOT NULL,
  `berita` text NOT NULL,
  `gambar` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `news`
--

INSERT INTO `news` (`idNews`, `meta`, `keyword`, `judul`, `kategori`, `tanggal`, `slug`, `berita`, `gambar`) VALUES
(1, 'Mindset', 'Mindset', 'Mindset', 'Work', '1632969510', 'Mindset', '<p><strong>Mindset</strong> dapat diartikan sebagai suatu kumpulan pemikiran yang terbentuk sesuai dengan pengalaman dengan keyakinan sehingga dapat mempengaruhi perilaku atau cara berfikir seseorang dalam menentukan suatu sikap, pandangan hingga masa depan seseorang.</p>', 'blog32.jpg'),
(2, 'Deadline', 'Deadline', 'Deadline', 'Deadline', '1632969588', 'Deadline', '<p>Apa yang dimaksud dengan deadline?</p><p><strong>Deadline</strong> adalah “tenggat waktu” atau “batas waktu”. Dead = mati, <strong>maksudnya</strong> tidak berlaku lagi. Line = baris atau garis, <strong>maksudnya</strong> garis batas, batas waktu.</p>', 'blog22.jpg'),
(3, 'Piknik', 'Piknik', 'Piknik', 'Piknik', '1632969708', 'Piknik', '<p><strong>Kurang Piknik</strong> yang lain <strong>artinya kurang</strong> wawasan, <strong>kurang</strong> baca, <strong>kurang</strong> mau cari tahu info yang sesungguhnya, atau bahkan <strong>kurang</strong> gaul. Biasanya orang <strong>kurang piknik</strong> dalam artian ini punya kecepatan jempol di atas rata-rata kecepatan otaknya.</p>', 'background3.jpg'),
(4, 'Mindset', 'Mindset', 'Mindset', 'Work', '1632969510', 'Mindset', '<p><strong>Mindset</strong> dapat diartikan sebagai suatu kumpulan pemikiran yang terbentuk sesuai dengan pengalaman dengan keyakinan sehingga dapat mempengaruhi perilaku atau cara berfikir seseorang dalam menentukan suatu sikap, pandangan hingga masa depan seseorang.</p>', 'blog32.jpg'),
(5, 'Deadline', 'Deadline', 'Deadline', 'Deadline', '1632969588', 'Deadline', '<p>Apa yang dimaksud dengan deadline?</p><p><strong>Deadline</strong> adalah “tenggat waktu” atau “batas waktu”. Dead = mati, <strong>maksudnya</strong> tidak berlaku lagi. Line = baris atau garis, <strong>maksudnya</strong> garis batas, batas waktu.</p>', 'blog22.jpg'),
(6, 'Piknik', 'Piknik', 'Piknik', 'Piknik', '1632969708', 'Piknik', '<p><strong>Kurang Piknik</strong> yang lain <strong>artinya kurang</strong> wawasan, <strong>kurang</strong> baca, <strong>kurang</strong> mau cari tahu info yang sesungguhnya, atau bahkan <strong>kurang</strong> gaul. Biasanya orang <strong>kurang piknik</strong> dalam artian ini punya kecepatan jempol di atas rata-rata kecepatan otaknya.</p>', 'background3.jpg'),
(7, 'Mindset', 'Mindset', 'Mindset', 'Work', '1632969510', 'Mindset', '<p><strong>Mindset</strong> dapat diartikan sebagai suatu kumpulan pemikiran yang terbentuk sesuai dengan pengalaman dengan keyakinan sehingga dapat mempengaruhi perilaku atau cara berfikir seseorang dalam menentukan suatu sikap, pandangan hingga masa depan seseorang.</p>', 'blog32.jpg'),
(8, 'Deadline', 'Deadline', 'Deadline', 'Deadline', '1632969588', 'Deadline', '<p>Apa yang dimaksud dengan deadline?</p><p><strong>Deadline</strong> adalah “tenggat waktu” atau “batas waktu”. Dead = mati, <strong>maksudnya</strong> tidak berlaku lagi. Line = baris atau garis, <strong>maksudnya</strong> garis batas, batas waktu.</p>', 'blog22.jpg'),
(9, 'Piknik', 'Piknik', 'Piknik', 'Piknik', '1632969708', 'Piknik', '<p><strong>Kurang Piknik</strong> yang lain <strong>artinya kurang</strong> wawasan, <strong>kurang</strong> baca, <strong>kurang</strong> mau cari tahu info yang sesungguhnya, atau bahkan <strong>kurang</strong> gaul. Biasanya orang <strong>kurang piknik</strong> dalam artian ini punya kecepatan jempol di atas rata-rata kecepatan otaknya.</p>', 'background3.jpg'),
(10, 'Mindset', 'Mindset', 'Mindset', 'Work', '1632969510', 'Mindset', '<p><strong>Mindset</strong> dapat diartikan sebagai suatu kumpulan pemikiran yang terbentuk sesuai dengan pengalaman dengan keyakinan sehingga dapat mempengaruhi perilaku atau cara berfikir seseorang dalam menentukan suatu sikap, pandangan hingga masa depan seseorang.</p>', 'blog32.jpg'),
(11, 'Deadline', 'Deadline', 'Deadline', 'Deadline', '1632969588', 'Deadline', '<p>Apa yang dimaksud dengan deadline?</p><p><strong>Deadline</strong> adalah “tenggat waktu” atau “batas waktu”. Dead = mati, <strong>maksudnya</strong> tidak berlaku lagi. Line = baris atau garis, <strong>maksudnya</strong> garis batas, batas waktu.</p>', 'blog22.jpg'),
(12, 'Piknik', 'Piknik', 'Piknik', 'Piknik', '1632969708', 'Piknik', '<p><strong>Kurang Piknik</strong> yang lain <strong>artinya kurang</strong> wawasan, <strong>kurang</strong> baca, <strong>kurang</strong> mau cari tahu info yang sesungguhnya, atau bahkan <strong>kurang</strong> gaul. Biasanya orang <strong>kurang piknik</strong> dalam artian ini punya kecepatan jempol di atas rata-rata kecepatan otaknya.</p>', 'background3.jpg'),
(13, 'Mindset', 'Mindset', 'Mindset', 'Work', '1632969510', 'Mindset', '<p><strong>Mindset</strong> dapat diartikan sebagai suatu kumpulan pemikiran yang terbentuk sesuai dengan pengalaman dengan keyakinan sehingga dapat mempengaruhi perilaku atau cara berfikir seseorang dalam menentukan suatu sikap, pandangan hingga masa depan seseorang.</p>', 'blog32.jpg'),
(14, 'Deadline', 'Deadline', 'Deadline', 'Deadline', '1632969588', 'Deadline', '<p>Apa yang dimaksud dengan deadline?</p><p><strong>Deadline</strong> adalah “tenggat waktu” atau “batas waktu”. Dead = mati, <strong>maksudnya</strong> tidak berlaku lagi. Line = baris atau garis, <strong>maksudnya</strong> garis batas, batas waktu.</p>', 'blog22.jpg'),
(15, 'Piknik', 'Piknik', 'Piknik', 'Piknik', '1632969708', 'Piknik', '<p><strong>Kurang Piknik</strong> yang lain <strong>artinya kurang</strong> wawasan, <strong>kurang</strong> baca, <strong>kurang</strong> mau cari tahu info yang sesungguhnya, atau bahkan <strong>kurang</strong> gaul. Biasanya orang <strong>kurang piknik</strong> dalam artian ini punya kecepatan jempol di atas rata-rata kecepatan otaknya.</p>', 'background3.jpg'),
(16, 'Mindset', 'Mindset', 'Mindset', 'Work', '1632969510', 'Mindset', '<p><strong>Mindset</strong> dapat diartikan sebagai suatu kumpulan pemikiran yang terbentuk sesuai dengan pengalaman dengan keyakinan sehingga dapat mempengaruhi perilaku atau cara berfikir seseorang dalam menentukan suatu sikap, pandangan hingga masa depan seseorang.</p>', 'blog32.jpg'),
(17, 'Deadline', 'Deadline', 'Deadline', 'Deadline', '1632969588', 'Deadline', '<p>Apa yang dimaksud dengan deadline?</p><p><strong>Deadline</strong> adalah “tenggat waktu” atau “batas waktu”. Dead = mati, <strong>maksudnya</strong> tidak berlaku lagi. Line = baris atau garis, <strong>maksudnya</strong> garis batas, batas waktu.</p>', 'blog22.jpg'),
(18, 'Piknik', 'Piknik', 'Piknik', 'Piknik', '1632969708', 'Piknik', '<p><strong>Kurang Piknik</strong> yang lain <strong>artinya kurang</strong> wawasan, <strong>kurang</strong> baca, <strong>kurang</strong> mau cari tahu info yang sesungguhnya, atau bahkan <strong>kurang</strong> gaul. Biasanya orang <strong>kurang piknik</strong> dalam artian ini punya kecepatan jempol di atas rata-rata kecepatan otaknya.</p>', 'background3.jpg'),
(19, 'Mindset', 'Mindset', 'Mindset', 'Work', '1632969510', 'Mindset', '<p><strong>Mindset</strong> dapat diartikan sebagai suatu kumpulan pemikiran yang terbentuk sesuai dengan pengalaman dengan keyakinan sehingga dapat mempengaruhi perilaku atau cara berfikir seseorang dalam menentukan suatu sikap, pandangan hingga masa depan seseorang.</p>', 'blog32.jpg'),
(20, 'Deadline', 'Deadline', 'Deadline', 'Deadline', '1632969588', 'Deadline', '<p>Apa yang dimaksud dengan deadline?</p><p><strong>Deadline</strong> adalah “tenggat waktu” atau “batas waktu”. Dead = mati, <strong>maksudnya</strong> tidak berlaku lagi. Line = baris atau garis, <strong>maksudnya</strong> garis batas, batas waktu.</p>', 'blog22.jpg'),
(21, 'Piknik', 'Piknik', 'Piknik', 'Piknik', '1632969708', 'Piknik', '<p><strong>Kurang Piknik</strong> yang lain <strong>artinya kurang</strong> wawasan, <strong>kurang</strong> baca, <strong>kurang</strong> mau cari tahu info yang sesungguhnya, atau bahkan <strong>kurang</strong> gaul. Biasanya orang <strong>kurang piknik</strong> dalam artian ini punya kecepatan jempol di atas rata-rata kecepatan otaknya.</p>', 'background3.jpg'),
(22, 'Mindset', 'Mindset', 'Mindset', 'Work', '1632969510', 'Mindset', '<p><strong>Mindset</strong> dapat diartikan sebagai suatu kumpulan pemikiran yang terbentuk sesuai dengan pengalaman dengan keyakinan sehingga dapat mempengaruhi perilaku atau cara berfikir seseorang dalam menentukan suatu sikap, pandangan hingga masa depan seseorang.</p>', 'blog32.jpg'),
(23, 'Deadline', 'Deadline', 'Deadline', 'Deadline', '1632969588', 'Deadline', '<p>Apa yang dimaksud dengan deadline?</p><p><strong>Deadline</strong> adalah “tenggat waktu” atau “batas waktu”. Dead = mati, <strong>maksudnya</strong> tidak berlaku lagi. Line = baris atau garis, <strong>maksudnya</strong> garis batas, batas waktu.</p>', 'blog22.jpg'),
(25, 'Dandy Ganteng', 'Dandy Ganteng', 'Dandy Ganteng', 'Dandy Ganteng', '1632983894', 'Dandy-Ganteng', '<p>Dandy GantengDandy GantengDandy GantengDandy GantengDandy GantengDandy GantengDandy GantengDandy GantengDandy GantengDandy GantengDandy GantengDandy GantengDandy GantengDandy GantengDandy GantengDandy GantengDandy GantengDandy GantengDandy GantengDandy GantengDandy GantengDandy GantengDandy GantengDandy GantengDandy GantengDandy GantengDandy GantengDandy GantengDandy GantengDandy GantengDandy GantengDandy GantengDandy GantengDandy GantengDandy GantengDandy GantengDandy GantengDandy GantengDandy GantengDandy GantengDandy GantengDandy GantengDandy GantengDandy GantengDandy GantengDandy GantengDandy GantengDandy Ganteng</p>', 'AL.JPG');

-- --------------------------------------------------------

--
-- Struktur dari tabel `produk`
--

CREATE TABLE `produk` (
  `idProduk` int(20) NOT NULL,
  `produk` varchar(100) NOT NULL,
  `header` varchar(100) NOT NULL,
  `keterangan` varchar(1000) NOT NULL,
  `gambar` varchar(7000) DEFAULT NULL,
  `deskripsi` varchar(1000) NOT NULL,
  `kategori` varchar(200) NOT NULL,
  `spesifikasi` text DEFAULT NULL,
  `keunggulan` text DEFAULT NULL,
  `tanggal` varchar(500) NOT NULL,
  `bahasa` varchar(500) DEFAULT NULL,
  `Fuuid` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `produk`
--

INSERT INTO `produk` (`idProduk`, `produk`, `header`, `keterangan`, `gambar`, `deskripsi`, `kategori`, `spesifikasi`, `keunggulan`, `tanggal`, `bahasa`, `Fuuid`) VALUES
(2, '', '', '', 'download_(2).jpg', '', '', '', '', '1632732691', 'en', '5ntyValjC42WPpkNs3S0');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sub_menu`
--

CREATE TABLE `sub_menu` (
  `idSub` int(11) NOT NULL,
  `menu_id` int(10) NOT NULL,
  `title` varchar(100) NOT NULL,
  `url` varchar(100) NOT NULL,
  `icon` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `sub_menu`
--

INSERT INTO `sub_menu` (`idSub`, `menu_id`, `title`, `url`, `icon`) VALUES
(1, 6, 'Kandidat', 'Hr/applier', 'mdi mdi-account'),
(2, 3, 'Kategori Produk', 'Kategori', 'mdi mdi-tag');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `idUser` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(500) NOT NULL,
  `telepon` varchar(200) NOT NULL,
  `roleId` int(10) NOT NULL,
  `cookie` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`idUser`, `nama`, `email`, `password`, `telepon`, `roleId`, `cookie`) VALUES
(1, 'Dandy Yudistira', 'dandyyudistira14@gmail.com', '$2y$10$cy5ubSfFBtm94LklaIwVE.Rf89aNAOF/MdRBZWV2U0T73UgGfuUu6', '0895336420201', 0, 'uUZIIFBSiDTKxRbXAbpDphFlVZfuNajMMtCCozYsmfKhSwWkNrinOWcEeoyJqJPy'),
(2, 'Deo', 'deo@gmail.com', '$2y$10$qRiuyQKu2CTi/RC/C0up9eGp6jSLfq.EGTZ0sSWA2xcxfSybO3fQG', '082297643766', 1, '');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `access`
--
ALTER TABLE `access`
  ADD PRIMARY KEY (`idAccess`);

--
-- Indeks untuk tabel `career`
--
ALTER TABLE `career`
  ADD PRIMARY KEY (`idKarir`);

--
-- Indeks untuk tabel `home`
--
ALTER TABLE `home`
  ADD PRIMARY KEY (`idHome`);

--
-- Indeks untuk tabel `hr`
--
ALTER TABLE `hr`
  ADD PRIMARY KEY (`idHr`);

--
-- Indeks untuk tabel `katproduk`
--
ALTER TABLE `katproduk`
  ADD PRIMARY KEY (`idKat`);

--
-- Indeks untuk tabel `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`idMenu`);

--
-- Indeks untuk tabel `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`idNews`);

--
-- Indeks untuk tabel `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`idProduk`);

--
-- Indeks untuk tabel `sub_menu`
--
ALTER TABLE `sub_menu`
  ADD PRIMARY KEY (`idSub`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`idUser`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `access`
--
ALTER TABLE `access`
  MODIFY `idAccess` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `career`
--
ALTER TABLE `career`
  MODIFY `idKarir` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `home`
--
ALTER TABLE `home`
  MODIFY `idHome` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `hr`
--
ALTER TABLE `hr`
  MODIFY `idHr` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `katproduk`
--
ALTER TABLE `katproduk`
  MODIFY `idKat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `menu`
--
ALTER TABLE `menu`
  MODIFY `idMenu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `news`
--
ALTER TABLE `news`
  MODIFY `idNews` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT untuk tabel `produk`
--
ALTER TABLE `produk`
  MODIFY `idProduk` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `sub_menu`
--
ALTER TABLE `sub_menu`
  MODIFY `idSub` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `idUser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
