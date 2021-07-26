-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 24, 2021 at 05:35 AM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_sinhs`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_about`
--

CREATE TABLE `tbl_about` (
  `id` int(1) NOT NULL,
  `about` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_about`
--

INSERT INTO `tbl_about` (`id`, `about`) VALUES
(1, 'SINHS is a website created for students who want to enroll in the San Isidro National High School. We provide an online reservation so that the students can reserve their slots. Your slot is secured as you apply the reservation form with valid and true information in it.'),
(2, 'We want to give a convenient way of reservation and enrollment. In addition to this, we also want to maximize the use of technology.'),
(3, '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `id` int(5) NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(25) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`id`, `firstname`, `lastname`, `username`, `password`) VALUES
(72719, 'Ryan', 'Aristosa', 'ryan_admin', 'ryan_admin');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_contact`
--

CREATE TABLE `tbl_contact` (
  `id` int(7) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `name` varchar(50) NOT NULL,
  `email` varchar(40) NOT NULL,
  `ct_number` bigint(11) NOT NULL,
  `message` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_home`
--

CREATE TABLE `tbl_home` (
  `id` int(1) NOT NULL,
  `first` varchar(500) NOT NULL,
  `second` varchar(500) NOT NULL,
  `third` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_home`
--

INSERT INTO `tbl_home` (`id`, `first`, `second`, `third`) VALUES
(1, 'SINHS is a website created for students who want to enroll in the San Isidro National High School. We provide an online reservation so that the students can reserve their slots.', 'To see the gallery of the San Isidro National High School, click the gallery button. The pictures that are shown in the gallery page are about the past events of the school.', 'San Isidro National High School is now informing you that we will going to have an online reservation for those who wanted to study here.'),
(2, 'The students may see the gallery, inquire about the school through the contact us, and apply a slot reservation.', '', 'Your slot is secured as you apply the reservation form with valid and true information in it.'),
(3, 'Just answer the reservation form and you can just follow-up your requirements to the school to fully enroll.', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_index`
--

CREATE TABLE `tbl_index` (
  `id` int(1) NOT NULL,
  `first` varchar(500) NOT NULL,
  `second` varchar(500) NOT NULL,
  `third` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_index`
--

INSERT INTO `tbl_index` (`id`, `first`, `second`, `third`) VALUES
(1, 'SINHS is a website created for students who want to enroll in the San Isidro National High School. We provide an online reservation so that the students can reserve their slots.', 'To see the pictures of the gallery, you need to login to a valid account. If you do not have an account yet, please register first.', 'San Isidro National High School is now informing you that we will going to have an online reservation for those who wanted to study here.'),
(2, 'You need to login first before you can access to all of the features of this website, such as the gallery, contact us and reservation. You can register if you do not have an account yet.', '', 'Your slot is secured as you apply the reservation form with valid and true information in it. But, to go to that feature, please login to a valid account. If you do not have an account yet, please register first.');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_login`
--

CREATE TABLE `tbl_login` (
  `id` int(7) NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(25) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_register`
--

CREATE TABLE `tbl_register` (
  `id` int(7) NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(25) NOT NULL,
  `age` int(3) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_register`
--

INSERT INTO `tbl_register` (`id`, `firstname`, `lastname`, `age`, `username`, `password`) VALUES
(9930085, 'Ryan', 'Aristosa', 18, 'ryan', 'aristosa');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_reservation`
--

CREATE TABLE `tbl_reservation` (
  `id` int(7) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `firstname` varchar(30) NOT NULL,
  `middlename` varchar(20) NOT NULL,
  `lastname` varchar(25) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `birthdate` varchar(20) NOT NULL,
  `age` int(3) NOT NULL,
  `address` varchar(60) NOT NULL,
  `ct_number` bigint(11) NOT NULL,
  `facebook` varchar(35) NOT NULL,
  `mother` varchar(40) NOT NULL,
  `father` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_title`
--

CREATE TABLE `tbl_title` (
  `first` varchar(15) NOT NULL,
  `second` varchar(15) NOT NULL,
  `third` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_title`
--

INSERT INTO `tbl_title` (`first`, `second`, `third`) VALUES
('WELCOME', 'GALLERY', 'NEWS');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
