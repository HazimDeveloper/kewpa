-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 29, 2023 at 03:43 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `registration`
--

-- --------------------------------------------------------

--
-- Table structure for table `kewpa`
--

CREATE TABLE `kewpa` (
  `id` int(20) NOT NULL,
  `no_id` varchar(20) NOT NULL,
  `tarikh_do` date NOT NULL,
  `id_unit` varchar(250) NOT NULL,
  `tarikh_kerja` date NOT NULL,
  `butir_kerja` varchar(300) NOT NULL,
  `no_kontrak` varchar(20) NOT NULL,
  `syarikat` varchar(300) NOT NULL,
  `bq` varchar(200) NOT NULL,
  `qty` int(20) NOT NULL,
  `unit` varchar(20) NOT NULL,
  `kadarharga` double(255,2) NOT NULL,
  `jumlah` double(255,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kewpa`
--

INSERT INTO `kewpa` (`id`, `no_id`, `tarikh_do`, `id_unit`, `tarikh_kerja`, `butir_kerja`, `no_kontrak`, `syarikat`, `bq`, `qty`, `unit`, `kadarharga`, `jumlah`) VALUES
(1, '18/36', '2021-03-02', 'KKT-AC-2009-WAL-46', '2021-02-09', 'BUANG KESUMBATAN PADA DRAIN PIPE', 'UiTM/SH/3/4/19', 'G TWO ELECTRO SERVICE', 'D10/12', 1, 'NOS', 96.00, 96.00),
(2, '18/36', '2021-03-02', 'KKT-AC-2012-CAS-147', '2021-02-03', 'PENGGANTIAN HERMATIC ROTARY/RECIPROCATING COMPRESSOR 5.0HP', 'UiTM/SH/3/4/19', 'G TWO ELECTRO SERVICE', '2.1', 1, 'NOS', 2400.00, 2400.00),
(3, '18/36', '2021-03-02', 'KKT-AC-2012-CAS-147', '2021-02-03', 'TAMBAH GAS R22', 'UiTM/SH/3/4/19', 'G TWO ELECTRO SERVICE', '-', 7, 'KG', 30.00, 210.00),
(4, '18/36', '2021-03-02', 'KKT-AC-2012-CAS-147', '2021-02-03', 'TUKAR FILTER DRIER CORE 3/8\"', 'UiTM/SH/3/4/19', 'G TWO ELECTRO SERVICE', 'D10/12', 1, 'NOS', 168.00, 168.00),
(5, '18/36', '2021-03-02', 'KKT-AC-2009-WAL-96', '2021-02-17', 'PENGGANTIAN FAN CAPASITOR 1.0HP', 'UiTM/SH/3/4/19', 'G TWO ELECTRO SERVICE', '-', 1, 'NOS', 72.00, 72.00),
(6, '18/36', '2021-03-02', 'KKT-AC-2009-WAL-96', '2021-03-02', 'TAMBAH GAS R22', 'UiTM/SH/3/4/19', 'G TWO ELECTRO SERVICE', '9.22', 7, 'KG', 30.00, 210.00),
(7, '19/36', '2021-04-05', 'KKT-AC-2013-WAL-172', '2021-03-10', 'MANUAL SERVIS 2.5HP', 'UiTM/SH/3/4/19', 'G TWO ELECTRO SERVICE', '', 1, 'NOS', 40.00, 40.00),
(8, '19/36', '2021-04-05', 'KKT-AC-2013-WAL-173', '2021-03-10', 'MANUAL SERVIS 2.5HP', 'UiTM/SH/3/4/19', 'G TWO ELECTRO SERVICE', '', 1, 'NOS', 40.00, 40.00),
(9, '19/36', '2021-04-05', 'KKT-AC-2013-WAL-174', '2021-03-10', 'MANUAL SERVIS 2.5HP', 'UiTM/SH/3/4/19', 'G TWO ELECTRO SERVICE', '', 1, 'NOS', 40.00, 40.00),
(10, '19/36', '2021-04-05', 'KKT-AC-2013-WAL-175', '2021-03-10', 'MANUAL SERVIS 2.5HP', 'UiTM/SH/3/4/19', 'G TWO ELECTRO SERVICE', '', 1, 'NOS', 40.00, 40.00);

-- --------------------------------------------------------

--
-- Table structure for table `kewpaa1`
--

CREATE TABLE `kewpaa1` (
  `kew_id` int(20) NOT NULL,
  `no_do` varchar(100) NOT NULL,
  `tarikh_do` date NOT NULL,
  `no_id` varchar(300) NOT NULL,
  `tarikh_kerja` date NOT NULL,
  `butir_kerja` varchar(300) NOT NULL,
  `kontrak` varchar(300) NOT NULL,
  `syarikat` varchar(300) NOT NULL,
  `qty` double(20,2) NOT NULL,
  `unit` varchar(10) NOT NULL,
  `kadar` double(255,2) NOT NULL,
  `jumlah` double(255,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kewpaa1`
--

INSERT INTO `kewpaa1` (`kew_id`, `no_do`, `tarikh_do`, `no_id`, `tarikh_kerja`, `butir_kerja`, `kontrak`, `syarikat`, `qty`, `unit`, `kadar`, `jumlah`) VALUES
(1, '', '0000-00-00', '', '0000-00-00', '', '', '', 0.00, '', 0.00, 0.00),
(2, '', '0000-00-00', '', '0000-00-00', '', '', '', 0.00, '', 0.00, 0.00),
(18, '02/03/2021', '0000-00-00', '09/02/2021', '0000-00-00', 'UiTM/SH/3/4/19', 'G TWO ELECTRO SERVICE', '1.00', 0.00, '96.00', 96.00, 0.00),
(19, '', '0000-00-00', '', '0000-00-00', '', '', '', 0.00, '', 0.00, 0.00);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kewpa`
--
ALTER TABLE `kewpa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kewpaa1`
--
ALTER TABLE `kewpaa1`
  ADD PRIMARY KEY (`kew_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kewpa`
--
ALTER TABLE `kewpa`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `kewpaa1`
--
ALTER TABLE `kewpaa1`
  MODIFY `kew_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
