-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 15, 2024 at 05:07 PM
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
-- Table structure for table `can_select`
--

CREATE TABLE `can_select` (
  `c_id` int(9) NOT NULL,
  `c_name` varchar(255) NOT NULL,
  `c_vote` int(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `can_select`
--

INSERT INTO `can_select` (`c_id`, `c_name`, `c_vote`) VALUES
(2, 'Sanika', 4),
(6, 'Diksha', 1),
(8, 'Sachin Sagar Jalakoti', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `can_select`
--
ALTER TABLE `can_select`
  ADD PRIMARY KEY (`c_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `can_select`
--
ALTER TABLE `can_select`
  MODIFY `c_id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
