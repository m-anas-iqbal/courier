-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 02, 2022 at 05:31 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `courierin`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `id` int(11) NOT NULL,
  `acc_no` varchar(50) DEFAULT NULL,
  `cash` float DEFAULT NULL,
  `pin` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`id`, `acc_no`, `cash`, `pin`) VALUES
(2, '1234237196', 50000, '1234'),
(3, '1234237196', 50000, '1234'),
(4, '4321561279', 60000, '1234'),
(5, '7861235641', 70000, '1234'),
(6, '56412054124', 80000, '1234'),
(7, '1237839012', 90000, '1234'),
(8, '4512394310', 100000, '1234'),
(9, '2397125701', 200000, '1234'),
(10, '4312805104', 300000, '1234'),
(11, '2187345601', 400000, '1234'),
(12, '1278904512', 500000, '1234'),
(13, '9021845632', 100000, '1234'),
(14, '9612670124', 70000, '1234'),
(15, '5621349810', 80000, '1234'),
(16, '1234567891', 90000, '1234'),
(17, '4532178932', 90000, '1234'),
(18, '3456871285', 70000, '1234'),
(19, '6712349845', 80000, '1234'),
(20, '7012345678', 60000, '1234'),
(21, '3214671235', 50000, '1234'),
(22, '2345671923', 90000, '1234'),
(23, '4521390431', 90000, '1234'),
(24, '2345678912', 100000, '1234'),
(25, '8734210987', 200000, '1234'),
(26, '6745290128', 300000, '1234'),
(27, '03147896502', 300000, '1234'),
(28, '3256789120', 400000, '1234'),
(29, '5478931209', 200000, '1234'),
(30, '1297843210', 100000, '1234'),
(31, '2397841209', 500000, '1234'),
(32, '4567123975', 500000, '1234');

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE `city` (
  `c_id` int(11) NOT NULL,
  `city` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`c_id`, `city`) VALUES
(1, 'Karachi'),
(2, 'Lahore'),
(3, 'Islamabad'),
(4, 'Gujarawala'),
(5, 'Mari'),
(6, 'Multan'),
(7, 'Hyderabad'),
(8, 'Sukhur'),
(9, 'Kashmir'),
(10, 'Rawalpindi'),
(11, 'kkk'),
(12, 'qq');

-- --------------------------------------------------------

--
-- Table structure for table `courier_detail`
--

CREATE TABLE `courier_detail` (
  `dc_id` int(11) NOT NULL,
  `d_departure` varchar(50) DEFAULT NULL,
  `d_destination` varchar(50) DEFAULT NULL,
  `height` varchar(50) DEFAULT NULL,
  `width` varchar(50) DEFAULT NULL,
  `totalprice` decimal(50,0) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `courier_detail`
--

INSERT INTO `courier_detail` (`dc_id`, `d_departure`, `d_destination`, `height`, `width`, `totalprice`) VALUES
(1, 'sgdjagjda', 'fgadgafdg', '1000', '1000', '5000'),
(2, 'asdsfdafsfsadf', 'sdafsadfsdafdsfdsaafsdds', '100', '100', '1000'),
(3, '', '', '', '', '0'),
(4, 'sdsadsadsad', 'sadsadsadsa', '100011', '100011', '0');

-- --------------------------------------------------------

--
-- Table structure for table `courior`
--

CREATE TABLE `courior` (
  `id` int(11) NOT NULL,
  `startdate` date DEFAULT NULL,
  `deliverydate` date DEFAULT NULL,
  `weight` float DEFAULT NULL,
  `departure` varchar(50) DEFAULT NULL,
  `destination` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `courior`
--

INSERT INTO `courior` (`id`, `startdate`, `deliverydate`, `weight`, `departure`, `destination`) VALUES
(1, '2022-07-09', '2022-07-21', 1000, 'Karachi', 'Karachi'),
(2, '2022-07-13', '2022-07-22', 100, 'Karachi', 'Lahore'),
(3, '0000-00-00', '0000-00-00', 0, '', ''),
(4, '2022-07-23', '2022-07-23', 100011, 'asdasdsa', 'adsadsad');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `userid` int(11) DEFAULT NULL,
  `datetimes` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `o_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `courior_id` int(11) DEFAULT NULL,
  `o_date` date DEFAULT NULL,
  `paid` decimal(50,0) DEFAULT NULL,
  `acc_no` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`o_id`, `user_id`, `courior_id`, `o_date`, `paid`, `acc_no`) VALUES
(1211, 4, 1, '2022-07-13', '6000', '876837687'),
(1212, 4, 2, '2022-07-22', '7000', '5756577565');

-- --------------------------------------------------------

--
-- Table structure for table `priceing`
--

CREATE TABLE `priceing` (
  `height` double DEFAULT NULL,
  `width` double DEFAULT NULL,
  `weight` double DEFAULT NULL,
  `parcel_cost` decimal(50,0) DEFAULT NULL,
  `h_cost` decimal(50,0) NOT NULL,
  `wt_cost` decimal(50,0) NOT NULL,
  `w_cost` decimal(50,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `priceing`
--

INSERT INTO `priceing` (`height`, `width`, `weight`, `parcel_cost`, `h_cost`, `wt_cost`, `w_cost`) VALUES
(1000, 1000, 1.5, '3000', '1000', '1000', '1000');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `address` varchar(50) DEFAULT NULL,
  `role` varchar(50) DEFAULT 'user',
  `phone` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `created` date DEFAULT NULL,
  `status` varchar(50) NOT NULL DEFAULT 'active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `address`, `role`, `phone`, `email`, `password`, `created`, `status`) VALUES
(1, 'ali', 'asjdlkaj', 'user', '21321321', 'prince', '123', '2022-06-23', 'block'),
(2, 'agent', 'asjdlkaj', 'agent', '1236', 'agent', '123', '2022-06-23', 'block'),
(3, 'prince', 'karachi', 'admin', '123456789', 'ali', '123', '2022-06-23', 'block'),
(4, 'adeen', 'hkhkajshdk', 'user', '12312321', 'adeentech@gmail.com', '123', '2022-06-23', 'active'),
(5, 'bbtq', 'karachi', 'user', '123213', 'kghhkhdsa@adad12', '123', '2022-07-02', 'active'),
(6, 'adeentech', 'karachi', 'user', '123213', 'adeentech@gmail.com', '123', '2022-07-02', 'active'),
(7, 'prince12', 'karachi', 'admin', '123213', 'prince2@gmail.com', '123', '2022-07-02', 'block');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `courier_detail`
--
ALTER TABLE `courier_detail`
  ADD PRIMARY KEY (`dc_id`);

--
-- Indexes for table `courior`
--
ALTER TABLE `courior`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`o_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account`
--
ALTER TABLE `account`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `city`
--
ALTER TABLE `city`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `courier_detail`
--
ALTER TABLE `courier_detail`
  MODIFY `dc_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `courior`
--
ALTER TABLE `courior`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `o_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1213;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
