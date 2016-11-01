-- phpMyAdmin SQL Dump
-- version 4.0.10.14
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Nov 01, 2016 at 02:05 AM
-- Server version: 5.6.33
-- PHP Version: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `homeswee_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `maid_age_group`
--

CREATE TABLE IF NOT EXISTS `maid_age_group` (
  `age_id` int(11) NOT NULL AUTO_INCREMENT,
  `age_start` int(11) NOT NULL,
  `age_end` int(11) NOT NULL,
  PRIMARY KEY (`age_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci AUTO_INCREMENT=6 ;

--
-- Dumping data for table `maid_age_group`
--

INSERT INTO `maid_age_group` (`age_id`, `age_start`, `age_end`) VALUES
(1, 21, 25),
(2, 26, 30),
(3, 31, 35),
(4, 36, 40),
(5, 41, 50);

-- --------------------------------------------------------

--
-- Table structure for table `maid_countries`
--

CREATE TABLE IF NOT EXISTS `maid_countries` (
  `country_id` int(11) NOT NULL AUTO_INCREMENT,
  `country_name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country_citizen` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`country_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci AUTO_INCREMENT=5 ;

--
-- Dumping data for table `maid_countries`
--

INSERT INTO `maid_countries` (`country_id`, `country_name`, `country_citizen`) VALUES
(1, 'Indonesia ', 'Indonesia'),
(2, 'Myanmar', 'Myanmar'),
(3, 'Filipino', 'Filipino'),
(4, 'Sri Lankan', 'Sri Lankan');

-- --------------------------------------------------------

--
-- Table structure for table `maid_experience`
--

CREATE TABLE IF NOT EXISTS `maid_experience` (
  `exp_id` int(11) NOT NULL AUTO_INCREMENT,
  `exp_name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`exp_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci AUTO_INCREMENT=8 ;

--
-- Dumping data for table `maid_experience`
--

INSERT INTO `maid_experience` (`exp_id`, `exp_name`) VALUES
(1, 'Care for Infants'),
(2, 'Care for Elderly'),
(3, 'Care for Disabled'),
(4, 'General Housework'),
(5, 'Cooking'),
(6, 'Care For Children'),
(7, 'Care For Special Needs');

-- --------------------------------------------------------

--
-- Table structure for table `maid_maids`
--

CREATE TABLE IF NOT EXISTS `maid_maids` (
  `maid_id` int(11) NOT NULL AUTO_INCREMENT,
  `maid_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `maid_ref_code` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `maid_image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `maid_dob` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `maid_age` int(11) NOT NULL,
  `maid_from` int(11) NOT NULL,
  `maid_type` int(11) NOT NULL,
  `maid_salary` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `maid_day_off` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `maid_feature` int(11) NOT NULL,
  `maid_created_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `maid_updated_on` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `maid_created_by` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `maid_updated_by` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`maid_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci AUTO_INCREMENT=18 ;

--
-- Dumping data for table `maid_maids`
--

INSERT INTO `maid_maids` (`maid_id`, `maid_name`, `maid_ref_code`, `maid_image`, `maid_dob`, `maid_age`, `maid_from`, `maid_type`, `maid_salary`, `maid_day_off`, `maid_feature`, `maid_created_on`, `maid_updated_on`, `maid_created_by`, `maid_updated_by`) VALUES
(2, 'Taryati', 'ss206', '8507dbd5cb1e62396d57339c19a040ef.png', '1987-01-01', 29, 3, 2, '$900', '3', 0, '2016-04-06 17:43:18', '2016-04-06 19:13:18', '4', '9'),
(3, 'Mya Mya', 'cynitha002', '2906d91df19657ad6ff41a959e2fce03.png', '1990-01-01', 25, 1, 3, '$200', '4', 0, '2016-04-05 20:47:34', '2016-04-05 10:17:34', '4', '9'),
(4, 'Thu Thu', 'cynitha002', '025511e7553d215baa3265b2e3c56fd1.png', '1990-01-01', 25, 1, 3, '$200', '4', 0, '2016-04-05 20:47:15', '2016-04-05 10:17:15', '4', '9'),
(5, 'Win Win', 'cynitha002', '035f24242c6825e7e19c7c85b0ea60c4.png', '1990-01-01', 25, 1, 3, '$200', '4', 0, '2016-04-05 20:46:55', '2016-04-05 10:16:55', '4', '9'),
(6, 'Hla Hla', 'cynitha002', '274803123407a1428d846c59ba4bb6bf.png', '1990-01-01', 25, 1, 3, '$200', '4', 0, '2016-04-05 20:46:37', '2016-04-05 10:16:37', '4', '9'),
(7, 'Pu Pu', 'cynitha002', '1e4ce417528c88187ac3de399990ff65.png', '1990-01-01', 25, 1, 3, '$200', '4', 0, '2016-04-05 20:48:20', '2016-04-05 10:18:20', '4', '9'),
(8, 'yu yu', 'cynitha002', 'ee61b3d898c23131eaf78db7dcc1bd98.png', '1990-01-01', 25, 1, 3, '$200', '4', 0, '2016-04-05 20:48:40', '2016-04-05 10:18:40', '4', '9'),
(9, 'win mya', 'cynitha002', '72d255b779bce087ef8760c751cefae1.png', '1990-01-01', 25, 1, 3, '$200', '4', 0, '2016-04-05 20:49:13', '2016-04-05 10:19:13', '4', '9'),
(10, 'po po', 'cynitha002', '0777a8e37fbaea996e8d5131a2b9e8a0.png', '1990-01-01', 25, 1, 3, '$200', '4', 0, '2016-04-05 20:49:36', '2016-04-05 10:19:36', '4', '9'),
(11, 'jar jar', 'cynitha002', 'c953f210c8d3832d88cb135903ed03f5.png', '1990-01-01', 25, 1, 3, '$200', '4', 0, '2016-04-05 20:49:56', '2016-04-05 10:19:56', '4', '9'),
(12, 'swe swe', 'cynitha002', '9e3ca32252a5ca39c594022b75c83cec.png', '1990-01-01', 25, 1, 3, '$200', '4', 0, '2016-04-05 20:50:19', '2016-04-05 10:20:19', '4', '9'),
(13, 'Alice', 'all01', '77f6a20aae524c67120a7e816a5e6ba5.png', '1995-05-05', 20, 1, 3, '$322', '', 1, '2016-04-05 20:50:42', '2016-04-05 10:20:42', '4', '9'),
(14, 'John', 'Jh001', '35cd69578ec9a0c3d5d297a71052bfb2.png', '1990-01-01', 25, 1, 3, '$322', '', 1, '2016-04-05 20:51:04', '2016-04-05 10:21:04', '4', '9'),
(15, 'Smith', 'all01', '60708c5c6ded4eb54c187ae52e6e507a.png', '1990-01-01', 25, 1, 3, '$322', '2', 0, '2016-04-05 20:51:26', '2016-04-05 10:21:26', '4', '9'),
(16, 'Thu Zar', 'cynthia016', 'c5e61756a550b16b995aa9148734134d.png', '1990-01-01', 25, 1, 1, '$700', '', 1, '2016-04-05 20:51:45', '2016-04-05 10:21:45', '4', '9'),
(17, 'sdf', 'sdf', '115b7fab051a2e6fa0b1a013e6fe2068.png', '1990-01-01', 25, 1, 2, '$500', 'sdf', 0, '2016-08-12 21:58:51', '2016-08-12 11:28:51', '4', '9');

-- --------------------------------------------------------

--
-- Table structure for table `maid_maid_exp`
--

CREATE TABLE IF NOT EXISTS `maid_maid_exp` (
  `mexp_id` int(11) NOT NULL AUTO_INCREMENT,
  `mexp_maid_id` int(11) NOT NULL,
  `mexp_exp_id` int(11) NOT NULL,
  `mexp_status` int(11) NOT NULL,
  PRIMARY KEY (`mexp_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci AUTO_INCREMENT=86 ;

--
-- Dumping data for table `maid_maid_exp`
--

INSERT INTO `maid_maid_exp` (`mexp_id`, `mexp_maid_id`, `mexp_exp_id`, `mexp_status`) VALUES
(2, 2, 1, 1),
(3, 2, 2, 3),
(4, 2, 3, 1),
(5, 2, 4, 3),
(6, 2, 5, 3),
(7, 3, 1, 3),
(8, 3, 2, 2),
(9, 3, 3, 3),
(10, 3, 4, 2),
(11, 3, 5, 2),
(12, 4, 1, 2),
(13, 4, 2, 2),
(14, 4, 3, 2),
(15, 4, 4, 2),
(16, 4, 5, 2),
(17, 5, 1, 1),
(18, 5, 2, 1),
(19, 5, 3, 1),
(20, 5, 4, 1),
(21, 5, 5, 1),
(22, 6, 1, 1),
(23, 6, 2, 1),
(24, 6, 3, 1),
(25, 6, 4, 1),
(26, 6, 5, 1),
(27, 7, 1, 1),
(28, 7, 2, 1),
(29, 7, 3, 1),
(30, 7, 4, 1),
(31, 7, 5, 1),
(32, 8, 1, 1),
(33, 8, 2, 1),
(34, 8, 3, 1),
(35, 8, 4, 1),
(36, 8, 5, 1),
(37, 9, 1, 1),
(38, 9, 2, 1),
(39, 9, 3, 1),
(40, 9, 4, 1),
(41, 9, 5, 1),
(42, 10, 1, 0),
(43, 10, 2, 0),
(44, 10, 3, 0),
(45, 10, 4, 0),
(46, 10, 5, 0),
(47, 11, 1, 0),
(48, 11, 2, 0),
(49, 11, 3, 0),
(50, 11, 4, 0),
(51, 11, 5, 0),
(52, 12, 1, 0),
(53, 12, 2, 0),
(54, 12, 3, 0),
(55, 12, 4, 0),
(56, 12, 5, 0),
(57, 13, 1, 2),
(58, 13, 2, 3),
(59, 13, 3, 0),
(60, 13, 4, 0),
(61, 13, 5, 0),
(62, 14, 1, 0),
(63, 14, 2, 0),
(64, 14, 3, 0),
(65, 14, 4, 0),
(66, 14, 5, 0),
(67, 15, 1, 1),
(68, 15, 2, 2),
(69, 15, 3, 3),
(70, 15, 4, 4),
(71, 15, 5, 5),
(72, 16, 1, 0),
(73, 16, 2, 0),
(74, 16, 3, 0),
(75, 16, 4, 0),
(76, 16, 5, 0),
(77, 16, 6, 0),
(78, 16, 7, 0),
(79, 17, 1, 0),
(80, 17, 2, 0),
(81, 17, 3, 0),
(82, 17, 4, 0),
(83, 17, 5, 0),
(84, 17, 6, 0),
(85, 17, 7, 0);

-- --------------------------------------------------------

--
-- Table structure for table `maid_maid_info`
--

CREATE TABLE IF NOT EXISTS `maid_maid_info` (
  `info_id` int(11) NOT NULL AUTO_INCREMENT,
  `info_maid_id` int(11) NOT NULL,
  `info_agency` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `info_available` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `info_pob` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `info_sibling` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `info_height` int(11) NOT NULL,
  `info_weight` int(11) NOT NULL,
  `info_religion` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `info_marital` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `info_child` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `info_education` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `info_language` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `info_working_experience` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `info_introduce` text COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`info_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci AUTO_INCREMENT=18 ;

--
-- Dumping data for table `maid_maid_info`
--

INSERT INTO `maid_maid_info` (`info_id`, `info_maid_id`, `info_agency`, `info_available`, `info_pob`, `info_sibling`, `info_height`, `info_weight`, `info_religion`, `info_marital`, `info_child`, `info_education`, `info_language`, `info_working_experience`, `info_introduce`) VALUES
(2, 2, 'TT', 'Passport Ready', 'Singapore', '2 of 4', 5, 100, '3', 'SINGLE', '2 (age 6 & 11 )', 'High School', 'English', '2013 - 2015 MALAYSIA, CHINESE, TAKING CARE GRANDMA, DO HOUSE WORK AND COOKING', 'need to adjust mobile view menu height\r\nEx-Singapore 1yr.\r\n\r\nyesShe worked in Singapore from Mar 2013 - Mar 2014.\r\n- Her household duties include grocery shopping, laundry, ironing, wash car every week and general housekeeping.\r\n- Prepare breakfast, cook lunch for Ah Ma and sometimes cook dinner for the family.\r\n- Chinese family with 5 members: 76yrs Ah Ma, Sir, Mam, 20 &amp; 25yrs grandchildren. (HDB flat with 3 bedrooms and 2 bathrooms)\r\n- Reason for Leaving: She go back Myanmar because NOT enough food and sleep.\r\n\r\nyesShe is able to understand and communicate in English.\r\n\r\nyesShe wants to come back Singapore to work to earn more money to provide for her family to have a better living. Thus, she is extremely keen in working in Singapore.\r\n\r\nyesShe is hard working and willing to learn all new things and can follow instruction from the employer.\r\n\r\nyesShe is independent in terms of housekeeping because of her experience. She is capable in taking care of infant and young children as she take care of her own niece for 4yrs in Myanmar.\r\n\r\nyesShe can cook Myanmarese and Chinese Cuisine but willing to learn new cooking and adoptable to her new environment.\r\n\r\nyesWilling to work under elderly supervision and obey to their instruction.\r\n\r\nyesShe is hardworking, matured and diligent helper &amp; willing to learn more and ready to accept any tasks that will be assigning to her.'),
(3, 3, 'TT', 'Passport Ready', 'Singapore', '', 0, 0, '1', 'SINGLE', '', '', '', '2013 - 2015 MALAYSIA, CHINESE, TAKING CARE GRANDMA, DO HOUSE WORK AND COOKING', 'first\r\nsecond \r\nthree'),
(4, 4, 'TT', 'Passport Ready', 'Singapore', '', 0, 0, '1', 'SINGLE', '', '', '', '2013 - 2015 MALAYSIA, CHINESE, TAKING CARE GRANDMA, DO HOUSE WORK AND COOKING', '<br>'),
(5, 5, 'TT', '', '', '', 0, 0, '1', 'SINGLE', '', '', '', '2013 - 2015 MALAYSIA, CHINESE, TAKING CARE GRANDMA, DO HOUSE WORK AND COOKING', '<br>'),
(6, 6, 'TT', 'Passport Ready', 'Singapore', '2 of 4', 5, 0, '1', 'SINGLE', '', '', '', '2013 - 2015 MALAYSIA, CHINESE, TAKING CARE GRANDMA, DO HOUSE WORK AND COOKING', '<br><br>'),
(7, 7, 'TT', 'Passport Ready', '', '', 0, 0, '1', 'SINGLE', '', '', '', '2013 - 2015 MALAYSIA, CHINESE, TAKING CARE GRANDMA, DO HOUSE WORK AND COOKING', '<br>'),
(8, 8, 'TT', 'Passport Ready', '', '', 0, 0, '1', 'SINGLE', '', '', '', '2013 - 2015 MALAYSIA, CHINESE, TAKING CARE GRANDMA, DO HOUSE WORK AND COOKING', '<br>'),
(9, 9, 'TT', '', '', '', 0, 0, '1', 'SINGLE', '', '', '', '2013 - 2015 MALAYSIA, CHINESE, TAKING CARE GRANDMA, DO HOUSE WORK AND COOKING', '<br>'),
(10, 10, 'TT', '', '', '', 0, 0, '1', 'SINGLE', '', '', '', '2013 - 2015 MALAYSIA, CHINESE, TAKING CARE GRANDMA, DO HOUSE WORK AND COOKING', '<br>'),
(11, 11, 'TT', 'Passport Ready', '', '', 0, 0, '1', 'SINGLE', '', '', '', '2013 - 2015 MALAYSIA, CHINESE, TAKING CARE GRANDMA, DO HOUSE WORK AND COOKING', '<br>'),
(12, 12, 'TT', '', '', '', 0, 0, '1', 'SINGLE', '', '', '', '2013 - 2015 MALAYSIA, CHINESE, TAKING CARE GRANDMA, DO HOUSE WORK AND COOKING', '<br>'),
(13, 13, 'TT', 'yes', '', '', 0, 0, '1', 'SINGLE', '', '', '', '2013 - 2015 MALAYSIA, CHINESE, TAKING CARE GRANDMA, DO HOUSE WORK AND COOKING', '<br>'),
(14, 14, 'TT', 'yes', '', '', 0, 0, '1', 'SINGLE', '', '', '', '2013 - 2015 MALAYSIA, CHINESE, TAKING CARE GRANDMA, DO HOUSE WORK AND COOKING', '<br>'),
(15, 15, 'TT', '', '', '', 0, 0, '1', 'SINGLE', '', '', '', '2013 - 2015 MALAYSIA, CHINESE, TAKING CARE GRANDMA, DO HOUSE WORK AND COOKING', '<br>'),
(16, 16, 'Src Employment Agency', '', '', '', 0, 0, '1', 'SINGLE', '', '', '', '2013 - 2015 MALAYSIA, CHINESE, TAKING CARE GRANDMA, DO HOUSE WORK AND COOKING', '<br>'),
(17, 17, 'sf', '', '', '', 0, 0, '1', 'SINGLE', '', '', '', 'TEST<br><br>', 'TEST<br><br>');

-- --------------------------------------------------------

--
-- Table structure for table `maid_maid_oth`
--

CREATE TABLE IF NOT EXISTS `maid_maid_oth` (
  `moth_id` int(11) NOT NULL AUTO_INCREMENT,
  `moth_maid_id` int(11) NOT NULL,
  `moth_oth_id` int(11) NOT NULL,
  `moth_status` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`moth_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci AUTO_INCREMENT=144 ;

--
-- Dumping data for table `maid_maid_oth`
--

INSERT INTO `maid_maid_oth` (`moth_id`, `moth_maid_id`, `moth_oth_id`, `moth_status`) VALUES
(2, 2, 1, '0'),
(3, 2, 2, '0'),
(4, 2, 3, '0'),
(5, 2, 4, '1'),
(6, 2, 5, '1'),
(7, 2, 6, '1'),
(8, 2, 7, '1'),
(9, 2, 8, '0'),
(10, 2, 9, '0'),
(11, 3, 1, '1'),
(12, 3, 2, '1'),
(13, 3, 3, '1'),
(14, 3, 4, '1'),
(15, 3, 5, '0'),
(16, 3, 6, '0'),
(17, 3, 7, '0'),
(18, 3, 8, '0'),
(19, 3, 9, '0'),
(20, 4, 1, '0'),
(21, 4, 2, '0'),
(22, 4, 3, '0'),
(23, 4, 4, '0'),
(24, 4, 5, '1'),
(25, 4, 6, '1'),
(26, 4, 7, '1'),
(27, 4, 8, '1'),
(28, 4, 9, '1'),
(29, 5, 1, '0'),
(30, 5, 2, '0'),
(31, 5, 3, '0'),
(32, 5, 4, '1'),
(33, 5, 5, '1'),
(34, 5, 6, '1'),
(35, 5, 7, '1'),
(36, 5, 8, '1'),
(37, 5, 9, '1'),
(38, 6, 1, '0'),
(39, 6, 2, '0'),
(40, 6, 3, '0'),
(41, 6, 4, '0'),
(42, 6, 5, '1'),
(43, 6, 6, '1'),
(44, 6, 7, '1'),
(45, 6, 8, '1'),
(46, 6, 9, '1'),
(47, 7, 1, '0'),
(48, 7, 2, '0'),
(49, 7, 3, '0'),
(50, 7, 4, '0'),
(51, 7, 5, '0'),
(52, 7, 6, '1'),
(53, 7, 7, '1'),
(54, 7, 8, '1'),
(55, 7, 9, '1'),
(56, 8, 1, '0'),
(57, 8, 2, '0'),
(58, 8, 3, '0'),
(59, 8, 4, '1'),
(60, 8, 5, '1'),
(61, 8, 6, '1'),
(62, 8, 7, '1'),
(63, 8, 8, '1'),
(64, 8, 9, '0'),
(65, 9, 1, '1'),
(66, 9, 2, '1'),
(67, 9, 3, '1'),
(68, 9, 4, '0'),
(69, 9, 5, '0'),
(70, 9, 6, '0'),
(71, 9, 7, '0'),
(72, 9, 8, '0'),
(73, 9, 9, '0'),
(74, 10, 1, '1'),
(75, 10, 2, '1'),
(76, 10, 3, '0'),
(77, 10, 4, '0'),
(78, 10, 5, '0'),
(79, 10, 6, '0'),
(80, 10, 7, '0'),
(81, 10, 8, '0'),
(82, 10, 9, '0'),
(83, 11, 1, '1'),
(84, 11, 2, '1'),
(85, 11, 3, '1'),
(86, 11, 4, '0'),
(87, 11, 5, '0'),
(88, 11, 6, '0'),
(89, 11, 7, '0'),
(90, 11, 8, '0'),
(91, 11, 9, '0'),
(92, 12, 1, '0'),
(93, 12, 2, '0'),
(94, 12, 3, '0'),
(95, 12, 4, '1'),
(96, 12, 5, '1'),
(97, 12, 6, '1'),
(98, 12, 7, '1'),
(99, 12, 8, '1'),
(100, 12, 9, 'NA'),
(101, 13, 1, 'NA'),
(102, 13, 2, '1'),
(103, 13, 3, 'NA'),
(104, 13, 4, 'NA'),
(105, 13, 5, 'NA'),
(106, 13, 6, '0'),
(107, 13, 7, 'NA'),
(108, 13, 8, 'NA'),
(109, 13, 9, 'NA'),
(110, 14, 1, 'NA'),
(111, 14, 2, 'NA'),
(112, 14, 3, 'NA'),
(113, 14, 4, 'NA'),
(114, 14, 5, 'NA'),
(115, 14, 6, 'NA'),
(116, 14, 7, 'NA'),
(117, 14, 8, 'NA'),
(118, 14, 9, 'NA'),
(119, 15, 1, '1'),
(120, 15, 2, '1'),
(121, 15, 3, '1'),
(122, 15, 4, '1'),
(123, 15, 5, '1'),
(124, 15, 6, '1'),
(125, 15, 7, '1'),
(126, 15, 8, '1'),
(127, 15, 9, '1'),
(128, 16, 1, 'NA'),
(129, 16, 2, 'NA'),
(130, 16, 3, 'NA'),
(131, 16, 4, 'NA'),
(132, 16, 5, 'NA'),
(133, 16, 6, 'NA'),
(134, 16, 7, 'NA'),
(135, 16, 8, 'NA'),
(136, 17, 1, '1'),
(137, 17, 2, '1'),
(138, 17, 3, '1'),
(139, 17, 4, '1'),
(140, 17, 5, '1'),
(141, 17, 6, '0'),
(142, 17, 7, '0'),
(143, 17, 8, 'NA');

-- --------------------------------------------------------

--
-- Table structure for table `maid_marital`
--

CREATE TABLE IF NOT EXISTS `maid_marital` (
  `marital_id` int(11) NOT NULL AUTO_INCREMENT,
  `marital_name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`marital_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci AUTO_INCREMENT=3 ;

--
-- Dumping data for table `maid_marital`
--

INSERT INTO `maid_marital` (`marital_id`, `marital_name`) VALUES
(1, 'SINGLE'),
(2, 'Marriage');

-- --------------------------------------------------------

--
-- Table structure for table `maid_other_information`
--

CREATE TABLE IF NOT EXISTS `maid_other_information` (
  `oth_id` int(11) NOT NULL AUTO_INCREMENT,
  `oth_name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`oth_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci AUTO_INCREMENT=9 ;

--
-- Dumping data for table `maid_other_information`
--

INSERT INTO `maid_other_information` (`oth_id`, `oth_name`) VALUES
(1, 'Able to handle pork?'),
(2, 'Able to eat pork?'),
(3, 'Able to handle beef?'),
(4, 'Able to care dog/cat?'),
(5, 'Able to do gardening work?'),
(6, 'Able to do simple sewing?'),
(7, 'Will to wash car?'),
(8, 'Willing to work on off days?');

-- --------------------------------------------------------

--
-- Table structure for table `maid_pages`
--

CREATE TABLE IF NOT EXISTS `maid_pages` (
  `page_id` int(11) NOT NULL AUTO_INCREMENT,
  `page_parent` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `page_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `page_title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `page_content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `page_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `page_created_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `page_updated_on` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `page_updated_by` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`page_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci AUTO_INCREMENT=55 ;

--
-- Dumping data for table `maid_pages`
--

INSERT INTO `maid_pages` (`page_id`, `page_parent`, `page_name`, `page_title`, `page_content`, `page_image`, `page_created_on`, `page_updated_on`, `page_updated_by`) VALUES
(1, 'site_name', 'HOMESWEETHOME', '', '', '', '2016-08-17 06:55:10', '0000-00-00 00:00:00', ''),
(2, 'site_header_name', 'HOMESWEETHOME', '', '', '', '2016-08-17 06:55:10', '0000-00-00 00:00:00', ''),
(3, 'favicon', '', '', '', '6c4dfea72b6bb5ea1955e782e548532c.png', '2016-08-08 21:19:35', '0000-00-00 00:00:00', ''),
(4, 'site_logo', '', '', '', 'f4b76bd80632e6ec126b12ff241682ce.png', '2016-08-08 21:18:16', '0000-00-00 00:00:00', ''),
(5, 'aboutus', 'Professtional Recruitment Agency', 'If you have any special request for maids, or have any questions related to the hiring of maids, you can send request/question to us. ', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus nisi urna, fringilla vel sollicitudin dignissim, eleifend vel ligula. Maecenas libero lectus, feugiat sit amet odio eu, sodales euismod orci. Quisque in lorem dolor. Pellentesque feugiat est ligula, ac ullamcorper dolor tinci\r\n\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vitae pellentesque sapien. Nulla maximus risus vel tincidunt porttitor. Sed eleifend fermentum venenatis. Pellentesque eget nibh at nulla vulputate lacinia. Sed facilisis at orci sed malesuada. Etiam vel bibendum enim. Suspendisse porta venenatis mollis. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.', 'e89b5575543b7f5e63c507b989cdebf8.png', '2016-08-17 06:57:01', '0000-00-00 00:00:00', ''),
(14, 'serviceoverview', '', 'We provide the following services to better serve you.', '', '084201528677983734434cb947ef8999.png', '2016-08-17 06:57:39', '0000-00-00 00:00:00', ''),
(23, 'contactus', ' 97C3621', 'You can click on the Enquiry button to contact us. However, if you wish to call us, fax us, or send us a letter, here is our contact details.', 'http://hsh.netmaid.com.sg', '', '2016-08-17 06:56:14', '0000-00-00 00:00:00', 'enquiries@hshrecruitment.com'),
(24, 'main_branch', '67386679', 'Monday to Friday : 10:30am to 7:00pm\r\nSaturday : 10:30am to 5:00pm\r\nSunday : 11.00am to 4:00pm ', '304 Orchard Road,\r\n#03-74, Lucky Plaza\r\nSingapore 238863', 'enquiries@hshrecruitment.com', '2016-08-09 23:37:32', '0000-00-00 00:00:00', '67346682'),
(25, 'other_branch', '67386679', 'Monday to Friday : 10.00am to 7.00pm\r\nSaturday : 10.00am to 5.00pm', 'Blk 491 Jurong West Avenue 1\r\n#01-161 Singapore 640491\r\n', 'enquiries.hsh@gmail.com', '2016-08-09 23:41:14', '0000-00-00 00:00:00', '65668582'),
(32, 'homepage_banner', '', 'Home Page Banner', '', '23860c9d7900138d275465f71f04e120.png', '2016-08-17 06:55:28', '0000-00-00 00:00:00', ''),
(33, 'homepage', '', 'Professtional Recruitment Agency ', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vitae pellentesque sapien. Nulla maximus risus vel tincidunt porttitor. Sed eleifend fermentum venenatis. Pellentesque eget nibh at nulla vulputate lacinia. Sed facilisis at orci sed malesuada. Etiam vel bibendum enim. Suspendisse porta venenatis mollis. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.', '', '2016-08-17 06:57:20', '0000-00-00 00:00:00', ''),
(34, 'main_contact_person', '', 'Lau Yoke Ling (Reg R1103297), Lisa Harjanto (R1103611)\r\n67346682', 'Lau Yoke Ling (Reg R1103297)\r\nCheong Purificacion Antonia (Reg R1440943)', '', '2016-08-09 23:37:32', '0000-00-00 00:00:00', ''),
(35, 'other_contact_person', '', 'Lilis\r\n65668582', 'Lilis Harjanto (R1218024)', '', '2016-08-09 23:41:14', '0000-00-00 00:00:00', ''),
(36, 'contact_social', 'https://www.facebook.com', 'https://www.twitter.com', 'https://www.linkedin.com/', '', '2016-08-09 23:31:56', '0000-00-00 00:00:00', ''),
(37, 'aboutus_banner', '', 'About Us Page Banner', '', '3f259ea2d81f44df1b5b9e56b4815611.png', '2016-08-10 23:16:35', '0000-00-00 00:00:00', ''),
(38, 'contactus_banner', '', 'Conctat Us Page Banner', '', '4ba57355b6b8939b3c017ab2f271f62b.png', '2016-08-11 18:20:13', '0000-00-00 00:00:00', ''),
(39, 'service_banner', '', 'Our Services Page Banner', '', '0886d83ad3a240f00873d08776c0aac2.png', '2016-08-11 21:38:30', '0000-00-00 00:00:00', ''),
(40, 'services', '', 'Other foreign worker related services', '<br>', '288b9bc9731fe9add06bce701d6fd509.png', '2016-08-17 06:56:46', '0000-00-00 00:00:00', ''),
(41, 'services', '', 'Arrangement of medical check up for maids', '<br>', '6267dcfe96e9c941731697da13d099b9.png', '2016-08-11 22:48:47', '0000-00-00 00:00:00', ''),
(42, 'services', '', 'Repatriation of maids', '<br>', '967eecf879deea39888e66a06cb345de.png', '2016-08-11 22:49:39', '0000-00-00 00:00:00', ''),
(43, 'services', '', 'urchasing of banker guarantee and insurance for maids', '<br>', 'fea1778bf8b195e9668e4d75ce4515b5.png', '2016-08-11 22:50:11', '0000-00-00 00:00:00', ''),
(44, 'services', '', 'Booking and Purchasing of air tickets', '<br>', '3a6119edf27b7712518ff2a986f4959f.png', '2016-08-11 22:50:51', '0000-00-00 00:00:00', ''),
(45, 'services', '', 'Cancellation of work permits', '<br>', '312bb9fffc8cde0a24d1f2917d0a241c.png', '2016-08-11 22:51:33', '0000-00-00 00:00:00', ''),
(46, 'services', '', 'Embassy endorsement', '<br>', 'fe041f4cd9b4d7b47cc7959ca5c9c72a.png', '2016-08-11 22:52:04', '0000-00-00 00:00:00', ''),
(47, 'services', '', 'Renewal of passports and work permits', '<br>', 'e71cc2d7ab56dbb04a8260dc6fd3f2ee.png', '2016-08-11 22:52:46', '0000-00-00 00:00:00', ''),
(48, 'services', '', 'Application of work permits', '<br>', 'da1cf6960dd3b4ecd4c8210e757e9541.png', '2016-08-11 22:53:19', '0000-00-00 00:00:00', ''),
(49, 'services', '', 'Home Leave Processing', '<br>', 'f60fd7e492da91fd78c424e9d5fce3da.png', '2016-08-11 22:53:56', '0000-00-00 00:00:00', ''),
(50, 'services', '', 'Training courses &amp; Workshops', '<ol><li>» Training Care of Babies</li><li>» Training in Care of Babies</li><li>» Training in Care of Elderly or Disabled</li><li>» Training in Cooking</li><li>» Training Lesson in Spoken English</li><li>» General Orientation for Employment as a Maid in Singapore</li></ol>', 'c3d7996e297b10e2a1cc9632593a2fc4.png', '2016-08-11 22:58:27', '0000-00-00 00:00:00', ''),
(51, 'services', '', 'Placement of transfer maids', '<br>', '7e0ed965cdd5400d454eab1918247422.png', '2016-08-11 22:54:57', '0000-00-00 00:00:00', ''),
(52, 'services', '', 'Direct hire your own foreign maids', '<br>', '8f9206acc83a584d2b5a5420e2da0233.png', '2016-08-11 22:55:27', '0000-00-00 00:00:00', ''),
(53, 'services', '', 'Job placement services for foreign maids', '<br>', '062df69ea6b4f3e7b186e96cb89864df.png', '2016-08-11 22:55:53', '0000-00-00 00:00:00', ''),
(54, 'maid_banner', '', 'Maid Page Banner', '', '28248bd5dbd693d8e84f784fdf4c1c17.png', '2016-08-12 17:09:54', '0000-00-00 00:00:00', '');

-- --------------------------------------------------------

--
-- Table structure for table `maid_religious`
--

CREATE TABLE IF NOT EXISTS `maid_religious` (
  `reli_id` int(11) NOT NULL AUTO_INCREMENT,
  `reli_name` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`reli_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci AUTO_INCREMENT=4 ;

--
-- Dumping data for table `maid_religious`
--

INSERT INTO `maid_religious` (`reli_id`, `reli_name`) VALUES
(1, 'Christam'),
(2, 'Buddhist'),
(3, 'Muslim');

-- --------------------------------------------------------

--
-- Table structure for table `maid_slider`
--

CREATE TABLE IF NOT EXISTS `maid_slider` (
  `slide_id` int(11) NOT NULL AUTO_INCREMENT,
  `slide_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slide_img` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `slide_page` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slide_text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `slide_link` text COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`slide_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci AUTO_INCREMENT=3 ;

--
-- Dumping data for table `maid_slider`
--

INSERT INTO `maid_slider` (`slide_id`, `slide_name`, `slide_img`, `slide_page`, `slide_text`, `slide_link`) VALUES
(1, 'Slider1', 'eb99535d27b33c79a1bd06c0006d5b9b.png', '', '', ''),
(2, 'Slider2', 'eda4e8850add39906b658ce324239fd5.png', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `maid_testimonials`
--

CREATE TABLE IF NOT EXISTS `maid_testimonials` (
  `testi_id` int(11) NOT NULL AUTO_INCREMENT,
  `testi_name` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `testi_content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `testi_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`testi_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci AUTO_INCREMENT=4 ;

--
-- Dumping data for table `maid_testimonials`
--

INSERT INTO `maid_testimonials` (`testi_id`, `testi_name`, `testi_content`, `testi_image`) VALUES
(1, 'Loprem Ipasum \r\nDivision Manager', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.\r\nLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.', '72ad8507591dbf7cbc61c04b2017f87c.png'),
(2, 'JOE ALLEN, TREX COMPANY', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.\r\nLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.', '37186fdf72032afbaa3c053026c4fa8c.png'),
(3, 'JOE ALLEN, TREX COMPANY', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.\r\nLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.', '1562880bd64a711861bb8f1be3ecf451.png');

-- --------------------------------------------------------

--
-- Table structure for table `maid_type`
--

CREATE TABLE IF NOT EXISTS `maid_type` (
  `type_id` int(11) NOT NULL AUTO_INCREMENT,
  `type_name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`type_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci AUTO_INCREMENT=5 ;

--
-- Dumping data for table `maid_type`
--

INSERT INTO `maid_type` (`type_id`, `type_name`) VALUES
(1, 'Transfer Indonesia'),
(2, 'New'),
(3, 'EX-Singapore'),
(4, 'Experience');

-- --------------------------------------------------------

--
-- Table structure for table `maid_users`
--

CREATE TABLE IF NOT EXISTS `maid_users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci AUTO_INCREMENT=10 ;

--
-- Dumping data for table `maid_users`
--

INSERT INTO `maid_users` (`id`, `username`, `display_name`, `password`, `role`) VALUES
(5, 'Manager', 'Manager', 'abF1wcV87geOk', '2'),
(7, 'Editor', 'Editor', 'abF1wcV87geOk', '3'),
(9, 'innov8te', 'admin', 'abF1wcV87geOk', '1');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
