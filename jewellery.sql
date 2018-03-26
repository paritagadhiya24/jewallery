-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 26, 2018 at 01:43 PM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jewellery`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `id` bigint(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_date` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6) ON UPDATE CURRENT_TIMESTAMP(6),
  `updated_date` timestamp(6) NOT NULL DEFAULT '0000-00-00 00:00:00.000000'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`id`, `name`, `password`, `created_date`, `updated_date`) VALUES
(1, 'nehal@gmail.com', '12345', '2018-03-07 16:29:19.109605', '0000-00-00 00:00:00.000000'),
(2, 'b@b.com', 'b', '0000-00-00 00:00:00.000000', '0000-00-00 00:00:00.000000');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cart_id` bigint(20) NOT NULL,
  `customer_id` bigint(20) NOT NULL,
  `product_id` bigint(20) NOT NULL,
  `quantity` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`cart_id`, `customer_id`, `product_id`, `quantity`) VALUES
(2, 1, 57, 1);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_id` bigint(20) NOT NULL,
  `category_name` varchar(255) NOT NULL,
  `status` enum('enable','disable') NOT NULL,
  `image` varchar(500) NOT NULL,
  `created_date` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6) ON UPDATE CURRENT_TIMESTAMP(6),
  `updated_date` timestamp(6) NOT NULL DEFAULT '0000-00-00 00:00:00.000000'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `category_name`, `status`, `image`, `created_date`, `updated_date`) VALUES
(3, 'diamond', 'enable', 'picture/asdf.jpg', '2018-03-10 10:48:33.292607', '0000-00-00 00:00:00.000000'),
(4, 'gold', 'disable', 'picture/510449PAAAAA00_thumbnail.jpg', '2018-03-09 09:47:34.835249', '0000-00-00 00:00:00.000000'),
(5, 'silver', 'enable', 'picture/dtg.jpeg', '2018-03-10 04:59:07.192958', '0000-00-00 00:00:00.000000'),
(6, 'platinum', 'enable', 'picture/y.jpeg', '2018-03-10 04:59:50.997835', '0000-00-00 00:00:00.000000');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `customer_id` bigint(20) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(50) NOT NULL,
  `gender` enum('male','female') NOT NULL,
  `date_of_birth` varchar(20) NOT NULL,
  `address` varchar(500) NOT NULL,
  `city` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `pincode` int(10) NOT NULL,
  `phone_number` int(20) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `image` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`customer_id`, `first_name`, `last_name`, `user_name`, `email`, `password`, `gender`, `date_of_birth`, `address`, `city`, `state`, `country`, `pincode`, `phone_number`, `created_date`, `updated_date`, `image`) VALUES
(1, 'nehal', 'gadhiya', 'nehalgadhiya', 'nehal@gmail.com', '123456', 'female', '03/06/2008', 'ahmedabad', 'ahmedabad', 'gujarat', 'India', 362592, 2147483647, '2018-03-24 09:44:38', '0000-00-00 00:00:00', 'picture/abc.jpg'),
(2, 'nidhi', 'patel', 'nidhipatel', 'nidhi@gmail.com', '123456', 'female', '24/11/1995', 'baroda', 'baroda', 'gujarat', 'India', 365440, 1234567890, '2018-03-10 10:22:32', '0000-00-00 00:00:00', 'picture/user3-128x128.jpg'),
(3, 'priya', 'patel', 'priya patel', 'priya@gmail.com', '123456', 'female', '27/12/1994', 'rajkot kalvad road', 'rajkot', 'gujarat', 'Canada', 582555, 1234567890, '2018-03-10 10:14:56', '0000-00-00 00:00:00', 'picture/user4-128x128.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `product_id` bigint(20) NOT NULL,
  `customer_id` bigint(20) NOT NULL,
  `review` varchar(255) NOT NULL,
  `created_date` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6) ON UPDATE CURRENT_TIMESTAMP(6),
  `updated_date` timestamp(6) NOT NULL DEFAULT '0000-00-00 00:00:00.000000'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`product_id`, `customer_id`, `review`, `created_date`, `updated_date`) VALUES
(57, 1, '       asdfgcvnbmnm', '2018-03-22 10:49:07.477412', '0000-00-00 00:00:00.000000');

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `order_id` bigint(20) NOT NULL,
  `customer_id` bigint(20) NOT NULL,
  `product_id` bigint(20) NOT NULL,
  `quantity` int(5) NOT NULL,
  `netprice` decimal(10,0) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`order_id`, `customer_id`, `product_id`, `quantity`, `netprice`, `created_date`, `updated_date`) VALUES
