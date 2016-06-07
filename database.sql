-- phpMyAdmin SQL Dump
-- version 4.4.10
-- http://www.phpmyadmin.net
--
-- Host: localhost:8889
-- Generation Time: Jun 07, 2016 at 10:29 PM
-- Server version: 5.5.42
-- PHP Version: 7.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `login`
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
) ENGINE=InnoDB AUTO_INCREMENT=240 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `voting`
--

INSERT INTO `voting` (`id`, `title`, `category`, `vote`, `youtube_link`, `local_video`) VALUES
(223, 'Best Fails of the Month May 2016 || FailArmy ', '', 1, 'https://www.youtube.com/embed/aXFVrD38HSA', NULL),
(224, 'Stealing Gas Prank!!', '', 1, 'https://www.youtube.com/embed/DyD428KV55o', NULL),
(225, 'Kebab Nazi RAGE Prank - Ownage Pranks', '', 1, 'https://www.youtube.com/embed/KQUATN1v_mo', NULL),
(227, 'REMI GAILLARD PRANKS FINAL CUP', '', 0, 'https://www.youtube.com/embed/5TaecFvNiqo', NULL),
(228, 'SHAMPOO PRANK PART 1!', '', 19, 'https://www.youtube.com/embed/SqBP0SDtwvg', NULL),
(229, 'Friday The 13th Scare Prank', '', 0, 'https://www.youtube.com/embed/6m4isWlUlRE', NULL),
(230, 'Killer Clown 4 - Massacre! Scare Prank!', '', 0, 'https://www.youtube.com/embed/0RO_HQMvxLo', NULL),
(231, 'Ã–rjan Lax pÃ¥ hamburgerrestaurang', '', 0, 'https://www.youtube.com/embed/F08Coqimnio', NULL),
(232, 'Ã–rjan Lax kÃ¶r taxi i Stockholm', '', 15, 'https://www.youtube.com/embed/EJQ7T3-Aj00', NULL),
(233, 'THE REAL SHAMPOO PRANK!', '', 0, 'https://www.youtube.com/embed/CIOumSW0r-0', NULL),
(234, 'Eurocop - Blev du arg?', '', 50, 'https://www.youtube.com/embed/ytadF9SoSIc', NULL),
(235, 'INSANE BAIT GUN PRANK!!', '', 0, 'https://www.youtube.com/embed/kx2Iln34idQ', NULL),
(236, 'Broken Arm Prank!', '', 0, 'https://www.youtube.com/embed/34rNPrMoxxY', NULL),
(237, 'TvÃ¥ pizzerior lackar pÃ¥ varann', '', 0, 'https://www.youtube.com/embed/K9Df--XloII', NULL),
(238, 'DEAD GIRLFRIEND PRANK!', '', 0, 'https://www.youtube.com/embed/9e11YMoRs9w', NULL),
(239, 'Ã–rjan', '', 0, NULL, 'clips/orjan.mp4');

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
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=240;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
