-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 21, 2024 at 10:13 AM
-- Server version: 5.7.24
-- PHP Version: 7.2.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `trakindo.tech`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_daily`
--

CREATE TABLE `tb_daily` (
  `id_daily` int(11) NOT NULL,
  `id_user` int(25) NOT NULL,
  `id_planjob` int(25) NOT NULL,
  `lokasi` varchar(50) NOT NULL,
  `id_mine` int(25) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `tanggal_mulai` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `tanggal_selesai` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` varchar(50) NOT NULL,
  `catatan` varchar(255) NOT NULL,
  `type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_mine`
--

CREATE TABLE `tb_mine` (
  `id_mine` int(11) NOT NULL,
  `name` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_mine`
--

INSERT INTO `tb_mine` (`id_mine`, `name`) VALUES
(1, 'DMLZ'),
(2, 'GBC'),
(3, 'PB4'),
(4, 'BG'),
(5, 'KL');

-- --------------------------------------------------------

--
-- Table structure for table `tb_penginstalan`
--

CREATE TABLE `tb_penginstalan` (
  `id_penginstalan` int(11) NOT NULL,
  `id_user` int(25) NOT NULL,
  `tanggal` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `tipe` tinyint(1) DEFAULT NULL COMMENT '1: Install 2: Remove',
  `nama_barang` varchar(255) NOT NULL,
  `part_number` varchar(25) NOT NULL,
  `lokasi` varchar(50) NOT NULL,
  `id_mine` int(25) NOT NULL,
  `ip` varchar(25) NOT NULL,
  `mac` varchar(25) NOT NULL,
  `catatan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_planjob`
--

CREATE TABLE `tb_planjob` (
  `id_planjob` int(11) NOT NULL,
  `id_user` int(25) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `tanggal` date NOT NULL,
  `week` tinyint(1) NOT NULL,
  `lokasi` varchar(50) NOT NULL,
  `id_mine` int(25) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_users`
--

CREATE TABLE `tb_users` (
  `id_user` int(11) NOT NULL,
  `id_ptfi` varchar(25) NOT NULL,
  `username` varchar(25) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `address` text,
  `sex` enum('L','P') DEFAULT NULL,
  `image` varchar(255) DEFAULT 'default.png',
  `level` tinyint(4) DEFAULT '2' COMMENT '1 admin, 2 technician',
  `position` tinyint(1) NOT NULL COMMENT '1: Technician 2: Analyst 3. Foreman 4.: Supervisor',
  `crew` tinyint(1) DEFAULT NULL COMMENT '4: Deploy 5: Analyst'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_users`
--

INSERT INTO `tb_users` (`id_user`, `id_ptfi`, `username`, `password`, `name`, `address`, `sex`, `image`, `level`, `position`, `crew`) VALUES
(1, '80028829', '10000740', '$2y$10$pmnd6qoJ8EtShr6Lk.QpVu4ZKR7YTdOL1Pcju/WWCESHi2ZY639ti', 'Iriansyah Ahmad M', 'RIDGECAMP AA220', 'L', 'default.png', 1, 1, 1),
(2, '80032879', '10001887', '$2y$10$pmnd6qoJ8EtShr6Lk.QpVu4ZKR7YTdOL1Pcju/WWCESHi2ZY639ti', 'Muh Ichsan', 'RC O105', NULL, 'default.png', 2, 2, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_daily`
--
ALTER TABLE `tb_daily`
  ADD PRIMARY KEY (`id_daily`);

--
-- Indexes for table `tb_mine`
--
ALTER TABLE `tb_mine`
  ADD PRIMARY KEY (`id_mine`);

--
-- Indexes for table `tb_penginstalan`
--
ALTER TABLE `tb_penginstalan`
  ADD PRIMARY KEY (`id_penginstalan`);

--
-- Indexes for table `tb_planjob`
--
ALTER TABLE `tb_planjob`
  ADD PRIMARY KEY (`id_planjob`);

--
-- Indexes for table `tb_users`
--
ALTER TABLE `tb_users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_daily`
--
ALTER TABLE `tb_daily`
  MODIFY `id_daily` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_mine`
--
ALTER TABLE `tb_mine`
  MODIFY `id_mine` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tb_penginstalan`
--
ALTER TABLE `tb_penginstalan`
  MODIFY `id_penginstalan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_planjob`
--
ALTER TABLE `tb_planjob`
  MODIFY `id_planjob` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_users`
--
ALTER TABLE `tb_users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
