-- phpMyAdmin SQL Dump
-- version 5.2.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 07, 2025 at 02:32 PM
-- Server version: 5.7.33
-- PHP Version: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: db_pwd2025
--
CREATE DATABASE IF NOT EXISTS db_pwd2025 DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE db_pwd2025;

-- --------------------------------------------------------

--
-- Table structure for table tbl_tamu
--

CREATE TABLE tbl_tamu (
  cid int(11) NOT NULL,
  cnama varchar(100) DEFAULT NULL,
  cemail varchar(100) DEFAULT NULL,
  cpesan text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table tbl_tamu
--

INSERT INTO tbl_tamu (cid, cnama, cemail, cpesan) VALUES
(1, 'indra', '2522500068@mahasiswa.atmaluhur.ac.id', 'semangat coding walaupun otak kadang pikun'),
(2, 'supriana', 'supriana@gmail.com', 'haloooo'),
(3, 'fitri', 'fitri@gmail.com', 'semangat indraaa');

--
-- Indexes for dumped tables
--

--
-- Indexes for table tbl_tamu
--
ALTER TABLE tbl_tamu
  ADD PRIMARY KEY (cid);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table tbl_tamu
--
ALTER TABLE tbl_tamu
  MODIFY cid int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
