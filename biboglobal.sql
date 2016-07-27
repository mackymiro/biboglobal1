-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 27, 2016 at 05:51 PM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `biboglobal`
--

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` int(11) NOT NULL,
  `title` varchar(150) DEFAULT NULL,
  `slug` varchar(150) DEFAULT NULL,
  `content` text NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `title`, `slug`, `content`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'man on the moon', 'man-on-the-moon', 'there was a man on the moon last night when i look up into the sky.', 1, '2016-07-27 13:33:49', '2016-07-27 09:45:10'),
(2, 'back to earth', 'back-to-earth', 'im back now to earth from outer space and i will be back', 1, '2016-07-27 12:35:13', '2016-07-27 10:35:13'),
(3, 'president rodrigo duterte', 'president-rodrigo-duterte', 'i warn you to kill if you are a drug protector', 2, '2016-07-27 12:43:17', '2016-07-27 10:43:17');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `blog_id` int(11) NOT NULL,
  `content` text NOT NULL,
  `created_at` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `blog_id`, `content`, `created_at`, `updated_at`) VALUES
(2, 2, 'ok as you wish for. Take care', '2016-07-27 15:51:13', '2016-07-27 13:51:13'),
(3, 2, 'you comming home now?', '2016-07-27 16:02:09', '2016-07-27 14:02:09'),
(4, 3, 'kill marcel garbo, vicente loot, gen tinio, and all the scalawag pls mr president', '2016-07-27 16:06:50', '2016-07-27 14:06:51'),
(5, 3, 'yes mr president kill then all so that no more shabu in the philippines', '2016-07-27 16:08:23', '2016-07-27 14:08:23');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email_address` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `deleted_flag` int(11) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email_address`, `password`, `username`, `first_name`, `last_name`, `deleted_flag`, `created_at`, `updated_at`) VALUES
(1, 'ask.macky.miro@gmail.com', '51d91eb78006b8ea10fc2a2c8f194c0a115241ff', 'macky', 'macky', 'miro', 0, '2016-07-27 07:31:18', '2016-07-27 05:31:18'),
(2, 'macky@gmail.com', '5df5915da64b0de7e63108cf2b5ae24d4d3ca12c', 'macko', 'macko', 'miro', 0, '2016-07-27 12:41:48', '2016-07-27 10:41:49');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
