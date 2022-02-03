-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 03, 2022 at 12:38 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel_hospital-management-system-project`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointments`
--

CREATE TABLE `appointments` (
  `id` int(10) UNSIGNED NOT NULL,
  `app_sl` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `app_p_id` bigint(20) UNSIGNED NOT NULL,
  `app_p_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `app_p_phone` int(11) NOT NULL,
  `app_doc_id` bigint(20) UNSIGNED NOT NULL,
  `app_doc_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `app_date` date NOT NULL,
  `app_status` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `app_message` varchar(220) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `appointments`
--

INSERT INTO `appointments` (`id`, `app_sl`, `app_p_id`, `app_p_name`, `app_p_phone`, `app_doc_id`, `app_doc_name`, `app_date`, `app_status`, `app_message`, `created_at`, `updated_at`) VALUES
(1, 'APP-000002', 3, 'asfdsf', 453543, 1, 'dsfdsfds', '2022-01-03', 'active', 'aaaaaaaaaaaa', '2022-01-27 05:41:38', '2022-01-27 05:44:02'),
(2, 'APP-000003', 3, 'asfdsf', 453543, 1, 'dsfdsfds', '2022-01-17', 'active', 'sdfdsf', '2022-01-27 05:44:15', '2022-01-27 05:44:15'),
(4, 'APP-000004', 3, 'asfdsf', 453543, 2, 'Simone Hickman', '2020-12-15', 'inactive', 'Voluptatem Nam sed a', '2022-01-31 04:09:19', '2022-01-31 04:09:19'),
(5, 'APP-000005', 3, 'asfdsf', 453543, 2, 'Simone Hickman', '2003-08-12', 'inactive', 'Numquam laboriosam', '2022-01-31 04:24:40', '2022-01-31 04:24:40');

-- --------------------------------------------------------

--
-- Table structure for table `assets`
--

CREATE TABLE `assets` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_of_purchase` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `assets`
--

INSERT INTO `assets` (`id`, `name`, `category`, `price`, `date_of_purchase`, `created_at`, `updated_at`) VALUES
(1, 'Bert Sweet', 'asddddddd', '828', '2000-10-05', '2022-01-29 05:59:33', '2022-01-29 05:59:33'),
(2, 'Abigail Hayden', 'Candace Blair', '394', '2014-10-24', '2022-01-29 05:59:38', '2022-01-29 05:59:38'),
(3, 'Kelly Warren', 'Jack Hendricks', '4455', '1998-01-29', '2022-01-29 05:59:41', '2022-01-29 06:04:17');

-- --------------------------------------------------------

--
-- Table structure for table `asset_categories`
--

CREATE TABLE `asset_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `asset_categories`
--

INSERT INTO `asset_categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(3, 'Candace Blair', '2022-01-29 05:39:22', '2022-01-29 05:39:22'),
(4, 'asddddddd', '2022-01-29 05:39:25', '2022-01-29 05:42:23'),
(5, 'Jack Hendricks', '2022-01-29 05:58:36', '2022-01-29 05:58:36'),
(6, 'Burke Valenzuela', '2022-01-29 05:58:39', '2022-01-29 05:58:39');

-- --------------------------------------------------------

--
-- Table structure for table `beds`
--

CREATE TABLE `beds` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `bed_no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `floor` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bed_cat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `beds`
--

INSERT INTO `beds` (`id`, `bed_no`, `floor`, `bed_cat`, `price`, `created_at`, `updated_at`) VALUES
(1, 'sdfsdf-dvdfg-45', 'sdfsdf', 'dvdfg', 345, '2022-01-24 11:15:01', '2022-01-24 11:15:01');

-- --------------------------------------------------------

--
-- Table structure for table `bed_categories`
--

CREATE TABLE `bed_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bed_categories`
--

INSERT INTO `bed_categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'dvdfg', '2022-01-24 10:25:18', '2022-01-24 10:25:18'),
(2, 'dsgsdgsd', '2022-01-24 10:25:20', '2022-01-24 10:25:20'),
(3, 'sdgsdg', '2022-01-24 10:25:24', '2022-01-24 10:25:24');

-- --------------------------------------------------------

--
-- Table structure for table `blood_banks`
--

CREATE TABLE `blood_banks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `blood_bag_name` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `blood_bag_quantity` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blood_banks`
--

INSERT INTO `blood_banks` (`id`, `blood_bag_name`, `blood_bag_quantity`, `created_at`, `updated_at`) VALUES
(1, 'AB-', 5, '2022-01-29 05:21:01', '2022-01-29 05:24:34'),
(2, 'AB-', 5, '2022-01-29 05:21:05', '2022-01-29 05:21:05');

-- --------------------------------------------------------

--
-- Table structure for table `blood_donors`
--

CREATE TABLE `blood_donors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `donor_name` varchar(110) COLLATE utf8mb4_unicode_ci NOT NULL,
  `donor_blood` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `donor_age` int(11) NOT NULL,
  `donor_sex` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `donor_last_date` date NOT NULL,
  `donor_phone` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `donor_email` varchar(110) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blood_donors`
--

INSERT INTO `blood_donors` (`id`, `donor_name`, `donor_blood`, `donor_age`, `donor_sex`, `donor_last_date`, `donor_phone`, `donor_email`, `created_at`, `updated_at`) VALUES
(1, 'aaaaaaaaaa', 'B-', 23, 'male', '2022-01-18', '2343', 'asdsa@ew.cy', '2022-01-29 04:55:39', '2022-01-29 04:59:13'),
(3, 'erert', 'A-', 345, 'female', '2022-01-03', '35435', 'erew@ad.com', '2022-01-29 04:59:52', '2022-01-29 04:59:52'),
(4, 'Oscar Wade', 'A-', 26, 'male', '1989-10-20', '82', 'jiwykuxo@mailinator.com', '2022-01-29 05:24:54', '2022-01-29 05:24:54');

-- --------------------------------------------------------

--
-- Table structure for table `blood_groups`
--

CREATE TABLE `blood_groups` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blood_groups`
--

INSERT INTO `blood_groups` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'AB+', '2022-01-29 04:51:02', '2022-01-29 04:51:02'),
(2, 'AB-', '2022-01-29 04:51:15', '2022-01-29 04:51:15'),
(6, 'A+', '2022-01-29 04:54:42', '2022-01-29 04:54:42'),
(7, 'A-', '2022-01-29 04:54:48', '2022-01-29 04:54:48'),
(8, 'B+', '2022-01-29 04:54:53', '2022-01-29 04:54:53'),
(9, 'B-', '2022-01-29 04:54:57', '2022-01-29 04:54:57'),
(10, 'O-', '2022-01-29 04:55:04', '2022-01-29 04:55:04'),
(11, 'O+', '2022-01-29 04:55:16', '2022-01-29 04:55:16');

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `dept_name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dept_status` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dept_details` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`id`, `dept_name`, `dept_status`, `dept_details`, `created_at`, `updated_at`) VALUES
(1, 'saf', 'active', 'safsaf', '2022-01-23 11:44:09', '2022-01-23 11:44:09'),
(2, 'faa', 'inactive', 'asfaf', '2022-01-23 11:53:12', '2022-01-23 11:53:12'),
(3, 'cgfhgf', 'inactive', 'jgfjfgj', '2022-01-24 10:29:21', '2022-01-24 10:29:21');

-- --------------------------------------------------------

--
-- Table structure for table `doctors`
--

CREATE TABLE `doctors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `doc_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `doc_name` varchar(110) COLLATE utf8mb4_unicode_ci NOT NULL,
  `doc_specialist` varchar(110) COLLATE utf8mb4_unicode_ci NOT NULL,
  `doc_education` varchar(110) COLLATE utf8mb4_unicode_ci NOT NULL,
  `doc_phone` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `doc_address` varchar(110) COLLATE utf8mb4_unicode_ci NOT NULL,
  `doc_email` varchar(110) COLLATE utf8mb4_unicode_ci NOT NULL,
  `doc_password` varchar(110) COLLATE utf8mb4_unicode_ci NOT NULL,
  `doc_gender` varchar(110) COLLATE utf8mb4_unicode_ci NOT NULL,
  `doc_blood` varchar(110) COLLATE utf8mb4_unicode_ci NOT NULL,
  `doc_status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `doc_img` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `doc_dept_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `doctors`
--

INSERT INTO `doctors` (`id`, `doc_id`, `doc_name`, `doc_specialist`, `doc_education`, `doc_phone`, `doc_address`, `doc_email`, `doc_password`, `doc_gender`, `doc_blood`, `doc_status`, `doc_img`, `doc_dept_id`, `created_at`, `updated_at`) VALUES
(1, 'DOC-1', 'dsfdsfds', 'tge', 'wetw', '453543', 'dsgsdgdsg', 'fhdhf@fdh.cvg', '$2y$10$8TYjAd46kqQ/jHPElXJkf.jCFFiQ2Vl7B4zzFFqa4cpjUhCyOSGTe', 'female', 'A-', 'inactive', 'cfcf7d62-5b9b-4b81-a012-5af0ff96e2ee.jpg', 1, '2022-01-26 06:58:03', '2022-01-26 06:58:03'),
(2, 'DOC-2', 'Simone Hickman', 'Omnis itaque unde is', 'Beatae perferendis e', '14', 'Officia voluptas dol', 'zovefazywi@mailinator.com', '$2y$10$ZPA0J6hNtUSW0nOI.busZO6OWcK3wvu5AsynHnQiF.cylILn42ixW', 'male', 'AB+', 'inactive', '72243025.jpg', 1, '2022-01-30 05:27:29', '2022-01-30 05:27:29');

-- --------------------------------------------------------

--
-- Table structure for table `doctor_schedules`
--

CREATE TABLE `doctor_schedules` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `doc_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `start_time` time NOT NULL,
  `end_time` time NOT NULL,
  `room` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `doctor_schedules`
