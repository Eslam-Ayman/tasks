-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 09, 2017 at 06:03 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tasks`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `birth` date NOT NULL,
  `country` varchar(100) NOT NULL,
  `phone` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `birth`, `country`, `phone`) VALUES
(10, 'sonson', 'admin@admin.com', 'd', '2018-01-31', 'f', '1'),
(12, 'sdf', 'admin@admin.com', 'df', '2016-12-31', 'd', '1'),
(13, 'sdf', 'admin@admin.com', 'df', '2016-12-31', 'd', '1'),
(14, 'sdf', 'admin@admin.com', 'df', '2016-12-31', 'd', '1'),
(15, 'df', 'admin@admin.com', 'd', '2016-12-31', 'd', '1'),
(16, 'ahmed soao', 'admin@admin.com', 'asd', '2017-12-31', 'd', '1'),
(17, 'ahmed soao', 'admin@admin.com', 'asd', '2017-12-31', 'd', '1'),
(18, 'asdf asdf ', '', '', '0000-00-00', '', ''),
(19, '<script>  alert(\'test\');</script>', '', '', '0000-00-00', '', ''),
(20, '[removed]  alert&#40;\'test\'&#41;;[removed]', '', '', '0000-00-00', '', ''),
(21, 'ahmed soso', 'admin@admin.com', '123', '2018-02-02', 'asdf', '12345678912'),
(22, 'asdf asdf ', 'admin@admin278.com', '1', '2017-01-01', 'asdf', '12345678912'),
(23, 'ad aa asdf asf', 'admin@admin77.com', '123', '2017-01-01', 'asdfasdfg', '12345678912'),
(24, 'ahmed soka ', 'admin@admin78.com', '1234567', '2017-01-01', 'asdf', '12345678912'),
(25, 'aasdfasd', 'admin@admin789.com', '1234567', '2017-01-01', 'asdff', '12345678912'),
(26, 'asdfkjasg', 'admin@admi89n.com', '1234567', '2017-01-01', 'asgas1', '12345678129'),
(27, 'sdfkjdf ag ', 'admin@admi8n6.com', '1234567', '2017-01-01', 'asdfg', '12345678912'),
(28, 'admin d', 'ad54min@admin.com', '1234567', '2017-01-01', 'asg', '12345678912');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
