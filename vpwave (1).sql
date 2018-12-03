-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 03, 2018 at 11:11 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vpwave`
--

-- --------------------------------------------------------

--
-- Table structure for table `postingan`
--

CREATE TABLE `postingan` (
  `deskripsi` varchar(250) NOT NULL,
  `username` varchar(20) NOT NULL,
  `uploaded` varchar(100) NOT NULL,
  `no` int(15) NOT NULL,
  `time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `postingan`
--

INSERT INTO `postingan` (`deskripsi`, `username`, `uploaded`, `no`, `time`) VALUES
('Coba', 'jovi', 'e34ea964554d2496f4a0de9c5dbc4e61--le-smoking-smoking-ladies4.jpg', 3, '23:44:51');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `username` varchar(20) NOT NULL,
  `birthdate` date NOT NULL,
  `email` varchar(100) NOT NULL,
  `sandi` varchar(20) NOT NULL,
  `blog` varchar(100) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `phone` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `birthdate`, `email`, `sandi`, `blog`, `foto`, `phone`) VALUES
('1', '1998-03-06', 'ghoziakbar9@gmail.com', '1q2w3e', '', '', 0),
('3', '1998-06-03', 'ghzaw@gmail.com', '12345', '', '', 0),
('4', '2018-12-12', 'iqro@gmail.com', '1q2w3e', '', '', 0),
('5', '1998-06-03', 'ghz@gmail.com', '123456', '', '', 0),
('iqro', '0000-00-00', 'iqro@gmail.com', '12345', '', '', 0),
('jovi', '0000-00-00', 'jivi@gmail.com', '12345', '', '', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `postingan`
--
ALTER TABLE `postingan`
  ADD PRIMARY KEY (`no`),
  ADD KEY `username` (`username`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `postingan`
--
ALTER TABLE `postingan`
  MODIFY `no` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `postingan`
--
ALTER TABLE `postingan`
  ADD CONSTRAINT `postingan_ibfk_1` FOREIGN KEY (`username`) REFERENCES `user` (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
