-- phpMyAdmin SQL Dump
-- version 4.2.10
-- http://www.phpmyadmin.net
--
-- Host: localhost:8889
-- Generation Time: Apr 21, 2016 at 01:44 PM
-- Server version: 5.5.38
-- PHP Version: 5.6.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `Login`
--

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
`mem_id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `fname` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `address` varchar(100) NOT NULL,
  `contact` varchar(30) NOT NULL,
  `picture` varchar(100) NOT NULL,
  `gender` varchar(10) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`mem_id`, `username`, `password`, `fname`, `lname`, `address`, `contact`, `picture`, `gender`) VALUES
(1, 'berra', 'berra', 'berra', 'berra', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `voting`
--

CREATE TABLE `voting` (
`id` int(5) NOT NULL,
  `title` varchar(60) NOT NULL,
  `category` varchar(45) NOT NULL,
  `vote` int(8) NOT NULL DEFAULT '0',
  `youtube_link` varchar(200) DEFAULT NULL,
  `local_video` varchar(200) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=222 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `voting`
--

INSERT INTO `voting` (`id`, `title`, `category`, `vote`, `youtube_link`, `local_video`) VALUES
(202, 'Martin Garrix - Live @ Ultra Music Festival Miami 2016', 'Music', 1, 'https://www.youtube.com/embed/4r1tq1XBN0w', NULL),
(203, 'Dash Berlin - Live at Ultra Music Festival Tokyo, Japan Main', 'Music', 1, 'https://www.youtube.com/embed/5YfWoVnAS_I', NULL),
(206, 'TiÃ«sto - Live @ Ultra Music Festival 2016', 'Music', 1, NULL, 'login/movies/movie.mp4'),
(207, 'YOOYO', 'Music', 0, NULL, 'login/movies/movie.mp4'),
(215, 'Axwell /\\ Ingrosso Tomorrowland 2015 Live Set', 'Music', 0, 'https://www.youtube.com/embed/51VA4LQEuTs', NULL),
(221, 'CT Fletcher', 'Music', 10, 'https://www.youtube.com/embed/o9weXdXpS8g', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `member`
--
ALTER TABLE `member`
 ADD PRIMARY KEY (`mem_id`);

--
-- Indexes for table `voting`
--
ALTER TABLE `voting`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
MODIFY `mem_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `voting`
--
ALTER TABLE `voting`
MODIFY `id` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=222;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
