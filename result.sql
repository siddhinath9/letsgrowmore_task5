-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 31, 2023 at 03:50 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `result`
--

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `Username` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `full_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `Username`, `Password`, `full_name`) VALUES
(1, 'Siddhinath', 'Surekha', 'Siddhinath Pawar'),
(2, 'Pratik', 'Pratik123', 'Pratik Pawar'),
(3, 'Sumit', 'Sumit123', 'Sumit Sarvankar'),
(4, 'Gauresh', 'Gauresh123', 'Gauresh Sawant');

-- --------------------------------------------------------

--
-- Table structure for table `result_1`
--

CREATE TABLE `result_1` (
  `id` int(11) NOT NULL,
  `Username` varchar(255) NOT NULL,
  `physics` int(255) NOT NULL,
  `chemistry` int(255) NOT NULL,
  `mathematics` int(255) NOT NULL,
  `biology` int(255) NOT NULL,
  `english` int(255) NOT NULL,
  `marathi` int(255) NOT NULL,
  `total` int(255) NOT NULL,
  `average` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `result_1`
--

INSERT INTO `result_1` (`id`, `Username`, `physics`, `chemistry`, `mathematics`, `biology`, `english`, `marathi`, `total`, `average`) VALUES
(1, 'Siddhinath', 100, 100, 100, 100, 100, 100, 100, 100),
(2, 'Pratik', 90, 90, 90, 90, 90, 90, 90, 90),
(3, 'Sumit', 90, 90, 90, 90, 90, 90, 90, 90),
(4, 'Gauresh', 80, 80, 80, 80, 80, 80, 80, 80);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `result_1`
--
ALTER TABLE `result_1`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `result_1`
--
ALTER TABLE `result_1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
