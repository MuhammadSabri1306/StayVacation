-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 03, 2022 at 09:43 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `stayvacation`
--

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(3) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `telp` varchar(20) DEFAULT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `fullname`, `email`, `telp`, `message`) VALUES
(1, 'Muhammad Sabri', 'muhammadsabri1306@gmail.com', '+6285144392944', 'Bagus');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(3) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `telp` varchar(20) DEFAULT NULL,
  `products` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`products`)),
  `time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `fullname`, `email`, `telp`, `products`, `time`) VALUES
(1, 'Muhammad Sabri', 'muhammadsabri1306@gmail.com', '+6285144392944', '[{\"id\":\"1\",\"title\":\"Lion Air\",\"category\":\"Tiket Pesawat\",\"count\":1,\"price\":500000}]', '2022-07-03 18:22:38'),
(2, 'Muhammad Sabri', 'muhammadsabri1306@gmail.com', '+6285144392944', '[{\"id\":\"2\",\"title\":\"Hotel Grand Rofina\",\"category\":\"Hotel\",\"count\":2,\"price\":600000}]', '2022-07-03 18:24:13'),
(3, 'Muhammad Sabri', 'muhammadsabri1306@gmail.com', '+6285144392944', '[{\"id\":\"1\",\"title\":\"Lion Air\",\"category\":\"Tiket Pesawat\",\"count\":1,\"price\":500000},{\"id\":\"2\",\"title\":\"Hotel Grand Rofina\",\"category\":\"Hotel\",\"count\":2,\"price\":600000}]', '2022-07-03 18:26:15'),
(4, 'Muhammad Sabri', 'muhammadsabri1306@gmail.com', '+6285144392944', '[{\"id\":\"1\",\"title\":\"Lion Air\",\"category\":\"Tiket Pesawat\",\"count\":1,\"price\":500000},{\"id\":\"2\",\"title\":\"Hotel Grand Rofina\",\"category\":\"Hotel\",\"count\":2,\"price\":600000}]', '2022-07-03 18:26:49');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `category` varchar(100) NOT NULL,
  `img` text NOT NULL,
  `price` int(7) NOT NULL,
  `desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `title`, `category`, `img`, `price`, `desc`) VALUES
(1, 'Lion Air', 'Tiket Pesawat', 'upload/lion-air-2.jpg', 500000, 'Penerbangan Makassar - Surabaya pukul 16:30 - 18:00'),
(2, 'Hotel Grand Rofina', 'Hotel', 'upload/hotels.jpg', 300000, 'Alamat Jl. Ahmad Yani No.10, Makassar, Sulawesi Selatan'),
(3, 'Hotel CLARO', 'Hotel', 'upload/claro.jpg', 350000, 'Alamat Jl. AP. Pettarani No.12, Makassar, Sulawesi Selatan');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
