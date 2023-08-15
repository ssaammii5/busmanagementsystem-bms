-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 15, 2023 at 09:53 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bus_management`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `email` varchar(50) NOT NULL,
  `password` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`email`, `password`) VALUES
('admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `bus`
--

CREATE TABLE `bus` (
  `bus_id` int(11) NOT NULL,
  `model_number` varchar(50) DEFAULT NULL,
  `licence_number` varchar(50) DEFAULT NULL,
  `mileage` varchar(20) DEFAULT NULL,
  `bus_type` varchar(50) DEFAULT NULL,
  `total_seat` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bus`
--

INSERT INTO `bus` (`bus_id`, `model_number`, `licence_number`, `mileage`, `bus_type`, `total_seat`) VALUES
(1046, 'Mercedes-Benz O405', 'PQR654CD', '35,000 miles', 'AC', '40'),
(1047, 'Volvo 7900 Electric', 'MNO987EF', ' 20,200 miles', 'NON-AC', '60'),
(1048, 'Volvo 9700', 'UVW321GH', '18,000 miles', 'AC', '35'),
(1049, 'Scania Interlink', 'XYZ987FG', '900 miles', 'AC', '50'),
(1050, 'Alexander Dennis Enviro200', 'QRS789ZZ', '8,900 miles', 'NON-AC', '55'),
(1051, 'Chevrolet Malibu', '29S789JK', '20,200 mile', 'AC', '65'),
(1052, 'Nissan Rogue', 'LMN321TU', '28,900 miles', 'AC', '60'),
(1053, 'BYD Double-decker', 'NOP123MN', '5,700 miles', 'AC', '50'),
(1056, 'Subaru Outback', 'QRS789JK', '110,600 miles', 'NON-AC', '50'),
(1057, 'Mercedes-Benz C-Class', 'RST987OP', '12,900 miles', 'AC', '50'),
(1058, 'Neoplan Tourliner', 'QRS789J2', '8,900 miles', 'NON-AC', '40');

-- --------------------------------------------------------

--
-- Table structure for table `driver`
--

