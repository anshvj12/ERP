-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 01, 2017 at 04:59 PM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `student`
--

-- --------------------------------------------------------

--
-- Table structure for table `st`
--

CREATE TABLE `st` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `user` varchar(10) NOT NULL,
  `secctin` varchar(5) NOT NULL,
  `age` int(11) NOT NULL,
  `no` varchar(15) NOT NULL,
  `email` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `st`
--

INSERT INTO `st` (`id`, `name`, `user`, `secctin`, `age`, `no`, `email`, `password`) VALUES
(10, 'dwarika das vaishnav', 'dwarika', 'a', 21, '9672314499', 'akshayvaishnav510@gm', '54321'),
(11, 'Anshul Vijayvargiya', 'anshul', 'A', 18, '7426975940', '2016pietceanshul125@', 'ansh'),
(12, 'yash', 'pce16ce120', 'b', 19, '7062046286', 'yashbharadwajsuper@g', 'yashyash');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `st`
--
ALTER TABLE `st`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `st`
--
ALTER TABLE `st`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
