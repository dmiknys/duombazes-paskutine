-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 29, 2018 at 12:48 PM
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
-- Database: `studijos`
--

-- --------------------------------------------------------

--
-- Table structure for table `administratorius`
--

CREATE TABLE `administratorius` (
  `id` int(11) NOT NULL,
  `username` varchar(140) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `administratorius`
--

INSERT INTO `administratorius` (`id`, `username`) VALUES
(1, 'Jake'),
(2, 'Drake'),
(3, 'Bruh'),
(4, 'Swain');

-- --------------------------------------------------------

--
-- Table structure for table `burelis`
--

CREATE TABLE `burelis` (
  `id` int(11) NOT NULL,
  `pavadinimas` varchar(140) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `lankomumas`
--

CREATE TABLE `lankomumas` (
  `id` int(11) NOT NULL,
  `mokinys_id` int(11) DEFAULT NULL,
  `uzsiemimas_id` int(11) DEFAULT NULL,
  `lankomumas` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `mokinys`
--

CREATE TABLE `mokinys` (
  `id` int(11) NOT NULL,
  `burelis_id` int(11) DEFAULT NULL,
  `vardas` varchar(140) COLLATE utf8_unicode_ci NOT NULL,
  `pavarde` varchar(140) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `uzsiemimas`
--

CREATE TABLE `uzsiemimas` (
  `id` int(11) NOT NULL,
  `burelis_id` int(11) DEFAULT NULL,
  `laikas` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `vadovas`
--

CREATE TABLE `vadovas` (
  `id` int(11) NOT NULL,
  `vardas` varchar(140) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `vadovas`
--

INSERT INTO `vadovas` (`id`, `vardas`) VALUES
(1, 'Jonas');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `administratorius`
--
ALTER TABLE `administratorius`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `burelis`
--
ALTER TABLE `burelis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lankomumas`
--
ALTER TABLE `lankomumas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_51C0CCE7F150E3DC` (`mokinys_id`),
  ADD KEY `IDX_51C0CCE79F66D256` (`uzsiemimas_id`);

--
-- Indexes for table `mokinys`
--
ALTER TABLE `mokinys`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_9C668C8EB0C90643` (`burelis_id`);

--
-- Indexes for table `uzsiemimas`
--
ALTER TABLE `uzsiemimas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_6F9B44FBB0C90643` (`burelis_id`);

--
-- Indexes for table `vadovas`
--
ALTER TABLE `vadovas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `administratorius`
--
ALTER TABLE `administratorius`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `burelis`
--
ALTER TABLE `burelis`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `lankomumas`
--
ALTER TABLE `lankomumas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `mokinys`
--
ALTER TABLE `mokinys`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `uzsiemimas`
--
ALTER TABLE `uzsiemimas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `vadovas`
--
ALTER TABLE `vadovas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `lankomumas`
--
ALTER TABLE `lankomumas`
  ADD CONSTRAINT `FK_51C0CCE79F66D256` FOREIGN KEY (`uzsiemimas_id`) REFERENCES `uzsiemimas` (`id`),
  ADD CONSTRAINT `FK_51C0CCE7F150E3DC` FOREIGN KEY (`mokinys_id`) REFERENCES `mokinys` (`id`);

--
-- Constraints for table `mokinys`
--
ALTER TABLE `mokinys`
  ADD CONSTRAINT `FK_9C668C8EB0C90643` FOREIGN KEY (`burelis_id`) REFERENCES `burelis` (`id`);

--
-- Constraints for table `uzsiemimas`
--
ALTER TABLE `uzsiemimas`
  ADD CONSTRAINT `FK_6F9B44FBB0C90643` FOREIGN KEY (`burelis_id`) REFERENCES `burelis` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
