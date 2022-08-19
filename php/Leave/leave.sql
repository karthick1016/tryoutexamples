-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 19, 2022 at 12:03 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `leave`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `adminid` int(20) NOT NULL,
  `name` varchar(30) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `password` varchar(30) DEFAULT NULL,
  `number` bigint(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`adminid`, `name`, `email`, `password`, `number`) VALUES
(1, 'Karthick', 'karthi@gmail.com', 'karthi1016', 7339218794);

-- --------------------------------------------------------

--
-- Table structure for table `assoc`
--

CREATE TABLE `assoc` (
  `associd` int(5) NOT NULL,
  `employeeid` int(5) DEFAULT NULL,
  `managerid` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `assoc`
--

INSERT INTO `assoc` (`associd`, `employeeid`, `managerid`) VALUES
(72, 74, 40),
(73, 75, 42),
(74, 76, 43),
(75, 77, 41),
(76, 78, NULL),
(94, 96, 44),
(95, 97, 40);

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `id` int(10) NOT NULL,
  `name` varchar(25) DEFAULT NULL,
  `email` varchar(25) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `phonenumber` bigint(14) DEFAULT NULL,
  `managerId` int(5) DEFAULT NULL,
  `usertype` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`id`, `name`, `email`, `password`, `phonenumber`, `managerId`, `usertype`) VALUES
(74, 'Saravana', 'saravana09@gmail.com', 'saravana98', 6789098766, 40, '1'),
(75, 'Jeeva', 'jeeva@gmail.com', 'jeeva98', 9089767867, 42, '1'),
(76, 'Keerthana', 'keerthana87@gmail.com', 'keerthana87', 7890908012, 43, '1'),
(77, 'Pranavi', 'pranavi@gmail.com', 'pranavi23', 7668879987, 41, '1'),
(78, 'Pavithra', 'pavithra@gmail.com', 'pavithra23', 9876423412, NULL, '1'),
(96, 'Mahesh', 'mahesh23@gmail.com', '83cd20b51c7d99e8aa12a39978f7f094', 8900789009, 44, '1'),
(97, 'Jacob', 'jacob123@gmail.com', '655397c597ea7b685dfd45775ff70b07', 8778907623, 40, '1');

-- --------------------------------------------------------

--
-- Table structure for table `leaveapprove`
--

