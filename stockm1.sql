-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 26, 2024 at 02:42 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `XWIZDOMS`
--

-- --------------------------------------------------------

--
-- Table structure for table `stockm1`
--

CREATE TABLE `stockm1` (
  `Stock_Id` int(25) NOT NULL,
  `product_N1` varchar(255) NOT NULL,
  `quantity_N1` int(100) NOT NULL,
  `price_N1` int(100) NOT NULL,
  `Date_N1` varchar(222) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `stockm1`
--

INSERT INTO `stockm1` (`Stock_Id`, `product_N1`, `quantity_N1`, `price_N1`, `Date_N1`) VALUES
(20, 'TOFU', 5, 5000, '03-27-23'),
(21, 'MEAT', 10, 30000, '04-26-22'),
(22, 'CHEAPS', 20, 10000, '01-22-21'),
(23, 'CASSAVA', 10, 700, '01-12-21'),
(24, 'mangoes', 13, 1000, '06-10-15'),
(25, 'rice', 10, 10000, '02-16-24'),
(26, 'pawupawu', 10, 10000, '02-16-22'),
(27, 'vegetables', 10, 10000, '02-16-22'),
(28, 'pimpkins', 30, 50000, '01-16-21'),
(29, 'lemon', 50, 500000, '01-16-20'),
(30, 'Beans', 60, 50000, '01-16-20');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `stockm1`
--
ALTER TABLE `stockm1`
  ADD PRIMARY KEY (`Stock_Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `stockm1`
--
ALTER TABLE `stockm1`
  MODIFY `Stock_Id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
