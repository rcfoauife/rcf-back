-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 21, 2017 at 10:19 PM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rcfoau`
--

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'African Languages and Literature', '2017-01-17 05:16:21', '2017-01-17 05:16:21'),
(2, 'Dramatic Arts', '2017-01-17 05:16:21', '2017-01-17 05:16:21'),
(3, 'Fine and Applied Arts', '2017-01-17 05:16:21', '2017-01-17 05:16:21'),
(4, 'Foreign Languages', '2017-01-17 05:16:21', '2017-01-17 05:16:21'),
(5, 'History', '2017-01-17 05:16:21', '2017-01-17 05:16:21'),
(6, 'Linguistics', '2017-01-17 05:16:21', '2017-01-17 05:16:21'),
(7, 'Literature in English', '2017-01-17 05:16:21', '2017-01-17 05:16:21'),
(8, 'Music', '2017-01-17 05:16:21', '2017-01-17 05:16:21'),
(9, 'Philosophy', '2017-01-17 05:16:21', '2017-01-17 05:16:21'),
(10, 'Psychology', '2017-01-17 05:16:21', '2017-01-17 05:16:21'),
(11, 'Religious Studies', '2017-01-17 05:16:21', '2017-01-17 05:16:21'),
(12, 'Sociology and Anthropology', '2017-01-17 05:16:21', '2017-01-17 05:16:21'),
(13, 'Biochemistry', '2017-01-17 05:16:22', '2017-01-17 05:16:22'),
(14, 'Botany', '2017-01-17 05:16:22', '2017-01-17 05:16:22'),
(15, 'Chemical Pathology', '2017-01-17 05:16:22', '2017-01-17 05:16:22'),
(16, 'Chemistry', '2017-01-17 05:16:22', '2017-01-17 05:16:22'),
(17, 'Geology', '2017-01-17 05:16:22', '2017-01-17 05:16:22'),
(18, 'Mathematics', '2017-01-17 05:16:22', '2017-01-17 05:16:22'),
(19, 'Microbiology', '2017-01-17 05:16:22', '2017-01-17 05:16:22'),
(20, 'Physics', '2017-01-17 05:16:22', '2017-01-17 05:16:22'),
(21, 'Zoology', '2017-01-17 05:16:22', '2017-01-17 05:16:22'),
(22, 'Medical Rehabilitation', '2017-01-17 05:16:22', '2017-01-17 05:16:22'),
(23, 'Management and Accounting', '2017-01-17 05:16:22', '2017-01-17 05:16:22'),
(24, 'Public Administration', '2017-01-17 05:16:22', '2017-01-17 05:16:22'),
(25, 'Agricultural Extension and Rural Sociology', '2017-01-17 05:16:22', '2017-01-17 05:16:22'),
(26, 'Animal Science', '2017-01-17 05:16:22', '2017-01-17 05:16:22'),
(27, 'Crop production', '2017-01-17 05:16:22', '2017-01-17 05:16:22'),
(28, 'Food Nutrition and Consumer Sciences', '2017-01-17 05:16:22', '2017-01-17 05:16:22'),
(29, 'Plant Science', '2017-01-17 05:16:22', '2017-01-17 05:16:22'),
(30, 'Soil Science', '2017-01-17 05:16:22', '2017-01-17 05:16:22'),
(31, 'Educational Administration and Planning', '2017-01-17 05:16:22', '2017-01-17 05:16:22'),
(32, 'Educational Foundation and Counseling', '2017-01-17 05:16:22', '2017-01-17 05:16:22'),
(33, 'Educational Technology', '2017-01-17 05:16:22', '2017-01-17 05:16:22'),
(34, 'English Language', '2017-01-17 05:16:22', '2017-01-17 05:16:22'),
(35, 'pharmarcy', '2017-01-17 05:16:23', '2017-01-17 05:16:23'),
(36, 'Architecture', '2017-01-17 05:16:23', '2017-01-17 05:16:23'),
(37, 'Building', '2017-01-17 05:16:23', '2017-01-17 05:16:23'),
(38, 'Estate Management', '2017-01-17 05:16:23', '2017-01-17 05:16:23'),
(39, 'Quantity Surveying', '2017-01-17 05:16:23', '2017-01-17 05:16:23'),
(40, 'Urban and Regional Planning', '2017-01-17 05:16:23', '2017-01-17 05:16:23'),
(41, 'Agricultural and Environmental Engineering', '2017-01-17 05:16:23', '2017-01-17 05:16:23'),
(42, 'Chemical Engineering', '2017-01-17 05:16:23', '2017-01-17 05:16:23'),
(43, 'Civil Engineering', '2017-01-17 05:16:23', '2017-01-17 05:16:23'),
(44, 'Computer Science and Engineering', '2017-01-17 05:16:23', '2017-01-17 05:16:23'),
(45, 'Food Science and Technology', '2017-01-17 05:16:23', '2017-01-17 05:16:23'),
(46, 'Mechanical Engineering', '2017-01-17 05:16:23', '2017-01-17 05:16:23'),
(47, 'Materials Science & Engineering', '2017-01-17 05:16:23', '2017-01-17 05:16:23'),
(48, 'Electronic and Electrical Engineering', '2017-01-17 05:16:23', '2017-01-17 05:16:23'),
(49, 'Demography and Social Statistics', '2017-01-17 05:16:23', '2017-01-17 05:16:23'),
(50, 'Economics', '2017-01-17 05:16:23', '2017-01-17 05:16:23'),
(51, 'Geography', '2017-01-17 05:16:23', '2017-01-17 05:16:23'),
(52, 'Political Science', '2017-01-17 05:16:23', '2017-01-17 05:16:23');

-- --------------------------------------------------------

--
-- Table structure for table `fileentries`
--

CREATE TABLE `fileentries` (
  `id` int(10) UNSIGNED NOT NULL,
  `filename` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `mime` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `original_filename` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `fileentries`
--

INSERT INTO `fileentries` (`id`, `filename`, `mime`, `original_filename`, `created_at`, `updated_at`) VALUES
(3, 'Communion_service_1', 'audio/mp3', 'NewsTheme2.mp3', '2017-01-10 14:27:40', '2017-01-10 14:27:40'),
(4, 'sunday_servie', 'audio/mp3', 'Instead of giving me up.mp3', '2017-02-04 07:48:37', '2017-02-04 07:48:37');

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE `groups` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'NON-WORKER', '2017-02-03 13:00:00', '2016-11-17 08:00:00'),
(2, 'ACADEMIC', '2017-01-15 16:11:31', '2017-01-15 16:11:31'),
(3, 'BIBLE STUDY', '2017-01-15 16:11:31', '2017-01-15 16:11:31'),
(4, 'DRAMA(SMILES)', '2017-01-15 16:11:31', '2017-01-15 16:11:31'),
(5, 'EVANGELISM', '2017-01-15 16:11:31', '2017-01-15 16:11:31'),
(6, 'FOLLOW-UP & COUNSELLING', '2017-01-15 16:11:31', '2017-01-15 16:11:31'),
(7, 'PEARL OF GRACE', '2017-01-15 16:11:31', '2017-01-15 16:11:31'),
(8, 'LIBRARY', '2017-01-15 16:11:31', '2017-01-15 16:11:31'),
(9, 'MUSIC(CGC)', '2017-01-15 16:11:31', '2017-01-15 16:11:31'),
(10, 'PRAYER', '2017-01-15 16:11:31', '2017-01-15 16:11:31'),
(11, 'PUBLICITY', '2017-01-15 16:11:31', '2017-01-15 16:11:31'),
(12, 'ORGANIZING', '2017-01-15 16:11:31', '2017-01-15 16:11:31'),
(13, 'TMC', '2017-01-15 16:11:32', '2017-01-15 16:11:32'),
(14, 'USHERING', '2017-01-15 16:11:32', '2017-01-15 16:11:32'),
(15, 'WELFARE', '2017-01-15 16:11:32', '2017-01-15 16:11:32');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(5, '2014_10_12_000000_create_users_table', 1),
(6, '2014_10_12_100000_create_password_resets_table', 1),
(7, '2017_01_04_144459_create_fileentries_table', 2),
(8, '2017_01_05_203157_posts', 3),
(9, '2017_01_05_203935_paragraphs', 4),
(10, '2017_01_10_154811_create-roles', 5),
(11, '2017_01_10_154950_create-profiles', 5),
(12, '2017_01_10_155029_create-role-uesr', 5),
(13, '2017_01_14_085355_years', 5),
(14, '2017_01_14_090329_groups', 5),
(15, '2017_01_16_030605_profiles', 6),
(16, '2017_01_16_033829_profile', 7),
(17, '2017_01_16_205930_departments', 8);

-- --------------------------------------------------------

--
-- Table structure for table `paragraphs`
--

CREATE TABLE `paragraphs` (
  `id` int(10) UNSIGNED NOT NULL,
  `postId` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `paragraph` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `paragraphs`
--

INSERT INTO `paragraphs` (`id`, `postId`, `created_at`, `updated_at`, `paragraph`) VALUES
(2, 2, '2017-02-18 06:10:44', '2017-02-18 06:10:44', 'anoisdjia koni akwjmn klma lalkejro aoklpma kr vkanojpan kakndajo;ld');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `created_at`, `updated_at`) VALUES
(2, 'What is the event of life', '2017-02-18 06:10:43', '2017-02-18 06:10:43');

-- --------------------------------------------------------

--
-- Table structure for table `profiles`
--

CREATE TABLE `profiles` (
  `id` int(10) UNSIGNED NOT NULL,
  `phone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `address` text COLLATE utf8_unicode_ci NOT NULL,
  `sex` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `birth` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `group_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `Department` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `YearOfGraduation` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `alumni` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `grad_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `profiles`
