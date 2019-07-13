-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 13, 2019 at 01:45 PM
-- Server version: 10.3.15-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `usermodule`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `intUserID` int(11) NOT NULL COMMENT 'Primary key',
  `txtFirstname` varchar(255) NOT NULL COMMENT 'Firstname of the user',
  `txtLastname` varchar(255) NOT NULL COMMENT 'Lastname of the user',
  `txtIDNumber` varchar(13) NOT NULL COMMENT 'S.A 13 Digit ID Number',
  `txtDOB` varchar(10) NOT NULL COMMENT 'Date of birth',
  `txtGender` varchar(6) NOT NULL COMMENT 'Male or Female',
  `txtUserType` varchar(14) NOT NULL COMMENT 'Administrator, Developer, Technical user',
  `txtEmail` varchar(255) NOT NULL COMMENT 'email address',
  `txtPassword` varchar(255) NOT NULL,
  `txtUserDateCreated` varchar(10) NOT NULL COMMENT 'User date created',
  `txtStatus` varchar(10) NOT NULL COMMENT 'Active, Inactive, Dormant',
  `txtUserNote` varchar(1024) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`intUserID`, `txtFirstname`, `txtLastname`, `txtIDNumber`, `txtDOB`, `txtGender`, `txtUserType`, `txtEmail`, `txtPassword`, `txtUserDateCreated`, `txtStatus`, `txtUserNote`) VALUES
(1, 'Banele', 'Mlamleli', '1234567890123', '2019-06-23', 'Female', 'Administrator', 'banele@overdrive.co.za', '098f6bcd4621d373cade4e832627b4f6', '2019-06-23', 'Inactive', 'Developer testing text'),
(2, 'test', 'test', '1234567890098', '2019-06-23', 'Male', 'Administrator', 'test@test.com', '098f6bcd4621d373cade4e832627b4f6', '2019-06-20', 'Active', 'test user text. Test status changed to Active and gender to Male'),
(3, 'one', 'one', '1111111111111', '2019-06-01', 'Male', 'Administrator', 'one@one.com', '69206c6971528ae2e0c32ddeb21653df', '2019-06-19', 'Active', 'One testing text'),
(5, 'two', 'two', '1231231231231', '2019-06-24', 'Male', 'Administrator', 'two@two.com', '54d7c9069d63f1fa5525dd789ab6ba98', '2019-06-23', 'Active', 'Two testing text'),
(6, 'three', 'three', '3333333333333', '2019-06-29', 'Female', 'Technical user', 'three@three.co', '06b9c378d1f6d8f613a8047875fc3e2f', '2019-06-23', 'Inactive', 'Three testing text'),
(8, 'Sethu', 'Mhlanga', '2132132131237', '2019-04-01', 'Female', 'Administrator', 'sethu@sethu.com', '424f49d9263231f23046192ff626dac0', '2019-07-09', 'Inactive', 'Sethu text');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`intUserID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `intUserID` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Primary key', AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
