-- THE SCHEMA - HOW CAN YOU NOT HAVE THIS FILE ZOMG
-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 29, 2013 at 10:39 AM
-- Server version: 5.5.25
-- PHP Version: 5.4.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `bookie`
--

-- --------------------------------------------------------

--
-- Table structure for table `Owing`
--

CREATE TABLE `Owing` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_from` varchar(30) NOT NULL,
  `id_to` varchar(30) NOT NULL,
  `value` float NOT NULL,
  `status` int(11) NOT NULL,
  `timestamp` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=29 ;

--
-- Dumping data for table `Owing`
--

INSERT INTO `Owing` (`id`, `id_from`, `id_to`, `value`, `status`, `timestamp`) VALUES
(3, '1419033711', '502616400', 20, 0, '2013-09-28'),
(4, '1419033711', '502616400', 50, 0, '2013-09-28'),
(5, '502616400', '1419033711', 10, 0, '2013-09-28'),
(7, '1419033711', '502616400', 55.5, 0, '1380418458'),
(8, '1419033711', '502616400', 55.5, 0, '1380418463'),
(9, '1419033711', '502616400', 55.5, 0, '1380418467'),
(10, '1419033711', '502616400', 55.5, 0, '1380418473'),
(11, '1419033711', '502616400', 55.5, 0, '1380418586'),
(12, '1419033711', '502616400', 55.5, 0, '1380419832'),
(13, '1419033711', '502616400', 55.5, 0, '1380421326'),
(14, '1419033711', '502616400', 55.5, 0, '1380421387'),
(15, '1419033711', '502616400', 55.5, 0, '1380421429'),
(16, '1419033711', '502616400', 55.5, 0, '1380421492'),
(17, '502616400', '1419033711', 30, 0, '2013-09-28'),
(18, '1419033711', '502616400', 55.5, 0, '1380425688'),
(19, '1419033711', '1666200038', 20, 0, '1380425688'),
(20, '1419033711', '1666200038', 30, 0, '1380425688'),
(21, '1419033711', '1666200038', 10, 0, '1380425688'),
(22, '1419033711', '713140113', 5, 0, '1380425688'),
(23, '1666200038', '1419033711', 100, 0, '0'),
(24, '1666200038', '1419033711', 120, 0, '0'),
(25, '1419033711', '502616400', 55.5, 0, '1380431568'),
(26, '1419033711', '502616400', 55.5, 0, '1380433449'),
(27, '1419033711', '502616400', 55.5, 0, '1380433460'),
(28, '1419033711', '502616400', 55.5, 0, '1380436378');

-- --------------------------------------------------------

--
-- Table structure for table `Person`
--

CREATE TABLE `Person` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `fb_id` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `fb_id` (`fb_id`,`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=577 ;

--
-- Dumping data for table `Person`
--

INSERT INTO `Person` (`id`, `name`, `fb_id`, `email`) VALUES
(380, 'Zain Adil', '1419033711', 'zainadil@facebook.com'),
(574, 'Vadim Stark', '502616400', ''),
(575, 'Nidale Hajjar', '1666200038', ''),
(576, 'Mehsum Stupid', '713140113', '');

