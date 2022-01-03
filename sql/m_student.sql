-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 30, 2021 at 07:06 PM
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
-- Table structure for table `m_student`
--

CREATE TABLE `m_student` (
  `s_id` varchar(10) NOT NULL,
  `dept` varchar(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `semester` int(10) NOT NULL,
  `section` varchar(10) NOT NULL,
  `gsuit` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `m_student`
--

INSERT INTO `m_student` (`s_id`, `dept`, `name`, `semester`, `section`, `gsuit`) VALUES
('C183054', 'CSE', 'Aslam Mahmud Efaz', 6, 'BM', 'c183054@ugrad.iiuc.ac.bd'),
('C183062', 'CSE', 'Farhad Hamid Epon', 6, 'BM', 'c183062@ugrad.iiuc.ac.bd');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `m_student`
--
ALTER TABLE `m_student`
  ADD PRIMARY KEY (`s_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
