-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 07, 2023 at 05:19 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `design`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_bin NOT NULL,
  `password` varchar(100) COLLATE utf8mb4_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `email`, `password`) VALUES
(1, 'admin@gmail.com', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `hero`
--

CREATE TABLE `hero` (
  `id` int(11) NOT NULL,
  `heading` varchar(200) COLLATE utf8mb4_bin NOT NULL,
  `sub_heading` varchar(200) COLLATE utf8mb4_bin NOT NULL,
  `hero_img` text COLLATE utf8mb4_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Dumping data for table `hero`
--

INSERT INTO `hero` (`id`, `heading`, `sub_heading`, `hero_img`) VALUES
(1, 'Creative Design & Development Agency', 'Lorem Ipsum Dolor Sit Amet Consectetur Adipisicing Elit. Excepturi Magnam Id Laborum Consequuntur Inventore ', '../images/HeroIMG/home-img.svg');

-- --------------------------------------------------------

--
-- Table structure for table `section2`
--

CREATE TABLE `section2` (
  `id` int(11) NOT NULL,
  `heading` varchar(200) COLLATE utf8mb4_bin NOT NULL,
  `description` varchar(200) COLLATE utf8mb4_bin NOT NULL,
  `header_img` text COLLATE utf8mb4_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Dumping data for table `section2`
--

INSERT INTO `section2` (`id`, `heading`, `description`, `header_img`) VALUES
(8, 'Fast service', 'Lorem Ipsum Dolor Sit Amet Consectetur Adipisicing Elit. Nihil, Corporis.', '../images/Section2/feature-1.svg'),
(9, 'Easy Survey', 'Lorem Ipsum Dolor Sit Amet Consectetur Adipisicing Elit. Nihil, Corporis.', '../images/Section2/feature-2.svg'),
(10, 'Cost Effective', 'Lorem Ipsum Dolor Sit Amet Consectetur Adipisicing Elit. Nihil, Corporis.', '../images/Section2/feature-3.svg'),
(11, 'Easy Communication', 'Lorem Ipsum Dolor Sit Amet Consectetur Adipisicing ', '../images/Section2/feature-4.svg');

-- --------------------------------------------------------

--
-- Table structure for table `section3`
--

CREATE TABLE `section3` (
  `id` int(11) NOT NULL,
  `heading` varchar(200) COLLATE utf8mb4_bin NOT NULL,
  `description` varchar(200) COLLATE utf8mb4_bin NOT NULL,
  `sub_heading` varchar(200) COLLATE utf8mb4_bin NOT NULL,
  `left_img` text COLLATE utf8mb4_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Dumping data for table `section3`
--

INSERT INTO `section3` (`id`, `heading`, `description`, `sub_heading`, `left_img`) VALUES
(1, 'Experienced Members', 'Lorem Ipsum Dolor Sit, Amet Consectetur Adipisicing Elit. Iusto Nisi Fugit Saepe Quisquam Adipisci. ', 'Lorem Ipsum Dolor Sit, Amet Consectetur Adipisicing Elit. Iusto Nisi Fugit Saepe Quisquam Adipisci. Consectetur Ipsum Cumque Beatae', '../images/Section3/step-1.svg');

-- --------------------------------------------------------

--
-- Table structure for table `section4`
--

CREATE TABLE `section4` (
  `id` int(11) NOT NULL,
  `heading` varchar(200) COLLATE utf8mb4_bin NOT NULL,
  `description` varchar(200) COLLATE utf8mb4_bin NOT NULL,
  `sub_heading` varchar(200) COLLATE utf8mb4_bin NOT NULL,
  `right_img` text COLLATE utf8mb4_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Dumping data for table `section4`
--

INSERT INTO `section4` (`id`, `heading`, `description`, `sub_heading`, `right_img`) VALUES
(1, 'Unique Designs', 'Lorem Ipsum Dolor Sit, Amet Consectetur Adipisicing Elit. Iusto Nisi Fugit Saepe Quisquam', 'Lorem Ipsum Dolor Sit, Amet Consectetur Adipisicing Elit. Iusto Nisi Fugit Saepe Quisquam Adipisci. Consectetur I', '../images/Section4/step-3.svg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hero`
--
ALTER TABLE `hero`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `section2`
--
ALTER TABLE `section2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `section3`
--
ALTER TABLE `section3`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `section4`
--
ALTER TABLE `section4`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `hero`
--
ALTER TABLE `hero`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `section2`
--
ALTER TABLE `section2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `section3`
--
ALTER TABLE `section3`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `section4`
--
ALTER TABLE `section4`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
