-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 03, 2025 at 03:37 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gabson`
--

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` int(11) NOT NULL,
  `category` varchar(200) NOT NULL,
  `image` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `category`, `image`) VALUES
(1, 'Graphics', 'pro1.jpg'),
(2, 'Graphics', 'pro2.png'),
(3, 'Web Design', 'pro3.png'),
(4, 'Web Design', 'pro4.png');

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE `service` (
  `id` int(11) NOT NULL,
  `service` varchar(200) NOT NULL,
  `logo` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`id`, `service`, `logo`) VALUES
(1, 'UI UX Design', 'ui-ux.svg'),
(2, 'Mobile App', 'app.svg'),
(3, 'Web Dev', 'web-development.svg'),
(4, 'Product Design', 'prd-design.svg'),
(5, 'Branding', 'branding.svg'),
(6, 'Graphics', 'camera.svg'),
(7, 'Motion Design', 'youtube.svg'),
(8, 'Visualization', 'view.svg');

-- --------------------------------------------------------

--
-- Table structure for table `stack`
--

CREATE TABLE `stack` (
  `id` int(11) NOT NULL,
  `stack` varchar(200) NOT NULL,
  `logo` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `stack`
--

INSERT INTO `stack` (`id`, `stack`, `logo`) VALUES
(1, 'HTML', 'html.png'),
(2, 'CSS', 'css.png'),
(3, 'JavaScript', 'js.png'),
(4, 'PHP', 'php.png'),
(5, 'SQL', 'sql.png'),
(6, 'Ajax', 'ajax.png'),
(7, 'Jquery', 'jquery.png'),
(8, 'Corel Draw', 'corel.png'),
(9, 'Photoshop', 'ps.png'),
(10, 'Flutter', 'flutter.png'),
(11, 'Canva', 'canva.png'),
(12, 'Figma', 'figma.svg');

-- --------------------------------------------------------

--
-- Table structure for table `work_exp`
--

CREATE TABLE `work_exp` (
  `id` int(11) NOT NULL,
  `company` varchar(200) NOT NULL,
  `designation` varchar(200) NOT NULL,
  `startDate` varchar(200) NOT NULL,
  `endDate` varchar(200) NOT NULL,
  `logo` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `work_exp`
--

INSERT INTO `work_exp` (`id`, `company`, `designation`, `startDate`, `endDate`, `logo`) VALUES
(1, 'Paul\'s Elect', 'Electronic Engr.', '2009', '2011', 'pe.png'),
(2, 'Innolinks Associates', 'Artist', '2011', '2015', 'inno.png'),
(3, 'Newrem Info', 'Snr. Programmer', '2015', 'Now', 'newrem.png'),
(4, 'G-Class Info', 'System Instructor', '2017', '2018', 'gClass.png'),
(5, 'Quick Access', 'Instructor/Operator', '2020', '2022', 'qa.png'),
(6, 'FG Project T-MAX', 'Web Design Instructor ', '2022', '2023', 'tmax.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stack`
--
ALTER TABLE `stack`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `work_exp`
--
ALTER TABLE `work_exp`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `service`
--
ALTER TABLE `service`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `stack`
--
ALTER TABLE `stack`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `work_exp`
--
ALTER TABLE `work_exp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
