-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 02, 2023 at 08:24 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `school`
--

-- --------------------------------------------------------

--
-- Table structure for table `classes`
--

CREATE TABLE `classes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `class_name_en` varchar(255) NOT NULL,
  `class_name_bn` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `classes`
--

INSERT INTO `classes` (`id`, `class_name_en`, `class_name_bn`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Class-1', NULL, '2023-11-26 17:36:01', '2023-11-26 17:36:01', NULL),
(2, 'Class-2', NULL, '2023-11-26 17:36:12', '2023-11-26 17:36:12', NULL),
(3, 'Class-3', NULL, '2023-11-26 17:36:28', '2023-11-26 17:36:28', NULL),
(4, 'Class-4', NULL, '2023-11-26 17:36:45', '2023-11-26 17:36:45', NULL),
(5, 'Class-5', NULL, '2023-11-26 17:36:56', '2023-11-26 17:36:56', NULL),
(6, 'Class-6', NULL, '2023-11-26 17:37:08', '2023-11-26 17:37:08', NULL),
(7, 'Class-7', NULL, '2023-11-26 17:37:24', '2023-11-26 17:37:24', NULL),
(8, 'Class-8', NULL, '2023-11-26 17:39:49', '2023-11-26 17:39:49', NULL),
(9, 'Class-9', NULL, '2023-11-26 17:40:03', '2023-11-26 17:40:03', NULL),
(10, 'Class-10', NULL, '2023-11-26 17:40:17', '2023-11-26 17:40:17', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `class_groups`
--

CREATE TABLE `class_groups` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `class_id` bigint(20) UNSIGNED NOT NULL,
  `group_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `class_sections`
--

CREATE TABLE `class_sections` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `class_id` bigint(20) UNSIGNED NOT NULL,
  `section_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `class_subjects`
--

CREATE TABLE `class_subjects` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `class_id` bigint(20) UNSIGNED NOT NULL,
  `subject_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `department_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`id`, `department_name`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Teacher', '2023-11-26 17:48:13', '2023-11-26 17:48:13', NULL),
(2, 'Account', '2023-11-26 17:49:17', '2023-11-26 17:49:17', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `designations`
--

CREATE TABLE `designations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `designation_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `designations`
--

INSERT INTO `designations` (`id`, `designation_name`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Head Teacher', NULL, NULL, NULL),
(2, 'Senior Teacher', NULL, NULL, NULL),
(3, 'Junior Teacher', NULL, NULL, NULL),
(4, 'Senior Accountant', NULL, NULL, NULL),
(5, 'Junior Accountant', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `exams`
--

CREATE TABLE `exams` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `exam_name` varchar(255) DEFAULT NULL,
  `start_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `exams`
--

