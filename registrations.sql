-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 04, 2025 at 05:24 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel_registration`
--

-- --------------------------------------------------------

--
-- Table structure for table `registrations`
--

CREATE TABLE `registrations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `FirstName` varchar(255) NOT NULL,
  `LastName` varchar(255) NOT NULL,
  `Gender` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `PhoneNo` varchar(255) NOT NULL,
  `Course` varchar(255) NOT NULL,
  `Languages` varchar(255) DEFAULT NULL,
  `Resume` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `registrations`
--

INSERT INTO `registrations` (`id`, `FirstName`, `LastName`, `Gender`, `Email`, `Password`, `PhoneNo`, `Course`, `Languages`, `Resume`, `created_at`, `updated_at`) VALUES
(1, 'Mariya', 'Divya', 'Female', 'divya@gmail.com', '$2y$12$wws2.hUOX0gOQENGcJ6Xae/GlAbcdRmEYBmZcnieaQM0UJLcPS1k2', '6381047529', 'MCA', 'Tamil,English', 'resumes/1751641683_S.Mariya Divya(Resume).pdf', '2025-07-04 09:38:03', '2025-07-04 09:38:03'),
(2, 'Raja', 'Jenifer', 'Male', 'jeri@gmail.com', '$2y$12$7RzdaQCewdL1OOGL/eEHNuyba.bqV.Hdf48BZBmTErfXlz3C/Q9gm', '7418000108', 'BSc', 'Tamil,English', 'resumes/1751641782_Divya(Resume).pdf', '2025-07-04 09:39:42', '2025-07-04 09:39:42'),
(3, 'Aashika', 'Banu', 'Female', 'ash@gmail.com', '$2y$12$ykzpR4My.CMj/Wi3QbEkyuRywwBDpOjBBvpE.FIxvN/zDuDz0TUfO', '6743128942', 'MSc', 'Tamil,English', 'resumes/1751641829_ash_frontpage(minipro).pdf', '2025-07-04 09:40:30', '2025-07-04 09:40:30');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `registrations`
--
ALTER TABLE `registrations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `registrations_email_unique` (`Email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `registrations`
--
ALTER TABLE `registrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
