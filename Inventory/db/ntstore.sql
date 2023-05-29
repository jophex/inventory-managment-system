-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 08, 2023 at 11:15 AM
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
(1, 'dell', -30, 'latitude', 'laptop'),
(2, 'hp ', -23, 'elitbook ', 'laptop'),
(3, 'dell', -30, 'optiplex', 'printer'),
(4, 'acers', 12, 'latitude', 'laptop'),
(5, 'dell', -30, 'optiplex', 'desktop'),
(6, 'hp ', -23, 'power cable', 'cables'),
(7, 'hp elitebook', 31, 'VGA', 'cables'),
(8, 'hp elitebook', 31, 'keyboard', 'other devices'),
(9, 'lenovo', 0, 'inkjet', 'scanner'),
(10, 'SCANNER', 6, 'optiplex', 'scanner'),
(11, 'dell', -30, 'optiplex', 'desktop'),
(12, 'hp ', -23, 'latitude', 'laptop'),
(13, 'dell', -30, 'inkjet', 'printer'),
(14, 'lenovo', 0, 'power cable', 'Cables'),
(15, 'dell', -30, 'adopter vga', 'Adopters'),
(16, 'hp ', -23, 'latitude', 'Laptop'),
(17, 'dell', -30, 'optiplex', 'Desktop'),
(18, 'dell', -30, 'latitude', 'Laptop'),
(19, 'hp ', -23, 'elitbook ', 'Laptop'),
(20, 'dell', -30, 'latitude', 'Laptop'),
(21, 'dell', -30, 'inkjet', 'Printer'),
(22, 'hp ', -23, 'inkjet', 'Scanner'),
(23, 'acers', 9, 'inkjet', 'Other Devices'),
(24, 'dell', -30, 'elitbook ', 'Laptop'),
(25, 'dell', -30, 'probook', 'Laptop'),
(26, 'dell', -30, 'inkjet', 'Laptop'),
(27, 'dell', -30, 'inkjet', 'Laptop'),
(28, 'lenovo', 0, 'waps', 'Laptop'),
(29, 'lenovo', 0, 'waps', 'Laptop'),
(30, 'dell', -30, 'probook', 'Laptop'),
(31, 'dell', -30, 'adopter ndogo', 'Adopters');

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `user` varchar(20) NOT NULL,
  `phone` int(12) NOT NULL,
  `passwords` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`user`, `phone`, `passwords`) VALUES
('lae', 626653166, '12345678'),
('joseph', 656834063, '6090');

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` int(11) NOT NULL,
  `device_name` varchar(255) NOT NULL,
  `quantity` int(255) NOT NULL,
  `device_type` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `user_status` varchar(255) NOT NULL,
  `returns` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `notifications`
--

INSERT INTO `notifications` (`id`, `device_name`, `quantity`, `device_type`, `category`, `user_status`, `returns`) VALUES
(1, 'dell', 9, 'inkjet', 'Laptop', 'Accepted', 'Returned'),
(2, 'lenovo', 6, 'yoga', 'Laptop', 'Accepted', 'Returned'),
(3, 'hp ', 6, 'elitbook ', 'Laptop', 'Accepted', 'Returned'),
(4, 'hp ', 6, 'latitude', 'Laptop', 'Accepted', 'Returned'),
(5, 'dell', 6, 'latitude', 'Laptop', 'Accepted', 'Returned'),
(6, 'hp ', 9, 'latitude', 'Laptop', 'Accepted', 'Returned'),
(7, 'hp elitebook', 9, 'elitbook ', 'Laptop', 'Accepted', 'Returned'),
(8, 'dell', 6, 'optiplex', 'Desktop', 'Accepted', 'Returned'),
(9, 'hp ', 9, 'elitbook ', 'Laptop', 'Accepted', 'Returned'),
(10, 'hp elitebook', 9, 'elitbook ', 'Laptop', 'Accepted', 'Returned'),
(11, 'dell', 2, 'optiplex', 'Laptop', 'Accepted', 'Returned');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `name` varchar(30) NOT NULL,
  `phone` int(12) NOT NULL,
  `department` varchar(30) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`name`, `phone`, `department`, `password`) VALUES
('method alex', 658940494, 'Finance and Administration', '6090'),
('joseph', 767488439, 'Finance and Administration', '4545'),
('lawrence', 0, 'Information Technology', '2002'),
('lawrence', 0, 'Information Technology', '2020'),
('hadson', 0, 'Finance and Administration', '692'),
('sanga', 0, 'Finance and Administration', '222'),
('john', 0, 'Finance and Administration', '1212'),
('jum', 0, 'Finance and Administration', 'joe'),
('jsahd', 0, 'Finance and Administration', 'jfjfjf'),
('jsahd', 0, 'Finance and Administration', '11');

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
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `add_device`
--
ALTER TABLE `add_device`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `notifications`
--
ALTER TABLE `notifications`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
