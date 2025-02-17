-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 17, 2025 at 07:31 AM
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
-- Database: `latihan_xirpl2`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(150) NOT NULL,
  `email` varchar(150) NOT NULL,
  `password` varchar(150) NOT NULL,
  `nama_user` varchar(150) NOT NULL,
  `alamat_user` varchar(150) NOT NULL,
  `jenis_kelamin` enum('laki-laki','perempuan') NOT NULL,
  `tempatlahir_user` varchar(150) NOT NULL,
  `tanggallahir_user` date NOT NULL,
  `role` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `email`, `password`, `nama_user`, `alamat_user`, `jenis_kelamin`, `tempatlahir_user`, `tanggallahir_user`, `role`) VALUES
(1, 'ujang', 'ujang@gmail.com', '123', 'ujang ', 'ujung berung', 'laki-laki', 'bandung', '2014-10-01', ''),
(2, 'galuh', 'galuh@gmail.com', '123', 'galuh', 'bandung', 'laki-laki', 'bandung', '2004-09-07', ''),
(3, 'ratna', 'ratna@gmail.com', '123', 'ratna', 'cimahi', 'perempuan', 'cimahi', '2005-11-01', ''),
(4, 'johndoe1', 'johndoe1@example.com', 'password123', 'John Doe', 'Jl. Merdeka No. 10', 'laki-laki', 'Jakarta', '1990-01-01', ''),
(5, 'janedoe', 'janedoe@example.com', 'password123', 'Jane Doe', 'Jl. Kebangsaan No. 20', 'perempuan', 'Bandung', '1992-02-02', ''),
(6, 'bobbysmith', 'bobbysmith@example.com', 'password123', 'Bobby Smith', 'Jl. Kenangan No. 30', 'laki-laki', 'Surabaya', '1985-03-03', ''),
(7, 'alicejones', 'alicejones@example.com', 'password123', 'Alice Jones', 'Jl. Maju No. 40', 'perempuan', 'Medan', '1994-04-04', ''),
(8, 'michaelbrown', 'michaelbrown@example.com', 'password123', 'Michael Brown', 'Jl. Damai No. 50', 'laki-laki', 'Yogyakarta', '1988-05-05', ''),
(9, 'sarahjohnson', 'sarahjohnson@example.com', 'password123', 'Sarah Johnson', 'Jl. Santai No. 60', 'perempuan', 'Palembang', '1995-06-06', ''),
(10, 'davidlee', 'davidlee@example.com', 'password123', 'David Lee', 'Jl. Bersama No. 70', 'laki-laki', 'Malang', '1989-07-07', ''),
(11, 'lisawilson', 'lisawilson@example.com', 'password123', 'Lisa Wilson', 'Jl. Merdeka No. 80', 'perempuan', 'Denpasar', '1996-08-08', ''),
(12, 'robertmoore', 'robertmoore@example.com', 'password123', 'Robert Moore', 'Jl. Harmoni No. 90', 'laki-laki', 'Makassar', '1987-09-09', ''),
(13, 'laurawhite', 'laurawhite@example.com', 'password123', 'Laura White', 'Jalan merdeka No. 100', 'perempuan', 'Semarang', '1991-10-10', ''),
(14, 'jamesmartin', 'jamesmartin@example.com', 'password123', 'James Martin', 'Jl. Bahagia No. 110', 'laki-laki', 'Bogor', '1993-11-11', ''),
(15, 'emilyclark', 'emilyclark@example.com', 'password123', 'Emily Clark', 'Jl. Suka No. 120', 'perempuan', 'Depok', '1997-12-12', ''),
(16, 'danielgarcia', 'danielgarcia@example.com', 'password123', 'Daniel Garcia', 'Jln. MERDEKA No. 130', 'laki-laki', 'Padang', '1986-01-13', ''),
(17, 'angelathompson', 'angelathompson@example.com', 'password123', 'Angela Thompson', 'Jl. Sadar No. 140', 'perempuan', 'Banjarmasin', '1998-02-14', ''),
(18, 'stevenmartinez', 'stevenmartinez@example.com', 'password123', 'Steven Martinez', 'Jl. Merdeka No. 150', 'laki-laki', 'Pontianak', '1984-03-15', ''),
(19, '219aufafau', '', '$2y$10$Eyd72IBBsIgDjKIkgJMFt.dJUxw9cAfOkMt5O1yeUyFmkFiNJ0EVS', 'wdqdwq', 'dwqdqd', 'perempuan', 'dqwqdwdwqd', '2025-02-12', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
