-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 29, 2019 at 01:14 PM
-- Server version: 10.1.40-MariaDB
-- PHP Version: 7.1.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `school`
--

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(11) NOT NULL,
  `student_name` varchar(55) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `student_name`) VALUES
(1, 'satyam'),
(2, 'satyam'),
(3, 'satyam'),
(4, 'anita');

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `id` int(11) NOT NULL,
  `name` varchar(55) DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `email` varchar(55) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`id`, `name`, `age`, `email`) VALUES
(1001, 'ram', NULL, NULL),
(1002, 'shaam', NULL, NULL),
(1003, 'monu', NULL, NULL),
(1004, 'aa', NULL, NULL),
(1005, NULL, 5, NULL),
(1006, NULL, 6, NULL),
(1007, NULL, 8, NULL),
(1008, NULL, 6, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `teacher_address`
--

CREATE TABLE `teacher_address` (
  `id` int(11) NOT NULL,
  `teacher_id` int(11) DEFAULT NULL,
  `address` varchar(55) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teacher_address`
--

INSERT INTO `teacher_address` (`id`, `teacher_id`, `address`) VALUES
(1, 1, 'delhi'),
(2, 1, 'up'),
(3, 1, 'noida'),
(4, 1001, 'delhi'),
(5, 1001, 'up'),
(6, 1001, 'noida');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `uname` varchar(55) DEFAULT NULL,
  `uemail` varchar(55) DEFAULT NULL,
  `umobile` varchar(55) DEFAULT NULL,
  `uimg` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `uname`, `uemail`, `umobile`, `uimg`) VALUES
(1, 't', 't', '23742378', ''),
(2, 'tajinder', 'tajinder@gmail.com', '9899064177', ''),
(3, 'mohan', 'kumar', '989906418', ''),
(4, 'snehjeet', 'kaur', '9900553212', ''),
(5, 'raman', 'raman@gmail.com', '9207747435', ''),
(6, 'saayam', 'syam@gmail.com', '3459325', 'Koala.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teacher_address`
--
ALTER TABLE `teacher_address`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `teacher`
--
ALTER TABLE `teacher`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1009;

--
-- AUTO_INCREMENT for table `teacher_address`
--
ALTER TABLE `teacher_address`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
