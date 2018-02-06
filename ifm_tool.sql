-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 05, 2018 at 10:51 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ifm_tool`
--

-- --------------------------------------------------------

--
-- Table structure for table `vifaa`
--

CREATE TABLE `vifaa` (
  `id` int(11) NOT NULL,
  `aina_kifaa` varchar(222) NOT NULL,
  `model` varchar(222) NOT NULL,
  `num_kifaa` varchar(222) NOT NULL,
  `tarehe_buy` date NOT NULL,
  `kinatumika` varchar(222) NOT NULL,
  `kifaa_serial` varchar(222) NOT NULL,
  `badili_kifaa` varchar(222) NOT NULL,
  `aina_hdd` varchar(222) NOT NULL,
  `aina_hdd_awali` varchar(222) NOT NULL,
  `serial_num` varchar(222) NOT NULL,
  `change_date` date NOT NULL,
  `store` varchar(222) NOT NULL,
  `active` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vifaa`
--

INSERT INTO `vifaa` (`id`, `aina_kifaa`, `model`, `num_kifaa`, `tarehe_buy`, `kinatumika`, `kifaa_serial`, `badili_kifaa`, `aina_hdd`, `aina_hdd_awali`, `serial_num`, `change_date`, `store`, `active`) VALUES
(7, 'computer', 'Hp', '8384894', '2018-02-05', 'ndio', 'ndio', 'ndio', '350 gb', '400 gb', '74485885', '2018-02-05', 'Dar es salaam', 1),
(10, 'gydd', 'Hp', '865685', '2018-03-14', 'ndio', 'ndio', 'ndio', '', '', '', '0000-00-00', '', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `vifaa`
--
ALTER TABLE `vifaa`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `vifaa`
--
ALTER TABLE `vifaa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
