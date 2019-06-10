-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 18, 2019 at 02:59 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `quiz`
--

-- --------------------------------------------------------

--
-- Table structure for table `answers`
--

CREATE TABLE `answers` (
  `aid` int(11) NOT NULL,
  `answer` varchar(255) COLLATE utf8_bin NOT NULL,
  `ans_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `answers`
--

INSERT INTO `answers` (`aid`, `answer`, `ans_id`) VALUES
(1, 'PHP Hypertex Processor', 1),
(2, 'PHP Hyper Markup Processor', 1),
(3, 'PHP Hyper Markup Preprocessor', 1),
(4, 'PHP Hypertext Preprocessor', 1),
(5, 'Server-side', 2),
(6, 'Client-side', 2),
(7, 'Browser-side', 2),
(8, 'In-side', 2),
(9, 'Rasmus Lerdorf', 3),
(10, 'Willam Makepiece', 3),
(11, 'Drek Kolkevi', 3),
(12, 'List Barely', 3),
(13, 'PHP can be used to develop web applications.', 4),
(14, 'PHP makes a website dynamic', 4),
(15, 'PHP applications can not be compile', 4),
(16, 'PHP can not be embedded into html.', 4),
(17, '$get', 5),
(18, '$ask', 5),
(19, '$request', 5),
(20, '$post', 5);

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `qid` int(250) NOT NULL,
  `questions` varchar(250) COLLATE utf8_bin NOT NULL,
  `ans_id` int(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`qid`, `questions`, `ans_id`) VALUES
(1, '\r\nPHP Stands for?', 4),
(2, 'PHP is an example of ___________ scripting language.', 5),
(3, 'Who is known as the father of PHP?', 9),
(4, 'Which of the following is not true?', 16),
(5, 'Which of the following variables is not a predefined variable?', 18);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_bin NOT NULL,
  `password` varchar(255) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(0, 'vs10051998', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `userstat`
--

CREATE TABLE `userstat` (
  `email` varchar(255) COLLATE utf8_bin NOT NULL,
  `totalques` int(11) NOT NULL,
  `answercorrect` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `userstat`
--

INSERT INTO `userstat` (`email`, `totalques`, `answercorrect`) VALUES
('vs10051998', 5, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `answers`
--
ALTER TABLE `answers`
  ADD PRIMARY KEY (`aid`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`qid`);

--
-- Indexes for table `userstat`
--
ALTER TABLE `userstat`
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `answers`
--
ALTER TABLE `answers`
  MODIFY `aid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `qid` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
