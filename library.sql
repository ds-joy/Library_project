-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 20, 2019 at 07:08 PM
-- Server version: 10.3.15-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `library`
--

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `book_no` int(10) NOT NULL,
  `book_name` varchar(20) DEFAULT NULL,
  `author` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`book_no`, `book_name`, `author`) VALUES
(1, 'Computer Networks', 'Tanenbum'),
(2, 'Operating System', 'Tanenbum'),
(3, 'To Engineer is Human', 'Henry Petroski'),
(4, 'Structural Risk: 161', 'David Blockly'),
(5, 'Code Complete', 'Steve McConnell'),
(6, 'The Pencil', 'Henry Petroski'),
(7, 'Intro. to Algorithm', 'Cormen'),
(8, 'The Art of Computer ', 'Donald Knuth'),
(9, 'Clean Code', 'Cecil Martin'),
(10, 'Head First Java', 'Bert Bates'),
(11, 'Thinking in Java', 'Bruce Eckel'),
(12, 'Effective STL', 'Scott Meyers'),
(13, 'Think java', 'Allen B. Downey'),
(14, 'Learning Phython', 'Mark Lutz'),
(15, 'Mother', 'Maxim Gorki'),
(16, 'Mother', 'Maxim Gorki');

-- --------------------------------------------------------

--
-- Table structure for table `issu_rec`
--

CREATE TABLE `issu_rec` (
  `iss_no` int(10) NOT NULL,
  `date` timestamp NULL DEFAULT current_timestamp(),
  `mem_no` varchar(20) DEFAULT NULL,
  `book_no` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `issu_rec`
--

INSERT INTO `issu_rec` (`iss_no`, `date`, `mem_no`, `book_no`) VALUES
(1, '2019-08-21 18:00:00', '02', 4),
(2, '2019-09-21 18:00:00', '02', 8),
(3, '2019-08-21 18:00:00', '02', 5),
(4, '2019-08-22 18:00:00', '03', 1),
(5, '2019-08-23 18:00:00', '03', 2),
(7, '2019-08-27 18:00:00', '07', 6),
(8, '2019-09-29 18:00:00', '05', 10),
(10, '2019-09-19 18:00:00', '06', 1),
(6, '2019-09-19 18:00:00', '07', 5),
(9, '2019-09-19 18:00:00', '04', 10),
(11, '2019-09-19 18:00:00', '07', 7),
(12, '2019-09-19 18:00:00', '03', 5),
(13, '2019-09-19 18:00:00', '12', 15),
(14, '2019-09-20 17:03:40', '06', 1),
(15, '2019-09-20 17:03:40', '09', 2);

-- --------------------------------------------------------

--
-- Table structure for table `membership`
--

CREATE TABLE `membership` (
  `mem_no` varchar(20) NOT NULL,
  `stud_no` varchar(20) DEFAULT NULL
) ;

--
-- Dumping data for table `membership`
--

INSERT INTO `membership` (`mem_no`, `stud_no`) VALUES
('01', 'C033001'),
('02', 'C033002'),
('03', 'C033003'),
('04', 'C033004'),
('05', 'C033005'),
('06', 'C033006'),
('07', 'C033007'),
('08', 'C033008'),
('09', 'C033009'),
('10', 'C033010'),
('11', 'C033011'),
('12', 'C033164');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `stud_no` varchar(20) NOT NULL,
  `stud_name` varchar(20) DEFAULT NULL
) ;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`stud_no`, `stud_name`) VALUES
('C033001', 'Oliver'),
('C033002', 'Jack'),
('C033003', 'Noah'),
('C033004', 'Leo'),
('C033005', 'Max'),
('C033006', 'Theo'),
('C033007', 'Adam'),
('C033008', 'Toby'),
('C033009', 'Hugo'),
('C033010', 'Liam'),
('C033011', 'Peter'),
('C033164', 'Seth');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`book_no`);

--
-- Indexes for table `issu_rec`
--
ALTER TABLE `issu_rec`
  ADD KEY `mem_no` (`mem_no`),
  ADD KEY `book_no` (`book_no`);

--
-- Indexes for table `membership`
--
ALTER TABLE `membership`
  ADD PRIMARY KEY (`mem_no`),
  ADD KEY `stud_no` (`stud_no`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`stud_no`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `issu_rec`
--
ALTER TABLE `issu_rec`
  ADD CONSTRAINT `issu_rec_ibfk_1` FOREIGN KEY (`mem_no`) REFERENCES `membership` (`mem_no`),
  ADD CONSTRAINT `issu_rec_ibfk_2` FOREIGN KEY (`book_no`) REFERENCES `book` (`book_no`);

--
-- Constraints for table `membership`
--
ALTER TABLE `membership`
  ADD CONSTRAINT `membership_ibfk_1` FOREIGN KEY (`stud_no`) REFERENCES `student` (`stud_no`),
  ADD CONSTRAINT `membership_ibfk_2` FOREIGN KEY (`stud_no`) REFERENCES `student` (`stud_no`) ON DELETE CASCADE,
  ADD CONSTRAINT `membership_ibfk_3` FOREIGN KEY (`stud_no`) REFERENCES `student` (`stud_no`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
