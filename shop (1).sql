-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 28, 2021 at 09:40 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `ID` int(20) NOT NULL,
  `NAME` varchar(25) NOT NULL,
  `IMAGE` varchar(88) NOT NULL,
  `PRICE` int(20) NOT NULL,
  `total` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`ID`, `NAME`, `IMAGE`, `PRICE`, `total`) VALUES
(1, 'TVL-BLACK', 'images/tvl black.png', 190, 0),
(2, 'TVL-WHITE', 'images/tvl white.png', 190, 0),
(3, 'MARITIME-BLACK', 'images/maritime black.png', 190, 0),
(4, 'MARITIME-WHITE', 'images/maritime white.png', 190, 0),
(5, 'ABM - BLACK', 'images/abm black.png', 190, 0),
(6, 'ABM - WHITE', 'images/abm white.png', 190, 0),
(7, 'GAS WHITE', 'images/gas white.png', 190, 0),
(8, 'GAS BLACK', 'images/gas black.png', 190, 0);

-- --------------------------------------------------------

--
-- Table structure for table `shipping_address`
--

CREATE TABLE `shipping_address` (
  `ID` int(50) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `phone` int(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `orders` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`orders`)),
  `total` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `shipping_address`
--

INSERT INTO `shipping_address` (`ID`, `first_name`, `last_name`, `address`, `phone`, `email`, `orders`, `total`) VALUES
(16, 'Benedict', 'Escobar', 'Lot 3 Blk 6 Richland V Franco St.', 2147483647, 'escobarbenedict@gmail.com', '[{\"ID\":\"6\",\"NAME\":\"ABM - WHITE\",\"PRICE\":\"190\",\"quantity\":\"1\"}]', 0),
(17, '', '', '', 0, '', '[{\"ID\":\"6\",\"NAME\":\"ABM - WHITE\",\"PRICE\":\"190\",\"quantity\":2}]', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `shipping_address`
--
ALTER TABLE `shipping_address`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `ID` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `shipping_address`
--
ALTER TABLE `shipping_address`
  MODIFY `ID` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
