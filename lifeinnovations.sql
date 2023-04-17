-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 17, 2023 at 07:53 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.0.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lifeinnovations`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `slug`, `password`, `created_at`, `updated_at`) VALUES
(1, 'Admin Lifeinnovations', 'admin@mail.com', 'admin-lifeinnovations', '$2y$10$YP3jCctgPEj8aVRJzbFdE.aojCFeo/C/eJg6.5ZSmn0M8nUW3i6Zu', '2023-01-11 05:47:29', '2023-01-24 02:06:00');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category_name`, `created_at`, `updated_at`) VALUES
(1, 'Technology', NULL, NULL),
(8, 'Politics', '2023-01-27 01:32:32', '2023-01-27 23:24:30');

-- --------------------------------------------------------

--
-- Table structure for table `cms`
--

CREATE TABLE `cms` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `short_desc` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `page` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cms`
--

INSERT INTO `cms` (`id`, `slug`, `title`, `short_desc`, `description`, `image`, `created_at`, `updated_at`, `page`) VALUES
(2, 'about-us1', 'About us', NULL, NULL, '16765520031006.jpg', NULL, NULL, 'about-us'),
(3, 'hhh', 'GET BEST IT SOLUTION 2023', 'Inspiring Tech Needs For Business', '<span style=\"color: rgb(94, 100, 106); font-family: Poppins, sans-serif; display: inline !important;\">Dynamically monetize web-enabled processes through client-based action items. Authoritatively grow goal is oriented markets through ompletely generate technically sound content without robust users.</span>', '16768715559904.jpg', NULL, NULL, 'about-us'),
(4, 'call-to-ask-any-queary', 'Call To Ask Any Queary', '+91 1234567890', NULL, NULL, NULL, NULL, 'about-us'),
(5, 'founder-ceo', 'Founder & CEO', 'Adam Smith', NULL, NULL, NULL, NULL, 'about-us'),
(6, 'great-team-members', 'GREAT TEAM MEMBERS', 'We Have Expert Team', NULL, NULL, NULL, NULL, 'about-us'),
(7, 'we-are-here-to-answer-your-questions-247', 'WE ARE HERE TO ANSWER YOUR QUESTIONS 24/7', 'NEED A CONSULTATION?', NULL, NULL, NULL, NULL, 'about-us'),
(8, 'weekly-updates', 'WEEKLY UPDATES', 'Weekly Latest Updates', NULL, NULL, NULL, NULL, 'about-us'),
(9, 'services-we-offer', 'Services We Offer', NULL, NULL, '16768728325939.jpg', NULL, NULL, 'service'),
(10, 'get-best-it-solution-2023', 'GET BEST IT SOLUTION 2023', 'Inspiring Tech Needs For Business', NULL, NULL, NULL, NULL, 'service'),
(11, 'mobile-application', 'Mobile Application', 'Internal accounting & sales data, in addition to external market and economic indicators', '<h2 style=\"font-weight: inherit; font-size: 12px; border: 0px; outline: 0px; font-family: Poppins, sans-serif; vertical-align: baseline; color: rgb(41, 41, 41);\">lorem ipsum dolor</h2><p style=\"padding-bottom: 10px; border: 0px; outline: 0px; font-size: 14px; font-family: Poppins, sans-serif; vertical-align: baseline; line-height: 24px; color: rgb(94, 100, 106);\">dfasjl lk;jds jl;sdaf hjdsfjdsa ghfu j asdfuju ,klpds pe posd ur dhqeryt eyop ads oep pfghdm,ntic jrpvcnj dfh eklfnsk r dieu pw ehdg swuewq whr ekkshq pfb v,m ertuk b eu e kwre i t q m ei er wr efg efbdfeoi cbxgkr ,rikugh dsk bvckjgry kfbd,vbkugsbn,sdvksghksvb us y bvkur iur jcxgiur kuryt rktry ktrut dsbvskt hrsut strksbfskfgs</p>', '16768731516026.jpg', NULL, NULL, 'service'),
(12, 'digital-marketing', 'Digital Marketing', 'Internal accounting & sales data, in addition to external market and economic indicators', '<h2 style=\"font-weight: inherit; font-size: 12px; border: 0px; outline: 0px; font-family: Poppins, sans-serif; vertical-align: baseline; color: rgb(41, 41, 41);\">lorem ipsum dolor</h2><p style=\"padding-bottom: 10px; border: 0px; outline: 0px; font-size: 14px; font-family: Poppins, sans-serif; vertical-align: baseline; line-height: 24px; color: rgb(94, 100, 106);\">dfasjl lk;jds jl;sdaf hjdsfjdsa ghfu j asdfuju ,klpds pe posd ur dhqeryt eyop ads oep pfghdm,ntic jrpvcnj dfh eklfnsk r dieu pw ehdg swuewq whr ekkshq pfb v,m ertuk b eu e kwre i t q m ei er wr efg efbdfeoi cbxgkr ,rikugh dsk bvckjgry kfbd,vbkugsbn,sdvksghksvb us y bvkur iur jcxgiur kuryt rktry ktrut dsbvskt hrsut strksbfskfgs</p>', '16768732309555.jpg', NULL, NULL, 'service'),
(13, 'google-analytics', 'Google Analytics', 'nternal accounting & sales data, in addition to external market and economic indicators', '<h2 style=\"font-weight: inherit; font-size: 12px; border: 0px; outline: 0px; font-family: Poppins, sans-serif; vertical-align: baseline; color: rgb(41, 41, 41);\">lorem ipsum dolor</h2><p style=\"padding-bottom: 10px; border: 0px; outline: 0px; font-size: 14px; font-family: Poppins, sans-serif; vertical-align: baseline; line-height: 24px; color: rgb(94, 100, 106);\">dfasjl lk;jds jl;sdaf hjdsfjdsa ghfu j asdfuju ,klpds pe posd ur dhqeryt eyop ads oep pfghdm,ntic jrpvcnj dfh eklfnsk r dieu pw ehdg swuewq whr ekkshq pfb v,m ertuk b eu e kwre i t q m ei er wr efg efbdfeoi cbxgkr ,rikugh dsk bvckjgry kfbd,vbkugsbn,sdvksghksvb us y bvkur iur jcxgiur kuryt rktry ktrut dsbvskt hrsut strksbfskfgs</p>', '16768732577331.jpg', NULL, NULL, 'service'),
(14, 'a-brand-new-way-to-excite-your-audience', 'A BRAND NEW WAY TO EXCITE YOUR AUDIENCE', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus.', NULL, NULL, NULL, NULL, 'service'),
(15, '617950-mobile-application', 'MOBILE APPLICATION', NULL, '<p style=\"padding-bottom: 10px; border: 0px; outline: 0px; font-size: 15px; font-family: Poppins, sans-serif; vertical-align: baseline; line-height: 24px; color: rgb(94, 100, 106);\">Interactively engage distributed alignments via focused alignments. Dynamically fabricate excellent innovation for go forward technology. Intrinsicly impact empowered scenarios after cost effective outsourcing. Synergistically productivate pandemic e-business rather than state of the art e-tailers.</p><ul style=\"padding-left: 20px; border: 0px; outline: 0px; font-size: 12px; font-family: Poppins, sans-serif; vertical-align: baseline; list-style-position: initial; list-style-image: initial; color: rgb(41, 41, 41);\"><li style=\"padding-top: 4px; padding-bottom: 4px; border: 0px; outline: 0px; font-weight: inherit; font-style: inherit; font-size: 15px; font-family: inherit; vertical-align: baseline; list-style: disc;\">Web and Mobile User Interface</li><li style=\"padding-top: 4px; padding-bottom: 4px; border: 0px; outline: 0px; font-weight: inherit; font-style: inherit; font-size: 15px; font-family: inherit; vertical-align: baseline; list-style: disc;\">Mobile Application Design</li><li style=\"padding-top: 4px; padding-bottom: 4px; border: 0px; outline: 0px; font-weight: inherit; font-style: inherit; font-size: 15px; font-family: inherit; vertical-align: baseline; list-style: disc;\">Custom Scripting and Plugins</li><li style=\"padding-top: 4px; padding-bottom: 4px; border: 0px; outline: 0px; font-weight: inherit; font-style: inherit; font-size: 15px; font-family: inherit; vertical-align: baseline; list-style: disc;\">HTML5, Cms Development</li><li style=\"padding-top: 4px; padding-bottom: 4px; border: 0px; outline: 0px; font-weight: inherit; font-style: inherit; font-size: 15px; font-family: inherit; vertical-align: baseline; list-style: disc;\">Retina Ready and Resposive Design</li><li style=\"padding-top: 4px; padding-bottom: 4px; border: 0px; outline: 0px; font-weight: inherit; font-style: inherit; font-size: 15px; font-family: inherit; vertical-align: baseline; list-style: disc;\">Print - Ready Marketing Materials</li></ul>', '16768734195427.png', NULL, NULL, 'service'),
(16, '366744-digital-marketing', 'DIGITAL MARKETING', NULL, '<p style=\"padding-bottom: 10px; border: 0px; outline: 0px; font-size: 15px; font-family: Poppins, sans-serif; vertical-align: baseline; line-height: 24px; color: rgb(94, 100, 106);\">Interactively engage distributed alignments via focused alignments. Dynamically fabricate excellent innovation for go forward technology. Intrinsicly impact empowered scenarios after cost effective outsourcing. Synergistically productivate pandemic e-business rather than state of the art e-tailers.</p><ul style=\"padding-left: 20px; border: 0px; outline: 0px; font-size: 12px; font-family: Poppins, sans-serif; vertical-align: baseline; list-style-position: initial; list-style-image: initial; color: rgb(41, 41, 41);\"><li style=\"padding-top: 4px; padding-bottom: 4px; border: 0px; outline: 0px; font-weight: inherit; font-style: inherit; font-size: 15px; font-family: inherit; vertical-align: baseline; list-style: disc;\">Web and Mobile User Interface</li><li style=\"padding-top: 4px; padding-bottom: 4px; border: 0px; outline: 0px; font-weight: inherit; font-style: inherit; font-size: 15px; font-family: inherit; vertical-align: baseline; list-style: disc;\">Mobile Application Design</li><li style=\"padding-top: 4px; padding-bottom: 4px; border: 0px; outline: 0px; font-weight: inherit; font-style: inherit; font-size: 15px; font-family: inherit; vertical-align: baseline; list-style: disc;\">Custom Scripting and Plugins</li><li style=\"padding-top: 4px; padding-bottom: 4px; border: 0px; outline: 0px; font-weight: inherit; font-style: inherit; font-size: 15px; font-family: inherit; vertical-align: baseline; list-style: disc;\">HTML5, Cms Development</li><li style=\"padding-top: 4px; padding-bottom: 4px; border: 0px; outline: 0px; font-weight: inherit; font-style: inherit; font-size: 15px; font-family: inherit; vertical-align: baseline; list-style: disc;\">Retina Ready and Resposive Design</li><li style=\"padding-top: 4px; padding-bottom: 4px; border: 0px; outline: 0px; font-weight: inherit; font-style: inherit; font-size: 15px; font-family: inherit; vertical-align: baseline; list-style: disc;\">Print - Ready Marketing Materials</li></ul>', '16768734559266.png', NULL, NULL, 'service'),
(17, '225504-google-analytics', 'GOOGLE ANALYTICS', NULL, '<p style=\"padding-bottom: 10px; border: 0px; outline: 0px; font-size: 15px; font-family: Poppins, sans-serif; vertical-align: baseline; line-height: 24px; color: rgb(94, 100, 106);\">Interactively engage distributed alignments via focused alignments. Dynamically fabricate excellent innovation for go forward technology. Intrinsicly impact empowered scenarios after cost effective outsourcing. Synergistically productivate pandemic e-business rather than state of the art e-tailers.</p><ul style=\"padding-left: 20px; border: 0px; outline: 0px; font-size: 12px; font-family: Poppins, sans-serif; vertical-align: baseline; list-style-position: initial; list-style-image: initial; color: rgb(41, 41, 41);\"><li style=\"padding-top: 4px; padding-bottom: 4px; border: 0px; outline: 0px; font-weight: inherit; font-style: inherit; font-size: 15px; font-family: inherit; vertical-align: baseline; list-style: disc;\">Web and Mobile User Interface</li><li style=\"padding-top: 4px; padding-bottom: 4px; border: 0px; outline: 0px; font-weight: inherit; font-style: inherit; font-size: 15px; font-family: inherit; vertical-align: baseline; list-style: disc;\">Mobile Application Design</li><li style=\"padding-top: 4px; padding-bottom: 4px; border: 0px; outline: 0px; font-weight: inherit; font-style: inherit; font-size: 15px; font-family: inherit; vertical-align: baseline; list-style: disc;\">Custom Scripting and Plugins</li><li style=\"padding-top: 4px; padding-bottom: 4px; border: 0px; outline: 0px; font-weight: inherit; font-style: inherit; font-size: 15px; font-family: inherit; vertical-align: baseline; list-style: disc;\">HTML5, Cms Development</li><li style=\"padding-top: 4px; padding-bottom: 4px; border: 0px; outline: 0px; font-weight: inherit; font-style: inherit; font-size: 15px; font-family: inherit; vertical-align: baseline; list-style: disc;\">Retina Ready and Resposive Design</li><li style=\"padding-top: 4px; padding-bottom: 4px; border: 0px; outline: 0px; font-weight: inherit; font-style: inherit; font-size: 15px; font-family: inherit; vertical-align: baseline; list-style: disc;\">Print - Ready Marketing Materials</li></ul>', '16768734879133.png', NULL, NULL, 'service'),
(18, 'ecommerce-solutions', 'ECOMMERCE SOLUTIONS', NULL, '<p style=\"padding-bottom: 10px; border: 0px; outline: 0px; font-size: 15px; font-family: Poppins, sans-serif; vertical-align: baseline; line-height: 24px; color: rgb(94, 100, 106);\">Interactively engage distributed alignments via focused alignments. Dynamically fabricate excellent innovation for go forward technology. Intrinsicly impact empowered scenarios after cost effective outsourcing. Synergistically productivate pandemic e-business rather than state of the art e-tailers.</p><ul style=\"padding-left: 20px; border: 0px; outline: 0px; font-size: 12px; font-family: Poppins, sans-serif; vertical-align: baseline; list-style-position: initial; list-style-image: initial; color: rgb(41, 41, 41);\"><li style=\"padding-top: 4px; padding-bottom: 4px; border: 0px; outline: 0px; font-weight: inherit; font-style: inherit; font-size: 15px; font-family: inherit; vertical-align: baseline; list-style: disc;\">Web and Mobile User Interface</li><li style=\"padding-top: 4px; padding-bottom: 4px; border: 0px; outline: 0px; font-weight: inherit; font-style: inherit; font-size: 15px; font-family: inherit; vertical-align: baseline; list-style: disc;\">Mobile Application Design</li><li style=\"padding-top: 4px; padding-bottom: 4px; border: 0px; outline: 0px; font-weight: inherit; font-style: inherit; font-size: 15px; font-family: inherit; vertical-align: baseline; list-style: disc;\">Custom Scripting and Plugins</li><li style=\"padding-top: 4px; padding-bottom: 4px; border: 0px; outline: 0px; font-weight: inherit; font-style: inherit; font-size: 15px; font-family: inherit; vertical-align: baseline; list-style: disc;\">HTML5, Cms Development</li><li style=\"padding-top: 4px; padding-bottom: 4px; border: 0px; outline: 0px; font-weight: inherit; font-style: inherit; font-size: 15px; font-family: inherit; vertical-align: baseline; list-style: disc;\">Retina Ready and Resposive Design</li><li style=\"padding-top: 4px; padding-bottom: 4px; border: 0px; outline: 0px; font-weight: inherit; font-style: inherit; font-size: 15px; font-family: inherit; vertical-align: baseline; list-style: disc;\">Print - Ready Marketing Materials</li></ul>', '16768735255935.png', NULL, NULL, 'service'),
(19, 'the-challenge-of-project', 'The challenge of project', NULL, '<p style=\"padding-bottom: 10px; border: 0px; outline: 0px; font-size: 15px; font-family: Poppins, sans-serif; vertical-align: baseline; line-height: 24px; color: rgb(94, 100, 106);\">Interactively engage distributed alignments via focused alignments. Dynamically fabricate excellent innovation for go forward technology. Intrinsicly impact empowered scenarios after cost effective outsourcing. Synergistically productivate pandemic e-business rather than state of the art e-tailers.</p><p style=\"padding-bottom: 10px; border: 0px; outline: 0px; font-size: 15px; font-family: Poppins, sans-serif; vertical-align: baseline; line-height: 24px; color: rgb(94, 100, 106);\">Completely unleash frictionless data via end-to-end services. Continually unleash virtual e-tailers through magnetic core competencies. Interactively engage distributed alignments via focused alignments.</p>', '16768736249591.jpg', NULL, NULL, 'service'),
(20, 'ethical-testing-rather-than-ethical-interfaces', 'Ethical testing rather than ethical interfaces?', NULL, '<p>This is the first item\'s accordion body. It is shown by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It\'s also worth noting that just about any HTML can go within the .accordion-body, though the transition does limit overflow.</p>', '16768736817707.jpg', NULL, NULL, 'service'),
(21, 'latin-derived-from-ciceros-1st-century-bc-text-de', 'Latin derived from Cicero\'s 1st-century BC text De', NULL, '<p><span style=\"font-weight: inherit; border: 0px; outline: 0px; font-size: 15px; font-family: Poppins, sans-serif; vertical-align: baseline; color: rgb(41, 41, 41);\">This is the second item\'s accordion body.</span><span style=\"color: rgb(41, 41, 41); font-family: Poppins, sans-serif; font-size: 15px; display: inline !important;\">&nbsp;It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It\'s also worth noting that just about any HTML can go within the&nbsp;</span><code style=\"font-family: inherit; font-size: 15px; border: 0px; outline: 0px; vertical-align: baseline;\">.accordion-body</code><span style=\"color: rgb(41, 41, 41); font-family: Poppins, sans-serif; font-size: 15px; display: inline !important;\">, though the transition does limit overflow.</span></p>', NULL, NULL, NULL, 'service'),
(22, 'creation-timelines-for-the-standard-lorem-passage', 'Creation timelines for the standard lorem passage', NULL, '<p><span style=\"font-weight: inherit; border: 0px; outline: 0px; font-size: 15px; font-family: Poppins, sans-serif; vertical-align: baseline; color: rgb(41, 41, 41);\">This is the third item\'s accordion body.</span><span style=\"color: rgb(41, 41, 41); font-family: Poppins, sans-serif; font-size: 15px; display: inline !important;\">&nbsp;It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It\'s also worth noting that just about any HTML can go within the&nbsp;</span><code style=\"font-family: inherit; font-size: 15px; border: 0px; outline: 0px; vertical-align: baseline;\">.accordion-body</code><span style=\"color: rgb(41, 41, 41); font-family: Poppins, sans-serif; font-size: 15px; display: inline !important;\">, though the transition does limit overflow</span></p>', NULL, NULL, NULL, 'service');

-- --------------------------------------------------------

--
-- Table structure for table `enquery_forms`
--

CREATE TABLE `enquery_forms` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `enquery_forms`
--

INSERT INTO `enquery_forms` (`id`, `name`, `email`, `phone`, `address`, `message`, `created_at`, `updated_at`) VALUES
(5, 'wS6ZJBtUNL', 'izkb9@xght.com', '432963', 'Walking road', 'This is my first query', '2023-02-28 11:15:15', NULL);

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
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_01_11_103303_create_admins_table', 1),
(6, '2014_10_12_000000_create_users_table', 2),
(7, '2023_01_18_054947_create_site_information_table', 3),
(8, '2023_01_19_045444_create_categories_table', 4),
(9, '2023_01_19_060832_create_timeline_posts_table', 5),
(10, '2023_01_19_062747_create_post_galleries_table', 5),
(11, '2023_01_20_053637_create_postcomments_table', 6),
(12, '2023_01_27_063828_create_sub_categories_table', 7),
(13, '2023_01_28_055844_add_description_to_timeline_posts_table', 8),
(14, '2023_01_28_061011_add_category_id_to_timeline_posts_table', 9),
(15, '2023_01_30_055205_add_subcategory_id_to_timeline_posts_table', 10),
(16, '2023_02_16_101333_create_cms_table', 11),
(17, '2023_02_20_062229_create_enquery_forms_table', 12);

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
-- Table structure for table `postcomments`
--

CREATE TABLE `postcomments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `post_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `comment_text` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `postcomments`
--

INSERT INTO `postcomments` (`id`, `post_id`, `user_id`, `comment_text`, `created_at`, `updated_at`) VALUES
(21, 58, 23, 'Perferendis laboriosam dignissimos aut. Fugit consequuntur aut voluptas est. Expedita qui illum voluptatem illo dolor quam maiores laudantium. Repudiandae ad repudiandae eum harum.', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(22, 40, 15, 'Est modi aut sint fugit odit sed esse. Delectus modi vel et voluptas officiis. Veritatis consequatur rerum eveniet numquam dolores.', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(23, 40, 27, 'Labore facere architecto voluptatem. Rerum aut totam et magni ipsum inventore. Ipsam porro eveniet nesciunt veritatis ipsa autem.', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(24, 39, 27, 'Rem aliquid enim et quos culpa. Necessitatibus saepe temporibus quia minus distinctio excepturi. Fugiat consectetur perspiciatis quidem sit. Molestiae dicta est debitis recusandae deleniti.', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(25, 57, 23, 'Magni ducimus molestias incidunt laudantium illo. Asperiores accusamus aut sed sapiente est. Esse minima itaque animi aut dolor alias blanditiis. Quos voluptatem magnam commodi et ad.', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(26, 53, 27, 'At rerum et non blanditiis. Ut atque cum quidem dolorem iusto. Aliquid minima voluptas praesentium consequuntur qui asperiores. Nesciunt officia perspiciatis sapiente.', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(27, 39, 20, 'Ullam est quas adipisci consequatur porro. Voluptatem excepturi quasi pariatur libero dolorem. Fugiat vero natus id et ipsa laudantium.', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(28, 35, 13, 'Et in eligendi voluptatem ex asperiores maiores quod necessitatibus. Aliquam voluptatibus consequatur asperiores. Cumque eum qui minus quis et qui eveniet.', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(29, 48, 25, 'Velit sed sed voluptatem ut perferendis odio ab. Harum ab eum modi sapiente repellat et. Iure sint dolorum qui molestias omnis.', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(30, 36, 21, 'Aut quidem consequatur officiis. Omnis necessitatibus esse enim excepturi ut. Illum sunt fuga ut delectus aut nam. Vel enim numquam perferendis cupiditate et.', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(31, 49, 22, 'Error voluptatem doloribus modi. Asperiores illum quis illo accusamus magni in assumenda. Quasi facilis odio et consectetur.', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(32, 55, 27, 'Voluptas nesciunt praesentium officia in voluptas odio. Dignissimos labore et officia eius vel quos et. Officia doloribus nulla reiciendis nulla sequi.', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(33, 57, 22, 'Voluptas quia consequatur magnam ut placeat velit. Nesciunt facilis voluptates laudantium ratione minima iusto. Vel inventore beatae ullam quod enim culpa. Est enim ea praesentium corrupti.', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(34, 35, 15, 'Nemo velit id quisquam. Voluptatem quo dolor repellendus ullam enim ut. Totam omnis qui ut. Voluptas iste temporibus dolorem ex.', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(35, 55, 19, 'Qui eveniet quos cum ut eligendi. Est nemo debitis quam voluptatem.', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(36, 51, 18, 'Quis sed hic et minus saepe saepe. Tempore sunt sed et ad. At quia culpa non cumque. Expedita quia dolorem occaecati et adipisci dolor mollitia.', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(37, 39, 18, 'Suscipit vel nobis quisquam sit molestias adipisci. Facere est autem nobis. Fugiat vitae est molestiae libero beatae numquam sed.', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(38, 33, 27, 'Occaecati sunt quam reiciendis. Et ipsa rerum quis unde ratione voluptates voluptatum officia. Quo saepe iure hic itaque nostrum cupiditate qui. Quidem sequi consequatur molestiae non.', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(39, 32, 21, 'Totam a alias autem exercitationem est autem et quae. Sint laborum eum libero doloremque. Possimus facere ut qui cumque.', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(40, 33, 25, 'Provident qui omnis aut quidem veritatis voluptatem dolor. Nihil culpa est eum qui. Omnis maiores quia numquam vitae aut repellendus excepturi. Illum molestiae itaque rerum est.', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(41, 40, 19, 'Ullam nihil quia quo veritatis. Commodi quos iste est. Sequi ipsam quaerat quo at. Dolor in ea accusamus in quis dolor asperiores.', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(42, 53, 27, 'Possimus qui voluptatum maiores sunt. Velit optio ut hic totam velit modi. Consequatur veniam ut doloribus id.', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(43, 32, 27, 'Veniam explicabo est voluptatem. Vel qui est quia aut. Sed ipsum est tenetur et voluptatem. Maxime eligendi autem praesentium. Qui qui similique tempora est modi est repellat.', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(44, 48, 21, 'Dolor qui et ipsam magnam. Cumque numquam non architecto enim harum expedita. Cupiditate adipisci delectus facere aut.', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(45, 53, 25, 'Velit omnis consequatur incidunt ipsam quia voluptates cum. Rerum sint non repudiandae et et. Nihil qui fugiat omnis non culpa. Atque tempore consequatur voluptatem sunt.', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(46, 54, 14, 'Officiis eveniet debitis id non. Ea autem unde et laboriosam est iste qui. Officiis aperiam vero error vel et perspiciatis. Aut est expedita vel commodi quia.', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(47, 52, 18, 'Facilis dolores deserunt sit. Dolorum unde occaecati qui voluptatem quaerat. Nesciunt fugiat a ipsa quia. Qui excepturi provident doloremque occaecati.', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(48, 33, 15, 'Perferendis et accusamus facilis illo asperiores aut aut. Aut sit aut quasi magnam officiis officia. Voluptatem animi similique deserunt non esse sit.', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(49, 57, 18, 'Optio facilis ut beatae voluptate. Et quos ratione deleniti assumenda est dolores. Nihil accusantium est pariatur et voluptatem et consectetur.', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(50, 57, 25, 'Ducimus hic aut et omnis autem dolorem. Nulla pariatur exercitationem quia consequuntur voluptatibus est id. Dolorem voluptates itaque quo nulla necessitatibus ut.', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(51, 49, 27, 'Ea molestias autem sint voluptatem. Dignissimos illum et minima hic. Qui dolore optio perferendis eius veritatis voluptas.', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(52, 34, 21, 'Libero dolore et dolor aliquam. Laboriosam officiis voluptas aut deleniti. Voluptas quo molestias eligendi ducimus dicta.', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(53, 52, 22, 'Omnis pariatur ut sint vero architecto ut et occaecati. Architecto et nesciunt velit alias. Hic doloremque sunt quasi ad mollitia consequatur.', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(54, 49, 21, 'Aperiam consectetur enim quis doloribus beatae vel pariatur. Rerum architecto aliquid doloremque reiciendis magni.', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(55, 36, 20, 'Omnis accusamus et nihil quos. Officia quia perferendis rem repudiandae nobis corporis. Neque et autem laboriosam perspiciatis. Velit vero ut sit aut eius sunt dolores.', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(56, 51, 20, 'Voluptatum ad id eius aperiam occaecati et. Sit quia facere maiores molestiae. Porro et minima tempora facere officiis quos in. Ipsam voluptatem nam quasi.', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(57, 54, 13, 'Aut ut minima quasi repudiandae. Sit esse esse sit facilis perferendis. Laboriosam nostrum odit suscipit aut sit eos aliquam. Exercitationem nobis maxime accusantium inventore porro animi veniam.', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(58, 40, 20, 'In est debitis ut dolorem enim. Magnam maxime odio suscipit aut id reprehenderit odio. Rerum ea eligendi quae quia dolor ducimus tempore.', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(59, 36, 19, 'Porro nemo ipsam non reprehenderit libero id. Odio sint ipsum laboriosam qui ullam velit id voluptas. Est cupiditate pariatur numquam eveniet eligendi similique mollitia rerum. Magni quis quod rerum.', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(60, 32, 14, 'Cupiditate adipisci assumenda earum voluptas iure. Suscipit voluptate aliquam natus enim voluptate. Et saepe quidem est quae quasi. Et minima omnis deserunt voluptate ipsa ut.', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(65, 60, 13, 'https://www.art360d.com/ https://www.art360d.com/', '2023-01-24 08:55:33', '2023-01-24 08:55:33'),
(66, 60, 14, 'https://www.art360d.com/dfgrg hdrhregy', '2023-01-24 08:55:33', '2023-01-24 08:55:33'),
(67, 60, 13, 'https://www.art360d.com/ https://www.art360d.com/', '2023-01-24 08:55:39', '2023-01-24 08:55:39'),
(68, 60, 14, 'https://www.art360d.com/dfgrg hdrhregy', '2023-01-24 08:55:39', '2023-01-24 08:55:39');

-- --------------------------------------------------------

--
-- Table structure for table `post_galleries`
--

CREATE TABLE `post_galleries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `post_id` bigint(20) UNSIGNED NOT NULL,
  `content` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `content_type` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `post_galleries`
