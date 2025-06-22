-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 15, 2024 at 05:08 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `voter`
--

-- --------------------------------------------------------

--
-- Table structure for table `polling_stations`
--

CREATE TABLE `polling_stations` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `number` varchar(50) NOT NULL,
  `incharge` varchar(255) NOT NULL,
  `contact_number` varchar(50) NOT NULL,
  `booths` int(11) NOT NULL,
  `registered_voters` int(11) NOT NULL,
  `latitude` decimal(10,8) NOT NULL,
  `longitude` decimal(11,8) NOT NULL,
  `accessibility` varchar(255) NOT NULL,
  `facilities` text,
  `username` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `device_name` varchar(255) NOT NULL,
  `device_ip_address` varchar(50) NOT NULL,
  `verified` int(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `polling_stations`
--

INSERT INTO `polling_stations` (`id`, `name`, `address`, `number`, `incharge`, `contact_number`, `booths`, `registered_voters`, `latitude`, `longitude`, `accessibility`, `facilities`, `username`, `pass`, `device_name`, `device_ip_address`, `verified`) VALUES
(1, 'Shruti', 'Gavali vasti,', '7499924011', 'sachin', '7499924011', 2, 199, '99.99999999', '122.00000000', 'admin', 'staff police', 'Admin', '123', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/123.0.0.0 Safari/537.36', '::1', 1),
(2, 'Asawari', 'Navi Peth', '9878654634', 'police', '7890457874', 5, 90, '99.99999999', '564.00000000', 'admin', 'Staff, police', 'asawari', '123', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/123.0.0.0 Safari/537.36', '::1', 0),
(3, 'Sachin Jalakoti', 'Gavali vasti,', '7350512745', 'police', '7499924011', 67, 200, '99.99999999', '138.00000000', 'admin', 'Police Staff', 'asawarik', '12345', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/123.0.0.0 Safari/537.36', '::1', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `polling_stations`
--
ALTER TABLE `polling_stations`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `polling_stations`
--
ALTER TABLE `polling_stations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
