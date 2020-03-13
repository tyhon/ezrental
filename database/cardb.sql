-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 13, 2020 at 07:18 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cardb`
--

-- --------------------------------------------------------

--
-- Table structure for table `car`
--

CREATE TABLE `car` (
  `car_ID` int(8) NOT NULL,
  `car_make` varchar(10) NOT NULL,
  `car_model` varchar(15) NOT NULL,
  `car_color` varchar(10) NOT NULL,
  `car_size` varchar(8) NOT NULL,
  `car_status` varchar(8) NOT NULL,
  `car_tagplate` varchar(7) NOT NULL,
  `car_img` varchar(50) NOT NULL,
  `price` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `car`
--

INSERT INTO `car` (`car_ID`, `car_make`, `car_model`, `car_color`, `car_size`, `car_status`, `car_tagplate`, `car_img`, `price`) VALUES
(1, 'Honda', 'Accord', 'White', 'Medium', 'Yes', 'LENA123', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `cus_ID` int(8) NOT NULL,
  `cus_FName` varchar(32) NOT NULL,
  `cus_username` varchar(20) NOT NULL,
  `cus_password` varchar(20) NOT NULL,
  `cus_email` varchar(32) NOT NULL,
  `cus_phone_no` char(10) NOT NULL,
  `cus_DOB` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`cus_ID`, `cus_FName`, `cus_username`, `cus_password`, `cus_email`, `cus_phone_no`, `cus_DOB`) VALUES
(1, 'Chi', 'cluong', '12345', 'cluong@yahoo.com', '1234567890', '1989-01-01');

-- --------------------------------------------------------

--
-- Table structure for table `manage`
--

CREATE TABLE `manage` (
  `manager_ID` varchar(20) NOT NULL,
  `car_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `manager`
--

CREATE TABLE `manager` (
  `man_username` varchar(20) NOT NULL,
  `man_password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `pm_id` int(8) NOT NULL,
  `pm_date` date NOT NULL,
  `pm_cus_ID` int(11) NOT NULL,
  `pm_res_ID` int(11) NOT NULL,
  `pm_start_date` date NOT NULL,
  `pm_return_date` date NOT NULL,
  `pm_status` varchar(8) NOT NULL,
  `pm_amount` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `reservation`
--

CREATE TABLE `reservation` (
  `res_ID` int(8) NOT NULL,
  `res_rentstart_date` date NOT NULL,
  `res_rentend_date` date NOT NULL,
  `res_status` varchar(8) NOT NULL,
  `res_car_ID` int(11) NOT NULL,
  `res_cus_ID` int(11) NOT NULL,
  `res_amout` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `car`
--
ALTER TABLE `car`
  ADD PRIMARY KEY (`car_ID`),
  ADD UNIQUE KEY `car_tagplate` (`car_tagplate`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`cus_ID`),
  ADD UNIQUE KEY `cus_username` (`cus_username`),
  ADD UNIQUE KEY `cus_email` (`cus_email`);

--
-- Indexes for table `manage`
--
ALTER TABLE `manage`
  ADD KEY `manage_fk0` (`manager_ID`),
  ADD KEY `manage_fk1` (`car_ID`);

--
-- Indexes for table `manager`
--
ALTER TABLE `manager`
  ADD PRIMARY KEY (`man_username`),
  ADD UNIQUE KEY `man_username` (`man_username`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`pm_id`),
  ADD UNIQUE KEY `pm_id` (`pm_id`),
  ADD KEY `payment_fk0` (`pm_cus_ID`),
  ADD KEY `payment_fk1` (`pm_res_ID`);

--
-- Indexes for table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`res_ID`),
  ADD UNIQUE KEY `res_ID` (`res_ID`),
  ADD KEY `reservation_fk0` (`res_car_ID`),
  ADD KEY `reservation_fk1` (`res_cus_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `car`
--
ALTER TABLE `car`
  MODIFY `car_ID` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `cus_ID` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `pm_id` int(8) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `res_ID` int(8) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `manage`
--
ALTER TABLE `manage`
  ADD CONSTRAINT `manage_fk0` FOREIGN KEY (`manager_ID`) REFERENCES `manager` (`man_username`),
  ADD CONSTRAINT `manage_fk1` FOREIGN KEY (`car_ID`) REFERENCES `car` (`car_ID`);

--
-- Constraints for table `payment`
--
ALTER TABLE `payment`
  ADD CONSTRAINT `payment_fk0` FOREIGN KEY (`pm_cus_ID`) REFERENCES `reservation` (`res_cus_ID`),
  ADD CONSTRAINT `payment_fk1` FOREIGN KEY (`pm_res_ID`) REFERENCES `reservation` (`res_ID`);

--
-- Constraints for table `reservation`
--
ALTER TABLE `reservation`
  ADD CONSTRAINT `reservation_fk0` FOREIGN KEY (`res_car_ID`) REFERENCES `car` (`car_ID`),
  ADD CONSTRAINT `reservation_fk1` FOREIGN KEY (`res_cus_ID`) REFERENCES `customer` (`cus_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
