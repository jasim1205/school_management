-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 30, 2023 at 05:55 AM
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
-- Table structure for table `admit_cards`
--

CREATE TABLE `admit_cards` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(1, 'Class-1', 'ক্লাস-১', '2023-11-26 17:36:01', '2023-12-15 22:40:11', NULL),
(2, 'Class-2', NULL, '2023-11-26 17:36:12', '2023-11-26 17:36:12', NULL),
(3, 'Class-3', NULL, '2023-11-26 17:36:28', '2023-11-26 17:36:28', NULL),
(4, 'Class-4', NULL, '2023-11-26 17:36:45', '2023-11-26 17:36:45', NULL),
(5, 'Class-5', NULL, '2023-11-26 17:36:56', '2023-11-26 17:36:56', NULL),
(6, 'Class-6', NULL, '2023-11-26 17:37:08', '2023-11-26 17:37:08', NULL),
(7, 'Class-7', NULL, '2023-11-26 17:37:24', '2023-11-26 17:37:24', NULL),
(8, 'Class-8', NULL, '2023-11-26 17:39:49', '2023-11-26 17:39:49', NULL),
(9, 'Class-9', NULL, '2023-11-26 17:40:03', '2023-11-26 17:40:03', NULL),
(10, 'Class-10', NULL, '2023-11-26 17:40:17', '2023-11-26 17:40:17', NULL),
(11, 'Class-11', NULL, '2023-12-03 10:52:27', '2023-12-20 23:04:05', NULL);

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

--
-- Dumping data for table `class_subjects`
--

INSERT INTO `class_subjects` (`id`, `class_id`, `subject_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 1, '2023-12-05 01:00:33', '2023-12-05 01:00:33', NULL),
(2, 1, 2, '2023-12-05 01:00:33', '2023-12-05 01:00:33', NULL),
(3, 1, 3, '2023-12-05 01:00:34', '2023-12-05 01:00:34', NULL),
(4, 1, 4, '2023-12-05 01:00:34', '2023-12-05 01:00:34', NULL),
(5, 1, 5, '2023-12-05 01:00:34', '2023-12-05 01:00:34', NULL);

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
(1, 'Mid Term Exam-23', '2023-03-01', '2023-03-15', '2023-11-27 05:39:04', '2023-12-16 22:15:39', NULL),
(2, 'Half Yearly Exam-23', '2023-06-01', '2023-06-15', '2023-11-27 05:39:07', '2023-12-16 22:15:46', NULL),
(3, 'Yearly Exam-23', '2023-12-01', '2023-11-15', '2023-11-27 05:57:16', '2023-12-16 22:15:53', NULL),
(5, 'Class Test-23', NULL, NULL, '2023-12-20 23:02:42', '2023-12-20 23:02:42', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `exam_results`
--

CREATE TABLE `exam_results` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `exam_id` bigint(20) UNSIGNED NOT NULL,
  `student_id` bigint(20) UNSIGNED NOT NULL,
  `class_id` bigint(20) UNSIGNED NOT NULL,
  `subject_id` bigint(20) UNSIGNED NOT NULL,
  `session_id` bigint(20) UNSIGNED NOT NULL,
  `sub_marks` decimal(3,1) DEFAULT NULL,
  `ob_marks` decimal(3,1) DEFAULT NULL,
  `prac_marks` decimal(3,1) DEFAULT NULL,
  `total` decimal(3,1) DEFAULT NULL,
  `gp` decimal(3,2) DEFAULT NULL,
  `gl` varchar(255) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1 COMMENT '1=>pass 0=>fail',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `exam_results`
--

INSERT INTO `exam_results` (`id`, `exam_id`, `student_id`, `class_id`, `subject_id`, `session_id`, `sub_marks`, `ob_marks`, `prac_marks`, `total`, `gp`, `gl`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 3, 1, 1, 1, 1, '40.0', '30.0', NULL, '70.0', '4.00', 'A', 1, '2023-12-12 07:36:38', '2023-12-12 07:36:38', NULL),
(2, 3, 1, 1, 2, 1, '80.0', NULL, NULL, '80.0', '5.00', 'A+', 1, '2023-12-12 07:36:38', '2023-12-12 07:36:38', NULL),
(3, 3, 1, 1, 3, 1, '55.0', '25.0', NULL, '80.0', '5.00', 'A+', 1, '2023-12-12 07:36:38', '2023-12-12 07:36:38', NULL),
(4, 3, 1, 1, 4, 1, '50.0', '25.0', NULL, '75.0', '4.00', 'A', 1, '2023-12-12 07:36:38', '2023-12-12 07:36:38', NULL),
(5, 3, 1, 1, 5, 1, '55.0', '25.0', NULL, '80.0', '5.00', 'A+', 1, '2023-12-12 07:36:38', '2023-12-12 07:36:38', NULL),
(6, 3, 1, 1, 6, 1, '55.0', '25.0', NULL, '80.0', '5.00', 'A+', 1, '2023-12-12 07:36:38', '2023-12-12 07:36:38', NULL),
(7, 3, 1, 1, 7, 1, '40.0', '20.0', '20.0', '80.0', '5.00', 'A+', 1, '2023-12-12 07:36:38', '2023-12-12 07:36:38', NULL),
(8, 3, 1, 1, 8, 1, '35.0', '25.0', '15.0', '75.0', '4.00', 'A', 1, '2023-12-12 07:36:38', '2023-12-12 07:36:38', NULL),
(9, 3, 1, 1, 9, 1, '35.0', '25.0', '15.0', '75.0', '4.00', 'A', 1, '2023-12-12 07:36:38', '2023-12-12 07:36:38', NULL),
(10, 3, 1, 1, 10, 1, '40.0', '25.0', '20.0', '85.0', '5.00', 'A+', 1, '2023-12-12 07:36:38', '2023-12-12 07:36:38', NULL),
(11, 3, 3, 2, 1, 1, '50.0', '30.0', NULL, '80.0', '5.00', 'A+', 1, '2023-12-12 07:39:52', '2023-12-12 07:39:52', NULL),
(12, 3, 3, 2, 2, 1, '85.0', NULL, NULL, '85.0', '5.00', 'A+', 1, '2023-12-12 07:39:52', '2023-12-12 07:39:52', NULL),
(13, 3, 3, 2, 3, 1, '45.0', '25.0', NULL, '70.0', '4.00', 'A', 1, '2023-12-12 07:39:52', '2023-12-12 07:39:52', NULL),
(14, 3, 3, 2, 4, 1, '55.0', '25.0', NULL, '80.0', '5.00', 'A+', 1, '2023-12-12 07:39:52', '2023-12-12 07:39:52', NULL),
(15, 3, 3, 2, 5, 1, '55.0', '25.0', NULL, '80.0', '5.00', 'A+', 1, '2023-12-12 07:39:52', '2023-12-12 07:39:52', NULL),
(16, 3, 3, 2, 6, 1, '50.0', '25.0', NULL, '75.0', '4.00', 'A', 1, '2023-12-12 07:39:52', '2023-12-12 07:39:52', NULL),
(17, 3, 3, 2, 7, 1, '40.0', '20.0', '20.0', '80.0', '5.00', 'A+', 1, '2023-12-12 07:39:52', '2023-12-12 07:39:52', NULL),
(18, 3, 3, 2, 8, 1, '40.0', '25.0', '15.0', '80.0', '5.00', 'A+', 1, '2023-12-12 07:39:52', '2023-12-12 07:39:52', NULL),
(19, 3, 3, 2, 9, 1, '35.0', '30.0', '20.0', '85.0', '5.00', 'A+', 1, '2023-12-12 07:39:52', '2023-12-12 07:39:52', NULL),
(20, 3, 3, 2, 10, 1, '10.0', '20.0', '20.0', '50.0', '3.00', 'B', 1, '2023-12-12 07:39:52', '2023-12-12 07:39:52', NULL),
(21, 3, 12, 3, 1, 1, '50.0', '30.0', NULL, '80.0', '5.00', 'A+', 1, '2023-12-12 07:41:34', '2023-12-12 07:41:34', NULL),
(22, 3, 12, 3, 2, 1, '85.0', NULL, NULL, '85.0', '5.00', 'A+', 1, '2023-12-12 07:41:34', '2023-12-12 07:41:34', NULL),
(23, 3, 12, 3, 3, 1, '55.0', '25.0', NULL, '80.0', '5.00', 'A+', 1, '2023-12-12 07:41:34', '2023-12-12 07:41:34', NULL),
(24, 3, 12, 3, 4, 1, '55.0', '25.0', NULL, '80.0', '5.00', 'A+', 1, '2023-12-12 07:41:34', '2023-12-12 07:41:34', NULL),
(25, 3, 12, 3, 5, 1, '55.0', '20.0', NULL, '75.0', '4.00', 'A', 1, '2023-12-12 07:41:34', '2023-12-12 07:41:34', NULL),
(26, 3, 12, 3, 6, 1, '55.0', '25.0', NULL, '80.0', '5.00', 'A+', 1, '2023-12-12 07:41:34', '2023-12-12 07:41:34', NULL),
(27, 3, 12, 3, 7, 1, '40.0', '20.0', '20.0', '80.0', '5.00', 'A+', 1, '2023-12-12 07:41:34', '2023-12-12 07:41:34', NULL),
(28, 3, 12, 3, 8, 1, '35.0', '30.0', '25.0', '90.0', '5.00', 'A+', 1, '2023-12-12 07:41:34', '2023-12-12 07:41:34', NULL),
(29, 3, 12, 3, 9, 1, '35.0', '20.0', '20.0', '75.0', '4.00', 'A', 1, '2023-12-12 07:41:34', '2023-12-12 07:41:34', NULL),
(30, 3, 12, 3, 10, 1, '20.0', '20.0', '20.0', '60.0', '3.50', 'A-', 1, '2023-12-12 07:41:34', '2023-12-12 07:41:34', NULL);

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

--
-- Dumping data for table `fees`
--

INSERT INTO `fees` (`id`, `fee_name`, `amount`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Mid Term Exam Fee', '500.00', '2023-12-03 06:21:30', '2023-12-03 06:22:32', NULL),
(2, 'Half Yearly Exam Fee', '1000.00', '2023-12-03 06:21:50', '2023-12-03 06:22:24', NULL),
(3, 'Yearly Exam Fee', '1500.00', '2023-12-03 06:22:12', '2023-12-03 06:22:12', NULL),
(4, 'Class Test', '200.00', '2023-12-03 06:44:04', '2023-12-03 06:44:04', NULL),
(5, 'Hostel Fees', '2000.00', '2023-12-03 06:44:29', '2023-12-03 06:44:29', NULL),
(6, 'Admission Fee', '10000.00', '2023-12-05 01:08:16', '2023-12-05 01:08:16', NULL),
(7, 'Monthly Fee', '500.00', '2023-12-05 01:08:34', '2023-12-05 01:08:34', NULL),
(8, 'Transport', '2000.00', '2023-12-05 01:08:48', '2023-12-05 01:08:48', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `final_results`
--

CREATE TABLE `final_results` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `class_id` bigint(20) UNSIGNED NOT NULL,
  `exam_id` bigint(20) UNSIGNED NOT NULL,
  `student_id` bigint(20) UNSIGNED NOT NULL,
  `total_marks` int(11) NOT NULL,
  `total_gp` int(11) DEFAULT NULL,
  `total_gl` varchar(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `final_results`
--

INSERT INTO `final_results` (`id`, `class_id`, `exam_id`, `student_id`, `total_marks`, `total_gp`, `total_gl`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 1, 1, 400, 425, 'A', '2023-12-02 10:48:30', '2023-12-02 11:55:23', NULL),
(2, 2, 1, 2, 400, 425, 'B', '2023-12-02 11:36:40', '2023-12-02 11:56:42', NULL),
(3, 3, 1, 13, 400, NULL, 'A', '2023-12-07 10:57:34', '2023-12-07 10:57:34', NULL);

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
(26, '2023_12_02_122521_create_teacher_attendances_table', 4),
(28, '2023_12_02_143206_create_final_results_table', 5),
(29, '2023_12_02_180053_create_student_fees_table', 6),
(34, '2023_12_03_123300_create_student_fee_payments_table', 8),
(35, '2023_12_03_062207_create_student_fee_details_table', 9),
(37, '2023_12_02_042318_create_exam_results_table', 10),
(38, '2023_12_16_060419_create_admit_cards_table', 11),
(39, '2023_12_18_065238_create_profiles_table', 11),
(40, '2023_12_28_180028_create_notice_boards_table', 11);

-- --------------------------------------------------------

--
-- Table structure for table `notice_boards`
--

CREATE TABLE `notice_boards` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `notice` varchar(255) DEFAULT NULL,
  `start_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `notice_boards`
--

INSERT INTO `notice_boards` (`id`, `notice`, `start_date`, `end_date`, `created_at`, `updated_at`) VALUES
(1, 'Dear [XYZ] Community,  We are excited to inform you that [School Name] will be closed on [Date] for a special day dedicated to staff development and growth. This closure is a strategic initiative to enhance the skills and capabilities of our educators, en', NULL, NULL, '2023-12-29 22:14:38', '2023-12-29 22:14:38');

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

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `role_id`, `name`, `created_at`, `updated_at`) VALUES
(132, 2, 'user.show', '2023-12-17 00:10:44', '2023-12-17 00:10:44'),
(133, 2, 'student.index', '2023-12-17 00:10:45', '2023-12-17 00:10:45'),
(134, 2, 'student.show', '2023-12-17 00:10:45', '2023-12-17 00:10:45'),
(135, 2, 'routine.index', '2023-12-17 00:10:45', '2023-12-17 00:10:45'),
(136, 2, 'routine.show', '2023-12-17 00:10:45', '2023-12-17 00:10:45'),
(137, 2, 'routine.show', '2023-12-17 00:10:45', '2023-12-17 00:10:45'),
(138, 2, 'studentfee.index', '2023-12-17 00:10:45', '2023-12-17 00:10:45'),
(139, 2, 'studentfee.show', '2023-12-17 00:10:45', '2023-12-17 00:10:45'),
(140, 2, 'paymentslip.paymentslip', '2023-12-17 00:10:45', '2023-12-17 00:10:45'),
(141, 2, 'examresult.index', '2023-12-17 00:10:45', '2023-12-17 00:10:45'),
(142, 2, 'examresult.show', '2023-12-17 00:10:45', '2023-12-17 00:10:45'),
(143, 2, 'finalresult.finalresult', '2023-12-17 00:10:45', '2023-12-17 00:10:45'),
(144, 2, 'studentattend.index', '2023-12-17 00:10:45', '2023-12-17 00:10:45'),
(145, 2, 'studentattend.create', '2023-12-17 00:10:45', '2023-12-17 00:10:45'),
(146, 2, 'studentattend.show', '2023-12-17 00:10:45', '2023-12-17 00:10:45'),
(147, 2, 'studentattend.singleedit', '2023-12-17 00:10:45', '2023-12-17 00:10:45'),
(148, 2, 'teacherattend.index', '2023-12-17 00:10:45', '2023-12-17 00:10:45'),
(149, 2, 'teacherattend.show', '2023-12-17 00:10:45', '2023-12-17 00:10:45');

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
-- Table structure for table `profiles`
--

