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
-- Table structure for table `voter_reg`
--

CREATE TABLE `voter_reg` (
  `v_epic_no` varchar(25) NOT NULL,
  `v_state` varchar(255) NOT NULL,
  `v_district` varchar(255) NOT NULL,
  `v_first_name` varchar(255) NOT NULL,
  `v_middle_name` varchar(256) NOT NULL,
  `v_surname` varchar(255) NOT NULL,
  `v_photo_file` varchar(255) NOT NULL,
  `v_relative` varchar(255) NOT NULL,
  `v_relative_name` varchar(255) NOT NULL,
  `v_relative_surname` varchar(255) NOT NULL,
  `v_mobile_no_type` varchar(255) NOT NULL,
  `v_mobile_no` bigint(15) NOT NULL,
  `v_mobile_otp` bigint(15) NOT NULL,
  `v_email_type` varchar(255) NOT NULL,
  `v_email_id` varchar(255) NOT NULL,
  `v_aadhaar_detail` varchar(255) NOT NULL,
  `v_aadhaar_no` bigint(15) NOT NULL,
  `v_gender` varchar(255) NOT NULL,
  `v_dob` date NOT NULL,
  `v_dob_proof_type` varchar(255) NOT NULL,
  `v_dob_proof_other` varchar(255) NOT NULL,
  `v_dob_proof_file` varchar(255) NOT NULL,
  `v_address_house_no` varchar(255) NOT NULL,
  `v_address_street` varchar(255) NOT NULL,
  `v_address_village` varchar(255) NOT NULL,
  `v_address_post_office` varchar(255) NOT NULL,
  `v_address_pin_code` bigint(15) NOT NULL,
  `v_address_tehsil` varchar(255) NOT NULL,
  `v_address_district` varchar(255) NOT NULL,
  `v_address_state` varchar(255) NOT NULL,
  `v_address_proof_type` varchar(255) NOT NULL,
  `v_address_proof_other` varchar(255) NOT NULL,
  `v_address_proof_file` varchar(255) NOT NULL,
  `v_category_of_disability` varchar(255) NOT NULL,
  `v_category_of_disability_other` varchar(255) NOT NULL,
  `v_percentage_of_disability` varchar(255) NOT NULL,
  `v_disability_certificate_attached` varchar(255) NOT NULL,
  `v_disability_certificate_file` varchar(255) NOT NULL,
  `v_family_member_name` varchar(255) NOT NULL,
  `v_family_member_relationship` varchar(255) NOT NULL,
  `v_family_member_epic` varchar(255) NOT NULL,
  `v_declaration_village` varchar(255) NOT NULL,
  `v_declaration_state` varchar(255) NOT NULL,
  `v_declaration_district` varchar(255) NOT NULL,
  `v_declaration_resident_date` date NOT NULL,
  `v_declaration_document` varchar(255) NOT NULL,
  `v_declaration_place` varchar(255) NOT NULL,
  `v_declaration_date` date NOT NULL,
  `v_captcha` varchar(255) NOT NULL,
  `v_qrcode` blob NOT NULL,
  `v_verify` varchar(255) DEFAULT NULL,
  `voting_status` varchar(255) DEFAULT NULL,
  `v_flag` int(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `voter_reg`
--

INSERT INTO `voter_reg` (`v_epic_no`, `v_state`, `v_district`, `v_first_name`, `v_middle_name`, `v_surname`, `v_photo_file`, `v_relative`, `v_relative_name`, `v_relative_surname`, `v_mobile_no_type`, `v_mobile_no`, `v_mobile_otp`, `v_email_type`, `v_email_id`, `v_aadhaar_detail`, `v_aadhaar_no`, `v_gender`, `v_dob`, `v_dob_proof_type`, `v_dob_proof_other`, `v_dob_proof_file`, `v_address_house_no`, `v_address_street`, `v_address_village`, `v_address_post_office`, `v_address_pin_code`, `v_address_tehsil`, `v_address_district`, `v_address_state`, `v_address_proof_type`, `v_address_proof_other`, `v_address_proof_file`, `v_category_of_disability`, `v_category_of_disability_other`, `v_percentage_of_disability`, `v_disability_certificate_attached`, `v_disability_certificate_file`, `v_family_member_name`, `v_family_member_relationship`, `v_family_member_epic`, `v_declaration_village`, `v_declaration_state`, `v_declaration_district`, `v_declaration_resident_date`, `v_declaration_document`, `v_declaration_place`, `v_declaration_date`, `v_captcha`, `v_qrcode`, `v_verify`, `voting_status`, `v_flag`) VALUES
('HOQ6131630', 'Maharashtra', 'Bhandara', 'Sanika', 'Santosh', 'Patade', 'photo/sh.jpg', 'Father', 'Santosh', 'Patade', 'self', 4587968574, 0, '', 'd@gmail.com', '', 123456789123, 'Female', '2004-06-07', 'Birth Certificate', 'no', 'dobproof/sh.jpg', '101', 'Gavali vasti,', 'Solapur', 'Akashwani kendra', 413003, 'Solapur', 'Raigarh', 'Maharashtra', '', '', 'addproof/sh.jpg', 'Locomotive', '', '', 'on', 'disproof/sh.jpg', 'Sachin', 'Brother', 'ABC3454646', 'Solapur', 'Gondiya', 'Maharashtra', '0000-00-00', '', 'Solapur', '2024-04-06', '', '', NULL, NULL, 0),
('YCZ0918790', 'Arunachal Pradesh', 'East Siang', 'Diksha', 'Tanaji', 'Kadam', 'photo/sh.jpg', 'Father', 'Tanaji', 'Kadam', 'self', 1478523698, 0, '', 'diksha@gmail.com', '', 123654789123, 'Female', '2003-02-04', 'Birth Certificate', 'no', 'dobproof/sh.jpg', '101', 'Gavali vasti,', 'Solapur', 'Akashwani kendra', 413003, 'Solapur', 'Sindhudurg', 'Maharashtra', '', '', 'addproof/sh.jpg', 'Locomotive', '', '', 'on', 'disproof/sh.jpg', 'Tanaji', 'Father', 'DQE6789098', 'Solapur', 'Kolhapur', 'Maharashtra', '0000-00-00', '', 'Solapur', '2024-04-06', '', '', 'verified', NULL, 0),
('BMW9954843', 'Maharashtra', 'Solapur', 'Navnath', 'K', 'Mane', 'photo/sh.jpg', 'Father', 'K', 'Mane', 'self', 1478523692, 0, '', 'nm@gmail.com', '', 369258147369, 'Male', '2004-11-08', 'Birth Certificate', '', 'dobproof/sh.jpg', '53/54', 'Gavali vasti,', 'Solapur', 'Akashwani kendra', 413003, 'Solapur', 'Solapur', 'Maharashtra', '', '', 'addproof/sh.jpg', 'Locomotive', '', '', 'on', 'disproof/sh.jpg', 'K', 'father', 'ADC4875787', 'Solapur', 'Solapur', 'Maharashtra', '0000-00-00', '', 'Solapur', '2024-04-10', '', '', 'verified', 'voted', 0),
('VQS2916786', 'Maharashtra', 'Solapur', 'Diksha', 'Tanaji', 'Kadam', 'photo/sh.jpg', 'Father', 'Tanaji', 'Kadam', 'self', 8907652312, 0, '', 'diksha@gmail.com', '', 785690876538, 'Female', '2005-02-16', 'Birth Certificate', 'no', 'dobproof/sh.jpg', '101', 'Gavali vasti,', 'Solapur', 'Akashwani kendra', 413003, 'Solapur', 'Solapur', 'Maharashtra', '', '', 'addproof/', 'Locomotive', '', '', 'on', 'disproof/sh.jpg', 'Tanaji', 'Father', 'ADC4875787', 'Solapur', 'Solapur', 'Maharashtra', '0000-00-00', '', 'Solapur', '2024-04-05', '', '', NULL, NULL, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `voter_reg`
--
ALTER TABLE `voter_reg`
  ADD PRIMARY KEY (`v_aadhaar_no`) USING BTREE,
  ADD UNIQUE KEY `v_epic_no` (`v_epic_no`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
