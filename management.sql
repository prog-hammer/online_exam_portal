-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 10, 2018 at 08:28 PM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `management`
--

-- --------------------------------------------------------

--
-- Table structure for table `answers`
--

CREATE TABLE IF NOT EXISTS `answers` (
  `username` varchar(30) DEFAULT NULL,
  `qid` int(11) DEFAULT NULL,
  `ans` varchar(200) DEFAULT NULL,
  `attempt` varchar(10) DEFAULT NULL,
  `review` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `answers`
--

INSERT INTO `answers` (`username`, `qid`, `ans`, `attempt`, `review`) VALUES
('', 1, 'a', 'a', 'no'),
('', 2, 'b', 'b', 'no'),
('', 3, 'b', 'b', 'no'),
('', 4, 'a', 'b', 'no'),
('', 5, 'a', 'a', 'no'),
('', 6, 'b', 'b', 'no'),
('admin', 1, 'a', 'a', 'no'),
('admin', 2, 'b', 'b', 'no'),
('admin', 3, 'b', 'a', 'no'),
('admin', 5, 'a', 'b', 'no');

-- --------------------------------------------------------

--
-- Table structure for table `records`
--

CREATE TABLE IF NOT EXISTS `records` (
  `id` int(11) DEFAULT NULL,
  `question` varchar(530) DEFAULT NULL,
  `opt1` varchar(10) DEFAULT NULL,
  `opt2` varchar(10) DEFAULT NULL,
  `answer` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `records`
--

INSERT INTO `records` (`id`, `question`, `opt1`, `opt2`, `answer`) VALUES
(1, 'What do you mean by HTML?', 'Hyper text', 'Hyper text', 'a'),
(2, 'When images are used as links they get a blue border', 'Never', 'unless bor', 'b'),
(3, 'A 6 digit Hex color (#FF9966) defines values of Red, Blue and Green in which order ? ', '#GGRRBB', '#RRGGBB', 'b'),
(4, 'When you count to 15 using hexadecimal numbers, the highest number is what ? ', 'F', '15', 'a'),
(5, 'What does vlink mean ?', 'Visited Li', 'Very good ', 'a'),
(6, 'Which format usually works best for photos ?', 'HTML', 'JPG', 'b');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE IF NOT EXISTS `student` (
  `name` varchar(30) DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `stream` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`name`, `age`, `stream`) VALUES
('Lakshya Bansal', 18, 'Science');

-- --------------------------------------------------------

--
-- Table structure for table `uquestions`
--

CREATE TABLE IF NOT EXISTS `uquestions` (
  `username` varchar(30) DEFAULT NULL,
  `qid` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `uquestions`
--

INSERT INTO `uquestions` (`username`, `qid`) VALUES
('', 1),
('', 2),
('', 3),
('', 4),
('', 5),
('', 6),
('', 0),
('', 0),
('', 0),
('', 0),
('', 0),
('', 0),
('admin', 1),
('admin', 2),
('admin', 3),
('admin', 4),
('admin', 5),
('admin', 6),
('admin', 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `username` varchar(30) DEFAULT NULL,
  `password` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `password`) VALUES
('admin', '123');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