(42, 1, 1, 1, '50000', '2018-03-15 14:51:50', '0000-00-00 00:00:00'),
(43, 1, 4, 2, '120000', '2018-03-15 14:51:50', '0000-00-00 00:00:00'),
(44, 1, 18, 3, '105000', '2018-03-16 05:21:45', '0000-00-00 00:00:00'),
(45, 1, 16, 2, '100000', '2018-03-16 05:24:16', '0000-00-00 00:00:00'),
(46, 1, 31, 1, '90000', '2018-03-19 09:06:35', '0000-00-00 00:00:00'),
(47, 1, 4, 2, '120000', '2018-03-19 09:06:35', '0000-00-00 00:00:00'),
(50, 2, 25, 1, '35000', '2018-03-21 13:36:32', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `orderaddress`
--

CREATE TABLE `orderaddress` (
  `orderadd_id` bigint(20) NOT NULL,
  `order_id` bigint(20) NOT NULL,
  `address_type` enum('manual','save') NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone_number` int(20) NOT NULL,
  `created_date` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6) ON UPDATE CURRENT_TIMESTAMP(6),
  `updated_date` timestamp(6) NOT NULL DEFAULT '0000-00-00 00:00:00.000000'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orderaddress`
--

INSERT INTO `orderaddress` (`orderadd_id`, `order_id`, `address_type`, `address`, `phone_number`, `created_date`, `updated_date`) VALUES
(1, 1, 'save', 'baroda', 1234567890, '0000-00-00 00:00:00.000000', '0000-00-00 00:00:00.000000');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `payment_id` bigint(20) NOT NULL,
  `customer_id` bigint(20) NOT NULL,
  `address` varchar(500) NOT NULL,
  `amount` int(255) NOT NULL,
  `status` enum('success','fail') NOT NULL,
  `created_date` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6) ON UPDATE CURRENT_TIMESTAMP(6),
  `update_date` timestamp(6) NOT NULL DEFAULT '0000-00-00 00:00:00.000000'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `product_id` bigint(20) NOT NULL,
  `subcategory_id` bigint(20) NOT NULL,
  `category_id` bigint(20) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `status` enum('enable','disable') NOT NULL,
  `quantity` bigint(20) NOT NULL,
  `carat` varchar(255) NOT NULL,
  `weight` decimal(65,0) NOT NULL,
  `image` varchar(500) NOT NULL,
  `price` bigint(20) NOT NULL,
  `product_description` varchar(500) NOT NULL,
  `created_date` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6) ON UPDATE CURRENT_TIMESTAMP(6),
  `updated_date` timestamp(6) NOT NULL DEFAULT '0000-00-00 00:00:00.000000'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `subcategory_id`, `category_id`, `product_name`, `status`, `quantity`, `carat`, `weight`, `image`, `price`, `product_description`, `created_date`, `updated_date`) VALUES