CREATE TABLE `profiles` (
  `id` bigint(20) UNSIGNED NOT NULL,
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
(3, 'Student', 'student', '2023-11-30 03:15:31', '2023-12-13 00:46:45');

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
  `teacher_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `routines`
--

INSERT INTO `routines` (`id`, `class_id`, `weekday_id`, `period_id`, `subject_id`, `teacher_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(4, 1, 1, 1, 1, 1, '2023-12-04 08:31:28', '2023-12-04 08:31:28', NULL),
(5, 1, 1, 2, 2, 2, '2023-12-04 08:32:19', '2023-12-04 08:32:19', NULL),
(6, 1, 1, 3, 3, 3, '2023-12-04 08:32:32', '2023-12-04 08:32:32', NULL),
(7, 1, 1, 4, 11, NULL, '2023-12-04 08:33:07', '2023-12-04 08:33:07', NULL),
(8, 1, 1, 5, 4, 4, '2023-12-04 08:33:34', '2023-12-04 08:33:34', NULL),
(9, 1, 1, 6, 5, 5, '2023-12-04 08:33:48', '2023-12-04 08:33:48', NULL),
(10, 1, 2, 1, 2, 1, '2023-12-04 08:34:09', '2023-12-04 08:34:09', NULL),
(11, 1, 2, 2, 3, 2, '2023-12-04 08:34:28', '2023-12-04 08:34:28', NULL),
(12, 1, 2, 3, 5, 3, '2023-12-04 08:34:42', '2023-12-04 08:34:42', NULL),
(13, 1, 2, 4, 11, NULL, '2023-12-04 08:35:44', '2023-12-04 08:35:44', NULL),
(14, 1, 2, 5, 6, 5, '2023-12-04 08:35:55', '2023-12-04 08:35:55', NULL),
(15, 1, 2, 6, 7, 5, '2023-12-04 08:36:08', '2023-12-04 08:36:08', NULL),
(16, 1, 3, 1, 1, 1, '2023-12-04 08:36:26', '2023-12-04 08:36:26', NULL),
(17, 1, 3, 2, 2, 2, '2023-12-04 08:36:37', '2023-12-04 08:36:37', NULL),
(18, 1, 3, 3, 3, 3, '2023-12-04 08:36:56', '2023-12-04 08:36:56', NULL),
(19, 1, 3, 4, 11, NULL, '2023-12-04 08:37:07', '2023-12-04 08:37:07', NULL),
(20, 1, 3, 5, 7, 1, '2023-12-04 08:37:25', '2023-12-04 08:37:25', NULL),
(21, 1, 3, 6, 9, 4, '2023-12-04 08:37:37', '2023-12-04 08:37:37', NULL),
(22, 1, 4, 1, 2, 1, '2023-12-04 08:38:07', '2023-12-04 08:38:07', NULL),
(23, 1, 4, 2, 3, 2, '2023-12-04 08:38:18', '2023-12-04 08:38:18', NULL),
(24, 1, 4, 3, 5, 4, '2023-12-04 08:38:37', '2023-12-04 08:38:37', NULL),
(25, 1, 4, 4, 11, NULL, '2023-12-04 08:38:49', '2023-12-04 08:38:49', NULL),
(26, 1, 4, 5, 9, 3, '2023-12-04 08:39:04', '2023-12-04 08:39:04', NULL),
(27, 1, 4, 6, 8, 2, '2023-12-04 08:39:16', '2023-12-04 08:39:16', NULL),
(28, 1, 5, 1, 1, 1, '2023-12-04 08:40:38', '2023-12-04 08:40:38', NULL),
(29, 1, 5, 2, 3, 2, '2023-12-04 08:40:53', '2023-12-04 08:40:53', NULL),
(30, 1, 5, 3, 5, 3, '2023-12-04 08:41:09', '2023-12-04 08:41:09', NULL),
(31, 1, 5, 4, 11, NULL, '2023-12-04 08:41:19', '2023-12-04 08:41:19', NULL),
(32, 1, 5, 5, 7, 4, '2023-12-04 08:41:31', '2023-12-04 08:41:31', NULL),
(33, 1, 5, 6, 8, 5, '2023-12-04 08:41:43', '2023-12-04 08:41:43', NULL),
(34, 1, 6, 1, 1, 1, '2023-12-04 08:42:01', '2023-12-04 08:42:01', NULL),
(35, 1, 6, 2, 2, 2, '2023-12-04 08:42:14', '2023-12-04 08:42:14', NULL),
(36, 1, 6, 3, 3, 3, '2023-12-04 08:42:28', '2023-12-04 08:42:28', NULL),
(37, 1, 6, 4, 11, NULL, '2023-12-04 08:42:37', '2023-12-04 08:42:37', NULL),
(38, 1, 6, 5, 9, 4, '2023-12-04 08:42:47', '2023-12-04 08:42:47', NULL),
(39, 1, 6, 6, 8, 5, '2023-12-04 08:43:00', '2023-12-04 08:43:00', NULL),
(40, 2, 1, 1, 1, 1, '2023-12-05 21:27:01', '2023-12-05 21:27:01', NULL),
(41, 2, 1, 2, 2, 3, '2023-12-05 21:27:18', '2023-12-05 21:27:18', NULL),
(42, 2, 1, 3, 5, 4, '2023-12-05 21:27:29', '2023-12-05 21:27:29', NULL),
(43, 2, 1, 4, 11, NULL, '2023-12-05 21:27:50', '2023-12-05 21:27:50', NULL),
(44, 2, 1, 5, 3, 4, '2023-12-05 21:28:08', '2023-12-05 21:28:08', NULL),
(45, 2, 1, 6, 7, 5, '2023-12-05 21:28:22', '2023-12-05 21:28:22', NULL),
(46, 2, 2, 1, 3, 1, '2023-12-05 21:28:41', '2023-12-05 21:28:41', NULL),
(47, 2, 2, 2, 5, 3, '2023-12-05 21:28:53', '2023-12-05 21:28:53', NULL),
(48, 2, 2, 3, 7, 5, '2023-12-05 21:29:13', '2023-12-05 21:29:13', NULL),
(49, 2, 2, 4, 11, NULL, '2023-12-05 21:29:31', '2023-12-05 21:29:31', NULL),
(50, 2, 2, 5, 7, 4, '2023-12-05 21:31:12', '2023-12-05 21:31:12', NULL),
(51, 2, 2, 6, 8, 2, '2023-12-05 21:31:25', '2023-12-05 21:31:25', NULL),
(52, 2, 3, 1, 1, 1, '2023-12-05 21:32:11', '2023-12-05 21:32:11', NULL),
(53, 2, 3, 2, 3, 3, '2023-12-05 21:32:22', '2023-12-05 21:32:22', NULL),
(54, 2, 3, 3, 5, 4, '2023-12-05 21:32:36', '2023-12-05 21:32:36', NULL),
(55, 2, 3, 4, 11, NULL, '2023-12-05 21:32:54', '2023-12-05 21:32:54', NULL),
(56, 2, 3, 5, 7, 2, '2023-12-05 21:33:21', '2023-12-05 21:33:21', NULL),
(57, 2, 3, 6, 8, 4, '2023-12-05 21:33:39', '2023-12-05 21:33:39', NULL),
(58, 2, 4, 1, 2, 1, '2023-12-05 21:34:01', '2023-12-05 21:34:01', NULL),
(59, 2, 4, 2, 3, 2, '2023-12-05 21:34:19', '2023-12-05 21:34:19', NULL),
(60, 2, 4, 3, 5, 4, '2023-12-05 21:34:31', '2023-12-05 21:34:31', NULL),
(61, 2, 4, 4, 11, NULL, '2023-12-05 21:34:43', '2023-12-05 21:34:43', NULL),
(62, 2, 4, 5, 7, 5, '2023-12-05 21:34:56', '2023-12-05 21:34:56', NULL),
(63, 2, 4, 6, 8, 3, '2023-12-05 21:35:07', '2023-12-05 21:35:07', NULL),
(64, 2, 5, 1, 2, 3, '2023-12-05 21:35:25', '2023-12-05 21:35:25', NULL),
(65, 2, 5, 2, 5, 5, '2023-12-05 21:35:39', '2023-12-05 21:35:39', NULL),
(66, 2, 5, 3, 7, 5, '2023-12-05 21:35:50', '2023-12-05 21:35:50', NULL),
(67, 2, 5, 4, 11, NULL, '2023-12-05 21:35:58', '2023-12-05 21:35:58', NULL),
(68, 2, 5, 5, 9, 1, '2023-12-05 21:36:11', '2023-12-05 21:36:11', NULL),
(69, 2, 5, 6, 4, 3, '2023-12-05 21:36:30', '2023-12-05 21:36:30', NULL),
(70, 2, 6, 1, 1, 2, '2023-12-05 21:36:44', '2023-12-05 21:36:44', NULL),
(71, 2, 6, 2, 3, 3, '2023-12-05 21:36:55', '2023-12-05 21:36:55', NULL),
(72, 2, 6, 3, 5, 5, '2023-12-05 21:37:11', '2023-12-05 21:37:11', NULL),
(73, 2, 6, 4, 11, NULL, '2023-12-05 21:37:23', '2023-12-05 21:37:23', NULL),
(74, 2, 6, 5, 4, 4, '2023-12-05 21:38:24', '2023-12-05 21:38:24', NULL),
(75, 2, 6, 6, 7, 5, '2023-12-05 21:38:33', '2023-12-05 21:38:33', NULL);

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
  `first_name_bn` varchar(255) DEFAULT NULL,
  `last_name_en` varchar(255) NOT NULL,
  `last_name_bn` varchar(255) DEFAULT NULL,
  `date_of_birth` date NOT NULL,
  `place_of_birth` varchar(255) DEFAULT NULL,
  `father_name` varchar(255) NOT NULL,
  `mother_name` varchar(255) NOT NULL,
  `father_contact` int(11) DEFAULT NULL,
  `mother_contact` int(11) DEFAULT NULL,
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
  `status` int(11) NOT NULL DEFAULT 1 COMMENT '1=>active,0=>inactive',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `student_id`, `roll`, `first_name_en`, `first_name_bn`, `last_name_en`, `last_name_bn`, `date_of_birth`, `place_of_birth`, `father_name`, `mother_name`, `father_contact`, `mother_contact`, `gender`, `class_id`, `section_id`, `contact_no_en`, `contact_no_bn`, `email`, `username`, `password`, `image`, `present_address_en`, `parmanent_address_en`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 101, 1, 'kaiser', 'কাইছার', 'ahmed', 'আহমেদ', '2023-11-01', '2023-11-01', 'Morshed', 'Rahima', 123456, 12345678, 'male', 1, 1, 1, NULL, 'kaiser@gmail.com', 'kaiser', '$2y$12$yJgSvHZ3Wg0tiI5L21mZ8uZC4HotLWBh261MfgrrLlU/jbfdYSFsW', '5251701697890.jpg', 'Chittagong', 'Dhaka', 1, '2023-11-29 15:53:09', '2023-12-17 21:25:09', NULL),
