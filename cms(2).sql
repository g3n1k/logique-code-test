-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: mariadb
-- Generation Time: Feb 27, 2020 at 08:32 AM
-- Server version: 10.3.10-MariaDB-1:10.3.10+maria~bionic
-- PHP Version: 7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cms`
--

-- --------------------------------------------------------

--
-- Table structure for table `address`
--

CREATE TABLE `address` (
  `user_id` int(4) NOT NULL,
  `address` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `address`
--

INSERT INTO `address` (`user_id`, `address`) VALUES
(1, 'add 1'),
(1, 'add 2'),
(2, 'add 1'),
(2, 'add 2'),
(3, 'add r 1'),
(3, 'add r 2');

-- --------------------------------------------------------

--
-- Table structure for table `membersip`
--

CREATE TABLE `membersip` (
  `user_id` int(4) NOT NULL,
  `tipe` varchar(32) NOT NULL,
  `cc` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `membersip`
--

INSERT INTO `membersip` (`user_id`, `tipe`, `cc`) VALUES
(1, 'Silver', '21312321'),
(2, 'Silver', 'asdasd'),
(3, 'Silver', 'abc');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(4) NOT NULL,
  `f_name` varchar(32) NOT NULL,
  `l_name` varchar(32) NOT NULL,
  `email` varchar(64) NOT NULL,
  `pass` varchar(32) NOT NULL,
  `dob` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `f_name`, `l_name`, `email`, `pass`, `dob`) VALUES
(1, 'indra', ' sadik', 'indra.sadik@gmail.com', '', '2020-01-26'),
(2, 'indra', 'sadik', 'indr@gm.co', '', '2020-02-03'),
(3, 'read', 'dir', 'read@dir.com', '827ccb0eea8a706c4c34a16891f84e7b', '2020-01-28');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
