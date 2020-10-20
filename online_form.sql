-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 20, 2020 at 03:12 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `online_form`
--

-- --------------------------------------------------------

--
-- Table structure for table `form_admin`
--

CREATE TABLE `form_admin` (
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `form_admin`
--

INSERT INTO `form_admin` (`password`) VALUES
('adminlogin');

-- --------------------------------------------------------

--
-- Table structure for table `form_data`
--

CREATE TABLE `form_data` (
  `id` int(11) NOT NULL,
  `renter_add` text NOT NULL,
  `rentee_add` text NOT NULL,
  `occ_length` text NOT NULL,
  `reason_move` text NOT NULL,
  `secure_depo` int(11) NOT NULL,
  `pet_depo` int(11) NOT NULL,
  `full_name` text NOT NULL,
  `smoke` text NOT NULL,
  `pet` text NOT NULL,
  `add_now` text NOT NULL,
  `add_length` text NOT NULL,
  `phone` int(20) NOT NULL,
  `cur_rent` int(11) NOT NULL,
  `landlord_name` text NOT NULL,
  `landlord_phone` int(20) NOT NULL,
  `reason` text NOT NULL,
  `income_source` text NOT NULL,
  `employer_name` text NOT NULL,
  `position` text NOT NULL,
  `employ_length` text NOT NULL,
  `supervisor` text NOT NULL,
  `income` text NOT NULL,
  `relate_name` text NOT NULL,
  `relate_add` text NOT NULL,
  `relate_phone` int(20) NOT NULL,
  `relate_relation` text NOT NULL,
  `per_name_1` text NOT NULL,
  `per_add_1` text NOT NULL,
  `per_phone_1` int(20) NOT NULL,
  `per_relation_1` int(20) NOT NULL,
  `evict` text NOT NULL,
  `evict_ex` text NOT NULL,
  `refused` text NOT NULL,
  `refused_ex` text NOT NULL,
  `interrupt` text NOT NULL,
  `interrupt_ex` text NOT NULL,
  `convicted` text NOT NULL,
  `convicted_ex` int(255) NOT NULL,
  `app_date` int(11) NOT NULL,
  `tenant_name` text NOT NULL,
  `tenant_wage` int(20) NOT NULL,
  `tenant_per` text NOT NULL,
  `occ_len` int(11) NOT NULL,
  `adult` int(11) NOT NULL,
  `children` int(11) NOT NULL,
  `gender` int(11) NOT NULL,
  `social` int(20) NOT NULL,
  `license` int(20) NOT NULL,
  `model` int(20) NOT NULL,
  `year` int(20) NOT NULL,
  `estate` text NOT NULL,
  `estate_ex` text NOT NULL,
  `company` text NOT NULL,
  `office_add` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `preferred`
--

CREATE TABLE `preferred` (
  `id` int(11) NOT NULL,
  `land_add` text NOT NULL,
  `rent_add` text NOT NULL,
  `secure_depo` int(20) NOT NULL,
  `pet_depo` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `preferred`
--

INSERT INTO `preferred` (`id`, `land_add`, `rent_add`, `secure_depo`, `pet_depo`) VALUES
(1, 'David Westley\r\n14018 n 39th ave\r\nPhonix, Arizona 85053', 'House\r\n9327 Brushy point st\r\nSan Antonio, Texas 78250', 5000, 5000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `form_data`
--
ALTER TABLE `form_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `preferred`
--
ALTER TABLE `preferred`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `form_data`
--
ALTER TABLE `form_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `preferred`
--
ALTER TABLE `preferred`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
