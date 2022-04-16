-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 05, 2021 at 05:34 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `informationdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `control`
--

CREATE TABLE `control` (
  `value` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `control`
--

INSERT INTO `control` (`value`) VALUES
(2);

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `text` int(10) NOT NULL,
  `message` varchar(5000) NOT NULL,
  `filepath` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notifications`
--

INSERT INTO `notifications` (`text`, `message`, `filepath`) VALUES
(4, 'helllo', ''),
(5, 'hello', ''),
(6, 'hello', '');

-- --------------------------------------------------------

--
-- Table structure for table `notifications_table`
--

CREATE TABLE `notifications_table` (
  `Id` int(10) NOT NULL,
  `image_name` mediumtext DEFAULT NULL,
  `image_path` varchar(500) DEFAULT NULL,
  `Dates` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notifications_table`
--

INSERT INTO `notifications_table` (`Id`, `image_name`, `image_path`, `Dates`) VALUES
(5, 'me', 'photo/Programmer+Found+by+Pcbots.jpg', '0000-00-00 00:00:00'),
(6, 'hgjgj', 'photo/7-62mm-snai-perskaya-vintovka-mc-116m-sorevnovaniya-po-snai-pingu-posvyashchennye-prazdnovaniyu-dnya-oruzhei-nika-01-1535557732.jpg', '0000-00-00 00:00:00'),
(7, 'heeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeee', 'photo/3d_graffiti_background_ii-wallpaper-1366x768.jpg', '0000-00-00 00:00:00'),
(8, 'mee', 'photo/69816731_143395326909212_3864336806703005696_n.jpg', '0000-00-00 00:00:00'),
(9, 'me', 'photo/68482821_2136591499974880_4538874670513913856_n.jpg', '0000-00-00 00:00:00'),
(10, 'hello world', 'photo/1_QEd2LlpGAkVu26GakLeVIQ.jpeg', '0000-00-00 00:00:00'),
(11, 'tthtth', 'photo/Jomlink technologies.pdf', '0000-00-00 00:00:00'),
(12, 'jk', 'photo/2bef01bf3e8ddc577a0a0d27485feec1.jpg', '0000-00-00 00:00:00'),
(13, 'jdhfhdj', 'photo/6.jpg', '0000-00-00 00:00:00'),
(14, 'me', 'photo/50550c5165f16cd79f3077212a9190ec.jpg', '0000-00-00 00:00:00'),
(15, 'heeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeee', 'photo/147377-Famous+business+quotes+(10).jpg', '0000-00-00 00:00:00'),
(16, 'me', 'photo/53031585_2069772356450030_4860595513717686272_n.jpg', '0000-00-00 00:00:00'),
(17, '12232', 'photo/51856681_2036986423061957_1216297118608654336_n.jpg', '0000-00-00 00:00:00'),
(18, 't', 'photo/3ae7f51903a273547e92cb04c4b38251.jpg', '0000-00-00 00:00:00'),
(19, 'jgcgcgcgcgcgcgcgcgcgcjgcgcgcgcgcgcgcgcgcgcjgcgcgcgcgcgcgcgcgcgcjjom', '', '0000-00-00 00:00:00'),
(20, 'poopo', 'photo/20606-Nikola-Tesla-Quote-If-your-hate-could-be-turned-into-electricity.jpg', '0000-00-00 00:00:00'),
(21, 'kllklk', 'photo/[AnimePaper]wallpapers_Princess-Mononoke_supermonchi_39518.jpg', '0000-00-00 00:00:00'),
(22, 'me', 'photo/077811-picsay (2)-Recovered.jpg', '0000-00-00 00:00:00'),
(23, 'am a programmer i have no life', 'photo/600px-Codinglogo.jpg', '0000-00-00 00:00:00'),
(24, 'hkjkjk', 'photo/66818132_893004941076672_5751060624952000512_o.jpg', '0000-00-00 00:00:00'),
(25, 'me', 'files/53031585_2069772356450030_4860595513717686272_n.jpg', '0000-00-00 00:00:00'),
(26, 'me', 'files/66818132_893004941076672_5751060624952000512_o.jpg', '0000-00-00 00:00:00'),
(27, 'hello world', '', '0000-00-00 00:00:00'),
(28, 'hello world', '', '0000-00-00 00:00:00'),
(29, 'hello world', '', '0000-00-00 00:00:00'),
(30, 'hello world', '', '0000-00-00 00:00:00'),
(31, 'hello world', '', '0000-00-00 00:00:00'),
(32, 'ijoijio', '', '0000-00-00 00:00:00'),
(33, 'hellp', '', '0000-00-00 00:00:00'),
(34, 'hellp', '', '0000-00-00 00:00:00'),
(35, 'hello faith', '', '0000-00-00 00:00:00'),
(36, 'jom link', '', '0000-00-00 00:00:00'),
(37, 'jomlink teck', '', '0000-00-00 00:00:00'),
(38, 'gibibibibi', '', '0000-00-00 00:00:00'),
(39, 'hello world', '', '0000-00-00 00:00:00'),
(40, 'heeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeee', 'files/107664831_1664793147002792_5750985067824684936_n.jpg', '0000-00-00 00:00:00'),
(41, 'iooio', 'files/51856681_2036986423061957_1216297118608654336_n.jpg', '0000-00-00 00:00:00'),
(42, 'COMPUTER ENGINEERING DEPARTMENT\r\n\r\nDESCRIPTION\r\nThe programmes currently being offered by the Computer Science Department are mainly software-oriented with a few hardware courses. Computer Science is a dynamic field and growing at a phenomenal rate. In order to keep up with the latest developments in this field and contribute favourably to national development, the Department proposes to introduce an additional undergraduate programme; the Bachelor of Computer Engineering.\r\n\r\nThis programme will place particular emphasis on computer hardware. There is a fundamental relationship between computer hardware and many aspects of programming and software components in computer systems. In order to write good software, it is important to understand the computer system as a whole. In addition, this programme will provide knowledge and skills to develop embedded systems with real-time response. Examples of such systems are vehicle control systems, games consoles, mobile devices such as mobile phones, to mention but a few. In order to facilitate the development of such systems, the programme will cover areas such as electronics, software engineering and computer architecture among others.', '', '0000-00-00 00:00:00'),
(43, 'hello world', 'files/68482821_2136591499974880_4538874670513913856_n.jpg', '0000-00-00 00:00:00'),
(44, 'me', 'files/117548423_10158395490875390_8887060356182035940_o.jpg', '2021-10-05 14:25:18'),
(45, 'hello', '', '0000-00-00 00:00:00'),
(46, 'hello', '', '2021-10-05 14:26:27'),
(47, 'jhjhjhjhjhhjh', '', '2021-10-05 14:26:34'),
(48, 'hvgg', '', '2021-10-05 14:31:04'),
(49, 'ereer', 'files/600px-Codinglogo.jpg', '2021-10-05 14:32:47');

-- --------------------------------------------------------

--
-- Table structure for table `stafflogin`
--

CREATE TABLE `stafflogin` (
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `StaffID` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stafflogin`
--

INSERT INTO `stafflogin` (`username`, `password`, `StaffID`) VALUES
('admin', '*4ACFE3202A5FF5CF467898FC58AAB1D615029441', 'ADMIN001');

-- --------------------------------------------------------

--
-- Table structure for table `testblob`
--

CREATE TABLE `testblob` (
  `image_id` tinyint(3) NOT NULL,
  `image_type` varchar(25) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `image` longblob NOT NULL,
  `dateofadd` date DEFAULT NULL,
  `personupdate` varchar(255) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL,
  `image_thumb` mediumblob NOT NULL,
  `personid` varchar(255) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL,
  `comments` varchar(255) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL,
  `image_name` varchar(50) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `yearid` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `textarea_table`
--

CREATE TABLE `textarea_table` (
  `textId` int(10) NOT NULL,
  `textarea` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`text`);

--
-- Indexes for table `notifications_table`
--
ALTER TABLE `notifications_table`
  ADD PRIMARY KEY (`Id`),
  ADD UNIQUE KEY `Id` (`Id`);

--
-- Indexes for table `stafflogin`
--
ALTER TABLE `stafflogin`
  ADD UNIQUE KEY `username` (`username`,`password`);

--
-- Indexes for table `testblob`
--
ALTER TABLE `testblob`
  ADD PRIMARY KEY (`image_id`);

--
-- Indexes for table `textarea_table`
--
ALTER TABLE `textarea_table`
  ADD PRIMARY KEY (`textId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `notifications`
--
ALTER TABLE `notifications`
  MODIFY `text` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `notifications_table`
--
ALTER TABLE `notifications_table`
  MODIFY `Id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `testblob`
--
ALTER TABLE `testblob`
  MODIFY `image_id` tinyint(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `textarea_table`
--
ALTER TABLE `textarea_table`
  MODIFY `textId` int(10) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
