-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 19, 2021 at 10:46 AM
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
(2, 'Azizbek', '999073799', 'Matematika'),
(6, 'Karimjon', '905124565', 'Rus tili'),
(25, 'Javohir', '999073799', 'Ingiliz tili'),
(26, 'Toirjon', '999073796', 'Ingiliz tili'),
(27, 'Aqilbek', '999073799', 'Ingiliz tili'),
(29, 'Xasanboy', '999073796', 'Matematika'),
(30, 'komilk', '999073799', 'Kimyo'),
(32, 'Saidbek', '905124565', 'Kimyo'),
(33, 'Jamshid', '934568955', 'Ingiliz tili'),
(34, 'Zohidjon', '994050955', 'Matematika'),
(35, 'Ilhomjon', '934597799', 'Kimyo'),
(36, 'Jahongir', '914789652', 'Rus tili'),
(37, 'Ahmadjon', '994570101', 'Rus tili');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
