drop database if exists dn_phr;
create database  dn_phr;
use  dn_phr;
 

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

CREATE TABLE IF NOT EXISTS `dregistration` (
  `txtId` int(11) NOT NULL AUTO_INCREMENT,
  `full_name` varchar(100) NOT NULL,
  `contact_number` varchar(10) NOT NULL,
  `email_id` varchar(100) NOT NULL,
  `answer` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  PRIMARY KEY (`txtId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `dregistration`
--

INSERT INTO `dregistration` (`txtId`, `full_name`, `contact_number`, `email_id`, `answer`, `password`) VALUES
(2, 'anup', '898989898', 'admin@gmail.com', 'huhkihkhkih', 'admin'),
(3, 'pravin', '898989898', 'cloud@gmail.com', 'huhkihkhkih', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `pregistration`
--

CREATE TABLE IF NOT EXISTS `pregistration` (
  `txtId` int(11) NOT NULL AUTO_INCREMENT,
  `full_name` varchar(100) NOT NULL,
  `contact_number` varchar(10) NOT NULL,
  `email_id` varchar(100) NOT NULL,
  `answer` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  PRIMARY KEY (`txtId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `pregistration`
--

INSERT INTO `pregistration` (`txtId`, `full_name`, `contact_number`, `email_id`, `answer`, `password`) VALUES
(2, 'user', '123567', 'user@a.com', 'fdflkdsnf;dsfn;', 'user'),
(3, 'Roshani', '7387147173', 'pravintumsare@gmaIL.com', 'null', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `sharefile`
--

CREATE TABLE IF NOT EXISTS `sharefile` (
  `txtId` int(11) NOT NULL AUTO_INCREMENT,
  `txtFileCloud1` text,
  `txtFileCloud2` text,
  `filename` varchar(500) DEFAULT NULL,
  `extention` varchar(500) DEFAULT NULL,
  `fileType` varchar(500) DEFAULT NULL,
  `fileSize` varchar(500) DEFAULT NULL,
  `entryDate` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`txtId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `sharefile`
--

INSERT INTO `sharefile` (`txtId`, `txtFileCloud1`, `txtFileCloud2`, `filename`, `extention`, `fileType`, `fileSize`, `entryDate`) VALUES
(1, '../filecloud1/1480618601_splited_1_bbq-pic.jpg', '../filecloud2/1480618601_splited_2_bbq-pic.jpg', 'bbq-pic.jpg', 'jpg', 'image/jpeg', '68038', '01-12-16'),
(2, '../filecloud1/1480618834_splited_1_flowchart.docx', '../filecloud2/1480618834_splited_2_flowchart.docx', 'flowchart.docx', 'docx', 'application/vnd.openxmlformats-officedocument.wordprocessingml.document', '46961', '01-12-16'),
(3, '../filecloud1/1480618836_splited_1_flowchart.docx', '../filecloud2/1480618836_splited_2_flowchart.docx', 'flowchart.docx', 'docx', 'application/vnd.openxmlformats-officedocument.wordprocessingml.document', '46961', '01-12-16'),
(4, '../filecloud1/1480618946_splited_1_Screenshot (1).png', '../filecloud2/1480618946_splited_2_Screenshot (1).png', 'Screenshot (1).png', 'png', 'image/png', '160445', '01-12-16');

-- --------------------------------------------------------

--
-- Table structure for table `sharefileaccess`
--

CREATE TABLE IF NOT EXISTS `sharefileaccess` (
  `txtId` int(11) NOT NULL AUTO_INCREMENT,
  `master` varchar(100) NOT NULL,
  `keypubic` varchar(100) NOT NULL,
  `hasAccess` varchar(100) NOT NULL,
  `vendorId` varchar(2) NOT NULL,
  `filename` text NOT NULL,
  `txtFileCloud1` text NOT NULL,
  `txtFileCloud2` text NOT NULL,
  `entryDate` varchar(40) NOT NULL,
  `requestId` varchar(20) NOT NULL,
  PRIMARY KEY (`txtId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `sharefileaccess`
--

INSERT INTO `sharefileaccess` (`txtId`, `master`, `keypubic`, `hasAccess`, `vendorId`, `filename`, `txtFileCloud1`, `txtFileCloud2`, `entryDate`, `requestId`) VALUES
(1, '', '', 'N', '3', 'bbq-pic.jpg', 'bbq-pic.jpg', 'bbq-pic.jpg', '01-12-16', '1');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
