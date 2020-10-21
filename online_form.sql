-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 21, 2020 at 09:26 PM
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
  `occ_date` int(20) NOT NULL,
  `occ_length` text NOT NULL,
  `bed_num` text NOT NULL,
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
  `income_source` text NOT NULL,
  `position` text NOT NULL,
  `employ_length` text NOT NULL,
  `supervisor` text NOT NULL,
  `relate_name` text NOT NULL,
  `relate_add` text NOT NULL,
  `relate_phone` int(20) NOT NULL,
  `relate_relation` text NOT NULL,
  `per_name_1` text NOT NULL,
  `per_add_1` text NOT NULL,
  `per_phone_1` int(20) NOT NULL,
  `per_relation_1` text NOT NULL,
  `evict` text NOT NULL,
  `evict_ex` text NOT NULL,
  `refused` text NOT NULL,
  `refused_ex` text NOT NULL,
  `interrupt` text NOT NULL,
  `interrupt_ex` text NOT NULL,
  `convicted` text NOT NULL,
  `convicted_ex` int(255) NOT NULL,
  `app_date` date NOT NULL,
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

--
-- Dumping data for table `form_data`
--

INSERT INTO `form_data` (`id`, `renter_add`, `rentee_add`, `occ_date`, `occ_length`, `bed_num`, `reason_move`, `secure_depo`, `pet_depo`, `full_name`, `smoke`, `pet`, `add_now`, `add_length`, `phone`, `cur_rent`, `landlord_name`, `landlord_phone`, `income_source`, `position`, `employ_length`, `supervisor`, `relate_name`, `relate_add`, `relate_phone`, `relate_relation`, `per_name_1`, `per_add_1`, `per_phone_1`, `per_relation_1`, `evict`, `evict_ex`, `refused`, `refused_ex`, `interrupt`, `interrupt_ex`, `convicted`, `convicted_ex`, `app_date`, `tenant_name`, `tenant_wage`, `tenant_per`, `occ_len`, `adult`, `children`, `gender`, `social`, `license`, `model`, `year`, `estate`, `estate_ex`, `company`, `office_add`) VALUES
(9, 'House9327 Brushy point stSan Antonio, Texas 78250', 'David Westley14018 n 39th avePhonix, Arizona 85053', 2020, '345', '', 'I fell like', 5000, 5000, 'Aholu Samuel', 'Yes', '1', 'Ikorodu', '2 Years', 2147483647, 53, 'Mr. Samuel', 3456789, 'Wages', 'Leader', '1 YEAR', 'Mr. Segun', 'Mr. Segun', 'Ikorodu', 23456789, 'Brother', 'Mr. Segun', 'Ikorodu', 23456789, '0', 'Yes', '', 'Yes', '', 'yes', '', 'yes', 0, '0000-00-00', 'Aholu Samuel', 300, 'Day', 5, 2, 2, 0, 345678987, 2147483647, 456789876, 2020, 'Yes', '', 'DotEightInc', 'Ikorodu');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `preferred`
--
ALTER TABLE `preferred`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