--

INSERT INTO `profiles` (`id`, `phone`, `address`, `sex`, `description`, `birth`, `group_id`, `user_id`, `Department`, `YearOfGraduation`, `alumni`, `created_at`, `updated_at`, `grad_id`) VALUES
(1, '08135209769', 'Fajuy hall, obafemi awolowo unversity', 'male', NULL, '24-01', 3, 18, 'Computer Science and Engineering', '2015/2016', 0, '2017-01-18 08:02:45', '2017-01-18 08:02:45', 28),
(2, '08062321803', '33 odunyi avenue', 'male', NULL, '09-01', 12, 19, 'Philosophy', '2017/2018', 1, '2017-01-23 03:35:07', '2017-01-23 03:35:07', 30),
(3, '08135209769', 'Fajuy hall, obafemi awolowo unversity', 'male', NULL, '07-02', 1, 20, 'Mechanical Engineering', '2010/2011', 0, '2017-02-05 12:05:49', '2017-02-05 12:05:49', 23);

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'blogger', '2017-01-16 08:56:32', '2017-01-16 08:56:32'),
(2, 'uploads', '2017-01-16 08:56:32', '2017-01-16 08:56:32'),
(3, 'admin', '2017-01-16 08:56:32', '2017-01-16 08:56:32'),
(4, 'subgroup', '2017-01-16 08:56:32', '2017-01-16 08:56:32'),
(5, 'excos', '2017-01-16 08:56:32', '2017-01-16 08:56:32');

