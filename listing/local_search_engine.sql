-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 15, 2015 at 07:44 PM
-- Server version: 5.6.21
-- PHP Version: 5.5.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `local_search_engine`
--

-- --------------------------------------------------------

--
-- Table structure for table `listing`
--

CREATE TABLE IF NOT EXISTS `listing` (
`id` int(100) NOT NULL,
  `UserName` varchar(5000) DEFAULT NULL,
  `UserEmail` varchar(1000) DEFAULT NULL,
  `Categories` varchar(8000) DEFAULT NULL,
  `Sub_category` varchar(8000) DEFAULT NULL,
  `Name` varchar(8000) DEFAULT NULL,
  `Address` varchar(8000) DEFAULT NULL,
  `Tags` varchar(8000) DEFAULT NULL,
  `Number` varchar(8000) DEFAULT NULL,
  `Email` varchar(1000) DEFAULT NULL,
  `Rating` varchar(1000) DEFAULT NULL,
  `website` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=46 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `listing`
--

INSERT INTO `listing` (`id`, `UserName`, `UserEmail`, `Categories`, `Sub_category`, `Name`, `Address`, `Tags`, `Number`, `Email`, `Rating`, `website`) VALUES
(1, 'nazir', NULL, 'Hotels asdf', '1star hotels', 'Chakrika Lodging & Boarding', '1st & 2nd Floor, Siddhivinayak Arcade, Godhbunder Road, Thane West, Thane - 400601, Above ...more (Map)', 'hotels, rooms, accommodations, hotel, booking, luxury, deals, rates , restaurants , Mumbra', '(91)-22-38546462', '', '5', ''),
(2, 'nazir', NULL, 'Hotels', '1star hotels', 'Hotel Highland Residency', 'Thane West, Thane - 400601, Jambli Naka, Near Chintamani Circle, Opposite Clock Tower, Nea ...more (Map)', 'hotels, rooms, accommodations, hotel, booking, luxury, deals, rates , restaurants , Mumbra', '(91)-22-38579519', '', '5', ''),
(3, 'nazir', NULL, 'Hotels', '1star hotels', 'Starling Comfort', 'lodha complex, majiwada, Thane West, Mumbai - 400601, Off Eastern express highway (Map)', 'hotels, rooms, accommodations, hotel, booking, luxury, deals, rates , restaurants , Mumbra', '(91)-22-38518434', '', '5', ''),
(4, 'arif', NULL, 'Taxi', '24 Hours Taxi', 'City Care Tours & Travels', '5 Khurshid Khan, Thane West, Thane - 400601, Near 1st Rabodi', 'Book a taxi, book a cab, online cab booking, meru cabs, meru cabs tariff, radio taxi , cab service , Mumbra', '(91)-22-38518434', '', '5', ''),
(5, 'arif', NULL, 'Taxi', '24 Hours Taxi', 'Galaxy Tours And Travels', '2/5, 1st Rabode, Thane West, Thane - 400601, Near Koram Mall', 'Book a taxi, book a cab, online cab booking, meru cabs, meru cabs tariff, radio taxi , cab service , Mumbra', '(91)-22-38595452', '', '5', ''),
(6, 'arif', NULL, 'Taxi', '24 Hours Taxi', 'Samudra Cool Cab', '5/ 502, Anand Vihar, Thane West, Thane - 400601, Near Railway Phatak, Kharigaon', 'Book a taxi, book a cab, online cab booking, meru cabs, meru cabs tariff, radio taxi , cab service , Mumbra', '(91)-22-38595452', '', '5', ''),
(7, 'arif', NULL, 'Doctor', 'Dentists', 'Dr Nandas Dental Clinic', 'Shop No 3 A, 1st Floor, Navrang Shopping Arcade, Gokhale Road, Naupada-thane West, Thane - ...more (Map)', 'Book a taxi, book a cab, online cab booking, meru cabs, meru cabs tariff, radio taxi, cab service,  Mumbra', '(91)-22-38522484', '', '4', ''),
(8, NULL, NULL, 'Doctor', 'Dentists', 'Dr Karves Dentech Pvt Ltd', '20 Amrapali Arcade Vasant Vihar, Pokhran Road No 2, Thane West, Thane - 400601, Opposite V ...more (Map)', '', '(91)-22-38547843', '', '4', ''),
(9, NULL, NULL, 'Doctor', 'Dentists', 'All Smiles Dental Care Center', 'A/ 5, Parvati Apartment, 1st Floor, Uthalsar Road, Thane West, Thane - 400601, Opposite TM ...more (Map)', '', '(91)-22-39365942', '', '3', ''),
(10, NULL, NULL, 'Hospitals', 'Hospitals', 'Aayush Multispeciality Hosp...', '1st Floor, Marigold Apartment, Panch Pakhadi-Thane West, Thane - 400602, Opposite Nitin Co ...more (Map)', '', '(91)-22-38555657', '', '4', ''),
(11, NULL, NULL, 'Hospitals', 'Hospitals', 'Jeevan Jyot Hospital', 'Satyam Apartment, M G Road, Naupada-Thane West, Thane - 400602, Opposite Shahu Market , Ne ...more (Map)', '', '(91)-22-38544311', '', '3', ''),
(12, NULL, NULL, 'Hospitals', 'Hospitals', 'Sampada Hospital', 'gurukrupa chs, B patil marg, charai, Charai-Thane West, Thane - 400601 (Map)', '', '(91)-22-38513693', '', '2', ''),
(44, NULL, NULL, 'Hospitals', NULL, 'Aayush Multispeciality Hosp...', '1st Floor, Marigold Apartment, Panch Pakhadi-Thane West, Thane - 400602, Opposite Nitin Co ...more (Map)', 'Book a taxi, book a cab, online cab booking, meru cabs, meru cabs tariff, radio taxi , cab service , Mumbra', '(91)-22-38518434', 'aa@gmail.com', '5', 'webcreativities.net'),
(45, NULL, NULL, 'Hospitals', NULL, 'Aayush Multispeciality Hosp...', '1st Floor, Marigold Apartment, Panch Pakhadi-Thane West, Thane - 400602, Opposite Nitin Co ...more (Map)', 'Book a taxi, book a cab, online cab booking, meru cabs, meru cabs tariff, radio taxi , cab service , Mumbra', '(91)-22-38518434', 'aa@gmail.com', '5', 'webcreativities.net');

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
 ADD PRIMARY KEY (`user_id`), ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `listing`
--
ALTER TABLE `listing`
MODIFY `id` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=46;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `user_id` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
