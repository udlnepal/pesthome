-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 23, 2018 at 10:30 AM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pesthome`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_appointment`
--

CREATE TABLE `add_appointment` (
  `app_id` int(50) NOT NULL,
  `firstname` varchar(150) NOT NULL,
  `email` varchar(200) NOT NULL,
  `date` varchar(100) NOT NULL,
  `phone` bigint(200) NOT NULL,
  `app_status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `add_appointment`
--

INSERT INTO `add_appointment` (`app_id`, `firstname`, `email`, `date`, `phone`, `app_status`) VALUES
(3, 'Kathmandu', 'timsumit@gmail.com', '11/08/2018', 2147483647, 'confirmed'),
(4, 'Kathmandu', 'timsumit@gmail.com', '11/29/2018', 1235, 'cancelled'),
(5, 'llllll', 'admin@yupnep.com', '11/15/2018', 9841361466, 'cancelled');

-- --------------------------------------------------------

--
-- Table structure for table `contact_about`
--

CREATE TABLE `contact_about` (
  `cont_id` int(50) NOT NULL,
  `map_plugin` blob NOT NULL,
  `address` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `phone` bigint(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact_about`
--

INSERT INTO `contact_about` (`cont_id`, `map_plugin`, `address`, `email`, `phone`) VALUES
(1, 0x3c696672616d65207372633d2268747470733a2f2f7777772e676f6f676c652e636f6d2f6d6170732f656d6265643f70623d21316d313821316d313221316d33213164333533322e3937393632353833323132363721326438352e333037303732333134363139343221336432372e363837303234353832383030333121326d3321316630213266302133663021336d322131693130323421326937363821346631332e3121336d3321316d3221317330783339656231383461323831653734393125334130783936613564626661653464653236642132734d696461732b546563686e6f6c6f676965732b5076742e2b4c54642135653021336d32213173656e2132736e7021347631353432313036363939363536222077696474683d2236303022206865696768743d2234353022206672616d65626f726465723d223022207374796c653d22626f726465723a302220616c6c6f7766756c6c73637265656e3e3c2f696672616d653e, 'sanepa', 'sumit@sumit.com', 9876543210),
(2, 0x73616466, 'sdfaa', 'sadfsda', 0);

-- --------------------------------------------------------

--
-- Table structure for table `create_page`
--

CREATE TABLE `create_page` (
  `page_id` int(50) NOT NULL,
  `page_title` varchar(255) DEFAULT NULL,
  `page_content` blob,
  `page_image_name` varchar(255) DEFAULT NULL,
  `page_image_url` varchar(255) DEFAULT NULL,
  `slug` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `create_page`
--

INSERT INTO `create_page` (`page_id`, `page_title`, `page_content`, `page_image_name`, `page_image_url`, `slug`) VALUES
(10, 'About Us', 0x3c703e546869732069732061626f75742075732e204120717569636b2062726f776e20666f78206a756d7073206f76657220746865206c617a7920646f672e3c2f703e0d0a, 'blog_image3.png', 'E:/xampp/htdocs/pesthome/site_assets/uploads/blog/blog_image3.png', 'about-us'),
(11, 'Pest Control', 0x3c703e546869732070616765206465616c7320776974682064657461696c732061626f7574207065737420636f6e74726f6c2e3c2f703e0d0a, 'blog_image4.png', 'E:/xampp/htdocs/pesthome/site_assets/uploads/blog/blog_image4.png', 'pest-control');

-- --------------------------------------------------------

--
-- Table structure for table `create_post`
--

CREATE TABLE `create_post` (
  `post_id` int(50) NOT NULL,
  `post_title` varchar(255) DEFAULT NULL,
  `post_content` blob,
  `post_author` varchar(150) NOT NULL,
  `post_image_name` varchar(255) DEFAULT NULL,
  `post_image_url` varchar(255) DEFAULT NULL,
  `slug` varchar(255) NOT NULL,
  `post_date` varchar(255) DEFAULT NULL,
  `post_status` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `inquiry`
--

CREATE TABLE `inquiry` (
  `inquiry_id` int(150) NOT NULL,
  `name` varchar(150) NOT NULL,
  `email` varchar(200) NOT NULL,
  `subject` varchar(200) NOT NULL,
  `message` varchar(350) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `menu_setup`
--

CREATE TABLE `menu_setup` (
  `ms_id` int(100) NOT NULL,
  `ms_page_id` int(100) NOT NULL,
  `ms_title` varchar(150) NOT NULL,
  `ms_order` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menu_setup`
--

INSERT INTO `menu_setup` (`ms_id`, `ms_page_id`, `ms_title`, `ms_order`) VALUES
(6, 10, 'About ', 1);

-- --------------------------------------------------------

--
-- Table structure for table `services_setup`
--

CREATE TABLE `services_setup` (
  `service_id` int(50) NOT NULL,
  `service_content` blob NOT NULL,
  `service_title` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `slider_setup`
--

CREATE TABLE `slider_setup` (
  `slider_id` int(75) NOT NULL,
  `slider_image_name` varchar(150) NOT NULL,
  `slider_image_url` varchar(250) NOT NULL,
  `slider_title` varchar(200) NOT NULL,
  `slider_subtitle` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(15) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `email` varchar(250) NOT NULL,
  `password` varchar(150) NOT NULL,
  `updated_at` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `firstname`, `email`, `password`, `updated_at`) VALUES
(17, 'pratap', 'jung@junge.com', '81dc9bdb52d04dc20036dbd8313ed055', '2018-11-11 11:40:34'),
(18, 'Raman', 'raman@test.com', '81dc9bdb52d04dc20036dbd8313ed055', '2018-11-11 11:51:30'),
(19, 'sumit', 'timsumit@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '2018-11-11 12:11:15'),
(20, 'sumit', 'sumit@sumit.com', '81dc9bdb52d04dc20036dbd8313ed055', '2018-11-13 10:44:57');

-- --------------------------------------------------------

--
-- Table structure for table `vmi_setup`
--

CREATE TABLE `vmi_setup` (
  `vmi_id` int(50) NOT NULL,
  `vision` varchar(500) NOT NULL,
  `mission` varchar(500) NOT NULL,
  `introduction` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vmi_setup`
--

INSERT INTO `vmi_setup` (`vmi_id`, `vision`, `mission`, `introduction`) VALUES
(1, 'sadfadf', 'sadfsad', 'sadfsadf');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add_appointment`
--
ALTER TABLE `add_appointment`
  ADD PRIMARY KEY (`app_id`);

--
-- Indexes for table `contact_about`
--
ALTER TABLE `contact_about`
  ADD PRIMARY KEY (`cont_id`);

--
-- Indexes for table `create_page`
--
ALTER TABLE `create_page`
  ADD PRIMARY KEY (`page_id`);

--
-- Indexes for table `create_post`
--
ALTER TABLE `create_post`
  ADD PRIMARY KEY (`post_id`);

--
-- Indexes for table `inquiry`
--
ALTER TABLE `inquiry`
  ADD PRIMARY KEY (`inquiry_id`);

--
-- Indexes for table `menu_setup`
--
ALTER TABLE `menu_setup`
  ADD PRIMARY KEY (`ms_id`);

--
-- Indexes for table `services_setup`
--
ALTER TABLE `services_setup`
  ADD PRIMARY KEY (`service_id`) USING BTREE;

--
-- Indexes for table `slider_setup`
--
ALTER TABLE `slider_setup`
  ADD PRIMARY KEY (`slider_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vmi_setup`
--
ALTER TABLE `vmi_setup`
  ADD PRIMARY KEY (`vmi_id`) USING BTREE;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `add_appointment`
--
ALTER TABLE `add_appointment`
  MODIFY `app_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `contact_about`
--
ALTER TABLE `contact_about`
  MODIFY `cont_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `create_page`
--
ALTER TABLE `create_page`
  MODIFY `page_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `create_post`
--
ALTER TABLE `create_post`
  MODIFY `post_id` int(50) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `inquiry`
--
ALTER TABLE `inquiry`
  MODIFY `inquiry_id` int(150) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `menu_setup`
--
ALTER TABLE `menu_setup`
  MODIFY `ms_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `services_setup`
--
ALTER TABLE `services_setup`
  MODIFY `service_id` int(50) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `slider_setup`
--
ALTER TABLE `slider_setup`
  MODIFY `slider_id` int(75) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `vmi_setup`
--
ALTER TABLE `vmi_setup`
  MODIFY `vmi_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
