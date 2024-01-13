-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 13, 2024 at 08:38 PM
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
-- Database: `blood`
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

--
-- Dumping data for table `blood_donors`
--

INSERT INTO `blood_donors` (`id`, `usersFK`, `id_bdFK`, `Blood`, `Event_Date`, `Venue`) VALUES
(2, 4, NULL, 'o', '2022-01-22', 'Dewan Canselor'),
(3, 11, NULL, 'b', '2022-01-22', 'Dewan Canselor'),
(4, 12, NULL, 'b', '2022-01-22', 'Dewan Canselor');

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

--
-- Dumping data for table `blood_event`
--

INSERT INTO `blood_event` (`event_id`, `Event_Date`, `Time_Start`, `Time_End`, `Venue`, `Add_Note`) VALUES
(5, '2024-01-15', '07:00:00', '10:00:00', 'FKEKK', 'BUS');

-- --------------------------------------------------------

--
-- Table structure for table `certificate`
--

CREATE TABLE `certificate` (
  `id` int(11) NOT NULL,
  `Organizer` varchar(200) NOT NULL,
  `Password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `certificate`
--

INSERT INTO `certificate` (`id`, `Organizer`, `Password`) VALUES
(1, 'PK UTeM', 'dermadarah2');

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
-- Table structure for table `health_details`
--

CREATE TABLE `health_details` (
  `id` int(11) NOT NULL,
  `Blood` varchar(20) NOT NULL,
  `Weight` float NOT NULL,
  `Chronic_Health` varchar(200) DEFAULT NULL,
  `Citizen` varchar(20) NOT NULL,
  `Others` varchar(20) NOT NULL,
  `usersFK` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `health_details`
--

INSERT INTO `health_details` (`id`, `Blood`, `Weight`, `Chronic_Health`, `Citizen`, `Others`, `usersFK`) VALUES
(4, 'o', 64, '', 'malaysian', 'no', 4),
(5, 'a', 58, '', 'malaysian', 'no', 5),
(6, 'b', 53, '', 'malaysian', 'no', 6),
(7, 'a', 67, '', 'malaysian', 'no', 7),
(8, 'a', 64, '', 'malaysian', 'no', 8),
(9, 'b', 61, '', 'malaysian', 'no', 9),
(10, 'b', 56, '', 'malaysian', 'no', 10),
(11, 'b', 52, '', 'malaysian', 'no', 11),
(12, 'b', 61, '', 'malaysian', 'no', 12);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `usersId` int(11) NOT NULL,
  `usersEmail` varchar(200) NOT NULL,
  `usersUid` varchar(200) NOT NULL,
  `usersPwd` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`usersId`, `usersEmail`, `usersUid`, `usersPwd`) VALUES
(4, 'razak@gmail.com', 'razak', '$2y$10$vjdx0lFewmlla9EbBceW3e1ZZfze894tSeVG0L2.dVGlYkRUK98Oi'),
(5, 'tan@gmail.com', 'Tan20', '$2y$10$jYRpvNNma7FEX8eg1TmyWeysRURz4P960IeRwliHKfSSslhy/J3zG'),
(6, 'siti@gmail.com', 'Siti', '$2y$10$3IwYi4CrVTWBL9kGxPpfu.N3Mt6RiQwb6I0n.urFD8bvTlyGEvHGa'),
(7, 'yus@gmail.com', 'Yusri', '$2y$10$oTdMznj4UhHru9GESL3M.Ont0XMvOIId1y3qaac/SCSqGYWJJHEtO'),
(8, 'kumar@gmail.com', 'Kumar', '$2y$10$6JNYGwCH.ev4NloGsIV77eKCCWOxSjk.3/lczvM/C8yF6EgmB92ya'),
(9, 'amirah@gmail.com', 'Amirah', '$2y$10$QP7fRHcxQ5m4QsB8ZXrg0.THbpeet1ghgvsMHuVYv6nxcTZAOKNeu'),
(10, 'aina@gmail.com', 'Aina', '$2y$10$aMx/Q905plgNODYwOs91V.Eo8yt/z8QEjrzzDb/HXbkQ5b2ggawae'),
(11, 'raihana@gmail.com', 'Raihana', '$2y$10$3lu8bqSaUtg.VKdLy8YM.exInGK8PZrAP6f15y4MDq0NcyNPIi2Im'),
(12, 'raihan@gmail.com', 'Raihan', '$2y$10$dqlmC6fm28yjMIO8ob2Q5O49XliULfzL750ug/upp3ZSY.Ls9wt5e');

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
  `Age` int(20) NOT NULL,
  `usersFK` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_details`
--

INSERT INTO `user_details` (`id`, `Full_Name`, `Ic`, `Matric`, `Faculty`, `Course`, `Address`, `Telephone`, `Gender`, `Birthday`, `Age`, `usersFK`) VALUES
(4, 'Razak Bin Leman', '976554122229', 'B091876766', 'ftmk', 'BEC', 'Kampung Senawang, Kedah', '0187765778', 'Male', '1997-11-02', 25, 4),
(5, 'Tan Yong Fi', '010678109888', 'D061878955', 'fkp', 'DME', 'Taman Sejati Kajang Selangor', '0165555467', 'male', '2001-04-07', 21, 5),
(6, 'Siti Binti Haikal', '010987665431', 'D087652277', 'fke', 'DEE', 'Shah Alam Selangor', '0125554320', 'female', '2001-07-18', 21, 6),
(7, 'Muhd Yusri Bin Abu', '987666109820', 'B081776529', 'ftkee', 'BEETI', 'Kampung Durian Runtuh', '0124310008', 'male', '1998-05-31', 24, 7),
(8, 'Kumar A/L Siyapsiaga', '990876118009', 'B075610907', 'ftkmp', 'BMETR', 'Kampung Parit Satu, Kelantan', '0127778942', 'male', '1999-02-09', 23, 8),
(9, 'Amirah Binti Ali Wahab', '990888736645', 'B019899995', 'fptt', 'BTMTI', 'Kampung Abu Bakr, Pahang', '0156667009', 'female', '1999-12-31', 23, 9),
(10, 'Aina Binti Jamal', '999625100286', 'B018999788', 'fkekk', 'BCE', 'Lot 4046 Batu 7 1/2 Jalan Perdana Selangor', '0134787775', 'female', '1999-03-03', 23, 10),
(11, 'Siti Raihana Binti Ali', '010312100354', 'D0319144422', 'fkekk', 'DEE', 'Lorong Sakan, Selangor', '0126756632', 'female', '2001-10-31', 21, 11),
(12, 'Raihan Bin Ali', '010412108876', 'D031918762', 'ftmk', 'DIT', 'Kampung Parit Dua, Kelantan', '0125678873', 'male', '2001-11-11', 21, 12);

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
-- Indexes for table `health_details`
--
ALTER TABLE `health_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `usersFK` (`usersFK`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`usersId`);

--
-- Indexes for table `user_details`
--
ALTER TABLE `user_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `usersFK` (`usersFK`);

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
  MODIFY `event_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

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
-- AUTO_INCREMENT for table `health_details`
--
ALTER TABLE `health_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `usersId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `user_details`
--
ALTER TABLE `user_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `blood_donors`
--
ALTER TABLE `blood_donors`
  ADD CONSTRAINT `blood_donors_ibfk_1` FOREIGN KEY (`usersFK`) REFERENCES `users` (`usersId`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `blood_donors_ibfk_2` FOREIGN KEY (`id_bdFK`) REFERENCES `confirm_attend` (`id_bd`) ON DELETE SET NULL ON UPDATE SET NULL;

--
-- Constraints for table `confirm_attend`
--
ALTER TABLE `confirm_attend`
  ADD CONSTRAINT `confirm_attend_ibfk_1` FOREIGN KEY (`usersFK`) REFERENCES `user_details` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `confirm_attend_ibfk_2` FOREIGN KEY (`eventFK`) REFERENCES `blood_event` (`event_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `health_details`
--
ALTER TABLE `health_details`
  ADD CONSTRAINT `health_details_ibfk_1` FOREIGN KEY (`usersFK`) REFERENCES `users` (`usersId`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `user_details`
--
ALTER TABLE `user_details`
  ADD CONSTRAINT `user_details_ibfk_1` FOREIGN KEY (`usersFK`) REFERENCES `users` (`usersId`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
