-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 08, 2025 at 01:14 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `portfolio`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `about` varchar(255) NOT NULL,
  `extra` varchar(255) NOT NULL,
  `read-time` varchar(255) NOT NULL,
  `visit-site` varchar(255) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `image`, `about`, `extra`, `read-time`, `visit-site`, `date`) VALUES
(1, 'blog-img-4.jpg', 'SecureDev Lab', 'Want to build a lab where web development meets security-first principles - to resist, detect, and learn from pentesting scenarios?', '15 min read', '', '2025-06-07 07:16:19'),
(2, 'blog-img-3.jpg', 'Development', 'Want to upgrade your brain? stop doing these 7\nThings', '15 min read', '', '2025-06-07 07:16:19'),
(3, 'broker.png', 'BTCInvest Pro', 'A modern Bitcoin investment dashboard with real-time data and secure transaction features, investments and returns.', '7 min read', 'https://uk.captreasure.com', '2025-06-07 16:03:52'),
(4, 'broker2.png', 'BTC Horizon', 'Explore Bitcoin investment strategies with real-time insights, user systems and ROI tracking.', '22 min read', 'https://wawtradesa.net', '2025-06-07 16:03:52');

-- --------------------------------------------------------

--
-- Table structure for table `certs`
--

CREATE TABLE `certs` (
  `id` int(255) NOT NULL,
  `logo` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL,
  `action` varchar(255) NOT NULL,
  `viewLink` varchar(1000) NOT NULL,
  `startDate` int(255) NOT NULL,
  `endDate` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `certs`
--

INSERT INTO `certs` (`id`, `logo`, `title`, `role`, `action`, `viewLink`, `startDate`, `endDate`) VALUES
(1, 'academic.png', 'Academic Achievement', 'Best graduating student', 'H.O.D, FCAH&PT', 'www.portal.fcahptvom.edu.ng', 2020, 2024),
(2, 'eblaze.png', 'eBlaze Apps || Web || Tutoring', 'Full-stack Developer', 'View', '', 2023, 2025),
(3, 'aqskill.png', 'AQSKILL', 'Backend - PHP - MySQL', 'View', 'https://aqskill.org/verify/187276A24439', 2023, 2024),
(4, 'aqskill.png', 'AQSKILL', 'Introduction to Cyber security', 'View', 'https://aqskill.org/verify/185881A24439', 2024, 2025);

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
(1, 'Cyber Security', 'padlock.svg'),
(2, 'Web Development', 'web-development.svg'),
(3, 'DataBase Mangt', 'sql.svg'),
(4, 'UI/UX Design', 'ui-ux.svg');

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
(1, 'Pentesting', 'pentest.png'),
(2, 'Kali Linux', 'kali.png'),
(3, 'JavaScript', 'js.png'),
(4, 'PHP', 'php.png'),
(5, 'SQL', 'sql.png'),
(6, 'Ajax', 'ajax.png'),
(7, 'Jquery', 'jquery.png'),
(8, 'Web Security', 'secure.png'),
(11, 'Git/GitHub', 'git.png'),
(12, 'Figma', 'figma.svg'),
(13, 'Adobe XD', 'xd.svg');

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `id` int(11) NOT NULL,
  `img` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  `content` varchar(255) NOT NULL,
  `client` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`id`, `img`, `link`, `content`, `client`) VALUES
