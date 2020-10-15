-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 15, 2020 at 07:42 PM
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
-- Table structure for table `form_data`
--

CREATE TABLE `form_data` (
  `id` int(11) NOT NULL,
  `renter_add` text NOT NULL,
  `rentee_add` text NOT NULL,
  `occ_date` int(11) NOT NULL,
  `occ_length` text NOT NULL,
  `bed_num` text NOT NULL,
  `reason_move` text NOT NULL,
  `secure_depo` int(11) NOT NULL,
  `pet_depo` int(11) NOT NULL,
  `full_name` text NOT NULL,
  `occ_num` text NOT NULL,
  `bed` text NOT NULL,
  `smoke` text NOT NULL,
  `pet` text NOT NULL,
  `add_now` text NOT NULL,
  `add_length` text NOT NULL,
  `phone` int(20) NOT NULL,
  `cur_rent` int(11) NOT NULL,
  `prior_add` text NOT NULL,
  `prior_length` text NOT NULL,
  `landlord_name` text NOT NULL,
  `landlord_phone` int(20) NOT NULL,
  `rent_pay` int(20) NOT NULL,
  `reason` text NOT NULL,
  `income_source` text NOT NULL,
  `price` int(20) NOT NULL,
  `employer_name` text NOT NULL,
  `position` text NOT NULL,
  `employ_length` text NOT NULL,
  `supervisor` text NOT NULL,
  `biz_phone` int(20) NOT NULL,
  `income` text NOT NULL,
  `p_employer_name` text NOT NULL,
  `p_position` text NOT NULL,
  `p_employ_length` text NOT NULL,
  `p_supervisor` text NOT NULL,
  `p_biz_phone` int(20) NOT NULL,
  `p_income` int(20) NOT NULL,
  `relate_name` text NOT NULL,
  `relate_add` text NOT NULL,
  `relate_phone` int(20) NOT NULL,
  `relate_relation` text NOT NULL,
  `per_name_1` text NOT NULL,
  `per_add_1` text NOT NULL,
  `per_phone_1` int(20) NOT NULL,
  `per_relation_1` int(20) NOT NULL,
  `per_name_2` text NOT NULL,
  `per_add_2` text NOT NULL,
  `per_phone_2` int(20) NOT NULL,
  `per_relation_2` text NOT NULL,
  `evict` text NOT NULL,
  `evict_ex` text NOT NULL,
  `refused` text NOT NULL,
  `refused_ex` text NOT NULL,
  `interrupt` text NOT NULL,
  `interrupt_ex` text NOT NULL,
  `convicted` text NOT NULL,
  `convicted_ex` int(255) NOT NULL,
  `pet_name_1` text NOT NULL,
  `pet_type_1` text NOT NULL,
  `pet_size_1` text NOT NULL,
  `indoor_1` text DEFAULT NULL,
  `pet_name_2` text NOT NULL,
  `pet_type_2` text NOT NULL,
  `pet_size_2` text NOT NULL,
  `indoor_2` text NOT NULL,
  `pet_name_3` text NOT NULL,
  `pet_type_3` text NOT NULL,
  `pet_size_3` text NOT NULL,
  `indoor_3` text NOT NULL,
  `app_date` int(11) NOT NULL,
  `deal` text NOT NULL,
  `deal_name` text NOT NULL,
  `tenant_name` text NOT NULL,
  `tenant_pos` text NOT NULL,
  `tenant_wage` int(20) NOT NULL,
  `tenant_per` text NOT NULL,
  `tenant_dur` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `form_data`
--
ALTER TABLE `form_data`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `form_data`
--
ALTER TABLE `form_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
