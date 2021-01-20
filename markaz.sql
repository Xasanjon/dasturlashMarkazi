-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 20, 2021 at 03:24 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `baza_markaz`
--

-- --------------------------------------------------------

--
-- Table structure for table `markaz`
--

CREATE TABLE `markaz` (
  `id` int(11) NOT NULL,
  `ism` varchar(100) NOT NULL,
  `tel` varchar(100) NOT NULL,
  `fan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `markaz`
--

INSERT INTO `markaz` (`id`, `ism`, `tel`, `fan`) VALUES
(38, 'Azizbek', '901234567', 'web'),
(39, 'Abbosxon', '912345678', 'web'),
(40, 'Ilhom', '934567799', 'web'),
(41, 'Ahmadjon', '99780199', 'python'),
(42, 'Zohidjon', '994550955', 'react'),
(44, 'Gulshoda', '903567898', 'android'),
(45, 'Anora', '945678921', 'android'),
(46, 'Jamshidbek', '902001999', 'react'),
(48, 'Azimjon', '999073799', 'web');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `markaz`
--
ALTER TABLE `markaz`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `markaz`
--
ALTER TABLE `markaz`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