(1, 3, 5, 'ring', 'enable', 1, '9k', '2', 'picture/image_8f56c80f.jpeg', 50000, '<p>silver ring</p>\r\n', '2018-03-26 06:13:20.783814', '0000-00-00 00:00:00.000000'),
(2, 7, 4, 'earrings', 'enable', 1, '18k', '2', 'picture/500006SMAABB22_thumbnail.jpg', 75000, '', '2018-03-08 08:46:49.767637', '0000-00-00 00:00:00.000000'),
(3, 5, 4, 'bangles', 'disable', 1, '14k', '4', 'picture/511098VLFQ2A00_thumbnail.jpg', 95000, '', '2018-03-08 09:23:32.365209', '0000-00-00 00:00:00.000000'),
(4, 2, 4, 'bracelet', 'enable', 2, '22k', '5', 'picture/512017BRZFAA00_0.jpg', 60000, '', '2018-03-08 09:25:46.837446', '0000-00-00 00:00:00.000000'),
(5, 6, 4, 'pendants', 'disable', 1, '10k', '3', 'picture/501002PAJAAA02_thumbnail.jpg', 55000, '', '2018-03-08 09:27:06.912386', '0000-00-00 00:00:00.000000'),
(6, 4, 3, 'necklace', 'disable', 1, '18k', '6', 'picture/502212NGIAAA37_thumbnail.jpg', 85000, '', '2018-03-08 09:28:33.932339', '0000-00-00 00:00:00.000000'),
(7, 1, 3, 'mangalsutra', 'disable', 1, '22k', '2', 'picture/503416YGSAAA32_0.jpg', 35000, '', '2018-03-08 09:29:32.354442', '0000-00-00 00:00:00.000000'),
(8, 3, 5, 'ring', 'disable', 1, '18k', '4', 'picture/aro-anillo-en-plata-950-precio-unidad-60-soles-D_NQ_NP_695221-MPE20751005607_062016-F.jpg', 45000, '<p>silver ring</p>\r\n', '2018-03-26 06:02:58.097119', '0000-00-00 00:00:00.000000'),
(9, 7, 4, 'earrings', 'enable', 1, '18k', '4', 'picture/500019SRAABA12_thumbnail.jpg', 35000, '', '2018-03-09 04:51:45.722880', '0000-00-00 00:00:00.000000'),
(10, 5, 4, 'bangles', 'disable', 1, '24k', '3', 'picture/512313VAER2A00_thumbnail.jpg', 65000, '', '2018-03-09 04:53:09.741427', '0000-00-00 00:00:00.000000'),
(11, 2, 4, 'bracelet', 'enable', 1, '14k', '2', 'picture/512815BEGHAA00_2.jpg', 78000, '', '2018-03-09 04:54:44.761194', '0000-00-00 00:00:00.000000'),
(12, 6, 4, 'pendants', 'disable', 1, '10k', '4', 'picture/501002PFPAAA01_thumbnail.jpg', 46000, '', '2018-03-09 04:56:07.628540', '0000-00-00 00:00:00.000000'),
(13, 4, 3, 'necklace', 'enable', 1, '22k', '3', 'picture/502215NAHFAA32_2.jpg', 65000, '', '2018-03-09 04:56:52.307018', '0000-00-00 00:00:00.000000'),
(14, 1, 3, 'mangalsutra', 'disable', 1, '9k', '5', 'picture/503416YGUAAA32_0.jpg', 88000, '', '2018-03-09 04:57:54.691528', '0000-00-00 00:00:00.000000'),
(15, 3, 5, 'ring', 'enable', 1, '18k', '3', 'picture/vb.jpeg', 45000, '', '2018-03-10 04:54:15.191645', '0000-00-00 00:00:00.000000'),
(16, 7, 4, 'earrings', 'enable', 2, '18k', '4', 'picture/501169SBIABA04_thumbnail.jpg', 50000, '', '2018-03-09 10:21:56.566321', '0000-00-00 00:00:00.000000'),
(17, 5, 4, 'bangles', 'disable', 2, '22k', '6', 'picture/512214VANR1A00_thumbnail.jpg', 46000, '', '2018-03-09 05:01:32.777165', '0000-00-00 00:00:00.000000'),
(18, 2, 4, 'bracelet', 'disable', 3, '22k', '2', 'picture/552811BNDBAA22_thumbnail.jpg', 35000, '', '2018-03-09 05:02:20.029648', '0000-00-00 00:00:00.000000'),
(19, 6, 4, 'pendants', 'enable', 1, '9k', '3', 'picture/501002PPAAAA12_thumbnail.jpg', 75000, '', '2018-03-09 05:03:17.671749', '0000-00-00 00:00:00.000000'),
(20, 4, 3, 'necklace', 'disable', 1, '14k', '4', 'picture/502215NAIDAB32_2.jpg', 46000, '', '2018-03-09 05:04:35.734286', '0000-00-00 00:00:00.000000'),
(21, 1, 3, 'mangalsutra', 'enable', 2, '24k', '2', 'picture/502Q152AGABA32_2.jpg', 80000, '', '2018-03-09 05:05:15.327156', '0000-00-00 00:00:00.000000'),
(22, 3, 5, 'ring', 'enable', 1, '10k', '3', 'picture/u.jpeg', 67000, '', '2018-03-22 07:18:48.360334', '0000-00-00 00:00:00.000000'),
(23, 7, 4, 'earrings', 'enable', 1, '22k', '1', 'picture/1558177-large_default.jpg', 90000, '', '2018-03-09 05:08:03.760652', '0000-00-00 00:00:00.000000'),
(24, 5, 4, 'bangles', 'enable', 1, '14k', '1', 'picture/500067FLALAA02_thumbnail.jpg', 70000, '', '2018-03-09 05:08:45.287925', '0000-00-00 00:00:00.000000'),
(25, 2, 4, 'bracelet', 'enable', 1, '18k', '1', 'picture/502617BDOFAA00_0.jpg', 35000, '', '2018-03-09 05:09:40.387221', '0000-00-00 00:00:00.000000'),
(26, 6, 4, 'pendants', 'enable', 1, '9k', '4', 'picture/501066PMDAAA02_thumbnail.jpg', 46000, '', '2018-03-09 05:10:34.784517', '0000-00-00 00:00:00.000000'),
(27, 4, 3, 'necklace', 'disable', 1, '14k', '5', 'picture/502215NAADAA32_2.jpg', 40000, '', '2018-03-09 05:11:51.396252', '0000-00-00 00:00:00.000000'),
(28, 1, 3, 'mangalsutra', 'enable', 1, '9k', '3', 'picture/503416YGWAAA32_0.jpg', 80000, '', '2018-03-09 05:12:50.407837', '0000-00-00 00:00:00.000000'),
(29, 3, 5, 'ring', 'disable', 1, '9k', '2', 'picture/cvb.jpg', 46000, '', '2018-03-10 04:52:18.207040', '0000-00-00 00:00:00.000000'),
(30, 7, 4, 'earrings', 'enable', 1, '14k', '2', 'picture/51T442BIJCAA00_0.jpg', 70000, '', '2018-03-09 10:20:38.775298', '0000-00-00 00:00:00.000000'),
(31, 5, 4, 'bangles', 'enable', 1, '24k', '3', 'picture/510901VAAR2A00_thumbnail.jpg', 90000, '', '2018-03-09 05:24:59.238965', '0000-00-00 00:00:00.000000'),
(32, 2, 4, 'bracelet', 'disable', 1, '14k', '4', 'picture/552811VNHA1A37_thumbnail.jpg', 60000, '', '2018-03-10 05:29:25.942225', '0000-00-00 00:00:00.000000'),
(33, 6, 4, 'pendants', 'disable', 1, '22k', '4', 'picture/510478PDAAAA00_thumbnail.jpg', 67000, '', '2018-03-09 05:27:22.918217', '0000-00-00 00:00:00.000000'),
(34, 4, 3, 'necklace', 'enable', 1, '14k', '1', 'picture/5027152DJABA32_2.jpg', 50000, '', '2018-03-09 05:28:24.631925', '0000-00-00 00:00:00.000000'),
(35, 1, 3, 'mangalsutra', 'enable', 1, '14k', '2', 'picture/503416YGQAAA32_0.jpg', 88000, '', '2018-03-09 05:29:42.751663', '0000-00-00 00:00:00.000000'),
(36, 3, 5, 'ring', 'enable', 1, '14k', '3', 'picture/c.jpeg', 35000, '', '2018-03-22 07:19:03.445560', '0000-00-00 00:00:00.000000'),
(37, 7, 4, 'earrings', 'disable', 1, '14k', '3', 'picture/500071SVAABA02_thumbnail.jpg', 46000, '', '2018-03-09 10:23:21.929671', '0000-00-00 00:00:00.000000'),
(38, 5, 4, 'bangles', 'disable', 1, '22k', '5', 'picture/512113VZUR2A00_thumbnail.jpg', 78000, '', '2018-03-09 05:33:37.069355', '0000-00-00 00:00:00.000000'),
(39, 2, 4, 'bracelet', 'disable', 1, '18k', '2', 'picture/512815BDHFAA00_2.jpg', 90000, '', '2018-03-09 05:34:35.767751', '0000-00-00 00:00:00.000000'),
(40, 6, 4, 'pendants', 'enable', 1, '22k', '4', 'picture/512814PHAAAA00_thumbnail.jpg', 55000, '', '2018-03-09 05:35:49.197080', '0000-00-00 00:00:00.000000'),
(41, 4, 3, 'necklace', 'enable', 1, '24k', '4', 'picture/5027152AWABA32_2.jpg', 60000, '', '2018-03-09 05:36:52.080790', '0000-00-00 00:00:00.000000'),
(42, 1, 3, 'mangalsutra', 'enable', 2, '10k', '5', 'picture/513016YCMGAA00_0.jpg', 70000, '', '2018-03-18 08:38:49.498153', '0000-00-00 00:00:00.000000'),
(43, 3, 5, 'ring', 'enable', 1, '9k', '1', 'picture/500060SAAAGAPL_thumbnail.jpg', 30000, '', '2018-03-10 04:49:32.940350', '0000-00-00 00:00:00.000000'),
(44, 7, 4, 'earrings', 'enable', 1, '22k', '3', 'picture/500357SCAABA02_thumbnail.jpg', 46000, '', '2018-03-09 10:22:37.828393', '0000-00-00 00:00:00.000000'),
(45, 5, 4, 'bangles', 'disable', 1, '14k', '3', 'picture/dfdg.jpeg', 88000, '', '2018-03-09 05:44:55.474769', '0000-00-00 00:00:00.000000'),
(46, 2, 4, 'bracelet', 'disable', 1, '10k', '4', 'picture/511052VSGQ2A00_thumbnail.jpg', 67000, '', '2018-03-10 05:28:22.013313', '0000-00-00 00:00:00.000000'),
(47, 6, 4, 'pendants', 'enable', 2, '14k', '3', 'picture/510900PKAAAA00_thumbnail.jpg', 46000, '', '2018-03-21 11:36:11.049141', '0000-00-00 00:00:00.000000'),
(48, 4, 3, 'necklace', 'disable', 1, '18k', '5', 'picture/5027152DDABA32_2.jpg', 80000, '', '2018-03-09 05:48:18.028063', '0000-00-00 00:00:00.000000'),
(49, 1, 3, 'mangalsutra', 'enable', 1, '9k', '2', 'picture/513016YDMEAA00_0.jpg', 65000, '', '2018-03-09 05:48:51.120804', '0000-00-00 00:00:00.000000'),
(50, 9, 6, 'ring', 'enable', 1, '9k', '2', 'picture/31aAQtGEqEL._UX395_.jpg', 50000, '', '2018-03-10 05:12:36.715582', '0000-00-00 00:00:00.000000'),
(51, 10, 6, 'earrings', 'disable', 1, '18k', '4', 'picture/51YeaJ-uUaL._UY395_.jpg', 75000, '', '2018-03-10 05:23:06.971594', '0000-00-00 00:00:00.000000'),
(52, 9, 6, 'ring', 'disable', 1, '14k', '2', 'picture/41k9qMNCooL._UY395_.jpg', 60000, '', '2018-03-10 05:24:06.314098', '0000-00-00 00:00:00.000000'),
(54, 7, 4, 'earrings', 'enable', 1, '10k', '4', 'picture/500925SIAABA04_thumbnail.jpg', 48000, '', '2018-03-21 12:03:14.106792', '0000-00-00 00:00:00.000000'),
(55, 6, 4, 'pendants', 'enable', 1, '9k', '3', 'picture/510478PDAAAA00_thumbnail.jpg', 78000, '', '2018-03-21 12:12:11.331524', '0000-00-00 00:00:00.000000'),
(56, 5, 4, 'bangles', 'enable', 1, '14k', '4', 'picture/xcxcf.jpeg', 45000, '', '2018-03-21 12:37:46.623510', '0000-00-00 00:00:00.000000'),
(57, 7, 4, 'earrings', 'enable', 1, '9k', '4', 'picture/500063SLAABA13_thumbnail.jpg', 80000, 'nnnnnnnnnnnnnn', '2018-03-21 12:56:31.222888', '0000-00-00 00:00:00.000000'),
(58, 7, 4, 'earrings', 'enable', 1, '9k', '4', 'picture/500217SSAAGA12_thumbnail.jpg', 80000, 'nnnnnnnnnnnnnn', '2018-03-22 05:27:32.887685', '0000-00-00 00:00:00.000000'),
(59, 1, 3, 'mangalsutra', 'enable', 1, '9k', '2', 'picture/513016YDUGAA00_0.jpg', 67000, '<p>Delightful round double embellishment ring made in gold plated silver and studded with pearl</p>\r\n', '2018-03-22 06:10:55.230450', '0000-00-00 00:00:00.000000');

