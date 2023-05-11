-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 22, 2023 at 09:02 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ebook`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `a_id` int(11) NOT NULL,
  `a_name` varchar(15) NOT NULL,
  `a_email` varchar(40) NOT NULL,
  `a_password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `b_id` int(11) NOT NULL,
  `b_name` varchar(15) NOT NULL,
  `b_price` int(11) NOT NULL,
  `b_mrp` decimal(10,0) NOT NULL,
  `b_image` varchar(20) NOT NULL,
  `cate_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cart_id` int(11) NOT NULL,
  `books_id` int(11) NOT NULL,
  `cart_price` int(11) NOT NULL,
  `cart_image` varchar(20) NOT NULL,
  `books_name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `cat_status` varchar(20) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `cat_name` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cat_status`, `cat_id`, `cat_name`) VALUES
('1', 13043, 'Novel'),
('1', 15245, 'Horror'),
('1', 23145, 'Comedy'),
('1', 23245, 'Horror'),
('1', 55225, 'Thriller');

-- --------------------------------------------------------

--
-- Table structure for table `com_cat`
--

CREATE TABLE `com_cat` (
  `cat_name` varchar(20) NOT NULL,
  `cat_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `com_enrollment`
--

CREATE TABLE `com_enrollment` (
  `cat_id` int(11) NOT NULL,
  `enr_id` int(11) NOT NULL,
  `enr_name` varchar(40) NOT NULL,
  `enr_contact` int(11) NOT NULL,
  `enr_email` varchar(20) NOT NULL,
  `date_of` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `c_id` int(11) NOT NULL,
  `c_name` varchar(20) NOT NULL,
  `c_email` varchar(40) NOT NULL,
  `c_password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `ord_id` int(11) NOT NULL,
  `cus_cont` varchar(15) NOT NULL,
  `ord_payment` int(11) NOT NULL,
  `ord_time` timestamp NOT NULL DEFAULT current_timestamp(),
  `cart_id` int(11) NOT NULL,
  `cus_loc` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `prize distribution`
--

CREATE TABLE `prize distribution` (
  `cat_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `prize_distribution`
--

CREATE TABLE `prize_distribution` (
  `cat_id` int(11) NOT NULL,
  `cat_name` varchar(20) NOT NULL,
  `enr_name` varchar(40) NOT NULL,
  `enr_id` int(11) NOT NULL,
  `prize_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `winner`
--

CREATE TABLE `winner` (
  `name` varchar(20) NOT NULL,
  `enr_id` int(11) NOT NULL,
  `prize_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`a_id`);

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`b_id`),
  ADD KEY `cate_id` (`cate_id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cart_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `com_cat`
--
ALTER TABLE `com_cat`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `com_enrollment`
--
ALTER TABLE `com_enrollment`
  ADD PRIMARY KEY (`enr_id`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`ord_id`);

--
-- Indexes for table `prize_distribution`
--
ALTER TABLE `prize_distribution`
  ADD PRIMARY KEY (`prize_id`),
  ADD KEY `enr_id` (`enr_id`),
  ADD KEY `cat_id` (`cat_id`);

--
-- Indexes for table `winner`
--
ALTER TABLE `winner`
  ADD KEY `enr_id` (`enr_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `a_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `books`
--
ALTER TABLE `books`
  ADD CONSTRAINT `books_ibfk_1` FOREIGN KEY (`cate_id`) REFERENCES `categories` (`cat_id`);

--
-- Constraints for table `com_cat`
--
ALTER TABLE `com_cat`
  ADD CONSTRAINT `com_cat_ibfk_1` FOREIGN KEY (`cat_id`) REFERENCES `categories` (`cat_id`);

--
-- Constraints for table `order`
--
ALTER TABLE `order`
  ADD CONSTRAINT `order_ibfk_1` FOREIGN KEY (`ord_id`) REFERENCES `cart` (`cart_id`);

--
-- Constraints for table `prize_distribution`
--
ALTER TABLE `prize_distribution`
  ADD CONSTRAINT `prize_distribution_ibfk_1` FOREIGN KEY (`enr_id`) REFERENCES `com_enrollment` (`enr_id`),
  ADD CONSTRAINT `prize_distribution_ibfk_2` FOREIGN KEY (`cat_id`) REFERENCES `com_cat` (`cat_id`);

--
-- Constraints for table `winner`
--
ALTER TABLE `winner`
  ADD CONSTRAINT `winner_ibfk_1` FOREIGN KEY (`enr_id`) REFERENCES `com_enrollment` (`enr_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
