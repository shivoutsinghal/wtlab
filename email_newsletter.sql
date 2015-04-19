-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 19, 2015 at 08:06 PM
-- Server version: 5.1.41
-- PHP Version: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `email_newsletter`
--

-- --------------------------------------------------------

--
-- Table structure for table `admininfo`
--

CREATE TABLE IF NOT EXISTS `admininfo` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `UserName` varchar(255) NOT NULL,
  `UserID` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Status` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`ID`),
  UNIQUE KEY `UserID` (`UserID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admininfo`
--

INSERT INTO `admininfo` (`ID`, `UserName`, `UserID`, `Password`, `Email`, `Status`) VALUES
(1, 'Vaibhav Rana', 'vaibhav.30', 'f4865a02b74b63c77e70aa55494a64142f267eeae971befeed0662a529b074d9bce697633e1137b44baae978b776c9f59ffe960d68166ca1e81f8cf0860774e5', 'grossyroot@gmail.com', 1);

-- --------------------------------------------------------

--
-- Table structure for table `adminloginattempts`
--

CREATE TABLE IF NOT EXISTS `adminloginattempts` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `UserID` varchar(255) NOT NULL,
  `TimeStamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `adminloginattempts`
--

INSERT INTO `adminloginattempts` (`ID`, `UserID`, `TimeStamp`) VALUES
(1, 'vaibhav.30', '2015-03-20 14:55:22'),
(2, 'vaibhav.30', '2015-03-23 11:27:49');

-- --------------------------------------------------------

--
-- Table structure for table `newsletter`
--

CREATE TABLE IF NOT EXISTS `newsletter` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Subject` varchar(255) NOT NULL,
  `Body` text NOT NULL,
  `DateTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `Status` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `newsletter`
--

INSERT INTO `newsletter` (`ID`, `Subject`, `Body`, `DateTime`, `Status`) VALUES
(1, 'Welcome Email', '<p>Hi<strong> Subscriber !!!</strong></p>', '2015-03-30 11:48:38', 0),
(2, 'Giri Itenary', '<p><strong>Day 1</strong> Come to Camp</p>\\r\\n<p><strong>Day 2</strong> Go back</p>', '2015-04-06 11:36:50', 1),
(4, 'Test Case', '<p>This is just to test the working.</p>', '2015-04-06 11:34:42', 1);

-- --------------------------------------------------------

--
-- Table structure for table `subscriberinfo`
--

CREATE TABLE IF NOT EXISTS `subscriberinfo` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `DaySubscribed` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `ReceivedNewsletter` tinyint(1) NOT NULL DEFAULT '0',
  `Status` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`ID`),
  UNIQUE KEY `Email` (`Email`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `subscriberinfo`
--

INSERT INTO `subscriberinfo` (`ID`, `Name`, `Email`, `DaySubscribed`, `ReceivedNewsletter`, `Status`) VALUES
(1, 'Shivam Singhal', 'singhal.shivam1994@gmail.com', '2015-04-06 11:36:36', 0, 1),
(2, 'Ritwik Garg', 'garg.ritwik@gmail.com', '2015-04-06 11:36:36', 0, 1),
(3, 'sukham', 'sukham.bagga@gmail.com', '2015-04-06 11:36:36', 0, 1),
(4, 'shashwat', 'shashwatnaulakha7@gmail.com', '2015-04-06 11:36:36', 0, 1),
(5, 'Swati', 'swati.varma58@gmail.com', '2015-04-06 11:51:03', 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `toursinfo`
--

CREATE TABLE IF NOT EXISTS `toursinfo` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `TourName` varchar(255) NOT NULL,
  `Description` text NOT NULL,
  `DayCreated` date NOT NULL,
  `Duration` varchar(11) NOT NULL,
  `Package` double NOT NULL,
  `Status` tinyint(1) NOT NULL DEFAULT '1',
  `StartDate` date NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `toursinfo`
--

INSERT INTO `toursinfo` (`ID`, `TourName`, `Description`, `DayCreated`, `Duration`, `Package`, `Status`, `StartDate`) VALUES
(1, 'Giri Camping Tour', 'Giri Camp is an initiative to explore the concept of Responsible Tourism. We qualify most of the criteria laid down by The 2002 Cape Town Declaration on Responsible Tourism in Destinations. \\r\\n\\r\\nThe approach to the camp involves a level walk of 20-25 minutes on the bank of Giri Ganga River. Located in a remote area near Solan in Himachal Pradesh, the camp combines nature, adventure and local culture to give its guests a unique accommodation and a soul-filling experience', '2015-03-19', '2D/1N', 2500, 1, '2015-03-20'),
(2, 'Rishikesh Camping Tour', 'Good', '2015-03-20', '3D/2N', 5000, 0, '2015-03-30'),
(3, 'TRIUND TREK', 'Triund is the crown jewel of dharamshala , situated in the laps of dhauladhar mountains, it has the perfect view of the dhauladhar mountains on one side and kangra valley on the other. Triund is a very popular trekking spot . Triund attracts a lot of tourist every year from India and all over the world .   Triund  trek can be described as a tranquil trek which can be easily accomplished by almost all age groups . Triund has an unambiguous byway which goes through a beautiful mixed forest of oak, deodar and rhododendron . Trek is fairly easy for the first five kilometers but the last one kilometer may require a bit of toil , the last one kilometer is popularly know as the â€œ22 curvesâ€ as it has 22 tiring  curves before you finally reach Triund.', '2015-03-23', '2D/1N', 3000, 1, '2015-04-03'),
(4, 'Jim Corbett Park Trip', 'Natureâ€™s beauty attracts you, and u love to see tigers, lions, deer, Elephants and like to wake up with chirping birds sound rather than a alarm clock. Jim Corbett National Park is the right place to visit and spend holidays.\\\\\\\\r\\\\\\\\n\\\\\\\\r\\\\\\\\nWildlife trips are always a great choice to spend your holidays with Children, Family and Friends. It also connects you to nature and elevates you spiritually in life as nature teaches us much more than books.\\\\\\\\r\\\\\\\\nJim Corbett National Park is a natural habitat of the rare species of Tigers that are facing extinction. Itâ€™s also a place where u will find out 1000 of more rare species of fauna and flora.', '2015-03-23', '3D/2N', 10000, 1, '2015-04-06');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
