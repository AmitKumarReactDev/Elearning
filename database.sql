-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 05, 2020 at 09:59 AM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `e_learning_project_new`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `admin_email` varchar(25) NOT NULL,
  `admin_password` varchar(20) NOT NULL,
  `admin_otp` int(5) NOT NULL,
  `admin_status` enum('Active','Deactive') NOT NULL DEFAULT 'Active',
  `admin_entry_time` datetime NOT NULL,
  `admin_update_time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_email`, `admin_password`, `admin_otp`, `admin_status`, `admin_entry_time`, `admin_update_time`) VALUES
(2, 'admin@gmail.com', 'admin', 0, 'Active', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `area`
--

CREATE TABLE `area` (
  `area_id` int(11) NOT NULL,
  `area_name` varchar(25) NOT NULL,
  `city_id` int(11) NOT NULL,
  `area_status` enum('Active','Deactive') NOT NULL,
  `area_entry_time` datetime NOT NULL,
  `area_update_time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `certificate`
--

CREATE TABLE `certificate` (
  `certificate_id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `result_id` int(11) NOT NULL,
  `certificate_name` varchar(50) NOT NULL,
  `certificate_status` enum('Active','Deactive') NOT NULL DEFAULT 'Deactive',
  `certificate_entry_time` datetime NOT NULL,
  `certificate_update_time` datetime NOT NULL,
  `certificate_pdf` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE `city` (
  `city_id` int(11) NOT NULL,
  `city_name` varchar(25) NOT NULL,
  `state_id` int(11) NOT NULL,
  `city_status` enum('Active','Deactive') NOT NULL DEFAULT 'Active',
  `city_entry_time` datetime NOT NULL,
  `city_update_time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `exam_test`
--

CREATE TABLE `exam_test` (
  `exam_id` int(11) NOT NULL,
  `faculty_id` int(11) NOT NULL,
  `subject_id` int(11) NOT NULL,
  `question_mcq1` varchar(50) NOT NULL,
  `question_mcq2` varchar(50) NOT NULL,
  `question_mcq3` varchar(50) NOT NULL,
  `question_mcq4` varchar(50) NOT NULL,
  `question_answer` varchar(50) NOT NULL,
  `question_status` enum('Active','Deactive') NOT NULL DEFAULT 'Deactive',
  `question_entry_time` datetime NOT NULL,
  `question_update_time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE `faculty` (
  `faculty_id` int(11) NOT NULL,
  `faculty_name` varchar(15) NOT NULL,
  `faculty_gender` varchar(11) NOT NULL,
  `faculty_qualification` varchar(30) NOT NULL,
  `faculty_dob` date NOT NULL,
  `faculty_doj` date NOT NULL,
  `faculty_email` varchar(30) NOT NULL,
  `faculty_password` varchar(10) NOT NULL,
  `faculty_entry_time` date NOT NULL,
  `faculty_update_time` date NOT NULL,
  `faculty_status` enum('Active','Deactive') NOT NULL DEFAULT 'Deactive'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`faculty_id`, `faculty_name`, `faculty_gender`, `faculty_qualification`, `faculty_dob`, `faculty_doj`, `faculty_email`, `faculty_password`, `faculty_entry_time`, `faculty_update_time`, `faculty_status`) VALUES
(21, 'madhu', 'Female', 'bba', '2020-02-20', '2020-02-03', 'madhu@gmail.com', '1212', '2020-02-03', '2020-02-03', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `faculty_course`
--

CREATE TABLE `faculty_course` (
  `faculty_cid` int(11) NOT NULL,
  `pcourse_id` int(11) NOT NULL,
  `faculty_id` int(11) NOT NULL,
  `faculty_ctitle` varchar(25) NOT NULL,
  `faculty_cdesc` varchar(100) NOT NULL,
  `faculty_cstatus` enum('Active','Deactive') NOT NULL DEFAULT 'Deactive',
  `faculty_centry_time` datetime NOT NULL,
  `faculty_cupdate_time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `faculty_course`
--

INSERT INTO `faculty_course` (`faculty_cid`, `pcourse_id`, `faculty_id`, `faculty_ctitle`, `faculty_cdesc`, `faculty_cstatus`, `faculty_centry_time`, `faculty_cupdate_time`) VALUES
(15, 2, 21, 'Data type', '2 Chapter', 'Active', '2020-02-03 05:58:04', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `material`
--

CREATE TABLE `material` (
  `material_id` int(11) NOT NULL,
  `stream_id` int(11) NOT NULL,
  `semester_id` int(11) NOT NULL,
  `subject_id` int(11) NOT NULL,
  `faculty_id` int(11) NOT NULL,
  `material_pdf` varchar(30) NOT NULL,
  `material_status` enum('Active','Deactive') NOT NULL DEFAULT 'Deactive',
  `material_entry_time` datetime NOT NULL,
  `material_update_time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `particular_course`
--

CREATE TABLE `particular_course` (
  `pcourse_id` int(11) NOT NULL,
  `pcourse_name` varchar(20) NOT NULL,
  `pcourse_status` enum('Active','Deactive') NOT NULL DEFAULT 'Active',
  `pcourse_entry_time` datetime NOT NULL,
  `pcourse_update_time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `particular_course`
--

INSERT INTO `particular_course` (`pcourse_id`, `pcourse_name`, `pcourse_status`, `pcourse_entry_time`, `pcourse_update_time`) VALUES
(2, 'PHP', 'Deactive', '2019-12-24 07:09:13', '2020-01-19 09:07:37'),
(4, 'bcom', 'Active', '2019-12-25 02:03:49', '0000-00-00 00:00:00'),
(6, 'php', 'Active', '2020-01-19 02:51:19', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `result`
--

CREATE TABLE `result` (
  `result_id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `pcourse_id` int(11) NOT NULL,
  `exam_id` int(11) NOT NULL,
  `subject_id` int(11) NOT NULL,
  `result_status` enum('Active','Deactive') NOT NULL DEFAULT 'Deactive',
  `result_entry_time` datetime NOT NULL,
  `result_update_time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `semester`
--

CREATE TABLE `semester` (
  `semester_id` int(11) NOT NULL,
  `semester_name` varchar(25) NOT NULL,
  `stream_id` int(11) NOT NULL,
  `semester_status` enum('Active','Deactive') NOT NULL DEFAULT 'Active',
  `semester_entry_time` datetime NOT NULL,
  `semester_update_time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `semester`
--

INSERT INTO `semester` (`semester_id`, `semester_name`, `stream_id`, `semester_status`, `semester_entry_time`, `semester_update_time`) VALUES
(14, 'third', 5, 'Active', '2020-01-19 02:53:17', '2020-01-24 03:20:26');

-- --------------------------------------------------------

--
-- Table structure for table `state`
--

CREATE TABLE `state` (
  `state_name` varchar(30) NOT NULL,
  `state_id` int(11) NOT NULL,
  `state_status` enum('Active','Deactive') NOT NULL,
  `state_entry_time` datetime NOT NULL,
  `state_update_time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `state`
--

INSERT INTO `state` (`state_name`, `state_id`, `state_status`, `state_entry_time`, `state_update_time`) VALUES
('Guj', 12, 'Active', '2020-02-05 08:01:14', '0000-00-00 00:00:00'),
('Mh', 13, 'Active', '2020-02-05 08:01:22', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `stream`
--

CREATE TABLE `stream` (
  `stream_id` int(11) NOT NULL,
  `stream_name` varchar(20) NOT NULL,
  `stream_description` varchar(200) NOT NULL,
  `stream_status` enum('Active','Deactive') NOT NULL DEFAULT 'Active',
  `stream_entry_time` datetime NOT NULL,
  `stream_update_time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `stream`
--

INSERT INTO `stream` (`stream_id`, `stream_name`, `stream_description`, `stream_status`, `stream_entry_time`, `stream_update_time`) VALUES
(5, 'bcom', '                     bbb         \r\n                    ', 'Deactive', '0000-00-00 00:00:00', '2020-01-19 02:24:31'),
(6, 'aa', '                  ', 'Active', '2020-01-19 02:45:48', '0000-00-00 00:00:00'),
(8, 'bba', '                  ', 'Active', '2020-01-19 02:50:09', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `student_id` int(11) NOT NULL,
  `student_name` varchar(25) NOT NULL,
  `student_email` varchar(40) NOT NULL,
  `student_password` varchar(10) NOT NULL,
  `student_gender` varchar(8) NOT NULL,
  `student_status` enum('Active','Deactive') NOT NULL DEFAULT 'Active',
  `student_entry_time` datetime NOT NULL,
  `student_update_time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`student_id`, `student_name`, `student_email`, `student_password`, `student_gender`, `student_status`, `student_entry_time`, `student_update_time`) VALUES
(1, 'amit', 'a@gmail.com', '1212', 'male', 'Active', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `student_class`
--

CREATE TABLE `student_class` (
  `student_class_id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `semester_id` int(11) NOT NULL,
  `stream_id` int(11) NOT NULL,
  `student_class_status` enum('Active','Deactive') NOT NULL DEFAULT 'Active',
  `student_class_entry_time` datetime NOT NULL,
  `student_class_update_time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student_class`
--

INSERT INTO `student_class` (`student_class_id`, `student_id`, `semester_id`, `stream_id`, `student_class_status`, `student_class_entry_time`, `student_class_update_time`) VALUES
(5, 1, 14, 8, 'Active', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `subject_id` int(11) NOT NULL,
  `subject_name` varchar(25) NOT NULL,
  `subject_status` enum('Active','Deactive') NOT NULL DEFAULT 'Active',
  `subject_entry_time` datetime NOT NULL,
  `subject_update_time` datetime NOT NULL,
  `stream_id` int(11) NOT NULL,
  `semester_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `topic`
--

CREATE TABLE `topic` (
  `topic_id` int(11) NOT NULL,
  `stream_id` int(11) NOT NULL,
  `semester_id` int(11) NOT NULL,
  `subject_id` int(11) NOT NULL,
  `faculty_id` int(11) NOT NULL,
  `topic_title` varchar(25) NOT NULL,
  `topic_desc` varchar(50) NOT NULL,
  `topic_status` enum('Active','Deactive') NOT NULL,
  `topic_entry_time` datetime NOT NULL,
  `topic_update_time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `area`
--
ALTER TABLE `area`
  ADD PRIMARY KEY (`area_id`),
  ADD KEY `city_id` (`city_id`);

--
-- Indexes for table `certificate`
--
ALTER TABLE `certificate`
  ADD PRIMARY KEY (`certificate_id`),
  ADD KEY `student_id` (`student_id`),
  ADD KEY `result_id` (`result_id`);

--
-- Indexes for table `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`city_id`),
  ADD KEY `state_id` (`state_id`);

--
-- Indexes for table `exam_test`
--
ALTER TABLE `exam_test`
  ADD PRIMARY KEY (`exam_id`),
  ADD KEY `faculty_id` (`faculty_id`),
  ADD KEY `subject_id` (`subject_id`);

--
-- Indexes for table `faculty`
--
ALTER TABLE `faculty`
  ADD PRIMARY KEY (`faculty_id`);

--
-- Indexes for table `faculty_course`
--
ALTER TABLE `faculty_course`
  ADD PRIMARY KEY (`faculty_cid`),
  ADD KEY `pcourse_id` (`pcourse_id`),
  ADD KEY `faculty_id` (`faculty_id`);

--
-- Indexes for table `material`
--
ALTER TABLE `material`
  ADD PRIMARY KEY (`material_id`),
  ADD KEY `stream_id` (`stream_id`),
  ADD KEY `semester_id` (`semester_id`),
  ADD KEY `subject_id` (`subject_id`),
  ADD KEY `faculty_id` (`faculty_id`);

--
-- Indexes for table `particular_course`
--
ALTER TABLE `particular_course`
  ADD PRIMARY KEY (`pcourse_id`);

--
-- Indexes for table `result`
--
ALTER TABLE `result`
  ADD PRIMARY KEY (`result_id`),
  ADD KEY `student_id` (`student_id`),
  ADD KEY `p_courseid` (`pcourse_id`),
  ADD KEY `subject_id` (`subject_id`),
  ADD KEY `exam_id` (`exam_id`);

--
-- Indexes for table `semester`
--
ALTER TABLE `semester`
  ADD PRIMARY KEY (`semester_id`),
  ADD KEY `stream_id` (`stream_id`);

--
-- Indexes for table `state`
--
ALTER TABLE `state`
  ADD PRIMARY KEY (`state_id`);

--
-- Indexes for table `stream`
--
ALTER TABLE `stream`
  ADD PRIMARY KEY (`stream_id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`student_id`);

--
-- Indexes for table `student_class`
--
ALTER TABLE `student_class`
  ADD PRIMARY KEY (`student_class_id`),
  ADD KEY `student_id` (`student_id`),
  ADD KEY `semester_id` (`semester_id`),
  ADD KEY `stream_id` (`stream_id`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`subject_id`),
  ADD KEY `stream_id` (`stream_id`),
  ADD KEY `semester_id` (`semester_id`);

--
-- Indexes for table `topic`
--
ALTER TABLE `topic`
  ADD PRIMARY KEY (`topic_id`),
  ADD KEY `stream_id` (`stream_id`),
  ADD KEY `semester_id` (`semester_id`),
  ADD KEY `subject_id` (`subject_id`),
  ADD KEY `faculty_id` (`faculty_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `area`
--
ALTER TABLE `area`
  MODIFY `area_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `certificate`
--
ALTER TABLE `certificate`
  MODIFY `certificate_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `city`
--
ALTER TABLE `city`
  MODIFY `city_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `exam_test`
--
ALTER TABLE `exam_test`
  MODIFY `exam_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `faculty`
--
ALTER TABLE `faculty`
  MODIFY `faculty_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `faculty_course`
--
ALTER TABLE `faculty_course`
  MODIFY `faculty_cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `material`
--
ALTER TABLE `material`
  MODIFY `material_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `particular_course`
--
ALTER TABLE `particular_course`
  MODIFY `pcourse_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `result`
--
ALTER TABLE `result`
  MODIFY `result_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `semester`
--
ALTER TABLE `semester`
  MODIFY `semester_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `state`
--
ALTER TABLE `state`
  MODIFY `state_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `stream`
--
ALTER TABLE `stream`
  MODIFY `stream_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `student_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `student_class`
--
ALTER TABLE `student_class`
  MODIFY `student_class_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `subject`
--
ALTER TABLE `subject`
  MODIFY `subject_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `topic`
--
ALTER TABLE `topic`
  MODIFY `topic_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `area`
--
ALTER TABLE `area`
  ADD CONSTRAINT `area_ibfk_1` FOREIGN KEY (`city_id`) REFERENCES `city` (`city_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `city`
--
ALTER TABLE `city`
  ADD CONSTRAINT `city_ibfk_1` FOREIGN KEY (`state_id`) REFERENCES `state` (`state_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `exam_test`
--
ALTER TABLE `exam_test`
  ADD CONSTRAINT `exam_test_ibfk_1` FOREIGN KEY (`faculty_id`) REFERENCES `faculty` (`faculty_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `faculty_course`
--
ALTER TABLE `faculty_course`
  ADD CONSTRAINT `faculty_course_ibfk_1` FOREIGN KEY (`pcourse_id`) REFERENCES `particular_course` (`pcourse_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `faculty_course_ibfk_2` FOREIGN KEY (`faculty_id`) REFERENCES `faculty` (`faculty_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `material`
--
ALTER TABLE `material`
  ADD CONSTRAINT `material_ibfk_1` FOREIGN KEY (`stream_id`) REFERENCES `stream` (`stream_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `material_ibfk_2` FOREIGN KEY (`semester_id`) REFERENCES `semester` (`semester_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `material_ibfk_3` FOREIGN KEY (`subject_id`) REFERENCES `subject` (`subject_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `material_ibfk_4` FOREIGN KEY (`faculty_id`) REFERENCES `faculty` (`faculty_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `result`
--
ALTER TABLE `result`
  ADD CONSTRAINT `result_ibfk_1` FOREIGN KEY (`pcourse_id`) REFERENCES `particular_course` (`pcourse_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `result_ibfk_2` FOREIGN KEY (`student_id`) REFERENCES `student` (`student_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `result_ibfk_3` FOREIGN KEY (`subject_id`) REFERENCES `subject` (`subject_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `result_ibfk_4` FOREIGN KEY (`exam_id`) REFERENCES `exam_test` (`exam_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `semester`
--
ALTER TABLE `semester`
  ADD CONSTRAINT `semester_ibfk_1` FOREIGN KEY (`stream_id`) REFERENCES `stream` (`stream_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `student_class`
--
ALTER TABLE `student_class`
  ADD CONSTRAINT `student_class_ibfk_1` FOREIGN KEY (`semester_id`) REFERENCES `semester` (`semester_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `student_class_ibfk_2` FOREIGN KEY (`stream_id`) REFERENCES `stream` (`stream_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `student_class_ibfk_3` FOREIGN KEY (`student_id`) REFERENCES `student` (`student_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `subject`
--
ALTER TABLE `subject`
  ADD CONSTRAINT `subject_ibfk_1` FOREIGN KEY (`stream_id`) REFERENCES `stream` (`stream_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `subject_ibfk_2` FOREIGN KEY (`semester_id`) REFERENCES `semester` (`semester_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
