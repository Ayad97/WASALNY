-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 30, 2019 at 06:41 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wasalny`
--

-- --------------------------------------------------------

--
-- Table structure for table `available_buses`
--

CREATE TABLE `available_buses` (
  `b_to` varchar(100) DEFAULT NULL,
  `b_from` varchar(100) NOT NULL,
  `b_time` int(11) NOT NULL,
  `b_period` varchar(20) NOT NULL,
  `b_date` date NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `available_buses`
--

INSERT INTO `available_buses` (`b_to`, `b_from`, `b_time`, `b_period`, `b_date`, `id`) VALUES
('Ù…Ø­Ø·Ø© Ø·Ù†Ø·Ø§', 'Ù…Ø­Ø·Ø© Ù…Ø¬Ù…Ø¹ Ø§Ù„ÙƒÙ„ÙŠÙ€Ø§Øª', 7, 'AM', '2019-06-29', 2),
('Ù…Ø­Ø·Ø© Ø·Ù†Ø·Ø§', 'Ù…Ø­Ø·Ø© Ù…Ø¬Ù…Ø¹ Ø§Ù„ÙƒÙ„ÙŠÙ€Ø§Øª', 7, 'AM', '2019-06-29', 4);

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `id` int(20) NOT NULL,
  `py_name` text NOT NULL,
  `py_email` varchar(150) NOT NULL,
  `py_adress` text NOT NULL,
  `py_city` text NOT NULL,
  `py_state` text NOT NULL,
  `py_zip` text NOT NULL,
  `py_card_num` text NOT NULL,
  `py_end_month` text NOT NULL,
  `py_end_year` text NOT NULL,
  `py_cvv` text NOT NULL,
  `clicked` text NOT NULL,
  `num_seat` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`id`, `py_name`, `py_email`, `py_adress`, `py_city`, `py_state`, `py_zip`, `py_card_num`, `py_end_month`, `py_end_year`, `py_cvv`, `clicked`, `num_seat`) VALUES
(1, 'Mahmoud Ayad', 'ayadmahmoud03@gmail.com', 'Tala, Al Minufiyah, Egypt', 'Shebin al-Kom', 'Tala, Al Minufiyah, Egypt', '32616', '11-11144', '8', '2020', '352', '  04B 01A', NULL),
(7, 'Mahmoud A\'mer', 'mahmoudamer71@gmail.com', 'mitmusa, Al Minufiyah, Egypt', 'Shebin al-Kom', 'Tala, Al Minufiyah, Egypt', '32616', '111-444-44', '10', '2020', '445', '  02A', NULL),
(8, 'Mahmoud Ayad', 'mahmoudayad71@gmail.com', 'Tala, Al Minufiyah, Egypt', 'Shebin al-Kom', 'Tala, Al Minufiyah, Egypt', '32616', '44411', '8', '2020', '1122', '  12B 09A', NULL),
(9, 'Mahmoud Ayad', 'mahmoudayad71@gmail.com', 'Tala, Al Minufiyah, Egypt', 'Shebin al-Kom', 'Tala, Al Minufiyah, Egypt', '32616', '44411', '8', '2020', '1122', '  12B 09A', NULL),
(10, 'Mahmoud Ayad', 'mahmoudayad71@gmail.com', 'Tala, Al Minufiyah, Egypt', 'Shebin al-Kom', 'Tala, Al Minufiyah, Egypt', '32616', '44411', '8', '2020', '1122', '  12B 09A', NULL),
(11, 'Mahmoud Ayad', 'mahmoudayad71@gmail.com', 'Tala, Al Minufiyah, Egypt', 'Shebin al-Kom', 'Tala, Al Minufiyah, Egypt', '32616', '44411', '8', '2020', '1122', '  12B 09A', NULL),
(12, 'Mahmoud Ayad', 'mahmoudayad71@gmail.com', 'Tala, Al Minufiyah, Egypt', 'Shebin al-Kom', 'Tala, Al Minufiyah, Egypt', '32616', '44411', '8', '2020', '1122', '  12B 09A', NULL),
(13, 'Mahmoud Ayad', 'mahmoudayad71@gmail.com', 'Tala, Al Minufiyah, Egypt', 'Shebin al-Kom', 'Tala, Al Minufiyah, Egypt', '32616', '44411', '8', '2020', '1122', '  12B 09A', NULL),
(14, 'Mahmoud Ayad', 'mahmoudayad71@gmail.com', 'Tala, Al Minufiyah, Egypt', 'Shebin al-Kom', 'Tala, Al Minufiyah, Egypt', '32616', '44411', '8', '2020', '1122', '  12B 09A', NULL),
(15, 'Mahmoud Ayad', 'mahmoudayad71@gmail.com', 'Tala, Al Minufiyah, Egypt', 'Shebin al-Kom', 'Tala, Al Minufiyah, Egypt', '32616', '44411', '8', '2020', '1122', '  12B 09A', NULL),
(16, 'Mahmoud Ayad', 'mahmoudayad71@gmail.com', 'Tala, Al Minufiyah, Egypt', 'Shebin al-Kom', 'Tala, Al Minufiyah, Egypt', '32616', '44411', '8', '2020', '1122', '  12B 09A', NULL),
(17, 'Mahmoud Ayad', 'mahmoudayad71@gmail.com', 'Tala, Al Minufiyah, Egypt', 'Shebin al-Kom', 'Tala, Al Minufiyah, Egypt', '32616', '44411', '8', '2020', '1122', '  12B 09A', NULL),
(18, 'Mahmoud Ayad', 'mahmoudayad71@gmail.com', 'Tala, Al Minufiyah, Egypt', 'Shebin al-Kom', 'Tala, Al Minufiyah, Egypt', '32616', '44411', '8', '2020', '1122', '  12B 09A', NULL),
(19, 'Mahmoud Ayad', 'mahmoudayad71@gmail.com', 'Tala, Al Minufiyah, Egypt', 'Shebin al-Kom', 'Tala, Al Minufiyah, Egypt', '32616', '44411', '8', '2020', '1122', '  12B 09A', NULL),
(20, 'Mahmoud Ayad', 'mahmoudayad71@gmail.com', 'Tala, Al Minufiyah, Egypt', 'Shebin al-Kom', 'Tala, Al Minufiyah, Egypt', '32616', '44411', '8', '2020', '1122', '  12B 09A', NULL),
(21, 'Mahmoud Ayad', 'mahmoudayad71@gmail.com', 'Tala, Al Minufiyah, Egypt', 'Shebin al-Kom', 'Tala, Al Minufiyah, Egypt', '32616', '44411', '8', '2020', '1122', '  12B 09A', NULL),
(22, 'Mahmoud Ayad', 'mahmoudayad71@gmail.com', 'Tala, Al Minufiyah, Egypt', 'Shebin al-Kom', 'Tala, Al Minufiyah, Egypt', '32616', '44411', '8', '2020', '1122', '  12B 09A', NULL),
(23, 'Mahmoud Ayad', 'mahmoudayad71@gmail.com', 'Tala, Al Minufiyah, Egypt', 'Shebin al-Kom', 'Tala, Al Minufiyah, Egypt', '32616', '44411', '8', '2020', '1122', '  12B 09A', NULL),
(24, 'Mahmoud Ayad', 'mahmoudayad71@gmail.com', 'Tala, Al Minufiyah, Egypt', 'Shebin al-Kom', 'Tala, Al Minufiyah, Egypt', '32616', '44411', '8', '2020', '1122', '  12B 09A', NULL),
(25, 'Mahmoud Ayad', 'mahmoudayad71@gmail.com', 'Tala, Al Minufiyah, Egypt', 'Shebin al-Kom', 'Tala, Al Minufiyah, Egypt', '32616', '44411', '8', '2020', '1122', '  12B 09A', NULL),
(26, 'Mahmoud Ayad', 'mahmoudayad71@gmail.com', 'Tala, Al Minufiyah, Egypt', 'Shebin al-Kom', 'Tala, Al Minufiyah, Egypt', '32616', '44411', '8', '2020', '1122', '  12B 09A', NULL),
(27, 'Mahmoud Ayad', 'mahmoudayad71@gmail.com', 'Tala, Al Minufiyah, Egypt', 'Shebin al-Kom', 'Tala, Al Minufiyah, Egypt', '32616', '44411', '8', '2020', '1122', '  12B 09A', NULL),
(28, 'Mahmoud Ayad', 'mahmoudayad71@gmail.com', 'Tala, Al Minufiyah, Egypt', 'Shebin al-Kom', 'Tala, Al Minufiyah, Egypt', '32616', '44411', '8', '2020', '1122', '  12B 09A', NULL),
(29, 'Mahmoud Ayad', 'mahmoudayad71@gmail.com', 'Tala, Al Minufiyah, Egypt', 'Shebin al-Kom', 'Tala, Al Minufiyah, Egypt', '32616', '44411', '8', '2020', '1122', '  12B 09A', NULL),
(30, 'Mahmoud Ayad', 'mahmoudayad71@gmail.com', 'Tala, Al Minufiyah, Egypt', 'Shebin al-Kom', 'Tala, Al Minufiyah, Egypt', '32616', '44411', '8', '2020', '1122', '  12B 09A', NULL),
(31, 'Mahmoud Ayad', 'mahmoudayad71@gmail.com', 'Tala, Al Minufiyah, Egypt', 'Shebin al-Kom', 'Tala, Al Minufiyah, Egypt', '32616', '44411', '8', '2020', '1122', '  12B 09A', NULL),
(32, 'Mahmoud Ayad', 'mahmoudayad71@gmail.com', 'Tala, Al Minufiyah, Egypt', 'Shebin al-Kom', 'Tala, Al Minufiyah, Egypt', '32616', '44411', '8', '2020', '1122', '  12B 09A', NULL),
(33, 'Mahmoud Ayad', 'mahmoudayad71@gmail.com', 'Tala, Al Minufiyah, Egypt', 'Shebin al-Kom', 'Tala, Al Minufiyah, Egypt', '32616', '44411', '8', '2020', '1122', '  12B 09A', NULL),
(34, 'Mahmoud Ayad', 'mahmoudayad71@gmail.com', 'Tala, Al Minufiyah, Egypt', 'Shebin al-Kom', 'Tala, Al Minufiyah, Egypt', '32616', '44411', '8', '2020', '1122', '  12B 09A', NULL),
(35, 'Mahmoud Ayad', 'mahmoudayad71@gmail.com', 'Tala, Al Minufiyah, Egypt', 'Shebin al-Kom', 'Tala, Al Minufiyah, Egypt', '32616', '44411', '8', '2020', '1122', '  12B 09A', NULL),
(36, 'Mahmoud Ayad', 'mahmoudayad71@gmail.com', 'Tala, Al Minufiyah, Egypt', 'Shebin al-Kom', 'Tala, Al Minufiyah, Egypt', '32616', '44411', '8', '2020', '1122', '  12B 09A', NULL),
(37, 'Mahmoud Ayad', 'mahmoudayad71@gmail.com', 'Tala, Al Minufiyah, Egypt', 'Shebin al-Kom', 'Tala, Al Minufiyah, Egypt', '32616', '44411', '8', '2020', '1122', '  12B 09A', NULL),
(38, 'Mahmoud Ayad', 'mahmoudayad71@gmail.com', 'Tala, Al Minufiyah, Egypt', 'Shebin al-Kom', 'Tala, Al Minufiyah, Egypt', '32616', '44411', '8', '2020', '1122', '  12B 09A', NULL),
(39, 'Mahmoud Ayad', 'mahmoudayad71@gmail.com', 'Tala, Al Minufiyah, Egypt', 'Shebin al-Kom', 'Tala, Al Minufiyah, Egypt', '32616', '44411', '8', '2020', '1122', '  12B 09A', NULL),
(40, 'Mahmoud Ayad', 'mahmoudayad71@gmail.com', 'Tala, Al Minufiyah, Egypt', 'Shebin al-Kom', 'Tala, Al Minufiyah, Egypt', '32616', '44411', '8', '2020', '1122', '  12B 09A', NULL),
(41, 'Mahmoud Ayad', 'mahmoudayad71@gmail.com', 'Tala, Al Minufiyah, Egypt', 'Shebin al-Kom', 'Tala, Al Minufiyah, Egypt', '32616', '44411', '8', '2020', '1122', '  12B 09A', NULL),
(42, 'Mahmoud Ayad', 'mahmoudayad71@gmail.com', 'Tala, Al Minufiyah, Egypt', 'Shebin al-Kom', 'Tala, Al Minufiyah, Egypt', '32616', '44411', '8', '2020', '1122', '  12B 09A', NULL),
(43, 'Mahmoud Ayad', 'mahmoudayad71@gmail.com', 'Tala, Al Minufiyah, Egypt', 'Shebin al-Kom', 'Tala, Al Minufiyah, Egypt', '32616', '44411', '8', '2020', '1122', '  12B 09A', NULL),
(44, 'Mahmoud Ayad', 'mahmoudayad71@gmail.com', 'Tala, Al Minufiyah, Egypt', 'Shebin al-Kom', 'Tala, Al Minufiyah, Egypt', '32616', '44411', '8', '2020', '1122', '  12B 09A', NULL),
(45, 'Mahmoud Ayad', 'mahmoudayad71@gmail.com', 'Tala, Al Minufiyah, Egypt', 'Shebin al-Kom', 'Tala, Al Minufiyah, Egypt', '32616', '44411', '8', '2020', '1122', '  12B 09A', NULL),
(46, 'Mahmoud Ayad', 'mahmoudayad71@gmail.com', 'Tala, Al Minufiyah, Egypt', 'Shebin al-Kom', 'Tala, Al Minufiyah, Egypt', '32616', '44411', '8', '2020', '1122', '  12B 09A', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `login_as` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `phone`, `email`, `password`, `login_as`) VALUES
(1, 'Mahmoud Ayad', '01025061019', 'ayadmahmoud03@gmail.com', 'MTIzNA==', 'student'),
(2, 'Mahmoud Asar', '01141339991', 'mahmoudasar71@gmail.com', 'MTIzNA==', 'student'),
(3, 'Mahmoud A\'mer', '01027639683', 'mahmoudamer71@gmail.com', 'MTIzNA==', 'student');

-- --------------------------------------------------------

--
-- Table structure for table `website`
--

CREATE TABLE `website` (
  `s_name` text,
  `s_email` varchar(150) DEFAULT NULL,
  `s_phone` int(11) NOT NULL,
  `s_message` text,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `website`
--

INSERT INTO `website` (`s_name`, `s_email`, `s_phone`, `s_message`, `id`) VALUES
('Mahmoud Ayad', 'ayadmahmoud03@gmail.com', 1025061019, 'Thanks', 1),
('Mahmoud Asar', 'mahmoudsar71@gmail.com', 1027639683, 'good', 5),
('Mahmoud A\'mer', 'Mahmoudamer71@gmail.com', 1027939683, 'Site can be save time & money, Thanks â™¥\r\n\r\n', 6);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `available_buses`
--
ALTER TABLE `available_buses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `website`
--
ALTER TABLE `website`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `s_email` (`s_email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `available_buses`
--
ALTER TABLE `available_buses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `website`
--
ALTER TABLE `website`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
