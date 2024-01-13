-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 20, 2023 at 08:36 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `adminId` int(11) NOT NULL,
  `adminEmail` varchar(200) NOT NULL,
  `adminUid` varchar(200) NOT NULL,
  `adminPwd` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`adminId`, `adminEmail`, `adminUid`, `adminPwd`) VALUES
(1, 'admin123@gmail.com', 'bloodadmin', '$2y$10$5UoXznmqla1vc34CvE.UPe8IyYzQSzGsHx2WRTmXac8nvMRoth7da');

-- --------------------------------------------------------

--
-- Table structure for table `blood_donors`
--

CREATE TABLE `blood_donors` (
  `id` int(11) NOT NULL,
  `usersFK` int(11) NOT NULL,
  `id_bdFK` int(11) DEFAULT NULL,
  `Blood` varchar(20) NOT NULL,
  `Event_Date` date NOT NULL,
  `Venue` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `blood_event`
--

CREATE TABLE `blood_event` (
  `event_id` int(11) NOT NULL,
  `Event_Date` date NOT NULL,
  `Time_Start` time NOT NULL,
  `Time_End` time NOT NULL,
  `Venue` varchar(200) NOT NULL,
  `Add_Note` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `blood_recipient`
--

CREATE TABLE `blood_recipient` (
  `br_id` int(11) NOT NULL,
  `br_bloodtype` varchar(20) NOT NULL,
  `br_eventdate` date NOT NULL,
  `br_venue` varchar(255) NOT NULL,
  `br_medicalhistory` varchar(255) NOT NULL,
  `usersId` int(11) NOT NULL,
  `adminId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `certificate`
--

CREATE TABLE `certificate` (
  `id` int(11) NOT NULL,
  `Organizer` varchar(200) NOT NULL,
  `Password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `confirm_attend`
--

CREATE TABLE `confirm_attend` (
  `id_bd` int(11) NOT NULL,
  `usersFK` int(11) NOT NULL,
  `eventFK` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `matric_id` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `username`, `email`, `matric_id`, `password`) VALUES
(100, 'Syafiqah Binti Razuan', '', '', '37794fe8fcda12b3b20f29820f470d20'),
(101, 'Khairul Anuar', '', '', 'cae7f25492498188666889a9c2b93d9c'),
(102, 'Abu Bakar', '', '', '04246bfbb10b51a2471302bebc2f0c6a'),
(103, 'Mughan A/L Kamasali', '', '', '2ab4350bf4da507bc80b0b21baeb9da8'),
(104, 'Fatimah Salih', '', '', '54173c5e0f91dd70f791c9a1a4ba3839'),
(105, 'Badrul Amin', '', '', '25d55ad283aa400af464c76d713c07ad'),
(107, 'aisya', '', '', '25d55ad283aa400af464c76d713c07ad'),
(108, 'aida', 'aida@gmail.com', '', '25d55ad283aa400af464c76d713c07ad'),
(109, 'jaja', 'jaja@gmail.com', '0152', '25d55ad283aa400af464c76d713c07ad'),
(113, 'h', 'w', '111', '25d55ad283aa400af464c76d713c07ad');

-- --------------------------------------------------------

--
-- Table structure for table `user_details`
--

CREATE TABLE `user_details` (
  `id` int(11) NOT NULL,
  `Full_Name` varchar(200) NOT NULL,
  `Ic` varchar(100) NOT NULL,
  `Matric` varchar(100) NOT NULL,
  `Faculty` varchar(50) NOT NULL,
  `Course` varchar(200) NOT NULL,
  `Address` varchar(250) NOT NULL,
  `Telephone` varchar(20) NOT NULL,
  `Gender` varchar(20) NOT NULL,
  `Birthday` date NOT NULL,
  `Age` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_details`
--

INSERT INTO `user_details` (`id`, `Full_Name`, `Ic`, `Matric`, `Faculty`, `Course`, `Address`, `Telephone`, `Gender`, `Birthday`, `Age`) VALUES
(0, 'dsdsd', '55', '55', 'ftmk', '5', 'jkjkj', '55', 'male', '2023-11-26', 55);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`adminId`);

--
-- Indexes for table `blood_donors`
--
ALTER TABLE `blood_donors`
  ADD PRIMARY KEY (`id`),
  ADD KEY `usersFK` (`usersFK`),
  ADD KEY `id_bdFK` (`id_bdFK`);

--
-- Indexes for table `blood_event`
--
ALTER TABLE `blood_event`
  ADD PRIMARY KEY (`event_id`);

--
-- Indexes for table `blood_recipient`
--
ALTER TABLE `blood_recipient`
  ADD PRIMARY KEY (`br_id`);

--
-- Indexes for table `certificate`
--
ALTER TABLE `certificate`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `confirm_attend`
--
ALTER TABLE `confirm_attend`
  ADD PRIMARY KEY (`id_bd`),
  ADD KEY `usersFK` (`usersFK`),
  ADD KEY `eventFK` (`eventFK`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `user_details`
--
ALTER TABLE `user_details`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `adminId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `blood_donors`
--
ALTER TABLE `blood_donors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `blood_event`
--
ALTER TABLE `blood_event`
  MODIFY `event_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `blood_recipient`
--
ALTER TABLE `blood_recipient`
  MODIFY `br_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `certificate`
--
ALTER TABLE `certificate`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `confirm_attend`
--
ALTER TABLE `confirm_attend`
  MODIFY `id_bd` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=114;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `blood_donors`
--
ALTER TABLE `blood_donors`
  ADD CONSTRAINT `blood_donors_ibfk_2` FOREIGN KEY (`id_bdFK`) REFERENCES `confirm_attend` (`id_bd`) ON DELETE SET NULL ON UPDATE SET NULL;

--
-- Constraints for table `confirm_attend`
--
ALTER TABLE `confirm_attend`
  ADD CONSTRAINT `confirm_attend_ibfk_1` FOREIGN KEY (`usersFK`) REFERENCES `user_details` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `confirm_attend_ibfk_2` FOREIGN KEY (`eventFK`) REFERENCES `blood_event` (`event_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
