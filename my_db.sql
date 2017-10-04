-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 03, 2017 at 10:18 PM
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
  `id` varchar(650) NOT NULL,
  `image_location` varchar(650) NOT NULL,
  `relation` varchar(128) NOT NULL,
  `answer` varchar(650) NOT NULL,
  `option1` varchar(650) NOT NULL,
  `option2` varchar(128) NOT NULL,
  `option3` varchar(128) NOT NULL,
  `patient_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pictures`
--

INSERT INTO `pictures` (`id`, `image_location`, `relation`, `answer`, `option1`, `option2`, `option3`, `patient_id`) VALUES
('1ddbe0e96c1c2847d4ccea51791f156d59d3d016ce6dd', 'Uploaded_images/1ddbe0e96c1c2847d4ccea51791f156d59d3d016ce6dd', 'myself', 'Mahmud', 'one', 'two', 'three', 1),
('0d5b1c4c7f720f698946c7f6ab08f68759d3e3259f9e1', 'Uploaded_images/0d5b1c4c7f720f698946c7f6ab08f68759d3e3259f9e1', 'relation', 'name2', 'one', 'two', 'three', 1),
('fd4c8e59b8a7add298869bd9fef2417c59d3e71ca5d46', 'Uploaded_images/fd4c8e59b8a7add298869bd9fef2417c59d3e71ca5d46', 'name', 'name', 'one', 'two', 'three', 2);

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
(1, 'Mahmud', 'Khan', 21),
(2, 'second', 'last', 22);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD UNIQUE KEY `Id` (`Id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
