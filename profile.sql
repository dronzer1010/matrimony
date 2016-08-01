-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 26, 2016 at 12:46 PM
-- Server version: 5.5.24-log
-- PHP Version: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `profile`
--

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE IF NOT EXISTS `profile` (
  `pid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `gender` varchar(10) NOT NULL,
  `email` varchar(35) NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `postedby` varchar(20) NOT NULL,
  `edob` date NOT NULL,
  `religion` varchar(20) NOT NULL,
  `caste` varchar(20) NOT NULL,
  `mothertongue` varchar(30) NOT NULL,
  `residing` varchar(25) NOT NULL,
  `mobileno` int(10) NOT NULL,
  `phoneno` int(11) NOT NULL,
  `maritalstatus` varchar(20) NOT NULL,
  `complexion` varchar(10) NOT NULL,
  `phisicallychallenged` varchar(100) NOT NULL,
  `height` varchar(100) NOT NULL,
  `borncitizenship` varchar(50) NOT NULL,
  `educationcategory` varchar(25) NOT NULL,
  `specialization` varchar(25) NOT NULL,
  `employedin` varchar(30) NOT NULL,
  `professiongroup` varchar(30) NOT NULL,
  `profession` varchar(25) NOT NULL,
  `companyname` varchar(50) NOT NULL,
  `monthlysalary` int(10) NOT NULL,
  `state` varchar(30) NOT NULL,
  `district` varchar(35) NOT NULL,
  `city` varchar(35) NOT NULL,
  `fathername` varchar(35) NOT NULL,
  `fathereducation` varchar(40) NOT NULL,
  `fatherprofession` varchar(40) NOT NULL,
  `mothername` varchar(30) NOT NULL,
  `mothereducation` varchar(40) NOT NULL,
  `motherprofession` varchar(30) NOT NULL,
  `fathernative` varchar(30) NOT NULL,
  `mothernative` varchar(30) NOT NULL,
  `brothers` int(2) NOT NULL,
  `sisters` int(2) NOT NULL,
  PRIMARY KEY (`pid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3266 ;

--
-- Dumping data for table `profile`
--

INSERT INTO `profile` (`pid`, `gender`, `email`, `firstname`, `lastname`, `postedby`, `edob`, `religion`, `caste`, `mothertongue`, `residing`, `mobileno`, `phoneno`, `maritalstatus`, `complexion`, `phisicallychallenged`, `height`, `borncitizenship`, `educationcategory`, `specialization`, `employedin`, `professiongroup`, `profession`, `companyname`, `monthlysalary`, `state`, `district`, `city`, `fathername`, `fathereducation`, `fatherprofession`, `mothername`, `mothereducation`, `motherprofession`, `fathernative`, `mothernative`, `brothers`, `sisters`) VALUES
(1, 'male', 'sathish1993@gmail.com', 'sathish', 'kumar', 'self', '2016-07-07', 'hindu', 'devar', 'tamil', 'india', 2147483647, 0, 'single', 'fair', 'no', '5ft 3in', 'india', 'master of science', 'computer science', 'Central Government', 'IT and technology', 'software engineer', 'infokites', 10000, 'tamilnadu', 'chennai', 'pallavaram', 'malairaj', '10th', 'driver', 'selvi', '12th', 'house wife', 'karaikudi', 'vetriyur', 0, 0),
(2, 'female', 'kumar@gmail.com', 'kumar', 'raj', 'father', '2016-07-06', 'hindu', 'konar', 'kannada', 'india', 2147483647, 0, 'Divorced', 'whitish', 'no', '4ft 3in', 'india', 'master of arts', 'history', 'private sector', 'teching', 'trainer', 'kekran macran', 20000, 'kartanataka', 'kadappa', 'nellur', 'raj', 'master of science', 'lecture', 'priya', '10th', 'house wife', 'sellur', 'nellur', 2, 0),
(25, 'male', 'skumarreddy@gmail.com', 'santhosh', 'reddy', 'yieldersister', '1990-10-15', 'hindu', 'oc', 'telugu', 'india', 2147483647, 2147483647, 'single', 'fair', 'no', '5ft 10ich', 'india', 'b.e', 'it', 'private sector', 'It and technologies', 'software engineer', 'info tech', 30000, 'andra pradesh', 'kurnool', 'kurnool', 'sanjeeva', '12th', 'revenue', 'raama', '10th', 'house wife', 'chagalamarri', 'produtoor', 1, 1),
(210, 'female', 'mahi.reddy@gmail.com', 'mahi', 'reddy', 'self', '1990-08-28', 'hindu', 'mbc', 'telugu', 'india', 95698565, 40256325, 'single', 'fair', 'no', '5ft 5inch', 'in', '', '', '', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', 0, 0),
(255, 'female', 'reddy.rama@gmail.com', 'reddy', 'rama', 'self', '1996-10-14', 'muslim', 'bc', 'kannada', 'india', 789123456, 214567893, 'single', 'fair', 'no', '5ft 10ich', 'india', 'mform', 'medical', 'hospital', 'hospetality', 'doctor', 'apollo', 100000, 'karnataka', 'mangloore', 'bangloore', 'reddy', 'b.com', 'it', 'raamalak', 'bsc', 'house wife', 'kadapa', 'kurnool', 1, 1),
(1235, 'male', 'thom.pradeep@gmail.com', 'thomas', 'pradeep', 'self', '1991-07-02', 'christian', 'sc', 'tamil', 'india', 2147483647, 447896254, 'single', 'fair', 'no', '5ft 5inch', 'india', 'm.com', 'science', 'state government', 'media', 'web developer', 'info tech', 20000, 'tamilnadu', 'chennai', 'chennai', 'paro', 'msc', 'milatary', 'star', '10th class', 'housewife', 'dindigul', 'dindigul', 0, 1),
(2156, 'female', 'vijay.murali@gmail.com', 'vijaya', '', 'reddy', '1988-10-26', 'muslim', 'bc', 'odisha', 'india', 98563214, 44125632, 'divorced', 'fair', 'no', '5ft 5inch', 'india', 'msc', 'computer science', 'none', 'none', 'none', 'none', 0, 'andra pradesh', 'kadapa', 'thirupathi', 'siva', 'btech', 'former', 'sanja', '10th', 'house wife', 'kadapa', 'kurnool', 0, 1),
(3265, 'female', 'sow.reddy@gmail.com', 'sow', 'bhagya', 'brother', '1992-11-15', 'hindu', 'oc', 'telugu', 'india', 789654123, 123654789, 'single', 'very fair', 'no', '5ft 10ich', 'india', 'b.com', 'computer', 'it industry', 'It and technologies', 'hard ware', 'cts', 12000, 'karnataka', 'thambaram', 'bangloore', 'sanj', 'b.com', 'governament', 'kanada', 'bsc', 'housewife', 'kartaka', 'bartaka', 1, 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
