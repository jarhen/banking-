-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 10, 2017 at 11:22 AM
-- Server version: 10.1.22-MariaDB
-- PHP Version: 7.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bank`
--

-- --------------------------------------------------------

--
-- Table structure for table `totaltra`
--

CREATE TABLE `totaltra` (
  `tratype` varchar(50) NOT NULL,
  `amt` int(50) NOT NULL,
  `id` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `totaltra`
--

INSERT INTO `totaltra` (`tratype`, `amt`, `id`) VALUES
('withdraw', 500, 15),
('deposit', 5000, 15),
('withdraw', 1000, 15),
('withdraw', 1, 15),
('withdraw', 1000, 15),
('withdraw', 1001, 15),
('withdraw', 1000, 15),
('deposit', 2000, 15),
('withdraw', 990, 15),
('withdraw', 10, 15),
('deposit', 999, 15),
('deposit', 2, 15),
('withdraw', 500, 15),
('withdraw', 100, 15),
('withdraw', 399, 15),
('withdraw', 0, 1),
('deposit', 9, 15),
('withdraw', 9, 15),
('deposit', 1000, 15),
('withdraw', 0, 15),
('withdraw', 1, 15),
('deposit', 1000, 15),
('deposit', 1000, 15),
('withdraw', 1000, 15),
('deposit', 2000, 15),
('withdraw', 1000, 15),
('withdraw', 2999, 15),
('deposit', 0, 15),
('deposit', 2, 15),
('withdraw', 1, 15),
('deposit', 1000, 16),
('withdraw', 3000, 16);

-- --------------------------------------------------------

--
-- Table structure for table `transfer`
--

CREATE TABLE `transfer` (
  `Toid` int(50) NOT NULL,
  `Fromid` int(50) NOT NULL,
  `amt` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transfer`
--

INSERT INTO `transfer` (`Toid`, `Fromid`, `amt`) VALUES
(7, 4, 500),
(1, 14, 5000),
(14, 1, 8000),
(14, 1, 4000),
(1, 14, 5000),
(0, 1, 0),
(14, 1, 4000),
(14, 15, 499),
(1, 15, 2000),
(15, 15, 2000),
(15, 15, 100000),
(17, 16, 2000),
(15, 15, 111111),
(15, 15, 200),
(15, 15, 11111),
(15, 15, 222),
(17, 15, 222);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` text NOT NULL,
  `intbalans` int(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `intbalans`) VALUES
(15, 'jaime', '471318afa3ff1cca607bb15c1d59aae7fab91b6d3544434cb6bf8bb6c5a160dc7f958e67d397f3aeb2ab97584be437b191d0ed4c50bdc78b6ca405cd32410e12BdcmO3pAmAwSzfaboIJ0qAD6LKNRMh2mlb4=', 10000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
