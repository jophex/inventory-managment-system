-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 05, 2023 at 01:55 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

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
(1, 'dell', 30, 'latitude', 'laptop'),
(2, 'hp ', 23, 'elitbook ', 'laptop'),
(3, 'dell', 30, 'optiplex', 'printer'),
(4, 'acers', 2, 'latitude', 'laptop'),
(5, 'dell', 30, 'optiplex', 'desktop'),
(6, 'hp ', 23, 'power cable', 'cables'),
(7, 'hp elitebook', 9, 'VGA', 'cables'),
(8, 'hp elitebook', 9, 'keyboard', 'other devices'),
(9, 'lenovo', 0, 'inkjet', 'scanner'),
(10, 'SCANNER', 6, 'optiplex', 'scanner'),
(11, 'dell', 30, 'optiplex', 'desktop'),
(12, 'hp ', 23, 'latitude', 'laptop'),
(13, 'dell', 30, 'inkjet', 'printer'),
(14, 'lenovo', 10, 'power cable', 'Cables'),
(15, 'dell', 30, 'adopter vga', 'Adopters'),
(16, 'hp ', 23, 'latitude', 'Laptop'),
(17, 'dell', 30, 'optiplex', 'Desktop'),
(18, 'dell', 30, 'latitude', 'Laptop'),
(19, 'hp ', 23, 'elitbook ', 'Laptop'),
(20, 'dell', 30, 'latitude', 'Laptop'),
(21, 'dell', 30, 'inkjet', 'Printer'),
(22, 'hp ', 23, 'inkjet', 'Scanner'),
(23, 'acers', 2, 'inkjet', 'Other Devices'),
(24, 'dell', 30, 'elitbook ', 'Laptop'),
(25, 'dell', 30, 'probook', 'Laptop'),
(26, 'dell', 10, 'inkjet', 'Laptop'),
(27, 'dell', 30, 'inkjet', 'Laptop'),
(28, 'lenovo', 4, 'waps', 'Laptop'),
(29, 'lenovo', 8, 'waps', 'Laptop'),
(30, 'dell', 3, 'probook', 'Laptop'),
(31, 'dell', 5, 'adopter ndogo', 'Adopters'),
(32, 'MSI', 3, 'gaming pc', 'Laptop');

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `admin_id` varchar(255) NOT NULL,
  `user` varchar(20) NOT NULL,
  `phone` int(12) NOT NULL,
  `passwords` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`admin_id`, `user`, `phone`, `passwords`) VALUES
('df0c75fd8975', 'Admin', 767488439, 'ec04321e2c7bf2e0b01bac41896796b19f22a244');

-- --------------------------------------------------------

--
-- Table structure for table `requests`
--

CREATE TABLE `requests` (
  `user_id` int(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `request_id` varchar(255) NOT NULL,
  `id` int(11) NOT NULL,
  `device_name` varchar(255) NOT NULL,
  `quantity` int(255) NOT NULL,
  `device_type` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `user_status` varchar(255) NOT NULL,
  `returns` varchar(255) NOT NULL,
  `created_at` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `requests`
--

INSERT INTO `requests` (`user_id`, `username`, `request_id`, `id`, `device_name`, `quantity`, `device_type`, `category`, `user_status`, `returns`, `created_at`) VALUES
(767488439, 'method', '1aca982e2ae4', 1, 'hp elitebook', 2, 'VGA', 'Cables', 'Accepted', 'Not Returned', '2023-05-26 16:13:08.525181'),
(656834063, 'joseph alex', 'd6fb8096fe64', 2, 'hp elitebook', 2, 'VGA', 'Cables', 'Accepted', 'Not Returned', '2023-05-26 16:13:08.525181');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` varchar(255) NOT NULL,
  `name` varchar(30) NOT NULL,
  `phone` int(12) NOT NULL,
  `department` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `name`, `phone`, `department`, `password`) VALUES
('239e48c12566', 'joseph alex', 656834063, 'Information Technology', 'e391e68ca095a73232a98f3441ae0e5b14e1535d'),
('b7e2c3ae683d', 'method', 767488439, 'Information Technology', 'a79ff66112938259e830661ff08336ac7c0c7acb');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add_device`
--
ALTER TABLE `add_device`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD UNIQUE KEY `phone` (`phone`);

--
-- Indexes for table `requests`
--
ALTER TABLE `requests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `add_device`
--
ALTER TABLE `add_device`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `requests`
--
ALTER TABLE `requests`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
