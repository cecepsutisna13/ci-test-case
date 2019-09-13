-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 13, 2019 at 06:52 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `testcase`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `id` int(11) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `deskripsi` varchar(1000) NOT NULL,
  `gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`id`, `judul`, `deskripsi`, `gambar`) VALUES
(3, 'Visi dan Misi', '<h3> Visi </h3>\r\n<p>Terwujudnya peserta didik yang cerdas, kompetitif, berwawasan lingkungan, dan mampu mengintegrasikan ilmu agama, pengetahuan, dan keterampilan.\r\n<p><h3>Misi</h3>\r\n<p>1. Menanamkan dan menyempurnakan pola pikir.\r\n<p>2. Menguasai pengetahuan dan keterampilan serta mampu mengintegrasikan secara kompetitif berdasarkan imtaq. \r\n<p>3. Menumbuhkankembangkan pola pikir dan sikap yang berwawasan lingkungan.\r\n<p>4. Memelihara dan meningkatkan sikap akhlakul karimah.', ''),
(4, 'Sejarah', '<p>MAN (Madrasah Aliyah Negeri) 1 Sumedang merupakan sebuah institusi pendidikan jenjang tingkat atas yang berada di bawah naungan Kementerian Agama. Lokasinya di Kecamatan Cimalaka, di pinggir jalan raya Cimalaka-Tanjungkerta. Perjalanan panjang sekolah ini dimulai dari berdirinya (Pendidikan Guru Agama Negeri) PGAN Sumedang di Cimalaka pada tahun 1967. Sebelum menjadi PGAN namanya adalah PGA Muhammadiyah keempat Sumedang yang berdiri pada tahun 1953.\r\n\r\n<p>Pada tahun 1953 di Sumedang berdiri lembaga pendidikan PGA (Pendidikan Guru Agama) Muhammadiyah 4th. Sekolah ini tidak memiliki tempat yang tetap, tapi tempat berpindah-pindah. Pada awal berdirinya menumpang tempat di SGB I. Kemudian pada tahun 1955 pindah ke SGB IV (SMUN 1 Sumedang sekarang) dan pada tahun 1963 pindah lagi ke Madrasah Islam atau MIS (SLTP NU sekarang).\r\n\r\n<p>Pada tanggal 25 September 1967 PGA Muhammadiyah 4th Sumedang dijadikan lembaga pendidikan PGA Negeri melalui Surat Keputusan Menteri Agama RI Nomor: 114/1967.', '');

-- --------------------------------------------------------

--
-- Table structure for table `akses_menu`
--

CREATE TABLE `akses_menu` (
  `id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `akses_menu`
--

INSERT INTO `akses_menu` (`id`, `role_id`, `menu_id`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 1, 3),
(4, 1, 4),
(5, 2, 2),
(6, 2, 4),
(7, 3, 3),
(8, 3, 4);

-- --------------------------------------------------------

--
-- Table structure for table `data_guru`
--

