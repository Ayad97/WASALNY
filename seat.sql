-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 24, 2019 at 03:15 AM
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
  `clicked` text NOT NULL,
  `id` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`py_name`, `py_email`, `py_adress`, `py_city`, `py_state`, `py_zip`, `py_card_num`, `py_end_month`, `py_end_year`, `py_cvv`, `clicked`, `id`) VALUES
('ahmed', 'ahmed123@gmail.com', 'shbin', 'egypt', 'y', '123455', '455512', '12', '2020', '3254', '', 0),
('amer', 'mahmoud74amer@gmail.com', '', '', '', '0', '0', '0', '0000', '0', '', 0),
('mora', 'wee', '', '', '', '', '', '', '', '', '', 0),
('mora', 'wee', 'qww', 'dds', 'w', '54e', 'dc', 'sdf', '1', '45', '', 0),
('ahly', '', '', '', '', '', '', '', '', '', '', 0),
('', '', 'cn asc', '', '', '', '', '', '', '', '', 0),
('', '', 'cn asc', '', '', '', '', '', '', '', '', 0),
('', '', 'cn asc', '', '', '', '', '', '', '', '', 0),
('fdfsfwadawdawd', '', '', '', '', '', '', '', '', '', '', 0),
('fdfsfwadawdawd', '', '', '', '', '', '', '', '', '', '', 0),
('', 'aedea', '', '', '', '', '', '', '', '', '', 0),
('', 'dadsa', '', '', '', '', '', '', '', '', '', 0),
('Ø¹ÙŠØ§Ø¯ Ø§Ù„Ø®ÙˆÙ„', 'dadsa', '', '', '', '', '', '', '', '', '', 0),
('', '', '', '', '', '', '', '', '', '', '', 0),
('', '', 'amer city', '', '', '', '', '', '', '', '', 0),
('', '', 'amer city', '', '', '', '', '', '', '', '', 0),
('', '', 'amer city', '', '', '', '', '', '', '', '', 0),
('', '', 'amer city', '', '', '', '', '', '', '', '', 0),
('', '', 'amer city', '', '', '', '', '', '', '', '', 0),
('', '', 'amer city', '', '', '', '', '', '', '', '', 0),
('', '', 'amer city', '', '', '', '', '', '', '', '', 0),
('', '', 'amer city', '', '', '', '', '', '', '', '', 0),
('', '', '', '', '', '', '', '', '', '', '', 0),
('', '', '', '', '', '', '', '', '', '', '', 0),
('', '', '', '', '', '', '', '', '', '', '', 0),
('', '', '', '', '', '', '', '', '', '', '', 0),
('', '', '', '', '', '', '', '', '', '', '', 0),
('', '', '', '', '', '', '', '', '', '', '', 0),
('', '', '', '', '', '', '', '', '', '', '', 0),
('', '', '', '', '', '', '', '', '', '', '', 0),
('', '', '', '', '', '', '', '', '', '', '', 0),
('', '', '', '', '', '', '', '', '', '', '', 0),
('', '', '', '', '', '', '', '', '', '', '', 0),
('', '', '', '', '', '', '', '', '', '', '', 0),
('', '', 'fdf', '', '', '', '', '', '', '', '', 0),
('', '', 'fdf', '', '', '', '', '', '', '', '', 0),
('', '', 'fdf', '', '', '', '', '', '', '', '', 0),
('', '', 'fdf', '', '', '', '', '', '', '', '', 0),
('', '', 'fdf', '', '', '', '', '', '', '', '', 0),
('', '', 'fdf', '', '', '', '', '', '', '', '', 0),
('', '', '', '', '', '', '', '', '', '', '', 0),
('', '', '', '', '', '', '', '', '', '', '', 0),
('', '', '', '', '', '', '', '', '', '', '', 0),
('', '', 'sdf', '', '', '', '', '', '', '', '', 0),
('new record', 'email.com', 'dadssdf', 'egyy', 'nn', '010211', '1558523455', '77', '22014', '35450', '', 0),
('', '', '', '', '', '', '', '', '', '', '', 0),
('', '', 'nbncasbcsa', '', '', '', '', '', '', '', '', 0),
('zxczxxx', 'kds', 'cdc', '', '', '', '', '', '', '', '', 0),
('zxczxxx', 'kds', 'cdc', '', '', '', '', '', '', '', '', 0),
('', '', '', '', '', '', '', '', '', 'zxc', '', 0),
('', '', '', '', '', '', '', '', '', 'zxc', '', 0),
('', '', '', '', '', '', '', '', '', 'dxsada', '', 0),
('', '', '', '', '', '', '', '', 'ds', 'sd', '', 0),
('', '', '', '', '', '', '', '', 'zxc', 'zc', '', 0),
('', '', '', '', '', '', '', '', 'zxc', 'zc', '', 0),
('', '', '', '', '', '', '', '', 'zxc', 'zc', '', 0),
('', '', '', '', '', '', '', '', 'xd', 'vv', '', 0),
('', '', '', '', '', '', '', '', 'xcv', 'vc', '', 0),
('', '', '', '', '', '', '', '', 'xcv', 'vc', '', 0),
('', '', '', '', '', '', '', '', 'xcv', 'vc', '  29A 30A ', 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
