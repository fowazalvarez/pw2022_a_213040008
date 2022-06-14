-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 14, 2022 at 05:55 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pw2022_a_213040008`
--

-- --------------------------------------------------------

--
-- Table structure for table `coach`
--

CREATE TABLE `coach` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `program` varchar(100) NOT NULL,
  `gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `coach`
--

INSERT INTO `coach` (`id`, `nama`, `program`, `gambar`) VALUES
(2, 'Fowaz Amran Alfarez', '12 bulan', '62a43897796c71413953282545.jpg'),
(3, 'Linda Yulianti', '3 bulan', '62a461a1bb17ea3MVVXXA_700w_0.jpg'),
(4, 'Kim Hyun Tak', '6 bulan', '62a4624e5cda3about.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `program` varchar(50) NOT NULL,
  `gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`id`, `nama`, `email`, `alamat`, `program`, `gambar`) VALUES
(1, 'Fowaz', 'fowaz@gmail.com', 'Bandung', '3 Bulan', 'fowaz.jpg'),
(2, 'Ghaisani A', 'ghaisani@gmail.com', 'Bandung', '12 bulan', '62a460e35f175a5j37ZEB_700w_0.jpg'),
(3, 'Linda', 'linda@gmail.com', 'Bandung', '12 bulan', 'noimg.jpg'),
(9, 'Alvarez', 'alvarez@gmail.com', 'Bandung', '12 bulan', 'noimg.jpg'),
(10, 'Sarah Lopez', 'sarahlopez@gmail.com', 'Kolombia', '12 bulan', '62a3ba3fb0b65sarahlop.jpg'),
(12, 'Juno', 'juno@gmail.com', 'Jakarta', '6 bulan', '62a42bf8b0289a6pZR5Ej_700w_0.jpg'),
(13, 'Richard', 'richard@gmail.com', 'Kalimantan', '12 bulan', '62a42c13abb70a6pQWDWb_700w_0.jpg'),
(14, 'Sarah Dewi', 'sarahdewi@gmail.com', 'Bandung', '6 bulan', 'noimg.jpg'),
(15, 'Jono', 'jono@gmail.com', 'Bandung', '3 bulan', '62a42c6cd3db2aGKEjKkX_700w_0.jpg'),
(16, 'Miki', 'miki@gmail.com', 'Indramayu', '6 bulan', '62a42c9bceb2ctom.jpg'),
(17, 'Jennie', 'jennie@gmail.com', 'Bandung', '6 bulan', '62a42cdd1eeb2aqx6gM7n_700w_0.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `therapist`
--

CREATE TABLE `therapist` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `program` varchar(100) NOT NULL,
  `gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `therapist`
--

INSERT INTO `therapist` (`id`, `nama`, `program`, `gambar`) VALUES
(1, 'Dr. Kristi', '12 bulan', '62a46c0f12ef3dr2.jpg'),
(2, 'Dr. Richard', '3 bulan', '62a46e804c208dr1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(1, 'admin', '$2y$10$A48df/7zVCvtP1ndcZ2JdOzCLNJ6.cAkLXHTJ4pqyFenvMGxqFwxq'),
(2, 'alvarez', '$2y$10$rr8M2yCrNbj2DBj5Ztx5Ze5pa/4qf4hX80nGXs5HsNGPzVLJkUnea'),
(3, 'fowaz', '$2y$10$mXxKCb/Uwt/YbgVoccRN8ecjNz1Ywb3dG25XsMFBq.uV02BDjBCXK'),
(9, 'admin1', '$2y$10$FW/rIvkWKJwyw8dDXQsw2O50Ot4taK3k0r67bP7Ba2dSYQ3wJIvrq');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `coach`
--
ALTER TABLE `coach`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `therapist`
--
ALTER TABLE `therapist`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `coach`
--
ALTER TABLE `coach`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `siswa`
--
ALTER TABLE `siswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `therapist`
--
ALTER TABLE `therapist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
