-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 19, 2022 at 01:30 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `puptaps_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `form_eif_answers`
--

CREATE TABLE `form_eif_answers` (
  `answer_id` int(10) UNSIGNED NOT NULL,
  `alumni_id` int(10) UNSIGNED DEFAULT NULL,
  `question_id` int(10) UNSIGNED DEFAULT NULL,
  `answer` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `form_eif_categories`
--

CREATE TABLE `form_eif_categories` (
  `category_id` int(10) UNSIGNED NOT NULL,
  `form_id` int(10) UNSIGNED DEFAULT NULL,
  `category_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `form_eif_categories`
--

INSERT INTO `form_eif_categories` (`category_id`, `form_id`, `category_name`) VALUES
(1, 2, 'Data Privacy Notice'),
(2, 2, 'Personal Information'),
(3, 2, 'Overall'),
(4, 2, 'Director’s Office'),
(5, 2, 'Office of the Head of Academic Programs'),
(6, 2, 'Administrative Office'),
(7, 2, 'Accounting/Cashier’s Office'),
(8, 2, 'Office of Student Services/Scholarship'),
(9, 2, 'Admission/Registration Office'),
(10, 2, 'Guidance and Counseling Office'),
(11, 2, 'Library Services'),
(12, 2, 'Medical Services'),
(13, 2, 'Dental Services'),
(14, 2, 'Security Office'),
(15, 2, 'Janitorial Services'),
(16, 2, 'Overall PUPT'),
(17, 2, 'Date and Signature');

-- --------------------------------------------------------

--
-- Table structure for table `form_eif_questions`
--