(1, 'client-1.jpeg', 'eBlaze.com', 'It was great mentoring him, throughout his training, he was not only a skilled full-stack developer but also a responsible, security-conscious professional i’d trust with high-stakes projects. Any team or client would be lucky to work with him', 'Augustine Gabriel - Snr. Developer/Mentor'),
(2, 'client-2.jpg', '', 'Working with Matthew was one of the best decisions made for my online presence. Any client or team that works with him is in excellent hands.', 'Fr. Godwin Ovye-Religious'),
(3, 'client-3.jpg', '', 'During our time in school he has been the best, and I can confidently say he’s one of the most dedicated and driven individuals i know. Watching him grow from a passionate learner into a skilled web developer and ethical hacker has been inspiring', 'Vivian Daniel - Viv\'s Collection'),
(4, 'client-4.jpg', '', 'He communicates clearly, delivers on time, and takes pride in every line of code. If you’re looking for a reliable full-stack developer with an eye for security, i highly recommend him', 'Mary Amevye - Mary\'s Musicals'),
(5, 'client-5.jpg', 'eBlaze.com', 'I\'m proud to call him a colleague,  from late-night coding sessions to group projects, he always went the extra mile not just to meet deadlines, but to truly understand and master his craft.', 'Augustine-UI/UX'),
(7, 'client-7.jfif', 'https://www.cipane.ng', 'On top of the development work, Matthew\'s ethical hacking skills gave me peace of mind. He conducted a thorough security audit and helped patch vulnerabilities i didn’t even know existed.', 'Audu Abdulrasheed-CIPANE cyber consult '),
(8, 'client-8.png', '', 'Beyond his talent, what really stands out is his character. He’s reliable, humble, and always willing to lend a hand whether you\'re stuck on a bug or just need encouragement. He\'s not just a colleague, but a true friend and professional.', 'Annabel Stones-Content/Promoter');

-- --------------------------------------------------------

--
-- Table structure for table `works`
--

CREATE TABLE `works` (
  `id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `sub-title` varchar(255) NOT NULL,
  `project-desc` varchar(255) NOT NULL,
  `visit-site` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `works`
--

INSERT INTO `works` (`id`, `image`, `title`, `sub-title`, `project-desc`, `visit-site`) VALUES
(1, 'linkTree.png', 'Smart Link Hub — Your Digital Gateway', 'Web Dev | Design', 'A modern, mobile-friendly link-in-bio page that organizes your web presence in one sleek interface. Inspired by Linktree, built with clean HTML/CSS and JavaScript', 'https://dicelinktree.wuaze.com'),
(2, 'VirtualReality.jpg', 'Visual Flow — Intuitive Design for a Seamless Experience', 'UI | Web Design ', 'A responsive UI/UX website prototype crafted with a focus on user behavior, accessibility, and clean visual hierarchy. Designed using Figma, this project showcases modern layout techniques and user-first design thinking.', 'portfolio-details.html'),
(3, 'tablet.png', 'AIMug - AI Writing Application Tools', '', 'Product Design | Application', ''),
(4, 'portfolio.png', 'Dynamic Developer Portfolio - Powered by a Live Database', 'Web Dev | Design', 'A full-stack portfolio website with CRUD capabilities, storing and displaying project and user data from a connected backend.', 'https://amevye-matthew.wuaze.com'),
(5, 'portfolio2.png', 'Minimalist Portfolio — Clean, Fast, and Fully Static', 'Web Dev | Design', 'A lightweight personal site to showcase your projects and skills with blazing speed. Built for performance and simplicity using just HTML, CSS, and JavaScript', 'https://amevye-matthew.vercel.app'),
(6, 'cmsproject.png', 'Content + e-Commerce- All-in-One', 'Full-stack Web Dev', 'A robust full-stack web application combining a content management dashboard with an integrated e-commerce system. Manage products, content, and orders with ease — All-in-One Admin & Storefront System.', '');

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
(1, 'J.O Eagle videos', 'Video Editor', '2018', '2019', 'jo.png'),
(2, 'FCAH&PT, Vom', 'Undergraduate', '2020', '2024', 'vet.png'),
(3, 'eBlaze Tech', 'Web Dev Intern ', '2024', '2025', 'eblaze.png'),
(4, 'Newrem Info', 'Snr. Programmer', '2023', 'Now', 'newrem.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `certs`
--
ALTER TABLE `certs`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `works`
--
ALTER TABLE `works`
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
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `certs`
--
ALTER TABLE `certs`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `works`
--
ALTER TABLE `works`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `work_exp`
--
ALTER TABLE `work_exp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
