-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 11, 2017 at 09:21 AM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `logindb`
--

-- --------------------------------------------------------

--
-- Table structure for table `fileuploadtable`
--

CREATE TABLE `fileuploadtable` (
  `id` int(25) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `imglink` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fileuploadtable`
--

INSERT INTO `fileuploadtable` (`id`, `username`, `password`, `email`, `imglink`) VALUES
(1, 'pkt', '123', 'piyush', 'uploads/pktweb.jpg'),
(2, 'abc', '123', 'piyush', 'uploads/PIYUSH PHOTO.jpg'),
(3, 'abd', '23', 'abd', 'uploads/pkt.jpg'),
(4, 'pp', '1234', 'pp', 'uploads/task1.web development.png'),
(5, 'kkk', '55', 'kkk', 'uploads/slide5.jpg'),
(6, 'pq', '9140095364', 'pq', 'uploads/IMG_20170324_193702.jpg'),
(7, 'pm', '456', 'piyush kumar trigun', 'uploads/IMG_20170324_231542.jpg'),
(9, 'sahu', '8864043086', 'same@gmail.com', 'uploads/IMG_20170331_173120.jpg'),
(10, 'upesh', '123456789', 'samesenior123@gmail.com', 'uploads/IMG_20170330_110508_1.jpg'),
(11, 'vvk', '999999999999999', 'vvk@gmail.com', 'uploads/IMG_20170326_224112.jpg'),
(12, 'clv', '8888888888888', 'cul@yahoo.com', 'uploads/IMG_20170324_182339.jpg'),
(13, 'piyush_ 123', '33333333333333', 'sahuupesh@gmail.com', 'uploads/IMG_20170324_224226.jpg'),
(14, 'trigun', '123456789', 'piyush@yahoo.com', 'uploads/lto-wrapper.exe');

-- --------------------------------------------------------

--
-- Table structure for table `userinfotbl`
--

CREATE TABLE `userinfotbl` (
  `id` int(25) NOT NULL,
  `username` varchar(16) NOT NULL,
  `password` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `fileuploadtable`
--
ALTER TABLE `fileuploadtable`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userinfotbl`
--
ALTER TABLE `userinfotbl`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `fileuploadtable`
--
ALTER TABLE `fileuploadtable`
  MODIFY `id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `userinfotbl`
--
ALTER TABLE `userinfotbl`
  MODIFY `id` int(25) NOT NULL AUTO_INCREMENT;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
