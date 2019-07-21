-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 29, 2019 at 12:50 PM
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
-- Database: `seat`
--

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `id` int(20) NOT NULL,
  `py_name` text NOT NULL,
  `py_email` text NOT NULL,
  `py_adress` text NOT NULL,
  `py_city` text NOT NULL,
  `py_state` text NOT NULL,
  `py_zip` text NOT NULL,
  `py_card_num` text NOT NULL,
  `py_end_month` text NOT NULL,
  `py_end_year` text NOT NULL,
  `py_cvv` text NOT NULL,
  `clicked` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`id`, `py_name`, `py_email`, `py_adress`, `py_city`, `py_state`, `py_zip`, `py_card_num`, `py_end_month`, `py_end_year`, `py_cvv`, `clicked`) VALUES
(1, 'Mahmoud Ayad', 'ayadmahmoud03@gmail.com', 'Tala, Al Minufiyah, Egypt', 'Shebin al-Kom', 'Tala, Al Minufiyah, Egypt', '32616', '1114-4445-2222-7777', '2', '2023', '207', '  01A 02A'),
(2, 'Mahmoud Asar', 'asarmahmoud08@gmail.com', 'Tala, Al Minufiyah, Egypt', 'Shebin al-Kom', 'Tala, Al Minufiyah, Egypt', '32616', '4446-5554-5554-8777', '9', '2020', '352', '  04B 03B'),
(4, 'Mahmoud A\'mer', 'mahmoudamer71@gmail.com', 'mitmusa, Al Minufiyah, Egypt', 'Shebin al-Kom', 'Tala, Al Minufiyah, Egypt', '32616', '777-7774', '5', '2022', '520', '  05A');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
