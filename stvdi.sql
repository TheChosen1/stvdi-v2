-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 17, 2018 at 11:06 AM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `stvdi`
--

-- --------------------------------------------------------

--
-- Table structure for table `education_type`
--

CREATE TABLE `education_type` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `education_type`
--

INSERT INTO `education_type` (`id`, `name`, `description`, `created_at`) VALUES
(1, 'Kindergarten/Primary/Secondary', 'Kindergarten, Primary and Secondary Schools', '2018-09-07 14:05:39'),
(2, 'Tertiary Institutions', 'Universities, Polytechnics, Monotechnics, and Colleges of education ', '2018-09-07 14:05:39');

-- --------------------------------------------------------

--
-- Table structure for table `levels`
--

CREATE TABLE `levels` (
  `id` int(11) NOT NULL,
  `cid` int(11) NOT NULL,
  `level` varchar(60) DEFAULT NULL,
  `is_active` enum('0','1') NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `levels`
--

INSERT INTO `levels` (`id`, `cid`, `level`, `is_active`, `created_at`, `updated_at`) VALUES
(1, 2, '100', '1', '2018-10-09 22:13:43', '0000-00-00 00:00:00'),
(2, 2, '200', '1', '2018-10-09 22:13:47', '0000-00-00 00:00:00'),
(3, 2, '300', '1', '2018-10-09 22:13:51', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id` int(255) NOT NULL,
  `position` varchar(100) NOT NULL,
  `name` varchar(20) NOT NULL,
  `clean_url` varchar(100) NOT NULL,
  `description` tinytext NOT NULL,
  `privileges` varchar(200) NOT NULL,
  `img` varchar(200) NOT NULL,
  `is_active` enum('0','1') NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id`, `position`, `name`, `clean_url`, `description`, `privileges`, `img`, `is_active`) VALUES
(1, 'leftBar', 'Dashboard', '/home', '', ':administrator:sadministrator:principal:cteacher:teacher:boarding:account:store:student', 'fa fa-tachometer-alt', '1'),
(2, 'leftBar', 'Users', '/users', '', ':administrator:sadministrator', 'fas fa-users', '1'),
(3, 'leftBar', 'Class', '/class', '', ':administrator:sadministrator:principal:cteacher:teacher:boarding:account', 'fa fa-chalkboard-teacher', '1'),
(4, 'leftBar', 'Hostel Manager', '/hostel', '', ':administrator:sadministrator:boarding', 'fa fa-h-square', '1'),
(5, 'leftBar', 'Inventory', '/inventory', '', ':account:administrator:sadministrator:store', 'fas fa-folder-open', '1'),
(6, 'leftBar', 'Documents', '/documents', '', ':account:administrator:sadministrator:principal', 'fa fa-file', '0'),
(7, 'leftBar', 'Payments', '/payments', '', 'administrator:account:sadministrator:principal', 'far fa-money-bill-alt', '1'),
(8, 'leftBar', 'Reports', '/reports', '', ':account:administrator:sadministrator:principal', 'fa fa-chart-pie', '1'),
(9, 'leftBar', 'Settings', '/settings', 'The settings shown below help you customize and organize the system.', ':administrator:sadministrator', 'fa fa-cog', '1'),
(10, 'settings', 'School Settings', '/school_settings', '', ':administrator:sadministrator', 'ion ion-android-settings', '1'),
(11, 'settings', 'Change Password', '/change_password', '', ':administrator:sadministrator:principal:cteacher:teacher:boarding:account:store:student', 'ion ion-unlocked', '1'),
(12, 'settings', 'Sessions', '/sessions', '', ':administrator:sadministrator', 'ion ion-calendar', '1'),
(13, 'settings', 'Semesters / Terms', '/semesters_terms', '', ':administrator:sadministrator', 'ion ion-android-notifications', '1');

-- --------------------------------------------------------

--
-- Table structure for table `modules`
--

CREATE TABLE `modules` (
  `id` int(11) NOT NULL,
  `module_group_id` int(11) NOT NULL,
  `name` text NOT NULL,
  `short_code` text NOT NULL,
  `tree_view_list` enum('0','1') NOT NULL DEFAULT '0',
  `can_view` enum('0','1') NOT NULL DEFAULT '1',
  `can_add` enum('0','1') NOT NULL DEFAULT '1',
  `can_edit` enum('0','1') NOT NULL DEFAULT '1',
  `can_delete` enum('0','1') NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `modules`
--

INSERT INTO `modules` (`id`, `module_group_id`, `name`, `short_code`, `tree_view_list`, `can_view`, `can_add`, `can_edit`, `can_delete`, `created_at`) VALUES
(1, 2, 'Student Details', 'students/details', '1', '1', '1', '1', '1', '2018-10-04 07:47:18'),
(2, 3, 'Collect Fees', 'finance/fees', '1', '1', '1', '1', '1', '2018-10-04 07:48:25'),
(3, 3, 'Transactions', 'finance/transaction', '1', '1', '1', '1', '1', '2018-10-15 23:45:20'),
(4, 3, 'Transaction Head', '#', '0', '1', '1', '1', '1', '2018-10-16 09:34:55');

-- --------------------------------------------------------

--
-- Table structure for table `modules_group`
--

CREATE TABLE `modules_group` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `short_code` text,
  `img` text NOT NULL,
  `disabled_cid_array` longtext NOT NULL,
  `tree_view` enum('0','1') NOT NULL DEFAULT '0',
  `is_admin` enum('0','1','NIL') NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `modules_group`
--

INSERT INTO `modules_group` (`id`, `name`, `short_code`, `img`, `disabled_cid_array`, `tree_view`, `is_admin`, `created_at`) VALUES
(1, 'Dashboard', 'dashboard/index', 'fa fa-tachometer-alt', '', '0', 'NIL', '2018-09-28 14:49:37'),
(2, 'Students', '#', 'fas fa-users', '', '1', '1', '2018-09-27 17:57:10'),
(3, 'Finance', '#', 'far fa-money-bill-alt', '', '1', '1', '2018-10-04 06:56:26'),
(4, 'Human Resource', 'admin/hr', 'fa fa-sitemap', '', '0', '1', '2018-09-27 08:20:24'),
(5, 'Communicate', 'admin/commmunicate', 'fa fa-bullhorn', '', '0', '1', '2018-09-27 08:20:29'),
(6, 'Inventory', 'admin/inventory', 'fas fa-folder-open', ',2', '0', '1', '2018-10-13 17:42:45'),
(7, 'Hostel', 'admin/hostel', 'fa fa-h-square', ',2', '0', '1', '2018-10-13 17:42:39'),
(14, 'Reports', '#', 'fa fa-chart-pie', '', '1', '1', '2018-09-27 14:28:07'),
(15, 'Settings', '#', 'fa fa-cog', '', '1', '1', '2018-09-27 14:28:12');

-- --------------------------------------------------------

--
-- Table structure for table `password_reset`
--

CREATE TABLE `password_reset` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(11) NOT NULL,
  `cid` int(255) NOT NULL,
  `name` varchar(30) NOT NULL,
  `is_active` enum('0','1') CHARACTER SET utf8 NOT NULL DEFAULT '0',
  `is_superadmin` enum('0','1') NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `cid`, `name`, `is_active`, `is_superadmin`, `created_at`) VALUES
(1, 0, 'Super Administrator', '1', '1', '2018-09-13 08:45:08'),
(2, 0, 'Administrator', '1', '0', '2018-09-17 18:48:18'),
(3, 0, 'Lecturer/Teacher', '1', '0', '2018-09-17 18:48:24'),
(4, 0, 'Accountant', '1', '0', '2018-09-17 18:48:29'),
(5, 0, 'Student', '1', '0', '2018-09-17 18:48:34'),
(6, 0, 'Parent', '1', '0', '2018-09-17 18:48:39'),
(7, 0, 'Librarian', '1', '0', '2018-09-17 18:48:43'),
(8, 0, 'Human Resource', '1', '0', '2018-09-17 18:48:48'),
(9, 2, 'House Master', '1', '0', '2018-09-17 18:44:33'),
(10, 2, 'Principal', '1', '0', '2018-09-17 18:44:38');

-- --------------------------------------------------------

--
-- Table structure for table `roles_permissions`
--

CREATE TABLE `roles_permissions` (
  `id` int(11) NOT NULL,
  `cid` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `module_id` int(11) NOT NULL,
  `can_view` enum('0','1') NOT NULL DEFAULT '1',
  `can_add` enum('0','1') NOT NULL DEFAULT '1',
  `can_edit` enum('0','1') NOT NULL DEFAULT '1',
  `can_delete` enum('0','1') NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `roles_permissions`
--

INSERT INTO `roles_permissions` (`id`, `cid`, `role_id`, `module_id`, `can_view`, `can_add`, `can_edit`, `can_delete`, `created_at`) VALUES
(1, 2, 2, 1, '1', '1', '1', '1', '2018-10-04 08:26:15'),
(2, 2, 2, 2, '1', '1', '1', '1', '2018-10-04 08:26:20'),
(3, 2, 2, 3, '1', '1', '1', '1', '2018-10-04 08:26:25'),
(4, 2, 2, 4, '1', '1', '1', '1', '2018-10-08 08:21:58'),
(5, 2, 2, 5, '1', '1', '1', '1', '2018-10-06 19:02:59');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` int(11) NOT NULL,
  `cid` int(255) NOT NULL,
  `session` varchar(20) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `is_active` enum('0','1') NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `cid`, `session`, `start_date`, `end_date`, `is_active`, `created_at`, `updated_at`) VALUES
(1, 3, '2005/2006', '0000-00-00', '0000-00-00', '0', '0000-00-00 00:00:00', '2018-10-13 18:27:25'),
(2, 3, '2006/2007', '0000-00-00', '0000-00-00', '0', '0000-00-00 00:00:00', '2018-10-13 18:28:14'),
(3, 3, '2007/2008', '0000-00-00', '0000-00-00', '0', '0000-00-00 00:00:00', '2018-10-13 18:28:09'),
(4, 4, '2004/2005', '0000-00-00', '0000-00-00', '0', '0000-00-00 00:00:00', '2018-10-13 18:28:05'),
(5, 4, '2003/2004', '0000-00-00', '0000-00-00', '0', '0000-00-00 00:00:00', '2018-10-13 18:28:00'),
(6, 5, '2008/2009', '0000-00-00', '0000-00-00', '0', '0000-00-00 00:00:00', '2018-10-13 18:27:56'),
(7, 5, '2009/2010', '0000-00-00', '0000-00-00', '0', '0000-00-00 00:00:00', '2018-10-13 18:27:52'),
(8, 5, '2010/2011', '0000-00-00', '0000-00-00', '0', '0000-00-00 00:00:00', '2018-10-13 18:27:47'),
(9, 2, '2017/2018', '0000-00-00', '0000-00-00', '0', '0000-00-00 00:00:00', '2018-10-13 18:27:42'),
(10, 2, '2018/2019', '2018-10-03', '2019-07-07', '1', '0000-00-00 00:00:00', '2018-10-13 18:29:38'),
(11, 1, '2013/2014', '0000-00-00', '0000-00-00', '0', '0000-00-00 00:00:00', '2018-10-13 18:28:19'),
(12, 1, '2014/2015', '0000-00-00', '0000-00-00', '0', '0000-00-00 00:00:00', '2018-10-13 18:28:29');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(11) NOT NULL,
  `cid` int(255) NOT NULL,
  `site_name` varchar(100) NOT NULL,
  `site_img` varchar(100) NOT NULL,
  `username` varchar(255) NOT NULL,
  `facebook` varchar(255) NOT NULL,
  `twitter` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `language` varchar(100) NOT NULL,
  `default_row_per_page` int(11) NOT NULL,
  `version` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `cid`, `site_name`, `site_img`, `username`, `facebook`, `twitter`, `url`, `email`, `language`, `default_row_per_page`, `version`, `created_at`, `updated_at`) VALUES
(1, 1, 'PEARSDC', '', '', 'social.jencube', '', 'www.jencube.com', 'info@jencube.com', 'English', 100, '1.0.20181507.BETA', '2016-06-14 23:00:00', '2018-09-17 18:35:05'),
(2, 2, 'BENSON IDAHOSA UNIVERSITY', '', 'biu', 'biuNigeria', '', 'http://biu.edu.ng', 'ict@biu.edu.ng', 'English', 100, '1.0.20181507.BETA', '2014-08-11 23:00:00', '2018-09-17 18:35:05');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `id` int(11) NOT NULL,
  `cid` int(255) NOT NULL,
  `employee_id` varchar(200) NOT NULL,
  `department` varchar(100) NOT NULL,
  `designation` varchar(100) NOT NULL,
  `qualification` varchar(200) NOT NULL,
  `work_exp` varchar(200) NOT NULL,
  `firstname` varchar(200) NOT NULL,
  `lastname` varchar(200) NOT NULL,
  `middlename` varchar(200) NOT NULL,
  `father_name` varchar(200) NOT NULL,
  `mother_name` varchar(200) NOT NULL,
  `contact_no` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `dob` date NOT NULL,
  `marital_status` varchar(100) NOT NULL,
  `date_of_joining` date NOT NULL,
  `date_of_leaving` date NOT NULL,
  `address` text NOT NULL,
  `note` varchar(200) NOT NULL,
  `image` varchar(200) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `account_title` varchar(200) NOT NULL,
  `bank_account_no` varchar(200) NOT NULL,
  `bank_name` varchar(200) NOT NULL,
  `payscale` varchar(200) NOT NULL,
  `basic_salary` varchar(200) NOT NULL,
  `epf_no` varchar(200) NOT NULL,
  `contract_type` varchar(100) NOT NULL,
  `shift` varchar(100) NOT NULL,
  `location` varchar(100) NOT NULL,
  `facebook` varchar(200) NOT NULL,
  `twitter` varchar(200) NOT NULL,
  `linkedin` varchar(200) NOT NULL,
  `instagram` varchar(200) NOT NULL,
  `resume` varchar(200) NOT NULL,
  `joining_letter` varchar(200) NOT NULL,
  `resignation_letter` varchar(200) NOT NULL,
  `is_active` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `disabled_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`id`, `cid`, `employee_id`, `department`, `designation`, `qualification`, `work_exp`, `firstname`, `lastname`, `middlename`, `father_name`, `mother_name`, `contact_no`, `email`, `dob`, `marital_status`, `date_of_joining`, `date_of_leaving`, `address`, `note`, `image`, `gender`, `account_title`, `bank_account_no`, `bank_name`, `payscale`, `basic_salary`, `epf_no`, `contract_type`, `shift`, `location`, `facebook`, `twitter`, `linkedin`, `instagram`, `resume`, `joining_letter`, `resignation_letter`, `is_active`, `created_at`, `updated_at`, `disabled_at`) VALUES
(1, 1, '1001', '4', '4', '', '', 'Admin', 'Super ', '', '', '', '', 'amaeze@biu.edu.ng', '1970-01-01', '', '1970-01-01', '0000-00-00', '', '', '', 'Male', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 1, '2018-09-17 17:57:53', '2018-09-21 10:35:58', '0000-00-00 00:00:00'),
(4, 1, '1002', '4', '2', '', '', 'Gaius', 'Osaiwe', '', '', '', '', 'gosaiwe@naa.ng', '1980-07-11', 'Single', '1970-01-01', '0000-00-00', '', '', '4.jpg', 'Male', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 1, '2018-09-17 17:57:53', '2018-09-21 08:06:42', '0000-00-00 00:00:00'),
(5, 1, '1003', '1', '3', '', '', 'Godwin', 'Tonguve', '', '', '', '', 'gtonguve@naa.ng', '1986-04-18', 'Married', '1970-01-01', '0000-00-00', '', '', '5.jpg', 'Male', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 1, '2018-09-17 17:57:53', '2018-09-21 10:34:16', '0000-00-00 00:00:00'),
(6, 1, '1004', '1', '3', '', '', 'Maureen', 'Omogbare', '', '', '', '', 'momogbare@naa.ng', '1975-07-04', 'Married', '1970-01-01', '0000-00-00', '', '', '6.jpg', 'Female', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 1, '2018-09-17 17:57:53', '2018-09-21 10:34:22', '0000-00-00 00:00:00'),
(7, 2, '1005', '1', '7', '', '', 'Joy', 'Abguegbeude', '', '', '', '', 'jabguegbeude@naa.ng', '1990-07-04', 'Married', '1970-01-01', '0000-00-00', '', '', '7.jpg', 'Female', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 1, '2018-09-17 17:57:53', '2018-09-21 10:38:05', '0000-00-00 00:00:00'),
(8, 2, '1006', '1', '3', '', '', 'Osaru', 'Uhimwen', '', '', '', '', 'ouhimwen@naa.ng', '1994-11-08', 'Single', '1970-01-01', '0000-00-00', '', '', '8.jpg', 'Female', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 1, '2018-09-17 17:57:53', '2018-09-21 08:06:54', '0000-00-00 00:00:00'),
(9, 2, '1007', '1', '3', '', '', 'Etinosa', 'Osawe', '', '', '', '', 'admin@naa.ng', '1980-07-03', 'Single', '2018-09-03', '0000-00-00', '', '', '', 'Male', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 1, '2018-09-17 17:57:53', '2018-09-21 08:10:54', '0000-00-00 00:00:00'),
(10, 2, '1008', '1', '3', '', '', 'Blessing A.', 'Yussuf ', '', '', '', '', 'kazuokwu@biu.edu.ng', '1980-02-14', '', '2018-06-04', '0000-00-00', '', '', '10.jpg', 'Female', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 1, '2018-09-17 17:57:53', '2018-09-21 08:11:03', '0000-00-00 00:00:00'),
(11, 2, '1009', '4', '2', '', '', 'Blessing', 'Mmadu', '', '', '', '', 'bmmadu@naa.ng', '1989-09-12', '', '2017-08-07', '0000-00-00', '', '', '11.jpg', 'Female', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 1, '2018-09-17 17:57:53', '2018-09-21 10:34:30', '0000-00-00 00:00:00'),
(12, 2, '1010', '4', '8', '', '', 'Esosa', 'Elaiho', '', '', '', '', 'elaiho@gmail.com', '1983-02-10', 'Married', '2015-08-26', '0000-00-00', '', '', '12.jpg', 'Male', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 1, '2018-09-17 17:57:53', '2018-09-21 10:38:10', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(11) NOT NULL,
  `cid` int(255) NOT NULL,
  `class_id` int(255) NOT NULL,
  `section_id` int(255) NOT NULL,
  `level_id` int(11) DEFAULT NULL,
  `parent_id` int(255) NOT NULL,
  `sibling_id` int(255) DEFAULT NULL,
  `admission_no` varchar(100) DEFAULT NULL,
  `rfid_code` varchar(100) DEFAULT NULL,
  `admission_date` varchar(100) DEFAULT NULL,
  `firstname` varchar(100) DEFAULT NULL,
  `lastname` varchar(100) DEFAULT NULL,
  `middlename` varchar(100) DEFAULT NULL,
  `scholarship` enum('No','Yes') NOT NULL DEFAULT 'No',
  `image` varchar(100) DEFAULT NULL,
  `mobileno` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `state` varchar(100) DEFAULT NULL,
  `city` varchar(100) DEFAULT NULL,
  `religion` varchar(100) DEFAULT NULL,
  `dob` varchar(100) DEFAULT NULL,
  `gender` enum('Female','Male') DEFAULT NULL,
  `current_address` text,
  `route_id` int(11) DEFAULT NULL,
  `category_id` int(11) NOT NULL DEFAULT '1',
  `school_house_id` int(11) DEFAULT NULL,
  `blood_group` varchar(200) DEFAULT NULL,
  `vehroute_id` int(11) DEFAULT NULL,
  `hostel_room_id` int(11) DEFAULT NULL,
  `is_guardian` varchar(100) DEFAULT NULL,
  `father_name` varchar(100) DEFAULT NULL,
  `father_phone` varchar(100) DEFAULT NULL,
  `father_occupation` varchar(100) DEFAULT NULL,
  `mother_name` varchar(100) DEFAULT NULL,
  `mother_phone` varchar(100) DEFAULT NULL,
  `mother_occupation` varchar(100) DEFAULT NULL,
  `guardian_name` varchar(100) DEFAULT NULL,
  `guardian_relation` varchar(100) DEFAULT NULL,
  `guardian_phone` varchar(100) DEFAULT NULL,
  `guardian_occupation` varchar(150) DEFAULT NULL,
  `guardian_address` text,
  `guardian_email` varchar(100) DEFAULT NULL,
  `father_pic` varchar(200) DEFAULT NULL,
  `mother_pic` varchar(200) DEFAULT NULL,
  `guardian_pic` varchar(200) DEFAULT NULL,
  `is_active` enum('0','1') DEFAULT '1',
  `note` text,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  `disabled_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `cid`, `class_id`, `section_id`, `level_id`, `parent_id`, `sibling_id`, `admission_no`, `rfid_code`, `admission_date`, `firstname`, `lastname`, `middlename`, `scholarship`, `image`, `mobileno`, `email`, `state`, `city`, `religion`, `dob`, `gender`, `current_address`, `route_id`, `category_id`, `school_house_id`, `blood_group`, `vehroute_id`, `hostel_room_id`, `is_guardian`, `father_name`, `father_phone`, `father_occupation`, `mother_name`, `mother_phone`, `mother_occupation`, `guardian_name`, `guardian_relation`, `guardian_phone`, `guardian_occupation`, `guardian_address`, `guardian_email`, `father_pic`, `mother_pic`, `guardian_pic`, `is_active`, `note`, `created_at`, `updated_at`, `disabled_at`) VALUES
(1, 2, 6, 5, 1, 1, 2, '10/101', NULL, '2018-09-09', 'Beauty', 'Onyekwere', 'Ngozi', 'No', 'no-profile-photo-female.jpg', '(234)-675-765-7657', 'stud1@biu.edu.ng', NULL, NULL, NULL, '1997-09-09', 'Female', NULL, NULL, 1, NULL, 'O+', NULL, NULL, 'Father', 'Clatus Onyekwere', '(234)-088-778-7767', 'Trader', NULL, NULL, NULL, 'Clatus Onyekwere', 'Father', '(234)-575-765-8756', 'Trader', 'no 5 dublin str, port-harcourt.', 'clatus@gmail.com', NULL, NULL, NULL, '1', NULL, '2018-09-30 15:55:17', '2018-10-06 12:44:38', NULL),
(2, 2, 6, 6, 2, 1, 1, '10/102', NULL, '2018-09-09', 'Bittrice', 'Onyekwere', 'Chidinma', 'No', 'no-profile-photo-female.jpg', '(234)-675-575-6756', 'stud2@biu.edu.ng', NULL, NULL, NULL, '1995-09-08', 'Female', NULL, NULL, 1, NULL, 'A+', NULL, NULL, 'Father', 'Clatus Onyekwere', '(234)-089-787-8675', 'Trader', NULL, NULL, NULL, 'Clatus Onyekwere', 'Father', '(234)-576-576-5765', 'Trader', 'no 5 dublin str, port-harcourt.', 'clatus@gmail.com', NULL, NULL, NULL, '1', NULL, '2018-09-30 16:00:12', '2018-10-04 21:44:54', NULL),
(3, 2, 5, 7, 1, 1, 1, '10/103', NULL, '2018-08-08', 'Chukwuemeka', 'Onyekwere', NULL, 'No', 'no-profile-photo-master.jpg', '(234)-353-454-3534', 'stud3@biu.edu.ng', NULL, NULL, NULL, '1992-08-08', 'Male', NULL, NULL, 1, NULL, NULL, NULL, NULL, 'Father', 'genda ufatu', '23497955438', 'Trader', NULL, NULL, NULL, 'genda ufatu', 'Father', '23497955438', 'Trader', 'no 5 dublin str, port-harcourt.', 'clatus@gmail.com', NULL, NULL, NULL, '1', NULL, '2018-09-30 17:17:48', '2018-10-06 13:01:15', NULL),
(5, 2, 6, 4, 1, 2, NULL, '10/104', NULL, '2018-08-08', 'Gbemisola', 'Odofa', NULL, 'No', 'no-profile-photo-female.jpg', '(234)-435-645-7587', 'stud4@biu.edu.ng', NULL, NULL, NULL, '1997-09-09', 'Female', NULL, NULL, 2, NULL, 'AB+', NULL, NULL, 'Father', 'Sherif Odofa', '(234)-878-979-7890', 'Doctor', 'Dupe Odofa', '(234)-657-657-8686', 'Nurse', 'Sherif Odofa', 'Father', '(234)-878-979-7890', 'Doctor', 'no 3 crescent str, victoria island, Lagos', 'segisi@gmail.com', NULL, NULL, NULL, '1', NULL, '2018-10-06 12:48:46', '2018-10-06 12:48:46', NULL),
(6, 2, 6, 6, 1, 3, NULL, 'BAS/CSC/160553', NULL, '2018-09-09', 'Light', 'Eberechukwu', NULL, 'No', 'BASCSC160553_1539611519.jpg', '08102982020', 'stud5@biu.edu.ng', NULL, NULL, NULL, '1998-09-09', 'Male', NULL, NULL, 1, NULL, 'O+', NULL, NULL, 'Father', 'Eberechukwu Clatus', '23497955438', 'Business man', NULL, NULL, NULL, 'Eberechukwu Clatus', 'Father', '23497955438', 'Business man', 'NO,1 OLD ZIBA ROAD UMUNZE ANAMBRA STATE NIGERIA', 'praiseclay@gmail.com', NULL, NULL, NULL, '1', NULL, '2018-10-15 09:16:03', '2018-10-15 15:34:47', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `themes`
--

CREATE TABLE `themes` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `url` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `author` varchar(50) NOT NULL,
  `img` varchar(200) NOT NULL,
  `is_active` enum('0','1') NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `id` int(11) NOT NULL,
  `cid` int(11) NOT NULL,
  `trans_type_id` int(11) NOT NULL,
  `trans_head_id` int(11) NOT NULL,
  `invoice_no` varchar(200) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `debit` float NOT NULL DEFAULT '0',
  `credit` float NOT NULL DEFAULT '0',
  `narration` text,
  `is_active` enum('0','1') DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `documents` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `transaction`
--

INSERT INTO `transaction` (`id`, `cid`, `trans_type_id`, `trans_head_id`, `invoice_no`, `date`, `debit`, `credit`, `narration`, `is_active`, `created_at`, `updated_at`, `documents`) VALUES
(1, 2, 1, 1, '34112', '2018-10-12', 0, 15000, 'Emeka Onyeofo donated this amount in a cheque', '1', '2018-10-16 09:01:52', '2018-10-13 08:34:00', NULL),
(2, 2, 2, 4, '711208', '2018-10-16', 35100, 0, NULL, '1', '2018-10-16 10:45:07', '2018-10-16 10:45:07', ''),
(3, 2, 4, 5, '781234', '2018-10-16', 5000000, 0, NULL, '1', '2018-10-16 11:57:40', '2018-10-16 11:57:40', ''),
(4, 2, 4, 6, '875412', '2018-10-16', 58000, 0, 'Purchase of Fan', '1', '2018-10-16 12:05:59', '2018-10-16 12:05:59', '');

-- --------------------------------------------------------

--
-- Table structure for table `transaction_head`
--

CREATE TABLE `transaction_head` (
  `id` int(255) NOT NULL,
  `cid` int(11) NOT NULL,
  `trans_type_id` int(11) NOT NULL,
  `trans_head` varchar(255) DEFAULT NULL,
  `narration` text,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `transaction_head`
--

INSERT INTO `transaction_head` (`id`, `cid`, `trans_type_id`, `trans_head`, `narration`, `created_at`, `updated_at`) VALUES
(1, 2, 1, 'Donations', 'Funds from Parent, NGO\'s, Private Companies e.t.c.', '2018-10-13 09:32:58', '2018-10-13 08:32:58'),
(2, 2, 1, 'Grants', 'Funds from NGO\'s, Private Companies e.t.c.', '2018-10-13 16:03:57', '2018-10-13 15:03:57'),
(3, 2, 2, 'Transportation', NULL, '2018-10-16 10:21:01', '2018-10-16 10:21:01'),
(4, 2, 2, 'Power Bills', 'Fuel Purchases and BEDC Bills', '2018-10-16 10:24:23', '2018-10-16 10:24:23'),
(5, 2, 4, 'Plant and Machinery', NULL, '2018-10-16 11:50:50', '2018-10-16 11:50:50'),
(6, 2, 4, 'Office Equipment', NULL, '2018-10-16 12:03:07', '2018-10-16 19:03:01');

-- --------------------------------------------------------

--
-- Table structure for table `transaction_type`
--

CREATE TABLE `transaction_type` (
  `id` int(11) NOT NULL,
  `name` varchar(150) NOT NULL,
  `entry` enum('0','1') NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaction_type`
--

INSERT INTO `transaction_type` (`id`, `name`, `entry`, `created_at`) VALUES
(1, 'Revenue', '1', '2018-10-15 23:16:52'),
(2, 'Expense', '0', '2018-10-15 23:16:52'),
(3, 'Liability', '1', '2018-10-16 08:49:22'),
(4, 'Asset', '0', '2018-10-16 08:49:22'),
(5, 'Equity', '1', '2018-10-16 08:49:22');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(255) UNSIGNED NOT NULL,
  `user_id` int(255) DEFAULT NULL,
  `role_id` int(2) NOT NULL DEFAULT '2',
  `education_id` int(3) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_coreadmin` enum('0','1') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `is_active` enum('0','1') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  `disabled_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_id`, `role_id`, `education_id`, `name`, `user_code`, `email`, `password`, `remember_token`, `is_coreadmin`, `is_active`, `created_at`, `updated_at`, `disabled_at`) VALUES
(1, NULL, 2, 2, 'University of Benin', 'uniben', 'amaeze@uniben.edu.ng', '$2y$10$meXHN6VVmRJ2X7G/NkzvAe6cujP0FHpG4g3kS.E5RgqG1nqF2UFC6', 'jeTqUnVibbskgzIp8ROdeuQZlylEBCv7q1ReykVw7VscdV7F69Abtt6DtKgK', '1', '1', '2018-07-11 09:33:10', '2018-09-26 08:39:32', '0000-00-00 00:00:00'),
(2, NULL, 2, 2, 'Benson Idahosa University', 'biu', 'ict@biu.edu.ng', '$2y$10$cc5zRdoh/rfKTmK5JnZmLOg/8POxCU/vfL570rwLi/emcmUgTSkN.', 'RmJmBfLY46Evs3EhhIgOxolZK4ZhEXJr6Py3HiHhLj5szn5HfroUOEAb89SS', '1', '1', '2018-07-15 09:27:52', '2018-09-26 23:44:53', '0000-00-00 00:00:00'),
(3, NULL, 2, 2, 'University of Ibadan', 'UI', 'info@ui.edu.ng', '$2y$10$/29z8tsw77j1LBeXTMRtRuLP2VpDMP2UF/OuGQpv2QVIQrUhksZeO', '4aLBhrtZsayMFlOj35Q7gB4VdYLekJD88BjU3JfPeq4Mb9KgTbVanOLJuyg6', '1', '1', '2018-09-18 12:23:16', '2018-09-18 13:27:47', NULL),
(4, NULL, 2, 1, 'Nathan American Academy', 'naa', 'admin@naa.ng', '$2y$10$F97Gkkv17/QW.iZf6YicwOrH2sR17olSvkv83Jm4xCrYmY4IQLVey', 'AuSJaTc5ZCoykVLh0rZh67NpCdxninoB9LxFP6SPInyI5iZNLuxwz66DkerF', '1', '1', '2018-09-18 18:24:38', '2018-09-18 19:28:08', NULL),
(5, NULL, 2, 1, 'WOF Group of Schools', 'WOF', 'admin@wof.edu', '$2y$10$2swx2JpGN2X2i1rRlukxwOp0/O7hVlMCtfushl7amRNkgqf2HejWa', 'fSTcAxctOExtSaBgphfe5V0jVzfqEnguR6eCUyQjvXmDp8I1l9mU9ajGDO5q', '1', '1', '2018-09-18 19:07:19', '2018-09-18 20:07:55', NULL),
(6, 1, 6, NULL, 'Onyekwere, Beauty Ngozi', 'biu', 'stud1@biu.edu.ng', '$2y$10$hW50UGK7iLemEwe8u1mR3.BxJi5z..rtcgEj4I8Yjq5XE79ZLjdvW', NULL, '0', '1', '2018-09-30 15:55:17', '2018-10-06 12:44:38', NULL),
(7, 1, 5, NULL, 'Onyekwere, Beauty Ngozi', 'biu', 'stud1@biu.edu.ng', '$2y$10$YHdjWiefhTl9j1uMuV3s1.2Sy5ozMoHtzGCrXHss7dSWxrI5uyE3S', NULL, '0', '1', '2018-09-30 15:55:17', '2018-10-04 21:54:34', NULL),
(8, 2, 5, NULL, 'Onyekwere, Bittrice Chidinma', 'biu', 'stud2@biu.edu.ng', '$2y$10$wf2AgD2vcZwkbwdP.nPRsu3LQYtC6aPM98OT2.xrZILMjaSWIlDMO', NULL, '0', '1', '2018-09-30 16:00:12', '2018-10-04 21:44:54', NULL),
(9, 3, 5, NULL, 'Onyekwere, Chukwuemeka ', 'biu', 'stud3@biu.edu.ng', '$2y$10$1mHFF0LJpoo7TE0.nfyphOjcySn3jC2.5hu8mHr.DJGtwOJW8/dGq', NULL, '0', '1', '2018-09-30 17:17:48', '2018-10-06 13:01:15', NULL),
(12, 2, 6, NULL, 'Sherif Odofa', 'biu', 'segisi@gmail.com', '$2y$10$mJYmyYhSL9BvGCsEokO52.HK9WFPmUzM//hAcdUnvQ1SwmHJfOAam', NULL, '0', '1', '2018-10-06 12:48:46', '2018-10-06 12:48:46', NULL),
(13, 5, 5, NULL, 'Odofa, Gbemisola ', 'biu', 'stud4@biu.edu.ng', '$2y$10$R8cjHBHTC1nufZF7CHM5muwK/hBf0w5CQd75mFr6K4V5gioi0P8Am', NULL, '0', '1', '2018-10-06 12:48:47', '2018-10-06 12:48:47', NULL),
(14, 3, 6, NULL, 'Eberechukwu Clatus', 'biu', 'praiseclay@gmail.com', '$2y$10$2R1ip1LAGWigOyQ/wZ14c./Zy65XPXozurMRZDCOLxd1Ktz6USJYq', NULL, '0', '1', '2018-10-15 08:17:05', '2018-10-15 08:17:05', NULL),
(15, 3, 6, NULL, 'Eberechukwu Clatus', 'biu', 'praiseclay@gmail.com', '$2y$10$KJjpNn1EOTYNr7pgN.g3ZuK2wfegiNsqYDmdw9eQYpcW/eqn9QxFO', NULL, '0', '1', '2018-10-15 09:16:03', '2018-10-15 09:16:03', NULL),
(16, 6, 5, NULL, 'Eberechukwu, Light ', 'biu', 'stud5@biu.edu.ng', '$2y$10$yPzzxriT7zmZTogzizUHHuTTxfkG1ElPYuNQmxgz/BJoxhAnJoM0C', NULL, '0', '1', '2018-10-15 09:16:03', '2018-10-15 15:34:47', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `education_type`
--
ALTER TABLE `education_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `levels`
--
ALTER TABLE `levels`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`),
  ADD KEY `clean_url` (`clean_url`);

--
-- Indexes for table `modules`
--
ALTER TABLE `modules`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `modules_group`
--
ALTER TABLE `modules_group`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset`
--
ALTER TABLE `password_reset`
  ADD KEY `email` (`email`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles_permissions`
--
ALTER TABLE `roles_permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cid` (`cid`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `employee_id` (`employee_id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `themes`
--
ALTER TABLE `themes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transaction_head`
--
ALTER TABLE `transaction_head`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transaction_type`
--
ALTER TABLE `transaction_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `education_type`
--
ALTER TABLE `education_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `levels`
--
ALTER TABLE `levels`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `modules`
--
ALTER TABLE `modules`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `modules_group`
--
ALTER TABLE `modules_group`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `roles_permissions`
--
ALTER TABLE `roles_permissions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `sessions`
--
ALTER TABLE `sessions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `transaction`
--
ALTER TABLE `transaction`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `transaction_head`
--
ALTER TABLE `transaction_head`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `transaction_type`
--
ALTER TABLE `transaction_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(255) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
