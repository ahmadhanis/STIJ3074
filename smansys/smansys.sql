-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 18, 2020 at 02:19 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `smansys`
--

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` int(11) NOT NULL,
  `courseid` varchar(10) NOT NULL,
  `coursename` varchar(50) NOT NULL,
  `gred` varchar(2) NOT NULL,
  `sem` varchar(4) NOT NULL,
  `matric` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `courseid`, `coursename`, `gred`, `sem`, `matric`) VALUES
(7, 'STIA1011', 'Programming 1', 'B+', 'A191', '43212'),
(8, 'BJIW1002', 'Pengenalan Komunikasi', 'B', 'A192', '43212'),
(25, 'STIA1013', 'Programming 1', 'B+', 'A182', '12345'),
(27, 'STIJ1013', 'Introduction to Computer Network', 'A', 'A182', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `name` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(40) NOT NULL,
  `matric` varchar(10) NOT NULL,
  `timereg` datetime(6) NOT NULL DEFAULT current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`name`, `email`, `password`, `matric`, `timereg`) VALUES
('Ali', 'ali@gmail.com', '6367c48dd193d56ea7b0baad25b19455e529f5ee', '34534', '2020-12-13 09:58:33.166761'),
('Chong', 'chong@gmail.com', '6367c48dd193d56ea7b0baad25b19455e529f5ee', '34345', '2020-12-13 10:01:43.844888'),
('Ahmad Hanis Shabli', 'hanis@gmail.com', '6367c48dd193d56ea7b0baad25b19455e529f5ee', '12345', '2020-11-25 09:24:11.524433'),
('John Mcain', 'johnm@gmail.com', '6367c48dd193d56ea7b0baad25b19455e529f5ee', '54542', '2020-12-13 09:54:48.818128'),
('Ahmad Hanis Shabli', 'slumberjer@gmail.com', '6367c48dd193d56ea7b0baad25b19455e529f5ee', '43212', '2020-11-25 09:52:03.379124');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`email`),
  ADD UNIQUE KEY `matric` (`matric`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
