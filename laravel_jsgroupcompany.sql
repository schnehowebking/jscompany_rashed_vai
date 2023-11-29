-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 28, 2023 at 03:05 PM
-- Server version: 5.7.24
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel_jsgroupcompany`
--

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `signer_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `application_id` int(11) DEFAULT NULL,
  `email` text COLLATE utf8mb4_unicode_ci,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hoa_name_number` text COLLATE utf8mb4_unicode_ci,
  `street` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `state` text COLLATE utf8mb4_unicode_ci,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `zip` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dob` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ssn` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `driver_license` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dl_issue_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dl_exp_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `anual_gross_income` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `additional_income` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `driver_license_photo` text COLLATE utf8mb4_unicode_ci,
  `status` varchar(60) COLLATE utf8mb4_unicode_ci DEFAULT 'temp',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `signer_id`, `user_id`, `application_id`, `email`, `first_name`, `last_name`, `phone`, `hoa_name_number`, `street`, `state`, `city`, `zip`, `dob`, `ssn`, `driver_license`, `dl_issue_date`, `dl_exp_date`, `anual_gross_income`, `additional_income`, `driver_license_photo`, `status`, `created_at`, `updated_at`) VALUES
(117, NULL, 1, 46, NULL, 'Alisa', 'Chambers', '+1 17', NULL, '62', NULL, '80', '96389', 'Voluptas et laborios', 'Culpa quaerat deseru', 'Aut error ipsam vel', '19-Nov-1986', '30-Dec-2015', '497', '175', '63f30224195a2.jpg', 'pending', '2023-02-19 23:16:43', '2023-02-19 23:16:43'),
(118, NULL, 1, 47, NULL, 'Elmo', 'Mercado', '+1 665 607 4817', NULL, '10', NULL, '41', '39369', '18-Aug-1983', '38', 'Rerum quia reiciendi', '17-Dec-1984', '20-Feb-2000', '803', '404', '63f30224298b4.jpg', 'pending', '2023-02-19 23:16:44', '2023-02-19 23:16:44'),
(119, NULL, 1, 49, NULL, 'Aquila', 'Hopkins', '+1 548 469 3737', NULL, '17', NULL, '77', '78390', 'Itaque quia et in la', 'Soluta dolor quaerat', 'Quibusdam nemo porro', '07-Dec-2018', '21-Feb-2002', '92', '110', '63f599798fc06.png', 'pending', '2023-02-21 22:26:33', '2023-02-21 22:26:33'),
(120, NULL, 1, 49, NULL, 'Dolan', 'Cantu', '+1 (551) 948-9783', NULL, '15', NULL, '79', '88214', '12-Nov-1982', '687', 'Exercitation ipsum l', '31-May-1997', '11-Jun-2014', '340', '980', '63f59979a52bc.png', 'pending', '2023-02-21 22:26:33', '2023-02-21 22:26:33'),
(121, NULL, 1, 50, NULL, 'Kenneth', 'Garrett', '+1 19', NULL, '80', NULL, '30', '48265', 'Odit voluptatem et q', 'Obcaecati expedita a', 'Tempore est ex et l', '25-Aug-1980', '07-Oct-1990', '57', '850', '63f5a28c2a4b4.jpg', 'approved', '2023-02-21 22:38:14', '2023-02-21 23:05:23'),
(122, NULL, 1, 51, NULL, 'Ethan', 'Montgomery', '+1 559 893 7483', NULL, '69', NULL, '51', '27845', '23-Dec-1989', '1000', 'Ipsum nulla consequ', '25-Oct-2009', '02-Feb-1977', '327', '511', '63f59c237724a.png', 'decliend', '2023-02-21 22:38:14', '2023-03-06 22:18:11'),
(123, NULL, 1, 52, NULL, 'Graham', 'Velez', '+1 396 269 6366', NULL, '52', NULL, '37', '90749', '14-Feb-1989', '639', 'Aliquid aliquid aut', '05-Jan-1977', '15-May-1994', '827', '967', '63f59c23979c4.png', 'pending', '2023-02-21 22:38:14', '2023-02-21 22:38:15'),
(124, NULL, 1, 53, NULL, 'Arthur', 'Mcintyre', '+1 415 149 9413', NULL, '20', NULL, '29', '61234', 'Inventore ab laboris', 'Maxime consequatur', 'Optio dolor qui bea', '22-Aug-2005', '13-Sep-1999', '699', '889', '63fcd67017f07.jpg', 'pending', '2023-02-27 10:12:40', '2023-02-27 10:12:40'),
(125, NULL, 1, 54, NULL, 'Donovan', 'Ryan', '+1 327 159 4447', NULL, '3', NULL, '33', '80390', '17-Jan-1986', '891', 'Architecto et impedi', '14-Jul-1994', '12-Nov-1974', '632', '974', '63fcd6702f6dd.jpg', 'pending', '2023-02-27 10:12:40', '2023-02-27 10:12:40'),
(126, NULL, 1, 58, NULL, 'Adria', 'Cobb', '+1 659 763 1178', NULL, 'Dolore quia vel aut', 'Eaque laborum Velit', 'Nulla eveniet dolor', '97494', 'Id quisquam quaerat', 'Pa$$w0rd!', 'Voluptate tempor des', '14-Jul-1981', '12-Nov-2019', '914', '984', NULL, 'pending', '2023-02-28 02:20:41', '2023-02-28 02:20:41'),
(127, NULL, 1, 58, NULL, 'Mira', 'Haney', '+1 (684) 758-9341', NULL, '87', 'Quas officiis irure', '26', '76168', '11-May-1988', '300', '231', '02-Nov-2022', '08-Oct-2021', '896', '343', NULL, 'pending', '2023-02-28 02:20:41', '2023-02-28 02:20:41'),
(128, NULL, 1, 60, NULL, 'Alfonso', 'Pacheco', '+1 362 863 7771', NULL, 'Perferendis assumend', 'Sint cillum eos et q', 'Doloribus amet repr', '80676', 'Sequi perspiciatis', 'Pa$$w0rd!', 'Doloremque aliquam n', '29-Jul-2014', '06-Jan-1989', '958', '729', '6400973bc0590.jpg', 'pending', '2023-03-02 06:32:18', '2023-03-02 06:32:18'),
(129, NULL, 1, 61, NULL, 'Nero', 'Coffey', '+1 543 338 3486', NULL, 'Ducimus mollitia do', '[\"[\\\"Est nihil impedit a\\\"]\"]', 'Ad dolores dolorem e', '85810', '23-Dec-1982', '[\"[\\\"530\\\"]\"]', '500', '29-Apr-1970', '24-Oct-1992', '377', '85', '6400973bd334b.jpg', 'approved', '2023-03-02 06:32:18', '2023-03-02 06:33:12'),
(130, NULL, 1, 62, NULL, 'Farrah', 'Crosby', '+1 395 961 3677', NULL, 'Veritatis et ipsam l', 'Est consequatur aper', 'Cillum est adipisci', '84818', 'Atque doloribus est', 'Pa$$w0rd!', 'Enim alias quibusdam', '14-Apr-1990', '02-Nov-1991', '452', '211', '640098e0077ff.jpg', 'pending', '2023-03-02 06:38:55', '2023-03-02 06:38:56'),
(131, NULL, 1, 62, NULL, 'Knox', 'Ewing', '+1 622 144 5657', NULL, 'Asperiores totam eos', 'Itaque quibusdam ani', 'Fugiat ex dolor rep', '76482', '15-May-1997', '[\"[\\\"[\\\\\\\"[\\\\\\\\\\\\\\\"980\\\\\\\\\\\\\\\"]\\\\\\\"]\\\"]\"]', '544', '16-Oct-1987', '19-May-2015', '572', '765', '640098e027dc7.jpg', 'approved', '2023-03-02 06:38:56', '2023-03-02 10:21:45'),
(132, NULL, 1, 63, NULL, 'Cherokee', 'Gibbs', '+1 356 745 6666', NULL, 'Explicabo Est culpa', 'Velit sed sed enim n', 'Cum ullamco omnis ul', '64425', 'Autem ut quia illum', 'Pa$$w0rd!', 'Do sed enim proident', '23-Apr-1987', '13-Feb-1981', '593', '248', NULL, 'pending', '2023-03-02 13:21:32', '2023-03-02 13:21:32'),
(133, NULL, 1, 65, 'muxep@mailinator.com', 'Chiquita', 'Pate', '+1 865 921 5505', NULL, 'Ad minim alias ratio', 'Dolor perferendis vo', 'Cum eiusmod perferen', '57585', '03/09/2023', 'Pa$$w0rd!', 'Vero dolore ullam au', '16-Jan-2018', '08-Jan-2021', '52', '891', '6406e05145c74.jpg', 'pending', '2023-03-07 00:57:26', '2023-03-07 00:57:26'),
(134, NULL, 2, 66, 'tehoc@mailinator.com', 'Vivian', 'Alford', '+1 926 951 3812', NULL, 'Praesentium aut ipsu', 'Omnis enim facere vo', 'Voluptas corporis ve', '29941', '03/15/2023', 'Pa$$w0rd!', 'Maiores ea et conseq', '20-Apr-2018', '03/18/2023', '558', '791', '6419bc46d71af.jpg', 'pending', '2023-03-21 08:16:45', '2023-03-21 08:16:45'),
(135, NULL, 2, 67, 'camyfuhy@mailinator.com', 'Moses', 'Puckett', '+1 438 265 6543', NULL, 'Quae officia unde si', 'Velit consectetur ac', 'Rerum praesentium de', '88095', '17-Dec-1988', '240', '761', '21-Mar-1977', '12-Aug-1973', '866', '939', '6419bc4708c97.jpg', 'pending', '2023-03-21 08:16:45', '2023-03-21 08:16:45'),
(136, NULL, 1, 76, 'gyhe@mailinator.com', 'rrr', 'eeee', '+1 754 873 9862', 'adfasdgasdgasd', '123 street', 'Rangpur', 'Rangpu', '1211', '05/18/2023', 'asdf5sd4f5asd4f6', 'asdfasdfasdfa', '05/17/2023', '04/19/2023', '928', NULL, '6467b28d46e0b.jpg', 'pending', '2023-05-19 11:31:57', '2023-05-19 11:31:57'),
(137, NULL, 1, 76, 'gyhe@mailinator.com', 'rrr', 'eeee', '+1 754 873 9862', 'adfasdgasdgasd', '123 street', 'Rangpur', 'Rangpu', '1211', '05/18/2023', 'asdf5sd4f5asd4f6', 'asdfasdfasdfa', '05/17/2023', '04/19/2023', '928', NULL, '6467b2b4ad197.jpg', 'pending', '2023-05-19 11:32:36', '2023-05-19 11:32:36'),
(138, NULL, 1, 77, 'gyhe@mailinator.com', 'rrrrr', 'rrrrr', '+1 754 873 9862', NULL, NULL, NULL, NULL, NULL, '05/15/2023', 'sdgasdg2e23', 'dfasdfasd232321', '05/24/2023', '05/15/2023', '928', NULL, '6467b8615c9d4.jpg', 'pending', '2023-05-19 11:56:49', '2023-05-19 11:56:49'),
(139, NULL, 1, 78, 'wuruku@mailinator.com', 'Marshall', 'Jimenez', '+1 668 673 1977', NULL, NULL, NULL, NULL, NULL, '05/16/2023', 'Pa$$w0rd!', 'Vel aute voluptatem', '05/10/2023', '05/09/2023', '242', '505', '6467babad2e49.jpg', 'pending', '2023-05-19 12:06:50', '2023-05-19 12:06:50'),
(140, NULL, 1, 78, 'wuruku@mailinator.com', 'Marshall', 'Jimenez', '+1 668 673 1977', NULL, NULL, NULL, NULL, NULL, '05/16/2023', 'Pa$$w0rd!', 'Vel aute voluptatem', '05/10/2023', '05/09/2023', '242', '505', '6467bb0ae62ff.jpg', 'pending', '2023-05-19 12:08:10', '2023-05-19 12:08:10'),
(141, NULL, 1, 78, 'wuruku@mailinator.com', 'Marshall', 'Jimenez', '+1 668 673 1977', NULL, NULL, NULL, NULL, NULL, '05/16/2023', 'Pa$$w0rd!', 'Vel aute voluptatem', '05/10/2023', '05/09/2023', '242', '505', '6467bbac6b34a.jpg', 'pending', '2023-05-19 12:10:52', '2023-05-19 12:10:52'),
(142, NULL, 1, 79, 'ziduz@mailinator.com', 'Nolan', 'Foreman', '+1 314 528 8506', NULL, NULL, NULL, NULL, NULL, 'Aute enim sed sequi', 'Pa$$w0rd!', 'Obcaecati excepteur', '28-Oct-1989', '10-Dec-1982', '869', '431', '6467bc8ef178a.jpg', 'pending', '2023-05-19 12:14:38', '2023-05-19 12:14:38'),
(143, NULL, 1, 80, 'hevywavyg@mailinator.com', 'Melyssa', 'Kirby', '+1 688 351 7246', 'Ipsam est quia hic r', 'Et nihil sint dolor', 'Esse sit accusantiu', 'Impedit ea deserunt', '84630', 'Praesentium delectus', 'Pa$$w0rd!', 'Aut molestiae hic ex', '22-Aug-2010', '20-Apr-1974', '979', '788', NULL, 'pending', '2023-05-19 12:23:37', '2023-05-19 12:23:37'),
(144, NULL, 1, 81, 'xyby@mailinator.com', 'Amelia', 'Molina', '+1 381 624 9874', 'Ducimus fuga Rem n', 'Harum et veniam qua', 'Quam et irure expedi', 'Hic ut id eos volupt', '27379', 'Cum eiusmod enim est', 'Pa$$w0rd!', 'Dignissimos ut odit', '26-Jul-2021', '27-Aug-1974', '456', '351', '6467bef8a427d.jpg', 'pending', '2023-05-19 12:24:56', '2023-05-19 12:24:56'),
(145, 144, 1, 81, 'sicycovuxo@mailinator.com', 'Michelle', 'Pacheco', '+1 213 474 1413', NULL, NULL, NULL, NULL, NULL, '03/15/2023', 'Ut id laborum Et n', 'Cupiditate iusto qua', '03/16/2023', '02-Feb-2001', '928', NULL, '6467bef8b4526.jpg', 'pending', '2023-05-19 12:24:56', '2023-05-19 12:24:56'),
(146, NULL, 1, 82, 'sunykogo@mailinator.com', 'Tamekah', 'Hill', '+1 14', 'Expedita odit offici', 'Explicabo Dolore au', 'Voluptatem Qui aliq', 'Labore est repudiand', '86121', 'Minim qui et ut sit', 'Pa$$w0rd!', 'A et dolore et vel', '24-Mar-1989', '09-Jun-2021', '448', '428', '6467c036efd2d.jpg', 'pending', '2023-05-19 12:30:14', '2023-05-19 12:30:14'),
(147, 146, 1, 82, 'vunanoraby@mailinator.com', 'Michelle', 'Durham', '+1 213 474 1413', NULL, NULL, NULL, NULL, NULL, '03/16/2023', 'sd232323', '232323', '23', '11-Oct-2010', '928', '972', '6467c03711d30.jpg', 'pending', '2023-05-19 12:30:15', '2023-05-19 12:30:15'),
(148, NULL, 1, 83, 'kisumebo@mailinator.com', 'Brynn update', 'Church', '+1 565 392 9432', '+1 565 392 9432', 'Consectetur volupta', 'Adipisicing voluptat', 'Eius aspernatur quo', '23281', 'Voluptas nulla repud', 'Pa$$w0rd!', 'Quo cumque sapiente', '14-Jun-2011', '29-Apr-1977', '957', '720', '6467c1896082f.jpg', 'client', '2023-05-19 12:37:25', '2023-05-20 02:45:26'),
(149, 148, 1, 84, 'sicycovuxo@mailinator.com', 'Michelle update', 'Manning', '+1 754 873 9862', 'Incididunt quo quos', NULL, NULL, NULL, NULL, '03/15/2023', 'Ut id laborum Et n', 'Anim elit quisquam', '03/16/2023', '03/15/2023', '928', NULL, '646882849f8e2.jpg', 'client', '2023-05-19 12:37:25', '2023-05-20 02:45:26');

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
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2023_01_25_171230_create_notifications_table', 1),
(7, '2023_01_25_171524_create_orders_table', 1),
(8, '2023_01_26_163715_create_sessions_table', 1),
(9, '2023_01_29_221312_create_settings_table', 1),
(10, '2023_01_31_211454_create_payments_table', 1),
(11, '2023_02_02_145620_create_solar_progams_table', 1),
(12, '2023_02_02_145849_create_additionals_table', 1),
(13, '2023_02_02_155222_create_brands_table', 1),
(14, '2023_02_02_163407_create_customers_table', 1),
(15, '2023_02_05_192737_create_finances_table', 1),
(16, '2023_02_05_205718_create_legends_table', 1),
(17, '2023_02_05_223146_create_panels_table', 1),
(18, '2023_02_06_011006_create_paails_table', 2),
(19, '2023_02_06_064911_create_applications_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'follow, like, subscribe, ad_publish, purchased',
  `user_id` bigint(20) DEFAULT NULL COMMENT 'receiver_id',
  `ad_id` bigint(20) DEFAULT NULL,
  `order_id` bigint(20) DEFAULT NULL,
  `message` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `read` tinyint(1) NOT NULL DEFAULT '0' COMMENT '0=unread, 1=read',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('5K8dHDyUDNesSYqmRSCHt6CQgXbQWsm49uVLWuOl', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/119.0.0.0 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiZzNzYm5LbWtUUE5lSEl1M2lscjZpWndFMHM5NUU1aVlqZUpJbHRSNSI7czozOiJ1cmwiO2E6MDp7fXM6OToiX3ByZXZpb3VzIjthOjE6e3M6MzoidXJsIjtzOjM2OiJodHRwOi8vanNjb21wYW55LnRlc3QvYWRtaW5pc3RyYXRpdmUiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToxO30=', 1701181120),
('ouRlzLWapADJBAwFkHnK6JCmLkwVwkVMc5gg1QH6', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/119.0.0.0 Safari/537.36', 'YToyOntzOjY6Il90b2tlbiI7czo0MDoiVHJMUzBvZzRrRE1lWHFGNHhZZDJmUVNsODJtVmZPQ2ZLdGc1SGFxRiI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1701177488),
('pzkBfY2YkkdkEdFYub0oyEtX7NZwqWMBBZHCbf5o', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/119.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiNmI0aTJSZFg1WE8zSzhlY3ZNaHdKWFd2WHFiVVRDN2syRUlEaEdVMyI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzM6Imh0dHA6Ly9qc2NvbXBhbnkudGVzdC9hcHBfc2V0dGluZyI7fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjE7fQ==', 1701179009),
('rTeddiJRmU0Ia5z3qVO2himHWqw3jEwUgk3iKObl', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/113.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiN3NGdFNjRmNHNnBLNWd2OXBiUmFQSEgwNUFVcThZdUhoWXcxTDF1SSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDU6Imh0dHA6Ly9vdXJzb2xhcmRpcmVjdC50ZXN0L2N1c3RvbWVycy8xNDgvZWRpdCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjE7fQ==', 1684572530);

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_image` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `key`, `value`, `is_image`, `created_at`, `updated_at`) VALUES
(1, 'panel_upgrade', '400', 0, '2023-02-05 18:41:11', '2023-02-05 18:41:11'),
(2, 'hvac_system', '50', 0, '2023-02-05 18:41:11', '2023-02-05 18:41:11'),
(3, 'connection_fee', '450', 0, '2023-02-05 18:41:11', '2023-02-05 18:41:11'),
(4, 'line_conditioner', '1000', 0, '2023-02-05 18:41:11', '2023-02-05 18:41:11'),
(5, 'tier2_insurance', '20', 0, '2023-02-05 18:41:11', '2023-02-05 18:41:11'),
(6, 'svc399_years_monthly', '0.0037', 0, '2023-02-05 22:11:03', '2023-02-11 16:46:54'),
(7, 'svc299_years_monthly', '0.00332', 0, '2023-02-05 22:44:58', '2023-02-27 01:47:53'),
(8, 'pace399', '79.44', 0, '2023-02-05 22:44:58', '2023-02-05 22:44:58'),
(9, 'pace399_after_tax_credit', '0.73', 0, '2023-02-05 22:44:59', '2023-02-27 02:12:30'),
(10, 'pace599', '101.28', 0, '2023-02-05 22:44:59', '2023-02-05 22:44:59'),
(11, 'pace599_after_tax_credit', '0.73', 0, '2023-02-05 22:44:59', '2023-02-27 02:12:31'),
(12, 'mosiac399', '0.0038216', 0, '2023-02-05 22:44:59', '2023-02-11 17:26:46'),
(13, 'pace399_1', '0.114', 0, '2023-02-11 16:37:31', '2023-02-11 16:37:31'),
(14, 'pace399_2', '0.004978', 0, '2023-02-11 16:37:31', '2023-02-11 16:37:31'),
(15, 'pace599_1', '0.1341', 0, '2023-02-11 16:37:31', '2023-02-11 16:37:31'),
(16, 'pace599_2', '0.006234', 0, '2023-02-11 16:37:31', '2023-02-11 16:37:31'),
(17, 'tonage_markup', '22', 0, '2023-02-11 17:13:09', '2023-02-26 03:08:39'),
(18, 'aeroseal', '10', 0, '2023-02-18 05:25:57', '2023-02-18 05:25:57'),
(19, 'test', '02.jpg', 0, '2023-02-19 04:31:29', '2023-02-19 04:31:29'),
(21, 'logo', '6565ee7e3a62d.png', 1, '2023-02-19 04:40:12', '2023-11-28 07:43:26'),
(22, 'appname', 'JS Group', 0, '2023-02-19 04:43:41', '2023-11-28 08:17:58'),
(23, 'actual_system_multiplied_by', '0.3', 0, '2023-02-19 21:34:47', '2023-02-19 21:34:47'),
(24, 'pace399_1_dealer_fee', '0.004978', 0, '2023-02-27 02:01:38', '2023-02-27 02:01:38'),
(25, 'pace599_1_dealer_fee', '0.006234', 0, '2023-02-27 02:01:38', '2023-02-27 02:01:38'),
(26, 'sunlight_499_25Y', '0.00424', 0, '2023-03-13 23:19:21', '2023-03-13 23:19:21'),
(27, 'adminemail', 'rashed.eee.brur@gmail.com', 0, '2023-05-19 12:35:09', '2023-05-19 12:35:09');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci,
  `two_factor_confirmed_at` timestamp NULL DEFAULT NULL,
  `country_code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role` enum('sales','finance','admin') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'sales',
  `country` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT '0' COMMENT '0=pending, 1=active, 2=danger',
  `gender` enum('male','female','none') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'male',
  `browser_info` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bio` longtext COLLATE utf8mb4_unicode_ci,
  `social` longtext COLLATE utf8mb4_unicode_ci,
  `security_enabled` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `otp` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone_verified_at` timestamp NULL DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `last_login` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` varchar(2048) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `user_name`, `email`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `two_factor_confirmed_at`, `country_code`, `phone`, `role`, `country`, `address`, `status`, `gender`, `browser_info`, `bio`, `social`, `security_enabled`, `otp`, `phone_verified_at`, `email_verified_at`, `last_login`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`) VALUES
(1, 'Super Admin', 'developer', 'admin@gmail.com', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NULL, NULL, NULL, NULL, 'admin', NULL, NULL, 0, 'male', NULL, NULL, NULL, NULL, NULL, NULL, '2023-02-05 17:08:08', NULL, 'XaXOy256cYllTb2OrrRPmDKV4WqAIhSo4YfyLnI7yvaHXh56ydwDZUdeIYhw', NULL, NULL, '2023-02-05 17:08:08', '2023-02-05 17:08:08'),
(2, 'Sales', 'sales', 'sales@gmail.com', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NULL, NULL, NULL, NULL, 'sales', NULL, NULL, 0, 'male', NULL, NULL, NULL, NULL, NULL, NULL, '2023-03-21 07:43:12', NULL, 'NbEYxoqIHc', NULL, NULL, '2023-03-21 07:43:12', '2023-03-21 07:43:12');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_user_name_unique` (`user_name`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_phone_unique` (`phone`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=150;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `notifications`
--
ALTER TABLE `notifications`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
