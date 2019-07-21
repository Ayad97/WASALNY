-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 29, 2019 at 12:41 PM
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
-- Database: `find_buses`
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
('Ù…Ø­Ø·Ø© Ø·Ù†Ø·Ø§', 'Ù…Ø­Ø·Ø© Ù…Ø¬Ù…Ø¹ Ø§Ù„ÙƒÙ„ÙŠÙ€Ø§Øª', 7, 'AM', '2019-06-28', 1),
('Ù…Ø­Ø·Ø© Ø²Ù†Ø§Ø±Ø©', 'Ù…Ø­Ø·Ø© ÙƒÙ„ÙŠØ© Ø§Ù„ØªØ±Ø¨ÙŠØ©', 7, 'AM', '2019-06-28', 2),
('Ù…Ø­Ø·Ø© Ø·Ù†Ø·Ø§', 'Ù…Ø­Ø·Ø© Ù…Ø¬Ù…Ø¹ Ø§Ù„ÙƒÙ„ÙŠÙ€Ø§Øª', 7, 'AM', '2019-06-29', 3),
('Ù…Ø­Ø·Ø© Ø·Ù†Ø·Ø§', 'Ù…Ø­Ø·Ø© Ù…Ø¬Ù…Ø¹ Ø§Ù„ÙƒÙ„ÙŠÙ€Ø§Øª', 7, 'AM', '2019-06-29', 5),
('Ù…Ø­Ø·Ø© Ø·Ù†Ø·Ø§', 'Ù…Ø­Ø·Ø© Ù…Ø¬Ù…Ø¹ Ø§Ù„ÙƒÙ„ÙŠÙ€Ø§Øª', 7, 'AM', '2019-06-29', 6);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `available_buses`
--
ALTER TABLE `available_buses`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `available_buses`
--
ALTER TABLE `available_buses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
