-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 07, 2020 at 03:24 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ipproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `email` varchar(100) NOT NULL,
  `uname` varchar(10) NOT NULL,
  `pwd` varchar(32) NOT NULL,
  `img` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`email`, `uname`, `pwd`, `img`) VALUES
('admin@mail.com', 'admin', '21232f297a57a5a743894a0e4a801fc3', ''),
('i@gmail.com', 'ss', '29e3ad05212e89f97b1bd8e9ebd861ae', ''),
('i3@gmail.com', 'ss@@@@', '29e3ad05212e89f97b1bd8e9ebd861ae', ''),
('vinaybhongale123@gmail.com', 'vinay', '5a8eaa3e637f51ba3f9df03355d7bc08', ''),
('vinaybhongale1a23@gmail.com', 'vinay@', '70d9ed997acf8f0e4153698de57f905f', '');

-- --------------------------------------------------------

--
-- Table structure for table `query`
--

CREATE TABLE `query` (
  `uname` varchar(10) NOT NULL,
  `uactid` int(10) NOT NULL,
  `actuname` varchar(10) NOT NULL,
  `actid` int(10) NOT NULL,
  `timestp` timestamp NOT NULL DEFAULT current_timestamp(),
  `llike` int(10) NOT NULL,
  `dlike` int(10) NOT NULL,
  `tag` text NOT NULL,
  `blk` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `query`
--

INSERT INTO `query` (`uname`, `uactid`, `actuname`, `actid`, `timestp`, `llike`, `dlike`, `tag`, `blk`) VALUES
('vinay', 2, '', 0, '2020-10-05 13:57:29', 1, 0, 'Technology\r\ncoding', 'How to get good at coding?'),
('vinay', 3, '', 0, '2020-10-05 14:39:54', 18, 1, 'Technology\r\nSoftware Company', 'Some big IT firms?'),
('admin', 5, 'vinay', 3, '2020-10-07 12:52:33', 3, 1, '', 'There are many IT giants present around the globe. Some of the best are GOOGLE, MICROSOFT, AWS and many more. Some of the leading IT firms in India are TCS, INFOSYS and etc.'),
('admin', 6, 'vinay', 3, '2020-10-07 13:16:17', 1, 0, '', 'Google'),
('vinay', 7, 'vinay', 2, '2020-10-08 09:46:46', 0, 0, '', 'practiceMakesManPERFECT.');

-- --------------------------------------------------------

--
-- Table structure for table `tlike`
--

CREATE TABLE `tlike` (
  `id` int(11) NOT NULL,
  `uname` varchar(10) NOT NULL,
  `actuname` varchar(10) NOT NULL,
  `actid` int(11) NOT NULL,
  `llike` int(1) NOT NULL,
  `dlike` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tlike`
--

INSERT INTO `tlike` (`id`, `uname`, `actuname`, `actid`, `llike`, `dlike`) VALUES
(17, 'vinay', 'vinay', 3, 1, 0),
(18, 'admin', 'vinay', 3, 0, 0),
(19, 'admin', 'admin', 6, 0, 0),
(20, 'vinay', 'admin', 6, 1, 0),
(21, 'vinay', 'vinay', 2, 1, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`uname`),
  ADD UNIQUE KEY `UNIQUE` (`email`);

--
-- Indexes for table `query`
--
ALTER TABLE `query`
  ADD PRIMARY KEY (`uactid`);

--
-- Indexes for table `tlike`
--
ALTER TABLE `tlike`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `query`
--
ALTER TABLE `query`
  MODIFY `uactid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tlike`
--
ALTER TABLE `tlike`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
