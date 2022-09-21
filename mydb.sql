-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 21, 2022 at 03:59 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mydb`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_form2`
--

CREATE TABLE `tbl_form2` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `age` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password_pass` varchar(40) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_form2`
--

INSERT INTO `tbl_form2` (`id`, `name`, `fname`, `age`, `email`, `password_pass`, `status`) VALUES
(1, 'Rehman', 'Tariq', '21', 'rehman123@gmail.com', '1234', '1'),
(2, 'moheez', 'Abdul-razzaq', '23', 'moheez123@gmail.com', '1234', '1'),
(3, 'muzamil', 'ahmed', '22', 'muzamil@gmail.com', '1234', '1'),
(4, 'sai', '', '', '', '', '0'),
(5, 'Saira', 'Muhammed-ali', '22', 'saira12@gamil.com', '15678', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_form2`
--
ALTER TABLE `tbl_form2`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_form2`
--
ALTER TABLE `tbl_form2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
