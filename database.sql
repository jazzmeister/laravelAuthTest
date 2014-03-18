-- phpMyAdmin SQL Dump
-- version 4.0.6
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 18, 2014 at 03:48 PM
-- Server version: 5.5.33
-- PHP Version: 5.5.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `auth`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(50) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(60) NOT NULL,
  `password_temp` varchar(60) NOT NULL,
  `code` varchar(60) NOT NULL,
  `active` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `username`, `password`, `password_temp`, `code`, `active`, `created_at`, `updated_at`) VALUES
(3, 'jason@spiderstudios.co.uk', 'jazzmeister', '$2y$08$fiZAJoMRm1kJoWM/RfSqq.9XD.8xdyD0BEbycLKaRXEwlsVQSCBH2', '', '', 1, '2014-03-18 14:38:57', '2014-03-18 15:22:52'),
(4, 'jasonbishp30@gmail.com', 'jazzmeister2', '$2y$08$v4jtiVwz3Rg0i9V6HnWEvOTBXFj0AO52sbQRFm7pGf9BMbfRlWUkm', '', '', 1, '2014-03-18 14:39:53', '2014-03-18 14:50:04');
