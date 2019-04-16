-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 13, 2019 at 08:08 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `oopblog`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `title`) VALUES
(1, 'PHP OOP'),
(2, 'Java Script'),
(3, 'MySql');

-- --------------------------------------------------------

--
-- Table structure for table `image`
--

CREATE TABLE `image` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `image`
--

INSERT INTO `image` (`id`, `name`, `image`) VALUES
(11, 'MD. Rejaul Islam Royel', 'IMG_1743.JPG');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `author` varchar(255) NOT NULL,
  `image` text NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `tags` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `category_id`, `title`, `content`, `author`, `image`, `time`, `tags`) VALUES
(1, 3, 'Learn OOP in php11', '11 Bootstrap employs a handful of important global styles and settings that youï¿½ll need to be aware of when using it, all of which are almost exclusively geared towards the normalization of cross browser styles. Letï¿½s dive in.Bootstrap employs a handful of important global styles and settings that youï¿½ll need to be aware of when using it, all of which are almost exclusively geared towards the normalization of cross browser styles. Letï¿½s dive in.', 'Rejaul Islam Royel 11', 'download.jpg', '2019-03-31 17:42:19', '11 php, oop, mysql, Blog, web based project '),
(2, 2, 'Learn JS', 'The bus driver, who was also killed in the accident was going the wrong way, KLIA OCPD Asst Comm Zulkifli Adamshah said.\r\n\r\nThe 43-year-old driver should have taken the three o’clock exit at the roundabout near the incident, but took the 12 o’clock exit instead, the KLIA OCPD asst comm said.\r\n\r\n“He was supposed to take the three o’clock exit which leads to MASKargo, where the workers he was transporting were supposed to go, but he took the wrong exit”.\r\n\r\n“The accident took place about 200 metres from the roundabout. We are investigating why he took the wrong turn; whether it was a mistake or not,” he said when met at the Serdang hospital forensic department on Monday (April 8).\r\n\r\nFive were seriously injured, while others suffered light injuries in the 11:10pm (local time) accident on Sunday (April 7).\r\n\r\nThe bus was carrying 43 passengers, who were MAS Kargo contract workers, from their hostel in Putra Nilai, Negri Sembilan, to their place of work when the incident occurred.', 'Royel', 'js.jpg', '2019-03-31 17:44:23', 'JS, JQUERT'),
(3, 2, 'Hands on Data science ', 'Ripon said as he shuddered recalling the horrific experience he went through on March 28.\r\n\r\nOne of the survivors of the tragic fire incident at FR Tower in Dhaka’s Banani, Ripon shared his story to our correspondent as he came in front of the building today, three days after the incident in which 26 people lost their lives and scores of others sustained injuries.\r\n\r\n“It was already more than two hours since the fire broke out. It was all smoky at the 13th floor where I was stuck along with others,” Ripon said.\r\n\r\nAt some point, Ripan thought he would not make it. So, he informed the family about the incident.\r\n\r\n“My mother wanted to see me for the last time when I informed them. I tried to make a video call, but it was not possible. So, I took three selfies and posted those in Facebook around 2:40pm,” he said.\r\n\r\n“Maa, Mina, Milan, Aapu, Fahim Bhai, please forgive me. Fire at FR Tower, lift -13,” he wrote in his Facebook post', 'Alex Hopper ', 'image1.jpg\r\n', '2019-04-04 04:18:52', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(264) NOT NULL,
  `email` varchar(264) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`) VALUES
(1, 'MD. Rejaul Islam Royel', 'royelurmy@gmail.com', 'wow'),
(2, 'user011', 'user01@gmail.com', '12345'),
(3, 'user011', 'user01@gmail.com', '12345');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `image`
--
ALTER TABLE `image`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
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
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `image`
--
ALTER TABLE `image`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
