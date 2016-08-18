-- phpMyAdmin SQL Dump
-- version 4.5.0.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
<<<<<<< HEAD
-- Generation Time: Aug 18, 2016 at 05:52 PM
-- Server version: 10.0.17-MariaDB
-- PHP Version: 5.6.14
=======
-- Generation Time: Aug 11, 2016 at 08:46 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 7.0.6
>>>>>>> origin/master

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
<<<<<<< HEAD
-- Table structure for table `backend`
--

CREATE TABLE `backend` (
=======
-- Table structure for table `back_end`
--

CREATE TABLE `back_end` (
>>>>>>> origin/master
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

-- --------------------------------------------------------

--
<<<<<<< HEAD
-- Table structure for table `frontend`
--

CREATE TABLE `frontend` (
  `id` int(15) NOT NULL,
  `last_name` varchar(60) NOT NULL,
  `first_name` varchar(60) NOT NULL,
  `middle_name` int(60) DEFAULT NULL,
  `address` int(80) NOT NULL,
  `contact_number` varchar(20) NOT NULL,
  `check_in` date NOT NULL,
  `check_out` date NOT NULL,
  `room_type` int(60) NOT NULL,
  `room_number` varchar(20) NOT NULL,
  `number_of_kids` int(10) DEFAULT NULL,
  `number_of_adults` int(10) NOT NULL,
  `email` varchar(30) NOT NULL,
  `requests` text
=======
-- Table structure for table `front_end`
--

CREATE TABLE `front_end` (
  `id` int(11) NOT NULL,
  `last` varchar(20) NOT NULL,
  `first` varchar(20) NOT NULL,
  `middle_name                                                ame` varchar(20) DEFAULT NULL,
  `email_address` varchar(30) NOT NULL,
  `address` varchar(60) NOT NULL,
  `city` varchar(30) NOT NULL,
  `check_in` date NOT NULL,
  `check_out` date NOT NULL,
  `room_type` varchar(11) NOT NULL,
  `room_number` varchar(11) NOT NULL,
  `contact_number` varchar(11) NOT NULL,
  `number_of_kids` int(11) DEFAULT NULL,
  `number_of_adults` int(11) NOT NULL,
  `request` text
>>>>>>> origin/master
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
('m000000_000000_base', 1470896585),
('m130524_201442_init', 1470896588);

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
-- Indexes for dumped tables
--

--
<<<<<<< HEAD
-- Indexes for table `backend`
--
ALTER TABLE `backend`
=======
-- Indexes for table `back_end`
--
ALTER TABLE `back_end`
>>>>>>> origin/master
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `password_reset_token` (`password_reset_token`);

--
<<<<<<< HEAD
-- Indexes for table `frontend`
--
ALTER TABLE `frontend`
=======
-- Indexes for table `front_end`
--
ALTER TABLE `front_end`
>>>>>>> origin/master
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migration`
--
ALTER TABLE `migration`
  ADD PRIMARY KEY (`version`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `password_reset_token` (`password_reset_token`);

--
-- AUTO_INCREMENT for dumped tables
--

--
<<<<<<< HEAD
-- AUTO_INCREMENT for table `backend`
--
ALTER TABLE `backend`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `frontend`
--
ALTER TABLE `frontend`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT;
=======
-- AUTO_INCREMENT for table `back_end`
--
ALTER TABLE `back_end`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `front_end`
--
ALTER TABLE `front_end`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
>>>>>>> origin/master
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
