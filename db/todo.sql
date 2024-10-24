-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 24, 2024 at 10:23 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `todo`
--

-- --------------------------------------------------------

--
-- Table structure for table `tasks`
--

CREATE TABLE `tasks` (
  `id` int(11) NOT NULL,
  `task` varchar(255) NOT NULL,
  `T_Date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tasks`
--

INSERT INTO `tasks` (`id`, `task`, `T_Date`) VALUES
(33, 'Frist task in app', '2024-10-23'),
(35, 'Tow task in app2', '2024-10-07'),
(37, 'Tow task in app2', '2024-10-01'),
(38, 'Three task in app php with mysql', '2024-10-08'),
(39, 'five task in php app with mysql', '2024-10-28'),
(40, 'six task in php app ', '2024-10-30'),
(41, 'seven task in php app', '2024-10-28'),
(42, 'task5 in php', '2024-10-29'),
(43, 'task9', '2024-10-22'),
(44, 'task10', '2024-10-29'),
(45, 'task11', '2024-10-29'),
(46, 'task12', '2024-10-29'),
(47, 'task144', '2024-10-22'),
(48, 'task1655', '2024-10-29'),
(49, 'jjtask in app php with mysql', '2024-10-15'),
(50, 'Tow task in app5', '2024-10-10'),
(51, 'ten task in php app ', '2024-10-29'),
(52, 'Task 11 friday in php', '2024-10-21');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tasks`
--
ALTER TABLE `tasks`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tasks`
--
ALTER TABLE `tasks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
