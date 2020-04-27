-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 25, 2020 at 04:54 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.2.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pendaftaran`
--

-- --------------------------------------------------------

--
-- Table structure for table `daftars`
--

CREATE TABLE `daftars` (
  `id` int(11) NOT NULL,
  `nama_lengkap` varchar(30) DEFAULT NULL,
  `nama_panggilan` varchar(11) DEFAULT NULL,
  `jenis_kelamin` varchar(11) DEFAULT NULL,
  `tgl_lahir` varchar(225) DEFAULT NULL,
  `agama` varchar(200) DEFAULT NULL,
  `cita_cita` varchar(11) DEFAULT NULL,
  `hoby` varchar(11) DEFAULT NULL,
  `anak_ke` int(11) DEFAULT NULL,
  `jumlah_saudara` int(11) DEFAULT NULL,
  `berat_badan` int(11) DEFAULT NULL,
  `tinggi_badan` int(11) DEFAULT NULL,
  `golongan_darah` varchar(11) DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  `rt` varchar(10) DEFAULT NULL,
  `rw` varchar(20) DEFAULT NULL,
  `kelurahan` varchar(20) DEFAULT NULL,
  `kecamatan` varchar(20) DEFAULT NULL,
  `kota` varchar(20) DEFAULT NULL,
  `prov` varchar(20) DEFAULT NULL,
  `tinggal_dengan` varchar(20) DEFAULT NULL,
  `penyakit` varchar(20) DEFAULT NULL,
  `kelainan_jasmani` varchar(20) DEFAULT NULL,
  `nama_ayah` varchar(20) DEFAULT NULL,
  `ttl` varchar(225) DEFAULT NULL,
  `pekerjaan` varchar(20) DEFAULT NULL,
  `pendidikan` varchar(20) DEFAULT NULL,
  `ka` varchar(20) DEFAULT NULL,
  `no_hp` varchar(13) DEFAULT NULL,
  `nama_ibu` varchar(20) DEFAULT NULL,
  `ttlr` varchar(225) DEFAULT NULL,
  `kerjaan` varchar(20) DEFAULT NULL,
  `didikan` varchar(20) DEFAULT NULL,
  `kewarganegaraan_agama` varchar(20) DEFAULT NULL,
  `no_hppp` varchar(13) DEFAULT NULL,
  `nama_wali` varchar(11) DEFAULT NULL,
  `tempat_tanggal_lahir` varchar(225) DEFAULT NULL,
  `pekerjaaan` varchar(20) DEFAULT NULL,
  `pendidikan_terakhir` varchar(20) DEFAULT NULL,
  `hub_murid` varchar(20) DEFAULT NULL,
  `kewarganegaraan` varchar(20) DEFAULT NULL,
  `no_hpp` varchar(13) DEFAULT NULL,
  `email` varchar(20) DEFAULT NULL,
  `pai1` int(11) DEFAULT NULL,
  `pai2` int(11) DEFAULT NULL,
  `pai3` int(11) DEFAULT NULL,
  `pai4` int(11) DEFAULT NULL,
  `pai5` int(11) DEFAULT NULL,
  `indo1` int(11) DEFAULT NULL,
  `indo2` int(11) DEFAULT NULL,
  `indo3` int(11) DEFAULT NULL,
  `indo4` int(11) DEFAULT NULL,
  `indo5` int(11) DEFAULT NULL,
  `inggris1` int(11) DEFAULT NULL,
  `inggris2` int(11) DEFAULT NULL,
  `inggris3` int(11) DEFAULT NULL,
  `inggris4` int(11) DEFAULT NULL,
  `inggris5` int(11) DEFAULT NULL,
  `mtk1` int(11) DEFAULT NULL,
  `mtk2` int(11) DEFAULT NULL,
  `mtk3` int(11) DEFAULT NULL,
  `mtk4` int(11) DEFAULT NULL,
  `mtk5` int(11) DEFAULT NULL,
  `ipa1` int(11) DEFAULT NULL,
  `ipa2` int(11) DEFAULT NULL,
  `ipa3` int(11) DEFAULT NULL,
  `ipa4` int(11) DEFAULT NULL,
  `ipa5` int(11) DEFAULT NULL,
  `ips1` int(11) DEFAULT NULL,
  `ips2` int(11) DEFAULT NULL,
  `ips3` int(11) DEFAULT NULL,
  `ips4` int(11) DEFAULT NULL,
  `ips5` int(11) DEFAULT NULL,
  `prestasi` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `daftars`
--

INSERT INTO `daftars` (`id`, `nama_lengkap`, `nama_panggilan`, `jenis_kelamin`, `tgl_lahir`, `agama`, `cita_cita`, `hoby`, `anak_ke`, `jumlah_saudara`, `berat_badan`, `tinggi_badan`, `golongan_darah`, `alamat`, `rt`, `rw`, `kelurahan`, `kecamatan`, `kota`, `prov`, `tinggal_dengan`, `penyakit`, `kelainan_jasmani`, `nama_ayah`, `ttl`, `pekerjaan`, `pendidikan`, `ka`, `no_hp`, `nama_ibu`, `ttlr`, `kerjaan`, `didikan`, `kewarganegaraan_agama`, `no_hppp`, `nama_wali`, `tempat_tanggal_lahir`, `pekerjaaan`, `pendidikan_terakhir`, `hub_murid`, `kewarganegaraan`, `no_hpp`, `email`, `pai1`, `pai2`, `pai3`, `pai4`, `pai5`, `indo1`, `indo2`, `indo3`, `indo4`, `indo5`, `inggris1`, `inggris2`, `inggris3`, `inggris4`, `inggris5`, `mtk1`, `mtk2`, `mtk3`, `mtk4`, `mtk5`, `ipa1`, `ipa2`, `ipa3`, `ipa4`, `ipa5`, `ips1`, `ips2`, `ips3`, `ips4`, `ips5`, `prestasi`) VALUES
(15, 'asd', 'kj', 'l', 'as', 'asd', 'asd', 'asd', 123, 123, 123, 123, 'B', 'asd', 'asd', 'asd', 'asd', 'asd', 'asd', 'asd', '', 'asd', 'asd', 'asd', 'asd', 'asd', '', 'asd', 'asd', 'asd', 'asd', 'asd', 'asd', '', 'asd', 'asd', '', 'asd', 'asd', 'asdq', 'asd', 'asd', 'asd', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, ''),
(16, 'Diwangga Dafa Alkautsar', 'asd', 'l', 'asd', 'asd', 'asd', 'asda', 123, 12, 123, 123, 'B', 'asd', 'asd', 'asd', 'asd', 'asd', 'asd', 'asd', '', 'asd', 'asd', 'asd', 'asd', '', '', 'asd', 'asd', 'asd', 'asd', 'asd', 'asd', '', '123', '', '', '', '', '', '', '', '', 80, 80, 80, 80, 80, 80, 80, 80, 80, 80, 80, 80, 80, 80, 80, 80, 80, 80, 80, 80, 80, 80, 80, 80, 80, 80, 80, 80, 80, 80, 'Tidaj ada'),
(17, 'Diwangga Dafa Alkautsar', 'Kausar', 'l', 'Sukabumi 30 mei 2003 ', 'islam', 'Yu7tb3r', 'tenis meja', 2, 3, 64, 172, 'B', 'kp bangbayang rt 01 rw03', '01', '03', 'desa bangbayang', 'cicurug', 'sukabumi', 'jawa barat', 'Orang Tua', 'Tidak Ada', 'Tidak Ada', 'Ayah', 'Mei 10 1972', 'Tidak Ada', 'Lupa', 'Indonesia/Islam', 'Tidak Tahu', 'Ibu', 'Juni 17 1974', 'Ibu Rumah Tangga', 'Tidak Tahu', 'Indonesia.Islam', '082114755178', 'Tidak Ada', 'Tidak Ada', 'Tidak Ada', 'Tidak Ada', 'Tidak Ada', 'Tidak Ada', 'Tidak Ada', 'kepo@gmail.com', 80, 75, 82, 91, 92, 75, 82, 84, 82, 38, 81, 82, 84, 88, 90, 20, 30, 50, 40, 60, 82, 75, 83, 77, 78, 82, 84, 86, 81, 87, 'Tidak Ada');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id` int(11) NOT NULL,
  `username` varchar(225) DEFAULT NULL,
  `password` varchar(225) DEFAULT NULL,
  `akses` varchar(225) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id`, `username`, `password`, `akses`) VALUES
(1, 'a', 'a', NULL),
(2, 'asd', 'asd', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `daftars`
--
ALTER TABLE `daftars`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `daftars`
--
ALTER TABLE `daftars`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