--

INSERT INTO `post_galleries` (`id`, `post_id`, `content`, `created_at`, `updated_at`, `content_type`, `user_id`) VALUES
(20, 58, '16745383142016.mp4', NULL, NULL, 'video', 13),
(21, 58, '16745383147856.mp4', NULL, NULL, 'video', 13),
(24, 58, '16745383505829.jpg', NULL, NULL, 'image', 13),
(25, 58, '16745383504339.jpg', NULL, NULL, 'image', 13),
(26, 60, '1674539403453.jpg', NULL, NULL, 'image', 24),
(29, 60, '16745394034878.jpg', NULL, NULL, 'image', 24),
(30, 60, '16745394036693.jpg', NULL, NULL, 'image', 24),
(31, 60, '1674539403380.jpg', NULL, NULL, 'image', 24),
(33, 60, '16745394036626.jpg', NULL, NULL, 'image', 24),
(34, 61, '16745399633213.jpg', NULL, NULL, 'image', 24),
(35, 61, '16745399634437.jpg', NULL, NULL, 'image', 24),
(48, 65, '16751406781465.jpeg', NULL, NULL, 'image', 28),
(49, 65, '16751406797193.jpeg', NULL, NULL, 'image', 28),
(50, 64, '1675150269612.jpeg', NULL, NULL, 'image', 13);

