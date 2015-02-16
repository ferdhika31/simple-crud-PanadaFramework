-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 16, 2015 at 12:00 PM
-- Server version: 5.5.32
-- PHP Version: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `lat_crud_panada`
--
CREATE DATABASE IF NOT EXISTS `lat_crud_panada` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `lat_crud_panada`;

-- --------------------------------------------------------

--
-- Table structure for table `tb_siswa`
--

CREATE TABLE IF NOT EXISTS `tb_siswa` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(225) NOT NULL,
  `alamat` varchar(225) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `tb_siswa`
--

INSERT INTO `tb_siswa` (`id`, `nama`, `alamat`) VALUES
(1, 'Ferdhika Ganteng', 'Lembang'),
(3, 'Cecep Saefudin', 'Cimareme'),
(4, 'Nurjaman', 'Cihanjuang'),
(5, 'Fauzan Arrasyid', 'Ciawitali');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
