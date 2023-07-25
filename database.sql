-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 25, 2023 at 09:29 AM
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
-- Database: `urlshortner`
--

-- --------------------------------------------------------

--
-- Table structure for table `url`
--

CREATE TABLE `url` (
  `id` int(11) NOT NULL,
  `shorten_url` varchar(200) NOT NULL,
  `full_url` varchar(1000) NOT NULL,
  `clicks` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `url`
--

INSERT INTO `url` (`id`, `shorten_url`, `full_url`, `clicks`) VALUES
(18, '20ba3', 'https://www.youtube.com/watch?v=V8C4BIKCVUA&list=PLpwngcHZlPaf1aw42OGyitm4jh2Dlmi9c&index=8&t=1s&ab_channel=CodingNepal', 5),
(23, 'math', 'https://www.physicsclassroom.com/class/circles/Lesson-4/Mathematics-of-Satellite-Motion#:~:text=As%20seen%20in%20the%20equation,2.', 13),
(25, '672f1', 'https://7learn.com/app', 3),
(26, 'test', 'https://toplearn.com/courses/web/%D8%AF%D9%88%D8%B1%D9%87-%D8%AC%D8%A7%D9%85%D9%80%D9%80%D8%B9-%D8%A2%D9%85%D9%80%D9%80%D9%88%D8%B2%D8%B4-PHP-', 4),
(27, '79eef', 'https://www.youtube.com/watch?v=V8C4BIKCVUA&list=PLpwngcHZlPaf1aw42OGyitm4jh2Dlmi9c&index=8&t=1s&ab_channel=CodingNepal', 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `url`
--
ALTER TABLE `url`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `url`
--
ALTER TABLE `url`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
