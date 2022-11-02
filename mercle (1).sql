-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 02, 2022 at 09:15 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `posttest5`
--

-- --------------------------------------------------------

--
-- Table structure for table `mercle`
--

CREATE TABLE `mercle` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `brand` varchar(50) NOT NULL,
  `year` int(15) NOT NULL,
  `color` varchar(50) NOT NULL,
  `price` varchar(50) NOT NULL,
  `namafile` varchar(50) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `waktu` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mercle`
--

INSERT INTO `mercle` (`id`, `nama`, `brand`, `year`, `color`, `price`, `namafile`, `gambar`, `waktu`) VALUES
(11, 'iphone X', 'Apple', 2021, 'Red', 'RP.19.000.000', '5.avif', '5.avif', '2022-10-27 12:27:49'),
(12, 'iphone 11', 'Apple', 2023, 'Red', 'RP.9.000.000', '1.avif', '1.avif', '2022-10-27 12:27:31'),
(13, 'iphone 13 Pro Max', 'Apple', 2025, 'Green', 'RP.17.000.000', '4.avif', '4.avif', '2022-10-27 12:26:57'),
(14, 'Samsung S15', 'Samsung', 2023, 'Gray', 'RP.14.000.000', '5.avif', 'avif', '2022-11-02 07:44:53');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mercle`
--
ALTER TABLE `mercle`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mercle`
--
ALTER TABLE `mercle`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
