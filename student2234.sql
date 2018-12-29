-- phpMyAdmin SQL Dump
-- version 4.2.5
-- http://www.phpmyadmin.net
--
-- Host: webpagesdb.it.auth.gr:3306
-- Generation Time: Sep 29, 2015 at 11:42 PM
-- Server version: 5.5.44-0ubuntu0.14.04.1
-- PHP Version: 5.5.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `student2234`
--

-- --------------------------------------------------------

--
-- Table structure for table `announcements`
--

CREATE TABLE IF NOT EXISTS `announcements` (
`announcement_id` int(11) NOT NULL,
  `date` date DEFAULT NULL,
  `subject` varchar(80) DEFAULT NULL,
  `text` varchar(255) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

-- --------------------------------------------------------

--
-- Table structure for table `documents`
--

CREATE TABLE IF NOT EXISTS `documents` (
`document_id` int(11) NOT NULL,
  `title` varchar(60) DEFAULT NULL,
  `description` varchar(45) DEFAULT NULL,
  `fileplace` varchar(512) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=14 ;

-- --------------------------------------------------------

--
-- Table structure for table `dynamicwebsiteusers`
--

CREATE TABLE IF NOT EXISTS `dynamicwebsiteusers` (
  `name` varchar(80) DEFAULT NULL,
  `lastname` varchar(80) DEFAULT NULL,
  `loginname` varchar(45) NOT NULL,
  `password` varchar(45) DEFAULT NULL,
  `role` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `dynamicwebsiteusers`
--

INSERT INTO `dynamicwebsiteusers` (`name`, `lastname`, `loginname`, `password`, `role`) VALUES
('tutor1', 'lastnametutor1', 't', 't', 'tutor'),
('t2', 't2last', 't2@uni.com', 't2pass', 'tutor'),
('user1', 'lastnameuser1', 'u', 'u', 'student'),
('u2', 'u2last', 'u2@uni.com', 'u2pass', 'student');

-- --------------------------------------------------------

--
-- Table structure for table `exercises`
--

CREATE TABLE IF NOT EXISTS `exercises` (
`exercise_id` int(11) NOT NULL,
  `target` varchar(45) DEFAULT NULL,
  `fileplace` varchar(512) DEFAULT NULL,
  `turnins` varchar(45) DEFAULT NULL,
  `turnin_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `announcements`
--
ALTER TABLE `announcements`
 ADD PRIMARY KEY (`announcement_id`);

--
-- Indexes for table `documents`
--
ALTER TABLE `documents`
 ADD PRIMARY KEY (`document_id`);

--
-- Indexes for table `dynamicwebsiteusers`
--
ALTER TABLE `dynamicwebsiteusers`
 ADD PRIMARY KEY (`loginname`);

--
-- Indexes for table `exercises`
--
ALTER TABLE `exercises`
 ADD PRIMARY KEY (`exercise_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `announcements`
--
ALTER TABLE `announcements`
MODIFY `announcement_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `documents`
--
ALTER TABLE `documents`
MODIFY `document_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `exercises`
--
ALTER TABLE `exercises`
MODIFY `exercise_id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