(2, 102, 1, 'Raihan', 'রায়হান', 'Sazzad', 'সাজ্জাদ', '2023-11-02', '2023-11-02', 'Morshed', 'Rahima', 12345, 1234567, 'male', 2, 2, 2, '১২৩৪৫', 'raihan@gmail.com', 'raihan', '$2y$12$YB.jRwiGCMPeIHP4vBkuaOc/HynWqHpRHqae7ViZUL/3it0A7jhgm', '3541701699367.jpg', 'Chittagong', 'Dhaka', 1, '2023-11-29 15:53:09', '2023-12-17 21:26:42', NULL),
(3, 103, 2, 'Robiul', NULL, 'Hossain', NULL, '2023-11-02', '2023-11-02', 'Morshed', 'Rahima', 1234, 123456, 'male', 2, 3, 3, '১২৩৪', 'robiul@gmail.com', 'robiul', '$2y$12$YAcNGo7DOaajDt1Y9XwLEuEuWxKwcvoldkg/XZNWHj4.5YDjimjBu', '8251701746496.jpg', 'Chittagong', 'Dhaka', 1, '2023-11-29 15:53:09', '2023-12-17 21:27:02', NULL),
(7, 104, 2, 'Istiak', 'ইসতিয়াক', 'ahmed', 'আহমেদ', '2023-11-01', '2023-11-01', 'Morshed', 'Rahima', 123456444, 1234567844, 'male', 1, 1, 4, NULL, 'kaiser@gmail.com', 'kaiser', '$2y$12$oRr1v4rs80/m98P/aOEor.FqsowpEeVDXCa8x7oFuG2bFK0U89AfW', '2761701699527.jpg', 'Chittagong', 'Dhaka', 1, '2023-11-29 15:53:09', '2023-12-17 21:27:10', NULL),
(12, 105, 2, 'Robiul', NULL, 'Hossain', NULL, '2023-11-01', '2023-11-01', 'Morshed', 'Rahima', 1, 1, 'male', 3, 1, 5, NULL, 'robiul@gmail.com', 'robiul', '$2y$12$tUGaWhkPNr7zGs6x2dVyHupEao//k8rNJtGmT4ZybIk.X37EZ.PR2', '2761701699527.jpg', 'Chittagong', 'Dhaka', 1, '2023-11-29 15:53:09', '2023-12-17 21:27:20', NULL),
(13, 106, 3, 'Ibrahim', 'ইব্রাহিম', 'Khalil', 'খলিল', '2023-12-01', '2023-12-01', 'Morshed', 'Rahima', 13, 13, 'male', 3, 1, 6, NULL, 'ibrahim@gmail.com', 'ibrahim', '$2y$12$/3O89kk7E4/8r9bXVmLvwOkV9mMvazf6Qz.2n4O/dpW7yZo73Rk22', '4601701747504.jpg', 'Chiattagong', 'Dhaka', 1, '2023-12-04 21:38:24', '2023-12-17 21:27:29', NULL),
(16, 107, 1, 'Sharmin', NULL, 'akter', NULL, '2023-11-01', '2023-11-01', 'Morshed', 'Rahima', 0, 0, 'female', 4, 4, 7, NULL, 'sharmin@gmail.com', 'sharmin', '$2y$12$EHpwOIBKbtOMwvLge5BM/OXjfp9vlnFIwL.RpziZl1npdvVPlx9ce', '7181702054914.jpg', 'Chittagong', 'Dhaka', 1, '2023-11-29 15:53:09', '2023-12-17 21:27:36', NULL),
(17, 108, 2, 'Maksuda', NULL, 'Akter', NULL, '2023-12-01', '2023-12-01', 'Morshed', 'Rahima', 9, 9, 'female', 4, 1, 8, NULL, 'amksuda@gmail.com', 'maksuda', '$2y$12$hQn9ip2EW8ikjk4BJAX4xeKKxahYVhx38WY/gLWUcRdYlQTUfvy5y', '4561702054936.jpg', 'Chiattagong', 'Dhaka', 1, '2023-12-04 21:38:24', '2023-12-17 21:27:44', NULL),
(18, 109, 1, 'Asadullah', NULL, 'Galib', NULL, '2000-01-01', '2000-01-01', 'MD.ABUL KALAM', 'Selina Khatun', NULL, NULL, 'male', 5, 1, 9, '৯', 'galib@gmail.com', 'Galib', '$2y$12$/BGzAggmCT7319/u697EJO/9KY/V.0Gy.Cr9wsEE5MPbaIwxzphL.', '5541702751948.jpg', 'Chattogram', 'Rajshahi', 1, '2023-12-16 12:39:08', '2023-12-17 21:27:51', NULL),
(20, 110, 2, 'Borhan', NULL, 'Uddin', NULL, '2000-01-01', '2000-01-01', 'MD.ABUL KALAM', 'Selina Khatun', NULL, NULL, 'male', 5, 1, 10, NULL, 'borhan@gmail.com', 'borhan', '$2y$12$9BUU4KzjGdAfAb9bfWBG1ONHRr2JhArfXhBBaTYMhELwmTtX0Qqgy', '4141702753169.jpg', 'Chattogram', 'Rajshahi', 1, '2023-12-16 12:39:08', '2023-12-17 21:27:59', NULL),
(23, 111, 3, 'Mojahid', NULL, 'Islam', NULL, '2000-01-01', '2000-01-01', 'MD.ABUL KALAM', 'Selina Khatun', NULL, NULL, 'male', 5, 1, 11, NULL, 'mojahid@gmail.com', 'mojahid', '$2y$12$933ff8fibsU1Ys9jXtsutu6IlO4GuJJez2jLcpCZ.zmQzGxcMr10K', '3641702753185.jpg', 'Chattogram', 'Patiya', 1, '2023-12-16 12:39:08', '2023-12-17 21:28:10', NULL),
(24, 112, 3, 'Noman', NULL, 'Hossain', NULL, '2023-11-01', '2023-11-01', 'Morshed', 'Rahima', NULL, NULL, 'male', 1, 1, 12, NULL, 'noman@gmail.com', 'noman', '$2y$12$jyHaboCv8h0TQ76mSLCYGue1isvxKzROkHFHYGPS11tY7mwqY4evW', '2761701699527.jpg', 'Chittagong', 'Dhaka', 1, '2023-11-29 15:53:09', '2023-12-17 21:28:19', NULL),
(25, 113, 3, 'Absar', NULL, 'Uddin', NULL, '2023-11-02', '2023-11-02', 'Morshed', 'Rahima', NULL, NULL, 'male', 2, 1, 13, '১৩', 'abser@gmail.com', 'abser', '$2y$12$QZwyS8ANzOZgCCMMrM9Ame1K.crmfho5MAPlKzz1nj6Qxnz7LY1Gi', '8251701746496.jpg', 'Chittagong', 'Dhaka', 1, '2023-11-29 15:53:09', '2023-12-17 21:28:29', NULL),
(26, 114, 1, 'Abbas', NULL, 'Ripon', NULL, '2023-12-01', '2023-12-01', 'Morshed', 'Rahima', NULL, NULL, 'male', 3, 1, 14, NULL, 'abbas@gmail.com', 'abbas', '$2y$12$Bx89XYmrgUCsSclcsu1zDu8X5KND0y7gnlKbzmH/I3RQonOtIcyPK', '4601701747504.jpg', 'Chiattagong', 'Dhaka', 1, '2023-12-04 21:38:24', '2023-12-17 21:28:38', NULL),
(27, 115, 3, 'Tanjila', NULL, 'Akter', NULL, '2023-12-01', '2023-12-01', 'Morshed', 'Rahima', NULL, NULL, 'female', 4, 1, 15, NULL, 'tanjila@gmail.com', 'tanjila', '$2y$12$oyxjc.sBPtLyF7fk7ox.ReKF1.Hc15vCPVHJD9q0mrxNEKg9bhoeK', '4561702054936.jpg', 'Chiattagong', 'Dhaka', 1, '2023-12-04 21:38:24', '2023-12-17 21:28:46', NULL),
(30, 116, 4, 'Rahat', NULL, 'ahmed', NULL, '2023-11-01', '2023-11-01', 'Morshed', 'Rahima', NULL, NULL, 'male', 1, 1, 16, NULL, 'rahat@gmail.com', 'rahat', '$2y$12$hH1db1ZJ/xTViVwrk7iorO7992/MapvNsKZrdqhgeV/G303uxpw/m', '5251701697890.jpg', 'Chittagong', 'Dhaka', 1, '2023-11-29 15:53:09', '2023-12-17 21:28:56', NULL),
(31, 117, 5, 'Didar', NULL, 'ahmed', NULL, '2023-11-01', '2023-11-01', 'Morshed', 'Rahima', NULL, NULL, 'male', 1, 1, 17, NULL, 'didar@gmail.com', 'didar', '$2y$12$aTw7byrX/304jgsSJ4u/6OSkT4VVNnP6gnbFey9DA13Snq8x3AQxm', '2761701699527.jpg', 'Chittagong', 'Dhaka', 1, '2023-11-29 15:53:09', '2023-12-17 21:29:04', NULL),
(32, 118, 4, 'Shihab', NULL, 'Islam', NULL, '2023-11-02', '2023-11-02', 'Morshed', 'Rahima', NULL, NULL, 'male', 2, 2, 18, NULL, 'shihab@gmail.com', 'shihab', '$2y$12$BH6Iss98//4uxnstOGFq0ufpg9LaBwPTd35MJcYW60TFW3Q1B1D9q', '3541701699367.jpg', 'Chittagong', 'Dhaka', 1, '2023-11-29 15:53:09', '2023-12-17 21:29:13', NULL),
(33, 119, 5, 'Saiful', NULL, 'Islam', NULL, '2023-11-02', '2023-11-02', 'Morshed', 'Rahima', NULL, NULL, 'male', 2, 3, 19, NULL, 'saiful@gmail.com', 'saiful', '$2y$12$bRd27q2jZVM6bOzJeojF/emdFEzpuQRgmx5K1Dz47/OpwoyFdLt3a', '8251701746496.jpg', 'Chittagong', 'Dhaka', 1, '2023-11-29 15:53:09', '2023-12-17 21:29:23', NULL),
(34, 120, 4, 'Sayed', NULL, 'Ullah', NULL, '2023-11-01', '2023-11-01', 'Morshed', 'Rahima', NULL, NULL, 'male', 3, 1, 20, NULL, 'sayed@gmail.com', 'sayed', '$2y$12$By.A0A/RxJNsimATv6010.zv/nmUeI39l7jMyT/D4CvjfWFIqdre.', '2761701699527.jpg', 'Chittagong', 'Dhaka', 1, '2023-11-29 15:53:09', '2023-12-17 21:29:31', NULL),
(35, 121, 5, 'Pritom', NULL, 'Das', NULL, '2023-12-01', '2023-12-01', 'Morshed', 'Rahima', NULL, NULL, 'male', 3, 1, 21, NULL, 'pritom@gmail.com', 'pritom', '$2y$12$WiLRulLb3G7x2GE6kUp0RuGCgZ3wKPsXeT0J9vNvwMbdNNehUGA6q', '4601701747504.jpg', 'Chiattagong', 'Dhaka', 1, '2023-12-04 21:38:24', '2023-12-17 21:29:40', NULL),
(36, 122, 4, 'Shakil', NULL, 'ahmed', NULL, '2023-11-01', '2023-11-01', 'Morshed', 'Rahima', NULL, NULL, 'male', 4, 4, 22, NULL, 'shakil@gmail.com', 'shakil', '$2y$12$zYCDrOXFH/63PvhuACTYr.wj065HANG9fZdQ/4id4l9n5.HJmCZte', '5381702754162.jpg', 'Chittagong', 'Dhaka', 1, '2023-11-29 15:53:09', '2023-12-17 21:29:47', NULL),
(37, 123, 5, 'Masud', NULL, 'Islam', NULL, '2023-12-01', '2023-12-01', 'Morshed', 'Rahima', NULL, NULL, 'male', 4, 1, 23, NULL, 'masud@gmail.com', 'masud', '$2y$12$fM8jQcMP8fX/a9LNub3pd.4.wxa1uot1TWD/bm0p/nPoJ41Vmug3e', '2431702754176.jpg', 'Chiattagong', 'Dhaka', 1, '2023-12-04 21:38:24', '2023-12-17 21:29:57', NULL),
(38, 124, 4, 'Liza', NULL, 'Akter', NULL, '2000-01-01', '2000-01-01', 'MD.ABUL KALAM', 'Selina Khatun', NULL, NULL, 'female', 5, 1, 24, NULL, 'liza@gmail.com', 'liza', '$2y$12$doTEDj7ByybqFNpjiLOgSustykVnCsaXsGc0PTRK9nIqICGbBXd3q', '4141702753169.jpg', 'Chattogram', 'Rajshahi', 1, '2023-12-16 12:39:08', '2023-12-17 21:30:06', NULL),
(39, 125, 5, 'Jannatul', NULL, 'Mawa', NULL, '2000-01-01', '2000-01-01', 'MD.ABUL KALAM', 'Selina Khatun', NULL, NULL, 'female', 5, 1, 25, NULL, 'jannatul@gmail.com', 'jannatul', '$2y$12$CRhJigv1vkYGBUu15YSsbeZ9MF2GbsAm4GkzEz9HdTC3VKf3k.zJu', '3641702753185.jpg', 'Chattogram', 'Patiya', 1, '2023-12-16 12:39:08', '2023-12-17 21:30:14', NULL);

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
(1, 1, 1, '2023-12-16', 0, '2023-12-16 13:21:21', '2023-12-16 13:21:21', NULL),
(2, 7, 1, '2023-12-16', 1, '2023-12-16 13:21:21', '2023-12-16 13:21:21', NULL),
(3, 24, 1, '2023-12-16', 1, '2023-12-16 13:21:21', '2023-12-16 13:21:21', NULL),
(4, 30, 1, '2023-12-16', 1, '2023-12-16 13:21:21', '2023-12-16 13:21:21', NULL),
(5, 31, 1, '2023-12-16', 1, '2023-12-16 13:21:21', '2023-12-16 13:21:21', NULL),
(6, 2, 2, '2023-12-16', 1, '2023-12-16 13:21:30', '2023-12-16 13:21:30', NULL),
(7, 3, 2, '2023-12-16', 1, '2023-12-16 13:21:30', '2023-12-16 13:21:30', NULL),
(8, 25, 2, '2023-12-16', 1, '2023-12-16 13:21:30', '2023-12-16 13:21:30', NULL),
(9, 32, 2, '2023-12-16', 1, '2023-12-16 13:21:30', '2023-12-16 13:21:30', NULL),
(10, 33, 2, '2023-12-16', 1, '2023-12-16 13:21:30', '2023-12-16 13:21:30', NULL),
(11, 12, 3, '2023-12-16', 1, '2023-12-16 13:21:49', '2023-12-16 13:21:49', NULL),
(12, 13, 3, '2023-12-16', 1, '2023-12-16 13:21:49', '2023-12-16 13:21:49', NULL),
(13, 26, 3, '2023-12-16', 0, '2023-12-16 13:21:49', '2023-12-16 13:21:49', NULL),
(14, 34, 3, '2023-12-16', 0, '2023-12-16 13:21:49', '2023-12-16 13:21:49', NULL),
(15, 35, 3, '2023-12-16', 1, '2023-12-16 13:21:49', '2023-12-16 13:21:49', NULL),
(16, 16, 4, '2023-12-16', 1, '2023-12-16 13:21:59', '2023-12-16 13:21:59', NULL),
(17, 17, 4, '2023-12-16', 1, '2023-12-16 13:21:59', '2023-12-16 13:21:59', NULL),
(18, 27, 4, '2023-12-16', 1, '2023-12-16 13:21:59', '2023-12-16 13:21:59', NULL),
(19, 36, 4, '2023-12-16', 1, '2023-12-16 13:21:59', '2023-12-16 13:21:59', NULL),
(20, 37, 4, '2023-12-16', 0, '2023-12-16 13:21:59', '2023-12-16 13:21:59', NULL),
(21, 18, 5, '2023-12-16', 1, '2023-12-16 13:22:29', '2023-12-16 13:22:29', NULL),
(22, 20, 5, '2023-12-16', 1, '2023-12-16 13:22:29', '2023-12-16 13:22:29', NULL),
(23, 23, 5, '2023-12-16', 1, '2023-12-16 13:22:29', '2023-12-16 13:22:29', NULL),
(24, 38, 5, '2023-12-16', 1, '2023-12-16 13:22:29', '2023-12-16 13:22:29', NULL),
(25, 39, 5, '2023-12-16', 1, '2023-12-16 13:22:29', '2023-12-16 13:22:29', NULL),
(26, 1, 1, '2023-12-17', 1, '2023-12-17 00:34:11', '2023-12-17 00:34:11', NULL),
(27, 7, 1, '2023-12-17', 1, '2023-12-17 00:34:11', '2023-12-17 00:34:11', NULL),
(28, 24, 1, '2023-12-17', 1, '2023-12-17 00:34:11', '2023-12-17 00:34:11', NULL),
(29, 30, 1, '2023-12-17', 0, '2023-12-17 00:34:11', '2023-12-17 00:34:11', NULL),
(30, 31, 1, '2023-12-17', 1, '2023-12-17 00:34:12', '2023-12-17 00:34:12', NULL),
(31, 2, 2, '2023-12-17', 1, '2023-12-17 00:34:22', '2023-12-17 00:34:22', NULL),
(32, 3, 2, '2023-12-17', 1, '2023-12-17 00:34:22', '2023-12-17 00:34:22', NULL),
(33, 25, 2, '2023-12-17', 1, '2023-12-17 00:34:22', '2023-12-17 00:34:22', NULL),
(34, 32, 2, '2023-12-17', 1, '2023-12-17 00:34:22', '2023-12-17 00:34:22', NULL),
(35, 33, 2, '2023-12-17', 1, '2023-12-17 00:34:22', '2023-12-17 00:34:22', NULL),
(36, 12, 3, '2023-12-17', 1, '2023-12-17 00:34:35', '2023-12-17 00:34:35', NULL),
(37, 13, 3, '2023-12-17', 1, '2023-12-17 00:34:35', '2023-12-17 00:34:35', NULL),
(38, 26, 3, '2023-12-17', 1, '2023-12-17 00:34:35', '2023-12-17 00:34:35', NULL),
(39, 34, 3, '2023-12-17', 0, '2023-12-17 00:34:35', '2023-12-17 00:34:35', NULL),
(40, 35, 3, '2023-12-17', 1, '2023-12-17 00:34:35', '2023-12-17 00:34:35', NULL),
(41, 16, 4, '2023-12-17', 0, '2023-12-17 00:34:49', '2023-12-17 00:34:49', NULL),
(42, 17, 4, '2023-12-17', 1, '2023-12-17 00:34:49', '2023-12-17 00:34:49', NULL),
(43, 27, 4, '2023-12-17', 1, '2023-12-17 00:34:49', '2023-12-17 00:34:49', NULL),
(44, 36, 4, '2023-12-17', 1, '2023-12-17 00:34:49', '2023-12-17 00:34:49', NULL),
(45, 37, 4, '2023-12-17', 1, '2023-12-17 00:34:49', '2023-12-17 00:34:49', NULL),
(46, 18, 5, '2023-12-17', 1, '2023-12-17 00:35:03', '2023-12-17 00:35:03', NULL),
(47, 20, 5, '2023-12-17', 1, '2023-12-17 00:35:03', '2023-12-17 00:35:03', NULL),
(48, 23, 5, '2023-12-17', 1, '2023-12-17 00:35:03', '2023-12-17 00:35:03', NULL),
(49, 38, 5, '2023-12-17', 1, '2023-12-17 00:35:03', '2023-12-17 00:35:03', NULL),
(50, 39, 5, '2023-12-17', 1, '2023-12-17 00:35:03', '2023-12-17 00:35:03', NULL),
(51, 1, 1, '2023-12-21', 1, '2023-12-20 21:10:08', '2023-12-20 21:10:08', NULL),
(52, 7, 1, '2023-12-21', 1, '2023-12-20 21:10:08', '2023-12-20 21:10:08', NULL),
(53, 24, 1, '2023-12-21', 1, '2023-12-20 21:10:08', '2023-12-20 21:10:08', NULL),
(54, 30, 1, '2023-12-21', 1, '2023-12-20 21:10:08', '2023-12-20 21:10:08', NULL),
(55, 31, 1, '2023-12-21', 1, '2023-12-20 21:10:08', '2023-12-20 21:10:08', NULL),
(56, 2, 2, '2023-12-21', 1, '2023-12-20 21:10:22', '2023-12-20 21:10:22', NULL),
(57, 3, 2, '2023-12-21', 1, '2023-12-20 21:10:22', '2023-12-20 21:10:22', NULL),
(58, 25, 2, '2023-12-21', 0, '2023-12-20 21:10:22', '2023-12-20 21:10:22', NULL),
(59, 32, 2, '2023-12-21', 1, '2023-12-20 21:10:22', '2023-12-20 21:10:22', NULL),
(60, 33, 2, '2023-12-21', 1, '2023-12-20 21:10:22', '2023-12-20 21:10:22', NULL),
(61, 12, 3, '2023-12-21', 1, '2023-12-20 21:10:32', '2023-12-20 21:10:32', NULL),
(62, 13, 3, '2023-12-21', 1, '2023-12-20 21:10:32', '2023-12-20 21:10:32', NULL),
(63, 26, 3, '2023-12-21', 0, '2023-12-20 21:10:32', '2023-12-20 21:10:32', NULL),
(64, 34, 3, '2023-12-21', 1, '2023-12-20 21:10:32', '2023-12-20 21:10:32', NULL),
(65, 35, 3, '2023-12-21', 1, '2023-12-20 21:10:32', '2023-12-20 21:10:32', NULL),
(66, 16, 4, '2023-12-21', 1, '2023-12-20 21:10:53', '2023-12-20 21:10:53', NULL),
(67, 17, 4, '2023-12-21', 1, '2023-12-20 21:10:53', '2023-12-20 21:10:53', NULL),
(68, 27, 4, '2023-12-21', 0, '2023-12-20 21:10:53', '2023-12-20 21:10:53', NULL),
(69, 36, 4, '2023-12-21', 1, '2023-12-20 21:10:53', '2023-12-20 21:10:53', NULL),
(70, 37, 4, '2023-12-21', 1, '2023-12-20 21:10:53', '2023-12-20 21:10:53', NULL),
(71, 18, 5, '2023-12-21', 1, '2023-12-20 21:11:05', '2023-12-20 21:11:05', NULL),
(72, 20, 5, '2023-12-21', 1, '2023-12-20 21:11:05', '2023-12-20 21:11:05', NULL),
(73, 23, 5, '2023-12-21', 1, '2023-12-20 21:11:05', '2023-12-20 21:11:05', NULL),
(74, 38, 5, '2023-12-21', 1, '2023-12-20 21:11:05', '2023-12-20 21:11:05', NULL),
(75, 39, 5, '2023-12-21', 0, '2023-12-20 21:11:05', '2023-12-20 21:11:05', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `student_fees`
--

CREATE TABLE `student_fees` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_id` bigint(20) UNSIGNED NOT NULL,
  `class_id` bigint(11) UNSIGNED NOT NULL,
  `total_fees` decimal(8,2) NOT NULL,
  `fee_month` varchar(255) NOT NULL,
  `fee_year` varchar(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0 COMMENT '0=>unpaid,1=>paid',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `student_fees`
--

INSERT INTO `student_fees` (`id`, `student_id`, `class_id`, `total_fees`, `fee_month`, `fee_year`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 1, '4200.00', '12', '2023', 1, '2023-12-07 21:43:02', '2023-12-07 22:57:33', NULL),
(2, 7, 1, '3700.00', '12', '2023', 1, '2023-12-07 21:43:02', '2023-12-07 23:14:56', NULL),
(3, 2, 2, '14500.00', '12', '2023', 1, '2023-12-07 21:46:33', '2023-12-07 23:27:15', NULL),
(4, 3, 2, '14500.00', '12', '2023', 1, '2023-12-07 21:46:33', '2023-12-07 23:51:47', NULL),
(5, 12, 3, '11700.00', '12', '2023', 0, '2023-12-08 11:12:33', '2023-12-08 11:12:33', NULL),
(6, 13, 3, '11700.00', '12', '2023', 0, '2023-12-08 11:12:33', '2023-12-08 11:12:33', NULL),
(7, 16, 4, '6000.00', '12', '2023', 0, '2023-12-08 11:13:03', '2023-12-08 11:13:03', NULL),
(8, 17, 4, '6000.00', '12', '2023', 0, '2023-12-08 11:13:03', '2023-12-08 11:13:03', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `student_fee_details`
--

CREATE TABLE `student_fee_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fee_id` bigint(20) UNSIGNED NOT NULL,
  `student_id` bigint(20) UNSIGNED NOT NULL,
  `class_id` bigint(20) UNSIGNED NOT NULL,
  `fee_amount` decimal(8,2) NOT NULL,
  `fee_month` varchar(255) NOT NULL,
  `fee_year` year(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `student_fee_details`
--

INSERT INTO `student_fee_details` (`id`, `fee_id`, `student_id`, `class_id`, `fee_amount`, `fee_month`, `fee_year`, `created_at`, `updated_at`, `deleted_at`) VALUES
(39, 1, 1, 1, '1000.00', '12', 2023, '2023-12-07 21:43:02', '2023-12-07 22:17:44', NULL),
(40, 2, 1, 1, '1000.00', '12', 2023, '2023-12-07 21:43:02', '2023-12-07 21:43:02', NULL),
(41, 4, 1, 1, '200.00', '12', 2023, '2023-12-07 21:43:02', '2023-12-07 21:43:02', NULL),
(42, 5, 1, 1, '2000.00', '12', 2023, '2023-12-07 21:43:02', '2023-12-07 21:43:02', NULL),
(43, 1, 7, 1, '500.00', '12', 2023, '2023-12-07 21:43:02', '2023-12-07 21:43:02', NULL),
(44, 2, 7, 1, '1000.00', '12', 2023, '2023-12-07 21:43:02', '2023-12-07 21:43:02', NULL),
(45, 4, 7, 1, '200.00', '12', 2023, '2023-12-07 21:43:02', '2023-12-07 21:43:02', NULL),
(46, 5, 7, 1, '2000.00', '12', 2023, '2023-12-07 21:43:02', '2023-12-07 21:43:02', NULL),
(51, 5, 2, 2, '2000.00', '12', 2023, '2023-12-07 21:46:33', '2023-12-07 21:46:33', NULL),
(52, 6, 2, 2, '10000.00', '12', 2023, '2023-12-07 21:46:33', '2023-12-07 21:46:33', NULL),
(53, 7, 2, 2, '500.00', '12', 2023, '2023-12-07 21:46:33', '2023-12-07 21:46:33', NULL),
(54, 8, 2, 2, '2000.00', '12', 2023, '2023-12-07 21:46:33', '2023-12-07 21:46:33', NULL),
(55, 5, 3, 2, '2000.00', '12', 2023, '2023-12-07 21:46:33', '2023-12-07 21:46:33', NULL),
(56, 6, 3, 2, '10000.00', '12', 2023, '2023-12-07 21:46:33', '2023-12-07 21:46:33', NULL),
(57, 7, 3, 2, '500.00', '12', 2023, '2023-12-07 21:46:33', '2023-12-07 21:46:33', NULL),
(58, 8, 3, 2, '2000.00', '12', 2023, '2023-12-07 21:46:33', '2023-12-07 21:46:33', NULL),
(59, 2, 12, 3, '1000.00', '12', 2023, '2023-12-08 11:12:33', '2023-12-08 11:12:33', NULL),
(60, 4, 12, 3, '200.00', '12', 2023, '2023-12-08 11:12:33', '2023-12-08 11:12:33', NULL),
(61, 6, 12, 3, '10000.00', '12', 2023, '2023-12-08 11:12:33', '2023-12-08 11:12:33', NULL),
(62, 7, 12, 3, '500.00', '12', 2023, '2023-12-08 11:12:33', '2023-12-08 11:12:33', NULL),
(63, 2, 13, 3, '1000.00', '12', 2023, '2023-12-08 11:12:33', '2023-12-08 11:12:33', NULL),
(64, 4, 13, 3, '200.00', '12', 2023, '2023-12-08 11:12:33', '2023-12-08 11:12:33', NULL),
(65, 6, 13, 3, '10000.00', '12', 2023, '2023-12-08 11:12:33', '2023-12-08 11:12:33', NULL),
(66, 7, 13, 3, '500.00', '12', 2023, '2023-12-08 11:12:33', '2023-12-08 11:12:33', NULL),
(67, 3, 16, 4, '1500.00', '12', 2023, '2023-12-08 11:13:03', '2023-12-08 11:13:03', NULL),
(68, 5, 16, 4, '2000.00', '12', 2023, '2023-12-08 11:13:03', '2023-12-08 11:13:03', NULL),
(69, 7, 16, 4, '500.00', '12', 2023, '2023-12-08 11:13:03', '2023-12-08 11:13:03', NULL),
(70, 8, 16, 4, '2000.00', '12', 2023, '2023-12-08 11:13:03', '2023-12-08 11:13:03', NULL),
(71, 3, 17, 4, '1500.00', '12', 2023, '2023-12-08 11:13:03', '2023-12-08 11:13:03', NULL),
(72, 5, 17, 4, '2000.00', '12', 2023, '2023-12-08 11:13:03', '2023-12-08 11:13:03', NULL),
(73, 7, 17, 4, '500.00', '12', 2023, '2023-12-08 11:13:03', '2023-12-08 11:13:03', NULL),
(74, 8, 17, 4, '2000.00', '12', 2023, '2023-12-08 11:13:03', '2023-12-08 11:13:03', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `student_fee_payments`
--

CREATE TABLE `student_fee_payments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `class_id` bigint(20) UNSIGNED DEFAULT NULL,
  `student_roll` bigint(20) UNSIGNED NOT NULL,
  `student_name` bigint(20) UNSIGNED NOT NULL,
  `fee_id` bigint(20) UNSIGNED NOT NULL,
  `fee_month` varchar(255) NOT NULL,
  `fee_year` varchar(255) NOT NULL,
  `amount` decimal(8,2) NOT NULL,
  `payment_date` date DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 0 COMMENT '1=>paid 0=>unpaid',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `student_fee_payments`
--

INSERT INTO `student_fee_payments` (`id`, `class_id`, `student_roll`, `student_name`, `fee_id`, `fee_month`, `fee_year`, `amount`, `payment_date`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 1, 1, 1, 'December', '2023', '500.00', '2023-12-04', 1, '2023-12-03 08:28:54', '2023-12-03 09:08:39', NULL),
(4, 1, 7, 7, 1, 'December', '2023', '500.00', '2023-12-02', 1, '2023-12-03 12:30:18', '2023-12-03 12:30:18', NULL);

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
(1, 101, 1, 'Jasim', 'জসিম', 'Uddin', 'উদ্দিন', 'MD.ABUL KALAM', 'HOSNAARA BEGUM', 'male', '2000-01-01', 'Chittagong', 'Mathematics', '10000.00', 'jasimuddinm180@gmail.com', '123', '১২৩', 1, 1, '1561701696842.png', 'Chattogram', 'Dhaka', 1, '2023-11-26 17:11:55', '2023-12-04 07:34:02', NULL),
(2, 102, 2, 'Kaiser', 'কায়সার', 'Ahmed', 'আহমেদ', 'Morshed', 'Rahima', 'male', '2015-01-01', 'Chittagong', 'English', '80000.00', 'kaiser@gmail.com', '01', '১২৩৪৫৬', NULL, NULL, '9041701696831.jpg', 'Chattogram', 'Dhaka', 1, '2023-11-26 17:35:24', '2023-12-19 20:59:10', NULL),
(3, 103, 2, 'Istiak', 'ইসতিয়াক', 'Ahmed', 'আহমেদ', 'Morshed', 'Rahima', 'male', '2023-11-01', 'Chittagong', 'English', '80000.00', 'istiak@gmail.com', '1234', '১২৩৪', 1, 2, '2511701696851.jpg', 'Chattogram', 'Dhaka', 1, '2023-11-26 18:28:11', '2023-12-04 07:34:11', NULL),
(4, 104, 2, 'Ibrahim', 'ইব্রাহিম', 'Khalil', 'খলিল', 'Abu Bakkar', 'Selina Khatun', 'male', '2000-01-01', 'Shariatpur', 'Science', '10000.00', 'ibrahim@gmail.com', '1', '1', 1, 2, '2941701699758.jpg', 'Dhaka', 'Shariatpur', 1, '2023-12-04 08:22:38', '2023-12-04 08:22:38', NULL),
(5, 105, 2, 'Burhan', 'বোরহান', 'Uddin', 'উদ্দিন', 'Abu Bakkar', 'Selina Khatun', 'male', '2004-01-01', 'Feni', 'Physics', '10000.00', 'fuad@gmail.com', '2', '২', 1, 2, '1511701700152.jpg', 'Dhaka', 'Feni', 1, '2023-12-04 08:29:12', '2023-12-04 08:29:12', NULL),
(6, 106, 2, 'Robiul', NULL, 'Hossain', NULL, 'Morshed', 'Rahima', 'male', '2023-12-01', 'Chittagong', 'Mathematics', '15000.00', 'robiul@gmail.com', '6', NULL, 1, 2, '6761703910125.jpg', 'Hazi Para', 'Hazi Para', 1, '2023-12-29 22:22:05', '2023-12-29 22:22:05', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `teacher_attendances`
--

CREATE TABLE `teacher_attendances` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `teacher_id` bigint(20) UNSIGNED NOT NULL,
  `att_date` date NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1 COMMENT '1=>present 0=>absent',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `teacher_attendances`
--

INSERT INTO `teacher_attendances` (`id`, `teacher_id`, `att_date`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, '2023-12-12', 1, '2023-12-12 07:56:43', '2023-12-12 07:56:43', NULL),
(2, 2, '2023-12-12', 1, '2023-12-12 07:56:43', '2023-12-12 07:56:43', NULL),
(3, 3, '2023-12-12', 1, '2023-12-12 07:56:43', '2023-12-12 07:56:43', NULL),
(4, 4, '2023-12-12', 1, '2023-12-12 07:56:43', '2023-12-12 07:56:43', NULL),
(5, 5, '2023-12-12', 1, '2023-12-12 07:56:43', '2023-12-12 07:56:43', NULL),
(6, 1, '2023-12-15', 1, '2023-12-15 12:08:26', '2023-12-15 12:08:26', NULL),
(7, 2, '2023-12-15', 0, '2023-12-15 12:08:26', '2023-12-15 12:08:26', NULL),
(8, 3, '2023-12-15', 1, '2023-12-15 12:08:26', '2023-12-15 12:08:26', NULL),
(9, 4, '2023-12-15', 1, '2023-12-15 12:08:26', '2023-12-15 12:08:26', NULL),
(10, 5, '2023-12-15', 1, '2023-12-15 12:08:26', '2023-12-15 12:08:26', NULL),
(11, 1, '2023-12-16', 0, '2023-12-16 00:31:13', '2023-12-16 00:31:13', NULL),
(12, 2, '2023-12-16', 0, '2023-12-16 00:31:13', '2023-12-16 00:31:13', NULL),
(13, 3, '2023-12-16', 0, '2023-12-16 00:31:13', '2023-12-16 00:31:13', NULL),
(14, 4, '2023-12-16', 0, '2023-12-16 00:31:13', '2023-12-16 00:31:13', NULL),
(15, 5, '2023-12-16', 0, '2023-12-16 00:31:13', '2023-12-16 00:31:13', NULL),
(16, 1, '2023-12-17', 1, '2023-12-17 00:32:53', '2023-12-17 00:32:53', NULL),
(17, 2, '2023-12-17', 1, '2023-12-17 00:32:53', '2023-12-17 00:32:53', NULL),
(18, 3, '2023-12-17', 1, '2023-12-17 00:32:53', '2023-12-17 00:32:53', NULL),
(19, 4, '2023-12-17', 1, '2023-12-17 00:32:53', '2023-12-17 00:32:53', NULL),
(20, 5, '2023-12-17', 0, '2023-12-17 00:32:53', '2023-12-17 00:32:53', NULL),
(21, 1, '2023-12-20', 1, '2023-12-20 01:14:21', '2023-12-20 01:14:21', NULL),
(22, 2, '2023-12-20', 1, '2023-12-20 01:14:21', '2023-12-20 01:14:21', NULL),
(23, 3, '2023-12-20', 0, '2023-12-20 01:14:21', '2023-12-20 01:14:21', NULL),
(24, 4, '2023-12-20', 1, '2023-12-20 01:14:21', '2023-12-20 01:14:21', NULL),
(25, 5, '2023-12-20', 1, '2023-12-20 01:14:21', '2023-12-20 01:14:21', NULL),
(26, 1, '2023-12-21', 1, '2023-12-20 21:11:32', '2023-12-20 21:11:32', NULL),
(27, 2, '2023-12-21', 1, '2023-12-20 21:11:32', '2023-12-20 21:11:32', NULL),
(28, 3, '2023-12-21', 1, '2023-12-20 21:11:32', '2023-12-20 21:11:32', NULL),
(29, 4, '2023-12-21', 1, '2023-12-20 21:11:32', '2023-12-20 21:11:32', NULL),
(30, 5, '2023-12-21', 0, '2023-12-20 21:11:32', '2023-12-20 21:11:32', NULL);

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
(2, 'Kaiser', NULL, 'kaiser@gmail.com', '01', NULL, 2, 2, '$2y$12$TBX5TW7w/jo564.gyviUmuDy9sKntL6KGBONQxZFkxxgJGp7CMZiu', 'en', '5531701231693.jpg', 0, 1, NULL, '2023-11-26 17:35:25', '2023-12-25 23:00:45', NULL),
(3, 'Istiak', NULL, 'istiak@gmail.com', '1234', NULL, 2, 3, '$2y$12$1YGT3MmLqAGH2iPEhJNfruv6XFBGBF3z31cBcqWe5MdG3KFWjQgkm', 'en', NULL, 0, 1, NULL, '2023-11-26 18:28:11', '2023-11-26 19:28:58', NULL),
(4, 'Ibrahim', NULL, 'ibrahim@gmail.com', '1', NULL, 2, 4, '$2y$12$wKl8Bu3G9xDpV0RgMv2KFOggsU6hBwqGISztu4VI2brEIrjT9dc.i', 'en', NULL, 0, 1, NULL, '2023-12-04 08:22:38', '2023-12-04 08:22:38', NULL),
(5, 'Burhan', NULL, 'fuad@gmail.com', '2', NULL, 2, 5, '$2y$12$tVF1oL.gSJ96Aw7ZBBLxX.XzQSy0q.VrWNb4Pb3kdI/teJwYGqgWC', 'en', NULL, 0, 1, NULL, '2023-12-04 08:29:12', '2023-12-04 08:29:12', NULL),
(6, 'Robiul', NULL, 'robiul@gmail.com', '6', NULL, 2, 6, '$2y$12$IwIe.Z7x3fCCcUwYPjGZw.4Boi6QzFNoWrABiGimkPp7cKN7ZTkuy', 'en', NULL, 0, 1, NULL, '2023-12-29 22:22:05', '2023-12-29 22:22:05', NULL);

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
-- Indexes for table `admit_cards`
--
ALTER TABLE `admit_cards`
  ADD PRIMARY KEY (`id`);

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
  ADD KEY `exam_results_subject_id_index` (`subject_id`),
  ADD KEY `exam_results_session_id_index` (`session_id`);

--
-- Indexes for table `fees`
--
ALTER TABLE `fees`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `final_results`
--
ALTER TABLE `final_results`
  ADD PRIMARY KEY (`id`),
  ADD KEY `final_results_class_id_index` (`class_id`),
  ADD KEY `final_results_exam_id_index` (`exam_id`),
  ADD KEY `final_results_student_id_index` (`student_id`);

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
-- Indexes for table `notice_boards`
--
ALTER TABLE `notice_boards`
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
-- Indexes for table `profiles`
--
ALTER TABLE `profiles`
  ADD PRIMARY KEY (`id`);

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
  ADD UNIQUE KEY `students_contact_no_en_unique` (`contact_no_en`),
  ADD UNIQUE KEY `students_father_contact_unique` (`father_contact`),
  ADD UNIQUE KEY `students_mother_contact_unique` (`mother_contact`),
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
-- Indexes for table `student_fees`
--
ALTER TABLE `student_fees`
  ADD PRIMARY KEY (`id`),
  ADD KEY `student_fees_student_id_index` (`student_id`);

--
-- Indexes for table `student_fee_details`
--
ALTER TABLE `student_fee_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `student_fee_details_fee_id_index` (`fee_id`),
  ADD KEY `student_fee_details_student_id_index` (`student_id`),
  ADD KEY `student_fee_details_class_id_index` (`class_id`);

--
-- Indexes for table `student_fee_payments`
--
ALTER TABLE `student_fee_payments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `student_fee_payments_class_id_index` (`class_id`),
  ADD KEY `student_fee_payments_student_roll_index` (`student_roll`),
  ADD KEY `student_fee_payments_student_name_index` (`student_name`),
  ADD KEY `student_fee_payments_fee_id_index` (`fee_id`);

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
-- Indexes for table `teacher_attendances`
--
ALTER TABLE `teacher_attendances`
  ADD PRIMARY KEY (`id`),
  ADD KEY `teacher_attendances_teacher_id_index` (`teacher_id`);

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
-- AUTO_INCREMENT for table `admit_cards`
--
ALTER TABLE `admit_cards`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `classes`
--
ALTER TABLE `classes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `exam_results`
--
ALTER TABLE `exam_results`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `fees`
--
ALTER TABLE `fees`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `final_results`
--
ALTER TABLE `final_results`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `groups`
--
ALTER TABLE `groups`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `notice_boards`
--
ALTER TABLE `notice_boards`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `periods`
--
ALTER TABLE `periods`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=150;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `profiles`
--
ALTER TABLE `profiles`
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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `student_attendances`
--
ALTER TABLE `student_attendances`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;

--
-- AUTO_INCREMENT for table `student_fees`
--
ALTER TABLE `student_fees`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `student_fee_details`
--
ALTER TABLE `student_fee_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;

--
-- AUTO_INCREMENT for table `student_fee_payments`
--
ALTER TABLE `student_fee_payments`
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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `teacher_attendances`
--
ALTER TABLE `teacher_attendances`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

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
  ADD CONSTRAINT `exam_results_session_id_foreign` FOREIGN KEY (`session_id`) REFERENCES `sessions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `exam_results_student_id_foreign` FOREIGN KEY (`student_id`) REFERENCES `students` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `exam_results_subject_id_foreign` FOREIGN KEY (`subject_id`) REFERENCES `subjects` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `final_results`
--
ALTER TABLE `final_results`
  ADD CONSTRAINT `final_results_class_id_foreign` FOREIGN KEY (`class_id`) REFERENCES `classes` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `final_results_exam_id_foreign` FOREIGN KEY (`exam_id`) REFERENCES `exams` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `final_results_student_id_foreign` FOREIGN KEY (`student_id`) REFERENCES `students` (`id`) ON DELETE CASCADE;

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
-- Constraints for table `student_fees`
--
ALTER TABLE `student_fees`
  ADD CONSTRAINT `student_fees_student_id_foreign` FOREIGN KEY (`student_id`) REFERENCES `students` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `student_fee_payments`
--
ALTER TABLE `student_fee_payments`
  ADD CONSTRAINT `student_fee_payments_class_id_foreign` FOREIGN KEY (`class_id`) REFERENCES `classes` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `student_fee_payments_fee_id_foreign` FOREIGN KEY (`fee_id`) REFERENCES `fees` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `student_fee_payments_student_name_foreign` FOREIGN KEY (`student_name`) REFERENCES `students` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `student_fee_payments_student_roll_foreign` FOREIGN KEY (`student_roll`) REFERENCES `students` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `teachers`
--
ALTER TABLE `teachers`
  ADD CONSTRAINT `teachers_department_id_foreign` FOREIGN KEY (`department_id`) REFERENCES `departments` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `teachers_designation_id_foreign` FOREIGN KEY (`designation_id`) REFERENCES `designations` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `teachers_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `teacher_attendances`
--
ALTER TABLE `teacher_attendances`
  ADD CONSTRAINT `teacher_attendances_teacher_id_foreign` FOREIGN KEY (`teacher_id`) REFERENCES `teachers` (`id`) ON DELETE CASCADE;

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
