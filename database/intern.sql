-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 12, 2017 at 04:56 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `intern`
--

-- --------------------------------------------------------

--
-- Table structure for table `Student`
--

CREATE TABLE `Student` (
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `id` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Student`
--

INSERT INTO `Student` (`first_name`, `last_name`, `email`, `password`, `id`) VALUES
('', '', 'garfieldgray@gmail.com', '123', 1203161),
('', '', '', '/''jr', 0),
('', '', '', '/''jr', 0),
('', '', '', '/\\''jr', 0),
('', '', '', '/\\''jr', 0),
('', '', '', 'TEST \\\\\\''/\\\\\\\\', 0),
('', '', '', 'TEST \\\\\\''/\\\\\\\\', 0),
('', '', '', 'TEST \\''/\\\\', 0),
('', '', 'TEST@GMAIL.COM', 'password', 0),
('', '', 'kk@g', '$2y$10$x6ssBenN9P8Ep', 0),
('', '', 'kk@g', '$2y$10$uLKQAeOpaGOmiFnVRBTz1uccvJ7Yk8ljjdN/.fbRZbkau9JCrZE7e', 0),
('', '', 'kk@g', '$2y$10$FzeTGGptdTpji.AzQIgzXeHRw7JZhJkStddiTwKpRzgquW1nsXMtG', 0),
('', '', 'kk@g', '$2y$10$9pJfni5fdF8FPsEJ6oo5nOxyrruY721E/gk/HOVlNClqMPSRJP2du', 0),
('', '', '', '$2y$10$IteUu8o818qbQjAzN/VhcejdqVC.3kt0R7vH/P0zRWIe55VvUlHma', 0),
('', '', 'uVsJiuIa/he1m5hQEk9tBp2c2osJCU5Otf9JsJkhp3Q=', '$2y$10$tZsspnbINH8flLTvmGx7hekibMR0LZesgR9e5zEnYAbG.DHQ/4kpq', 0),
('', '', 'uVsJiuIa/he1m5hQEk9tBp2c2osJCU5Otf9JsJkhp3Q=', '$2y$10$.7KgOkilnPrxlzES8pE2uOvGghC1vzTc5txuuPG2A2WyzncY1myKK', 0),
('', '', 'uVsJiuIa/he1m5hQEk9tBp2c2osJCU5Otf9JsJkhp3Q=', '$2y$10$DQ.iQHCBulBDjYHTU3ILqeuURnCH7LWTOusvcJn7fbdXyIUVCF4iG', 0),
('', '', 'uVsJiuIa/he1m5hQEk9tBp2c2osJCU5Otf9JsJkhp3Q=', '$2y$10$zTL4/8H9dLK2ND4OSwDzruk9.huut7poDWSAI3rMdlBHdLV7RH0Be', 0),
('', '', 'uVsJiuIa/he1m5hQEk9tBp2c2osJCU5Otf9JsJkhp3Q=', '$2y$10$VZcHbLtga8CRl9GAiyVBt.eQBEqOUdZ9G1YHYObgrNhYoEDJoLymS', 0),
('', '', 'uVsJiuIa/he1m5hQEk9tBp2c2osJCU5Otf9JsJkhp3Q=', '$2y$10$tHMRNmRGX6fZSlTac3dchO86siQ8cr/ouQmKG7taZoZk1BeMBL1Uq', 0),
('', '', 'uVsJiuIa/he1m5hQEk9tBp2c2osJCU5Otf9JsJkhp3Q=', '$2y$10$tN4boQldn5kf5YnF.WFQt.ohXgUXZy0CjOJkcpg4ON6bmpnJ1RcqW', 0),
('', '', 'uVsJiuIa/he1m5hQEk9tBp2c2osJCU5Otf9JsJkhp3Q=', '$2y$10$I38vOY81niayjaU0AWVSkua6MDycURt6sLpkdejLrT1UGmG6Qs6CO', 0),
('', '', 'uVsJiuIa/he1m5hQEk9tBp2c2osJCU5Otf9JsJkhp3Q=', '$2y$10$BunR7XsPHHPwiRV49nYEJOrdwrXhAvx/WVekHWedScQcl4M/SYJEe', 0);

-- --------------------------------------------------------

--
-- Table structure for table `User`
--

CREATE TABLE `User` (
  `id` int(11) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `date_created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `User`
--
ALTER TABLE `User`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `User`
--
ALTER TABLE `User`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
