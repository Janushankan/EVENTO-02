-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 11, 2023 at 04:18 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `event_planner`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` varchar(100) NOT NULL,
  `admin_name` varchar(100) NOT NULL,
  `admin_email` varchar(100) NOT NULL,
  `admin_phone_no` int(10) NOT NULL,
  `client_id` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone_no` int(20) NOT NULL,
  `type` varchar(100) NOT NULL,
  `location` varchar(100) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`name`, `email`, `phone_no`, `type`, `location`, `date`) VALUES
('Janushankan', 'janushankan1006@gmail.com', 711439088, 'Wedding', 'Trincomalee', '2023-08-18'),
('Janushankan', 'janushankan1006@gmail.com', 711439088, 'Birthday', 'Jaffna', '2023-08-26');

-- --------------------------------------------------------

--
-- Table structure for table `caterer`
--

CREATE TABLE `caterer` (
  `caterer_id` varchar(100) NOT NULL,
  `caterer_name` varchar(100) NOT NULL,
  `caterer_email` varchar(100) NOT NULL,
  `caterer_phone_no` int(10) NOT NULL,
  `image` mediumblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `caterer`
--

INSERT INTO `caterer` (`caterer_id`, `caterer_name`, `caterer_email`, `caterer_phone_no`, `image`) VALUES
('C001', 'Mahi', 'mahi@gmail.com', 789632563, 0x7465616d3030342e706e67);

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE `client` (
  `client_id` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`client_id`, `username`, `email`, `password`) VALUES
('', 'Janushankan', 'janushankan1006@gmail.com', '$2y$10$NIXMKPnEuDbwoA6GPqrkgeLrx74EzVev0pq0HvKIHPha6gpmIBjmy');

-- --------------------------------------------------------

--
-- Table structure for table `decorator`
--

CREATE TABLE `decorator` (
  `decorator_id` varchar(100) NOT NULL,
  `decorator_name` varchar(100) NOT NULL,
  `decorator_email` varchar(100) NOT NULL,
  `decorator_phone_no` int(10) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `image` mediumblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `decorator`
--

INSERT INTO `decorator` (`decorator_id`, `decorator_name`, `decorator_email`, `decorator_phone_no`, `description`, `image`) VALUES
('D001', 'Kavindu', 'kavindu@gmail.com', 789654123, '', ''),
('D002', 'Mahela', 'mahela@gmail.com', 712365896, '', 0x7465616d3030342e706e67);

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `event_id` varchar(100) NOT NULL,
  `event_type` varchar(100) NOT NULL,
  `event_date` varchar(100) NOT NULL,
  `org_id` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `event_category`
--

CREATE TABLE `event_category` (
  `event_cat_Id` int(100) NOT NULL,
  `event_id` varchar(100) NOT NULL,
  `event_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `organizer`
--

CREATE TABLE `organizer` (
  `org_id` varchar(100) NOT NULL,
  `client_id` varchar(100) NOT NULL,
  `org_name` varchar(100) NOT NULL,
  `org_email` varchar(100) NOT NULL,
  `org_phone_no` int(10) NOT NULL,
  `image` mediumblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `organizer`
--

INSERT INTO `organizer` (`org_id`, `client_id`, `org_name`, `org_email`, `org_phone_no`, `image`) VALUES
('E001', '', 'Janushankan', 'janushankan1006@gmail.com', 711439088, 0x7465616d3030312e706e67),
('E002', '', 'Powshihan', 'powshihan@gmail.com', 766123478, 0x7465616d3030362e706e67),
('E003', '', 'Kajanan', 'kajanan@gmailcom', 771111111, 0x7465616d3030372e706e67);

-- --------------------------------------------------------

--
-- Table structure for table `photographer`
--

CREATE TABLE `photographer` (
  `photographer_id` varchar(100) NOT NULL,
  `photographer_name` varchar(100) NOT NULL,
  `photographer_email` varchar(100) NOT NULL,
  `photographer_phone_no` int(10) NOT NULL,
  `event_id` varchar(100) NOT NULL,
  `image` mediumblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `photographer`
--

INSERT INTO `photographer` (`photographer_id`, `photographer_name`, `photographer_email`, `photographer_phone_no`, `event_id`, `image`) VALUES
('P001', 'Kumara', 'kumara@gmail.com', 773692581, '', 0x7465616d3030392e706e67);

-- --------------------------------------------------------

--
-- Table structure for table `service_charge`
--

CREATE TABLE `service_charge` (
  `payment_id` varchar(100) NOT NULL,
  `org_id` varchar(100) NOT NULL,
  `payment_type` varchar(100) NOT NULL,
  `amount` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `technician`
--

CREATE TABLE `technician` (
  `technician_id` varchar(100) NOT NULL,
  `technician_name` varchar(100) NOT NULL,
  `technician_email` varchar(100) NOT NULL,
  `technician_phone_no` int(10) NOT NULL,
  `event_id` varchar(100) NOT NULL,
  `image` mediumblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
('', 'admin', 'admin123');

-- --------------------------------------------------------

--
-- Table structure for table `venue`
--

CREATE TABLE `venue` (
  `venue_id` int(100) NOT NULL,
  `venue_name` int(100) NOT NULL,
  `venue_address` int(100) NOT NULL,
  `availabiliy` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`),
  ADD KEY `client_id` (`client_id`);

--
-- Indexes for table `caterer`
--
ALTER TABLE `caterer`
  ADD PRIMARY KEY (`caterer_id`);

--
-- Indexes for table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`client_id`);

--
-- Indexes for table `decorator`
--
ALTER TABLE `decorator`
  ADD PRIMARY KEY (`decorator_id`);

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`event_id`),
  ADD KEY `org_id` (`org_id`);

