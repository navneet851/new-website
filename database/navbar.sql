-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 02, 2024 at 07:36 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `navbar`
--

-- --------------------------------------------------------

--
-- Table structure for table `likes`
--

CREATE TABLE `likes` (
  `like_id` int(250) NOT NULL,
  `user_id` int(250) NOT NULL,
  `post_id` int(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `likes`
--

INSERT INTO `likes` (`like_id`, `user_id`, `post_id`) VALUES
(1, 2, 25),
(10, 2, 26),
(11, 1, 24),
(16, 2, 24),
(19, 1, 16),
(20, 1, 23),
(22, 1, 26),
(25, 1, 17),
(26, 6, 25),
(28, 2, 23),
(29, 1, 18),
(31, 1, 15),
(32, 1, 13),
(35, 1, 12),
(38, 1, 25);

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `post_id` int(11) NOT NULL,
  `caption` varchar(55) NOT NULL,
  `location1` varchar(20) NOT NULL,
  `post_img` varchar(200) NOT NULL,
  `uid1` varchar(100) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`post_id`, `caption`, `location1`, `post_img`, `uid1`, `user_id`) VALUES
(9, 'csd', 'guuuug', '1712138743-premium_photo_1677221924410_0d27f4940396.png', 'amrit', 2),
(10, 'jugg', 'ffg', '1712138865-Screenshot 2023-08-04 111732.png', 'amrit', 2),
(12, 'tere layi', 'Amloh', '1712425177-terelayi_cover.jpg', '_navi_0048', 1),
(13, '', '', '1712427149-hollywood music Mixtape_Album Cover Art.jpg', '_navi_0048', 1),
(15, '', '', '1712430095-Screenshot 2023-08-04 111732.png', '_navi_0048', 1),
(16, '', '', '1712430409-Screenshot 2023-09-08 115345.png', '_navi_0048', 1),
(17, '', '', '1712431870-Screenshot 2024-01-08 135921.png', '_navi_0048', 1),
(18, 'karanaujla', 'fgs', '1713258267-karanaujla.jpg', '_navi_0048', 1),
(23, 'when life fucks you bend down and enjoy', 'Punjab', '1713764772-premium_photo_1677221924410_0d27f4940396.png', '_navi_0048', 1),
(25, '23rr4', 'Punjab', '1713770800-Screenshot (2).png', 'amrit', 2);

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `user_id` int(11) NOT NULL,
  `firstname` varchar(15) NOT NULL,
  `lastname` varchar(15) NOT NULL,
  `username` varchar(20) NOT NULL,
  `Email` varchar(45) NOT NULL,
  `password1` varchar(50) NOT NULL,
  `profile_img` varchar(800) NOT NULL,
  `bio` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`user_id`, `firstname`, `lastname`, `username`, `Email`, `password1`, `profile_img`, `bio`) VALUES
(1, 'navneet', 'yadav', '_navi_0048', 'nav700neet@gmail.com', '8cb2237d0679ca88db6464eac60da96345513964', 'profile-Untitled.png', 'saggitarius Karma beleiver'),
(2, 'nav', 'bar ', 'Amrit', 'nav@gmail.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'profile-Spotify Player Color Palette - color-hex.com.png', 'im amrit'),
(3, 'naveet', 'ayadva', 'navbar', 'nav5051neet@gmail.com', '8cb2237d0679ca88db6464eac60da96345513964', 'profile-placeholder.jpg', ''),
(4, 'pawan', 'deep', 'pwn', 'pawandeepbhutta13@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'profile-placeholder.jpg', ''),
(5, 'fef', 'fefe', 'gfg', 'nav@gmail.com', '30e0c510958c33b6a29f8b7ec2b640fe022f80ad', 'profile-placeholder.jpg', ''),
(6, 'Prabhjot', 'singh', 'prabh_00', '', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'profile-placeholder.jpg', ''),
(7, 'gt', 'tht', 'nm', '', '50c3c575ce2bb12c45e20736ce59e86fe81915b4', 'profile-Untitled.png', '');

-- --------------------------------------------------------

--
-- Table structure for table `user_comment`
--

CREATE TABLE `user_comment` (
  `comment_id` int(11) NOT NULL,
  `username` varchar(24) NOT NULL,
  `post_id` varchar(24) NOT NULL,
  `user_comment` varchar(200) NOT NULL,
  `user_id` int(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_comment`
--

INSERT INTO `user_comment` (`comment_id`, `username`, `post_id`, `user_comment`, `user_id`) VALUES
(18, 'amrit', '19', '🤣🤣🤣🤣🤣🤣🤣', 2),
(19, 'amrit', '19', '😂😂😂😂😂😂😂', 2),
(20, '_navi_0048', '19', 'great', 1),
(21, '_navi_0048', '19', 'good', 1),
(22, '_navi_0048', '19', 'hufheu fuuiehieiejf', 1),
(23, '_navi_0048', '23', 'good', 1),
(24, '_navi_0048', '23', 'good', 1),
(25, 'amrit', '24', 'good', 2),
(27, '_navi_0048', '25', 'wfef', 1),
(28, '_navi_0048', '25', 'efefe', 1),
(29, '_navi_0048', '25', '🤣🤣🤣', 1),
(30, 'amrit', '25', 'grgrg', 2),
(31, 'amrit', '23', 'ffgf', 2),
(32, 'amrit', '18', 'grrg', 2),
(34, 'amrit', '17', 'adad', 2),
(35, 'amrit', '24', 'helo', 2),
(38, '_navi_0048', '9', 'ram ram bhai sarea ne', 1),
(41, 'amrit', '25', 'good', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `likes`
--
ALTER TABLE `likes`
  ADD PRIMARY KEY (`like_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`post_id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `user_comment`
--
ALTER TABLE `user_comment`
  ADD PRIMARY KEY (`comment_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `likes`
--
ALTER TABLE `likes`
  MODIFY `like_id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `user_comment`
--
ALTER TABLE `user_comment`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
