-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 28, 2022 at 10:15 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sepatu`
--

-- --------------------------------------------------------

--
-- Table structure for table `pembelian_sepatu`
--

CREATE TABLE `pembelian_sepatu` (
  `Nomor` int(20) NOT NULL,
  `Nama` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Ukuran` int(100) NOT NULL,
  `Barang` varchar(100) NOT NULL,
  `Jumlah` int(255) NOT NULL,
  `Alamat` varchar(10000) NOT NULL,
  `Metode` varchar(100) NOT NULL,
  `Nama_file` varchar(50) NOT NULL,
  `Waktu` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pembelian_sepatu`
--

INSERT INTO `pembelian_sepatu` (`Nomor`, `Nama`, `Email`, `Ukuran`, `Barang`, `Jumlah`, `Alamat`, `Metode`, `Nama_file`, `Waktu`) VALUES
(24, 'Muhammad Abdullah', 'aexon@gmail.com', 42, 'Converse', 2, 'Jl. Suryanata', 'Cash', '635b8f0937ff2.jpg', '2022-10-28 08:12:57'),
(25, 'Aldy Ramadhan S.', 'aldy@gmail.com', 40, 'Reebok', 3, 'Jl. Urip Sumoharjo', 'Credit', '635b8f49da6df.jpg', '2022-10-28 08:14:01'),
(26, 'Moh. Ikhwan Wahyudi', 'ikhwan@gmail.com', 41, 'Nike', 4, 'Jl. Cendana', 'Cash', '635b8f7fbe27b.jpg', '2022-10-28 08:14:55');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pembelian_sepatu`
--
ALTER TABLE `pembelian_sepatu`
  ADD PRIMARY KEY (`Nomor`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pembelian_sepatu`
--
ALTER TABLE `pembelian_sepatu`
  MODIFY `Nomor` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
