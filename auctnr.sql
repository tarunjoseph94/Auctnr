-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 26, 2019 at 05:59 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.1.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `auctnr`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_details`
--

CREATE TABLE `admin_details` (
  `admin_name_pk` varchar(20) NOT NULL,
  `admin_pwd` varchar(20) NOT NULL,
  `user_id_fk` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_details`
--

INSERT INTO `admin_details` (`admin_name_pk`, `admin_pwd`, `user_id_fk`) VALUES
('admin', 'admin', 1);

-- --------------------------------------------------------

--
-- Table structure for table `buyer_details`
--

CREATE TABLE `buyer_details` (
  `buyer_email` varchar(40) NOT NULL,
  `buyer_password` varchar(50) NOT NULL,
  `buyer_mobile` varchar(12) NOT NULL,
  `buyer_address` varchar(40) NOT NULL,
  `buyer_pin` int(8) NOT NULL,
  `user_id_fk` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `buyer_details`
--

INSERT INTO `buyer_details` (`buyer_email`, `buyer_password`, `buyer_mobile`, `buyer_address`, `buyer_pin`, `user_id_fk`) VALUES
('buyer@gmail.com', 'buyer123', '123456789', '#56,3rd cross,4th main road ,Bangalore', 560023, 15),
('tarunjoseph@gmail.com', 'buy123', '987654321', '123 ,3rd cross ,12 main road ,bangalore', 560048, 11),
('try1@gmail.com', '9711c44bc923072c6962', '1234567890', 'asddasd', 12345, 18),
('try2@gmail.com', 'c0556c9522fe6ead9862e23b1f113829', '1234567890', 'asdf', 123124567, 19),
('try@gmail.com', '063651a8be3d6a010d10', '1234567890', 'far far away', 123445, 17);

-- --------------------------------------------------------

--
-- Table structure for table `product_bid`
--

CREATE TABLE `product_bid` (
  `user_id_fk` int(5) NOT NULL,
  `current_bid` int(10) NOT NULL,
  `product_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_bid`
--

INSERT INTO `product_bid` (`user_id_fk`, `current_bid`, `product_id`) VALUES
(15, 5000, 16),
(15, 5000, 23),
(15, 5000, 19);

-- --------------------------------------------------------

--
-- Table structure for table `product_details`
--

CREATE TABLE `product_details` (
  `product_id_pk` int(10) NOT NULL,
  `user_id` int(5) NOT NULL,
  `product_name` varchar(40) NOT NULL,
  `product_description` varchar(80) NOT NULL,
  `product_price` int(10) NOT NULL,
  `product_image1` varchar(10) NOT NULL,
  `product_image2` varchar(10) NOT NULL,
  `product_image3` varchar(10) NOT NULL,
  `upload_date` varchar(11) NOT NULL,
  `upload_time` varchar(11) NOT NULL,
  `ship_ready` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_details`
--

INSERT INTO `product_details` (`product_id_pk`, `user_id`, `product_name`, `product_description`, `product_price`, `product_image1`, `product_image2`, `product_image3`, `upload_date`, `upload_time`, `ship_ready`) VALUES
(19, 14, 'Dining Table', 'A wooden dining table with 4  chairs and a bench', 20000, '191.jpg', '192.jpg', '193.jpg', '31-12-2018', '11:21:50', 0),
(20, 14, 'Coffee Table', 'Solid wood coffee table ', 5000, '201.jpg', '202.jpg', '203.jpg', '31-12-2018', '11:22:45', 1),
(21, 14, 'Book Case', 'A wooden book case with 6 shevles', 7500, '211.jpg', '212.jpg', '213.jpg', '31-12-2018', '11:23:59', 1),
(22, 14, 'Accent Chair', 'A chair that can be used as a statement piece in the center of the room', 8000, '221.jpg', '222.jpg', '223.jpg', '31-12-2018', '11:28:07', 0),
(23, 14, 'Shelf', 'A set of three floating shelfs', 2000, '231.jpg', '232.jpg', '233.jpg', '31-12-2018', '11:31:24', 0),
(24, 16, 'Book shelf', 'A wooden book shelf', 3000, '241.jpg', '242.jpg', '243.jpg', '02-01-2019', '15:41:47', 1);

-- --------------------------------------------------------

--
-- Table structure for table `product_ship`
--

CREATE TABLE `product_ship` (
  `product_id_pk` int(10) NOT NULL,
  `seller_id` int(5) NOT NULL,
  `buyer_id` int(5) NOT NULL,
  `final_price` int(10) NOT NULL,
  `shipping_status` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_ship`
--

INSERT INTO `product_ship` (`product_id_pk`, `seller_id`, `buyer_id`, `final_price`, `shipping_status`) VALUES
(21, 14, 11, 8000, 4),
(24, 16, 15, 3500, 3);

-- --------------------------------------------------------

--
-- Table structure for table `seller_details`
--

CREATE TABLE `seller_details` (
  `seller_email` varchar(40) NOT NULL,
  `seller_name` varchar(20) NOT NULL,
  `seller_password` varchar(50) NOT NULL,
  `seller_mobile` varchar(12) NOT NULL,
  `seller_address` varchar(40) NOT NULL,
  `seller_pin` int(8) NOT NULL,
  `user_id_fk` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `seller_details`
--

INSERT INTO `seller_details` (`seller_email`, `seller_name`, `seller_password`, `seller_mobile`, `seller_address`, `seller_pin`, `user_id_fk`) VALUES
('se1@gmail.com', 'asd', 'f0c230b3bc4a41ccd0ed26e486282b3f', '12345678', 'asdasd', 12312435, 20),
('seller@gmail.com', 'Shopfiy', 'seller123', '987456123', '098 4th Cross ,2nd Main road Bangalore', 560048, 14),
('shop@gmail.com', 'Shop', 'shop123', '321654987', '#45,80 feet road,Bengaluru', 560025, 16);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id_pk` int(5) NOT NULL,
  `user_type` int(2) NOT NULL,
  `user_email` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id_pk`, `user_type`, `user_email`) VALUES
(1, 1, 'admin'),
(11, 2, 'tarunjoseph@gmail.com'),
(14, 3, 'seller@gmail.com'),
(15, 2, 'buyer@gmail.com'),
(16, 3, 'shop@gmail.com'),
(17, 2, 'try@gmail.com'),
(18, 2, 'try1@gmail.com'),
(19, 2, 'try2@gmail.com'),
(20, 3, 'se1@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `user_type`
--

CREATE TABLE `user_type` (
  `user_type_id` int(2) NOT NULL,
  `user_type` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_type`
--

INSERT INTO `user_type` (`user_type_id`, `user_type`) VALUES
(1, 'admin'),
(2, 'buyer'),
(3, 'seller');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_details`
--
ALTER TABLE `admin_details`
  ADD PRIMARY KEY (`admin_name_pk`);

--
-- Indexes for table `buyer_details`
--
ALTER TABLE `buyer_details`
  ADD PRIMARY KEY (`buyer_email`);

--
-- Indexes for table `product_details`
--
ALTER TABLE `product_details`
  ADD PRIMARY KEY (`product_id_pk`);

--
-- Indexes for table `seller_details`
--
ALTER TABLE `seller_details`
  ADD PRIMARY KEY (`seller_email`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id_pk`);

--
-- Indexes for table `user_type`
--
ALTER TABLE `user_type`
  ADD PRIMARY KEY (`user_type_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `product_details`
--
ALTER TABLE `product_details`
  MODIFY `product_id_pk` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id_pk` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
