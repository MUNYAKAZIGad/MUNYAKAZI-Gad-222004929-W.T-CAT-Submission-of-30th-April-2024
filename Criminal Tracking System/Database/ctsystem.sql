-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 30, 2024 at 01:36 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ctsystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `cam001`
--

CREATE TABLE `cam001` (
  `country` varchar(50) NOT NULL,
  `province` varchar(50) NOT NULL,
  `district` varchar(50) NOT NULL,
  `sector` varchar(50) NOT NULL,
  `village` varchar(50) NOT NULL,
  `cell` varchar(50) NOT NULL,
  `wrfrom` varchar(50) NOT NULL,
  `wrto` varchar(50) NOT NULL,
  `attribute` varchar(50) NOT NULL,
  `nearbypolicestation` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `cam001`
--

INSERT INTO `cam001` (`country`, `province`, `district`, `sector`, `village`, `cell`, `wrfrom`, `wrto`, `attribute`, `nearbypolicestation`) VALUES
('Rwanda', 'Eastern', 'District', 'Mwurire', 'Kabare', 'Gasake', 'Kigali', 'Ngoma', 'Kigali - Tanzania', 'Kayonza Police station'),
('Rwanda', 'Southern', 'District', 'Karembure', 'Kabeza', 'Kanzenze', 'Rulindo', 'Nyagatare', 'Kigali-Nyagatare', 'Musanze Police Station'),
('ASDFASDF', 'ASDFASDF', 'District', 'ASDFA', 'ASDFA', 'ASDF', 'ASDF', 'ASDFAS', 'DFASD', 'ADSF'),
('USA', 'Northern America', 'Ottawa', 'Montreal', 'Colombia DC', '', 'John Smith', 'Kessy Smith', 'Kigali to Musanze', 'Musanze Police station'),
('USA', 'Northern America', 'Ottawa', 'Montreal', 'Colombia DC', '', 'John Smith', 'Kessy Smith', 'Kigali to Musanze', 'Musanze Police station'),
('USA', 'Northern America', 'Ottawa', 'Montreal', 'Colombia DC', '', 'John Smith', 'Kessy Smith', 'Kigali to Musanze', 'Musanze Police station'),
('USA', 'Northern America', 'Ottawa', 'Montreal', 'Colombia DC', '', 'John Smith', 'Kessy Smith', 'Kigali to Musanze', 'Musanze Police station'),
('USA', 'Northern America', 'Ottawa', 'Montreal', 'Colombia DC', '', 'John Smith', 'Kessy Smith', 'Kigali to Musanze', 'Musanze Police station'),
('USA', 'Northern America', 'Ottawa', 'Montreal', 'Colombia DC', '', 'John Smith', 'Kessy Smith', 'Kigali to Musanze', 'Musanze Police station'),
('USA', 'Northern America', 'Ottawa', 'Montreal', 'Colombia DC', '', 'John Smith', 'Kessy Smith', 'Kigali to Musanze', 'Musanze Police station'),
('', '', '', '', '', '', '', '', '', ''),
('', '', '', '', '', '', '', '', '', ''),
('', '', '', '', '', '', '', '', '', ''),
('', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `criminal_info`
--

CREATE TABLE `criminal_info` (
  `id` int(50) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `picture` varchar(50) NOT NULL,
  `crime` varchar(50) NOT NULL,
  `residential_address` varchar(50) NOT NULL,
  `province` varchar(50) NOT NULL,
  `district` varchar(50) NOT NULL,
  `sector` varchar(50) NOT NULL,
  `village` varchar(50) NOT NULL,
  `cell` varchar(50) NOT NULL,
  `father_name` varchar(50) NOT NULL,
  `mother_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `criminal_info`
--

INSERT INTO `criminal_info` (`id`, `firstname`, `lastname`, `picture`, `crime`, `residential_address`, `province`, `district`, `sector`, `village`, `cell`, `father_name`, `mother_name`) VALUES
(2, 'MUNYAKAZI', 'John', 'img 2024', 'Cyber Attack', 'KG 792 st', 'Northern America', 'Ottawa', 'Montreal', 'Colombia DC', 'Ruhango', 'Joedan Smith', 'Joe Smith'),
(3, 'KALISA', 'John', 'img 2024', 'Cyber Attack', 'KG 792 st', 'Northern America', 'Ottawa', 'Montreal', 'Colombia DC', 'Ruhango', 'Joedan Smith', 'Joe Smith');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `firstname` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`firstname`, `password`) VALUES
('MUNYAKAZI', '1234567890'),
('ISHIMWE', '1234567890'),
('', '');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `firstname` varchar(50) DEFAULT NULL,
  `lastname` varchar(50) DEFAULT NULL,
  `username` varchar(50) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `telephone` varchar(20) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `creationdate` timestamp NOT NULL DEFAULT current_timestamp(),
  `activation_code` varchar(50) DEFAULT NULL,
  `is_activated` tinyint(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `firstname`, `lastname`, `username`, `email`, `telephone`, `password`, `creationdate`, `activation_code`, `is_activated`) VALUES
(1, 'MUNYAKAZI', 'Gad', 'mgad', 'mgad@gmail.com', '', '$2y$10$WmaxFex75UaW1K18aubcau1sk3JVpbvKFV7ttRCv59MvaLUtymk6S', '2024-04-11 12:47:19', NULL, 0),
(12, 'GANZA', 'Owen', 'gowen', 'ganzaowen@gmail.com', '0788854916', '$2y$10$bRWWF2prIbT2J7TTB4GV1ubsoC.3bnH6qPx6s0D96ugjluTX6.zYS', '2024-04-27 12:23:35', NULL, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