--

INSERT INTO `doctor_schedules` (`id`, `doc_name`, `date`, `start_time`, `end_time`, `room`, `created_at`, `updated_at`) VALUES
(1, 'Simone Hickman', '2002-09-19', '09:18:00', '15:48:00', '102', '2022-02-01 03:42:11', '2022-02-01 03:42:11'),
(2, 'dsfdsfds', '1993-05-11', '00:20:00', '18:30:00', '102', '2022-02-01 03:42:30', '2022-02-01 03:42:30'),
(3, 'dsfdsfds', '1992-10-26', '10:20:00', '03:03:00', '102', '2022-02-01 03:42:42', '2022-02-01 03:42:42'),
(4, 'Simone Hickman', '1977-12-16', '23:07:00', '11:55:00', '104', '2022-02-01 03:42:54', '2022-02-01 03:42:54');

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `emp_name` varchar(110) COLLATE utf8mb4_unicode_ci NOT NULL,
  `emp_phone` varchar(110) COLLATE utf8mb4_unicode_ci NOT NULL,
  `emp_address` varchar(110) COLLATE utf8mb4_unicode_ci NOT NULL,
  `emp_sex` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `emp_email` varchar(110) COLLATE utf8mb4_unicode_ci NOT NULL,
  `emp_password` varchar(220) COLLATE utf8mb4_unicode_ci NOT NULL,
  `emp_joining_date` varchar(220) COLLATE utf8mb4_unicode_ci NOT NULL,
  `emp_status` varchar(220) COLLATE utf8mb4_unicode_ci NOT NULL,
  `emp_s_basic` int(11) NOT NULL,
  `emp_s_house` int(11) NOT NULL,
  `emp_s_medicale` int(11) DEFAULT NULL,
  `emp_s_convience` int(11) DEFAULT NULL,
  `emp_s_bonous` int(11) DEFAULT NULL,
  `emp_img` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `emp_role_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`id`, `emp_name`, `emp_phone`, `emp_address`, `emp_sex`, `emp_email`, `emp_password`, `emp_joining_date`, `emp_status`, `emp_s_basic`, `emp_s_house`, `emp_s_medicale`, `emp_s_convience`, `emp_s_bonous`, `emp_img`, `emp_role_id`, `created_at`, `updated_at`) VALUES
(1, 'Lynn Harrington', '33', 'A delectus libero a', 'male', 'fynys@mailinator.com', 'Pa$$w0rd!', '1975-08-16', 'inactive', 67, 95, 43, 69, 93, '72243025.jpg', 2, '2022-01-30 04:10:18', '2022-01-30 04:10:18'),
(2, 'aaaaaaaa', '82', 'Assumenda reiciendis', 'female', 'doki@mailinator.com', 'Pa$$w0rd!', '2006-01-09', 'active', 26, 35, 28, 50, 37, 'cfcf7d62-5b9b-4b81-a012-5af0ff96e2ee.jpg', 3, '2022-01-30 04:15:55', '2022-01-30 04:22:29');

-- --------------------------------------------------------

--
-- Table structure for table `employee_roles`
--

CREATE TABLE `employee_roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `employee_roles`
--

