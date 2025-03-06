-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 21, 2024 at 02:50 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gastenboek`
--

-- --------------------------------------------------------

--
-- Table structure for table `berichten`
--

CREATE TABLE `berichten` (
  `id` int(9) NOT NULL,
  `gebruikers-id` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `berichttekst` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `aanmaakdatum` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `berichten`
--

INSERT INTO `berichten` (`id`, `gebruikers-id`, `berichttekst`, `aanmaakdatum`) VALUES
(4, 'joaquim', 'yo', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `gebruikers`
--

CREATE TABLE `gebruikers` (
  `id` int(100) NOT NULL,
  `gebruikersnaam` int(100) NOT NULL,
  `e-mailadres` int(100) NOT NULL,
  `wachtwoord` int(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `kolom`
--

CREATE TABLE `kolom` (
  `id` int(3) NOT NULL,
  `vraag` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `optie`
--

CREATE TABLE `optie` (
  `id` int(3) NOT NULL,
  `poll` int(3) NOT NULL,
  `optie` varchar(255) NOT NULL,
  `stemmen` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `berichten`
--
ALTER TABLE `berichten`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gebruikers`
--
ALTER TABLE `gebruikers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kolom`
--
ALTER TABLE `kolom`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `optie`
--
ALTER TABLE `optie`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `berichten`
--
ALTER TABLE `berichten`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `gebruikers`
--
ALTER TABLE `gebruikers`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kolom`
--
ALTER TABLE `kolom`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `optie`
--
ALTER TABLE `optie`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
