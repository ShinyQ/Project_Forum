-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 21, 2017 at 04:22 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `forum`
--

-- --------------------------------------------------------

--
-- Table structure for table `profil_admin`
--

CREATE TABLE `profil_admin` (
  `id_admin` int(11) NOT NULL,
  `Nama_Admin` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Username` varchar(50) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `Foto_Profil` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `profil_admin`
--

INSERT INTO `profil_admin` (`id_admin`, `Nama_Admin`, `Email`, `Username`, `Password`, `Foto_Profil`) VALUES
(11131424, 'Kurniadi Ahmad Wijaya', 'kurniadiahmadwijaya@gmail.com', 'ShinyQ', 'administhebest', '20140145_1417228441696829_2389883581277949126_n.jpg'),
(11131425, 'root', '', 'admin', 'admin', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `Nama_Lengkap` varchar(50) NOT NULL DEFAULT '0',
  `Jenis_Kelamin` varchar(50) NOT NULL DEFAULT '0',
  `Tanggal_Lahir` varchar(50) NOT NULL DEFAULT '0',
  `Email` varchar(50) NOT NULL,
  `Alamat` varchar(100) NOT NULL,
  `Slogan` varchar(300) NOT NULL,
  `Hobi_User` varchar(30) NOT NULL,
  `Username` varchar(10) NOT NULL,
  `Password` varchar(15) NOT NULL,
  `Foto_Profil` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Data Pengguna';

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_user`, `Nama_Lengkap`, `Jenis_Kelamin`, `Tanggal_Lahir`, `Email`, `Alamat`, `Slogan`, `Hobi_User`, `Username`, `Password`, `Foto_Profil`) VALUES
(1, 'Kurniadi Ahmad Wijaya', 'L', '10-01-2002', 'kurniadiahmadwijaya@gmail.com', 'Jln Danau Ranau No 36', 'Nothing Is True Everything Permitted', 'Ngoding Web', 'ShinyQ', 'administhebest', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `profil_admin`
--
ALTER TABLE `profil_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `profil_admin`
--
ALTER TABLE `profil_admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11131426;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
