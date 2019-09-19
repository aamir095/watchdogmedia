-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 19, 2019 at 09:26 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.1.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `watchdogmedia`
--

-- --------------------------------------------------------

--
-- Table structure for table `mmt_achievement`
--

CREATE TABLE `mmt_achievement` (
  `id` tinyint(4) NOT NULL,
  `title` varchar(255) NOT NULL,
  `achievement_description` tinytext,
  `start_year` varchar(20) NOT NULL,
  `start_month` enum('Jan','Feb','March','April','May','June','July','Aug','Sept','Oct','Nov','Dec') NOT NULL,
  `end_year` varchar(20) DEFAULT NULL,
  `end_month` enum('Jan','Feb','March','April','May','June','July','Aug','Sept','Oct','Nov','Dec') DEFAULT NULL,
  `client` varchar(50) NOT NULL,
  `work_1` varchar(100) DEFAULT NULL,
  `work_2` varchar(100) DEFAULT NULL,
  `work_3` varchar(100) DEFAULT NULL,
  `work_4` varchar(100) DEFAULT NULL,
  `work_5` varchar(100) DEFAULT NULL,
  `status` enum('ongoing','completed') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mmt_achievement`
--

INSERT INTO `mmt_achievement` (`id`, `title`, `achievement_description`, `start_year`, `start_month`, `end_year`, `end_month`, `client`, `work_1`, `work_2`, `work_3`, `work_4`, `work_5`, `status`) VALUES
(4, '1', '<p>2</p>\r\n', '2013', 'Feb', '2016', 'Dec', 'Nepal', '1', '2', '2', '', '', 'completed'),
(5, 'ew', '<p>mlkweflkwefk wefkwhefjw efhwjef wefhuwef wfweuifhwe&nbsp;&nbsp; fwefwef&nbsp; fwuefwge gfwegfwjhegf</p>\r\n', '2013', 'Feb', '2014', 'Feb', 'Goverment', '1', '2', '1', '', '', 'ongoing'),
(6, 'hello its me amir', '<p>asdjhjkfs hello its me amir hello its me amir hello its me amir hello its me amir hello its me amir hello its me amir hello its me amir hello its me amir vhello its me amir</p>\r\n', '2014', 'March', '2031', 'Oct', 'Goverment', 'jhis sdjf ', 'nskdjfsnd', '', '', '', 'completed'),
(7, 'Sbc', '<p>wfewf</p>\r\n', '2016', 'Jan', '2018', 'March', 'Goverment', '4', '1', '4', '', '', 'ongoing'),
(8, 'latest Achievement', '<p>This is the lastest achievement</p>\r\n', '2017', 'Jan', '2013', 'Feb', 'gov', '1', '1', '1', '1', '', 'ongoing');

-- --------------------------------------------------------

--
-- Table structure for table `mmt_admin`
--

CREATE TABLE `mmt_admin` (
  `id` int(100) NOT NULL,
  `f_name` varchar(20) NOT NULL,
  `l_name` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `address` varchar(50) NOT NULL,
  `contact` varchar(60) NOT NULL,
  `role` enum('superadmin','admin') NOT NULL,
  `status` enum('active','in_active') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mmt_admin`
--

INSERT INTO `mmt_admin` (`id`, `f_name`, `l_name`, `email`, `password`, `address`, `contact`, `role`, `status`) VALUES
(1, 'Amir', 'Paudel', 'amir@admin.com', '21232f297a57a5a743894a0e4a801fc3', 'Nawalparasi', '9851248338', 'superadmin', 'active'),
(2, 'ashish', 'sapkota', 'ashish@admin.com', '21232f297a57a5a743894a0e4a801fc3', 'ktmfdghdhsh', '985555555555', 'superadmin', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `mmt_imageslider`
--

CREATE TABLE `mmt_imageslider` (
  `id` int(11) NOT NULL,
  `image_title` varchar(255) NOT NULL,
  `image_path` varchar(255) NOT NULL,
  `position` enum('1','2','3','4','5','6','7','8','9','10','11','12','13','14','15','16','17','18','19','20') NOT NULL,
  `status` enum('active','in_active') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mmt_imageslider`
--

INSERT INTO `mmt_imageslider` (`id`, `image_title`, `image_path`, `position`, `status`) VALUES
(12, 'hello its me amirhello its me amirhello its me amirhello its me amirhello its me amirhello its me amirhello its me amir', '3444bbd4416993f333f6d47ea8e58bfb.png', '1', 'active'),
(13, 'Image is the best thing in which', '9a459f3c5571740bc48cfeebb154a35f.png', '2', 'active'),
(14, 'here is 3rd image slider image', '365f1b1f96434de0012b743034e551b3.png', '3', 'active'),
(15, 'here is the 4th image in slider', 'c7f7925fd6af3e3b4029e24327322d9a.png', '4', 'active'),
(16, 'what is necxt is what is froward?? Here is what i got', '88b6ca21ecdc6c872327c1ef0eb461dd.png', '1', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `mmt_message`
--

CREATE TABLE `mmt_message` (
  `id` tinyint(4) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `telephone` varchar(15) NOT NULL,
  `message` text NOT NULL,
  `view` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mmt_message`
--

INSERT INTO `mmt_message` (`id`, `name`, `email`, `telephone`, `message`, `view`) VALUES
(18, 'amir', 'amir@admin.com', '9851248338', 'here i am working for u', 0),
(19, 'amir', 'amirpaudel@machineertech.com', '9851248338', 'Hello its me amir', 0),
(20, 'Amir', 'amir@admin.com', '9851248338', 'Its me amir', 0),
(21, 'sefskld', 'sdnf@gmail.com', '1445555', 'slfenwhenf', 0),
(22, 'amir', 'amirpaudel@machineertech.com', '985', 'dsdfwsds', 0);

-- --------------------------------------------------------

--
-- Table structure for table `mmt_partner`
--

CREATE TABLE `mmt_partner` (
  `id` int(11) NOT NULL,
  `partner_name` varchar(100) NOT NULL,
  `website` varchar(255) NOT NULL,
  `status` enum('active','in_active') NOT NULL,
  `image_path` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mmt_partner`
--

INSERT INTO `mmt_partner` (`id`, `partner_name`, `website`, `status`, `image_path`) VALUES
(3, 'Nepal Television', 'http://ntv.org.np/', 'active', 'e457be77093b2764e8d2928fff7838a7.png'),
(4, 'Sagarmatha Television', 'https://sagarmatha.tv/', 'active', '8de914fc60d80635a76478d08a75b95c.png');

-- --------------------------------------------------------

--
-- Table structure for table `mmt_program`
--

CREATE TABLE `mmt_program` (
  `id` tinyint(4) NOT NULL,
  `tv_title` tinytext NOT NULL,
  `tv_description` longtext NOT NULL,
  `status` enum('active','in_active') NOT NULL,
  `image_path` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mmt_program`
--

INSERT INTO `mmt_program` (`id`, `tv_title`, `tv_description`, `status`, `image_path`) VALUES
(4, 'Sankalpa-Sushanko Lagifdgsdf', '<p>The second (current) series Sankalpa-Sushanko Lagi has been produced and disseminated since August 2016 by Development Communication Society Nepal (SODEC Nepal). The program focuses on promoting governance in Nepali communities. It is financially supported by Governance Facility (GF). Watchdog Media Services (WMS) has been providing technical support of the program. It incorporates various governance issues and creates awareness among general public. The program has been receiving good response from the audiences through emails and phone calls. The program aired via Nepal Television every Thursday at 07:25 PM and rebroadcast on Friday, 11:30 am.</p>\r\n', 'active', '183db798c97dbe98906f73448db1afc3.jpg'),
(6, '1Sankalpa-Sushanko Lagifdgsdf', '<p>The second (current) series Sankalpa-Sushanko Lagi has been produced and disseminated since August 2016 by Development Communication Society Nepal (SODEC Nepal). The program focuses on promoting governance in Nepali communities. It is financially supported by Governance Facility (GF). Watchdog Media Services (WMS) has been providing technical support of the program. It incorporates various governance issues and creates awareness among general public. The program has been receiving good response from the audiences through emails and phone calls. The program aired via Nepal Television every Thursday at 07:25 PM and rebroadcast on Friday, 11:30 am.</p>\r\n', 'active', '310ac5b8d190906e9a90b6ef39b4345a.jpg'),
(7, 'ererhkhkj kndfkjjkh', '<p>eknekjrhgkjerh hejrghkjwehrgj wehr heugherkjghekrj hekjgherjhg herhg erhgjerhg herhgkerjhgjkwre hkhekgherkjgher hehrgkjehrgjh hekjrhgjkrhgkj erkjgherjhhgehrgk hgerjkgjrehg jd vdrhgejrhgjeh herjfjdbg erhjhrejrkewbr&nbsp; ekjjrhkjehjrth gherjbkjreh rehjkhrgkgjh eejhgrmb erf hjrehjbgjrew ebjhbgejhrgj gerhjgbejrgjbjgebu&nbsp; ferg</p>\r\n', 'active', '8d22dac6215f3bf80777ecef81a92ee6.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mmt_achievement`
--
ALTER TABLE `mmt_achievement`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mmt_admin`
--
ALTER TABLE `mmt_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mmt_imageslider`
--
ALTER TABLE `mmt_imageslider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mmt_message`
--
ALTER TABLE `mmt_message`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mmt_partner`
--
ALTER TABLE `mmt_partner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mmt_program`
--
ALTER TABLE `mmt_program`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mmt_achievement`
--
ALTER TABLE `mmt_achievement`
  MODIFY `id` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `mmt_admin`
--
ALTER TABLE `mmt_admin`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `mmt_imageslider`
--
ALTER TABLE `mmt_imageslider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `mmt_message`
--
ALTER TABLE `mmt_message`
  MODIFY `id` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `mmt_partner`
--
ALTER TABLE `mmt_partner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `mmt_program`
--
ALTER TABLE `mmt_program`
  MODIFY `id` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
