-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 15, 2017 at 12:30 PM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `layar`
--

-- --------------------------------------------------------

--
-- Table structure for table `tlayar`
--

CREATE TABLE IF NOT EXISTS `tlayar` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `waktu` text,
  `agenda` text,
  `tempat` text,
  `jpeserta` text,
  `instruktur` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tlayar`
--

INSERT INTO `tlayar` (`id`, `waktu`, `agenda`, `tempat`, `jpeserta`, `instruktur`) VALUES
(1, '15 September 2017 s.d 05 September 2017', 'PEMBACAAN METER DAN PEMBUATAN REKENING', 'Banjarbaru-Zamrud', '1', 'PLN PUSAT');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
