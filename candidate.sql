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
-- Table structure for table `candidate`
--

CREATE TABLE `candidate` (
  `c_id` int(9) NOT NULL,
  `c_name` varchar(255) NOT NULL,
  `c_middle_name` varchar(255) NOT NULL,
  `c_last_name` varchar(255) NOT NULL,
  `c_dob` date NOT NULL,
  `c_gender` varchar(255) NOT NULL,
  `c_aaddhar_no` bigint(15) NOT NULL,
  `c_city` varchar(255) NOT NULL,
  `c_taluka` varchar(255) NOT NULL,
  `c_district` varchar(255) NOT NULL,
  `c_state` varchar(255) NOT NULL,
  `c_pincode` bigint(15) NOT NULL,
  `c_edu_degree` varchar(255) NOT NULL,
  `c_current_job` varchar(255) NOT NULL,
  `c_working_at` varchar(255) NOT NULL,
  `c_email` varchar(255) NOT NULL,
  `c_mobile_no` bigint(15) NOT NULL,
  `c_participate_in` varchar(255) NOT NULL,
  `c_party_name` varchar(255) NOT NULL,
  `c_photo` longblob NOT NULL,
  `c_party_photo` varchar(400) NOT NULL,
  `c_verified` int(9) NOT NULL,
  `c_flag` int(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `candidate`
--

INSERT INTO `candidate` (`c_id`, `c_name`, `c_middle_name`, `c_last_name`, `c_dob`, `c_gender`, `c_aaddhar_no`, `c_city`, `c_taluka`, `c_district`, `c_state`, `c_pincode`, `c_edu_degree`, `c_current_job`, `c_working_at`, `c_email`, `c_mobile_no`, `c_participate_in`, `c_party_name`, `c_photo`, `c_party_photo`, `c_verified`, `c_flag`) VALUES
(2, 'Sanika', 'Santosh', 'Patade', '2024-03-05', 'Female', 123412341234, 'solapur', 'solapur', 'solapur', 'maharashtra', 123456, 'engg', 'student', 'no', 'd@gmail.com', 123456791, 'GeneralElection', 'sfsf', 0x626a702e706e67, 'photo/bjp.png', 1, 0),
(6, 'Diksha', 'Tanaji', 'Kadam', '2004-12-29', 'Female', 123412341236, 'solapur', 'solapur', 'solapur', 'maharashtra', 123456, 'engg', 'student', 'no', 'd@gmail.com', 1231231231, 'GeneralElection', 'Congress', 0x73616d706c652e706e67, 'photo/cong.png', 1, 0),
(8, 'Sachin', 'Sagar', 'Jalakoti', '2002-07-02', 'Male', 458569325698, 'Gavali vasti,', 'Solapur', 'Solapur', 'Maharashtra', 413003, 'diploma', 'clerk', 'sswp', 'sachinjalkote45@gmail.com', 7412589632, 'candidate', 'bjp2', 0x70686f746f2f73682e6a7067, 'photo/sh.jpg', 1, 0),
(9, 'Asawari', 'Nagesh', 'Kshirsagar', '2001-01-11', 'Male', 147852369258, 'Solapur', 'Solapur', 'Solapur', 'Maharashtra', 413003, 'diploma', 'clerk', 'sswp', 'sachinjalkote45@gmail.com', 2596387415, 'candidate', 'shivsena', 0x70686f746f2f73682e6a7067, 'photo/sh.jpg', 0, 0),
(10, '', '', '', '0000-00-00', '', 0, '', '', '', '', 0, '', '', '', '', 0, '', '', 0x70686f746f2f, 'photo/', 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `candidate`
--
ALTER TABLE `candidate`
  ADD PRIMARY KEY (`c_id`),
  ADD UNIQUE KEY `c_aaddhar_no` (`c_aaddhar_no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `candidate`
--
ALTER TABLE `candidate`
  MODIFY `c_id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
