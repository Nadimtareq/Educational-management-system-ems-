-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 22, 2017 at 12:32 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ems`
--

-- --------------------------------------------------------

--
-- Table structure for table `account_types`
--

CREATE TABLE `account_types` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_by` int(10) UNSIGNED NOT NULL,
  `updated_by` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `account_types`
--

INSERT INTO `account_types` (`id`, `name`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(1, 'fsd', 95, 96, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `activations`
--

CREATE TABLE `activations` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `completed` tinyint(1) NOT NULL DEFAULT '0',
  `completed_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `activations`
--

INSERT INTO `activations` (`id`, `user_id`, `code`, `completed`, `completed_at`, `created_at`, `updated_at`) VALUES
(76, 95, 'gq2oeamx2iF5hQnXJUIGDXqYttrgqhWk', 1, '2017-06-03 03:45:34', '2017-06-03 03:45:34', '2017-06-03 03:45:34'),
(77, 96, 'T859U2cffIV8ObvWPzPGt6x6AEGLxqCS', 1, '2017-06-03 03:58:16', '2017-06-03 03:58:16', '2017-06-03 03:58:16'),
(78, 97, 'j38pJQLF3FSE3uomFp8IrUGcfmpakOyE', 1, '2017-06-04 00:49:50', '2017-06-04 00:49:50', '2017-06-04 00:49:50'),
(79, 98, '5fQ8yGi75d3fd5Aq0zCd4EDXXZ3Hm0bj', 1, '2017-06-07 21:42:35', '2017-06-07 21:42:35', '2017-06-07 21:42:35'),
(80, 99, 'MYpI33Q2QYMKTZfIFhmuw3TukpLjQpdq', 1, '2017-06-12 00:50:11', '2017-06-12 00:50:11', '2017-06-12 00:50:11'),
(81, 100, 'jvSEmJCRfGDNbjlfcyQN156S1M7hkM3R', 1, '2017-06-20 00:20:23', '2017-06-20 00:20:23', '2017-06-20 00:20:23'),
(82, 101, 'YbWCVwA8DhyVqdnikvdySxCbtJ7Fgysh', 1, '2017-06-20 00:28:50', '2017-06-20 00:28:50', '2017-06-20 00:28:50'),
(83, 102, 'xpDCouxWTnQ3Km4LZyGjObPkdOpVBNml', 1, '2017-06-20 00:32:23', '2017-06-20 00:32:23', '2017-06-20 00:32:23'),
(84, 103, 'KGE2VrRQeXC3NTzYCPeRW1GusUaRBUQW', 1, '2017-06-20 00:33:12', '2017-06-20 00:33:12', '2017-06-20 00:33:12'),
(85, 104, 'ChyxI97ZX4NEpJXZdUujimc2ljl5v7oH', 1, '2017-06-20 00:34:43', '2017-06-20 00:34:43', '2017-06-20 00:34:43'),
(86, 105, 'MWU40Y5dhehuffpsjZdcxzQ1kaj9ccAX', 1, '2017-06-20 00:40:49', '2017-06-20 00:40:49', '2017-06-20 00:40:49'),
(87, 106, 'oH7SWFYvwiVu6JDIM4Yo23d0TfDdweFB', 1, '2017-06-20 00:41:40', '2017-06-20 00:41:40', '2017-06-20 00:41:40'),
(88, 107, 'lzjjgiM8atAK9ZTzonzkAzyXV6wxj4X6', 1, '2017-06-20 00:42:07', '2017-06-20 00:42:07', '2017-06-20 00:42:07'),
(89, 108, 'famjZVHmbB4mAD8sh8Qdcm6zRokmyZGs', 1, '2017-06-20 00:42:48', '2017-06-20 00:42:48', '2017-06-20 00:42:48'),
(90, 109, 'ZzWRv1ZeWiD7T8WHTwgz4enO4ZCumHsA', 1, '2017-06-20 00:44:14', '2017-06-20 00:44:14', '2017-06-20 00:44:14'),
(91, 110, 'AdHEPuD6J0YISyXQjumbMayBund6VyA2', 1, '2017-06-20 00:44:54', '2017-06-20 00:44:53', '2017-06-20 00:44:54'),
(93, 112, 'l3AfIfFF61LHvek5ozKrc4wbfRQWuIbl', 1, '2017-06-20 00:47:41', '2017-06-20 00:47:41', '2017-06-20 00:47:41'),
(94, 113, 'vyj7lDQJnNNslEI0QSzeAxeUXmgeWQSU', 1, '2017-06-20 00:48:44', '2017-06-20 00:48:44', '2017-06-20 00:48:44'),
(95, 114, 'E4CHGnTnBf3eCVlhVsUq2vxhbVEHUMIp', 1, '2017-06-20 01:09:11', '2017-06-20 01:09:11', '2017-06-20 01:09:11'),
(96, 115, 'Sln9jEpZ48uYAZVMPOo1lIfjSpOVvlBV', 1, '2017-06-20 01:10:14', '2017-06-20 01:10:14', '2017-06-20 01:10:14'),
(97, 116, 'QgFZ0qMQnfUcZHQswr8faSfExRJFTBqe', 1, NULL, '2017-07-21 23:39:04', '2017-07-21 23:39:04');

-- --------------------------------------------------------

--
-- Table structure for table `admininfos`
--

CREATE TABLE `admininfos` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `phone` decimal(10,0) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admininfos`
--

INSERT INTO `admininfos` (`id`, `user_id`, `phone`, `created_at`, `updated_at`) VALUES
(1, 101, NULL, '2017-06-20 01:03:06', '2017-06-20 01:03:06'),
(2, 106, NULL, '2017-06-20 01:04:07', '2017-06-20 01:04:07'),
(3, 113, NULL, '2017-06-20 01:06:46', '2017-06-20 01:06:46');

-- --------------------------------------------------------

--
-- Table structure for table `certificates`
--

CREATE TABLE `certificates` (
  `id` int(10) UNSIGNED NOT NULL,
  `cttype_id` int(10) UNSIGNED NOT NULL,
  `student_infos_id` int(10) UNSIGNED DEFAULT NULL,
  `student_roll` int(11) NOT NULL,
  `classes_id` int(10) UNSIGNED NOT NULL,
  `sections_id` int(10) UNSIGNED NOT NULL,
  `sessions_id` int(10) UNSIGNED NOT NULL,
  `app_details` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `c_info` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_by` int(10) UNSIGNED NOT NULL,
  `updated_by` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `certificates`
--

INSERT INTO `certificates` (`id`, `cttype_id`, `student_infos_id`, `student_roll`, `classes_id`, `sections_id`, `sessions_id`, `app_details`, `c_info`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(2, 1, NULL, 48, 9, 8, 5, '<p>I have need TC</p>', '01759073052', 99, 99, '2017-06-19 22:07:13', '2017-06-19 22:07:13');

-- --------------------------------------------------------

--
-- Table structure for table `certificate_types`
--

CREATE TABLE `certificate_types` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_by` int(10) UNSIGNED NOT NULL,
  `updated_by` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `certificate_types`
--

INSERT INTO `certificate_types` (`id`, `name`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(1, 'Tc', 99, 99, '2017-06-12 18:00:00', '2017-06-13 18:00:00'),
(2, 'Exam', 95, 95, '2017-06-20 00:08:53', '2017-06-20 00:08:53');

-- --------------------------------------------------------

--
-- Table structure for table `classes`
--

CREATE TABLE `classes` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_by` int(10) UNSIGNED NOT NULL,
  `updated_by` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `classes`
--

INSERT INTO `classes` (`id`, `name`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(8, 'Class 5', 95, 95, '2017-06-04 20:43:44', '2017-06-04 22:37:43'),
(9, 'Class 6', 95, 95, '2017-06-04 22:28:05', '2017-06-04 22:28:28'),
(11, 'Class 2', 95, 95, '2017-06-04 22:39:23', '2017-06-04 22:39:23'),
(12, 'Class 1', 95, 95, '2017-06-04 22:41:18', '2017-06-04 23:22:02'),
(13, 'Class 3', 97, 97, '2017-06-05 22:17:22', '2017-06-05 22:17:22'),
(14, 'Class 4', 97, 97, '2017-06-06 01:15:19', '2017-06-30 23:26:23'),
(16, 'Class 7', 113, 113, '2017-07-01 22:57:08', '2017-07-01 22:57:08');

-- --------------------------------------------------------

--
-- Table structure for table `classteachers`
--

CREATE TABLE `classteachers` (
  `id` int(10) UNSIGNED NOT NULL,
  `classes_id` int(10) UNSIGNED NOT NULL,
  `users_id` int(10) UNSIGNED NOT NULL,
  `sections_id` int(191) NOT NULL,
  `sessions_id` int(10) UNSIGNED NOT NULL,
  `created_by` int(10) UNSIGNED NOT NULL,
  `updated_by` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `classteachers`
--

INSERT INTO `classteachers` (`id`, `classes_id`, `users_id`, `sections_id`, `sessions_id`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(6, 9, 97, 11, 6, 97, 97, '2017-06-04 05:09:10', '2017-06-05 05:38:42'),
(7, 11, 97, 9, 6, 97, 97, '2017-06-05 05:38:07', '2017-06-07 04:07:28'),
(12, 13, 114, 16, 5, 97, 97, '2017-06-20 04:45:46', '2017-06-20 04:45:46'),
(13, 8, 114, 14, 6, 113, 113, '2017-07-01 23:02:11', '2017-07-01 23:02:11'),
(14, 8, 109, 8, 10, 113, 113, '2017-07-22 03:27:28', '2017-07-22 03:27:28');

-- --------------------------------------------------------

--
-- Table structure for table `contact_infos`
--

CREATE TABLE `contact_infos` (
  `id` int(10) UNSIGNED NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_1` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_2` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_1` int(11) NOT NULL,
  `phone_2` int(11) NOT NULL,
  `created_by` int(10) UNSIGNED NOT NULL,
  `updated_by` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contact_infos`
--

INSERT INTO `contact_infos` (`id`, `address`, `email_1`, `email_2`, `phone_1`, `phone_2`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(1, 'Dhanmondi, road 32', 'admin14@gmail.com', 'adminmm@gmail.com', 117485321, 145698230, 95, 95, '2017-06-04 22:18:31', '2017-06-04 22:18:31'),
(2, 'Dhanmondi, road 32', 'admin14@gmail.com', 'adminmm@gmail.com', 117485321, 145698230, 95, 95, '2017-07-22 00:13:45', '2017-07-22 00:13:45');

-- --------------------------------------------------------

--
-- Table structure for table `daily_accounts`
--

CREATE TABLE `daily_accounts` (
  `id` int(10) UNSIGNED NOT NULL,
  `date` date NOT NULL,
  `acc_type` tinyint(1) NOT NULL,
  `user_id` int(11) NOT NULL,
  `c_id` int(11) NOT NULL,
  `c_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ix_status` tinyint(1) NOT NULL,
  `amount` double(8,2) NOT NULL,
  `note` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `f_url` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_by` int(10) UNSIGNED NOT NULL,
  `updated_by` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `daily_accounts`
--

INSERT INTO `daily_accounts` (`id`, `date`, `acc_type`, `user_id`, `c_id`, `c_name`, `ix_status`, `amount`, `note`, `f_url`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(1, '2017-06-13', 1, 99, 0, '', 1, 8900.00, '', '', 99, 99, NULL, NULL),
(2, '2017-06-17', 1, 99, 0, '', 0, 3300.00, '', '', 99, 99, NULL, NULL),
(3, '2017-06-14', 1, 97, 0, '', 1, 5100.00, '', '', 97, 97, NULL, NULL),
(4, '2017-06-09', 1, 97, 0, '', 0, 2800.00, '', '', 97, 97, NULL, NULL),
(5, '0000-00-00', 1, 95, 0, '', 1, 3500.00, '', '', 95, 95, NULL, NULL),
(6, '2017-06-02', 1, 95, 0, '', 0, 6500.00, '', '', 95, 95, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `elibraries`
--

CREATE TABLE `elibraries` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `note` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `f_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `f_url` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `classes_id` int(10) UNSIGNED NOT NULL,
  `created_by` int(10) UNSIGNED NOT NULL,
  `updated_by` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `exams`
--

CREATE TABLE `exams` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `classes_id` int(10) UNSIGNED NOT NULL,
  `sessions_id` int(10) UNSIGNED NOT NULL,
  `sections_id` int(10) UNSIGNED NOT NULL,
  `terms_id` int(10) UNSIGNED NOT NULL,
  `created_by` int(10) UNSIGNED NOT NULL,
  `updated_by` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `exams`
--

INSERT INTO `exams` (`id`, `name`, `classes_id`, `sessions_id`, `sections_id`, `terms_id`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(6, 'Last term exam', 13, 10, 16, 3, 95, 113, '2017-06-05 05:36:48', '2017-07-22 03:07:15'),
(11, 'First Term', 12, 5, 11, 4, 95, 95, '2017-06-20 04:43:01', '2017-06-20 04:43:01'),
(12, 'First Term', 11, 5, 15, 4, 95, 95, '2017-06-20 04:44:25', '2017-06-20 04:44:25'),
(13, 'First Term', 13, 5, 16, 4, 95, 95, '2017-06-20 04:44:42', '2017-06-20 04:44:42');

-- --------------------------------------------------------

--
-- Table structure for table `galleries`
--

CREATE TABLE `galleries` (
  `id` int(10) UNSIGNED NOT NULL,
  `imag_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `imag_url` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `c_id` int(10) UNSIGNED NOT NULL,
  `created_by` int(10) UNSIGNED NOT NULL,
  `updated_by` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `galleries`
--

INSERT INTO `galleries` (`id`, `imag_name`, `imag_url`, `c_id`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(13, 'demo', 'images/eW1iz1v8yhKInh9pdhTp2s6nIBLEyIkz5XC1dn9I.jpeg', 1, 97, 97, '2017-06-10 04:49:21', '2017-06-10 04:49:21'),
(16, 'kller', 'images/6lwladIJDHNJNqKRJVvAaA3JAzvrnU2KMSKMGpts.jpeg', 1, 97, 97, '2017-06-10 04:52:53', '2017-06-10 04:52:53'),
(18, 'kh', 'images/dKmGaBVI78harhpcmAFQh2QPdLqIlh70Im2QVF66.jpeg', 2, 97, 97, '2017-06-10 04:54:39', '2017-06-10 04:54:39');

-- --------------------------------------------------------

--
-- Table structure for table `gallery_cats`
--

CREATE TABLE `gallery_cats` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_by` int(10) UNSIGNED NOT NULL,
  `updated_by` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `gallery_cats`
--

INSERT INTO `gallery_cats` (`id`, `title`, `description`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(1, 'Nice image', '', 95, 95, NULL, NULL),
(2, 'good image', 'asfgf', 97, 97, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `leaves`
--

CREATE TABLE `leaves` (
  `id` int(10) UNSIGNED NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `users_id` int(10) UNSIGNED NOT NULL,
  `note` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_by` int(10) UNSIGNED NOT NULL,
  `updated_by` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `leaves`
--

INSERT INTO `leaves` (`id`, `start_date`, `end_date`, `users_id`, `note`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(16, '2017-06-17', '2017-06-26', 97, 'Tranning', 95, 95, '2017-06-16 22:35:16', '2017-06-16 22:35:16'),
(17, '2017-07-01', '2017-07-04', 95, 'Body pain', 95, 95, '2017-06-30 23:11:14', '2017-06-30 23:33:31'),
(18, '2017-07-01', '2017-07-03', 95, 'Fever', 95, 95, '2017-07-01 22:26:09', '2017-07-02 01:24:39'),
(19, '2017-07-02', '2017-07-05', 97, 'Pain', 95, 95, '2017-07-02 01:26:29', '2017-07-02 01:30:30'),
(20, '2017-07-21', '2017-07-22', 95, 'Fever', 95, 95, '2017-07-22 00:19:30', '2017-07-22 00:19:30');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(10) UNSIGNED NOT NULL,
  `m_type` tinyint(1) NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_by` int(10) UNSIGNED NOT NULL,
  `updated_by` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `m_type`, `message`, `title`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(1, 2, 'result publish', 'Teacher', 95, 95, '2017-06-05 23:28:00', '2017-07-02 02:13:39'),
(3, 2, 'off Day', 'hhujj', 95, 95, '2017-06-10 22:25:36', '2017-07-02 01:35:08'),
(4, 2, 'Speech', 'hjjhkk', 95, 95, '2017-06-10 22:27:08', '2017-07-01 01:36:52'),
(5, 1, 'meeting coming', 'Teacher', 95, 95, '2017-07-02 02:16:00', '2017-07-02 02:16:00');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_07_02_230147_migration_cartalyst_sentinel', 1),
(2, '2017_05_24_085427_create_classes_table', 1),
(3, '2017_05_24_085551_create_sections_table', 1),
(4, '2017_05_24_085711_create_subjects_table', 1),
(5, '2017_05_24_085825_create_terms_table', 1),
(6, '2017_05_24_085910_create_exams_table', 1),
(7, '2017_05_24_090010_create_student_infos_table', 1),
(8, '2017_05_24_090056_create_studentbatches_table', 1),
(9, '2017_05_24_090328_create_results_table', 1),
(10, '2017_05_24_090557_create_teacher_infos_table', 1),
(11, '2017_05_24_090634_create_classteachers_table', 1),
(12, '2017_05_24_090754_create_notice_types_table', 1),
(13, '2017_05_24_090824_create_noticeboards_table', 1),
(14, '2017_05_24_090947_create_elibraries_table', 1),
(15, '2017_05_24_091039_create_gallery_cats_table', 1),
(16, '2017_05_24_091058_create_galleries_table', 1),
(17, '2017_05_24_091226_create_student_attens_table', 1),
(18, '2017_05_24_091311_create_staff_attens_table', 1),
(19, '2017_05_24_091357_create_staff_table', 1),
(20, '2017_05_24_091516_create_certificate_types_table', 1),
(21, '2017_05_24_091538_create_certificates_table', 1),
(22, '2017_05_24_091654_create_sliders_table', 1),
(23, '2017_05_24_091800_create_messages_table', 1),
(24, '2017_05_24_091842_create_leaves_table', 1),
(25, '2017_05_24_091941_create_account_types_table', 1),
(26, '2017_05_24_092010_create_daily_accounts_table', 1),
(27, '2017_05_24_092119_create_pages_table', 1),
(28, '2017_05_24_092211_create_page_titles_table', 1),
(29, '2017_05_24_092408_create_contact_infos_table', 1),
(30, '2017_05_24_100125_create_sessions_table', 1),
(31, '2017_05_25_025519_create_relation_table', 1),
(32, '2017_05_27_173453_create_notifications_table', 1),
(33, '2017_05_28_082014_add_status_to_sliders_table', 1),
(34, '2017_05_30_033529_add_foregnkeyrelation_to_activation_table', 2),
(35, '2017_05_30_041248_create_admin_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `noticeboards`
--

CREATE TABLE `noticeboards` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `details` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `file` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type_id` int(10) UNSIGNED NOT NULL,
  `created_by` int(10) UNSIGNED DEFAULT NULL,
  `updated_by` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `notice_types`
--

CREATE TABLE `notice_types` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_by` int(10) UNSIGNED NOT NULL,
  `updated_by` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notifiable_id` int(10) UNSIGNED NOT NULL,
  `notifiable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `data` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `read_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` int(10) UNSIGNED NOT NULL,
  `pt_id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `details` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_by` int(10) UNSIGNED NOT NULL,
  `updated_by` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `pt_id`, `title`, `details`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(3, 3, 'demo', 'bghjj', 95, 95, '2017-06-05 21:58:02', '2017-06-05 21:58:02'),
(4, 2, 'plo', 'hyuj', 95, 95, '2017-06-05 22:01:32', '2017-06-05 22:01:32'),
(5, 3, 'Contact', 'contact page', 95, 95, '2017-06-09 02:07:51', '2017-06-09 02:07:51'),
(6, 4, 'gghgh', 'ghghghhg', 95, 95, '2017-06-11 01:56:05', '2017-06-11 01:56:05');

-- --------------------------------------------------------

--
-- Table structure for table `page_titles`
--

CREATE TABLE `page_titles` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_by` int(10) UNSIGNED NOT NULL,
  `updated_by` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `page_titles`
--

INSERT INTO `page_titles` (`id`, `title`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(2, 'demo', 95, 95, '2017-06-04 03:03:51', '2017-06-04 03:03:51'),
(3, 'ghjkkl', 95, 95, '2017-06-04 03:16:23', '2017-06-04 03:16:23'),
(4, 'ooo', 95, 95, '2017-06-07 05:55:24', '2017-06-07 05:55:24'),
(5, 'gfgfgfgf', 95, 95, '2017-06-11 01:57:16', '2017-06-11 01:57:16');

-- --------------------------------------------------------

--
-- Table structure for table `persistences`
--

CREATE TABLE `persistences` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `persistences`
--

INSERT INTO `persistences` (`id`, `user_id`, `code`, `created_at`, `updated_at`) VALUES
(1, 1, 'H3T1eDS17ad7FIh3HLJDCHc3gfrarQSw', '2017-05-28 04:34:09', '2017-05-28 04:34:09'),
(4, 36, 'lHOt8AUQbAewZGvjQFyq9eWQSD4Jj2tO', '2017-05-29 03:12:58', '2017-05-29 03:12:58'),
(5, 36, 'cCfU0h3TPh8b9TsD4FsOBbCOmsQpTBTI', '2017-05-29 03:31:39', '2017-05-29 03:31:39'),
(6, 36, 'EABIYz9vko6z0GLxgSDiynaqzhVm4Hz0', '2017-05-29 03:42:26', '2017-05-29 03:42:26'),
(7, 36, 'FCWp7s3fkYjV3jYYhRhV9aOiujZBuipx', '2017-05-29 03:43:15', '2017-05-29 03:43:15'),
(8, 35, 'pVhQHS70rrvofqsxIcMH4pQAgZUeSvtP', '2017-05-29 03:44:46', '2017-05-29 03:44:46'),
(10, 35, 'TpnjRtITwco12x9Enf2HaZ4HksHWj9xm', '2017-05-29 03:49:28', '2017-05-29 03:49:28'),
(11, 35, 'v4DKHmdtRrrKPsj07MfhbaiiRd94HOno', '2017-05-29 03:51:10', '2017-05-29 03:51:10'),
(13, 35, 'GDfMlIm6xGhjZpYXHjsJZYmfl7Zs5I7z', '2017-05-29 03:52:25', '2017-05-29 03:52:25'),
(15, 35, 'QT84NqaKysHzsKCnnEHDhrVTCZPs270V', '2017-05-29 03:58:08', '2017-05-29 03:58:08'),
(16, 47, 'hIT0tmo2ewNNjB3zNjfLXNAeInK04RBP', '2017-05-30 03:16:51', '2017-05-30 03:16:51'),
(17, 59, 'q2FOTp9CHcdkHD16LsHZGsnps37vWjFU', '2017-05-31 22:27:18', '2017-05-31 22:27:18'),
(18, 59, 'UfjXjnF5m49lC1IIqj6Ekpc9IZlj0hH0', '2017-05-31 23:18:18', '2017-05-31 23:18:18'),
(21, 93, 'vrQ3jL2wjJVHjppBrENIDV4sugknfIfx', '2017-06-03 03:07:27', '2017-06-03 03:07:27'),
(22, 96, 'BxVVc6Y4sXnrNLce4GEnN3MVZlGiGZ3Q', '2017-06-03 04:00:44', '2017-06-03 04:00:44'),
(23, 96, 'kztCqNJHZQCKjYbGAhR4Dywgik4KXYLg', '2017-06-03 04:02:59', '2017-06-03 04:02:59'),
(24, 96, 'qMIkqJUO1GQ5ZcI7TeOzDZxs0lC0f2zr', '2017-06-03 04:13:31', '2017-06-03 04:13:31'),
(25, 96, 'MbNSumYYnLWDJJsEiRznwG6CHl58Gu86', '2017-06-03 04:14:04', '2017-06-03 04:14:04'),
(26, 96, 'OBQCf7Wp9DdVLn2pGtrtJjGn8zuH0k4l', '2017-06-03 04:14:39', '2017-06-03 04:14:39'),
(27, 96, 'hOI3Wlj7764zRrvNx1trNPoGGLPGArts', '2017-06-03 04:14:50', '2017-06-03 04:14:50'),
(28, 96, 'WjCxK49e2xSpVAknqPU6WZLxQ0fviWqv', '2017-06-03 04:15:13', '2017-06-03 04:15:13'),
(29, 96, 'aShw0qCAIcBtvBthmcqZd8RlCrtPAJPP', '2017-06-03 04:24:02', '2017-06-03 04:24:02'),
(30, 96, 'euUaHHgEBcNkCjSPEtmJuj8HWkw9Afde', '2017-06-03 04:24:15', '2017-06-03 04:24:15'),
(32, 96, 'pUd6rnlBGgDF4HJVcXcllmpV9G1V7eL7', '2017-06-03 04:25:33', '2017-06-03 04:25:33'),
(33, 96, 'JqOG0UpLFblgZDks9TPcZbPs5ku60XJU', '2017-06-03 04:26:41', '2017-06-03 04:26:41'),
(34, 96, 'QXz3VP0IDXnqWi6qQB8a9d60qHMPQinY', '2017-06-03 04:26:46', '2017-06-03 04:26:46'),
(35, 96, 'Noai8GW21NswuPL0SlnoMN61OMqWizEn', '2017-06-03 22:45:15', '2017-06-03 22:45:15'),
(36, 97, '4wPd7GZfy6aRNg8OTvelGBNFVg6iTaXp', '2017-06-04 00:50:10', '2017-06-04 00:50:10'),
(39, 97, 'dBkDbswraxnabanUiXPKMfBd7MvfyWhn', '2017-06-06 01:03:20', '2017-06-06 01:03:20'),
(40, 98, 'otKkyK5acU7FkdpB0P2o6i4XEKTRy9F6', '2017-06-07 21:42:50', '2017-06-07 21:42:50'),
(44, 99, 'psnIaLV2Nf8IF5dcg3ZiqNFxD6roiyrP', '2017-06-12 01:01:01', '2017-06-12 01:01:01'),
(45, 99, 'cpW1tbqJATLBji2CcroorgI7UtYgPQH6', '2017-06-12 20:09:39', '2017-06-12 20:09:39'),
(46, 99, 'IlaOOTRK1A27Cj26oOcVXuJ5G4JRhCLp', '2017-06-13 20:37:58', '2017-06-13 20:37:58'),
(47, 99, '62bsHHERMlczJbDcbJm6nUN2iFZFaGC7', '2017-06-13 22:37:02', '2017-06-13 22:37:02'),
(48, 99, 'kn3Kd9NPgpNlgoqn0VjFWOcNG4hk0ySQ', '2017-06-14 02:09:54', '2017-06-14 02:09:54'),
(49, 99, 'hhSvO2sDJuHxPnGx4QZRB2UiOIt5igJU', '2017-06-14 20:26:42', '2017-06-14 20:26:42'),
(50, 99, 'vPAkzGNgD7L9rNRmDfLUpjPp9lVFii2c', '2017-06-15 01:30:40', '2017-06-15 01:30:40'),
(51, 99, 'ebr47zPHPEabqyf9t888qdszyxRKFmmu', '2017-06-16 21:57:36', '2017-06-16 21:57:36'),
(63, 97, 'b2dSCpAlUBWfCrSl0UE0X9xBMYNZ3jag', '2017-06-17 06:19:50', '2017-06-17 06:19:50'),
(69, 99, 'pkrRpftGZOA0IIAMEgTB8H84EYRp7fe9', '2017-06-17 22:03:29', '2017-06-17 22:03:29'),
(75, 99, 'lCWciV7XbY3GmcJUano4l8IzqyME7pvS', '2017-06-18 05:03:15', '2017-06-18 05:03:15'),
(82, 112, 'yImUc2FV9cklRkX6xe4LVfuwp8wKPebL', '2017-06-20 00:55:17', '2017-06-20 00:55:17'),
(84, 112, 'tAbVNwaU01xyEpny9xfMjJ47j7Pd6CnW', '2017-06-20 01:11:31', '2017-06-20 01:11:31'),
(93, 101, 'LzscBDt40RqafUnFYsKyj7J0JXa7aJWX', '2017-06-20 05:20:11', '2017-06-20 05:20:11'),
(94, 113, 'npF2VHpkMD6EWd5C7EvoNcZluZduWHke', '2017-06-30 23:45:52', '2017-06-30 23:45:52'),
(96, 113, 'uuftoloQAbBrA4y09pthQanbtA7X8M04', '2017-07-01 22:47:05', '2017-07-01 22:47:05'),
(97, 113, 'zUn4fe1pSEm5d3oCdh2DwDbxeEMawIDa', '2017-07-02 00:55:47', '2017-07-02 00:55:47'),
(99, 113, 'viuhaFtOcSAC9o53MRv3xyP2KaPlADd0', '2017-07-21 23:47:12', '2017-07-21 23:47:12');

-- --------------------------------------------------------

--
-- Table structure for table `reminders`
--

CREATE TABLE `reminders` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `completed` tinyint(1) NOT NULL DEFAULT '0',
  `completed_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `results`
--

CREATE TABLE `results` (
  `id` int(10) UNSIGNED NOT NULL,
  `exams_id` int(10) UNSIGNED NOT NULL,
  `users_id` int(10) UNSIGNED NOT NULL,
  `subjects_id` int(10) UNSIGNED NOT NULL,
  `mark` int(11) NOT NULL,
  `created_by` int(10) UNSIGNED NOT NULL,
  `updated_by` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `results`
--

INSERT INTO `results` (`id`, `exams_id`, `users_id`, `subjects_id`, `mark`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(3, 13, 99, 13, 0, 97, 97, NULL, NULL),
(4, 13, 96, 13, 0, 97, 97, NULL, NULL),
(5, 12, 104, 10, 5, 97, 97, NULL, NULL),
(6, 12, 105, 10, 2, 97, 97, NULL, NULL),
(7, 12, 108, 10, 3, 97, 97, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `permissions` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `slug`, `name`, `permissions`, `created_at`, `updated_at`) VALUES
(1, 'superadmin', 'superadmin', NULL, NULL, NULL),
(2, 'admin', 'admin', NULL, NULL, NULL),
(3, 'student', 'student', NULL, NULL, NULL),
(4, 'staff', 'staff', NULL, NULL, NULL),
(5, 'teacher', 'teacher', NULL, NULL, NULL),
(6, 'deactivate', 'deactivate', NULL, NULL, NULL),
(7, 'accountant', 'accountant', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `role_users`
--

CREATE TABLE `role_users` (
  `user_id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_users`
--

INSERT INTO `role_users` (`user_id`, `role_id`, `created_at`, `updated_at`) VALUES
(51, 3, '2017-05-30 23:03:27', '2017-05-30 23:03:27'),
(52, 4, '2017-05-30 23:03:42', '2017-05-30 23:03:42'),
(53, 5, '2017-05-30 23:03:51', '2017-05-30 23:03:51'),
(54, 3, '2017-05-30 23:04:03', '2017-05-30 23:04:03'),
(59, 6, '2017-05-30 23:04:11', '2017-05-30 23:04:11'),
(60, 6, '2017-06-03 00:57:36', '2017-06-03 00:57:36'),
(67, 6, '2017-06-03 01:15:08', '2017-06-03 01:15:08'),
(70, 6, '2017-06-03 01:52:59', '2017-06-03 01:52:59'),
(73, 6, '2017-06-03 01:57:47', '2017-06-03 01:57:47'),
(91, 6, '2017-06-03 02:21:13', '2017-06-03 02:21:13'),
(93, 6, '2017-06-03 03:00:28', '2017-06-03 03:00:28'),
(95, 5, '2017-06-04 00:59:07', '2017-06-04 00:59:07'),
(96, 3, '2017-06-17 06:14:52', '2017-06-17 06:14:52'),
(97, 4, '2017-06-16 22:06:45', '2017-06-16 22:06:45'),
(98, 5, '2017-06-16 22:06:56', '2017-06-16 22:06:56'),
(99, 3, '2017-06-12 00:50:51', '2017-06-12 00:50:51'),
(101, 3, '2017-06-20 01:03:15', '2017-06-20 01:03:15'),
(102, 3, '2017-06-20 01:03:27', '2017-06-20 01:03:27'),
(103, 3, '2017-06-20 01:03:36', '2017-06-20 01:03:36'),
(104, 3, '2017-06-20 01:03:45', '2017-06-20 01:03:45'),
(105, 3, '2017-06-20 01:02:47', '2017-06-20 01:02:47'),
(106, 2, '2017-06-20 01:04:07', '2017-06-20 01:04:07'),
(108, 3, '2017-06-20 01:05:54', '2017-06-20 01:05:54'),
(109, 5, '2017-06-20 01:04:53', '2017-06-20 01:04:53'),
(110, 5, '2017-06-20 01:05:09', '2017-06-20 01:05:09'),
(112, 2, '2017-05-30 23:03:10', '2017-05-30 23:03:10'),
(113, 1, '2017-06-20 01:06:46', '2017-06-20 01:06:46'),
(114, 5, '2017-06-20 01:12:21', '2017-06-20 01:12:21'),
(115, 7, '2017-06-20 01:12:06', '2017-06-20 01:12:06');

-- --------------------------------------------------------

--
-- Table structure for table `sections`
--

CREATE TABLE `sections` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `classes_id` int(10) UNSIGNED NOT NULL,
  `created_by` int(10) UNSIGNED NOT NULL,
  `updated_by` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sections`
--

INSERT INTO `sections` (`id`, `name`, `classes_id`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(8, 'Section-A', 8, 95, 95, '2017-06-04 04:09:50', '2017-07-22 00:43:17'),
(11, 'Section-E', 12, 95, 95, '2017-06-04 23:08:42', '2017-06-04 23:08:42'),
(14, 'Section-K', 14, 95, 95, '2017-06-05 05:31:12', '2017-07-22 02:58:01'),
(15, 'Section-g', 14, 95, 95, '2017-06-07 03:55:57', '2017-07-22 00:40:46'),
(16, 'Section B', 13, 95, 95, '2017-06-20 04:38:11', '2017-06-20 04:38:11');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_by` int(10) UNSIGNED NOT NULL,
  `updated_by` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `title`, `description`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(5, '2017', '2017 session starting', 95, 95, '2017-06-04 04:13:09', '2017-06-04 04:13:09'),
(6, '2011', '2011 session running', 95, 95, '2017-06-04 20:57:39', '2017-06-05 00:50:33'),
(10, '2013', '2013 session end', 95, 95, '2017-06-05 05:32:08', '2017-06-30 23:27:58'),
(11, '2015', '2015 session is continue', 113, 113, '2017-07-02 02:48:33', '2017-07-02 02:48:33');

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img_url` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_by` int(10) UNSIGNED NOT NULL,
  `updated_by` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `name`, `img_url`, `created_by`, `updated_by`, `created_at`, `updated_at`, `status`) VALUES
(2, 'Deep sea', 'images/EIwrhUFCHFd0WcOgH5i8qEZJ21I7Renmdxs8NNlO.jpeg', 95, 95, '2017-06-19 02:19:56', '2017-06-19 02:19:56', 0);

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `id` int(10) UNSIGNED NOT NULL,
  `order` int(11) DEFAULT NULL,
  `about` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nationality` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `religion` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `birth_date` date DEFAULT NULL,
  `v_id` int(11) DEFAULT NULL,
  `c_1` int(11) DEFAULT NULL,
  `c_2` int(11) DEFAULT NULL,
  `per_add` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pre_add` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `salary_info` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `salary_note` text COLLATE utf8mb4_unicode_ci,
  `desination` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `edu_level` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fs_1` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fs_2` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fs_3` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `join_date` date DEFAULT NULL,
  `ending_date` date DEFAULT NULL,
  `users_id` int(10) UNSIGNED DEFAULT NULL,
  `created_by` int(10) UNSIGNED DEFAULT NULL,
  `updated_by` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`id`, `order`, `about`, `nationality`, `religion`, `birth_date`, `v_id`, `c_1`, `c_2`, `per_add`, `pre_add`, `salary_info`, `salary_note`, `desination`, `edu_level`, `fs_1`, `fs_2`, `fs_3`, `join_date`, `ending_date`, `users_id`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(1, NULL, 'I am teacher', 'Bangladeshi', 'Islam', '1992-06-01', 1213, 1759073052, 185253347, 'Tangail,Dhaka', 'Road-12,Mohakhali DOHS', '1234566', '  No more Excuse', 'Assistant', 'Higher', 'Math', 'Bangla', 'Religions', '2014-06-07', '2017-06-30', 97, NULL, NULL, '2017-06-16 22:06:45', '2017-06-16 22:06:45'),
(2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 115, NULL, NULL, '2017-06-20 01:12:06', '2017-06-20 01:12:06');

-- --------------------------------------------------------

--
-- Table structure for table `staff_attens`
--

CREATE TABLE `staff_attens` (
  `id` int(10) UNSIGNED NOT NULL,
  `users_id` int(10) UNSIGNED NOT NULL,
  `date` date NOT NULL,
  `atten_status` tinyint(1) NOT NULL,
  `created_by` int(10) UNSIGNED NOT NULL,
  `updated_by` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `staff_attens`
--

INSERT INTO `staff_attens` (`id`, `users_id`, `date`, `atten_status`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(2, 95, '2017-06-12', 0, 95, 95, '2017-06-11 18:00:00', '2017-06-11 18:00:00'),
(3, 97, '2017-06-16', 1, 95, 95, '2017-06-16 18:00:00', '2017-06-16 18:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `studentbatches`
--

CREATE TABLE `studentbatches` (
  `id` int(10) UNSIGNED NOT NULL,
  `classes_id` int(10) UNSIGNED NOT NULL,
  `sessions_id` int(10) UNSIGNED NOT NULL,
  `sections_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(191) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `student_roll` int(191) NOT NULL,
  `created_by` int(10) UNSIGNED NOT NULL,
  `updated_by` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `studentbatches`
--

INSERT INTO `studentbatches` (`id`, `classes_id`, `sessions_id`, `sections_id`, `user_id`, `status`, `student_roll`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(3, 9, 5, 8, 97, 1, 56464, 99, NULL, '2017-06-12 04:40:36', '2017-06-12 04:40:36'),
(5, 12, 5, 11, 101, 1, 1001, 112, NULL, '2017-06-20 04:54:31', '2017-06-20 04:54:31'),
(6, 12, 5, 11, 102, 1, 1002, 112, NULL, '2017-06-20 04:55:14', '2017-06-20 04:55:14'),
(7, 12, 5, 11, 103, 1, 1003, 112, NULL, '2017-06-20 04:55:45', '2017-06-20 04:55:45'),
(8, 11, 5, 15, 104, 1, 2001, 112, NULL, '2017-06-20 04:56:21', '2017-06-20 04:56:21'),
(9, 11, 5, 15, 105, 1, 2002, 112, NULL, '2017-06-20 04:57:05', '2017-06-20 04:57:05'),
(10, 11, 5, 15, 108, 1, 2003, 112, NULL, '2017-06-20 04:57:56', '2017-06-20 04:57:56'),
(11, 13, 5, 16, 99, 1, 3001, 112, NULL, '2017-06-20 04:58:31', '2017-06-20 04:58:31'),
(12, 13, 5, 16, 96, 1, 3002, 112, NULL, '2017-06-20 04:58:55', '2017-06-20 04:58:55');

-- --------------------------------------------------------

--
-- Table structure for table `student_attens`
--

CREATE TABLE `student_attens` (
  `id` int(10) UNSIGNED NOT NULL,
  `atten_date` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ct_id` int(10) UNSIGNED NOT NULL,
  `student_infos_id` int(10) UNSIGNED DEFAULT NULL,
  `date` date NOT NULL,
  `classes_id` int(10) UNSIGNED NOT NULL,
  `sessions_id` int(10) UNSIGNED NOT NULL,
  `sections_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(191) NOT NULL,
  `atten_status` tinyint(1) NOT NULL,
  `created_by` int(10) UNSIGNED NOT NULL,
  `updated_by` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `student_attens`
--

INSERT INTO `student_attens` (`id`, `atten_date`, `ct_id`, `student_infos_id`, `date`, `classes_id`, `sessions_id`, `sections_id`, `user_id`, `atten_status`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(9, '2017-06-20', 109, NULL, '0000-00-00', 12, 5, 11, 101, 1, 109, 109, '2017-06-20 05:29:11', '2017-06-20 05:29:11'),
(10, '2017-06-20', 109, NULL, '0000-00-00', 12, 5, 11, 102, 1, 109, 109, '2017-06-20 05:29:11', '2017-06-20 05:29:11'),
(11, '2017-06-20', 109, NULL, '0000-00-00', 12, 5, 11, 103, 1, 109, 109, '2017-06-20 05:29:11', '2017-06-20 05:29:11');

-- --------------------------------------------------------

--
-- Table structure for table `student_infos`
--

CREATE TABLE `student_infos` (
  `id` int(10) UNSIGNED NOT NULL,
  `order` int(11) DEFAULT NULL,
  `about` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nationality` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `religion` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `birth_date` date DEFAULT NULL,
  `v_id` int(11) DEFAULT NULL,
  `c_1` int(11) DEFAULT NULL,
  `c_2` int(11) DEFAULT NULL,
  `per_add` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pre_add` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gur_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gur_c1` int(11) DEFAULT NULL,
  `gur_c2` int(11) DEFAULT NULL,
  `gur_vid` int(11) DEFAULT NULL,
  `users_id` int(10) UNSIGNED DEFAULT NULL,
  `created_by` int(10) UNSIGNED DEFAULT NULL,
  `updated_by` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `student_infos`
--

INSERT INTO `student_infos` (`id`, `order`, `about`, `nationality`, `religion`, `birth_date`, `v_id`, `c_1`, `c_2`, `per_add`, `pre_add`, `gur_name`, `gur_c1`, `gur_c2`, `gur_vid`, `users_id`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(1, 10, 'about  ghjkj', 'Bangladeshi', 'Islam', '2017-06-01', 1235, 1254785, 36985278, 'Framgate,Dhaka', NULL, 'Rahim', 1789654, 1456321, 23652, 99, 99, 99, '2017-06-12 18:00:00', '2017-06-17 06:09:34'),
(3, NULL, 'Addff', 'Indian', 'Hindu', NULL, NULL, 12344, NULL, 'Mirpur Dhaka', 'Mir pur 33', NULL, NULL, NULL, NULL, 96, NULL, NULL, NULL, NULL),
(4, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 105, NULL, NULL, '2017-06-20 01:02:47', '2017-06-20 01:02:47'),
(5, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 101, NULL, NULL, '2017-06-20 01:03:15', '2017-06-20 01:03:15'),
(6, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 102, NULL, NULL, '2017-06-20 01:03:27', '2017-06-20 01:03:27'),
(7, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 103, NULL, NULL, '2017-06-20 01:03:36', '2017-06-20 01:03:36'),
(8, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 104, NULL, NULL, '2017-06-20 01:03:45', '2017-06-20 01:03:45'),
(9, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 108, NULL, NULL, '2017-06-20 01:05:54', '2017-06-20 01:05:54');

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE `subjects` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `classes_id` int(10) UNSIGNED NOT NULL,
  `created_by` int(10) UNSIGNED NOT NULL,
  `updated_by` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`id`, `title`, `description`, `classes_id`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(3, 'Bangla', NULL, 8, 95, 95, '2017-06-05 00:11:24', '2017-06-05 05:32:26'),
(4, 'Physics', 'This is physics subjects', 9, 95, 95, '2017-06-05 00:27:11', '2017-06-05 00:27:11'),
(5, 'Mathematics', NULL, 14, 95, 95, '2017-06-05 00:27:47', '2017-07-22 03:01:07'),
(7, 'Bangla', NULL, 12, 95, 95, '2017-06-20 04:39:37', '2017-06-20 04:39:37'),
(10, 'English', NULL, 11, 95, 95, '2017-06-20 04:40:40', '2017-06-20 04:40:40'),
(13, 'Mathematics', NULL, 13, 95, 95, '2017-06-20 04:41:21', '2017-06-20 04:41:21');

-- --------------------------------------------------------

--
-- Table structure for table `teacher_infos`
--

CREATE TABLE `teacher_infos` (
  `id` int(10) UNSIGNED NOT NULL,
  `order` int(11) DEFAULT NULL,
  `about` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nationality` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `religion` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `birth_date` date DEFAULT NULL,
  `v_id` int(11) DEFAULT NULL,
  `c_1` int(11) DEFAULT NULL,
  `c_2` int(11) DEFAULT NULL,
  `per_add` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pre_add` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `salary_info` text COLLATE utf8mb4_unicode_ci,
  `salary_note` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `desination` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `eud_level` varchar(11) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fs_1` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fs_2` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fs_3` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `join_date` date DEFAULT NULL,
  `ending_date` date DEFAULT NULL,
  `users_id` int(10) UNSIGNED NOT NULL,
  `created_by` int(10) UNSIGNED DEFAULT NULL,
  `updated_by` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `teacher_infos`
--

INSERT INTO `teacher_infos` (`id`, `order`, `about`, `nationality`, `religion`, `birth_date`, `v_id`, `c_1`, `c_2`, `per_add`, `pre_add`, `salary_info`, `salary_note`, `desination`, `eud_level`, `fs_1`, `fs_2`, `fs_3`, `join_date`, `ending_date`, `users_id`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 97, NULL, NULL, '2017-06-04 00:50:48', '2017-06-04 00:50:48'),
(2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 95, NULL, NULL, '2017-06-04 00:59:07', '2017-06-04 00:59:07'),
(3, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 98, NULL, NULL, '2017-06-16 22:06:56', '2017-06-16 22:06:56'),
(4, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 109, NULL, NULL, '2017-06-20 01:04:53', '2017-06-20 01:04:53'),
(5, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 110, NULL, NULL, '2017-06-20 01:05:09', '2017-06-20 01:05:09'),
(6, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 114, NULL, NULL, '2017-06-20 01:12:21', '2017-06-20 01:12:21');

-- --------------------------------------------------------

--
-- Table structure for table `terms`
--

CREATE TABLE `terms` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `created_by` int(10) UNSIGNED NOT NULL,
  `updated_by` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `terms`
--

INSERT INTO `terms` (`id`, `title`, `description`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(3, 'Mid Term', 'Mid term is continue', 95, 95, '2017-06-04 20:59:41', '2017-06-05 00:56:38'),
(4, 'First term', 'first term is starting', 95, 95, '2017-06-05 00:54:10', '2017-06-05 00:54:10'),
(5, 'Final', 'Final term is pending', 95, 95, '2017-06-05 03:05:39', '2017-06-05 03:05:39');

-- --------------------------------------------------------

--
-- Table structure for table `throttle`
--

CREATE TABLE `throttle` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ip` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `throttle`
--

INSERT INTO `throttle` (`id`, `user_id`, `type`, `ip`, `created_at`, `updated_at`) VALUES
(1, NULL, 'global', NULL, '2017-05-29 03:24:53', '2017-05-29 03:24:53'),
(2, NULL, 'ip', '::1', '2017-05-29 03:24:53', '2017-05-29 03:24:53'),
(3, NULL, 'global', NULL, '2017-05-29 03:25:52', '2017-05-29 03:25:52'),
(4, NULL, 'ip', '::1', '2017-05-29 03:25:52', '2017-05-29 03:25:52'),
(5, NULL, 'global', NULL, '2017-05-29 03:26:58', '2017-05-29 03:26:58'),
(6, NULL, 'ip', '::1', '2017-05-29 03:26:58', '2017-05-29 03:26:58'),
(7, NULL, 'global', NULL, '2017-05-29 03:27:17', '2017-05-29 03:27:17'),
(8, NULL, 'ip', '::1', '2017-05-29 03:27:17', '2017-05-29 03:27:17'),
(9, NULL, 'global', NULL, '2017-05-29 03:27:32', '2017-05-29 03:27:32'),
(10, NULL, 'ip', '::1', '2017-05-29 03:27:32', '2017-05-29 03:27:32'),
(11, NULL, 'global', NULL, '2017-05-29 03:27:41', '2017-05-29 03:27:41'),
(12, NULL, 'ip', '::1', '2017-05-29 03:27:41', '2017-05-29 03:27:41'),
(13, NULL, 'global', NULL, '2017-06-03 03:05:00', '2017-06-03 03:05:00'),
(14, NULL, 'ip', '::1', '2017-06-03 03:05:01', '2017-06-03 03:05:01'),
(15, NULL, 'global', NULL, '2017-06-03 03:05:48', '2017-06-03 03:05:48'),
(16, NULL, 'ip', '::1', '2017-06-03 03:05:48', '2017-06-03 03:05:48'),
(17, NULL, 'global', NULL, '2017-06-03 03:06:46', '2017-06-03 03:06:46'),
(18, NULL, 'ip', '::1', '2017-06-03 03:06:46', '2017-06-03 03:06:46'),
(19, NULL, 'global', NULL, '2017-06-03 03:07:14', '2017-06-03 03:07:14'),
(20, NULL, 'ip', '::1', '2017-06-03 03:07:14', '2017-06-03 03:07:14'),
(21, NULL, 'global', NULL, '2017-06-03 03:07:34', '2017-06-03 03:07:34'),
(22, NULL, 'ip', '::1', '2017-06-03 03:07:34', '2017-06-03 03:07:34'),
(23, NULL, 'global', NULL, '2017-06-03 03:28:48', '2017-06-03 03:28:48'),
(24, NULL, 'ip', '::1', '2017-06-03 03:28:48', '2017-06-03 03:28:48'),
(25, NULL, 'global', NULL, '2017-06-03 03:57:54', '2017-06-03 03:57:54'),
(26, NULL, 'ip', '::1', '2017-06-03 03:57:54', '2017-06-03 03:57:54'),
(27, NULL, 'global', NULL, '2017-06-03 03:58:25', '2017-06-03 03:58:25'),
(28, NULL, 'ip', '::1', '2017-06-03 03:58:25', '2017-06-03 03:58:25'),
(29, NULL, 'global', NULL, '2017-06-03 04:01:12', '2017-06-03 04:01:12'),
(30, NULL, 'ip', '::1', '2017-06-03 04:01:12', '2017-06-03 04:01:12'),
(31, NULL, 'global', NULL, '2017-06-03 04:01:38', '2017-06-03 04:01:38'),
(32, NULL, 'ip', '::1', '2017-06-03 04:01:38', '2017-06-03 04:01:38'),
(33, NULL, 'global', NULL, '2017-06-03 04:03:10', '2017-06-03 04:03:10'),
(34, NULL, 'ip', '::1', '2017-06-03 04:03:10', '2017-06-03 04:03:10'),
(35, NULL, 'global', NULL, '2017-06-03 04:03:27', '2017-06-03 04:03:27'),
(36, NULL, 'ip', '::1', '2017-06-03 04:03:27', '2017-06-03 04:03:27');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `permissions` text COLLATE utf8mb4_unicode_ci,
  `last_login` timestamp NULL DEFAULT NULL,
  `token` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `first_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `permissions`, `last_login`, `token`, `first_name`, `last_name`, `phone`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(95, 'Please_Change_Email_5932853e1eb5f', '$2y$10$2snU80rrcqpIv2Z/N4JO2O0dQZbqtwz1l9WcvUVmBCxjyKCGJNyVS', NULL, '2017-06-19 23:57:08', NULL, 'asdsadasd', NULL, '01825684781', NULL, NULL, '2017-06-03 03:45:34', '2017-06-19 23:57:08'),
(96, 'rayhan0421@gmail.com', '$2y$10$Z/lNznGYlgBVcWiQp/QYM.w2hLN98HStSwCH9sSQBLelO4zvcEq/K', NULL, '2017-06-17 22:00:24', NULL, 'asdsadasd', NULL, '336699', NULL, NULL, '2017-06-03 03:58:16', '2017-06-17 22:00:24'),
(97, 'Please_Change_Email_5933ad8e63b19', '$2y$10$FXghwyqzw9WnGefQd1ylnOuzkbChHPoyAvUqCbVeSnc5rLVF8Nrpu', NULL, '2017-06-18 03:19:19', NULL, 'nadim', NULL, '017590', NULL, NULL, '2017-06-04 00:49:50', '2017-06-18 03:19:19'),
(98, 'Please_Change_Email_5938c7ab792f1', '$2y$10$lPZogReHiYDj9yfyjaaXdO8fBkQbzRjNTCIJkFq5pNlMhW6smTd12', NULL, '2017-06-07 21:42:50', NULL, 'nadim', NULL, '0019543', NULL, NULL, '2017-06-07 21:42:35', '2017-06-07 21:42:50'),
(99, 'Please_Change_Email_593e39a3218b0', '$2y$10$kopQ.iBMFX6wBTL29qccce6dMlh1k9RplQoGws7oMYEE2y7Xi3IQC', NULL, '2017-06-20 04:17:10', NULL, 'Tareq', NULL, '01472', NULL, NULL, '2017-06-12 00:50:11', '2017-06-20 04:17:10'),
(100, 'Please_Change_Email_5948bea76d8e9', '$2y$10$4gRTl3l8E.yyVMVLfsgMsuzsuAVwzEQ4FuR0SE/qiee0EeMm4X7Sa', NULL, '2017-06-20 00:23:18', NULL, 'nadimtareq', NULL, '014722', NULL, NULL, '2017-06-20 00:20:23', '2017-06-20 00:23:18'),
(101, 'Please_Change_Email_5948c0a248337', '$2y$10$MrCVZ9tuV0U9el9d1.dE5ekgXbIuBX.NonMz9lhXNfu7BKPokuAFG', NULL, '2017-06-20 05:29:43', NULL, 'student1', NULL, '0147223', NULL, NULL, '2017-06-20 00:28:50', '2017-06-20 05:29:43'),
(102, 'Please_Change_Email_5948c17781223', '$2y$10$kHpXY0RvWkN8M7moj3iyjugKhaJPyLk4GuKdJi7ALF6gdQTdYCMyu', NULL, '2017-06-20 05:39:01', NULL, 'student2', NULL, '0147224', NULL, NULL, '2017-06-20 00:32:23', '2017-06-20 05:39:01'),
(103, 'Please_Change_Email_5948c1a83371c', '$2y$10$4Z9V/i3osMqi/CvRIT.y1uDV/AC6FqX/kUfyBhZBielTirHESrogK', NULL, NULL, NULL, 'student3', NULL, '0147225', NULL, NULL, '2017-06-20 00:33:12', '2017-06-20 00:33:12'),
(104, 'Please_Change_Email_5948c20347c25', '$2y$10$ZNRf35Gmf1N5qq8BPhxV/evqxwtnFucH5LpyLkvlHM.ukZ3z3h21S', NULL, NULL, NULL, 'student4', NULL, '01472265', NULL, NULL, '2017-06-20 00:34:43', '2017-06-20 00:34:43'),
(105, 'Please_Change_Email_5948c370f3202', '$2y$10$SJ8/C8fLdr2sDINy3pGoPej3NenFL5OW0aTsFJKo9lzcf6TDNdT..', NULL, NULL, NULL, 'student5', NULL, '01472266', NULL, NULL, '2017-06-20 00:40:49', '2017-06-20 00:40:49'),
(106, 'Please_Change_Email_5948c3a3ea125', '$2y$10$ZeqnXAh6MKmssWGgdfwrN.ZuXGbo2.v64WlEzxBs6ikyIBCyy7P.C', NULL, NULL, NULL, 'student6', NULL, '01472267', NULL, NULL, '2017-06-20 00:41:40', '2017-06-20 00:41:40'),
(107, 'Please_Change_Email_5948c3bf30a93', '$2y$10$VxPPmpY.m0ObD7imDFgSZOVHgpEpNsp/omRmgPTDIItSVOA0lqN1q', NULL, NULL, NULL, 'student7', NULL, '01472268', NULL, NULL, '2017-06-20 00:42:07', '2017-06-20 00:42:07'),
(108, 'student8', '$2y$10$ESRAu2uOSzdLekc/tKVIL.6yJhSxHkx1/itZwud5skjzu0Y/w3I9m', NULL, NULL, NULL, 'student6', NULL, '01472269', NULL, NULL, '2017-06-20 00:42:48', '2017-06-20 04:57:37'),
(109, 'Please_Change_Email_5948c43ddbdd2', '$2y$10$7iHQhKyQsp2SQlP/Ou7h8O/IWbDDi48vwtJhbA8yOPDedm46BZeJu', NULL, '2017-06-20 05:20:26', NULL, 'Teacher1', NULL, '0175901', NULL, NULL, '2017-06-20 00:44:13', '2017-06-20 05:20:26'),
(110, 'Please_Change_Email_5948c465d7c89', '$2y$10$XnQX1eSuHjcLtJVlTyYqNO/3gRo5pl4sPegbUG74U4ZQ3vBAVsJPi', NULL, '2017-06-20 05:00:44', NULL, 'Teacher2', NULL, '0175902', NULL, NULL, '2017-06-20 00:44:53', '2017-06-20 05:00:44'),
(112, 'Please_Change_Email_5948c50d823be', '$2y$10$vdX2ZHp9ZocK3hbOrQjglOuwTSV2JRhkFqvyf4fg4LSpHQ3gtSmjS', NULL, '2017-07-01 22:42:50', NULL, 'Admin', NULL, '0195675', NULL, NULL, '2017-06-20 00:47:41', '2017-07-01 22:42:50'),
(113, 'Please_Change_Email_5948c54c91465', '$2y$10$eEG9p5/cQxQVmKMAd.rkGe6dGE9Ei.kjedGB0jiC0k.vZko.LHwJi', NULL, '2017-07-21 23:47:12', NULL, 'superadmin', NULL, '01956756', NULL, NULL, '2017-06-20 00:48:44', '2017-07-21 23:47:12'),
(114, 'Please_Change_Email_5948ca177ffbd', '$2y$10$VA.1TA4kjd39FfxWO6bG1Og.m0Y/vWGCrbHZL7cb9XXAJOy9K2M3m', NULL, NULL, NULL, 'Teacher3', NULL, '0175903', NULL, NULL, '2017-06-20 01:09:11', '2017-06-20 01:09:11'),
(115, 'Please_Change_Email_5948ca5688303', '$2y$10$NtmMPBhZ6eYP3lxVHjQeq.PcwLa9JV3e1Zxh99QJ75NE1o3DPqxP.', NULL, NULL, NULL, 'Accountant', NULL, '0175908', NULL, NULL, '2017-06-20 01:10:14', '2017-06-20 01:10:14'),
(116, 'nadim@gmail.com', '$2y$10$M7T6Z8QojWCKK6RINZb/qOkTB5knHUovqjDT7kDUpGOSX12BMHbEa', NULL, '2017-07-21 23:40:32', NULL, 'nadim', NULL, '0147285', NULL, NULL, '2017-07-21 23:39:04', '2017-07-21 23:40:32');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account_types`
--
ALTER TABLE `account_types`
  ADD PRIMARY KEY (`id`),
  ADD KEY `account_types_created_by_foreign` (`created_by`),
  ADD KEY `account_types_updated_by_foreign` (`updated_by`);

--
-- Indexes for table `activations`
--
ALTER TABLE `activations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `activations_user_id_foreign` (`user_id`);

--
-- Indexes for table `admininfos`
--
ALTER TABLE `admininfos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `admininfos_user_id_foreign` (`user_id`);

--
-- Indexes for table `certificates`
--
ALTER TABLE `certificates`
  ADD PRIMARY KEY (`id`),
  ADD KEY `certificates_cttype_id_foreign` (`cttype_id`),
  ADD KEY `certificates_student_infos_id_foreign` (`student_infos_id`),
  ADD KEY `certificates_classes_id_foreign` (`classes_id`),
  ADD KEY `certificates_sections_id_foreign` (`sections_id`),
  ADD KEY `certificates_sessions_id_foreign` (`sessions_id`),
  ADD KEY `certificates_created_by_foreign` (`created_by`),
  ADD KEY `certificates_updated_by_foreign` (`updated_by`);

--
-- Indexes for table `certificate_types`
--
ALTER TABLE `certificate_types`
  ADD PRIMARY KEY (`id`),
  ADD KEY `certificate_types_created_by_foreign` (`created_by`),
  ADD KEY `certificate_types_updated_by_foreign` (`updated_by`);

--
-- Indexes for table `classes`
--
ALTER TABLE `classes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `classes_created_by_foreign` (`created_by`),
  ADD KEY `classes_updated_by_foreign` (`updated_by`);

--
-- Indexes for table `classteachers`
--
ALTER TABLE `classteachers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `classteachers_classes_id_foreign` (`classes_id`),
  ADD KEY `classteachers_users_id_foreign` (`users_id`),
  ADD KEY `classteachers_sessions_id_foreign` (`sessions_id`),
  ADD KEY `classteachers_created_by_foreign` (`created_by`),
  ADD KEY `classteachers_updated_by_foreign` (`updated_by`);

--
-- Indexes for table `contact_infos`
--
ALTER TABLE `contact_infos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `contact_infos_created_by_foreign` (`created_by`),
  ADD KEY `contact_infos_updated_by_foreign` (`updated_by`);

--
-- Indexes for table `daily_accounts`
--
ALTER TABLE `daily_accounts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `daily_accounts_created_by_foreign` (`created_by`),
  ADD KEY `daily_accounts_updated_by_foreign` (`updated_by`);

--
-- Indexes for table `elibraries`
--
ALTER TABLE `elibraries`
  ADD PRIMARY KEY (`id`),
  ADD KEY `elibraries_classes_id_foreign` (`classes_id`),
  ADD KEY `elibraries_created_by_foreign` (`created_by`),
  ADD KEY `elibraries_updated_by_foreign` (`updated_by`);

--
-- Indexes for table `exams`
--
ALTER TABLE `exams`
  ADD PRIMARY KEY (`id`),
  ADD KEY `exams_classes_id_foreign` (`classes_id`),
  ADD KEY `exams_sessions_id_foreign` (`sessions_id`),
  ADD KEY `exams_sections_id_foreign` (`sections_id`),
  ADD KEY `exams_terms_id_foreign` (`terms_id`),
  ADD KEY `exams_created_by_foreign` (`created_by`),
  ADD KEY `exams_updated_by_foreign` (`updated_by`);

--
-- Indexes for table `galleries`
--
ALTER TABLE `galleries`
  ADD PRIMARY KEY (`id`),
  ADD KEY `galleries_c_id_foreign` (`c_id`),
  ADD KEY `galleries_created_by_foreign` (`created_by`),
  ADD KEY `galleries_updated_by_foreign` (`updated_by`);

--
-- Indexes for table `gallery_cats`
--
ALTER TABLE `gallery_cats`
  ADD PRIMARY KEY (`id`),
  ADD KEY `gallery_cats_created_by_foreign` (`created_by`),
  ADD KEY `gallery_cats_updated_by_foreign` (`updated_by`);

--
-- Indexes for table `leaves`
--
ALTER TABLE `leaves`
  ADD PRIMARY KEY (`id`),
  ADD KEY `leaves_users_id_foreign` (`users_id`),
  ADD KEY `leaves_created_by_foreign` (`created_by`),
  ADD KEY `leaves_updated_by_foreign` (`updated_by`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `messages_created_by_foreign` (`created_by`),
  ADD KEY `messages_updated_by_foreign` (`updated_by`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `noticeboards`
--
ALTER TABLE `noticeboards`
  ADD PRIMARY KEY (`id`),
  ADD KEY `noticeboards_type_id_foreign` (`type_id`),
  ADD KEY `noticeboards_created_by_foreign` (`created_by`),
  ADD KEY `noticeboards_updated_by_foreign` (`updated_by`);

--
-- Indexes for table `notice_types`
--
ALTER TABLE `notice_types`
  ADD PRIMARY KEY (`id`),
  ADD KEY `notice_types_created_by_foreign` (`created_by`),
  ADD KEY `notice_types_updated_by_foreign` (`updated_by`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`),
  ADD KEY `notifications_notifiable_id_notifiable_type_index` (`notifiable_id`,`notifiable_type`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pages_pt_id_foreign` (`pt_id`),
  ADD KEY `pages_created_by_foreign` (`created_by`),
  ADD KEY `pages_updated_by_foreign` (`updated_by`);

--
-- Indexes for table `page_titles`
--
ALTER TABLE `page_titles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `page_titles_created_by_foreign` (`created_by`),
  ADD KEY `page_titles_updated_by_foreign` (`updated_by`);

--
-- Indexes for table `persistences`
--
ALTER TABLE `persistences`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `persistences_code_unique` (`code`);

--
-- Indexes for table `reminders`
--
ALTER TABLE `reminders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `results`
--
ALTER TABLE `results`
  ADD PRIMARY KEY (`id`),
  ADD KEY `results_exams_id_foreign` (`exams_id`),
  ADD KEY `results_users_id_foreign` (`users_id`),
  ADD KEY `results_subjects_id_foreign` (`subjects_id`),
  ADD KEY `results_created_by_foreign` (`created_by`),
  ADD KEY `results_updated_by_foreign` (`updated_by`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_slug_unique` (`slug`);

--
-- Indexes for table `role_users`
--
ALTER TABLE `role_users`
  ADD PRIMARY KEY (`user_id`,`role_id`);

--
-- Indexes for table `sections`
--
ALTER TABLE `sections`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sections_classes_id_foreign` (`classes_id`),
  ADD KEY `sections_created_by_foreign` (`created_by`),
  ADD KEY `sections_updated_by_foreign` (`updated_by`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_created_by_foreign` (`created_by`),
  ADD KEY `sessions_updated_by_foreign` (`updated_by`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sliders_created_by_foreign` (`created_by`),
  ADD KEY `sliders_updated_by_foreign` (`updated_by`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`id`),
  ADD KEY `staff_users_id_foreign` (`users_id`),
  ADD KEY `staff_created_by_foreign` (`created_by`),
  ADD KEY `staff_updated_by_foreign` (`updated_by`);

--
-- Indexes for table `staff_attens`
--
ALTER TABLE `staff_attens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `staff_attens_users_id_foreign` (`users_id`),
  ADD KEY `staff_attens_created_by_foreign` (`created_by`),
  ADD KEY `staff_attens_updated_by_foreign` (`updated_by`);

--
-- Indexes for table `studentbatches`
--
ALTER TABLE `studentbatches`
  ADD PRIMARY KEY (`id`),
  ADD KEY `studentbatches_classes_id_foreign` (`classes_id`),
  ADD KEY `studentbatches_sessions_id_foreign` (`sessions_id`),
  ADD KEY `studentbatches_sections_id_foreign` (`sections_id`),
  ADD KEY `studentbatches_created_by_foreign` (`created_by`),
  ADD KEY `studentbatches_updated_by_foreign` (`updated_by`);

--
-- Indexes for table `student_attens`
--
ALTER TABLE `student_attens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `student_attens_ct_id_foreign` (`ct_id`),
  ADD KEY `student_attens_student_infos_id_foreign` (`student_infos_id`),
  ADD KEY `student_attens_classes_id_foreign` (`classes_id`),
  ADD KEY `student_attens_sessions_id_foreign` (`sessions_id`),
  ADD KEY `student_attens_sections_id_foreign` (`sections_id`),
  ADD KEY `student_attens_created_by_foreign` (`created_by`),
  ADD KEY `student_attens_updated_by_foreign` (`updated_by`);

--
-- Indexes for table `student_infos`
--
ALTER TABLE `student_infos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `student_infos_users_id_foreign` (`users_id`),
  ADD KEY `student_infos_created_by_foreign` (`created_by`),
  ADD KEY `student_infos_updated_by_foreign` (`updated_by`);

--
-- Indexes for table `subjects`
--
ALTER TABLE `subjects`
  ADD PRIMARY KEY (`id`),
  ADD KEY `subjects_classes_id_foreign` (`classes_id`),
  ADD KEY `subjects_created_by_foreign` (`created_by`),
  ADD KEY `subjects_updated_by_foreign` (`updated_by`);

--
-- Indexes for table `teacher_infos`
--
ALTER TABLE `teacher_infos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `teacher_infos_users_id_foreign` (`users_id`),
  ADD KEY `teacher_infos_created_by_foreign` (`created_by`),
  ADD KEY `teacher_infos_updated_by_foreign` (`updated_by`);

--
-- Indexes for table `terms`
--
ALTER TABLE `terms`
  ADD PRIMARY KEY (`id`),
  ADD KEY `terms_created_by_foreign` (`created_by`),
  ADD KEY `terms_updated_by_foreign` (`updated_by`);

--
-- Indexes for table `throttle`
--
ALTER TABLE `throttle`
  ADD PRIMARY KEY (`id`),
  ADD KEY `throttle_user_id_index` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `phone` (`phone`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account_types`
--
ALTER TABLE `account_types`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `activations`
--
ALTER TABLE `activations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=98;
--
-- AUTO_INCREMENT for table `admininfos`
--
ALTER TABLE `admininfos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `certificates`
--
ALTER TABLE `certificates`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `certificate_types`
--
ALTER TABLE `certificate_types`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `classes`
--
ALTER TABLE `classes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `classteachers`
--
ALTER TABLE `classteachers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `contact_infos`
--
ALTER TABLE `contact_infos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `daily_accounts`
--
ALTER TABLE `daily_accounts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `elibraries`
--
ALTER TABLE `elibraries`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `exams`
--
ALTER TABLE `exams`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `galleries`
--
ALTER TABLE `galleries`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `gallery_cats`
--
ALTER TABLE `gallery_cats`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `leaves`
--
ALTER TABLE `leaves`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
--
-- AUTO_INCREMENT for table `noticeboards`
--
ALTER TABLE `noticeboards`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `notice_types`
--
ALTER TABLE `notice_types`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `page_titles`
--
ALTER TABLE `page_titles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `persistences`
--
ALTER TABLE `persistences`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100;
--
-- AUTO_INCREMENT for table `reminders`
--
ALTER TABLE `reminders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `results`
--
ALTER TABLE `results`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `sections`
--
ALTER TABLE `sections`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `sessions`
--
ALTER TABLE `sessions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `staff_attens`
--
ALTER TABLE `staff_attens`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `studentbatches`
--
ALTER TABLE `studentbatches`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `student_attens`
--
ALTER TABLE `student_attens`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `student_infos`
--
ALTER TABLE `student_infos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `subjects`
--
ALTER TABLE `subjects`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `teacher_infos`
--
ALTER TABLE `teacher_infos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `terms`
--
ALTER TABLE `terms`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `throttle`
--
ALTER TABLE `throttle`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=117;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `account_types`
--
ALTER TABLE `account_types`
  ADD CONSTRAINT `account_types_created_by_foreign` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `account_types_updated_by_foreign` FOREIGN KEY (`updated_by`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `activations`
--
ALTER TABLE `activations`
  ADD CONSTRAINT `activations_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `admininfos`
--
ALTER TABLE `admininfos`
  ADD CONSTRAINT `admininfos_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `certificates`
--
ALTER TABLE `certificates`
  ADD CONSTRAINT `certificates_classes_id_foreign` FOREIGN KEY (`classes_id`) REFERENCES `classes` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `certificates_created_by_foreign` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `certificates_cttype_id_foreign` FOREIGN KEY (`cttype_id`) REFERENCES `certificate_types` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `certificates_sections_id_foreign` FOREIGN KEY (`sections_id`) REFERENCES `sections` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `certificates_sessions_id_foreign` FOREIGN KEY (`sessions_id`) REFERENCES `sessions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `certificates_student_infos_id_foreign` FOREIGN KEY (`student_infos_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `certificates_updated_by_foreign` FOREIGN KEY (`updated_by`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `certificate_types`
--
ALTER TABLE `certificate_types`
  ADD CONSTRAINT `certificate_types_created_by_foreign` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `certificate_types_updated_by_foreign` FOREIGN KEY (`updated_by`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `classes`
--
ALTER TABLE `classes`
  ADD CONSTRAINT `classes_created_by_foreign` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `classes_updated_by_foreign` FOREIGN KEY (`updated_by`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `classteachers`
--
ALTER TABLE `classteachers`
  ADD CONSTRAINT `classteachers_classes_id_foreign` FOREIGN KEY (`classes_id`) REFERENCES `classes` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `classteachers_created_by_foreign` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `classteachers_sessions_id_foreign` FOREIGN KEY (`sessions_id`) REFERENCES `sessions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `classteachers_updated_by_foreign` FOREIGN KEY (`updated_by`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `classteachers_users_id_foreign` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `contact_infos`
--
ALTER TABLE `contact_infos`
  ADD CONSTRAINT `contact_infos_created_by_foreign` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `contact_infos_updated_by_foreign` FOREIGN KEY (`updated_by`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `daily_accounts`
--
ALTER TABLE `daily_accounts`
  ADD CONSTRAINT `daily_accounts_created_by_foreign` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `daily_accounts_updated_by_foreign` FOREIGN KEY (`updated_by`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `elibraries`
--
ALTER TABLE `elibraries`
  ADD CONSTRAINT `elibraries_classes_id_foreign` FOREIGN KEY (`classes_id`) REFERENCES `classes` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `elibraries_created_by_foreign` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `elibraries_updated_by_foreign` FOREIGN KEY (`updated_by`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `exams`
--
ALTER TABLE `exams`
  ADD CONSTRAINT `exams_classes_id_foreign` FOREIGN KEY (`classes_id`) REFERENCES `classes` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `exams_created_by_foreign` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `exams_sections_id_foreign` FOREIGN KEY (`sections_id`) REFERENCES `sections` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `exams_sessions_id_foreign` FOREIGN KEY (`sessions_id`) REFERENCES `sessions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `exams_terms_id_foreign` FOREIGN KEY (`terms_id`) REFERENCES `terms` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `exams_updated_by_foreign` FOREIGN KEY (`updated_by`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `galleries`
--
ALTER TABLE `galleries`
  ADD CONSTRAINT `galleries_c_id_foreign` FOREIGN KEY (`c_id`) REFERENCES `gallery_cats` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `galleries_created_by_foreign` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `galleries_updated_by_foreign` FOREIGN KEY (`updated_by`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `gallery_cats`
--
ALTER TABLE `gallery_cats`
  ADD CONSTRAINT `gallery_cats_created_by_foreign` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `gallery_cats_updated_by_foreign` FOREIGN KEY (`updated_by`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `leaves`
--
ALTER TABLE `leaves`
  ADD CONSTRAINT `leaves_created_by_foreign` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `leaves_updated_by_foreign` FOREIGN KEY (`updated_by`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `leaves_users_id_foreign` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `messages`
--
ALTER TABLE `messages`
  ADD CONSTRAINT `messages_created_by_foreign` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `messages_updated_by_foreign` FOREIGN KEY (`updated_by`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `noticeboards`
--
ALTER TABLE `noticeboards`
  ADD CONSTRAINT `noticeboards_created_by_foreign` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `noticeboards_type_id_foreign` FOREIGN KEY (`type_id`) REFERENCES `notice_types` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `noticeboards_updated_by_foreign` FOREIGN KEY (`updated_by`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `notice_types`
--
ALTER TABLE `notice_types`
  ADD CONSTRAINT `notice_types_created_by_foreign` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `notice_types_updated_by_foreign` FOREIGN KEY (`updated_by`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pages`
--
ALTER TABLE `pages`
  ADD CONSTRAINT `pages_created_by_foreign` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pages_pt_id_foreign` FOREIGN KEY (`pt_id`) REFERENCES `page_titles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pages_updated_by_foreign` FOREIGN KEY (`updated_by`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `page_titles`
--
ALTER TABLE `page_titles`
  ADD CONSTRAINT `page_titles_created_by_foreign` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `page_titles_updated_by_foreign` FOREIGN KEY (`updated_by`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `results`
--
ALTER TABLE `results`
  ADD CONSTRAINT `results_created_by_foreign` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `results_exams_id_foreign` FOREIGN KEY (`exams_id`) REFERENCES `exams` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `results_subjects_id_foreign` FOREIGN KEY (`subjects_id`) REFERENCES `subjects` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `results_updated_by_foreign` FOREIGN KEY (`updated_by`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `results_users_id_foreign` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `sections`
--
ALTER TABLE `sections`
  ADD CONSTRAINT `sections_classes_id_foreign` FOREIGN KEY (`classes_id`) REFERENCES `classes` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `sections_created_by_foreign` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `sections_updated_by_foreign` FOREIGN KEY (`updated_by`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `sessions`
--
ALTER TABLE `sessions`
  ADD CONSTRAINT `sessions_created_by_foreign` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `sessions_updated_by_foreign` FOREIGN KEY (`updated_by`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `sliders`
--
ALTER TABLE `sliders`
  ADD CONSTRAINT `sliders_created_by_foreign` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `sliders_updated_by_foreign` FOREIGN KEY (`updated_by`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `staff`
--
ALTER TABLE `staff`
  ADD CONSTRAINT `staff_created_by_foreign` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `staff_updated_by_foreign` FOREIGN KEY (`updated_by`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `staff_users_id_foreign` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `staff_attens`
--
ALTER TABLE `staff_attens`
  ADD CONSTRAINT `staff_attens_created_by_foreign` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `staff_attens_updated_by_foreign` FOREIGN KEY (`updated_by`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `staff_attens_users_id_foreign` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `studentbatches`
--
ALTER TABLE `studentbatches`
  ADD CONSTRAINT `studentbatches_classes_id_foreign` FOREIGN KEY (`classes_id`) REFERENCES `classes` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `studentbatches_created_by_foreign` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `studentbatches_sections_id_foreign` FOREIGN KEY (`sections_id`) REFERENCES `sections` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `studentbatches_sessions_id_foreign` FOREIGN KEY (`sessions_id`) REFERENCES `sessions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `studentbatches_updated_by_foreign` FOREIGN KEY (`updated_by`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `student_attens`
--
ALTER TABLE `student_attens`
  ADD CONSTRAINT `student_attens_classes_id_foreign` FOREIGN KEY (`classes_id`) REFERENCES `classes` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `student_attens_created_by_foreign` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `student_attens_ct_id_foreign` FOREIGN KEY (`ct_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `student_attens_sections_id_foreign` FOREIGN KEY (`sections_id`) REFERENCES `sections` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `student_attens_sessions_id_foreign` FOREIGN KEY (`sessions_id`) REFERENCES `sessions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `student_attens_student_infos_id_foreign` FOREIGN KEY (`student_infos_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `student_attens_updated_by_foreign` FOREIGN KEY (`updated_by`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `student_infos`
--
ALTER TABLE `student_infos`
  ADD CONSTRAINT `student_infos_created_by_foreign` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `student_infos_updated_by_foreign` FOREIGN KEY (`updated_by`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `student_infos_users_id_foreign` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `subjects`
--
ALTER TABLE `subjects`
  ADD CONSTRAINT `subjects_classes_id_foreign` FOREIGN KEY (`classes_id`) REFERENCES `classes` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `subjects_created_by_foreign` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `subjects_updated_by_foreign` FOREIGN KEY (`updated_by`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `teacher_infos`
--
ALTER TABLE `teacher_infos`
  ADD CONSTRAINT `teacher_infos_created_by_foreign` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `teacher_infos_updated_by_foreign` FOREIGN KEY (`updated_by`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `teacher_infos_users_id_foreign` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `terms`
--
ALTER TABLE `terms`
  ADD CONSTRAINT `terms_created_by_foreign` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `terms_updated_by_foreign` FOREIGN KEY (`updated_by`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
