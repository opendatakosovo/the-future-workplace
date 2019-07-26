-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 26, 2019 at 02:23 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `the_future_workplace`
--

-- --------------------------------------------------------

--
-- Table structure for table `businesses_map`
--

CREATE TABLE `businesses_map` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `municipality` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `publishing_of_computer_games` int(11) NOT NULL,
  `computer_programming_activities` int(11) NOT NULL,
  `computer_consultancy_activities` int(11) NOT NULL,
  `computer_facilities_management_activities` int(11) NOT NULL,
  `information_technology_and_computer_service` int(11) NOT NULL,
  `wired_telecommunications_activities` int(11) NOT NULL,
  `wireless_telecommunication_activities` int(11) NOT NULL,
  `satellite_telecommunication_activities` int(11) NOT NULL,
  `other_telecommunication_activities` int(11) NOT NULL,
  `other_software_publishing` int(11) NOT NULL,
  `data_processing_hosting_and_related_activities` int(11) NOT NULL,
  `total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `businesses_map`
--

INSERT INTO `businesses_map` (`id`, `municipality`, `publishing_of_computer_games`, `computer_programming_activities`, `computer_consultancy_activities`, `computer_facilities_management_activities`, `information_technology_and_computer_service`, `wired_telecommunications_activities`, `wireless_telecommunication_activities`, `satellite_telecommunication_activities`, `other_telecommunication_activities`, `other_software_publishing`, `data_processing_hosting_and_related_activities`, `total`) VALUES
(1, 'Decan', 1, 8, 8, 1, 7, 18, 0, 0, 0, 11, 7, 54),
(2, 'Dragash', 0, 1, 0, 1, 3, 29, 2, 0, 1, 1, 2, 40),
(3, 'Ferizaj', 6, 46, 75, 26, 92, 112, 16, 3, 30, 79, 62, 347),
(4, 'Fushe Kosove', 3, 28, 49, 17, 61, 82, 17, 6, 26, 47, 47, 228),
(5, 'Gjakova', 2, 19, 40, 9, 45, 76, 7, 3, 8, 40, 33, 185),
(6, 'Gjilan', 9, 40, 65, 27, 79, 115, 18, 7, 32, 61, 68, 312),
(7, 'Gracanice', 9, 13, 26, 12, 27, 18, 6, 2, 9, 22, 23, 94),
(8, 'Hani i Elezit', 1, 1, 2, 1, 2, 5, 2, 0, 2, 0, 1, 12),
(9, 'Istog', 0, 20, 31, 17, 29, 33, 9, 4, 6, 24, 18, 116),
(10, 'Junik', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1),
(11, 'Kacanik', 5, 3, 6, 3, 25, 35, 1, 0, 8, 9, 6, 80),
(12, 'Kamenica', 0, 7, 10, 7, 10, 22, 5, 4, 6, 8, 9, 50),
(13, 'Klina', 0, 2, 7, 1, 11, 20, 0, 0, 3, 7, 5, 50),
(14, 'Leposaviq', 1, 7, 10, 9, 21, 9, 8, 4, 11, 5, 6, 60),
(15, 'Lipjan', 2, 12, 30, 6, 42, 87, 8, 2, 12, 35, 26, 221),
(16, 'Malisheve', 0, 4, 2, 4, 10, 19, 7, 3, 8, 4, 4, 38),
(17, 'Mitrovica', 13, 61, 80, 43, 95, 139, 43, 28, 50, 68, 67, 412),
(18, 'Novo Brdo', 0, 0, 2, 1, 4, 3, 2, 2, 1, 3, 4, 11),
(19, 'Obilic', 0, 1, 7, 2, 6, 14, 5, 1, 7, 3, 5, 34),
(20, 'Peja', 4, 43, 76, 29, 85, 93, 20, 14, 26, 59, 65, 257),
(21, 'Podujevo', 3, 13, 21, 8, 22, 40, 16, 8, 16, 19, 21, 125),
(22, 'Pristina', 155, 757, 1346, 479, 1431, 1213, 271, 166, 451, 1321, 1435, 4015),
(23, 'Prizren', 7, 58, 87, 31, 115, 179, 36, 36, 61, 105, 111, 502),
(24, 'Rahovec', 0, 2, 18, 3, 23, 21, 7, 2, 6, 17, 12, 69),
(25, 'Shtime', 4, 5, 9, 5, 6, 11, 3, 3, 9, 10, 10, 40),
(26, 'Shtrpce', 0, 1, 6, 0, 7, 5, 0, 0, 1, 9, 5, 16),
(27, 'Skenderaj', 1, 7, 4, 6, 9, 26, 6, 3, 6, 1, 3, 57),
(28, 'Unknown', 2, 12, 21, 9, 34, 33, 4, 0, 7, 29, 26, 127),
(29, 'Viti', 0, 8, 8, 4, 14, 41, 9, 0, 8, 11, 13, 112),
(30, 'Vushtrri', 0, 3, 10, 6, 19, 63, 5, 1, 10, 16, 20, 123),
(31, 'Zubin Potok', 0, 0, 1, 0, 2, 5, 1, 0, 0, 1, 1, 25),
(32, 'Zvecan', 0, 4, 7, 8, 9, 12, 8, 7, 8, 2, 8, 45);

-- --------------------------------------------------------

--
-- Table structure for table `discrepancy`
--

CREATE TABLE `discrepancy` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `skill_category_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `demanded` int(11) NOT NULL,
  `supplied` int(11) NOT NULL,
  `year` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `discrepancy`
