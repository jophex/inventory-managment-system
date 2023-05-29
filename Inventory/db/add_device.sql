-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 30, 2023 at 09:30 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ntstore`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_device`
--

CREATE TABLE `add_device` (
  `id` int(11) NOT NULL,
  `device_name` varchar(255) NOT NULL,
  `quantity` int(255) NOT NULL,
  `device_type` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `add_device`
--

INSERT INTO `add_device` (`id`, `device_name`, `quantity`, `device_type`, `category`) VALUES
(1, 'hp', 12, 'latitude', 'laptop'),
(2, '', 0, '', ''),
(3, 'hp ', 25, 'elitbook g3', 'laptop'),
(4, '', 0, '', ''),
(5, 'hp ', 12, 'elitbook g2', 'laptop'),
(6, '', 0, '', ''),
(7, 'hp ', 12, 'elitbook ', 'laptop'),
(8, '', 0, '', ''),
(9, 'hp ', 12, 'PROBOOK', 'laptop'),
(10, '', 0, '', ''),
(11, 'hp ', 12, 'zbook pro', 'laptop'),
(12, '', 0, '', ''),
(13, 'hp ', 12, 'envy', 'laptop'),
(14, '', 0, '', ''),
(15, 'hp ', 9, 'spectre', 'laptop'),
(16, '', 0, '', ''),
(17, 'dell', 26, 'optiplex', 'desktop'),
(18, '', 0, '', ''),
(19, 'dell', 26, 'precision', 'desktop'),
(20, '', 0, '', ''),
(21, 'dell', 26, 'm4500', 'desktop'),
(22, '', 0, '', ''),
(23, 'samsung', 15, 'zflip', 'laptop'),
(24, '', 0, '', ''),
(25, 'lenovo', 15, 'yoga', 'laptop'),
(26, '', 0, '', ''),
(27, 'lenovo', 15, 'yoga 34', 'desktop'),
(28, '', 0, '', ''),
(29, 'lenovo', 15, 'hset', 'desktop'),
(30, '', 0, '', ''),
(31, 'acers', 8, 'lops', 'desktop'),
(32, '', 0, '', ''),
(33, 'acers', 8, 'lops', 'laptop'),
(34, '', 0, '', ''),
(35, 'hp ', 18, 'inkjet', 'scanner'),
(36, '', 0, '', ''),
(37, 'dell', 18, 'inkjet', 'printer'),
(38, '', 0, '', ''),
(39, 'hp ', 18, 'inkjet', 'scanner'),
(40, '', 0, '', ''),
(41, 'hp ', 10, 'inkjet', 'printer'),
(42, '', 0, '', ''),
(43, 'dell', 34, 'inkjet', 'printer'),
(44, '', 0, '', ''),
(45, 'dell', 48, 'cable', 'other devices'),
(46, '', 0, '', ''),
(47, 'dell', 48, 'power cable', 'cables'),
(48, '', 0, '', ''),
(49, 'hp ', 85, 'power cable', 'cables'),
(50, '', 0, '', ''),
(51, 'lenovo', 42, 'power cable', 'cables'),
(52, '', 0, '', ''),
(53, 'acers', 28, 'power cable', 'cables'),
(54, '', 0, '', ''),
(55, 'samsung', 72, 'power cable', 'cables'),
(56, '', 0, '', ''),
(57, 'hp ', 72, 'monitor', 'other devices'),
(58, '', 0, '', ''),
(59, 'dell', 110, 'monitor', 'other devices'),
(60, '', 0, '', ''),
(61, 'samsung', 55, 'monitor', 'other devices'),
(62, '', 0, '', ''),
(63, 'samsung', 22, 'keyboard', 'other devices'),
(64, '', 0, '', ''),
(65, 'logitech', 7, 'keyboard', 'other devices'),
(66, '', 0, '', ''),
(67, 'logitech', 52, 'mouse', 'other devices'),
(68, '', 0, '', ''),
(69, 'hp ', 13, 'mouse', 'other devices'),
(70, '', 0, '', ''),
(71, 'hp ', 13, 'keyboard', 'other devices'),
(72, '', 0, '', ''),
(73, 'dell', 42, 'keyboard', 'other devices'),
(74, '', 0, '', ''),
(75, 'dell', 16, 'mouse', 'other devices'),
(76, '', 0, '', ''),
(77, 'HDMI', 16, 'hdmi', 'cables'),
(78, '', 0, '', ''),
(79, 'VGA', 16, 'VGA', 'cables'),
(80, '', 0, '', ''),
(81, 'ETHERNET', 16, 'ETHERNET', 'cables'),
(82, '', 0, '', ''),
(83, 'lenovo', 111, 'latitude', 'desktop'),
(84, '', 0, '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add_device`
--
ALTER TABLE `add_device`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `add_device`
--
ALTER TABLE `add_device`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
