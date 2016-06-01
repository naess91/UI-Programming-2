-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Värd: 127.0.0.1
-- Tid vid skapande: 01 jun 2016 kl 08:58
-- Serverversion: 5.7.9
-- PHP-version: 7.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Databas: `login`
--

-- --------------------------------------------------------

--
-- Tabellstruktur `member`
--

DROP TABLE IF EXISTS `member`;
CREATE TABLE IF NOT EXISTS `member` (
  `mem_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `fname` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `address` varchar(100) NOT NULL,
  `contact` varchar(30) NOT NULL,
  `picture` varchar(100) NOT NULL,
  `gender` varchar(10) NOT NULL,
  PRIMARY KEY (`mem_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumpning av Data i tabell `member`
--

INSERT INTO `member` (`mem_id`, `username`, `password`, `fname`, `lname`, `address`, `contact`, `picture`, `gender`) VALUES
(1, 'berra', 'berra', 'berra', 'berra', '', '', '', '');

-- --------------------------------------------------------

--
-- Tabellstruktur `voting`
--

DROP TABLE IF EXISTS `voting`;
CREATE TABLE IF NOT EXISTS `voting` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `title` varchar(60) NOT NULL,
  `category` varchar(45) NOT NULL,
  `vote` int(8) NOT NULL DEFAULT '0',
  `youtube_link` varchar(200) DEFAULT NULL,
  `local_video` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=239 DEFAULT CHARSET=latin1;

--
-- Dumpning av Data i tabell `voting`
--

INSERT INTO `voting` (`id`, `title`, `category`, `vote`, `youtube_link`, `local_video`) VALUES
(223, 'Best Fails of the Month May 2016 || FailArmy ', '', 0, 'https://www.youtube.com/embed/aXFVrD38HSA', ''),
(224, 'Stealing Gas Prank!!', '', 0, 'https://www.youtube.com/embed/DyD428KV55o', ''),
(225, 'Kebab Nazi RAGE Prank - Ownage Pranks', '', 0, 'https://www.youtube.com/embed/KQUATN1v_mo', ''),
(227, 'REMI GAILLARD PRANKS FINAL CUP', '', 0, 'https://www.youtube.com/embed/5TaecFvNiqo', ''),
(228, 'SHAMPOO PRANK PART 1!', '', 0, 'https://www.youtube.com/embed/SqBP0SDtwvg', ''),
(229, 'Friday The 13th Scare Prank', '', 0, 'https://www.youtube.com/embed/6m4isWlUlRE', ''),
(230, 'Killer Clown 4 - Massacre! Scare Prank!', '', 0, 'https://www.youtube.com/embed/0RO_HQMvxLo', ''),
(231, 'Ã–rjan Lax pÃ¥ hamburgerrestaurang', '', 0, 'https://www.youtube.com/embed/F08Coqimnio', ''),
(232, 'Ã–rjan Lax kÃ¶r taxi i Stockholm', '', 0, 'https://www.youtube.com/embed/EJQ7T3-Aj00', ''),
(233, 'THE REAL SHAMPOO PRANK!', '', 0, 'https://www.youtube.com/embed/CIOumSW0r-0', ''),
(234, 'Eurocop - Blev du arg?', '', 0, 'https://www.youtube.com/embed/ytadF9SoSIc', ''),
(235, 'INSANE BAIT GUN PRANK!!', '', 0, 'https://www.youtube.com/embed/kx2Iln34idQ', ''),
(236, 'Broken Arm Prank!', '', 0, 'https://www.youtube.com/embed/34rNPrMoxxY', ''),
(237, 'TvÃ¥ pizzerior lackar pÃ¥ varann', '', 0, 'https://www.youtube.com/embed/K9Df--XloII', ''),
(238, 'DEAD GIRLFRIEND PRANK!', '', 0, 'https://www.youtube.com/embed/9e11YMoRs9w', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