CREATE TABLE `data_guru` (
  `id` int(3) NOT NULL,
  `NIP` varchar(13) NOT NULL,
  `nama_guru` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_guru`
--

INSERT INTO `data_guru` (`id`, `NIP`, `nama_guru`) VALUES
(2, '1911012311451', 'Ade Hodijah, S.Com., M.Com'),
(3, '1911012311452', 'Ade Chandra, S.Com., M.,Com'),
(4, '1911012311453', 'Ani Yuliani, S.Com., M.Com'),
(5, '1911012311455', 'Iwan Awaludin, S.Com., M.Com'),
(8, '1911012311455', 'Maesevli, S.Com., M.,Com'),
(11, '1911012311456', 'Bambang Wisnuadi, S.Com., M.com');

-- --------------------------------------------------------

--
-- Table structure for table `data_kelas`
--

CREATE TABLE `data_kelas` (
  `id` int(3) NOT NULL,
  `NIP` varchar(13) NOT NULL,
  `nama_kelas` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_kelas`
--

INSERT INTO `data_kelas` (`id`, `NIP`, `nama_kelas`) VALUES
(2, '1911012311451', 'Kelas Project'),
(3, '1911012311453', 'Kelas Dasar-Dasar Pemograman'),
(4, '1911012311454', 'Kelas Internet Of Thing'),
(5, '1911012311455', 'Kelas Komunikasi data dan Jaringan'),
(6, '1911012311451', 'Kelas Aplikasi Mobile'),
(9, '1911012311452', 'Kelas Database'),
(10, '1911012311454', 'Kelas Matematika Diskrit');

-- --------------------------------------------------------

--
-- Table structure for table `data_siswa`
--

CREATE TABLE `data_siswa` (
  `id` int(3) NOT NULL,
  `NIS` varchar(13) NOT NULL,
  `id_kelas` varchar(13) NOT NULL,
  `nama_siswa` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_siswa`
--

INSERT INTO `data_siswa` (`id`, `NIS`, `id_kelas`, `nama_siswa`) VALUES
(4, '161511033', '2', 'Achmad Fadhitya Muharram'),
(6, '161511034', '2', 'Aditia Nugraha'),
(7, '161511035', '3', 'Cecep Sutisna'),
(8, '161511036', '4', 'Delvin Prasetyadi'),
(9, '161511037', '5', 'Dewi Roaza'),
(10, '161511038', '2', 'Fachri Hammad '),
(11, '161511038', '2', 'Farrel Priambodo'),
(12, '161511039', '7', 'Fakhri Waliyudin Nugraha'),
(13, '161511040', '2', 'Fajar Panca Saputra'),
(14, '161511041', '3', 'Fauzan Akmal Khalqi');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id` int(13) NOT NULL,
  `nama_menu` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id`, `nama_menu`) VALUES
(1, 'Admin'),
(2, 'Siswa'),
(3, 'Guru'),
(4, 'Umum');

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `id` int(11) NOT NULL,
  `role` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`id`, `role`) VALUES
(1, 'admin'),
(2, 'siswa'),
(3, 'guru');

-- --------------------------------------------------------

--
-- Table structure for table `sub_menu`
--

CREATE TABLE `sub_menu` (
  `id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `url` varchar(100) NOT NULL,
  `is_active` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sub_menu`
--

INSERT INTO `sub_menu` (`id`, `menu_id`, `judul`, `url`, `is_active`) VALUES
(1, 4, 'About', 'c_about', 1),
(2, 3, 'Report Mengajar', 'c_rmengajar', 1),
(3, 1, 'Data Siswa', 'c_siswa', 1),
(4, 1, 'Data Guru', 'c_guru', 1),
(5, 1, 'Data Kelas', 'c_kelas', 1),
(6, 2, 'Report Belajar', 'c_rbelajar', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(3) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `name` varchar(100) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(1) NOT NULL,
  `date_created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `name`, `role_id`, `is_active`, `date_created`) VALUES
(17, '161511048', '080474ce19e538f76f00991a5db9a628', 'Fauzan Akmal Khalqi', 3, 1, '2019-09-12 09:25:17'),
(18, '161511036', '182c02aeb5d3c3ce26786024400f4890', 'Cecep Sutisna', 1, 1, '2019-09-12 09:26:17'),
(19, '161511045', '0f4f2c56d8b9525a0baff9177bff2e91', 'Fajar Panca Saputra', 2, 1, '2019-09-12 09:27:09');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `akses_menu`
--
ALTER TABLE `akses_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_guru`
--
ALTER TABLE `data_guru`
  ADD PRIMARY KEY (`id`,`NIP`);

--
-- Indexes for table `data_kelas`
--
ALTER TABLE `data_kelas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `NIP` (`NIP`);

--
-- Indexes for table `data_siswa`
--
ALTER TABLE `data_siswa`
  ADD PRIMARY KEY (`id`,`NIS`),
  ADD KEY `id_kelas` (`id_kelas`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub_menu`
--
ALTER TABLE `sub_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `akses_menu`
--
ALTER TABLE `akses_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `data_guru`
--
ALTER TABLE `data_guru`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `data_kelas`
--
ALTER TABLE `data_kelas`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `data_siswa`
--
ALTER TABLE `data_siswa`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(13) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `sub_menu`
--
ALTER TABLE `sub_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
