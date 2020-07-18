-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 18, 2020 at 04:39 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cr10_ruben_biglibrary`
--
CREATE DATABASE IF NOT EXISTS `cr10_ruben_biglibrary` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `cr10_ruben_biglibrary`;

-- --------------------------------------------------------

--
-- Table structure for table `author`
--

CREATE TABLE `author` (
  `Author_ID` int(11) NOT NULL,
  `A_fname` varchar(30) NOT NULL,
  `A_lname` varchar(30) NOT NULL,
  `fk_Media` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `author`
--

INSERT INTO `author` (`Author_ID`, `A_fname`, `A_lname`, `fk_Media`) VALUES
(2, 'Umberto ', 'Eco', 2),
(3, 'Anne', ' Bishop', 3),
(4, 'Christian ', 'Jungersen', 4),
(5, 'Mary ', 'Oliver', 5),
(6, 'Sam', 'Esmail', 6),
(7, 'Jon', 'Bokenkamp', 7);

-- --------------------------------------------------------

--
-- Table structure for table `media`
--

CREATE TABLE `media` (
  `Media_ID` int(11) NOT NULL,
  `title` varchar(30) NOT NULL,
  `image` varchar(30) NOT NULL,
  `ISBN` varchar(30) NOT NULL,
  `descrpt` varchar(100) NOT NULL,
  `publish_date` date DEFAULT NULL,
  `mediastyle` enum('book','dvd','cd') NOT NULL,
  `status` enum('available','reserved') NOT NULL,
  `fk_Publisher` int(11) NOT NULL,
  `fk_Author` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `media`
--

INSERT INTO `media` (`Media_ID`, `title`, `image`, `ISBN`, `descrpt`, `publish_date`, `mediastyle`, `status`, `fk_Publisher`, `fk_Author`) VALUES
(1, 'History of Beauty', 'image', '0847826465 ', 'What is beauty? Umberto Eco, a', '2004-11-13', 'book', 'available', 1, 2),
(2, 'Nome Della Rosa', 'image', '0156001314', 'The year is 1327. Benedictines', '1994-09-28', 'book', 'available', 1, 2),
(3, 'Written in Red', 'image', '0451464966 ', 'As a cassandra sangue, or bloo', '2013-03-05', 'book', 'reserved', 2, 3),
(4, 'The Exception', 'image', '0385516290', 'THE EXCEPTION is a unique and ', '2007-07-10', 'book', 'available', 3, 4),
(5, 'A Thousand Mornings', 'image', '1594204772', 'In A Thousand Mornings, Mary O', '2012-10-11', 'book', 'available', 6, 5),
(6, 'Mr.ROBOT', 'image', 'none', 'Elliot, a brilliant but highly', '2015-06-15', 'dvd', 'available', 5, 6),
(7, 'The Black List', 'image', 'none', 'A new FBI profiler, Elizabeth ', '2013-08-06', 'dvd', 'available', 4, 7),
(8, 'Power', 'image', 'none', 'James \"Ghost\" St. Patrick, a wealthy New York night club owner who has it all, catering to the city\'', '2014-01-01', 'dvd', 'reserved', 5, 7),
(9, 'Planet Earth', 'image', 'none', 'Dazzling, state-of-the-art high-definition imagery highlights this breathtaking documentary series f', '2006-03-16', 'dvd', 'reserved', 4, 7),
(10, 'Blue Juice', 'image', 'none', 'The large wave and surfing sequences were filmed in Famara, Lanzarote, ', '1995-04-26', 'dvd', 'available', 5, 6);

-- --------------------------------------------------------

--
-- Table structure for table `publisher`
--

CREATE TABLE `publisher` (
  `Publisher_ID` int(11) NOT NULL,
  `P_name` varchar(30) NOT NULL,
  `P_address` varchar(50) NOT NULL,
  `P_size` enum('Large','Medium','Small') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `publisher`
--

INSERT INTO `publisher` (`Publisher_ID`, `P_name`, `P_address`, `P_size`) VALUES
(1, 'Harvest Books', 'New York', 'Large'),
(2, 'Roc', 'New York', 'Medium'),
(3, 'Doubleday ', 'New York', 'Large'),
(4, 'Sony Pictures', 'Culver City, California', 'Large'),
(5, 'Universal Pictures', 'Universal City, California', 'Large'),
(6, 'Penguin Press', 'London, UK', 'Small');

-- --------------------------------------------------------

--
-- Table structure for table `tbl`
--

CREATE TABLE `tbl` (
  `TBL_ID` int(11) NOT NULL,
  `title` varchar(30) NOT NULL,
  `image` varchar(30) NOT NULL,
  `ISBN` varchar(30) NOT NULL,
  `descrpt` varchar(100) NOT NULL,
  `publish_date` date DEFAULT NULL,
  `mediastyle` enum('book','dvd','cd') NOT NULL,
  `status` enum('available','reserved') NOT NULL,
  `publisher` varchar(50) DEFAULT NULL,
  `author` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl`
--

INSERT INTO `tbl` (`TBL_ID`, `title`, `image`, `ISBN`, `descrpt`, `publish_date`, `mediastyle`, `status`, `publisher`, `author`) VALUES
(1, 'History of Beauty', 'img/hob.jpg', '0847826465 ', 'What is beauty? Umberto Eco, a', '2014-11-13', 'book', 'available', 'Harvest Books', 'Umberto'),
(2, 'Nome Della Rosa', 'img/rose.jpg', '0156001314', 'The year is 1327. Benedictines', '1994-09-28', 'book', 'available', 'Harvest Books', 'Umberto');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `author`
--
ALTER TABLE `author`
  ADD PRIMARY KEY (`Author_ID`),
  ADD KEY `fk_Media` (`fk_Media`);

--
-- Indexes for table `media`
--
ALTER TABLE `media`
  ADD PRIMARY KEY (`Media_ID`),
  ADD KEY `fk_Publisher` (`fk_Publisher`),
  ADD KEY `fk_Author` (`fk_Author`);

--
-- Indexes for table `publisher`
--
ALTER TABLE `publisher`
  ADD PRIMARY KEY (`Publisher_ID`);

--
-- Indexes for table `tbl`
--
ALTER TABLE `tbl`
  ADD PRIMARY KEY (`TBL_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `author`
--
ALTER TABLE `author`
  MODIFY `Author_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `media`
--
ALTER TABLE `media`
  MODIFY `Media_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `publisher`
--
ALTER TABLE `publisher`
  MODIFY `Publisher_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tbl`
--
ALTER TABLE `tbl`
  MODIFY `TBL_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `media`
--
ALTER TABLE `media`
  ADD CONSTRAINT `media_ibfk_1` FOREIGN KEY (`fk_Publisher`) REFERENCES `publisher` (`Publisher_ID`),
  ADD CONSTRAINT `media_ibfk_2` FOREIGN KEY (`fk_Author`) REFERENCES `author` (`Author_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
