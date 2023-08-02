-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 02, 2023 at 03:28 PM
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
(1020, 'a1', 'b1', '55', 'ac', '55'),
(1043, 'abc', '110000', '65', 'AC', '21'),
(1044, '1er', '5645', 'sdfas', 'AC', '20'),
(1045, 'adfas', 'sdfsdf', '22', 'AC', '66');

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
  `join_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `driver`
--

INSERT INTO `driver` (`driver_id`, `driver_name`, `address`, `contact`, `nid`, `licence`, `join_date`) VALUES
(1000, 'Rana Mia', 'dhaka', '017777777', '123123', '123123', '2023-06-11'),
(1003, 'Kazi Mohammad', 'barisal', '01666666666666', '99999999999', '8888888888888888', '2023-06-01');

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
(1, 'Patuakhali', 'Pirojpur'),
(4, 'Jhalokati', 'Barisal'),
(5, 'Barisal', 'Bhola');

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
(1, '2023-08-01T19:27', '2023-08-03T19:27', 1, 1003, 1020);

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
  MODIFY `bus_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1046;

--
-- AUTO_INCREMENT for table `driver`
--
ALTER TABLE `driver`
  MODIFY `driver_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1005;

--
-- AUTO_INCREMENT for table `route`
--
ALTER TABLE `route`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `schedule`
--
ALTER TABLE `schedule`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

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