-- --------------------------------------------------------

--
-- Table structure for table `role_user`
--

CREATE TABLE `role_user` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `role_user`
--

INSERT INTO `role_user` (`id`, `user_id`, `role_id`, `created_at`, `updated_at`) VALUES
(20, 19, 1, '2017-02-18 06:12:21', '2017-02-18 06:12:21'),
(21, 19, 2, '2017-02-18 06:12:21', '2017-02-18 06:12:21');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(18, 'Akinmodun sanmi', 'sakinmodun@gmail.com', '$2y$10$yOI583q0ZXsSGNCocjELsO/9rhUQVh.z8cZpBF00VR2Q2eunttAii', NULL, '2017-01-18 08:02:45', '2017-01-18 08:02:45'),
(19, 'ade wale', 'wale@ibedc.com', '$2y$10$VWJbW7oWGnk/VmLLR2mDDeWV9isZagBS9T8yPclee5hh/Wvi08UTe', NULL, '2017-01-23 03:35:06', '2017-01-23 03:35:06'),
(20, 'dash jghg', 'dammieola35@yahoo.com', '$2y$10$yPzFGDPwkoWeOz5ZZtU2V.oqX4I19EpHfr9kDVO4aiXCiHkEiTQKa', NULL, '2017-02-05 12:05:49', '2017-02-05 12:05:49');

-- --------------------------------------------------------

--
-- Table structure for table `years`
--

