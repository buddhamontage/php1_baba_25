-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 23, 2021 at 01:21 PM
-- Server version: 5.6.34-log
-- PHP Version: 7.1.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `php1_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `php1_db_table`
--

CREATE TABLE `php1_db_table` (
  `id` int(12) NOT NULL,
  `title` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL,
  `url` varchar(300) COLLATE utf8_unicode_ci DEFAULT NULL,
  `contents` text COLLATE utf8_unicode_ci,
  `indate` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `php1_db_table`
--

INSERT INTO `php1_db_table` (`id`, `title`, `url`, `contents`, `indate`) VALUES
(9, 'GS講義動画', 'https://code.gsacademy.tokyo/', '山崎先生講義', '2021-09-23 22:16:38'),
(10, 'youtube', 'https://www.youtube.com/watch?v=pre80QiD8_4&list=RDpre80QiD8_4&start_radio=1', '気がつけばステージの上　5lack', '2021-09-23 22:17:41'),
(11, 'php', 'https://www.php.net/', 'php公式サイト', '2021-09-23 22:18:15');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `php1_db_table`
--
ALTER TABLE `php1_db_table`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `php1_db_table`
--
ALTER TABLE `php1_db_table`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
