-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 13, 2021 at 11:17 AM
-- Server version: 10.3.27-MariaDB-cll-lve
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `slumber6_senangmy`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `prdid` int(10) NOT NULL,
  `prname` varchar(100) NOT NULL,
  `prprice` varchar(10) NOT NULL,
  `prdescription` varchar(800) NOT NULL,
  `primage` varchar(10) NOT NULL,
  `prtype` varchar(50) NOT NULL,
  `prlocation` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(40) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`prdid`, `prname`, `prprice`, `prdescription`, `primage`, `prtype`, `prlocation`, `name`, `phone`, `email`, `password`) VALUES
(1, 'Harley Nighster 1200', '45000', '2011 Harley', '5WYjhEyZG3', 'Motorcycle', 'Alor Setar', 'Ahmad Hanis Mohd Shabli', '0194702493', 'slumberjer@gmail.com', 'f43c298b8537c7a23e6c45d0bcf042e5b5d0ee95'),
(2, 'Racing Drone', '500', 'Very Fast', '6g5SvGINZn', 'Computer', 'Alor Setar', 'Ahmad Hanis Mohd Shabli', '0194702493', 'slumberjer@gmail.com', 'c0ae0ce7d4408174b826864a1ad92a1a45e92749'),
(3, 'SailBoat RC', '559', 'Volantex RC', 'AtakP8WuCl', 'Computer', 'Alor Setar', 'Ali bin Abu', '0194555443', 'ali@gmail.com', '8a5cd7d97edc0064a520de28e34ac8d3c069cb79'),
(4, 'SailBoat RC', '559', 'Volantex RC,Test data,something data,', '6sjNwhCa4T', 'Computer', 'Alor Setar', 'DROP TABLE user', '0194555443', 'ali@gmail.com', '479dd492844fd00526e9ee11b1c16ae50770878e'),
(5, 'SailBoat RC', '559', 'Volantex RC,Test data,something data,', 'A9iP5V03ML', 'Computer', 'Alor Setar', 'DROP TABLE user', '0194555443,', 'ali@gmail.com', '991163a880fc6437e24c28bc4af44021fdd27f65'),
(6, 'SailBoat RC', '559', 'Volantex\" RC,Test data,something data,', 'Kl6Wpd7Ni4', 'Computer', 'Alor Setar', 'DROP TABLE user', '019455544', 'ali@gmail.com', '5a051d5c12743bf78a2a98a837ab5dfed6bc30ba'),
(7, 'Sailboat', '559', 'Volantex', '9SKPWfeaUJ', 'Motorcycle', 'Alor Setar', 'Ahmad Hanis Mohd Shabli', '0194702493', 'slumberjer@gmail.com', 'a02a0342558b1582b5c8c91a8acf2dadde1e849a'),
(8, 'Sailboat\'', '559', 'Volantex', 'KpkPv4NLEG', 'Motorcycle', 'Alor Setar', 'Ahmad Hanis Mohd Shabli', '0194702493', 'slumberjer@gmail.com', '26b39267ef8c5546df920d6d67646eee8738c508');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`prdid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `prdid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
