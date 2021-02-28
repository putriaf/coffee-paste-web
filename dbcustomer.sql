-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 08, 2020 at 03:05 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbcustomer`
--

-- --------------------------------------------------------

--
-- Table structure for table `reservasi`
--

CREATE TABLE `reservasi` (
  `id_pemesanan` int(100) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `jk` varchar(2) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `telp` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `jam` varchar(10) NOT NULL,
  `jml_org` int(100) NOT NULL,
  `kode_resto` varchar(255) NOT NULL,
  `tgl_rsv` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reservasi`
--

INSERT INTO `reservasi` (`id_pemesanan`, `nama`, `jk`, `alamat`, `telp`, `email`, `jam`, `jml_org`, `kode_resto`, `tgl_rsv`) VALUES
(1, 'Alifa Hafida Anwar', 'P', 'Bekasi', '081281970098', 'alifa2@gmail.com', '11:00', 2, 'B001', '2020-12-02'),
(2, 'Putri Ainur Fitri', 'P', 'Tanggerang', '0986754431', 'putri@mail.com', '11:00', 6, 'B002', '2020-12-03'),
(3, 'Nadine Annisa Heartman', 'P', 'Bandung', '084557657888', 'nadine@mail.com', '19:00', 2, 'B001', '2020-12-01');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `email` varchar(50) NOT NULL,
  `password` varchar(256) NOT NULL,
  `name` varchar(100) NOT NULL,
  `level` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`email`, `password`, `name`, `level`) VALUES
('putri@mail.com', '$2y$10$zyRjN7bd2N3uM88nvGyEEeCDD0XBr24kUc/Xko8xRqYZ4JJdTvxa2', 'putri', ''),
('putra@mail.com', '$2y$10$upw5XUYLxXpPvCdBftTBweo1/.kGfCfZKhLUylItFj82e0hllZ/tO', 'putra', ''),
('nadine@mail.com', '$2y$10$Us.4ICzUuPPF0f8ewjyaKedMu.EFYQktrN66wP7kMXksGaxZlGmy.', 'Nadine', ''),
('adminputri@gmail.com', '$2y$10$PFcKZyZ7mXX6UsydUJPvs.r7FAdtFewx.d7kSX20wLSHgDwe2uL/6', 'putri admin', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `reservasi`
--
ALTER TABLE `reservasi`
  ADD PRIMARY KEY (`id_pemesanan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `reservasi`
--
ALTER TABLE `reservasi`
  MODIFY `id_pemesanan` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3047;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
