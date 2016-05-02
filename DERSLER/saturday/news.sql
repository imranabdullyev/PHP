-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 24, 2016 at 06:33 PM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `oxu.az`
--

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `news_title` varchar(250) NOT NULL,
  `news_thumbImg` varchar(250) NOT NULL,
  `news_img` varchar(250) NOT NULL,
  `news_desk` text NOT NULL,
  `news_text` text NOT NULL,
  `news_status` tinyint(1) NOT NULL,
  `news_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `news_title`, `news_thumbImg`, `news_img`, `news_desk`, `news_text`, `news_status`, `news_date`) VALUES
(1, '$this->title', '$this->img', '$this->img', '$this->desc', '$this->text', 0, '0000-00-00'),
(2, 'Elave ele artiq', 'nikon.jpg', 'nikon.jpg', 'Elave ele artiq BU NU', 'nikon.jpg', 0, '0000-00-00'),
(3, 'Azerbaycan', 'nikon.jpg', 'nikon.jpg', 'Baku', 'nikon.jpg', 0, '0000-00-00'),
(4, 'Azerg', 'nikon.jpg', 'nikon.jpg', 'Baku', 'DHJdjhvbejhvbejhbv', 0, '2016-03-23'),
(5, 'Codcula code yazarken', 'nikon.jpg', 'nikon.jpg', 'Code Academy', 'DHJdjhvbejhvbejhbv', 1, '2016-03-12'),
(6, 'Xeberin bashliqi', '', '', 'Alvin', '', 0, '0000-00-00'),
(7, 'Xeberin bashliqi', '', '', 'Alvin', '', 0, '2016-03-24'),
(8, 'Xeberin bashliqi', '', '', 'Alvin', '', 0, '0000-00-00'),
(9, 'Xeberin bashliqi', '', '', 'Alvin', '', 0, '0000-00-00'),
(10, 'Xeberin bashliqi', '', '', 'Alvin', '', 0, '0000-00-00'),
(11, 'Xeberin bashliqi', '', '', 'Alvin', '', 0, '0000-00-00'),
(12, 'Xeberin bashliqi', '', '', 'Alvin', '', 0, '0000-00-00'),
(13, 'Xeberin bashliqi', '', '', 'Alvin', '', 0, '0000-00-00'),
(14, 'Xeberin bashliqi', '', '', 'Alvin', '', 0, '0000-00-00'),
(15, 'Xeberin bashliqi', '', '', 'Alvin', '', 0, '0000-00-00'),
(16, 'Xeberin bashliqi', '', '', 'Alvin', '', 0, '0000-00-00'),
(17, 'Xeberin bashliqi', '', '', 'Alvin', '', 0, '0000-00-00'),
(18, 'Xeberin bashliqi', '', '', 'Alvin', '', 0, '0000-00-00'),
(19, 'Xeberin bashliqi', '', '', 'Alvin', '', 0, '0000-00-00'),
(20, 'Xeberin bashliqi', '', '', 'Alvin', '', 0, '0000-00-00'),
(21, 'Xeberin bashliqi', 'sample-1.jpg', 'sample-1.jpg', 'Alvin', '', 0, '0000-00-00'),
(22, 'Xeberin bashliqi', 'sample-1.jpg', 'sample-1.jpg', 'Alvin', '', 0, '0000-00-00'),
(23, 'Xeberin bashliqi', 'sample-1.jpg', 'sample-1.jpg', 'Alvin', '', 0, '0000-00-00'),
(24, 'Xeberin bashliqi', 'sample-1.jpg', 'sample-1.jpg', 'Alvin', '', 0, '0000-00-00'),
(25, 'Xeberin bashliqi', '', '', 'Alvin', 'dadada', 0, '0000-00-00'),
(26, 'Xeberin bashliqi', '', '', 'Alvin', 'dadada', 0, '0000-00-00'),
(27, 'Xeberin bashliqi', '', '', 'Alvin', 'dadada', 0, '0000-00-00'),
(28, 'Xeberin bashliqi', '', '', 'Alvin', 'dadada', 0, '0000-00-00'),
(29, 'Xeberin bashliqi', '', '', 'Alvin', 'dadada', 0, '0000-00-00'),
(30, 'Xeberin bashliqi', '', '', 'Alvin', 'dadada', 0, '0000-00-00'),
(31, 'Xeberin bashliqi', '', '', 'Alvin', 'dadada', 0, '0000-00-00'),
(32, 'Xeberin bashliqi', '', '', 'Alvin', 'dadada', 0, '0000-00-00'),
(33, 'Xeberin bashliqi', 'sample-1.jpg', 'sample-1.jpg', 'Alvin', 'casddas', 0, '2016-03-24'),
(34, 'Xeberin bashliqi', 'sample-1.jpg', 'sample-1.jpg', 'Alvin', 'casddas', 0, '2016-03-24'),
(35, 'Xeberin bashliqi', '', '', 'Alvin', 'dadada', 0, '0000-00-00'),
(36, 'Xeberin bashliqi', '', '', 'Alvin', 'dadada', 0, '0000-00-00'),
(37, 'Xeberin bashliqi', '', '', 'Alvin', '', 0, '0000-00-00'),
(38, 'Xeberin bashliqi', 'sample-1.jpg', 'sample-1.jpg', 'Alvin', 'adada', 0, '2016-03-24'),
(39, 'Xeberin bashliqi', '', '', 'Alvin', '', 0, '0000-00-00'),
(40, 'Xeberin bashliqi', '', '', 'Alvin', '', 0, '0000-00-00'),
(41, 'Xeberin bashliqi', '', '', 'Alvin', '', 0, '0000-00-00'),
(42, 'Xeberin bashliqi', '', '', 'Alvin', '', 0, '0000-00-00'),
(43, 'Xeberin bashliqi', '', '', 'Alvin', '', 0, '0000-00-00'),
(44, 'Xeberin bashliqi', '', '', 'Alvin', '', 0, '0000-00-00'),
(45, 'Xeberin bashliqi', '', '', 'Alvin', '', 0, '0000-00-00'),
(46, 'Xeberin bashliqi', '', '', 'Alvin', '', 0, '0000-00-00'),
(47, 'Xeberin bashliqi', '', '', 'Alvin', '', 0, '0000-00-00'),
(48, 'Xeberin bashliqi', '', '', 'Alvin', '', 0, '0000-00-00'),
(49, 'Xeberin bashliqi', '', '', 'Alvin', '', 0, '0000-00-00'),
(50, 'Xeberin bashliqi', '', '', 'Alvin', '', 0, '0000-00-00'),
(51, 'Xeberin bashliqi', '', '', 'Alvin', '', 0, '0000-00-00'),
(52, 'Xeberin bashliqi', '', '', 'Alvin', '', 0, '0000-00-00'),
(53, 'Xeberin bashliqi', '', '', 'Alvin', '', 0, '0000-00-00'),
(54, 'Xeberin bashliqi', '', '', 'Alvin', '', 0, '0000-00-00'),
(55, 'Xeberin bashliqi', '', '', 'Alvin', '', 0, '0000-00-00'),
(56, 'Xeberin bashliqi', '', '', 'Alvin', '', 0, '0000-00-00'),
(57, 'Xeberin bashliqi', '', '', 'Alvin', '', 0, '0000-00-00'),
(58, 'Xeberin bashliqi', '', '', 'Alvin', '', 0, '0000-00-00'),
(59, 'Xeberin bashliqi', '', '', 'Alvin', '', 0, '0000-00-00'),
(60, 'Xeberin bashliqi', '', '', 'Alvin', '', 0, '0000-00-00'),
(61, 'Xeberin bashliqi', '', '', 'Alvin', '', 0, '0000-00-00'),
(62, 'Xeberin bashliqi', '', '', 'Alvin', '', 0, '0000-00-00'),
(63, 'Xeberin bashliqi', '', '', 'Alvin', '', 0, '0000-00-00'),
(64, 'Xeberin bashliqi', '', '', 'Alvin', '', 0, '0000-00-00'),
(65, 'Xeberin bashliqi', '', '', 'Alvin', '', 0, '0000-00-00'),
(66, 'Xeberin bashliqi', '', '', 'Alvin', '', 0, '0000-00-00'),
(67, 'Xeberin bashliqi', '', '', 'Alvin', '', 0, '0000-00-00'),
(68, 'Xeberin bashliqi', '', '', 'Alvin', '', 0, '0000-00-00'),
(69, 'Xeberin bashliqi', '', '', 'Alvin', '', 0, '0000-00-00'),
(70, 'Xeberin bashliqi', '', '', 'Alvin', '', 0, '0000-00-00'),
(71, 'Xeberin bashliqi', '', '', 'Alvin', '', 0, '0000-00-00'),
(72, 'Xeberin bashliqi', '', '', 'Alvin', '', 0, '0000-00-00'),
(73, 'Xeberin bashliqi', '', '', 'Alvin', '', 0, '0000-00-00'),
(74, 'Xeberin bashliqi', '', '', 'Alvin', '', 0, '0000-00-00'),
(75, 'Xeberin bashliqi', '', '', 'Alvin', '', 0, '0000-00-00'),
(76, 'Xeberin bashliqi', '', '', 'Alvin', '', 0, '0000-00-00'),
(77, 'Xeberin bashliqi', '', '', 'Alvin', '', 0, '0000-00-00'),
(78, 'Xeberin bashliqi', '', '', 'Alvin', '', 0, '0000-00-00'),
(79, 'Xeberin bashliqi', '', '', 'Alvin', '', 0, '0000-00-00'),
(80, 'Xeberin bashliqi', '', '', 'Alvin', '', 0, '0000-00-00'),
(81, 'Xeberin bashliqi', '', '', 'Alvin', '', 0, '0000-00-00'),
(82, 'Xeberin bashliqi', '', '', 'Alvin', '', 0, '0000-00-00'),
(83, 'Xeberin bashliqi', '', '', 'Alvin', '', 0, '0000-00-00'),
(84, 'Xeberin bashliqi', '', '', 'Alvin', '', 0, '0000-00-00'),
(85, 'Xeberin bashliqi', '', '', 'Alvin', '', 0, '0000-00-00'),
(86, 'Xeberin bashliqi', '', '', 'Alvin', '', 0, '0000-00-00'),
(87, 'Xeberin bashliqi', '', '', 'Alvin', '', 0, '0000-00-00'),
(88, 'Xeberin bashliqi', '', '', 'Alvin', '', 0, '0000-00-00'),
(89, 'Xeberin bashliqi', '', '', 'Alvin', '', 0, '0000-00-00'),
(90, 'Xeberin bashliqi', '', '', 'Alvin', '', 0, '0000-00-00'),
(91, 'Xeberin bashliqi', '', '', 'Alvin', '', 0, '0000-00-00'),
(92, 'Xeberin bashliqi', '', '', 'Alvin', '', 0, '0000-00-00'),
(93, 'Xeberin bashliqi', '', '', 'Alvin', '', 0, '0000-00-00'),
(94, 'Xeberin bashliqi', '', '', 'Alvin', '', 0, '0000-00-00'),
(95, 'Xeberin bashliqi', '', '', 'Alvin', '', 0, '0000-00-00'),
(96, 'Xeberin bashliqi', '', '', 'Alvin', '', 0, '0000-00-00'),
(97, 'Xeberin bashliqi', '', '', 'Alvin', '', 0, '0000-00-00'),
(98, 'Xeberin bashliqi', '', '', 'Alvin', '', 0, '0000-00-00'),
(99, 'Xeberin bashliqi', '', '', 'Alvin', '', 0, '0000-00-00'),
(100, 'Xeberin bashliqi', '', '', 'Alvin', '', 0, '0000-00-00'),
(101, 'Xeberin bashliqi', '', '', 'Alvin', '', 0, '0000-00-00'),
(102, 'Xeberin bashliqi', '', '', 'Alvin', '', 0, '0000-00-00'),
(103, 'Xeberin bashliqi', '', '', 'Alvin', '', 0, '0000-00-00'),
(104, 'Xeberin bashliqi', '', '', 'Alvin', '', 0, '0000-00-00'),
(105, 'Xeberin bashliqi', '', '', 'Alvin', '', 0, '0000-00-00'),
(106, 'Xeberin bashliqi', '', '', 'Alvin', '', 0, '0000-00-00'),
(107, 'Xeberin bashliqi', '', '', 'Alvin', '', 0, '0000-00-00'),
(108, 'Xeberin bashliqi', '', '', 'Alvin', '', 0, '0000-00-00'),
(109, 'Xeberin bashliqi', '', '', 'Alvin', '', 0, '0000-00-00'),
(110, 'Xeberin bashliqi', '', '', 'Alvin', '', 0, '0000-00-00'),
(111, 'Xeberin bashliqi', '', '', 'Alvin', '', 0, '0000-00-00'),
(112, 'Xeberin bashliqi', '', '', 'Alvin', '', 0, '0000-00-00'),
(113, 'Xeberin bashliqi', '', '', 'Alvin', '', 1, '0000-00-00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=114;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