--

INSERT INTO `discrepancy` (`id`, `skill_category_name`, `demanded`, `supplied`, `year`, `created_at`, `updated_at`) VALUES
(2, 'AI and Machine Learning', 845, 764, '2009', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 'AI and Machine Learning', 855, 842, '2010', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 'AI and Machine Learning', 865, 920, '2011', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, 'AI and Machine Learning', 875, 998, '2012', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(6, 'AI and Machine Learning', 885, 1076, '2013', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(7, 'AI and Machine Learning', 895, 1154, '2014', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(8, 'AI and Machine Learning', 905, 1232, '2015', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(9, 'AI and Machine Learning', 915, 1310, '2016', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(10, 'AI and Machine Learning', 925, 1388, '2017', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(11, 'AI and Machine Learning', 935, 1466, '2018', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(12, 'AI and Machine Learning', 945, 1544, '2019', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(13, 'AI and Machine Learning', 955, 1622, '2020', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(14, 'AI and Machine Learning', 965, 1700, '2021', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(15, 'AI and Machine Learning', 975, 1778, '2022', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(16, 'AI and Machine Learning', 985, 1856, '2023', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(17, 'AI and Machine Learning', 995, 1934, '2024', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(18, 'Computer Graphics', 458, 383, '2008', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(19, 'Computer Graphics', 371, 286, '2009', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(20, 'Computer Graphics', 284, 189, '2010', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(21, 'Computer Graphics', 197, 92, '2011', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(22, 'Computer Graphics', 110, 0, '2012', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(23, 'Computer Graphics', 23, 0, '2013', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(24, 'Computer Graphics', 0, 0, '2014', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(25, 'Computer Graphics', 0, 0, '2015', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(26, 'Computer Graphics', 0, 0, '2016', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(27, 'Computer Graphics', 0, 0, '2017', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(28, 'Computer Graphics', 0, 0, '2018', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(29, 'Computer Graphics', 0, 0, '2019', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(30, 'Computer Graphics', 0, 0, '2020', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(31, 'Computer Graphics', 0, 0, '2021', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(32, 'Computer Graphics', 0, 0, '2022', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(33, 'Computer Graphics', 0, 0, '2023', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(34, 'Computer Graphics', 0, 0, '2024', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(35, 'Database Management', 1489, 1320, '2008', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(36, 'Database Management', 1442, 1389, '2009', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(37, 'Database Management', 1395, 1458, '2010', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(38, 'Database Management', 1348, 1527, '2011', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(39, 'Database Management', 1301, 1596, '2012', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(40, 'Database Management', 1254, 1665, '2013', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(41, 'Database Management', 1207, 1734, '2014', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(42, 'Database Management', 1160, 1803, '2015', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(43, 'Database Management', 1113, 1872, '2016', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(44, 'Database Management', 1066, 1941, '2017', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(45, 'Database Management', 1019, 2010, '2018', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(46, 'Database Management', 972, 2079, '2019', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(47, 'Database Management', 925, 2148, '2020', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(48, 'Database Management', 878, 2217, '2021', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(49, 'Database Management', 831, 2286, '2022', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(50, 'Database Management', 784, 2355, '2023', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(51, 'Database Management', 737, 2424, '2024', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(52, 'Human Interaction', 533, 469, '2008', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(53, 'Human Interaction', 566, 459, '2009', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(54, 'Human Interaction', 599, 449, '2010', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(55, 'Human Interaction', 632, 439, '2011', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(56, 'Human Interaction', 665, 429, '2012', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(57, 'Human Interaction', 698, 419, '2013', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(58, 'Human Interaction', 731, 409, '2014', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(59, 'Human Interaction', 764, 399, '2015', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(60, 'Human Interaction', 797, 389, '2016', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(61, 'Human Interaction', 830, 379, '2017', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(62, 'Human Interaction', 863, 369, '2018', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(63, 'Human Interaction', 896, 359, '2019', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(64, 'Human Interaction', 929, 349, '2020', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(65, 'Human Interaction', 962, 339, '2021', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(66, 'Human Interaction', 995, 329, '2022', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(67, 'Human Interaction', 1028, 319, '2023', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(68, 'Human Interaction', 1061, 309, '2024', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(69, 'Electronics', 1113, 939, '2008', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(70, 'Electronics', 1070, 993, '2009', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(71, 'Electronics', 1027, 1047, '2010', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(72, 'Electronics', 984, 1101, '2011', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(73, 'Electronics', 941, 1155, '2012', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(74, 'Electronics', 898, 1209, '2013', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(75, 'Electronics', 855, 1263, '2014', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(76, 'Electronics', 812, 1317, '2015', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(77, 'Electronics', 769, 1371, '2016', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(78, 'Electronics', 726, 1425, '2017', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(79, 'Electronics', 683, 1479, '2018', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(80, 'Electronics', 640, 1533, '2019', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(81, 'Electronics', 597, 1587, '2020', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(82, 'Electronics', 554, 1641, '2021', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(83, 'Electronics', 511, 1695, '2022', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(84, 'Electronics', 468, 1749, '2023', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(85, 'Electronics', 425, 1803, '2024', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(86, 'Mobile Application Development', 1246, 698, '2008', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(87, 'Mobile Application Development', 1224, 693, '2009', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(88, 'Mobile Application Development', 1202, 688, '2010', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(89, 'Mobile Application Development', 1180, 683, '2011', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(90, 'Mobile Application Development', 1158, 678, '2012', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(91, 'Mobile Application Development', 1136, 673, '2013', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(92, 'Mobile Application Development', 1114, 668, '2014', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(93, 'Mobile Application Development', 1092, 663, '2015', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(94, 'Mobile Application Development', 1070, 658, '2016', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(95, 'Mobile Application Development', 1048, 653, '2017', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(96, 'Mobile Application Development', 1026, 648, '2018', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(97, 'Mobile Application Development', 1004, 643, '2019', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(98, 'Mobile Application Development', 982, 638, '2020', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(99, 'Mobile Application Development', 960, 633, '2021', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(100, 'Mobile Application Development', 938, 628, '2022', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(101, 'Mobile Application Development', 916, 623, '2023', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(102, 'Mobile Application Development', 894, 618, '2024', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(103, 'Networking', 688, 745, '2008', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(104, 'Networking', 600, 778, '2009', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(105, 'Networking', 512, 856, '2010', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(106, 'Networking', 424, 934, '2011', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(107, 'Networking', 336, 1012, '2012', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(108, 'Networking', 248, 1090, '2013', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(109, 'Networking', 160, 1168, '2014', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(110, 'Networking', 72, 1246, '2015', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(111, 'Networking', 0, 1324, '2016', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(112, 'Networking', 0, 1402, '2017', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(113, 'Networking', 0, 1480, '2018', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(114, 'Networking', 0, 1558, '2019', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(115, 'Networking', 0, 1636, '2020', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(116, 'Networking', 0, 1714, '2021', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(117, 'Networking', 0, 1792, '2022', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(118, 'Networking', 0, 1870, '2023', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(119, 'Networking', 0, 1948, '2024', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(120, 'Numerical Analysis', 578, 481, '2008', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(121, 'Numerical Analysis', 506, 482, '2009', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(122, 'Numerical Analysis', 434, 483, '2010', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(123, 'Numerical Analysis', 362, 484, '2011', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(124, 'Numerical Analysis', 290, 485, '2012', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(125, 'Numerical Analysis', 218, 486, '2013', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(126, 'Numerical Analysis', 146, 487, '2014', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(127, 'Numerical Analysis', 74, 488, '2015', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(128, 'Numerical Analysis', 2, 489, '2016', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(129, 'Numerical Analysis', 0, 490, '2017', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(130, 'Numerical Analysis', 0, 491, '2018', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(131, 'Numerical Analysis', 0, 492, '2019', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(132, 'Numerical Analysis', 0, 493, '2020', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(133, 'Numerical Analysis', 0, 494, '2021', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(134, 'Numerical Analysis', 0, 495, '2022', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(135, 'Numerical Analysis', 0, 496, '2023', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(136, 'Numerical Analysis', 0, 497, '2024', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(137, 'Security', 1196, 1449, '2008', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(138, 'Security', 1112, 1449, '2009', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(139, 'Security', 1028, 1449, '2010', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(140, 'Security', 944, 1449, '2011', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(141, 'Security', 860, 1449, '2012', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(142, 'Security', 776, 1449, '2013', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(143, 'Security', 692, 1449, '2014', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(144, 'Security', 608, 1449, '2015', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(145, 'Security', 524, 1449, '2016', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(146, 'Security', 440, 1449, '2017', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(147, 'Security', 356, 1449, '2018', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(148, 'Security', 272, 1449, '2019', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(149, 'Security', 188, 1449, '2020', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(150, 'Security', 104, 1449, '2021', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(151, 'Security', 20, 1449, '2022', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(152, 'Security', 0, 1449, '2023', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(153, 'Security', 0, 1449, '2024', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(154, 'Software Engineering', 1954, 1533, '2008', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(155, 'Software Engineering', 2018, 1530, '2009', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(156, 'Software Engineering', 2082, 1527, '2010', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(157, 'Software Engineering', 2146, 1524, '2011', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(158, 'Software Engineering', 2210, 1521, '2012', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(159, 'Software Engineering', 2274, 1518, '2013', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(160, 'Software Engineering', 2338, 1515, '2014', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(161, 'Software Engineering', 2402, 1512, '2015', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(162, 'Software Engineering', 2466, 1509, '2016', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(163, 'Software Engineering', 2530, 1506, '2017', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(164, 'Software Engineering', 2594, 1503, '2018', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(165, 'Software Engineering', 2658, 1500, '2019', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(166, 'Software Engineering', 2722, 1497, '2020', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(167, 'Software Engineering', 2786, 1494, '2021', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(168, 'Software Engineering', 2850, 1491, '2022', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(169, 'Software Engineering', 2914, 1488, '2023', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(170, 'Software Engineering', 2978, 1485, '2024', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(171, 'System Engineering', 741, 666, '2008', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(172, 'System Engineering', 690, 636, '2009', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(173, 'System Engineering', 639, 606, '2010', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(174, 'System Engineering', 588, 576, '2011', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(175, 'System Engineering', 537, 546, '2012', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(176, 'System Engineering', 486, 516, '2013', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(177, 'System Engineering', 435, 486, '2014', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(178, 'System Engineering', 384, 456, '2015', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(179, 'System Engineering', 333, 426, '2016', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(180, 'System Engineering', 282, 396, '2017', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(181, 'System Engineering', 231, 366, '2018', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(182, 'System Engineering', 180, 336, '2019', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(183, 'System Engineering', 129, 306, '2020', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(184, 'System Engineering', 78, 276, '2021', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(185, 'System Engineering', 27, 246, '2022', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(186, 'System Engineering', 0, 216, '2023', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(187, 'System Engineering', 0, 186, '2024', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(188, 'Web Engineering', 1209, 1192, '2008', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(189, 'Web Engineering', 1180, 1156, '2009', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(190, 'Web Engineering', 1151, 1120, '2010', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(191, 'Web Engineering', 1122, 1084, '2011', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(192, 'Web Engineering', 1093, 1048, '2012', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(193, 'Web Engineering', 1064, 1012, '2013', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(194, 'Web Engineering', 1035, 976, '2014', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(195, 'Web Engineering', 1006, 940, '2015', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(196, 'Web Engineering', 977, 904, '2016', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(197, 'Web Engineering', 948, 868, '2017', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(198, 'Web Engineering', 919, 832, '2018', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(199, 'Web Engineering', 890, 796, '2019', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(200, 'Web Engineering', 861, 760, '2020', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(201, 'Web Engineering', 832, 724, '2021', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(202, 'Web Engineering', 803, 688, '2022', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(203, 'Web Engineering', 774, 652, '2023', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(204, 'Web Engineering', 745, 616, '2024', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_07_26_093715_create_discrepancy_table', 2),
(4, '2019_07_26_105248_businesses_map_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'default',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `type`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Dren', 'dren@opendatakosovo.org', NULL, '$2y$10$T7t/K7OkowUauHpWbmm9y.QaE2LOt8KzL2RywQJ4bgWDs2IUlbV.G', 'default', 'zokJeqo6TS7O3J0wzYb0UMXAtqMh5pUuO53rL4ev0EYY0OGjoMXg9i5OW81a', '2019-07-26 09:18:41', '2019-07-26 09:18:41');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `businesses_map`
--
ALTER TABLE `businesses_map`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `discrepancy`
--
ALTER TABLE `discrepancy`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `businesses_map`
--
ALTER TABLE `businesses_map`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `discrepancy`
--
ALTER TABLE `discrepancy`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=205;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
