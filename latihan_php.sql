-- phpMyAdmin SQL Dump
-- version 3.4.10.1deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 25, 2012 at 11:09 AM
-- Server version: 5.5.28
-- PHP Version: 5.3.10-1ubuntu3.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `latihan_php`
--
CREATE DATABASE `latihan_php` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `latihan_php`;

-- --------------------------------------------------------

--
-- Table structure for table `buku_telp`
--

CREATE TABLE IF NOT EXISTS `buku_telp` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `telp` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `buku_telp`
--

INSERT INTO `buku_telp` (`id`, `nama`, `alamat`, `telp`, `email`) VALUES
(3, 'Rasmus', 'Jl. Pettarani', '123456', 'rasmus@rasmus.com'),
(5, 'Linus Torvalds', 'Jl. Perintis', '501102', 'linus@linus.com'),
(6, 'Richard Stallman', 'Jl. Urip ', '654321', 'rms@rms.com'),
(7, 'Matt Mullenweg', 'Jl. Sunu', '567123', 'matt@matt.com');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
