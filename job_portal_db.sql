-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 30, 2017 at 08:23 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `job_portal_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `activities`
--

CREATE TABLE `activities` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `location` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `college` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `degree` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `field` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `grade` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `language` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `interest` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Bangladesh',
  `about_me` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `activities`
--

INSERT INTO `activities` (`id`, `user_id`, `location`, `college`, `degree`, `field`, `grade`, `language`, `interest`, `country`, `about_me`, `gender`, `created_at`, `updated_at`) VALUES
(5, 9, 'Chittagong', NULL, NULL, NULL, NULL, NULL, NULL, 'Bangladesh', NULL, NULL, '2017-05-30 11:46:18', '2017-05-30 11:46:55'),
(6, 10, 'Gazipur', 'Rajshahi University', 'Master''s', 'Computer Science', 'A+', 'English,Bangla', 'Cricket, football', 'India', NULL, NULL, '2017-05-30 22:08:21', '2017-05-31 01:04:18'),
(7, 11, 'Dhaka', 'fddfsdf', 'SSC/HSC', 'dfsdfsf', 'fsd', 'sdfsdf', 'sdfsdf', 'Australia', NULL, 'male', '2017-05-31 08:18:18', '2017-06-05 11:05:32'),
(10, 17, 'Dhaka', NULL, NULL, NULL, NULL, NULL, NULL, 'Bangladesh', NULL, NULL, '2017-09-16 07:09:31', '2017-09-16 07:09:34'),
(13, 21, 'Dhaka', 'Rajshahi University', 'Bachelor', 'Computer Science and Engg.', 'A+', 'English,Bangla', 'Cricket, football', 'Bangladesh', 'Lorem ipsum dolor sit Lorem ipsum dolor sit Lorem ipsum dolor sit Lorem ipsum dolor sit Lorem ipsum dolor sit Lorem ipsum dolor sit Lorem ipsum dolor sit', 'male', '2017-09-16 08:57:36', '2017-09-19 13:47:32'),
(14, 23, 'Dhaka', 'dsfsdf', NULL, 'sdf', 'sdf', 'sdf', 'sdf', 'India', NULL, 'male', '2017-09-16 10:23:45', '2017-09-16 10:24:39'),
(15, 24, 'Dhaka', NULL, NULL, NULL, NULL, NULL, NULL, 'Bangladesh', NULL, NULL, '2017-09-17 23:47:21', '2017-09-17 23:47:24'),
(16, 25, 'Khulna', NULL, NULL, NULL, NULL, NULL, NULL, 'Bangladesh', NULL, NULL, '2017-09-17 23:47:51', '2017-09-17 23:47:54');

-- --------------------------------------------------------

--
-- Table structure for table `attachments`
--

CREATE TABLE `attachments` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `document` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `attachments`
--

INSERT INTO `attachments` (`id`, `user_id`, `name`, `document`, `created_at`, `updated_at`) VALUES
(8, 21, 'sdfsdf', '16142874_678655619005841_8320871813056749506_n.jpg', '2017-09-16 08:58:46', '2017-09-16 08:58:46'),
(9, 21, 'Lorem ipsum dolor sit', 'add.JPG', '2017-09-19 13:50:27', '2017-09-19 13:50:27'),
(10, 21, 'ffff', 'Be my reporter in bangladesh  - Copy.docx', '2017-09-20 11:23:21', '2017-09-20 11:23:21');

-- --------------------------------------------------------

--
-- Table structure for table `companies`
--

CREATE TABLE `companies` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `industry` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `website` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `about` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `companies`
--

INSERT INTO `companies` (`id`, `user_id`, `name`, `country`, `city`, `industry`, `website`, `about`, `image`, `created_at`, `updated_at`) VALUES
(1, 13, 'First Gallary', 'Australia', 'Khulna', 'IT/Software', 'www.google.com', 'yyyyyyyyyyyyyyyy yyyyyy uuuuuuuuuu', '4.jpg', '2017-07-16 12:44:35', '2017-07-20 13:02:01'),
(2, 16, 'Hello BD', 'Bangladesh', 'Dhaka', 'IT/Software', 'sdfsdf', 'sdfsf', 'asp.PNG', '2017-09-15 15:04:11', '2017-09-15 15:05:31'),
(3, 18, 'Oasis IT', 'Bangladesh', 'Dhaka', 'IT/Software', 'www.oasis.com', 'This is a company', 'dg2.png', '2017-09-16 07:18:02', '2017-09-17 23:35:52'),
(4, 22, 'Job board', 'Bangladesh', 'Dhaka', 'Bank', NULL, NULL, NULL, '2017-09-16 09:35:55', '2017-09-16 09:35:55');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `requirement` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `industry` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `salary` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deadline` date NOT NULL,
  `career_level` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `degree` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `experience` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `language` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `skill` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `posted` tinyint(4) NOT NULL DEFAULT '0',
  `drafted` tinyint(4) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`id`, `user_id`, `title`, `description`, `requirement`, `industry`, `salary`, `city`, `country`, `deadline`, `career_level`, `degree`, `experience`, `language`, `skill`, `posted`, `drafted`, `created_at`, `updated_at`) VALUES
