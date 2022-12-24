-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 24, 2022 at 11:08 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `quotation`
--

-- --------------------------------------------------------

--
-- Table structure for table `quotes`
--

CREATE TABLE `quotes` (
  `id` int(11) NOT NULL,
  `requestor` text NOT NULL,
  `company` text NOT NULL,
  `location` text NOT NULL,
  `request_date` date NOT NULL,
  `required_date` date NOT NULL,
  `item_status` text NOT NULL,
  `model_availability` text NOT NULL,
  `ref_no` int(11) NOT NULL,
  `date_added` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `quotes`
--

INSERT INTO `quotes` (`id`, `requestor`, `company`, `location`, `request_date`, `required_date`, `item_status`, `model_availability`, `ref_no`, `date_added`) VALUES
(1, 'w', 'g', 'g', '2022-12-31', '2022-12-31', 'yes', 'd', 914657247, '2022-12-24 15:20:40'),
(2, 'w', 'g', 'g', '2022-12-31', '2022-12-31', 'yes', 'd', 355229717, '2022-12-24 15:23:38'),
(3, 's', 'h', 'h', '2022-12-31', '2022-12-31', 'yes', 'w', 905765879, '2022-12-24 15:23:59'),
(4, 'w', 'h', 'h', '2022-12-31', '2022-12-31', 'yes', 'd', 392880472, '2022-12-24 15:25:41'),
(5, 'd', 'h', 'h', '2022-12-31', '2022-12-31', 'yes', 'd', 462106472, '2022-12-24 15:27:05'),
(6, 'd', 'h', 'h', '2022-12-31', '2022-12-31', 'yes', 'd', 315859070, '2022-12-24 15:27:22'),
(7, 'd', 'g', 'g', '2022-12-31', '2022-12-31', 'yes', 'd', 992254753, '2022-12-24 15:28:39'),
(8, 'd', 'b', 'b', '2022-12-31', '2022-12-31', 'yes', 'd', 596132858, '2022-12-24 15:30:32'),
(9, 'd', 'd', 'd', '2022-12-30', '2022-12-31', 'yes', 'd', 406435905, '2022-12-24 15:31:49'),
(10, 'd', 'd', 'd', '2022-12-30', '2022-12-31', 'yes', 'd', 435548441, '2022-12-24 15:32:09'),
(11, 'd', 'h', 'h', '2022-12-31', '2022-12-31', 'yes', 'd', 318332681, '2022-12-24 15:45:36'),
(12, 'bq', 'b', 'b', '2022-12-31', '2022-12-31', 'yes', 'd', 173692503, '2022-12-24 15:46:46'),
(13, 'w', 'h', 'h', '2022-12-31', '2022-12-31', 'yes', 'no', 953329847, '2022-12-24 16:08:23'),
(14, 'h', 'h', 'h', '2022-12-31', '2022-12-31', 'no', 'yes', 585284247, '2022-12-24 16:09:34'),
(15, 'j', 'j', 'j', '2022-12-31', '2022-12-31', 'no', 'yes', 297246305, '2022-12-24 20:07:15'),
(16, 'j', 'j', 'j', '2022-12-31', '2022-12-31', 'no', 'yes', 676226339, '2022-12-24 20:08:17'),
(17, 'h', 'j', 'j', '2022-12-31', '2022-12-31', 'no', 'yes', 787125075, '2022-12-24 20:33:08'),
(18, 'h', 'h', 'y', '2022-12-31', '2022-12-31', 'no', 'yes', 303618130, '2022-12-24 20:34:50');

-- --------------------------------------------------------

--
-- Table structure for table `quote_items`
--

CREATE TABLE `quote_items` (
  `id` int(11) NOT NULL,
  `ref_no` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `code` varchar(255) NOT NULL,
  `quantity` int(11) NOT NULL,
  `date_added` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `quote_items`
--

INSERT INTO `quote_items` (`id`, `ref_no`, `description`, `code`, `quantity`, `date_added`) VALUES
(1, '676226339', 'Array', 'Array', 0, '2022-12-24 20:08:17'),
(2, '787125075', 'jnq', 'n', 5, '2022-12-24 20:33:08'),
(3, '787125075', 'b', 'h', 3, '2022-12-24 20:33:09'),
(4, '787125075', 'd', 'd', 3, '2022-12-24 20:33:09'),
(5, '787125075', 'd', 'nh', 2, '2022-12-24 20:33:09'),
(6, '303618130', 'j', 'n', 3, '2022-12-24 20:34:50');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `quotes`
--
ALTER TABLE `quotes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `quote_items`
--
ALTER TABLE `quote_items`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `quotes`
--
ALTER TABLE `quotes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `quote_items`
--
ALTER TABLE `quote_items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;