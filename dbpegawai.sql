-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 17, 2021 at 01:37 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbpegawai`
--

-- --------------------------------------------------------

--
-- Table structure for table `divisi`
--

CREATE TABLE `divisi` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `divisi`
--

INSERT INTO `divisi` (`id`, `nama`) VALUES
(1, 'HRD'),
(2, 'Keuangan'),
(3, 'Operasional'),
(4, 'Marketing');

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `id` int(11) NOT NULL,
  `fullname` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(40) NOT NULL,
  `role` enum('admin','manager','staff') NOT NULL,
  `foto` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`id`, `fullname`, `username`, `password`, `role`, `foto`) VALUES
(1, 'Admin', 'admin', '90b9aa7e25f80cf4f64e990b78a9fc5ebd6cecad', 'admin', 'admin.jpg'),
(2, 'Staff', 'staff', '6a91eb6ae9cc8e3a67d32b286c56c3431c1dc980', 'staff', 'staff.jpg'),
(3, 'Manager', 'manager', 'dfbaa3b61caa3a319f463cc165085aa8c822d2ce', 'manager', 'manager.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `pegawai`
--

CREATE TABLE `pegawai` (
  `id` int(11) NOT NULL,
  `nip` varchar(5) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `agama` enum('Islam','Kristen Protestan','Kristen Khatolik','Hindu','Buddha','Khonghucu') NOT NULL,
  `iddivisi` int(11) DEFAULT NULL,
  `foto` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pegawai`
--

INSERT INTO `pegawai` (`id`, `nip`, `nama`, `email`, `agama`, `iddivisi`, `foto`) VALUES
(1, 'HD122', 'slamet', 'rbt12@gmail.com', 'Islam', 1, 'slamet.jpg'),
(2, 'KEU01', 'dadang', 'JH999@gmail.com', 'Islam', 2, 'dadang.jpg'),
(3, 'OPE10', 'Tony', 'TN101@gmail.com', 'Kristen Khatolik', 3, 'tony.jpg'),
(4, 'MKT33', 'Ainsley', 'MKT33@gmail.com', 'Buddha', 4, 'ainsley.jpg'),
(6, 'MKT34', 'Tomy', 'MKT34@gmail.com', 'Khonghucu', 4, 'tomy.jpg'),
(7, 'KEU02', 'Tomo', 'TM123@gmail.com', 'Hindu', 2, 'tomo.jpg'),
(9, 'OP11', 'Welbert', 'wb11@gmail.com', 'Kristen Protestan', 3, 'welbert.jpg'),
(15, 'OP15', 'Joji', 'jo54@gmail.com', 'Kristen Protestan', 3, 'joji.jpg'),
(16, 'OP5', 'Jack', 'jack12@gmail.com', 'Kristen Khatolik', 3, 'jack.jpg'),
(18, 'OP20', 'Dany', 'dany6@gmail.com', 'Islam', 3, 'dany.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `divisi`
--
ALTER TABLE `divisi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nip` (`nip`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `divisi`
--
ALTER TABLE `divisi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pegawai`
--
ALTER TABLE `pegawai`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
