-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 30, 2016 at 04:10 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_restoran`
--
DROP DATABASE `db_restoran`;
CREATE DATABASE IF NOT EXISTS `db_restoran` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `db_restoran`;

-- --------------------------------------------------------

--
-- Table structure for table `data_level`
--

CREATE TABLE `data_level` (
  `level` varchar(3) NOT NULL,
  `sebagai` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_level`
--

INSERT INTO `data_level` (`level`, `sebagai`) VALUES
('1', 'Direktur'),
('2', 'Pelayan'),
('3', 'Kasir'),
('4', 'Koki'),
('5', 'Pantry'),
('6', 'Customer Service'),
('99', 'Administrator');

-- --------------------------------------------------------

--
-- Table structure for table `data_meja`
--

CREATE TABLE `data_meja` (
  `kode_meja` varchar(5) NOT NULL,
  `kapasitas` int(11) NOT NULL,
  `status` enum('Kosong','Terisi','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_meja`
--

INSERT INTO `data_meja` (`kode_meja`, `kapasitas`, `status`) VALUES
('A001', 2, 'Kosong'),
('A002', 2, 'Kosong'),
('A003', 2, 'Kosong'),
('A004', 2, 'Kosong'),
('A005', 2, 'Kosong'),
('A006', 2, 'Kosong'),
('A007', 2, 'Kosong'),
('A008', 2, 'Kosong'),
('A009', 2, 'Kosong'),
('A010', 2, 'Kosong'),
('A011', 2, 'Kosong'),
('A012', 2, 'Kosong'),
('A013', 2, 'Kosong'),
('A014', 2, 'Kosong'),
('A015', 2, 'Kosong'),
('A016', 2, 'Kosong'),
('A017', 2, 'Kosong'),
('A018', 2, 'Kosong'),
('A019', 2, 'Kosong'),
('A020', 2, 'Kosong'),
('B001', 4, 'Kosong'),
('B002', 4, 'Kosong'),
('B003', 4, 'Kosong'),
('B004', 4, 'Kosong'),
('B005', 4, 'Kosong'),
('B006', 4, 'Kosong'),
('B007', 4, 'Kosong'),
('B008', 4, 'Kosong'),
('B009', 4, 'Kosong'),
('B010', 4, 'Kosong'),
('C001', 10, 'Kosong'),
('C002', 10, 'Kosong'),
('C003', 10, 'Kosong');

-- --------------------------------------------------------

--
-- Table structure for table `data_user`
--

CREATE TABLE `data_user` (
  `userid` varchar(40) NOT NULL,
  `username` varchar(40) NOT NULL,
  `password` varchar(100) NOT NULL,
  `level` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_user`
--

INSERT INTO `data_user` (`userid`, `username`, `password`, `level`) VALUES
('12345', 'rizky', 'rizky', '2'),
('234212', 'coba', 'coba', '3');

-- --------------------------------------------------------

--
-- Table structure for table `data_waiting-list`
--

CREATE TABLE `data_waiting-list` (
  `id` int(11) NOT NULL,
  `nama_pelanggan` varchar(50) NOT NULL,
  `kapasitas` int(11) NOT NULL,
  `status` enum('Menunggu','Sudah Masuk','','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_level`
--
ALTER TABLE `data_level`
  ADD PRIMARY KEY (`level`);

--
-- Indexes for table `data_meja`
--
ALTER TABLE `data_meja`
  ADD PRIMARY KEY (`kode_meja`);

--
-- Indexes for table `data_user`
--
ALTER TABLE `data_user`
  ADD PRIMARY KEY (`userid`),
  ADD KEY `fk_level` (`level`);

--
-- Indexes for table `data_waiting-list`
--
ALTER TABLE `data_waiting-list`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_waiting-list`
--
ALTER TABLE `data_waiting-list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `data_user`
--
ALTER TABLE `data_user`
  ADD CONSTRAINT `fk_level` FOREIGN KEY (`level`) REFERENCES `data_level` (`level`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
