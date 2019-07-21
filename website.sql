-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 29, 2019 at 12:43 PM
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
-- Database: `contact`
--

-- --------------------------------------------------------

--
-- Table structure for table `website`
--

CREATE TABLE `website` (
  `s_name` text,
  `s_email` text,
  `s_phone` int(11) DEFAULT NULL,
  `s_message` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `website`
--

INSERT INTO `website` (`s_name`, `s_email`, `s_phone`, `s_message`) VALUES
('0', '0', 100555, '0'),
('Ø¨Ø¨Ø¨', '0', 100555, '0'),
('Ø¨Ø¨Ø¨', '0', 100555, '0'),
('aaa', '0', 100555, '0'),
('aaa', '0', 100555, '0'),
('aaa', '0', 100555, '0'),
('aaa', 'aaa@aaaa', 100555, '0'),
('aaa', 'aaa@aaaa', 100555, 'aaa'),
('aaa', 'aaa@aaaa', 100555, 'g54'),
('aaa', 'aaa@aaaa', 100555, 'g54'),
('Mahmoud', 'mahmoud@gmail.com', 102514144, 'thanks'),
('Mahmoud', 'mahmoud@gmail.com', 102514144, 'thanks'),
('Mahmoud', 'mahmoud@gmail.com', 102514144, 'very good'),
('Mahmoud', 'mahmoud@gmail.com', 102514144, 'good'),
('Mahmoud Ayad', 'mahmoudayad03@yahoo.com', 1025061019, 'Site can be save time & money, Thanhs â™¥ '),
('Mahmoud Ayad', 'mahmoudayad03@yahoo.com', 1025061019, 'Site can be save time & money, Thanhs â™¥ ');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
