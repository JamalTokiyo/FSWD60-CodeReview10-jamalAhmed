-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 16, 2019 at 04:22 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cr10_jamal_ahmed_biglibrary`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookinfo`
--

CREATE TABLE `bookinfo` (
  `bookid` int(11) NOT NULL,
  `sub` varchar(30) NOT NULL,
  `title` varchar(60) NOT NULL,
  `author` varchar(255) NOT NULL,
  `publish` varchar(255) NOT NULL,
  `copyright` int(11) NOT NULL,
  `edition` int(11) NOT NULL,
  `ISBN` int(11) NOT NULL,
  `library` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `bookinfo`
--

INSERT INTO `bookinfo` (`bookid`, `sub`, `title`, `author`, `publish`, `copyright`, `edition`, `ISBN`, `library`) VALUES
(1, 'Java', 'java script', 'Jon duckett', 'Wiley', 2002, 3, 12344, 'main'),
(2, 'Java', 'java script', 'Jon duckett', 'Wiley', 2002, 4, 12, 'thalia'),
(3, 'Java', 'java script', 'Jon duckett', 'Wiley', 2002, 4, 12, 'thalia'),
(4, 'Java', 'java script', 'Jon duckett', 'Wiley', 2002, 4, 12, 'thalia'),
(5, 'Java', 'java script', 'Jon duckett', 'Wiley', 2002, 4, 12, 'thalia'),
(6, '', '', '', '', 0, 0, 0, ''),
(7, '', '', '', '', 0, 0, 0, ''),
(8, '', '', '', '', 0, 0, 0, ''),
(9, 'Java', 'java script', 'Jon duckett', 'Wiley', 2003, 5, 2147483647, 'thalia'),
(10, 'Java', 'java script', 'Jon duckett', 'Wiley', 2222, 4, 2323556, 'thalia'),
(11, 'Java', 'java script', 'Jon duckett', 'Wiley', 2222, 4, 2323556, 'thalia'),
(12, 'Java', 'java script', 'Jon duckett', 'Wiley', 2222, 4, 2323556, 'thalia'),
(13, 'Java', 'java script', 'Jon duckett', 'Wiley', 222, 44, 23232322, 'thalia'),
(14, 'Java', 'java script', 'Jon duckett', 'Wiley', 222, 44, 23232322, 'thalia'),
(15, 'Java', 'java script', 'Jon duckett', 'Wiley', 222, 44, 23232322, 'thalia'),
(16, 'Java', 'java script', 'Jon duckett', 'Wiley', 222, 44, 23232322, 'thalia'),
(17, 'Java', 'java script', 'Jon duckett', 'Wiley', 2002, 44, 2147483647, 'thalia'),
(18, 'Java', 'java script', 'Jon duckett', 'Wiley', 2002, 44, 2147483647, 'thalia'),
(19, 'HTML', 'desigh', 'Jon duckett', 'Wiley', 2001, 3, 122332, 'thalia'),
(20, 'HTML', 'desigh', 'Jon duckett', 'Wiley', 2001, 3, 122332, 'thalia'),
(21, 'HTML', 'java script', 'Jon duckett', 'Wiley', 22, 22, 323232, 'thalia'),
(22, 'Java', 'java script', 'Jon duckett', 'Wiley', 2019, 3, 12344, 'thalia'),
(23, 'Java', 'java script', 'Jon duckett', 'Wiley', 2018, 3, 10020121, 'Main'),
(24, 'Java', 'java script', 'Jon duckett', 'Wiley', 2018, 3, 10020121, 'Main'),
(25, '', '', '', '', 0, 3, 0, ''),
(26, 'Java', 'java script', 'Jon duckett', 'Wiley', 2011, 22, 21213, 'thalia'),
(27, 'HTML', 'java script', 'Jon duckett', 'Wiley', 2018, 44, 213, 'thalia');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userId` int(11) NOT NULL,
  `userName` varchar(30) NOT NULL,
  `userEmail` varchar(60) NOT NULL,
  `userPass` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userId`, `userName`, `userEmail`, `userPass`) VALUES
(1, 'Jamal Ahmed', 'jamalusb@yahoo.com', '0ff0fbc2a99eae05c4e75a98e7917ce3cc6f9fdb406a3d7a830d8a97cb65f553'),
(2, 'adem', 'jamalusb@gmail.com', '0ff0fbc2a99eae05c4e75a98e7917ce3cc6f9fdb406a3d7a830d8a97cb65f553'),
(3, 'Ahmed Jamal', 'jamal@mailbox.com', '0ff0fbc2a99eae05c4e75a98e7917ce3cc6f9fdb406a3d7a830d8a97cb65f553'),
(4, 'Ahmed Jamal', 'adem@mailbox.com', '0ff0fbc2a99eae05c4e75a98e7917ce3cc6f9fdb406a3d7a830d8a97cb65f553');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookinfo`
--
ALTER TABLE `bookinfo`
  ADD PRIMARY KEY (`bookid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userId`),
  ADD UNIQUE KEY `userEmail` (`userEmail`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bookinfo`
--
ALTER TABLE `bookinfo`
  MODIFY `bookid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
