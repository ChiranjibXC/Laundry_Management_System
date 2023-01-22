-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 22, 2023 at 09:14 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laundry_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_form`
--

CREATE TABLE `admin_form` (
  `id` varchar(10) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_form`
--

INSERT INTO `admin_form` (`id`, `password`) VALUES
('admin', 'test'),
('admin', 'test');

-- --------------------------------------------------------

--
-- Table structure for table `book_form`
--

CREATE TABLE `book_form` (
  `date` date NOT NULL,
  `topwear` varchar(10) NOT NULL,
  `bottomwear` varchar(10) NOT NULL,
  `woolen` varchar(10) NOT NULL,
  `others` varchar(50) NOT NULL,
  `servicetype` varchar(25) NOT NULL,
  `name` varchar(25) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` bigint(10) NOT NULL,
  `address` varchar(50) NOT NULL,
  `description` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `book_form`
--

INSERT INTO `book_form` (`date`, `topwear`, `bottomwear`, `woolen`, `others`, `servicetype`, `name`, `email`, `phone`, `address`, `description`) VALUES
('2023-01-31', '7', '0', '0', '0', 'ironing', 'kumar', 'alokkumar@gmail.com', 1234567890, 'achhi', 'please iron properly.'),
('2023-01-19', '0', '0', '3', '0', 'dryclean', 'Chiranjib Parida', 'chiranjibparida99@gmail.com', 7788924623, 'Plot no-324, Laxmisagar, Bhubaneswar', 'I have 3 woolen cloths. please dry clean those.');

-- --------------------------------------------------------

--
-- Table structure for table `signup_form`
--

CREATE TABLE `signup_form` (
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(25) NOT NULL,
  `phone` bigint(10) NOT NULL,
  `address` varchar(50) NOT NULL,
  `securityquestion` varchar(50) NOT NULL,
  `securityanswer` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `signup_form`
--

INSERT INTO `signup_form` (`name`, `email`, `password`, `phone`, `address`, `securityquestion`, `securityanswer`) VALUES
('Alok Kumar', 'alokkumar@gmail.com', 'alokkumar', 8976546789, 'Unit-1, Bhubaneswar', 'petspecies', 'cat'),
('Chiranjib Parida', 'chiranjibparida99@gmail.com', 'Chiru@183', 7788924623, 'Plot no-324, Laxmisagar, Bhubaneswar', 'number', '8');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `book_form`
--
ALTER TABLE `book_form`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `signup_form`
--
ALTER TABLE `signup_form`
  ADD PRIMARY KEY (`email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
