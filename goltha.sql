-- phpMyAdmin SQL Dump
-- version 5.3.0-dev+20220508.7aa512c357
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 02, 2022 at 10:44 PM
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
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `body` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `subject`, `body`) VALUES
(1, 'karim', 'karimzakka@gmail.com', 'test', 'This is a db test email.'),
(2, 'iyad', 'iyad@gmail.com', 'test 2', 'This is another test for db.'),
(3, 'jad', 'jad@gmail.com', 'test 3', 'This is the third test.'),
(4, 'hhh', 'rashaberjawi02@gmail.com', 'hhhh', 'hhhh\r\n'),
(5, 'sadn', 'dvpnon@gmail.com', 'nqepiv', 'edwvh'),
(6, 'nadfe', 'lnkva@gmail.com', 'nop', 'npewig'),
(7, 'nfkl', 'fo@gmail.com', 'd acs', 'sa.f'),
(8, 'adh', 'fo@gmail.com', ' sv.', ' vjbd'),
(9, 'karim', 'karim@gmail.com', 'okay', 'hellooo');

-- --------------------------------------------------------

--
-- Table structure for table `universities`
--

CREATE TABLE `universities` (
  `id` int(100) NOT NULL,
  `university` varchar(100) NOT NULL,
  `location` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `average_tuition_per_semester` varchar(255) NOT NULL,
  `average_price_per_credit` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `universities`
--

INSERT INTO `universities` (`id`, `university`, `location`, `description`, `average_tuition_per_semester`, `average_price_per_credit`, `email`, `phone`, `link`) VALUES
(1, 'American University of Beirut', 'Hamra, Beirut, Lebanon', '​​Founded in 1866, the American University of Beirut bases its educational philosophy, standards, and practices on the American liberal arts model of higher education. A teaching-centered research university, AUB has around 800 instructional faculty and a student body of around 8,000 students.', '8,256', '775', 'admissions@aub.edu.lb    ', '+961-1-374374', 'https://www.aub.edu.lb/'),
(2, 'Lebanese Interanational University', 'Salim Slem, Beirut, Lebanon', 'The Lebanese International University is a private university established by the philanthropist and former Lebanese defense and education minister Abdul Rahim Mourad. The language of instruction is English. affordable quality education. It is highly recognized for its School of harmacy. ', '3,250', '274', 'admissions@liu.edu.lb', '+961-1-706881', 'https://liu.edu.lb/NewLIU2022/'),
(3, 'Lebanese American University', 'Hamra, Beirut, Lebanon\n', 'LAU provides a high standard education to more than 8,000 students in different majors. Its seven schools and 17 specialized centers and institutes provide an abundance of opportunities for study, research and training for students through two campuses in Beirut and Byblos cities respectively. In addition to that, LAU recently acquired a new world headquarters in the Big Apple (NY), the center of the international action!', '9,319', '779', 'admissions.beirut@lau.edu.lb', '+961-1-786456\n', 'https://www.lau.edu.lb/'),
(4, 'Beirut Arab University', 'Tarik El Jdideh, Beirut, Lebanon', 'BAU has been committed, since its establishment in 1960, to offer outstanding educational programs and to provide an embracing environment for academic creativity and development of leadership skills, instilling the concept of social responsibility, while respecting diversity and multicultural understanding. The University promotes a stimulating academic atmosphere for its academic staff to ensure excellence in research and the dissemination of its outcomes to address community needs, both nationally and internationally. It is highly recognized for its school of dentistry.', '3,250', '274', 'admission@bau.edu.lb', '+961-1-3001100', 'https://www.bau.edu.lb/');

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
(14, 'kmza', 'kmza@gmail.com', 'd8578edf8458ce06fbc5bb76a58c5ca4', 'male'),
(15, 'simba', 'simba@gmail.com', 'd0fb963ff976f9c37fc81fe03c21ea7b', 'male');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `universities`
--
ALTER TABLE `universities`
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
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `universities`
--
ALTER TABLE `universities`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;



