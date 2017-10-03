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
  `participation_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `number_of_attempts` int(11) NOT NULL,
  `complete_time` int(11) NOT NULL,
  `number_of_questions` int(11) NOT NULL,
  `timestamp` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (participation_id)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pictures`
--

CREATE TABLE `pictures` (
  `id` varchar(650) NOT NULL,
  `image_location` varchar(650) NOT NULL,
  `answer` varchar(650) NOT NULL,
  `option1` varchar(650) NOT NULL,
  `option2` varchar(128) NOT NULL,
  `patient_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pictures`
--

INSERT INTO(id,image_location,answer,option1,option2,patient_id) 
VALUES(1,"https://cdn-s3.si.com/s3fs-public/styles/marquee_large_2x/public/2015/04/17/mia-khalifa-wnba.jpg?itok=d72qTwYn","Mia Khalifa","Pamela Andersan","Sara Jay",1);

INSERT INTO(id,image_location,answer,option1,option2,patient_id) 
VALUES(2,"http://morungexpress.com/wp-content/uploads/2016/09/Sunny-Leone-1.jpg","Sunney Leone","Pamela Andersan","Sara Jay",1);

INSERT INTO(id,image_location,answer,option1,option2,patient_id) 
VALUES(3,"http://cdn.eldeforma.com/wp-content/uploads/2016/12/J4.jpg","Johny Sins","Jack","John",1);


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
