-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 10, 2022 at 05:09 AM
-- Server version: 8.0.27
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `studentdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `id` int NOT NULL AUTO_INCREMENT,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `email`, `password`) VALUES
(3, 'admin@gmail.com', 'Admin123');

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

DROP TABLE IF EXISTS `book`;
CREATE TABLE IF NOT EXISTS `book` (
  `author` varchar(255) NOT NULL,
  `isbn` int NOT NULL,
  `category` varchar(255) NOT NULL,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `photo` varchar(255) NOT NULL,
  PRIMARY KEY (`isbn`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`author`, `isbn`, `category`, `title`, `photo`) VALUES
('E. Balagurusamy', 101, 'Computer', 'Programming In Ansi C', '1.jpg'),
('Herbert Schildt', 102, 'Computer', 'C++, The Complete Reference', '2.jpg'),
('Herbert Schildt', 103, 'Computer', 'Java: The Complete Reference', '3.jpg'),
('Elsevier Science', 104, 'Civil', 'Civil  Reference', '1.jpg'),
('Edward H. Smith', 105, 'Mechanical', 'Mechanical Reference', '1.jpg'),
('Elsevier Science', 106, 'Electrical', 'Electrical Reference', '1.jpg'),
('Pravin Kumar', 107, 'Mechanical', 'Basic Mechanical Engineering', '2.jpg'),
('P.K. Jayasree', 108, 'Civil', 'Practical Civil', '2.jpg'),
('P. K. Mishra', 109, 'Electrical', 'Objective Of Electrical', '2.jpg'),
('Basant Agrawal', 110, 'Mechanical', 'Basic Mechanical Engineering', '3.jpg'),
('Tyler G. Hicks', 111, 'Civil', 'Civil Engineering Formulas', '3.jpg'),
('George Hart', 112, 'Electrical', 'Ugly Electrical', '3.jpg'),
('Paulo Davim', 114, 'Mechanical', 'Mechanical Eng Edu', '4.jpg'),
('Marko Gargenta', 113, 'Computer', 'Learning Android', '4.jpg'),
('Great Britain', 115, 'Civil', 'Civil Eng Procedure', '4.jpg'),
('E A Reeves', 116, 'Electrical', 'Newnes Electrical', '4.jpg'),
('Andrew Tanenbaum', 117, 'Computer', 'Computer Networks', '5.jpg'),
('Kiran Patil', 118, 'Mechanical', 'Mechanical Operations', '5.jpg'),
('Karol Sikora', 119, 'Civil', 'Treatment of Cancer', '5.jpg'),
('Paul Rosenberg', 120, 'Electrical', 'Electrical Pal', '5.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `faculty_registration`
--

DROP TABLE IF EXISTS `faculty_registration`;
CREATE TABLE IF NOT EXISTS `faculty_registration` (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `FirstName` varchar(255) NOT NULL,
  `lastName` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `profile_photo` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `faculty_registration`
--

INSERT INTO `faculty_registration` (`id`, `FirstName`, `lastName`, `email`, `profile_photo`, `password`) VALUES
(1, 'Faculty', 'Name', 'facultyname@gmail.com', '../Photos/Faculty_Profile_Photos/Profile3.jpg', 'Aa123456');

-- --------------------------------------------------------

--
-- Table structure for table `material`
--

DROP TABLE IF EXISTS `material`;
CREATE TABLE IF NOT EXISTS `material` (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `uploaded_on` varchar(255) NOT NULL,
  `descc` varchar(255) NOT NULL,
  `file_name` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `material`
--

INSERT INTO `material` (`id`, `uploaded_on`, `descc`, `file_name`, `link`) VALUES
(1, '01-05-2022', '', 'General Question Bank.pdf', ''),
(2, '01-05-2022', '', '', 'https://meet.google.com/fks-gmih-sgy'),
(3, '01-05-2022', '', 'IMP Question Bank.pdf', 'https://meet.google.com/vzv-ndxn-nmn');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

DROP TABLE IF EXISTS `news`;
CREATE TABLE IF NOT EXISTS `news` (
  `file_name` varchar(255) NOT NULL,
  `uploaded_on` varchar(255) NOT NULL,
  `id` int NOT NULL AUTO_INCREMENT,
  `descc` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`file_name`, `uploaded_on`, `id`, `descc`, `link`) VALUES
('1.jpeg', '01-05-2022', 1, 'choose to challenge', ''),
('2.jpeg', '01-05-2022', 2, 'Water Filter', ''),
('3.jpg', '01-05-2022', 3, 'Love Food Stop West.', ''),
('4.jpg', '01-05-2022', 4, 'Sharing Clothes.', ''),
('5.jpg', '01-05-2022', 5, 'Young Day', ''),
('6.jpg', '01-05-2022', 6, 'Cancer Awareness', ''),
('7.jpg', '01-05-2022', 7, 'world cancer day', 'https://meet.google.com/ici-jskk-buy');

-- --------------------------------------------------------

--
-- Table structure for table `result`
--

DROP TABLE IF EXISTS `result`;
CREATE TABLE IF NOT EXISTS `result` (
  `file_name` varchar(255) NOT NULL,
  `uploaded_on` varchar(255) NOT NULL,
  `id` int NOT NULL AUTO_INCREMENT,
  `descc` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `result`
--

INSERT INTO `result` (`file_name`, `uploaded_on`, `id`, `descc`, `link`) VALUES
('1.jpg', '01-05-2022', 1, 'Result 1', ''),
('2.jpg', '01-05-2022', 2, 'Result 2', ''),
('3.jpg', '01-05-2022', 3, 'Result 3', ''),
('4.jpg', '01-05-2022', 4, 'Result 4', ''),
('5.jpg', '01-05-2022', 5, 'Result 5', ''),
('6.png', '01-05-2022', 6, 'Result 6', ''),
('8.png', '01-05-2022', 7, 'Result 7', '');

-- --------------------------------------------------------

--
-- Table structure for table `scheduling`
--

DROP TABLE IF EXISTS `scheduling`;
CREATE TABLE IF NOT EXISTS `scheduling` (
  `file_name` varchar(255) NOT NULL,
  `uploaded_on` varchar(255) NOT NULL,
  `id` int NOT NULL AUTO_INCREMENT,
  `descc` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `scheduling`
--

INSERT INTO `scheduling` (`file_name`, `uploaded_on`, `id`, `descc`, `link`) VALUES
('1.jpeg', '01-05-2022', 1, 'Diploma Sem-6 Mid Exam', ''),
('3.jpeg', '01-05-2022', 2, 'Academic Calendar.', 'https://www.gmit.edu.in/'),
('2.jpeg', '01-05-2022', 3, 'Holiday Of Mahashivratri !', ''),
('4.jpeg', '01-05-2022', 4, 'Hollyday Of Makarsnkranti !', 'https://www.gmit.edu.in/'),
('5.jpeg', '01-05-2022', 5, 'Dress Code Instruction', ''),
('6.jpeg', '01-05-2022', 6, 'Pay Your Remaing Fees', 'https://www.gmit.edu.in/'),
('7.jpeg', '01-05-2022', 7, 'Republic Day Celebration.', ''),
('8.jpeg', '01-05-2022', 8, 'Carry Your ID Card Always.', '');

-- --------------------------------------------------------

--
-- Table structure for table `student_ragistration`
--

DROP TABLE IF EXISTS `student_ragistration`;
CREATE TABLE IF NOT EXISTS `student_ragistration` (
  `FirstName` varchar(255) NOT NULL,
  `lastName` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `enrollment` bigint NOT NULL,
  `id` int NOT NULL AUTO_INCREMENT,
  `password` varchar(255) NOT NULL,
  `branch` varchar(255) NOT NULL,
  `profile_photo` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `student_ragistration`
--

INSERT INTO `student_ragistration` (`FirstName`, `lastName`, `email`, `enrollment`, `id`, `password`, `branch`, `profile_photo`) VALUES
('Student', 'Name', 'studentname@gmail.com', 0, 2, 'Aa123456', 'Computer-Diploma', '../Photos/Student_Profile_Photos/profile1.jpg');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
