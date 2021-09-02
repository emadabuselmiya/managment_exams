-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 02, 2021 at 03:54 AM
-- Server version: 5.7.24
-- PHP Version: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eexam`
--

-- --------------------------------------------------------

--
-- Table structure for table `availablecourses`
--

CREATE TABLE `availablecourses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `semester_id` bigint(20) UNSIGNED NOT NULL,
  `course_id` bigint(20) UNSIGNED NOT NULL,
  `mid_date` date NOT NULL,
  `mid_start_time` time NOT NULL,
  `mid_end_time` time NOT NULL,
  `final_date` date NOT NULL,
  `final_start_time` time NOT NULL,
  `final_end_time` time NOT NULL,
  `marktime` int(11) NOT NULL DEFAULT '4',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `availablecourses`
--

INSERT INTO `availablecourses` (`id`, `semester_id`, `course_id`, `mid_date`, `mid_start_time`, `mid_end_time`, `final_date`, `final_start_time`, `final_end_time`, `marktime`, `created_at`, `updated_at`) VALUES
(1, 1, 15, '2021-10-12', '09:00:00', '10:00:00', '2021-12-01', '09:00:00', '10:00:00', 4, NULL, NULL),
(2, 1, 12, '2021-10-12', '09:00:00', '10:00:00', '2021-12-01', '09:00:00', '10:00:00', 4, NULL, NULL),
(3, 1, 5, '2021-10-12', '09:00:00', '10:00:00', '2021-12-01', '09:00:00', '10:00:00', 4, NULL, NULL),
(4, 1, 8, '2021-10-12', '09:00:00', '10:00:00', '2021-12-01', '09:00:00', '10:00:00', 4, NULL, NULL),
(5, 1, 7, '2021-10-12', '09:00:00', '10:00:00', '2021-12-01', '09:00:00', '10:00:00', 4, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `courseclasses`
--

CREATE TABLE `courseclasses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `courseclasses`
--

INSERT INTO `courseclasses` (`id`, `name`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'متطلب جامعة ( عام )', NULL, NULL, NULL),
(2, 'متطلب كلية', NULL, NULL, NULL),
(3, 'متطلب قسم', NULL, NULL, NULL),
(4, 'غير ذلك', NULL, NULL, NULL),
(9, 'غير معرف', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `coursedescs`
--

CREATE TABLE `coursedescs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `coursedescs`
--

INSERT INTO `coursedescs` (`id`, `name`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'مساق نظري', NULL, NULL, NULL),
(2, 'مساق عملي', NULL, NULL, NULL),
(3, 'مساق بحثي', NULL, NULL, NULL),
(4, 'مساق تطبيقي', NULL, NULL, NULL),
(5, 'غير ذلك', NULL, NULL, NULL),
(9, 'غير معرف', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `courseplans`
--

CREATE TABLE `courseplans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `plan_id` bigint(20) UNSIGNED NOT NULL,
  `course_id` bigint(20) UNSIGNED NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `courseplans`
--

INSERT INTO `courseplans` (`id`, `plan_id`, `course_id`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 1, 1, NULL, NULL, NULL),
(2, 1, 2, NULL, NULL, NULL),
(3, 1, 3, NULL, NULL, NULL),
(4, 1, 4, NULL, NULL, NULL),
(5, 1, 5, NULL, NULL, NULL),
(6, 1, 6, NULL, NULL, NULL),
(7, 1, 7, NULL, NULL, NULL),
(8, 1, 8, NULL, NULL, NULL),
(9, 1, 9, NULL, NULL, NULL),
(10, 1, 10, NULL, NULL, NULL),
(11, 1, 11, NULL, NULL, NULL),
(12, 1, 12, NULL, NULL, NULL),
(13, 1, 13, NULL, NULL, NULL),
(14, 1, 14, NULL, NULL, NULL),
(15, 1, 15, NULL, NULL, NULL),
(16, 1, 16, NULL, NULL, NULL),
(17, 1, 17, NULL, NULL, NULL),
(18, 1, 18, NULL, NULL, NULL),
(19, 1, 19, NULL, NULL, NULL),
(20, 1, 20, NULL, NULL, NULL),
(21, 1, 21, NULL, NULL, NULL),
(22, 1, 22, NULL, NULL, NULL),
(23, 1, 23, NULL, NULL, NULL),
(24, 1, 24, NULL, NULL, NULL),
(25, 1, 25, NULL, NULL, NULL),
(26, 1, 26, NULL, NULL, NULL),
(27, 1, 27, NULL, NULL, NULL),
(28, 1, 28, NULL, NULL, NULL),
(29, 1, 29, NULL, NULL, NULL),
(30, 1, 30, NULL, NULL, NULL),
(31, 1, 31, NULL, NULL, NULL),
(32, 1, 32, NULL, NULL, NULL),
(33, 1, 33, NULL, NULL, NULL),
(34, 1, 34, NULL, NULL, NULL),
(35, 1, 35, NULL, NULL, NULL),
(36, 1, 36, NULL, NULL, NULL),
(37, 1, 37, NULL, NULL, NULL),
(38, 1, 38, NULL, NULL, NULL),
(39, 1, 39, NULL, NULL, NULL),
(40, 1, 40, NULL, NULL, NULL),
(41, 1, 41, NULL, NULL, NULL),
(42, 1, 42, NULL, NULL, NULL),
(43, 2, 43, NULL, NULL, NULL),
(44, 2, 44, NULL, NULL, NULL),
(45, 2, 45, NULL, NULL, NULL),
(46, 2, 46, NULL, NULL, NULL),
(47, 2, 47, NULL, NULL, NULL),
(48, 2, 48, NULL, NULL, NULL),
(49, 2, 49, NULL, NULL, NULL),
(50, 2, 50, NULL, NULL, NULL),
(51, 2, 51, NULL, NULL, NULL),
(52, 2, 52, NULL, NULL, NULL),
(53, 2, 53, NULL, NULL, NULL),
(54, 2, 54, NULL, NULL, NULL),
(55, 2, 55, NULL, NULL, NULL),
(56, 2, 56, NULL, NULL, NULL),
(57, 3, 2, NULL, NULL, NULL),
(58, 3, 3, NULL, NULL, NULL),
(59, 3, 4, NULL, NULL, NULL),
(60, 3, 5, NULL, NULL, NULL),
(61, 3, 8, NULL, NULL, NULL),
(62, 3, 12, NULL, NULL, NULL),
(63, 3, 13, NULL, NULL, NULL),
(64, 3, 57, NULL, NULL, NULL),
(65, 3, 58, NULL, NULL, NULL),
(66, 3, 59, NULL, NULL, NULL),
(67, 3, 60, NULL, NULL, NULL),
(68, 3, 61, NULL, NULL, NULL),
(69, 3, 62, NULL, NULL, NULL),
(70, 3, 63, NULL, NULL, NULL),
(71, 3, 64, NULL, NULL, NULL),
(72, 3, 65, NULL, NULL, NULL),
(73, 3, 66, NULL, NULL, NULL),
(74, 3, 67, NULL, NULL, NULL),
(75, 3, 68, NULL, NULL, NULL),
(76, 3, 69, NULL, NULL, NULL),
(77, 3, 70, NULL, NULL, NULL),
(78, 3, 71, NULL, NULL, NULL),
(79, 3, 72, NULL, NULL, NULL),
(80, 3, 73, NULL, NULL, NULL),
(81, 3, 74, NULL, NULL, NULL),
(82, 3, 75, NULL, NULL, NULL),
(83, 3, 76, NULL, NULL, NULL),
(84, 3, 77, NULL, NULL, NULL),
(85, 3, 78, NULL, NULL, NULL),
(86, 3, 79, NULL, NULL, NULL),
(87, 3, 80, NULL, NULL, NULL),
(88, 3, 81, NULL, NULL, NULL),
(89, 3, 82, NULL, NULL, NULL),
(90, 3, 83, NULL, NULL, NULL),
(91, 4, 84, NULL, NULL, NULL),
(92, 4, 85, NULL, NULL, NULL),
(93, 4, 86, NULL, NULL, NULL),
(94, 4, 87, NULL, NULL, NULL),
(95, 4, 88, NULL, NULL, NULL),
(96, 4, 89, NULL, NULL, NULL),
(97, 4, 90, NULL, NULL, NULL),
(98, 4, 91, NULL, NULL, NULL),
(99, 4, 92, NULL, NULL, NULL),
(100, 4, 93, NULL, NULL, NULL),
(101, 4, 94, NULL, NULL, NULL),
(102, 4, 95, NULL, NULL, NULL),
(103, 4, 96, NULL, NULL, NULL),
(104, 4, 97, NULL, NULL, NULL),
(105, 4, 98, NULL, NULL, NULL),
(106, 4, 99, NULL, NULL, NULL),
(107, 4, 100, NULL, NULL, NULL),
(108, 4, 101, NULL, NULL, NULL),
(109, 4, 102, NULL, NULL, NULL),
(110, 4, 103, NULL, NULL, NULL),
(111, 4, 104, NULL, NULL, NULL),
(112, 4, 105, NULL, NULL, NULL),
(113, 4, 106, NULL, NULL, NULL),
(114, 4, 2, NULL, NULL, NULL),
(115, 4, 5, NULL, NULL, NULL),
(116, 4, 8, NULL, NULL, NULL),
(117, 4, 4, NULL, NULL, NULL),
(118, 4, 44, NULL, NULL, NULL),
(119, 5, 2, NULL, NULL, NULL),
(120, 5, 10, NULL, NULL, NULL),
(121, 5, 107, NULL, NULL, NULL),
(122, 5, 108, NULL, NULL, NULL),
(123, 5, 43, NULL, NULL, NULL),
(124, 5, 109, NULL, NULL, NULL),
(125, 5, 110, NULL, NULL, NULL),
(126, 5, 3, NULL, NULL, NULL),
(127, 5, 5, NULL, NULL, NULL),
(128, 5, 17, NULL, NULL, NULL),
(129, 5, 111, NULL, NULL, NULL),
(130, 5, 112, NULL, NULL, NULL),
(131, 5, 113, NULL, NULL, NULL),
(132, 5, 46, NULL, NULL, NULL),
(133, 5, 114, NULL, NULL, NULL),
(134, 5, 8, NULL, NULL, NULL),
(135, 5, 115, NULL, NULL, NULL),
(136, 5, 116, NULL, NULL, NULL),
(137, 5, 117, NULL, NULL, NULL),
(138, 5, 14, NULL, NULL, NULL),
(139, 5, 40, NULL, NULL, NULL),
(140, 5, 39, NULL, NULL, NULL),
(141, 5, 118, NULL, NULL, NULL),
(142, 5, 4, NULL, NULL, NULL),
(143, 5, 33, NULL, NULL, NULL),
(144, 5, 119, NULL, NULL, NULL),
(145, 5, 120, NULL, NULL, NULL),
(146, 5, 121, NULL, NULL, NULL),
(147, 5, 122, NULL, NULL, NULL),
(148, 1, 123, NULL, NULL, NULL),
(149, 1, 124, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `course_code` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_ar` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_en` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `level` tinyint(4) NOT NULL,
  `semester` tinyint(4) NOT NULL,
  `academic_hour` tinyint(4) NOT NULL,
  `financial_hour` tinyint(4) NOT NULL,
  `coursetype_id` bigint(20) UNSIGNED NOT NULL,
  `coursedesc_id` bigint(20) UNSIGNED NOT NULL,
  `courseclass_id` bigint(20) UNSIGNED NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `course_code`, `name_ar`, `name_en`, `description`, `level`, `semester`, `academic_hour`, `financial_hour`, `coursetype_id`, `coursedesc_id`, `courseclass_id`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'ERSG1305', 'مدخل إلى علم النفس', 'Introduction to Psychology', '1', 1, 1, 3, 3, 1, 1, 3, NULL, NULL, NULL),
(2, 'UCAD1301', 'النحو والصرف', 'Arabic Grammar and Syntax', '1', 1, 1, 3, 3, 1, 1, 2, NULL, NULL, NULL),
(3, 'UCAD1303', 'لغة إنجليزية (1)', 'English Language-1', '1', 1, 2, 3, 3, 1, 1, 2, NULL, NULL, NULL),
(4, 'UCAD1302', 'مبادئ الحاسوب', 'Computer', '1', 2, 1, 3, 3, 1, 1, 2, NULL, NULL, NULL),
(5, 'UCAD2105', 'قرآن كريم', 'Koran Karem', '1', 3, 2, 1, 1, 1, 1, 2, NULL, NULL, NULL),
(6, 'UCAD3207', 'جغرافية فلسطين', 'Geography of Palestine', '1', 3, 1, 2, 2, 1, 1, 3, NULL, NULL, NULL),
(7, 'ERSG4331', 'مناهج البحث العلمي', 'Scientific Research Methods', '1', 4, 1, 3, 3, 1, 1, 3, NULL, NULL, NULL),
(8, 'UCAD2204', 'القضية الفلسطينية', 'The Palestine Issue', '1', 3, 2, 2, 2, 1, 1, 3, NULL, NULL, NULL),
(9, 'UCAD3206 ', 'الثقافة الإسلامية', 'Islamic Culture', '1', 3, 1, 2, 2, 1, 1, 2, NULL, NULL, NULL),
(10, 'ERSG1303', 'مبادئ التربية والتعليم', 'Principles of Learning & Education', '1', 1, 1, 3, 3, 1, 1, 3, NULL, NULL, NULL),
(11, 'ERSG1304', 'مدخل إلي علم الاجتماع', 'Intro to Sociology', '1', 1, 1, 3, 3, 1, 1, 3, NULL, NULL, NULL),
(12, 'ERSG1302', 'التشريح وعلم وظائف الأعضاء(1)', 'Anatomy & physiology-1', '1', 1, 1, 3, 3, 1, 1, 2, NULL, NULL, NULL),
(13, 'ERSG1307', 'التشريح وعلم وظائف الأعضاء(2)', 'Anatomy & physiology-2', '1', 1, 2, 3, 3, 1, 1, 2, NULL, NULL, NULL),
(14, 'ERSG3323', 'القياس والتقويم', 'Assessment & Evaluation', '1', 3, 1, 3, 3, 1, 1, 3, NULL, NULL, NULL),
(15, 'ERSG1306', 'مدخل إلى التأهيل ', 'Intro to Rehabilitation', '1', 1, 2, 3, 3, 1, 1, 3, NULL, NULL, NULL),
(16, 'ERSG3330 ', 'سياسة الدمج والحقوق والتشريعات ', 'Inclusive Policy , Right & Legislation', '1', 3, 2, 3, 3, 1, 1, 3, NULL, NULL, NULL),
(17, 'ERSG1308', 'النمو والتطور البشري', 'Human Growth & Development', '1', 1, 2, 3, 3, 1, 1, 3, NULL, NULL, NULL),
(18, 'ERSG2315', 'العلاج الطبيعي', 'Physiotherapy', '1', 2, 2, 3, 3, 1, 1, 3, NULL, NULL, NULL),
(19, 'ERSG2313', 'الإسعافات الأولية', 'First Aid', '1', 2, 1, 3, 3, 1, 1, 3, NULL, NULL, NULL),
(20, 'ERSG3322', 'العلاج الوظيفي ', 'Occupational Therapy', '1', 3, 1, 3, 3, 1, 1, 3, NULL, NULL, NULL),
(21, 'ERSG3327', 'التقنيات المساعدة في التأهيل ', 'Assistive Technology in Rehabilitation', '1', 3, 2, 3, 3, 1, 1, 3, NULL, NULL, NULL),
(22, 'ERSG2320', 'رياضة المعاقين والأنشطة الترفيهية', 'Sport & Recreation for P w D', '1', 2, 2, 3, 3, 1, 1, 3, NULL, NULL, NULL),
(23, 'ERSG1309', 'أخلاقيات المهنة', 'Professional Ethics', '1', 1, 2, 3, 3, 1, 1, 3, NULL, NULL, NULL),
(24, 'ERSG2318', 'الإحصاء ', 'Statistics', '1', 2, 2, 3, 3, 1, 1, 3, NULL, NULL, NULL),
(25, 'ERSG2312', 'لغة إنجليزية (2) ( نصوص في الإعاقة )', 'English Language -2', '1', 2, 1, 3, 3, 1, 1, 3, NULL, NULL, NULL),
(26, 'ERSG4333', 'مشروع تخرج', 'Graduation Project', '1', 4, 2, 3, 3, 1, 1, 3, NULL, NULL, NULL),
(27, 'ERSG2319', 'الصحة العامة ', 'Public Health', '1', 2, 2, 3, 3, 1, 1, 3, NULL, NULL, NULL),
(28, 'ERSG1301', 'مدخل إلى الإعاقة ', 'Intro to Disability', '1', 1, 1, 3, 3, 1, 1, 3, NULL, NULL, NULL),
(29, 'ERSG2310', 'الإعاقة العقلية (نظري)', 'Intellectual Disability', '1', 2, 1, 3, 3, 1, 1, 3, NULL, NULL, NULL),
(30, 'ERSG2211', 'الإعاقة العقلية (عملي)', 'Intellectual Disability Prac.', '1', 2, 1, 2, 2, 1, 2, 3, NULL, NULL, NULL),
(31, 'ERSG3324', 'الإعاقة الحركية (نظري)', 'Physical Disability (Th)', '1', 3, 1, 3, 3, 1, 1, 3, NULL, NULL, NULL),
(32, 'ERSG3225', 'الإعاقة الحركية (عملي)', 'Physical Disability Prac.', '1', 3, 1, 2, 2, 1, 2, 3, NULL, NULL, NULL),
(33, 'ERSG2214', 'لـغـة الإشـارة -1', 'Sign Language', '1', 2, 1, 2, 2, 1, 1, 2, NULL, NULL, NULL),
(34, 'ERSG2316', 'الإعاقة السمعية (نظري)', 'Hearing Disability', '1', 2, 2, 3, 3, 1, 1, 3, NULL, NULL, NULL),
(35, 'ERSG2217', 'الإعاقة السمعية (عملي)', 'Hearing Disability Prac.', '1', 2, 2, 2, 2, 1, 2, 3, NULL, NULL, NULL),
(36, 'ERSG4334', 'علاج مشكلات النطق والكلام', 'Management of Speech Problems', '1', 4, 2, 3, 3, 1, 1, 3, NULL, NULL, NULL),
(37, 'ERSG3328', 'الإعاقة البصرية (نظري)', 'Visual Disability', '1', 3, 2, 3, 3, 1, 1, 3, NULL, NULL, NULL),
(38, 'ERSG3229', 'الإعاقة البصرية (عملي)', 'Visual Disability Prac.', '1', 3, 2, 2, 2, 1, 2, 3, NULL, NULL, NULL),
(39, 'ERSG3126', 'برايل', 'Braille', '1', 3, 1, 1, 2, 1, 1, 3, NULL, NULL, NULL),
(40, 'ERSG4232', 'الإرشاد الحركي', 'Orientation & Mobility', '1', 4, 1, 2, 3, 1, 1, 3, NULL, NULL, NULL),
(41, 'ERSG2021', 'خدمة تطوعية', 'Community Service', '1', 4, 2, 0, 0, 4, 1, 3, NULL, NULL, NULL),
(42, 'ERSG4535', 'عملي متواصل', 'Continuous Practice', '1', 4, 2, 5, 5, 1, 2, 3, NULL, NULL, NULL),
(43, 'ERSS3203', 'مبادئ التربية الخاصة', 'Principles of Special Education', '1', 4, 1, 2, 2, 1, 1, 3, NULL, NULL, NULL),
(44, 'ERSS3201', 'طرق تدريس', 'General Teaching Methods', '1', 1, 2, 2, 2, 1, 1, 3, NULL, NULL, NULL),
(45, 'ERSS3302', 'مناهج وأساليب تدريس ذوي الاحتياجات الخاصة ', 'Methods in Special Education & Inclusion', '1', 2, 1, 3, 3, 1, 1, 3, NULL, NULL, NULL),
(46, 'ERSS4204 ', 'الوسائل التعليمية – الإعداد والاستخدام', 'Teaching Aids-construction & use', '1', 3, 2, 2, 2, 1, 1, 3, NULL, NULL, NULL),
(47, 'ERSS4209', 'قضايا معاصرة في التربية الخاصة', 'Current Issues in Special Education', '1', 4, 1, 2, 2, 1, 1, 3, NULL, NULL, NULL),
(48, 'ERSS4214', 'التنظيم والإدارة في التربية الخاصة', 'Organization & Administration in Special ED', '1', 4, 2, 2, 2, 1, 1, 3, NULL, NULL, NULL),
(49, 'ERSS4210', 'التربية الفنية', 'Education in the Arts', '1', 4, 2, 2, 2, 1, 1, 3, NULL, NULL, NULL),
(50, 'ERSS4205', 'علوم عامة', 'General Science', '1', 4, 1, 2, 2, 1, 1, 3, NULL, NULL, NULL),
(51, 'ERSS4213', 'رياضيات عامة', 'General Mathematics', '1', 4, 2, 2, 2, 1, 1, 3, NULL, NULL, NULL),
(52, 'ERSS4206', 'تربية بدنية', 'Physical Education', '1', 4, 1, 2, 2, 1, 1, 3, NULL, NULL, NULL),
(53, 'ERSS4307', 'إعاقات التعلم (نظري)', 'Learning Disability', '1', 4, 1, 3, 3, 1, 1, 3, NULL, NULL, NULL),
(54, 'ERSS4208', 'إعاقات التعلم (عملي)', 'Learning Disability Prac.', '1', 4, 1, 2, 2, 1, 2, 3, NULL, NULL, NULL),
(55, 'ERSS4211', 'تعديل السلوك ( نظري)', 'Behavioral Problems', '1', 4, 2, 2, 2, 1, 1, 3, NULL, NULL, NULL),
(56, 'ERSS4212', 'تعديل السلوك ( عملي)', 'Behavioral Problems Prac.', '1', 4, 2, 2, 2, 1, 2, 3, NULL, NULL, NULL),
(57, 'HSDE1201', 'الاتصال والتوثيق', 'Communication  & Documentation', '1', 1, 1, 2, 2, 1, 1, 3, NULL, NULL, NULL),
(58, 'HSDE1102', 'مصطلحات طبية', 'Medical Terminology', '1', 1, 1, 1, 1, 1, 1, 3, NULL, NULL, NULL),
(59, 'HSDE1310', 'علم النفس الاجتماعي- B', 'Social Psychology-B', '1', 1, 2, 3, 3, 1, 1, 3, NULL, NULL, NULL),
(60, 'HSDE1303', 'مقدمة في الخدمة الطبية الطارئة- I (نظري)', 'Introduction to Emergency Medical Services- I (Th....', '1', 1, 2, 3, 3, 1, 1, 3, NULL, NULL, NULL),
(61, 'HSDE1204', 'مقدمة في الخدمة الطبية الطارئة- I (عملي)', 'Introduction to Emergency Medical Services- I (Pr....', '1', 1, 2, 2, 2, 1, 2, 3, NULL, NULL, NULL),
(62, 'HSDE1205', 'أخلاقيات المهنة', 'Medical Ethics', '1', 1, 1, 2, 2, 1, 1, 3, NULL, NULL, NULL),
(63, 'HSDE1207', 'صيدلة عامة', 'General  pharmacology', '1', 1, 2, 2, 2, 1, 1, 3, NULL, NULL, NULL),
(64, 'HSDE1308', 'مقدمة في الخدمة الطبية الطارئة- II (نظري)', 'Introduction to EMS - II( Th.)', '1', 1, 2, 3, 3, 1, 1, 3, NULL, NULL, NULL),
(65, 'HSDE1209', 'مقدمة في الخدمة الطبية الطارئة - II (عملي)', 'Introduction to EMS - II( Pr.)', '1', 1, 2, 2, 2, 1, 2, 3, NULL, NULL, NULL),
(66, 'HSDE1211', 'لغة الإشارة -1', 'Sign Language', '1', 1, 2, 2, 2, 1, 1, 2, NULL, NULL, NULL),
(67, 'HSDE1206', 'عمليات الإسعاف', 'Ambulance Operation', '1', 1, 1, 2, 2, 1, 1, 3, NULL, NULL, NULL),
(68, 'HSDE2212', 'الصيدلة السريرية والعلاج الوريدي', 'Clinical Pharmacology & Intravenous Therapy', '1', 2, 1, 2, 2, 1, 1, 3, NULL, NULL, NULL),
(69, 'HSDE2213', 'طوارئ الاصابات -  I(نظري)', 'Trauma Emergency- I (Th.)', '1', 2, 1, 2, 2, 1, 1, 3, NULL, NULL, NULL),
(70, 'HSDE2214', 'طوارئ الاصابات -  I(عملي)', 'Trauma Emergency- I (Pr.)', '1', 2, 1, 2, 2, 1, 2, 3, NULL, NULL, NULL),
(71, 'HSDE2215', 'الطوارئ الطبية الباطنية  - I (نظري)', 'Medical Emergency - I (Th.)', '1', 2, 1, 2, 2, 1, 1, 3, NULL, NULL, NULL),
(72, 'HSDE2216', 'الطوارئ الطبية الباطنية -  I(عملي)', 'Medical Emergency - I (Pr.)', '1', 2, 1, 2, 2, 1, 2, 3, NULL, NULL, NULL),
(73, 'HSDE2217', 'الدفاع المدني', 'Civil Defense', '1', 2, 1, 2, 2, 1, 1, 3, NULL, NULL, NULL),
(74, 'HSDE2218', 'إدارة الكوارث', 'Disaster Management', '1', 2, 1, 2, 2, 1, 1, 3, NULL, NULL, NULL),
(75, 'HSDE2119', 'لياقة بدنية', 'Physical Fitness', '1', 2, 1, 1, 1, 1, 1, 3, NULL, NULL, NULL),
(76, 'HSDE2220', 'طوارئ الاصابات – II (نظري)', 'Trauma Emergency- II(Th.)', '1', 2, 2, 2, 2, 1, 1, 3, NULL, NULL, NULL),
(77, 'HSDE2221', 'طوارئ الاصابات -  II(عملي)', 'Trauma Emergency- II(Pr.)', '1', 2, 2, 2, 2, 1, 2, 3, NULL, NULL, NULL),
(78, 'HSDE2222', 'الطوارئ الطبية الباطنية  – II (نظري)', 'Medical Emergency - II(Th.)', '1', 2, 2, 2, 2, 1, 1, 3, NULL, NULL, NULL),
(79, 'HSDE2223', 'الطوارئ الطبية الباطنية  -  II(عملي)', 'Medical Emergency - II(Pr.)', '1', 2, 2, 2, 2, 1, 2, 3, NULL, NULL, NULL),
(80, 'HSDE2224', 'حالات طوارئ خاصة (نظري)', 'special emergency situation- (Th.)', '1', 2, 2, 2, 2, 1, 1, 3, NULL, NULL, NULL),
(81, 'HSDE2225', 'حالات طوارئ خاصة (عملي)', 'special emergency situation- (Pr.)', '1', 2, 2, 2, 2, 1, 2, 3, NULL, NULL, NULL),
(82, 'HSDE2126', 'العناية بمجري التنفس (نظري)', 'Airway Management  - (Th.)', '1', 2, 2, 1, 1, 1, 1, 3, NULL, NULL, NULL),
(83, 'HSDE2127', 'العناية بمجري التنفس (عملي)', 'Airway Management - (Pr.)', '1', 2, 2, 1, 1, 1, 2, 3, NULL, NULL, NULL),
(84, 'ERSI1201', 'تشريح وفسيولوجيا الرأس', 'Head Anatomy & Physiology', '1', 1, 1, 2, 2, 1, 1, 3, NULL, NULL, NULL),
(85, 'ERSI1302', 'لغة اشارة عربية موحدة(1)', 'Sign Language ', '1', 1, 1, 3, 3, 1, 1, 3, NULL, NULL, NULL),
(86, 'ERSI1303', 'مقدمة في الاعاقة السمعية البصرية ', 'Intr. to hearing & Visual Dis.', '1', 1, 1, 3, 3, 1, 1, 3, NULL, NULL, NULL),
(87, 'ERSI1304', 'مقدمة في الترجمة ', 'Intr. to Interpretation ', '1', 1, 1, 3, 3, 1, 1, 3, NULL, NULL, NULL),
(88, 'ERSI1205', 'اخلاقيات المهنة', 'Professional Ethics', '1', 1, 1, 2, 2, 1, 1, 3, NULL, NULL, NULL),
(89, 'ERSI1306', 'لغة اشارة عربية موحدة(2)', 'Sign language II', '1', 1, 2, 3, 3, 1, 1, 3, NULL, NULL, NULL),
(90, 'ERSI1307', 'مجتمع الصم من منظور ثقافي وتاريخي ', 'Socio-culture perspectives', '1', 1, 2, 3, 3, 1, 1, 3, NULL, NULL, NULL),
(91, 'ERSI1208', 'لغويات لغة الاشارة المحلية ', 'Linguistics for Local Language', '1', 1, 2, 2, 2, 1, 1, 3, NULL, NULL, NULL),
(92, 'ERSI1209', 'مهارات الترجمة والتقنيات ', 'Interpret. Skills & Technology', '1', 1, 2, 2, 2, 1, 1, 3, NULL, NULL, NULL),
(93, 'ERSI1310', 'المبادئ والممارسات في الترجمة المتعاقبة', 'Principles & Prac. Of Consecutive Interpret. ', '1', 1, 2, 3, 3, 1, 1, 3, NULL, NULL, NULL),
(94, 'ERSI1211', 'مقدمة في السمعيات', 'Intro. to Audiology', '1', 1, 2, 2, 2, 1, 1, 3, NULL, NULL, NULL),
(95, 'ERSI2312', 'لغة اشارة للشخص الأصم الكفيف', 'Sign Language for PDB', '1', 2, 1, 3, 3, 1, 1, 3, NULL, NULL, NULL),
(96, 'ERSI2313', 'الترجمة من الصوت الى الاشارة والعكس ( ترجمة +معمل)', 'Voice to Sign & V Interpretation ', '1', 2, 1, 3, 3, 1, 1, 3, NULL, NULL, NULL),
(97, 'ERSI2314', 'المبادئ والممارسات في الترجمة الفورية ', 'Principle & Pract of Simultaneous Interpretation ', '1', 2, 1, 3, 3, 1, 1, 3, NULL, NULL, NULL),
(98, 'ERSI2215', 'لغة الاشارة الأكاديمية ', 'Academic Sign Language', '1', 2, 1, 2, 2, 1, 1, 3, NULL, NULL, NULL),
(99, 'ERSI2216', 'القاموس الاشاري الاسلامي', 'Islam  Sign Language', '1', 2, 1, 2, 2, 1, 1, 3, NULL, NULL, NULL),
(100, 'ERSI2217', 'الاتصال التام وقراءة الشفاه', 'Total Commun. & Lip Reading', '1', 2, 1, 2, 2, 1, 1, 3, NULL, NULL, NULL),
(101, 'ERSI2318', 'الترجمة الفورية للمناقشات والاحاديث والتقارير +معمل', 'Simultaneous Inter Doc, Speech, Discussion ', '1', 2, 2, 3, 3, 1, 1, 3, NULL, NULL, NULL),
(102, 'ERSI2219', 'القاموس الاشاري الطبي ', ' Medical Sign Language', '1', 2, 2, 2, 2, 1, 1, 3, NULL, NULL, NULL),
(103, 'ERSI2320', 'خبرة ميدانية ويوم دراسي ', 'Field work & Seminar ', '1', 2, 2, 3, 3, 1, 2, 3, NULL, NULL, NULL),
(104, 'ERSI2321', 'الترجمة للشخص الأصم –الكفيف ', 'Interpret for PDB', '1', 2, 2, 3, 3, 1, 1, 3, NULL, NULL, NULL),
(105, 'ERSI2322', 'لغة انجليزية خاصة ', 'Special English Language', '1', 2, 2, 3, 3, 1, 1, 3, NULL, NULL, NULL),
(106, 'ERSI1222', 'علم النفس الاجتماعي', 'Social Psychology', '1', 1, 1, 2, 2, 1, 1, 3, NULL, NULL, NULL),
(107, 'ERSC1109', 'أخلاقيات المهنة', 'Professional Ethics', '', 1, 1, 1, 1, 1, 1, 1, NULL, NULL, NULL),
(108, 'ERSC1302', 'مدخل الى التعليم والتدخل في الطفولة المبكرة\r\n', 'Introducation to Education and Intervention\r\n', '', 1, 1, 3, 3, 1, 1, 1, NULL, NULL, NULL),
(109, 'ERSC1203', 'البيئة التعليمية في رياض الأطفال', 'Educational Environment in Kindergartens', '', 1, 1, 2, 2, 1, 1, 1, NULL, NULL, NULL),
(110, 'ERSC1304', 'التشريح وعلم وظائف الاعضاء', 'Anatomy and Physiology', '', 1, 1, 3, 3, 1, 1, 1, NULL, NULL, NULL),
(111, 'ERSC3203', 'الدمج والحقوق والتشريعات', 'Inclusion, Rights and Legislation', '', 1, 1, 2, 2, 1, 1, 1, NULL, NULL, NULL),
(112, 'ERSC1305', 'الاعاقة (1) نظري', 'Disability - I Theory', '', 1, 1, 3, 3, 1, 1, 1, NULL, NULL, NULL),
(113, 'ERSC1206', 'طرق التنبيه والتدخل المبكر للأطفال ذوي الاعاقة', 'Techniques of Stimulation and Early Intervention', '', 1, 1, 2, 2, 1, 1, 1, NULL, NULL, NULL),
(114, 'ERSC1207', 'تدريب ميداني  (1)', 'Field Practice - I', '', 1, 1, 2, 2, 1, 1, 1, NULL, NULL, NULL),
(115, 'ERSC2308', 'الاعاقة (2) نظري', 'Disability - II Theory', '', 1, 2, 3, 3, 1, 1, 1, NULL, NULL, NULL),
(116, 'ERSC2209', 'تدريب ميداني (2)', 'Field Practice - II', '', 2, 1, 2, 2, 1, 1, 1, NULL, NULL, NULL),
(117, 'ERSC2210', 'دور اللعب في  في التعليم', 'Role of Play in Education\r\n', '', 2, 1, 2, 2, 1, 1, 1, NULL, NULL, NULL),
(118, 'ERSC2211', 'الاسعافات الاولية', 'First Aid', '', 2, 1, 2, 2, 1, 1, 1, NULL, NULL, NULL),
(119, 'ERSC2312', 'التعليم الجامع  في الطفولة المبكرة', 'Inclusive Education in Early Childhood', '', 2, 2, 3, 3, 1, 1, 1, NULL, NULL, NULL),
(120, 'ERSC2313', 'التربية الفنية والبدنية في الطفولة المبكرة', 'Arts and Physical Education in Early Childhood', '', 2, 2, 3, 3, 1, 1, 1, NULL, NULL, NULL),
(121, 'ERSC2214', 'التعاون مع  الاسرة في الطفولة المبكرة', 'Collaboration with Family in Early Childhood', '', 2, 2, 2, 2, 1, 1, 1, NULL, NULL, NULL),
(122, 'ERSC2315', 'دراسة حالة وحلقة دراسية', 'Case Study and Seminar', '', 2, 2, 3, 3, 1, 1, 1, NULL, NULL, NULL),
(123, 'ERSG4336', 'الدمج الأكاديمي وغرف المصادر', 'Academic Inclusion and Resource Room', '1', 4, 2, 3, 3, 2, 1, 3, NULL, '2021-06-01 07:20:32', NULL),
(124, 'ERSG4337', 'إرشاد ذوي الإعاقة وأسرهم', 'Counseling PwD and Families', '1', 4, 2, 3, 3, 2, 1, 3, NULL, '2021-06-01 07:20:32', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `coursetypes`
--

CREATE TABLE `coursetypes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `coursetypes`
--

INSERT INTO `coursetypes` (`id`, `name`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'مساق إجباري', NULL, NULL, NULL),
(2, 'مساق إختياري', NULL, NULL, NULL),
(3, 'مساق حر', NULL, NULL, NULL),
(4, 'غير ذلك', NULL, NULL, NULL),
(9, 'غير معرف', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `department_name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `department_name_en` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `department_key_gpa` double(4,2) NOT NULL,
  `department_credit_normal` tinyint(4) NOT NULL,
  `department_credit_tr` tinyint(4) NOT NULL,
  `grade_id` bigint(20) UNSIGNED NOT NULL,
  `department_fail` tinyint(4) NOT NULL,
  `department_zero_limit` tinyint(4) NOT NULL,
  `department_volunteer` tinyint(4) NOT NULL,
  `employee_id` bigint(20) UNSIGNED NOT NULL,
  `active` char(1) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `department_code` int(11) NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`id`, `department_name`, `department_name_en`, `department_key_gpa`, `department_credit_normal`, `department_credit_tr`, `grade_id`, `department_fail`, `department_zero_limit`, `department_volunteer`, `employee_id`, `active`, `department_code`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'التربية الخاصة وإعادة التأهيل', 'Special Education and Rehabilitation', 65.00, 12, 14, 4, 60, 40, 120, 2, '1', 11654, NULL, NULL, NULL),
(2, 'فني الإسعاف والطوارئ', 'Emergency Medical Technician (EMT-I)', 55.00, 15, 15, 5, 50, 35, 60, 1, '1', 11655, NULL, NULL, NULL),
(3, 'مترجم لغة الإشارة', 'Sign Language Interpreter', 55.00, 15, 15, 5, 50, 35, 60, 3, '1', 12061, NULL, '2018-08-18 22:00:00', '2018-08-18 22:00:00'),
(4, 'التعليم والتعلم في الطفولة المبكرة', 'Learning and Education in Early Childhood', 50.00, 15, 15, 5, 50, 35, 60, 2, '1', 12158, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `second_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `third_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fourth_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instructor` enum('0','1') COLLATE utf8mb4_unicode_ci NOT NULL,
  `accepted` tinyint(1) NOT NULL DEFAULT '0',
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`id`, `name`, `first_name`, `second_name`, `third_name`, `fourth_name`, `email`, `instructor`, `accepted`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'khalid', 'khalid', 'k', 'manuaruwe', 'ASDASD', 'a@a.com', '0', 1, '$2y$10$F1phQifWu4QfFh4zck2wpu4qagUFT0Y.MMA6sTIcPfTQO2w7pjjfu', NULL, '2021-08-25 06:32:48', '2021-08-25 06:32:48'),
(2, 'khalid2', 'khalid', 'k', 'manuaruwe', 'ASDASD', 'a2@a.com', '0', 1, '$2y$10$F1phQifWu4QfFh4zck2wpu4qagUFT0Y.MMA6sTIcPfTQO2w7pjjfu', NULL, '2021-08-25 06:32:48', '2021-08-25 06:32:48'),
(3, 'khalid3', 'khalid', 'k', 'manuaruwe', 'ASDASD', 'a3@a.com', '0', 1, '$2y$10$F1phQifWu4QfFh4zck2wpu4qagUFT0Y.MMA6sTIcPfTQO2w7pjjfu', NULL, '2021-08-25 06:32:48', '2021-08-25 06:32:48');

-- --------------------------------------------------------

--
-- Table structure for table `grades`
--

CREATE TABLE `grades` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name_ar` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_en` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `grades`
--

INSERT INTO `grades` (`id`, `name_ar`, `name_en`, `created_at`, `updated_at`) VALUES
(1, 'دكتوراه', '', NULL, NULL),
(2, 'ماجستير', '', NULL, NULL),
(3, 'دبلوم عالي', '', NULL, NULL),
(4, 'بكالوريوس', 'Bachelor', NULL, NULL),
(5, 'دبلوم متوسط', 'Intermediate Diploma', NULL, NULL),
(6, 'ثانوية عامة', '', NULL, NULL),
(7, 'دون الثانوية', '', NULL, NULL),
(8, 'بلا', '', NULL, NULL),
(9, 'غير معرف', '', NULL, NULL),
(12, 'دبلوم مهني متخصص', '', NULL, NULL),
(13, 'تأهيل تربوي', '', NULL, NULL),
(17, 'سنة تحضيرية', '', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `graduationsessions`
--

CREATE TABLE `graduationsessions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `session_number` int(11) NOT NULL,
  `decision_number` int(11) NOT NULL,
  `session_ar_date` date NOT NULL,
  `session_hi_date` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `majors`
--

CREATE TABLE `majors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `department_id` bigint(20) UNSIGNED NOT NULL,
  `name_ar` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_en` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `employee_id` bigint(20) UNSIGNED NOT NULL,
  `active` char(1) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `majors`
--

INSERT INTO `majors` (`id`, `department_id`, `name_ar`, `name_en`, `employee_id`, `active`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 1, 'عام', 'General', 1, '1', NULL, NULL, NULL),
(2, 1, 'تربية خاصة', 'Special Education', 1, '1', NULL, NULL, NULL),
(3, 2, 'فني إسعاف وطوارئ', 'Emergency Medical Technician (EMT-I)', 2, '1', NULL, NULL, NULL),
(4, 3, 'مترجم لغة الإشارة', 'Sign Language Interpreter 	', 3, '1', NULL, '2018-08-18 22:00:00', '2018-08-18 22:00:00'),
(5, 4, 'التعليم والتعلم في الطفولة المبكرة', 'Learning and Education in Early Childhood', 2, '1', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `marks`
--

CREATE TABLE `marks` (
  `id` int(10) UNSIGNED NOT NULL,
  `student_id` bigint(20) UNSIGNED NOT NULL,
  `semesterinstructor_id` int(10) UNSIGNED NOT NULL,
  `regtype` char(1) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `course_id` bigint(20) UNSIGNED NOT NULL,
  `semester_id` bigint(20) UNSIGNED NOT NULL,
  `mid_mark` int(11) DEFAULT NULL,
  `activty_mark` int(11) DEFAULT NULL,
  `final_mark` int(11) DEFAULT NULL,
  `total_mark` int(11) DEFAULT NULL,
  `study_status` char(1) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `active` char(1) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `marks`
--

INSERT INTO `marks` (`id`, `student_id`, `semesterinstructor_id`, `regtype`, `course_id`, `semester_id`, `mid_mark`, `activty_mark`, `final_mark`, `total_mark`, `study_status`, `active`, `created_at`, `updated_at`) VALUES
(1, 2020063, 2, '1', 12, 1, NULL, NULL, NULL, NULL, '1', '1', NULL, NULL),
(2, 2020067, 2, '1', 12, 1, NULL, NULL, NULL, NULL, '1', '1', NULL, NULL),
(3, 2020046, 2, '1', 12, 1, NULL, NULL, NULL, NULL, '1', '1', NULL, NULL),
(4, 2017102, 2, '1', 12, 1, NULL, NULL, NULL, NULL, '1', '1', NULL, NULL),
(5, 2018047, 2, '1', 12, 1, NULL, NULL, NULL, NULL, '1', '1', NULL, NULL),
(6, 2020019, 1, '1', 15, 1, NULL, NULL, NULL, NULL, '1', '1', NULL, NULL),
(7, 2020029, 1, '1', 15, 1, NULL, NULL, NULL, NULL, '1', '1', NULL, NULL),
(8, 2020011, 1, '1', 15, 1, NULL, NULL, NULL, NULL, '1', '1', NULL, NULL),
(9, 2020015, 1, '1', 15, 1, NULL, NULL, NULL, NULL, '1', '1', NULL, NULL),
(10, 2020012, 1, '1', 15, 1, NULL, NULL, NULL, NULL, '1', '1', NULL, NULL),
(21, 2018015, 3, '1', 5, 1, NULL, NULL, NULL, NULL, '1', '1', NULL, NULL),
(22, 2018016, 3, '1', 5, 1, NULL, NULL, NULL, NULL, '1', '1', NULL, NULL),
(23, 2018019, 3, '1', 5, 1, NULL, NULL, NULL, NULL, '1', '1', NULL, NULL),
(24, 2018021, 3, '1', 5, 1, NULL, NULL, NULL, NULL, '1', '1', NULL, NULL),
(25, 2018025, 3, '1', 5, 1, NULL, NULL, NULL, NULL, '1', '1', NULL, NULL),
(26, 2018015, 4, '1', 8, 1, NULL, NULL, NULL, NULL, '1', '1', NULL, NULL),
(27, 2018016, 4, '1', 8, 1, NULL, NULL, NULL, NULL, '1', '1', NULL, NULL),
(28, 2018019, 4, '1', 8, 1, NULL, NULL, NULL, NULL, '1', '1', NULL, NULL),
(29, 2018021, 4, '1', 8, 1, NULL, NULL, NULL, NULL, '1', '1', NULL, NULL),
(30, 2018025, 4, '1', 8, 1, NULL, NULL, NULL, NULL, '1', '1', NULL, NULL),
(31, 2019023, 5, '1', 7, 1, NULL, NULL, NULL, NULL, '1', '1', NULL, NULL),
(32, 2019024, 5, '1', 7, 1, NULL, NULL, NULL, NULL, '1', '1', NULL, NULL),
(33, 2019025, 5, '1', 7, 1, NULL, NULL, NULL, NULL, '1', '1', NULL, NULL),
(34, 2019026, 5, '1', 7, 1, NULL, NULL, NULL, NULL, '1', '1', NULL, NULL),
(35, 2019027, 5, '1', 7, 1, NULL, NULL, NULL, NULL, '1', '1', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `media`
--

CREATE TABLE `media` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL,
  `uuid` char(36) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `collection_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mime_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `disk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `conversions_disk` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `size` bigint(20) UNSIGNED NOT NULL,
  `manipulations` json NOT NULL,
  `custom_properties` json NOT NULL,
  `generated_conversions` json NOT NULL,
  `responsive_images` json NOT NULL,
  `order_column` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2019_01_01_173050_create_stdstatuses_table', 1),
(2, '2019_01_01_173110_create_grades_table', 1),
(3, '2019_01_01_194452_create_coursetypes_table', 1),
(4, '2019_01_01_194810_create_coursedescs_table', 1),
(5, '2019_01_01_194936_create_courseclasses_table', 1),
(6, '2019_06_28_075748_create_employees_table', 1),
(7, '2019_06_28_075910_create_students_table', 1),
(8, '2019_06_29_110628_create_graduationsessions_table', 1),
(9, '2019_06_29_111257_create_departments_table', 1),
(10, '2019_06_29_111353_create_majors_table', 1),
(11, '2019_06_29_111359_create_plans_table', 1),
(12, '2019_06_29_112158_create_studentacademics_table', 1),
(13, '2019_06_29_173200_create_semesters_table', 1),
(14, '2019_06_29_173206_create_courses_table', 1),
(15, '2019_06_29_173207_create_availablecourses_table', 1),
(16, '2019_06_29_173208_create_semesterinstructors_table', 1),
(17, '2019_06_30_173148_create_marks_table', 1),
(18, '2019_08_29_130109_create_courseplans_table', 1),
(19, '2021_08_25_090131_create_media_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `plans`
--

CREATE TABLE `plans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `major_id` bigint(20) UNSIGNED NOT NULL,
  `active` char(1) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `hr` int(11) NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `plans`
--

INSERT INTO `plans` (`id`, `major_id`, `active`, `hr`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 1, '1', 0, NULL, NULL, NULL),
(2, 2, '1', 0, NULL, NULL, NULL),
(3, 3, '1', 0, NULL, NULL, NULL),
(4, 4, '1', 0, NULL, '2018-08-18 22:00:00', '2018-08-18 22:00:00'),
(5, 5, '1', 0, NULL, '2019-09-11 22:00:00', '2019-09-11 22:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `semesterinstructors`
--

CREATE TABLE `semesterinstructors` (
  `id` int(10) UNSIGNED NOT NULL,
  `availablecourse_id` bigint(20) UNSIGNED NOT NULL,
  `employee_id` bigint(20) UNSIGNED NOT NULL,
  `class` int(11) NOT NULL,
  `room` int(11) NOT NULL,
  `class_start_time` time NOT NULL,
  `class_end_time` time NOT NULL,
  `class_day` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `approvedstatus` char(1) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `active` char(1) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `semesterinstructors`
--

INSERT INTO `semesterinstructors` (`id`, `availablecourse_id`, `employee_id`, `class`, `room`, `class_start_time`, `class_end_time`, `class_day`, `approvedstatus`, `active`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 1, 110, '10:00:00', '11:00:00', 'su', '0', '1', NULL, NULL),
(2, 2, 2, 1, 110, '10:00:00', '11:00:00', 'su', '0', '1', NULL, NULL),
(3, 3, 2, 1, 110, '10:00:00', '11:00:00', 'su', '0', '1', NULL, NULL),
(4, 4, 3, 1, 110, '10:00:00', '11:00:00', 'su', '0', '1', NULL, NULL),
(5, 5, 1, 1, 110, '10:00:00', '11:00:00', 'su', '0', '1', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `semesters`
--

CREATE TABLE `semesters` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `semester_period` tinyint(4) NOT NULL,
  `year` varchar(9) COLLATE utf8mb4_unicode_ci NOT NULL,
  `start_date` date NOT NULL,
  `end_add_date` date NOT NULL,
  `end_remove_date` date NOT NULL,
  `end_withdrawal_date` date NOT NULL,
  `final_date` date NOT NULL,
  `minimumcharge` tinyint(4) NOT NULL DEFAULT '6',
  `active` tinyint(4) NOT NULL DEFAULT '0',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `semesters`
--

INSERT INTO `semesters` (`id`, `semester_period`, `year`, `start_date`, `end_add_date`, `end_remove_date`, `end_withdrawal_date`, `final_date`, `minimumcharge`, `active`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 1, '2021-2022', '2021-08-13', '2021-09-13', '2021-09-23', '2021-11-23', '2021-12-01', 6, 1, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `stdstatuses`
--

CREATE TABLE `stdstatuses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `stdstatuses`
--

INSERT INTO `stdstatuses` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'يداوم', NULL, NULL),
(2, 'منسحب', NULL, NULL),
(3, 'منقطع', NULL, NULL),
(4, 'مؤجل', NULL, NULL),
(5, 'معتقل', NULL, NULL),
(6, 'مفصول', NULL, NULL),
(7, 'غير ذلك', NULL, NULL),
(9, 'غير معرف', NULL, NULL),
(21, 'جديد', NULL, NULL),
(22, 'مرفوض', NULL, NULL),
(23, 'خريج', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `studentacademics`
--

CREATE TABLE `studentacademics` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_id` bigint(20) UNSIGNED NOT NULL,
  `department_id` bigint(20) UNSIGNED NOT NULL,
  `major_id` bigint(20) UNSIGNED NOT NULL,
  `study_hours` int(11) NOT NULL DEFAULT '0',
  `pass_hours` int(11) NOT NULL DEFAULT '0',
  `plan_id` bigint(20) UNSIGNED NOT NULL,
  `departmentplan` bigint(20) UNSIGNED NOT NULL,
  `level` int(11) NOT NULL DEFAULT '1',
  `credit_value` int(11) NOT NULL,
  `volunteer_hours` int(11) NOT NULL DEFAULT '120',
  `cgpa` double(4,2) NOT NULL DEFAULT '0.00',
  `balance` double(5,1) NOT NULL DEFAULT '0.0',
  `graduationsession_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `studentacademics`
--

INSERT INTO `studentacademics` (`id`, `student_id`, `department_id`, `major_id`, `study_hours`, `pass_hours`, `plan_id`, `departmentplan`, `level`, `credit_value`, `volunteer_hours`, `cgpa`, `balance`, `graduationsession_id`, `created_at`, `updated_at`) VALUES
(89, 2015007, 1, 2, 124, 124, 2, 1, 2, 12, 60, 86.13, 0.0, 0, NULL, '2019-03-10 09:23:25'),
(100, 2015019, 1, 2, 133, 130, 2, 1, 2, 14, 120, 77.19, -395.0, 0, NULL, '2021-06-30 09:00:19'),
(105, 2015025, 1, 2, 112, 77, 2, 1, 2, 12, 120, 63.48, -957.0, 0, NULL, '2019-08-04 09:12:38'),
(116, 2015036, 1, 2, 113, 113, 2, 1, 2, 12, 0, 72.96, -226.2, 0, NULL, '2021-07-13 05:07:18'),
(131, 2016003, 1, 2, 144, 140, 2, 1, 2, 12, 120, 72.51, -1010.0, 0, NULL, '2021-02-08 12:01:29'),
(132, 2016004, 1, 2, 18, 18, 1, 1, 1, 12, 120, 66.17, -210.0, 0, NULL, '2017-10-04 17:12:58'),
(144, 2016016, 1, 2, 50, 31, 2, 1, 1, 12, 120, 63.04, -113.0, 0, NULL, '2018-06-03 12:44:19'),
(149, 2016021, 1, 2, 70, 55, 2, 1, 2, 12, 120, 65.87, -91.0, 0, NULL, '2019-07-03 09:41:36'),
(152, 2016024, 1, 2, 143, 137, 2, 1, 2, 12, 120, 74.12, -1011.0, 0, NULL, '2021-07-13 05:07:18'),
(160, 2017006, 1, 2, 71, 62, 2, 1, 2, 12, 120, 66.63, -345.0, NULL, '2017-07-29 13:39:12', '2019-07-03 09:41:28'),
(161, 2017012, 1, 2, 93, 87, 2, 1, 2, 12, 120, 68.18, -436.0, NULL, '2017-07-30 14:19:21', '2021-08-11 04:15:27'),
(162, 2017013, 1, 2, 93, 85, 2, 1, 2, 12, 120, 72.08, -371.0, NULL, '2017-07-30 14:27:24', '2020-07-23 13:43:39'),
(167, 2017017, 1, 2, 123, 123, 2, 1, 2, 12, 120, 72.86, -528.0, NULL, '2017-08-01 15:54:01', '2021-06-30 05:23:33'),
(183, 2017033, 1, 2, 114, 111, 2, 1, 2, 12, 120, 71.58, -350.0, NULL, '2017-08-21 15:38:12', '2021-02-25 09:59:45'),
(248, 2017100, 1, 2, 19, 19, 2, 1, 1, 12, 120, 80.47, -153.0, NULL, '2018-01-14 15:58:28', '2018-06-03 12:44:19'),
(249, 2017101, 1, 2, 124, 124, 2, 1, 2, 12, 120, 75.27, -32.0, NULL, '2018-01-25 13:33:59', '2021-06-30 05:41:44'),
(250, 2017103, 1, 2, 118, 115, 2, 1, 2, 12, 120, 81.02, -5.0, NULL, '2018-01-30 16:21:53', '2021-06-30 05:23:33'),
(251, 2017102, 1, 2, 129, 126, 2, 1, 2, 12, 120, 82.00, -292.0, NULL, '2018-02-01 15:11:14', '2021-07-13 05:07:18'),
(252, 2018001, 1, 2, 111, 111, 2, 1, 2, 12, 0, 78.59, -134.0, NULL, '2018-07-17 09:16:33', '2021-07-06 05:33:49'),
(255, 2018004, 1, 2, 111, 111, 2, 1, 2, 12, 0, 78.56, -189.0, NULL, '2018-07-22 11:12:36', '2021-07-06 05:33:49'),
(256, 2018005, 1, 2, 111, 111, 2, 1, 2, 12, 0, 82.71, 5.0, NULL, '2018-07-26 09:10:36', '2021-07-06 05:33:49'),
(257, 2018006, 1, 2, 111, 111, 2, 1, 2, 12, 0, 88.50, -252.0, NULL, '2018-07-29 08:12:07', '2021-07-06 05:33:49'),
(259, 2018011, 1, 2, 111, 108, 2, 1, 2, 12, 0, 73.62, -159.0, NULL, '2018-08-10 20:19:10', '2021-07-06 05:33:49'),
(260, 2018015, 1, 2, 114, 111, 2, 1, 2, 12, 0, 80.98, -41.0, NULL, '2018-08-14 12:23:49', '2021-07-06 05:33:49'),
(261, 2018009, 1, 2, 111, 111, 2, 1, 2, 12, 0, 83.78, -19.0, NULL, '2018-08-14 20:14:44', '2021-07-06 05:33:49'),
(268, 2018019, 2, 3, 38, 38, 3, 3, 2, 15, 0, 75.15, -330.0, NULL, '2018-09-03 10:16:57', '2019-12-17 10:31:40'),
(270, 2018012, 1, 2, 111, 111, 2, 1, 2, 12, 0, 76.69, -59.0, NULL, '2018-09-04 06:37:49', '2021-07-06 05:33:49'),
(272, 2018024, 1, 2, 108, 108, 2, 1, 2, 12, 0, 75.66, -46.0, NULL, '2018-09-09 11:39:23', '2021-07-06 05:33:49'),
(274, 2018016, 1, 2, 114, 108, 2, 1, 2, 12, 0, 70.57, -286.8, NULL, '2018-09-13 10:49:33', '2021-07-06 05:33:49'),
(280, 2018036, 1, 2, 114, 111, 2, 1, 2, 12, 0, 77.26, -200.0, NULL, '2018-09-16 09:16:57', '2021-07-06 05:33:49'),
(281, 2018025, 1, 2, 111, 111, 2, 1, 2, 12, 0, 91.28, 28.4, NULL, '2018-09-16 10:40:06', '2021-07-27 15:50:21'),
(286, 2018021, 1, 2, 117, 108, 2, 1, 2, 12, 0, 73.67, -72.0, NULL, '2018-09-24 09:54:18', '2021-07-27 16:18:29'),
(291, 2018030, 1, 2, 93, 93, 2, 1, 2, 14, 0, 84.40, -29.0, NULL, '2018-10-14 08:12:14', '2021-07-18 05:50:53'),
(293, 2018045, 2, 3, 38, 17, 3, 3, 1, 15, 0, 43.02, -470.0, NULL, '2018-10-21 11:17:46', '2019-06-13 13:27:40'),
(294, 2018046, 3, 4, 44, 29, 4, 4, 1, 15, 0, 48.42, -225.0, NULL, '2018-10-29 09:07:08', '2019-06-11 09:34:17'),
(295, 2018047, 1, 2, 80, 74, 2, 1, 2, 12, 0, 72.52, 2.4, NULL, '2019-01-28 10:39:01', '2021-07-18 05:50:53'),
(296, 2018049, 2, 3, 0, 0, 3, 3, 1, 15, 0, 0.00, 0.0, NULL, '2019-02-03 11:27:28', '2019-02-03 11:27:28'),
(298, 2018050, 1, 2, 88, 79, 2, 1, 2, 12, 0, 74.28, -529.0, NULL, '2019-02-10 12:00:22', '2021-06-30 09:28:22'),
(299, 2018051, 1, 1, 0, 0, 1, 1, 1, 12, 0, 0.00, 0.0, NULL, '2019-02-20 12:22:11', '2019-02-20 12:22:11'),
(304, 2019007, 2, 3, 19, 0, 3, 3, 1, 15, 0, 35.00, -150.0, NULL, '2019-08-07 13:18:49', '2020-01-30 16:25:46'),
(305, 2019001, 1, 2, 74, 74, 2, 1, 2, 12, 0, 86.98, -59.0, NULL, '2019-08-10 21:22:18', '2021-07-18 05:50:53'),
(306, 2019008, 1, 2, 74, 74, 2, 1, 2, 12, 0, 79.82, -221.4, NULL, '2019-08-18 09:31:04', '2021-07-27 16:30:15'),
(307, 2019010, 2, 3, 74, 66, 3, 3, 2, 15, 0, 70.43, -30.5, NULL, '2019-08-19 02:09:01', '2021-07-18 05:36:31'),
(310, 2019014, 1, 2, 55, 55, 2, 1, 2, 12, 0, 91.44, -46.2, NULL, '2019-08-21 22:10:16', '2021-07-27 15:47:04'),
(311, 2019013, 1, 2, 55, 55, 2, 1, 2, 12, 0, 92.84, -47.2, NULL, '2019-08-22 10:07:59', '2021-07-27 15:46:08'),
(312, 2019015, 1, 2, 55, 24, 2, 1, 1, 12, 0, 56.51, -385.0, NULL, '2019-08-25 09:14:02', '2021-02-07 09:22:18'),
(313, 2019005, 1, 2, 74, 66, 2, 1, 2, 12, 0, 70.77, -373.0, NULL, '2019-08-25 10:15:57', '2021-07-18 05:50:53'),
(314, 2019016, 1, 2, 66, 66, 2, 1, 2, 12, 0, 85.63, -35.0, NULL, '2019-08-26 08:04:56', '2021-07-18 05:50:53'),
(315, 2019017, 1, 2, 18, 0, 2, 1, 1, 12, 0, 40.00, -121.0, NULL, '2019-08-28 09:33:20', '2020-01-22 12:17:34'),
(317, 2019021, 1, 2, 0, 0, 2, 1, 1, 12, 0, 0.00, 0.0, NULL, '2019-09-02 09:33:08', '2019-09-02 09:33:08'),
(320, 2019025, 1, 2, 18, 0, 2, 1, 1, 12, 0, 40.00, -121.0, NULL, '2019-09-04 10:11:42', '2020-01-22 12:17:34'),
(321, 2019026, 2, 3, 38, 38, 3, 3, 2, 15, 0, 66.76, -220.0, NULL, '2019-09-08 08:09:19', '2020-07-29 13:21:12'),
(322, 2019027, 1, 2, 37, 19, 2, 1, 1, 12, 0, 58.50, -109.0, NULL, '2019-09-08 08:37:32', '2021-07-06 05:33:13'),
(323, 2019023, 1, 2, 18, 18, 2, 1, 1, 12, 0, 74.67, -1.0, NULL, '2019-09-08 08:46:54', '2020-01-22 12:17:34'),
(325, 2019029, 2, 3, 0, 0, 3, 3, 1, 15, 0, 0.00, 0.0, NULL, '2019-09-11 08:46:53', '2019-09-11 08:46:53'),
(328, 2019032, 1, 2, 15, 15, 2, 1, 1, 14, 0, 85.60, -62.0, NULL, '2019-09-15 07:51:42', '2020-02-05 10:56:53'),
(329, 2019022, 1, 2, 46, 33, 2, 1, 2, 14, 0, 75.57, -95.0, NULL, '2019-09-16 08:01:45', '2021-02-07 09:22:17'),
(330, 2019024, 4, 5, 52, 37, 5, 5, 2, 15, 0, 63.11, -355.0, NULL, '2019-09-19 11:18:23', '2021-02-09 10:21:05'),
(332, 2019033, 1, 2, 74, 74, 2, 1, 2, 12, 0, 72.12, -163.0, NULL, '2019-10-02 08:43:52', '2021-07-18 05:50:53'),
(333, 2019034, 1, 2, 56, 56, 2, 1, 2, 12, 0, 90.11, -46.0, NULL, '2020-02-06 11:17:30', '2021-07-18 05:50:53'),
(334, 2020034, 1, 2, 33, 33, 2, 1, 2, 14, 0, 78.58, 0.1, NULL, '2020-02-09 12:08:36', '2021-07-06 05:32:58'),
(335, 2019037, 1, 2, 53, 50, 2, 1, 2, 12, 0, 73.34, -112.8, NULL, '2020-02-19 10:36:50', '2021-07-27 16:18:56'),
(336, 2020035, 1, 2, 18, 0, 2, 1, 1, 12, 0, 40.00, -96.0, NULL, '2020-02-23 12:35:42', '2021-02-01 16:51:50'),
(337, 2019038, 1, 2, 56, 56, 2, 1, 2, 12, 0, 82.22, -49.0, NULL, '2020-03-01 13:15:44', '2021-07-18 05:50:53'),
(338, 2020024, 1, 2, 37, 37, 2, 1, 2, 12, 0, 79.16, 0.0, NULL, '2020-09-10 16:21:03', '2021-07-06 14:45:35'),
(339, 2020027, 2, 3, 38, 38, 3, 3, 2, 15, 0, 72.17, -125.0, NULL, '2020-09-13 10:35:02', '2021-07-13 05:07:18'),
(340, 2020013, 1, 2, 37, 34, 2, 1, 2, 12, 0, 72.89, -8.0, NULL, '2020-09-14 09:27:20', '2021-07-06 05:33:13'),
(341, 2020026, 2, 3, 38, 38, 3, 3, 2, 15, 0, 69.53, -5.0, NULL, '2020-09-14 10:19:46', '2021-07-13 05:07:18'),
(342, 2020023, 1, 2, 33, 33, 2, 1, 2, 14, 0, 80.86, -25.6, NULL, '2020-09-14 10:46:21', '2021-07-27 15:48:58'),
(343, 2020016, 1, 2, 37, 29, 2, 1, 1, 12, 0, 69.20, -19.0, NULL, '2020-09-14 11:48:42', '2021-07-06 05:33:13'),
(344, 2020020, 1, 2, 37, 37, 2, 1, 2, 12, 0, 85.10, -94.6, NULL, '2020-09-14 12:13:34', '2021-07-07 05:02:35'),
(345, 2020005, 2, 3, 38, 38, 3, 3, 2, 15, 0, 76.29, -5.0, NULL, '2020-09-14 12:27:04', '2021-07-13 05:07:18'),
(346, 2020018, 1, 2, 37, 37, 2, 1, 2, 12, 0, 73.54, -29.0, NULL, '2020-09-14 12:39:57', '2021-07-06 05:33:13'),
(347, 2020014, 1, 2, 37, 37, 2, 1, 2, 12, 0, 73.00, 0.0, NULL, '2020-09-14 13:04:17', '2021-07-06 14:46:21'),
(348, 2020021, 1, 2, 37, 37, 2, 1, 2, 12, 0, 84.19, -24.6, NULL, '2020-09-14 13:37:10', '2021-07-07 05:02:02'),
(349, 2020019, 1, 2, 37, 37, 2, 1, 2, 12, 0, 78.03, -39.0, NULL, '2020-09-15 12:59:21', '2021-07-06 05:33:13'),
(350, 2020029, 1, 2, 37, 20, 2, 1, 1, 12, 0, 58.09, 0.0, NULL, '2020-09-16 08:15:28', '2021-07-06 14:50:02'),
(351, 2020010, 2, 3, 38, 38, 3, 3, 2, 15, 0, 73.48, -5.0, NULL, '2020-09-16 09:09:53', '2021-07-13 05:07:18'),
(352, 2020007, 2, 3, 38, 38, 3, 3, 2, 15, 0, 66.34, -20.0, NULL, '2020-09-16 09:29:58', '2021-07-13 05:07:18'),
(353, 2020011, 1, 2, 37, 34, 2, 1, 2, 12, 0, 71.49, -49.0, NULL, '2020-09-16 10:24:05', '2021-07-06 05:33:14'),
(354, 2020002, 2, 3, 0, 0, 3, 3, 1, 15, 0, 0.00, 155.0, NULL, '2020-09-16 10:57:34', '2020-10-04 10:24:06'),
(355, 2020030, 2, 3, 19, 19, 3, 3, 1, 15, 0, 75.58, -90.0, NULL, '2020-09-17 08:31:42', '2021-02-01 16:56:39'),
(356, 2020015, 1, 2, 0, 0, 2, 1, 1, 12, 0, 0.00, 0.0, NULL, '2020-09-17 10:58:26', '2020-09-17 10:58:26'),
(357, 2020012, 1, 2, 37, 34, 2, 1, 2, 12, 0, 69.22, -49.0, NULL, '2020-09-17 11:04:22', '2021-08-08 10:08:37'),
(358, 2020003, 2, 3, 0, 0, 3, 3, 1, 15, 0, 0.00, 0.0, NULL, '2020-09-17 12:57:15', '2020-09-17 12:57:15'),
(359, 2020006, 2, 3, 38, 38, 3, 3, 2, 15, 0, 72.18, 0.0, NULL, '2020-09-20 07:56:12', '2021-07-13 05:07:18'),
(360, 2020004, 2, 3, 19, 0, 3, 3, 1, 15, 0, 35.00, -190.0, NULL, '2020-09-20 08:31:54', '2021-02-01 16:56:40'),
(361, 2020028, 1, 2, 37, 37, 2, 1, 2, 12, 0, 72.08, -20.6, NULL, '2020-09-20 08:38:37', '2021-07-27 15:47:55'),
(362, 2020025, 2, 3, 38, 37, 3, 3, 2, 15, 0, 62.51, -75.0, NULL, '2020-09-20 08:44:01', '2021-07-13 05:07:18'),
(363, 2020022, 1, 2, 37, 31, 2, 1, 1, 12, 0, 66.08, 9.4, NULL, '2020-09-20 10:58:51', '2021-07-27 15:43:26'),
(364, 2020008, 2, 3, 0, 0, 3, 3, 1, 15, 0, 0.00, 0.0, NULL, '2020-09-21 09:36:43', '2020-09-21 10:54:07'),
(365, 2020031, 1, 2, 18, 0, 2, 1, 1, 12, 0, 40.00, -111.0, NULL, '2020-09-21 09:41:35', '2021-02-01 16:51:50'),
(366, 2020032, 2, 3, 38, 34, 3, 3, 2, 15, 0, 63.10, -135.0, NULL, '2020-09-21 11:06:36', '2021-08-04 04:50:27'),
(367, 2020033, 2, 3, 38, 38, 3, 3, 2, 15, 0, 71.53, 0.0, NULL, '2020-09-21 11:39:55', '2021-07-13 05:07:18'),
(368, 2020001, 2, 3, 38, 38, 3, 3, 2, 15, 0, 64.67, -5.0, NULL, '2020-09-21 12:31:18', '2021-07-13 05:07:18'),
(369, 2020036, 1, 2, 0, 0, 2, 1, 1, 12, 0, 0.00, -177.0, NULL, '2020-09-27 09:58:45', '2020-10-01 10:33:08'),
(370, 2020037, 2, 3, 38, 35, 3, 3, 2, 15, 0, 65.47, -115.0, NULL, '2020-09-28 10:56:40', '2021-07-13 05:07:18'),
(371, 2020038, 2, 3, 38, 38, 3, 3, 2, 15, 0, 83.29, -35.0, NULL, '2020-09-30 11:35:43', '2021-07-13 05:07:18'),
(372, 2020039, 1, 2, 0, 0, 2, 1, 1, 12, 0, 0.00, 0.0, NULL, '2020-10-06 08:11:33', '2021-04-15 10:24:35'),
(373, 2020040, 2, 3, 38, 35, 3, 3, 2, 15, 0, 63.89, 0.0, NULL, '2020-10-25 09:16:32', '2021-07-13 05:07:18'),
(374, 2020042, 2, 3, 38, 22, 3, 3, 1, 15, 0, 54.33, -5.0, NULL, '2020-10-25 13:36:06', '2021-07-13 05:07:18'),
(375, 2020041, 2, 3, 38, 36, 3, 3, 2, 15, 0, 62.29, -49.5, NULL, '2020-10-25 14:11:10', '2021-08-05 04:47:49'),
(376, 2020043, 1, 2, 37, 37, 2, 1, 2, 12, 0, 77.33, -21.0, NULL, '2020-11-24 11:37:22', '2021-07-06 05:33:13'),
(377, 2020044, 1, 2, 19, 16, 2, 1, 1, 12, 0, 68.47, -43.0, NULL, '2021-02-16 08:53:07', '2021-07-06 05:33:13'),
(378, 2020045, 1, 2, 19, 0, 2, 1, 1, 12, 0, 40.00, -133.0, NULL, '2021-02-21 12:09:32', '2021-07-06 05:33:13'),
(379, 2020046, 1, 2, 19, 13, 2, 1, 1, 12, 0, 58.27, -48.0, NULL, '2021-02-21 12:48:27', '2021-07-06 05:33:13'),
(380, 2020047, 1, 2, 18, 18, 2, 1, 1, 14, 0, 89.72, -22.0, NULL, '2021-02-22 10:56:26', '2021-07-13 05:07:18'),
(381, 2020065, 1, 2, 19, 19, 2, 1, 1, 12, 0, 72.90, -38.0, NULL, '2021-03-02 10:59:05', '2021-07-12 10:20:44'),
(382, 2020060, 2, 3, 16, 14, 3, 3, 1, 15, 0, 72.12, 0.0, NULL, '2021-03-02 19:18:50', '2021-07-18 05:36:31'),
(383, 2020061, 2, 3, 16, 16, 3, 3, 1, 15, 0, 75.50, 0.0, NULL, '2021-03-02 21:06:49', '2021-07-18 05:36:31'),
(384, 2020048, 2, 3, 0, 0, 3, 3, 1, 15, 0, 0.00, 0.0, NULL, '2021-03-03 12:13:00', '2021-03-03 12:13:00'),
(385, 2020049, 2, 3, 0, 0, 3, 3, 1, 15, 0, 0.00, 0.0, NULL, '2021-03-03 12:27:59', '2021-03-03 12:27:59'),
(386, 2020050, 2, 3, 0, 0, 3, 3, 1, 15, 0, 0.00, 0.0, NULL, '2021-03-03 12:38:05', '2021-03-03 12:38:05'),
(387, 2020053, 2, 3, 0, 0, 3, 3, 1, 15, 0, 0.00, 0.0, NULL, '2021-03-03 13:09:51', '2021-04-07 10:49:13'),
(388, 2020054, 2, 3, 0, 0, 3, 3, 1, 15, 0, 0.00, 0.0, NULL, '2021-03-03 13:21:38', '2021-03-03 13:21:38'),
(389, 2020056, 2, 3, 0, 0, 3, 3, 1, 15, 0, 0.00, 0.0, NULL, '2021-03-06 03:00:56', '2021-03-06 03:00:56'),
(390, 2020058, 2, 3, 0, 0, 3, 3, 1, 15, 0, 0.00, 0.0, NULL, '2021-03-07 10:43:24', '2021-03-07 10:43:24'),
(391, 2020051, 2, 3, 16, 16, 3, 3, 1, 15, 0, 90.00, -30.0, NULL, '2021-03-09 23:03:15', '2021-07-18 05:36:31'),
(392, 2020063, 2, 3, 16, 16, 3, 3, 1, 15, 0, 74.25, 0.0, NULL, '2021-03-10 13:52:34', '2021-08-08 10:00:31'),
(393, 2020052, 2, 3, 16, 16, 3, 3, 1, 15, 0, 84.63, 0.0, NULL, '2021-03-12 18:52:59', '2021-07-18 05:36:31'),
(394, 2020066, 2, 3, 16, 16, 3, 3, 1, 15, 0, 84.25, 0.0, NULL, '2021-03-14 14:21:02', '2021-08-08 10:01:06'),
(395, 2020068, 2, 3, 16, 16, 3, 3, 1, 15, 0, 77.75, 0.0, NULL, '2021-03-15 09:40:13', '2021-07-18 05:36:31'),
(396, 2020067, 2, 3, 14, 14, 3, 3, 1, 15, 0, 72.71, 0.0, NULL, '2021-03-15 13:03:40', '2021-07-18 05:36:31'),
(397, 2020055, 2, 3, 14, 14, 3, 3, 1, 15, 0, 77.14, -110.0, NULL, '2021-03-15 21:57:36', '2021-07-18 05:36:31'),
(398, 2020062, 2, 3, 14, 14, 3, 3, 1, 15, 0, 75.29, 0.0, NULL, '2021-03-16 09:30:44', '2021-07-18 05:36:31'),
(399, 2020064, 2, 3, 16, 14, 3, 3, 1, 15, 0, 67.00, 0.0, NULL, '2021-03-16 12:34:57', '2021-07-18 05:36:31'),
(400, 2020069, 2, 3, 14, 12, 3, 3, 1, 15, 0, 74.43, 0.0, NULL, '2021-03-24 07:35:51', '2021-07-18 05:36:31');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_id` int(11) NOT NULL,
  `first_name` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `second_name` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `third_name` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fourth_name` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `high_school_gpa` double(3,1) NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stdstatus_id` bigint(20) UNSIGNED NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `student_id`, `first_name`, `second_name`, `third_name`, `fourth_name`, `high_school_gpa`, `email`, `password`, `stdstatus_id`, `remember_token`, `created_at`, `updated_at`) VALUES
(2015007, 2015007, 'فداء ', 'محمد', 'جمعة', 'أبو طعيمة', 86.1, 'fadosh.179@gmail.com', '$2y$10$v.sIrvLacutxYov9bj/0gO3tTzB47LfqLVUTgfUh83SIWFlFriJl2', 1, 'Xn0P0yjEF8DP8gn9rYTvRJpwBYdYbcmTGMTlbsrhasWfbC8LNfEcxWau9mFU', NULL, '2017-06-06 15:34:50'),
(2015019, 2015019, 'وائل ', 'إبراهيم', 'بهيج', 'الأغا', 50.0, 'WAYYY2017@GMAIL.COM', '$2y$10$LNxXYjEefXqpnXHxJx1lQ.87DB8h5bwVcyl.6LpjkRVhm0rhxN.Yi', 1, 'YJJ69cGgA7uhlI4CTGLlSi9bwDGFr4zn0LS0yeXQGLi2vKu5eDZYZPv79z0d', NULL, '2021-02-17 08:52:51'),
(2015025, 2015025, 'أنغام', 'عبد السلام', 'عبد الله', 'حمدان', 65.6, 'angham@mail.ps', '$2y$10$DDLPY.SYkxJfgBmd/7l1jufy1yLzVnFB5TF5lrOouOIA2I2XKlWKe', 1, 'vzNfAVvZqa796F8YElAP2KGeazkoIRfAGSwF7cJ2KKrFlY0SvMzr0KXL7Rsu', NULL, '2017-09-17 15:08:17'),
(2015036, 2015036, 'أماني', 'إياد', 'محمد ', 'الحوراني', 62.2, 'amonaeyad@gmail.com', '$2y$10$rEdUeGbd7AjiRnjeo4WDnuGyu1AtjERyEhMUUmZA1xRKkZ8Ffx/py', 1, 'ZSC7q4ZfhyprtE9kAoRk8CrZ5leaZc6JV2BH0A3yKYpvmhgnL3tDwsiERVaP', NULL, '2017-06-13 02:15:17'),
(2016003, 2016003, 'ياسمين ', 'وائل', 'خالد', 'عواد', 79.9, 'te.as@s.p', '$2y$10$upCV0tUh8i9fl.cv8QtJ7OpGSpjgjQQatd6UgPcCiHD9wDdETQ.xy', 1, 'lrk0u4hqnQUvZ0KLONAhgDnpWrRJuGYWJ9T7zJs1Js4q70T1x1SXEXReFp02', NULL, '2017-09-13 15:24:28'),
(2016004, 2016004, 'ايات', 'فريد', 'حسين', 'الأخرس', 65.7, 'AAAAA@HOTMAIL.COM', '$2y$10$IDmcv8ib27a5mwH8XpPcOO2xMb7WRFVG1MWmMePCCOb1OrLjO/xF2', 1, 'OKq2a9Kabq3EUaaTdF8aWEnskrm2ygLAJxeVen9FsEiusdZkEaDQDSwyxzRQ', NULL, '2017-10-04 17:12:58'),
(2016016, 2016016, 'أماني', 'إبراهيم', 'محمد ', 'شكشك', 67.4, 'AMANY@TEST.PS', '$2y$10$aIFNQjjAXllYrjDWR46pU.zbEp8adyX.DpV4D/0hzxYWeoM8I0zi2', 1, 'CPcDcP3haacaEr48WN2xrVvsqA4E4I47aLI4wvYHN7hAlKtp0bQasKFS3GKJ', NULL, '2017-09-17 17:18:39'),
(2016021, 2016021, 'عدي', 'هاني', 'سالم', 'أبو جزر', 67.3, 'Zcxv.2314@gamil.com', '$2y$10$5yyi03WVdgXIz7kCTGAAZeMl.ogX6zsPFqY7AZrsh.GIfFoMdTSd6', 1, 'DqRKih4tdVDQXTZbTYiSOIpq0walOePa52jWbPWMe1QUCVgshaldUHclN9vT', NULL, '2017-06-07 00:40:41'),
(2016024, 2016024, 'محمود', 'نبيل', 'دياب', 'الحداد', 74.7, 'mahmmoud_1998@hotmail.com', '$2y$10$aJcB4c4OPWo4L8GXHm3.RevWf6wHEbYaG4CKBHFUpn3gE68bA/46u', 1, '4f6mDcYDq2zWfHTDHuZ5TYNXxowSxFK2oYtCot6oHARFE9TvfA5kJtjOTyTX', NULL, '2017-06-14 21:13:31'),
(2017006, 2017006, 'ياسمين', 'ناجي', 'احمد', 'ابو عامر', 76.3, 'abo-muath-7192929@hotmail.com', '$2y$10$x2fGjvmFVi1wDZmYYRnGAuGwVJXN3jOoO5SA7DXWseQ3cZHu0ALZG', 1, 'mcgfabCQKkbUExZmprqZrXgY3d3qnE0s8MjPm0aSKTB0hVsK1B2FZP3sg468', '2017-07-23 14:31:11', '2017-07-29 13:39:12'),
(2017012, 2017012, 'أماني', 'عطوه', 'خليل', 'مسمح', 71.1, 'amanymsmh@gmail.com', '$2y$10$I4d0NZ/dgg814jfi.bhi.O9tgagjOZboPc0Mga4quPdJBa09dfkMe', 1, 'YBTHefekeKwbBxIIajun5YhQOoQPC1Vyx7Xx4EYTNYze5L1TG6R6cHb9Cv92', '2017-07-30 14:01:48', '2017-07-30 14:19:21'),
(2017013, 2017013, 'صبا', 'وليد', 'عبدالله', 'ابو ريده', 88.9, 'seba.20134@outlook.com', '$2y$10$q9bZbhG58OYXU4V8JbzHe.VFXLCbVvnCJhI34H5t8FE5w.jgiVGva', 1, 'v244MC5eLUTrXanQd5xrJwxaQnTB1sfUgqaklTbwSeTGOGr2eijxRBfEX1dR', '2017-07-30 14:05:50', '2017-07-30 14:27:24'),
(2017017, 2017017, 'اميرة', 'خالد', 'علي', 'ابو تيلخ', 66.7, 'mymy.n.2018@mail.ru', '$2y$10$ltU2lwJcaDRmJ9B9AwSVn.QCQ7XVgbhGvp878wcts6dCI/1XXL4UK', 1, 's5UF88BJOrzsACxiR8Xyj4cDnr9yOh6SRVEukefwG37LI6qGhDyZLFcErYP0', '2017-08-01 15:31:14', '2019-02-10 14:29:51'),
(2017033, 2017033, 'فايزة', 'احمد', 'عبد الفتاح', 'ابو سعيد', 66.6, 'Fayza.1999@gmail.com', '$2y$10$LoA71LwExadBU3.77IYEaOSSYUTLUbAvu1pn0yqbsJMRFXVR6JPnO', 1, 'k22gP1VZKvEpAmcfZcM2LvEfmf57YQFYRvwEiVvhKXZ1efyi5UXrHmWUe5A2', '2017-08-16 16:54:44', '2018-02-02 20:14:15'),
(2017100, 2017100, 'رنا', 'إسلام', 'إبراهيم', 'أبو جمعة', 86.3, 'nono-19991@hotmail.com', '$2y$10$igZX2f2aDA./MmKmxvCtdOnpk8PqwwfJCburd0QjSegUyl8uhTZDq', 1, 'gmU0qtK8qQGHHhXm7iwMExcLw1IzbqjKcJSU4iX62h2ejvdfOkVgtE5x7wHg', '2018-01-14 15:37:56', '2018-01-14 15:58:28'),
(2017101, 2017101, 'هبه', 'محمد', 'كامل', 'الفرا', 66.1, 'heba.1995@hotmail.com', '$2y$10$xroSlRTuUBBkxuaeaofd2.56p7PHs8pB5t3fjYQrmQUROt1irSVue', 1, 'Bd7TrcFScKaa03sWLVZMIlkZQlolz3cmwhRj2LglajwlhQDkXaggG7BUVZEy', '2018-01-23 17:05:46', '2018-01-25 15:24:45'),
(2017102, 2017102, 'أميرة', 'صابر', 'مرزوق', 'ابو ريده', 71.9, 'dema.love1999@hotmail.com', '$2y$10$6yPGajSAzp32PrCCYifRI.AH5ZnNOVWzU5TY2NWsoQaQvKzjICTBa', 1, '5gjYuXdDkYAq8qM5S6Lvhbqvd6vkkyQsmluZlJS828e3VyfMO3lV8fw7L9ui', '2018-01-29 16:36:37', '2018-02-01 15:17:05'),
(2017103, 2017103, 'أحمد', 'علي', 'خليل', 'عباس', 78.0, 'as_sh_ta@hotmail.com', '$2y$10$4R9FyAZCAGHKvYnspiDQb.SwIaHSs4lBhvZxZA8FkL00EEsKJ3rAW', 1, 'eg8DzMP9Pya9cK9nej43Nx1MeaEwJb1WzKcTe1spmB7gpHh4u41PWI4rk4Vs', '2018-01-30 13:38:44', '2018-02-01 15:14:32'),
(2018001, 2018001, 'محمد', 'عبدالله', 'محمد', 'ابو لحية', 80.7, 'mohammad4153731@hotmail.com', '$2y$10$y6JmWlnImyaPo9EXdjHTV.QgKKw0FXIwsMDWuPzf83Z3xnYaOjP3i', 1, 'D1fUNMiCTXvhyOYxBC8knrsP3R5hQlj6wkgH7k1kv1GVHZbHxmQ23AYCg4Nq', '2018-07-17 09:05:52', '2019-02-26 16:12:37'),
(2018004, 2018004, 'نور', 'وائل', 'مرزوق', 'ابو ريده', 69.4, 'wail.m.r.2019@gmail.com', '$2y$10$GO9HaxjhrT3u6HHwfziIneY.sfDO1Gk8m6HCYPYU3WVJdtYT.swXm', 1, 'se7AbCWE4h2X2ELQvPmPokgdkBOXP5L3ITt5tPykxzYz1Fq5JRH5wqHnaIkN', '2018-07-22 10:48:00', '2018-09-05 12:33:37'),
(2018005, 2018005, 'محمد', 'أسعد', 'عبد', 'نصار', 78.9, 'assad123@windowslive.com', '$2y$10$Cf0dY8wokjBUR8/ZR1dt5euUM9H1qpqrD09VKiQ5C2iq.WfVBLQgG', 1, 'dslPF85Q5qEmKSHwVC9TZhMz4wSEQ5DABxOlcGqUoeTxeUEGQXmc5bsqmK6h', '2018-07-25 12:24:51', '2018-09-09 08:42:28'),
(2018006, 2018006, 'اسراء', 'أيمن', 'زكي', 'حنون', 97.4, 'esra.han@gmail.com', '$2y$10$FspUxRYN9NzSJwGtEQTCJOCLTG2f1DyOt3QaoACfQBJx1J7J3QdLq', 1, 'vMH3nKFwIXFvT95EsQH8OUE6T8qTJHBpNYTF79uMGqBOMS1TKVE3sLoVpOB7', '2018-07-29 07:54:38', '2018-09-03 08:41:16'),
(2018009, 2018009, 'اسيل', 'خالد', 'محمد', 'العدوي', 80.0, 'aseelkaled278@Gmail.com', '$2y$10$HhcY9ys7dFQTyZtI7ol25O/AWs3qq739sAr8CRLXNL9kbxwQ1fBcW', 1, 'sX0haSMOL08adzm1XAUeqjsjlacUvj4azppy06jpzFkvsZ0taQ4ct084D33T', '2018-08-05 12:05:56', '2018-09-07 10:39:13'),
(2018011, 2018011, 'نجاح', 'تحسين', 'عطا', 'الجبور', 72.0, 'jojo_n.f@hotmail.com', '$2y$10$sZpmDbNkyd.tfT6Jqeis4O.ExXJLSSOuPr830swF4ZFGroL0mbfEy', 1, 'G4bWsHbeAJhHk0xQdujXb9OYlGXZq89cLYRJUa4wxcNcW8kkA2iUNzx9bQjg', '2018-08-09 09:31:11', '2019-01-25 21:58:20'),
(2018012, 2018012, 'سجود', 'بسام', 'اسماعيل', 'عاشور', 68.9, 'sagad10600@gmail.com', '$2y$10$QsPCSpY5kkU6Z1.dm/IYN.LfqsuBGAJsy4fhPVuZMtgJnAd8eope.', 1, 'tHWbR5Q9cuwr3eYk1EQIYGqbOSlSkZV9nkmEHkPwnhXAje6DsFoKH3M9a1FR', '2018-08-09 09:34:31', '2018-09-09 10:13:59'),
(2018015, 2018015, 'احمد', 'رياض', 'محمود', 'العايدي', 77.6, 'ahmed0598564283377@gmail.com', '$2y$10$ZvgAi9KIz6KcoY4.7ALGA.FXhoNNNZyUAZlEjcl5PALklnS484spm', 1, '48tH7Z3FvwtUowFo99B1uaQ3DDbUYxZe7F3UNg4EK04IXidVREhHocLjACl1', '2018-08-12 12:49:55', '2018-09-05 09:45:16'),
(2018016, 2018016, 'رسميه', 'نعمان', 'ابراهيم', 'طبل', 69.9, 'shamalnjar46@gmail.com', '$2y$10$WEHq/T9zJlQo8fwoSF3WBeuagg8IjxuA1ypeD.up7l0qeuinB6JZy', 1, 'n1jhJYOerOEObIs5zTygweyihAYS7KJSlTqvZaJBKjTsOIr3QQv6SSKRT1AP', '2018-08-15 07:43:03', '2018-09-16 09:11:48'),
(2018019, 2018019, 'طاهر', 'موسى', 'عطية', 'سمور الودية', 68.0, 'tahermousa48@gmail.com', '$2y$10$9c.OxB7XzE/0bd6Zcb0UOeRXXt6HoOuiGXK6APjVGT3NH6EiAVqRC', 1, 'HRWVvnPqw2dxmQKyEGwkwui2HF3401LNkf6sjXl7BtizX1Qr7aetf9CpG2ou', '2018-08-26 10:14:49', '2018-09-03 11:18:52'),
(2018021, 2018021, 'محمد', 'اكرم', 'كامل', 'جبر العناني', 67.4, 'maanani@gmail.com', '$2y$10$nVrOTyVeR3x3On9LxwzPuumR/QaR68ECAqa6M5aBhB4MLqsZefA12', 1, 'bsBP1fRjB9XSjW83nJ9QeeYXa5Yw22CEcgbcoko2h2ebeVgDBoZYgQNmjgT6', '2018-08-29 07:38:24', '2018-09-24 09:55:10'),
(2018024, 2018024, 'اسيل', 'اسماعيل', 'حسن', 'المدهون', 67.9, 'wesam21_1@hotmail.com', '$2y$10$NjYVeojNfHe/0gb5Szsfu.NyghqD8LbOeC.mSHFI5xPmhDAuvwol.', 1, '5eKhlZ5D07F2M8J0HjByPZXpWgI9611nGBh4OLDYcNV0KUa8B9VNeho7HhgV', '2018-08-30 08:33:13', '2018-09-13 12:30:08'),
(2018025, 2018025, 'ياسمين', 'احمد', 'اسماعيل', 'ابو طوق', 79.2, 'es.a-2010@hotmail.com', '$2y$10$G85dP7z51Inmo01Tg7jU4OuNTGklOs5Ur8rG8WIWcZQTG6/xqH1lm', 1, 'eTrUHgcJxX6YfM7wVGNg19iAyoR2UD8mlM675PzWx0l0CNxA6MfT17CnDMf7', '2018-08-30 09:52:48', '2018-09-16 10:47:44'),
(2018030, 2018030, 'مريم', 'عاطف', 'حسني', 'عامر', 61.7, 'ameeermaryoom@gmail.com', '$2y$10$bsnBNfUfIPcdiCGnELSVY.cz6Zuo1WiHuO1ffpH5QSKp1bPu4xFOu', 1, 'tmJcl0vY5vpltg0SGvc42fSlMz391m01mF7e7RdCEcdN3Am96Kh1VBgz2FkQ', '2018-09-04 08:17:50', '2019-02-20 09:03:55'),
(2018036, 2018036, 'عامر', 'عمر', 'شحده', 'ابو عبيده', 73.4, 'amer-amer5000@hotmail.com', '$2y$10$pU8z32rhXHoccCGh.jNAIOihExGFsJYCbPw20d5YUnPq.bVdP6dmq', 1, 'SVvSn1Va4cKUICpxNe839wFkle9Gz9vZZ3sjojyybFBL7TJX0T6hf8WGTvnx', '2018-09-16 08:01:44', '2019-01-07 17:56:30'),
(2018045, 2018045, 'ياسين', 'أيمن', 'خالد', 'أبو عامر', 56.0, 'yasinabuamer@gmail.com', '$2y$10$GxJJc8Jv/gXj48UD.DtDiujOP6sBmdGiEf9arMJTO9/mZR1GC7AeG', 1, NULL, '2018-10-21 09:49:35', '2018-10-21 11:27:57'),
(2018046, 2018046, 'أدهم', 'أسامة', 'حسين', 'راضي', 83.2, 'aradi@gmail.com', '$2y$10$2PhrQQLTe23oGSFIv3my0O2UCgLX1WyyaC9GfxhD.fUpklgXO5GbC', 1, 'ahXRnm7Cp8aftYRGYNw0GIfgdNG5DcuyBSJAmtVJzxbfes8cZYTL7gfBHH6D', '2018-10-24 06:00:27', '2018-10-29 09:27:45'),
(2018047, 2018047, 'هالة', 'خالد', 'سليمان', 'ابو خماش', 71.0, 'h.k.s@hotmail.com', '$2y$10$wUJ.EZ/dmlDzk4kSfhN50eKrYdQtapPkE8AMfSFzRRhR52Yeg3d9y', 1, 'pXEowR6SBKpmyldrUjeQ5UfuB9Vl0Hzb2JBd3nWPjv2POt5bwPbCQu2qCsYG', '2019-01-28 10:02:52', '2019-02-11 10:34:20'),
(2018049, 2018049, 'محمد', 'يحيى', 'وجيه', 'شعث', 55.8, 'm.w.sh@hotmail.com', '$2y$10$BuMgwmia04MWFUEN5yh3ru9debWjAT25Jo6gVNbW.R3D2Gu/Z4sc6', 1, 'gEZAo3o8JS2EgdgjZRfynLpzggIP7ji1mjZHAInusNXi8VJz0VE9MVB20W3l', '2019-02-03 11:17:11', '2019-02-11 12:18:46'),
(2018050, 2018050, 'روزان', 'محمد', 'محمود', 'قبلان', 67.3, 'r.2019@hotmail.com', '$2y$10$RGITQ3SjUqRuJUxcsWjIAuyPv8blO0HI0phBtNNfykaQuq14ztsE2', 1, '0YZfPvM1vFfsggvWwFN63AaeIBXs1ZC15el7B2llZy8AZyyT89g6MsvAqEzz', '2019-02-10 11:08:47', '2019-02-10 12:35:21'),
(2018051, 2018051, 'تسنيم', 'زياد', 'سلمان', 'الحمايدة', 65.3, 't.h@hotmail.com', '$2y$10$AlwjOa9k00kCdk1/AWlNZe.KaldQvQhQqPuRuAVf88t3n616YX0Yq', 1, NULL, '2019-02-20 11:43:02', '2019-02-21 12:36:29'),
(2019001, 2019001, 'بيسان', 'بهاء', 'محمد', 'الكردي', 85.6, 'bahaa_computer@yahoo.com', '$2y$10$sKcC1t3VUVUfkIo.lOoyn.3p7rpD4nVwU5U456S5M5176bqis1pre', 1, 'My228CZdAfZjjTVtT2l2hKgV2AUArbqtJlvU3pb116tSE5i2vonD31aaXpbP', '2019-07-28 06:43:10', '2019-08-19 08:01:16'),
(2019005, 2019005, 'ايمان', 'ابراهيم', 'عطوه', 'عبد العال', 74.3, 'e@hotmail.com', '$2y$10$OAKW4FdxKWdZRrGZO8OTM.XvvBVohm.W/ogh2WpATFl7xKj5Exvii', 1, 'jIEikAuR5orD3MFQn64KIIqr3sSEMHw7BTl5gqUtnGjDeU3VNhYTffKL5mOS', '2019-08-04 08:26:00', '2019-08-25 10:28:28'),
(2019007, 2019007, 'قاسم', 'نادر', 'قاسم', 'العبادله', 61.1, 'q@w.p', '$2y$10$fl1ZjLeTTgZutcU4JAIZTOQRHGsxwU3XWbbCEDrxO76EXpg2YMveO', 1, 'YIsFqRNeQTaFM0JIVrP00DC33i60GtYKvKOjouvCL9lOtDZrVInE0tCfJVla', '2019-08-07 12:44:18', '2019-08-07 14:08:17'),
(2019008, 2019008, 'سجى', 'محمد', 'شبراوي', 'ابو موسى', 71.3, 's.2019@hotmail.com', '$2y$10$V7AIiZGmWbF2YTC286bxYuJjyjiwkp8bgd2hXxEBWfd968.Tif7be', 1, '3mCPHL6x3nIt1bT6jR0IGsGWTOLv6FpoVVvxGsk5PcqxoSKv1YmeNYL4bTxE', '2019-08-18 08:59:23', '2019-08-19 08:03:34'),
(2019010, 2019010, 'محمد', 'حيدر', 'محمد', 'حسونة', 60.7, 'hamada3-2007@hotmail.com', '$2y$10$.yobImLnxp9AEP7AS17jZOHO4IwkNsn0EZCS5BR8yx8mrSIJYsPFO', 1, 'RjnHfOpIXd2TSGJ00VRE1p9tkeZLNIbcAcJ9YPJ2FbFXmrU2PG508Ls0VqSb', '2019-08-18 10:44:00', '2019-08-19 08:06:54'),
(2019013, 2019013, 'هدى', 'أحمد', 'ابراهيم', 'العصار', 86.9, 'Rhf5@outlook.com', '$2y$10$/H0MZw9E7tdbFCS/7k6PQeoC65pp5ivZ2sfETI4xV2h7Z4FPXp1zG', 1, 'Ty78EiWpvsmQetZoSezKkq8ylXxbVGEOnLmDMPJZSdQL1YLTaaogDnKU9C9h', '2019-08-21 10:25:44', '2019-08-25 07:42:58'),
(2019014, 2019014, 'عبير', 'أحمد', 'ابراهيم', 'العصار', 92.0, 'Rhf5@outlook.com', '$2y$10$o.M4n/ITu2HlPqxSXyReWupPpycUYAblF5il37.yqUoCpvr5uWj6G', 1, 'Sc7cYfhzDuUFDI0FbYJPLsFJWsBaCxCQOFjUIDzF7o2bDPJa2dX7OZyRtMko', '2019-08-21 10:29:04', '2019-08-25 07:44:48'),
(2019015, 2019015, 'مرح', 'فكري', 'عبد العزيز', 'الشمالي', 74.8, 'm@hotmail.com', '$2y$10$ZNmfWVNn7NhPC8JqrUvzeOMRWrHeYP/sAonKQKYE0mh/v9l4dg36O', 1, 'Sy4I6y6Spozl38KmEtiFuyDot1cnRI3OXVVES9rreAi2iUHU43Fkk8WKnUww', '2019-08-25 08:59:22', '2019-08-25 10:37:36'),
(2019016, 2019016, 'محمود', 'جمعه', 'محمد', 'يونس', 80.6, 'm@hotmail.com', '$2y$10$yj7YDGzqFA42MzeWgAXcdO2CNOW5AcryIJ0cJvbR/CKUda2eF7MjC', 1, 'tyOFTrqhVCqFyL02T28SNH3y0CnvEZdxbTY9Y0LDXTRgnKvuJKBOTyMSzbLT', '2019-08-26 07:43:12', '2019-08-26 08:38:35'),
(2019017, 2019017, 'فارس', 'نظام', 'شحده', 'ابو كوارع', 70.0, 'ff0599014421@gmail.com', '$2y$10$CW/TdV3P.y1N.P8L5Im1CO4KeoALYr7xEGK/m8GId97zO.frbbpbm', 1, 'B5kirWnIkhR6ZZMTPjWQ1KNkSUHbbB8r0q5ckj62JTsZZhRCTD44eaFnfsXs', '2019-08-28 09:16:43', '2019-09-19 12:46:52'),
(2019021, 2019021, 'سنا', 'حاتم', 'علي', 'الغول', 70.0, 'a.mm.a.l@hotmail.com', '$2y$10$nLfkGsmTZN4bPSSF21rytud/Gwd1M/0lBnv6YAsDtLOdIgZxrVzqC', 1, 'X47sIen1Zth1WUrLv33mg319PzpFy0vta47SZnhlGElTHFbe2CTPV1UCKU18', '2019-09-02 09:10:20', '2019-09-02 09:46:30'),
(2019022, 2019022, 'نسرين', 'ماهر', 'شعبان', 'حموده', 59.6, 'n@hotmail.com', '$2y$10$lJ96GBdcxqSXJ0vqzsxfK.wWJYxuxWD8r6kCIROSGdEj8MeIF0Zfy', 1, '1t5vS8jhiZN2YYxFL1Ffbs5sQaRpHyI8TpcwsuypLLPhKkJT1imdqCxMjSwi', '2019-09-02 09:57:06', '2019-09-16 09:17:32'),
(2019023, 2019023, 'نورز', 'بشير', 'موسى', 'الجبور', 69.9, 'n.2019@hotmail.com', '$2y$10$4lm2DiD4ta61YB5ZZJMqy.QqRCsR.guQn/VVAqzB9gW1pmlFZq8ZO', 1, 'y65vOnpOLQwSPtZ6y6Gv0jtZ0G7xQtiWJVmW51oeaD1W9oxdCmP43SmKO2vB', '2019-09-02 10:03:58', '2019-09-08 09:13:27'),
(2019024, 2019024, 'ساره', 'رمضان', 'خليل', 'العجرمي', 54.3, 's@hotmail.com', '$2y$10$CeBrI/Ww2VTKjFTv40tbJ.kjQdZamFtoD/PC.uPJ70brKji9GP.ai', 1, 'gEryhekLcMDebpZZSNGG73rIt4SlVG2feHdZu5Uj5aI2UsRmltaWssvf9rSZ', '2019-09-04 09:29:14', '2019-09-19 12:44:29'),
(2019025, 2019025, 'اسلام', 'بهدار', 'خليل', 'الدغمه', 67.6, 'islam.0592428298@gmail.com', '$2y$10$XkTDkS1rSff8miME9cTCWeRsGUTu28N6bWoTgXvGQlp1aZQQ3ef2e', 1, 'UBvkzyrGLGg9dm08qsKpLMoueYAYLD3EMQPDED6NvyrVBRODp7IaxpfoKOMf', '2019-09-04 09:46:49', '2019-09-04 10:36:30'),
(2019026, 2019026, 'محمد', 'كمال', 'أحمد', 'كلوسه', 60.6, 'mm.2019@hotmail.com', '$2y$10$OkwwzQ5xxbV7oYfmt1ZDwOW3ncHRkzyGFJ.jJ4nhuR4TLe6LVlp1u', 1, 'nGfdlbZod7s8brltOKc3U7hpfZJh6qOi1LYF02WMtxSdGFg1Z9Ao5mHRXLxX', '2019-09-08 07:57:31', '2019-09-08 10:57:33'),
(2019027, 2019027, 'منال', 'حمدي', 'محمد', 'عمران', 77.7, 'm.@hotmail.com', '$2y$10$vYQt8NR1rUUEI9uK4X6GaOKXc1o522kp74JGxruaWzlgHfMBPdrve', 1, 'YkZFisihDkVNoFmOxwOe7qN6yH1mVnKLTKuTjj33z9MnZ06IPEp2FsYPZJJl', '2019-09-08 08:09:50', '2019-09-15 12:06:30'),
(2019029, 2019029, 'أحمد', 'محمد', 'عايد', 'ابو طعيمه', 62.7, 'a@hotmail.com', '$2y$10$QxfyzxJ0l/vA7qVN6duuU.AleSbkYDFYe7GwF4uDBy0AnGaqpLeie', 1, 'GBDSWNOTPlyVKqclTRrvz0tqRqKsprll59G7fDWNucibjHGfxNPEQOFTrisB', '2019-09-11 08:39:14', '2019-09-11 09:04:08'),
(2019032, 2019032, 'محمود', 'عبد الحكيم', 'عامر', 'ابو شماله', 75.4, 'm@hotmail.com', '$2y$10$cGAZZsu3PcoXAa53kv3O5eL9MgAx7Q4vws5GZXxIDdVfG0IZ4kIo.', 1, 'WtKmpEdrj6l6Jqbimwy3xAxCEf1pv56lcWxJIUKAoBdGe7c2kxlojiZkhYFb', '2019-09-15 07:35:54', '2020-06-02 09:35:31'),
(2019033, 2019033, 'الشيماء', 'زياد', 'سلمان', 'الحمايدة', 68.9, 'ALSHAYMAA-200@gamail.com', '$2y$10$Nvmcc44wjP8oHGpPWGgs1O1z8g9BiEr8VrI4XiEbhqbV1vmFP9YVG', 1, 'zSOfTMLDKdzeXugIpHpP05ho0IuyaUVOCJtbPioibeYEyq3csaTrf1a8tUIQ', '2019-10-02 08:26:30', '2019-10-02 08:50:44'),
(2019034, 2019034, 'رشا', 'غسان', 'سلامه', 'ابو شاب', 91.1, 'rasharanosh65@gmail.com', '$2y$10$QbHxRKgrKLuKZe/2EdNSj.707buLhHgPnZL2u0EWbpJVf2J41Cng.', 1, 'rHTtLMttdDbhhw7auHNnOESa5WDR680jHDphC8GHcZA4TV1sOK9pSfHIrvVO', '2020-02-06 10:56:13', '2020-02-06 11:23:39'),
(2019036, 2019036, 'خليل', 'ابراهيم', 'محمد', 'البيوك', 67.0, 'kh.2001@gmail.com', '$2y$10$fkmYfapzeAgRvufLUdBgRencjEplxt5G0erI6sEji1kw/cvWZKaZ.', 1, NULL, '2020-02-09 12:15:34', '2020-02-23 12:38:56'),
(2019037, 2019037, 'الاء', 'محمد', 'احمد', 'الببو', 65.1, 'ALAA2001@gmail.com', '$2y$10$u/8ueOUbUVSD26jnwlDo/.hzuashq3OFZlRRnbLEDJ/nlD5Nznkm2', 1, 'fGUsz1seeG8Jdaby5KIHKfCHHDicLAqFgFndMzzd0bHiB5jHWsesS65kIx3r', '2020-02-19 09:54:50', '2020-02-19 10:50:55'),
(2019038, 2019038, 'نعمه', 'عثمان', 'محمد', 'العقاد', 75.4, 'n.e.2010@hotmail.com', '$2y$10$ecH8nTM0bB4Uf9cO9U2eFegg6dTmeOXEgUIHKfiOv4Pbf2AV50oLS', 1, 'HxRh4GMVP86W6spOIjX8ShaOMnil3EGvyXn1RdAafELw7SKOVQY3T0mYuto3', '2020-03-01 12:31:40', '2021-05-26 06:13:36'),
(2020001, 2020001, 'محمد', 'نعيم', 'عبد الكريم', 'ابو مغصيب', 59.9, 'moh@gmail.com', '$2y$10$R4b/29Jw76a7.gz8zmuiHeIVx2/SI/pOVBlYipSqmPzcx1kXN420i', 1, 'jCAbuEcI3auz77pStlWa3mjCqFPLsD5flky4hXZWnZcsGjgo4iKISuQU1jYM', '2020-09-09 12:51:40', '2020-09-21 12:49:59'),
(2020002, 2020002, 'طارق', 'عبد الكريم', 'احمد', 'العويني', 55.7, 'TAREQ@GMAIL.COM', '$2y$10$27ou0I4euTqUs5l85WjVt.DgGWxIPgu45H8jIMVGhmf4S9JF6orZG', 1, 'ObG3ZpoIWlxyRWjzIbrymXSYJsUvYaILduOiFM9TRf3efmoJ5uIPoA5we8eu', '2020-09-09 12:52:56', '2020-09-16 11:36:50'),
(2020003, 2020003, 'رائد', 'اشرف', 'خميس', 'عاشور', 64.6, 'raed@hotmail.com', '$2y$10$7S.pNn5LrDW2HCJBj1vA4uhOLQz49e2sZWiSUWnqBuzB6TXaOVngq', 1, 'kHk4jI45AlsYykgsjJ3ODcVkI5ncMD9srAbnBfjfY1kUSpwHMw0CNZ00ykNf', '2020-09-09 12:54:17', '2020-09-17 13:08:59'),
(2020004, 2020004, 'عبد الرحمن', 'سليمان', 'سمير', 'ابو سلطان', 56.9, 'abd@hotmail.com', '$2y$10$gEQyecXgbwfLZ/W2CohYZefzVlTsATdCA8WwXmWD/sUz/Hx4NnzQS', 1, 'TCv5BYLuWvSJ9tWjp53OCp4pKjz9VY2tzRRgLQjj2Aa2UvTQKyvlyfrP5paA', '2020-09-09 12:55:28', '2020-09-20 09:17:16'),
(2020005, 2020005, 'ميساء', 'زيد', 'عصام', 'ابو سلطان', 60.6, 'maysaagentle@gmail.com', '$2y$10$NXc2g38lF0f4uhUDbtGDUeozWup1j8xNx.tp2osLZe8tVDDDWt9Li', 1, 'huoxhxIz01rhgJsY3mR4nBtf5MkQj1mfJCBzeeL8pK3kQbDqz4bA39CRVemh', '2020-09-09 13:01:39', '2020-09-16 08:01:46'),
(2020006, 2020006, 'محمود', 'محمد', 'محمد', 'مقداد', 50.3, 'mahmod@gmail.com', '$2y$10$wAwzNSJXaJokkISeq3gnwOMDMXtZhfPiDNqToOAdV0PYJdVkOmCNm', 1, 'NEvFoSZ4yi0kjPHBHy5dOw4ePz8elpUCg1po8pE6SuxWbZlYz5EPbLvvqxM0', '2020-09-09 13:02:50', '2020-09-20 08:10:20'),
(2020007, 2020007, 'محمود', 'خالد', 'أحمد', 'الجخلب', 59.3, 'mh2002@hotmail.com', '$2y$10$cbQgVRIJvnv/Tz8vVEL05OOKd31s12i8LbxRBAShiBiLPo4XWhzY.', 1, 'S7ihLmqxu3H2wjoxNdz3Taze6rxbwGg7X7EwjdjyI4xOyKNLU1Z2Q6PgnWh2', '2020-09-09 13:04:03', '2020-09-16 09:47:01'),
(2020008, 2020008, 'المعتصم بالله', 'سليمان', 'يحي', 'اصليح', 68.6, 'mootasem@hotmail.com', '$2y$10$9QZzq6xFEKy6PGdNf1x3QeOdhD5JV9shJirqadObBdk9TrjF8tQIq', 1, 'FguOEDXuKxE8jjdxNU3LflkAh5t3NEBwzOmIns74xkiF7RQHD4DWs4Ry7JUM', '2020-09-09 13:06:54', '2020-09-21 10:09:52'),
(2020010, 2020010, 'ايمان', 'مفيد', 'محمود', 'صيدم', 74.4, 'eman-2002@gmail.com', '$2y$10$lo1waauC4.8M.M7pKlgWw.CVAZFlEWxrgEarOmiUycz.RD7UilLQ2', 1, 'xXLSu1JcJHjrclhqJBG0GTLJ1ARcGIOwTpvnS7fjnj7BHidCDPjGTpXF9skH', '2020-09-09 13:10:53', '2020-09-16 11:32:01'),
(2020011, 2020011, 'أنس', 'عبد الكريم', 'جمعة', 'ابو شماس', 83.3, 'anas@gmail.com', '$2y$10$KhNVUs.PbdVIowx9KZmF9evY6HO8LFU0c3zUP/92pP3Rs5d4QtEEW', 1, 'XsAjtSRcfWi5oiU4S9J9Aq2SisW4srSatuIaXSiUoA70zb39SM1zuLaMbOfb', '2020-09-09 13:18:33', '2020-09-16 11:09:42'),
(2020012, 2020012, 'سعيد', 'حمدان', 'سعيد', 'قشطة', 67.1, 'said@hotmail.com', '$2y$10$q3RfwOCUBtLDTa0P04q7AOK6ztzLHNpmuXH.e2xvYDBgMRa5FHDlG', 1, 'jpXjCfS0U1VR7KyhfORcB0QI6P8ErGPftYVRhFJAgWZmbzj9Z1TBLjQHJMbH', '2020-09-09 13:20:04', '2020-09-17 11:17:28'),
(2020013, 2020013, 'علا', 'حسين', 'مرزوق', 'ابو حماد', 88.9, 'Ola.h.hammad@gmail.Com', '$2y$10$XHBbp/uDdqzKP.lE8LZ1ce.LjGZeAvjEXmvR.3NWEgYRQRUOLP5LG', 1, '3hHDfGebAYEczWY8OMPDHlVzIEzm2DtLtUk51pe0LodTVijmeFfVoDJYqN7A', '2020-09-09 13:22:17', '2020-09-15 12:36:12'),
(2020014, 2020014, 'محمد', 'ايهاب', 'محمد', 'مقداد', 68.7, 'mmqdad166@gmail.com', '$2y$10$l/VoBLnVDRtCN4YoDWNXeOkXFhvZ3nhLLChEHsOzxrE//cMvG1cdS', 1, 'o4gnLPBoo3K97Pw34yEYHXkiF6Unm44iq2RZULwqkrZkmrKHGOS0AmugoSvp', '2020-09-09 13:23:18', '2020-09-15 12:28:36'),
(2020015, 2020015, 'رقية', 'رائد', 'عطا', 'قصاص', 86.4, 'roq@hotmail.com', '$2y$10$WfibQgQWdqHp4vFVkT4MZ.FLSRgDgJEd7H5N6H/5Bx4h6.7Z37BJi', 1, 'K9bEpWeRO1kOLV0rd0U5xsALQ3Xx0uATB5QlM4ZghHMQkvNl8wJAWlZMqXQi', '2020-09-10 06:06:10', '2020-09-17 11:12:31'),
(2020016, 2020016, 'الاء', 'ناهل', 'محمد', 'قديح', 71.4, 'alaaqu56@gmail.com', '$2y$10$9pt.6aJ8ZCv89JR0WJNnFueyr3PnCVWFr/XyhkrL7b43MdIsCXUFu', 1, 'BFQKJc2lfGjshRZ0i2F2qHws4TtYmekj9c7f5PoZDa9AG4z2lLn7tAeoeDNi', '2020-09-10 06:09:57', '2020-09-15 12:22:22'),
(2020018, 2020018, 'سجى', 'محمد', 'محمود', 'الهندي', 72.6, 'sajamoh201@gmail.com', '$2y$10$ejHQBZR2uxWvUtmKkCjCOumXznHtJ1f5pA04DQjq90t7ZhgsysRT2', 1, 'PupkUuxk0HD25dwAI9v5Li7TTOia0sXSmfcMd8QXfmDrvHXHWRU8ir6oAaa1', '2020-09-10 06:12:53', '2020-09-15 12:15:47'),
(2020019, 2020019, 'فاطمه', 'علاء', 'حسين', 'العويني', 85.9, 'fatoom@gmail.com', '$2y$10$MpG05aHEw6EwuTwNnv8Slu0riXmUjTGFfR0B5s4ed3uJblrsHAJIu', 1, 'y969XZVcoidpPCxUGHzCe4xOUvdq9bwpBYOK0EKaQJDNhgT7gkJUSeyfv2ed', '2020-09-10 06:14:06', '2020-09-16 07:55:17'),
(2020020, 2020020, 'اسلام', 'ماجد', 'رمضان', 'القاضي', 95.3, 'i_alq@hotmail.com', '$2y$10$Sh/ZaKrCq1AKd9sQ3nvusuSOYabCKTHFnih8N96ydvaf3asGzCWoa', 1, 'lGno2aAP5RFuUhm2tet61GOKrRQNrQ44amTg9qMOzr13OSKWkaO5R2W9p7fs', '2020-09-10 06:15:12', '2020-09-15 12:01:38'),
(2020021, 2020021, 'ندى', 'يوسف', 'زكي', 'ابو قاعود', 95.6, 'nada2002.yusef@gmail.com', '$2y$10$YBib7.RJljVqP.zMMfpf7.1JrmWaxjeDV3VNJV2HGwFeN9s3qsNPm', 1, 'HSc821kRElOF5tCvRMSyo6PSnojuzzwIU8pPLjrMg0O7SXLeT4nJON454Mnf', '2020-09-10 06:16:36', '2021-07-01 10:00:40'),
(2020022, 2020022, 'اسراء', 'مازن', 'ابراهيم', 'ابو جزر', 68.7, 'israa@gmail.com', '$2y$10$xeDupe2fXBHLaTpifhx37ugIx5w5j5hJGEOwPgbb.CaiboTSxbmSe', 1, 'mrNZqIgZ1920FsNZRcEd8L8ZZSemTCuKLRHCCEweweOq8EPVs4qf2J26Do1u', '2020-09-10 06:22:59', '2020-09-20 11:16:13'),
(2020023, 2020023, 'يحيى', 'توفيق', 'عبد', 'طباسي', 61.2, 'yehyatabasy@gmail.com', '$2y$10$3uPRjfraoS8tUjFOmDRH2eKPBT9zCxVuFwyW9CFyOxjiEC6l8uRIC', 1, 'fMLQ9TG5oLnBAZTlURSrbmUC55hr0wD9Q6SbxRvl7qSXxvLFUrq3lsyIR2qI', '2020-09-10 06:58:59', '2021-01-03 18:03:41'),
(2020024, 2020024, 'حكمت', 'رياض', 'احمد', 'ابو غالي', 78.9, 'Hekmatghali@gmail.com', '$2y$10$sPqsruR2GIPA8S1ICIB61eTICDNO7Z7xEWCKz/2hzIXkSnJbUgqYu', 1, 'jqDaEiLSkRVuSHjCo5TRDSIACbS5WkvA5gf0o4HC657atVGeaVU1c0Tp7m0o', '2020-09-10 07:06:25', '2020-09-15 11:34:08'),
(2020025, 2020025, 'لؤي', 'علاء', 'عدنان', 'صادق', 52.9, 'loay@gmail.com', '$2y$10$oktQnmyiSDJ0M0inSQkBNuIvfRTg8Qtyxg.pWVXs9QanJs3OMr97S', 1, 'jzk0SgozZktMbcnYmbkmSIkXFu4UbUQZ8sxUMK0fD9yvP7NXPoeGtHHtzbQg', '2020-09-10 10:46:17', '2020-09-20 09:25:03'),
(2020026, 2020026, 'محمد', 'احمد', 'مسلم', 'ابو درج', 62.1, 'Mohammedaduboreg@gmail.com', '$2y$10$kYaY7BpvpJbhn20oeXSz5eLQp5zUtgVoZrO4NzOetG5VE2.1jdFjS', 1, 'APpMJILOxHWyJ5KxwQ13d6Y4ld8KF98TLR3srQew7v6eFkTmnUN7NLLLW3Hz', '2020-09-10 10:52:22', '2020-09-15 13:14:53'),
(2020027, 2020027, 'راتب', 'كمال', 'محمد', 'خليفه', 63.1, 'khalifh@bk.ru', '$2y$10$5.XzEUvrJyKP6f1GfNiQx.UuGvwQpM/HrpivHvyiPVnJ9pqmZE5We', 1, 'lZHFU1cGX12T2Z1JRs8w6JDyBm6GtdxPN8OaFwFBlx5nYvPBrJw0ABjclgaZ', '2020-09-13 09:28:19', '2020-09-15 13:07:04'),
(2020028, 2020028, 'يارا', 'فوزي', 'سعيد', 'اسماعيل', 82.7, 'yara@gmail.com', '$2y$10$E6CiLTVLF.KKIi4Ab.AqQOljzbY3BeUqESal3WgqkoeL/Hig3SIpm', 1, 'Ia9XNKhAlFw0WvV7iuxZPH51DrMyrI5GcxX2D1tF7CO1uFMJtz9FBY9nOt8g', '2020-09-13 09:45:33', '2020-09-20 09:27:48'),
(2020029, 2020029, 'شهد', 'زكريا', 'حلمي', 'اسليم', 69.5, 'sh_2002@hotmail.com', '$2y$10$.sdwbXHvHdXtGL4wZRtv/.VKhNeNJ63dD4/DUJv2bharhkkrU6RpC', 1, 'VUk4L13QGZKTHNf7Ceqduj6p8Ob8ESsPKHMjP2PDqtSiCW9ot8juR8CwlWOq', '2020-09-15 08:25:24', '2020-09-16 09:19:57'),
(2020030, 2020030, 'أحمد', 'محمد', 'ملاحي', 'شبير', 54.8, 'ah.2001@hotmail.com', '$2y$10$ScoEtHX.I2S0u0vVMZVkbuV/Sam4/.QZJRm/4L7qyXm.l9Y1cq9A.', 1, 'dlnUPfni2GvDLBDQowZfmXJickXJSULiteXBY26gyWobSwbfDSuyzI0FpkQ0', '2020-09-16 12:02:42', '2020-09-17 08:41:50'),
(2020031, 2020031, 'احمد', 'سالم', 'سليم', 'بريكه', 74.6, 'ahmad@gmail.com', '$2y$10$JoiIPpJYsYKcAmYwCrjyO.IbtN3rCh8gAqPmzP7GtaC0HfXcflxne', 1, 'llooCnwBTLr6492wYscv9heRW5ndhoMyqwahRodrKzmMggLL4VqgBApLPkIF', '2020-09-21 08:58:31', '2020-09-21 10:22:53'),
(2020032, 2020032, 'محمد', 'حسن', 'اسماعيل', 'القصاص', 50.4, 'mohammed@hotmail.com', '$2y$10$ZxP677F/vsUm2QKLNinCjuUpTL751QLQvb7rm2tBOCglO3pvauQdi', 1, 'tgE4oU6o8ApueRuIN6SSH1ChmHYYnlLu6sLfZjEdFuZ1qE2HwoFIwEVNzJVK', '2020-09-21 10:48:03', '2020-09-21 11:40:03'),
(2020033, 2020033, 'محمود', 'موسى', 'محمود', 'عبيد', 51.9, 'moh@gmail.com', '$2y$10$DwNj8amF0x8Y4BfW4FIkO.3t0UXSp4Is3WjbN2LdSOrseXO4iuNJG', 1, 'sJGMwUjcb8ryjyN08x36vTQBBibzNHFfbld6qjgpJScn7lDYg2RnDcZEkH4k', '2020-09-21 11:23:30', '2020-09-21 12:05:48'),
(2020034, 2020034, 'ميساء', 'مراد', 'حمدي', 'عجور', 63.8, 'mays86336@gmail.com', '$2y$10$xhk5iTJQP6z37KSkrqJdb.NeK3irJr.briKebAYkFtd64qcCCKUzG', 1, 'MJez08zdS03O5OmyECScG5Nzx0yhlQBTusuJIDlZ94cZR0cZN8GThJpoOJGP', '2020-09-22 21:49:16', '2020-09-24 09:19:19'),
(2020035, 2020035, 'خليل', 'ابراهيم', 'محمد', 'البيوك', 67.0, 'kh.2001@gmail.com', '$2y$10$fkmYfapzeAgRvufLUdBgRencjEplxt5G0erI6sEji1kw/cvWZKaZ.', 1, NULL, '2020-09-22 21:49:21', NULL),
(2020036, 2020036, 'سميره', 'حازم', 'محمد', 'العويني', 80.7, 's.2018@hotmail.com', '$2y$10$PFgBBDvZZ5i/qexYtD30UuotmC4OzKKGf4qI.2bMqgd3L7.4tLh2S', 1, NULL, '2020-09-27 09:50:44', '2020-09-27 10:08:43'),
(2020037, 2020037, 'اسامه', 'علي', 'رمضان', 'ابو علوان', 52.6, 'far_foosh@hotmail.com', '$2y$10$pCmrCCvKO2.EmOiTyWBd4O9xdPeqW29IalrzJWR6dYXAO9o5Q6xIu', 1, 'vPp6uIofyvTkuTF7sksvwKdZVmUdSsZRbO3HmXQdeGa3PHVcxEqXbyIp5uKO', '2020-09-28 10:40:38', '2020-09-28 11:06:13'),
(2020038, 2020038, 'علي', 'فضل', 'علي', 'شحادة', 68.8, 'ail@hotmail.com', '$2y$10$ppSGeUP6uKSVohkC4gkW3.Oi1RN.Sz6gE.uCSBxuTULZXFehfl1Xu', 1, 'LlNGS0Y9Fo7bIP49hn4zNVwpA833KSUb4POxrGDbQFpQ4EsH8gbsQ0Xu1dw7', '2020-09-29 13:13:35', '2020-09-30 11:39:07'),
(2020039, 2020039, 'سجود', 'مازن', 'خالد', 'ابو موسى', 76.6, 'soj@hotmail.com', '$2y$10$0KnNa.oEhSTH5h3Dmvkvh.gCTg78PmUS1TvuE2Aba4DcIFAVk0qAq', 1, 'Y64clbaYy3UqPyT6Xv3274XIwCIZmtZmGinu0Lw64t3u9DbkdmaZIWCSbTnL', '2020-10-06 07:59:24', '2020-10-06 08:25:36'),
(2020040, 2020040, 'محمد', 'حسن', 'حسني', 'الحيله', 80.7, 'mohammed@hotmail.com', '$2y$10$sjy4tzNVILd7YmU7I3FeqOs8oVM572ZQpvu0pbc1PSmoRji8qIpc6', 1, 'avQ8Y0oej7ChSaOKdIwfYkKfaZhQswYPViV3g1aYLlLdlZITnLLvaEstlpUy', '2020-10-25 08:57:59', '2020-10-25 11:51:13'),
(2020041, 2020041, 'اسماعيل', 'محمود', 'مسعود', 'رمضان', 60.9, 'ismail@hotmail.com', '$2y$10$fKE91iu.ecu.yJt9evuYX.K7qOJlBmSdmcTgvmH6oY9VOle7i.Wy.', 1, 'AiNTq59zlODaqIdfuJ2aUwzlnXEOdlU7YXjtqbixu17qbsl3ZNvNUxAWTh3i', '2020-10-25 12:54:39', '2020-10-25 14:18:50'),
(2020042, 2020042, 'مؤمن', 'احمد', 'محمود', 'الشاعر', 57.6, 'momin@hotmail.com', '$2y$10$wdhe/bnonIb1qBg3XNRh3.T.uZyx8nOKkjDe0GPGLGQEId.CogW5u', 1, '6ooHq6CcJgIG51LQxzG6kLLaVuHnuubPo3fBEGttBXzZRNQPGK0MJ8KwcIcj', '2020-10-25 13:09:39', '2020-10-25 14:20:31'),
(2020043, 2020043, 'نادية', 'فوزي', 'العبد', 'سمور', 93.9, 'nadia-2005@hotmail.com', '$2y$10$.PAC1b6fGOZfdepHDwVkuum5fXMzHQsPAgNn8XEaFFworO915py92', 1, 'MYzBcT2zYQnctRqPMbm3gGwydMNpkBT4Xy9bqBwQROhPwuqAJXAET02iKfVR', '2020-11-23 10:59:50', '2020-11-25 08:27:10'),
(2020044, 2020044, 'حسام', 'عطا', 'حسن', 'ابو موسى', 72.1, 'eng-hassan20111@hotmail.com', '$2y$10$hYrO8L91FG11DPomxlqnSe2HS/bgUYAM9uDYjlSeehSEw7ZJIdr4q', 1, 'FJvZyLssTGojJKcczUk7p1xHGD1ecrDdlIejLuwWO81Mak7zkGSo7TIbXlkr', '2021-02-15 08:29:16', '2021-02-21 08:09:58'),
(2020045, 2020045, 'علاء الدين', 'خالد', 'أحمد', 'ابو نجا', 76.4, 'alaa2442002@gmail.com', '$2y$10$uXiNE/RprJ8hMtDXA7vb..mVLElPUYpM.BH1yhXBXlVTDsEurkvmi', 1, 'KeoUJew4LjD1itsPKk7UDUKxNnx0OQmj0KGdf8ua2Ymrcvsvy0v60I5BYvPn', '2021-02-21 11:46:03', '2021-02-21 12:12:52'),
(2020046, 2020046, 'قمر', 'رامي', 'سعد', 'الغلبان', 70.9, 'qamarramialghalban3@gmail.com', '$2y$10$D/e3KDxWkPBcm0628.Em3.WgBixbNEbBJuW9.BsuDwe9RzwhDDZVC', 1, 'Kxqn4Mq5T8cVpqNBnd9HLtbP8ZdEAG2hlzCo7Y7iLUgqbYrIa499wcyZ6ndg', '2021-02-21 12:23:43', '2021-02-21 12:51:27'),
(2020047, 2020047, 'اسلام', 'عبدالله', 'محمد', 'ابو عبيد', 94.9, 'abdislam063@gmail.com', '$2y$10$K3BwJQQdRRmugH17cT3F.ufsSa9ZA0obUJYYgzcOcaTeiCuVyUI6q', 1, 'q8PGU6gjzP8fJXptmnWkVsNyExorOQVViyqE5c9XebBPAvDwpjmyM0N9qjWN', '2021-02-22 10:14:11', '2021-02-22 11:00:16'),
(2020048, 2020048, 'رائد', 'محمود', 'حسين', 'شاهين', 64.4, 'Raid666@gmail.com', '$2y$10$3krN18FFeEL/fkP2.CKuxe5BuQ6z9FHH2dJ7WLP9UpDxcm2vp7nWa', 1, 'iwbwPuX9eGTdADEiVMA0xylidlL52wHj5xvGkooRbGgLniOK6pK92ykoOVEJ', '2021-02-24 13:29:05', '2021-03-16 13:18:09'),
(2020049, 2020049, 'محمد', 'محسن', 'حسن', 'ابو عمرة', 65.5, 'Mohamed363@gmil.com', '$2y$10$eltHSSJ.relOYE5.Bvw.lOOprvq0SLRyGCJ1hyjOoYdNIMhWcHgPi', 1, 'ba26rb2OGdPSAGsp27sabsN3FVDE9bamXIJDTUDjWRekPZw68kYxgf3QMu6E', '2021-02-24 13:29:58', '2021-03-16 12:29:14'),
(2020050, 2020050, 'يونس', 'محمد', 'ابراهيم', 'عبد القادر', 65.4, 'younes7216@gmail.com', '$2y$10$czgCbp1PS8Pici0p5BRocOmVtjH0/l6YQ35B5.VwOMj.LnPKmTg6O', 1, 'tLBz67QxTdfbCH3n7bOisy08JySXJc4qEE9PTzh8agbGbsCh0AZoRq76tGEE', '2021-02-24 13:30:36', '2021-03-16 12:35:26'),
(2020051, 2020051, 'سالم', 'احمد', 'مصطفى', 'ابو الخير', 64.4, 'braa.salem@hotmail.com', '$2y$10$01QU6X9Yzhannc3Jtv8w9ezAr4/MXBRUv0gkFGKbcJ/34BpbdiZHO', 1, 'LUreFqZC8l7rqh2O4l115eO9ukZjeGlSsHqUTGnXqgnipNoFDvMlFP0UYatq', '2021-02-24 13:31:12', '2021-03-16 12:36:03'),
(2020052, 2020052, 'جهاد', 'منصور', 'حمدان', 'اسليم', 60.8, 'jehadko@gmail.com', '$2a$04$VAanPvJghPs.Hamq9C/UAelqwF6ee1p5movuvL568QyRt6.UzpFye', 1, 'rfM2MhyKs7bTA3Dgd6VFDT566y98sybHrjU2IxddZQK8aAp9JpnMTyOkoBoN', '2021-02-24 13:32:01', '2021-03-16 13:27:22'),
(2020053, 2020053, 'سالم', 'سالم', 'محمود', 'احمد', 50.0, 's900641044@gmail.com', '$2y$10$omYDD864RKcKEoQfw5FwTe5bY1htO.J.E9AAFD/3rzVl.XJIcoo.i', 1, 'wtOY2IYIc4DIw6rFgkhPrHBe9xZTDXJVMFBJfSFuKsiKCeMPfRVYzyKIcmAe', '2021-02-25 12:13:53', '2021-03-15 08:18:43'),
(2020054, 2020054, 'تامر', 'محمود', 'حسين', 'شاهين', 52.7, 'tamer2623@gmail.com', '$2y$10$RK.DtwSLBMJnJBturnzdWeTnHiJB1uHOOC823f8k5ftqnboFjqxn2', 1, 'IuVCNkUpc85bl0Qb6RXL5JaZ3ILdLgV22QrGgrOTBNu7stsYCGCWzxn5o6tT', '2021-02-25 12:15:53', '2021-03-14 13:24:52'),
(2020055, 2020055, 'محمد', 'خليل', 'احمد', 'القاضي', 62.9, 'mohammedelgady4@gmail.com', '$2y$10$KCKnCNZEAwE76y70CeOpG.hxUuptZZd/qdI1Kg5LXurlL//EAiNyq', 1, 'TjzxSVwlJFJAtGU0hBoSAcb4j48u8wWlLUpDIttBCPUGIfin1YM4vLub72fn', '2021-02-25 12:18:35', '2021-03-16 09:04:03'),
(2020056, 2020056, 'حسن', 'احمد', 'عبد الله', 'العبادلة', 65.9, 'hasn101@hotmail.com', '$2y$10$KJ0ywqHeN4gy39fLh/s5weQejeqA/2dXCILh5DosSeYfQe6r.0W7C', 1, 'c4ODOpaFU1ZDMQi4occEEiExOJJYj1XQNb71ZWWCq0dQR1NGDquuzeh3J25m', '2021-02-25 12:20:33', '2021-03-14 13:23:20'),
(2020058, 2020058, 'محمد', 'حمدان', 'محمد', 'ابوهجرس', 58.6, 'abo_alabed2008@hotmail.com', '$2y$10$Gcr/zqAaY1ZHrzgDSxzySuHZn.4UHUV3j4TGbgAWK9WPZsXftbntW', 1, 'KBTcsZmp5xz2eush8MWXZXqT5xUcpXyq6S15AjqMWqtfQYEb6A5QKAc6I2Mv', '2021-02-28 08:17:54', '2021-03-16 13:14:50'),
(2020060, 2020060, 'حاتم', 'صبحى', 'حسن', 'عوض', 68.3, 'hatemawad0599885044@gmail.com', '$2y$10$S4yaTWOgl3odEOOu9HUSFe29veroZnmMswV1ukOkgmKRbvAi0GR2y', 1, 'rd2B6qRfsZBi2EIdYV5cTgGigAjYowlZN2jejFq7pT1uZHuH4gJPVqLgSOjb', '2021-02-28 08:34:59', '2021-03-14 12:32:53'),
(2020061, 2020061, 'احمد', 'محمد', 'يعقوب', 'الحوت', 57.9, 'ahmedhout12@gmail.com', '$2y$10$BaXYMe2127R/qZqvR1bYK.FT9xFs3loKIoFkgQkLAD2te62eKSthW', 1, '5RY5qTrUxeAOZdMx1HbNaZWk4ydnLeKnvQk0s2PXxhXkGvvSlf7l7MkTuUqw', '2021-02-28 08:38:23', '2021-03-14 12:29:45'),
(2020062, 2020062, 'جبر', 'صبري', 'جبر', 'زيدان', 64.1, 'jbr_aha2007@hotmil.com', '$2y$10$vA6scgwKaurxPVOiu6MhkOJR63HCS07c3Q9ePSvogscCryr.ySBwW', 1, 'O86PisEhhq0HPH5UyMamOnGXnrLonqlRtUWIgAtmlD3PbMLVriB3962FnEDN', '2021-02-28 10:39:46', '2021-03-16 09:35:04'),
(2020063, 2020063, 'يوسف', 'عبد الرحمن', 'يوسف', 'زينو', 67.6, 'yousef29121988@gmail.com', '$2y$10$CgkMYHoGp//H1e5K594I9Oz0Z3nI7sfRJcqc2WkZCjq1Mc/qxB3Ea', 1, NULL, '2021-02-28 10:57:56', '2021-03-14 11:06:32'),
(2020064, 2020064, 'أكرم', 'خليل', 'حسين', 'الأستاذ', 50.0, 'akrama6845@gmail.com', '$2y$10$aUK4lSsWmu.4TjECYYvv1utY/bsiKnTPQxjmNlLWlPdZX4YTGKy5m', 1, 'aSwARAjh3lStpw9QE8BPO0WxK5rdljmk3zZWcWSwOk27v0IvoWDtxKNveNGf', '2021-03-01 08:04:54', '2021-03-16 12:48:58'),
(2020065, 2020065, 'نور', 'نبيل', 'رسمي', 'الشافعي', 84.7, 'noornabil757@gmail.com ', '$2y$10$8sEdhUnUibGt8RhJoe5u8.hzbKiCw/O8THozacvAfngGai.hqQsR.', 1, 'MRc3M7dYcj9imSFnKHaswAThbHAW7KIPhLXZa7hcYfkt2Y2zHwUIVNerxOeF', '2021-03-02 10:43:21', '2021-03-08 15:45:36'),
(2020066, 2020066, 'رامي', 'يحيى', 'السيد', 'القطاوي', 53.6, 'ramyalqatawi123@gmail.com', '$2y$10$Byfi1Me2vXPVJFKIuYL4t.jvdqzzXcq3jZfMW9NyjJk8NRFtqY/Uu', 1, 'mDQxruvuLYwByK3qWezHqb1GN76ItYPXSN9aj1LG1jpFJR00XrvnnLtk8j0g', '2021-03-10 11:55:44', '2021-03-15 09:08:46'),
(2020067, 2020067, 'أيمن', 'نظمي ', 'سليم', 'شهوان', 59.7, 'aymangoog@gmail.com', '$2y$10$XSWWTpGaI8/XBz9iuMuA4.wYx/5j.9iHqMABZqV79EANuQiJb474a', 1, 'pducoygvA0BfcSRqJC0p90e647lsqORNsVP9wmDd6w6pOswexuHhiAhys1R7', '2021-03-10 12:02:06', '2021-03-15 13:25:05'),
(2020068, 2020068, 'بلال ', 'محمد', 'حسن', 'بشير', 50.0, 'belalbasher@gmail.com', '$2y$10$wR.C6k767dpFsDDIGS0shOvr0iZVPb6YcVcWV2jLZ6OjehdwHJ/UG', 1, 'KpNAmLU8ap6FzJYKYzw1o1vIWgL1g3wZjsGnzVRzzH7tzscvl46YBJofbdcw', '2021-03-10 12:03:12', '2021-03-15 09:42:27'),
(2020069, 2020069, 'ياسين', 'محمد', 'ياسين', 'مطير', 50.0, 'yaseenmtear@gmail.com', '$2y$10$ILDFgidb8.la80ACTL1vPufOz.yEpgJYgJ1t/r6QNfR2mJvdkc0xa', 1, 'pJsZcWpDJcno5DhYXE1GFLO4aLMBkZjNKJ3IZDepnMks5N6o72hUFQXhBO44', '2021-03-10 12:04:12', '2021-03-31 11:55:02');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `availablecourses`
--
ALTER TABLE `availablecourses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `availablecourses_semester_id_foreign` (`semester_id`),
  ADD KEY `availablecourses_course_id_foreign` (`course_id`);

--
-- Indexes for table `courseclasses`
--
ALTER TABLE `courseclasses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `coursedescs`
--
ALTER TABLE `coursedescs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `courseplans`
--
ALTER TABLE `courseplans`
  ADD PRIMARY KEY (`id`),
  ADD KEY `courseplans_plan_id_foreign` (`plan_id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `courses_course_code_unique` (`course_code`),
  ADD KEY `courses_coursetype_id_foreign` (`coursetype_id`),
  ADD KEY `courses_coursedesc_id_foreign` (`coursedesc_id`),
  ADD KEY `courses_courseclass_id_foreign` (`courseclass_id`);

--
-- Indexes for table `coursetypes`
--
ALTER TABLE `coursetypes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `departments_department_code_unique` (`department_code`),
  ADD KEY `departments_grade_id_foreign` (`grade_id`),
  ADD KEY `departments_employee_id_foreign` (`employee_id`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `employees_name_unique` (`name`),
  ADD UNIQUE KEY `employees_email_unique` (`email`);

--
-- Indexes for table `grades`
--
ALTER TABLE `grades`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `graduationsessions`
--
ALTER TABLE `graduationsessions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `majors`
--
ALTER TABLE `majors`
  ADD PRIMARY KEY (`id`),
  ADD KEY `majors_employee_id_foreign` (`employee_id`),
  ADD KEY `majors_department_id_foreign` (`department_id`);

--
-- Indexes for table `marks`
--
ALTER TABLE `marks`
  ADD PRIMARY KEY (`id`),
  ADD KEY `marks_semesterinstructor_id_foreign` (`semesterinstructor_id`),
  ADD KEY `marks_course_id_foreign` (`course_id`),
  ADD KEY `marks_semester_id_foreign` (`semester_id`),
  ADD KEY `marks_student_id_foreign` (`student_id`);

--
-- Indexes for table `media`
--
ALTER TABLE `media`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `media_uuid_unique` (`uuid`),
  ADD KEY `media_model_type_model_id_index` (`model_type`,`model_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `plans`
--
ALTER TABLE `plans`
  ADD PRIMARY KEY (`id`),
  ADD KEY `plans_major_id_foreign` (`major_id`);

--
-- Indexes for table `semesterinstructors`
--
ALTER TABLE `semesterinstructors`
  ADD PRIMARY KEY (`id`),
  ADD KEY `semesterinstructors_availablecourse_id_foreign` (`availablecourse_id`),
  ADD KEY `semesterinstructors_employee_id_foreign` (`employee_id`);

--
-- Indexes for table `semesters`
--
ALTER TABLE `semesters`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stdstatuses`
--
ALTER TABLE `stdstatuses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `studentacademics`
--
ALTER TABLE `studentacademics`
  ADD PRIMARY KEY (`id`),
  ADD KEY `studentacademics_student_id_foreign` (`student_id`),
  ADD KEY `studentacademics_department_id_foreign` (`department_id`),
  ADD KEY `studentacademics_major_id_foreign` (`major_id`),
  ADD KEY `studentacademics_plan_id_foreign` (`plan_id`),
  ADD KEY `studentacademics_departmentplan_foreign` (`departmentplan`),
  ADD KEY `studentacademics_graduationsession_id_foreign` (`graduationsession_id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`),
  ADD KEY `students_stdstatus_id_foreign` (`stdstatus_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `availablecourses`
--
ALTER TABLE `availablecourses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `courseclasses`
--
ALTER TABLE `courseclasses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `coursedescs`
--
ALTER TABLE `coursedescs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `courseplans`
--
ALTER TABLE `courseplans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=150;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=125;

--
-- AUTO_INCREMENT for table `coursetypes`
--
ALTER TABLE `coursetypes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `grades`
--
ALTER TABLE `grades`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `graduationsessions`
--
ALTER TABLE `graduationsessions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `majors`
--
ALTER TABLE `majors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `marks`
--
ALTER TABLE `marks`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `media`
--
ALTER TABLE `media`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `plans`
--
ALTER TABLE `plans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `semesterinstructors`
--
ALTER TABLE `semesterinstructors`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `semesters`
--
ALTER TABLE `semesters`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `stdstatuses`
--
ALTER TABLE `stdstatuses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `studentacademics`
--
ALTER TABLE `studentacademics`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=401;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2020070;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `availablecourses`
--
ALTER TABLE `availablecourses`
  ADD CONSTRAINT `availablecourses_course_id_foreign` FOREIGN KEY (`course_id`) REFERENCES `courses` (`id`),
  ADD CONSTRAINT `availablecourses_semester_id_foreign` FOREIGN KEY (`semester_id`) REFERENCES `semesters` (`id`);

--
-- Constraints for table `courseplans`
--
ALTER TABLE `courseplans`
  ADD CONSTRAINT `courseplans_plan_id_foreign` FOREIGN KEY (`plan_id`) REFERENCES `plans` (`id`);

--
-- Constraints for table `courses`
--
ALTER TABLE `courses`
  ADD CONSTRAINT `courses_courseclass_id_foreign` FOREIGN KEY (`courseclass_id`) REFERENCES `courseclasses` (`id`),
  ADD CONSTRAINT `courses_coursedesc_id_foreign` FOREIGN KEY (`coursedesc_id`) REFERENCES `coursedescs` (`id`),
  ADD CONSTRAINT `courses_coursetype_id_foreign` FOREIGN KEY (`coursetype_id`) REFERENCES `coursetypes` (`id`);

--
-- Constraints for table `departments`
--
ALTER TABLE `departments`
  ADD CONSTRAINT `departments_employee_id_foreign` FOREIGN KEY (`employee_id`) REFERENCES `employees` (`id`),
  ADD CONSTRAINT `departments_grade_id_foreign` FOREIGN KEY (`grade_id`) REFERENCES `grades` (`id`);

--
-- Constraints for table `majors`
--
ALTER TABLE `majors`
  ADD CONSTRAINT `majors_department_id_foreign` FOREIGN KEY (`department_id`) REFERENCES `departments` (`id`),
  ADD CONSTRAINT `majors_employee_id_foreign` FOREIGN KEY (`employee_id`) REFERENCES `employees` (`id`);

--
-- Constraints for table `marks`
--
ALTER TABLE `marks`
  ADD CONSTRAINT `marks_course_id_foreign` FOREIGN KEY (`course_id`) REFERENCES `courses` (`id`),
  ADD CONSTRAINT `marks_semester_id_foreign` FOREIGN KEY (`semester_id`) REFERENCES `semesters` (`id`),
  ADD CONSTRAINT `marks_semesterinstructor_id_foreign` FOREIGN KEY (`semesterinstructor_id`) REFERENCES `semesterinstructors` (`id`),
  ADD CONSTRAINT `marks_student_id_foreign` FOREIGN KEY (`student_id`) REFERENCES `students` (`id`);

--
-- Constraints for table `plans`
--
ALTER TABLE `plans`
  ADD CONSTRAINT `plans_major_id_foreign` FOREIGN KEY (`major_id`) REFERENCES `majors` (`id`);

--
-- Constraints for table `semesterinstructors`
--
ALTER TABLE `semesterinstructors`
  ADD CONSTRAINT `semesterinstructors_availablecourse_id_foreign` FOREIGN KEY (`availablecourse_id`) REFERENCES `availablecourses` (`id`),
  ADD CONSTRAINT `semesterinstructors_employee_id_foreign` FOREIGN KEY (`employee_id`) REFERENCES `employees` (`id`);

--
-- Constraints for table `studentacademics`
--
ALTER TABLE `studentacademics`
  ADD CONSTRAINT `studentacademics_department_id_foreign` FOREIGN KEY (`department_id`) REFERENCES `departments` (`id`),
  ADD CONSTRAINT `studentacademics_departmentplan_foreign` FOREIGN KEY (`departmentplan`) REFERENCES `plans` (`id`),
  ADD CONSTRAINT `studentacademics_graduationsession_id_foreign` FOREIGN KEY (`graduationsession_id`) REFERENCES `graduationsessions` (`id`),
  ADD CONSTRAINT `studentacademics_major_id_foreign` FOREIGN KEY (`major_id`) REFERENCES `majors` (`id`),
  ADD CONSTRAINT `studentacademics_plan_id_foreign` FOREIGN KEY (`plan_id`) REFERENCES `plans` (`id`),
  ADD CONSTRAINT `studentacademics_student_id_foreign` FOREIGN KEY (`student_id`) REFERENCES `students` (`id`);

--
-- Constraints for table `students`
--
ALTER TABLE `students`
  ADD CONSTRAINT `students_stdstatus_id_foreign` FOREIGN KEY (`stdstatus_id`) REFERENCES `stdstatuses` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