CREATE TABLE `driver` (
  `driver_id` int(11) NOT NULL,
  `driver_name` varchar(50) DEFAULT NULL,
  `address` varchar(50) DEFAULT NULL,
  `contact` varchar(50) DEFAULT NULL,
  `nid` varchar(50) DEFAULT NULL,
  `licence` varchar(50) DEFAULT NULL,
  `join_date` date DEFAULT NULL,
  `salary` float(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `driver`
--

INSERT INTO `driver` (`driver_id`, `driver_name`, `address`, `contact`, `nid`, `licence`, `join_date`, `salary`) VALUES
(1005, 'Mohammed Ali Rahman', '25/A, Jubilee Road, Dhaka', '+8801923456789', '87654321', '8642091573', '1997-12-04', 12500.00),
(1006, 'Aarif Ahmed Khan', '10/B, Rupnagar Residential Area, Chittagong', '+8801756789012', '56789123', '7014839265', '1995-07-28', 16000.00),
(1007, 'Farhan Aziz Siddique', ' 5/C, Shahid Nagar, Rajshahi', '+8801867890123', '98765412', '6392481750', '1994-11-05', 20000.00),
(1008, 'Nabil Hasan Chowdhury', '30/D, Sheikh Mujib Road, Khulna', '+8801989012345', '34567890', '5067318294', '1996-09-12', 24000.00),
(1009, 'Arman Iqbal Ahmed', '15/E, Mominpur Lane, Sylhet', '+8801712345678', '90123456', '1829304756', '1992-03-10', 24000.00),
(1010, 'Kamal Rahman Chowdhury', '2/B, Nasirabad Housing Society, Dhaka', '+8801876543210', '23456789', '9745621830', '1998-05-20', 32000.00),
(1011, 'Imran Hussain Mia', '3/C, Laldighi Road, Rajshahi', '+8801998765432', '76543210', '2190387564', '1992-08-22', 15000.00);

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `id` int(11) NOT NULL,
  `driver_id` int(11) DEFAULT NULL,
  `salary` float(10,2) DEFAULT NULL,
  `month` varchar(20) DEFAULT NULL,
  `year` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`id`, `driver_id`, `salary`, `month`, `year`) VALUES
(8, 1005, 12500.00, 'January', '2023'),
(9, 1006, 16000.00, 'January', '2023'),
(10, 1007, 20000.00, 'January', '2023'),
(11, 1008, 24000.00, 'January', '2023'),
(12, 1009, 24000.00, 'February', '2023'),
(13, 1010, 32000.00, 'January', '2023'),
(14, 1011, 15000.00, 'January', '2023'),
(16, 1005, 12500.00, 'February', '2023'),
(17, 1006, 16000.00, 'February', '2023');

-- --------------------------------------------------------

--
-- Table structure for table `route`
--

CREATE TABLE `route` (
  `id` int(11) NOT NULL,
  `source` varchar(50) DEFAULT NULL,
  `destination` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `route`
--

INSERT INTO `route` (`id`, `source`, `destination`) VALUES
(6, 'Barisal', 'Barguna'),
(7, 'Barisal', 'Bhola'),
(8, 'Barisal', 'Jhalokati'),
(9, 'Barisal', 'Patuakhali'),
(10, 'Barisal', 'Pirojpur'),
(11, 'Barguna', 'Bhola'),
(12, 'Barguna', 'Jhalokati'),
(13, 'Barguna', 'Patuakhali'),
(14, 'Barguna', 'Pirojpur'),
(15, 'Bhola', 'Jhalokati'),
(16, 'Bhola', 'Patuakhali'),
(17, 'Bhola', 'Patuakhali'),
(18, 'Jhalokati', 'Patuakhali'),
(19, 'Jhalokati', 'Patuakhali'),
(20, 'Jhalokati', 'Pirojpur'),
(21, 'Patuakhali', 'Barisal'),
(22, 'Patuakhali', 'Jhalokati'),
(23, 'Patuakhali', 'Bhola');

-- --------------------------------------------------------

--
-- Table structure for table `schedule`
--

CREATE TABLE `schedule` (
  `id` int(11) NOT NULL,
  `departure` varchar(20) DEFAULT NULL,
  `arrival` varchar(20) DEFAULT NULL,
  `route_id` int(11) DEFAULT NULL,
  `driver_id` int(11) DEFAULT NULL,
  `bus_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `schedule`
--

INSERT INTO `schedule` (`id`, `departure`, `arrival`, `route_id`, `driver_id`, `bus_id`) VALUES
(6, '2023-08-16T13:41', '2023-08-16T17:41', 6, 1005, 1046),
(7, '2023-08-17T15:41', '2023-08-17T19:41', 10, 1006, 1047),
(8, '2023-08-16T13:42', '2023-08-18T13:46', 14, 1007, 1050),
(9, '2023-08-18T09:42', '2023-08-18T18:42', 9, 1009, 1053),
(10, '2023-08-17T01:43', '2023-08-19T01:43', 22, 1010, 1053),
(11, '2023-08-17T01:43', '2023-08-19T13:43', 6, 1011, 1056);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `bus`
--
ALTER TABLE `bus`
  ADD PRIMARY KEY (`bus_id`),
  ADD UNIQUE KEY `licence_no` (`licence_number`);

--
-- Indexes for table `driver`
--
ALTER TABLE `driver`
  ADD PRIMARY KEY (`driver_id`),
  ADD UNIQUE KEY `nid` (`nid`),
  ADD UNIQUE KEY `licence` (`licence`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `unique_month_year_driver` (`driver_id`,`month`,`year`);

--
-- Indexes for table `route`
--
ALTER TABLE `route`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `schedule`
--
ALTER TABLE `schedule`
  ADD PRIMARY KEY (`id`),
  ADD KEY `route_id` (`route_id`),
  ADD KEY `driver_id` (`driver_id`),
  ADD KEY `bus_id` (`bus_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bus`
--
ALTER TABLE `bus`
  MODIFY `bus_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1059;

--
-- AUTO_INCREMENT for table `driver`
--
ALTER TABLE `driver`
  MODIFY `driver_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1012;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `route`
--
ALTER TABLE `route`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `schedule`
--
ALTER TABLE `schedule`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `payment`
--
ALTER TABLE `payment`
  ADD CONSTRAINT `payment_ibfk_1` FOREIGN KEY (`driver_id`) REFERENCES `driver` (`driver_id`);

--
-- Constraints for table `schedule`
--
ALTER TABLE `schedule`
  ADD CONSTRAINT `schedule_ibfk_1` FOREIGN KEY (`route_id`) REFERENCES `route` (`id`),
  ADD CONSTRAINT `schedule_ibfk_2` FOREIGN KEY (`driver_id`) REFERENCES `driver` (`driver_id`),
  ADD CONSTRAINT `schedule_ibfk_3` FOREIGN KEY (`bus_id`) REFERENCES `bus` (`bus_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