INSERT INTO `employee_roles` (`id`, `name`, `created_at`, `updated_at`) VALUES
(2, 'Admin', '2022-01-30 04:09:46', '2022-01-30 04:09:46'),
(3, 'Doctor', '2022-01-30 04:09:54', '2022-01-30 04:09:54'),
(4, 'Nurse', '2022-01-30 04:09:59', '2022-01-30 04:09:59'),
(5, 'Staff', '2022-01-30 04:10:05', '2022-01-30 04:10:05');

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
-- Table structure for table `floors`
--

CREATE TABLE `floors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `floors`
--

INSERT INTO `floors` (`id`, `name`, `created_at`, `updated_at`) VALUES
(2, 'dfsdg', '2022-01-24 09:49:47', '2022-01-24 09:49:47'),
(3, 'aaaaaaaaa', '2022-01-24 10:09:08', '2022-01-24 10:22:04'),
(4, 'fgdfhfdh', '2022-01-24 10:21:43', '2022-01-24 10:21:43');

-- --------------------------------------------------------

--
-- Table structure for table `in_patients`
--

CREATE TABLE `in_patients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `in_p_s` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `in_p_name` varchar(110) COLLATE utf8mb4_unicode_ci NOT NULL,
  `in_p_sex` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `in_p_age` int(11) NOT NULL,
  `in_p_phone` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `in_p_guardian_name` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `in_p_guardian_phone` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `in_p_blood` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `in_p_height` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `in_p_weight` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `in_p_bp` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `in_p_symptoms` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `in_p_address` varchar(110) COLLATE utf8mb4_unicode_ci NOT NULL,
  `in_p_admission_date` date NOT NULL,
  `in_p_case` varchar(110) COLLATE utf8mb4_unicode_ci NOT NULL,
  `in_p_bed_status` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `in_p_casualty` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `in_p_old_patient` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `in_p_reference` varchar(60) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `in_p_doc_id` bigint(20) UNSIGNED NOT NULL,
  `in_p_bed_category_id` bigint(20) UNSIGNED NOT NULL,
  `in_p_bed_id` bigint(20) UNSIGNED NOT NULL,
  `in_p_note` varchar(220) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `in_patients`
