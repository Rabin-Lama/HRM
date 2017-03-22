-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 22, 2017 at 10:43 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `dbms_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `table_admin`
--

CREATE TABLE IF NOT EXISTS `table_admin` (
`id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `table_admin`
--

INSERT INTO `table_admin` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `table_employee`
--

CREATE TABLE IF NOT EXISTS `table_employee` (
`id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `middle_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(10) NOT NULL,
  `marital_status` varchar(50) NOT NULL,
  `current_city` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `department` varchar(50) NOT NULL,
  `job_title` varchar(50) NOT NULL,
  `employment_status` varchar(50) NOT NULL,
  `date_of_joining` date NOT NULL,
  `salary` int(11) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=60 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `table_employee`
--

INSERT INTO `table_employee` (`id`, `first_name`, `middle_name`, `last_name`, `dob`, `gender`, `marital_status`, `current_city`, `phone`, `email`, `department`, `job_title`, `employment_status`, `date_of_joining`, `salary`) VALUES
(48, 'Bryan', '', 'jackson', '2015-03-01', 'male', 'married', 'New york', '42442233', 'bryan@gmail.com', 'technical', 'intern', 'internship', '2015-03-02', 10000),
(45, 'sogeking', '', 'usopp', '1995-10-10', 'male', 'single', 'new world', '9840013332', 'usopp@gmail.com', 'technical', 'intern', 'internship', '2015-03-01', 15000),
(43, 'namrata', '', 'shrestha', '1991-10-04', 'female', 'single', 'kathmandu', '9878787876', 'namrata@yahoo.com', 'technical', 'employee', 'part-time-permanent', '2015-01-04', 15000),
(40, 'Bikesh', '', 'kc', '1993-03-10', 'male', 'single', 'bhaktapur', '9999999999', 'bikesh@gmail.com', 'technical', 'manager', 'internship', '2015-03-01', 10000),
(44, 'Monkey', 'd', 'luffy', '1993-10-10', 'male', 'single', 'east blue', '9818798855', 'luffy@gmail.com', 'technical', 'intern', 'internship', '2015-03-01', 10000),
(37, 'rabin', 'lama', 'dong', '1993-10-10', 'male', 'single', 'kathmandu', '9840012223', 'rrabin.llama@gmail.com', 'technical', 'manager', 'internship', '2015-03-01', 10000),
(42, 'prabhat', 'lama', 'grg', '1994-03-03', 'male', 'single', 'kapan', '9805346778', 'prabhat.lama.grg07@gmail.com', 'technical', 'intern', 'internship', '2015-03-02', 10000),
(57, 'ram', 'bahadur', 'bamjan', '1973-12-01', 'male', 'married', 'kapan', '09846469652', 'rambbb@gmail.com', 'production', 'manager', 'full-time-permanent', '2013-12-01', 20000),
(49, 'Rohit', '', 'dangol', '2014-10-01', 'male', 'single', 'Lazimpat', '9841720724', 'rohit@hotmail.com', 'marketing', 'manager', 'full-time-permanent', '2015-02-02', 12000),
(50, 'Hannah', '', 'justice', '1995-01-20', 'female', 'single', 'Philadelphia', '202032132', 'hanscuit@hotmail.com', 'production', 'manager', 'full-time-permanent', '2015-01-01', 12000),
(56, 'ugyen', '', 'chheda', '2015-12-31', 'female', 'widow', '', '', '', 'marketing', 'none', 'internship', '2015-12-31', 1),
(58, 'sita', '', 'sita', '1968-01-01', 'male', 'widow', 'hell', '', 'jvhbd@nvgmail.com', 'marketing', 'employee', 'full-time-contract', '2013-01-01', 10000),
(53, 'Kurt', 'bahadur', 'cobain', '1991-12-12', 'male', 'married', 'Hell', '4485146', 'teenagespirit@yahoo.com', 'finance', 'employee', 'full-time-contract', '2015-03-02', 10000),
(54, 'Zener', '', 'dangol', '1995-10-10', 'male', 'single', 'lalitpur', '9841773526', 'zener@gmail.com', 'marketing', 'employee', 'part-time-contract', '2015-03-02', 9000),
(55, 'Biswas', '', 'niraula', '1993-02-02', 'male', 'single', 'kathmandu', '9843550501', 'biswas@hotmail.com', 'production', 'employee', 'full-time-contract', '2015-02-03', 10000),
(59, 'Jason', '', 'Durelo', '2014-08-05', 'male', 'married', 'Los Santos', '9898122323', 'jason@gmail.com', 'finance', 'intern', 'full-time-permanent', '2015-12-03', 20000);

-- --------------------------------------------------------

--
-- Table structure for table `table_employee_login`
--

CREATE TABLE IF NOT EXISTS `table_employee_login` (
`id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `table_employee_login`
--

INSERT INTO `table_employee_login` (`id`, `username`, `password`) VALUES
(1, 'rabin', 'rabin123');

-- --------------------------------------------------------

--
-- Table structure for table `table_feedback`
--

CREATE TABLE IF NOT EXISTS `table_feedback` (
`id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `message` mediumtext NOT NULL,
  `date-added` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `table_finance_login`
--

CREATE TABLE IF NOT EXISTS `table_finance_login` (
`id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `table_finance_login`
--

INSERT INTO `table_finance_login` (`id`, `username`, `password`) VALUES
(1, 'rabin', 'rabin123');

-- --------------------------------------------------------

--
-- Table structure for table `table_leave`
--

CREATE TABLE IF NOT EXISTS `table_leave` (
`id` int(11) NOT NULL,
  `subject` varchar(9999) NOT NULL,
  `by` varchar(50) NOT NULL,
  `days` int(11) NOT NULL,
  `status` varchar(50) NOT NULL,
  `department` varchar(50) NOT NULL,
  `date` date NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `table_leave`
--

INSERT INTO `table_leave` (`id`, `subject`, `by`, `days`, `status`, `department`, `date`) VALUES
(16, 'dating', 'Rohit dangol', 1, 'accepted', 'marketing', '2015-03-26'),
(15, 'training', 'Monkey', 10, 'accepted', 'technical', '2015-03-25'),
(8, 'fever', 'prabhat', 2, 'declined', 'technical', '2015-03-08'),
(10, 'war', 'shanks', 15, 'declined', 'technical', '2015-03-22'),
(11, 'wedding', 'Rabin lama dong', 7, 'declined', 'technical', '2015-03-22'),
(12, 'arancar', 'Kurosaki ichigo', 1, 'accepted', 'technical', '2015-03-23'),
(13, 'Mercantile', 'Bikesh', 2, 'accepted', 'technical', '2015-03-23'),
(17, 'striek', 'sita', 2, 'none', 'marketing', '2015-07-24');

-- --------------------------------------------------------

--
-- Table structure for table `table_login`
--

CREATE TABLE IF NOT EXISTS `table_login` (
`id` int(11) NOT NULL,
  `eid` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `department` varchar(50) NOT NULL,
  `job_title` varchar(50) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=114 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `table_login`
--

INSERT INTO `table_login` (`id`, `eid`, `username`, `password`, `department`, `job_title`) VALUES
(113, 59, 'Jason', '2b877b4b825b48a9a0950dd5bd1f264d', 'finance', 'intern'),
(5, 55, 'admin', 'admin', 'admin', 'admin'),
(2, 22, 'rabin', 'rabin', 'finance', 'intern'),
(3, 33, 'bikesh', 'bikesh', 'marketing', 'salesman'),
(4, 44, 'rohit', 'rohit', 'production', 'employee'),
(1, 11, 'prabhat', 'prabhat', 'technical', 'manager');

-- --------------------------------------------------------

--
-- Table structure for table `table_marketing_login`
--

CREATE TABLE IF NOT EXISTS `table_marketing_login` (
`id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `table_marketing_login`
--

INSERT INTO `table_marketing_login` (`id`, `username`, `password`) VALUES
(1, 'rabin', 'rabin123');

-- --------------------------------------------------------

--
-- Table structure for table `table_production_login`
--

CREATE TABLE IF NOT EXISTS `table_production_login` (
`id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `table_production_login`
--

INSERT INTO `table_production_login` (`id`, `username`, `password`) VALUES
(1, 'rabin', 'rabin123');

-- --------------------------------------------------------

--
-- Table structure for table `table_recent_activities`
--

CREATE TABLE IF NOT EXISTS `table_recent_activities` (
`id` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `activities` varchar(9999) NOT NULL,
  `date` date NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=96 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `table_recent_activities`
--

INSERT INTO `table_recent_activities` (`id`, `uid`, `activities`, `date`) VALUES
(8, 13, 'Password changed', '2015-03-08'),
(9, 13, 'Added new employee', '2015-03-08'),
(10, 13, 'Username changed', '2015-03-08'),
(11, 13, 'Added new employee', '2015-03-08'),
(12, 13, 'Employee record deleted', '2015-03-08'),
(13, 13, 'Employee record edited', '2015-03-08'),
(14, 13, 'Added new leave record', '2015-03-08'),
(26, 13, 'Added new leave record', '2015-03-09'),
(25, 13, 'Employee record edited', '2015-03-09'),
(24, 13, 'Employee record edited', '2015-03-09'),
(23, 13, 'Password changed', '2015-03-09'),
(22, 13, 'Username changed', '2015-03-09'),
(21, 13, 'Added new leave record', '2015-03-08'),
(27, 13, 'Added new employee', '2015-03-09'),
(28, 13, 'Employee record deleted', '2015-03-09'),
(29, 13, 'Employee record edited', '2015-03-15'),
(30, 13, 'Added new employee', '2015-03-21'),
(31, 13, 'Added new leave record', '2015-03-22'),
(32, 13, 'Added new leave record', '2015-03-22'),
(33, 13, 'Added new leave record', '2015-03-23'),
(56, 13, 'Leave record deleted', '2015-03-25'),
(55, 13, 'Added new notice', '2015-03-24'),
(36, 13, 'Leave record edited', '2015-03-23'),
(37, 13, 'Leave record edited', '2015-03-23'),
(38, 13, 'Leave record edited', '2015-03-23'),
(39, 13, 'Leave record edited', '2015-03-23'),
(40, 13, 'Leave record edited', '2015-03-23'),
(41, 13, 'Leave record edited', '2015-03-23'),
(42, 13, 'Leave record edited', '2015-03-23'),
(43, 13, 'Added new leave record', '2015-03-23'),
(44, 13, 'Employee record edited', '2015-03-23'),
(45, 13, 'Leave record edited', '2015-03-23'),
(46, 13, 'Leave record edited', '2015-03-23'),
(47, 13, 'Leave record edited', '2015-03-23'),
(48, 13, 'Leave record edited', '2015-03-23'),
(49, 13, 'Leave record edited', '2015-03-23'),
(50, 13, 'Username changed', '2015-03-23'),
(51, 13, 'Leave record deleted', '2015-03-23'),
(52, 13, 'Added new leave record', '2015-03-23'),
(53, 13, 'Leave record deleted', '2015-03-23'),
(54, 13, 'Employee record edited', '2015-03-24'),
(57, 13, 'Added new leave record', '2015-03-25'),
(58, 13, 'Added new notice', '2015-03-25'),
(59, 1, 'Employee record edited', '2015-03-26'),
(60, 1, 'Password changed', '2015-03-26'),
(61, 1, 'Added new employee to marketing department', '2015-03-26'),
(62, 1, 'Added new employee to production department', '2015-03-26'),
(63, 1, 'Added new employee to production department', '2015-03-26'),
(64, 1, 'Added new employee to finance department', '2015-03-26'),
(65, 1, 'Added new employee to finance department', '2015-03-26'),
(66, 1, 'Added new leave record from marketing department', '2015-03-26'),
(67, 1, 'Leave record deleted', '2015-03-26'),
(68, 1, 'Added new notice to everyone department', '2015-03-26'),
(69, 1, 'Added new notice to everyone department', '2015-03-26'),
(70, 1, 'Added new notice to everyone department', '2015-03-26'),
(71, 1, 'Added new notice to everyone department', '2015-03-26'),
(72, 1, 'Added new notice to everyone department', '2015-03-26'),
(73, 103, 'Added new employee', '2015-03-26'),
(74, 104, 'Added new employee', '2015-03-28'),
(75, 104, 'Employee record deleted', '2015-03-28'),
(76, 1, 'Employee record edited', '2015-03-29'),
(77, 13, 'Username changed', '2015-07-21'),
(78, 13, 'Password changed', '2015-07-21'),
(79, 1, 'Employee record deleted', '2015-07-21'),
(80, 1, 'Added new notice to technical department', '2015-07-21'),
(81, 1, 'Added new notice to everyone department', '2015-07-21'),
(82, 1, 'Added new notice to finance department', '2015-07-21'),
(83, 2, 'Added new notice', '2015-07-22'),
(84, 5, 'Employee record deleted', '2015-07-22'),
(85, 5, 'Added new employee to marketing department', '2015-07-22'),
(86, 5, 'Added new notice to everyone department', '2015-07-22'),
(87, 5, 'Added new employee to production department', '2015-07-24'),
(88, 5, 'Added new employee to marketing department', '2015-07-24'),
(89, 112, 'Added new leave record', '2015-07-24'),
(90, 1, 'Added new notice', '2015-07-25'),
(91, 5, 'Employee record edited', '2015-09-26'),
(92, 5, 'Employee record edited', '2015-09-26'),
(93, 5, 'Added new notice to everyone department', '2015-09-26'),
(94, 2, 'Added new notice', '2015-09-26'),
(95, 5, 'Added new employee to finance department', '2015-12-24');

-- --------------------------------------------------------

--
-- Table structure for table `table_technical_login`
--

CREATE TABLE IF NOT EXISTS `table_technical_login` (
`id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `table_technical_login`
--

INSERT INTO `table_technical_login` (`id`, `username`, `password`) VALUES
(1, 'rabin', 'rabin123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `table_admin`
--
ALTER TABLE `table_admin`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `table_employee`
--
ALTER TABLE `table_employee`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `table_employee_login`
--
ALTER TABLE `table_employee_login`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `table_feedback`
--
ALTER TABLE `table_feedback`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `table_finance_login`
--
ALTER TABLE `table_finance_login`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `table_leave`
--
ALTER TABLE `table_leave`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `table_login`
--
ALTER TABLE `table_login`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `table_marketing_login`
--
ALTER TABLE `table_marketing_login`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `table_production_login`
--
ALTER TABLE `table_production_login`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `table_recent_activities`
--
ALTER TABLE `table_recent_activities`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `table_technical_login`
--
ALTER TABLE `table_technical_login`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `table_admin`
--
ALTER TABLE `table_admin`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `table_employee`
--
ALTER TABLE `table_employee`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=60;
--
-- AUTO_INCREMENT for table `table_employee_login`
--
ALTER TABLE `table_employee_login`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `table_feedback`
--
ALTER TABLE `table_feedback`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `table_finance_login`
--
ALTER TABLE `table_finance_login`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `table_leave`
--
ALTER TABLE `table_leave`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `table_login`
--
ALTER TABLE `table_login`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=114;
--
-- AUTO_INCREMENT for table `table_marketing_login`
--
ALTER TABLE `table_marketing_login`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `table_production_login`
--
ALTER TABLE `table_production_login`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `table_recent_activities`
--
ALTER TABLE `table_recent_activities`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=96;
--
-- AUTO_INCREMENT for table `table_technical_login`
--
ALTER TABLE `table_technical_login`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
