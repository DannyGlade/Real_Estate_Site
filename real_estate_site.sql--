-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Aug 06, 2022 at 08:33 AM
-- Server version: 5.7.31
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `real_estate_site`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
CREATE TABLE IF NOT EXISTS `categories` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `categories_name_unique` (`name`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug_name`, `image`, `created_at`, `updated_at`) VALUES
(10, 'Farmhouse', 'farmhouse', '202204-734720815.jpg', '2022-04-07 09:58:26', '2022-04-07 09:58:26'),
(2, 'Bunglows', 'bunglows', '202204-812209485.jpg', '2022-01-09 00:54:46', '2022-04-07 09:53:23'),
(3, 'Residential', 'residential', '202204-904877209.jpg', '2022-01-22 05:31:49', '2022-04-07 09:50:51'),
(9, 'Commercial', 'commercial', '202204-1691618559.jpg', '2022-04-07 09:55:45', '2022-04-07 09:55:45'),
(11, 'Shops', 'shops', '202204-532383571.jpg', '2022-04-07 10:00:20', '2022-04-07 10:00:20');

-- --------------------------------------------------------

--
-- Table structure for table `cities`
--

DROP TABLE IF EXISTS `cities`;
CREATE TABLE IF NOT EXISTS `cities` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `city` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug_city` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('0','1') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0' COMMENT '1 = active, 0 = disabled',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `cities_city_unique` (`city`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cities`
--

INSERT INTO `cities` (`id`, `city`, `slug_city`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Surat', 'surat', '1', '2022-01-06 10:21:30', '2022-01-06 10:23:52'),
(2, 'Ahmedabad', 'ahmedabad', '1', '2022-01-07 10:13:48', '2022-01-22 05:31:06'),
(3, 'Bharuch', 'bharuch', '0', '2022-01-07 10:14:03', '2022-02-06 00:05:11');

-- --------------------------------------------------------

--
-- Table structure for table `cms`
--

DROP TABLE IF EXISTS `cms`;
CREATE TABLE IF NOT EXISTS `cms` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `key` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cms`
--

INSERT INTO `cms` (`id`, `key`, `value`, `created_at`, `updated_at`) VALUES
(15, 'home_title', 'Welcome to DG-estate', '2022-08-06 00:19:13', '2022-08-06 00:19:13'),
(2, 'home_meta', 'real estate website, dg estate', '2022-03-12 04:36:08', '2022-03-12 04:48:04'),
(3, 'home_content', '<h2>Welcome to <strong>DG-estate</strong>, One of <em>the best</em> Real Estate Website.</h2>\r\n\r\n<p>Browse many diffrent properties, at one place...</p>\r\n\r\n<blockquote>\r\n<h3><q>Once Great, Always Great.</q></h3>\r\n</blockquote>', '2022-03-12 04:36:08', '2022-03-12 04:46:51'),
(4, 'about_title', 'About Us', '2022-03-12 04:36:08', '2022-03-12 04:58:56'),
(5, 'about_meta', 'dg estate about us page', '2022-03-12 04:36:08', '2022-03-12 04:58:56'),
(6, 'about_content', '<h1>About Us</h1>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h2>Who are we?</h2>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In eget faucibus dolor. Nunc nec nisi eget ligula malesuada condimentum a vitae neque. Suspendisse ut pulvinar justo. Donec eget mauris dolor. Nulla sed eros imperdiet, ultrices sem in, consequat nulla. Nulla in blandit arcu, at finibus odio. Etiam vel suscipit leo.</p>\r\n\r\n<hr />\r\n<h2>Why choose us?</h2>\r\n\r\n<p>Maecenas laoreet volutpat arcu, eu feugiat eros blandit in. Donec placerat pretium fermentum. Morbi sed arcu hendrerit, posuere est et, finibus elit. Cras at dolor viverra, suscipit turpis ac, finibus velit. In elementum porttitor tincidunt. Cras id congue nisl. Nam ornare diam sit amet risus dignissim, eget pharetra odio rutrum. Mauris ornare orci vel accumsan molestie. Curabitur auctor, ex vitae porttitor volutpat, leo justo varius dolor, a porta ex ex vel metus. Curabitur non viverra orci, volutpat finibus lorem. Suspendisse dictum felis neque, ut tempus mi facilisis et. Phasellus eu risus leo. Cras pretium mi vel nisl suscipit, ac ultrices odio tincidunt.</p>\r\n\r\n<hr />\r\n<h2>What we offer?</h2>\r\n\r\n<p>In ante mauris, vestibulum quis justo ac, vestibulum malesuada mauris. Nunc finibus blandit ex. Aliquam efficitur urna porta commodo maximus. Pellentesque nec nisi velit. Proin ex nisl, laoreet vel dignissim sed, varius nec elit. Donec pharetra sem ac odio lacinia dictum. Sed vehicula neque ipsum, id vestibulum metus convallis ac. Praesent eu ullamcorper mi. Sed fermentum augue sed maximus suscipit. Aenean non massa ut urna commodo cursus. Pellentesque sagittis ex eget leo convallis, nec sodales tortor euismod.</p>\r\n\r\n<p>&nbsp;</p>', '2022-03-12 04:36:08', '2022-03-12 04:59:23'),
(7, 'faq_title', 'Frequent Questions', '2022-03-12 04:36:08', '2022-04-01 10:25:20'),
(8, 'faq_meta', 'frequenty asked quetions dg estate', '2022-03-12 04:36:08', '2022-03-12 05:04:14'),
(9, 'faq_content', '<h1>FAQs</h1>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h2>How can we list properties on DG-estate?</h2>\r\n\r\n<ul>\r\n	<li>Quisque pretium ex convallis bibendum dictum.</li>\r\n	<li>Maecenas sit amet elit ultrices, viverra urna id, posuere ligula.</li>\r\n</ul>\r\n\r\n<hr />\r\n<h2>Can we pay rent from this platform?</h2>\r\n\r\n<ul>\r\n	<li>Duis eu massa non risus imperdiet iaculis eu in lacus.</li>\r\n	<li>Curabitur dapibus sem a rutrum malesuada.</li>\r\n	<li>Praesent efficitur mauris vel lorem ultrices eleifend.</li>\r\n</ul>\r\n\r\n<hr />\r\n<h2>Are properties on this website are genuine?</h2>\r\n\r\n<ul>\r\n	<li>Fusce ac leo molestie, aliquam purus in, consectetur tellus.</li>\r\n	<li>Maecenas non quam ac lectus pharetra ornare.</li>\r\n</ul>', '2022-03-12 04:36:08', '2022-03-12 05:04:14'),
(10, 'terms_title', 'Terms & Conditions', '2022-03-12 04:36:08', '2022-03-12 05:05:12'),
(11, 'terms_meta', 'dg estate terms & conditions', '2022-03-12 04:36:08', '2022-03-12 05:05:12'),
(12, 'terms_content', '<h1>Terms</h1>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<ul>\r\n	<li>Sed id laoreet purus. In in libero quis sem gravida posuere quis quis augue. Sed sit amet enim id erat elementum ultrices. Mauris sed sagittis ante. Mauris ut nunc iaculis, maximus nulla quis, porta diam. Quisque tempus, arcu vel imperdiet auctor, nibh nisl faucibus arcu, et accumsan est justo scelerisque erat. Ut facilisis erat turpis, quis suscipit orci tincidunt eget. Nulla nibh mauris, dapibus non mollis at, porta ut arcu. Donec porta turpis velit, vitae iaculis ligula iaculis at. Aenean vel ex auctor, mattis urna sed, hendrerit enim.</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<ul>\r\n	<li>Vivamus convallis felis non justo sollicitudin scelerisque. Pellentesque tincidunt iaculis neque, eu iaculis ex gravida eu. Pellentesque nunc diam, dignissim at dui vel, gravida venenatis mi. Mauris eu euismod eros, et mollis felis. Duis egestas pharetra est, a hendrerit metus bibendum eu. Morbi et rhoncus mi. Ut congue elementum purus vitae lobortis. Duis sed lectus sit amet tellus tincidunt cursus vitae maximus libero. Phasellus rhoncus elit a commodo lacinia.</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<ul>\r\n	<li>Maecenas ut iaculis metus, et venenatis felis. Donec a augue non ante finibus vulputate ut vitae lectus. Fusce rhoncus purus sit amet sagittis commodo. Sed at efficitur purus. Etiam eros augue, sollicitudin a laoreet at, mattis tempor ex. Proin molestie nisl nec augue malesuada, eu semper quam mattis. Suspendisse dictum nisi leo. Sed pulvinar lacus sit amet ipsum pretium feugiat. Donec non erat tempus, posuere eros vel, finibus dolor. Praesent odio lectus, cursus at rhoncus sed, vehicula id sem. Morbi pharetra dapibus diam, quis rutrum neque lobortis pharetra. Cras pretium, libero eu volutpat porta, odio odio accumsan metus, ac tempus eros leo sodales urna. Sed at orci id quam aliquet imperdiet. In imperdiet non mauris vel pellentesque. Aliquam ut dolor consectetur, dignissim orci et, accumsan purus.</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h1>Conditions</h1>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<ul>\r\n	<li>Mauris tristique arcu rhoncus sapien molestie venenatis. Donec posuere dictum ex, eu imperdiet lacus maximus in. Etiam blandit nibh id aliquet porttitor. Vestibulum non nunc dignissim, porta est nec, porttitor sapien. Integer convallis erat eget ipsum dignissim, ac semper augue lacinia. Quisque sit amet ultrices purus. Mauris vestibulum tortor in urna bibendum, eu scelerisque felis sollicitudin. Phasellus molestie tellus id pulvinar feugiat. Vivamus eleifend pellentesque quam vel iaculis.</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<ul>\r\n	<li>Nulla mollis nisi tellus, quis tempus turpis finibus sed. Etiam tempor nec erat egestas aliquet. Donec sed nunc magna. In tempus varius ligula, sed elementum metus volutpat et. Suspendisse potenti. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Sed purus tortor, volutpat eu faucibus vitae, ornare id quam.</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<ul>\r\n	<li>Aenean dignissim quam sit amet neque fermentum suscipit. Nunc mattis sapien sit amet ornare commodo. Quisque vel purus risus. Etiam sit amet mollis erat, ut hendrerit dolor. Praesent vehicula urna odio, ut vestibulum metus rutrum sit amet. Proin nibh tortor, efficitur eget malesuada nec, aliquam egestas turpis. Cras congue viverra consectetur. Vivamus eu ipsum sollicitudin, scelerisque orci eu, porta orci. Praesent eu est aliquet, semper mauris non, dignissim augue. Quisque tempor consectetur felis nec dapibus.</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>', '2022-03-12 04:36:08', '2022-03-12 05:08:33'),
(13, 'home_image', NULL, '2022-03-12 04:43:29', '2022-04-24 22:57:34'),
(14, 'about_image', '202204-928677053.png', '2022-03-12 04:58:56', '2022-04-08 12:24:59');

-- --------------------------------------------------------

--
-- Table structure for table `facilities`
--

DROP TABLE IF EXISTS `facilities`;
CREATE TABLE IF NOT EXISTS `facilities` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `faci` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug_faci` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fa` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `color` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `facilities_faci_unique` (`faci`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `facilities`
--

INSERT INTO `facilities` (`id`, `faci`, `slug_faci`, `fa`, `color`, `created_at`, `updated_at`) VALUES
(4, 'Gym', 'gym', '<i class=\"fas fa-dumbbell\"></i>', 'dark', '2022-01-07 10:02:25', '2022-03-08 10:04:54'),
(3, 'Swimming Pool', 'swimming-pool', '<i class=\"fas fa-swimming-pool\"></i>', 'primary', '2022-01-07 09:54:27', '2022-01-30 03:45:00'),
(5, 'Children Park', 'children-park', '<i class=\"fas fa-child\"></i>', 'warning', '2022-01-07 10:02:36', '2022-01-30 03:45:24'),
(6, 'Garden', 'garden', '<i class=\"fas fa-leaf\"></i>', 'success', '2022-01-30 01:33:44', '2022-01-30 03:45:30'),
(7, 'Party Plot', 'party-plot', '<i class=\"fas fa-user-friends\"></i>', 'info', '2022-01-30 01:47:01', '2022-01-30 03:46:20'),
(10, 'Wifi', 'wifi', '<i class=\"fas fa-wifi\"></i>', 'primary', '2022-04-07 10:57:10', '2022-04-07 10:57:10'),
(11, 'Shops', 'shops', '<i class=\"fas fa-shopping-bag\"></i>', 'secondary', '2022-04-07 10:58:21', '2022-04-07 10:58:21'),
(12, 'Nurcery', 'nurcery', '<i class=\"fas fa-child\"></i>', 'info', '2022-04-07 10:59:45', '2022-04-07 10:59:45');

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
-- Table structure for table `gallaries`
--

DROP TABLE IF EXISTS `gallaries`;
CREATE TABLE IF NOT EXISTS `gallaries` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `pro_id` bigint(20) NOT NULL,
  `gal_image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=38 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `gallaries`
--

INSERT INTO `gallaries` (`id`, `pro_id`, `gal_image`, `created_at`, `updated_at`) VALUES
(20, 12, '202204-631098055.jpg', '2022-04-08 08:16:23', '2022-04-08 08:16:23'),
(21, 12, '202204-681170685.jpg', '2022-04-08 08:16:23', '2022-04-08 08:16:23'),
(22, 12, '202204-1136224004.jpg', '2022-04-08 08:16:23', '2022-04-08 08:16:23'),
(23, 12, '202204-409381760.jpg', '2022-04-08 08:16:23', '2022-04-08 08:16:23'),
(19, 11, '202204-459025627.jpg', '2022-04-08 08:15:37', '2022-04-08 08:15:37'),
(18, 11, '202204-1740009979.jpg', '2022-04-08 08:15:37', '2022-04-08 08:15:37'),
(16, 11, '202204-965593932.jpg', '2022-04-08 08:15:37', '2022-04-08 08:15:37'),
(17, 11, '202204-354380815.jpg', '2022-04-08 08:15:37', '2022-04-08 08:15:37'),
(24, 13, '202204-858655802.jpg', '2022-04-08 09:00:09', '2022-04-08 09:00:09'),
(25, 13, '202204-1511696765.jpg', '2022-04-08 09:00:09', '2022-04-08 09:00:09'),
(26, 15, '202204-1106751233.jpg', '2022-04-08 09:26:38', '2022-04-08 09:26:38'),
(27, 15, '202204-548602169.jpg', '2022-04-08 09:26:38', '2022-04-08 09:26:38'),
(28, 15, '202204-1715686352.jpg', '2022-04-08 09:26:38', '2022-04-08 09:26:38'),
(34, 27, '202204-1157628521.jpg', '2022-04-08 12:39:04', '2022-04-08 12:39:04'),
(33, 27, '202204-1311369218.jpg', '2022-04-08 12:39:04', '2022-04-08 12:39:04'),
(32, 27, '202204-1213686891.jpg', '2022-04-08 12:39:04', '2022-04-08 12:39:04'),
(36, 25, '202204-2066770871.jpg', '2022-04-23 23:08:10', '2022-04-23 23:08:10'),
(37, 25, '202204-1638664738.jpg', '2022-04-23 23:08:10', '2022-04-23 23:08:10');

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
) ENGINE=MyISAM AUTO_INCREMENT=24 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(9, '2021_12_31_123225_create_categories_table', 4),
(10, '2022_01_02_091034_create_cities_table', 5),
(11, '2022_01_07_144759_create_facilities_table', 6),
(12, '2022_01_09_063114_create_properties_table', 7),
(13, '2022_01_11_150349_create_gallaries_table', 8),
(14, '2022_01_21_040603_create_site_settings_table', 9),
(15, '2022_01_25_050443_add_desc_fe_image_property', 10),
(16, '2022_01_30_044047_upd_facilities', 11),
(17, '2022_01_30_075444_upd_properties', 12),
(18, '2022_01_30_092847_upd_properties2', 13),
(19, '2022_02_06_062102_create_user_data_table', 14),
(20, '2022_02_18_141645_upd_user_data', 15),
(21, '2022_02_25_134358_create_reviews_table', 16),
(22, '2022_03_11_113517_create_cms_table', 17),
(23, '2022_03_13_032458_update_property', 18);

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
-- Table structure for table `properties`
--

DROP TABLE IF EXISTS `properties`;
CREATE TABLE IF NOT EXISTS `properties` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `public` tinyint(1) NOT NULL DEFAULT '1',
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title_slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `featured` tinyint(1) NOT NULL DEFAULT '0',
  `purpose` enum('sale','rent','pg') COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` bigint(20) NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fe_image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `faci` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rooms` int(11) NOT NULL,
  `bathrooms` int(11) NOT NULL,
  `city` bigint(20) NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cont_ph` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cont_em` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `area` int(11) DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `video` text COLLATE utf8mb4_unicode_ci,
  `floorplan` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `map` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=30 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `properties`
--

INSERT INTO `properties` (`id`, `public`, `title`, `title_slug`, `price`, `featured`, `purpose`, `category`, `image`, `fe_image`, `faci`, `rooms`, `bathrooms`, `city`, `address`, `cont_ph`, `cont_em`, `area`, `description`, `video`, `floorplan`, `map`, `created_at`, `updated_at`) VALUES
(12, 1, 'Amrit Villa', 'amrit-villa', '5000.00', 1, 'rent', 10, '202204-656951126.jpg', '202204-1897323128.jpg', 'null', 2, 1, 1, 'FN/103, Amrit Villa , that place, there, surat.', '7894561230', 'abcexm@example.com', 900, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean eget libero id neque commodo luctus. Phasellus vitae massa sed nibh tempus fringilla. Curabitur pulvinar risus ligula, eget cursus est pharetra eget. Pellentesque luctus semper augue.', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/0yVDMcGp97g\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', '202204-988961353.png', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d119066.41264292416!2d72.75225569130734!3d21.159345833218943!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be04e59411d1563%3A0xfe4558290938b042!2sSurat%2C%20Gujarat!5e0!3m2!1sen!2sin!4v1649349232600!5m2!1sen!2sin\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', '2022-04-07 11:18:25', '2022-04-07 11:18:39'),
(13, 1, 'Amazon Shop', 'amazon-shop', '70000.00', 1, 'rent', 11, '202204-2073502541.jpg', '202204-776189843.jpg', NULL, 1, 1, 2, '123/Xy, That place, at There, somewhere near, ahmedabad.', '95175363654', 'abcexm@example.com', 1000, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In a lacinia odio. Aliquam blandit tincidunt libero a dictum. Nullam vitae magna id nulla fringilla accumsan.', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/7ZLibi6s_ew\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', NULL, '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d235013.70717963495!2d72.43965612754111!3d23.02049776962946!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395e848aba5bd449%3A0x4fcedd11614f6516!2sAhmedabad%2C%20Gujarat!5e0!3m2!1sen!2sin!4v1649426092027!5m2!1sen!2sin\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', '2022-04-08 08:25:59', '2022-04-08 08:25:59'),
(14, 1, 'Hodi Bunglow', 'hodi-bunglow', '10500000.00', 1, 'sale', 2, '202204-941123598.jpg', '202204-1352680560.jpg', '[\"gym\",\"swimming-pool\",\"garden\",\"party-plot\",\"wifi\"]', 4, 5, 1, 'AC, 567, Hodi Bunglow, at that place, near this place, surat', '7418529631', 'example@hodi.com', 1800, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In a lacinia odio. Aliquam blandit tincidunt libero a dictum. Nullam vitae magna id nulla fringilla accumsan.', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/7ZLibi6s_ew\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', '202204-1388065178.png', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d235013.70717963495!2d72.43965612754111!3d23.02049776962946!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395e848aba5bd449%3A0x4fcedd11614f6516!2sAhmedabad%2C%20Gujarat!5e0!3m2!1sen!2sin!4v1649426092027!5m2!1sen!2sin\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', '2022-04-08 09:06:31', '2022-04-08 09:06:41'),
(15, 1, 'Venica Villa', 'venica-villa', '25000.00', 0, 'rent', 3, '202204-492249722.jpg', '202204-718624090.jpg', '[\"garden\",\"shops\"]', 3, 2, 2, '69, Venica, At here, not there, Yes there, Ahmedabad.', '6543218520', 'abc@xyz.com', 900, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In a lacinia odio. Aliquam blandit tincidunt libero a dictum. Nullam vitae magna id nulla fringilla accumsan.', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/7ZLibi6s_ew\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', '202204-1942384549.jpg', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d235013.70717963495!2d72.43965612754111!3d23.02049776962946!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395e848aba5bd449%3A0x4fcedd11614f6516!2sAhmedabad%2C%20Gujarat!5e0!3m2!1sen!2sin!4v1649426092027!5m2!1sen!2sin\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', '2022-04-08 09:23:56', '2022-04-08 09:23:56'),
(11, 1, 'Platinum Park', 'platinum-park', '4500000.00', 1, 'sale', 3, '202204-1875990250.jpg', '202204-98370492.jpg', 'null', 2, 2, 1, 'AB/123, Platinum park, beside that garden , near this bridge, surat', '9517532564', 'abc1@example.com', 1500, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean eget libero id neque commodo luctus. Phasellus vitae massa sed nibh tempus fringilla. Curabitur pulvinar risus ligula, eget cursus est pharetra eget. Pellentesque luctus semper augue.', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/0yVDMcGp97g\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', '202204-938661425.jpg', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d119066.41264292416!2d72.75225569130734!3d21.159345833218943!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be04e59411d1563%3A0xfe4558290938b042!2sSurat%2C%20Gujarat!5e0!3m2!1sen!2sin!4v1649349232600!5m2!1sen!2sin\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', '2022-04-07 11:12:53', '2022-04-07 11:13:28'),
(16, 1, 'Scooby House', 'scooby-house', '36000.00', 0, 'rent', 10, '202204-1629628562.jpg', '202204-1066314317.jpg', '[\"swimming-pool\",\"garden\",\"wifi\"]', 4, 4, 1, 'kj/101, Scooby House, that place ,nea that, surat.', '9638527416', 'ayus@asd.com', 1200, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In a lacinia odio. Aliquam blandit tincidunt libero a dictum. Nullam vitae magna id nulla fringilla accumsan.', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/7ZLibi6s_ew\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', NULL, '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d235013.70717963495!2d72.43965612754111!3d23.02049776962946!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395e848aba5bd449%3A0x4fcedd11614f6516!2sAhmedabad%2C%20Gujarat!5e0!3m2!1sen!2sin!4v1649426092027!5m2!1sen!2sin\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', '2022-04-08 09:28:56', '2022-04-08 09:28:56'),
(17, 1, 'Brown Bunglow', 'brown-bunglow', '4500000.00', 0, 'sale', 2, '202204-1793405256.jpg', '202204-1639457571.jpg', '[\"children-park\",\"garden\",\"party-plot\"]', 5, 6, 1, '169, Brown Bunglows, This place, that place, Surat.', '7591536842', 'kgfch2@omg.com', 1500, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In a lacinia odio. Aliquam blandit tincidunt libero a dictum. Nullam vitae magna id nulla fringilla accumsan.', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/7ZLibi6s_ew\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', NULL, '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d235013.70717963495!2d72.43965612754111!3d23.02049776962946!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395e848aba5bd449%3A0x4fcedd11614f6516!2sAhmedabad%2C%20Gujarat!5e0!3m2!1sen!2sin!4v1649426092027!5m2!1sen!2sin\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', '2022-04-08 09:32:51', '2022-04-08 09:32:51'),
(18, 1, 'Stash Zone', 'stash-zone', '6500000.00', 0, 'sale', 3, '202204-595221343.jpg', '202204-444233127.jpg', '[\"gym\",\"children-park\",\"wifi\",\"shops\"]', 6, 6, 2, 'Xy/23, Stash Zone, nar this , close to that, ahmedabad.', '9517536542', 'lpg@zxc.com', 6000, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In a lacinia odio. Aliquam blandit tincidunt libero a dictum. Nullam vitae magna id nulla fringilla accumsan.', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/7ZLibi6s_ew\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', '202204-1650112293.jpg', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d235013.70717963495!2d72.43965612754111!3d23.02049776962946!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395e848aba5bd449%3A0x4fcedd11614f6516!2sAhmedabad%2C%20Gujarat!5e0!3m2!1sen!2sin!4v1649426092027!5m2!1sen!2sin\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', '2022-04-08 09:36:35', '2022-04-08 09:36:35'),
(19, 1, 'MoKroma PGs', 'mokroma-pgs', '5000.00', 0, 'pg', 3, '202204-710205043.jpg', '202204-205338029.jpg', '[\"wifi\",\"shops\"]', 1, 1, 2, 'a-z, 1-200, MoKorma Pgs, near that, ask anyone, ahmedabad.', '7418529631', 'asdwsa@korma.com', 700, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In a lacinia odio. Aliquam blandit tincidunt libero a dictum. Nullam vitae magna id nulla fringilla accumsan.', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/7ZLibi6s_ew\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', '202204-264449820.jpg', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d235013.70717963495!2d72.43965612754111!3d23.02049776962946!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395e848aba5bd449%3A0x4fcedd11614f6516!2sAhmedabad%2C%20Gujarat!5e0!3m2!1sen!2sin!4v1649426092027!5m2!1sen!2sin\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', '2022-04-08 09:39:47', '2022-04-08 09:39:47'),
(20, 1, 'Swimmy Farm', 'swimmy-farm', '60000.00', 0, 'rent', 10, '202204-891864991.jpg', '202204-50465913.jpg', '[\"gym\",\"swimming-pool\",\"garden\",\"wifi\"]', 4, 3, 2, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi varius.', '9617534568', 'asdwsa@korma.com', 960, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In a lacinia odio. Aliquam blandit tincidunt libero a dictum. Nullam vitae magna id nulla fringilla accumsan.', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/7ZLibi6s_ew\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', '202204-1260345001.png', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d235013.70717963495!2d72.43965612754111!3d23.02049776962946!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395e848aba5bd449%3A0x4fcedd11614f6516!2sAhmedabad%2C%20Gujarat!5e0!3m2!1sen!2sin!4v1649426092027!5m2!1sen!2sin\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', '2022-04-08 09:42:45', '2022-04-08 09:42:45'),
(21, 1, 'Shivan Avenue', 'shivan-avenue', '90000.00', 0, 'rent', 9, '202204-957202127.jpg', '202204-93467075.jpg', '[\"wifi\",\"shops\"]', 2, 1, 1, '69, Shivan, Avenue  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi varius.', '9674158234', 'kdhbjha@adfsf.com', 6999, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In a lacinia odio. Aliquam blandit tincidunt libero a dictum. Nullam vitae magna id nulla fringilla accumsan.', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/7ZLibi6s_ew\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', NULL, '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d235013.70717963495!2d72.43965612754111!3d23.02049776962946!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395e848aba5bd449%3A0x4fcedd11614f6516!2sAhmedabad%2C%20Gujarat!5e0!3m2!1sen!2sin!4v1649426092027!5m2!1sen!2sin\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', '2022-04-08 09:53:10', '2022-04-08 09:54:01'),
(22, 1, 'Elifin Reality', 'elifin-reality', '7500.00', 0, 'pg', 3, '202204-566940030.jpg', '202204-964947300.jpg', '[\"gym\",\"garden\",\"wifi\"]', 1, 1, 1, '45, Elifin Reality,  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi varius.', '7418529632', 'abc@example.com', 750, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In a lacinia odio. Aliquam blandit tincidunt libero a dictum. Nullam vitae magna id nulla fringilla accumsan.', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/7ZLibi6s_ew\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', NULL, '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d235013.70717963495!2d72.43965612754111!3d23.02049776962946!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395e848aba5bd449%3A0x4fcedd11614f6516!2sAhmedabad%2C%20Gujarat!5e0!3m2!1sen!2sin!4v1649426092027!5m2!1sen!2sin\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', '2022-04-08 09:56:22', '2022-04-08 09:56:22'),
(23, 1, 'Emiliano Zapata', 'emiliano-zapata', '50000.00', 0, 'rent', 3, '202204-458380952.jpg', '202204-1713612644.jpg', '[\"garden\",\"wifi\"]', 4, 3, 1, '75, Emiliano Zapata,  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi varius.', '9638527413', 'qwerty@werty.com', 900, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In a lacinia odio. Aliquam blandit tincidunt libero a dictum. Nullam vitae magna id nulla fringilla accumsan.', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/7ZLibi6s_ew\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', NULL, '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d235013.70717963495!2d72.43965612754111!3d23.02049776962946!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395e848aba5bd449%3A0x4fcedd11614f6516!2sAhmedabad%2C%20Gujarat!5e0!3m2!1sen!2sin!4v1649426092027!5m2!1sen!2sin\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', '2022-04-08 09:58:38', '2022-04-08 09:58:38'),
(24, 1, 'Iana Vita', 'iana-vita', '8500000.00', 0, 'sale', 3, '202204-1144480993.jpg', '202204-1776990009.jpg', '[\"gym\",\"garden\",\"wifi\"]', 3, 3, 2, '85, Iana Vita,  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi varius.', '7587458745', 'hijk@plane.com', 1200, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In a lacinia odio. Aliquam blandit tincidunt libero a dictum. Nullam vitae magna id nulla fringilla accumsan.', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/7ZLibi6s_ew\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', NULL, '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d235013.70717963495!2d72.43965612754111!3d23.02049776962946!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395e848aba5bd449%3A0x4fcedd11614f6516!2sAhmedabad%2C%20Gujarat!5e0!3m2!1sen!2sin!4v1649426092027!5m2!1sen!2sin\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', '2022-04-08 10:01:09', '2022-04-08 10:01:09'),
(25, 1, 'Soham Arcade', 'soham-arcade', '7512000.00', 1, 'sale', 9, '202204-1985459060.jpg', '202204-655653996.jpg', '[\"gym\",\"wifi\",\"shops\"]', 3, 2, 2, 'Soham Arcade,  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi varius.', '7418529631', 'lpg@zxc.com', 6500, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In a lacinia odio. Aliquam blandit tincidunt libero a dictum. Nullam vitae magna id nulla fringilla accumsan.', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/7ZLibi6s_ew\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', NULL, '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d235013.70717963495!2d72.43965612754111!3d23.02049776962946!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395e848aba5bd449%3A0x4fcedd11614f6516!2sAhmedabad%2C%20Gujarat!5e0!3m2!1sen!2sin!4v1649426092027!5m2!1sen!2sin\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', '2022-04-08 10:03:58', '2022-04-08 10:03:58'),
(26, 1, 'Cafe Coffe Shop', 'cafe-coffe-shop', '96000.00', 0, 'rent', 11, '202204-120018109.jpg', '202204-1508858624.jpg', '[\"wifi\",\"shops\"]', 3, 2, 1, 'Cafe, Coffe ,  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi varius.', '9617534568', 'example@hodi.com', 1000, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In a lacinia odio. Aliquam blandit tincidunt libero a dictum. Nullam vitae magna id nulla fringilla accumsan.', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/7ZLibi6s_ew\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', NULL, '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d235013.70717963495!2d72.43965612754111!3d23.02049776962946!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395e848aba5bd449%3A0x4fcedd11614f6516!2sAhmedabad%2C%20Gujarat!5e0!3m2!1sen!2sin!4v1649426092027!5m2!1sen!2sin\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', '2022-04-08 10:06:35', '2022-04-08 10:06:35'),
(27, 1, 'Ralph Wreak', 'ralph-wreak', '55000.00', 0, 'rent', 10, '202204-1572283512.jpg', '202204-70055841.jpg', '[\"swimming-pool\",\"children-park\",\"garden\",\"party-plot\"]', 5, 4, 1, 'Ralph Wreak,  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi varius.', '7418529631', 'lpg@zxc.com', 906, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In a lacinia odio. Aliquam blandit tincidunt libero a dictum. Nullam vitae magna id nulla fringilla accumsan.', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/7ZLibi6s_ew\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', NULL, '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d235013.70717963495!2d72.43965612754111!3d23.02049776962946!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395e848aba5bd449%3A0x4fcedd11614f6516!2sAhmedabad%2C%20Gujarat!5e0!3m2!1sen!2sin!4v1649426092027!5m2!1sen!2sin\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', '2022-04-08 10:10:03', '2022-04-08 12:38:51'),
(29, 1, 'test 1', 'test-1', '25000.00', 0, 'sale', 3, '202204-1854278701.jpg', '202204-1071692885.jpg', NULL, 1, 1, 1, 'asasda', '9429844352', 'darshannariya12@gmail.com', 700, NULL, NULL, NULL, NULL, '2022-04-24 23:05:20', '2022-04-24 23:05:20');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

DROP TABLE IF EXISTS `reviews`;
CREATE TABLE IF NOT EXISTS `reviews` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `u_id` bigint(20) NOT NULL,
  `pro_id` bigint(20) NOT NULL,
  `review` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=32 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`id`, `u_id`, `pro_id`, `review`, `created_at`, `updated_at`) VALUES
(30, 1, 12, 'Hello', '2022-04-08 10:38:21', '2022-04-08 10:38:21'),
(31, 13, 27, 'sdfsdf', '2022-04-24 23:10:27', '2022-04-24 23:10:27');

-- --------------------------------------------------------

--
-- Table structure for table `site_settings`
--

DROP TABLE IF EXISTS `site_settings`;
CREATE TABLE IF NOT EXISTS `site_settings` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `key` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `site_settings`
--

INSERT INTO `site_settings` (`id`, `key`, `value`, `created_at`, `updated_at`) VALUES
(1, 'site_title', 'DG-Estate | Real Estate Site', '2022-01-21 09:13:22', '2022-01-21 09:43:24'),
(2, 'brand_title', 'DG-Estate', '2022-01-21 09:13:22', '2022-03-06 00:39:28'),
(3, 'meta_discription', 'Real Estate Site', '2022-01-21 09:13:22', '2022-01-21 09:43:24'),
(4, 'footer_content', '© 2069 DG-Estate, Inc. All rights reserved.', '2022-01-21 09:13:22', '2022-02-06 00:30:29'),
(5, 'site_email', 'dg.real_estate@email.com', '2022-01-21 09:13:22', '2022-01-21 09:45:43'),
(6, 'site_contact', '+919121291212', '2022-01-21 09:13:22', '2022-01-21 09:28:34'),
(7, 'facebook_url', 'https://www.facebook.com/', '2022-01-21 09:13:22', '2022-01-21 09:44:29'),
(8, 'instagram_url', 'https://www,instagram.com/', '2022-01-21 09:13:22', '2022-01-21 09:44:29'),
(9, 'youtube_url', 'https://www.youtube.com/', '2022-01-21 09:13:22', '2022-01-21 09:31:33'),
(10, 'twitter_url', 'https://www.twitter.com/', '2022-01-21 09:13:22', '2022-03-06 00:40:10'),
(11, 'logo_image', '202204-251349301.png', '2022-01-21 09:23:08', '2022-04-24 22:55:43');

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
  `type` enum('U','R','A') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'U' COMMENT 'R=Root, A=Admin, U=User',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `type`, `remember_token`, `created_at`, `updated_at`) VALUES
(8, 'DG', 'dannyglade@xyz.com', NULL, '$2y$10$B5OqDn.uOVnQrP4xEzrrhuJVSclxlii8tL48VhfUkMb1GxRWUvg4q', 'A', NULL, '2022-02-06 03:52:16', '2022-04-08 12:52:54'),
(7, 'Titan', 'titan@email.com', NULL, '$2y$10$lCkSwjVooRkbaHl77nijR.fH8OCAFXQS9i8tQpubpPZNO7VImk1Li', 'A', NULL, '2022-01-20 08:41:47', '2022-04-08 12:53:05'),
(1, 'Adam', 'admin@admin.com', NULL, '$2y$10$2LhsQAcYRgUtaZaDxFnHdumQZAUVEScFap9tDxSCDePSyclbRXJp6', 'R', NULL, '2022-01-19 09:30:45', '2022-04-23 23:05:17'),
(11, 'Mark Specter', 'mark@specter.com', NULL, '$2y$10$g3QbiPgId7NaZdF9xgMfseC/MUyTW8h9TjdwHijRHNclNvhcyKmiC', 'U', NULL, '2022-03-29 10:20:35', '2022-03-29 10:20:35'),
(13, 'test1', 'test@test.com', NULL, '$2y$10$fosxG.7I.y7Z8VOigrEv2.AF.vcWXq4fIpeNylBL3pzBvKfH7msXS', 'U', NULL, '2022-04-24 23:07:43', '2022-04-24 23:07:43');

-- --------------------------------------------------------

--
-- Table structure for table `user_data`
--

DROP TABLE IF EXISTS `user_data`;
CREATE TABLE IF NOT EXISTS `user_data` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `about` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `saved` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_data`
--

INSERT INTO `user_data` (`id`, `image`, `about`, `saved`, `created_at`, `updated_at`) VALUES
(8, NULL, 'I\'m the God of this Website 😎, Of course this photo is not mine...', '{\"3\":\"dg-villa-pro\",\"7\":\"artemis-fowl\",\"5\":\"shivan-avenue\"}', '2022-02-06 03:52:46', '2022-04-08 12:15:56'),
(1, '202204-561209323.jpg', 'Master of Mystic Arts, Sorcerer Supreme...', '{\"8\":\"blu-farm-house\",\"6\":\"amrit-villa\",\"3\":\"dg-villa-pro\",\"9\":\"platinum-park\",\"7\":\"artemis-fowl\"}', '2022-02-06 03:41:14', '2022-04-23 23:05:17'),
(10, NULL, NULL, NULL, '2022-03-12 06:41:01', '2022-03-12 06:41:01'),
(9, NULL, NULL, NULL, '2022-03-12 06:32:38', '2022-03-12 06:32:38'),
(11, NULL, NULL, NULL, '2022-03-29 10:20:35', '2022-03-29 10:20:35'),
(13, NULL, NULL, NULL, '2022-04-24 23:07:43', '2022-04-24 23:07:43');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
