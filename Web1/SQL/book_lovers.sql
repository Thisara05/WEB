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
-- Database: `book_lovers`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

DROP TABLE IF EXISTS `books`;
CREATE TABLE IF NOT EXISTS `books` (
  `BookID` int(11) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Author` varchar(30) DEFAULT NULL,
  `Img` varchar(30) NOT NULL,
  `Description` varchar(500) NOT NULL,
  `Price` decimal(5,2) NOT NULL,
  PRIMARY KEY (`BookID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`BookID`, `Name`, `Author`, `Img`, `Description`, `Price`) VALUES
(1, 'Giant Days', 'John Allison', 'img/books/a.jpg', 'Susan, Esther, and Daisy started at university three weeks ago and became fast friends because their dorm rooms were next to each other. Now, away from home for the first time, all three want to reinvent themselves. But in the face of hand-wringing boys, \"personal experimentation,\" influenza, mystery-mold, nu-chauvinism, and the willful, unwanted intrusion of \"academia,\" they may be lucky just to make it to spring alive.', '10.00'),
(2, 'To Be Taught, If Fortunate', 'Becky Chambers', 'img/books/b.jpg', '“Extraordinary . . . A future sci-fi masterwork in a new and welcome tradition.” -- Joanne Harris, author of Chocolat\r\n\r\nA stand-alone science fiction novella from the award-winning, bestselling, critically-acclaimed author of the Wayfarer series.', '13.00'),
(3, 'Bitch Planet', 'Kelly Sue DeConnick', 'img/books/c.jpg', 'Eisner Award-nominated writer KELLY SUE DeCONNICK (PRETTY DEADLY, Captain Marvel) and VALENTINE DE LANDRO (X-Factor) follow up on the success of EXTRAORDINARY MACHINE with the second installment of their highly acclaimed and fiercely unapologetic BITCH PLANET. A few years down the road in the wrong direction, a woman\'s failure to comply with her patriarchal overlords results in exile to the meanest penal planet in the galaxy.', '20.00'),
(4, 'Paper Girls', 'Brian K. Vaughan', 'img/books/d.jpg', 'From Brian K. Vaughan, #1 New York Times bestselling writer of SAGA, and Cliff Chiang, legendary artist of WONDER WOMAN, comes the first volume of an all-new ongoing adventure.\r\n\r\nIn the early hours after Halloween of 1988, four 12-year-old newspaper delivery girls uncover the most important story of all time. Suburban drama and otherworldly mysteries collide in this smash-hit series about nostalgia, first jobs, and the last days of childhood.', '17.00'),
(5, 'A Terrible Plan', 'Noelle Stevenson', 'img/books/e.jpg', 'Trying to take advantage of the first quiet day at camp in a while, Mal and Molly\'s date takes a bizarre turn with the appearance of the bear woman! Back at camp, Jo, April, and Ripley must stay on their toes as they try to earn every badge possible which ends up being a lot harder than any of them ever planned.', '18.00'),
(6, 'Dog Man Mothering Heights', 'Dav Pilkey', 'img/books/f.jpg', 'Dog Man and Petey face their biggest challenges yet in the tenth Dog Man book from worldwide bestselling author and illustrator Dav Pilkey.\r\nDog Man is down on his luck, Petey confronts his not so purr-fect past, and Grampa is up to no good. The world is spinning out of control as new villains spill into town. Everything seems dark and full of despair. But hope is not lost. Can the incredible power of love save the day?', '8.00');

-- --------------------------------------------------------

--
-- Table structure for table `book_order`
--

DROP TABLE IF EXISTS `book_order`;
CREATE TABLE IF NOT EXISTS `book_order` (
  `Name` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Email` varchar(40) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `PhoneNum` int(11) NOT NULL,
  `Add_City` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `PostalCode` int(11) NOT NULL,
  `Country` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `CardType` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `CardName` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `CardNumb` varchar(17) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `CVV` int(11) NOT NULL,
  `ExpDate` varchar(5) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `BookID` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

DROP TABLE IF EXISTS `contact`;
CREATE TABLE IF NOT EXISTS `contact` (
  `Name` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Email` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `PhoneNum` int(11) NOT NULL,
  `Message` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
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