CREATE TABLE `form_eif_questions` (
  `question_id` int(10) UNSIGNED NOT NULL,
  `category_id` int(10) UNSIGNED DEFAULT NULL,
  `question_text` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `question_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `form_eif_questions`
--

INSERT INTO `form_eif_questions` (`question_id`, `category_id`, `question_text`, `question_type`) VALUES
(1, 1, 'Data Privacy Notice', 'checkbox'),
(2, 2, 'If employed (Position, Company/Company Address, Telephone Number) If not employed (Put N/A)', 'text'),
(3, 2, 'Reason for leaving PUP (Put a check on the box of your choice/s)', 'radio'),
(4, 3, 'Academic Standard', 'radio'),
(5, 3, 'School Activities', 'radio'),
(6, 3, 'Faculty/Teacher', 'radio'),
(7, 3, 'Facilities', 'radio'),
(8, 3, 'Course Taken', 'radio'),
(9, 3, 'Student Organization/s', 'radio'),
(10, 3, 'Classmates', 'radio'),
(11, 4, 'Quality of Service', 'radio'),
(12, 4, 'Timeliness of Service', 'radio'),
(13, 4, 'Courtesy of Staff', 'radio'),
(14, 5, 'Quality of Service', 'radio'),
(15, 5, 'Timeliness of Service', 'radio'),
(16, 5, 'Courtesy of Staff', 'radio'),
(17, 6, 'Quality of Service', 'radio'),
(18, 6, 'Timeliness of Service', 'radio'),
(19, 6, 'Courtesy of Staff', 'radio'),
(20, 7, 'Quality of Service', 'radio'),
(21, 7, 'Timeliness of Service', 'radio'),
(22, 7, 'Courtesy of Staff', 'radio'),
(23, 8, 'Quality of Service', 'radio'),
(24, 8, 'Timeliness of Service', 'radio'),
(25, 8, 'Courtesy of Staff', 'radio'),
(26, 9, 'Quality of Service', 'radio'),
(27, 9, 'Timeliness of Service', 'radio'),
(28, 9, 'Courtesy of Staff', 'radio'),
(29, 10, 'Quality of Service', 'radio'),
(30, 10, 'Timeliness of Service', 'radio'),
(31, 10, 'Courtesy of Staff', 'radio'),
(32, 11, 'Quality of Service', 'radio'),
(33, 11, 'Timeliness of Service', 'radio'),
(34, 11, 'Courtesy of Staff', 'radio'),
(35, 12, 'Quality of Service', 'radio'),
(36, 12, 'Timeliness of Service', 'radio'),
(37, 12, 'Courtesy of Staff', 'radio'),
(38, 13, 'Quality of Service', 'radio'),
(39, 13, 'Timeliness of Service', 'radio'),
(40, 13, 'Courtesy of Staff', 'radio'),
(41, 14, 'Quality of Service', 'radio'),
(42, 14, 'Timeliness of Service', 'radio'),
(43, 14, 'Courtesy of Staff', 'radio'),
(44, 15, 'Quality of Service', 'radio'),
(45, 15, 'Timeliness of Service', 'radio'),
(46, 15, 'Courtesy of Staff', 'radio'),
(47, 16, 'PUP Taguig Systems and Procedures', 'radio'),
(48, 16, 'PUP Taguig Programs/Courses', 'radio'),
(49, 16, 'PUP Taguig Services', 'radio'),
(50, 17, 'Give your comments/suggestions/recommendations for the improvement of PUP Taguig', 'textarea'),
(51, 17, 'Date Signed', 'date'),
(52, 17, 'Signature', 'text');

-- --------------------------------------------------------

--
-- Table structure for table `form_pds_answers`
--

CREATE TABLE `form_pds_answers` (
  `answer_id` int(10) UNSIGNED NOT NULL,
  `alumni_id` int(10) UNSIGNED DEFAULT NULL,
  `question_id` int(10) UNSIGNED DEFAULT NULL,
  `answer` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `form_pds_categories`
--

CREATE TABLE `form_pds_categories` (
  `category_id` int(10) UNSIGNED NOT NULL,
  `form_id` int(10) UNSIGNED DEFAULT NULL,
  `category_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `form_pds_categories`
--

INSERT INTO `form_pds_categories` (`category_id`, `form_id`, `category_name`) VALUES
(1, 1, 'Data Privacy Notice'),
(2, 1, 'Personal Information'),
(3, 1, 'Work Experience/s'),
(4, 1, 'Trainings/Seminars Attended'),
(5, 1, 'Waiver');

-- --------------------------------------------------------

--
-- Table structure for table `form_pds_questions`
--

CREATE TABLE `form_pds_questions` (
  `question_id` int(10) UNSIGNED NOT NULL,
  `category_id` int(10) UNSIGNED DEFAULT NULL,
  `question_text` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `question_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `form_pds_questions`
--

INSERT INTO `form_pds_questions` (`question_id`, `category_id`, `question_text`, `question_type`) VALUES
(1, 1, 'Data Privacy Notice', 'checkbox'),
(2, 2, 'Father\'s Name', 'text'),
(3, 2, 'Father\'s Number', 'text'),
(4, 2, 'Mother\'s Name', 'text'),
(5, 2, 'Mother\'s Number', 'text'),
(6, 3, 'Department/Agency/Office', 'text'),
(7, 3, 'Position/Job Title', 'text'),
(8, 3, 'Inclusive Dates', 'text'),
(9, 4, 'Seminar/Training/Workshop', 'text'),
(10, 4, 'Inclusive Dates', 'text'),
(11, 4, 'Seminar/Training/Workshop', 'text'),
(12, 4, 'Inclusive Dates', 'text'),
(13, 4, 'Seminar/Training/Workshop', 'text'),
(14, 4, 'Inclusive Dates', 'text'),
(15, 5, 'Date Signed', 'date'),
(16, 5, 'Signature', 'text');

-- --------------------------------------------------------

--
-- Table structure for table `form_sas_answers`
--

CREATE TABLE `form_sas_answers` (
  `answer_id` int(10) UNSIGNED NOT NULL,
  `alumni_id` int(10) UNSIGNED DEFAULT NULL,
  `question_id` int(10) UNSIGNED DEFAULT NULL,
  `answer` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `form_sas_categories`
--

CREATE TABLE `form_sas_categories` (
  `category_id` int(10) UNSIGNED NOT NULL,
  `form_id` int(10) UNSIGNED DEFAULT NULL,
  `category_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `form_sas_categories`
--

INSERT INTO `form_sas_categories` (`category_id`, `form_id`, `category_name`) VALUES
(1, 3, 'Data Privacy Notice'),
(2, 3, 'Personal Information'),
(3, 3, 'Student Affairs and Services (SAS) Program'),
(4, 3, 'Admission Services'),
(5, 3, 'Information and Orientation Services'),
(6, 3, 'Scholarship and Financial Assistance'),
(7, 3, 'Health Services'),
(8, 3, 'Guidance and Counseling Services'),
(9, 3, 'Food Services'),
(10, 3, 'Career and Placement Services'),
(11, 3, 'Safety and Security Services'),
(12, 3, 'Student Discipline'),
(13, 3, 'Services for Students with Special Needs'),
(14, 3, 'Student Organizations and Activities'),
(15, 3, 'Date and Signature');

-- --------------------------------------------------------

--
-- Table structure for table `form_sas_questions`
--

CREATE TABLE `form_sas_questions` (
  `question_id` int(10) UNSIGNED NOT NULL,
  `category_id` int(10) UNSIGNED DEFAULT NULL,
  `question_text` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `question_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `form_sas_questions`
--

INSERT INTO `form_sas_questions` (`question_id`, `category_id`, `question_text`, `question_type`) VALUES
(1, 1, 'Data Privacy Notice', 'checkbox'),
(2, 2, 'Number of Semesters with PUP', 'select'),
(3, 3, 'Clarity of objectives of the SAS program, projects and activities.', 'radio'),
(4, 3, 'Relevance of the SAS Program to students’ welfare and development.', 'radio'),
(5, 3, 'Consistency of the SAS Program with the PUP mission and vision.', 'radio'),
(6, 3, 'Consistency of the SAS Program with the College goals and curricular program objectives.', 'radio'),
(7, 3, 'Dissemination of the SAS Program, projects and activities.', 'radio'),
(8, 3, 'Qualification of heads and administrative support staff of SAS offices.', 'radio'),
(9, 3, 'Management and supervision of SAS program.', 'radio'),
(10, 3, 'Implementation of the SAS program.', 'radio'),
(11, 3, 'Responsiveness of the SAS program to students’ welfare and development.', 'radio'),
(12, 3, 'Adequacy of administrative support personnel for SAS.', 'radio'),
(13, 3, 'Proximity of SAS offices.', 'radio'),
(14, 3, 'Promptness of student services and transactions.', 'radio'),
(15, 3, 'Courtesy of administrative support personnel.', 'radio'),
(16, 3, 'Adequacy of physical facilities for SAS program, projects and activities.', 'radio'),
(17, 3, 'Adequacy of equipment and materials for SAS.', 'radio'),
(18, 3, 'Efficiency of student services and transactions.', 'radio'),
(19, 3, 'Transparency and accountability in spending the budget for SAS.', 'radio'),
(20, 3, 'Monitoring of SAS program, projects and activities.', 'radio'),
(21, 3, 'Evaluation of the SAS program, projects and activities.', 'radio'),
(22, 3, 'Conduct research on SAS program, projects and activities.', 'radio'),
(23, 3, 'Dissemination and utilization of research results and outputs.', 'radio'),
(24, 3, 'Rewards and incentives for excellence in SAS.', 'radio'),
(25, 4, 'Dissemination of policy on student recruitment, selection, admission and retention.', 'radio'),
(26, 4, 'System of student recruitment, selection and admission.', 'radio'),
(27, 4, 'Implementation of the policy on student retention.', 'radio'),
(28, 4, 'Processing of students’ entrance and requirements.', 'radio'),
(29, 5, 'Availability of informational materials on the University’s mission and vision.', 'radio'),
(30, 5, 'Availability of informational materials on College goals and program objectives.', 'radio'),
(31, 5, 'Accessibility of informational materials on academic rules and regulations, student conduct and discipline.', 'radio'),
(32, 5, 'Orientation of new students.', 'radio'),
(33, 5, 'Orientation of returning and continuing students.', 'radio'),
(34, 5, 'Availability of educational, career and social reading materials.', 'radio'),
(35, 6, 'Accessibility of informational materials about scholarships, study grants and other schemes of financial aides.', 'radio'),
(36, 6, 'Implementation of the policy on scholarship, study grants and other schemes of financial aide.', 'radio'),
(37, 6, 'Monitoring of the performance of recipients of scholarship, study grants and other schemes of financial aides.', 'radio'),
(38, 6, 'Generation of funds for scholarship, study grants and other financial aides.', 'radio'),
(39, 7, 'Dissemination of health services program, projects and activities.', 'radio'),
(40, 7, 'Adequacy of medical services.', 'radio'),
(41, 7, 'Adequacy of dental services.', 'radio'),
(42, 7, 'Competence of medical and dental personnel.', 'radio'),
(43, 7, 'Adequacy of medical and dental facilities, equipment and supplies.', 'radio'),
(44, 7, 'Promptness of medical and dental services.', 'radio'),
(45, 8, 'Appraisal system for student’s attributes, adaptability, and competence.', 'radio'),
(46, 8, 'Availability of counseling services.', 'radio'),
(47, 8, 'Maintenance of confidential records by the guidance counselors.', 'radio'),
(48, 8, 'Availability of counseling rooms.', 'radio'),
(49, 8, 'Monitoring of the effectiveness of guidance and placement activities.', 'radio'),
(50, 9, 'Management of safety and sanitary conditions of canteen and food outlets.', 'radio'),
(51, 9, 'Coordination of the food safety of food services outside the school premises with the local government.', 'radio'),
(52, 9, 'Nutrition of meals served in the canteen and food outlets.', 'radio'),
(53, 9, 'Affordability and reasonableness of prices of the meals in the canteen and food outlets.', 'radio'),
(54, 9, 'Personal hygiene of canteen and food outlets personnel.', 'radio'),
(55, 10, 'Availability of informational materials about career and employment opportunities.', 'radio'),
(56, 10, 'Appraisal of students for career and job placement.', 'radio'),
(57, 10, 'Provision for career seminar and job placement services.', 'radio'),
(58, 10, 'Linkages and networks for possible career and job placement.', 'radio'),
(59, 10, 'Monitoring of student placement provided.', 'radio'),
(60, 11, 'Competence of security personnel.', 'radio'),
(61, 11, 'Care of safety and security of students and students’ belongings.', 'radio'),
(62, 11, 'Maintenance of safety and security of school environment, buildings and facilities.', 'radio'),
(63, 12, 'Dissemination of gender sensitive rules and regulations.', 'radio'),
(64, 12, 'Definition of appropriate student conduct.', 'radio'),
(65, 12, 'Sanctions for student misconduct.', 'radio'),
(66, 13, 'Accommodation of students with disabilities and learners with special needs.', 'radio'),
(67, 13, 'Provision of facilities for students with disabilities.', 'radio'),
(68, 13, 'Provision of life skills training like conflict management and counseling.', 'radio'),
(69, 14, 'System of accreditation and recognition of student organizations.', 'radio'),
(70, 14, 'Dissemination of requirements and procedure for accreditation of student groups.', 'radio'),
(71, 14, 'Provision of office space and other school support for accredited student groups.', 'radio'),
(72, 14, 'Mechanism for student organizations to coordinate with school administration.', 'radio'),
(73, 14, 'Provision of leadership trainings.', 'radio'),
(74, 14, 'Opportunity to interact with other student organizations from other schools.', 'radio'),
(75, 14, 'Recognition of the students the right to govern themselves.', 'radio'),
(76, 14, 'Opportunity to represent students in student council and board of regents.', 'radio'),
(77, 15, 'Date Signed', 'date'),
(78, 15, 'Signature', 'text');

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
(177, '2014_10_12_100000_create_password_resets_table', 1),
(178, '2019_08_19_000000_create_failed_jobs_table', 1),
(179, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(180, '2022_09_13_193919_create_tbl_courses_table', 1),
(181, '2022_09_13_194119_create_tbl_admin_table', 1),
(182, '2022_09_16_222234_create_tbl_alumni_table', 1),
(183, '2022_09_20_000906_create_users_table', 1),
(184, '2022_09_20_001025_create_tbl_careers_table', 1),
(185, '2022_09_20_084753_create_tbl_alumni_list_table', 1),
(186, '2022_10_25_194521_create_tbl_forms_table', 1),
(187, '2022_10_25_194723_create_form_pds_categories_table', 1),
(188, '2022_10_25_195029_create_form_pds_questions_table', 1),
(189, '2022_10_25_202954_create_form_pds_answers_table', 1),
(190, '2022_10_26_090207_create_form_eif_categories_table', 1),
(191, '2022_10_26_090253_create_form_eif_questions_table', 1),
(192, '2022_10_26_090428_create_form_eif_answers_table', 1),
(193, '2022_10_26_100031_create_form_sas_categories_table', 1),
(194, '2022_10_26_100252_create_form_sas_questions_table', 1),
(195, '2022_10_26_100339_create_form_sas_answers_table', 1),
(196, '2022_11_04_192607_create_tbl_tracer_categories_table', 1),
(197, '2022_11_04_193020_create_tbl_tracer_questions_table', 1),
(198, '2022_11_04_193113_create_tbl_tracer_answers_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `admin_id` int(10) UNSIGNED NOT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `middle_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `suffix` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`admin_id`, `last_name`, `first_name`, `middle_name`, `suffix`, `email`, `username`, `password`, `user_role`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'Regular', NULL, NULL, 'pupt.alumniportalsystem@gmail.com', 'Admin', '$2y$10$5EufXamveYAtaaaHrrxfHuhkp0qeTL3e/9hq7AMv/yfdEmj2NWWla', 'Admin', '2022-12-18 11:39:29', '2022-12-18 11:39:29');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_alumni`
--

CREATE TABLE `tbl_alumni` (
  `alumni_id` int(10) UNSIGNED NOT NULL,
  `stud_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `middle_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `suffix` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `course_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `birthday` date DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `religion` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `civil_status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city_address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `provincial_address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_profile` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_alumni`
--

INSERT INTO `tbl_alumni` (`alumni_id`, `stud_number`, `last_name`, `first_name`, `middle_name`, `suffix`, `course_id`, `batch`, `gender`, `birthday`, `age`, `religion`, `civil_status`, `city_address`, `provincial_address`, `email`, `email_verified_at`, `number`, `username`, `password`, `user_role`, `user_profile`, `created_at`, `updated_at`) VALUES
(1, '2019-00432-TG-0', 'Last Name', 'First Name', 'Middle Name', NULL, 'BSIT', 2022, 'Male', '2001-01-31', 21, NULL, NULL, 'Sample St.,Sample Barangay, Sample City', NULL, 'sample@gmail.com', '2022-09-16 15:20:57', '0909090909', 'thisIsSample', '$2y$10$5EufXamveYAtaaaHrrxfHuhkp0qeTL3e/9hq7AMv/yfdEmj2NWWla', 'Alumni', NULL, NULL, NULL),
(2, '2018-00360-TG-0', 'Nadera', 'Wilma', 'Valerio', NULL, 'BSECE', 2022, 'Female', '1999-09-11', 23, 'Roman Catholic', 'single', '116, Aimee St., Phase 4, Gatchalian Subd., Manuyo Dos, Las Piñas City', NULL, 'wilmanadera@gmail.com', '2022-09-15 10:10:00', '9153881737', '2018-00360-TG-0', '$2y$10$aAQswT/9Wnj1cChgKdfWEObtDZj.5GMUQkikFkd4ouy2QfawrF6..', 'Alumni', NULL, NULL, NULL),
(3, '2018-00356-TG-0', 'Jacinto', 'Jibrael', 'Gutierrez', NULL, 'BSECE', 2022, 'Male', '1999-08-11', 23, 'Roman Catholic', 'single', 'B16 L22 J Barrera St. Katarungan Village', 'Metropolitan Manila', 'gutierrezjib@gmail.com', '2022-09-15 15:21:00', '9953767276', '2018-00356-TG-0', '$2y$10$aAQswT/9Wnj1cChgKdfWEObtDZj.5GMUQkikFkd4ouy2QfawrF7..', 'Alumni', NULL, NULL, NULL),
(4, '2018-00367-TG-0', 'Mota', 'Justin Jayce', 'Salatan', NULL, 'BSECE', 2022, 'Male', '1999-07-27', 23, 'Catholic', 'single', 'Taguig City', 'Metro Manila', 'motajustinjayce@gmail.com', '2022-09-16 00:10:00', '9171601507', '2018-00367-TG-0', '$2y$10$aAQswT/9Wnj1cChgKdfWEObtDZj.5GMUQkikFkd4ouy2QfawrF8..', 'Alumni', NULL, NULL, NULL),
(5, '2018-00316-TG-0', 'LAGUERTA', 'LESTER', 'DEOCAREZA', NULL, 'BSECE', 2022, 'Male', '1999-11-17', 22, 'Roman Catholic', 'single', 'Taguig', 'Metro Manila', 'laguertalester17@gmail.com', '2022-09-16 02:38:00', '9380032616', '2018-00316-TG-0', '$2y$10$aAQswT/9Wnj1cChgKdfWEObtDZj.5GMUQkikFkd4ouy2QfawrF9..', 'Alumni', NULL, NULL, NULL),
(6, '2018-00346-TG-0', 'Coyme', 'Rena Jane', 'Bulfa', NULL, 'BSECE', 2022, 'Female', '1999-01-11', 23, 'MCGI', 'single', '3 Adia st Bagumbayan Taguig City', NULL, 'jengjengcoyme@gmail.com', '2022-09-16 02:38:01', '9281856887', '2018-00346-TG-0', '$2y$10$aAQswT/9Wnj1cChgKdfWEObtDZj.5GMUQkikFkd4ouy2QfawrF10..', 'Alumni', NULL, NULL, NULL),
(7, '2018-00057-TG-0', 'Dellota', 'Pamela', 'Dela Cruz', NULL, 'BSA', 2022, 'Female', '2000-08-20', 22, 'Romqn Catholic', NULL, 'Parañaque City', 'Metro Manila', 'pameladel2000@gmail.com', NULL, '9294571181', '2018-00057-TG-0', '$2y$10$aAQswT/9Wnj1cChgKdfWEObtDZj.5GMUQkikFkd4ouy2QfawrF6..', 'alumni', NULL, NULL, NULL),
(8, '2018-00042-TG-0', 'Ramos', 'Grace Angela', 'Aguirre', NULL, 'BSA', 2022, 'Female', '1999-10-02', 22, NULL, NULL, '470 Dinguinbayan ext. Ibayo-Tipas, Taguig City', NULL, 'graceangelaramos@gmail.com', NULL, '9338665551', '2018-00042-TG-0', '$2y$10$aAQswT/9Wnj1cChgKdfWEObtDZj.5GMUQkikFkd4ouy2QfawrF6..', 'alumni', NULL, NULL, NULL),
(9, '2018-00212-TG-0', 'Carpizo', 'Keff Joshua', 'Cipriano', NULL, 'BSA', 2022, 'Male', '2000-06-02', 22, 'Roman Catholic', NULL, 'Sta. Ana 1, Moonwalk Parañaque City', 'Sta. Ana 1, Moonwalk Parañaque City', 'keffjoshuacarpizo@gmail.com', NULL, '9957326137', '2018-00212-TG-0', '$2y$10$aAQswT/9Wnj1cChgKdfWEObtDZj.5GMUQkikFkd4ouy2QfawrF6..', 'alumni', NULL, NULL, NULL),
(10, '2018-00072-TG-0', 'Ramirez', 'Kristhell Jean', 'Dumaog', NULL, 'BSA', 2022, 'Female', '2000-08-04', 22, 'Roman Catholic', NULL, 'Bodoni St. Area 3 Fourth Estate Subd. Barangay San Antonio Parañaque City', NULL, 'kristhellramirez@gmail.com', NULL, '9675237109', '2018-00072-TG-0', '$2y$10$aAQswT/9Wnj1cChgKdfWEObtDZj.5GMUQkikFkd4ouy2QfawrF6..', 'alumni', NULL, NULL, NULL),
(11, '2018-00031-TG-0', 'Fernando', 'Alexsandra', 'Labid', NULL, 'BSA', 2022, 'Female', '2000-05-12', 22, 'Roman Catholic', NULL, '36 F Pio Felipe St. Purok 1 New Lower Bicutan, Taguig City', '36 F Pio Felipe St. Purok 1 New Lower Bicutan, Taguig City', 'leksafernando@gmail.com', NULL, '9151582375', '2018-00031-TG-0', '$2y$10$aAQswT/9Wnj1cChgKdfWEObtDZj.5GMUQkikFkd4ouy2QfawrF6..', 'alumni', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_alumni_list`
--

CREATE TABLE `tbl_alumni_list` (
  `stud_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `middle_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `suffix` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `course_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_careers`
--

CREATE TABLE `tbl_careers` (
  `career_id` int(10) UNSIGNED NOT NULL,
  `alumni_id` int(10) UNSIGNED DEFAULT NULL,
  `admin_id` int(10) UNSIGNED DEFAULT NULL,
  `job_ad_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `job_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `salary` int(11) DEFAULT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `approval` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_courses`
--

CREATE TABLE `tbl_courses` (
  `course_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `course_Desc` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_courses`
--

INSERT INTO `tbl_courses` (`course_id`, `course_Desc`) VALUES
('BSEd-English', 'Bachelor in Secondary Education Major in English'),
('BSEd-Social Studies', 'Bachelor in Secondary Education Major in Social Studies'),
('BSEd-Mathematics', 'Bachelor in Secondary Education Major in Mathematics'),
('DICT', 'Diploma in Information Communication Technology'),
('BSIT', 'Bachelor of Science in Information Technology'),
('DICMT', 'Diploma in Information Communication Management Technology'),
('BSAM', 'Bachelor of Science in Actuarial Mathematics'),
('BSBA-HRDM', 'Bachelor of Science in Business Administration Major in Human Resource Development Managementy'),
('BSBA-MM', 'Bachelor of Science in Business Administration Major in Marketing Management'),
('BSECE', 'Bachelor of Science in Electronics and Communications Engineering'),
('BSME', 'Bachelor of Science in Mechanical Engineering'),
('BSEM', 'Bachelor of Science in Entrepreneurial Management'),
('BBA-Management', 'Bachelor in Business Administration Major in Management'),
('BEM', 'Bachelor in Entrepreneurial Management'),
('BCDPM', 'Bachelor of Computer in Data Processing Management'),
('DOMT-LOM', 'Diploma in Office Management Technology with specialization in Legal Office Management'),
('DAMT', 'Diploma in Accounting Management Technology'),
('BSOA-LT', 'Bachelor of Science in Office Administration Major in Legal Transcription'),
('PBDM', 'Post Baccalaureate Diploma in Management'),
('DMET', 'Diploma in Mechanical Engineering Technology'),
('BSA', 'Bachelor of Science in Accountancy');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_forms`
--

CREATE TABLE `tbl_forms` (
  `form_id` int(10) UNSIGNED NOT NULL,
  `form_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `form_status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_forms`
--

INSERT INTO `tbl_forms` (`form_id`, `form_name`, `form_status`) VALUES
(1, 'Personal Data Sheet', 'Active'),
(2, 'Exit Interview Form', 'Active'),
(3, 'Student Affairs and Services Form', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_tracer_answers`
--

CREATE TABLE `tbl_tracer_answers` (
  `answer_id` int(10) UNSIGNED NOT NULL,
  `alumni_id` int(10) UNSIGNED DEFAULT NULL,
  `question_id` int(10) UNSIGNED DEFAULT NULL,
  `answer` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_tracer_categories`
--

CREATE TABLE `tbl_tracer_categories` (
  `category_id` int(10) UNSIGNED NOT NULL,
  `category_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_tracer_categories`
--

INSERT INTO `tbl_tracer_categories` (`category_id`, `category_name`) VALUES
(1, 'Current Job / Career Details'),
(2, 'First Job / Career Details');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_tracer_questions`
--

CREATE TABLE `tbl_tracer_questions` (
  `question_id` int(10) UNSIGNED NOT NULL,
  `category_id` int(10) UNSIGNED DEFAULT NULL,
  `question_text` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `question_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_tracer_questions`
--

INSERT INTO `tbl_tracer_questions` (`question_id`, `category_id`, `question_text`, `question_type`) VALUES
(1, 1, 'Job Position', 'text'),
(2, 1, 'Company Name', 'text'),
(3, 1, 'Employment Start Date', 'date'),
(4, 1, 'Nature of Work / Job Description', 'text'),
(5, 1, 'Type of Employment', 'select'),
(6, 1, 'Monthly Income', 'select'),
(7, 1, 'Company Email', 'text'),
(8, 1, 'Company Number', 'text'),
(9, 1, 'Is your current Job related to your Course?', 'radio'),
(10, 2, 'Job Position', 'text'),
(11, 2, 'Company Name', 'text'),
(12, 2, 'Employment Start Date', 'date'),
(13, 2, 'Nature of Work / Job Description', 'text'),
(14, 2, 'Company Email', 'text'),
(15, 2, 'Company Number', 'text');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(10) UNSIGNED NOT NULL,
  `alumni_id` int(10) UNSIGNED DEFAULT NULL,
  `admin_id` int(10) UNSIGNED DEFAULT NULL,
  `stud_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `alumni_id`, `admin_id`, `stud_number`, `email`, `email_verified_at`, `username`, `password`, `user_role`, `created_at`, `updated_at`) VALUES
(1, 1, NULL, '2019-00432-TG-0', 'sample@gmail.com', '2022-09-16 15:20:57', 'thisIsSample', '$2y$10$5EufXamveYAtaaaHrrxfHuhkp0qeTL3e/9hq7AMv/yfdEmj2NWWla', 'Alumni', NULL, NULL),
(2, NULL, 1, NULL, 'pupt.alumniportalsystem@gmail.com', '2022-09-16 15:20:57', 'Admin', '$2y$10$5EufXamveYAtaaaHrrxfHuhkp0qeTL3e/9hq7AMv/yfdEmj2NWWla', 'Admin', NULL, NULL),
(3, 2, NULL, '2018-00360-TG-0', 'wilmanadera@gmail.com', '2022-09-15 10:10:00', '2018-00360-TG-0', '$2y$10$aAQswT/9Wnj1cChgKdfWEObtDZj.5GMUQkikFkd4ouy2QfawrF6..', 'Alumni', NULL, NULL),
(4, 3, NULL, '2018-00356-TG-0', 'gutierrezjib@gmail.com', '2022-09-15 15:21:00', '2018-00356-TG-0', '$2y$10$aAQswT/9Wnj1cChgKdfWEObtDZj.5GMUQkikFkd4ouy2QfawrF6..', 'Alumni', NULL, NULL),
(5, 4, NULL, '2018-00367-TG-0', 'motajustinjayce@gmail.com', '2022-09-16 00:10:00', '2018-00367-TG-0', '$2y$10$aAQswT/9Wnj1cChgKdfWEObtDZj.5GMUQkikFkd4ouy2QfawrF6..', 'Alumni', NULL, NULL),
(6, 5, NULL, '2018-00316-TG-0', 'laguertalester17@gmail.com', '2022-09-16 02:38:00', '2018-00316-TG-0', '$2y$10$aAQswT/9Wnj1cChgKdfWEObtDZj.5GMUQkikFkd4ouy2QfawrF6..', 'Alumni', NULL, NULL),
(7, 6, NULL, '2018-00346-TG-0', 'jengjengcoyme@gmail.com', '2022-09-16 02:38:01', '2018-00346-TG-0', '$2y$10$aAQswT/9Wnj1cChgKdfWEObtDZj.5GMUQkikFkd4ouy2QfawrF6..', 'Alumni', NULL, NULL),
(8, 7, NULL, '2018-00057-TG-0', 'pameladel2000@gmail.com', NULL, '2018-00057-TG-0', '$2y$10$aAQswT/9Wnj1cChgKdfWEObtDZj.5GMUQkikFkd4ouy2QfawrF6..', 'Alumni', NULL, NULL),
(9, 8, NULL, '2018-00042-TG-0 ', 'graceangelaramos@gmail.com', NULL, '2018-00042-TG-0 ', '$2y$10$aAQswT/9Wnj1cChgKdfWEObtDZj.5GMUQkikFkd4ouy2QfawrF6..', 'Alumni', NULL, NULL),
(10, 9, NULL, '2018-00212-TG-0', 'keffjoshuacarpizo@gmail.com', NULL, '2018-00212-TG-0', '$2y$10$aAQswT/9Wnj1cChgKdfWEObtDZj.5GMUQkikFkd4ouy2QfawrF6..', 'Alumni', NULL, NULL),
(11, 10, NULL, '2018-00072-TG-0', 'kristhellramirez@gmail.com', NULL, '2018-00072-TG-0', '$2y$10$aAQswT/9Wnj1cChgKdfWEObtDZj.5GMUQkikFkd4ouy2QfawrF6..', 'Alumni', NULL, NULL),
(12, 11, NULL, '2018-00031-TG-0', 'leksafernando@gmail.com', NULL, '2018-00031-TG-0', '$2y$10$aAQswT/9Wnj1cChgKdfWEObtDZj.5GMUQkikFkd4ouy2QfawrF6..', 'Alumni', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `form_eif_answers`
--
ALTER TABLE `form_eif_answers`
  ADD PRIMARY KEY (`answer_id`),
  ADD KEY `form_eif_answers_alumni_id_foreign` (`alumni_id`),
  ADD KEY `form_eif_answers_question_id_foreign` (`question_id`);

--
-- Indexes for table `form_eif_categories`
--
ALTER TABLE `form_eif_categories`
  ADD PRIMARY KEY (`category_id`),
  ADD KEY `form_eif_categories_form_id_foreign` (`form_id`);

--
-- Indexes for table `form_eif_questions`
--
ALTER TABLE `form_eif_questions`
  ADD PRIMARY KEY (`question_id`),
  ADD KEY `form_eif_questions_category_id_foreign` (`category_id`);

--
-- Indexes for table `form_pds_answers`
--
ALTER TABLE `form_pds_answers`
  ADD PRIMARY KEY (`answer_id`),
  ADD KEY `form_pds_answers_alumni_id_foreign` (`alumni_id`),
  ADD KEY `form_pds_answers_question_id_foreign` (`question_id`);

--
-- Indexes for table `form_pds_categories`
--
ALTER TABLE `form_pds_categories`
  ADD PRIMARY KEY (`category_id`),
  ADD KEY `form_pds_categories_form_id_foreign` (`form_id`);

--
-- Indexes for table `form_pds_questions`
--
ALTER TABLE `form_pds_questions`
  ADD PRIMARY KEY (`question_id`),
  ADD KEY `form_pds_questions_category_id_foreign` (`category_id`);

--
-- Indexes for table `form_sas_answers`
--
ALTER TABLE `form_sas_answers`
  ADD PRIMARY KEY (`answer_id`),
  ADD KEY `form_sas_answers_alumni_id_foreign` (`alumni_id`),
  ADD KEY `form_sas_answers_question_id_foreign` (`question_id`);

--
-- Indexes for table `form_sas_categories`
--
ALTER TABLE `form_sas_categories`
  ADD PRIMARY KEY (`category_id`),
  ADD KEY `form_sas_categories_form_id_foreign` (`form_id`);

--
-- Indexes for table `form_sas_questions`
--
ALTER TABLE `form_sas_questions`
  ADD PRIMARY KEY (`question_id`),
  ADD KEY `form_sas_questions_category_id_foreign` (`category_id`);

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
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `tbl_alumni`
--
ALTER TABLE `tbl_alumni`
  ADD PRIMARY KEY (`alumni_id`);

--
-- Indexes for table `tbl_careers`
--
ALTER TABLE `tbl_careers`
  ADD PRIMARY KEY (`career_id`),
  ADD KEY `tbl_careers_alumni_id_foreign` (`alumni_id`),
  ADD KEY `tbl_careers_admin_id_foreign` (`admin_id`);

--
-- Indexes for table `tbl_forms`
--
ALTER TABLE `tbl_forms`
  ADD PRIMARY KEY (`form_id`);

--
-- Indexes for table `tbl_tracer_answers`
--
ALTER TABLE `tbl_tracer_answers`
  ADD PRIMARY KEY (`answer_id`),
  ADD KEY `tbl_tracer_answers_alumni_id_foreign` (`alumni_id`),
  ADD KEY `tbl_tracer_answers_question_id_foreign` (`question_id`);

--
-- Indexes for table `tbl_tracer_categories`
--
ALTER TABLE `tbl_tracer_categories`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `tbl_tracer_questions`
--
ALTER TABLE `tbl_tracer_questions`
  ADD PRIMARY KEY (`question_id`),
  ADD KEY `tbl_tracer_questions_category_id_foreign` (`category_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD KEY `users_alumni_id_foreign` (`alumni_id`),
  ADD KEY `users_admin_id_foreign` (`admin_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `form_eif_answers`
--
ALTER TABLE `form_eif_answers`
  MODIFY `answer_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `form_eif_categories`
--
ALTER TABLE `form_eif_categories`
  MODIFY `category_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `form_eif_questions`
--
ALTER TABLE `form_eif_questions`
  MODIFY `question_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `form_pds_answers`
--
ALTER TABLE `form_pds_answers`
  MODIFY `answer_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `form_pds_categories`
--
ALTER TABLE `form_pds_categories`
  MODIFY `category_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `form_pds_questions`
--
ALTER TABLE `form_pds_questions`
  MODIFY `question_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `form_sas_answers`
--
ALTER TABLE `form_sas_answers`
  MODIFY `answer_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `form_sas_categories`
--
ALTER TABLE `form_sas_categories`
  MODIFY `category_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `form_sas_questions`
--
ALTER TABLE `form_sas_questions`
  MODIFY `question_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=199;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `admin_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_alumni`
--
ALTER TABLE `tbl_alumni`
  MODIFY `alumni_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tbl_careers`
--
ALTER TABLE `tbl_careers`
  MODIFY `career_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_forms`
--
ALTER TABLE `tbl_forms`
  MODIFY `form_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_tracer_answers`
--
ALTER TABLE `tbl_tracer_answers`
  MODIFY `answer_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_tracer_categories`
--
ALTER TABLE `tbl_tracer_categories`
  MODIFY `category_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_tracer_questions`
--
ALTER TABLE `tbl_tracer_questions`
  MODIFY `question_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `form_eif_answers`
--
ALTER TABLE `form_eif_answers`
  ADD CONSTRAINT `form_eif_answers_alumni_id_foreign` FOREIGN KEY (`alumni_id`) REFERENCES `tbl_alumni` (`alumni_id`),
  ADD CONSTRAINT `form_eif_answers_question_id_foreign` FOREIGN KEY (`question_id`) REFERENCES `form_eif_questions` (`question_id`);

--
-- Constraints for table `form_eif_categories`
--
ALTER TABLE `form_eif_categories`
  ADD CONSTRAINT `form_eif_categories_form_id_foreign` FOREIGN KEY (`form_id`) REFERENCES `tbl_forms` (`form_id`);

--
-- Constraints for table `form_eif_questions`
--
ALTER TABLE `form_eif_questions`
  ADD CONSTRAINT `form_eif_questions_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `form_eif_categories` (`category_id`);

--
-- Constraints for table `form_pds_answers`
--
ALTER TABLE `form_pds_answers`
  ADD CONSTRAINT `form_pds_answers_alumni_id_foreign` FOREIGN KEY (`alumni_id`) REFERENCES `tbl_alumni` (`alumni_id`),
  ADD CONSTRAINT `form_pds_answers_question_id_foreign` FOREIGN KEY (`question_id`) REFERENCES `form_pds_questions` (`question_id`);

--
-- Constraints for table `form_pds_categories`
--
ALTER TABLE `form_pds_categories`
  ADD CONSTRAINT `form_pds_categories_form_id_foreign` FOREIGN KEY (`form_id`) REFERENCES `tbl_forms` (`form_id`);

--
-- Constraints for table `form_pds_questions`
--
ALTER TABLE `form_pds_questions`
  ADD CONSTRAINT `form_pds_questions_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `form_pds_categories` (`category_id`);

--
-- Constraints for table `form_sas_answers`
--
ALTER TABLE `form_sas_answers`
  ADD CONSTRAINT `form_sas_answers_alumni_id_foreign` FOREIGN KEY (`alumni_id`) REFERENCES `tbl_alumni` (`alumni_id`),
  ADD CONSTRAINT `form_sas_answers_question_id_foreign` FOREIGN KEY (`question_id`) REFERENCES `form_sas_questions` (`question_id`);

--
-- Constraints for table `form_sas_categories`
--
ALTER TABLE `form_sas_categories`
  ADD CONSTRAINT `form_sas_categories_form_id_foreign` FOREIGN KEY (`form_id`) REFERENCES `tbl_forms` (`form_id`);

--
-- Constraints for table `form_sas_questions`
--
ALTER TABLE `form_sas_questions`
  ADD CONSTRAINT `form_sas_questions_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `form_sas_categories` (`category_id`);

--
-- Constraints for table `tbl_careers`
--
ALTER TABLE `tbl_careers`
  ADD CONSTRAINT `tbl_careers_admin_id_foreign` FOREIGN KEY (`admin_id`) REFERENCES `tbl_admin` (`admin_id`),
  ADD CONSTRAINT `tbl_careers_alumni_id_foreign` FOREIGN KEY (`alumni_id`) REFERENCES `tbl_alumni` (`alumni_id`);

--
-- Constraints for table `tbl_tracer_answers`
--
ALTER TABLE `tbl_tracer_answers`
  ADD CONSTRAINT `tbl_tracer_answers_alumni_id_foreign` FOREIGN KEY (`alumni_id`) REFERENCES `tbl_alumni` (`alumni_id`),
  ADD CONSTRAINT `tbl_tracer_answers_question_id_foreign` FOREIGN KEY (`question_id`) REFERENCES `tbl_tracer_questions` (`question_id`);

--
-- Constraints for table `tbl_tracer_questions`
--
ALTER TABLE `tbl_tracer_questions`
  ADD CONSTRAINT `tbl_tracer_questions_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `tbl_tracer_categories` (`category_id`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_admin_id_foreign` FOREIGN KEY (`admin_id`) REFERENCES `tbl_admin` (`admin_id`),
  ADD CONSTRAINT `users_alumni_id_foreign` FOREIGN KEY (`alumni_id`) REFERENCES `tbl_alumni` (`alumni_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