--

INSERT INTO `in_patients` (`id`, `in_p_s`, `in_p_name`, `in_p_sex`, `in_p_age`, `in_p_phone`, `in_p_guardian_name`, `in_p_guardian_phone`, `in_p_blood`, `in_p_height`, `in_p_weight`, `in_p_bp`, `in_p_symptoms`, `in_p_address`, `in_p_admission_date`, `in_p_case`, `in_p_bed_status`, `in_p_casualty`, `in_p_old_patient`, `in_p_reference`, `in_p_doc_id`, `in_p_bed_category_id`, `in_p_bed_id`, `in_p_note`, `created_at`, `updated_at`) VALUES
(1, 'IN-PAT-00000001', 'Erica Sellers', 'female', 47, '+1 (685) 901-4585', 'Dexter Cantrell', '+1 (426) 304-2481', 'A-', '18', '80', '23', 'Lorem exercitation q', 'Qui voluptatem dolor', '2001-07-04', 'Velit modi autem max', 'pending', 'no', 'yes', 'Eius perferendis mol', 1, 3, 1, 'Deserunt dignissimos', '2022-02-02 05:12:56', '2022-02-02 05:12:56');

-- --------------------------------------------------------

--
-- Table structure for table `lab_departments`
--

CREATE TABLE `lab_departments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `lab_departments`
--

INSERT INTO `lab_departments` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Rose Valentine', '2022-01-29 06:23:04', '2022-01-29 06:23:04'),
(2, 'Rahim Reillyyyyyyyyyyyyy', '2022-01-29 06:23:07', '2022-01-29 06:23:23');

-- --------------------------------------------------------

--
-- Table structure for table `lab_tests`
--

CREATE TABLE `lab_tests` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `doc_id` bigint(20) UNSIGNED NOT NULL,
  `out_p_id` bigint(20) UNSIGNED NOT NULL,
  `in_p_id` bigint(20) UNSIGNED NOT NULL,
  `lab_department` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_of_test` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `lab_tests`
--

INSERT INTO `lab_tests` (`id`, `name`, `doc_id`, `out_p_id`, `in_p_id`, `lab_department`, `price`, `date_of_test`, `created_at`, `updated_at`) VALUES
(1, 'Brenna Trujillo', 1, 3, 0, '2', '309', '1970-02-19', '2022-01-29 06:52:56', '2022-01-29 06:52:56');

-- --------------------------------------------------------

--
-- Table structure for table `medicines`
--

CREATE TABLE `medicines` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mg` int(11) NOT NULL,
  `group` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `medicines`
--

INSERT INTO `medicines` (`id`, `name`, `price`, `mg`, `group`, `company`, `created_at`, `updated_at`) VALUES
(1, 'werew', '335', 325, 'sfsdfd', 'sfsaf', '2022-01-27 06:50:28', '2022-01-27 06:50:28'),
(2, 'hfd', '435', 34543, 'sfsdfd', 'sfsaf', '2022-01-27 06:50:41', '2022-01-27 06:50:41');

-- --------------------------------------------------------

--
-- Table structure for table `medicine_companies`
--

CREATE TABLE `medicine_companies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `medicine_companies`
--