CREATE TABLE `leaveapprove` (
  `id` int(5) NOT NULL,
  `fromdate` varchar(11) DEFAULT NULL,
  `todate` varchar(11) DEFAULT NULL,
  `leavetypes` varchar(25) DEFAULT NULL,
  `days` int(5) DEFAULT NULL,
  `description` varchar(200) DEFAULT NULL,
  `employeename` varchar(25) DEFAULT NULL,
  `status` varchar(20) DEFAULT NULL,
  `employeeid` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `leaveapprove`
--

INSERT INTO `leaveapprove` (`id`, `fromdate`, `todate`, `leavetypes`, `days`, `description`, `employeename`, `status`, `employeeid`) VALUES
(8, '2022-08-11', '2022-08-11', 'Casual', 1, 'Going to Home', 'Jeeva', 'Decline', 75),
(11, '2022-08-11', '2022-08-12', 'Sick', 2, 'Sick', 'Saravana', 'Approve', 74),
(12, '2022-08-16', '2022-08-17', 'Personal', 2, 'Going to home', 'Saravana', 'Decline', 74),
(13, '08/17/2022', '08/18/2022', 'Sick', 2, 'leave\r\n', 'Saravana', 'Decline', 74),
(33, '08/18/2022', '08/19/2022', 'Personal', 2, 'My sister Wedding', 'Pranavi', 'Approve', 77),
(39, '08/17/2022', '08/17/2022', 'Casual', 1, 'sdj', 'Saravana', 'Decline', 74),
(40, '08/17/2022', '08/18/2022', 'Sick', 2, 'shjdfiaiuiafehajdh', 'Saravana', 'Decline', 74),
(41, '08/16/2022', '08/25/2022', 'Personal', 5, 'going to tour', 'Saravana', 'Approve', 74);

-- --------------------------------------------------------

--
-- Table structure for table `leaves`
--

CREATE TABLE `leaves` (
  `sno` int(5) NOT NULL,
  `types` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `leaves`
--

INSERT INTO `leaves` (`sno`, `types`) VALUES
(3, 'Sick'),
(4, 'Casual'),
(8, 'Personal');

-- --------------------------------------------------------

--
-- Table structure for table `login_table`
--

CREATE TABLE `login_table` (
  `id` int(5) NOT NULL,
  `username` varchar(25) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `usertype` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login_table`
--

INSERT INTO `login_table` (`id`, `username`, `password`, `usertype`) VALUES
(28, 'Saravana', '6e0478aa37ac4824de86a34952f03e84', 'Employee'),
(31, 'Saravana', '6e0478aa37ac4824de86a34952f03e84', 'Employee'),
(32, 'Saravana', '50cca220aec23b72829927cb83a065bd', 'Manager'),
(33, 'Akash', '3f415830b32967b8557d0aa8e17392d8', 'Manager'),
(34, 'Saravana', '6e0478aa37ac4824de86a34952f03e84', 'Employee'),
(40, 'Saravana', '6e0478aa37ac4824de86a34952f03e84', 'Employee'),
(41, 'Saravana', '6e0478aa37ac4824de86a34952f03e84', 'Employee'),
(42, 'Saravana', '6e0478aa37ac4824de86a34952f03e84', 'Employee'),
(43, 'Saravana', '6e0478aa37ac4824de86a34952f03e84', 'Employee'),
(44, 'Saravana', '6e0478aa37ac4824de86a34952f03e84', 'Employee'),
(45, 'Prabhu', '50fcc21f556ddd9b3bed6b666ae70432', 'Manager'),
(46, 'Saravana', '6e0478aa37ac4824de86a34952f03e84', 'Employee'),
(47, 'Prakash', '3160e81ff90e21f4fbb07fb9e31a43ee', 'Manager'),
(48, 'Saravana', '6e0478aa37ac4824de86a34952f03e84', 'Employee'),
(49, 'Saravana', '6e0478aa37ac4824de86a34952f03e84', 'Employee'),
(50, 'Saravana', '6e0478aa37ac4824de86a34952f03e84', 'Employee'),
(51, 'Saravana', '6e0478aa37ac4824de86a34952f03e84', 'Employee'),
(52, 'Hari Dharshini', 'a264ca34aa1888d3e5712ac3a435d900', 'Manager'),
(53, 'Monisha', '80bc9d000e13f402d90b45c30cf37533', 'Manager'),
(54, 'Akash', '87812fc8f9a05ae1e20eed98c65ebf60', 'Manager'),
(55, 'Oviya', '1f498368b354a73d035f6d9e18135f3c', 'Manager'),
(56, 'Mithun', '3cfafba10e3505c767e8f992db6c541b', 'Manager'),
(57, 'Saravana', '6e0478aa37ac4824de86a34952f03e84', 'Employee'),
(58, 'Saravana', '6e0478aa37ac4824de86a34952f03e84', 'Employee'),
(59, 'Saravana', '6e0478aa37ac4824de86a34952f03e84', 'Employee'),
(60, 'Saravana', '6e0478aa37ac4824de86a34952f03e84', 'Employee'),
(61, 'Saravana', '6e0478aa37ac4824de86a34952f03e84', 'Employee'),
(62, 'Saravana', '6e0478aa37ac4824de86a34952f03e84', 'Employee'),
(63, 'Saravana', '6e0478aa37ac4824de86a34952f03e84', 'Employee'),
(64, 'Saravana', '6e0478aa37ac4824de86a34952f03e84', 'Employee'),
(65, 'Saravana', '6e0478aa37ac4824de86a34952f03e84', 'Employee'),
(66, 'Saravana', '6e0478aa37ac4824de86a34952f03e84', 'Employee'),
(67, 'Saravana', '6e0478aa37ac4824de86a34952f03e84', 'Employee'),
(68, 'Saravana', '6e0478aa37ac4824de86a34952f03e84', 'Employee'),
(69, 'Saravana', '6e0478aa37ac4824de86a34952f03e84', 'Employee'),
(70, 'Saravana', '6e0478aa37ac4824de86a34952f03e84', 'Employee'),
(71, 'Saravana', '6e0478aa37ac4824de86a34952f03e84', 'Employee'),
(72, 'Saravana', '6e0478aa37ac4824de86a34952f03e84', 'Employee'),
(73, 'Saravana', '6e0478aa37ac4824de86a34952f03e84', 'Employee'),
(74, 'Saravana', '6e0478aa37ac4824de86a34952f03e84', 'Employee'),
(75, 'Mahesh', '83cd20b51c7d99e8aa12a39978f7f094', 'Employee'),
(76, 'Jacob', '655397c597ea7b685dfd45775ff70b07', 'Employee'),
(77, 'James', '9ba36afc4e560bf811caefc0c7fddddf', 'Employee'),
(78, 'James', '1b032f4c91e7b3552780817b3e32fb50', 'Employee'),
(79, 'James', '1b032f4c91e7b3552780817b3e32fb50', 'Employee'),
(80, 'James', '1b032f4c91e7b3552780817b3e32fb50', 'Employee'),
(81, 'James', '1b032f4c91e7b3552780817b3e32fb50', 'Employee'),
(82, 'James', '9ba36afc4e560bf811caefc0c7fddddf', 'Employee'),
(83, 'James', '1b032f4c91e7b3552780817b3e32fb50', 'Employee'),
(84, 'kumaran', 'd35464e39953a02c9f5cd9457974440a', '');

-- --------------------------------------------------------

--
-- Table structure for table `manager`
--

CREATE TABLE `manager` (
  `managerid` int(10) NOT NULL,
  `managername` varchar(25) DEFAULT NULL,
  `email` varchar(25) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `phonenumber` bigint(15) DEFAULT NULL,
  `usertype` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `manager`
--

INSERT INTO `manager` (`managerid`, `managername`, `email`, `password`, `phonenumber`, `usertype`) VALUES
(40, 'Hari Dharshini', 'haridharshu23@gmail.com', '73295a7430572090d36bdd56010ac5b6', 9012345798, '0'),
(41, 'Monisha', 'monisha123@gmail.com', 'monisha24', 8978651234, '0'),
(42, 'Akash', 'akash27@gmail.com', 'akash234', 8798564532, '0'),
(43, 'Oviya', 'oviya@gmail.com', 'aa75d1bf81dde79c57002acbf8ea0684', 8712060567, '0'),
(44, 'Mithun', 'mithun76@gmail.com', 'ba36e78d5efca8cdcd7b7fe41bc6f610', 8543213401, '0');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`adminid`);

--
-- Indexes for table `assoc`
--
ALTER TABLE `assoc`
  ADD PRIMARY KEY (`associd`),
  ADD KEY `managerid` (`managerid`),
  ADD KEY `id` (`employeeid`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `phonenumber` (`phonenumber`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `managerId` (`managerId`);

--
-- Indexes for table `leaveapprove`
--
ALTER TABLE `leaveapprove`
  ADD PRIMARY KEY (`id`),
  ADD KEY `employeeid` (`employeeid`);

--
-- Indexes for table `leaves`
--
ALTER TABLE `leaves`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `login_table`
--
ALTER TABLE `login_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `manager`
--
ALTER TABLE `manager`
  ADD PRIMARY KEY (`managerid`),
  ADD UNIQUE KEY `phonenumber` (`phonenumber`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `adminid` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `assoc`
--
ALTER TABLE `assoc`
  MODIFY `associd` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=104;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=111;

--
-- AUTO_INCREMENT for table `leaveapprove`
--
ALTER TABLE `leaveapprove`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `leaves`
--
ALTER TABLE `leaves`
  MODIFY `sno` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `login_table`
--
ALTER TABLE `login_table`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85;

--
-- AUTO_INCREMENT for table `manager`
--
ALTER TABLE `manager`
  MODIFY `managerid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `assoc`
--
ALTER TABLE `assoc`
  ADD CONSTRAINT `assoc_ibfk_2` FOREIGN KEY (`managerid`) REFERENCES `manager` (`managerid`),
  ADD CONSTRAINT `assoc_ibfk_3` FOREIGN KEY (`employeeid`) REFERENCES `employee` (`id`);

--
-- Constraints for table `employee`
--
ALTER TABLE `employee`
  ADD CONSTRAINT `employee_ibfk_1` FOREIGN KEY (`managerId`) REFERENCES `manager` (`managerid`);

--
-- Constraints for table `leaveapprove`
--
ALTER TABLE `leaveapprove`
  ADD CONSTRAINT `leaveapprove_ibfk_1` FOREIGN KEY (`employeeid`) REFERENCES `employee` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
