-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 30, 2021 at 07:07 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `iiuc`
--

-- --------------------------------------------------------

--
-- Table structure for table `f_student`
--

CREATE TABLE `f_student` (
  `s_id` varchar(10) NOT NULL,
  `dept` varchar(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `semester` int(10) NOT NULL,
  `section` varchar(10) NOT NULL,
  `gsuit` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `f_student`
--

INSERT INTO `f_student` (`s_id`, `dept`, `name`, `semester`, `section`, `gsuit`) VALUES
('C183246', 'CSE', 'Afsana Tabassum', 6, 'BF', 'c183246@ugrad.iiuc.ac.bd'),
('C183252', 'CSE', 'Ismat Tamanna', 6, 'BF', 'c183252@ugrad.iiuc.ac.bd'),
('C183259', 'CSE', 'Shahida Sharmin', 6, 'BF', 'c183259@ugrad.iiuc.ac.bd'),
('C183260', 'CSE', 'Nargis Akter', 6, 'BF', 'c183260@ugrad.iiuc.ac.bd'),
('C183268', 'CSE', 'Taspia Uddin', 6, 'BF', 'c183268@ugrad.iiuc.ac.bd'),
('C183272', 'CSE', 'Miskatul Jannat Tuli', 6, 'BF', 'c183272@ugrad.iiuc.ac.bd'),
('C183273', 'CSE', 'Tasneem Nur', 6, 'BF', 'c183273@ugrad.iiuc.ac.bd'),
('C183274', 'CSE', 'Navia Zafrin Bindu', 6, 'BF', 'c183274@ugrad.iiuc.ac.bd'),
('ET193220', 'EEE', 'Humaira Nikhita', 6, 'AF', 'et183208@ugrad.iiuc.ac.bd'),
('P191209', 'Pharmacy', 'Sharmin Sultana', 5, 'AF', 'p191209@ugrad.iiuc.ac.bd'),
('P193220', 'Pharmacy', 'Anika Karim', 4, 'AF', 'p193220@ugrad.iiuc.ac.bd');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `f_student`
--
ALTER TABLE `f_student`
  ADD PRIMARY KEY (`s_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