INSERT INTO `medicine_companies` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'sfsaf', '2022-01-27 06:50:12', '2022-01-27 06:50:12'),
(2, 'asfaf', '2022-01-27 06:50:15', '2022-01-27 06:50:15');

-- --------------------------------------------------------

--
-- Table structure for table `medicine_groups`
--

CREATE TABLE `medicine_groups` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `medicine_groups`
--

INSERT INTO `medicine_groups` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'sfsdfd', '2022-01-27 06:50:05', '2022-01-27 06:50:05'),
(2, 'safasfsa', '2022-01-27 06:50:09', '2022-01-27 06:50:09');

-- --------------------------------------------------------

--
-- Table structure for table `medicine_invoices`
--

CREATE TABLE `medicine_invoices` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `invoice_no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `medicine_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `medicine_quantity` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `medicine_price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `medicine_discount` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `medicine_total` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `medicine_invoices`
--

INSERT INTO `medicine_invoices` (`id`, `invoice_no`, `medicine_name`, `medicine_quantity`, `medicine_price`, `medicine_discount`, `medicine_total`, `created_at`, `updated_at`) VALUES
(1, 'MED-INVOICE-00001', '2', '805', '350175', '87', '45522.75', '2022-01-31 05:07:31', '2022-01-31 05:07:31'),
(2, 'MED-INVOICE-00002', '1', '320', '107200', '35', '69680', '2022-01-31 05:07:39', '2022-01-31 05:07:39'),
(3, 'MED-INVOICE-00003', '1', '783', '262305', '54', '120660.29999999999', '2022-01-31 05:08:08', '2022-01-31 05:08:08'),
(4, 'MED-INVOICE-00004', '2', '774', '336690', '27', '245783.7', '2022-01-31 05:08:41', '2022-01-31 05:08:41'),
(5, 'MED-INVOICE-00005', '2', '11', '4785', '05', '4545.75', '2022-02-01 04:09:53', '2022-02-01 04:09:53');

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2022_01_22_101551_create_sessions_table', 1),
(8, '2022_01_23_171321_create_departments_table', 2),
(9, '2022_01_24_112523_create_floors_table', 3),
(10, '2022_01_24_115250_create_bed_categories_table', 3),
(12, '2022_01_24_163030_create_beds_table', 4),
(13, '2022_01_25_092024_create_medicine_groups_table', 5),
(14, '2022_01_25_094719_create_medicine_companies_table', 5),
(15, '2022_01_25_100708_create_medicines_table', 5),
(17, '2022_01_25_112754_create_out_patients_table', 6),
(22, '2022_01_25_161323_create_doctors_table', 7),
(29, '2022_01_27_093520_create_appointments_table', 9),
(35, '2022_01_29_094722_create_blood_donors_table', 11),
(36, '2022_01_29_103036_create_blood_groups_table', 11),
(37, '2022_01_29_110317_create_blood_banks_table', 12),
(38, '2022_01_29_112713_create_asset_categories_table', 13),
(39, '2022_01_29_114439_create_assets_table', 14),
(40, '2022_01_29_120558_create_lab_departments_table', 15),
(43, '2022_01_29_121650_create_lab_tests_table', 16),
(44, '2022_01_29_155202_create_employee_roles_table', 17),
(45, '2022_01_29_161027_create_employees_table', 17),
(50, '2022_01_30_103048_create_medicine_invoices_table', 18),
(52, '2022_02_01_024909_create_rooms_table', 20),
(53, '2022_01_26_123109_create_doctor_schedules_table', 21),
(55, '2022_01_31_122904_create_in_patients_table', 22),
(59, '2022_01_27_114842_create_prescriptions_table', 23),
(60, '2022_02_01_123202_create_prescription__medicines_table', 23);

-- --------------------------------------------------------

--
-- Table structure for table `out_patients`
--

CREATE TABLE `out_patients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `out_p_id` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `out_p_name` varchar(110) COLLATE utf8mb4_unicode_ci NOT NULL,
  `out_p_father_name` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `out_p_gender` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `out_p_age` int(11) NOT NULL,
  `out_p_phone` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `out_p_blood` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `out_p_height` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `out_p_weight` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `out_p_bp` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `out_p_symptoms` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `out_p_address` varchar(110) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `out_patients`
--

