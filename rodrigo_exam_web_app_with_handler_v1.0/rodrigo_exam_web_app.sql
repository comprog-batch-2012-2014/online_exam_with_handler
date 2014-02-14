-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 14, 2014 at 09:39 AM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `rodrigo_exam_web_app`
--

-- --------------------------------------------------------

--
-- Table structure for table `questionnaire`
--

CREATE TABLE IF NOT EXISTS `questionnaire` (
  `question_id` int(11) NOT NULL AUTO_INCREMENT,
  `question_num` int(11) NOT NULL,
  `question` text NOT NULL,
  `choiceA` text NOT NULL,
  `choiceB` text NOT NULL,
  `choiceC` text NOT NULL,
  `choiceD` text NOT NULL,
  `correct_answer` char(1) NOT NULL,
  PRIMARY KEY (`question_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `questionnaire`
--

INSERT INTO `questionnaire` (`question_id`, `question_num`, `question`, `choiceA`, `choiceB`, `choiceC`, `choiceD`, `correct_answer`) VALUES
(1, 1, 'a', 'a', 'a', 'a', 'a', 'a'),
(3, 2, 'bbbbbbbbb', 'b', 'b', 'b', 'b', 'b');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `fname` varchar(15) NOT NULL,
  `lname` varchar(15) NOT NULL,
  `gender` enum('male','female') NOT NULL,
  `email` varchar(60) NOT NULL,
  `password` varchar(60) NOT NULL,
  `user_position` enum('examinee','admin') NOT NULL,
  PRIMARY KEY (`user_id`),
  UNIQUE KEY `password` (`password`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `fname`, `lname`, `gender`, `email`, `password`, `user_position`) VALUES
(1, 'Rodrigo III', 'Galura', 'male', 'Rodrigo_Galura3rd@yahoo.com', '533149b66ee57b980c75e4a8b82353d2b606741b', 'admin'),
(2, 'aaaa', 'a', 'male', 'a@yahoo.com', 'b480c074d6b75947c02681f31c90c668c46bf6b8', 'examinee'),
(10, 'lerelyn', 'moraleda', 'female', 'lerelyn@yahoo.com', '7c222fb2927d828af22f592134e8932480637c0d', 'examinee'),
(11, 'd', 'd', 'male', 'd@d.com', 'd36da3e6884f6d1e9e7983ff13e99cf5c8f5745a', 'examinee');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
