-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 30, 2022 at 12:44 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cms`
--

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `SL.NO` int(11) NOT NULL,
  `username` varchar(60) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`SL.NO`, `username`, `password`) VALUES
(1, 'yasaswini', '8688799582'),
(2, 'girish', '1234'),
(3, 'yasaswini1', '8688799582'),
(4, 'mani', 'mani@123'),
(5, 'test', 'test'),
(6, 'test41', 'tets'),
(7, 'Tarun', '1234'),
(8, 'farmer4', '1234'),
(9, 'charan', '1234'),
(10, 'yasaswinik', '12345'),
(11, 'test_mobile', 'password');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(11) NOT NULL,
  `firstname` varchar(60) NOT NULL,
  `lastname` varchar(90) NOT NULL,
  `username` varchar(86) NOT NULL,
  `age` int(11) NOT NULL,
  `mobile` bigint(20) NOT NULL,
  `password` varchar(88) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `firstname`, `lastname`, `username`, `age`, `mobile`, `password`) VALUES
(1, 'girish', 'n', 'girish', 18, 2147483647, '1234'),
(2, 'Yasaswini', 'K', 'yasaswini1', 4, 2147483647, '8688799582'),
(3, 'mani', 'A', 'mani', 20, 2147483647, 'mani@123'),
(4, 'test', 'test', 'test', 20, 2147483647, 'test'),
(5, 'test', 'test', 'test41', 20, 9876543210, 'tets'),
(6, 'Tarun', 'Dasari', 'Tarun', 21, 9505418812, '1234'),
(7, 'farmer', '1', 'farmer4', 88, 8728, '1234'),
(8, 'charan', 'k', 'charan', 90, 679, '1234'),
(9, 'Yasaswini', 'K', 'yasaswinik', 77, 8688799582, '12345'),
(10, 'Test ', 'MOBILE', 'test_mobile', 20, 9876543210, 'password');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`SL.NO`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `SL.NO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
