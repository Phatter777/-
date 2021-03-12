-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 12, 2021 at 12:51 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `movie1`
--

-- --------------------------------------------------------

--
-- Table structure for table `movie1`
--

CREATE TABLE `movie1` (
  `movie_id` int(11) NOT NULL,
  `movie_name` varchar(30) NOT NULL,
  `movie_date` datetime NOT NULL,
  `movie_user` varchar(30) NOT NULL,
  `movie_pin` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `movie1`
--

INSERT INTO `movie1` (`movie_id`, `movie_name`, `movie_date`, `movie_user`, `movie_pin`) VALUES
(1, 'pop', '2021-03-22 20:31:00', 'phatter', '1234'),
(3, 'movieA', '2021-03-20 21:38:00', 'yoyo', '1111');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `movie1`
--
ALTER TABLE `movie1`
  ADD PRIMARY KEY (`movie_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `movie1`
--
ALTER TABLE `movie1`
  MODIFY `movie_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
