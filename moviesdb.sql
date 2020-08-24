-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 24, 2020 at 12:23 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `moviesdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `moviestb`
--

CREATE TABLE `moviestb` (
  `id` int(255) NOT NULL,
  `title` text NOT NULL,
  `duration` varchar(255) NOT NULL,
  `genre` varchar(255) NOT NULL,
  `language` text NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `moviestb`
--

INSERT INTO `moviestb` (`id`, `title`, `duration`, `genre`, `language`, `image`) VALUES
(1, 'Left Behind', ' 8 MIN', 'Drama', 'English', 'leftbehind.jpg'),
(2, 'Lies We Tell Each Other', ' 3MIN', 'Indian', 'English', 'lies.jpg'),
(3, 'Grill', ' 21 MIN ', 'Indian', 'English', 'grill.jpg'),
(4, 'The Walking Fish', ' 19 MIN', 'Fantasy', 'Hindi', 'walking fish.jpg'),
(5, 'Gulabi Lens', ' 20 MIN', 'Romance', 'Hindi', 'gulabi.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `moviestb`
--
ALTER TABLE `moviestb`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `moviestb`
--
ALTER TABLE `moviestb`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
