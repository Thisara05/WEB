-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 18, 2021 at 12:31 PM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `book_store`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

DROP TABLE IF EXISTS `books`;
CREATE TABLE IF NOT EXISTS `books` (
  `BookID` int(11) NOT NULL,
  `Name` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Author` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Img` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Description` varchar(500) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Price` decimal(5,2) NOT NULL,
  PRIMARY KEY (`BookID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`BookID`, `Name`, `Author`, `Img`, `Description`, `Price`) VALUES
(1, 'The Premonition', 'Michael Lewis', 'images/1.jpg', 'Fortunately, we are still a nation of skeptics. Fortunately, there are those among us who study pandemics and are willing to look unflinchingly at worst-case scenarios. Michael Lewis’s taut and brilliant nonfiction thriller pits a band of medical visionaries against the wall of ignorance that was the official response of the Trump administration to the outbreak of COVID-19.', '21.00'),
(2, 'What Happened to You?', 'Oprah Winfrey', 'images/2.jpg', 'Through this lens we can build a renewed sense of personal self-worth and ultimately recalibrate our responses to circumstances, situations, and relationships. It is, in other words, the key to reshaping our very lives.', '17.00'),
(3, 'The Women of the Bible Speak', 'Shannon Bream', 'images/3.jpg', 'The women of the Bible lived timeless stories—by examining them, we can understand what it means to be a woman of faith.', '15.00'),
(4, 'Atomic Habits', 'James Clear', 'images/4.jpg', 'No matter your goals, Atomic Habits offers a proven framework for improving--every day. James Clear, one of the world\'s leading experts on habit formation, reveals practical strategies that will teach you exactly how to form good habits, break bad ones, and master the tiny behaviors that lead to remarkable results.', '11.00'),
(5, 'The Four Agreements', 'Don Miguel Ruiz', 'images/5.jpg', 'In The Four Agreements, bestselling author don Miguel Ruiz reveals the source of self-limiting beliefs that rob us of joy and create needless suffering. Based on ancient Toltec wisdom, The Four Agreements offer a powerful code of conduct that can rapidly transform our lives to a new experience of freedom, true happiness, and love.', '30.00'),
(6, 'The Midnight Library', 'Matt Haig', 'images/6.jpg', 'Somewhere out beyond the edge of the universe there is a library that contains an infinite number of books, each one the story of another reality. One tells the story of your life as it is, along with another book for the other life you could have lived if you had made a different choice at any point in your life. While we all wonder how our lives might have been, what if you had the chance to go to the library and see for yourself? Would any of these other lives truly be better?', '13.00'),
(7, 'Shadow and Bone', 'Leigh Bardugo', 'images/7.jpg', 'Enter the Grishaverse with Book One of the Shadow and Bone Trilogy by the #1 New York Times–bestselling author of Six of Crows and Crooked Kingdom.', '17.00'),
(8, 'Siege and Storm', 'Leigh Bardugo', 'images/8.jpg', 'The Darkling is more determined than ever to claim Alina’s magic and use it to take the Ravkan throne. With nowhere else to turn, Alina enlists the help of an infamous privateer and sets out to lead the Grisha army.', '16.00');

-- --------------------------------------------------------

--
-- Table structure for table `book_order`
--

DROP TABLE IF EXISTS `book_order`;
CREATE TABLE IF NOT EXISTS `book_order` (
  `Name` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Email` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `PhoneNum` int(11) NOT NULL,
  `Add_City` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `PostalCode` int(11) NOT NULL,
  `Country` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `S_Add_City` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `S_PostalCode` int(11) NOT NULL,
  `S_Country` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `CardType` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `CardName` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `CardNumb` varchar(11) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `CVV` int(11) NOT NULL,
  `ExpDate` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `BookID` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

DROP TABLE IF EXISTS `contact`;
CREATE TABLE IF NOT EXISTS `contact` (
  `Name` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Email` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `PhoneNum` int(11) NOT NULL,
  `Message` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `U_ID` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(20) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `PhoneNum` int(11) NOT NULL,
  `Password` varchar(30) NOT NULL,
  PRIMARY KEY (`U_ID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
