-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 05, 2021 at 06:20 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ctf`
--

-- --------------------------------------------------------

--
-- Table structure for table `flag`
--

CREATE TABLE `flag` (
  `flag` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `flag`
--

INSERT INTO `flag` (`flag`) VALUES
('RmxhZ3swMDY5ZWYyZTBlZmZjMTBkYmJiMDJlZjY0ZjgwZmFhZX0K');

-- --------------------------------------------------------

--
-- Table structure for table `points`
--

CREATE TABLE `points` (
  `id` int(1) NOT NULL,
  `flag` varchar(200) NOT NULL,
  `name` varchar(30) NOT NULL,
  `count` set('0','1') NOT NULL DEFAULT '0',
  `point` int(11) NOT NULL,
  `type` set('general','web','network','stegno') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `points`
--

INSERT INTO `points` (`id`, `flag`, `name`, `count`, `point`, `type`) VALUES
(1, 'Flag{8ee2027983915ec78acc45027d874316}', 'Potato', '0', 200, 'web'),
(2, 'Flag{599dcce2998a6b40b1e38e8c6006cb0a}', 'type', '0', 100, 'web'),
(3, 'Flag{431bc85b812bd8bcac81bdd27429a12d}', 'humble', '0', 100, 'web'),
(4, 'Flag{85afaab5f3b6a638269e33d12da2fedf}', 'dbs', '0', 80, 'web'),
(5, 'Flag{8b373710bcf876edd91f281e50ed58ab}', 'history', '0', 20, 'general'),
(6, 'Flag{9678a98e2905327e855263bb52ade7e0}', 'wnnacry', '0', 20, 'general');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`) VALUES
(1, 'test@test.com', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `points`
--
ALTER TABLE `points`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `points`
--
ALTER TABLE `points`
  MODIFY `id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