INSERT INTO `exams` (`id`, `exam_name`, `start_date`, `end_date`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Mid Term Exam', '2023-03-01', '2023-03-15', '2023-11-27 05:39:04', '2023-11-27 05:58:36', NULL),
(2, 'Half Yearly Exam', '2023-06-01', '2023-06-15', '2023-11-27 05:39:07', '2023-11-27 05:57:47', NULL),
(3, 'Yearly Exam', '2023-12-01', '2023-11-15', '2023-11-27 05:57:16', '2023-11-27 05:57:16', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `exam_results`
--

CREATE TABLE `exam_results` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `exam_id` bigint(20) UNSIGNED NOT NULL,
  `student_id` bigint(20) UNSIGNED NOT NULL,
  `class_id` bigint(20) UNSIGNED NOT NULL,
  `section_id` bigint(20) UNSIGNED NOT NULL,
  `subject_id` bigint(20) UNSIGNED NOT NULL,
  `session_id` bigint(20) UNSIGNED NOT NULL,
  `sub_marks` varchar(255) DEFAULT NULL,
  `ob_marks` varchar(255) DEFAULT NULL,
  `prac_marks` varchar(255) DEFAULT NULL,
  `gp` varchar(255) DEFAULT NULL,
  `gl` varchar(255) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1 COMMENT '1=>pass 0=>fail',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `exam_results`
--

INSERT INTO `exam_results` (`id`, `exam_id`, `student_id`, `class_id`, `section_id`, `subject_id`, `session_id`, `sub_marks`, `ob_marks`, `prac_marks`, `gp`, `gl`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 1, 1, 1, 1, 1, '50', '50', '50', '3.25', 'A+', 1, '2023-12-02 00:35:41', '2023-12-02 01:23:54', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `fees`
--

CREATE TABLE `fees` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fee_name` varchar(255) NOT NULL,
  `amount` decimal(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE `groups` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `group_name_en` varchar(255) DEFAULT NULL,
  `group_name_bn` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`id`, `group_name_en`, `group_name_bn`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Science', NULL, NULL, NULL, NULL),
(2, 'Business Studies', NULL, NULL, NULL, NULL),
(3, 'Humanities', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(2, '2023_11_11_110642_create_roles_table', 1),
(3, '2023_11_11_110643_create_permissions_table', 1),
(4, '2023_11_11_110645_create_departments_table', 1),
(5, '2023_11_11_110650_create_designations_table', 1),
(6, '2023_11_11_110653_create_teachers_table', 1),
(7, '2023_11_11_110654_create_users_table', 1),
(8, '2023_11_18_034418_create_classes_table', 1),
(9, '2023_11_18_185835_create_sections_table', 1),
(10, '2023_11_19_031451_create_subjects_table', 1),
(11, '2023_11_22_160923_create_schools_table', 1),
(12, '2023_11_22_175424_create_sessions_table', 1),
(13, '2023_11_23_041101_create_groups_table', 1),
(14, '2023_11_23_122324_create_class_subjects_table', 1),
(15, '2023_11_24_030014_create_periods_table', 1),
(16, '2023_11_24_033440_create_week_days_table', 1),
(17, '2023_11_24_053428_create_class_sections_table', 1),
(18, '2023_11_24_130730_create_routines_table', 1),
(19, '2023_11_25_060239_create_class_groups_table', 1),
(20, '2023_11_25_165025_create_students_table', 1),
(21, '2023_11_27_171850_create_exams_table', 1),
(22, '2023_11_29_175031_create_student_attendances_table', 1),
(23, '2023_12_01_085324_create_fees_table', 2),
(25, '2023_12_02_042318_create_exam_results_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `periods`
--

CREATE TABLE `periods` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `period_name` varchar(255) DEFAULT NULL,
  `duration` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `periods`
--

INSERT INTO `periods` (`id`, `period_name`, `duration`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, '1st Period', '9:00-9:30', '2023-11-23 09:18:48', '2023-11-23 09:18:48', NULL),
(2, '2nd Period', '9:30-10:00', '2023-11-23 09:19:23', '2023-11-23 09:28:39', NULL),
(3, '3rd Period', '10:00-10:30', '2023-11-23 09:22:30', '2023-11-23 09:22:30', NULL),
(4, 'Tiffin', '10:30-11:00', '2023-11-23 09:22:54', '2023-11-23 09:32:14', NULL),
(5, '4th Period', '11:00-11:30', '2023-11-23 09:33:15', '2023-11-23 09:33:42', NULL),
(6, '5th Period', '11:30-12:00', '2023-11-23 09:33:15', '2023-11-23 09:33:42', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(30) NOT NULL,
  `identity` varchar(30) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `identity`, `created_at`, `updated_at`) VALUES
(1, 'Super Admin', 'superadmin', '2023-11-30 03:15:31', NULL),
(2, 'Admin', 'admin', '2023-11-30 03:15:31', NULL),
(3, 'User', 'user', '2023-11-30 03:15:31', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `routines`
--

CREATE TABLE `routines` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `class_id` bigint(20) UNSIGNED NOT NULL,
  `weekday_id` bigint(20) UNSIGNED NOT NULL,
  `period_id` bigint(20) UNSIGNED NOT NULL,
  `subject_id` bigint(20) UNSIGNED NOT NULL,
  `teacher_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `schools`
--

CREATE TABLE `schools` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `school_id_en` int(11) NOT NULL,
  `school_id_bn` int(11) DEFAULT NULL,
  `school_name_en` varchar(255) NOT NULL,
  `school_name_bn` varchar(255) DEFAULT NULL,
  `school_title_en` varchar(255) NOT NULL,
  `school_title_bn` varchar(255) DEFAULT NULL,
  `school_address_en` varchar(255) NOT NULL,
  `school_address_bn` varchar(255) DEFAULT NULL,
  `logo` varchar(255) DEFAULT NULL,
  `eiin_no_en` int(11) NOT NULL,
  `eiin_no_bn` int(11) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `web_address` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `schools`
--

INSERT INTO `schools` (`id`, `school_id_en`, `school_id_bn`, `school_name_en`, `school_name_bn`, `school_title_en`, `school_title_bn`, `school_address_en`, `school_address_bn`, `logo`, `eiin_no_en`, `eiin_no_bn`, `email`, `web_address`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 101, NULL, 'ABC School & College', NULL, 'An English School', NULL, '2no gate , Chattogram,Bangladesh', NULL, '1611701234681.png', 100101, NULL, 'abc_school@gmail.com', 'www.google.com', '2023-11-28 17:11:21', '2023-11-28 17:11:21', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sections`
--

CREATE TABLE `sections` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `section_name_en` varchar(255) NOT NULL,
  `section_name_bn` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sections`
--

INSERT INTO `sections` (`id`, `section_name_en`, `section_name_bn`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Section-A', NULL, NULL, NULL, NULL),
(2, 'Section-B', NULL, NULL, NULL, NULL),
(3, 'Section-C', NULL, NULL, NULL, NULL),
(4, 'Section-D', NULL, NULL, NULL, NULL),
(5, 'Section-E', NULL, NULL, NULL, NULL),
(6, 'Section-F', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `session_year_en` varchar(255) DEFAULT NULL,
  `session_year_bn` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `session_year_en`, `session_year_bn`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, '2022-2023', NULL, NULL, NULL, NULL),
(2, '2023-2024', NULL, NULL, NULL, NULL),
(3, '2024-2025', NULL, NULL, NULL, NULL),
(4, '2025-2026', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_id` int(11) NOT NULL,
  `roll` int(11) NOT NULL,
  `first_name_en` varchar(255) NOT NULL,
  `first_name_bn` varchar(255) NOT NULL,
  `last_name_en` varchar(255) NOT NULL,
  `last_name_bn` varchar(255) NOT NULL,
  `date_of_birth` date NOT NULL,
  `place_of_birth` varchar(255) DEFAULT NULL,
  `father_name` varchar(255) NOT NULL,
  `mother_name` varchar(255) NOT NULL,
  `father_contact` int(11) NOT NULL,
  `mother_contact` int(11) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `class_id` bigint(20) UNSIGNED NOT NULL,
  `section_id` bigint(20) UNSIGNED NOT NULL,
  `contact_no_en` int(11) NOT NULL,
  `contact_no_bn` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `present_address_en` varchar(255) NOT NULL,
  `parmanent_address_en` varchar(255) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1 COMMENT '1=>active 0=>inactive',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `student_id`, `roll`, `first_name_en`, `first_name_bn`, `last_name_en`, `last_name_bn`, `date_of_birth`, `place_of_birth`, `father_name`, `mother_name`, `father_contact`, `mother_contact`, `gender`, `class_id`, `section_id`, `contact_no_en`, `contact_no_bn`, `email`, `username`, `password`, `image`, `present_address_en`, `parmanent_address_en`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 101, 1, 'kaiser', 'কাইছার', 'ahmed', 'আহমেদ', '2023-11-01', 'Chittagong', 'Morshed', 'Rahima', 123456, 12345678, 'male', 1, 1, 123456, '১২৩৪৫৬', 'kaiser@gmail.com', 'kaiser', '123', '8201701316389.jpg', 'Chittagong', 'Dhaka', 1, '2023-11-29 15:53:09', '2023-11-29 15:53:09', NULL),
(2, 102, 2, 'Raihan', 'রায়হান', 'Sazzad', 'সাজ্জাদ', '2023-11-02', 'Chittagong', 'Morshed', 'Rahima', 12345, 1234567, 'male', 2, 2, 12345, '১২৩৪৫', 'raihan@gmail.com', 'raihan', '123', '8201701316389.jpg', 'Chittagong', 'Dhaka', 1, '2023-11-29 15:53:09', '2023-11-29 15:53:09', NULL),
(3, 103, 3, 'Robiul', '', 'Hossain', '', '2023-11-02', 'Chittagong', 'Morshed', 'Rahima', 1234, 123456, 'male', 3, 3, 1234, '১২৩৪', 'robiul@gmail.com', 'robiul', '123', '8201701316389.jpg', 'Chittagong', 'Dhaka', 1, '2023-11-29 15:53:09', '2023-11-29 15:53:09', NULL),
(7, 104, 2, 'Istiak', 'ইসতিয়াক', 'ahmed', 'আহমেদ', '2023-11-01', 'Chittagong', 'Morshed', 'Rahima', 123456444, 1234567844, 'male', 1, 1, 1234444, '', 'kaiser@gmail.com', 'kaiser', '123', '8201701316389.jpg', 'Chittagong', 'Dhaka', 1, '2023-11-29 15:53:09', '2023-11-29 15:53:09', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `student_attendances`
--

CREATE TABLE `student_attendances` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_id` bigint(20) UNSIGNED NOT NULL,
  `class_id` bigint(20) UNSIGNED NOT NULL,
  `att_date` date NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1 COMMENT '1=>present 0=>absent',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `student_attendances`
--

INSERT INTO `student_attendances` (`id`, `student_id`, `class_id`, `att_date`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 3, 3, '2023-11-30', 1, '2023-11-29 17:55:20', '2023-11-29 17:55:20', NULL),
(2, 3, 3, '2023-11-30', 1, '2023-11-29 17:56:08', '2023-11-29 17:56:08', NULL),
(3, 3, 3, '2023-11-30', 1, '2023-11-29 18:02:55', '2023-11-29 18:02:55', NULL),
(4, 3, 3, '2023-11-30', 1, '2023-11-29 18:43:28', '2023-11-29 18:43:28', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE `subjects` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `subject_name_en` varchar(255) NOT NULL,
  `subject_name_bn` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`id`, `subject_name_en`, `subject_name_bn`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Bangla', NULL, NULL, NULL, NULL),
(2, 'English', NULL, NULL, NULL, NULL),
(3, 'Mathematics', NULL, NULL, NULL, NULL),
(4, 'Religion', NULL, NULL, NULL, NULL),
(5, 'Science', NULL, NULL, NULL, NULL),
(6, 'Bangladesh & Global Science', NULL, NULL, NULL, NULL),
(7, 'Physics', NULL, '2023-11-28 04:41:20', '2023-11-28 04:41:20', NULL),
(8, 'Chemistry', NULL, '2023-11-28 04:41:35', '2023-11-28 04:41:35', NULL),
(9, 'Biology', NULL, '2023-11-28 04:42:14', '2023-11-28 04:42:14', NULL),
(10, 'ICT', NULL, '2023-11-28 04:42:48', '2023-11-28 04:42:48', NULL),
(11, 'Break', NULL, '2023-11-28 04:42:59', '2023-11-28 04:42:59', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE `teachers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `teacher_id` int(11) NOT NULL,
  `role_id` bigint(20) UNSIGNED DEFAULT NULL,
  `first_name_en` varchar(255) NOT NULL,
  `first_name_bn` varchar(255) DEFAULT NULL,
  `last_name_en` varchar(255) NOT NULL,
  `last_name_bn` varchar(255) DEFAULT NULL,
  `father_name` varchar(255) DEFAULT NULL,
  `mother_name` varchar(255) DEFAULT NULL,
  `gender` varchar(255) NOT NULL,
  `date_of_birth` date NOT NULL,
  `place_of_birth` varchar(255) DEFAULT NULL,
  `subject` varchar(255) NOT NULL,
  `salary` decimal(8,2) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `contact_no_en` varchar(255) NOT NULL,
  `contact_no_bn` varchar(255) DEFAULT NULL,
  `department_id` bigint(20) UNSIGNED DEFAULT NULL,
  `designation_id` bigint(20) UNSIGNED DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `present_address` varchar(255) NOT NULL,
  `parmanent_address` varchar(255) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1 COMMENT '1=>active 0=>inactive',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `teachers`
--

INSERT INTO `teachers` (`id`, `teacher_id`, `role_id`, `first_name_en`, `first_name_bn`, `last_name_en`, `last_name_bn`, `father_name`, `mother_name`, `gender`, `date_of_birth`, `place_of_birth`, `subject`, `salary`, `email`, `contact_no_en`, `contact_no_bn`, `department_id`, `designation_id`, `image`, `present_address`, `parmanent_address`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 101, 1, 'Jasim', 'জসিম', 'Uddin', 'উদ্দিন', 'MD.ABUL KALAM', 'HOSNAARA BEGUM', 'male', '2000-01-01', 'Chittagong', 'Mathematics', '10000.00', 'jasimuddinm180@gmail.com', '123', '১২৩', 1, 1, '4901701492197.jpg', 'Chattogram', 'Dhaka', 1, '2023-11-26 17:11:55', '2023-12-01 22:43:17', NULL),
(2, 102, 2, 'Kaiser', 'কায়সার', 'Ahmed', 'আহমেদ', 'Morshed', 'Rahima', 'male', '2015-01-01', 'Chittagong', 'English', '80000.00', 'kaiser@gmail.com', '123456', '১২৩৪৫৬', NULL, NULL, '4411701232338.jpg', 'Chattogram', 'Dhaka', 1, '2023-11-26 17:35:24', '2023-11-28 16:32:18', NULL),
(3, 103, 2, 'Istiak', 'ইসতিয়াক', 'Ahmed', 'আহমেদ', 'Morshed', 'Rahima', 'male', '2023-11-01', 'Chittagong', 'English', '80000.00', 'istiak@gmail.com', '1234', '১২৩৪', 1, 2, '9211701327260.jpg', 'Chattogram', 'Dhaka', 1, '2023-11-26 18:28:11', '2023-11-29 18:54:20', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name_en` varchar(255) NOT NULL,
  `name_bn` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `contact_no_en` varchar(255) NOT NULL,
  `contact_no_bn` varchar(255) DEFAULT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `teacher_id` bigint(20) UNSIGNED NOT NULL,
  `password` varchar(255) NOT NULL,
  `language` varchar(255) NOT NULL DEFAULT 'en',
  `image` varchar(255) DEFAULT NULL,
  `full_access` tinyint(1) NOT NULL DEFAULT 0 COMMENT '1=>yes 0=>no',
  `status` int(11) NOT NULL DEFAULT 1 COMMENT '1=>active 2=>inactive',
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name_en`, `name_bn`, `email`, `contact_no_en`, `contact_no_bn`, `role_id`, `teacher_id`, `password`, `language`, `image`, `full_access`, `status`, `remember_token`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Jasim', NULL, 'jasimuddinm180@gmail.com', '123', NULL, 1, 1, '$2y$12$OuQeQpBdoQtiDaB7U6zF/.KttphSzjgtylO874oMinC1eSh383KNa', 'en', '8961701176230.png', 1, 1, NULL, '2023-11-26 17:11:55', '2023-11-28 00:57:10', NULL),
(2, 'Kaiser', NULL, 'kaiser@gmail.com', '123456', NULL, 2, 2, '$2y$12$GGncJrwahsmPgynHM55nWuDLbaKUdTrgOUPey6ACxrLS0rS7NgxLq', 'en', '5531701231693.jpg', 0, 1, NULL, '2023-11-26 17:35:25', '2023-11-28 16:21:33', NULL),
(3, 'Istiak', NULL, 'istiak@gmail.com', '1234', NULL, 2, 3, '$2y$12$1YGT3MmLqAGH2iPEhJNfruv6XFBGBF3z31cBcqWe5MdG3KFWjQgkm', 'en', NULL, 0, 1, NULL, '2023-11-26 18:28:11', '2023-11-26 19:28:58', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `week_days`
--

CREATE TABLE `week_days` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `weekday_name` varchar(255) NOT NULL,
  `isOff` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `week_days`
--

INSERT INTO `week_days` (`id`, `weekday_name`, `isOff`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Saturday', 0, '2023-11-23 09:56:24', '2023-11-23 09:56:24', NULL),
(2, 'Sunday', 0, '2023-11-23 09:56:47', '2023-11-23 10:03:16', NULL),
(3, 'Monday', 0, '2023-11-23 10:04:00', '2023-11-23 10:04:00', NULL),
(4, 'Tuesday', 0, '2023-11-23 10:04:17', '2023-11-23 10:04:17', NULL),
(5, 'Wednesday', 0, '2023-11-23 10:04:37', '2023-11-23 11:33:08', NULL),
(6, 'Thursday', 0, '2023-11-23 10:04:53', '2023-11-23 10:04:53', NULL),
(7, 'Friday', 1, '2023-11-23 10:05:13', '2023-11-23 10:05:13', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `classes`
--
ALTER TABLE `classes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `class_groups`
--
ALTER TABLE `class_groups`
  ADD PRIMARY KEY (`id`),
  ADD KEY `class_groups_class_id_index` (`class_id`),
  ADD KEY `class_groups_group_id_index` (`group_id`);

--
-- Indexes for table `class_sections`
--
ALTER TABLE `class_sections`
  ADD PRIMARY KEY (`id`),
  ADD KEY `class_sections_class_id_index` (`class_id`),
  ADD KEY `class_sections_section_id_index` (`section_id`);

--
-- Indexes for table `class_subjects`
--
ALTER TABLE `class_subjects`
  ADD PRIMARY KEY (`id`),
  ADD KEY `class_subjects_class_id_index` (`class_id`),
  ADD KEY `class_subjects_subject_id_index` (`subject_id`);

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `departments_department_name_unique` (`department_name`);

--
-- Indexes for table `designations`
--
ALTER TABLE `designations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `designations_designation_name_unique` (`designation_name`);

--
-- Indexes for table `exams`
--
ALTER TABLE `exams`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `exam_results`
--
ALTER TABLE `exam_results`
  ADD PRIMARY KEY (`id`),
  ADD KEY `exam_results_exam_id_index` (`exam_id`),
  ADD KEY `exam_results_student_id_index` (`student_id`),
  ADD KEY `exam_results_class_id_index` (`class_id`),
  ADD KEY `exam_results_section_id_index` (`section_id`),
  ADD KEY `exam_results_subject_id_index` (`subject_id`),
  ADD KEY `exam_results_session_id_index` (`session_id`);

--
-- Indexes for table `fees`
--
ALTER TABLE `fees`
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
-- Indexes for table `periods`
--
ALTER TABLE `periods`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `permissions_role_id_index` (`role_id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_unique` (`name`),
  ADD UNIQUE KEY `roles_identity_unique` (`identity`);

--
-- Indexes for table `routines`
--
ALTER TABLE `routines`
  ADD PRIMARY KEY (`id`),
  ADD KEY `routines_class_id_index` (`class_id`),
  ADD KEY `routines_weekday_id_index` (`weekday_id`),
  ADD KEY `routines_period_id_index` (`period_id`),
  ADD KEY `routines_subject_id_index` (`subject_id`),
  ADD KEY `routines_teacher_id_index` (`teacher_id`);

--
-- Indexes for table `schools`
--
ALTER TABLE `schools`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `schools_school_id_en_unique` (`school_id_en`),
  ADD UNIQUE KEY `schools_eiin_no_en_unique` (`eiin_no_en`),
  ADD UNIQUE KEY `schools_email_unique` (`email`),
  ADD UNIQUE KEY `schools_school_id_bn_unique` (`school_id_bn`),
  ADD UNIQUE KEY `schools_web_address_unique` (`web_address`);

--
-- Indexes for table `sections`
--
ALTER TABLE `sections`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `students_student_id_unique` (`student_id`),
  ADD UNIQUE KEY `students_father_contact_unique` (`father_contact`),
  ADD UNIQUE KEY `students_mother_contact_unique` (`mother_contact`),
  ADD UNIQUE KEY `students_contact_no_en_unique` (`contact_no_en`),
  ADD UNIQUE KEY `students_contact_no_bn_unique` (`contact_no_bn`),
  ADD KEY `students_class_id_index` (`class_id`),
  ADD KEY `students_section_id_index` (`section_id`);

--
-- Indexes for table `student_attendances`
--
ALTER TABLE `student_attendances`
  ADD PRIMARY KEY (`id`),
  ADD KEY `student_attendances_student_id_index` (`student_id`),
  ADD KEY `student_attendances_class_id_index` (`class_id`);

--
-- Indexes for table `subjects`
--
ALTER TABLE `subjects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `teachers_teacher_id_unique` (`teacher_id`),
  ADD UNIQUE KEY `teachers_contact_no_en_unique` (`contact_no_en`),
  ADD UNIQUE KEY `teachers_email_unique` (`email`),
  ADD UNIQUE KEY `teachers_contact_no_bn_unique` (`contact_no_bn`),
  ADD KEY `teachers_role_id_foreign` (`role_id`),
  ADD KEY `teachers_department_id_index` (`department_id`),
  ADD KEY `teachers_designation_id_index` (`designation_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_contact_no_en_unique` (`contact_no_en`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_contact_no_bn_unique` (`contact_no_bn`),
  ADD KEY `users_role_id_index` (`role_id`),
  ADD KEY `users_teacher_id_index` (`teacher_id`);

--
-- Indexes for table `week_days`
--
ALTER TABLE `week_days`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `classes`
--
ALTER TABLE `classes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `class_groups`
--
ALTER TABLE `class_groups`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `class_sections`
--
ALTER TABLE `class_sections`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `class_subjects`
--
ALTER TABLE `class_subjects`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `designations`
--
ALTER TABLE `designations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `exams`
--
ALTER TABLE `exams`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `exam_results`
--
ALTER TABLE `exam_results`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `fees`
--
ALTER TABLE `fees`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `groups`
--
ALTER TABLE `groups`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `periods`
--
ALTER TABLE `periods`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `routines`
--
ALTER TABLE `routines`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `schools`
--
ALTER TABLE `schools`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sections`
--
ALTER TABLE `sections`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `sessions`
--
ALTER TABLE `sessions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `student_attendances`
--
ALTER TABLE `student_attendances`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `subjects`
--
ALTER TABLE `subjects`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `teachers`
--
ALTER TABLE `teachers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `week_days`
--
ALTER TABLE `week_days`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `class_groups`
--
ALTER TABLE `class_groups`
  ADD CONSTRAINT `class_groups_class_id_foreign` FOREIGN KEY (`class_id`) REFERENCES `classes` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `class_groups_group_id_foreign` FOREIGN KEY (`group_id`) REFERENCES `groups` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `class_sections`
--
ALTER TABLE `class_sections`
  ADD CONSTRAINT `class_sections_class_id_foreign` FOREIGN KEY (`class_id`) REFERENCES `classes` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `class_sections_section_id_foreign` FOREIGN KEY (`section_id`) REFERENCES `sections` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `class_subjects`
--
ALTER TABLE `class_subjects`
  ADD CONSTRAINT `class_subjects_class_id_foreign` FOREIGN KEY (`class_id`) REFERENCES `classes` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `class_subjects_subject_id_foreign` FOREIGN KEY (`subject_id`) REFERENCES `subjects` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `exam_results`
--
ALTER TABLE `exam_results`
  ADD CONSTRAINT `exam_results_class_id_foreign` FOREIGN KEY (`class_id`) REFERENCES `classes` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `exam_results_exam_id_foreign` FOREIGN KEY (`exam_id`) REFERENCES `exams` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `exam_results_section_id_foreign` FOREIGN KEY (`section_id`) REFERENCES `sections` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `exam_results_session_id_foreign` FOREIGN KEY (`session_id`) REFERENCES `sessions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `exam_results_student_id_foreign` FOREIGN KEY (`student_id`) REFERENCES `students` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `exam_results_subject_id_foreign` FOREIGN KEY (`subject_id`) REFERENCES `subjects` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `permissions`
--
ALTER TABLE `permissions`
  ADD CONSTRAINT `permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `routines`
--
ALTER TABLE `routines`
  ADD CONSTRAINT `routines_class_id_foreign` FOREIGN KEY (`class_id`) REFERENCES `classes` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `routines_period_id_foreign` FOREIGN KEY (`period_id`) REFERENCES `periods` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `routines_subject_id_foreign` FOREIGN KEY (`subject_id`) REFERENCES `subjects` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `routines_teacher_id_foreign` FOREIGN KEY (`teacher_id`) REFERENCES `teachers` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `routines_weekday_id_foreign` FOREIGN KEY (`weekday_id`) REFERENCES `week_days` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `students`
--
ALTER TABLE `students`
  ADD CONSTRAINT `students_class_id_foreign` FOREIGN KEY (`class_id`) REFERENCES `classes` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `students_section_id_foreign` FOREIGN KEY (`section_id`) REFERENCES `sections` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `student_attendances`
--
ALTER TABLE `student_attendances`
  ADD CONSTRAINT `student_attendances_class_id_foreign` FOREIGN KEY (`class_id`) REFERENCES `classes` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `student_attendances_student_id_foreign` FOREIGN KEY (`student_id`) REFERENCES `students` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `teachers`
--
ALTER TABLE `teachers`
  ADD CONSTRAINT `teachers_department_id_foreign` FOREIGN KEY (`department_id`) REFERENCES `departments` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `teachers_designation_id_foreign` FOREIGN KEY (`designation_id`) REFERENCES `designations` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `teachers_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `users_teacher_id_foreign` FOREIGN KEY (`teacher_id`) REFERENCES `teachers` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
