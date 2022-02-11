-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 11, 2022 at 05:44 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `food-order`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `id` int(10) UNSIGNED NOT NULL,
  `full_name` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`id`, `full_name`, `username`, `password`) VALUES
(24, 'divya', 'dvd', 'b59c67bf196a4758191e42f76670ceba'),
(28, 'appu', 'appu', '622622b00805c54040dd9a15674a5117');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_category`
--

CREATE TABLE `tbl_category` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(100) NOT NULL,
  `image_name` varchar(100) NOT NULL,
  `featured` varchar(10) NOT NULL,
  `active` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_category`
--

INSERT INTO `tbl_category` (`id`, `title`, `image_name`, `featured`, `active`) VALUES
(22, 'pizza', 'Food_Category_25.jpg', 'Yes', 'Yes'),
(23, 'burger', 'Food_Category_496.jpg', 'Yes', 'Yes'),
(24, 'momos', 'Food_Category_711.jpg', 'Yes', 'Yes'),
(25, 'sandwich', 'Food_Category_48.jfif', 'No', 'Yes'),
(26, 'snacks', 'Food_Category_587.jpg', 'No', 'Yes'),
(27, 'south indian', 'Food_Category_896.jpg', 'No', 'Yes'),
(28, 'sea food', 'Food_Category_602.jpg', 'no', 'yes'),
(29, 'Punjabi food', 'Food_Category_945.jpg', 'Yes', 'Yes'),
(30, 'Non-veg', 'Food_Category_622.jpg', 'Yes', 'Yes');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_food`
--

CREATE TABLE `tbl_food` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `image_name` varchar(100) NOT NULL,
  `category_id` int(10) UNSIGNED NOT NULL,
  `featured` varchar(10) NOT NULL,
  `active` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_food`
--

INSERT INTO `tbl_food` (`id`, `title`, `description`, `price`, `image_name`, `category_id`, `featured`, `active`) VALUES
(12, 'Marghrita', 'Made with Italian Sauce, Chicken, and organice vegetables.', '249.00', 'Food_Name_261.jpg', 22, 'yes', 'yes'),
(14, 'Fried momos', 'Made with organic vegetables.', '149.00', 'Food_Name_800.jpg', 24, 'yes', 'yes'),
(18, 'Punjabi Thali', 'Punjabi Thali combo ', '399.00', 'Food_Name_824.jpg', 29, 'yes', 'yes'),
(19, 'sandwich', 'maharaja sandwich', '149.00', 'Food_Name_210.jfif', 25, 'yes', 'yes'),
(20, 'omlet', 'made with organic vegetables omlet', '65.00', 'Food_Name_262.jpg', 30, 'yes', 'yes'),
(21, 'sea food', 'fresh sea food', '80.00', 'Food_Name_756.jpg', 28, 'yes', 'yes'),
(22, 'Dumplings', '', '110.00', 'Food_Name_144.jpg', 24, 'yes', 'yes'),
(23, 'Dosa', 'Paper masala dosa', '149.00', 'Food_Name_154.jpg', 27, 'yes', 'yes');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_order`
--

CREATE TABLE `tbl_order` (
  `id` int(10) UNSIGNED NOT NULL,
  `food` varchar(100) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `qty` int(11) NOT NULL,
  `total` decimal(10,2) NOT NULL,
  `order_date` datetime NOT NULL,
  `status` varchar(50) NOT NULL,
  `customer_name` varchar(100) NOT NULL,
  `customer_contact` varchar(20) NOT NULL,
  `customer_email` varchar(150) NOT NULL,
  `customer_address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_order`
--

INSERT INTO `tbl_order` (`id`, `food`, `price`, `qty`, `total`, `order_date`, `status`, `customer_name`, `customer_contact`, `customer_email`, `customer_address`) VALUES
(1, 'Marghrita', '249.00', 1, '249.00', '2022-02-02 05:40:05', 'On Delivery', 'gaurav', '9978645678', 'gauravkumaragarwal19@gnu.ac.in', 'abc'),
(2, 'sandwich', '149.00', 5, '745.00', '2022-02-02 05:41:46', 'Delivered', 'gaurav', '9978645678', 'gauravkumar4640@gmail.com', 'abcfr'),
(3, 'Dumplings', '110.00', 6, '660.00', '2022-02-02 05:43:55', 'On Delivery', 'dvdddd', '9978645678', 'gauravkumar4640@gmail.com', 'itonf utieo ute'),
(5, 'Marghrita', '249.00', 3, '747.00', '2022-02-03 05:01:51', 'Ordered', 'dvd', '9978645678', 'gauravkumar4640@gmail.com', 'urbiog ogogo oto'),
(6, 'Marghrita', '249.00', 1, '249.00', '2022-02-06 06:16:05', 'Ordered', 'gaurav', '9978645678', 'gauravkumar4640@gmail.com', 'th gj hhjb ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_category`
--
ALTER TABLE `tbl_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_food`
--
ALTER TABLE `tbl_food`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_order`
--
ALTER TABLE `tbl_order`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `tbl_category`
--
ALTER TABLE `tbl_category`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `tbl_food`
--
ALTER TABLE `tbl_food`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `tbl_order`
--
ALTER TABLE `tbl_order`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