(10, 18, 'First job', 'dsdfskjdkjsdkfhksjdfhskdjf\r\nsdkfjskdjhf\r\nsdfkskdhflksdf', 'skdfksfjsklfjlksjf\r\nsdfsdf', 'Bank', 'Negotiable', 'Dhaka', 'Bangladesh', '2017-07-18', 'Begineer', 'Bachelor', '0 - 2 years', 'English,Bangla', 'c++, java', 1, 0, '2017-09-17 23:42:37', '2017-09-17 23:42:37'),
(11, 18, 'Fifth bird', 'sdfsdfsdfsf', 'sdfsdf', 'IT/Software', 'Negotiable', 'Dhaka', 'Bangladesh', '2017-07-18', 'Begineer', 'Bachelor', '2 - 5 years', 'English,Bangla', 'c++, java', 1, 0, '2017-09-17 23:43:04', '2017-09-17 23:43:04'),
(12, 18, 'first photo in upload', 'sfsdfsdf', 'sdfsdf', 'Multinational', 'Negotiable', 'Dhaka', 'Bangladesh', '2017-07-18', 'Begineer', 'Diploma', '0 - 2 years', 'English,Bangla', 'c++, java', 1, 0, '2017-09-17 23:43:32', '2017-09-17 23:43:32'),
(13, 18, 'Web Developer/Software Engineer', 'Lorem ipsum dolor sit Lorem ipsum dolor sit Lorem ipsum dolor sit Lorem ipsum dolor sit Lorem ipsum dolor sit Lorem ipsum dolor sit Lorem ipsum dolor sit', 'Lorem ipsum dolor sit a Lorem ipsum dolor sit Lorem ipsum dolor sit Lorem ipsum dolor sit Lorem ipsum dolor sit Lorem ipsum dolor sit Lorem ipsum dolor sit', 'IT/Software', '25001 - 50000 BDT', 'Dhaka', 'Bangladesh', '2017-07-18', 'Experienced', 'Bachelor', '2 - 5 years', 'English,Bangla', 'c++, java, PHP, Html, CSS, javascript', 1, 0, '2017-09-19 13:44:47', '2017-09-19 13:45:12'),
(14, 18, 'Software Engineer', 'Software Engineer Software Engineer Software Engineer Software Engineer Software Engineer Software Engineer Software Engineer Software Engineer', 'Software Engineer Software Engineer Software Engineer Software Engineer Software Engineer Software Engineer Software Engineer Software Engineer', 'IT/Software', '25001 - 50000 BDT', 'Rajshahi', 'Bangladesh', '2017-07-18', 'Intermediate', 'Master''s', '5 - 10 years', 'English,Bangla', 'c++, java, PHP, Html, CSS, javascript, jquery, Laravel, Asp.net mvc', 1, 0, '2017-09-20 23:18:38', '2017-09-20 23:18:38'),
(15, 18, 'Accountant', 'Accountant Accountant Accountant Accountant Accountant Accountant Accountant Accountant Accountant Accountant Accountant Accountant Accountant Accountant', 'Accountant Accountant Accountant Accountant Accountant Accountant Accountant Accountant Accountant Accountant Accountant Accountant Accountant Accountant', 'Bank', 'Negotiable', 'Rajshahi', 'Bangladesh', '2017-07-18', 'Begineer', 'Bachelor', '0 - 2 years', 'English,Bangla', 'accounting, management', 1, 0, '2017-09-20 23:19:51', '2017-09-20 23:19:51'),
(16, 18, 'CEO', 'Accountant Accountant Accountant Accountant Accountant Accountant Accountant Accountant Accountant Accountant Accountant Accountant Accountant Accountant', 'Accountant Accountant Accountant Accountant Accountant Accountant Accountant Accountant Accountant Accountant Accountant Accountant Accountant Accountant', 'Multinational', '50001 - 75000 BDT', 'Dhaka', 'Bangladesh', '2017-07-18', 'Experienced', 'Master''s', '5 - 10 years', 'English,Bangla', 'Accountant, management, coo', 1, 0, '2017-09-20 23:20:56', '2017-09-20 23:20:56');

-- --------------------------------------------------------

--
-- Table structure for table `job_user`
--

