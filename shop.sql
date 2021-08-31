-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 17, 2021 at 12:30 PM
-- Server version: 10.4.16-MariaDB
-- PHP Version: 7.4.12

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
  `PRICE` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`ID`, `NAME`, `IMAGE`, `PRICE`) VALUES
(1, 'Regular Takoyaki', 'image/as.jpg', 50),
(2, 'TVL-WHITE', 'images/tvl white.png', 190),
(3, 'MARITIME-BLACK', 'images/maritime black.png', 190),
(4, 'MARITIME-WHITE', 'images/maritime white.png', 190),
(5, 'ABM - BLACK', 'images/abm black.png', 190),
(6, 'ABM - WHITE', 'images/abm white.png', 190),
(7, 'GAS WHITE', 'images/gas white.png', 190),
(8, 'GAS BLACK', 'images/gas black.png', 190);

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
  `Mode of payment` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `shipping_address`
--

INSERT INTO `shipping_address` (`ID`, `first_name`, `last_name`, `address`, `phone`, `email`, `orders`, `Mode of payment`) VALUES
(16, 'James', 'Lebron', '231 zone 55 manila', 2147483647, 'james@gmail.com', '[{\"ID\":\"3\",\"NAME\":\"MARITIME-BLACK\",\"PRICE\":\"190\",\"quantity\":\"1\"},{\"ID\":\"8\",\"NAME\":\"GAS BLACK\",\"PRICE\":\"190\",\"quantity\":4},{\"ID\":\"7\",\"NAME\":\"GAS WHITE\",\"PRICE\":\"190\",\"quantity\":\"1\"}]', ''),
(17, 'Bimbo ', 'Escobar', 'lot 3 blk6', 2147483647, 'adasdsa@gmail.com', '[{\"ID\":\"6\",\"NAME\":\"ABM - WHITE\",\"PRICE\":\"190\",\"quantity\":\"4\"}]', ''),
(18, 'Json', 'Libre', 'Taga diyan di makita st', 0, '', '[{\"ID\":\"8\",\"NAME\":\"GAS BLACK\",\"PRICE\":\"190\",\"quantity\":\"1\"}]', ''),
(19, 'wally', 'gaynor', 'asdawa', 926549565, 'gaynor@gmail.com', '[{\"ID\":\"2\",\"NAME\":\"TVL-WHITE\",\"PRICE\":\"190\",\"quantity\":5}]', ''),
(20, 'adsad', 'asdad', 'sadsd', 0, 'adawdawd@', '[{\"ID\":\"6\",\"NAME\":\"ABM - WHITE\",\"PRICE\":\"190\",\"quantity\":\"1\"}]', ''),
(21, 'Jm', 'Go', 'Loyt', 2147483647, 'assd@gmail.com', '[{\"ID\":\"6\",\"NAME\":\"ABM - WHITE\",\"PRICE\":\"190\",\"quantity\":\"1\"},{\"ID\":\"5\",\"NAME\":\"ABM - BLACK\",\"PRICE\":\"190\",\"quantity\":\"2\"}]', ''),
(22, '', '', '', 0, '', '[{\"ID\":\"6\",\"NAME\":\"ABM - WHITE\",\"PRICE\":\"190\",\"quantity\":\"1\"}]', ''),
(23, '', '', '', 0, '', '[{\"ID\":\"5\",\"NAME\":\"ABM - BLACK\",\"PRICE\":\"190\",\"quantity\":\"1\"}]', ''),
(24, 'Benedict', 'Escobar', 'asda', 0, 'benedict.escobar2002@gmail.com', '[{\"ID\":\"1\",\"NAME\":\"TVL-BLACK\",\"PRICE\":\"190\",\"quantity\":\"1\"}]', ''),
(25, '', '', '', 0, '', '[{\"ID\":\"1\",\"NAME\":\"Regular Takoyaki\",\"PRICE\":\"50\",\"quantity\":12}]', '');

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
  MODIFY `ID` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
