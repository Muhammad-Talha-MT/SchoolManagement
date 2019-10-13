-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 13, 2019 at 10:49 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `school_mangement`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbattendance`
--

CREATE TABLE `tbattendance` (
  `id` int(11) NOT NULL,
  `studentId` int(11) NOT NULL,
  `attendanceDate` date NOT NULL,
  `attendanded` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbclass`
--

CREATE TABLE `tbclass` (
  `id` int(110) NOT NULL,
  `className` varchar(255) NOT NULL,
  `fee` int(110) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbfee`
--

CREATE TABLE `tbfee` (
  `id` int(11) NOT NULL,
  `classId` int(11) NOT NULL,
  `studentId` int(11) NOT NULL,
  `month` int(11) NOT NULL,
  `recievedDate` date NOT NULL,
  `recievedBy` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbstudent`
--

CREATE TABLE `tbstudent` (
  `id` int(110) NOT NULL,
  `regNumber` varchar(255) NOT NULL,
  `picture` longtext NOT NULL,
  `studentName` varchar(255) NOT NULL,
  `fatherName` varchar(255) NOT NULL,
  `studentCnic` varchar(255) NOT NULL,
  `fatherCnic` varchar(255) NOT NULL,
  `dob` date NOT NULL,
  `class` int(110) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `cellNumber` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `admissionBy` int(110) NOT NULL,
  `admissionDate` date NOT NULL,
  `yearOfAdmission` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbstudent`
--

INSERT INTO `tbstudent` (`id`, `regNumber`, `picture`, `studentName`, `fatherName`, `studentCnic`, `fatherCnic`, `dob`, `class`, `gender`, `cellNumber`, `address`, `admissionBy`, `admissionDate`, `yearOfAdmission`) VALUES
(17, '2019-PG-1', 'banner-012.jpg', 'Talha', 'Ahmad', '1234567890123', '2222', '2019-10-23', 0, 'Male', '12345678909', 'mehar chowk jail road lahore', 1, '2019-10-12', 2019);

-- --------------------------------------------------------

--
-- Table structure for table `tbsubject`
--

CREATE TABLE `tbsubject` (
  `id` int(110) NOT NULL,
  `subjectName` varchar(255) NOT NULL,
  `classId` int(100) NOT NULL,
  `totalMarks` int(100) NOT NULL,
  `teacherId` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbsubject`
--

INSERT INTO `tbsubject` (`id`, `subjectName`, `classId`, `totalMarks`, `teacherId`) VALUES
(3, 'Islamiate', 1, 100, 1),
(4, 'Islamiate', 1, 100, 1),
(5, 'English', 0, 100, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbsubjectresult`
--

CREATE TABLE `tbsubjectresult` (
  `id` int(100) NOT NULL,
  `subjectId` int(100) NOT NULL,
  `studentId` int(100) NOT NULL,
  `obtainedMarks` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbteacher`
--

CREATE TABLE `tbteacher` (
  `id` int(100) NOT NULL,
  `teacherName` varchar(255) NOT NULL,
  `pay` int(100) NOT NULL,
  `specialSubject` varchar(100) NOT NULL,
  `appointedDate` date NOT NULL,
  `checkInTime` time NOT NULL,
  `checkOutTime` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbuser`
--

CREATE TABLE `tbuser` (
  `id` int(11) NOT NULL,
  `userName` varchar(50) NOT NULL,
  `passsword` varchar(50) NOT NULL,
  `createdDate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbattendance`
--
ALTER TABLE `tbattendance`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbclass`
--
ALTER TABLE `tbclass`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbfee`
--
ALTER TABLE `tbfee`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbstudent`
--
ALTER TABLE `tbstudent`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbsubject`
--
ALTER TABLE `tbsubject`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbsubjectresult`
--
ALTER TABLE `tbsubjectresult`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbteacher`
--
ALTER TABLE `tbteacher`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbuser`
--
ALTER TABLE `tbuser`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbattendance`
--
ALTER TABLE `tbattendance`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbclass`
--
ALTER TABLE `tbclass`
  MODIFY `id` int(110) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbfee`
--
ALTER TABLE `tbfee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbstudent`
--
ALTER TABLE `tbstudent`
  MODIFY `id` int(110) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `tbsubject`
--
ALTER TABLE `tbsubject`
  MODIFY `id` int(110) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbsubjectresult`
--
ALTER TABLE `tbsubjectresult`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbteacher`
--
ALTER TABLE `tbteacher`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbuser`
--
ALTER TABLE `tbuser`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