--
-- Indexes for table `event_category`
--
ALTER TABLE `event_category`
  ADD PRIMARY KEY (`event_cat_Id`),
  ADD KEY `event_id` (`event_id`);

--
-- Indexes for table `organizer`
--
ALTER TABLE `organizer`
  ADD PRIMARY KEY (`org_id`),
  ADD KEY `client_id` (`client_id`);

--
-- Indexes for table `photographer`
--
ALTER TABLE `photographer`
  ADD PRIMARY KEY (`photographer_id`),
  ADD KEY `event_id` (`event_id`);

--
-- Indexes for table `service_charge`
--
ALTER TABLE `service_charge`
  ADD PRIMARY KEY (`payment_id`),
  ADD KEY `org_id` (`org_id`);

--
-- Indexes for table `technician`
--
ALTER TABLE `technician`
  ADD PRIMARY KEY (`technician_id`),
  ADD KEY `event_id` (`event_id`);

--
-- Indexes for table `venue`
--
ALTER TABLE `venue`
  ADD PRIMARY KEY (`venue_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `event_category`
--
ALTER TABLE `event_category`
  MODIFY `event_cat_Id` int(100) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `admin`
--
ALTER TABLE `admin`
  ADD CONSTRAINT `admin_ibfk_1` FOREIGN KEY (`client_id`) REFERENCES `client` (`client_id`);

--
-- Constraints for table `event`
--
ALTER TABLE `event`
  ADD CONSTRAINT `event_ibfk_1` FOREIGN KEY (`org_id`) REFERENCES `organizer` (`org_id`);

--
-- Constraints for table `event_category`
--
ALTER TABLE `event_category`
  ADD CONSTRAINT `event_category_ibfk_1` FOREIGN KEY (`event_id`) REFERENCES `event` (`event_id`);

--
-- Constraints for table `service_charge`
--
ALTER TABLE `service_charge`
  ADD CONSTRAINT `service_charge_ibfk_1` FOREIGN KEY (`org_id`) REFERENCES `organizer` (`org_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
