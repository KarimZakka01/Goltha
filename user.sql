-- phpMyAdmin SQL Dump
-- version 5.3.0-dev+20220508.7aa512c357
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 01, 2022 at 07:47 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `goltha`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `password`, `gender`) VALUES
(1, 'fqn', 'maspo@gmail.com', '02039afb9a7bfa71dac56bbfe3a0fb35', 'male'),
(2, 'karim', 'karim@gmail.com', '40587bff0e72b6fdbba30c40c95e148a', 'male'),
(3, 'jad', 'jad@gmail.com', 'af5db17123ff66882037de393182ec39', 'male'),
(4, 'karim', 'kmz@gmail.com', '40587bff0e72b6fdbba30c40c95e148a', 'male'),
(5, 'karim', 'karim@gmail.com', '1b0eacb32a5ed8371c80710b8f4b5e92', 'male'),
(6, 'karim', 'karim@gmail.com', 'c4b030bcd684d7daea9157112cdd2dfd', 'male'),
(7, 'dqwf', 'qefn@gmail.com', 'c83b2d5bb1fb4d93d9d064593ed6eea2', 'male'),
(8, 'lolo', 'ka@gmail.com', 'a152e841783914146e4bcd4f39100686', 'male'),
(9, 'rasha', 'rashaberjawi02@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'male'),
(10, 'zmxnkarim', 'lnewf@gmail.com', 'a384b6463fc216a5f8ecb6670f86456a', 'other'),
(11, 'karim', 'karim2001@gmail.com', '55f56161e77f1bd94f4edf10c0bc2571', 'male'),
(12, 'karim', 'karim012@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'male'),
(13, 'karim', 'karim0123@gmail.com', '040b7cf4a55014e185813e0644502ea9', 'male'),
(14, 'kmza', 'kmza@gmail.com', 'd8578edf8458ce06fbc5bb76a58c5ca4', 'male');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;



