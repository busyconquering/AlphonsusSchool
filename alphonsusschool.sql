-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 15, 2023 at 05:45 PM
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
-- Database: `alphonsusschool`
--

-- --------------------------------------------------------

--
-- Table structure for table `Class`
--

CREATE TABLE `Class` (
  `ClassID` int(11) NOT NULL,
  `ClassName` varchar(50) DEFAULT NULL,
  `ClassCapacity` int(11) DEFAULT NULL,
  `TeacherID` int(11) NOT NULL,
  `StudentID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `Class`
--

INSERT INTO `Class` (`ClassID`, `ClassName`, `ClassCapacity`, `TeacherID`, `StudentID`) VALUES
(111, 'ReceptionYear', 20, 76, 21231),
(113, 'YearOne', 12, 12, 98340),
(122, 'YearTwo', 20, 46, 38491),
(143, 'YearThree', 14, 43, 12341),
(154, 'YearFour', 5, 11, 87341),
(162, 'YearFive', 19, 43, 88374),
(166, 'YearSix', 16, 42, 99384),
(176, 'Keyboard', 19, 23, 99120),
(334455, 'Maths', 15, 992133, 19292);

-- --------------------------------------------------------

--
-- Table structure for table `ParentGuardian`
--

CREATE TABLE `ParentGuardian` (
  `ParentGuardianID` int(11) NOT NULL,
  `ParentGuardianFullname` varchar(100) DEFAULT NULL,
  `ParentGuardianPhoneNumber` varchar(20) DEFAULT NULL,
  `ParentGuardianEmailAddress` varchar(100) DEFAULT NULL,
  `ParentGuardianHomeAddress` varchar(255) DEFAULT NULL,
  `StudentID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ParentGuardian`
--

INSERT INTO `ParentGuardian` (`ParentGuardianID`, `ParentGuardianFullname`, `ParentGuardianPhoneNumber`, `ParentGuardianEmailAddress`, `ParentGuardianHomeAddress`, `StudentID`) VALUES
(24323, 'MikeJack', '07764123454', 'mikejassjs@gmail.com', 'Liverpool United Kingdom Black Road', 21231),
(33332, 'JackPeters', '07763592783', 'jackpeterssss@gmail.com', 'Manchester United Kingdom five road', 98340),
(92834, 'HelenPike', '07645119283', 'helenhelen@gmail.com', 'London United Kingdom Scales Road', 12341);

-- --------------------------------------------------------

--
-- Table structure for table `Student`
--

CREATE TABLE `Student` (
  `StudentID` int(11) NOT NULL,
  `StudentFullname` varchar(80) DEFAULT NULL,
  `StudentPhoneNumber` varchar(25) DEFAULT NULL,
  `StudentEmailAddress` varchar(120) DEFAULT NULL,
  `StudentHomeAddress` varchar(300) DEFAULT NULL,
  `StudentMedicalRecords` text DEFAULT NULL,
  `StudentDateOfBirth` date DEFAULT NULL,
  `ParentGuardianID` int(11) NOT NULL,
  `ClassID` int(11) NOT NULL,
  `StudentFinancialsID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `Student`
--

INSERT INTO `Student` (`StudentID`, `StudentFullname`, `StudentPhoneNumber`, `StudentEmailAddress`, `StudentHomeAddress`, `StudentMedicalRecords`, `StudentDateOfBirth`, `ParentGuardianID`, `ClassID`, `StudentFinancialsID`) VALUES
(11231, 'Living Human', '07763410922', 'human@outlook.com', 'Manchester UK Old Trafford', 'Vegan Only', '2004-12-02', 12323, 143, 661122),
(12341, 'Mike Jacksee', '07763412342', 'Mikekeee@gmail.com', 'London UK 15 Scales Road', 'Very Healthy Bood Type A', '2001-02-02', 65453, 156, 667744),
(12884, 'Jeren Myradov', '07763451122', 'Myradov@goodmail.com', 'London UK Canary Wharf', 'Nut Allergy', '2001-02-02', 76564, 111, 888877),
(21231, 'Jeren Geldiyeva', '07763412343', 'Jeren@coldmail.com', 'London UK Dibsbury', 'Fantastic', '2003-09-09', 56434, 131, 887766),
(38491, 'Jack Green', '07523165412', 'Jack@hotmail.com', 'London UK Hackney', 'Very Healthy Bood Type  C', '2006-06-06', 56756, 132, 334466),
(87341, 'SalyhCharyyarov', '07567671125', 'Salyh@gmail.com', 'Manchester UK Wilmslow Road', 'Strong ', '2002-02-02', 76567, 125, 778866),
(88374, 'Hasan Hasan', '07787998719', 'Hasan@like.com', 'Manchester UK Wilslow Road', 'Very Healthy Bood Type K', '2002-05-06', 88767, 123, 112233),
(98340, 'Muhammad Purple', '07761237267', 'Muhammad112@gmail.com', 'Manchester UK Wilslow Road', 'Vegan Only', '2002-04-02', 87676, 115, 88888),
(99120, 'Salyh Charyyarov', '07763211187', 'Charyyarov@gmail.com', 'Manchester UK Old Trafford', 'Strong and Healthy', '2002-04-02', 87675, 115, 443344),
(99238, 'Good Human', '07763212299', 'Good@yaahooo.com', 'Manchester UK Old Trafford', 'Very Healthy Bood Type 3X', '2023-12-07', 76765, 117, 556677),
(99384, 'Nice Human', '07763128834', 'Nice@icloud.com', 'Manchester UK Old Trafford', 'Nut Allergy Allergy', '2003-11-03', 76556, 156, 778866);

-- --------------------------------------------------------

--
-- Table structure for table `StudentFinancials`
--

CREATE TABLE `StudentFinancials` (
  `StudentFinancialsID` int(11) NOT NULL,
  `StudentFinancialsFoodCosts` decimal(10,2) DEFAULT NULL,
  `StudentFinancialsTransportCosts` decimal(10,2) DEFAULT NULL,
  `StudentFinancialsOtherCosts` decimal(10,2) DEFAULT NULL,
  `StudentID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `StudentFinancials`
--

INSERT INTO `StudentFinancials` (`StudentFinancialsID`, `StudentFinancialsFoodCosts`, `StudentFinancialsTransportCosts`, `StudentFinancialsOtherCosts`, `StudentID`) VALUES
(112266, 12.00, 3.50, 21.00, 11254),
(228834, 5.12, 4.50, 123.13, 11285),
(884455, 4.33, 4.56, 434.00, 16543),
(994455, 12.43, 1.23, 23.00, 14643);

-- --------------------------------------------------------

--
-- Table structure for table `Teacher`
--

CREATE TABLE `Teacher` (
  `TeacherID` int(11) NOT NULL,
  `TeacherFullname` varchar(100) DEFAULT NULL,
  `TeacherPhoneNumber` varchar(20) DEFAULT NULL,
  `TeacherEmailAddress` varchar(120) DEFAULT NULL,
  `TeacherHomeAddress` varchar(300) DEFAULT NULL,
  `TeacherSalary` decimal(10,2) DEFAULT NULL,
  `ClassID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `Teacher`
--

INSERT INTO `Teacher` (`TeacherID`, `TeacherFullname`, `TeacherPhoneNumber`, `TeacherEmailAddress`, `TeacherHomeAddress`, `TeacherSalary`, `ClassID`) VALUES
(11, 'Mike Abdul', '07763412322', 'mikaabdul@gmail.com', 'Planet earth', 10000.00, 123),
(23, 'Abdul Qodir', '07787321155', 'abdulqodir@gmail.com', 'Somewhere on Earth', 20000.00, 154),
(33, 'Hussain Omar', '07761239909', 'omar@hotmail.com', 'Manchester, Wilslow Road, UK', 400000.00, 113),
(45, 'Mike Jack', '07763459812', 'jackmike@hotmail.com', '17 Scales Road, London, N17 9HB, UK', 39999.00, 165),
(63, 'Peter Muhammad', '07763456611', 'muhammad@icloud.com', 'UK', 500000.00, 134),
(76, 'Ahman Ahmad', '07763441109', 'ahmad@outlook.com', '333 Auburn Road, Manchester, M16 9WS, UK', 10000.00, 155),
(78, 'Good Teacher', '07787889900', 'good@goodmail.com', 'USA', 6002200.00, 189),
(97, 'John Johnnnnnnnn', '07733226791', 'doeee@doe.com', 'DoeRoad 33, D33J14, Doechester, UK', 1000000.00, 111);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Class`
--
ALTER TABLE `Class`
  ADD PRIMARY KEY (`ClassID`),
  ADD KEY `TeacherID` (`TeacherID`),
  ADD KEY `StudentID` (`StudentID`);

--
-- Indexes for table `ParentGuardian`
--
ALTER TABLE `ParentGuardian`
  ADD PRIMARY KEY (`ParentGuardianID`),
  ADD KEY `StudentID` (`StudentID`);

--
-- Indexes for table `Student`
--
ALTER TABLE `Student`
  ADD PRIMARY KEY (`StudentID`),
  ADD KEY `ParentGuardianID` (`ParentGuardianID`),
  ADD KEY `ClassID` (`ClassID`),
  ADD KEY `StudentFinancialsID` (`StudentFinancialsID`);

--
-- Indexes for table `StudentFinancials`
--
ALTER TABLE `StudentFinancials`
  ADD PRIMARY KEY (`StudentFinancialsID`),
  ADD KEY `StudentID` (`StudentID`);

--
-- Indexes for table `Teacher`
--
ALTER TABLE `Teacher`
  ADD PRIMARY KEY (`TeacherID`),
  ADD KEY `ClassID` (`ClassID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Class`
--
ALTER TABLE `Class`
  MODIFY `ClassID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=334456;

--
-- AUTO_INCREMENT for table `ParentGuardian`
--
ALTER TABLE `ParentGuardian`
  MODIFY `ParentGuardianID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11223345;

--
-- AUTO_INCREMENT for table `Student`
--
ALTER TABLE `Student`
  MODIFY `StudentID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=121222;

--
-- AUTO_INCREMENT for table `StudentFinancials`
--
ALTER TABLE `StudentFinancials`
  MODIFY `StudentFinancialsID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1112213;

--
-- AUTO_INCREMENT for table `Teacher`
--
ALTER TABLE `Teacher`
  MODIFY `TeacherID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=129930000;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `Class`
--
ALTER TABLE `Class`
  ADD CONSTRAINT `class_ibfk_1` FOREIGN KEY (`TeacherID`) REFERENCES `Teacher` (`TeacherID`),
  ADD CONSTRAINT `class_ibfk_2` FOREIGN KEY (`StudentID`) REFERENCES `Student` (`StudentID`),
  ADD CONSTRAINT `class_ibfk_3` FOREIGN KEY (`StudentID`) REFERENCES `Student` (`StudentID`);

--
-- Constraints for table `ParentGuardian`
--
ALTER TABLE `ParentGuardian`
  ADD CONSTRAINT `parentguardian_ibfk_1` FOREIGN KEY (`StudentID`) REFERENCES `Student` (`StudentID`),
  ADD CONSTRAINT `parentguardian_ibfk_2` FOREIGN KEY (`StudentID`) REFERENCES `Class` (`StudentID`);

--
-- Constraints for table `Student`
--
ALTER TABLE `Student`
  ADD CONSTRAINT `student_ibfk_1` FOREIGN KEY (`ParentGuardianID`) REFERENCES `ParentGuardian` (`ParentGuardianID`),
  ADD CONSTRAINT `student_ibfk_2` FOREIGN KEY (`ClassID`) REFERENCES `Class` (`ClassID`),
  ADD CONSTRAINT `student_ibfk_3` FOREIGN KEY (`StudentFinancialsID`) REFERENCES `StudentFinancials` (`StudentFinancialsID`);

--
-- Constraints for table `StudentFinancials`
--
ALTER TABLE `StudentFinancials`
  ADD CONSTRAINT `studentfinancials_ibfk_1` FOREIGN KEY (`StudentID`) REFERENCES `Student` (`StudentID`),
  ADD CONSTRAINT `studentfinancials_ibfk_2` FOREIGN KEY (`StudentID`) REFERENCES `Class` (`StudentID`),
  ADD CONSTRAINT `studentfinancials_ibfk_3` FOREIGN KEY (`StudentID`) REFERENCES `ParentGuardian` (`StudentID`);

--
-- Constraints for table `Teacher`
--
ALTER TABLE `Teacher`
  ADD CONSTRAINT `teacher_ibfk_1` FOREIGN KEY (`ClassID`) REFERENCES `Class` (`ClassID`),
  ADD CONSTRAINT `teacher_ibfk_2` FOREIGN KEY (`ClassID`) REFERENCES `Student` (`ClassID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
