-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 20, 2016 at 09:40 PM
-- Server version: 10.1.8-MariaDB
-- PHP Version: 5.6.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `resort_reservation_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `admin` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `auth_key` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password_reset_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT '10',
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `admin`, `auth_key`, `password_hash`, `password_reset_token`, `email`, `status`, `created_at`, `updated_at`) VALUES
(1, 'maica', 'FBGg1wmXE3wLDgDg8HxNIuHkErOVRxJM', '$2y$13$8qCRxtCoKq.fsV2Tzg/bt.lPxXO7csgWGaPA50dAiloa70Blt9wSS', NULL, 'maicabebzx@yahoo.com', 10, 1471718293, 1471718293);

-- --------------------------------------------------------

--
-- Table structure for table `billingstatement`
--

CREATE TABLE `billingstatement` (
  `id` int(11) NOT NULL,
  `mode_of_payment` varchar(20) DEFAULT NULL,
  `amount` decimal(2,0) DEFAULT NULL,
  `number` int(11) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `status` varchar(45) DEFAULT NULL,
  `employee_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `contact_number` varchar(15) DEFAULT NULL,
  `address` varchar(50) DEFAULT NULL,
  `birthday` date DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `customer_has_reservation`
--

CREATE TABLE `customer_has_reservation` (
  `id` int(11) NOT NULL,
  `date_of_arrival` date DEFAULT NULL,
  `date_of_departure` date DEFAULT NULL,
  `desired_room_type` varchar(20) DEFAULT NULL,
  `required_number_of_rooms` int(11) DEFAULT NULL,
  `requests` varchar(50) DEFAULT NULL,
  `reservation_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `contact_number` varchar(15) DEFAULT NULL,
  `rate` varchar(20) DEFAULT NULL,
  `hired_date` date DEFAULT NULL,
  `department` varchar(50) DEFAULT NULL,
  `type` varchar(45) DEFAULT NULL,
  `position` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `address` varchar(50) DEFAULT NULL,
  `birthday` date DEFAULT NULL,
  `manager_id` int(11) NOT NULL,
  `regular_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `employee_assist_customer`
--

CREATE TABLE `employee_assist_customer` (
  `id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `employee_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `manager`
--

CREATE TABLE `manager` (
  `id` int(11) NOT NULL,
  `admin_id` int(11) DEFAULT NULL,
  `username` varchar(50) DEFAULT NULL,
  `access_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `migration`
--

CREATE TABLE `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `migration`
--

INSERT INTO `migration` (`version`, `apply_time`) VALUES
('m000000_000000_base', 1471717396),
('m130524_201442_init', 1471717399);

-- --------------------------------------------------------

--
-- Table structure for table `online`
--

CREATE TABLE `online` (
  `id` int(11) NOT NULL,
  `actual_access_date` date DEFAULT NULL,
  `actual_reserve_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `regular`
--

CREATE TABLE `regular` (
  `id` int(11) NOT NULL,
  `salary` decimal(2,0) DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL,
  `classification` varchar(45) DEFAULT NULL,
  `nature_of_service` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `reservation`
--

CREATE TABLE `reservation` (
  `id` int(11) NOT NULL,
  `date_reserved` date DEFAULT NULL,
  `number_of_days` int(11) DEFAULT NULL,
  `down_payment` varchar(30) DEFAULT NULL,
  `receipt_number` varchar(30) DEFAULT NULL,
  `online_id` int(11) NOT NULL,
  `walkin_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `reservation_has_room`
--

CREATE TABLE `reservation_has_room` (
  `id` int(11) NOT NULL,
  `reservation_start_date` date DEFAULT NULL,
  `reservation_end_date` date DEFAULT NULL,
  `reservation_id` int(11) NOT NULL,
  `room_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE `room` (
  `id` int(11) NOT NULL,
  `description` varchar(50) DEFAULT NULL,
  `type` varchar(45) DEFAULT NULL,
  `rate` varchar(20) DEFAULT NULL,
  `capacity` int(11) DEFAULT NULL,
  `availability` varchar(45) DEFAULT NULL,
  `billingstatement_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE `service` (
  `id` int(11) NOT NULL,
  `name` varchar(30) DEFAULT NULL,
  `cost` varchar(45) DEFAULT NULL,
  `service_offered` varchar(45) DEFAULT NULL,
  `type_of_service` varchar(45) DEFAULT NULL,
  `employee_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `billingstatement_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `auth_key` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password_reset_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT '10',
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `auth_key`, `password_hash`, `password_reset_token`, `email`, `status`, `created_at`, `updated_at`) VALUES
(1, 'jcheramia', 'FEfCVDs9OvIuddVRLdWdC9y-eEQAL9m0', '$2y$13$HYv0SByFUfQ7rggEPMaqKu2S.SfJ7PN0xTo5ASCtF7MsssXkf05Iq', NULL, 'johannaheramia@yahoo.com', 10, 1471718266, 1471718266);

-- --------------------------------------------------------

--
-- Table structure for table `walkin`
--

CREATE TABLE `walkin` (
  `id` int(11) NOT NULL,
  `actual_time_in` date DEFAULT NULL,
  `actual_time_reserve` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`admin`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `password_reset_token` (`password_reset_token`);

--
-- Indexes for table `billingstatement`
--
ALTER TABLE `billingstatement`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_billing statement_employee1_idx` (`employee_id`),
  ADD KEY `fk_billing statement_customer1_idx` (`customer_id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer_has_reservation`
--
ALTER TABLE `customer_has_reservation`
  ADD PRIMARY KEY (`id`,`reservation_id`,`customer_id`),
  ADD KEY `fk_customer_has_reservation_reservation1_idx` (`reservation_id`),
  ADD KEY `fk_customer_has_reservation_customer1_idx` (`customer_id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`id`,`manager_id`,`regular_id`),
  ADD KEY `fk_employee_manager1_idx` (`manager_id`),
  ADD KEY `fk_employee_regular1_idx` (`regular_id`);

--
-- Indexes for table `employee_assist_customer`
--
ALTER TABLE `employee_assist_customer`
  ADD PRIMARY KEY (`id`,`customer_id`,`employee_id`),
  ADD KEY `fk_employee_assist_customer_customer1_idx` (`customer_id`),
  ADD KEY `fk_employee_assist_customer_employee1_idx` (`employee_id`);

--
-- Indexes for table `manager`
--
ALTER TABLE `manager`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migration`
--
ALTER TABLE `migration`
  ADD PRIMARY KEY (`version`);

--
-- Indexes for table `online`
--
ALTER TABLE `online`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `regular`
--
ALTER TABLE `regular`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_reservation_online1_idx` (`online_id`),
  ADD KEY `fk_reservation_walk-in1_idx` (`walkin_id`);

--
-- Indexes for table `reservation_has_room`
--
ALTER TABLE `reservation_has_room`
  ADD PRIMARY KEY (`id`,`reservation_id`,`room_id`),
  ADD KEY `fk_reservation_has_room_reservation1_idx` (`reservation_id`),
  ADD KEY `fk_reservation_has_room_room1_idx` (`room_id`);

--
-- Indexes for table `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_room_billing statement1_idx` (`billingstatement_id`);

--
-- Indexes for table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_service_employee1_idx` (`employee_id`),
  ADD KEY `fk_service_customer1_idx` (`customer_id`),
  ADD KEY `fk_service_billing statement1_idx` (`billingstatement_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `password_reset_token` (`password_reset_token`);

--
-- Indexes for table `walkin`
--
ALTER TABLE `walkin`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `customer_has_reservation`
--
ALTER TABLE `customer_has_reservation`
  ADD CONSTRAINT `fk_customer_has_reservation_customer1` FOREIGN KEY (`customer_id`) REFERENCES `customer` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_customer_has_reservation_reservation1` FOREIGN KEY (`reservation_id`) REFERENCES `reservation` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `employee`
--
ALTER TABLE `employee`
  ADD CONSTRAINT `fk_employee_manager1` FOREIGN KEY (`manager_id`) REFERENCES `manager` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_employee_regular1` FOREIGN KEY (`regular_id`) REFERENCES `regular` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `employee_assist_customer`
--
ALTER TABLE `employee_assist_customer`
  ADD CONSTRAINT `fk_employee_assist_customer_customer1` FOREIGN KEY (`customer_id`) REFERENCES `customer` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_employee_assist_customer_employee1` FOREIGN KEY (`employee_id`) REFERENCES `employee` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `reservation`
--
ALTER TABLE `reservation`
  ADD CONSTRAINT `fk_reservation_online1` FOREIGN KEY (`online_id`) REFERENCES `online` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_reservation_walk-in1` FOREIGN KEY (`walkin_id`) REFERENCES `walk-in` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `reservation_has_room`
--
ALTER TABLE `reservation_has_room`
  ADD CONSTRAINT `fk_reservation_has_room_reservation1` FOREIGN KEY (`reservation_id`) REFERENCES `reservation` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_reservation_has_room_room1` FOREIGN KEY (`room_id`) REFERENCES `room` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `room`
--
ALTER TABLE `room`
  ADD CONSTRAINT `fk_room_billing statement1` FOREIGN KEY (`billingstatement_id`) REFERENCES `billing statement` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `service`
--
ALTER TABLE `service`
  ADD CONSTRAINT `fk_service_billing statement1` FOREIGN KEY (`billingstatement_id`) REFERENCES `billing statement` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_service_customer1` FOREIGN KEY (`customer_id`) REFERENCES `customer` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_service_employee1` FOREIGN KEY (`employee_id`) REFERENCES `employee` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
