-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 27, 2021 at 12:23 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nachoua-php`
--

-- --------------------------------------------------------

--
-- Table structure for table `person`
--

CREATE TABLE `person` (
  `id` int(11) NOT NULL,
  `first_name` varchar(70) NOT NULL,
  `last_name` varchar(70) NOT NULL,
  `age` int(11) NOT NULL,
  `image` blob NOT NULL,
  `adresse_email` varchar(70) NOT NULL,
  `phone_number` varchar(14) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp(),
  `names_exp` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `person`
--

INSERT INTO `person` (`id`, `first_name`, `last_name`, `age`, `image`, `adresse_email`, `phone_number`, `date`, `names_exp`) VALUES
(204, '  nachoua', '  abbaoui', 23, 0x6a61736f6e2d676f6f646d616e2d4b742d455f5171384457342d756e73706c6173682e6a7067, 'nachouaabbaoui@gmail.com', '  0652363817', '1998-12-29 00:00:00', 'nothing'),
(219, 'sabrina', 'abbaoui', 15, 0x706578656c732d65646d6f6e642d64616e74c3a8732d343334373336382e6a7067, 'test2@gmail.com', ' 0633555565', '2002-02-01 00:00:00', 'fffff'),
(223, 'anass ', '   abbaoui', 25, 0x63687269732d62656e736f6e2d68483673594953365071592d756e73706c6173682e6a7067, 'nachouaabbaoui@gmail.com', '   0652363817', '0000-00-00 00:00:00', 'nothing');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `person`
--
ALTER TABLE `person`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `person`
--
ALTER TABLE `person`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=224;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
