-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 06, 2020 at 03:54 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

CREATE DATABASE cardb;
USE cardb;

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
  `car_tagplate` varchar(7) NOT NULL,
  `car_img` varchar(50) NOT NULL,
  `price` int(4) NOT NULL,
  `car_status` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `car`
--

INSERT INTO `car` (`car_ID`, `car_make`, `car_model`, `car_color`, `car_size`, `car_tagplate`, `car_img`, `price`, `car_status`) VALUES
(1, 'Audi', 'R8', 'white', 'fullsize', 'CL123', 'assets/images/cars/audi-r8.jpg', 40, 'no'),
(30, 'Chevrolet', 'Impala', 'white', 'fullsize', 'CIW123', 'assets/images/cars/chevrolet-impala-w.png', 35, 'yes'),
(31, 'Chevrolet', 'Impala', 'red', 'fullsize', 'CIR123', 'assets/images/cars/chevrolet-impala-r.jpg', 35, 'yes'),
(32, 'Chevrolet', 'Impala', 'blue', 'fullsize', 'CIB123', 'assets/images/cars/Chevrolet-Impala-b.jpg', 35, 'yes'),
(33, 'Dodge', 'Charger', 'blue', 'fullsize', 'DCB111', 'assets/images/cars/dodge-charger-blue.jpg', 35, 'no'),
(34, 'Dodge', 'Charger', 'white', 'fullsize', 'DCW112', 'assets/images/cars/dodge-charger.jpg', 35, 'yes'),
(35, 'Audi', 'Q7', 'silver', 'suv', 'AQ9999', 'assets/images/cars/audi-q7.jpg', 50, 'yes'),
(36, 'Nissan', 'Sentra', 'orange', 'compact', 'NSO111', 'assets/images/cars/nissan-sentra-o.jpg', 25, 'no'),
(37, '   BMW', 'X7', 'white', 'suv', 'BXW111', 'assets/images/cars/BMW-X7-w.jpg', 50, 'yes'),
(38, 'Chevrolet', 'Boltev', 'red', 'compact', 'CBR111', 'assets/images/cars/chevrolet-boltev.jpg', 25, 'yes'),
(39, 'Audi', 'A8', 'black', 'fullsize', 'AAB1111', 'assets/images/cars/audi-a8.jpg', 40, 'yes'),
(40, 'Audi', 'Q7', 'black', 'suv', 'AQB1111', 'assets/images/cars/audi-q7-b.jpg', 50, 'yes');

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
(1, 'Chi', 'cluong', '12345', 'cluong@yahoo.com', '1234567890', '1989-01-01'),
(2, 'pizza', 'pizza', 'pizza', 'pizza@pizza.com', '1231231234', '1987-01-01');

-- --------------------------------------------------------

--
-- Table structure for table `manage`
--