-- --------------------------------------------------------

--
-- Table structure for table `subcategory`
--

CREATE TABLE `subcategory` (
  `subcategory_id` bigint(20) NOT NULL,
  `category_id` bigint(20) NOT NULL,
  `subcategory_name` varchar(255) NOT NULL,
  `status` enum('enable','disable') NOT NULL,
  `created_date` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6) ON UPDATE CURRENT_TIMESTAMP(6),
  `updated_date` timestamp(6) NOT NULL DEFAULT '0000-00-00 00:00:00.000000'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subcategory`
--

INSERT INTO `subcategory` (`subcategory_id`, `category_id`, `subcategory_name`, `status`, `created_date`, `updated_date`) VALUES
(1, 3, 'mangalsutra', 'enable', '2018-03-08 06:18:30.866033', '0000-00-00 00:00:00.000000'),
(2, 4, 'bracelet', 'enable', '2018-03-08 06:25:48.277202', '0000-00-00 00:00:00.000000'),
(3, 5, 'ring', 'enable', '2018-03-08 06:19:08.976900', '0000-00-00 00:00:00.000000'),
(4, 3, 'necklace', 'enable', '2018-03-08 06:19:19.428919', '0000-00-00 00:00:00.000000'),
(5, 4, 'bangles', 'enable', '2018-03-08 06:19:31.019739', '0000-00-00 00:00:00.000000'),
(6, 4, 'pendants', 'enable', '2018-03-08 06:25:44.548795', '0000-00-00 00:00:00.000000'),
(7, 4, 'earrings', 'enable', '2018-03-08 06:21:18.535128', '0000-00-00 00:00:00.000000'),
(8, 4, 'ring', 'enable', '2018-03-10 04:47:11.477198', '0000-00-00 00:00:00.000000'),
(9, 6, 'ring', 'enable', '2018-03-10 05:10:31.820761', '0000-00-00 00:00:00.000000'),
(10, 6, 'earrings', 'enable', '2018-03-10 05:22:20.876296', '0000-00-00 00:00:00.000000');

-- --------------------------------------------------------

--
-- Table structure for table `wishlist`
--

CREATE TABLE `wishlist` (
  `wishlist_id` bigint(20) NOT NULL,
  `product_id` bigint(20) NOT NULL,
  `customer_id` bigint(20) NOT NULL,
  `created_date` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6) ON UPDATE CURRENT_TIMESTAMP(6),
  `updated_date` timestamp(6) NOT NULL DEFAULT '0000-00-00 00:00:00.000000'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_login`
