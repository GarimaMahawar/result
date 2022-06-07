-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 12, 2021 at 03:40 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `engg_college`
--

-- --------------------------------------------------------

--
-- Table structure for table `result`
--

CREATE TABLE `result` (
  `id` int(11) NOT NULL,
  `stdname` varchar(50) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `mname` varchar(50) NOT NULL,
  `dob` date DEFAULT NULL,
  `class` varchar(10) NOT NULL,
  `rollnum` int(11) NOT NULL,
  `enrollment_no` varchar(50) NOT NULL,
  `gender` enum('male','female') NOT NULL,
  `hindi` int(11) NOT NULL,
  `english` int(11) NOT NULL,
  `science` int(11) NOT NULL,
  `maths` int(11) NOT NULL,
  `social_science` int(11) NOT NULL,
  `sanskrit` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `result`
--

INSERT INTO `result` (`id`, `stdname`, `fname`, `mname`, `dob`, `class`, `rollnum`, `enrollment_no`, `gender`, `hindi`, `english`, `science`, `maths`, `social_science`, `sanskrit`) VALUES
(1, 'Saanvi', 'Mukesh', 'Ritu', '2000-07-15', '8', 30, 'SAANVI30', 'female', 76, 74, 67, 81, 67, 89),
(2, 'Ishita', 'Sonu', 'Savita', '2020-07-02', '10', 25, 'ISHITA25', 'female', 99, 87, 98, 81, 89, 89),
(3, 'lovi', 'kavi', 'lavi', '1999-07-06', '10', 10, 'LOVI10', 'female', 30, 30, 27, 33, 31, 29),
(4, 'Sarita Soni', 'Ravi Kumar', 'Trisha Devi', '2000-11-19', '8', 5, 'SARITA5', 'female', 67, 87, 67, 66, 76, 99),
(6, 'Shivani', 'Suresh', 'Godavari', '2000-07-15', '9', 15, 'SHIVANI15', 'female', 30, 87, 98, 99, 71, 72);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `result`
--
ALTER TABLE `result`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `enrollment_no` (`enrollment_no`),
  ADD UNIQUE KEY `rollnum` (`rollnum`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `result`
--
ALTER TABLE `result`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