-- --------------------------------------------------------

--
-- Table structure for table `site_information`
--

CREATE TABLE `site_information` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `site_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `logo_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `favicon_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instagram` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `youtube` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pinterest` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `vk` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `site_information`
--

INSERT INTO `site_information` (`id`, `slug`, `site_name`, `logo_image`, `favicon_image`, `address`, `email`, `phone`, `twitter`, `facebook`, `instagram`, `youtube`, `pinterest`, `vk`, `created_at`, `updated_at`) VALUES
(1, 'site_information', 'Life Innovations Business Solutions', '16740255316638.png', '16740255413192.ico', 'Durgapur Station Rd', 'Innovations@mail.com', '1234567890', 'https://twitter.com/', 'https://www.facebook.com/', 'https://www.instagram.com/', 'https://www.youtube.com/', 'https://www.youtube.com/', 'https://www.youtube.com/', NULL, '2023-01-24 03:22:18');

-- --------------------------------------------------------

--
-- Table structure for table `sub_categories`
--

CREATE TABLE `sub_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `catregory_id` bigint(20) UNSIGNED NOT NULL,
  `subcategory_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sub_categories`
--

INSERT INTO `sub_categories` (`id`, `catregory_id`, `subcategory_name`, `created_at`, `updated_at`) VALUES
(11, 8, 'Bollywood', NULL, NULL),
(15, 8, 'Desh', NULL, NULL),
(16, 8, 'CountryWise', NULL, NULL),
(17, 8, 'international', NULL, NULL),
(18, 8, 'bangla', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `timeline_posts`
--

CREATE TABLE `timeline_posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `subcategory_id` bigint(20) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `timeline_posts`
--

INSERT INTO `timeline_posts` (`id`, `slug`, `title`, `user_id`, `created_at`, `updated_at`, `description`, `category_id`, `subcategory_id`) VALUES
(32, 'ut-commodi-excepturi-eveniet', 'Prof.', 27, '2023-01-20 00:59:11', '2023-01-20 00:59:11', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\"s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 8, 0),
(33, 'porro-delectus', 'Mr.', 27, '2023-01-20 00:59:11', '2023-01-20 00:59:11', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\"s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 1, 0),
(34, 'quisquam-animi-voluptates-recusandae', 'Prof.', 14, '2023-01-20 00:59:11', '2023-01-20 00:59:11', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\"s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 8, 0),
(35, 'vitae-expedita-officia-delectus', 'Prof.', 18, '2023-01-20 00:59:11', '2023-01-20 00:59:11', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\"s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 8, 0),
(36, 'architecto-aperiam-quia', 'Mrs.', 21, '2023-01-20 00:59:11', '2023-01-20 00:59:11', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\"s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 1, 0),
(37, 'est-natus-et-nisi', 'Dr.', 20, '2023-01-20 00:59:11', '2023-01-20 00:59:11', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\"s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 8, 0),
(38, 'et-minima-numquam-minus', 'Miss', 27, '2023-01-20 00:59:11', '2023-01-20 00:59:11', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\"s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 8, 0),
(39, 'aut-reiciendis-ducimus', 'Dr.', 15, '2023-01-20 00:59:12', '2023-01-20 00:59:12', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\"s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 8, 0),
(40, 'illum-delectus-iure-eligendi', 'Dr.', 19, '2023-01-20 00:59:12', '2023-01-20 00:59:12', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\"s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 1, 0),
(48, 'ooo', 'ooo', 15, '2023-01-20 03:52:41', '2023-01-20 03:52:41', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\"s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 8, 0),
(49, '1674206615490690-ooo', 'ooo', 15, '2023-01-20 03:53:35', '2023-01-20 03:53:35', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\"s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 8, 0),
(50, '1674206644863810-ooo', 'ooo', 15, '2023-01-20 03:54:04', '2023-01-20 03:54:04', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\"s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 1, 0),
(51, '1674206848379467-ooo', 'ooo', 15, '2023-01-20 03:57:28', '2023-01-20 03:57:28', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\"s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 8, 0),
(52, '1674206941484661-ooo', 'ooo', 15, '2023-01-20 03:59:01', '2023-01-20 03:59:01', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\"s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 8, 0),
(53, '1674207033607586-ooo', 'ooo', 15, '2023-01-20 04:00:33', '2023-01-20 04:00:33', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\"s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 8, 0),
(54, 'hello', 'Hello', 21, '2023-01-20 04:03:05', '2023-01-20 04:03:05', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\"s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 8, 0),
(55, 'rg', 'rg', 13, '2023-01-20 04:05:05', '2023-01-20 04:05:05', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\"s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 8, 0),
(56, '1674207507491013-rg', 'rg', 13, '2023-01-20 04:08:27', '2023-01-20 04:08:27', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\"s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 8, 0),
(57, 'content-getclientoriginalextension-png-content-getclientoriginalextension-png', '|| $content->getClientOriginalExtension() == \'png\' || $content->getClientOriginalExtension() == \'png\'', 27, '2023-01-20 04:10:47', '2023-01-20 04:10:47', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\"s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 8, 0),
(58, 'if-you-dont-see-millions-in-your-imaginations-you-will-never-see-those-in-your-bank-balance', 'the if you don\'t see millions in your imaginations, you will never see those in your Bank balance', 13, '2023-01-23 01:20:33', '2023-01-24 00:02:30', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\"s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 8, 0),
(59, 'i-will-rise-again', 'I will rise again', 13, '2023-01-23 03:44:59', '2023-01-23 03:44:59', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\"s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 8, 0),
(60, 'dont-do-anything-to-keep-anyones-useless-proposal', 'Don\'t do anything to keep anyone\'s useless proposal', 24, '2023-01-24 00:09:08', '2023-01-24 00:20:03', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\"s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 8, 0),
(61, '82m4nf2gto', '82m4Nf2GTO', 24, '2023-01-24 00:29:23', '2023-01-24 00:29:23', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\"s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 8, 0),
(63, 'hhh', 'hhh', 13, '2023-01-30 02:02:52', '2023-01-30 02:02:52', NULL, 8, 18),
(64, '1675063972553990-hhh', 'hhh', 13, '2023-01-30 02:02:52', '2023-01-31 02:01:09', NULL, 8, 18),
(65, 'test-post', 'Test post', 28, '2023-01-30 23:21:18', '2023-01-30 23:21:18', 'This is some sort of  fas', 8, 15);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(10) DEFAULT 1 COMMENT '1 = Active, 0 = Deactive',
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `status`, `image`, `remember_token`, `created_at`, `updated_at`) VALUES
(13, 'Consuelo Luettgen', 'kyla.bode@hotmail.com', NULL, '$2y$10$wEGzLzOus/COlygqrvAALOlm65z0ZexBJLQg2QVlQHjr8V/jPEdea', 1, NULL, NULL, '2023-01-16 01:16:00', '2023-01-16 03:41:48'),
(14, 'Ms. Tressie Howell', 'sim.flatley@gusikowski.org', NULL, '$2y$10$NOcwJq20a6f4PzmkbPs45e/wcVPAXRKWqZS9zZqp9ITWxHCCue6om', 0, NULL, NULL, '2023-01-16 01:16:00', '2023-01-16 03:42:25'),
(15, 'Mr. Soledad Stehr DDS', 'gswift@nolan.com', NULL, '$2y$10$TXNfUAzJJfBBDmBNqskxJOtmZpVKZYNVrU..ghyl7ZC/d9X/nHTzq', 1, NULL, NULL, '2023-01-16 01:16:00', '2023-01-16 01:16:00'),
(18, 'Franco Hoeger', 'missouri.okuneva@oconner.net', NULL, '$2y$10$bXyYdfsZxz2s45wOC6Los.D0c1xy.0f2Rs6919CvReJVU5/jFqWsu', 1, NULL, NULL, '2023-01-16 01:16:01', '2023-01-16 03:42:32'),
(19, 'Dr. Reece Schroeder', 'nrenner@ohara.com', NULL, '$2y$10$YUVixURK5Uxm1L9ojkMoXeWtQAhepFb2MfvHuphOsBGHm5vHELC/S', 0, NULL, NULL, '2023-01-16 01:16:01', '2023-01-16 01:16:01'),
(20, 'Heaven Wisoky', 'qrempel@beier.com', NULL, '$2y$10$au68htotDIjv1SldSdm4sevqUlTh98PnrF7j51BBH.i77nFRtfGea', 0, NULL, NULL, '2023-01-16 01:16:01', '2023-01-16 03:38:32'),
(21, 'Gladyce Lubowitz', 'wabbott@hotmail.com', NULL, '$2y$10$DTTBuKvWZwxJ4z6mqpNU..N0GTdapPkw63N4Zmfok8J/H8I2LGmX2', 1, NULL, NULL, '2023-01-16 01:16:01', '2023-01-16 03:37:38'),
(22, 'Miss Una Luettgen', 'hettinger.chauncey@gmail.com', NULL, '$2y$10$W/WugoKOv0chvT/56jA1F.KfV103zJtdNOqJdJuzdn9WYfAK2CdEy', 0, NULL, NULL, '2023-01-16 01:16:01', '2023-01-16 01:16:01'),
(23, 'Katrina Brekke', 'marcellus06@gmail.com', NULL, '$2y$10$3N/mckQ6Dikv4WCDEIBFN.TDa5riaFE7rEI6F1VnnzJnqkxyIg2Nq', 0, NULL, NULL, '2023-01-16 01:16:01', '2023-01-16 01:16:01'),
(24, 'Reta Fay', 'howe.jennie@carroll.biz', NULL, '$2y$10$BSOkE3oSMAFPSLD7fFvrPuN0VDSoIrV6kYAJ3gl6O/6r57Bgo9qai', 1, NULL, NULL, '2023-01-16 01:16:02', '2023-01-16 01:16:02'),
(25, 'Reggie Prohaska', 'jailyn43@hotmail.com', NULL, '$2y$10$JS3I73vo5zedeKBT11gM0eFc/mkEFdL1EfJ.ZBgq1VRZ0v.ZFHOly', 1, NULL, NULL, '2023-01-16 01:16:02', '2023-01-17 23:38:29'),
(26, 'Niko Hahn', 'clyde.koss@yahoo.com', NULL, '$2y$10$FwF7DfJ1ZRv706xc1/HXR.l3wr95Vx25A9QDocMFqHEieCwbnfrHK', 0, NULL, NULL, '2023-01-16 01:16:02', '2023-01-16 01:16:02'),
(27, 'Jocelyn Rowe', 'suzanne09@gmail.com', NULL, '$2y$10$x65Fi2b6VeoMQV6vtMm6kOU79hLchGCelHyiMJweo8Sof8zeG3hQy', 1, NULL, NULL, '2023-01-16 01:16:02', '2023-01-16 03:38:46'),
(28, 'Pradipta S Bhuin', 'pradipta@mail.com', NULL, '$2y$10$BFEe2p2UvCBx69qzX5R/K.6o3m6rOwTu7cSQgyB0HVXSFD/CtJ8F.', 1, NULL, NULL, '2023-01-25 01:13:51', '2023-01-25 01:13:51'),
(29, 'Rohit Nag', 'rohit@mail.com', NULL, '$2y$10$b224sTAhl/B26q2NhnAbnul09IYR3BL0OV8FFstYC.T/cP9opkwfS', 1, NULL, NULL, '2023-01-25 03:34:18', '2023-01-25 03:34:18');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_slug_unique` (`slug`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cms`
--
ALTER TABLE `cms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `enquery_forms`
--
ALTER TABLE `enquery_forms`
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
-- Indexes for table `postcomments`
--
ALTER TABLE `postcomments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post_galleries`
--
ALTER TABLE `post_galleries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `site_information`
--
ALTER TABLE `site_information`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `site_information_slug_unique` (`slug`),
  ADD UNIQUE KEY `site_information_email_unique` (`email`);

--
-- Indexes for table `sub_categories`
--
ALTER TABLE `sub_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `timeline_posts`
--
ALTER TABLE `timeline_posts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `timeline_posts_slug_unique` (`slug`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `cms`
--
ALTER TABLE `cms`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `enquery_forms`
--
ALTER TABLE `enquery_forms`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `postcomments`
--
ALTER TABLE `postcomments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- AUTO_INCREMENT for table `post_galleries`
--
ALTER TABLE `post_galleries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `site_information`
--
ALTER TABLE `site_information`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sub_categories`
--
ALTER TABLE `sub_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `timeline_posts`
--
ALTER TABLE `timeline_posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