CREATE TABLE `job_user` (
  `id` int(10) UNSIGNED NOT NULL,
  `job_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `job_user`
--

INSERT INTO `job_user` (`id`, `job_id`, `user_id`, `created_at`, `updated_at`) VALUES
(8, 8, 14, '2017-07-18 12:38:35', '2017-07-18 12:38:35'),
(13, 7, 12, '2017-07-21 10:11:09', '2017-07-21 10:11:09'),
(14, 8, 12, '2017-07-21 10:11:16', '2017-07-21 10:11:16'),
(15, 8, 12, '2017-09-15 16:26:25', '2017-09-15 16:26:25'),
(16, 9, 21, '2017-09-16 10:05:11', '2017-09-16 10:05:11'),
(17, 9, 23, '2017-09-16 10:24:27', '2017-09-16 10:24:27'),
(18, 13, 21, '2017-09-19 13:45:36', '2017-09-19 13:45:36'),
(19, 9, 21, '2017-09-20 23:11:52', '2017-09-20 23:11:52');

-- --------------------------------------------------------

--
-- Table structure for table `links`
--

CREATE TABLE `links` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `url` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `links`
--

INSERT INTO `links` (`id`, `user_id`, `name`, `url`, `created_at`, `updated_at`) VALUES
(3, 21, 'Tutorials point', 'www.tutorialspoint.com', '2017-09-19 13:50:53', '2017-09-19 13:50:53');

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
(10, '2014_10_12_000000_create_users_table', 1),
(11, '2014_10_12_100000_create_password_resets_table', 1),
(12, '2017_05_29_084647_create_activities_table', 1),
(13, '2017_05_29_085529_create_works_table', 1),
(14, '2017_05_29_090300_create_skills_table', 1),
(15, '2017_05_29_090522_create_links_table', 1),
(16, '2017_05_29_090658_create_attachments_table', 1),
(17, '2017_05_29_090842_create_companies_table', 1),
(18, '2017_05_29_092418_create_jobs_table', 1),
(19, '2017_07_18_165823_create_job_user_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `skills`
--

CREATE TABLE `skills` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `level` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `experience` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `skills`
--

INSERT INTO `skills` (`id`, `user_id`, `name`, `level`, `experience`, `created_at`, `updated_at`) VALUES
(1, 11, 'ffffffffff', 'Experienced', '6 - 10 years', '2017-05-31 12:59:04', '2017-05-31 12:59:04'),
(2, 11, 'gggg', 'Begineer', '3 - 5 years', '2017-05-31 13:00:15', '2017-05-31 13:00:15'),
(15, 19, 'sdfsdf', 'Begineer', '0 - 2 years', '2017-09-16 07:28:46', '2017-09-16 07:28:46'),
(18, 23, 'sdfsf', 'Begineer', '0 - 2 years', '2017-09-16 10:24:10', '2017-09-16 10:24:10'),
(19, 21, 'PHP', 'Experienced', '3 - 5 years', '2017-09-19 13:49:44', '2017-09-19 13:49:44'),
(20, 21, 'Laravel', 'Experienced', '3 - 5 years', '2017-09-19 13:49:52', '2017-09-19 13:49:52'),
(21, 21, 'CSS', 'Experienced', '3 - 5 years', '2017-09-19 13:49:59', '2017-09-19 13:49:59');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `seeker` tinyint(4) NOT NULL DEFAULT '0',
  `employer` tinyint(4) NOT NULL DEFAULT '0',
  `admin` tinyint(4) NOT NULL DEFAULT '0',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `phone`, `image`, `seeker`, `employer`, `admin`, `remember_token`, `created_at`, `updated_at`) VALUES
(18, 'smkpobon', 'smk@gmail.com', '$2y$10$L1DZWy0CinRh575FPVR5KulqEVa10ppKTtZrrpljXTZ8LzWvuO70G', '0', NULL, 0, 1, 0, 'AlrY6lSwzMiaUtrJTMGnOtJyZESnW2cLhA8KkaYqpqj0ky8JSi1r8Lxm5gOZ', '2017-09-16 07:17:57', '2017-09-16 07:17:57'),
(21, 'karim', 'karim@gmail.com', '$2y$10$/o6FZtwdw.sP3TSeMLV/bOf5Hk6hwumTp9jfmXlzziNEGFApeRGGW', '01714601116', 'asp.PNG', 1, 0, 0, 'pXjysemDrz0LkLQxS9MiXkkvbBYOKTpZt631ASYWRiF5nt6s8iFMSs8oZm9j', '2017-09-16 08:57:31', '2017-09-19 13:40:00'),
(22, 'Admin', 'admin@gmail.com', '$2y$10$CPkfuuB09pmdcuXAztXM8O3K7mFpeROX2kP.1Zy4t.8x5PErWpR5q', '0', NULL, 0, 0, 1, 'uXSRvDUAf0VUECSXRABB40TLz1NIEaXq5aOen2gxwDUatsEnIiJHWjzcSdnG', '2017-09-16 09:35:42', '2017-09-16 09:35:42'),
(23, 'santo', 'santo@gmail.com', '$2y$10$aspWMHHNaI0eyhhAIsfHXO7jOheBEmH36ky/Lb3ATJzEz2im65qA.', '11111111', '1.jpg', 1, 0, 0, 'J0K60oKBH5tUtNUHFzrIpRKMywfFxXMi5hBRgCWNDnpG3CKiYpyUF5Ay7T1q', '2017-09-16 10:23:32', '2017-09-16 10:24:46'),
(24, 'First Gallary', 'fff@gmail.com', '$2y$10$iIBSps5gTbCGFvMzs4x7Ge1/VjUSMhUGy1/EHC4bz3MWgutAg99Nq', '2222', NULL, 1, 0, 0, 'oCSedoLT8YmD5gWktR4rS8kOSIMwD1jTx2zgH3jEEm8AuFlIk1iLtkkr9A2U', '2017-09-17 23:47:16', '2017-09-17 23:47:21'),
(25, 'Baby T-shirt', 'rrr@gmail.com', '$2y$10$ImELUtraVQvL3ctce6wjiupRFuM49hawL4ULW9s7uPuNLYH12pB82', '017654', NULL, 1, 0, 0, 'GpIRAezdiIahnwZySi9vjRJ9SvIpRN7PSBgWk8eyxzmGQII1XSWiiIo2DByQ', '2017-09-17 23:47:44', '2017-09-17 23:47:51');

-- --------------------------------------------------------

--
-- Table structure for table `works`
--

CREATE TABLE `works` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `no_experience` tinyint(4) NOT NULL DEFAULT '0',
  `job_title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `industry` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `job_role` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `activity` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `from` date DEFAULT NULL,
  `to` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `works`
--

INSERT INTO `works` (`id`, `user_id`, `no_experience`, `job_title`, `company_name`, `country`, `industry`, `job_role`, `activity`, `from`, `to`, `created_at`, `updated_at`) VALUES
(19, 11, 0, 'gggggggggg', 'gggggggg', 'USA', 'Marketing', 'Manager', 'gggggg', NULL, NULL, '2017-05-31 12:11:30', '2017-05-31 12:11:30'),
(20, 11, 0, 'hhhhhhhh', 'hhhhhhhh', 'India', 'IT/Software', 'Manager', 'hhhhhhhhhhhh', NULL, NULL, '2017-05-31 13:01:39', '2017-05-31 13:01:39'),
(27, 19, 0, 'sdfs', 'sdfs', 'Bangladesh', 'Accounting', 'Accountant', NULL, NULL, NULL, '2017-09-16 07:28:41', '2017-09-16 07:28:41'),
(30, 23, 0, 'sdfsf', 'sdf', 'Bangladesh', 'Accounting', 'Accountant', 'sf', NULL, NULL, '2017-09-16 10:24:07', '2017-09-16 10:24:07'),
(31, 21, 0, 'Web Developer', 'Oasis IT', 'Bangladesh', 'IT/Software', 'Manager', 'Lorem ipsum dolor sit Lorem ipsum dolor sit Lorem ipsum dolor sit Lorem ipsum dolor sit Lorem ipsum dolor sit Lorem ipsum dolor sit', NULL, NULL, '2017-09-19 13:49:14', '2017-09-19 13:49:14'),
(32, 21, 0, 'Project Manager', 'Oasis IT', 'Bangladesh', 'IT/Software', 'Manager', 'Lorem ipsum dolor sit Lorem ipsum dolor sit Lorem ipsum dolor sit Lorem ipsum dolor sit Lorem ipsum dolor sit Lorem ipsum dolor sit', NULL, NULL, '2017-09-19 13:49:32', '2017-09-19 13:49:32');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activities`
--
ALTER TABLE `activities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `attachments`
--
ALTER TABLE `attachments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `companies`
--
ALTER TABLE `companies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `job_user`
--
ALTER TABLE `job_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `links`
--
ALTER TABLE `links`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `skills`
--
ALTER TABLE `skills`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `works`
--
ALTER TABLE `works`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activities`
--
ALTER TABLE `activities`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `attachments`
--
ALTER TABLE `attachments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `companies`
--
ALTER TABLE `companies`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `job_user`
--
ALTER TABLE `job_user`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `links`
--
ALTER TABLE `links`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `skills`
--
ALTER TABLE `skills`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `works`
--
ALTER TABLE `works`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