INSERT INTO `out_patients` (`id`, `out_p_id`, `out_p_name`, `out_p_father_name`, `out_p_gender`, `out_p_age`, `out_p_phone`, `out_p_blood`, `out_p_height`, `out_p_weight`, `out_p_bp`, `out_p_symptoms`, `out_p_address`, `created_at`, `updated_at`) VALUES
(3, 'OUT-PAT-01', 'asfdsf', 'fasfa', 'female', 345, '453543', 'O+', '34543', '435', '43543', 'fdhg', 'fdhfdhfd', '2022-01-27 05:33:10', '2022-01-27 05:33:10'),
(4, 'OUT-PAT-02', 'Barclay Browning', 'Avye Conrad', 'female', 5, '98', 'O-', '85', '76', 'Velit aut adipisci q', 'Nisi natus ex eum ea', 'Delectus necessitat', '2022-01-31 06:10:38', '2022-01-31 06:10:38'),
(5, 'OUT-PAT-03', 'Drew Barnes', 'George Barron', 'female', 65, '91', 'B+', '88', '90', 'Saepe inventore non', 'Ea cupidatat eum dol', 'Recusandae Iure et', '2022-01-31 06:11:05', '2022-01-31 06:11:05');

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
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `prescriptions`
--

CREATE TABLE `prescriptions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `prescription_code` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prescription_p_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prescription_doc_id` bigint(20) UNSIGNED NOT NULL,
  `prescription_history` varchar(220) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prescription_note` varchar(220) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prescription_date` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `prescriptions`
--

