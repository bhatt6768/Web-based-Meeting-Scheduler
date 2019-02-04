-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 04, 2019 at 02:17 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 7.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `scheduler`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(10) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin@123');

-- --------------------------------------------------------

--
-- Table structure for table `attendee`
--

CREATE TABLE `attendee` (
  `user` varchar(40) NOT NULL,
  `mno` int(10) NOT NULL,
  `membername` char(40) NOT NULL,
  `active` char(10) NOT NULL DEFAULT 'pending'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `attendee`
--

INSERT INTO `attendee` (`user`, `mno`, `membername`, `active`) VALUES
('14bit008@gmail.com', 7, '14bit008@nirmauni.ac.in', 'yes'),
('14bit008@gmail.com', 9, '14bit008@nirmauni.ac.in', 'yes'),
('15bit046@nirmauni.ac.in', 12, '14bit008@nirmauni.ac.in', 'no'),
('15bit046@nirmauni.ac.in', 23, '14bit008@nirmauni.ac.in', 'no'),
('15bit046@nirmauni.ac.in', 25, '14bit008@nirmauni.ac.in', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `uemail` varchar(35) COLLATE utf8_unicode_ci NOT NULL,
  `id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1' COMMENT '1=Active, 0=Block'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`uemail`, `id`, `title`, `date`, `created`, `modified`, `status`) VALUES
('14bit008@gmail.com', 17, 'Antiragging', '2017-10-27', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1),
('aditya.bhatt@gmail.com', 18, 'Annual Day', '2017-10-17', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1),
('14bit008@gmail.com', 19, 'sports day', '2017-10-04', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1),
('aditya.bhatt@gmail.com', 21, 'Sports day', '2017-10-20', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1),
('15bit046@nirmauni.ac.in', 22, 'praveg', '2017-10-26', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1),
('14bit008@nirmauni.ac.in', 23, 'praveg', '2017-10-02', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1),
('15bit046@nirmauni.ac.in', 24, 'Expert lecture', '0000-00-00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1),
('15bit046@nirmauni.ac.in', 25, 'epert', '0000-00-00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1),
('15bit046@nirmauni.ac.in', 26, 'epert', '0000-00-00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1),
('15bit046@nirmauni.ac.in', 27, 'epert', '2017-11-30', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1),
('15bit046@nirmauni.ac.in', 28, 'Industrial visit', '2017-12-07', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1),
('15bit046@nirmauni.ac.in', 29, 'antiragging', '2017-12-01', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `meeting`
--

CREATE TABLE `meeting` (
  `uemail` varchar(30) NOT NULL,
  `mid` int(9) NOT NULL,
  `title` varchar(20) NOT NULL,
  `detail` char(50) NOT NULL,
  `department` char(20) NOT NULL,
  `orgname` varchar(30) NOT NULL,
  `orgemail` varchar(30) NOT NULL,
  `duration` varchar(20) NOT NULL,
  `location` varchar(20) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `meeting`
--

INSERT INTO `meeting` (`uemail`, `mid`, `title`, `detail`, `department`, `orgname`, `orgemail`, `duration`, `location`, `date`, `time`) VALUES
('14bit008@gmail.com', 7, 'Antiragging', 'antiragging', 'All', 'director', 'director@gmail.com', '45 minutes', 'A101', '2017-10-27', '17:45:00'),
('aditya.bhatt@gmail.com', 8, 'Annual Day', 'participation', 'All', 'director', 'director@gmail.com', '1 hour', 'B201', '2017-10-17', '21:45:00'),
('14bit008@gmail.com', 9, 'sports day', 'announcement', 'Mechanical', 'hod mechanical', 'hodME@gmail.com', '2 hour', 'C audi', '2017-10-04', '09:00:00'),
('aditya.bhatt@gmail.com', 11, 'Sports day', 'participation', 'All', 'sharnil pandya', 'sharnil.pandya@gmail.com', '1 hour', 'B 103', '2017-10-20', '13:15:00'),
('15bit046@nirmauni.ac.in', 12, 'praveg', 'defense', 'All', 'abhay rathod', '15bit046@nirmauni.ac.in', '45 minutes', 'A audi', '2017-10-26', '13:45:00'),
('14bit008@nirmauni.ac.in', 13, 'praveg', 'defense', 'All', 'malaram kumhar', 'malarm.kumhar@gmail.com', '45 minutes', 'A audi', '2017-10-02', '13:45:00'),
('15bit046@nirmauni.ac.in', 23, 'expert lecture', 'alumni', 'IT', 'abhay', 'abhay@gmail.com', '45 minutes', 'b201', '2017-11-30', '21:12:00'),
('15bit046@nirmauni.ac.in', 24, 'Industrial visit', 'industry tour details', 'Chemical', 'HOD Chemical', 'hodCH@nirmauni.ac.in', '1 hour', 'NIM audi', '2017-12-07', '13:15:00'),
('15bit046@nirmauni.ac.in', 25, 'antiragging', 'anti', 'IT', 'hodIT', 'hod@itnirma.com', '2 hour', 'NIM audi', '2017-12-01', '21:45:00'),
('14bit008@gmail.com', 27, 'antiragging', 'none', 'All', '14bit008', '14bit008@gmail.com', '45 minutes', 'B201', '2018-03-21', '13:45:00'),
('null', 28, 'antiragging', 'none', 'All', '14bit008', '14bit008@gmail.com', '45 minutes', 'B201', '2018-03-21', '13:45:00');

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `memberid` int(10) NOT NULL,
  `membername` varchar(30) NOT NULL,
  `department` char(30) NOT NULL,
  `designation` char(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`memberid`, `membername`, `department`, `designation`) VALUES
(1, 'director@gmail.com', '', 'director'),
(2, 'HODIT@gmail.com', 'IT', 'HOD'),
(3, 'HODCE@gmail.com', 'CE', 'HOD'),
(4, 'HODEE@gmail.com', 'EE', 'HOD'),
(5, 'faculty_IT@gmail.com', 'IT', 'assistant professor'),
(6, 'faculty_CE@gmail.com', 'CE', 'assistant professor'),
(7, 'faculty_EE@gmail.com', 'EE', 'assistant professor');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `Userid` int(10) NOT NULL,
  `name` char(50) NOT NULL,
  `email` varchar(30) NOT NULL,
  `mobile` varchar(13) NOT NULL,
  `password` varchar(40) NOT NULL,
  `confirmpassword` varchar(30) NOT NULL,
  `activationcode` varchar(100) NOT NULL DEFAULT '1',
  `active` int(2) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`Userid`, `name`, `email`, `mobile`, `password`, `confirmpassword`, `activationcode`, `active`) VALUES
(1, 'Harsh Bhatt', '14bit008@gmail.com', '9687799817', 'bhatt6768', 'bhatt6768', '', 0),
(2, 'aditya bhatt', 'aditya.bhatt@gmail.com', '9099899404', 'aditya123', 'aditya123', '3636638817772e42b59d74cff571fbb3', 1),
(8, 'rushab', 'rushab.shah@gmail.com', '9595123423', 'rushab123', 'rushab123', '1', 0),
(15, 'Payal prajapati', 'payal.prajapati@gmail.com', '9879781268', 'payal123', 'payal123', '1', 0),
(35, 'abha', '14bit008@nirmauni.ac.in', '9687799817', '11111111', '11111111', 'a87ff679a2f3e71d9181a67b7542122c', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `attendee`
--
ALTER TABLE `attendee`
  ADD PRIMARY KEY (`mno`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `meeting`
--
ALTER TABLE `meeting`
  ADD PRIMARY KEY (`mid`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`memberid`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`Userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
--
-- AUTO_INCREMENT for table `meeting`
--
ALTER TABLE `meeting`
  MODIFY `mid` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `memberid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `Userid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