CREATE TABLE `manage` (
  `man_username` varchar(20) NOT NULL,
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

--
-- Dumping data for table `manager`
--

INSERT INTO `manager` (`man_username`, `man_password`) VALUES
('chiluong', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `reservation`
--

CREATE TABLE `reservation` (
  `res_ID` int(8) NOT NULL,
  `res_date` date NOT NULL,
  `res_rentstart_date` date NOT NULL,
  `res_rentend_date` date NOT NULL,
  `res_status` varchar(8) NOT NULL,
  `res_car_ID` int(11) NOT NULL,
  `res_cus_ID` int(11) NOT NULL,
  `res_amount` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `reservation`
--

INSERT INTO `reservation` (`res_ID`, `res_date`, `res_rentstart_date`, `res_rentend_date`, `res_status`, `res_car_ID`, `res_cus_ID`, `res_amount`) VALUES
(43, '2020-04-05', '2020-04-20', '2020-04-21', 'NR', 33, 1, 35),
(44, '2020-04-05', '2020-04-20', '2020-04-21', 'NR', 33, 1, 35),
(45, '2020-04-05', '2020-04-20', '2020-04-21', 'NR', 33, 1, 35),
(46, '2020-04-05', '2020-04-20', '2020-04-21', 'NR', 33, 1, 35),
(47, '2020-04-05', '2020-04-20', '2020-04-21', 'NR', 33, 1, 35),
(48, '2020-04-05', '2020-04-20', '2020-04-21', 'NR', 33, 1, 35),
(49, '2020-04-05', '2020-04-14', '2020-04-20', 'NR', 1, 1, 240),
(50, '2020-04-05', '2020-04-14', '2020-04-20', 'NR', 1, 1, 240),
(51, '2020-04-05', '2020-04-27', '2020-04-30', 'NR', 36, 1, 75);

-- --------------------------------------------------------

--
-- Table structure for table `transaction_paypal`
--

CREATE TABLE `transaction_paypal` (
  `pm_id` int(8) NOT NULL,
  `pm_date` date NOT NULL,
  `pm_cus_ID` int(11) NOT NULL,
  `pm_res_ID` int(11) NOT NULL,
  `pm_cus_name` varchar(255) DEFAULT NULL,
  `pm_key` varchar(255) DEFAULT NULL,
  `pm_hash` varchar(255) DEFAULT NULL,
  `pm_status` varchar(8) NOT NULL,
  `pm_amount` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `transaction_paypal`
--

INSERT INTO `transaction_paypal` (`pm_id`, `pm_date`, `pm_cus_ID`, `pm_res_ID`, `pm_cus_name`, `pm_key`, `pm_hash`, `pm_status`, `pm_amount`) VALUES
(13, '0000-00-00', 1, 47, 'cluong', 'PAYID-L2FCXTQ2SF30613PY9426036', 'e70c1e9d6a3c11afa30ea9dc113e45f0', 'yes', 35),
(14, '0000-00-00', 1, 47, 'cluong', 'PAYID-L2FCYVQ7D567244D88841834', 'af937d602d6aa4dc37d63f8b97842b7a', 'yes', 35),
(15, '0000-00-00', 1, 47, 'cluong', 'PAYID-L2FDQZQ5LP40691LG081582G', '64abe09b1de86586816d78545c6bf4e0', 'no', 35),
(16, '0000-00-00', 1, 48, 'cluong', 'PAYID-L2FEFGA8DN344198K836283S', 'dc20249f44b077936ea88f85f71df4c4', 'yes', 35),
(17, '0000-00-00', 1, 49, 'cluong', 'PAYID-L2FHCQQ2EW8401247327442R', '0a8734af1e52f2f688c8b138142feaad', 'yes', 240),
(18, '0000-00-00', 1, 50, 'cluong', 'PAYID-L2FHNNA0MR70244BD978715X', '5994fed04621bdc5dbea847ed3774141', 'yes', 240),
(19, '0000-00-00', 1, 51, 'cluong', 'PAYID-L2FHWRQ9V387343S11688624', '4661b5777a0f0915bca8f2b6fd434d50', 'no', 75);

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
  ADD PRIMARY KEY (`car_ID`),
  ADD KEY `man_username` (`man_username`);

--
-- Indexes for table `manager`
--
ALTER TABLE `manager`
  ADD PRIMARY KEY (`man_username`),
  ADD UNIQUE KEY `man_username` (`man_username`);

--
-- Indexes for table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`res_ID`),
  ADD UNIQUE KEY `res_ID` (`res_ID`),
  ADD KEY `reservation_fk0` (`res_car_ID`),
  ADD KEY `reservation_fk1` (`res_cus_ID`);

--
-- Indexes for table `transaction_paypal`
--
ALTER TABLE `transaction_paypal`
  ADD PRIMARY KEY (`pm_id`),
  ADD UNIQUE KEY `pm_id` (`pm_id`),
  ADD KEY `payment_fk0` (`pm_cus_ID`),
  ADD KEY `payment_fk1` (`pm_res_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `car`
--
ALTER TABLE `car`
  MODIFY `car_ID` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `cus_ID` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `res_ID` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `transaction_paypal`
--
ALTER TABLE `transaction_paypal`
  MODIFY `pm_id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `manage`
--
ALTER TABLE `manage`
  ADD CONSTRAINT `manage_fk0` FOREIGN KEY (`man_username`) REFERENCES `manager` (`man_username`),
  ADD CONSTRAINT `manage_fk1` FOREIGN KEY (`car_ID`) REFERENCES `car` (`car_ID`);

--
-- Constraints for table `reservation`
--
ALTER TABLE `reservation`
  ADD CONSTRAINT `reservation_fk0` FOREIGN KEY (`res_car_ID`) REFERENCES `car` (`car_ID`),
  ADD CONSTRAINT `reservation_fk1` FOREIGN KEY (`res_cus_ID`) REFERENCES `customer` (`cus_ID`);

--
-- Constraints for table `transaction_paypal`
--
ALTER TABLE `transaction_paypal`
  ADD CONSTRAINT `payment_fk0` FOREIGN KEY (`pm_cus_ID`) REFERENCES `reservation` (`res_cus_ID`),
  ADD CONSTRAINT `payment_fk1` FOREIGN KEY (`pm_res_ID`) REFERENCES `reservation` (`res_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
