-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 04, 2017 at 08:14 AM
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
  `id` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `userID` int(128) NOT NULL,
  `attempts` int(128) NOT NULL,
  `time` int(128) NOT NULL,
  `questions` int(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `participation`
--

INSERT INTO `participation` (`id`, `date`, `userID`, `attempts`, `time`, `questions`) VALUES
(5, '2017-10-04 04:30:12', 1, 2, 6, 2),
(6, '2017-10-04 04:34:31', 1, 4, 11, 2),
(7, '2017-10-04 04:35:47', 1, 2, 4, 2),
(8, '2017-10-04 04:38:26', 1, 3, 9, 2),
(9, '2017-10-04 04:46:54', 2, 2, 8, 2),
(10, '2017-10-04 04:47:57', 2, 1, 3, 1),
(11, '2017-10-04 05:57:21', 1, 3, 18, 2),
(12, '2017-10-04 05:59:33', 1, 2, 5, 2),
(13, '2017-10-04 06:01:07', 1, 2, 16, 2),
(14, '2017-10-04 06:03:28', 1, 2, 5, 2),
(15, '2017-10-04 06:04:20', 2, 2, 8, 1),
(16, '2017-10-04 06:10:25', 1, 2, 4, 2);

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
-- Indexes for table `participation`
--
ALTER TABLE `participation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD UNIQUE KEY `Id` (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `participation`
--
ALTER TABLE `participation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
