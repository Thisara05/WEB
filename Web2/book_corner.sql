-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 12, 2021 at 10:12 PM
-- Server version: 8.0.21
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `book_corner`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

DROP TABLE IF EXISTS `books`;
CREATE TABLE IF NOT EXISTS `books` (
  `BookID` int NOT NULL AUTO_INCREMENT,
  `Name` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Author` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Img` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Description` varchar(500) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Price` decimal(5,2) NOT NULL,
  PRIMARY KEY (`BookID`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`BookID`, `Name`, `Author`, `Img`, `Description`, `Price`) VALUES
(1, 'Second Place', 'Rachel Cusk', 'img/books/Book1.jpg', 'A woman invites a famous artist to use her guesthouse in the remote coastal landscape where she lives with her family. Powerfully drawn to his paintings, she believes his vision might penetrate the mystery at the center of her life. But as a long, dry summer sets in, his provocative presence itself becomes an enigma―and disrupts the calm of her secluded household.', '19.00'),
(2, 'Making Contact', 'Alan Steinfeld', 'img/books/Book2.jpg', 'Making Contact presents multiple perspectives on what no longer can be denied: UFOs and their occupants are visiting our world. The book answers questions which remain in the wake of the recent Pentagon’s disclosures as to who and why these beings are here.', '15.99'),
(3, 'Blade of Secrets', 'Tricia Levenseller', 'img/books/Book3.jpg', 'Eighteen-year-old Ziva prefers metal to people. She spends her days tucked away in her forge, safe from society and the anxiety it causes her, using her magical gift to craft unique weapons imbued with power.', '15.00'),
(4, 'A Master of Djinn', 'P. Djeli Clark', 'img/books/Book4.jpg', 'Cairo, 1912: Though Fatma el-Sha’arawi is the youngest woman working for the Ministry of Alchemy, Enchantments and Supernatural Entities, she’s certainly not a rookie, especially after preventing the destruction of the universe last summer.\r\nP.Djeli Clark', '23.79');

-- --------------------------------------------------------

--
-- Table structure for table `book_order`
--

DROP TABLE IF EXISTS `book_order`;
CREATE TABLE IF NOT EXISTS `book_order` (
  `Name` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Email` varchar(40) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `PhoneNum` int NOT NULL,
  `Addr` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `PostalCode` int NOT NULL,
  `CardType` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `CardName` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `CardNumb` varchar(17) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `CVV` int NOT NULL,
  `ExpDate` varchar(5) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `BookID` int NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

DROP TABLE IF EXISTS `contact`;
CREATE TABLE IF NOT EXISTS `contact` (
  `Name` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Email` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `PhoneNum` int NOT NULL,
  `Message` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `U_ID` int NOT NULL AUTO_INCREMENT,
  `Name` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `Email` varchar(30) NOT NULL,
  `PhoneNum` int NOT NULL,
  `DOB` date NOT NULL,
  `Password` varchar(30) NOT NULL,
  PRIMARY KEY (`U_ID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
