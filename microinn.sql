-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 26, 2018 at 07:33 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `microinn`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `cat_id` int(3) NOT NULL,
  `cat_title` varchar(255) NOT NULL,
  `cat_ref` varchar(255) NOT NULL,
  `is_active` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cat_id`, `cat_title`, `cat_ref`, `is_active`) VALUES
(49, 'Sports Gala', '', 0),
(50, 'Daramas', '', 0),
(52, 'Games', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `comment_id` int(11) NOT NULL,
  `comment_author` varchar(255) NOT NULL,
  `comment_post_id` int(11) DEFAULT NULL,
  `comment_email` varchar(255) DEFAULT NULL,
  `comment_content` text,
  `comment_date` datetime DEFAULT NULL,
  `comment_status` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`comment_id`, `comment_author`, `comment_post_id`, `comment_email`, `comment_content`, `comment_date`, `comment_status`) VALUES
(10, 'asd', 2, 'asdsfa@gmail.com', 'helloword', '2017-12-02 15:26:41', 'approved'),
(11, 'sad', 2, 'asdsfa@gmail.com', 'sadasd', '2017-12-02 15:27:35', 'approved'),
(12, 'asd', 1, 'asdsfa@gmail.com', 'asdasdasf', '2017-12-02 15:28:37', 'approved'),
(13, 'ahmed', 1, 'ahmed@gmail.com', 'hello world', '2017-12-02 15:33:22', 'approved'),
(14, 'fawad', 8, 'asdsfa@gmail.com', 'humsafar <3', '2017-12-02 15:36:13', 'approved');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `post_id` int(3) NOT NULL,
  `post_cat_id` int(11) NOT NULL,
  `post_title` varchar(255) NOT NULL,
  `post_author` varchar(255) NOT NULL,
  `post_user` varchar(255) NOT NULL,
  `post_date` date NOT NULL,
  `post_image1` text NOT NULL,
  `post_image2` text NOT NULL,
  `post_image3` text NOT NULL,
  `post_image4` text NOT NULL,
  `post_image5` text NOT NULL,
  `post_content` text NOT NULL,
  `post_tags` varchar(255) NOT NULL,
  `post_cmnts` int(11) NOT NULL,
  `post_status` varchar(255) NOT NULL DEFAULT 'draft',
  `is_active` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`post_id`, `post_cat_id`, `post_title`, `post_author`, `post_user`, `post_date`, `post_image1`, `post_image2`, `post_image3`, `post_image4`, `post_image5`, `post_content`, `post_tags`, `post_cmnts`, `post_status`, `is_active`) VALUES
(8, 49, 'Cricket', '', '', '2018-10-16', 'aroma1.JPG', 'rep2.JPG', 'ad1.JPG', '', '', '                                                ', '', 0, 'draft', 0),
(9, 49, 'ok', '', '', '2018-11-26', '', '', '', '', '', '        wewe', '', 0, 'draft', 0),
(10, 49, 'hll', '', '', '2018-11-26', '', '', '', '', '', '        asdfadsf', '', 0, 'draft', 0),
(11, 50, 'new record', '', '', '2018-11-26', '', '', '', '', '', '        asdfasdfdf', '', 0, 'draft', 0),
(12, 52, 'new new', '', '', '2018-11-26', '', '', '', '', '', '        safasfasdfads', '', 0, 'draft', 0),
(13, 52, 'hello', '', '', '2018-11-26', '', '', '', '', '', 'asdfasdfasdf        ', '', 0, 'draft', 0),
(14, 52, 'hello', '', '', '2018-11-26', '', '', '', '', '', 'asdfasdfasdf        ', '', 0, 'draft', 0),
(15, 49, 'ok', '', '', '2018-11-26', '', '', '', '', '', '        asdfsdaf', '', 0, 'draft', 0),
(16, 49, 'dsAD', '', '', '2018-11-26', '', '', '', '', '', '        SDsad', '', 0, 'draft', 0),
(17, 49, 'dsAD', '', '', '2018-11-26', '', '', '', '', '', '        SDsad', '', 0, 'draft', 0),
(18, 49, 'asf', '', '', '2018-11-26', '', '', '', '', '', '        sadf', '', 0, 'draft', 0);

-- --------------------------------------------------------

--
-- Table structure for table `post_images`
--

CREATE TABLE `post_images` (
  `id` int(5) NOT NULL,
  `path` varchar(255) NOT NULL,
  `post_id` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `post_images`
--

INSERT INTO `post_images` (`id`, `path`, `post_id`) VALUES
(1, '820.jpg', 0),
(2, '598.jpg', 0),
(3, '732.jpg', 0),
(4, '490.jpg', 0),
(5, '736.jpg', 0),
(6, '133.jpg', 0),
(7, '875.jpg', 0),
(8, '793.jpg', 0),
(9, '70.jpg', 0),
(10, '531.jpg', 0),
(11, '792.jpg', 0),
(12, '327.jpg', 14),
(13, '257.jpg', 1),
(14, '276.jpg', 15),
(15, '227.jpg', 1),
(16, '559.jpg', 17),
(17, '556.jpg', 17),
(18, '992.jpg', 17),
(19, '275.jpg', 18),
(20, '831.jpg', 18);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`comment_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`post_id`);

--
-- Indexes for table `post_images`
--
ALTER TABLE `post_images`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `cat_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `post_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `post_images`
--
ALTER TABLE `post_images`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
