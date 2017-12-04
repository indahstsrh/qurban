-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 23, 2017 at 05:03 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `qurban`
--

-- --------------------------------------------------------

--
-- Table structure for table `hewan`
--

CREATE TABLE `hewan` (
  `hewan_id` int(11) NOT NULL,
  `nama` varchar(150) NOT NULL,
  `harga` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hewan`
--

INSERT INTO `hewan` (`hewan_id`, `nama`, `harga`) VALUES
(1, 'Sapi', 10850000),
(2, 'Kambing', 1550000);

-- --------------------------------------------------------

--
-- Table structure for table `pembayaran_qurban`
--

CREATE TABLE `pembayaran_qurban` (
  `pembayaran_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `hewan_id` int(11) NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `jumlah` int(11) NOT NULL,
  `total` double NOT NULL,
  `status` enum('verified','unverified') NOT NULL DEFAULT 'unverified'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pembayaran_qurban`
--

INSERT INTO `pembayaran_qurban` (`pembayaran_id`, `user_id`, `hewan_id`, `tanggal`, `jumlah`, `total`, `status`) VALUES
(33, 29, 1, '2017-05-15 14:45:13', 2, 21700000, 'verified'),
(34, 30, 2, '2017-05-15 14:45:27', 5, 7750000, 'verified'),
(35, 31, 1, '2017-05-23 05:51:37', 7, 10850000, 'unverified');

-- --------------------------------------------------------

--
-- Table structure for table `pequrban`
--

CREATE TABLE `pequrban` (
  `pequrban_id` int(11) NOT NULL,
  `pembayaran_id` int(11) NOT NULL,
  `nama` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pequrban`
--

INSERT INTO `pequrban` (`pequrban_id`, `pembayaran_id`, `nama`) VALUES
(45, 31, '1'),
(46, 31, '2'),
(47, 31, '2'),
(48, 31, '3'),
(49, 31, '4'),
(50, 31, '5'),
(51, 31, '6'),
(52, 32, 'Beli kambing'),
(53, 32, ''),
(54, 32, ''),
(55, 32, ''),
(56, 32, ''),
(57, 32, ''),
(58, 32, ''),
(59, 33, '1'),
(60, 33, '2'),
(61, 33, '3'),
(62, 33, '4'),
(63, 33, '5'),
(64, 33, '6'),
(65, 33, '7'),
(66, 34, 'Sarah'),
(67, 34, ''),
(68, 34, ''),
(69, 34, ''),
(70, 34, ''),
(71, 34, ''),
(72, 34, ''),
(73, 35, 'indah'),
(74, 35, ''),
(75, 35, ''),
(76, 35, ''),
(77, 35, ''),
(78, 35, ''),
(79, 35, '');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `user_nama` varchar(150) NOT NULL,
  `email` varchar(150) NOT NULL,
  `password` varchar(100) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `role` enum('admin','user') NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_nama`, `email`, `password`, `phone`, `alamat`, `role`) VALUES
(13, 'Indah Siti Sarah', 'sarah@gmail.com', '9e9d7a08e048e9d604b79460b54969c3', '082320538888', 'Bandung', 'admin'),
(26, 'admin', 'admin@gmail.com', 'admin', '089756565656', 'Indonesia', 'admin'),
(27, 'Beli sapi', 'belisapi@gmail.com', 'f87f8f834b237ad853fb44cccaa18952', '0987654321', 'Bdg', 'user'),
(28, 'Beli kambing', 'belikambing@gmail.com', '4f78625cd2d2251472af996a2ba1f7cc', '0987654321', 'Bdg', 'user'),
(29, 'Indah', 'indah@gmail.com', 'f3385c508ce54d577fd205a1b2ecdfb7', '0987654321', 'Bandung', 'user'),
(30, 'Sarah', 'sarahh@gmail.com', '9e9d7a08e048e9d604b79460b54969c3', '0987654321', 'Bandung', 'user'),
(31, 'indah', 'indahsitisarah1@gmail.com', 'f3385c508ce54d577fd205a1b2ecdfb7', '083821326146', 'bdg', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `hewan`
--
ALTER TABLE `hewan`
  ADD PRIMARY KEY (`hewan_id`);

--
-- Indexes for table `pembayaran_qurban`
--
ALTER TABLE `pembayaran_qurban`
  ADD PRIMARY KEY (`pembayaran_id`);

--
-- Indexes for table `pequrban`
--
ALTER TABLE `pequrban`
  ADD PRIMARY KEY (`pequrban_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `hewan`
--
ALTER TABLE `hewan`
  MODIFY `hewan_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `pembayaran_qurban`
--
ALTER TABLE `pembayaran_qurban`
  MODIFY `pembayaran_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
--
-- AUTO_INCREMENT for table `pequrban`
--
ALTER TABLE `pequrban`
  MODIFY `pequrban_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
