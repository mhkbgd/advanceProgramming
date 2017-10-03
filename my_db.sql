-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 03, 2017 at 10:30 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `my_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `participation`
--

CREATE TABLE `participation` (
  `ID` int(128) NOT NULL,
  `userID` int(128) NOT NULL,
  `attempts` int(128) NOT NULL,
  `time` int(128) NOT NULL,
  `questions` int(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pictures`
--

CREATE TABLE `pictures` (
  `Id` varchar(650) NOT NULL,
  `Name` varchar(650) NOT NULL,
  `Person_name` varchar(650) NOT NULL,
  `Relation` varchar(650) NOT NULL,
  `option_one` varchar(128) NOT NULL,
  `option_two` varchar(128) NOT NULL,
  `option_three` varchar(128) NOT NULL,
  `pation_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pictures`
--

INSERT INTO `pictures` (`Id`, `Name`, `Person_name`, `Relation`, `option_one`, `option_two`, `option_three`, `pation_id`) VALUES
('fd4c8e59b8a7add298869bd9fef2417c59d348ddd8b17', 'Uploaded_images/fd4c8e59b8a7add298869bd9fef2417c59d348ddd8b17', 'Mahmud', 'myself', 'Dad', 'Mom', 'Sister', 3);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `Id` int(10) NOT NULL,
  `First_name` varchar(650) NOT NULL,
  `Last_name` varchar(650) NOT NULL,
  `Age` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`Id`, `First_name`, `Last_name`, `Age`) VALUES
(1, 'Ali', 'Mohammad', 100),
(2, 'Hasam', 'Majid', 230),
(3, 'mahmud', 'hasan', 21);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pictures`
--
ALTER TABLE `pictures`
  ADD UNIQUE KEY `Id` (`Id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD UNIQUE KEY `Id` (`Id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
