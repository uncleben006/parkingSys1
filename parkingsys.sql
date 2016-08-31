-- phpMyAdmin SQL Dump
-- version 4.6.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 04, 2016 at 08:45 AM
-- Server version: 5.7.13-log
-- PHP Version: 5.6.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `parkingsys`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `no` int(11) NOT NULL,
  `id` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `pass` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `pri` int(11) NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`no`, `id`, `pass`, `name`, `pri`, `email`) VALUES
(1, '1AA', 'asdf', 'sdf', 2, 'adf');

-- --------------------------------------------------------

--
-- Table structure for table `car`
--

CREATE TABLE `car` (
  `no` int(11) NOT NULL,
  `id` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `picture` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `carNo` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `car`
--

INSERT INTO `car` (`no`, `id`, `description`, `picture`, `carNo`) VALUES
(1, '1AA', 'w', 'df', 'sfdsf2');

-- --------------------------------------------------------

--
-- Table structure for table `orderlist`
--

CREATE TABLE `orderlist` (
  `no` int(11) NOT NULL,
  `orderTable_no` int(11) NOT NULL,
  `id` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `car_no` int(11) NOT NULL,
  `parking_no` int(11) NOT NULL,
  `startDate` date NOT NULL,
  `endDate` date NOT NULL,
  `startTime` time NOT NULL,
  `endTime` time NOT NULL,
  `session` int(11) NOT NULL,
  `caseNo` int(11) NOT NULL,
  `promotionCode` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `tradeStatus` int(11) NOT NULL,
  `certificationCode` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `longitude` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `latitude` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `orderlist`
--

INSERT INTO `orderlist` (`no`, `orderTable_no`, `id`, `date`, `time`, `car_no`, `parking_no`, `startDate`, `endDate`, `startTime`, `endTime`, `session`, `caseNo`, `promotionCode`, `tradeStatus`, `certificationCode`, `longitude`, `latitude`) VALUES
(2, 13, '43', '2016-08-03', '14:14:32', 34, 343, '0000-00-00', '0000-00-00', '00:00:34', '00:05:35', 0, 0, '532', 0, '56', '36', '24'),
(3, 3, 'sdfds', '2016-08-03', '19:29:06', 0, 0, '0000-00-00', '0000-00-00', '00:00:00', '00:00:00', 0, 0, 'sdf', 0, 'sd', 'sdf', 'sfd');

-- --------------------------------------------------------

--
-- Table structure for table `ordertable`
--

CREATE TABLE `ordertable` (
  `no` int(11) NOT NULL,
  `id` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `ordertable`
--

INSERT INTO `ordertable` (`no`, `id`, `date`, `time`) VALUES
(0, 'AA', '0000-00-00', '00:00:00'),
(1, 'test1', '2016-08-02', '00:00:00'),
(2, 'test2', '2016-08-02', '00:00:00'),
(3, 'test3', '2016-08-01', '00:00:00'),
(4, 'AA', '2016-00-00', '00:00:00'),
(5, 'AA', '0000-00-00', '00:00:00'),
(6, '6BB', '2016-08-03', '12:13:37'),
(7, '7BB', '2016-08-03', '12:19:16');

-- --------------------------------------------------------

--
-- Table structure for table `parking`
--

CREATE TABLE `parking` (
  `no` int(11) NOT NULL,
  `id` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `picture` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `startDate` date NOT NULL,
  `endDate` date NOT NULL,
  `startTime` time NOT NULL,
  `endTime` time NOT NULL,
  `session` int(11) NOT NULL,
  `caseNo` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `parkingDoc` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `userDoc` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `QRCode` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `longitude` int(11) NOT NULL,
  `latitude` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `parking`
--

INSERT INTO `parking` (`no`, `id`, `address`, `description`, `picture`, `startDate`, `endDate`, `startTime`, `endTime`, `session`, `caseNo`, `price`, `parkingDoc`, `userDoc`, `QRCode`, `longitude`, `latitude`) VALUES
(1, '1AA', '12', '231', '4214', '0000-00-00', '0000-00-00', '00:00:21', '00:01:34', 0, 0, 124, '214', '214', '241', 512, 13),
(2, '2AA', 'wrew', 'rrwer', 'wet', '0000-00-00', '0000-00-00', '00:00:00', '00:00:00', 0, 0, 0, 'ewr', 't', 'et', 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `no` int(11) NOT NULL,
  `id` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `pass` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `birth` date NOT NULL,
  `gender` int(11) NOT NULL,
  `city` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `creditCardNo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`no`, `id`, `pass`, `name`, `phone`, `email`, `birth`, `gender`, `city`, `creditCardNo`) VALUES
(2, '2AA', 'fdsf', 'sdf', 'dfsdf', 'dfds', '0000-00-00', 0, 'df', 0),
(3, '3AA', '12', '12', '313', '23', '0000-00-00', 1, '24', 13),
(4, '4AA', '454', '64', '775', '8', '0000-00-00', 2, '24', 66),
(5, '5AA', 'dsaf', 'sdfa', 'dsfds', 'gd', '2016-08-04', 2, '1', 0),
(6, '6AA', 'dsf', 'dfds', 'dfsf', 'sdfsd', '2016-08-05', 0, '0', 123);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `car`
--
ALTER TABLE `car`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `orderlist`
--
ALTER TABLE `orderlist`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `ordertable`
--
ALTER TABLE `ordertable`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `parking`
--
ALTER TABLE `parking`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
