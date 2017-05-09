-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 09, 2017 at 07:41 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `facebookdb`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `user1` (IN `Firstname` VARCHAR(22), IN `Lastname` VARCHAR(22), IN `Prof_pic` VARCHAR(222), IN `EmailId` VARCHAR(22), IN `Password` VARCHAR(22), IN `DOB` VARCHAR(30), IN `Gender` VARCHAR(11))  begin
insert into registration(Firstname,Lastname,Prof_pic,EmailId,Password,DOB,Gender)
values(Firstname,Lastname,Prof_pic,EmailId,Password,DOB,Gender);
end$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `persons`
--

CREATE TABLE `persons` (
  `ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `LoginId` int(11) NOT NULL,
  `Firstname` varchar(22) DEFAULT NULL,
  `Lastname` varchar(22) DEFAULT NULL,
  `Prof_pic` varchar(222) DEFAULT NULL,
  `EmailId` varchar(22) NOT NULL,
  `Password` varchar(22) DEFAULT NULL,
  `DOB` varchar(30) NOT NULL,
  `Gender` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`LoginId`, `Firstname`, `Lastname`, `Prof_pic`, `EmailId`, `Password`, `DOB`, `Gender`) VALUES
(1, 'seetha', 'Lakshmi', 'Profile_pic/k.png', 'seetha123@gmail.com', 'seethalakshmi', '18/09/1992', 'Female'),
(2, 'Thara', 'Krishna', 'profile_pic/hai.png', 'tharak@gmail.com', 'tharakrishna', '10/05/1991', 'Female'),
(3, 'Amala', 'dev', 'profile_pic/3.jpg', 'amaladev485@gmail.com', '123456amala', '0.000502008032128514', 'Female'),
(4, 'Smruthi', 'k', 'profile_pic/sidhu.jpg', 'k.smruthi.smruthi@gmai', 'sidhu485', '18/09/1992', 'female'),
(18, 'surya', 's', 'profile_pic/s1.jpg', 'surya4444@gmail.com', 'suryaprabha', '14-10-1895', 'female'),
(22, 'Ram', 'd', 'profile_pic/s2.jpg', 'ram@gmail.com', 'ramdevS1', '14-12-1893', 'male'),
(23, 'Shyam', 'Jith', 'profile_pic/s3.jpg', 'shyamjith@gmail.com', 'shyamJithk4', '14-9-1893', 'male'),
(26, 'Navya', 'S', 'profile_pic/s4.jpg', 'navya78@gmail.com', 'sree123as', '15-8-1993', 'female'),
(28, 'Shyam', 'surya', 'profile_pic/s5.jpg\r\n', 'shyams4@gmail.com', 'Shyam32', '3-5-1993', 'male'),
(29, 'Shyam', 'surya', '', 'shyams4@gmail.com', NULL, '3-5-1993', 'male');

-- --------------------------------------------------------

--
-- Table structure for table `sample`
--

CREATE TABLE `sample` (
  `rollnumber` int(22) NOT NULL,
  `firstname` varchar(40) NOT NULL,
  `lastname` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `persons`
--
ALTER TABLE `persons`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`LoginId`);

--
-- Indexes for table `sample`
--
ALTER TABLE `sample`
  ADD PRIMARY KEY (`rollnumber`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `LoginId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
--
-- AUTO_INCREMENT for table `sample`
--
ALTER TABLE `sample`
  MODIFY `rollnumber` int(22) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