--
ALTER TABLE `admin_login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cart_id`),
  ADD KEY `customer_id` (`customer_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`customer_id`),
  ADD KEY `customer_id` (`customer_id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD KEY `product_id` (`product_id`),
  ADD KEY `customer_id` (`customer_id`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `customer_id` (`customer_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `orderaddress`
--
ALTER TABLE `orderaddress`
  ADD PRIMARY KEY (`orderadd_id`),
  ADD KEY `order_id` (`order_id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`payment_id`),
  ADD KEY `customer_id` (`customer_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`),
  ADD KEY `subcategory_id` (`subcategory_id`),
  ADD KEY `category_id` (`category_id`);

--
-- Indexes for table `subcategory`
--
ALTER TABLE `subcategory`
  ADD PRIMARY KEY (`subcategory_id`),
  ADD KEY `category_id` (`category_id`);

--
-- Indexes for table `wishlist`
--
ALTER TABLE `wishlist`
  ADD PRIMARY KEY (`wishlist_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_login`
--
ALTER TABLE `admin_login`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cart_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `category_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `customer_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `order_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `orderaddress`
--
ALTER TABLE `orderaddress`
  MODIFY `orderadd_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `payment_id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `product_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT for table `subcategory`
--
ALTER TABLE `subcategory`
  MODIFY `subcategory_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `wishlist`
--
ALTER TABLE `wishlist`
  MODIFY `wishlist_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `cart_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `customer` (`customer_id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `cart_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `product` (`product_id`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Constraints for table `feedback`
--
ALTER TABLE `feedback`
  ADD CONSTRAINT `feedback_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `product` (`product_id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `feedback_ibfk_2` FOREIGN KEY (`customer_id`) REFERENCES `customer` (`customer_id`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Constraints for table `order`
--
ALTER TABLE `order`
  ADD CONSTRAINT `order_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `product` (`product_id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `order_ibfk_3` FOREIGN KEY (`customer_id`) REFERENCES `customer` (`customer_id`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Constraints for table `payment`
--
ALTER TABLE `payment`
  ADD CONSTRAINT `payment_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `customer` (`customer_id`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`subcategory_id`) REFERENCES `subcategory` (`subcategory_id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `product_ibfk_2` FOREIGN KEY (`category_id`) REFERENCES `category` (`category_id`) ON DELETE CASCADE ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
