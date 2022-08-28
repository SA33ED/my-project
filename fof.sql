-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Aug 28, 2022 at 11:56 AM
-- Server version: 5.7.36
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fof`
--

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

DROP TABLE IF EXISTS `customers`;
CREATE TABLE IF NOT EXISTS `customers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'profile.png',
  `phone` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `active` tinyint(4) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `image`, `phone`, `name`, `active`) VALUES
(1, 'mohammed$saeed-logo.png', '01032180690', 'Mohammed Saeed', 1),
(2, 'mohammed$yasser-logo.png', '01126414087', 'Mohammed yasser', 1),
(3, 'yousef&ghonim-logo.png', '01001329477', 'Yousef Ghonim', 0),
(4, 'asser$tearek-logo.png', '01126414089', 'Asser Tearek', 1),
(5, 'profile.png', '01126414082', 'Eyad Tarek', 0),
(7, 'seif-logo.png', '01123562662', 'Seif', 1),
(8, 'profile.png', 'project', 'Mohammed yasser', 1),
(9, 'profile.png', '01001329479', 'Mohammed yasser', 1),
(10, 'profile.png', '011_121416', 'Mohammed yasser', 1);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'defult.png',
  `paragraph` varchar(10000) COLLATE utf8_unicode_ci NOT NULL,
  `active` tinyint(4) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `image`, `paragraph`, `active`) VALUES
(1, 'Chair M1', '334029.jpg', 'The first known furniture is said to have existed in the Egyptian civilization about 4000 years ago, though it might have existed in some crude form prior to that. The Egyptians used chairs, tables, stools, chests, beds, etc. The Assyrians and Babylonians are also said to have had elaborate furniture including high-backed chairs and footstools. In comparison, the Greeks used much simpler furniture comprising beds, small tables, and chairs. The Romans were also like the Greeks except their furniture was more decorated with Ivory, metal, and precious stones\r\n', 1),
(2, 'Chair M2', 'th.jpg', 'The first known furniture is said to have existed in the Egyptian civilization about 4000 years ago, though it might have existed in some crude form prior to that. The Egyptians used chairs, tables, stools, chests, beds, etc. The Assyrians and Babylonians are also said to have had elaborate furniture including high-backed chairs and footstools. In comparison, the Greeks used much simpler furniture comprising beds, small tables, and chairs. The Romans were also like the Greeks except their furniture was more decorated with Ivory, metal, and precious stones.', 1),
(3, 'Couch V1', '12.jpg', 'The first known furniture is said to have existed in the Egyptian civilization about 4000 years ago, though it might have existed in some crude form prior to that. The Egyptians used chairs, tables, stools, chests, beds, etc. The Assyrians and Babylonians are also said to have had elaborate furniture including high-backed chairs and footstools. In comparison, the Greeks used much simpler furniture comprising beds, small tables, and chairs. The Romans were also like the Greeks except their furniture was more decorated with Ivory, metal, and precious stones.', 1),
(10, 'Couch V4', 'couch$v4-logo.png', 'The first known furniture is said to have existed in the Egyptian civilization about 4000 years ago, though it might have existed in some crude form prior to that. The Egyptians used chairs, tables, stools, chests, beds, etc. The Assyrians and Babylonians are also said to have had elaborate furniture including high-backed chairs and footstools. In comparison, the Greeks used much simpler furniture comprising beds, small tables, and chairs. The Romans were also like the Greeks except their furniture was more decorated with Ivory, metal, and precious stones', 0),
(11, 'Couch V3', 'defult.png', 'The first known furniture is said to have existed in the Egyptian civilization about 4000 years ago, though it might have existed in some crude form prior to that. The Egyptians used chairs, tables, stools, chests, beds, etc. The Assyrians and Babylonians are also said to have had elaborate furniture including high-backed chairs and footstools. In comparison, the Greeks used much simpler furniture comprising beds, small tables, and chairs. The Romans were also like the Greeks except their furniture was more decorated with Ivory, metal, and precious stones', 1),
(12, 'Niche V1', 'couch$v10-logo.png', 'The first known furniture is said to have existed in the Egyptian civilization about 4000 years ago, though it might have existed in some crude form prior to that. The Egyptians used chairs, tables, stools, chests, beds, etc. The Assyrians and Babylonians are also said to have had elaborate furniture including high-backed chairs and footstools. In comparison, the Greeks used much simpler furniture comprising beds, small tables, and chairs. The Romans were also like the Greeks except their furniture was more decorated with Ivory, metal, and precious stones', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `password`) VALUES
(1, 'Mohammed Saeed', 'admin', 'admin'),
(2, 'Mohammed yasser', 'yasser', 'yasser123'),
(3, 'Asser Tearek', 'asser', '123'),
(4, 'Eyad Tarek', 'eyaad', '$2y$10$C6HuHxFT5M2AY2xwCIeToerVqX4OYXtVhzf4fkyApUmZVH5qbC9o6'),
(5, 'shsh', 'shsh', '$2y$10$EcLJUnNn2VruLOeL7LRzDO3o98SRxnxOYFDdlp2UrFPW.vUJhNt4m'),
(6, 'amany', 'amany', '$2y$10$X6mbSaFyJgaxZtr08fYn.u/6qpkiTjpBafLrfejVm1UGy8NmDDJ6q'),
(7, 'Mohammed yasser', 'mmss', '$2y$10$GE5641UoWnRHP/R429DoVeFsII1j60xrmGqSvJSCPXO0ASgh8IOlG'),
(8, 'Mohammed yasser', 'mmsf', '$2y$10$oOjDmFQoAsBLWi38FkXs.us6XWcAL2kg1igQTcUpkxmbMOPXJgHF2');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
