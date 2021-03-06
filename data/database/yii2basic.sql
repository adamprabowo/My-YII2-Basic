-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 10, 2020 at 03:30 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `yii2basic`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories_stock`
--

CREATE TABLE `categories_stock` (
  `id` int(11) NOT NULL,
  `description` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories_stock`
--

INSERT INTO `categories_stock` (`id`, `description`) VALUES
(1, 'ATK'),
(2, 'RTK (RUMAH TANGGA KANTOR)'),
(3, 'PLASTIK KLIP'),
(4, 'BAHAN PENDUKUNG LAB');

-- --------------------------------------------------------

--
-- Table structure for table `incoming_stock`
--

CREATE TABLE `incoming_stock` (
  `id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `incoming_no` varchar(45) NOT NULL,
  `po_id` int(11) DEFAULT 0,
  `date` datetime DEFAULT NULL,
  `item` varchar(100) NOT NULL,
  `price` int(20) NOT NULL,
  `po_number` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `incoming_stock`
--

INSERT INTO `incoming_stock` (`id`, `category_id`, `incoming_no`, `po_id`, `date`, `item`, `price`, `po_number`) VALUES
(1, 1, '0004/IN-GA/jkt/XII/20', 2, '2020-02-05 00:02:00', 'WATER COOLANT', 100000, '0001/NPO-PS/jkt/XII/19'),
(2, 2, '0002/IN-GA/jkt/XII/19', 4, '2019-01-23 00:01:00', 'TINTA', 50000, '0002/NPO-PS/jkt/XII/19'),
(3, 3, '0003/IN-GA/jkt/XII/19', NULL, '2019-12-18 00:12:00', 'AIR ACCU', 200000, '0003/NPO-PS/jkt/XII/19'),
(5, 4, '0009/IN-GA/jkt/XII/20', 0, '2020-02-09 00:02:00', 'Komputer', 5000000, 'test123'),
(6, 1, '0010/IN-GA/jkt/XII/20', 0, '2020-02-09 00:02:00', 'Laptop', 6500000, 'test1234'),
(7, 2, '0011/IN-GA/jkt/XII/20', 0, '2020-02-10 00:02:00', 'Kulkas', 1000000, 'test123456');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `username` varchar(30) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `authKey` varchar(50) DEFAULT NULL,
  `accessToken` varchar(50) DEFAULT NULL,
  `role` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `password`, `authKey`, `accessToken`, `role`) VALUES
(1, 'admin', 'admin', 'admin-12345', 'admin1234567890zzzz', 'Admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories_stock`
--
ALTER TABLE `categories_stock`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `incoming_stock`
--
ALTER TABLE `incoming_stock`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_incoming_stock_po1_idx` (`po_id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories_stock`
--
ALTER TABLE `categories_stock`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `incoming_stock`
--
ALTER TABLE `incoming_stock`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