INSERT INTO `prescriptions` (`id`, `prescription_code`, `prescription_p_id`, `prescription_doc_id`, `prescription_history`, `prescription_note`, `prescription_date`, `created_at`, `updated_at`) VALUES
(1, 'PRE#0001', 'OUT-PAT-01', 2, 'Numquam sint ipsam i', 'Ab occaecat quo cumq', '1970-07-18', NULL, NULL),
(2, 'PRE#0002', 'OUT-PAT-01', 1, 'Soluta dolor quo nih', 'Qui culpa quod dolo', '1992-08-02', NULL, NULL),
(3, 'PRE#0003', 'OUT-PAT-01', 1, 'Soluta dolor quo nih', 'Qui culpa quod dolo', '1992-08-02', NULL, NULL),
(4, 'PRE#0004', '1', 1, 'Beatae dolore nihil', 'Deserunt temporibus', '1992-02-12', NULL, NULL),
(5, 'PRE#0005', '1', 1, 'Aliquid et quaerat n', 'Saepe saepe totam et', '1990-05-27', NULL, NULL),
(6, 'PRE#0006', 'OUT-PAT-01', 1, 'Sit facere saepe omn', 'Officia laudantium', '1984-01-13', NULL, NULL),
(7, 'PRE#0007', '1', 2, 'Id officiis non fugi', 'Quaerat in laboriosa', '2008-03-16', NULL, NULL),
(8, 'PRE#0008', '1', 2, 'Animi aut non aut q', 'Dolorum vero dolores', '1994-09-11', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `prescription__medicines`
--

CREATE TABLE `prescription__medicines` (
  `id` int(10) UNSIGNED NOT NULL,
  `prescription_id` bigint(20) UNSIGNED NOT NULL,
  `prescription_medicine_id` bigint(20) UNSIGNED NOT NULL,
  `prescription_med_dosage` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prescription_med_frequency` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prescription_med_days` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prescription_med_ins` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `prescription__medicines`
--

INSERT INTO `prescription__medicines` (`id`, `prescription_id`, `prescription_medicine_id`, `prescription_med_dosage`, `prescription_med_frequency`, `prescription_med_days`, `prescription_med_ins`, `created_at`, `updated_at`) VALUES
(1, 1, 1, '100', '1+1+1', '25', 'after', NULL, NULL),
(2, 1, 2, '500', '1+0+1', '5', 'before', NULL, NULL),
(3, 4, 1, 'Excepturi et dolorum', 'Provident reiciendi', '17', 'Deserunt totam conse', NULL, NULL),
(4, 4, 2, 'Aperiam mollitia mag', 'Sit qui culpa omnis', '7', 'Vitae autem est dolo', NULL, NULL),
(5, 4, 1, 'Autem dolore quasi b', 'Ipsum qui eum quo i', '26', 'Sint recusandae Ut', NULL, NULL),
(6, 4, 2, 'Sit voluptatum quia', 'Molestiae molestiae', '26', 'Magnam omnis ut at q', NULL, NULL),
(7, 4, 1, 'Est fugiat rerum vo', 'Ut totam error quod', '9', 'Et quos tempor qui d', NULL, NULL),
(8, 5, 1, 'Eos et voluptas nesc', 'Magna ea enim volupt', '28', 'Dolores dolorum et r', NULL, NULL),
(9, 7, 1, 'Quidem laboriosam i', 'Nam id ut eius nostr', '28', 'Omnis molestiae veri', NULL, NULL),
(10, 8, 1, 'Sed minima sequi qui', 'Ipsam nihil totam no', '4', 'Duis tempora repelle', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

CREATE TABLE `rooms` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `rooms`
--

INSERT INTO `rooms` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, '101', '2022-02-01 03:35:44', '2022-02-01 03:35:44'),
(2, '102', '2022-02-01 03:35:49', '2022-02-01 03:35:49'),
(3, '103', '2022-02-01 03:35:54', '2022-02-01 03:35:54'),
(4, '104', '2022-02-01 03:35:58', '2022-02-01 03:35:58');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('a3dNQJSzCk1jtFqt9WYgR99Gxyh5ksZmnP4rmIB8', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/97.0.4692.99 Safari/537.36 Edg/97.0.1072.76', 'YTo2OntzOjY6Il90b2tlbiI7czo0MDoiaU1DRjJNd285T0M3Ym95MlhOVkZYQVhhSVI0czlEN2U3RXNMd0lMciI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDA6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9hZG1pbi9wcmVzY3JpcHRpb24iO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToxO3M6MTc6InBhc3N3b3JkX2hhc2hfd2ViIjtzOjYwOiIkMnkkMTAkOTJJWFVOcGtqTzByT1E1YnlNaS5ZZTRvS29FYTNSbzlsbEMvLm9nL2F0Mi51aGVXRy9pZ2kiO3M6MjE6InBhc3N3b3JkX2hhc2hfc2FuY3R1bSI7czo2MDoiJDJ5JDEwJDkySVhVTnBrak8wck9RNWJ5TWkuWWU0b0tvRWEzUm85bGxDLy5vZy9hdDIudWhlV0cvaWdpIjt9', 1643888148);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` varchar(2048) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `user_role`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`) VALUES
(1, 'Yearul Islam', 'admin@admin.com', 'admin', '2022-01-22 10:44:59', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NULL, 'xykHlQOomk8sKgw3VqHud7GbcQYRVxU2uqnMeKWX1qpvdJ6eNt2vsrFr3Aws', NULL, 'profile-photos/kCh9Hn0RnKIq7HamGDXrTLYyLppZhsC1Inh2Kte6.jpg', '2022-01-22 10:44:59', '2022-01-29 03:37:41');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointments`
--
ALTER TABLE `appointments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `appointments_app_p_id_foreign` (`app_p_id`),
  ADD KEY `appointments_app_doc_id_foreign` (`app_doc_id`);

--
-- Indexes for table `assets`
--
ALTER TABLE `assets`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `asset_categories`
--
ALTER TABLE `asset_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `beds`
--
ALTER TABLE `beds`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bed_categories`
--
ALTER TABLE `bed_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blood_banks`
--
ALTER TABLE `blood_banks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blood_donors`
--
ALTER TABLE `blood_donors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blood_groups`
--
ALTER TABLE `blood_groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctors`
--
ALTER TABLE `doctors`
  ADD PRIMARY KEY (`id`),
  ADD KEY `doctors_doc_dept_id_foreign` (`doc_dept_id`);

--
-- Indexes for table `doctor_schedules`
--
ALTER TABLE `doctor_schedules`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`),
  ADD KEY `employees_emp_role_id_foreign` (`emp_role_id`);

--
-- Indexes for table `employee_roles`
--
ALTER TABLE `employee_roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `floors`
--
ALTER TABLE `floors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `in_patients`
--
ALTER TABLE `in_patients`
  ADD PRIMARY KEY (`id`),
  ADD KEY `in_patients_in_p_doc_id_foreign` (`in_p_doc_id`),
  ADD KEY `in_patients_in_p_bed_category_id_foreign` (`in_p_bed_category_id`),
  ADD KEY `in_patients_in_p_bed_id_foreign` (`in_p_bed_id`);

--
-- Indexes for table `lab_departments`
--
ALTER TABLE `lab_departments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lab_tests`
--
ALTER TABLE `lab_tests`
  ADD PRIMARY KEY (`id`),
  ADD KEY `lab_tests_doc_id_foreign` (`doc_id`),
  ADD KEY `lab_tests_out_p_id_foreign` (`out_p_id`);

--
-- Indexes for table `medicines`
--
ALTER TABLE `medicines`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `medicine_companies`
--
ALTER TABLE `medicine_companies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `medicine_groups`
--
ALTER TABLE `medicine_groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `medicine_invoices`
--
ALTER TABLE `medicine_invoices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `out_patients`
--
ALTER TABLE `out_patients`
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
-- Indexes for table `prescriptions`
--
ALTER TABLE `prescriptions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `prescriptions_prescription_doc_id_foreign` (`prescription_doc_id`);

--
-- Indexes for table `prescription__medicines`
--
ALTER TABLE `prescription__medicines`
  ADD PRIMARY KEY (`id`),
  ADD KEY `prescription__medicines_prescription_id_foreign` (`prescription_id`),
  ADD KEY `prescription__medicines_prescription_medicine_id_foreign` (`prescription_medicine_id`);

--
-- Indexes for table `rooms`
--
ALTER TABLE `rooms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_user_role_unique` (`user_role`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointments`
--
ALTER TABLE `appointments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `assets`
--
ALTER TABLE `assets`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `asset_categories`
--
ALTER TABLE `asset_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `beds`
--
ALTER TABLE `beds`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `bed_categories`
--
ALTER TABLE `bed_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `blood_banks`
--
ALTER TABLE `blood_banks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `blood_donors`
--
ALTER TABLE `blood_donors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `blood_groups`
--
ALTER TABLE `blood_groups`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `doctors`
--
ALTER TABLE `doctors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `doctor_schedules`
--
ALTER TABLE `doctor_schedules`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `employee_roles`
--
ALTER TABLE `employee_roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `floors`
--
ALTER TABLE `floors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `in_patients`
--
ALTER TABLE `in_patients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `lab_departments`
--
ALTER TABLE `lab_departments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `lab_tests`
--
ALTER TABLE `lab_tests`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `medicines`
--
ALTER TABLE `medicines`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `medicine_companies`
--
ALTER TABLE `medicine_companies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `medicine_groups`
--
ALTER TABLE `medicine_groups`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `medicine_invoices`
--
ALTER TABLE `medicine_invoices`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `out_patients`
--
ALTER TABLE `out_patients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `prescriptions`
--
ALTER TABLE `prescriptions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `prescription__medicines`
--
ALTER TABLE `prescription__medicines`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `rooms`
--
ALTER TABLE `rooms`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `appointments`
--
ALTER TABLE `appointments`
  ADD CONSTRAINT `appointments_app_doc_id_foreign` FOREIGN KEY (`app_doc_id`) REFERENCES `doctors` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `appointments_app_p_id_foreign` FOREIGN KEY (`app_p_id`) REFERENCES `out_patients` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `doctors`
--
ALTER TABLE `doctors`
  ADD CONSTRAINT `doctors_doc_dept_id_foreign` FOREIGN KEY (`doc_dept_id`) REFERENCES `departments` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `employees`
--
ALTER TABLE `employees`
  ADD CONSTRAINT `employees_emp_role_id_foreign` FOREIGN KEY (`emp_role_id`) REFERENCES `employee_roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `in_patients`
--
ALTER TABLE `in_patients`
  ADD CONSTRAINT `in_patients_in_p_bed_category_id_foreign` FOREIGN KEY (`in_p_bed_category_id`) REFERENCES `bed_categories` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `in_patients_in_p_bed_id_foreign` FOREIGN KEY (`in_p_bed_id`) REFERENCES `beds` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `in_patients_in_p_doc_id_foreign` FOREIGN KEY (`in_p_doc_id`) REFERENCES `doctors` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `lab_tests`
--
ALTER TABLE `lab_tests`
  ADD CONSTRAINT `lab_tests_doc_id_foreign` FOREIGN KEY (`doc_id`) REFERENCES `doctors` (`id`),
  ADD CONSTRAINT `lab_tests_out_p_id_foreign` FOREIGN KEY (`out_p_id`) REFERENCES `out_patients` (`id`);

--
-- Constraints for table `prescriptions`
--
ALTER TABLE `prescriptions`
  ADD CONSTRAINT `prescriptions_prescription_doc_id_foreign` FOREIGN KEY (`prescription_doc_id`) REFERENCES `doctors` (`id`);

--
-- Constraints for table `prescription__medicines`
--
ALTER TABLE `prescription__medicines`
  ADD CONSTRAINT `prescription__medicines_prescription_id_foreign` FOREIGN KEY (`prescription_id`) REFERENCES `prescriptions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `prescription__medicines_prescription_medicine_id_foreign` FOREIGN KEY (`prescription_medicine_id`) REFERENCES `medicines` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
