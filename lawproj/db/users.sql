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
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `name` varchar(30) NOT NULL,
  `phone` int(12) NOT NULL,
  `department` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`name`, `phone`, `department`, `password`) VALUES
('joseph', 656834063, '', '60990'),
('joseph', 656834063, '', '6090'),
('joseph', 656834063, '', '6090'),
('method', 656834063, '', '8909'),
('method', 0, '', '6767'),
('method', 0, '', '7878'),
('method', 0, '', '8989'),
('method', 0, '', '444'),
('joseph', 0, '', '989'),
('method', 0, '', '122121122121'),
('joseph', 0, '', '1234'),
('joseph', 0, '', '455'),
('joseph', 0, '', '6656655'),
('joseph', 0, '', '565656'),
('joseph', 0, '', ''),
('joseph', 0, '', ''),
('joseph', 0, '', ''),
('joseph', 0, '', ''),
('joseph', 0, '', ''),
('joseph', 656834063, '', ''),
('joseph', 0, '', ''),
('', 656834063, '', ''),
('joseph', 0, '', ''),
('joseph', 656834063, '', ''),
('joseph', 0, 'Choose Department', '690'),
('joseph', 0, 'Exams Desing and Development', '6555'),
('', 0, '', ''),
('joseph', 656834063, 'Information Technology', '6090'),
('method', 0, 'Information Technology', '590'),
('method', 0, 'Information Technology', '43434'),
('method', 0, 'Information Technology', '4444'),
('method', 0, 'Examination Administration', '2323'),
('method', 0, 'Examination Administration', '1232'),
('method', 798488439, 'Examination Administration', '123'),
('method', 758488439, 'Examination Administration', '11234432'),
('method', 0, 'Examination Administration', 'cdccdc'),
('method', 0, 'Finance and Administration', 'vsgv'),
('method', 0, 'Finance and Administration', 'bnhgbfsdvafs'),
('joseph', 717488439, 'Printing and Publications', 'dcsdfcdsa'),
('joseph', 0, 'Printing and Publications', 'qwewqwe'),
('joseph', 777488439, 'Printing and Publications', 'fwfdf'),
('joseph', 787488439, 'Finance and Administration', 'gsfdsd'),
('joseph', 616834063, 'Finance and Administration', 'qwqw'),
('method', 0, 'Finance and Administration', 'edwqqd'),
('joseph', 0, 'Finance and Administration', 'ed'),
('joseph', 0, 'Examination Administration', 'fdsaafd'),
('joseph', 0, 'Examination Administration', 'wewee'),
('', 0, '', ''),
('joseph', 656834063, 'Examination Administration', 'joseph'),
('', 0, '', ''),
('method', 656834063, 'Printing and Publications', 'method'),
('joseph', 656834063, 'Printing and Publications', 'hgghhg'),
('joseph', 656834063, 'Printing and Publications', 'dsadasdf'),
('joseph', 656834063, 'Exams Desing and Development', 'hgggg'),
('joseph', 656834063, 'Information Technology', 'joseph'),
('joseph', 656834063, 'Information Technology', '0909'),
('joseph', 656834063, 'Examination Administration', '6090'),
('joseph', 656834063, 'Examination Administration', '6090'),
('method', 656834063, 'Information Technology', '6090');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
