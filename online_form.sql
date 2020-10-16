-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 17, 2020 at 12:21 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
-- Dumping data for table `form_data`
--

INSERT INTO `form_data` (`id`, `renter_add`, `rentee_add`, `occ_date`, `occ_length`, `bed_num`, `reason_move`, `secure_depo`, `pet_depo`, `full_name`, `occ_num`, `bed`, `smoke`, `pet`, `add_now`, `add_length`, `phone`, `cur_rent`, `prior_add`, `prior_length`, `landlord_name`, `landlord_phone`, `rent_pay`, `reason`, `income_source`, `price`, `employer_name`, `position`, `employ_length`, `supervisor`, `biz_phone`, `income`, `p_employer_name`, `p_position`, `p_employ_length`, `p_supervisor`, `p_biz_phone`, `p_income`, `relate_name`, `relate_add`, `relate_phone`, `relate_relation`, `per_name_1`, `per_add_1`, `per_phone_1`, `per_relation_1`, `per_name_2`, `per_add_2`, `per_phone_2`, `per_relation_2`, `evict`, `evict_ex`, `refused`, `refused_ex`, `interrupt`, `interrupt_ex`, `convicted`, `convicted_ex`, `pet_name_1`, `pet_type_1`, `pet_size_1`, `indoor_1`, `pet_name_2`, `pet_type_2`, `pet_size_2`, `indoor_2`, `pet_name_3`, `pet_type_3`, `pet_size_3`, `indoor_3`, `app_date`, `deal`, `deal_name`, `tenant_name`, `tenant_pos`, `tenant_wage`, `tenant_per`, `tenant_dur`) VALUES
(7, 'I am the best', 'I am the best and will always be the best', 27, 'ewq', '2 Bedrooms', 'e2e', 0, 0, 'sasd', 'wew', 'yes', 'no', 'no', 'ewew', 'ewew', 3232, 2432, 'Ikole Ekiti', 'dssd', 'saas', 332, 331, 'ds', 'Commision', 333, 'fddf', 'sxz', 'wq', 'dsds', 0, '3232', 'fddf', 'sxz', 'wq', 'dsds', 0, 32, 'ssxs', 'xsxs', 32311, 'ssdcx', 'sds', 'ews', 33232, 0, 'sa', 'dsdssa', 33232, 'wq', 'No', '', 'No', '', 'on', '', 'No', 0, 'qwd', 'qw', 'qw', 'Indoor', 'qw', 'wq', 'qwq', 'Indoor', 'dss', 'dsds', 'sds', 'Indoor', 29, 'on', 'asa', 'dss', 'asa', 223, '23', '32');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
