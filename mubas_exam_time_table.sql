-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 01, 2022 at 12:22 PM
-- Server version: 5.7.36
-- PHP Version: 8.1.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mubas_exam_time_table`
--

-- --------------------------------------------------------

--
-- Table structure for table `classes`
--

DROP TABLE IF EXISTS `classes`;
CREATE TABLE IF NOT EXISTS `classes` (
  `class_code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `department` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `students` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`class_code`),
  KEY `classes_department_index` (`department`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `classes`
--

INSERT INTO `classes` (`class_code`, `name`, `department`, `students`, `status`, `created_at`, `updated_at`) VALUES
('BEMT1', 'BEMT', 'EST', '32', 'Active', '2022-10-09 12:05:30', '2022-10-09 12:05:30'),
('BEMT2', 'BEMT2', 'EST', '27', 'Active', '2022-10-09 12:08:24', '2022-10-09 12:08:24'),
('BEMT3', 'BEMT3', 'EST', '19', 'Active', '2022-10-09 12:08:59', '2022-10-09 12:08:59'),
('BFST 1', 'BFST 1', 'BFST', '37', 'Active', '2022-10-09 12:15:07', '2022-10-09 12:15:07'),
('BFST 2', 'BFST 2', 'BFST', '15', 'Active', '2022-10-09 12:16:03', '2022-10-09 12:16:03'),
('BFST 3', 'BFST 3', 'BFST', '19', 'Active', '2022-10-09 12:16:50', '2022-10-09 12:16:50'),
('BIEP 1', 'BIEP 1', 'BIEP', '33', 'Active', '2022-10-09 12:20:40', '2022-10-09 12:20:40'),
('BIEP 2', 'BIEP 2', 'BIEP', '23', 'Active', '2022-10-09 12:21:26', '2022-10-09 12:21:26'),
('BIEP 3', 'BIEP 3', 'BIEP', '11', 'Active', '2022-10-09 12:22:16', '2022-10-09 12:22:16'),
('BILT 1', 'BILT 1', 'BILT', '36', 'Active', '2022-10-09 12:24:10', '2022-10-09 12:24:10'),
('BILT 2', 'BILT 2', 'BILT', '28', 'Active', '2022-10-09 12:25:07', '2022-10-09 12:25:07'),
('BILT 3', 'BILT 3', 'BILT', '21', 'Active', '2022-10-09 12:25:49', '2022-10-09 12:25:49'),
('BILT 4', 'BILT 4', 'BILT', '49', 'Active', '2022-10-09 12:26:50', '2022-10-09 12:26:50'),
('BIS 1', 'BIS 1', 'BIS', '35', 'Active', '2022-10-09 12:27:51', '2022-10-09 12:27:51'),
('BIS 2', 'BIS 2', 'BIS', '35', 'Active', '2022-10-09 12:28:50', '2022-10-09 12:28:50'),
('BIS 3', 'BIS 3', 'BIS', '25', 'Active', '2022-10-09 12:29:43', '2022-10-09 12:29:43'),
('BIS 4', 'BIS 4', 'BIS', '49', 'Active', '2022-10-09 12:30:36', '2022-10-09 12:30:36'),
('BIT 1', 'BIT 1', 'BIT', '35', 'Active', '2022-10-09 12:31:08', '2022-10-09 12:31:08'),
('BIT 2', 'BIT 2', 'BIT', '39', 'Active', '2022-10-09 12:33:26', '2022-10-09 12:33:26'),
('BIT 3', 'BIT 3', 'BIT', '22', 'Active', '2022-10-09 12:34:11', '2022-10-09 12:34:11'),
('BIT 4', 'BIT 4', 'BIT', '45', 'Active', '2022-10-09 12:34:56', '2022-10-09 12:34:56'),
('EH 1', 'EH 1', 'EH', '36', 'Active', '2022-10-09 12:36:11', '2022-10-09 12:36:11'),
('EH 2', 'EH 2', 'EH', '62', 'Active', '2022-10-09 12:37:02', '2022-10-09 12:37:02'),
('EH 3', 'EH 3', 'EH', '32', 'Active', '2022-10-09 12:38:07', '2022-10-09 12:38:07'),
('EH 4', 'EH 4', 'EH', '67', 'Active', '2022-10-09 12:43:08', '2022-10-09 12:43:08'),
('MSE 1', 'MSE 1', 'MSE', '58', 'Active', '2022-10-09 12:51:08', '2022-10-09 12:51:08'),
('MSE 2', 'MSE 2', 'MSE', '32', 'Active', '2022-10-09 12:51:38', '2022-10-09 12:51:38'),
('MSE 3', 'MSE 3', 'MSE', '15', 'Active', '2022-10-09 12:52:48', '2022-10-09 12:52:48'),
('BAS 1', 'BAS 1', 'BAS', '27', 'Active', '2022-10-09 12:58:18', '2022-10-09 12:58:18'),
('BAS 2', 'BAS 2', 'BAS', '13', 'Active', '2022-10-09 12:58:55', '2022-10-09 12:58:55'),
('BAS 3', 'BAS 3', 'BAS', '13', 'Active', '2022-10-09 12:59:32', '2022-10-09 12:59:32'),
('BAS 4', 'BAS 4', 'BAS', '13', 'Active', '2022-10-09 13:00:16', '2022-10-09 13:00:16'),
('BILT1', 'BILT1', 'BILT', '36', 'Active', '2022-11-01 03:44:35', '2022-11-01 03:44:35'),
('BILT2', 'BILT2', 'BILT', '28', 'Active', '2022-11-01 03:45:16', '2022-11-01 03:45:16'),
('BILT3', 'BILT3', 'BILT', '21', 'Active', '2022-11-01 03:45:57', '2022-11-01 03:45:57'),
('BILT4', 'BILT4', 'BILT', '49', 'Active', '2022-11-01 03:46:35', '2022-11-01 03:46:35'),
('BLE1', 'BLE1', 'BLE', '27', 'Active', '2022-11-01 03:49:21', '2022-11-01 03:49:21'),
('BLE2', 'BLE2', 'BLE', '14', 'Active', '2022-11-01 03:49:43', '2022-11-01 03:49:43'),
('BLE3', 'BLE3', 'BLE', '14', 'Active', '2022-11-01 03:50:05', '2022-11-01 03:50:05'),
('BLE4', 'BLE4', 'BLE', '21', 'Active', '2022-11-01 03:50:42', '2022-11-01 03:50:42'),
('BLS1', 'BLS1', 'BLS', '25', 'Active', '2022-11-01 03:52:11', '2022-11-01 03:52:11'),
('BLS2', 'BLS2', 'BLS', '14', 'Active', '2022-11-01 03:52:37', '2022-11-01 03:52:37'),
('BLS3', 'BLS3', 'BLS', '14', 'Active', '2022-11-01 03:53:03', '2022-11-01 03:53:03'),
('BLS4', 'BLS4', 'BLS', '34', 'Active', '2022-11-01 03:53:40', '2022-11-01 03:53:40'),
('BPP1', 'BPP1', 'BPP', '31', 'Active', '2022-11-01 03:54:20', '2022-11-01 03:54:20'),
('BPP2', 'BPP2', 'BPP', '14', 'Active', '2022-11-01 03:54:44', '2022-11-01 03:54:44'),
('BPP3', 'BPP3', 'BPP', '15', 'Active', '2022-11-01 03:55:11', '2022-11-01 03:55:11'),
('BPP4', 'BPP4', 'BPP', '22', 'Active', '2022-11-01 03:55:41', '2022-11-01 03:55:41'),
('BQS1', 'BQS1', 'BQS', '25', 'Active', '2022-11-01 03:56:38', '2022-11-01 03:56:38'),
('BQS2', 'BQS2', 'BQS', '20', 'Active', '2022-11-01 03:57:06', '2022-11-01 03:57:06'),
('BQS3', 'BQS3', 'BQS', '12', 'Active', '2022-11-01 03:57:38', '2022-11-01 03:57:38'),
('BQS4', 'BQS4', 'BQS', '27', 'Active', '2022-11-01 03:58:09', '2022-11-01 03:59:26'),
('BAC1', 'BAC1', 'BAC', '83', 'Active', '2022-11-01 04:01:11', '2022-11-01 04:01:11'),
('BAC2', 'BAC2', 'BAC', '87', 'Active', '2022-11-01 04:01:33', '2022-11-01 04:01:33'),
('BAC3', 'BAC3', 'BAC', '79', 'Active', '2022-11-01 04:02:01', '2022-11-01 04:02:01'),
('BAC4', 'BAC4', 'BAC', '67', 'Active', '2022-11-01 04:02:30', '2022-11-01 04:02:30'),
('BAF1', 'BAF1', 'BAF', '70', 'Active', '2022-11-01 04:04:02', '2022-11-01 04:04:02'),
('BAF2', 'BAF2', 'BAF', '61', 'Active', '2022-11-01 04:04:24', '2022-11-01 04:04:24'),
('BAF3', 'BAF3', 'BAF', '50', 'Active', '2022-11-01 04:04:49', '2022-11-01 04:04:49'),
('BAF4', 'BAF4', 'BAF', '47', 'Active', '2022-11-01 04:05:14', '2022-11-01 04:05:14'),
('BAM1', 'BAM2', 'BAM', '73', 'Active', '2022-11-01 04:06:17', '2022-11-01 04:06:17'),
('BAM2', 'BAM2', 'BAM', '57', 'Active', '2022-11-01 04:07:01', '2022-11-01 04:07:01'),
('BAM3', 'BAM3', 'BAM', '52', 'Active', '2022-11-01 04:07:26', '2022-11-01 04:07:26'),
('BAM4', 'BAM4', 'BAM', '53', 'Active', '2022-11-01 04:08:31', '2022-11-01 04:08:31'),
('BAU1', 'BAU1', 'BAU', '73', 'Active', '2022-11-01 04:09:01', '2022-11-01 04:09:01'),
('BAU2', 'BAU2', 'BAU', '73', 'Active', '2022-11-01 04:09:24', '2022-11-01 04:09:24'),
('BAU3', 'BAU3', 'BAU', '40', 'Active', '2022-11-01 04:10:09', '2022-11-01 04:10:09'),
('BAU4', 'BAU4', 'BAU', '44', 'Active', '2022-11-01 04:10:31', '2022-11-01 04:10:31'),
('BBA1', 'BBA1', 'BBA', '91', 'Active', '2022-11-01 04:11:27', '2022-11-01 04:11:39'),
('BBA2', 'BBA2', 'BBA', '78', 'Active', '2022-11-01 04:12:06', '2022-11-01 04:12:06'),
('BBA3', 'BBA3', 'BBA', '87', 'Active', '2022-11-01 04:12:34', '2022-11-01 04:12:34'),
('BBA4', 'BBA4', 'BBA', '67', 'Active', '2022-11-01 04:13:04', '2022-11-01 04:13:04'),
('BCME1', 'BCME2', 'BCME', '78', 'Active', '2022-11-01 04:14:35', '2022-11-01 04:14:35'),
('BCME2', 'BCME2', 'BCME', '62', 'Active', '2022-11-01 04:15:07', '2022-11-01 04:15:07'),
('BCME3', 'BCME3', 'BCME', '31', 'Active', '2022-11-01 04:16:08', '2022-11-01 04:16:08'),
('BCME4', 'BCME4', 'BCME', '28', 'Active', '2022-11-01 04:16:39', '2022-11-01 04:16:39'),
('BCTM1', 'BCTM2', 'BCTM', '68', 'Active', '2022-11-01 04:17:15', '2022-11-01 04:17:15'),
('BCTM2', 'BCTM2', 'BCTM', '56', 'Active', '2022-11-01 04:17:58', '2022-11-01 04:17:58'),
('BCTM3', 'BCTM3', 'BCTM', '32', 'Active', '2022-11-01 04:18:38', '2022-11-01 04:18:38'),
('BCTM4', 'BCTM4', 'BCTM', '40', 'Active', '2022-11-01 04:19:07', '2022-11-01 04:19:07'),
('BAJ1', 'BAJ1', 'BAJ', '71', 'Active', '2022-11-01 04:21:01', '2022-11-01 04:21:01'),
('BAJ2', 'BAJ2', 'BAJ', '73', 'Active', '2022-11-01 04:21:27', '2022-11-01 04:21:27'),
('BAJ3', 'BAJ3', 'BAJ', '43', 'Active', '2022-11-01 04:22:00', '2022-11-01 04:22:00'),
('BAJ4', 'BAJ4', 'BAJ', '70', 'Active', '2022-11-01 04:22:44', '2022-11-01 04:22:44'),
('BBC1', 'BBC1', 'BBC', '65', 'Active', '2022-11-01 04:23:43', '2022-11-01 04:23:57'),
('BBC2', 'BBC2', 'BBC', '63', 'Active', '2022-11-01 04:24:37', '2022-11-01 04:24:37'),
('BBC3', 'BBC3', 'BBC', '50', 'Active', '2022-11-01 04:25:44', '2022-11-01 04:25:44'),
('BBC4', 'BBC4', 'BBC', '63', 'Active', '2022-11-01 04:26:29', '2022-11-01 04:26:29'),
('BTECH1', 'BTECH2', 'BTECH', '55', 'Active', '2022-11-01 04:28:24', '2022-11-01 04:28:24'),
('BTECH2', 'BTECH2', 'BTECH', '33', 'Active', '2022-11-01 04:29:35', '2022-11-01 04:29:35'),
('BTECH3', 'BTECH3', 'BTECH', '26', 'Active', '2022-11-01 04:30:53', '2022-11-01 04:30:53'),
('BTECH4', 'BTECH4', 'BTECH', '12', 'Active', '2022-11-01 04:31:37', '2022-11-01 04:31:37'),
('EBS1', 'EBS1', 'EBS', '83', 'Active', '2022-11-01 04:33:21', '2022-11-01 04:33:21'),
('EBS2', 'EBS2', 'EBS', '96', 'Active', '2022-11-01 04:34:10', '2022-11-01 04:34:10'),
('EBS3', 'EBS3', 'EBS', '62', 'Active', '2022-11-01 04:34:42', '2022-11-01 04:34:42'),
('EBS4', 'EBS4', 'EBS', '89', 'Active', '2022-11-01 04:35:30', '2022-11-01 04:35:30'),
('TED1', 'TED1', 'TED', '63', 'Active', '2022-11-01 04:36:24', '2022-11-01 04:36:24'),
('TED2', 'TED2', 'BTECH', '39', 'Active', '2022-11-01 04:37:03', '2022-11-01 04:37:03'),
('TED3', 'TED3', 'TED', '34', 'Active', '2022-11-01 04:37:49', '2022-11-01 04:37:49'),
('TED4', 'TED4', 'TED', '50', 'Active', '2022-11-01 04:38:21', '2022-11-01 04:38:21'),
('BCES1', 'BCES2', 'BCES', '19', 'Active', '2022-11-01 04:43:30', '2022-11-01 04:43:30'),
('BCES2', 'BCES2', 'BCES', '15', 'Active', '2022-11-01 04:44:05', '2022-11-01 04:44:05'),
('BCES3', 'BCES3', 'BCES', '16', 'Active', '2022-11-01 04:44:57', '2022-11-01 04:44:57'),
('BCES4', 'BCES4', 'BCES', '31', 'Active', '2022-11-01 04:45:40', '2022-11-01 04:45:40'),
('BCES5', 'BCES5', 'BCES', '20', 'Active', '2022-11-01 04:46:10', '2022-11-01 04:46:10'),
('BCET1', 'BCET1', 'BCET', '20', 'Active', '2022-11-01 04:47:47', '2022-11-01 04:47:47'),
('BCET2', 'BCET2', 'BCET', '17', 'Active', '2022-11-01 04:49:26', '2022-11-01 04:49:26'),
('BCET3', 'BCET3', 'BCET', '20', 'Active', '2022-11-01 04:49:58', '2022-11-01 04:49:58'),
('BCET4', 'BCET4', 'BCET', '21', 'Active', '2022-11-01 04:50:47', '2022-11-01 04:50:47'),
('BCET5', 'BCET5', 'BCET', '14', 'Active', '2022-11-01 04:51:24', '2022-11-01 04:51:24'),
('BCEW1', 'BCEW1', 'BCEW', '23', 'Active', '2022-11-01 04:52:41', '2022-11-01 04:52:41'),
('BCEW2', 'BCEW2', 'BCEW', '21', 'Active', '2022-11-01 04:53:26', '2022-11-01 04:53:26'),
('BCEW3', 'BCEW3', 'BCEW', '17', 'Active', '2022-11-01 04:54:12', '2022-11-01 04:54:12'),
('BCEW4', 'BCEW4', 'BCEW', '11', 'Active', '2022-11-01 04:55:21', '2022-11-01 04:55:21'),
('BCEW5', 'BCEW5', 'BCEW', '14', 'Active', '2022-11-01 04:55:55', '2022-11-01 04:55:55'),
('BBME1', 'BBME1', 'BME', '38', 'Active', '2022-11-01 04:58:55', '2022-11-01 04:58:55'),
('BBME2', 'BBME2', 'BME', '32', 'Active', '2022-11-01 04:59:23', '2022-11-01 04:59:23'),
('BBME3', 'BBME3', 'BME', '40', 'Active', '2022-11-01 04:59:56', '2022-11-01 04:59:56'),
('BBME4', 'BBME4', 'BME', '60', 'Active', '2022-11-01 05:00:54', '2022-11-01 05:00:54'),
('BBME5', 'BBME5', 'BME', '26', 'Active', '2022-11-01 05:01:34', '2022-11-01 05:01:34'),
('BECE1', 'BECE1', 'BECE', '16', 'Active', '2022-11-01 05:02:59', '2022-11-01 05:02:59'),
('BECE2', 'BECE2', 'BECE', '15', 'Active', '2022-11-01 05:03:36', '2022-11-01 05:03:36'),
('BECE3', 'BECE3', 'BECE', '16', 'Active', '2022-11-01 05:04:09', '2022-11-01 05:04:09'),
('BECE4', 'BECE4', 'BECE', '18', 'Active', '2022-11-01 05:05:41', '2022-11-01 05:05:41'),
('BECE5', 'BECE5', 'BECE', '16', 'Active', '2022-11-01 05:06:20', '2022-11-01 05:06:20'),
('BEEE1', 'BEEE1', 'BEEE', '22', 'Active', '2022-11-01 05:09:29', '2022-11-01 05:09:29'),
('BEEE2', 'BEEE2', 'BEEE', '13', 'Active', '2022-11-01 05:10:11', '2022-11-01 05:10:11'),
('BEEE3', 'BEEE3', 'BEEE', '12', 'Active', '2022-11-01 05:10:45', '2022-11-01 05:10:45'),
('BEEE4', 'BEEE4', 'BEEE', '20', 'Active', '2022-11-01 05:11:30', '2022-11-01 05:11:30'),
('BEEE5', 'BEEE5', 'BEEE', '16', 'Active', '2022-11-01 05:12:12', '2022-11-01 05:12:12'),
('BETE1', 'BETE1', 'BETE', '16', 'Active', '2022-11-01 05:13:14', '2022-11-01 05:13:14'),
('BETE2', 'BETE2', 'BETE', '13', 'Active', '2022-11-01 05:13:35', '2022-11-01 05:13:35'),
('BETE3', 'BETE3', 'BETE', '15', 'Active', '2022-11-01 05:13:58', '2022-11-01 05:13:58'),
('BETE4', 'BETE4', 'BETE', '18', 'Active', '2022-11-01 05:14:21', '2022-11-01 05:14:21'),
('BETE5', 'BETE5', 'BETE', '12', 'Active', '2022-11-01 05:14:44', '2022-11-01 05:14:44'),
('BAE1', 'BAE1', 'BAE', '21', 'Active', '2022-11-01 05:16:17', '2022-11-01 05:16:17'),
('BAE2', 'BAE2', 'BAE', '13', 'Active', '2022-11-01 05:16:48', '2022-11-01 05:16:48'),
('BAE3', 'BAE3', 'BAE', '14', 'Active', '2022-11-01 05:17:22', '2022-11-01 05:17:22'),
('BAE4', 'BAE4', 'BAE', '12', 'Active', '2022-11-01 05:18:09', '2022-11-01 05:18:09'),
('BAE5', 'BAE5', 'BAE', '12', 'Active', '2022-11-01 05:18:48', '2022-11-01 05:18:48'),
('BEE1', 'BEE1', 'BEEN', '18', 'Active', '2022-11-01 05:21:55', '2022-11-01 05:21:55'),
('BEE2', 'BEE2', 'BEEN', '12', 'Active', '2022-11-01 05:22:53', '2022-11-01 05:22:53'),
('BEE3', 'BEE3', 'BEEN', '18', 'Active', '2022-11-01 05:23:27', '2022-11-01 05:23:27'),
('BEE4', 'BEE4', 'BEEN', '13', 'Active', '2022-11-01 05:23:55', '2022-11-01 05:23:55'),
('BEE5', 'BEE5', 'BEEN', '14', 'Active', '2022-11-01 05:24:24', '2022-11-01 05:24:24'),
('BIE1', 'BIE1', 'BIE', '22', 'Active', '2022-11-01 05:27:34', '2022-11-01 05:27:34'),
('BIE2', 'BIE2', 'BIE', '17', 'Active', '2022-11-01 05:28:02', '2022-11-01 05:28:02'),
('BIE3', 'BIE3', 'BIE', '8', 'Active', '2022-11-01 05:28:32', '2022-11-01 05:28:32'),
('BIE4', 'BIE4', 'BIE', '17', 'Active', '2022-11-01 05:29:10', '2022-11-01 05:29:10'),
('BIE5', 'BIE5', 'BIE', '9', 'Active', '2022-11-01 05:30:36', '2022-11-01 05:30:36'),
('BME1', 'BME1', 'BMEN', '21', 'Active', '2022-11-01 05:35:10', '2022-11-01 05:35:10'),
('BME2', 'BME2', 'BMEN', '17', 'Active', '2022-11-01 05:35:38', '2022-11-01 05:35:38'),
('BME3', 'BME3', 'BMEN', '17', 'Active', '2022-11-01 05:37:06', '2022-11-01 05:37:06'),
('BME4', 'BME4', 'BMEN', '15', 'Active', '2022-11-01 05:37:38', '2022-11-01 05:37:38'),
('BME5', 'BME5', 'BMEN', '11', 'Active', '2022-11-01 05:38:03', '2022-11-01 05:38:03'),
('BGEN1', 'BGEN1', 'BGEN', '29', 'Active', '2022-11-01 05:40:17', '2022-11-01 05:40:17'),
('BGEN2', 'BGEN2', 'BGEN', '19', 'Active', '2022-11-01 05:40:51', '2022-11-01 05:40:51'),
('BGEN3', 'BGEN3', 'BGEN', '40', 'Active', '2022-11-01 05:41:51', '2022-11-01 05:41:51'),
('BGEN4', 'BGEN4', 'BGEN', '43', 'Active', '2022-11-01 05:43:06', '2022-11-01 05:43:06'),
('BGEN5', 'BGEN5', 'BGEN', '22', 'Active', '2022-11-01 05:43:38', '2022-11-01 05:43:38'),
('BMMP1', 'BMMP1', 'BMMP', '35', 'Active', '2022-11-01 05:47:41', '2022-11-01 05:48:50'),
('BMMP2', 'BMMP2', 'BMMP', '26', 'Active', '2022-11-01 05:48:34', '2022-11-01 05:48:34'),
('BMMP3', 'BMMP3', 'BMMP', '20', 'Active', '2022-11-01 05:49:26', '2022-11-01 05:49:26'),
('BMMP4', 'BMMP4', 'BMMP', '42', 'Active', '2022-11-01 05:49:53', '2022-11-01 05:49:53'),
('BMMP5', 'BMMP5', 'BMMP', '17', 'Active', '2022-11-01 05:50:34', '2022-11-01 05:50:34');

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

DROP TABLE IF EXISTS `department`;
CREATE TABLE IF NOT EXISTS `department` (
  `department_code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `duration` int(11) NOT NULL,
  `faculty` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`department_code`),
  KEY `department_faculty_index` (`faculty`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`department_code`, `name`, `duration`, `faculty`, `created_at`, `updated_at`) VALUES
('BEMT', 'Bachelor of Science in Environmental Management and Techology', 4, 'APS', '2022-09-14 00:18:26', '2022-09-14 00:18:26'),
('BIEP', 'Bachelor of Science in Industrial and Environmental Physics', 4, 'APS', '2022-09-14 00:20:17', '2022-09-14 00:20:17'),
('EH', 'Bachelor of Science in Environmental Health', 4, 'APS', '2022-09-14 00:22:44', '2022-09-14 00:22:44'),
('EST', 'Bachelor of Science in Environmental Science and Technology', 4, 'APS', '2022-09-14 00:24:30', '2022-09-14 00:24:30'),
('BILT', 'Bachelor of Science in Industrial Laboratory Technology', 4, 'APS', '2022-09-14 00:26:24', '2022-09-14 00:26:24'),
('BIT', 'Bachelor of Science in Information Technology', 4, 'APS', '2022-09-14 00:27:17', '2022-09-14 00:27:17'),
('BIS', 'Bachelor of Science in Management Information Systems', 4, 'APS', '2022-09-14 00:29:03', '2022-09-14 00:29:03'),
('MSE', 'Bachelor of Science in Mathematical Sciences Education', 4, 'APS', '2022-09-14 00:30:07', '2022-09-14 00:30:07'),
('BLE', 'Bachelor of Science in Land Economy (Honours)', 5, 'BLT', '2022-09-14 00:34:27', '2022-09-14 00:34:27'),
('BLS', 'Bachelor of Science in Land Surveying (Honours)', 5, 'BLT', '2022-09-14 00:35:28', '2022-09-14 00:35:28'),
('BPP', 'Bachelor of Science in Physical Planning (Honours)', 5, 'BLT', '2022-09-14 00:36:37', '2022-09-14 00:36:37'),
('BQS', 'Bachelor of Science in Quantity Surveying (Honours)', 5, 'BLT', '2022-09-14 00:38:19', '2022-09-14 00:38:19'),
('BAC', 'Bachelor OF Accountancy', 4, 'COM', '2022-09-14 00:41:41', '2022-09-14 00:41:41'),
('BCTM', 'Bachelor of Commerce (Tourism Management)', 4, 'COM', '2022-09-14 00:47:40', '2022-09-14 00:47:40'),
('BCME', 'Bachelor of Commerce (Entrepreneurship)', 4, 'COM', '2022-09-14 00:48:40', '2022-09-14 00:48:40'),
('BAF', 'Bachelor of Commerce (Banking and Finance)', 4, 'COM', '2022-09-14 00:49:44', '2022-09-14 00:49:44'),
('BAU', 'Bachelor of Commerce in Internal Audit', 4, 'COM', '2022-09-14 00:51:06', '2022-09-14 00:51:06'),
('BAM', 'Bachelor of Business Administration (Marketing', 4, 'COM', '2022-09-14 00:52:38', '2022-09-14 00:52:38'),
('BBA', 'Bachelor of Business Administration (Generic)', 4, 'COM', '2022-09-14 00:53:28', '2022-09-14 00:53:28'),
('BBC', 'Bachelor of Arts in Business Communication', 4, 'EMS', '2022-09-14 00:59:21', '2022-09-14 00:59:21'),
('EBS', 'Bachelor of Education (Business Studies)', 4, 'EMS', '2022-09-14 01:00:18', '2022-09-14 01:00:18'),
('TED', 'Bachelor of Technical Education (Science)', 4, 'EMS', '2022-09-14 01:01:05', '2022-09-14 01:01:05'),
('BAJ', 'Bachelor of Arts in Journalism', 4, 'EMS', '2022-09-14 01:01:53', '2022-09-14 01:01:53'),
('BTECH', 'Bachelor of Technical Education (Technology)', 4, 'EMS', '2022-09-14 01:02:40', '2022-09-14 01:02:40'),
('BAE', 'Bachelor of Automobile Engineering (Honours)', 5, 'ENG', '2022-09-14 01:41:30', '2022-09-14 01:44:00'),
('BME', 'Bachelor of Biomedical Engineering (Honours)', 5, 'ENG', '2022-09-14 01:42:12', '2022-09-14 01:43:36'),
('BCES', 'Bachelor of Civil Engineering - Structures', 5, 'ENG', '2022-09-14 01:43:21', '2022-09-14 01:43:21'),
('BCET', 'Bachelor Civil Engineering - Transportation (Honours)', 5, 'ENG', '2022-09-14 01:44:56', '2022-09-14 01:44:56'),
('BCEW', 'Bachelor Civil Engineering - Water (Honours', 5, 'ENG', '2022-09-14 01:45:55', '2022-09-14 01:45:55'),
('BECE', 'Bachelor of Electronics and Computer Engineering (Honours)', 5, 'ENG', '2022-09-14 01:46:42', '2022-09-14 01:46:42'),
('BEEE', 'Bachelor of Electrical and Electronics Engineering (Honours', 5, 'ENG', '2022-09-14 01:47:59', '2022-09-14 01:47:59'),
('BETE', 'Bachelor of Electronics and Telecommunication Engineering (Honours)', 5, 'ENG', '2022-09-14 01:51:33', '2022-09-14 01:51:33'),
('BEEN', 'Bachelor of Energy Engineering (Honours)', 5, 'ENG', '2022-09-14 01:54:11', '2022-09-14 01:54:11'),
('BGEN', 'Bachelor of Geological Engineering (Honours)', 5, 'ENG', '2022-09-14 01:54:57', '2022-09-14 01:54:57'),
('BIE', 'Bachelor of Industrial Engineering (Honours)', 5, 'ENG', '2022-09-14 01:55:54', '2022-09-14 01:55:54'),
('BMMP', 'Bachelor of Metallurgy and Mineral Processing Engineering (Honours)', 5, 'ENG', '2022-09-14 01:59:40', '2022-09-14 01:59:40'),
('BMEN', 'Bachelor of Mining Engineering (Honours)', 5, 'ENG', '2022-09-14 02:00:46', '2022-09-14 02:00:46'),
('BFST', 'Bachelor of Science in Food Science and Technology', 4, 'APS', '2022-10-09 12:14:01', '2022-10-09 12:14:01'),
('BAS', 'Bachelor of science in Architectural studies', 5, 'BLT', '2022-10-09 12:57:19', '2022-10-09 12:57:19');

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

DROP TABLE IF EXISTS `departments`;
CREATE TABLE IF NOT EXISTS `departments` (
  `department_code` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `modules` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `faculty` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`department_code`),
  KEY `department_faculty_index` (`faculty`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `department_module`
--

DROP TABLE IF EXISTS `department_module`;
CREATE TABLE IF NOT EXISTS `department_module` (
  `code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `department` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `year` int(11) NOT NULL,
  `semester` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `module` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`code`),
  KEY `department_module_department_index` (`department`),
  KEY `department_module_module_index` (`module`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `department_module`
--

INSERT INTO `department_module` (`code`, `department`, `year`, `semester`, `module`, `created_at`, `updated_at`) VALUES
('487', 'BIS', 2, '2', 'CIT-HWS-221', '2022-11-01 12:00:46', '2022-11-01 12:00:46'),
('43', 'BEMT', 1, '1', 'Module', '2022-10-06 06:55:39', '2022-10-06 06:55:39'),
('286', 'BIS', 2, '2', 'CIT-NET-224', '2022-11-01 12:01:27', '2022-11-01 12:01:27'),
('90', 'BIS', 2, '2', 'SAD-211', '2022-11-01 12:01:58', '2022-11-01 12:01:58'),
('432', 'BIS', 2, '2', 'ACC-FIN-222', '2022-11-01 12:02:43', '2022-11-01 12:02:43'),
('1', 'BIS', 3, '2', 'ACC-COA-322', '2022-11-01 12:03:17', '2022-11-01 12:03:17');

-- --------------------------------------------------------

--
-- Table structure for table `faculties`
--

DROP TABLE IF EXISTS `faculties`;
CREATE TABLE IF NOT EXISTS `faculties` (
  `faculty_code` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`faculty_code`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `faculties`
--

INSERT INTO `faculties` (`faculty_code`, `name`, `created_at`, `updated_at`) VALUES
('APS', 'Applied Sciences', '2022-08-30 06:00:06', '2022-08-30 06:00:06'),
('BLT', 'Built Environment', '2022-08-30 06:02:45', '2022-08-30 06:02:45'),
('COM', 'Commerce', '2022-08-30 06:03:58', '2022-08-30 06:03:58'),
('EMS', 'Education and Media Studies', '2022-08-30 06:06:17', '2022-08-30 06:06:17'),
('ENG', 'Engineering', '2022-08-30 06:07:08', '2022-08-30 06:07:08');

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

DROP TABLE IF EXISTS `faculty`;
CREATE TABLE IF NOT EXISTS `faculty` (
  `faculty_code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`faculty_code`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`faculty_code`, `name`, `created_at`, `updated_at`) VALUES
('EMS', 'Education and Media Studies', '2022-09-14 00:56:50', '2022-09-14 00:56:50'),
('COM', 'Commerce', '2022-09-14 00:41:19', '2022-09-14 00:41:19'),
('APS', 'Applied Sciences', '2022-09-11 19:57:39', '2022-09-11 19:57:39'),
('BLT', 'Built Environment', '2022-09-13 10:53:11', '2022-09-13 10:53:11'),
('ENG', 'Engineering', '2022-09-14 01:31:03', '2022-09-14 01:31:03');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `uuid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `lecturer`
--

DROP TABLE IF EXISTS `lecturer`;
CREATE TABLE IF NOT EXISTS `lecturer` (
  `lecturer_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`lecturer_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `lecturer`
--

INSERT INTO `lecturer` (`lecturer_id`, `name`, `email`, `created_at`, `updated_at`) VALUES
('394', 'Mbewe R', 'mbewer@gmail.com', '2022-09-10 12:57:40', '2022-09-10 12:57:40'),
('204', 'chikumba P', 'pchikumba@gmail.com', '2022-09-10 13:01:26', '2022-09-10 13:01:26'),
('248', 'MAGELA C', 'cmagela@mubas.ac.mw', '2022-09-14 01:14:28', '2022-09-14 01:15:49'),
('432', 'BANDA H', 'hbanda@mubas.ac.mw', '2022-09-14 01:15:36', '2022-09-14 01:15:36'),
('406', 'CHAIPA D', 'dchaipa@mubas.ac.mw', '2022-09-14 01:16:24', '2022-09-14 01:16:24'),
('258', 'CHIIPA P', 'pchiipa@mubas.ac.mw', '2022-09-14 01:17:03', '2022-09-14 01:17:03'),
('30', 'KUMWENDA V', 'vkumwenda@mubas.ac.mw', '2022-09-14 01:17:49', '2022-09-14 01:17:49'),
('414', 'KAPONYA A', 'akaponya@mubas.ac.mw', '2022-09-14 01:19:10', '2022-09-14 01:19:10'),
('65', 'MELLO C', 'cmello@mubas.ac.mw', '2022-09-14 01:19:54', '2022-09-14 01:19:54'),
('285', 'PHEPA P', 'pphepa@mubas.ac.mw', '2022-09-14 01:21:37', '2022-09-14 01:21:37'),
('407', 'TENTHANI C', 'ctenthani@mubas.ac.mw', '2022-09-14 01:22:20', '2022-09-14 01:22:20'),
('483', 'phiri J', 'jphiri@mubas.ac.mw', '2022-10-03 22:54:29', '2022-10-03 22:54:29'),
('266', 'Leonard U', 'uleonard@munas.ac.mw', '2022-10-03 22:55:29', '2022-10-03 22:55:29'),
('153', 'Taylor A', 'ataylor@mubas.ac.mw', '2022-10-03 22:56:00', '2022-10-03 22:56:00'),
('497', 'Chadza T', 'tchadza@mubas.ac.mw', '2022-10-03 22:56:26', '2022-10-03 22:56:26'),
('217', 'chisanu L', 'lchisanu@mubas.ac.mw', '2022-10-03 22:56:54', '2022-10-03 22:56:54'),
('152', 'kothowa J', 'jkothowa@mubas.ac.mw', '2022-10-03 22:57:24', '2022-10-03 22:57:24'),
('491', 'Munthali D', 'dmunthali@mubas.ac.mw', '2022-10-03 22:57:51', '2022-10-03 22:57:51'),
('249', 'Namalima S', 'snamalima@mubas.ac.mw', '2022-10-03 22:58:19', '2022-10-03 22:58:19'),
('418', 'Mpinganjira A', 'ampinganjira@mubas.ac.mw', '2022-10-03 22:58:49', '2022-10-03 22:58:49'),
('236', 'Mulaga A', 'amulaga@mubas.ac.mw', '2022-10-03 22:59:16', '2022-10-03 22:59:16'),
('305', 'phiri I', 'iphiri@mubas.ac.mw', '2022-10-03 22:59:49', '2022-10-03 22:59:49'),
('112', 'Kaloti W', 'wkaloti@mubas.ac.mw', '2022-10-03 23:00:17', '2022-10-03 23:01:02'),
('160', 'Namangale D', 'dnalamngale@mubas.ac.mw', '2022-10-03 23:01:44', '2022-10-03 23:01:44'),
('469', 'Kasowanjete B', 'bkasowanjete@mubas.ac.mw', '2022-10-03 23:02:25', '2022-10-03 23:02:25'),
('251', 'chiocha C', 'cchiocha@mubas.ac.mw', '2022-10-03 23:03:23', '2022-10-03 23:03:23'),
('453', 'Kaira T', 'tkaira@mubas.ac.mw', '2022-10-06 07:22:59', '2022-10-06 07:22:59'),
('443', 'Tembo D', 'dtembo@mubas.ac.mw', '2022-10-06 07:23:52', '2022-10-06 07:23:52'),
('51', 'Thole B', 'bthole@mubas.ac.mw', '2022-10-06 07:27:06', '2022-10-06 07:27:06'),
('328', 'KAONGA C', 'ckaonga@mubas.ac.mw', '2022-10-09 13:30:54', '2022-10-09 13:30:54'),
('485', 'CHIREMBO D', 'dchirembo@mubas.ac.mw', '2022-10-09 13:34:09', '2022-10-09 13:34:09'),
('174', 'THENGOLONSE A', 'athengolonse@mubas.ac.mw', '2022-10-09 13:42:09', '2022-10-09 13:42:09'),
('82', 'MUSSA P', 'Pmussa@mubas.ac.mw', '2022-10-09 13:45:53', '2022-10-09 13:45:53'),
('276', 'NYASULU J', 'jnyasulu@mubas.ac.mw', '2022-10-09 13:46:37', '2022-10-09 13:46:37'),
('299', 'MKAVEA D', 'dmkavea@mubas.ac.mw', '2022-10-09 13:47:23', '2022-10-09 13:47:23'),
('75', 'NYIRENDA G', 'gnyirenda@mubas.ac.mw', '2022-10-09 13:48:15', '2022-10-09 13:48:15'),
('76', 'CHINKONO T', 'tchinkono@mubas.ac.mw', '2022-10-09 13:52:30', '2022-10-09 13:52:30'),
('145', 'KHUDZE S', 'skhudze@mubas.ac.mw', '2022-10-09 13:54:30', '2022-10-09 13:54:30'),
('103', 'Chadza T', 'tchadza@mubas.ac.mw', '2022-10-09 13:56:35', '2022-10-09 13:56:35'),
('461', 'TSITSI C', 'ctsitsi@mubas.ac.mw', '2022-10-31 11:19:46', '2022-10-31 11:19:46'),
('196', 'MONAWE B', 'bmonawe@mubas.ac.mw', '2022-10-31 11:20:16', '2022-10-31 11:20:16'),
('218', 'HANIF R', 'rhanif@mubas.ac.mw', '2022-10-31 11:20:41', '2022-10-31 11:20:41'),
('220', 'LIPUNGA A', 'alipunga@mubas.ac.mw', '2022-10-31 11:21:32', '2022-10-31 11:21:32'),
('157', 'CHIUMPHA S', 'schiumpha@mubas.ac.mw', '2022-10-31 11:23:31', '2022-10-31 11:23:31'),
('97', 'KANKHOMBA M', 'mkankhomba@mubas.ac.mw', '2022-10-31 11:24:02', '2022-10-31 11:24:02'),
('8', 'KADZAKUMANJA G', 'gkadzakumanja@mubas.ac.mw', '2022-10-31 11:24:37', '2022-10-31 11:24:37'),
('416', 'CHIMTENGO S', 'schimtengo@mubas.ac.mw', '2022-10-31 11:31:05', '2022-10-31 11:31:05'),
('396', 'MUTSOBENGO E', 'emutsobengo@mubas.ac.mw', '2022-10-31 11:34:16', '2022-10-31 11:34:16'),
('421', 'CHILUMPHA S', 'schilumpha@mubas.ac.mw', '2022-10-31 11:35:11', '2022-10-31 11:35:11'),
('22', 'NAZOMBE M', 'mnazombe@mubas.ac.mw', '2022-10-31 11:35:52', '2022-10-31 11:35:52'),
('400', 'CHINGUWO P', 'pchinguwo@mubas.ac', '2022-10-31 11:36:36', '2022-10-31 11:36:36'),
('210', 'DZIMBIRI G', 'gdzimbiri@mubas.ac.mw', '2022-10-31 11:38:18', '2022-10-31 11:38:18'),
('223', 'CHIMPESA E', 'echimpesa@mubas.ac.mw', '2022-10-31 11:39:58', '2022-10-31 11:39:58'),
('393', 'CHIDULE C', 'cchidule@mubas.ac.mw', '2022-10-31 11:40:42', '2022-10-31 11:40:42'),
('226', 'SAMBANKUSI C', 'csambankusi@mubas.ac.mw', '2022-10-31 11:41:35', '2022-10-31 11:41:35'),
('87', 'CHOSO O', 'ochoso@mubas.ac.mw', '2022-10-31 11:49:51', '2022-10-31 11:49:51'),
('373', 'CHIDULE C', 'cchidule@mubas.ac.mw', '2022-10-31 11:51:51', '2022-10-31 11:51:51'),
('490', 'MADAMUSE T', 'tmadamuse@mubas.ac.mw', '2022-10-31 11:52:55', '2022-10-31 11:52:55'),
('231', 'MUSOPOLE A', 'amusopole@mubas.ac.mw', '2022-10-31 11:53:43', '2022-10-31 11:53:43'),
('337', 'KUMWENDA  J', 'jkumwenda@mubas.ac.mw', '2022-10-31 11:54:56', '2022-10-31 11:54:56'),
('106', 'PHANGAPHANGA M', 'mphangaphanga@mubas.ac.mw', '2022-10-31 11:55:53', '2022-10-31 11:55:53'),
('163', 'MUMBA  S', 'smumba@mubas.ac.mw', '2022-10-31 11:56:48', '2022-10-31 11:56:48'),
('222', 'MAJANGA B', 'bmajanga@mubas.ac.mw', '2022-10-31 11:57:44', '2022-10-31 11:57:44'),
('336', 'SINYEKA S', 'ssinyeka@mubas.ac.mw', '2022-10-31 11:58:32', '2022-10-31 11:58:32'),
('459', 'CHIGAMBA C', 'cchigamba@mubas.ac.mw', '2022-10-31 11:59:34', '2022-10-31 11:59:34'),
('83', 'MALEMIA M', 'mmalemia@mubas.ac.mw', '2022-10-31 12:01:39', '2022-10-31 12:01:39'),
('38', 'MPOSA S', 'smposa@mubas.ac.mw', '2022-10-31 12:02:16', '2022-10-31 12:02:16'),
('263', 'KASOKA D', 'dkasoka@mubas.ac.mw', '2022-10-31 12:03:13', '2022-10-31 12:03:13'),
('194', 'CHIKOJA J', 'jchikoja@mubas.ac.mw', '2022-10-31 12:03:58', '2022-10-31 12:04:10'),
('388', 'MUNTHALI S', 'smunthali@mubas.ac.mw', '2022-10-31 12:04:45', '2022-10-31 12:04:45'),
('225', 'MAKUPE D', 'dmakupe@mubas.ac.mw', '2022-10-31 12:06:23', '2022-10-31 12:06:23'),
('425', 'SESANI  L', 'lsesani@mubas.ac.mw', '2022-10-31 12:07:02', '2022-10-31 12:07:02'),
('295', 'NAMAKHWA C', 'cnamankhwa@mubas.ac.mw', '2022-10-31 12:12:50', '2022-10-31 12:12:50'),
('312', 'BAKUWA R', 'rbakuwa@mubas.ac.mw', '2022-10-31 12:13:38', '2022-10-31 12:13:38'),
('156', 'MHANGO T', 'tmhango@mubas.ac.mw', '2022-10-31 12:14:19', '2022-10-31 12:14:19'),
('215', 'MASAMBA J', 'jmasamba@mubas.ac.mw', '2022-10-31 12:16:08', '2022-10-31 12:16:08'),
('498', 'KASAMBARA A', 'akasambara@mubas.ac.mw', '2022-10-31 13:07:26', '2022-10-31 13:07:26'),
('391', 'BHIKA O', 'obhika@mubas.ac.mw', '2022-11-01 10:29:17', '2022-11-01 10:29:17'),
('283', 'KIPANDULA W', 'wkipandula@gmail.com', '2022-11-01 10:30:05', '2022-11-01 10:30:05'),
('183', 'MACHILINGA E', 'emachilinga@mubas.ac.mw', '2022-11-01 10:30:48', '2022-11-01 10:30:48'),
('441', 'MOLANDE E', 'emolande@mubas.ac.mw', '2022-11-01 10:31:10', '2022-11-01 10:31:10'),
('297', 'IBRAHIM E', 'eibrahim@mubas.ac.mw', '2022-11-01 10:32:11', '2022-11-01 10:32:11'),
('350', 'CHIMA E', 'echima@mubas.ac.mw', '2022-11-01 10:32:37', '2022-11-01 10:32:37'),
('239', 'NDEKETA H', 'hndeketa@mubas.ac.mw', '2022-11-01 10:33:01', '2022-11-01 10:33:01'),
('486', 'KAMNDAYA M', 'mkamndaya@mubas.ac.mw', '2022-11-01 10:33:40', '2022-11-01 10:33:40'),
('313', 'NYIRENDA L', 'lnyirenda@mubas.ac.mw', '2022-11-01 10:34:05', '2022-11-01 10:34:05'),
('338', 'CHITSONGA H', 'hchitsonga@mubas.ac.mw', '2022-11-01 10:34:32', '2022-11-01 10:34:32'),
('303', 'JANA C', 'cjana@mubas.ac.mw', '2022-11-01 10:36:15', '2022-11-01 10:36:15'),
('300', 'MLANGENI C', 'cmlangeni@mubas.ac.mw', '2022-11-01 10:36:43', '2022-11-01 10:36:43'),
('409', 'CHISANGA S', 'schisanga@mubas.ac.mw', '2022-11-01 10:37:05', '2022-11-01 10:37:05'),
('177', 'NKHONJERA C', 'cnkhonjera@mubas.ac.mw', '2022-11-01 10:38:27', '2022-11-01 10:38:27'),
('411', 'NYIRENDA G(CIT)', 'gnyirenda@mubas.ac.mw', '2022-11-01 10:39:33', '2022-11-01 10:39:33'),
('284', 'CHILUNGA H', 'hchilunga@mubas.ac.mw', '2022-11-01 10:41:01', '2022-11-01 10:41:01'),
('37', 'CHITAWO T', 'tchitawo@mubas.ac.mw', '2022-11-01 10:41:21', '2022-11-01 10:41:21'),
('40', 'CHIWAYA M', 'mchiwaya@mubas.ac.mw', '2022-11-01 10:41:48', '2022-11-01 10:41:48'),
('492', 'BANDA  R', 'rbanda@mubas.ac.mw', '2022-11-01 10:42:41', '2022-11-01 10:42:41'),
('72', 'AFULENI M', 'mafuleni@mubas.ac.mw', '2022-11-01 10:43:07', '2022-11-01 10:43:07'),
('352', 'KAWERAWERA C', 'ckawerawera@mubas.ac.mw', '2022-11-01 10:46:02', '2022-11-01 10:46:02'),
('36', 'KONDOWE K', 'kkondowe@mubas.ac.mw', '2022-11-01 10:46:30', '2022-11-01 10:46:30'),
('216', 'BAKOLO R', 'rbakolo@mubas.ac.mw', '2022-11-01 10:47:21', '2022-11-01 10:47:21'),
('91', 'MULIVI O', 'omulivi@mubas.ac.mw', '2022-11-01 10:48:16', '2022-11-01 10:48:16'),
('500', 'CHISANTHI D', 'dchisanthi@mubas.ac.mw', '2022-11-01 10:49:22', '2022-11-01 10:49:22'),
('162', 'KAMBALA C', 'ckambala@mubas.ac.mw', '2022-11-01 10:49:56', '2022-11-01 10:49:56'),
('24', 'LUNGU K', 'klungu@mubas.ac.mw', '2022-11-01 10:50:24', '2022-11-01 10:50:24'),
('429', 'KUMWENDA S', 'skumwenda@mubas.ac.mw', '2022-11-01 10:52:19', '2022-11-01 10:52:19'),
('291', 'TAULO S', 'staulo@mubas.ac.mw', '2022-11-01 10:52:44', '2022-11-01 10:52:44'),
('455', 'KALULU K', 'kkalulu@mubas.ac.mw', '2022-11-01 11:05:32', '2022-11-01 11:05:32'),
('3', 'KAMWENDO E', 'ekamwendo@mubas.ac.mw', '2022-11-01 11:36:49', '2022-11-01 11:36:49'),
('89', 'KAMWAZA M', 'mkamwaza@mubas.ac.mw', '2022-11-01 11:50:21', '2022-11-01 11:50:21'),
('245', 'BANDA HMK', 'hkmbanda@mubas.ac.mw', '2022-11-01 11:54:09', '2022-11-01 11:54:09');

-- --------------------------------------------------------

--
-- Table structure for table `lecturers`
--

DROP TABLE IF EXISTS `lecturers`;
CREATE TABLE IF NOT EXISTS `lecturers` (
  `lecturer_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`lecturer_id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `lecturers`
--

INSERT INTO `lecturers` (`lecturer_id`, `name`, `email`, `created_at`, `updated_at`) VALUES
(1, 'Sam Jack', 'samjack@gmail.com', '2022-08-28 06:40:54', '2022-08-28 06:40:54'),
(2, 'Magela C', 'magelac@gmail.com', '2022-08-29 02:34:25', '2022-08-29 02:34:25'),
(3, 'Banda H', 'bandah@gmail.com', '2022-08-29 02:34:45', '2022-08-29 02:34:45'),
(4, 'Chaipa D', 'chaipad@gmail.com', '2022-08-29 02:35:12', '2022-08-29 02:35:12'),
(5, 'Chiipa P', 'chiipap@gmail.com', '2022-08-29 02:35:43', '2022-08-29 02:35:43'),
(6, 'Kumwenda V', 'kumwendav@gmail.com', '2022-08-29 02:36:07', '2022-08-29 02:36:07'),
(7, 'Kaponya A', 'kaponyaa@gmail.com', '2022-08-29 02:36:32', '2022-08-29 02:36:32'),
(8, 'Mbewe R', 'mbewer@gmail.com', '2022-09-05 14:06:11', '2022-09-05 14:06:11');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=66 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(54, '2014_10_12_000000_create_users_table', 1),
(55, '2014_10_12_100000_create_password_resets_table', 1),
(56, '2019_08_19_000000_create_failed_jobs_table', 1),
(57, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(58, '2022_08_18_073141_create_lecturer_table', 1),
(59, '2022_08_18_073529_create_faculty_table', 1),
(60, '2022_08_18_073714_create_department_table', 1),
(61, '2022_08_18_111914_create_classes_table', 1),
(62, '2022_08_18_112547_create_department_module_table', 1),
(63, '2022_08_18_112947_create_module_table', 1),
(64, '2022_08_18_113631_create_room_table', 1),
(65, '2022_09_07_113106_create_timetable_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `module`
--

DROP TABLE IF EXISTS `module`;
CREATE TABLE IF NOT EXISTS `module` (
  `module_code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `module_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lecturer` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `exam` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`module_code`),
  KEY `module_lecturer_index` (`lecturer`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `module`
--

INSERT INTO `module` (`module_code`, `module_name`, `lecturer`, `exam`, `created_at`, `updated_at`) VALUES
('GIS', 'geographical information systems', '204', 'Examination', '2022-09-10 13:02:59', '2022-09-10 13:02:59'),
('PHY-122', 'Physics II', '30', 'Examination', '2022-10-03 23:08:13', '2022-10-03 23:08:13'),
('EES-322', 'ELECTRICAL AND ELECTRONIC SERVICING', '394', 'Assessment method', '2022-10-03 23:10:11', '2022-10-06 06:59:17'),
('PRJ-122', 'PROGRAMMING II', '266', 'Examination', '2022-10-03 23:11:18', '2022-10-03 23:11:18'),
('TEL-322', 'TELECOMMUNICATIONS', '497', 'Examination', '2022-10-03 23:12:18', '2022-10-03 23:12:18'),
('LAN-EAP-111', 'ENGLISH FOR ACADEMIC PURPOSES 1', '248', 'Examination', '2022-10-06 06:57:44', '2022-10-06 06:58:49'),
('MTS-COA-111', 'COLLEGE ALGEBRA', '432', 'Examination', '2022-10-06 07:04:01', '2022-10-06 07:04:01'),
('PBS-BIO-111', 'BIOLOGY', '394', 'Examination', '2022-10-06 07:06:47', '2022-10-06 07:06:47'),
('PBS-LMG-111', 'LABORATORY MANAGEMENT', '406', 'Examination', '2022-10-06 07:07:41', '2022-10-06 07:07:41'),
('PBS-CHE-111', 'CHEMISTRY', '258', 'Examination', '2022-10-06 07:09:57', '2022-10-06 07:09:57'),
('PBS-PHY-111', 'PHYSICS 1', '30', 'Examination', '2022-10-06 07:10:58', '2022-10-06 07:10:58'),
('LAN-COS-211', 'COMMUNICATION STUDIES', '414', 'Examination', '2022-10-06 07:14:37', '2022-10-06 07:14:37'),
('PBS-BIO-213', 'BIOLOGY III', '65', 'Examination', '2022-10-06 07:17:55', '2022-10-06 07:17:55'),
('MTS-ICA-211', 'INTERMEDIATE CALCULUS', '285', 'Examination', '2022-10-06 07:18:51', '2022-10-06 07:18:51'),
('PBS-PHY-213', 'PHYSICS III', '407', 'Examination', '2022-10-06 07:20:39', '2022-10-06 07:20:39'),
('ANC-311', 'Analytical Chemistry', '51', 'Examination', '2022-10-09 13:18:16', '2022-10-09 13:18:16'),
('ENC-311', 'Environmental  Chemistry', '328', 'Examination', '2022-10-09 13:33:08', '2022-10-09 13:33:08'),
('EPT-311', 'Environmental process and Technology', '485', 'Examination', '2022-10-09 13:35:50', '2022-10-09 13:35:50'),
('ATS-311', 'Applied statistics', '174', 'Examination', '2022-10-09 13:43:26', '2022-10-09 13:43:26'),
('DSA-311', 'DATA STRUCTURES AND ALGORITHMS', '276', 'Examination', '2022-10-09 13:49:19', '2022-10-09 13:49:19'),
('OPS-311', 'OPERATING SYSTEMS 1', '299', 'Examination', '2022-10-09 13:50:15', '2022-10-09 13:50:15'),
('DMS-311', 'DATA MANAGEMENT SYSTEMS', '75', 'Examination', '2022-10-09 13:51:07', '2022-10-09 13:51:07'),
('HWS-312', 'COMPUTER HARDWARE II', '76', 'Examination', '2022-10-09 13:53:33', '2022-10-09 13:53:33'),
('SAD-211', 'SYSTEMS ANALYSIS AND DESIGN', '145', 'Examination', '2022-10-09 13:55:43', '2022-10-09 13:55:43'),
('LAN-COM-221', 'OGRANISATIONAL AND MANAGERIAL COMMUNICATION I', '461', 'Examination', '2022-10-31 12:54:23', '2022-10-31 12:54:23'),
('ACC-ACC-223', 'BUSINESS ACCOUNTING', '196', 'Assessment method', '2022-10-31 13:04:08', '2022-10-31 13:04:08'),
('ACC-TAX-221', 'TAXATION', '218', 'Examination', '2022-10-31 13:04:42', '2022-10-31 13:04:42'),
('MTS-STA-222', 'BUSINESS STATISCTICS', '498', 'Examination', '2022-10-31 13:10:20', '2022-10-31 13:10:20'),
('BUS-MAC-321', 'FINANCIAL REPORTING III', '394', 'Assessment method', '2022-10-31 13:11:37', '2022-10-31 13:13:11'),
('BUS-MAC-322', 'PERFOMANCE MANAGEMENT', '421', 'Examination', '2022-10-31 13:14:12', '2022-10-31 13:14:12'),
('ACC-PRM-321', 'PROJECT MANAGEMENT', '97', 'Examination', '2022-10-31 13:15:01', '2022-10-31 13:15:01'),
('LAN-OMC-322', 'ORGANISATIONAL AND MANAGERIAL COMMUNICATION III', '8', 'Examination', '2022-10-31 13:16:54', '2022-10-31 13:16:54'),
('BUS-BRM-321', 'RESEARCH AND BUSINESS METHODS', '416', 'Examination', '2022-10-31 13:18:03', '2022-10-31 13:18:03'),
('BUS-LAW-325', 'COOPERATE LAW', '396', 'Examination', '2022-10-31 13:19:09', '2022-10-31 13:19:09'),
('ACC-FIN-322', 'FINANCIAL REPORTING III', '220', 'Examination', '2022-10-31 13:20:03', '2022-10-31 13:20:03'),
('ACC-MAC-321', 'PERFOMANCE MANAGEMENT', '421', 'Examination', '2022-10-31 13:21:19', '2022-10-31 13:21:19'),
('LAN-COM-322', 'ORGANISATIONAL AND MANAGERIAL COMMUNICATION II', '22', 'Examination', '2022-10-31 13:24:01', '2022-10-31 13:24:01'),
('ACC-BRRM-321', 'BUSINESS RESEARCH METHODS', '416', 'Examination', '2022-10-31 13:25:51', '2022-10-31 13:25:51'),
('ACC-HRM-421', 'HHUMAN RESOURCE MANAGEMENT', '210', 'Examination', '2022-10-31 13:27:59', '2022-10-31 13:27:59'),
('ACC-RIM-421', 'RISK MANAGEMENT', '223', 'Examination', '2022-10-31 13:31:04', '2022-10-31 13:31:04'),
('ACC-SAP-421', 'SECURITY ANALYSIS AND PORTIFOLIO MANAGEMENT', '373', 'Examination', '2022-10-31 13:33:09', '2022-10-31 13:33:09'),
('BUS-EBS-421', 'ENTREPRENURHIP AND SMALL BUSINESS MANAGEMENT', '226', 'Examination', '2022-10-31 13:34:16', '2022-10-31 13:34:16'),
('ACC-TAX-422', 'ADVANCED TAXATION', '87', 'Examination', '2022-10-31 13:35:45', '2022-10-31 13:35:45'),
('BUS-HRM-421', 'HUMAN RESOURCE MANAGEMENT', '210', 'Examination', '2022-10-31 13:41:50', '2022-10-31 13:41:50'),
('BUS-ESB-421', 'ENTREPRENEURSHIP AND SMALL BUSINESS MANAGEMEN', '226', 'Examination', '2022-10-31 13:58:47', '2022-10-31 13:58:47'),
('BUS-OBE-122', 'ORGANISATIONAL BEHAVIOUR II', '490', 'Examination', '2022-10-31 13:59:41', '2022-10-31 13:59:41'),
('MTS-CAL-122', 'INTRODUCTION TO CALCULUS', '231', 'Examination', '2022-10-31 14:00:56', '2022-10-31 14:00:56'),
('ACC-PAU-421', 'PERFOMANCE MANAGEMENT', '459', 'Examination', '2022-11-01 10:04:48', '2022-11-01 10:04:48'),
('ACC-AUD-421', 'BUSINESS INFORMATION SYSTEMS AUDITING', '83', 'Examination', '2022-11-01 10:05:41', '2022-11-01 10:05:41'),
('ACC-EBS-421', 'ENTREPRENEURSHIP AND SMALL BUSINESS MANAGEMEN', '226', 'Examination', '2022-11-01 10:06:54', '2022-11-01 10:06:54'),
('BUS-ACC-121', 'BUSINESS ACCOUNTING I', '263', 'Examination', '2022-11-01 10:09:29', '2022-11-01 10:09:29'),
('LAN-EAP-122', 'ENGLISH FOR ACADEMIC PURPOSES II', '194', 'Examination', '2022-11-01 10:10:37', '2022-11-01 10:10:37'),
('BUS-ECN-122', 'MACROECONOMICS', '388', 'Examination', '2022-11-01 10:11:33', '2022-11-01 10:11:33'),
('BUS-LAW-122', 'LABOUR LAW', '163', 'Examination', '2022-11-01 10:12:18', '2022-11-01 10:12:18'),
('BUS-CAC-222', 'COSTING AND BUDGETARY CONTROL', '97', 'Examination', '2022-11-01 10:13:47', '2022-11-01 10:13:47'),
('LAN-OMC-221', 'ORGANISATIONAL AND MANAGERIAL COMMUNICATION I', '194', 'Examination', '2022-11-01 10:15:27', '2022-11-01 10:15:27'),
('MST-STA-222', 'BUSINESS STATISCTICS', '225', 'Examination', '2022-11-01 10:19:44', '2022-11-01 10:19:44'),
('BUS-PRM-321', 'PROJECT MANAGEMENT', '425', 'Examination', '2022-11-01 10:20:27', '2022-11-01 10:20:27'),
('BUS-IMA-322', 'INTERNATIONAL MARKETING', '295', 'Examination', '2022-11-01 10:21:37', '2022-11-01 10:21:37'),
('ENH-ENP-321', 'ENVIRONMENTAL POLLUTION', '291', 'Examination', '2022-11-01 10:57:23', '2022-11-01 10:57:23'),
('ENH-FSH-321', 'FOOD SAFETY AND HYGIENE', '429', 'Examination', '2022-11-01 10:58:16', '2022-11-01 10:58:16'),
('ENH-SOC-211', 'SOCIOLOGY OF HEALTH AND ILLINESS', '469', 'Examination', '2022-11-01 11:02:08', '2022-11-01 11:02:08'),
('ENH-WSH-211', 'WATER SUPPLY SANITATION AND HYGIENE', '455', 'Examination', '2022-11-01 11:07:04', '2022-11-01 11:07:04'),
('ENH-MHT-211', 'MEAT HYGIENE THEORY', '152', 'Examination', '2022-11-01 11:08:09', '2022-11-01 11:08:09'),
('ENH-BLS-211', 'BUIDLING SERVICES', '24', 'Examination', '2022-11-01 11:09:13', '2022-11-01 11:09:13'),
('MTS-PAS-221', 'PROBABILITY AND STATISTICS', '336', 'Examination', '2022-11-01 11:10:11', '2022-11-01 11:10:11'),
('ENH-HPL-221', 'HEALTH POLICY AND LEGISTATION', '162', 'Examination', '2022-11-01 11:11:18', '2022-11-01 11:11:18'),
('PBS-CHE-122', 'CHEMISTRY II', '500', 'Examination', '2022-11-01 11:12:18', '2022-11-01 11:12:18'),
('PBS-PHY-122', 'Physics II', '217', 'Examination', '2022-11-01 11:12:59', '2022-11-01 11:12:59'),
('LAN-COS-122', 'COMMUNICATION STUDIES II', '36', 'Examination', '2022-11-01 11:13:55', '2022-11-01 11:13:55'),
('PBS-BIO-122', 'ANATOMY AND PHYSIOLOGY', '91', 'Examination', '2022-11-01 11:15:24', '2022-11-01 11:15:24'),
('MTS-MAT-121', 'TRIGONOMETRY AND INTRODUCTORY CALCULUS', '391', 'Examination', '2022-11-01 11:16:31', '2022-11-01 11:16:31'),
('CIT-IMG-421', 'COMPUTER GRAPHICS', '492', 'Examination', '2022-11-01 11:17:05', '2022-11-01 11:17:05'),
('CIT-CSS-421', 'COMPUTING SECURITY', '76', 'Examination', '2022-11-01 11:17:46', '2022-11-01 11:17:46'),
('CIT-SAM-422', 'SERVER ADMINISTRATION II', '411', 'Examination', '2022-11-01 11:18:46', '2022-11-01 11:18:46'),
('ELE-TEL-322', 'TELECOMMUNICATIONS', '497', 'Examination', '2022-11-01 11:19:24', '2022-11-01 11:19:24'),
('CIT-HWS-323', 'COMPUTER HARDWARE III', '284', 'Examination', '2022-11-01 11:20:44', '2022-11-01 11:20:44'),
('CIT-OPS-322', 'OPERATING SYSTEMS II', '299', 'Examination', '2022-11-01 11:21:28', '2022-11-01 11:21:28'),
('ELE-ELE-321', 'MICRO-ELECTRONICS SYSTEMS', '216', 'Examination', '2022-11-01 11:22:11', '2022-11-01 11:22:11'),
('CIT-SAD-222', 'SYSTEMS ANALYSIS AND DESIGN II', '299', 'Examination', '2022-11-01 11:23:20', '2022-11-01 11:23:20'),
('CIT-HWS-221', 'COMPUTER HARDWARE I', '284', 'Examination', '2022-11-01 11:32:05', '2022-11-01 11:32:05'),
('CIT-NET-224', 'NETWORKING IV', '37', 'Examination', '2022-11-01 11:33:17', '2022-11-01 11:33:17'),
('ACC-FIN-222', 'FINANCIAL ACCOUNTING II', '40', 'Examination', '2022-11-01 11:35:29', '2022-11-01 11:35:29'),
('ACC-COA-322', 'COST ACCOUNTING II', '3', 'Examination', '2022-11-01 11:40:06', '2022-11-01 11:40:06'),
('ACC-FIN-323', 'FINANCIAL ACCOUNTING III', '40', 'Examination', '2022-11-01 11:41:14', '2022-11-01 11:41:14'),
('ELE-ELE-221', 'DIGITAL ELECTRONICS', '352', 'Examination', '2022-11-01 11:43:28', '2022-11-01 11:43:28'),
('CIT-SYS-321', 'INFORMATION SYSTEM AUDITS', '83', 'Examination', '2022-11-01 11:44:31', '2022-11-01 11:44:31'),
('ACC-FIN-425', 'FINANCIAL ACCOUNTING V', '220', 'Examination', '2022-11-01 11:46:13', '2022-11-01 11:46:13'),
('ACC-MAA-422', 'MANAGERIAL ACCOUNTING II', '3', 'Examination', '2022-11-01 11:47:11', '2022-11-01 11:47:11'),
('MTS-MAT-122', 'TRIGONOMETRY AND CALCULUS', '72', 'Examination', '2022-11-01 11:48:42', '2022-11-01 11:48:42'),
('CIT-NET-122', 'NETWORKING II', '411', 'Examination', '2022-11-01 11:55:33', '2022-11-01 11:55:33'),
('CIT-PRG-122', 'PROGRAMMING II', '266', 'Examination', '2022-11-01 11:56:19', '2022-11-01 11:56:19'),
('LAN-BUC-222', 'BUSINESS COMMUNICATION II', '36', 'Examination', '2022-11-01 11:57:28', '2022-11-01 11:57:28'),
('MTS-AST-221', 'APPLIED STATISTICS', '498', 'Examination', '2022-11-01 11:58:12', '2022-11-01 11:58:12');

-- --------------------------------------------------------

--
-- Table structure for table `modules`
--

DROP TABLE IF EXISTS `modules`;
CREATE TABLE IF NOT EXISTS `modules` (
  `module_code` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `module_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lecturer` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `exam` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`module_code`),
  KEY `module_lecturer_index` (`lecturer`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `modules`
--

INSERT INTO `modules` (`module_code`, `module_name`, `lecturer`, `exam`, `created_at`, `updated_at`) VALUES
('LAN-EAP-111', 'ENGLISH FOR ACADEMIC PURPOSES I', '2', 'Examination', '2022-09-01 09:11:26', '2022-09-01 09:11:26'),
('MTS-COA-111', 'COLLEGE ALGEBRA', '3', 'Examination', '2022-09-01 10:02:13', '2022-09-01 10:02:13'),
('PBS-LMG-111', 'LABORATORY MANAGEMENT I', '4', 'Examination', '2022-09-01 10:03:26', '2022-09-01 10:03:26'),
('PBS-CHE-111', 'CHEMISTRY I', '5', 'Examination', '2022-09-01 10:04:03', '2022-09-01 10:04:03'),
('PBS-PHY-111', 'PHYSICS', '6', 'Examination', '2022-09-01 10:04:35', '2022-09-01 10:04:35'),
('LAN-COS-211', 'COMMUNICATION STUDIES', '7', 'Examination', '2022-09-01 10:05:09', '2022-09-01 10:05:09');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

DROP TABLE IF EXISTS `room`;
CREATE TABLE IF NOT EXISTS `room` (
  `room_code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sits` int(11) NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`room_code`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `room`
--

INSERT INTO `room` (`room_code`, `name`, `sits`, `status`, `created_at`, `updated_at`) VALUES
('E220', 'Engineering building', 40, 'Available', '2022-10-03 23:17:32', '2022-10-03 23:17:32'),
('E223', 'Engineering building', 30, 'Available', '2022-10-03 23:18:00', '2022-10-03 23:18:00'),
('412', 'ODL Building', 46, 'Available', '2022-10-03 23:18:33', '2022-10-03 23:18:33'),
('ODL-303', 'ODL Building', 100, 'Available', '2022-10-09 11:29:10', '2022-10-09 11:29:10'),
('ODL-404', 'ODL Building', 200, 'Available', '2022-10-09 11:29:37', '2022-10-09 11:29:37'),
('CAFE', 'Cafeteria', 300, 'Available', '2022-10-09 11:30:28', '2022-10-09 11:30:28'),
('COMESA', 'Comesa', 650, 'Available', '2022-10-09 11:30:58', '2022-10-09 11:30:58'),
('E220-320', 'ODL Building', 300, 'Available', '2022-10-09 11:31:36', '2022-10-09 11:31:36'),
('E221-222', 'Engineering building', 100, 'Available', '2022-10-09 11:32:07', '2022-10-09 11:32:07'),
('E223-224', 'Engineering building', 100, 'Available', '2022-10-09 11:33:09', '2022-10-09 11:33:09'),
('WET1', 'Wet building', 120, 'Available', '2022-10-09 11:33:42', '2022-10-09 11:33:42'),
('WET 2', 'Wet building', 120, 'Available', '2022-10-09 11:34:20', '2022-10-09 11:34:20'),
('WET 3', 'Wet building', 100, 'Available', '2022-10-09 11:34:47', '2022-10-09 11:34:47'),
('WET 4', 'Wet building', 100, 'Available', '2022-10-09 11:35:18', '2022-10-09 11:35:18'),
('WET 5', 'Wet building', 70, 'Available', '2022-10-09 11:35:45', '2022-10-09 11:35:45'),
('WET 6', 'Wet building', 70, 'Available', '2022-10-09 11:36:07', '2022-10-09 11:36:07'),
('CC-11', 'Chichiri', 70, 'Available', '2022-10-09 11:37:02', '2022-10-09 11:37:02'),
('CC-19', 'Chichiri', 70, 'Available', '2022-10-09 11:37:38', '2022-10-09 11:37:38'),
('CC-20', 'Chichiri', 70, 'Available', '2022-10-09 11:38:01', '2022-10-09 11:38:01'),
('CC-24', 'Chichiri', 60, 'Available', '2022-10-09 11:38:31', '2022-10-09 11:38:31'),
('CC-25', 'Chichiri', 60, 'Available', '2022-10-09 11:39:13', '2022-10-09 11:39:13'),
('CC-27', 'Chichiri', 20, 'Available', '2022-10-09 11:40:12', '2022-10-09 11:40:12'),
('CC-DHALL', 'Chichiri', 150, 'Available', '2022-10-09 11:40:42', '2022-10-09 11:40:42'),
('CC-LT1', 'Chichiri', 150, 'Available', '2022-10-09 11:41:05', '2022-10-09 11:41:05');

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

DROP TABLE IF EXISTS `rooms`;
CREATE TABLE IF NOT EXISTS `rooms` (
  `room_code` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sits` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`room_code`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `timetable`
--

DROP TABLE IF EXISTS `timetable`;
CREATE TABLE IF NOT EXISTS `timetable` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `year` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `semester` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `faculty` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `class` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `hours` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `students` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `room` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `module` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `timetable_faculty_index` (`faculty`),
  KEY `timetable_class_index` (`class`),
  KEY `timetable_room_index` (`room`),
  KEY `timetable_module_index` (`module`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