CREATE TABLE `years` (
  `id` int(10) UNSIGNED NOT NULL,
  `session` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `current` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `years`
--

INSERT INTO `years` (`id`, `session`, `created_at`, `updated_at`, `current`) VALUES
(3, '1990/1991', '2017-01-15 15:51:42', '2017-01-15 15:51:42', ''),
(4, '1991/1992', '2017-01-15 15:51:42', '2017-01-15 15:51:42', ''),
(5, '1992/1993', '2017-01-15 15:51:42', '2017-01-15 15:51:42', ''),
(6, '1993/1994', '2017-01-15 15:51:42', '2017-01-15 15:51:42', ''),
(7, '1994/1995', '2017-01-15 15:51:42', '2017-01-15 15:51:42', ''),
(8, '1995/1996', '2017-01-15 15:51:43', '2017-01-15 15:51:43', ''),
(9, '1996/1997', '2017-01-15 15:51:43', '2017-01-15 15:51:43', ''),
(10, '1997/1998', '2017-01-15 15:51:43', '2017-01-15 15:51:43', ''),
(11, '1998/1999', '2017-01-15 15:51:43', '2017-01-15 15:51:43', ''),
(12, '1999/2000', '2017-01-15 15:51:43', '2017-01-15 15:51:43', ''),
(13, '2000/2001', '2017-01-15 15:51:43', '2017-01-15 15:51:43', ''),
(14, '2001/2002', '2017-01-15 15:51:43', '2017-01-15 15:51:43', ''),
(15, '2002/2003', '2017-01-15 15:51:43', '2017-01-15 15:51:43', ''),
(16, '2003/2004', '2017-01-15 15:51:43', '2017-01-15 15:51:43', ''),
(17, '2004/2005', '2017-01-15 15:51:43', '2017-01-15 15:51:43', ''),
(18, '2005/2006', '2017-01-15 15:51:43', '2017-01-15 15:51:43', ''),
(19, '2006/2007', '2017-01-15 15:51:43', '2017-01-15 15:51:43', ''),
(20, '2007/2008', '2017-01-15 15:51:43', '2017-01-15 15:51:43', ''),
(21, '2008/2009', '2017-01-15 15:51:43', '2017-01-15 15:51:43', ''),
(22, '2009/2010', '2017-01-15 15:51:43', '2017-01-15 15:51:43', ''),
(23, '2010/2011', '2017-01-15 15:51:43', '2017-01-15 15:51:43', ''),
(24, '2011/2012', '2017-01-15 15:51:43', '2017-01-15 15:51:43', ''),
(25, '2012/2013', '2017-01-15 15:51:43', '2017-01-15 15:51:43', ''),
(26, '2013/2014', '2017-01-15 15:51:43', '2017-01-15 15:51:43', ''),
(27, '2014/2015', '2017-01-15 15:51:43', '2017-01-15 15:51:43', ''),
(28, '2015/2016', '2017-01-15 15:51:43', '2017-01-18 07:54:21', 'now'),
(29, '2016/2017', '2017-01-15 15:51:43', '2017-01-15 15:51:43', ''),
(30, '2017/2018', '2017-01-15 15:51:43', '2017-01-15 15:51:43', ''),
(31, '2018/2019', '2017-01-15 15:51:44', '2017-01-15 15:51:44', ''),
(32, '2019/2020', '2017-01-15 15:51:44', '2017-01-15 15:51:44', ''),
(33, '2020/2021', '2017-01-15 15:51:44', '2017-01-15 15:51:44', ''),
(34, '2021/2022', '2017-01-15 15:51:44', '2017-01-15 15:51:44', ''),
(35, '2022/2023', '2017-01-15 15:51:44', '2017-01-15 15:51:44', ''),
(36, '2023/2024', '2017-01-15 15:51:44', '2017-01-15 15:51:44', ''),
(37, '2024/2025', '2017-01-15 15:51:44', '2017-01-15 15:51:44', ''),
(38, '2025/2026', '2017-01-15 15:51:44', '2017-01-15 15:51:44', ''),
(39, '2026/2027', '2017-01-15 15:51:44', '2017-01-15 15:51:44', ''),
(40, '2027/2028', '2017-01-15 15:51:44', '2017-01-15 15:51:44', ''),
(41, '2028/2029', '2017-01-15 15:51:44', '2017-01-15 15:51:44', ''),
(42, '2029/2030', '2017-01-15 15:51:44', '2017-01-15 15:51:44', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fileentries`
--
ALTER TABLE `fileentries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `paragraphs`
--
ALTER TABLE `paragraphs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `paragraphs_postid_foreign` (`postId`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `profiles`
--
ALTER TABLE `profiles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `profiles_group_id_index` (`group_id`),
  ADD KEY `profiles_user_id_index` (`user_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role_user`
--
ALTER TABLE `role_user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `role_user_user_id_index` (`user_id`),
  ADD KEY `role_user_role_id_index` (`role_id`) USING BTREE;

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `years`
--
ALTER TABLE `years`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;
--
-- AUTO_INCREMENT for table `fileentries`
--
ALTER TABLE `fileentries`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `groups`
--
ALTER TABLE `groups`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `paragraphs`
--
ALTER TABLE `paragraphs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `profiles`
--
ALTER TABLE `profiles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `role_user`
--
ALTER TABLE `role_user`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `years`
--
ALTER TABLE `years`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `paragraphs`
--
ALTER TABLE `paragraphs`
  ADD CONSTRAINT `paragraphs_postid_foreign` FOREIGN KEY (`postId`) REFERENCES `posts` (`id`);

--
-- Constraints for table `profiles`
--
ALTER TABLE `profiles`
  ADD CONSTRAINT `profiles_group_id_foreign` FOREIGN KEY (`group_id`) REFERENCES `groups` (`id`) ON DELETE NO ACTION,
  ADD CONSTRAINT `profiles_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION;

--
-- Constraints for table `role_user`
--
ALTER TABLE `role_user`
  ADD CONSTRAINT `role_user_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE NO ACTION,
  ADD CONSTRAINT `role_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
