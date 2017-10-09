-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 01, 2017 at 11:12 AM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `astha_clinic`
--

-- --------------------------------------------------------

--
-- Table structure for table `opd`
--

CREATE TABLE IF NOT EXISTS `opd` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `patient_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `proc` varchar(1000) NOT NULL,
  `proc_pl` varchar(1000) NOT NULL,
  `fees` float NOT NULL DEFAULT '0',
  `expenses` float NOT NULL DEFAULT '0',
  `comments` varchar(10000) NOT NULL,
  `name` varchar(100) NOT NULL,
  `diagnosis` varchar(500) NOT NULL,
  `follow_up` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=24 ;

--
-- Dumping data for table `opd`
--

INSERT INTO `opd` (`id`, `patient_id`, `date`, `proc`, `proc_pl`, `fees`, `expenses`, `comments`, `name`, `diagnosis`, `follow_up`) VALUES
(1, 12, '2017-03-06', 'this', 'that', 122, 122, 'nothinh', '', '', '0000-00-00'),
(2, 9, '2017-03-05', 'some procedure', 'some other procedure', 45.36, 24.32, 'this is the most serious case i have ever seen', '', '', '0000-00-00'),
(3, 12, '2017-03-05', 'something special', 'something very speical', 447.3, 552.2, 'not very serious though', '', '', '0000-00-00'),
(4, 8, '2017-03-05', 'liposuction', 'nothing', 422, 122, 'make it fat free', '', '', '0000-00-00'),
(5, 5, '2017-03-05', 'something weird', 'nothing weird', 455, 12.2, 'this is amazing', '', '', '0000-00-00'),
(6, 4, '2017-03-05', 'cyst removal', 'another cyst removal', 0, 0, 'it will reoccure', '', '', '0000-00-00'),
(7, 17, '2017-03-05', 'nothin', 'nothin', 32, 23, 'NOTHING', '[object HTMLInputElement]', '', '0000-00-00'),
(8, 12, '2017-03-05', 'nohtin', 'nothing', 122.2, 12540, 'jnohign', 'shemrok', '', '0000-00-00'),
(9, 13, '2017-03-05', 'scalp', 'scallllp', 157, 55, 'very high', 'akshay', '', '0000-00-00'),
(10, 6, '2017-03-06', 'this', 'that', 99.01, 0.9, 'this is tough', 'abhi', '', '0000-00-00'),
(11, 1, '2017-03-06', 'this', 'that ', 42.2, 55.2, 'very tricky', 'anand', '', '0000-00-00'),
(12, 18, '2017-03-06', 'new ', 'very new', 155.2, 22.3, 'this is some', 'sachin', '', '0000-00-00'),
(13, 22, '2017-03-06', 'new', 'something new', 45.5, 653, 'very daunting indeed', 'rahul', '', '0000-00-00'),
(14, 6, '2017-03-06', 'sdlk', 'lkfdja', 12.2, 22.2, 'sfjfakl', 'abhi', '', '0000-00-00'),
(15, 17, '2017-03-06', 'this', 'nohting', 0, 0, 'sdddddf', 'saching', '', '0000-00-00'),
(16, 21, '2017-03-06', 'sd', 'dsa', 122.2, 1225, 'dss', 'saurav', '', '0000-00-00'),
(17, 1, '2017-03-06', '', '', 0, 0, '', 'anand', '', '0000-00-00'),
(18, 21, '2017-03-06', 'this is a very serious business', 'this is even more serious business', 43333, 122530, 'I will have to make a comeback again. i cant wait to make a series shine accoriding to my talektnt how', 'saurav', '', '0000-00-00'),
(19, 13, '2017-03-07', 'this', 'that', 122, 133.4, 'flasfjsd', 'akshay', '', '0000-00-00'),
(20, 1, '2017-03-01', 'sdf', '', 0, 0, 'sdf', '', 'fadsf', '2017-03-02'),
(21, 32, '2017-03-16', '', '', 0, 0, 'ksladjf', '', 'somwhting', '2017-03-18'),
(22, 32, '2017-03-19', 'dsfsdfdsfd asdf sdf', '', 0, 0, 'adfd sdfd ds f', '', 'sdfads', '2017-03-31'),
(23, 1, '2017-03-04', 'sa', '', 0, 0, 'ads', '', 'asaf', '2017-03-02');

-- --------------------------------------------------------

--
-- Table structure for table `patient_details`
--

CREATE TABLE IF NOT EXISTS `patient_details` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(300) NOT NULL,
  `contact` varchar(11) NOT NULL,
  `dob` date NOT NULL,
  `sex` varchar(6) NOT NULL,
  `referal` varchar(300) NOT NULL,
  `place` varchar(50) NOT NULL,
  `complaint` text NOT NULL,
  `past` text NOT NULL,
  `drug` text NOT NULL,
  `extra` text NOT NULL,
  `diagnosis` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=33 ;

--
-- Dumping data for table `patient_details`
--

INSERT INTO `patient_details` (`id`, `name`, `contact`, `dob`, `sex`, `referal`, `place`, `complaint`, `past`, `drug`, `extra`, `diagnosis`) VALUES
(1, 'anand', '7350182285', '2017-02-01', 'male', 'me', 'latur', '', '', '', '', ''),
(2, 'panand', '7350182285', '2017-02-01', 'male', 'me', 'latur', '', '', '', '', ''),
(3, 'kiran', '7350182285', '2017-02-01', 'male', 'me', 'latur', '', '', '', '', ''),
(4, 'hemant', '7350182285', '2017-02-01', 'male', 'me', 'latur', '', '', '', '', ''),
(5, 'rushi', '7350182285', '2017-02-01', 'male', 'me', 'latur', '', '', '', '', ''),
(6, 'abhi', '7350182285', '2017-02-01', 'male', 'me', 'latur', '', '', '', '', ''),
(7, 'mayur', '7350182285', '2017-02-01', 'male', 'me', 'latur', '', '', '', '', ''),
(8, 'ravi', '7350182285', '2017-02-01', 'male', 'me', 'latur', '', '', '', '', ''),
(9, 'anand', '7350182285', '2017-03-15', 'male', 'notne', 'latur', '', '', '', '', ''),
(10, 'yogesh', '7350182285', '2017-03-15', 'male', 'me', 'latur', '', '', '', '', ''),
(11, 'yogesh123', '7350182285', '2017-03-15', 'male', 'me', 'latur', '', '', '', '', ''),
(12, 'shemrok', '7350182285', '2017-03-07', 'male', 'somwtihn', 'latur', '', '', '', '', ''),
(13, 'akshay', '5698745125', '2017-03-02', 'male', 'anand', 'pune', '', '', '', '', ''),
(14, 'akshay', '5698745125', '2017-03-02', 'male', 'anand', 'pune', '', '', '', '', ''),
(15, 'akshay', 'sdf', '2017-03-07', 'male', 'fd', 'df', '', '', '', '', ''),
(16, 'mayur', '78457845', '2017-03-08', 'male', 'me', 'latur', '', '', '', '', ''),
(17, 'saching', 'ef', '2017-03-14', 'male', '', 'f', '', '', '', '', ''),
(18, 'sachin', 'na', '2017-03-08', 'male', 'na', 'nan', '', '', '', '', ''),
(19, 'sachin', 'na', '2017-03-08', 'male', 'na', 'nan', '', '', '', '', ''),
(20, 'new', '7834092238', '2017-03-08', 'male', 'me', 'jaipur', '', '', '', '', ''),
(21, 'saurav', '7867569987', '2017-03-14', 'male', 'nothign', 'lathi', '', '', '', '', ''),
(22, 'rahul', '7676767676', '2017-03-27', 'male', 'mw', 'pune', '', '', '', '', ''),
(23, 'mukund', '4578457845', '2017-03-08', 'male', 'me', 'pune', '', '', '', '', ''),
(24, '', '', '0000-00-00', 'male', '', '', '', '', '', '', ''),
(25, 'karun nair', '7352124458', '2017-03-13', 'male', 'kolhi', 'kolhapur', '', '', '', '', ''),
(26, 'hazelwood', '7868732273', '2017-03-11', 'male', 'nothi', 'nohtin', '', '', '', '', ''),
(27, 'david warner', '7896887676', '2017-03-11', 'male', 'noonw', 'nowehre', '', '', '', '', ''),
(28, 'abdul raxxak', '7896887676', '2017-03-11', 'male', 'noonw', 'nowehre', '', '', '', '', ''),
(29, 'sri ram khade', '7895478854', '1990-02-14', 'male', 'onoe', 'pune', '', '', '', '', ''),
(30, 'Nidhi Rai', 'this', '1990-02-14', 'female', 'there', 'that', '', '', '', '', ''),
(31, 'anand', '1232123212', '2017-03-03', 'male', 'sdfds', 'asdfsd', 'sdfds', 'sdfds', 'dfds', 'sdfds', ''),
(32, 'some one', '4587989083', '1990-03-04', 'male', 'mt', 'latur', 'nothing its a very serious issue\nneed to make a good comeback', 'this is sparta we need to make a comeback', 'i am the king', 'thsi sis \nsdfja\nasdfsa\nasdgsdgadsg\nasdgsad\ngasdg\nadsg\nsadg\nasg\nsag', '');

-- --------------------------------------------------------

--
-- Table structure for table `prescription`
--

CREATE TABLE IF NOT EXISTS `prescription` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `opd_id` int(11) NOT NULL,
  `drug` varchar(100) NOT NULL,
  `quantity` varchar(100) NOT NULL,
  `timing` varchar(10) NOT NULL,
  `instruction` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `prescription`
--

INSERT INTO `prescription` (`id`, `opd_id`, `drug`, `quantity`, `timing`, `instruction`) VALUES
(1, 20, 'fd', '12', '1-0-1', 'wrewfref'),
(2, 21, '', '', '0-0-0', ''),
(3, 22, 'werew', '34', '1-1-0', 'fdsdfdsfdsfd'),
(4, 23, 'sdsa', '1', '0-1-0', 'sdf'),
(5, 23, 'sdgfssgfadas', '2', '1-0-0', 'sfsdd');
