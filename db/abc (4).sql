-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 06, 2023 at 12:26 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `abc`
--

-- --------------------------------------------------------

--
-- Table structure for table `assesments`
--

CREATE TABLE `assesments` (
  `id` int(11) NOT NULL,
  `course_id` int(11) DEFAULT NULL,
  `section_name` varchar(255) DEFAULT NULL,
  `video` int(11) DEFAULT NULL,
  `question` text DEFAULT NULL,
  `question_image` varchar(255) DEFAULT NULL,
  `question_code` text DEFAULT NULL,
  `option1` varchar(255) DEFAULT NULL,
  `option2` varchar(255) DEFAULT NULL,
  `option3` varchar(255) DEFAULT NULL,
  `option4` varchar(255) DEFAULT NULL,
  `option1_img` varchar(255) DEFAULT NULL,
  `option2_img` varchar(255) DEFAULT NULL,
  `option3_img` varchar(255) DEFAULT NULL,
  `option4_img` varchar(255) DEFAULT NULL,
  `answer` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `assesments`
--

INSERT INTO `assesments` (`id`, `course_id`, `section_name`, `video`, `question`, `question_image`, `question_code`, `option1`, `option2`, `option3`, `option4`, `option1_img`, `option2_img`, `option3_img`, `option4_img`, `answer`, `created_at`, `updated_at`) VALUES
(1, 1, '1', 1, 'Test1', 'question_image', NULL, 'At run time', 'At compile time', 'Depends on the code', 'None', 'option1_img', 'option2_img', 'option3_img', 'option4_img', 'option1', '2023-05-24 05:23:17', '2023-05-24 05:23:17'),
(2, 2, '2', 2, 'What is the output?', 'question_image', 'print(\"Hello, World!\")', 'Hello World', 'Hello Wor', 'Hello', 'Helloworld', 'option1_img', 'option2_img', 'option3_img', 'option4_img', 'option1', '2023-05-24 07:09:05', '2023-05-24 07:09:05'),
(3, 2, '2', 3, '1. Who developed Python Programming Language?', 'question_image', NULL, 'Wick van Rossum', 'Rasmus Lerdorf', 'Guido van Rossum', 'Niene Stom', 'option1_img', 'option2_img', 'option3_img', 'option4_img', 'option3', '2023-10-12 06:05:42', '2023-10-12 06:05:42'),
(4, 2, '2', 3, '4. Which of the following is the correct extension of the Python file?', 'question_image', NULL, '.pl', '.python', '.py', '.p', 'option1_img', 'option2_img', 'option3_img', 'option4_img', 'option3', '2023-10-12 06:07:10', '2023-10-12 06:07:10'),
(5, 2, '2', 3, '43. To add a new element to a list we use which Python command?', 'question_image', NULL, 'list1.addEnd(5)', 'list1.addLast(5)', 'list1.append(5)', 'list1.add(5)', 'option1_img', 'option2_img', 'option3_img', 'option4_img', 'option3', '2023-10-18 07:02:16', '2023-10-18 07:02:16'),
(6, 2, '2', 3, 'What will be the output of the following Python code?', 'question_image', 'print(\'*\', \"abcde\".center(6), \'*\', sep=\'\')', '* abcde *', '*abcde *', '* abcde*', '* abcde *', 'option1_img', 'option2_img', 'option3_img', 'option4_img', 'option2', '2023-10-18 07:03:06', '2023-10-18 07:03:06'),
(7, 2, '2', 3, 'Which one of the following is the use of function in python?', 'question_image', NULL, 'Functions don’t provide better modularity for your application', 'you can’t also create your own functions', 'Functions are reusable pieces of programs', 'All of the mentioned', 'option1_img', 'option2_img', 'option3_img', 'option4_img', 'option3', '2023-10-18 07:03:59', '2023-10-18 07:03:59'),
(8, 2, '2', 3, 'Which of the following Python statements will result in the output: 6?', 'question_image', 'A = [[1, 2, 3],\r\n     [4, 5, 6],\r\n     [7, 8, 9]]', 'A[2][1]', 'A[1][2]', 'A[3][2]', 'A[2][3]', 'option1_img', 'option2_img', 'option3_img', 'option4_img', 'option2', '2023-10-18 07:06:10', '2023-10-18 07:06:10');

-- --------------------------------------------------------

--
-- Table structure for table `assesment_results`
--

CREATE TABLE `assesment_results` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `user_answer` varchar(255) DEFAULT NULL,
  `score` varchar(255) DEFAULT NULL,
  `course_id` int(11) DEFAULT NULL,
  `section_name` varchar(255) DEFAULT NULL,
  `video` int(11) DEFAULT NULL,
  `questions` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `assesment_results`
--

INSERT INTO `assesment_results` (`id`, `user_id`, `user_answer`, `score`, `course_id`, `section_name`, `video`, `questions`, `created_at`, `updated_at`) VALUES
(1, 24, 'option1', '1', 1, '1', 1, '1', '2023-05-24 05:27:16', '2023-05-24 05:27:16'),
(2, 25, 'option1', '1', 1, '1', 1, '1', '2023-05-24 05:34:39', '2023-05-24 05:34:39'),
(3, 25, 'option1', '1', 1, '1', 1, '1', '2023-05-24 05:38:15', '2023-05-24 05:38:15'),
(4, 29, 'option1', '1', 2, '2', 2, '2', '2023-05-24 07:16:29', '2023-05-24 07:16:29'),
(5, 33, 'option1', '1', 2, '2', 2, '2', '2023-10-12 05:23:43', '2023-10-12 05:23:43'),
(6, 31, 'option3,option3', '2', 2, '2', 3, '3,4', '2023-10-12 06:08:41', '2023-10-12 06:08:41'),
(7, 31, 'option1', '1', 2, '2', 2, '2', '2023-10-18 06:38:45', '2023-10-18 06:38:45'),
(8, 31, 'option3,option3,option3,option3,option3,', '4', 2, '2', 3, '3,4,5,6,7,8', '2023-10-18 07:12:40', '2023-10-18 07:12:40'),
(9, 31, 'option3', '0', 2, '2', 2, '2', '2023-10-18 07:12:49', '2023-10-18 07:12:49'),
(10, 31, 'option3,option3,option3,option3,option3,', '4', 2, '2', 3, '3,4,5,6,7,8', '2023-10-18 07:13:15', '2023-10-18 07:13:15'),
(11, 31, 'option3,option3,option3,option3,option3,', '4', 2, '2', 3, '3,4,5,6,7,8', '2023-10-18 07:13:32', '2023-10-18 07:13:32');

-- --------------------------------------------------------

--
-- Table structure for table `auth`
--

CREATE TABLE `auth` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `type` varchar(255) DEFAULT NULL,
  `parent_code` int(11) DEFAULT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `auth`
--

INSERT INTO `auth` (`id`, `name`, `email`, `phone`, `password`, `type`, `parent_code`, `parent_id`, `created_at`, `updated_at`) VALUES
(2, 'Admin', 'admin@abc.com', '8765432894', '$2y$10$bbto3NJf0yaUsJgFvyFDfePXo2cOVSaEDnJlFm2dx0S0m6W0ysssG', 'admin', NULL, NULL, '2023-04-19 08:23:41', '2023-05-24 02:55:09'),
(3, 'Trainer', 'trainer@abc.com', '9876545678', '$2y$10$PU5x4li2VPU0cxvfmiZzjebQ11Lp2AF/SQffGJgnyirxRH0AQUhuK', 'trainer', NULL, NULL, '2023-04-19 08:24:28', '2023-05-22 08:17:08'),
(5, 'Recruiter', 'recruiter@abc.com', '4567747584', '$2y$10$gxWOR5W8YC.LBLLC8D579ulXxDH1Vjw5Wqus/rf4Lg8u24s5bAExC', 'recruiter', NULL, NULL, '2023-05-09 11:10:13', '2023-05-24 04:10:23'),
(22, 'Student', 'student@abc.com', '124355363', '$2y$10$ehh8G./NVKoTeYUkJJR4kuafLRBzLOgNqBuj..8eqa.pHCo2iJ4Pq', 'student', NULL, NULL, '2023-05-24 04:24:56', '2023-05-24 04:24:56'),
(23, 'Test trainer', 't1@abc.com', '0987654321', '$2y$10$fGZbz.THMNbwHhQSuqSqN.Z/sxXB/kYAbpP9F20jrmc5slbdifKAq', 'trainer', NULL, NULL, '2023-05-24 05:04:29', '2023-05-24 05:04:29'),
(24, 'ABC1', 'abc1@gmail.com', '1234567890', '$2y$10$fnB4/CiPJb8bt1ZZmeU/Huj4CsoMWzQiqYcWHlRCBeipn/NzLZN1.', 'student', NULL, NULL, '2023-05-24 05:07:39', '2023-05-24 05:07:39'),
(25, 'ABC2', 'abc2@gmail.com', '9630852741', '$2y$10$iPTq1e4RlpegiHcIycM2/.ZLrKKyskl9m2EBvaMLCqZPfxzOeSnxy', 'student', NULL, NULL, '2023-05-24 05:29:36', '2023-05-24 05:29:36'),
(26, 'Recruiter1', 'recruiter1@gmail.com', '9999999999', '$2y$10$YHS1VS.UJGUlYXsLWXYeTOMBKhFCu4pCJOq.ku73pP.vNe9thZCDi', 'recruiter', NULL, NULL, '2023-05-24 05:50:41', '2023-05-24 05:50:41'),
(27, 'Test2', 't2@gmail.com', '9999999990', '$2y$10$OW./13LABDiYYQJo/NPaz.CHnRIFs1jjg4vqGpw30AS1KXGpl1P4O', 'trainer', NULL, NULL, '2023-05-24 06:05:43', '2023-05-24 06:05:43'),
(28, 'Somashekhar', 'somuhten@gmail.com', '7338410221', '$2y$10$fid9b/pu//MNsqHcpDSlse0qFLGMLAPe08iDvuRqBmuuED2cK2Q1u', 'student', NULL, NULL, '2023-05-24 06:53:20', '2023-05-24 06:53:20'),
(29, 'Arunjith Nambiar', 'arun@abc.com', '9066669966', '$2y$10$.yELnsaE6nDvxXElyimUNu1zacViZ.erMFes8FudSRryti.lFV9W2', 'student', NULL, NULL, '2023-05-24 07:13:19', '2023-05-24 07:13:19'),
(30, 'ashutosh', 'ashu@gmail.com', '7890123456', '$2y$10$vNjx9G0sylvDuISL5aDZVOuf96bEoqKf2JjtS1gZrXvWYY6EU9hQy', 'student', NULL, NULL, '2023-06-09 06:48:48', '2023-06-09 06:48:48'),
(31, 'ABC3', 'abc3@gmail.com', '9876756789', '$2y$10$CZV.4Wrb2FNmm12ibQFIVOUAzevEwxj6rpThccWC4teEfYka6RzuW', 'student', NULL, NULL, '2023-07-04 07:04:44', '2023-07-04 07:04:44'),
(32, 'ABC4', 'abc4@gmail.com', '9456788789', '$2y$10$C7d2YZuLtkPxXLDiQOowDuwAzIFaYgOOPiPQcRzQXaQJwOUPIPj66', 'student', NULL, NULL, '2023-07-04 07:53:47', '2023-07-04 07:53:47'),
(34, 'parent1', 'parent1@gmail.com', '6774845776', '$2y$10$DTXqR4hjNAa1YZ5d4hCcTOmPJAlgJobV41Mf66o8uYfIJETPs6YlS', 'parent', 584555, NULL, '2023-10-10 11:03:43', '2023-10-10 11:03:43'),
(35, 'school 1', 'school1@gmail.com', '1121244343', '$2y$10$jvdHHjPX2W4vKf0I.YvdA..PVePEUKylTPYRiKavwA.xZllw0Qtia', 'sub_admin', NULL, NULL, '2023-10-21 05:41:35', '2023-10-21 05:41:35'),
(42, 'Ashutosh Mahapatra', NULL, NULL, '$2y$10$PU5x4li2VPU0cxvfmiZzjebQ11Lp2AF/SQffGJgnyirxRH0AQUhuK', 'school_student', NULL, 34, '2023-10-21 07:44:40', '2023-11-06 08:55:26'),
(43, 'chirag', NULL, NULL, '$2y$10$9BN5O.fXpqRoUIAI7RRhmOrAZCBBsfxQsLVf3glwLKPTuIpa8Q.j.', 'school_student', NULL, NULL, '2023-10-21 09:02:42', '2023-10-21 09:02:42'),
(48, 'abcd', NULL, NULL, '$2y$10$7yK/TtOxtQ4.1dfDevOPD.Xv/mmIZ1c8Rk2/c8fNPjmi7GHLMcNcS', 'school_student', NULL, NULL, '2023-10-21 09:55:52', '2023-10-21 09:55:52'),
(51, 'ashutosh', 'ashutosh@gmail.com', '9778734387', '$2y$10$7yK/TtOxtQ4.1dfDevOPD.Xv/mmIZ1c8Rk2/c8fNPjmi7GHLMcNcS', 'teacher', NULL, NULL, '2023-10-21 10:27:57', '2023-10-21 10:27:57');

-- --------------------------------------------------------

--
-- Table structure for table `chapters`
--

CREATE TABLE `chapters` (
  `id` int(11) NOT NULL,
  `class` int(11) DEFAULT NULL,
  `subject` int(11) DEFAULT NULL,
  `chapter_name` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `chapters`
--

INSERT INTO `chapters` (`id`, `class`, `subject`, `chapter_name`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'chapter_name0', '2023-10-20 05:12:01', '2023-10-20 05:12:01'),
(2, 1, 1, 'chapter_name1', '2023-10-20 05:12:01', '2023-10-20 05:12:01'),
(3, 1, 1, 'chapter_name2', '2023-10-20 05:12:01', '2023-10-20 05:12:01'),
(4, 1, 2, 'chapter_name0', '2023-10-20 06:55:44', '2023-10-20 06:55:44'),
(5, 1, 2, 'chapter_name1', '2023-10-20 06:55:44', '2023-10-20 06:55:44');

-- --------------------------------------------------------

--
-- Table structure for table `chapter_videos`
--

CREATE TABLE `chapter_videos` (
  `id` int(11) NOT NULL,
  `chapter_id` int(11) DEFAULT NULL,
  `video_name` varchar(255) DEFAULT NULL,
  `video_file` varchar(255) DEFAULT NULL,
  `digital_link` varchar(255) DEFAULT NULL,
  `lab_link` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `chapter_videos`
--

INSERT INTO `chapter_videos` (`id`, `chapter_id`, `video_name`, `video_file`, `digital_link`, `lab_link`, `created_at`, `updated_at`) VALUES
(1, 1, 'video 1', 'uploads/hJgo1697780432.mp4', NULL, NULL, '2023-10-20 05:40:32', '2023-10-20 05:40:32'),
(2, 2, 'video 2', 'uploads/McJ91697780432.mp4', NULL, NULL, '2023-10-20 05:40:32', '2023-10-20 05:40:32');

-- --------------------------------------------------------

--
-- Table structure for table `classes`
--

CREATE TABLE `classes` (
  `id` int(11) NOT NULL,
  `class` varchar(100) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `classes`
--

INSERT INTO `classes` (`id`, `class`, `created_at`, `updated_at`) VALUES
(1, 'class 6', '2023-10-20 04:10:12', '2023-10-20 04:10:12'),
(2, 'class 7', '2023-10-20 04:10:12', '2023-10-20 04:10:12'),
(3, 'class 8', '2023-10-20 04:10:12', '2023-10-20 04:10:12'),
(4, 'class 9', '2023-10-20 04:10:12', '2023-10-20 04:10:12'),
(5, 'class 10', '2023-10-20 04:10:12', '2023-10-20 04:10:12'),
(6, 'class 11', '2023-10-20 04:10:12', '2023-10-20 04:10:12'),
(7, 'class 12', '2023-10-20 04:10:12', '2023-10-20 04:10:12');

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `id` int(11) NOT NULL,
  `course_name` varchar(255) DEFAULT NULL,
  `course_subject` varchar(255) DEFAULT NULL,
  `course_type` varchar(255) DEFAULT NULL,
  `course_category` varchar(255) DEFAULT NULL,
  `course_subcategory` varchar(255) DEFAULT NULL,
  `course_tutor` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `course_image` varchar(255) DEFAULT NULL,
  `course_video` varchar(255) DEFAULT NULL,
  `course_cost` varchar(255) DEFAULT NULL,
  `course_benifits` text DEFAULT NULL,
  `course_requirements` text DEFAULT NULL,
  `course_tags` varchar(255) DEFAULT NULL,
  `sections` longtext DEFAULT NULL,
  `section_name` text DEFAULT NULL,
  `section_desc` text DEFAULT NULL,
  `section_video` text DEFAULT NULL,
  `section_file` text DEFAULT NULL,
  `section_count` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`id`, `course_name`, `course_subject`, `course_type`, `course_category`, `course_subcategory`, `course_tutor`, `description`, `course_image`, `course_video`, `course_cost`, `course_benifits`, `course_requirements`, `course_tags`, `sections`, `section_name`, `section_desc`, `section_video`, `section_file`, `section_count`, `created_at`) VALUES
(1, 'Java - 1', '1', NULL, 'developement', 'beginner', '23', 'Test test test', 'uploads/EIOe1684905075.png', 'uploads/nuKG1684905075.png', NULL, 'Assessments\r\nInternship\r\nMini project\r\nE-books', 'Candidates must have completed 10+2 with a science background, with Mathematics as one of the required courses. Programming Basics, Object-Oriented Programming & Design, Distributed Systems, Developing Web Databases, Abstraction, Data Structure, and other Java-related courses are covered in bachelor\'s programs.', 'Java | Course', '[{\"id\":0,\"section_name\":\"Java-1\",\"section_desc\":\"Object file vs Executable file\"}]', NULL, NULL, NULL, NULL, '1', '2023-05-24 05:11:15'),
(2, 'Python Basics', '2', NULL, 'developement', 'beginner', '3', 'Python is a popular programming language.\r\n\r\nPython can be used on a server to create web applications.', 'uploads/puI51684911876.png', 'uploads/y2o81684911876.mp4', NULL, 'Python is a popular programming language.\r\n\r\nPython can be used on a server to create web applications.', 'Python is a popular programming language.\r\n\r\nPython can be used on a server to create web applications.', 'python', '[{\"id\":0,\"section_name\":\"Introduction\",\"section_desc\":\"Intro\"},{\"id\":1,\"section_name\":\"Installation\",\"section_desc\":\"Intro\"},{\"id\":2,\"section_name\":\"Execution\",\"section_desc\":\"Intro\"}]', NULL, NULL, NULL, NULL, '3', '2023-05-24 07:04:36'),
(3, 'php', '1', NULL, 'database', 'advanced', '23', 'dzfgbdhs', 'uploads\\5tkA1699267676.jpg', 'uploads\\26IN1699267676.mp4', NULL, 'fsfsa', 'sadfasf', 'sfgasf', '[{\"id\":0,\"section_name\":\"eregadg\",\"section_desc\":\"dgdgtd\"},{\"id\":1,\"section_name\":\"asfas\",\"section_desc\":\"gdrgdsrg\"}]', NULL, NULL, NULL, NULL, '2', '2023-11-06 10:47:56');

-- --------------------------------------------------------

--
-- Table structure for table `ebooks`
--

CREATE TABLE `ebooks` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `module_count` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ebooks`
--

INSERT INTO `ebooks` (`id`, `title`, `image`, `description`, `module_count`, `created_at`, `updated_at`) VALUES
(4, 'FILES IN C', 'uploads\\ahq71688802825.png', 'FILES IN C', NULL, '2023-07-08 07:53:45', '2023-07-08 07:53:45'),
(6, 'C Programming', 'uploads\\qIRj1695011334.webp', 'C is a general-purpose programming language created by Dennis Ritchie at the Bell Laboratories in 1972. It is a very popular language, despite being old.', NULL, '2023-09-18 04:28:54', '2023-09-18 04:28:54'),
(7, 'C', 'uploads\\Q1ZC1695714744.webp', 'sg etgeb4 ttwbe tdgb', NULL, '2023-09-26 07:52:24', '2023-09-26 07:52:24');

-- --------------------------------------------------------

--
-- Table structure for table `ebook_elements`
--

CREATE TABLE `ebook_elements` (
  `id` int(11) NOT NULL,
  `section_id` int(11) NOT NULL,
  `element_id` int(11) NOT NULL,
  `element_name` varchar(100) DEFAULT NULL,
  `content` text DEFAULT NULL,
  `heading_type` tinyint(4) DEFAULT NULL,
  `image` varchar(100) DEFAULT NULL,
  `code` text DEFAULT NULL,
  `memory` varchar(100) DEFAULT NULL,
  `output` text DEFAULT NULL,
  `image_type` varchar(100) DEFAULT NULL,
  `image_heading` varchar(100) DEFAULT NULL,
  `image_heading_2` varchar(100) DEFAULT NULL,
  `image_subheading` varchar(100) DEFAULT NULL,
  `image_subheading_2` varchar(100) DEFAULT NULL,
  `image_text_1` varchar(100) DEFAULT NULL,
  `image_subtext_1` varchar(100) DEFAULT NULL,
  `image_desc_1` text DEFAULT NULL,
  `image_text_2` varchar(100) DEFAULT NULL,
  `image_subtext_2` varchar(100) DEFAULT NULL,
  `image_desc_2` text DEFAULT NULL,
  `image_text_3` varchar(100) DEFAULT NULL,
  `image_subtext_3` varchar(100) DEFAULT NULL,
  `image_desc_3` text DEFAULT NULL,
  `image_text_4` varchar(100) DEFAULT NULL,
  `image_subtext_4` varchar(100) DEFAULT NULL,
  `image_desc_4` text DEFAULT NULL,
  `image_text_5` varchar(100) DEFAULT NULL,
  `image_desc_5` text DEFAULT NULL,
  `image_text_6` varchar(100) DEFAULT NULL,
  `image_desc_6` text DEFAULT NULL,
  `image_text_7` varchar(100) DEFAULT NULL,
  `image_desc_7` text DEFAULT NULL,
  `image_text_8` varchar(100) DEFAULT NULL,
  `image_desc_8` text DEFAULT NULL,
  `image_text_9` varchar(100) DEFAULT NULL,
  `image_desc_9` text DEFAULT NULL,
  `image_text_10` varchar(100) DEFAULT NULL,
  `image_desc_10` text DEFAULT NULL,
  `list_type` varchar(50) DEFAULT NULL,
  `list_heading` varchar(100) DEFAULT NULL,
  `list_points` text DEFAULT NULL,
  `table_data` text DEFAULT NULL,
  `example_text` varchar(100) DEFAULT NULL,
  `example_description` text DEFAULT NULL,
  `practice_description` text DEFAULT NULL,
  `example_image_text` varchar(100) DEFAULT NULL,
  `button_text` text DEFAULT NULL,
  `single_button_type` tinyint(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ebook_elements`
--

INSERT INTO `ebook_elements` (`id`, `section_id`, `element_id`, `element_name`, `content`, `heading_type`, `image`, `code`, `memory`, `output`, `image_type`, `image_heading`, `image_heading_2`, `image_subheading`, `image_subheading_2`, `image_text_1`, `image_subtext_1`, `image_desc_1`, `image_text_2`, `image_subtext_2`, `image_desc_2`, `image_text_3`, `image_subtext_3`, `image_desc_3`, `image_text_4`, `image_subtext_4`, `image_desc_4`, `image_text_5`, `image_desc_5`, `image_text_6`, `image_desc_6`, `image_text_7`, `image_desc_7`, `image_text_8`, `image_desc_8`, `image_text_9`, `image_desc_9`, `image_text_10`, `image_desc_10`, `list_type`, `list_heading`, `list_points`, `table_data`, `example_text`, `example_description`, `practice_description`, `example_image_text`, `button_text`, `single_button_type`, `created_at`, `updated_at`) VALUES
(1, 2, 1, 'heading', 'define array', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', NULL, '0', '0', NULL, '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-07-08 05:59:03', '2023-07-08 05:59:03'),
(2, 2, 2, 'paragraph', 'asf sf arf arge rgerget tet 5tetgeg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', NULL, '0', '0', NULL, '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-07-08 06:00:41', '2023-07-08 06:00:41'),
(4, 2, 3, 'image', NULL, NULL, 'uploads\\LSqv1688796376.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', NULL, '0', '0', NULL, '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-07-08 06:06:16', '2023-07-08 06:06:16'),
(7, 4, 2, 'paragraph', 'Secondary memory, also known as auxiliary memory or storage, refers to the non-volatile \r\nmemory in a computer system that is used to store data and programs for long-term use, even \r\nwhen the power is turned off. It is distinct from the primary memory (RAM) which is volatile and \r\nloses its content when the power is disconnected.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', NULL, '0', '0', NULL, '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-07-08 09:31:57', '2023-07-08 09:31:57'),
(8, 4, 2, 'paragraph', 'Secondary memory is usually slower than primary memory but offers much larger storage \r\ncapacity. It enables the computer to retain large amounts of data even after shutting down and \r\nrestarting the system. It provides persistent storage for files, applications, operating systems, \r\nand other data.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', NULL, '0', '0', NULL, '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-07-08 09:32:07', '2023-07-08 09:32:07'),
(9, 5, 1, 'heading', 'ADVANTAGES', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', NULL, '0', '0', NULL, '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-07-08 09:35:33', '2023-07-08 09:35:33'),
(10, 5, 3, 'code', NULL, NULL, NULL, '// filename Main.java\r\nclass Test {\r\n	protected int x, y;\r\n}\r\n\r\nclass Main {\r\n	public static void main(String args[]) {\r\n		Test t = new Test();\r\n		System.out.println(t.x + \" \" + t.y);\r\n	}\r\n}', 'uploads\\wnCM1688810660.jpg', '0 0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', NULL, '0', '0', NULL, '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-07-08 10:04:20', '2023-07-08 10:04:20'),
(11, 6, 2, 'paragraph', 'Primary memory, also known as main memory or RAM (Random Access Memory), is the \r\nprimary working memory of a computer system. It is a volatile form of memory that stores data \r\nand instructions that are actively being used by the CPU (Central Processing Unit) for immediate \r\nprocessing.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', NULL, '0', '0', NULL, '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-07-10 04:17:17', '2023-07-10 04:17:17'),
(12, 6, 2, 'paragraph', 'Primary memory is directly accessible by the CPU and plays a crucial role in the execution of \r\nprograms and tasks. It holds the data and instructions that are currently in use by the \r\ncomputer\'s operating system, applications, and processes. The CPU retrieves and stores data \r\nfrom and to primary memory at high speeds, which helps in quick data processing and \r\nexecution.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', NULL, '0', '0', NULL, '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-07-10 04:18:00', '2023-07-10 04:18:00'),
(13, 6, 5, 'image-2', NULL, NULL, NULL, NULL, NULL, NULL, 'image_2_3', 'Primary Memory', NULL, NULL, NULL, 'SRAM', NULL, 'SRAM is a type of primary memory that stores \r\neach bit of data using a flip-flop circuit. It is faster and more expensive compared to the \r\nother type of primary memory, DRAM. SRAM does not require constant refreshing of \r\ndata, making it faster but also more power-hungry.', 'DRAM', NULL, 'DRAM is the most common type of \r\nprimary memory found in modern computers. It stores data as a charge in capacitors \r\nwithin integrated circuits. Unlike SRAM, DRAM needs to be refreshed periodically. DRAM \r\nis less expensive than SRAM but provides a larger capacity.', '0', NULL, '0', '0', NULL, '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-07-10 04:19:34', '2023-07-10 04:19:34'),
(16, 7, 6, 'image-3', NULL, NULL, NULL, NULL, NULL, NULL, 'image_3_1', 'STATIC MEMORY ALLOCATION', NULL, 'SCENARIOS', NULL, 'GLOBAL VARIABLES', NULL, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque consectetur molestiae maiores saepe praesentium amet nulla neque! Non ipsa veniam enim fuga beatae saepe, aliquid ratione. Error a sed repellat?Lorem ipsum, dolor', 'STATIC VARIABLES', NULL, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque consectetur molestiae maiores saepe praesentium amet nulla neque! Non ipsa veniam enim fuga beatae saepe, aliquid ratione. Error a sed repellat?Lorem ipsum, dolor', 'ARRAYS', NULL, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque consectetur molestiae maiores saepe praesentium amet nulla neque! Non ipsa veniam enim fuga beatae saepe, aliquid ratione. Error a sed repellat?Lorem ipsum, dolor', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-07-12 05:31:05', '2023-07-12 05:31:05'),
(17, 7, 6, 'image-3', NULL, NULL, NULL, NULL, NULL, NULL, 'image_3_2', 'FUNCTION', NULL, 'SYNTAX OF A', NULL, 'PROTOTYPE', 'FUNCTION', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque consectetur molestiae maiores saepe praesentium amet nulla neque! Non ipsa veniam enim fuga beatae saepe, aliquid ratione. Error a sed repellat?Lorem ipsum, dolor', 'DEFINITION', 'FUNCTION', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque consectetur molestiae maiores saepe praesentium amet nulla neque! Non ipsa veniam enim fuga beatae saepe, aliquid ratione. Error a sed repellat?Lorem ipsum, dolor', 'CALL', 'FUNCTION', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque consectetur molestiae maiores saepe praesentium amet nulla neque! Non ipsa veniam enim fuga beatae saepe, aliquid ratione. Error a sed repellat?Lorem ipsum, dolor', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-07-12 05:42:25', '2023-07-12 05:42:25'),
(18, 7, 7, 'image-4', NULL, NULL, NULL, NULL, NULL, NULL, 'image_4_1', 'MEMORY', NULL, 'SEGMENTS', NULL, 'CODE', 'SEGMENT', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque consectetur molestiae maiores saepe praesentium amet nulla neque! Non ipsa veniam enim fuga beatae saepe, aliquid ratione. Error a sed repellat?Lorem ipsum, dolor', 'DATA', 'SEGMENT', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque consectetur molestiae maiores saepe praesentium amet nulla neque! Non ipsa veniam enim fuga beatae saepe, aliquid ratione. Error a sed repellat?Lorem ipsum, dolor', 'HEAP', 'SEGMENT', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque consectetur molestiae maiores saepe praesentium amet nulla neque! Non ipsa veniam enim fuga beatae saepe, aliquid ratione. Error a sed repellat?Lorem ipsum, dolor', 'STACKS', 'SEGMENT', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque consectetur molestiae maiores saepe praesentium amet nulla neque! Non ipsa veniam enim fuga beatae saepe, aliquid ratione. Error a sed repellat?Lorem ipsum, dolor', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-07-12 06:17:00', '2023-07-12 06:17:00'),
(19, 7, 7, 'image-4', NULL, NULL, NULL, NULL, NULL, NULL, 'image_4_2', 'OOP\'s in JAVA', NULL, NULL, NULL, 'INHERITANCE', NULL, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque consectetur molestiae maiores saepe praesentium amet nulla neque! Non ipsa veniam enim fuga beatae saepe, aliquid ratione. Error a sed repellat?Lorem ipsum, dolor', 'POLYMORPHISM', NULL, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque consectetur molestiae maiores saepe praesentium amet nulla neque! Non ipsa veniam enim fuga beatae saepe, aliquid ratione. Error a sed repellat?Lorem ipsum, dolor', 'ABSTRACTION', NULL, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque consectetur molestiae maiores saepe praesentium amet nulla neque! Non ipsa veniam enim fuga beatae saepe, aliquid ratione. Error a sed repellat?Lorem ipsum, dolor', 'ENCAPSULATION', NULL, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque consectetur molestiae maiores saepe praesentium amet nulla neque! Non ipsa veniam enim fuga beatae saepe, aliquid ratione. Error a sed repellat?Lorem ipsum, dolor', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-07-12 07:00:07', '2023-07-12 07:00:07'),
(20, 7, 7, 'image-4', NULL, NULL, NULL, NULL, NULL, NULL, 'image_4_3', 'ADVANTAGES', NULL, 'SEGMENTATION', NULL, 'MODULARITY & CODE ORGANIZATION', NULL, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque consectetur molestiae maiores saepe praesentium amet nulla neque! Non ipsa veniam enim fuga beatae saepe, aliquid ratione. Error a sed repellat?Lorem ipsum, dolor', 'EFFICIENT MEMORY MANAGEMENT', NULL, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque consectetur molestiae maiores saepe praesentium amet nulla neque! Non ipsa veniam enim fuga beatae saepe, aliquid ratione. Error a sed repellat?Lorem ipsum, dolor', 'MEMORY PROTECTION', NULL, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque consectetur molestiae maiores saepe praesentium amet nulla neque! Non ipsa veniam enim fuga beatae saepe, aliquid ratione. Error a sed repellat?Lorem ipsum, dolor', 'FLEXIBILITY IN MEMORY ALLOCATION', NULL, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque consectetur molestiae maiores saepe praesentium amet nulla neque! Non ipsa veniam enim fuga beatae saepe, aliquid ratione. Error a sed repellat?Lorem ipsum, dolor', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-07-12 07:09:26', '2023-07-12 07:09:26'),
(21, 8, 2, 'paragraph', 'In the C programming language, there are several commonly used library functions for file handling and \r\nmanipulation. Below given are some of the commonly used library functions for file handling in the C \r\nlanguage. It\'s important to include the header files stdlib.h and stdio.h to use these functions in your C \r\nprograms.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-07-12 11:32:59', '2023-07-12 11:32:59'),
(22, 8, 14, 'list', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Bullet', 'FILE OPENING AND CLOSING', 'fopen(): Opens a file and returns a file pointer,fclose(): Closes a file that was previously opened.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-07-12 11:36:07', '2023-07-12 11:36:07'),
(23, 8, 14, 'list', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Check', 'FILE READING AND WRITING:', 'fprintf(): Writes formatted output to a file.,fscanf(): Reads formatted input from a file.,fputc(): Writes a single character to a file.,fgetc(): Reads a single character from a file.,fputs(): Writes a string to a file.,fgets(): Reads a string (or line) from a file.,fwrite(): Writes a block of data to a file.,fread(): Reads a block of data from a file.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-07-12 11:49:47', '2023-07-12 11:49:47'),
(24, 9, 8, 'image-5', NULL, NULL, NULL, NULL, NULL, NULL, 'image_5_1', 'NEED FOR STATIC MEMORY ALLOCATION', NULL, NULL, NULL, 'EFFICIENCY', NULL, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque consectetur molestiae maiores saepe praesentium amet nulla neque! Non ipsa veniam enim fuga beatae saepe, aliquid ratione. Error a sed repellat?Lorem ipsum, dolor', 'PREDICTABILITY', NULL, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque consectetur molestiae maiores saepe praesentium amet nulla neque! Non ipsa veniam enim fuga beatae saepe, aliquid ratione. Error a sed repellat?Lorem ipsum, dolor', 'GLOBAL DATA SHARING', NULL, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque consectetur molestiae maiores saepe praesentium amet nulla neque! Non ipsa veniam enim fuga beatae saepe, aliquid ratione. Error a sed repellat?Lorem ipsum, dolor', 'PERSISTENCE', NULL, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque consectetur molestiae maiores saepe praesentium amet nulla neque! Non ipsa veniam enim fuga beatae saepe, aliquid ratione. Error a sed repellat?Lorem ipsum, dolor', 'LIMITED MEMORY RESOURCES', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque consectetur molestiae maiores saepe praesentium amet nulla neque! Non ipsa veniam enim fuga beatae saepe, aliquid ratione. Error a sed repellat?Lorem ipsum, dolor', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-07-17 07:21:33', '2023-07-17 07:21:33'),
(25, 9, 8, 'image-5', NULL, NULL, NULL, NULL, NULL, NULL, 'image_5_2', 'DEFAULT CONTROL', NULL, 'ALTERING', 'FLOW', 'if', NULL, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque consectetur molestiae maiores saepe praesentium amet nulla neque! Non ipsa veniam enim fuga beatae saepe, aliquid ratione. Error a sed repellat?Lorem ipsum, dolor', 'if else', NULL, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque consectetur molestiae maiores saepe praesentium amet nulla neque! Non ipsa veniam enim fuga beatae saepe, aliquid ratione. Error a sed repellat?Lorem ipsum, dolor', 'if else if ladder', NULL, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque consectetur molestiae maiores saepe praesentium amet nulla neque! Non ipsa veniam enim fuga beatae saepe, aliquid ratione. Error a sed repellat?Lorem ipsum, dolor', 'nested if else', NULL, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque consectetur molestiae maiores saepe praesentium amet nulla neque! Non ipsa veniam enim fuga beatae saepe, aliquid ratione. Error a sed repellat?Lorem ipsum, dolor', 'match', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque consectetur molestiae maiores saepe praesentium amet nulla neque! Non ipsa veniam enim fuga beatae saepe, aliquid ratione. Error a sed repellat?Lorem ipsum, dolor', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-07-17 07:39:27', '2023-07-17 07:39:27'),
(28, 9, 9, 'image-6', NULL, NULL, NULL, NULL, NULL, NULL, 'image_6_1', 'DBMS', 'DATA DISTRIBUTION', 'CLASSIFICATION BASED ON', NULL, 'CENTRALIZED', NULL, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque consectetur molestiae maiores saepe praesentium amet nulla neque! Non ipsa veniam enim fuga beatae saepe, aliquid ratione. Error a sed repellat?Lorem ipsum, dolor', 'CLOUD', NULL, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque consectetur molestiae maiores saepe praesentium amet nulla neque! Non ipsa veniam enim fuga beatae saepe, aliquid ratione. Error a sed repellat?Lorem ipsum, dolor', 'DISTRIBUTED', NULL, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque consectetur molestiae maiores saepe praesentium amet nulla neque! Non ipsa veniam enim fuga beatae saepe, aliquid ratione. Error a sed repellat?Lorem ipsum, dolor', 'PEER-TO_PEER', NULL, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque consectetur molestiae maiores saepe praesentium amet nulla neque! Non ipsa veniam enim fuga beatae saepe, aliquid ratione. Error a sed repellat?Lorem ipsum, dolor', 'FEDERATED', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque consectetur molestiae maiores saepe praesentium amet nulla neque! Non ipsa veniam enim fuga beatae saepe, aliquid ratione. Error a sed repellat?Lorem ipsum, dolor', 'REPLICATED', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque consectetur molestiae maiores saepe praesentium amet nulla neque! Non ipsa veniam enim fuga beatae saepe, aliquid ratione. Error a sed repellat?Lorem ipsum, dolor', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-07-17 09:18:18', '2023-07-17 09:18:18'),
(29, 9, 9, 'image-6', NULL, NULL, NULL, NULL, NULL, NULL, 'image_6_2', 'FROM FILE SYSTEM', NULL, 'PARADIGM SHIFT', 'TO DBMS', 'REDUNDACY OF DATA', NULL, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque consectetur molestiae maiores saepe praesentium amet nulla neque! Non ipsa veniam enim fuga beatae saepe, aliquid ratione. Error a sed repellat?Lorem ipsum, dolor', 'NO BACKUP AND RECOVERY', NULL, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque consectetur molestiae maiores saepe praesentium amet nulla neque! Non ipsa veniam enim fuga beatae saepe, aliquid ratione. Error a sed repellat?Lorem ipsum, dolor', 'INCONSISTENCY OF DATA', NULL, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque consectetur molestiae maiores saepe praesentium amet nulla neque! Non ipsa veniam enim fuga beatae saepe, aliquid ratione. Error a sed repellat?Lorem ipsum, dolor', 'NO CONCURRENT ACCESS', NULL, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque consectetur molestiae maiores saepe praesentium amet nulla neque! Non ipsa veniam enim fuga beatae saepe, aliquid ratione. Error a sed repellat?Lorem ipsum, dolor', 'DIFFICULT DATA ACCESS', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque consectetur molestiae maiores saepe praesentium amet nulla neque! Non ipsa veniam enim fuga beatae saepe, aliquid ratione. Error a sed repellat?Lorem ipsum, dolor', 'UNAUTHORIZED ACCESS', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque consectetur molestiae maiores saepe praesentium amet nulla neque! Non ipsa veniam enim fuga beatae saepe, aliquid ratione. Error a sed repellat?Lorem ipsum, dolor', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-07-17 09:19:57', '2023-07-17 09:19:57'),
(30, 9, 9, 'image-6', NULL, NULL, NULL, NULL, NULL, NULL, 'image_6_3', 'DBMS', 'FLAT FILE', NULL, NULL, 'STRUCTURE AND ORGANIZATION', NULL, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque consectetur molestiae maiores saepe praesentium amet nulla neque! Non ipsa veniam enim fuga beatae saepe, aliquid ratione. Error a sed repellat?Lorem ipsum, dolor', 'DATA INTEGRITY AND CONSISTENCY', NULL, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque consectetur molestiae maiores saepe praesentium amet nulla neque! Non ipsa veniam enim fuga beatae saepe, aliquid ratione. Error a sed repellat?Lorem ipsum, dolor', 'DATA INDEPENDENCE', NULL, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque consectetur molestiae maiores saepe praesentium amet nulla neque! Non ipsa veniam enim fuga beatae saepe, aliquid ratione. Error a sed repellat?Lorem ipsum, dolor', 'SCALABILITY AND PERFORMANCE', NULL, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque consectetur molestiae maiores saepe praesentium amet nulla neque! Non ipsa veniam enim fuga beatae saepe, aliquid ratione. Error a sed repellat?Lorem ipsum, dolor', 'SECURITY AND CONCURRENT ACCESS', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque consectetur molestiae maiores saepe praesentium amet nulla neque! Non ipsa veniam enim fuga beatae saepe, aliquid ratione. Error a sed repellat?Lorem ipsum, dolor', 'DATA ACCESS AND QUERYING', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque consectetur molestiae maiores saepe praesentium amet nulla neque! Non ipsa veniam enim fuga beatae saepe, aliquid ratione. Error a sed repellat?Lorem ipsum, dolor', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-07-18 07:13:30', '2023-07-18 07:13:30'),
(31, 9, 10, 'image-7', NULL, NULL, NULL, NULL, NULL, NULL, 'image_7_1', 'FEATURES', NULL, NULL, NULL, 'PLAIN TEXT', NULL, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque consectetur molestiae maiores saepe praesentium amet nulla neque! Non ipsa veniam enim fuga beatae saepe, aliquid ratione. Error a sed repellat?Lorem ipsum, dolor', 'READABILITY', NULL, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque consectetur molestiae maiores saepe praesentium amet nulla neque! Non ipsa veniam enim fuga beatae saepe, aliquid ratione. Error a sed repellat?Lorem ipsum, dolor', 'ENCODING', NULL, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque consectetur molestiae maiores saepe praesentium amet nulla neque! Non ipsa veniam enim fuga beatae saepe, aliquid ratione. Error a sed repellat?Lorem ipsum, dolor', 'STRUCTURE', NULL, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque consectetur molestiae maiores saepe praesentium amet nulla neque! Non ipsa veniam enim fuga beatae saepe, aliquid ratione. Error a sed repellat?Lorem ipsum, dolor', 'FILE SIZE', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque consectetur molestiae maiores saepe praesentium amet nulla neque! Non ipsa veniam enim fuga beatae saepe, aliquid ratione. Error a sed repellat?Lorem ipsum, dolor', 'PORTABILITY', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque consectetur molestiae maiores saepe praesentium amet nulla neque! Non ipsa veniam enim fuga beatae saepe, aliquid ratione. Error a sed repellat?Lorem ipsum, dolor', 'EDITING', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque consectetur molestiae maiores saepe praesentium amet nulla neque! Non ipsa veniam enim fuga beatae saepe, aliquid ratione. Error a sed repellat?Lorem ipsum, dolor', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-07-18 09:56:22', '2023-07-18 09:56:22'),
(32, 9, 10, 'image-7', NULL, NULL, NULL, NULL, NULL, NULL, 'image_7_2', 'TEXT FILE FEATURES', NULL, NULL, NULL, 'INTRODUCTION TO PROGRAMMING CONCEPTS', NULL, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque consectetur molestiae maiores saepe praesentium amet nulla neque! Non ipsa veniam enim fuga beatae saepe, aliquid ratione. Error a sed repellat?Lorem ipsum, dolor', 'FUNDAMENTALS OF A PROGRAMMING LANGUAGE', NULL, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque consectetur molestiae maiores saepe praesentium amet nulla neque! Non ipsa veniam enim fuga beatae saepe, aliquid ratione. Error a sed repellat?Lorem ipsum, dolor', 'DATA STRUCTURES AND ALGORITHMS', NULL, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque consectetur molestiae maiores saepe praesentium amet nulla neque! Non ipsa veniam enim fuga beatae saepe, aliquid ratione. Error a sed repellat?Lorem ipsum, dolor', 'OBJECT-ORIENTED PROGRAMMING (OOP)', NULL, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque consectetur molestiae maiores saepe praesentium amet nulla neque! Non ipsa veniam enim fuga beatae saepe, aliquid ratione. Error a sed repellat?Lorem ipsum, dolor', 'WEB DEVELOPMENT', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque consecteturmolestiae maiores saepe praesentium amet nulla neque! Non ipsa veniam enim fuga beatae saepe, aliquid ratione. Error a sed repellat?Lorem ipsum, dolor', 'DATABASE AND SQL', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque consecteturmolestiae maiores saepe praesentium amet nulla neque! Non ipsa veniam enim fuga beatae saepe, aliquid ratione. Error a sed repellat?Lorem ipsum, dolor', 'ADVANCED TOPICS AND SPECIALIZATIONS', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque consectetur molestiae maiores saepe praesentium amet nulla neque! Non ipsa veniam enim fuga beatae saepe, aliquid ratione. Error a sed repellat?Lorem ipsum, dolor', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-07-18 10:00:34', '2023-07-18 10:00:34'),
(33, 9, 11, 'image-8', NULL, NULL, NULL, NULL, NULL, NULL, 'image_8_1', 'WHY LEARN', 'DATABASE MANAGEMENT', NULL, NULL, 'DATA IS EVERYWHERE', NULL, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque consectetur molestiae maiores saepe praesentium amet nulla neque! Non ipsa veniam enim fuga beatae saepe, aliquid ratione. Error a sed repellat?Lorem ipsum, dolor', 'CAREER OPPORTUNITIES', NULL, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque consectetur molestiae maiores saepe praesentium amet nulla neque! Non ipsa veniam enim fuga beatae saepe, aliquid ratione. Error a sed repellat?Lorem ipsum, dolor', 'EFFICIENT DATA MANAGEMENT', NULL, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque consectetur molestiae maiores saepe praesentium amet nulla neque! Non ipsa veniam enim fuga beatae saepe, aliquid ratione. Error a sed repellat?Lorem ipsum, dolor', 'INTERGRATION AND INTEROPERABILITY', NULL, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque consectetur molestiae maiores saepe praesentium amet nulla neque! Non ipsa veniam enim fuga beatae saepe, aliquid ratione. Error a sed repellat?Lorem ipsum, dolor', 'DATA INTEGRITY AND SECURITY', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque consectetur molestiae maiores saepe praesentium amet nulla neque! Non ipsa veniam enim fuga beatae saepe, aliquid ratione. Error a sed repellat?Lorem ipsum, dolor', 'SCALABILITY AND PERFORMANCE', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque consectetur molestiae maiores saepe praesentium amet nulla neque! Non ipsa veniam enim fuga beatae saepe, aliquid ratione. Error a sed repellat?Lorem ipsum, dolor', 'BUSINESS INTELLIGENCE AND DECISION-MAKING', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque consectetur molestiae maiores saepe praesentium amet nulla neque! Non ipsa veniam enim fuga beatae saepe, aliquid ratione. Error a sed repellat?Lorem ipsum, dolor', 'CLOUD COMPUTING AND DATA WAREHOUSING', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque consectetur molestiae maiores saepe praesentium amet nulla neque! Non ipsa veniam enim fuga beatae saepe, aliquid ratione. Error a sed repellat?Lorem ipsum, dolor', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-07-18 11:05:23', '2023-07-18 11:05:23'),
(34, 9, 11, 'image-8', NULL, NULL, NULL, NULL, NULL, NULL, 'image_8_2', 'TIPS TO ANSWER', NULL, NULL, NULL, 'BE CONCISE AND FOCUSED', NULL, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque consectetur molestiae maiores saepe praesentium amet nulla neque! Non ipsa veniam enim fuga beatae saepe, aliquid ratione. Error a sed repellat?Lorem ipsum, dolor', 'RESEARCH THE COMPANY', NULL, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque consectetur molestiae maiores saepe praesentium amet nulla neque! Non ipsa veniam enim fuga beatae saepe, aliquid ratione. Error a sed repellat?Lorem ipsum, dolor', 'ALIGN YOUR VALUES', NULL, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque consectetur molestiae maiores saepe praesentium amet nulla neque! Non ipsa veniam enim fuga beatae saepe, aliquid ratione. Error a sed repellat?Lorem ipsum, dolor', 'BE SPECIFIC AND AUTHENTIC', NULL, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque consectetur molestiae maiores saepe praesentium amet nulla neque! Non ipsa veniam enim fuga beatae saepe, aliquid ratione. Error a sed repellat?Lorem ipsum, dolor', 'SHOW ENTHUSIASM', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque consectetur molestiae maiores saepe praesentium amet nulla neque! Non ipsa veniam enim fuga beatae saepe, aliquid ratione. Error a sed repellat?Lorem ipsum, dolor', 'CONNECT WITH THE INTERVIEWER', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque consectetur molestiae maiores saepe praesentium amet nulla neque! Non ipsa veniam enim fuga beatae saepe, aliquid ratione. Error a sed repellat?Lorem ipsum, dolor', 'AVOID NEGATIVE COMMENTS', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque consectetur molestiae maiores saepe praesentium amet nulla neque! Non ipsa veniam enim fuga beatae saepe, aliquid ratione. Error a sed repellat?Lorem ipsum, dolor', 'PRACTICE AND BE CONCISE', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque consectetur molestiae maiores saepe praesentium amet nulla neque! Non ipsa veniam enim fuga beatae saepe, aliquid ratione. Error a sed repellat?Lorem ipsum, dolor', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-07-18 11:06:56', '2023-07-18 11:06:56'),
(35, 9, 13, 'image-10', NULL, NULL, NULL, NULL, NULL, NULL, 'image_10_1', 'ADHERE SYNONYMS', NULL, NULL, NULL, 'STICK', NULL, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque consectetur molestiae maiores saepe praesentium amet nulla neque! Non ipsa veniam enim fuga beatae saepe, aliquid ratione. Error a sed repellat?Lorem ipsum, dolor', 'BOND', NULL, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque consectetur molestiae maiores saepe praesentium amet nulla neque! Non ipsa veniam enim fuga beatae saepe, aliquid ratione. Error a sed repellat?Lorem ipsum, dolor', 'CONFORM', NULL, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque consectetur molestiae maiores saepe praesentium amet nulla neque! Non ipsa veniam enim fuga beatae saepe, aliquid ratione. Error a sed repellat?Lorem ipsum, dolor', 'CLING', NULL, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque consectetur molestiae maiores saepe praesentium amet nulla neque! Non ipsa veniam enim fuga beatae saepe, aliquid ratione. Error a sed repellat?Lorem ipsum, dolor', 'ATTACH', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque consectetur molestiae maiores saepe praesentium amet nulla neque! Non ipsa veniam enim fuga beatae saepe, aliquid ratione. Error a sed repellat?Lorem ipsum, dolor', 'FOLLOW', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque consectetur molestiae maiores saepe praesentium amet nulla neque! Non ipsa veniam enim fuga beatae saepe, aliquid ratione. Error a sed repellat?Lorem ipsum, dolor', 'HOLD FAST', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque consectetur molestiae maiores saepe praesentium amet nulla neque! Non ipsa veniam enim fuga beatae saepe, aliquid ratione. Error a sed repellat?Lorem ipsum, dolor', 'OBEY', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque consectetur molestiae maiores saepe praesentium amet nulla neque! Non ipsa veniam enim fuga beatae saepe, aliquid ratione. Error a sed repellat?Lorem ipsum, dolor', 'EMBRACE', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque consectetur molestiae maiores saepe praesentium amet nulla neque! Non ipsa veniam enim fuga beatae saepe, aliquid ratione. Error a sed repellat?Lorem ipsum, dolor', 'COHERE', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque consectetur molestiae maiores saepe praesentium amet nulla neque! Non ipsa veniam enim fuga beatae saepe, aliquid ratione. Error a sed repellat?Lorem ipsum, dolor', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-07-26 04:39:31', '2023-07-26 04:39:31'),
(36, 9, 13, 'image-10', NULL, NULL, NULL, NULL, NULL, NULL, 'image_10_2', 'DBMS COMPONENTS', NULL, NULL, NULL, 'DATA DEFINITION LANGUAGE', NULL, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque consectetur molestiae maiores saepe praesentium amet nulla neque! Non ipsa veniam enim fuga beatae saepe, aliquid ratione. Error a sed repellat?Lorem ipsum, dolor', 'DATA MANIPULATION LANGUAGE', NULL, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque consectetur molestiae maiores saepe praesentium amet nulla neque! Non ipsa veniam enim fuga beatae saepe, aliquid ratione. Error a sed repellat?Lorem ipsum, dolor', 'DATA QUERY LANGUAGE', NULL, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque consectetur molestiae maiores saepe praesentium amet nulla neque! Non ipsa veniam enim fuga beatae saepe, aliquid ratione. Error a sed repellat?Lorem ipsum, dolor', 'DATA CONTROL LANGUAGE', NULL, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque consectetur molestiae maiores saepe praesentium amet nulla neque! Non ipsa veniam enim fuga beatae saepe, aliquid ratione. Error a sed repellat?Lorem ipsum, dolor', 'TRANSACTION MANAGEMENT', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque consectetur molestiae maiores saepe praesentium amet nulla neque! Non ipsa veniam enim fuga beatae saepe, aliquid ratione. Error a sed repellat?Lorem ipsum, dolor', 'BACKUP AND RECOVERY MANAGER', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque consectetur molestiae maiores saepe praesentium amet nulla neque! Non ipsa veniam enim fuga beatae saepe, aliquid ratione. Error a sed repellat?Lorem ipsum, dolor', 'CONCURRENCY CONTROL', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque consectetur molestiae maiores saepe praesentium amet nulla neque! Non ipsa veniam enim fuga beatae saepe, aliquid ratione. Error a sed repellat?Lorem ipsum, dolor', 'QUERY OPTIMIZER', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque consectetur molestiae maiores saepe praesentium amet nulla neque! Non ipsa veniam enim fuga beatae saepe, aliquid ratione. Error a sed repellat?Lorem ipsum, dolor', 'STORAGE MANAGER', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque consectetur molestiae maiores saepe praesentium amet nulla neque! Non ipsa veniam enim fuga beatae saepe, aliquid ratione. Error a sed repellat?Lorem ipsum, dolor', 'DATABASE CATALOG', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque consectetur molestiae maiores saepe praesentium amet nulla neque! Non ipsa veniam enim fuga beatae saepe, aliquid ratione. Error a sed repellat?Lorem ipsum, dolor', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-07-26 04:45:01', '2023-07-26 04:45:01'),
(37, 9, 13, 'image-10', NULL, NULL, NULL, NULL, NULL, NULL, 'image_10_3', 'STANDARD FILE OPERATIONS', NULL, NULL, NULL, 'CREATE', NULL, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque consectetur molestiae maiores saepe praesentium amet nulla neque! Non ipsa veniam enim fuga beatae saepe, aliquid ratione. Error a sed repellat?Lorem ipsum, dolor', 'OPEN', NULL, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque consectetur molestiae maiores saepe praesentium amet nulla neque! Non ipsa veniam enim fuga beatae saepe, aliquid ratione. Error a sed repellat?Lorem ipsum, dolor', 'READ', NULL, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque consectetur molestiae maiores saepe praesentium amet nulla neque! Non ipsa veniam enim fuga beatae saepe, aliquid ratione. Error a sed repellat?Lorem ipsum, dolor', 'WRITE', NULL, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque consectetur molestiae maiores saepe praesentium amet nulla neque! Non ipsa veniam enim fuga beatae saepe, aliquid ratione. Error a sed repellat?Lorem ipsum, dolor', 'CLOSE', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque consectetur molestiae maiores saepe praesentium amet nulla neque! Non ipsa veniam enim fuga beatae saepe, aliquid ratione. Error a sed repellat?Lorem ipsum, dolor', 'SEEK', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque consectetur molestiae maiores saepe praesentium amet nulla neque! Non ipsa veniam enim fuga beatae saepe, aliquid ratione. Error a sed repellat?Lorem ipsum, dolor', 'DELETE', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque consectetur molestiae maiores saepe praesentium amet nulla neque! Non ipsa veniam enim fuga beatae saepe, aliquid ratione. Error a sed repellat?Lorem ipsum, dolor', 'RENAME', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque consectetur molestiae maiores saepe praesentium amet nulla neque! Non ipsa veniam enim fuga beatae saepe, aliquid ratione. Error a sed repellat?Lorem ipsum, dolor', 'COPY', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque consectetur molestiae maiores saepe praesentium amet nulla neque! Non ipsa veniam enim fuga beatae saepe, aliquid ratione. Error a sed repellat?Lorem ipsum, dolor', 'MOVE', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque consectetur molestiae maiores saepe praesentium amet nulla neque! Non ipsa veniam enim fuga beatae saepe, aliquid ratione. Error a sed repellat?Lorem ipsum, dolor', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-07-26 04:48:05', '2023-07-26 04:48:05'),
(40, 6, 5, 'image-2', NULL, NULL, NULL, NULL, NULL, NULL, 'image_2_1', NULL, NULL, NULL, NULL, 'PRIMARY MEMORY', NULL, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque consectetur molestiae maiores saepe praesentium amet nulla neque! Non ipsa veniam enim fuga beatae saepe, aliquid ratione. Error a sed repellat?Lorem ipsum, dolor', 'SECONDARY MEMORY', NULL, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque consectetur molestiae maiores saepe praesentium amet nulla neque! Non ipsa veniam enim fuga beatae saepe, aliquid ratione. Error a sed repellat?Lorem ipsum, dolor', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-07-26 05:03:51', '2023-07-26 05:03:51'),
(41, 6, 5, 'image-2', NULL, NULL, NULL, NULL, NULL, NULL, 'image_2_2', NULL, NULL, NULL, NULL, 'COMMON NOUN', NULL, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque consectetur molestiae maiores saepe praesentium amet nulla neque! Non ipsa veniam enim fuga beatae saepe, aliquid ratione. Error a sed repellat?Lorem ipsum, dolor saepe, aliquid ratione. Error a sed repellat?Lorem ipsum, dolor pisicing elit. Itaque consectetur molestiae maiores saepe praesentium', 'PROPER NOUN', NULL, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque consectetur molestiae maiores saepe praesentium amet nulla neque! Non ipsa veniam enim fuga beatae saepe, aliquid ratione. Error a sed repellat?Lorem ipsum, dolor saepe, aliquid ratione. Error a sed repellat?Lorem ipsum, dolor pisicing elit. Itaque consectetur molestiae maiores saepe praesentium', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-07-26 05:04:21', '2023-07-26 05:04:21'),
(42, 6, 5, 'image-2', NULL, NULL, NULL, NULL, NULL, NULL, 'image_2_4', NULL, NULL, NULL, NULL, 'COMPILE TIME', NULL, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque consectetur molestiae maiores saepe praesentium amet nulla neque! Non ipsa veniam enim fuga beatae saepe, aliquid ratione. Error a sed repellat?Lorem ipsum, dolor saepe, aliquid ratione. Error a sed repellat?Lorem ipsum, dolor pisicing elit. Itaque', 'EXECUTION TIME', NULL, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque consectetur molestiae maiores saepe praesentium amet nulla neque! Non ipsa veniam enim fuga beatae saepe, aliquid ratione. Error a sed repellat?Lorem ipsum, dolor saepe, aliquid ratione. Error a sed repellat?Lorem ipsum, dolor pisicing elit. Itaque', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-07-26 05:05:11', '2023-07-26 05:05:11'),
(43, 10, 1, 'heading', 'heading', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-09-08 08:01:58', '2023-09-08 08:01:58'),
(44, 4, 15, 'examples', 'public class Main {\n  static void myMethod() {\n    // code to be executed\n  }\n}', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-09-08 08:17:37', '2023-09-08 08:17:37'),
(58, 12, 17, 'table', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '{\"columns\":\"4\",\"rows\":\"4\",\"data\":[\"Heading 1\",\"Heading 2\",\"Heading 3\",\"Heading 4\",\"1\",\"2\",\"3\",\"4\",\"5\",\"6\",\"7\",\"8\",\"9\",\"10\",\"11\",\"12\"]}', NULL, NULL, NULL, NULL, NULL, NULL, '2023-09-11 09:59:08', '2023-09-11 09:59:08'),
(59, 13, 2, 'paragraph', 'Declaration statements are such statements that begin with a datatype. In the \r\nC programming language, a declaration statement is used to introduce a new \r\nidentifier to the compiler. It informs the compiler about the name and type of \r\nthe identifier, allowing the compiler to allocate appropriate memory or perform \r\nnecessary operations.\r\nDeclaration statements are typically placed at the beginning of a code block or \r\nfunction to establish the identifiers\' existence and characteristics. By declaring \r\nthe identifiers before their usage, you can avoid compilation errors and write', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-09-18 04:50:56', '2023-09-18 04:50:56'),
(60, 13, 15, 'examples', 'int p;    int p[5];   int p(int,int);    int *p;     int **p;\r\n\r\nint ***p;    int *p[5];     int(*p)[5];     int **p[5];      int  *(*p)[5];', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-09-18 04:54:41', '2023-09-18 04:54:41'),
(61, 13, 7, 'image-4', NULL, NULL, NULL, NULL, NULL, NULL, 'image_4_1', 'USAGE', NULL, 'DECLARATION STATEMENTS', NULL, NULL, 'MEMORY ALLOCATION', 'MEMORY ALLOCATION', NULL, 'TYPE CHECKING', 'TYPE CHECKING', NULL, 'ESTABLISHING IDENTIFIER EXISTENCE', 'ESTABLISHING IDENTIFIER EXISTENCE', NULL, 'IMPROVING CODE READABILLITY', 'IMPROVING CODE READABILLITY', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-09-18 05:03:23', '2023-09-18 05:03:23'),
(62, 14, 2, 'paragraph', 'In this approach, the name of a memory location is specified to access the data \r\npresent in that memory location. The direct approach to accessing data is the \r\nmost common and straightforward way of working with data in C. The direct \r\napproach, in a broader sense, simply means accessing and manipulating data \r\nthrough variable names without involving pointers or indirection', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-09-18 06:10:52', '2023-09-18 06:10:52'),
(63, 14, 7, 'image-4', NULL, NULL, NULL, NULL, NULL, NULL, 'image_4_3', 'ADVANTAGES', NULL, 'DIRECT APPROACH', NULL, 'SIMPLICITY', NULL, 'SIMPLICITY', 'READABILITY', NULL, 'READABILITY', 'DEREFERENCING', NULL, 'DEREFERENCING', 'MEMORY MANAGEMENT', NULL, 'MEMORY MANAGEMENT', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-09-18 06:13:22', '2023-09-18 06:13:22'),
(64, 14, 7, 'image-4', NULL, NULL, NULL, NULL, NULL, NULL, 'image_4_3', 'DISADVANTAGES', NULL, 'DIRECT APPROACH', NULL, 'LIMITED FLEXIBILITY', NULL, 'LIMITED FLEXIBILITY', 'LIMITED ABILLITY TO SHARE DATA', NULL, 'LIMITED ABILLITY TO SHARE DATA', 'INEFFICIENCY IN LARGE DATA STRUCTURES', NULL, 'INEFFICIENCY IN LARGE DATA STRUCTURES', 'LLIMITED FUNCTIONALITY IN SOME ALGORITHM', NULL, 'LLIMITED FUNCTIONALITY IN SOME ALGORITHM', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-09-18 06:20:28', '2023-09-18 06:20:28'),
(65, 15, 2, 'paragraph', 'The indirection approach, also known as the indirect approach or the pointer \r\napproach, refers to the use of pointers to access the data indirectly.\r\nA pointer is a variable that holds the address of another variable and provides \r\nan alternative approach to accessing the contents of a memory lo', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-09-18 06:51:53', '2023-09-18 06:51:53'),
(67, 15, 7, 'image-4', NULL, NULL, NULL, NULL, NULL, NULL, 'image_4_1', 'ADVANTAGES', NULL, 'INDIRECT APPROACH', NULL, NULL, 'EFFICIENT MEMORY MANAGEMENT', 'EFFICIENT MEMORY MANAGEMENT', NULL, 'DATA SHARING & MANIPULATION', 'DATA SHARING\r\n&\r\nMANIPULATION', NULL, 'COMPLEX DATA STRUCTURES', 'COMPLEX\r\nDATA\r\nSTRUCTURES', NULL, 'RESOURCE EFFICIENCY', 'RESOURCE\r\nEFFICIENCY', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-09-18 06:56:44', '2023-09-18 06:56:44'),
(68, 16, 2, 'paragraph', 'In the C language, the star (*) operator has been designed to perform multiple \r\noverloaded operations. The operation that it performs in a statement, depends \r\nupon the context of its usage.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-09-18 07:17:13', '2023-09-18 07:17:13'),
(69, 16, 6, 'image-3', NULL, NULL, NULL, NULL, NULL, NULL, 'image_3_1', 'USE CASES', NULL, NULL, NULL, 'MULTIPLICATION OPERATOR', NULL, 'MULTIPLICATION\r\nOPERATOR', 'POINTER DECLARATIOR', NULL, 'POINTER\r\nDECLARATIOR', 'INDIRECTION OPERATOR', NULL, 'INDIRECTION\r\nOPERATOR', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-09-18 07:18:27', '2023-09-18 07:18:27');
INSERT INTO `ebook_elements` (`id`, `section_id`, `element_id`, `element_name`, `content`, `heading_type`, `image`, `code`, `memory`, `output`, `image_type`, `image_heading`, `image_heading_2`, `image_subheading`, `image_subheading_2`, `image_text_1`, `image_subtext_1`, `image_desc_1`, `image_text_2`, `image_subtext_2`, `image_desc_2`, `image_text_3`, `image_subtext_3`, `image_desc_3`, `image_text_4`, `image_subtext_4`, `image_desc_4`, `image_text_5`, `image_desc_5`, `image_text_6`, `image_desc_6`, `image_text_7`, `image_desc_7`, `image_text_8`, `image_desc_8`, `image_text_9`, `image_desc_9`, `image_text_10`, `image_desc_10`, `list_type`, `list_heading`, `list_points`, `table_data`, `example_text`, `example_description`, `practice_description`, `example_image_text`, `button_text`, `single_button_type`, `created_at`, `updated_at`) VALUES
(70, 17, 2, 'paragraph', 'Memory capacity refers to the total size or capacity of the memory space that a \nprogram can utilize for storing data. Memory capacity is typically measured in \nbytes and is determined by the system\'s architecture and the limitations of the \nhardware and operating system. The memory capacity can vary depending on \nthe specific configuration of the computer system.\nMemory capacity helps in determining the maximum amount of memory that can \nbe requested and managed by the program without causing memory-related \nissues like memory leaks or buffer overflows. Understanding the memory \ncapacity is crucial for optimizing memory usage, ensuring efficient allocation and Memory capacity refers to the total size or capacity of the memory space that a \nprogram can utilize for storing data. Memory capacity is typically measured in \nbytes and is determined by the system\'s architecture and the limitations of the \nhardware and operating system. The memory capacity can vary depending on \nthe specific configuration of the computer system.\nMemory capacity helps in determining the maximum amount of memory that can \nbe requested and managed by the program without causing memory-related \nissues like memory leaks or buffer overflows. Understanding the memory \ncapacity is crucial for optimizing memory usage, ensuring efficient allocation and', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-09-18 07:21:22', '2023-09-18 07:21:22'),
(71, 17, 7, 'image-4', NULL, NULL, NULL, NULL, NULL, NULL, 'image_4_1', 'IMPORTANCE', NULL, 'MEMORY ADDRESS', NULL, NULL, 'IDENTIFICATION', 'IDENTIFICATION', NULL, 'DATA ACCESS', 'DATA ACCESS', NULL, 'MEMORY MANAGEMENT', 'MEMORY\r\nMANAGEMENT', NULL, 'POINTER MANIPULATION', 'POINTER\r\nMANIPULATION', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-09-18 07:23:06', '2023-09-18 07:23:06'),
(72, 15, 7, 'image-4', NULL, NULL, NULL, NULL, NULL, NULL, 'image_4_1', 'DISADVANTAGES', NULL, 'INDIRECT APPROACH', NULL, NULL, 'COMPLEXITY & POTENTIAL FOR ERRORS', 'COMPLEXITY &\r\nPOTENTIAL\r\nFOR ERROR', NULL, 'SECURITY VULNERABILITIES', 'SECURITY\r\nVULNERABILITIES', NULL, 'DIFFICULT DEBUGGING', 'DIFFICULT\r\nDEBUGGING', NULL, 'POTENTIAL PERFORMANCE OVERHEAD', 'POTENTIAL\r\nPERFORMANCE\r\nOVERHEAD', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-09-18 10:02:24', '2023-09-18 10:02:24'),
(73, 15, 5, 'image-2', NULL, NULL, NULL, NULL, NULL, NULL, 'image_2_4', NULL, NULL, NULL, NULL, 'DIRECT APPROACH', NULL, 'DIRECT APPROACH', 'INDIRECTION APPROACH', NULL, 'INDIRECTION APPROACH', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-09-18 10:03:29', '2023-09-18 10:03:29'),
(77, 15, 18, 'gif file', NULL, NULL, 'uploads\\CMTa1695036386.webp', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-09-18 11:26:26', '2023-09-18 11:26:26'),
(78, 18, 2, 'paragraph', 'In C, arrays are implemented as contiguous blocks of memory, and array \r\nvariables are essentially pointers to the first element of the array. By using \r\npointer arithmetic, programmers can navigate through the array elements \r\ndirectly, allowing for efficient and flexible array manip', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-09-18 11:40:04', '2023-09-18 11:40:04'),
(79, 18, 8, 'image-5', NULL, NULL, NULL, NULL, NULL, NULL, 'image_5_2', 'KEY ASPECTS', NULL, NULL, NULL, 'ADDITION', NULL, 'ADDITION', 'SUBTRACTION', NULL, 'SUBTRACTION', 'SCALING', NULL, 'SCALING', 'ACCESS OPTIMIZATION', NULL, 'ACCESS\r\nOPTIMIZATION', 'ACCESSING ARRAY ELEMENTS', 'ACCESSING\r\nARRAY\r\nELEMENTS', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-09-18 11:47:56', '2023-09-18 11:47:56'),
(80, 19, 2, 'paragraph', 'Pointers can be logically represented as arrows pointing to boxes. This \r\nrepresentation helps visualize the relationship between pointers and the data they \r\npoint to.\r\nImagine a box that represents a variable (or a memory location). A pointer can be \r\nrepresented by an arrow pointing to that box. The arrow indicates the connection \r\nbetween the pointer and the memory address it points to. If there are multiple \r\npointers pointing to the same variable, you can represent them with', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-09-20 10:12:59', '2023-09-20 10:12:59'),
(81, 19, 19, 'programming example with practice', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'CHAR POINTER,INT POINTER,FLOAT POINTER', 'GDGHD,SDGS,DGSDSTG', 'RTHRTHRS,HSRTH,STHST', NULL, NULL, NULL, '2023-09-20 10:34:25', '2023-09-20 10:34:25'),
(82, 19, 19, 'programming example with practice', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', 'rgget', 'sethsetg', NULL, NULL, NULL, '2023-09-20 11:49:45', '2023-09-20 11:49:45'),
(83, 19, 20, 'programming example VIDEO with practice', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'uploads/db2y1695219430.webp,uploads/e7DG1695219430.webp,uploads/lYYb1695219430.webp,uploads/5BVs1695219430.webp,uploads/WWVY1695219430.webp', 'dtsrjta,rthrthrw,hthreht,hherher,hreeru6w', NULL, NULL, NULL, '2023-09-20 14:17:10', '2023-09-20 14:17:10'),
(84, 19, 20, 'programming example with VIDEO, practice', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'uploads/GxmY1695275768.webp,uploads/0bhG1695275768.webp,uploads/50gx1695275768.webp,uploads/9xZB1695275768.webp', 'hethsreh,ytjdry,dtdfdr,jttyjndtyjts', NULL, NULL, NULL, '2023-09-21 05:56:08', '2023-09-21 05:56:08'),
(85, 19, 21, 'image, programming example, practice', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'GAREG,ETGWEGTWET,GEGWEG,EGEG,SJDFASJ', 'RGSERGE,ETTGWEGT,TEHERGT,ERGERG,RGERGEARGJ', 'ADDITION,SUBSTRACTION,INCREMENT,DECREMENT,DIFFERENCE BETWEEN TWO POINTERS', NULL, NULL, '2023-09-21 06:10:47', '2023-09-21 06:10:47'),
(91, 19, 22, 'buttons', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'int p;#@#int p[5];#@#int p(int, int);#@#int p(int, int);', NULL, '2023-09-22 10:40:58', '2023-09-22 10:40:58'),
(92, 20, 2, 'paragraph', 'Declaration statements are such statements that begin with a datatype. In the\r\nC programming language, a declaration statement is used to introduce a new\r\nidentifier to the compiler. It informs the compiler about the name and type of\r\nthe identifier, allowing the compiler to allocate appropriate memory or perform\r\nnecessary operations.\r\nDeclaration statements are typically placed at the beginning of a code block or\r\nfunction to establish the identifiers\' existence and characteristics. By declaring\r\nthe identifiers before their usage, you can avoid compilation errors and write', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-09-26 07:54:30', '2023-09-26 07:54:30'),
(93, 20, 22, 'buttons', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'int p;#@#int p[5];#@#int p(int, int);#@#int *p;#@#int **p;#@#int ***p;#@#int *p[5];#@#int (*p)[5];#@#int **p[5];#@#int *(*p)[5];', NULL, '2023-09-26 07:57:41', '2023-09-26 07:57:41'),
(94, 20, 7, 'image-4', NULL, NULL, NULL, NULL, NULL, NULL, 'image_4_1', 'USAGE', NULL, 'DECLARATION STATEMENTS', NULL, NULL, 'MEMORY ALLOCATION', 'ghsoru goserug', NULL, 'TYPE CHECKING', 'xdfhdr thsrth sr', NULL, 'ESTABLISHING IDENTIFIER EXISTENCE', 'rhdt ujuety', NULL, 'IMPROVING CODE READABILLITY', 'eyer hry6u er', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-09-26 07:59:33', '2023-09-26 07:59:33'),
(95, 21, 2, 'paragraph', 'In this approach, the name of a memory location is specified to access the data\r\npresent in that memory location. The direct approach to accessing data is the\r\nmost common and straightforward way of working with data in C. The direct\r\napproach, in a broader sense, simply means accessing and manipulating data\r\nthrough variable names without involving pointers or indirection', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-09-26 10:26:40', '2023-09-26 10:26:40'),
(96, 21, 19, 'programming example, practice', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', 'dgset hsrth', 'srth srth s', NULL, NULL, NULL, '2023-09-26 10:27:15', '2023-09-26 10:27:15'),
(97, 21, 7, 'image-4', NULL, NULL, NULL, NULL, NULL, NULL, 'image_4_3', 'ADVANTAGES', NULL, 'DIRECT APPROACH', NULL, 'SIMPLICITY', NULL, 'hrtd hrdth s', 'READABILITY', NULL, 'thjdtyj edtyj', 'DEREFERENCING', NULL, 'yrtyer', 'MEMORY MANAGEMENT', NULL, 'rtydr uer dthsr th', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-09-26 10:28:49', '2023-09-26 10:28:49'),
(98, 21, 7, 'image-4', NULL, NULL, NULL, NULL, NULL, NULL, 'image_4_3', 'DISADVANTAGES', NULL, 'DIRECT APPROACH', NULL, 'LIMITED FLEXIBILITY', NULL, 'dtyrt hdrth', 'LIMITED ABILITY TO SHARE DATA', NULL, 'rssfj ehrh srh', 'INEFFICIENCY IN LARGE DATA STRUCTURES', NULL, 'eg sergh se', 'LIMITED FUNCTIONALITY IN SOME ALGORITHMS', NULL, 'srth rths thrst gd', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-09-26 10:32:50', '2023-09-26 10:32:50'),
(99, 22, 2, 'paragraph', 'The indirection approach, also known as the indirect approach or the pointer approach, refers to the use of pointers to access the data indirectly.\r\nA pointer is a variable that holds the address of another variable and provides an alternative approach to accessing the contents of a memory location', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-09-26 10:33:55', '2023-09-26 10:33:55'),
(100, 22, 23, 'Text box', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'DANGLING POINTER CREATION#@#SPECIFIC POINTER CREATION#@#DEREFERENCING THE POINTER', NULL, '2023-09-26 10:48:26', '2023-09-26 10:48:26'),
(101, 22, 24, 'Single Button', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2023-09-26 11:06:19', '2023-09-26 11:06:19'),
(102, 22, 7, 'image-4', NULL, NULL, NULL, NULL, NULL, NULL, 'image_4_1', 'ADVANTAGES', NULL, 'INDIRECT APPROACH', NULL, NULL, 'EFFICIENT MEMORY MANAGEMENT', 'th srth r h', NULL, 'DATA SHARING & MANIPULATION', 'r thsr ht srt', NULL, 'COMPLEX DATA STRUCTURES', 'fsd hsrt hsr', NULL, 'RESOURCE EFFICIENCYd', 'e srth srth st', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-09-26 11:12:20', '2023-09-26 11:12:20'),
(103, 22, 7, 'image-4', NULL, NULL, NULL, NULL, NULL, NULL, 'image_4_1', 'DISADVANTAGES', NULL, 'INDIRECT APPROACH', NULL, NULL, 'COMPLEXITY & POTENTIAL FOR ERRORS', 'th rth sh srt e', NULL, 'SECURITY VULNERABILITIES', 'rht rth s', NULL, 'DIFFICULT DEBUGGING', 'rt hsr ths', NULL, 'POTENTIAL PERFORMANCE OVERHEAD', 'gsergh strdh', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-09-26 11:13:47', '2023-09-26 11:13:47'),
(104, 22, 5, 'image-2', NULL, NULL, NULL, NULL, NULL, NULL, 'image_2_4', NULL, NULL, NULL, NULL, 'DIRECT APPROACH', NULL, 'gbsrth srth  th', 'INDIRECTION APPROACH', NULL, 'tsthr strh srt', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-09-26 11:24:46', '2023-09-26 11:24:46'),
(105, 22, 18, 'gif file', NULL, NULL, 'uploads\\ibCV1695727940.webp', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-09-26 11:32:20', '2023-09-26 11:32:20'),
(106, 23, 2, 'paragraph', 'In the C language, the star (*) operator has been designed to perform multiple\r\noverloaded operations. The operation that it performs in a statement, depends\r\nupon the context of its usage.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-09-26 11:34:29', '2023-09-26 11:34:29'),
(107, 23, 6, 'image-3', NULL, NULL, NULL, NULL, NULL, NULL, 'image_3_1', 'USE CASES', NULL, NULL, NULL, 'MULTIPLICATION OPERATOR', NULL, 'srth srth srth th dr', 'POINTER DECLARATION', NULL, 'h srth srth r', 'INDIRECTION OPERATOR', NULL, 't rth ry', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-09-26 11:36:01', '2023-09-26 11:36:01'),
(108, 23, 19, 'programming example, practice', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', 'theth se sezhy et', 'ths ysrys e5ye sr', NULL, NULL, NULL, '2023-09-26 11:36:24', '2023-09-26 11:36:24'),
(109, 24, 2, 'paragraph', 'Memory capacity refers to the total size or capacity of the memory space that a program can utilize for storing data. Memory capacity is typically measured in bytes and is determined by the system\'s architecture and the limitations of the\r\nhardware and operating system. The memory capacity can vary depending on\r\nthe specific configuration of the computer system.\r\nMemory capacity helps in determining the maximum amount of memory that can\r\nbe requested and managed by the program without causing memory-related\r\nissues like memory leaks or buffer overflows. Understanding the memory\r\ncapacity is crucial for optimizing memory usage, ensuring efficient allocation', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-09-26 11:37:40', '2023-09-26 11:37:40'),
(110, 24, 23, 'Text box', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '16B#@#32B#@#64B#@#16KB#@#32KB#@#64KB', NULL, '2023-09-26 11:39:17', '2023-09-26 11:39:17'),
(111, 24, 7, 'image-4', NULL, NULL, NULL, NULL, NULL, NULL, 'image_4_1', 'IMPORTANCE', NULL, 'MEMORY ADDRESS', NULL, NULL, 'IDENTIFICATION', 'rgstrh rd', NULL, 'DATA ACCESS', 'dryuj try', NULL, 'MEMORY MANAGEMENT', 'h ryhu rty', NULL, 'POINTER MANIPULATION', 'dryj udry', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-09-26 11:41:04', '2023-09-26 11:41:04'),
(112, 25, 2, 'paragraph', 'Pointers can be logically represented as arrows pointing to boxes. This\r\nrepresentation helps visualize the relationship between pointers and the data they\r\npoint to.\r\nImagine a box that represents a variable (or a memory location). A pointer can be\r\nrepresented by an arrow pointing to that box. The arrow indicates the connection\r\nbetween the pointer and the memory address it points to. If there are multiple\r\npointers pointing', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-09-26 11:42:44', '2023-09-26 11:42:44'),
(113, 25, 19, 'programming example, practice', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'CHAR POINTER,INT POINTER,FLOAT POINTER', 'grth dr h,rthys r,ryrey', 'rth urtu,hrh ru hr,y r5y r', NULL, NULL, NULL, '2023-09-26 11:43:38', '2023-09-26 11:43:38'),
(114, 26, 2, 'paragraph', 'Pointer arithmetic is a fundamental feature of the C programming language,\r\nand it was designed to provide low-level memory manipulation capabilities.\r\nThis allows direct access to memory locations, which can be faster than using\r\narray indexing or other higher-level abstractions.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-09-26 12:02:57', '2023-09-26 12:02:57'),
(115, 26, 21, 'image, programming example, practice', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'tht thdrt hdrth,grg set,ydr hdry er,y55 ery er,drhys r w', 'srtg drh gg,tes5 yhre,ty55yeru,rhreu r,rt rdt dr fthtd', 'ADDITION,SUBTRACTION,INCREMENT,DECREMENT,DIFFERENCE BETWEEN TWO POINTERS', NULL, NULL, '2023-09-26 12:05:26', '2023-09-26 12:05:26'),
(116, 27, 2, 'paragraph', 'In C, pointer comparison refers to the comparison of two pointers to determine\r\ntheir relationship with each other. It allows you to compare whether two\r\npointers point to the same memory location, or point to different memory\r\nlocations, or determine their relative order in memory.\r\nIt\'s important to use pointer comparison operations with caution and ensure\r\nthat the pointers being compared are properly initialized and point to valid\r\nmemory locations. Comparing unrelated or uninitialized pointer', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-09-27 04:04:57', '2023-09-27 04:04:57'),
(117, 27, 6, 'image-3', NULL, NULL, NULL, NULL, NULL, NULL, 'image_3_1', 'OPERATIONS', NULL, NULL, NULL, 'EQUALITY OPERATOR', NULL, 'gdty shrth sr', 'INEQUALITY OPERATOR', NULL, 'gerg aeg ser gert rre', 'RELATIONAL OPERATORS', NULL, 'ret at tertg aery ae aer', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-09-27 04:06:23', '2023-09-27 04:06:23'),
(118, 27, 19, 'programming example, practice', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ',,', 'srgts eyhse,ytsr yrsr t,erts ey s', 'wsse tyh sey,fiklgyuilkc tyuky sethe,rst eruysruyjuk', NULL, NULL, NULL, '2023-09-27 04:07:20', '2023-09-27 04:07:20'),
(119, 27, 5, 'image-2', NULL, NULL, NULL, NULL, NULL, NULL, 'image_2_4', NULL, NULL, NULL, NULL, 'REGULAR COMPARISON', NULL, 'gh srdjstdkjmtuj', 'POINTER COMPARISON', NULL, 'scf eryh sru srur r5u4w tgt', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-09-27 04:08:26', '2023-09-27 04:08:26'),
(120, 27, 18, 'gif file', NULL, NULL, 'uploads\\fMwF1695787730.webp', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-09-27 04:08:50', '2023-09-27 04:08:50'),
(121, 28, 2, 'paragraph', 'In C, the size of a pointer depends on the underlying architecture and the data\r\nmodel being used. In most systems, a pointer typically is allocated 2 bytes (16\r\nbits) of memory. You can determine the size of a pointer on your system using\r\nthe `sizeof` operator\r\nIt is important to note that the size of a pointer remains the same, regardless of\r\nthe data type it points to. Whether it is a pointer to an integer, or a pointer to a\r\ncharacter, o', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-09-27 04:09:41', '2023-09-27 04:09:41'),
(122, 28, 18, 'gif file', NULL, NULL, 'uploads\\YcuZ1695787799.webp', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-09-27 04:09:59', '2023-09-27 04:09:59'),
(123, 29, 2, 'paragraph', 'In the context of programming languages, including C, a parameter refers to a\r\nspecial kind of variable that is used to pass data to a function. It acts as a\r\nplaceholder within the function\'s definition, representing the values that need\r\nto be supplied when the function is called.\r\nWhen defining a function in C, you can specify one or more parameters within\r\nparentheses after the function name. These parameters define the type and\r\nname of the data that the function ex', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-09-27 04:12:18', '2023-09-27 04:12:18'),
(124, 29, 5, 'image-2', NULL, NULL, NULL, NULL, NULL, NULL, 'image_2_3', 'IMPORTANCE OF PARAMETER', NULL, NULL, NULL, 'DATA TRANSFER', NULL, 'thdruj sryjrsyj fyj dfy', 'REUSABILITY', NULL, 'th hrthnh rth srrrrrrhjdf', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-09-27 04:13:20', '2023-09-27 04:13:20'),
(125, 29, 1, 'heading', 'PASS BY VALUE PARAMETER PASSING TECHNIQUE', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-09-27 04:33:34', '2023-09-27 04:33:34'),
(126, 29, 18, 'gif file', NULL, NULL, 'uploads\\z77w1695789901.webp', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-09-27 04:45:01', '2023-09-27 04:45:01'),
(127, 29, 24, 'Single Button', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, '2023-09-27 04:47:06', '2023-09-27 04:47:06'),
(128, 29, 7, 'image-4', NULL, NULL, NULL, NULL, NULL, NULL, 'image_4_3', NULL, NULL, 'ADVANTAGES', NULL, 'DATA INTEGRITY', NULL, 'tghrhdy tyj dty', 'PREDICTABLE BEHAVIOR', NULL, 'ethydr uj eu6jj ud', 'SIMPLICITY', NULL, 'fh drhj rhyd hd rhdr', 'SAFETY', NULL, 'th drjhnx rujxr su 6', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-09-27 04:51:59', '2023-09-27 04:51:59'),
(129, 29, 7, 'image-4', NULL, NULL, NULL, NULL, NULL, NULL, 'image_4_3', NULL, NULL, 'DISADVANTAGES', NULL, 'PERFORMANCE OVERHEAD', NULL, 'gvzgd gsehs rth', 'INEFFICIENT FOR LARGE DATA', NULL, 'uio;iktuorf6tyh srt yser', 'INABILITY TO MODIFY ORIGINAL VALUES', NULL, 'r6usru et g', 'LACK OF DIRECT ACCESS', NULL, 'etj  rujyti sty', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-09-27 04:57:23', '2023-09-27 04:57:23'),
(130, 30, 2, 'paragraph', 'In C, \"pass by reference\" is a parameter passing technique that allows a called function\r\nto modify the original values of variables of the calling function, by passing their\r\nmemory addresses. In this technique, instead of passing the actual values of variables\r\nto a called function, you pass the addresses of those variables. By using pointers, the\r\ncalled function', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-09-27 04:57:56', '2023-09-27 04:57:56'),
(131, 30, 18, 'gif file', NULL, NULL, 'uploads\\YPso1695790688.webp', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-09-27 04:58:08', '2023-09-27 04:58:08'),
(132, 30, 24, 'Single Button', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, '2023-09-27 04:59:28', '2023-09-27 04:59:28'),
(133, 30, 7, 'image-4', NULL, NULL, NULL, NULL, NULL, NULL, 'image_4_3', NULL, NULL, 'ADVANTAGES', NULL, 'EFFICIENT MEMORY USAGE', NULL, 'thry jdtyj tid', 'DIRECT MODIFICATION', NULL, 'j dtyjdty', 'REDUCED OVERHEAD', NULL, 'jryu dtyj dty', 'SHARING DATA', NULL, 'ery srtu srtuj sry', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-09-27 05:06:21', '2023-09-27 05:06:21'),
(134, 30, 7, 'image-4', NULL, NULL, NULL, NULL, NULL, NULL, 'image_4_3', NULL, NULL, 'DISADVANTAGES', NULL, 'UNINTENDED MODIFICATIONS', NULL, 'ry hdrf', 'LACK OF ENCAPSULATION', NULL, 'hd fhd', 'INCREASED COMPLEXITY', NULL, 'h d ry', 'REDUCED READABILITY', NULL, 'eh srt hstr', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-09-27 05:07:41', '2023-09-27 05:07:41'),
(135, 30, 5, 'image-2', NULL, NULL, NULL, NULL, NULL, NULL, 'image_2_4', NULL, NULL, NULL, NULL, 'PASS BY VALUE', NULL, 'e 5yhsr tusru r', 'PASS BY REFERENCE', NULL, 'ur sr urdu jr', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-09-27 05:08:27', '2023-09-27 05:08:27'),
(136, 30, 18, 'gif file', NULL, NULL, 'uploads\\FWaA1695791328.webp', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-09-27 05:08:48', '2023-09-27 05:08:48'),
(137, 31, 2, 'paragraph', 'In C, arrays are implemented as contiguous blocks of memory, and array\r\nvariables are essentially pointers to the first element of the array. By using\r\npointer arithmetic, programmers can navigate through the array elements\r\ndirectly, allowing for efficient and flexible array manipulatio', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-09-27 05:09:15', '2023-09-27 05:09:15'),
(138, 31, 8, 'image-5', NULL, NULL, NULL, NULL, NULL, NULL, 'image_5_2', 'KEY ASPECTS', NULL, NULL, NULL, 'ADDITION', NULL, 'yj dy jt', 'SUBTRACTION', NULL, 'h srj dry', 'SCALING', NULL, 'd rth drt h', 'ACCESS OPTIMIZATION', NULL, 'ft hjdf yjd', 'ACCESSING ARRAY ELEMENTS', 'sh srt hsrtj hdfy', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-09-27 05:10:32', '2023-09-27 05:10:32'),
(139, 31, 7, 'image-4', NULL, NULL, NULL, NULL, NULL, NULL, 'image_4_3', NULL, NULL, 'LIMITATIONS', NULL, 'LACK OF BOUNDS CHECKING', NULL, 'ho srth sritheso', 'LIMITED SUPPORT FOR MULTIDIMENSIONAL ARRAYS', NULL, 'jb gagiguwoa i er', 'POINTER ARITHMETIC COMPLEXITY', NULL, 'e eoirugoe', 'DEBUGGING CHALLENGES', NULL, 'rhg pdsijhosi', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-09-27 05:11:33', '2023-09-27 05:11:33'),
(140, 31, 1, 'heading', 'ACCESSING 1-D ARRAY USING POINTERS', 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-09-27 05:24:58', '2023-09-27 05:24:58'),
(141, 31, 20, 'programming example with VIDEO, practice', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'uploads/KR5G1695792382.webp,uploads/pXeP1695792382.webp,uploads/slGL1695792382.webp,uploads/ZEy51695792382.webp,uploads/LOLv1695792382.webp', 'trh srhjry,aeth seh th,h eth eth etgt,seth set ttt,ethrst srth  srt', NULL, NULL, NULL, '2023-09-27 05:26:22', '2023-09-27 05:26:22'),
(142, 32, 2, 'paragraph', 'Arrays are fixed-size data structures with contiguous memory allocation, and\r\ntheir size is determined at compile time. Pointers, on the other hand, are\r\nvariables that store memory addresses and can point to dynamically allocated\r\nmemory or existing variables. They offer more flexibility and support pointer', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-09-27 05:27:51', '2023-09-27 05:27:51'),
(143, 32, 19, 'programming example, practice', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'CHAR POINTER,INT POINTER,FLAOT POINTER', 'tdhfdtu dr rh d,RESJ HESUGO;,sjig udgh pseyh gdfg', 'ykijs rydk d,g pirgaeihg ihoprd,g aeryg uaeihi', NULL, NULL, NULL, '2023-09-27 05:29:29', '2023-09-27 05:29:29'),
(144, 32, 5, 'image-2', NULL, NULL, NULL, NULL, NULL, NULL, 'image_2_4', NULL, NULL, NULL, NULL, 'ARRAY VARIABLE', NULL, 'dgsrtj dry jdt j', 'POINTER VARIABLE', NULL, 'sdhry srtu dty drti', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-09-27 05:30:46', '2023-09-27 05:30:46'),
(145, 32, 18, 'gif file', NULL, NULL, 'uploads\\8EZy1695792662.webp', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-09-27 05:31:02', '2023-09-27 05:31:02'),
(146, 33, 2, 'paragraph', 'Passing an array to a function, it is done so by passing the memory address of\r\nthe first element of the array. In C, this memory address is represented by a\r\npointer to the array\'s data type. Consequently, the function can use the\r\nreceived pointer to access and modify the elements of the array directly in the', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-09-27 05:32:25', '2023-09-27 05:32:25'),
(147, 33, 6, 'image-3', NULL, NULL, NULL, NULL, NULL, NULL, 'image_3_1', 'ADVANTAGES', NULL, NULL, NULL, 'EFFICIENT MEMORY USAGE', NULL, 'dthjdfy jdtyj y d d', 'ACCESS TO ORIGINAL ARRAY', NULL, 'fjg usirsehrp9o o8rty', 'CODE REUSABILITY', NULL, 'a7rg lai7erliehgsr', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-09-27 05:33:47', '2023-09-27 05:33:47'),
(148, 33, 1, 'heading', 'THE ACTUAL PERSPECTIVE', 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-09-27 05:34:12', '2023-09-27 05:34:12'),
(149, 33, 22, 'buttons', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'dfgdsg#@#ergeb#@#bhbtgb#@#hbthzss#@#hththt#@#thrshsrt', NULL, '2023-09-28 04:25:42', '2023-09-28 04:25:42');

-- --------------------------------------------------------

--
-- Table structure for table `ebook_modules`
--

CREATE TABLE `ebook_modules` (
  `id` int(11) NOT NULL,
  `ebook_id` int(11) DEFAULT NULL,
  `module_title` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ebook_modules`
--

INSERT INTO `ebook_modules` (`id`, `ebook_id`, `module_title`, `description`, `image`, `created_at`, `updated_at`) VALUES
(1, 1, 'sgsgg', 'sgsg', 'uploads/dDc51685353591.jpg', '2023-05-29 09:46:31', '2023-05-29 09:46:31'),
(2, 1, 'sgasg', 'sdsg', 'uploads/ffYc1685353591.jpg', '2023-05-29 09:46:31', '2023-05-29 09:46:31'),
(5, 3, 'string', 'fsfsdf', NULL, '2023-07-06 06:59:18', '2023-07-06 06:59:18'),
(6, 4, 'DIGITAL BOOK BEGINS', 'adffs', NULL, '2023-07-08 07:53:45', '2023-07-08 07:53:45'),
(7, 4, 'NEW TOPIC BEGINS', 'hsehste', NULL, '2023-07-08 07:53:45', '2023-07-08 07:53:45'),
(8, 5, 'module1', 'thsrtg', NULL, '2023-09-08 06:30:24', '2023-09-08 06:30:24'),
(9, 5, 'module2', 'segyserg', NULL, '2023-09-08 06:30:24', '2023-09-08 06:30:24'),
(10, 6, 'Pointers', 'Pointers (pointer variables) are special variables that are used to store addresses rather than values.', NULL, '2023-09-18 04:28:54', '2023-09-18 04:28:54'),
(11, 7, 'Pointers', 'fas baeg sesy4g se4ea', NULL, '2023-09-26 07:52:24', '2023-09-26 07:52:24');

-- --------------------------------------------------------

--
-- Table structure for table `ebook_sections`
--

CREATE TABLE `ebook_sections` (
  `id` int(11) NOT NULL,
  `ebook_id` int(11) NOT NULL,
  `module_id` int(11) NOT NULL,
  `section_title` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ebook_sections`
--

INSERT INTO `ebook_sections` (`id`, `ebook_id`, `module_id`, `section_title`, `created_at`, `updated_at`) VALUES
(2, 1, 1, 'array', '2023-07-08 04:19:42', '2023-07-08 04:19:42'),
(3, 1, 1, 'string', '2023-07-08 04:19:42', '2023-07-08 04:19:42'),
(4, 4, 6, 'SECONDARY MEMORY', '2023-07-08 08:11:10', '2023-07-08 08:11:10'),
(5, 4, 6, 'SECONDARY MEMORY – ADVANTAGES & DISADVANTAGES', '2023-07-08 08:11:11', '2023-07-08 08:11:11'),
(6, 4, 6, 'PRIMARY MEMORY', '2023-07-08 08:11:11', '2023-07-08 08:11:11'),
(7, 4, 6, 'PRIMARY MEMORY – ADVANTAGES & DISADVANTAGES', '2023-07-08 08:11:11', '2023-07-08 08:11:11'),
(8, 4, 7, 'FILES - LIBRARY FUNCTIONS IN C', '2023-07-12 09:35:53', '2023-07-12 09:35:53'),
(9, 4, 7, 'Image', '2023-07-17 07:20:03', '2023-07-17 07:20:03'),
(10, 5, 8, 'title1', '2023-09-08 06:31:24', '2023-09-08 06:31:24'),
(11, 5, 8, 'title2', '2023-09-08 06:31:24', '2023-09-08 06:31:24'),
(12, 4, 7, 'Table', '2023-09-11 09:56:10', '2023-09-11 09:56:10'),
(13, 6, 10, 'DECLARATION STATEMENTS', '2023-09-18 04:35:47', '2023-09-18 04:35:47'),
(14, 6, 10, 'DIRECT APPROACH TO ACCESSING THE DATA', '2023-09-18 04:35:47', '2023-09-18 04:35:47'),
(15, 6, 10, 'INDIRECT APPROACH TO ACCESSING THE DATA', '2023-09-18 04:35:47', '2023-09-18 04:35:47'),
(16, 6, 10, 'IMPLICITLY POLYMORPHIC * OPERATOR IN C', '2023-09-18 07:16:52', '2023-09-18 07:16:52'),
(17, 6, 10, 'MEMORY CAPACITY AND ADDRESS RANGE', '2023-09-18 07:20:57', '2023-09-18 07:20:57'),
(18, 6, 10, 'POINTER BASED ARRAY ACCESS', '2023-09-18 11:39:41', '2023-09-18 11:39:41'),
(19, 6, 10, 'POINTER LOGICAL REPRESENTATION', '2023-09-20 09:39:29', '2023-09-20 09:39:29'),
(20, 7, 11, 'DECLARATION STATEMENTS', '2023-09-26 07:53:44', '2023-09-26 07:53:44'),
(21, 7, 11, 'DIRECT APPROACH TO ACCESSING THE DATA', '2023-09-26 10:26:02', '2023-09-26 10:26:02'),
(22, 7, 11, 'INDIRECT APPROACH TO ACCESSING THE DATA', '2023-09-26 10:26:02', '2023-09-26 10:26:02'),
(23, 7, 11, 'IMPLICITLY POLYMORPHIC * OPERATOR IN C', '2023-09-26 11:33:17', '2023-09-26 11:33:17'),
(24, 7, 11, 'MEMORY CAPACITY AND ADDRESS RANGE', '2023-09-26 11:33:17', '2023-09-26 11:33:17'),
(25, 7, 11, 'POINTER LOGICAL REPRESENTATION', '2023-09-26 11:33:17', '2023-09-26 11:33:17'),
(26, 7, 11, 'POINTER ARITHMETIC OPERATIONS', '2023-09-26 12:02:21', '2023-09-26 12:02:21'),
(27, 7, 11, 'COMPARISON OF POINTER VARIABLES', '2023-09-26 12:02:21', '2023-09-26 12:02:21'),
(28, 7, 11, 'SIZE OF POINTER VARIABLES IN C LANGUAGE', '2023-09-26 12:02:21', '2023-09-26 12:02:21'),
(29, 7, 11, 'PARAMETER PASSING TECHNIQUE', '2023-09-27 04:11:17', '2023-09-27 04:11:17'),
(30, 7, 11, 'PASS BY REFERENCE PARAMETER PASSING TECHNIQUE', '2023-09-27 04:11:17', '2023-09-27 04:11:17'),
(31, 7, 11, 'POINTER BASED ARRAY ACCESS', '2023-09-27 04:11:17', '2023-09-27 04:11:17'),
(32, 7, 11, 'DIFFERENCE BETWEEN AN ARRAY AND A POINTER', '2023-09-27 04:11:17', '2023-09-27 04:11:17'),
(33, 7, 11, 'PASSING AN ARRAY TO A FUNCTION', '2023-09-27 04:11:17', '2023-09-27 04:11:17');

-- --------------------------------------------------------

--
-- Table structure for table `elements`
--

CREATE TABLE `elements` (
  `id` int(11) NOT NULL,
  `element_name` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `elements`
--

INSERT INTO `elements` (`id`, `element_name`, `created_at`, `updated_at`) VALUES
(1, 'heading', '2023-07-06 09:00:42', '2023-07-06 09:00:42'),
(2, 'paragraph', '2023-07-06 09:00:42', '2023-07-06 09:00:42'),
(3, 'code', '2023-07-08 05:08:18', '2023-07-08 05:08:18'),
(4, 'image', '2023-07-08 09:37:07', '2023-07-08 09:37:07'),
(5, 'image-2', '2023-07-08 09:37:07', '2023-07-08 09:37:07'),
(6, 'image-3', '2023-07-08 09:46:29', '2023-07-08 09:46:29'),
(7, 'image-4', '2023-07-08 10:46:20', '2023-07-08 10:46:20'),
(8, 'image-5', '2023-07-08 10:46:20', '2023-07-08 10:46:20'),
(9, 'image-6', '2023-07-08 10:46:34', '2023-07-08 10:46:34'),
(10, 'image-7', '2023-07-08 10:46:34', '2023-07-08 10:46:34'),
(11, 'image-8', '2023-07-08 10:47:00', '2023-07-08 10:47:00'),
(13, 'image-10', '2023-07-08 10:47:15', '2023-07-08 10:47:15'),
(14, 'list', '2023-07-12 09:29:42', '2023-07-12 09:29:42'),
(15, 'examples', '2023-09-08 07:46:34', '2023-09-08 07:46:34'),
(17, 'table', '2023-09-08 07:53:36', '2023-09-08 07:53:36'),
(18, 'gif file', '2023-09-18 11:01:23', '2023-09-18 11:01:23'),
(19, 'programming example, practice', '2023-09-20 09:28:44', '2023-09-20 09:28:44'),
(20, 'programming example with VIDEO, practice', '2023-09-20 11:57:06', '2023-09-20 11:57:06'),
(21, 'image, programming example, practice', '2023-09-21 05:22:04', '2023-09-21 05:22:04'),
(22, 'buttons', '2023-09-22 09:49:44', '2023-09-22 09:49:44'),
(23, 'Text box', '2023-09-26 10:37:26', '2023-09-26 10:37:26'),
(24, 'Single Button', '2023-09-26 10:55:09', '2023-09-26 10:55:09');

-- --------------------------------------------------------

--
-- Table structure for table `enrolled_courses`
--

CREATE TABLE `enrolled_courses` (
  `id` int(11) NOT NULL,
  `student_id` int(11) DEFAULT NULL,
  `course_id` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `enrolled_courses`
--

INSERT INTO `enrolled_courses` (`id`, `student_id`, `course_id`, `created_at`, `updated_at`) VALUES
(1, 22, 22, '2023-05-24 04:32:16', '2023-05-24 04:32:16'),
(2, 24, 1, '2023-05-24 05:16:42', '2023-05-24 05:16:42'),
(3, 25, 25, '2023-05-24 05:29:55', '2023-05-24 05:29:55'),
(4, 25, 1, '2023-05-24 05:30:23', '2023-05-24 05:30:23'),
(5, 24, 24, '2023-05-24 05:42:20', '2023-05-24 05:42:20'),
(6, 24, 24, '2023-05-24 05:48:43', '2023-05-24 05:48:43'),
(7, 24, 24, '2023-05-24 06:01:00', '2023-05-24 06:01:00'),
(8, 29, 2, '2023-05-24 07:15:50', '2023-05-24 07:15:50'),
(9, 29, 29, '2023-05-24 07:38:02', '2023-05-24 07:38:02'),
(10, 29, 29, '2023-05-24 07:38:30', '2023-05-24 07:38:30'),
(11, 29, 29, '2023-05-24 07:42:23', '2023-05-24 07:42:23'),
(12, 29, 29, '2023-05-24 07:45:42', '2023-05-24 07:45:42'),
(13, 22, 22, '2023-05-24 07:46:11', '2023-05-24 07:46:11'),
(14, 22, 22, '2023-05-24 07:46:23', '2023-05-24 07:46:23'),
(15, 29, 29, '2023-05-25 06:22:51', '2023-05-25 06:22:51'),
(16, 22, 2, '2023-05-25 06:46:55', '2023-05-25 06:46:55'),
(17, 29, 29, '2023-06-30 17:50:37', '2023-06-30 17:50:37'),
(18, 29, 29, '2023-06-30 17:50:40', '2023-06-30 17:50:40'),
(19, 29, 29, '2023-07-01 05:53:33', '2023-07-01 05:53:33'),
(20, 29, 29, '2023-07-01 05:53:53', '2023-07-01 05:53:53'),
(21, 31, 2, '2023-07-04 07:22:05', '2023-07-04 07:22:05'),
(22, 32, 1, '2023-07-04 07:54:34', '2023-07-04 07:54:34'),
(23, 32, 32, '2023-07-04 08:14:39', '2023-07-04 08:14:39'),
(24, 22, 22, '2023-07-05 11:27:13', '2023-07-05 11:27:13'),
(25, 31, 31, '2023-10-12 04:33:46', '2023-10-12 04:33:46'),
(26, 33, 1, '2023-10-12 05:13:57', '2023-10-12 05:13:57'),
(27, 33, 2, '2023-10-12 05:20:57', '2023-10-12 05:20:57'),
(28, 31, 1, '2023-10-25 18:13:52', '2023-10-25 18:13:52');

-- --------------------------------------------------------

--
-- Table structure for table `forum_answers`
--

CREATE TABLE `forum_answers` (
  `id` int(11) NOT NULL,
  `forum_question_id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `answer` text NOT NULL,
  `created_at` varchar(255) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `forum_answers`
--

INSERT INTO `forum_answers` (`id`, `forum_question_id`, `student_id`, `answer`, `created_at`, `updated_at`) VALUES
(3, 2, 29, 'By adding lower version depencies to JVM.', '2023-05-25 11:50:30', '2023-05-25 06:20:30'),
(4, 2, 29, 'Like XYZ', '2023-07-01 11:25:12', '2023-07-01 05:55:12'),
(5, 3, 31, 'Yes, the program will successfully execute if written so. Because, in Java, there is no specific rule for the order of specifiers', '2023-07-04 13:50:46', '2023-07-04 08:20:46'),
(6, 4, 32, 'An empty interface in Java is referred to as a Marker interface. Serializable and Cloneable are some famous examples of Marker Interface.', '2023-07-04 13:52:13', '2023-07-04 08:22:13');

-- --------------------------------------------------------

--
-- Table structure for table `forum_questions`
--

CREATE TABLE `forum_questions` (
  `id` int(11) NOT NULL,
  `question` text NOT NULL,
  `student_id` int(11) NOT NULL,
  `created_at` varchar(255) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `forum_questions`
--

INSERT INTO `forum_questions` (`id`, `question`, `student_id`, `created_at`, `updated_at`) VALUES
(2, 'How to execute the older version jave code on new JVM?', 29, '2023-05-25 11:49:47', '2023-05-25 06:19:47'),
(3, 'Will the program run if we write static public void main?', 32, '2023-07-04 13:49:19', '2023-07-04 08:19:19'),
(4, 'What is a Marker Interface?', 31, '2023-07-04 13:51:50', '2023-07-04 08:21:50'),
(5, 'what is physics', 42, '2023-10-26 13:17:52', '2023-10-26 07:47:52');

-- --------------------------------------------------------

--
-- Table structure for table `internships`
--

CREATE TABLE `internships` (
  `id` int(11) NOT NULL,
  `internship_title` varchar(255) NOT NULL,
  `internship_image` char(255) DEFAULT NULL,
  `stipend` varchar(255) DEFAULT NULL,
  `location` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `criteria` text DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `internships`
--

INSERT INTO `internships` (`id`, `internship_title`, `internship_image`, `stipend`, `location`, `description`, `criteria`, `created_by`, `created_at`, `updated_at`) VALUES
(1, 'Java developer intern', 'uploads/Q6hw1684906782.png', NULL, NULL, 'Test', 'Should be from BE [CS] educational background\r\nMust know basics of Java', 2, '2023-05-24 05:39:42', '2023-05-24 05:39:42'),
(2, 'Python Bootcamp', 'uploads/J0EV1684993808.webp', NULL, NULL, 'Pyhton Basics', 'Python Course', 2, '2023-05-25 05:50:08', '2023-05-25 05:50:08');

-- --------------------------------------------------------

--
-- Table structure for table `internship_applications`
--

CREATE TABLE `internship_applications` (
  `id` int(11) NOT NULL,
  `internship_id` int(11) DEFAULT NULL,
  `student_id` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `internship_applications`
--

INSERT INTO `internship_applications` (`id`, `internship_id`, `student_id`, `created_at`, `updated_at`) VALUES
(1, 1, 24, '2023-05-24 05:43:44', '2023-05-24 05:43:44'),
(2, 2, 29, '2023-05-25 06:12:05', '2023-05-25 06:12:05'),
(3, 1, 29, '2023-07-01 05:51:12', '2023-07-01 05:51:12'),
(4, 2, 22, '2023-07-05 11:22:54', '2023-07-05 11:22:54'),
(5, 1, 31, '2023-11-06 11:05:34', '2023-11-06 11:05:34');

-- --------------------------------------------------------

--
-- Table structure for table `internship_processes`
--

CREATE TABLE `internship_processes` (
  `id` int(11) NOT NULL,
  `student_id` varchar(255) NOT NULL,
  `internship_id` varchar(255) NOT NULL,
  `task_id` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `internship_processes`
--

INSERT INTO `internship_processes` (`id`, `student_id`, `internship_id`, `task_id`, `status`, `created_at`, `updated_at`) VALUES
(1, '24', '1', '1', '2', '2023-05-24 05:43:53', '2023-05-24 05:44:05'),
(2, '29', '2', '2', '2', '2023-05-25 06:12:27', '2023-05-25 06:13:27'),
(3, '29', '2', '3', '2', '2023-05-25 06:14:17', '2023-05-25 06:14:23'),
(4, '29', '1', '1', '2', '2023-07-01 05:51:21', '2023-07-01 05:51:30'),
(5, '22', '2', '2', '2', '2023-07-05 11:23:20', '2023-07-05 11:23:48'),
(6, '31', '1', '1', '2', '2023-11-06 11:05:54', '2023-11-06 11:06:40');

-- --------------------------------------------------------

--
-- Table structure for table `internship_tasks`
--

CREATE TABLE `internship_tasks` (
  `id` int(11) NOT NULL,
  `internship_id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `lab_code` varchar(255) NOT NULL,
  `duration` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `internship_tasks`
--

INSERT INTO `internship_tasks` (`id`, `internship_id`, `name`, `description`, `lab_code`, `duration`, `created_at`, `updated_at`) VALUES
(1, '1', 'Test 1', 'Test', '1', '1', '2023-05-24 05:40:58', '2023-05-24 05:40:58'),
(2, '2', 'Task 1', 'Python', '3z9kxfhwy', '30', '2023-05-25 06:09:16', '2023-05-25 06:09:16'),
(3, '2', 'Task 2', 'Python task 2', '3z9kxgwyr', '20', '2023-05-25 06:10:41', '2023-05-25 06:10:41');

-- --------------------------------------------------------

--
-- Table structure for table `job_applications`
--

CREATE TABLE `job_applications` (
  `id` int(11) NOT NULL,
  `job_id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `job_applications`
--

INSERT INTO `job_applications` (`id`, `job_id`, `student_id`, `created_at`, `updated_at`) VALUES
(3, 2, 22, '2023-07-05 11:26:07', '2023-07-05 11:26:07');

-- --------------------------------------------------------

--
-- Table structure for table `job_details`
--

CREATE TABLE `job_details` (
  `id` int(11) NOT NULL,
  `job_title` varchar(255) DEFAULT NULL,
  `job_image` varchar(255) DEFAULT NULL,
  `annual_ctc` varchar(255) DEFAULT NULL,
  `location` varchar(255) DEFAULT NULL,
  `criteria` text DEFAULT NULL,
  `description` text DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `job_details`
--

INSERT INTO `job_details` (`id`, `job_title`, `job_image`, `annual_ctc`, `location`, `criteria`, `description`, `created_by`, `created_at`, `updated_at`) VALUES
(2, 'Python Developer', 'uploads/kNZz1684915209.webp', '10', 'Bengaluru', 'Python course completion', 'Python', 5, '2023-05-24 08:00:09', '2023-05-24 08:00:09');

-- --------------------------------------------------------

--
-- Table structure for table `labs`
--

CREATE TABLE `labs` (
  `id` int(11) NOT NULL,
  `course_id` varchar(255) DEFAULT NULL,
  `section_id` varchar(255) DEFAULT NULL,
  `video_id` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `code` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `labs`
--

INSERT INTO `labs` (`id`, `course_id`, `section_id`, `video_id`, `name`, `code`, `created_at`, `updated_at`) VALUES
(1, '1', '1', '1', 'test', '1', '2023-05-24 05:49:22', '2023-05-24 05:49:22'),
(2, '2', '2', '2', 'Print Command', '3z9h2y7gu', '2023-05-24 07:12:07', '2023-05-24 07:12:07'),
(3, '1', '1', '1', 'dfgadgad', 'hthtr555', '2023-11-06 10:26:17', '2023-11-06 10:26:17');

-- --------------------------------------------------------

--
-- Table structure for table `markers`
--

CREATE TABLE `markers` (
  `id` int(11) NOT NULL,
  `video_id` int(11) NOT NULL,
  `note` text DEFAULT NULL,
  `time` varchar(255) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `markers`
--

INSERT INTO `markers` (`id`, `video_id`, `note`, `time`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 1, 'Type of strings', '32.329961', 29, '2023-06-09 09:24:03', '2023-06-09 09:24:03'),
(2, 1, 'Strings in C', '70.986672', 29, '2023-06-09 12:09:44', '2023-06-09 12:09:44'),
(3, 1, 'tech questions', '116.470752', 29, '2023-07-01 05:56:38', '2023-07-01 05:56:38'),
(4, 1, 'job aspirants', '92.235134', 22, '2023-07-05 11:20:25', '2023-07-05 11:20:25');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(11) NOT NULL,
  `sender_id` int(11) DEFAULT NULL,
  `receiver_id` int(11) DEFAULT NULL,
  `message` text DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `sender_id`, `receiver_id`, `message`, `updated_at`, `created_at`) VALUES
(8, 29, 3, 'What is Python?', '2023-05-24 07:29:00', '2023-05-24 07:29:00'),
(9, 3, 29, 'Python is a popular programming language.\r\nPython can be used on a server to create web applications.', '2023-05-24 07:29:00', '2023-05-24 07:29:00'),
(10, 29, 3, 'What is Python?', '2023-06-30 03:00:54', '2023-06-30 03:00:54'),
(11, 3, 29, 'Python is a popular programming language.\r\nPython can be used on a server to create web applications.', '2023-06-30 03:00:54', '2023-06-30 03:00:54'),
(12, 29, 3, 'What is Python?', '2023-07-01 05:49:37', '2023-07-01 05:49:37'),
(13, 3, 29, 'Python is a popular programming language.\r\nPython can be used on a server to create web applications.', '2023-07-01 05:49:37', '2023-07-01 05:49:37'),
(14, 31, 3, 'What is an Interpreted language?', '2023-07-04 07:30:48', '2023-07-04 07:30:48'),
(15, 3, 31, 'An Interpreted language executes its statements line by line. Languages such as Python, Javascript, R, PHP, and Ruby are prime examples of Interpreted languages. Programs written in an interpreted language runs directly from the source code, with no intermediary compilation step.', '2023-07-04 07:34:39', '2023-07-04 07:34:39'),
(16, 31, 3, 'What is Python?', '2023-07-04 07:39:28', '2023-07-04 07:39:28'),
(17, 3, 31, 'Python is a popular programming language.\r\nPython can be used on a server to create web applications.', '2023-07-04 07:39:28', '2023-07-04 07:39:28'),
(18, 32, 23, 'what is the difference between Object file vs Executable file', '2023-07-04 07:58:36', '2023-07-04 07:58:36'),
(19, 23, 32, 'The main difference between object file and executable file is that an object file is a file generated after compiling the source code while an executable file is a file generated after linking a set of object files together using a linker.', '2023-07-04 08:02:07', '2023-07-04 08:02:07'),
(20, 32, 23, 'What is Object File', '2023-07-04 08:27:46', '2023-07-04 08:27:46'),
(21, 23, 32, 'First of all, C program is a set of instructions written in C programming language to perform a specific task. This program is called the source code. The programmer can read and understand the source code, but the CPU does not understand it. Therefore, it is necessary to convert the source code into a machine-understandable format. An object code is generated after compiling the source code.', '2023-07-04 08:28:16', '2023-07-04 08:28:16'),
(22, 22, 3, 'What is Python?', '2023-07-05 11:21:39', '2023-07-05 11:21:39'),
(23, 3, 22, 'Python is a popular programming language.\r\nPython can be used on a server to create web applications.', '2023-07-05 11:21:39', '2023-07-05 11:21:39'),
(24, 51, 42, 'hello', '2023-10-26 07:28:44', '2023-10-26 07:28:44'),
(25, 31, 3, 'What is Python?', '2023-11-06 10:54:21', '2023-11-06 10:54:21'),
(26, 3, 31, 'Python is a popular programming language.\r\nPython can be used on a server to create web applications.', '2023-11-06 10:54:21', '2023-11-06 10:54:21');

-- --------------------------------------------------------

--
-- Table structure for table `mini_projects`
--

CREATE TABLE `mini_projects` (
  `id` int(11) NOT NULL,
  `course_id` varchar(255) NOT NULL,
  `project_name` varchar(255) NOT NULL,
  `project_image` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mini_projects`
--

INSERT INTO `mini_projects` (`id`, `course_id`, `project_name`, `project_image`, `description`, `created_at`, `updated_at`) VALUES
(1, '1', 'Java', 'uploads/4xrl1684907119.png', 'Test test test', '2023-05-24 05:45:19', '2023-05-24 05:45:19');

-- --------------------------------------------------------

--
-- Table structure for table `notes`
--

CREATE TABLE `notes` (
  `id` int(11) NOT NULL,
  `student_id` int(11) DEFAULT NULL,
  `course_id` int(11) DEFAULT NULL,
  `note` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `notes`
--

INSERT INTO `notes` (`id`, `student_id`, `course_id`, `note`, `created_at`, `updated_at`) VALUES
(1, 24, 1, 'test', '2023-05-24 05:27:26', '2023-05-24 05:27:26'),
(2, 25, 1, 'Test', '2023-05-24 05:37:05', '2023-05-24 05:37:05'),
(3, 29, 2, 'string', '2023-05-24 07:26:44', '2023-05-24 07:26:44'),
(4, 31, 2, 'Like many other popular programming languages, strings in Python are arrays of bytes representing unicode characters.  However, Python does not have a character data type, a single character is simply a string with a length of 1.  Square brackets can be used to access elements of the string.', '2023-07-04 07:26:40', '2023-07-04 07:26:40'),
(5, 31, 2, 'To concatenate, or combine, two strings you can use the + operator.', '2023-07-04 07:28:22', '2023-07-04 07:28:22'),
(6, 32, 1, 'The object file has the .obj extension in Windows environment', '2023-07-04 08:03:50', '2023-07-04 08:03:50'),
(7, 32, 1, '. o file extension in Linux environment', '2023-07-04 08:04:17', '2023-07-04 08:04:17');

-- --------------------------------------------------------

--
-- Table structure for table `project_processes`
--

CREATE TABLE `project_processes` (
  `id` int(11) NOT NULL,
  `student_id` int(11) DEFAULT NULL,
  `project_id` int(11) DEFAULT NULL,
  `task_id` int(11) DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `project_processes`
--

INSERT INTO `project_processes` (`id`, `student_id`, `project_id`, `task_id`, `status`, `created_at`, `updated_at`) VALUES
(1, 24, 1, 1, 2, '2023-05-24 05:46:42', '2023-05-24 05:47:16'),
(2, 31, 1, 1, 1, '2023-10-26 04:06:30', '2023-10-26 04:06:30'),
(3, 42, 1, 1, 1, '2023-10-26 04:18:26', '2023-10-26 04:18:26'),
(4, 42, 1, 1, 1, '2023-10-26 04:19:44', '2023-10-26 04:19:44');

-- --------------------------------------------------------

--
-- Table structure for table `project_reports`
--

CREATE TABLE `project_reports` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `project_reports`
--

INSERT INTO `project_reports` (`id`, `title`, `image`, `description`, `created_at`, `updated_at`) VALUES
(1, 'BANKING APPLICATION', 'uploads\\xH3t1696498323.png', 'thsrth srth', '2023-10-05 09:32:03', '2023-10-05 09:32:03');

-- --------------------------------------------------------

--
-- Table structure for table `project_report_elements`
--

CREATE TABLE `project_report_elements` (
  `id` int(11) NOT NULL,
  `module_id` int(11) DEFAULT NULL,
  `element_id` int(11) DEFAULT NULL,
  `content` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `project_report_elements`
--

INSERT INTO `project_report_elements` (`id`, `module_id`, `element_id`, `content`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'EXECUTIVE SUMMARY', '2023-10-09 04:37:02', '2023-10-09 04:37:02'),
(4, 1, 2, 'The executive summary provides a concise overview of the \"Banking Application\" project. It summarizes \r\nthe project\'s objectives, scope, and outcomes. It highlights the significance of the application in the \r\nbanking industry, such as improving customer experience, enhancing security, and streamlining banking \r\noperations. It also includes key achievements and benefits of the project.', '2023-10-09 04:39:12', '2023-10-09 04:39:12'),
(6, 1, 1, 'INTRODUCTION', '2023-10-09 07:06:09', '2023-10-09 07:06:09'),
(7, 1, 2, 'The introduction section introduces the \"Banking Application\" project. It provides background \r\ninformation on the current banking landscape, emphasizing the need for a modern and user-friendly \r\nbanking application. It discusses the challenges faced by traditional banking systems and the potential \r\nbenefits that a digital banking application can offer. It also outlines the goals & objectives of the project.', '2023-10-09 07:06:19', '2023-10-09 07:06:19'),
(8, 1, 1, 'PROJECT DESCRIPTION', '2023-10-09 07:06:29', '2023-10-09 07:06:29'),
(9, 1, 2, 'The project description section provides a detailed overview of the \"Banking Application.\" It describes the \r\npurpose of the application, which includes providing convenient and secure banking services to \r\ncustomers. It explains the key features and functionalities of the application, such as account \r\nmanagement, fund transfers, bill payments, loan applications, and transaction history. It may also \r\nmention any additional features specific to the banking application, such as mobile banking or integration \r\nwith third-party services.', '2023-10-09 07:06:38', '2023-10-09 07:06:38'),
(10, 1, 1, 'PROJECT GOALS AND OBJECTIVES', '2023-10-17 04:32:21', '2023-10-17 04:32:21'),
(11, 1, 2, 'This section outlines the goals and objectives of the \"Banking Application\" project. The goals may include \r\nenhancing customer satisfaction, improving operational efficiency, increasing customer engagement, \r\nand ensuring data security. The objectives are the specific outcomes that need to be achieved to fulfil \r\nthese goals, such as developing a user-friendly interface, implementing robust security measures, and \r\nintegrating with existing banking systems.', '2023-10-17 04:32:34', '2023-10-17 04:32:34'),
(12, 1, 1, NULL, '2023-10-17 04:32:43', '2023-10-17 04:32:43'),
(13, 1, 1, 'PROJECT SCOPE', '2023-10-17 04:32:57', '2023-10-17 04:32:57'),
(14, 1, 2, 'The project scope section defines the boundaries and limitations of the \"Banking Application\" project. It \r\noutlines the specific features and functionalities that will be included in the application, such as customer \r\nregistration, account management, transaction processing, and reporting. It may also discuss any \r\nconstraints or limitations, such as the target user base, compliance requirements, or integration with \r\nexisting banking infrastructure.', '2023-10-17 04:33:08', '2023-10-17 04:33:08'),
(15, 1, 1, 'METHODOLOGY', '2023-10-17 04:33:33', '2023-10-17 04:33:33'),
(16, 1, 2, 'The methodology section explains the development methodology chosen for the \"Banking Application\" \r\nproject. It may discuss an Agile approach, which allows for iterative development and frequent feedback \r\nfrom stakeholders. It explains how the project team will gather requirements, design, develop, test, and \r\ndeploy the application. It also highlights the collaborative nature of the methodology, involving \r\nstakeholders throughout the development process.', '2023-10-17 04:33:44', '2023-10-17 04:33:44'),
(17, 1, 1, 'SYSTEM DESIGN AND ARCHITECTURE', '2023-10-17 04:33:54', '2023-10-17 04:33:54'),
(18, 1, 2, 'The system design and architecture section describes the high-level design and architecture of the \r\n\"Banking Application.\" The Banking Application followed a three-tier architecture consisting of a \r\npresentation layer, business logic layer, and data access layer. It presents the components, modules, and \r\ntheir interactions within the application. It discusses the technology stack, such as programming \r\nlanguages, frameworks, and databases chosen for development. It may include architectural diagrams, \r\nsuch as system diagrams, class diagrams or component diagrams, to visualize the structure of the \r\napplication.', '2023-10-17 04:34:17', '2023-10-17 04:34:17'),
(19, 1, 1, 'IMPLEMENTATION', '2023-10-17 04:34:25', '2023-10-17 04:34:25'),
(20, 1, 2, 'The development team followed object-oriented programming principles and design patterns to ensure \r\na modular and maintainable codebase. The application\'s functionalities were implemented as separate \r\nmodules, such as Account Management, Transaction Processing, and Reporting. The best coding \r\npractices, including code reviews and unit testing, were followed to maintain code quality. Continuous \r\nintegration and automated testing tools were employed to ensure stability and reliability. It may also \r\nmention any challenges faced during the implementation phase and how they were overcome', '2023-10-17 04:34:35', '2023-10-17 04:34:35'),
(21, 1, 1, 'TESTING AND QUALITY ASSURANCE', '2023-10-17 04:34:44', '2023-10-17 04:34:44'),
(22, 1, 2, 'A comprehensive testing strategy was employed to ensure the application\'s quality. Unit tests were \r\nwritten for individual modules, and integration tests were conducted to validate the interactions between \r\ndifferent components. User acceptance testing (UAT) was performed with a group of selected users to \r\nensure the application met their requirements. Bugs and issues discovered during testing were \r\ndocumented, prioritized, and resolved before the final release. It may also mention the use of automated \r\ntesting tools and frameworks to streamline the testing process. The section emphasizes the importance \r\nof rigorous testing to deliver a robust and error-free application', '2023-10-17 04:34:54', '2023-10-17 04:34:54'),
(23, 1, 1, 'DEPLOYMENT AND RELEASE', '2023-10-17 04:35:07', '2023-10-17 04:35:07'),
(24, 1, 2, 'The application was deployed to a production environment using a carefully planned deployment \r\nstrategy. The deployment and release section explains the process of deploying the \"Banking \r\nApplication\" to the production environment. A separate staging environment was utilized for \r\npre-production testing to minimize the impact on live banking operations. The release process involved \r\nversioning the software, updating the necessary documentation, and conducting user training sessions. \r\nIt describes the deployment plan, including steps for installation, configuration, and data migration. It \r\nmay also address considerations like scalability, load balancing, and disaster recovery measures. Regular \r\nbackups and security measures were implemented to protect customer data.', '2023-10-17 04:35:15', '2023-10-17 04:35:15'),
(25, 1, 1, 'MAINTENANCE', '2023-10-17 04:35:22', '2023-10-17 04:35:22'),
(26, 1, 2, 'The maintenance section outlines the plan for ongoing maintenance and support of the \"Banking \r\nApplication\" post-deployment. It discusses activities such as bug fixing, software updates, and \r\naddressing customer feedback. It may mention the use of performance monitoring tools and techniques \r\nto proactively identify and resolve issues. The section emphasizes the commitment to continuous \r\nimprovement and ensuring the application\'s stability and reliability.', '2023-10-17 04:38:16', '2023-10-17 04:38:16'),
(27, 1, 1, 'RESULTS AND EVALUATION', '2023-10-17 04:38:32', '2023-10-17 04:38:32'),
(28, 1, 2, 'The Banking Application was well-received by both customers and bank employees. It significantly \r\nimproved operational efficiency, reducing manual effort and processing time. Customer feedback \r\nindicated enhanced satisfaction due to the user-friendly interface and the availability of self-service \r\nfunctionalities. The project\'s success was measured by key performance indicators such as increased \r\ntransaction throughput, decreased error rates, and positive customer feedback.', '2023-10-17 04:38:43', '2023-10-17 04:38:43'),
(29, 1, 1, 'BUDGET AND COST ANALYSIS', '2023-10-17 04:38:52', '2023-10-17 04:38:52'),
(30, 1, 2, 'The budget and cost analysis section provides a detailed breakdown of the project\'s budget and cost \r\nconsiderations. It includes estimated costs for development, infrastructure, licensing, testing, and \r\nongoing maintenance. It may discuss any cost-saving measures or alternatives considered during the \r\nproject\'s planning and execution. The section highlights the financial aspects of the project and ensures \r\neffective resource allocation.', '2023-10-17 04:39:01', '2023-10-17 04:39:01'),
(31, 1, 1, 'RISK ANALYSIS', '2023-10-17 04:39:07', '2023-10-17 04:39:07'),
(32, 1, 2, 'The risk analysis section identifies potential risks and uncertainties associated with the \"Banking \r\nApplication\" project. It includes risks such as data breaches, system failures, regulatory compliance, or \r\nchanges in technology trends. The section assesses the likelihood and potential impact of each risk and \r\nproposes mitigation strategies to minimize their impact. It emphasizes the proactive management of \r\nrisks to ensure project success.', '2023-10-17 04:39:17', '2023-10-17 04:39:17'),
(33, 1, 1, 'STAKEHOLDER MANAGEMENT', '2023-10-17 04:39:25', '2023-10-17 04:39:25'),
(34, 1, 2, 'The stakeholder management section identifies the key stakeholders involved in the \"Banking \r\nApplication\" project. It includes bank executives, IT teams, end-users, regulatory bodies, and third-party \r\nvendors if applicable. It discusses the communication and collaboration strategies employed to engage \r\nstakeholders throughout the project lifecycle. It may include methods such as regular meetings, status \r\nreports, and feedback sessions to ensure effective stakeholder management.', '2023-10-17 04:39:45', '2023-10-17 04:39:45'),
(35, 1, 1, 'CONCLUSION', '2023-10-17 04:39:54', '2023-10-17 04:39:54'),
(36, 1, 2, 'In conclusion, the Banking Application project successfully delivered a comprehensive software solution \r\nthat transformed the bank\'s operations. The project team overcame challenges and achieved the \r\nproject\'s objectives by following an Agile development approach. The application\'s deployment and \r\nrelease were executed smoothly, and the results obtained were highly favorable. Future enhancements \r\ncould include integration with external payment gateways and the implementation of additional security \r\nfeatures.', '2023-10-17 04:40:07', '2023-10-17 04:40:07'),
(37, 1, 1, 'APPENDIX', '2023-10-17 04:40:16', '2023-10-17 04:40:16'),
(38, 1, 2, 'The appendix includes any additional supporting materials that provide more detailed information about \r\nthe \"Banking Application\" project. This may include technical diagrams, architectural designs, user \r\nmanuals, or code snippets. The appendix supplements the main report and allows stakeholders to delve \r\ndeeper into specific aspects of the project if needed', '2023-10-17 04:40:30', '2023-10-17 04:40:30');

-- --------------------------------------------------------

--
-- Table structure for table `project_report_element_types`
--

CREATE TABLE `project_report_element_types` (
  `id` int(11) NOT NULL,
  `element_name` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `project_report_element_types`
--

INSERT INTO `project_report_element_types` (`id`, `element_name`, `created_at`, `updated_at`) VALUES
(1, 'Heading', '2023-10-11 05:20:31', '2023-10-11 05:20:31'),
(2, 'Paragraph', '2023-10-11 05:20:31', '2023-10-11 05:20:31');

-- --------------------------------------------------------

--
-- Table structure for table `project_report_modules`
--

CREATE TABLE `project_report_modules` (
  `id` int(11) NOT NULL,
  `project_report_id` int(11) DEFAULT NULL,
  `module_title` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `project_report_modules`
--

INSERT INTO `project_report_modules` (`id`, `project_report_id`, `module_title`, `description`, `image`, `created_at`, `updated_at`) VALUES
(1, 1, 'PROJECT REPORT', 'fga t a', NULL, '2023-10-05 09:32:03', '2023-10-05 09:32:03'),
(2, 1, 'REQUIREMENTS GATHERING', 't arga er', NULL, '2023-10-05 09:32:03', '2023-10-05 09:32:03'),
(3, 1, 'SYSTEM DESIGN PHASE', 'ghfh', NULL, '2023-10-17 04:42:05', '2023-10-17 04:42:05'),
(4, 1, 'IMPLEMENTATION PHASE', 'hrht', NULL, '2023-10-17 04:42:05', '2023-10-17 04:42:05'),
(5, 1, 'TESTING PHASE', 'gsrg', NULL, '2023-10-17 04:42:05', '2023-10-17 04:42:05'),
(6, 1, 'DEPLOYMENT PHASE', 'rgrg', NULL, '2023-10-17 04:42:05', '2023-10-17 04:42:05'),
(7, 1, 'MAINTENANCE PHASE', 'gergr', NULL, '2023-10-17 04:42:05', '2023-10-17 04:42:05');

-- --------------------------------------------------------

--
-- Table structure for table `project_tasks`
--

CREATE TABLE `project_tasks` (
  `id` int(11) NOT NULL,
  `project_id` int(11) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `lab_code` varchar(255) DEFAULT NULL,
  `duration` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `project_tasks`
--

INSERT INTO `project_tasks` (`id`, `project_id`, `name`, `description`, `lab_code`, `duration`, `created_at`, `updated_at`) VALUES
(1, 1, 'Test - Mini project', 'test', '1', '5', '2023-05-24 05:45:57', '2023-05-24 05:45:57');

-- --------------------------------------------------------

--
-- Table structure for table `qnas`
--

CREATE TABLE `qnas` (
  `id` int(11) NOT NULL,
  `question` text DEFAULT NULL,
  `course` int(11) DEFAULT NULL,
  `q_created_by` int(11) DEFAULT NULL,
  `answer` text DEFAULT NULL,
  `a_created_by` int(11) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `qnas`
--

INSERT INTO `qnas` (`id`, `question`, `course`, `q_created_by`, `answer`, `a_created_by`, `status`, `updated_at`, `created_at`) VALUES
(3, 'What is Python?', 2, 29, 'Python is a popular programming language.\r\nPython can be used on a server to create web applications.', 3, 0, '2023-05-24 07:28:13', '2023-05-24 07:27:20'),
(4, 'What is pass in Python?', 2, 31, 'The pass keyword represents a null operation in Python. It is generally used for the purpose of filling up empty blocks of code which may execute during runtime but has yet to be written. Without the pass statement in the following code, we may run into some errors during code execution.', 3, 0, '2023-07-04 07:45:35', '2023-07-04 07:44:10'),
(5, 'What are the Memory Allocations available in JavaJava?', 1, 32, 'Java has five significant types of memory allocations.\n\nClass Memory,\nHeap Memory,\nStack Memory,\nProgram Counter-Memory,\nNative Method Stack Memory', 23, 0, '2023-07-04 08:09:56', '2023-07-04 08:08:39'),
(6, 'What are the differences between Heap and Stack Memory in Java?', 1, 32, 'Stack memory in data structures is the amount of memory allocated to each individual programme. It is a fixed memory space. Heap memory, in contrast, is the portion that was not assigned to the Java code but will be available for use by the Java code when it is required, which is generally during the program\'s runtime.', 23, 0, '2023-07-04 08:13:44', '2023-07-04 08:13:10');

-- --------------------------------------------------------

--
-- Table structure for table `quizes`
--

CREATE TABLE `quizes` (
  `id` int(11) NOT NULL,
  `job_id` int(11) DEFAULT NULL,
  `subject` varchar(255) DEFAULT NULL,
  `course_id` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `questions` varchar(255) DEFAULT NULL,
  `created_by` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `quizes`
--

INSERT INTO `quizes` (`id`, `job_id`, `subject`, `course_id`, `title`, `image`, `description`, `questions`, `created_by`, `created_at`) VALUES
(1, NULL, '1', '1', 'Test 1', 'uploads/QJ581684905901.png', 'Test', '1,2', 'admin', '2023-05-24 05:25:01'),
(2, 1, '1', NULL, 'test', 'uploads/p1Oy1684908213.png', 'test', '1,2,3', 'recruiter', '2023-05-24 06:03:33'),
(3, NULL, '2', '2', 'Certification Test', 'uploads/8Gn31684993015.webp', 'Test', '4', 'admin', '2023-05-25 05:36:55');

-- --------------------------------------------------------

--
-- Table structure for table `quiz_masters`
--

CREATE TABLE `quiz_masters` (
  `id` int(11) NOT NULL,
  `subject` varchar(255) DEFAULT NULL,
  `question` text DEFAULT NULL,
  `question_image` varchar(255) DEFAULT NULL,
  `question_code` text DEFAULT NULL,
  `option1` varchar(255) DEFAULT NULL,
  `option2` varchar(255) DEFAULT NULL,
  `option3` varchar(255) DEFAULT NULL,
  `option4` varchar(255) DEFAULT NULL,
  `option1_img` varchar(255) DEFAULT NULL,
  `option2_img` varchar(255) DEFAULT NULL,
  `option3_img` varchar(255) DEFAULT NULL,
  `option4_img` varchar(255) DEFAULT NULL,
  `answer` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `quiz_masters`
--

INSERT INTO `quiz_masters` (`id`, `subject`, `question`, `question_image`, `question_code`, `option1`, `option2`, `option3`, `option4`, `option1_img`, `option2_img`, `option3_img`, `option4_img`, `answer`) VALUES
(4, '2', 'What is Python?', 'question_image', '123', 'Programming Language', 'Script', 'Database', 'OS', 'option1_img', 'option2_img', 'option3_img', 'option4_img', 'option1');

-- --------------------------------------------------------

--
-- Table structure for table `quiz_results`
--

CREATE TABLE `quiz_results` (
  `id` int(11) NOT NULL,
  `user_id` int(255) DEFAULT NULL,
  `user_answer` varchar(255) DEFAULT NULL,
  `score` varchar(255) DEFAULT NULL,
  `quiz_id` varchar(255) DEFAULT NULL,
  `questions` varchar(255) DEFAULT NULL,
  `score_percentage` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `quiz_results`
--

INSERT INTO `quiz_results` (`id`, `user_id`, `user_answer`, `score`, `quiz_id`, `questions`, `score_percentage`, `created_at`) VALUES
(1, 24, 'option3,option1', '1', '1', '1,2', '50', '2023-05-24 05:25:30'),
(2, 25, 'option1,option3', '2', '1', '1,2', '100', '2023-05-24 05:30:45'),
(3, 25, 'option3,option3', '1', '1', '1,2', '50', '2023-05-24 05:31:23'),
(4, 29, 'option1', '1', '3', '4', '100', '2023-06-30 17:48:57'),
(5, 29, 'option2', '0', '3', '4', '0', '2023-06-30 17:49:21'),
(6, 29, 'option1', '1', '3', '4', '100', '2023-07-01 05:50:30'),
(7, 33, 'option1', '1', '3', '4', '100', '2023-10-12 05:21:21'),
(8, 31, '', '0', '3', '4', '0', '2023-11-06 10:53:01');

-- --------------------------------------------------------

--
-- Table structure for table `recruiters`
--

CREATE TABLE `recruiters` (
  `id` int(11) NOT NULL,
  `recruiter_id` int(11) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `org_name` varchar(255) DEFAULT NULL,
  `org_address` varchar(255) DEFAULT NULL,
  `org_logo` varchar(255) DEFAULT NULL,
  `org_phone` varchar(255) DEFAULT NULL,
  `org_email` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `recruiters`
--

INSERT INTO `recruiters` (`id`, `recruiter_id`, `name`, `org_name`, `org_address`, `org_logo`, `org_phone`, `org_email`, `created_at`) VALUES
(1, 5, 'Recruiter2', 'tcs', NULL, 'org_logo', '4567747584', 'recruiter2@abc.com', '2023-05-09 11:10:13'),
(3, 26, 'Recruiter1', 'Kods', NULL, 'org_logo', '9999999999', 'recruiter1@gmail.com', '2023-05-24 05:50:42');

-- --------------------------------------------------------

--
-- Table structure for table `schools`
--

CREATE TABLE `schools` (
  `id` int(11) NOT NULL,
  `auth_id` int(11) DEFAULT NULL,
  `school_id` varchar(255) DEFAULT NULL,
  `school_name` varchar(255) DEFAULT NULL,
  `school_contact_no` varchar(255) DEFAULT NULL,
  `school_address` varchar(255) DEFAULT NULL,
  `school_type` varchar(255) DEFAULT NULL,
  `category` varchar(5) DEFAULT NULL,
  `year_of_establishment` varchar(255) DEFAULT NULL,
  `school_pin_code` varchar(255) DEFAULT NULL,
  `school_city` varchar(255) DEFAULT NULL,
  `school_state` varchar(255) DEFAULT NULL,
  `student_teacher_ratio` varchar(255) DEFAULT NULL,
  `legal_name` varchar(255) DEFAULT NULL,
  `accreditation_no` varchar(255) DEFAULT NULL,
  `accredited_by` varchar(255) DEFAULT NULL,
  `recognized_by` varchar(255) DEFAULT NULL,
  `registered_address` varchar(255) DEFAULT NULL,
  `facility` varchar(255) DEFAULT NULL,
  `facility_info` text DEFAULT NULL,
  `facility_images` varchar(255) DEFAULT NULL,
  `extra_curricular_info` varchar(255) DEFAULT NULL,
  `extra_curricular_images` varchar(255) DEFAULT NULL,
  `academic_info` text DEFAULT NULL,
  `academic_images` varchar(255) DEFAULT NULL,
  `website_link` varchar(255) DEFAULT NULL,
  `website_check` varchar(255) DEFAULT NULL,
  `school_info` text DEFAULT NULL,
  `auth_name` varchar(255) DEFAULT NULL,
  `auth_designation` varchar(255) DEFAULT NULL,
  `auth_aadhar_no` varchar(255) DEFAULT NULL,
  `auth_email` varchar(255) DEFAULT NULL,
  `auth_contact_number` varchar(255) DEFAULT NULL,
  `auth_contact_person` varchar(255) DEFAULT NULL,
  `contact_person_designation` varchar(255) DEFAULT NULL,
  `contact_person_details` varchar(255) DEFAULT NULL,
  `bank_name` varchar(255) DEFAULT NULL,
  `account_no` varchar(255) DEFAULT NULL,
  `re_account_no` varchar(255) DEFAULT NULL,
  `ifsc` varchar(255) DEFAULT NULL,
  `branch_name` varchar(255) DEFAULT NULL,
  `school_name_as_per_bank` varchar(255) DEFAULT NULL,
  `cancelled_cheque` varchar(255) DEFAULT NULL,
  `admission_fee` text DEFAULT NULL,
  `mode_of_admission` varchar(255) DEFAULT NULL,
  `how_to_apply` text DEFAULT NULL,
  `scholastic` varchar(255) DEFAULT NULL,
  `scholastic_info` text DEFAULT NULL,
  `coscholastic` varchar(250) DEFAULT NULL,
  `coscholastic_info` text DEFAULT NULL,
  `achievement_info` varchar(255) DEFAULT NULL,
  `achievement_images` varchar(255) DEFAULT NULL,
  `review_academic` varchar(255) DEFAULT '0',
  `review_faculty` varchar(255) NOT NULL DEFAULT '0',
  `review_infra` varchar(255) NOT NULL DEFAULT '0',
  `review_nonacademic` varchar(255) NOT NULL DEFAULT '0',
  `review_school` varchar(255) NOT NULL DEFAULT '0',
  `gallery` varchar(255) DEFAULT NULL,
  `faculty_info` text DEFAULT NULL,
  `faculty_images` varchar(255) DEFAULT NULL,
  `question_faq` varchar(255) DEFAULT NULL,
  `answer_faq` varchar(255) DEFAULT NULL,
  `school_image` varchar(255) DEFAULT NULL,
  `auth_image` varchar(255) DEFAULT NULL,
  `mou` varchar(255) DEFAULT NULL,
  `nda` varchar(255) DEFAULT NULL,
  `declaration_form` varchar(255) DEFAULT NULL,
  `signatory_aadhar` varchar(255) DEFAULT NULL,
  `other_document` varchar(255) DEFAULT NULL,
  `package_name` varchar(255) NOT NULL,
  `package_cost` varchar(255) DEFAULT NULL,
  `package_start_date` date DEFAULT NULL,
  `package_end_date` date DEFAULT NULL,
  `package_info` text DEFAULT NULL,
  `package_validity` varchar(255) DEFAULT NULL,
  `package_other_detail` varchar(255) DEFAULT NULL,
  `package_renewal` varchar(255) DEFAULT NULL,
  `package_invoice` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `schools`
--

INSERT INTO `schools` (`id`, `auth_id`, `school_id`, `school_name`, `school_contact_no`, `school_address`, `school_type`, `category`, `year_of_establishment`, `school_pin_code`, `school_city`, `school_state`, `student_teacher_ratio`, `legal_name`, `accreditation_no`, `accredited_by`, `recognized_by`, `registered_address`, `facility`, `facility_info`, `facility_images`, `extra_curricular_info`, `extra_curricular_images`, `academic_info`, `academic_images`, `website_link`, `website_check`, `school_info`, `auth_name`, `auth_designation`, `auth_aadhar_no`, `auth_email`, `auth_contact_number`, `auth_contact_person`, `contact_person_designation`, `contact_person_details`, `bank_name`, `account_no`, `re_account_no`, `ifsc`, `branch_name`, `school_name_as_per_bank`, `cancelled_cheque`, `admission_fee`, `mode_of_admission`, `how_to_apply`, `scholastic`, `scholastic_info`, `coscholastic`, `coscholastic_info`, `achievement_info`, `achievement_images`, `review_academic`, `review_faculty`, `review_infra`, `review_nonacademic`, `review_school`, `gallery`, `faculty_info`, `faculty_images`, `question_faq`, `answer_faq`, `school_image`, `auth_image`, `mou`, `nda`, `declaration_form`, `signatory_aadhar`, `other_document`, `package_name`, `package_cost`, `package_start_date`, `package_end_date`, `package_info`, `package_validity`, `package_other_detail`, `package_renewal`, `package_invoice`, `created_at`, `updated_at`) VALUES
(1, 35, NULL, 'test school 1', '56655666', 'sdfsfsdf', '1', '1', '2022', '434324', 'gsegerf', 'Jammu and Kashmir', '2:2', 'GRG', '242334', '1', '2', 'ERERAFER', '3', 'sgsrgsf', NULL, 'sfsf', NULL, 'sgsgas', NULL, 'FRRFRAW', '1', 'EGTETETERGEGE', 'school 1', 'principle', '4442323423423', 'school1@gmail.com', '1121244343', 'sfdsf', 'fdsafdsfdsf', 'sfsafasdf', 'fsf', '3343433433', '3343433433', 'a3a3w3r', 'safsafsf', 'gsfsdsfs', 'uploads\\KTtc1697866896.jpg', 'GERERERERERF', '1', 'RGEAGEAGE', '1', 'ygeygetger', '2', 'eyge5gtregtet', 'yeyge5tgasew5ye', NULL, '0', '0', '0', '0', '0', NULL, 'fgsgds', NULL, 'fdfds', 'fsdfsfsf', 'uploads\\8HQI1697866896.jpg', 'uploads\\DMLi1697866896.jpg', 'uploads\\k2Xw1697866896.jpg', 'uploads\\dzmc1697866896.jpg', 'uploads\\zwHB1697866896.jpg', 'uploads\\2G9s1697866896.jpg', 'uploads\\HIaa1697866896.png', 'fsf', '433', '2023-10-12', '2023-10-20', 'sdfsdfdsf', '2', 'ffdsf', '0', 'uploads\\rqAn1697866896.png', '2023-10-21 05:41:36', '2023-10-21 05:41:36');

-- --------------------------------------------------------

--
-- Table structure for table `school_assesments`
--

CREATE TABLE `school_assesments` (
  `id` int(11) NOT NULL,
  `class_id` int(11) DEFAULT NULL,
  `subject_id` int(11) DEFAULT NULL,
  `chapter_id` int(11) DEFAULT NULL,
  `video_id` int(11) DEFAULT NULL,
  `question` text DEFAULT NULL,
  `question_image` varchar(255) DEFAULT NULL,
  `question_code` text DEFAULT NULL,
  `option1` varchar(255) DEFAULT NULL,
  `option2` varchar(255) DEFAULT NULL,
  `option3` varchar(255) DEFAULT NULL,
  `option4` varchar(255) DEFAULT NULL,
  `option1_img` varchar(255) DEFAULT NULL,
  `option2_img` varchar(255) DEFAULT NULL,
  `option3_img` varchar(255) DEFAULT NULL,
  `option4_img` varchar(255) DEFAULT NULL,
  `answer` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `school_assesments`
--

INSERT INTO `school_assesments` (`id`, `class_id`, `subject_id`, `chapter_id`, `video_id`, `question`, `question_image`, `question_code`, `option1`, `option2`, `option3`, `option4`, `option1_img`, `option2_img`, `option3_img`, `option4_img`, `answer`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 1, 1, 'gsadgsag', 'question_image', NULL, 'asgsa', 'gfsagsagf', 'sgfas', 'fasgfsa', 'option1_img', 'option2_img', 'option3_img', 'option4_img', '2', '2023-10-23 07:01:25', '2023-10-23 07:01:25'),
(2, 1, 1, 1, 1, 'haethaehger', NULL, NULL, 'dhaerg', 'aergaergargaerg', 'asgasg', 'agagarg', NULL, NULL, NULL, NULL, '1', '2023-10-23 11:35:36', '2023-10-23 11:35:36');

-- --------------------------------------------------------

--
-- Table structure for table `school_assesment_results`
--

CREATE TABLE `school_assesment_results` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `user_answer` text DEFAULT NULL,
  `score` int(11) DEFAULT NULL,
  `subject_id` int(11) DEFAULT NULL,
  `chapter_id` int(11) DEFAULT NULL,
  `video_id` int(11) DEFAULT NULL,
  `questions` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `school_assesment_results`
--

INSERT INTO `school_assesment_results` (`id`, `user_id`, `user_answer`, `score`, `subject_id`, `chapter_id`, `video_id`, `questions`, `created_at`, `updated_at`) VALUES
(2, 42, '2,3', 1, 1, 1, 1, '1,2', '2023-10-23 11:48:34', '2023-10-23 11:48:34'),
(3, 42, '3,3', 0, 1, 1, 1, '1,2', '2023-10-23 11:50:12', '2023-10-23 11:50:12');

-- --------------------------------------------------------

--
-- Table structure for table `school_forum_answers`
--

CREATE TABLE `school_forum_answers` (
  `id` int(11) NOT NULL,
  `forum_question_id` int(11) DEFAULT NULL,
  `student_id` int(11) DEFAULT NULL,
  `answer` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `school_forum_answers`
--

INSERT INTO `school_forum_answers` (`id`, `forum_question_id`, `student_id`, `answer`, `created_at`, `updated_at`) VALUES
(1, 1, 42, 'fdsfasg  adfg', '2023-10-26 08:56:12', '2023-10-26 08:56:12'),
(2, 1, 42, 'fa bg g adgea', '2023-11-03 10:56:35', '2023-11-03 10:56:35');

-- --------------------------------------------------------

--
-- Table structure for table `school_forum_questions`
--

CREATE TABLE `school_forum_questions` (
  `id` int(11) NOT NULL,
  `question` text DEFAULT NULL,
  `student_id` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `school_forum_questions`
--

INSERT INTO `school_forum_questions` (`id`, `question`, `student_id`, `created_at`, `updated_at`) VALUES
(1, 'what is forum', 42, '2023-10-26 07:48:13', '2023-10-26 07:48:13'),
(2, 'who jktyiky', 42, '2023-10-26 08:57:09', '2023-10-26 08:57:09'),
(3, 'how grgrssrgsef', 42, '2023-11-02 09:35:42', '2023-11-02 09:35:42'),
(5, 'sdfsdf', 42, '2023-11-04 08:46:45', '2023-11-04 08:46:45');

-- --------------------------------------------------------

--
-- Table structure for table `school_messages`
--

CREATE TABLE `school_messages` (
  `id` int(11) NOT NULL,
  `sender_id` int(11) DEFAULT NULL,
  `receiver_id` int(11) DEFAULT NULL,
  `message` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `school_messages`
--

INSERT INTO `school_messages` (`id`, `sender_id`, `receiver_id`, `message`, `created_at`, `updated_at`) VALUES
(1, 42, 51, 'hiii', '2023-10-26 07:14:56', '2023-10-26 07:14:56'),
(2, 51, 42, 'hello', '2023-10-26 07:29:41', '2023-10-26 07:29:41'),
(3, 51, 42, 'gdgdfg', '2023-10-26 07:30:17', '2023-10-26 07:30:17'),
(4, 42, 51, 'gagd adg aerg werf dffg', '2023-10-26 07:32:39', '2023-10-26 07:32:39'),
(5, 51, 42, 'rgsrf asrag juyytjh', '2023-10-26 07:32:39', '2023-10-26 07:32:39');

-- --------------------------------------------------------

--
-- Table structure for table `school_mini_projects`
--

CREATE TABLE `school_mini_projects` (
  `id` int(11) NOT NULL,
  `subject_id` int(11) DEFAULT NULL,
  `project_name` varchar(255) DEFAULT NULL,
  `project_image` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `school_mini_projects`
--

INSERT INTO `school_mini_projects` (`id`, `subject_id`, `project_name`, `project_image`, `description`, `created_at`, `updated_at`) VALUES
(1, 1, 'sdfsdf', 'uploads\\gwIB1698147281.png', 'fdsfsfsf', '2023-10-24 11:34:41', '2023-10-24 11:34:41');

-- --------------------------------------------------------

--
-- Table structure for table `school_notes`
--

CREATE TABLE `school_notes` (
  `id` int(11) NOT NULL,
  `student_id` int(11) DEFAULT NULL,
  `subject_id` int(11) DEFAULT NULL,
  `note` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `school_notes`
--

INSERT INTO `school_notes` (`id`, `student_id`, `subject_id`, `note`, `created_at`, `updated_at`) VALUES
(1, 42, 1, 'fsdfdsfsdfsa', '2023-10-26 04:37:06', '2023-10-26 04:37:06'),
(2, 42, 1, 'grassdf', '2023-10-26 04:38:20', '2023-10-26 04:38:20');

-- --------------------------------------------------------

--
-- Table structure for table `school_project_processes`
--

CREATE TABLE `school_project_processes` (
  `id` int(11) NOT NULL,
  `student_id` int(11) DEFAULT NULL,
  `project_id` int(11) DEFAULT NULL,
  `task_id` int(11) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `school_project_processes`
--

INSERT INTO `school_project_processes` (`id`, `student_id`, `project_id`, `task_id`, `status`, `created_at`, `updated_at`) VALUES
(1, 42, 1, 1, 2, '2023-10-26 04:20:49', '2023-10-26 04:21:47');

-- --------------------------------------------------------

--
-- Table structure for table `school_project_tasks`
--

CREATE TABLE `school_project_tasks` (
  `id` int(11) NOT NULL,
  `project_id` int(11) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `lab_code` varchar(255) DEFAULT NULL,
  `duration` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `school_project_tasks`
--

INSERT INTO `school_project_tasks` (`id`, `project_id`, `name`, `description`, `lab_code`, `duration`, `created_at`, `updated_at`) VALUES
(1, 1, 'gsgsg', 'ffsfsfsfsrgbtrrtf', 'fffddd222', '4', '2023-10-24 11:53:38', '2023-10-24 11:53:38');

-- --------------------------------------------------------

--
-- Table structure for table `school_qnas`
--

CREATE TABLE `school_qnas` (
  `id` int(11) NOT NULL,
  `subject_id` int(11) DEFAULT NULL,
  `question` text DEFAULT NULL,
  `q_created_by` int(11) DEFAULT NULL,
  `answer` text DEFAULT NULL,
  `a_created_by` int(11) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `school_qnas`
--

INSERT INTO `school_qnas` (`id`, `subject_id`, `question`, `q_created_by`, `answer`, `a_created_by`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 'gagd adg aerg werf dffg', 42, 'rgsrf asrag juyytjh', 51, 0, '2023-10-26 05:12:23', '2023-10-26 06:29:16'),
(3, 1, 'what is physics', 42, NULL, NULL, 0, '2023-11-02 09:21:28', '2023-11-02 09:21:28');

-- --------------------------------------------------------

--
-- Table structure for table `school_students`
--

CREATE TABLE `school_students` (
  `id` int(11) NOT NULL,
  `auth_id` int(11) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `class_id` int(11) DEFAULT NULL,
  `school_id` int(11) DEFAULT NULL,
  `section_id` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `school_students`
--

INSERT INTO `school_students` (`id`, `auth_id`, `name`, `class_id`, `school_id`, `section_id`, `created_at`, `updated_at`) VALUES
(1, 42, 'Ashutosh Mahapatra', 1, 1, 1, '2023-10-21 07:44:40', '2023-10-21 07:44:40'),
(2, 43, 'chirag', 1, 1, 1, '2023-10-21 09:02:42', '2023-10-21 09:02:42'),
(4, 48, 'abcd', 1, 1, 2, '2023-10-21 09:55:52', '2023-10-21 09:55:52');

-- --------------------------------------------------------

--
-- Table structure for table `school_subjects`
--

CREATE TABLE `school_subjects` (
  `id` int(11) NOT NULL,
  `class_id` int(11) DEFAULT NULL,
  `subject_name` varchar(255) DEFAULT NULL,
  `subject_image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `school_subjects`
--

INSERT INTO `school_subjects` (`id`, `class_id`, `subject_name`, `subject_image`, `created_at`, `updated_at`) VALUES
(1, 1, 'Physics', 'uploads\\AZaf1697787708.jpg', '2023-10-20 06:08:05', '2023-10-20 06:08:05'),
(2, 1, 'chemistry', 'uploads\\AZaf1697787799.jpg', '2023-10-20 06:49:54', '2023-10-20 06:49:54'),
(3, 1, 'math', 'uploads\\AZaf16977879008.jpg', '2023-10-20 07:41:48', '2023-10-20 07:41:48');

-- --------------------------------------------------------

--
-- Table structure for table `school_tests`
--

CREATE TABLE `school_tests` (
  `id` int(11) NOT NULL,
  `class_id` int(11) DEFAULT NULL,
  `subject_id` int(11) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `questions` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `school_tests`
--

INSERT INTO `school_tests` (`id`, `class_id`, `subject_id`, `title`, `image`, `description`, `questions`, `created_at`, `updated_at`) VALUES
(2, 1, 1, 'llllllllll', 'uploads\\Mnky1698127831.jpg', 'lkjhgf', '1', '2023-10-24 06:10:31', '2023-10-24 06:12:10');

-- --------------------------------------------------------

--
-- Table structure for table `school_test_masters`
--

CREATE TABLE `school_test_masters` (
  `id` int(11) NOT NULL,
  `class_id` int(11) DEFAULT NULL,
  `subject_id` int(11) DEFAULT NULL,
  `question` text DEFAULT NULL,
  `question_image` varchar(255) DEFAULT NULL,
  `question_code` text DEFAULT NULL,
  `option1` text DEFAULT NULL,
  `option2` text DEFAULT NULL,
  `option3` text DEFAULT NULL,
  `option4` text DEFAULT NULL,
  `option1_img` varchar(255) DEFAULT NULL,
  `option2_img` varchar(255) DEFAULT NULL,
  `option3_img` varchar(255) DEFAULT NULL,
  `option4_img` varchar(255) DEFAULT NULL,
  `answer` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `school_test_masters`
--

INSERT INTO `school_test_masters` (`id`, `class_id`, `subject_id`, `question`, `question_image`, `question_code`, `option1`, `option2`, `option3`, `option4`, `option1_img`, `option2_img`, `option3_img`, `option4_img`, `answer`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'agsf', NULL, 'geagaegeeeeeeeeee', 'gfasgarge', 'gegeg', 'gaeg', 'ergaerga', NULL, NULL, NULL, NULL, '3', '2023-10-24 04:36:57', '2023-10-24 04:36:57');

-- --------------------------------------------------------

--
-- Table structure for table `school_test_results`
--

CREATE TABLE `school_test_results` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `user_answer` text DEFAULT NULL,
  `score` int(11) DEFAULT NULL,
  `test_id` int(11) DEFAULT NULL,
  `questions` text DEFAULT NULL,
  `score_percentage` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `school_test_results`
--

INSERT INTO `school_test_results` (`id`, `user_id`, `user_answer`, `score`, `test_id`, `questions`, `score_percentage`, `created_at`, `updated_at`) VALUES
(2, 42, '3', 1, 2, '1', 100, '2023-10-24 09:17:42', '2023-10-24 09:17:42');

-- --------------------------------------------------------

--
-- Table structure for table `school_video_play_backs`
--

CREATE TABLE `school_video_play_backs` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `subject_id` int(11) DEFAULT NULL,
  `video_id` int(11) DEFAULT NULL,
  `video_time_stamp` varchar(255) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `school_video_play_backs`
--

INSERT INTO `school_video_play_backs` (`id`, `user_id`, `subject_id`, `video_id`, `video_time_stamp`, `status`, `created_at`, `updated_at`) VALUES
(1, 42, 1, 1, '6.694186', 0, '2023-10-23 10:52:57', '2023-10-23 12:01:02'),
(3, 42, 1, 2, '0.777918', 0, '2023-10-23 11:54:23', '2023-10-24 09:21:09');

-- --------------------------------------------------------

--
-- Table structure for table `sections`
--

CREATE TABLE `sections` (
  `id` int(11) NOT NULL,
  `course_id` varchar(255) NOT NULL,
  `section_name` varchar(255) NOT NULL,
  `section_desc` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sections`
--

INSERT INTO `sections` (`id`, `course_id`, `section_name`, `section_desc`, `created_at`, `updated_at`) VALUES
(1, '1', 'Java-1', 'Object file vs Executable file', '2023-05-24 05:11:15', '2023-05-24 05:11:15'),
(2, '2', 'Introduction', 'Intro', '2023-05-24 07:04:36', '2023-05-24 07:04:36'),
(3, '2', 'Installation', 'Intro', '2023-05-24 07:04:36', '2023-05-24 07:04:36'),
(4, '2', 'Execution', 'Intro', '2023-05-24 07:04:36', '2023-05-24 07:04:36'),
(5, '3', 'eregadg', 'dgdgtd', '2023-11-06 10:47:56', '2023-11-06 10:47:56'),
(6, '3', 'asfas', 'gdrgdsrg', '2023-11-06 10:47:56', '2023-11-06 10:47:56');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(11) NOT NULL,
  `user_id_f` int(11) DEFAULT NULL,
  `student_id` varchar(11) DEFAULT NULL,
  `f_name` varchar(255) DEFAULT NULL,
  `l_name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `type` int(11) DEFAULT NULL,
  `batch_id` int(11) DEFAULT NULL,
  `phone_no` varchar(255) DEFAULT NULL,
  `whatsapp_no` varchar(255) DEFAULT NULL,
  `same_as_phone` varchar(20) NOT NULL DEFAULT '0',
  `same_as_comm_address` varchar(20) NOT NULL DEFAULT '0',
  `dob` date DEFAULT NULL,
  `courses` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `reviews` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `qna` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `permissions` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `aadhar` varchar(255) DEFAULT NULL,
  `gender` varchar(255) DEFAULT NULL,
  `comm_state` varchar(255) DEFAULT NULL,
  `religion` varchar(255) DEFAULT NULL,
  `category` varchar(255) DEFAULT NULL,
  `father_name` varchar(255) DEFAULT NULL,
  `f_aadhar` varchar(255) DEFAULT NULL,
  `f_phone` varchar(255) DEFAULT NULL,
  `f_email_id` varchar(255) DEFAULT NULL,
  `father_aadhar_doc` varchar(255) DEFAULT NULL,
  `mother_name` varchar(255) DEFAULT NULL,
  `m_aadhar` varchar(255) DEFAULT NULL,
  `m_phone` varchar(255) DEFAULT NULL,
  `m_email_id` varchar(255) DEFAULT NULL,
  `mother_aadhar_doc` varchar(255) DEFAULT NULL,
  `siblings` varchar(255) DEFAULT NULL,
  `course` varchar(255) DEFAULT NULL,
  `board` varchar(200) DEFAULT NULL,
  `annual_income` varchar(255) DEFAULT NULL,
  `physically` varchar(255) DEFAULT NULL,
  `student_image` varchar(255) DEFAULT NULL,
  `comm_address` varchar(255) DEFAULT NULL,
  `comm_village` varchar(255) DEFAULT NULL,
  `comm_block` varchar(255) DEFAULT NULL,
  `comm_pin_code` varchar(255) DEFAULT NULL,
  `perm_address` varchar(255) DEFAULT NULL,
  `perm_village` varchar(255) DEFAULT NULL,
  `perm_block` varchar(255) DEFAULT NULL,
  `perm_state` varchar(255) DEFAULT NULL,
  `perm_pin_code` varchar(255) DEFAULT NULL,
  `account_no` varchar(255) DEFAULT NULL,
  `re_account_no` varchar(255) DEFAULT NULL,
  `ifsc_code` varchar(255) DEFAULT NULL,
  `bank_name` varchar(255) DEFAULT NULL,
  `bank_branch` varchar(255) DEFAULT NULL,
  `name_as_per_bank` varchar(255) DEFAULT NULL,
  `admission_toggle` varchar(255) DEFAULT NULL,
  `institute_city` varchar(255) DEFAULT NULL,
  `institute_state` varchar(255) DEFAULT NULL,
  `total_fees` varchar(255) DEFAULT NULL,
  `course_span` varchar(255) DEFAULT NULL,
  `identity_proof` varchar(255) DEFAULT NULL,
  `address_proof` varchar(255) DEFAULT NULL,
  `passbook_statement` varchar(255) DEFAULT NULL,
  `academic_type` varchar(255) DEFAULT NULL COMMENT 'school-1,college-2',
  `academic_name` varchar(255) DEFAULT NULL,
  `class` varchar(255) DEFAULT NULL,
  `cgpa` varchar(255) DEFAULT NULL,
  `start_date` varchar(255) DEFAULT NULL,
  `end_date` varchar(255) DEFAULT NULL,
  `academic_other_name` varchar(400) DEFAULT NULL,
  `hobby` varchar(255) DEFAULT NULL,
  `achievements` varchar(500) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `mother_tongue` varchar(255) DEFAULT NULL,
  `basic_flag` varchar(255) NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `logs` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `user_id_f`, `student_id`, `f_name`, `l_name`, `email`, `type`, `batch_id`, `phone_no`, `whatsapp_no`, `same_as_phone`, `same_as_comm_address`, `dob`, `courses`, `reviews`, `qna`, `permissions`, `aadhar`, `gender`, `comm_state`, `religion`, `category`, `father_name`, `f_aadhar`, `f_phone`, `f_email_id`, `father_aadhar_doc`, `mother_name`, `m_aadhar`, `m_phone`, `m_email_id`, `mother_aadhar_doc`, `siblings`, `course`, `board`, `annual_income`, `physically`, `student_image`, `comm_address`, `comm_village`, `comm_block`, `comm_pin_code`, `perm_address`, `perm_village`, `perm_block`, `perm_state`, `perm_pin_code`, `account_no`, `re_account_no`, `ifsc_code`, `bank_name`, `bank_branch`, `name_as_per_bank`, `admission_toggle`, `institute_city`, `institute_state`, `total_fees`, `course_span`, `identity_proof`, `address_proof`, `passbook_statement`, `academic_type`, `academic_name`, `class`, `cgpa`, `start_date`, `end_date`, `academic_other_name`, `hobby`, `achievements`, `description`, `mother_tongue`, `basic_flag`, `created_at`, `logs`) VALUES
(1, NULL, '24', 'ABC1', NULL, 'abc1@gmail.com', NULL, NULL, '1234567890', NULL, '0', '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '2023-05-24 05:07:39', NULL),
(2, NULL, '25', 'ABC2', NULL, 'abc2@gmail.com', NULL, NULL, '9630852741', NULL, '0', '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '2023-05-24 05:29:36', NULL),
(3, NULL, '28', 'Somashekhar', NULL, 'somuhten@gmail.com', NULL, NULL, '7338410221', NULL, '0', '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '2023-05-24 06:53:20', NULL),
(4, NULL, '29', 'Arun', NULL, 'arun@abc.com', NULL, NULL, '876543467', NULL, '0', '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '2023-05-24 07:13:19', NULL),
(5, NULL, '30', 'ashutosh', NULL, 'ashu@gmail.com', NULL, NULL, '7890123456', NULL, '0', '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '2023-06-09 06:48:48', NULL),
(6, NULL, '31', 'ABC3', NULL, 'abc3@gmail.com', NULL, NULL, '9876756789', NULL, '0', '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '2023-07-04 07:04:44', NULL),
(7, NULL, '32', 'ABC4', NULL, 'abc4@gmail.com', NULL, NULL, '9456788789', NULL, '0', '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '2023-07-04 07:53:47', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `student_referrals`
--

CREATE TABLE `student_referrals` (
  `id` int(11) NOT NULL,
  `referred_by` int(11) NOT NULL,
  `referred_to` int(11) NOT NULL,
  `created_at` varchar(255) NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `student_referrals`
--

INSERT INTO `student_referrals` (`id`, `referred_by`, `referred_to`, `created_at`, `updated_at`) VALUES
(1, 1, 25, '2023-05-24 10:59:54', '2023-05-24 05:29:54'),
(2, 22, 29, '2023-05-24 13:15:41', '2023-05-24 07:45:41'),
(3, 29, 22, '2023-05-24 13:16:23', '2023-05-24 07:46:23');

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE `subjects` (
  `id` int(11) NOT NULL,
  `subject_name` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`id`, `subject_name`, `created_at`, `updated_at`) VALUES
(1, 'Java', '2023-05-24 05:02:47', '2023-05-24 05:02:47'),
(2, 'Python', '2023-05-24 06:56:44', '2023-05-24 06:56:44');

-- --------------------------------------------------------

--
-- Table structure for table `subscriptions`
--

CREATE TABLE `subscriptions` (
  `id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `start_date` varchar(255) NOT NULL,
  `end_date` varchar(255) NOT NULL,
  `created_at` varchar(255) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `subscriptions`
--

INSERT INTO `subscriptions` (`id`, `student_id`, `start_date`, `end_date`, `created_at`, `updated_at`) VALUES
(1, 24, '2023-05-24 10:46:49', '2024-05-24 10:46:49', '2023-05-24 10:46:49', '2023-05-24 05:16:49'),
(2, 25, '2023-05-24 11:00:01', '2024-05-24 11:00:01', '2023-05-24 11:00:01', '2023-05-24 05:30:01'),
(3, 29, '2023-05-24 12:46:01', '2024-05-24 12:46:01', '2023-05-24 12:46:01', '2023-05-24 07:16:01'),
(4, 22, '2023-05-25 12:17:13', '2024-05-25 12:17:13', '2023-05-25 12:17:13', '2023-05-25 06:47:13'),
(5, 31, '2023-07-04 12:54:09', '2024-07-04 12:54:09', '2023-07-04 12:54:09', '2023-07-04 07:24:09'),
(6, 32, '2023-07-04 13:24:36', '2024-07-04 13:24:36', '2023-07-04 13:24:36', '2023-07-04 07:54:36'),
(7, 33, '2023-10-12 10:44:29', '2024-10-12 10:44:29', '2023-10-12 10:44:29', '2023-10-12 05:14:29');

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE `teachers` (
  `id` int(11) NOT NULL,
  `auth_id` int(11) DEFAULT NULL,
  `class_and_subject` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `teachers`
--

INSERT INTO `teachers` (`id`, `auth_id`, `class_and_subject`, `created_at`, `updated_at`) VALUES
(1, 51, '[{\"class_id\":\"1\",\"subject_id\":\"2\"},{\"class_id\":\"1\",\"subject_id\":\"1\"}]', '2023-10-21 10:27:57', '2023-10-21 10:27:57');

-- --------------------------------------------------------

--
-- Table structure for table `use_cases`
--

CREATE TABLE `use_cases` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `use_cases`
--

INSERT INTO `use_cases` (`id`, `title`, `image`, `description`, `created_at`, `updated_at`) VALUES
(2, 'MOBILE APP SECURITY ASSESSMENT', 'uploads\\vhdQ1696843929.jpg', 'rgrfrrrf', '2023-10-09 09:32:09', '2023-10-09 09:32:09');

-- --------------------------------------------------------

--
-- Table structure for table `use_case_elements`
--

CREATE TABLE `use_case_elements` (
  `id` int(11) NOT NULL,
  `module_id` int(11) DEFAULT NULL,
  `element_id` int(11) DEFAULT NULL,
  `content` text DEFAULT NULL,
  `list_type` varchar(50) DEFAULT NULL,
  `list_heading` varchar(100) DEFAULT NULL,
  `list_points` text DEFAULT NULL,
  `list_description` text DEFAULT NULL,
  `appendices_heading` text DEFAULT NULL,
  `appendices_sub_heading` text DEFAULT NULL,
  `appendices_desc` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `use_case_elements`
--

INSERT INTO `use_case_elements` (`id`, `module_id`, `element_id`, `content`, `list_type`, `list_heading`, `list_points`, `list_description`, `appendices_heading`, `appendices_sub_heading`, `appendices_desc`, `created_at`, `updated_at`) VALUES
(1, 3, 2, 'Enhancing Mobile App Security is a Comprehensive Case Study on Identifying and Mitigating Vulnerabilities in\r\na Software Development Project. Mobile app security involves protecting the app and its data from\r\nunauthorized access, breaches, and attacks to ensure the privacy and safety of users and their information.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-10-17 04:07:52', '2023-10-17 04:07:52'),
(2, 4, 2, 'This case study examines the Mobile App Security Assessment conducted during a software development \r\nproject for a leading technology company. The study aims to identify and address potential security \r\nvulnerabilities in the mobile application, ensuring robust protection against cyber threats. The research \r\nmethodology involves interviews, security analysis tools, and data collection from the application\'s codebase. \r\nThe case study reveals the challenges faced, the implemented solutions, and the achieved outcomes, offering \r\nvaluable insights into mobile app security best practices.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-10-17 04:08:28', '2023-10-17 04:08:28'),
(3, 5, 2, 'The company involved in this software development project is a prominent tech organization specializing in \r\nmobile application development. They have a strong focus on user privacy and data security, which makes \r\nmobile app security an essential aspect of their development process. The specific project is the creation of a \r\nfeature-rich mobile application that enables users to access sensitive information and perform various \r\ntransactions. Due to the critical nature of the application\'s data, a robust security assessment is vital to identify \r\nand mitigate potential risks.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-10-17 04:08:47', '2023-10-17 04:08:47'),
(4, 6, 2, 'The primary objective of this case study is to perform a comprehensive Mobile App Security Assessment to \r\nensure the protection of sensitive data and user information. The study aims to answer the following key \r\nquestions:', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-10-17 04:10:06', '2023-10-17 04:10:06'),
(5, 6, 3, NULL, 'Square', NULL, 'What are the potential security vulnerabilities in the mobile application?#@#How can these vulnerabilities be addressed effectively?#@#What methodologies and strategies can be implemented to enhance mobile app security?', NULL, NULL, NULL, NULL, '2023-10-17 04:10:44', '2023-10-17 04:10:44'),
(6, 7, 2, 'The case study employs a combination of qualitative and quantitative research methodologies. It involves \r\nthe following steps:', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-10-17 04:11:25', '2023-10-17 04:11:25'),
(7, 7, 4, NULL, 'Square', NULL, 'INTERVIEWS#@#SECURITY ANALYSIS TOOLS#@#DATA COLLECTION', 'The development team, security experts, and relevant stakeholders were interviewed to understand  the application\'s security requirements and potential risks#@#State-of-the-art security analysis tools were used to scan the application\'s codebase for common vulnerabilities, such as SQL injection, cross-site scripting (XSS), insecure data storage, etc.#@#Information regarding the application\'s architecture, data flow, and authentication mechanisms were  collected through documentation analysis and code review.', NULL, NULL, NULL, '2023-10-17 04:12:30', '2023-10-17 04:12:30'),
(8, 8, 2, 'The Mobile App Security Assessment revealed several critical security challenges, including:', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-10-17 04:14:54', '2023-10-17 04:14:54'),
(9, 8, 4, NULL, 'Square', NULL, 'LACK OF INPUT VALIDATION#@#INSECURE DATA STORAGE#@#WEAK AUTHENTICATION MECHANISM', 'The application allowed insufficient input validation, making it susceptible to injection attacks#@#Sensitive user data was stored in plain text, posing a risk in case of a data breach.#@#The current authentication process was vulnerable to brute-force attacks, potentially leading to  unauthorized access.', NULL, NULL, NULL, '2023-10-17 04:16:00', '2023-10-17 04:16:00'),
(10, 9, 2, 'To address the identified security issues, the following solutions were implemented:', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-10-17 04:16:46', '2023-10-17 04:16:46'),
(11, 9, 4, NULL, 'Square', NULL, 'INPUT VALIDATION ENHANCEMENT#@#DATA ENCRYPTION#@#MULTI-FACTOR AUTHENTICATION', 'Proper input validation techniques were integrated to prevent common injection attacks and ensure the  safety of user input.#@#Sensitive data, both at rest and in transit, were encrypted to protect against unauthorized access.#@#A robust multi-factor authentication mechanism was implemented to enhance the application\'s security  and prevent unauthorized access.', NULL, NULL, NULL, '2023-10-17 04:17:37', '2023-10-17 04:17:37'),
(12, 10, 2, 'The Mobile App Security Assessment resulted in significant improvements to the application\'s security posture. \r\nKey outcomes include:', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-10-17 04:18:33', '2023-10-17 04:18:33'),
(13, 10, 4, NULL, 'Square', NULL, 'ELIMINATION OF VULNERABILITIES#@#ENHANCED USER TRUST#@#POSITIVE FEEDBACK', 'The identified security vulnerabilities were successfully mitigated, reducing the risk of cyber-attacks.#@#The strengthened security measures instilled greater confidence in users regarding the application\'s  data protection#@#The application received positive feedback from security experts and users alike, acknowledging its  enhanced security', NULL, NULL, NULL, '2023-10-17 04:19:14', '2023-10-17 04:19:14'),
(14, 11, 2, 'The application received positive feedback from security experts and users alike, acknowledging its \r\nenhanced security', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-10-17 04:19:42', '2023-10-17 04:19:42'),
(15, 11, 4, NULL, 'Square', NULL, 'PRIORITIZE SECURITY#@#REGULAR ASSESSMENTS#@#COLLABORATIVE EFFORT', 'Integrating security measures from the initial stages of development is crucial for a secure application.#@#Conducting regular security assessments helps identify new threats and vulnerabilities.#@#Involvement of security experts and stakeholders throughout the development process enhances  security outcomes.', NULL, NULL, NULL, '2023-10-17 04:20:26', '2023-10-17 04:20:26'),
(16, 12, 2, 'Involvement of security experts and stakeholders throughout the development process enhances \r\nsecurity outcomes.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-10-17 04:20:51', '2023-10-17 04:20:51'),
(17, 13, 2, 'Based on the findings of this case study, the following recommendations are made for similar software \r\ndevelopment projects:', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-10-17 04:21:09', '2023-10-17 04:21:09'),
(18, 13, 3, NULL, NULL, NULL, 'Implement continuous security monitoring and periodic assessments to proactively identify and address  security issues#@#Stay updated with the latest security practices and adopt industry-standard security protocols.#@#Foster a culture of security awareness among the development team to ensure security-conscious  decision-making', NULL, NULL, NULL, NULL, '2023-10-17 04:21:35', '2023-10-17 04:21:35'),
(19, 14, 2, '[List of relevant sources and references cited throughout the case study document.]', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-10-17 04:22:00', '2023-10-17 04:22:00'),
(20, 13, 3, NULL, 'Square', NULL, 'Implement continuous security monitoring and periodic assessments to proactively identify and address  security issues#@#Stay updated with the latest security practices and adopt industry-standard security protocols.#@#Foster a culture of security awareness among the development team to ensure security-conscious  decision-making', NULL, NULL, NULL, NULL, '2023-10-17 04:23:48', '2023-10-17 04:23:48'),
(21, 15, 5, NULL, NULL, NULL, NULL, NULL, 'APPENDIX A#@#APPENDIX B#@#APPENDIX C#@#APPENDIX D#@#APPENDIX E#@#APPENDIX F', 'SECURITY ASSESSMENT QUESTIONNAIRE#@#SECURITY ANALYSIS TOOL REPORTS#@#DATA ENCRYPTION PROTOCOLS#@#MULTI-FACTOR AUTHENTICATION IMPLEMENTATION#@#USER FEEDBACK AND TESTIMONIALS#@#USER FEEDBACK AND TESTIMONIALS', 'This appendix includes the questionnaire used during interviews to gather information about the application\'s  security requirements and potential risks.#@#SECURITY ANALYSIS TOOL REPORTS#@#This appendix provides a detailed overview of the data encryption protocols implemented to secure sensitive  data in the mobile application.#@#Here, the technical details of the multi-factor authentication mechanism implemented in the application are  presented.#@#This appendix includes feedback and testimonials received from users after the security enhancements,  demonstrating their increased trust in the application.#@#The presentation slides used in the lessons learned workshop, highlighting key takeaways and best practices  identified during the software development project.', '2023-10-17 04:26:19', '2023-10-17 04:26:19'),
(22, 16, 2, 'The company would like to acknowledge the efforts of its dedicated development team and security experts \r\nwho played a significant role in the successful execution of the Mobile App Security Assessment. Additionally, \r\nthe company expresses its gratitude to the users who provided valuable feedback during the assessment \r\nprocess.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-10-17 04:30:19', '2023-10-17 04:30:19');

-- --------------------------------------------------------

--
-- Table structure for table `use_case_element_types`
--

CREATE TABLE `use_case_element_types` (
  `id` int(11) NOT NULL,
  `element_name` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `use_case_element_types`
--

INSERT INTO `use_case_element_types` (`id`, `element_name`, `created_at`, `updated_at`) VALUES
(2, 'paragraph', '2023-10-09 09:38:54', '2023-10-09 09:38:54'),
(3, 'points', '2023-10-09 09:38:54', '2023-10-09 09:38:54'),
(4, 'points with description', '2023-10-09 10:27:37', '2023-10-09 10:27:37'),
(5, 'Appendices', '2023-10-11 09:47:55', '2023-10-11 09:47:55');

-- --------------------------------------------------------

--
-- Table structure for table `use_case_modules`
--

CREATE TABLE `use_case_modules` (
  `id` int(11) NOT NULL,
  `use_case_id` int(11) DEFAULT NULL,
  `module_title` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `use_case_modules`
--

INSERT INTO `use_case_modules` (`id`, `use_case_id`, `module_title`, `description`, `image`, `created_at`, `updated_at`) VALUES
(3, 2, 'TITLE', 'sfffaf', NULL, '2023-10-09 09:32:09', '2023-10-09 09:32:09'),
(4, 2, 'ABSTRACT', 'afasfa', NULL, '2023-10-09 09:32:09', '2023-10-09 09:32:09'),
(5, 2, 'INDRODUCTION', 'fgafgasrgf', NULL, '2023-10-09 09:32:09', '2023-10-09 09:32:09'),
(6, 2, 'OBJECTIVES', 'sgsg', NULL, '2023-10-09 09:32:09', '2023-10-09 09:32:09'),
(7, 2, 'METHODOLOGY', 'gasgassg', NULL, '2023-10-09 09:32:09', '2023-10-09 09:32:09'),
(8, 2, 'PROBLEM ANALYSIS', 'sgasgasg', NULL, '2023-10-09 09:32:09', '2023-10-09 09:32:09'),
(9, 2, 'SOLUTION', 'ttdgdg', NULL, '2023-10-10 06:38:05', '2023-10-10 06:38:05'),
(10, 2, 'RESULTS', 'grrgrgdrgd', NULL, '2023-10-10 06:38:05', '2023-10-10 06:38:05'),
(11, 2, 'LESSONS LEARNED', 'rgttrjuk', NULL, '2023-10-17 04:06:44', '2023-10-17 04:06:44'),
(12, 2, 'CONCLUSION', 'ggergreg', NULL, '2023-10-17 04:06:44', '2023-10-17 04:06:44'),
(13, 2, 'RECOMENDATIONS', 'gghegrege', NULL, '2023-10-17 04:06:44', '2023-10-17 04:06:44'),
(14, 2, 'REFERENCES', 'hrjuj jr', NULL, '2023-10-17 04:06:44', '2023-10-17 04:06:44'),
(15, 2, 'APPENDICES', 'nukjhss herh e', NULL, '2023-10-17 04:06:44', '2023-10-17 04:06:44'),
(16, 2, 'ACKNOWLEDGEMENT', 'fhtjtujrhd', NULL, '2023-10-17 04:06:44', '2023-10-17 04:06:44');

-- --------------------------------------------------------

--
-- Table structure for table `videos`
--

CREATE TABLE `videos` (
  `id` int(11) NOT NULL,
  `course_id` int(11) DEFAULT NULL,
  `section_id` int(11) DEFAULT NULL,
  `video_details` longtext DEFAULT NULL,
  `video_name` varchar(255) DEFAULT NULL,
  `video_file` varchar(255) DEFAULT NULL,
  `video_desc` text DEFAULT NULL,
  `digital_link` text DEFAULT NULL,
  `lab_link` text DEFAULT NULL,
  `video_count` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `videos`
--

INSERT INTO `videos` (`id`, `course_id`, `section_id`, `video_details`, `video_name`, `video_file`, `video_desc`, `digital_link`, `lab_link`, `video_count`, `created_at`, `updated_at`) VALUES
(1, 1, 1, NULL, 'Object file vs Executable file', 'uploads/9AAU1684905171.mp4', 'Test -> Know more about Object and Executable file', NULL, NULL, NULL, '2023-05-24 05:12:51', '2023-05-24 05:12:51'),
(2, 2, 2, NULL, 'Video 1 Introduction', 'uploads/SHGV1684912023.mp4', 'Intro Intro Intro', NULL, NULL, NULL, '2023-05-24 07:07:03', '2023-05-24 07:07:03'),
(3, 2, 2, NULL, 'Video 2 Introduction', 'uploads/9AAU1684905171.mp4', NULL, NULL, NULL, NULL, '2023-05-24 07:07:03', '2023-05-24 07:07:03'),
(4, 2, 3, NULL, 'installation 2', 'uploads/7gbJ1697698969.mp4', 'sfsdfsafsdd', NULL, NULL, NULL, '2023-10-19 07:02:49', '2023-10-19 07:02:49'),
(5, 3, 5, NULL, 'fsafsaf', 'uploads/Rc4u1699267745.mp4', 'fsfasdfsadf', NULL, NULL, NULL, '2023-11-06 10:49:05', '2023-11-06 10:49:05'),
(6, 3, 5, NULL, 'fdsasfs', 'uploads/4uEQ1699267745.mp4', 'fsdfsafasfsf', NULL, NULL, NULL, '2023-11-06 10:49:05', '2023-11-06 10:49:05');

-- --------------------------------------------------------

--
-- Table structure for table `video_hls_secrets`
--

CREATE TABLE `video_hls_secrets` (
  `id` int(11) NOT NULL,
  `video_name` text DEFAULT NULL,
  `file_name` text DEFAULT NULL,
  `contents` blob DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `video_hls_secrets`
--

INSERT INTO `video_hls_secrets` (`id`, `video_name`, `file_name`, `contents`, `created_at`, `updated_at`) VALUES
(1, 'FSSR1697277818', 'a8c0d3ff77ccb41f.key', 0xbb3f75e9627c240013623350c7b8f227, '2023-10-14 10:03:39', '2023-10-14 10:03:39'),
(2, 'FSSR1697277818', '45c57500f620e761.key', 0x8459b338dcb20ee3a4f71b8dc7fc56c0, '2023-10-14 10:03:39', '2023-10-14 10:03:39'),
(3, 'FSSR1697277818', '31f3162c57bcf626.key', 0x1029aaa8057302b7aa8660ebd51efc8b, '2023-10-14 10:03:40', '2023-10-14 10:03:40'),
(4, 'FSSR1697277818', '2f8a5f39365d8797.key', 0x921ca2b825bef02c267077dcd0de48d5, '2023-10-14 10:03:40', '2023-10-14 10:03:40'),
(5, 'FSSR1697277818', '609f517536fc3650.key', 0x977b003f4596b5c2d9a597201dd2207c, '2023-10-14 10:03:45', '2023-10-14 10:03:45'),
(6, 'FSSR1697277818', 'd01727305a68acd3.key', 0xce6f383959953748785f5efc6eedf037, '2023-10-14 10:03:46', '2023-10-14 10:03:46'),
(7, 'FSSR1697277818', 'aa8f5df387c5c989.key', 0x8c1e4e7f79c5e088e4694bdfe432f7ac, '2023-10-14 10:03:49', '2023-10-14 10:03:49'),
(8, 'FSSR1697277818', 'fa7d30793eabf9a4.key', 0xf9598f467ce9dcc1ea1f267ce2304799, '2023-10-14 10:03:50', '2023-10-14 10:03:50'),
(9, 'FSSR1697277818', 'cf58978ee18adcf3.key', 0xbc47254f9b866a38cba3f0f5a17983fe, '2023-10-14 10:03:54', '2023-10-14 10:03:54'),
(10, 'FSSR1697277818', '3f155dd39a966ced.key', 0x8405dfb678b32df97e772048c01dd097, '2023-10-14 10:03:54', '2023-10-14 10:03:54'),
(11, 'FSSR1697277818', '28e24827eb0bb128.key', 0x37af864a9cb1d8e1a1c24331aa862674, '2023-10-14 10:03:59', '2023-10-14 10:03:59'),
(12, 'FSSR1697277818', '510bd52ed02f4470.key', 0xdc317630732752893541583415c757ad, '2023-10-14 10:03:59', '2023-10-14 10:03:59'),
(13, 'FSSR1697277818', '4feb821aa181250d.key', 0x888c21afbb7015978f96034f1677c9c5, '2023-10-14 10:04:07', '2023-10-14 10:04:07'),
(14, 'FSSR1697277818', '12d2748bb6cd2b40.key', 0x336606e1652680c1af75af8a8f01615d, '2023-10-14 10:04:07', '2023-10-14 10:04:07'),
(15, 'FSSR1697277818', '3256bea04d743e9f.key', 0x7a6b396efb0885286a5bf64ee283f41a, '2023-10-14 10:04:11', '2023-10-14 10:04:11'),
(16, 'FSSR1697277818', '3878ea0ddca2fb42.key', 0xbc0310f09c0503fcf00bfdc5d123d07d, '2023-10-14 10:04:11', '2023-10-14 10:04:11'),
(17, 'FSSR1697277818', '03e5f58379adadfc.key', 0x3510d5208b1b11d5d6ccf9e27db42a33, '2023-10-14 10:04:16', '2023-10-14 10:04:16'),
(18, 'FSSR1697277818', 'b7024d1698c61de0.key', 0xea04315a6e69f08a1f734254e1f8e15f, '2023-10-14 10:04:16', '2023-10-14 10:04:16'),
(19, 'FSSR1697277818', '06bb7b01a93d1abe.key', 0xa75e70192d699186bda7999630507221, '2023-10-14 10:04:21', '2023-10-14 10:04:21'),
(20, 'FSSR1697277818', '6cc061a6c1864e22.key', 0x5e5f7495f193dc18e00f55d00949f818, '2023-10-14 10:04:21', '2023-10-14 10:04:21'),
(21, 'FSSR1697277818', '1ac98aa007b3d167.key', 0x34a4464c82617c729c6a6240204263d8, '2023-10-14 10:04:26', '2023-10-14 10:04:26'),
(22, 'FSSR1697277818', 'aad210fac826e974.key', 0xf7c6d9002d9a5fd3e54bf615698862d6, '2023-10-14 10:04:26', '2023-10-14 10:04:26'),
(23, 'FSSR1697277818', 'f5f9644c83db78ec.key', 0x8a5025f6f60a122557b5140a25f492f2, '2023-10-14 10:04:32', '2023-10-14 10:04:32'),
(24, 'FSSR1697277818', '5817317c09245e29.key', 0xda1574c7d2166e594e2c629c77bcdb04, '2023-10-14 10:04:32', '2023-10-14 10:04:32'),
(25, 'FSSR1697277818', '47525496b0a7a0ae.key', 0xac282316f94d303a34bcc8f8ad938c27, '2023-10-14 10:04:37', '2023-10-14 10:04:37'),
(26, 'FSSR1697277818', '621811ca4ed3bbfd.key', 0xed5b33dd1ddb413872e06a363d452a31, '2023-10-14 10:04:37', '2023-10-14 10:04:37'),
(27, 'FSSR1697277818', '3e9b68cbd1026b3e.key', 0x73332b1e1c311b9e572a48bafa95c397, '2023-10-14 10:04:42', '2023-10-14 10:04:42'),
(28, 'FSSR1697277818', 'e9d25eb5eb7132d4.key', 0xe3a08149fdd700c79694e35960b00225, '2023-10-14 10:04:42', '2023-10-14 10:04:42'),
(29, 'FSSR1697277818', '7e0ca95ee324da1a.key', 0x206c021f67f1b4ad5b4e880fa9c80505, '2023-10-14 10:04:47', '2023-10-14 10:04:47'),
(30, 'FSSR1697277818', '28fa31e1dc74c759.key', 0xd2b3d0132e453a6c1b56db8802cc902e, '2023-10-14 10:04:47', '2023-10-14 10:04:47'),
(31, 'FSSR1697277818', '009b84a2090387f1.key', 0x39660122749e1193aa31cda3aaab0e87, '2023-10-14 10:04:53', '2023-10-14 10:04:53'),
(32, 'FSSR1697277818', 'ffc9bd0e112778f7.key', 0x1f0bde43acc5c24b4d035a1e17762461, '2023-10-14 10:04:53', '2023-10-14 10:04:53'),
(33, 'FSSR1697277818', '0f997db8c11a605e.key', 0xb0fc52b81e63867f01d910cfe070f465, '2023-10-14 10:05:03', '2023-10-14 10:05:03'),
(34, 'FSSR1697277818', '62431e8f386a906b.key', 0xfaacb7dd64610ae14adf96637fd36914, '2023-10-14 10:05:03', '2023-10-14 10:05:03'),
(35, 'j4tw1697280841', 'cfd1221258204cbc.key', 0xe9fe2cf87da0483543f9e0ca2ea2eba1, '2023-10-14 10:54:06', '2023-10-14 10:54:06'),
(36, 'j4tw1697280841', 'cfc40c59ae8e66bc.key', 0xe78aef6ceb46be8c63d0330f45ec6112, '2023-10-14 10:54:06', '2023-10-14 10:54:06'),
(37, 'j4tw1697280841', 'e740f9172ba6fbdb.key', 0xa379d621e7acd7e7369df8320f9f4448, '2023-10-14 10:54:08', '2023-10-14 10:54:08'),
(38, 'j4tw1697280841', '8ac9ecf89d6a079e.key', 0x3dea7d0bf1b8c8c2518fbed7c786ac7c, '2023-10-14 10:54:08', '2023-10-14 10:54:08'),
(39, '0xpy1697281084', 'ea0eb48c709e5860.key', 0x7119388e2ae9800aa41c279413158ae9, '2023-10-14 10:58:06', '2023-10-14 10:58:06'),
(40, '0xpy1697281084', '298d5f470b9652b0.key', 0x81040b44d76030ea67165f3faa06909d, '2023-10-14 10:58:06', '2023-10-14 10:58:06'),
(41, '0xpy1697281084', 'c9ea5c312b1d296d.key', 0x7cc1015075e77d5352fb710c52da1c23, '2023-10-14 10:58:07', '2023-10-14 10:58:07'),
(42, '0xpy1697281084', 'a96624871a9a03d5.key', 0x66b1ebf2ad35bb7e66ae7634daaf0e3a, '2023-10-14 10:58:07', '2023-10-14 10:58:07'),
(43, '0xpy1697281084', 'a8451633aa314730.key', 0x8702b3e0caba2ed9e53a4f5bbff026e5, '2023-10-14 10:58:15', '2023-10-14 10:58:15'),
(44, '0xpy1697281084', 'f47321ab4b000bae.key', 0x85ab17843e45a8bc1e733c84837ffba0, '2023-10-14 10:58:15', '2023-10-14 10:58:15'),
(45, '0xpy1697281084', 'bbeabc83288f23db.key', 0x35cedb012d31dd949448a27cb8a3317e, '2023-10-14 10:58:22', '2023-10-14 10:58:22'),
(46, '0xpy1697281084', '97a0dce3007fb15f.key', 0x1476a9a23f781e463937bc28911cc314, '2023-10-14 10:58:22', '2023-10-14 10:58:22'),
(47, '0xpy1697281084', '41440217a55f3e26.key', 0x5cfdd7466b741e797dd896a92edf09ec, '2023-10-14 10:58:29', '2023-10-14 10:58:29'),
(48, '0xpy1697281084', 'd32e19404dc66e3b.key', 0xf753b36bf8a18508bcaf2099aa2dc406, '2023-10-14 10:58:29', '2023-10-14 10:58:29'),
(49, '0xpy1697281084', '908b1bd03c45a2cd.key', 0xfb4641ebcc47be7a30010089f3e9ab80, '2023-10-14 10:58:36', '2023-10-14 10:58:36'),
(50, '0xpy1697281084', '979f6ff22eea3452.key', 0xb53c0e16a304b4023e92483bc6549598, '2023-10-14 10:58:36', '2023-10-14 10:58:36'),
(51, '0xpy1697281084', '3a06f8f2bd1a3393.key', 0x900f98f35e02b338aa4619772668d647, '2023-10-14 10:58:47', '2023-10-14 10:58:47'),
(52, '0xpy1697281084', '01e883a6d9e1f435.key', 0x56aa8e9ed71897762dd580a742685d00, '2023-10-14 10:58:47', '2023-10-14 10:58:47'),
(53, '0xpy1697281084', '261b2b9979b50acf.key', 0x554d6cc10148fe3347b43be175aa3f08, '2023-10-14 10:58:52', '2023-10-14 10:58:52'),
(54, '0xpy1697281084', '638947111a42fe75.key', 0xc9690aae103f4691bf9681a3c984caeb, '2023-10-14 10:58:52', '2023-10-14 10:58:52'),
(55, '0xpy1697281084', '6e82cc0ae733a322.key', 0x76c8ab14d34cfe047f16fe27ad65ecb0, '2023-10-14 10:58:58', '2023-10-14 10:58:58'),
(56, '0xpy1697281084', '39e47f6deff4d06a.key', 0x6b7ff0468602f77a768a164e57e9b66f, '2023-10-14 10:58:58', '2023-10-14 10:58:58'),
(57, '0xpy1697281084', '14c3c53e9b7133a1.key', 0x6d033fc0081a65b3a7061a8680983164, '2023-10-14 10:59:04', '2023-10-14 10:59:04'),
(58, '0xpy1697281084', '8a35f8a3eae32526.key', 0x2033798009496e5e83ffdf5fc559d4cf, '2023-10-14 10:59:04', '2023-10-14 10:59:04'),
(59, '0xpy1697281084', '433913ca6d1d22eb.key', 0x051f0287da41400b359a546a7d0ab792, '2023-10-14 10:59:10', '2023-10-14 10:59:10'),
(60, '0xpy1697281084', '3d32a162efdcc0d4.key', 0xae89a60fa7102568eb5d26ba4d896f33, '2023-10-14 10:59:10', '2023-10-14 10:59:10'),
(61, '0xpy1697281084', '3bd8b535b7ad18ec.key', 0xb875e9aaa92b6db404c8f50e4c392538, '2023-10-14 10:59:18', '2023-10-14 10:59:18'),
(62, '0xpy1697281084', '1a0f1159c34cf0d1.key', 0x713c0b0ab5553ce732950c2a6d152cf7, '2023-10-14 10:59:18', '2023-10-14 10:59:18'),
(63, '0xpy1697281084', '3e323829aac8d4b2.key', 0x00dc5e66c378ad0e149834da7b29baa8, '2023-10-14 10:59:24', '2023-10-14 10:59:24'),
(64, '0xpy1697281084', 'a9567c46179be4b6.key', 0x6dbcfb2a5a793735b0fb85c86bce79af, '2023-10-14 10:59:24', '2023-10-14 10:59:24'),
(65, '0xpy1697281084', '66c50e4cf1a8885d.key', 0xfaec50231ff5fbf1eeaaac7e498a5953, '2023-10-14 10:59:31', '2023-10-14 10:59:31'),
(66, '0xpy1697281084', 'b722b2582c65b793.key', 0x1a2c06cd94b52f7cf8f6f76bfbd958a5, '2023-10-14 10:59:31', '2023-10-14 10:59:31'),
(67, '0xpy1697281084', '240f443a6c9735f7.key', 0xf677b20023c07d140e48cff33cfb0e4c, '2023-10-14 10:59:37', '2023-10-14 10:59:37'),
(68, '0xpy1697281084', '11df0d4257cdf322.key', 0x07857ef0b1650125d251c2cdfe01ad76, '2023-10-14 10:59:38', '2023-10-14 10:59:38'),
(69, '0xpy1697281084', '3ae5d47e1b44c610.key', 0x1939d2be5c76b57c2ee7f0f40f84969a, '2023-10-14 10:59:45', '2023-10-14 10:59:45'),
(70, '0xpy1697281084', 'dde592fa7ae08bf6.key', 0x4c9e33c2e4466fab73b26f7e2be82ed5, '2023-10-14 10:59:45', '2023-10-14 10:59:45'),
(71, '0xpy1697281084', 'a83cb8dd4596a97f.key', 0xab761333c0bbf5ba02d7d710ab8101b2, '2023-10-14 10:59:56', '2023-10-14 10:59:56'),
(72, '0xpy1697281084', '89f9dce9659db99a.key', 0x7883c039104f88dea2844d138372be6a, '2023-10-14 10:59:56', '2023-10-14 10:59:56'),
(73, 'pAlu1697281410', '81c36f70201459c4.key', 0x789055b9b645d5c90ade8d07cd0d148a, '2023-10-14 11:03:32', '2023-10-14 11:03:32'),
(74, 'pAlu1697281410', '935db9b44ecc0ddf.key', 0x01587f0c88b73fa87299ec38533c5a95, '2023-10-14 11:03:32', '2023-10-14 11:03:32'),
(75, 'pAlu1697281410', 'f0f5559fc2a864d7.key', 0xffcac4de411efb0a74378885ea59b0a0, '2023-10-14 11:03:34', '2023-10-14 11:03:34'),
(76, 'pAlu1697281410', '8ddc255aac566ebe.key', 0x5ef00216181fa65bdc238c8f27a944e9, '2023-10-14 11:03:34', '2023-10-14 11:03:34'),
(77, 'Z4rX1697281552', '239996fc67d4f101.key', 0xe067482d8447d8c81fee574cb6cc0b8c, '2023-10-14 11:05:53', '2023-10-14 11:05:53'),
(78, 'Z4rX1697281552', 'ddaaed1ae434415c.key', 0x9c3ce1423461bb77d0825d1c1aea7501, '2023-10-14 11:05:53', '2023-10-14 11:05:53'),
(79, 'Z4rX1697281552', '18c5a0eabde5ef5f.key', 0x6a26b946ef56a2f7c2c99e0a20c70197, '2023-10-14 11:05:53', '2023-10-14 11:05:53'),
(80, 'Z4rX1697281552', 'c58245c3421fac7a.key', 0x00856ab27c66be2fab0116b4f8655e32, '2023-10-14 11:05:53', '2023-10-14 11:05:53');

-- --------------------------------------------------------

--
-- Table structure for table `video_play_backs`
--

CREATE TABLE `video_play_backs` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `course_id` int(11) DEFAULT NULL,
  `video_id` int(11) DEFAULT NULL,
  `video_time_stamp` varchar(255) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `video_play_backs`
--

INSERT INTO `video_play_backs` (`id`, `user_id`, `course_id`, `video_id`, `video_time_stamp`, `status`, `created_at`, `updated_at`) VALUES
(5, 31, 2, 1, '0', 0, '2023-10-17 07:42:32', '2023-10-18 10:29:39'),
(17, 31, 2, 3, '0.450863', 0, '2023-10-19 08:40:25', '2023-10-20 06:27:32'),
(19, 31, 2, 4, '1.209592', 0, '2023-10-19 08:41:46', '2023-10-19 10:44:05'),
(20, 31, 2, 2, '2.582632', 0, '2023-10-19 09:33:29', '2023-10-19 10:43:08');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `assesments`
--
ALTER TABLE `assesments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `assesment_results`
--
ALTER TABLE `assesment_results`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auth`
--
ALTER TABLE `auth`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `chapters`
--
ALTER TABLE `chapters`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `chapter_videos`
--
ALTER TABLE `chapter_videos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `classes`
--
ALTER TABLE `classes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ebooks`
--
ALTER TABLE `ebooks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ebook_elements`
--
ALTER TABLE `ebook_elements`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ebook_modules`
--
ALTER TABLE `ebook_modules`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ebook_sections`
--
ALTER TABLE `ebook_sections`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `elements`
--
ALTER TABLE `elements`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `enrolled_courses`
--
ALTER TABLE `enrolled_courses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `forum_answers`
--
ALTER TABLE `forum_answers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `forum_questions`
--
ALTER TABLE `forum_questions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `internships`
--
ALTER TABLE `internships`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `internship_applications`
--
ALTER TABLE `internship_applications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `internship_processes`
--
ALTER TABLE `internship_processes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `internship_tasks`
--
ALTER TABLE `internship_tasks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `job_applications`
--
ALTER TABLE `job_applications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `job_details`
--
ALTER TABLE `job_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `labs`
--
ALTER TABLE `labs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `markers`
--
ALTER TABLE `markers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mini_projects`
--
ALTER TABLE `mini_projects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notes`
--
ALTER TABLE `notes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `project_processes`
--
ALTER TABLE `project_processes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `project_reports`
--
ALTER TABLE `project_reports`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `project_report_elements`
--
ALTER TABLE `project_report_elements`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `project_report_element_types`
--
ALTER TABLE `project_report_element_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `project_report_modules`
--
ALTER TABLE `project_report_modules`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `project_tasks`
--
ALTER TABLE `project_tasks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `qnas`
--
ALTER TABLE `qnas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `quizes`
--
ALTER TABLE `quizes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `quiz_masters`
--
ALTER TABLE `quiz_masters`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `quiz_results`
--
ALTER TABLE `quiz_results`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `recruiters`
--
ALTER TABLE `recruiters`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `schools`
--
ALTER TABLE `schools`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `school_assesments`
--
ALTER TABLE `school_assesments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `school_assesment_results`
--
ALTER TABLE `school_assesment_results`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `school_forum_answers`
--
ALTER TABLE `school_forum_answers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `school_forum_questions`
--
ALTER TABLE `school_forum_questions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `school_messages`
--
ALTER TABLE `school_messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `school_mini_projects`
--
ALTER TABLE `school_mini_projects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `school_notes`
--
ALTER TABLE `school_notes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `school_project_processes`
--
ALTER TABLE `school_project_processes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `school_project_tasks`
--
ALTER TABLE `school_project_tasks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `school_qnas`
--
ALTER TABLE `school_qnas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `school_students`
--
ALTER TABLE `school_students`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `school_subjects`
--
ALTER TABLE `school_subjects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `school_tests`
--
ALTER TABLE `school_tests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `school_test_masters`
--
ALTER TABLE `school_test_masters`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `school_test_results`
--
ALTER TABLE `school_test_results`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `school_video_play_backs`
--
ALTER TABLE `school_video_play_backs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sections`
--
ALTER TABLE `sections`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_referrals`
--
ALTER TABLE `student_referrals`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subjects`
--
ALTER TABLE `subjects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subscriptions`
--
ALTER TABLE `subscriptions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `use_cases`
--
ALTER TABLE `use_cases`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `use_case_elements`
--
ALTER TABLE `use_case_elements`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `use_case_element_types`
--
ALTER TABLE `use_case_element_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `use_case_modules`
--
ALTER TABLE `use_case_modules`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `video_hls_secrets`
--
ALTER TABLE `video_hls_secrets`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `video_play_backs`
--
ALTER TABLE `video_play_backs`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `assesments`
--
ALTER TABLE `assesments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `assesment_results`
--
ALTER TABLE `assesment_results`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `auth`
--
ALTER TABLE `auth`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `chapters`
--
ALTER TABLE `chapters`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `chapter_videos`
--
ALTER TABLE `chapter_videos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `classes`
--
ALTER TABLE `classes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `ebooks`
--
ALTER TABLE `ebooks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `ebook_elements`
--
ALTER TABLE `ebook_elements`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=150;

--
-- AUTO_INCREMENT for table `ebook_modules`
--
ALTER TABLE `ebook_modules`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `ebook_sections`
--
ALTER TABLE `ebook_sections`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `elements`
--
ALTER TABLE `elements`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `enrolled_courses`
--
ALTER TABLE `enrolled_courses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `forum_answers`
--
ALTER TABLE `forum_answers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `forum_questions`
--
ALTER TABLE `forum_questions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `internships`
--
ALTER TABLE `internships`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `internship_applications`
--
ALTER TABLE `internship_applications`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `internship_processes`
--
ALTER TABLE `internship_processes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `internship_tasks`
--
ALTER TABLE `internship_tasks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `job_applications`
--
ALTER TABLE `job_applications`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `job_details`
--
ALTER TABLE `job_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `labs`
--
ALTER TABLE `labs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `markers`
--
ALTER TABLE `markers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `mini_projects`
--
ALTER TABLE `mini_projects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `notes`
--
ALTER TABLE `notes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `project_processes`
--
ALTER TABLE `project_processes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `project_reports`
--
ALTER TABLE `project_reports`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `project_report_elements`
--
ALTER TABLE `project_report_elements`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `project_report_element_types`
--
ALTER TABLE `project_report_element_types`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `project_report_modules`
--
ALTER TABLE `project_report_modules`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `project_tasks`
--
ALTER TABLE `project_tasks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `qnas`
--
ALTER TABLE `qnas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `quizes`
--
ALTER TABLE `quizes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `quiz_masters`
--
ALTER TABLE `quiz_masters`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `quiz_results`
--
ALTER TABLE `quiz_results`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `recruiters`
--
ALTER TABLE `recruiters`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `schools`
--
ALTER TABLE `schools`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `school_assesments`
--
ALTER TABLE `school_assesments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `school_assesment_results`
--
ALTER TABLE `school_assesment_results`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `school_forum_answers`
--
ALTER TABLE `school_forum_answers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `school_forum_questions`
--
ALTER TABLE `school_forum_questions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `school_messages`
--
ALTER TABLE `school_messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `school_mini_projects`
--
ALTER TABLE `school_mini_projects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `school_notes`
--
ALTER TABLE `school_notes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `school_project_processes`
--
ALTER TABLE `school_project_processes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `school_project_tasks`
--
ALTER TABLE `school_project_tasks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `school_qnas`
--
ALTER TABLE `school_qnas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `school_students`
--
ALTER TABLE `school_students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `school_subjects`
--
ALTER TABLE `school_subjects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `school_tests`
--
ALTER TABLE `school_tests`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `school_test_masters`
--
ALTER TABLE `school_test_masters`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `school_test_results`
--
ALTER TABLE `school_test_results`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `school_video_play_backs`
--
ALTER TABLE `school_video_play_backs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `sections`
--
ALTER TABLE `sections`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `student_referrals`
--
ALTER TABLE `student_referrals`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `subjects`
--
ALTER TABLE `subjects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `subscriptions`
--
ALTER TABLE `subscriptions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `teachers`
--
ALTER TABLE `teachers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `use_cases`
--
ALTER TABLE `use_cases`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `use_case_elements`
--
ALTER TABLE `use_case_elements`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `use_case_element_types`
--
ALTER TABLE `use_case_element_types`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `use_case_modules`
--
ALTER TABLE `use_case_modules`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `videos`
--
ALTER TABLE `videos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `video_hls_secrets`
--
ALTER TABLE `video_hls_secrets`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;

--
-- AUTO_INCREMENT for table `video_play_backs`
--
ALTER TABLE `video_play_backs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
