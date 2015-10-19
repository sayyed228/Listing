-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 19, 2015 at 09:35 AM
-- Server version: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webcreat_test`
--

-- --------------------------------------------------------

--
-- Table structure for table `listing`
--

CREATE TABLE IF NOT EXISTS `listing` (
  `id` int(100) NOT NULL,
  `UserName` varchar(5000) DEFAULT NULL,
  `UserID` int(100) DEFAULT NULL,
  `UserEmail` varchar(1000) DEFAULT NULL,
  `Date` varchar(7000) DEFAULT NULL,
  `Categories` varchar(8000) DEFAULT NULL,
  `photo` varchar(8000) DEFAULT NULL,
  `Name` varchar(8000) DEFAULT NULL,
  `Address` varchar(8000) DEFAULT NULL,
  `Tags` varchar(8000) DEFAULT NULL,
  `Number` varchar(8000) DEFAULT NULL,
  `Email` varchar(1000) DEFAULT NULL,
  `Rating` varchar(1000) DEFAULT NULL,
  `website` varchar(1000) DEFAULT NULL,
  `status` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=144 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `listing`
--

INSERT INTO `listing` (`id`, `UserName`, `UserID`, `UserEmail`, `Date`, `Categories`, `photo`, `Name`, `Address`, `Tags`, `Number`, `Email`, `Rating`, `website`, `status`) VALUES
(141, NULL, 6, NULL, '16/10/2015', 'Hospitals', 'default-business-place-holder.png', 'Aayush Multispeciality Hosp...', '1st Floor, Marigold Apartment, Panch Pakhadi-Thane West, Thane - 400602, Opposite Nitin Co ...more (Map)', 'Book a taxi, book a cab, online cab booking, meru cabs, meru cabs tariff, radio taxi , cab service , Mumbra', '(91)-22-38518434', 'aa@gmail.com', '5', 'w3schools.com', 'true'),
(143, NULL, 6, NULL, '19/10/2015', 'Hospitals', '9.jpg', 'Aayush Multispeciality Hosp...', '1st Floor, Marigold Apartment, Panch Pakhadi-Thane West, Thane - 400602, Opposite Nitin Co ...more (Map)', 'Book a taxi, book a cab, online cab booking, meru cabs, meru cabs tariff, radio taxi , cab service , Mumbra', '(91)-22-38518434', 'aa@gmail.com', '5', 'w3schools.com', 'true');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(5) NOT NULL,
  `username` varchar(25) NOT NULL,
  `email` varchar(35) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `email`, `password`) VALUES
(6, 'nazir', 'nazir@gmail.com', '123456'),
(5, 'arif', 'arif@gmail.com', '123456'),
(7, 'hashmat', 'hashmat@gmail.com', '123456');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `listing`
--
ALTER TABLE `listing`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `listing`
--
ALTER TABLE `listing`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=144;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
