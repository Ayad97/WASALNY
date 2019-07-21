-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 02, 2019 at 07:42 AM
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
-- Table structure for table `drive_data`
--

CREATE TABLE `drive_data` (
  `id` int(11) NOT NULL,
  `d_name` varchar(100) NOT NULL,
  `d_age` int(11) NOT NULL,
  `d_phone` int(11) NOT NULL,
  `d_email` varchar(150) NOT NULL,
  `d_password` int(11) NOT NULL,
  `d_license` int(11) NOT NULL,
  `d_nid` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `drive_data`
--

INSERT INTO `drive_data` (`id`, `d_name`, `d_age`, `d_phone`, `d_email`, `d_password`, `d_license`, `d_nid`) VALUES
(1, 'Ahmed Alaa', 40, 1024121412, 'ahmeddr01@gmail.com', 1234, 152114, '28814041709545'),
(2, 'Mohamed Ali Elsayed', 35, 1009679551, 'mohamedali78@gmail.com', 1234, 127854, '28741121709545'),
(3, 'Mostafa Mahmoud', 32, 1514214522, 'mostafamahmoud14@gmail.com', 1234, 136565, '28511041709945'),
(4, 'Alaa Mohamed', 30, 1021400145, 'alaamo10@gmail.com', 1234, 542141, '28010041709945'),
(5, 'Ahmed Ali ', 28, 1002514101, 'ahmedali177@gmail.com', 1234, 124154, '27810241709990'),
(7, 'Osama Mahmoud', 33, 1023651017, 'osamamahmoud45@gmail.com', 1234, 3021148, '28510011709991');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `drive_data`
--
ALTER TABLE `drive_data`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `d_license` (`d_license`),
  ADD UNIQUE KEY `d_email` (`d_email`),
  ADD UNIQUE KEY `d_phone` (`d_phone`),
  ADD UNIQUE KEY `d_nid` (`d_nid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `drive_data`
--
ALTER TABLE `drive_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
