-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 28, 2020 at 04:49 AM
-- Server version: 8.0.18
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cake_tp_1`
--
CREATE DATABASE IF NOT EXISTS `cake_tp_1` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `cake_tp_1`;

-- --------------------------------------------------------

--
-- Table structure for table `files`
--

CREATE TABLE `files` (
  `id` int(11) NOT NULL,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `path` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1' COMMENT '1 = Active, 0 = Inactive'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `files`
--

INSERT INTO `files` (`id`, `name`, `path`, `created`, `modified`, `status`) VALUES
(3, 'meme.png', 'C:\\Program Files\\Ampps\\www\\webroot\\/img/', '2020-12-22 03:24:57', '2020-12-22 03:24:57', 1),
(4, 'aaaa.png', 'C:\\Program Files\\Ampps\\www\\webroot\\/img/', '2020-12-22 03:40:11', '2020-12-22 03:40:11', 1),
(5, 'aaaa.png', 'C:\\Program Files\\Ampps\\www\\webroot\\/img/', '2020-12-22 03:40:17', '2020-12-22 03:40:17', 1),
(6, 'aaaa.png', 'C:\\Program Files\\Ampps\\www\\webroot\\/img/', '2020-12-22 03:42:13', '2020-12-22 03:42:13', 1),
(7, 'aaaa.png', 'C:\\Program Files\\Ampps\\www\\webroot\\/img/', '2020-12-22 03:42:17', '2020-12-22 03:42:17', 1),
(8, 'meme.png', 'C:\\Program Files\\Ampps\\www\\webroot\\img/', '2020-12-22 03:45:15', '2020-12-22 03:45:15', 1),
(9, 'Reveal 3.jpeg.png', 'C:\\Program Files\\Ampps\\www\\webroot\\img/', '2020-12-22 03:47:59', '2020-12-22 03:47:59', 1),
(11, 'Reveal 3.jpeg.png', 'C:\\Program Files\\Ampps\\www\\webroot\\img/', '2020-12-22 03:57:18', '2020-12-22 03:57:18', 1),
(12, 'Reveal 3.jpeg.png', 'C:\\Program Files\\Ampps\\www\\webroot\\img/', '2020-12-22 03:57:43', '2020-12-22 03:57:43', 1),
(13, 'Reveal 3.jpeg.png', 'C:\\Program Files\\Ampps\\www\\webroot\\img/', '2020-12-22 03:57:58', '2020-12-22 03:57:58', 1),
(14, 'aaaa.png', 'C:\\Program Files\\Ampps\\www\\webroot\\img/', '2020-12-22 04:04:31', '2020-12-22 04:04:31', 1),
(15, 'aaaa.png', 'C:\\Program Files\\Ampps\\www\\webroot\\img/', '2020-12-22 04:07:05', '2020-12-22 04:07:05', 1),
(16, 'aaaa.png', 'C:\\Program Files\\Ampps\\www\\webroot\\img/', '2020-12-22 04:07:16', '2020-12-22 04:07:16', 1),
(17, 'aaaa.png', 'C:\\Program Files\\Ampps\\www\\webroot\\img/', '2020-12-22 04:08:09', '2020-12-22 04:08:09', 1),
(18, 'aaaa.png', 'C:\\Program Files\\Ampps\\www\\webroot\\img/', '2020-12-22 04:09:26', '2020-12-22 04:09:26', 1),
(19, 'aaaa.png', 'C:\\Program Files\\Ampps\\www\\webroot\\img/', '2020-12-22 04:09:46', '2020-12-22 04:09:46', 1),
(20, 'aaaa.png', 'C:\\Program Files\\Ampps\\www\\webroot\\img/', '2020-12-22 04:13:12', '2020-12-22 04:13:12', 1),
(21, 'aaaa.png', 'C:\\Program Files\\Ampps\\www\\webroot\\img/', '2020-12-22 04:14:01', '2020-12-22 04:14:01', 1);

-- --------------------------------------------------------

--
-- Table structure for table `files_products`
--

CREATE TABLE `files_products` (
  `product_id` int(11) NOT NULL,
  `file_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `i18n`
--

CREATE TABLE `i18n` (
  `id` int(11) NOT NULL,
  `locale` varchar(6) COLLATE utf8mb4_general_ci NOT NULL,
  `model` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `foreign_key` int(10) NOT NULL,
  `field` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `content` text COLLATE utf8mb4_general_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `i18n`
--

INSERT INTO `i18n` (`id`, `locale`, `model`, `foreign_key`, `field`, `content`) VALUES
(1, 'es_ES', 'Stores', 1, 'description', 'b'),
(3, 'fr', 'Stores', 1, 'description', 'français'),
(4, 'es', 'Stores', 1, 'description', 'espagnol'),
(5, 'es', 'Stores', 3, 'description', 'espagnol'),
(6, 'es', 'Stores', 2, 'description', 'espagnol'),
(7, 'fr', 'Stores', 2, 'description', 'français'),
(8, 'fr', 'Stores', 3, 'description', 'français'),
(9, 'fr', 'Stores', 4, 'description', 'a'),
(10, 'fr', 'Stores', 5, 'description', 'a'),
(11, 'fr', 'Stores', 6, 'description', 'a'),
(12, 'fr', 'Stores', 7, 'description', 'aaa'),
(19, 'fr', 'Products', 4, 'name', 'chaise'),
(21, 'fr_CA', 'Stores', 8, 'description', 'L\'entrepot a gérard'),
(22, 'fr_CA', 'Stores', 9, 'description', 'L\'entrepot a gérard'),
(23, 'fr_CA', 'Stores', 10, 'description', 'StoreTypes'),
(24, 'fr_CA', 'Stores', 11, 'description', 'StoreTypes'),
(25, 'fr_CA', 'Stores', 12, 'description', ' Association property name'),
(26, 'fr_CA', 'Stores', 13, 'description', ' Association property name'),
(27, 'fr_CA', 'Stores', 14, 'description', 'R'),
(28, 'fr_CA', 'Stores', 15, 'description', 'R'),
(29, 'fr_CA', 'Stores', 16, 'description', 'aaa@gmail.com'),
(30, 'fr_CA', 'Stores', 17, 'description', 'aaa@gmail.com'),
(31, 'fr_CA', 'Stores', 18, 'description', 'name'),
(32, 'fr_CA', 'Stores', 19, 'description', 'name'),
(33, 'fr_CA', 'Stores', 20, 'description', 'ie'),
(34, 'fr_CA', 'Stores', 21, 'description', 't'),
(35, 'fr_CA', 'Stores', 22, 'description', 'sadsd'),
(36, 'fr_CA', 'Stores', 23, 'description', 'sadsd'),
(37, 'fr_CA', 'Stores', 24, 'description', 'sadsd');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
  `price` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `description`, `price`) VALUES
(4, NULL, NULL, 1500);

-- --------------------------------------------------------

--
-- Table structure for table `products_stores`
--

CREATE TABLE `products_stores` (
  `product_id` int(11) NOT NULL,
  `store_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products_stores`
--

INSERT INTO `products_stores` (`product_id`, `store_id`) VALUES
(4, 1),
(4, 2),
(4, 4),
(4, 8),
(4, 17);

-- --------------------------------------------------------

--
-- Table structure for table `stores`
--

CREATE TABLE `stores` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
  `user_id` int(11) NOT NULL COMMENT 'owner',
  `address` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `store_type_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `stores`
--

INSERT INTO `stores` (`id`, `name`, `description`, `user_id`, `address`, `created`, `modified`, `store_type_id`) VALUES
(1, 'a', '<default>', 1, 'a', '2020-10-22 01:44:55', '2020-10-22 02:08:53', 1),
(2, 'c', '<default>', 1, 'c', '2020-10-22 01:45:54', '2020-10-22 02:09:49', 1),
(3, 'a', '<default>', 1, 'a', '2020-10-22 02:02:53', '2020-10-22 02:09:52', 1),
(4, 'a', NULL, 1, 'a', '2020-10-22 02:14:42', '2020-10-22 02:14:42', 1),
(5, 'a', NULL, 1, 'aa', '2020-10-22 02:22:33', '2020-10-22 02:22:33', 1),
(6, 'a', NULL, 1, 'aa', '2020-10-22 02:22:51', '2020-10-22 02:22:51', 1),
(7, 'a', NULL, 1, 'aa', '2020-10-22 02:23:02', '2020-10-22 02:23:02', 1),
(8, 'L\'entrepot a gérard', NULL, 1, 'ddddd', '2020-11-24 15:12:50', '2020-11-24 15:12:50', 1),
(9, 'L\'entrepot a gérard', NULL, 1, 'v', '2020-11-24 15:13:04', '2020-11-24 15:13:04', 1),
(10, 'StoreTypes', NULL, 1, 'StoreTypes', '2020-11-24 15:24:18', '2020-11-24 15:24:18', NULL),
(11, 'StoreTypes', NULL, 1, 'StoreTypes', '2020-11-24 15:25:17', '2020-11-24 15:25:17', NULL),
(12, ' Association property name', NULL, 1, ' Association property name', '2020-11-24 15:33:01', '2020-11-24 15:33:01', NULL),
(13, ' Association property name', NULL, 1, ' Association property name', '2020-11-24 15:33:55', '2020-11-24 15:33:55', NULL),
(14, 'R', NULL, 1, 'R', '2020-11-24 15:34:13', '2020-11-24 15:34:13', NULL),
(15, 'R', NULL, 1, 'R', '2020-11-24 15:34:35', '2020-11-24 15:34:35', NULL),
(16, 'aaa@gmail.com', NULL, 1, 'aaa@gmail.com', '2020-11-25 05:10:50', '2020-11-25 05:10:50', NULL),
(17, 'aaa@gmail.com', NULL, 1, 'aaa@gmail.com', '2020-11-25 05:12:58', '2020-11-25 05:12:58', NULL),
(18, 'name', NULL, 1, 'name', '2020-11-25 05:23:52', '2020-11-25 05:23:52', NULL),
(19, 'name', NULL, 1, 'name', '2020-11-25 05:24:30', '2020-11-25 05:24:30', NULL),
(20, 'ie', NULL, 1, 'ie', '2020-11-25 05:26:33', '2020-11-25 05:26:33', NULL),
(21, 't', NULL, 1, 't', '2020-11-25 05:29:01', '2020-11-25 05:29:01', NULL),
(22, 'sadsd', NULL, 1, 'sadsd', '2020-11-25 05:30:13', '2020-11-25 05:30:13', NULL),
(23, 'sadsd', NULL, 1, 'sadsd', '2020-11-25 05:30:48', '2020-11-25 05:30:48', NULL),
(24, 'sadsd', NULL, 1, 'sadsd', '2020-11-25 05:31:52', '2020-11-25 05:31:52', 1);

-- --------------------------------------------------------

--
-- Table structure for table `store_types`
--

CREATE TABLE `store_types` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `store_types`
--

INSERT INTO `store_types` (`id`, `name`) VALUES
(1, 'Entrepôt'),
(5, 'dasdsadsds'),
(6, 'sdsdsdsd');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `password` text COLLATE utf8mb4_general_ci NOT NULL,
  `type` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `type`, `created`, `modified`) VALUES
(1, 'test', 'a@a.aaa', '$2y$10$6pPXGEggDQnjkm4x/xazbenZaXrXTgLTY5WQl8i6vXxVfjg9D8xBC', 3, '2020-10-20 18:47:37', '2020-10-20 18:47:37'),
(2, 'a', 'aaa@gmail.com', '$2y$10$45WosjCPwYGCDnZNLfAO6eJ0h.I2fMRaV9O2ajiIpkh9aqIXk3E8G', 3, '2020-10-20 20:50:58', '2020-10-20 20:50:58'),
(3, 'aaa', 'a@gmail.com', '$2y$10$IH5E9yLjHTa5IsAPl4tDaeIGOqZNt6bG2PieVL1fMj9N2Ji5MWCnC', 3, '2020-10-22 01:35:40', '2020-10-22 01:35:40'),
(4, 'abba', 'abba@gmail.com', '$2y$10$IL/ZruwoYy6fmMXGohm/8umBvHdrHoRMHZYUh0kHnJpWxdNI92sSi', 1, '2020-10-22 02:39:38', '2020-10-22 02:39:38'),
(5, 'abba2', 'abba2@gmail.com', '$2y$10$6utJa0vL3xWT6..OkHQJ0.MfpHqpiSFJg9fvFcBqywWsQGgzWHnqe', 1, '2020-10-22 02:46:18', '2020-10-22 02:46:18'),
(6, 'benjamin', 'benjamin@benjamin.com', '$2y$10$A2/dRV./efZdS8kziKQEbO5ClyFHnjLY1SysSeD6Z9NiqdmgG0T9m', 2, '2020-10-22 02:55:53', '2020-10-22 02:55:53'),
(7, 'benjaminbenjamin', 'benjaminbenjamin@benjamin.com', '$2y$10$4JIzAYcHpxaGWFPUTMIbkO7fKq4J0tA/8IS1s5sxLCY9G0v7sno.i', 1, '2020-10-22 03:04:34', '2020-10-22 03:04:34');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `files`
--
ALTER TABLE `files`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `files_products`
--
ALTER TABLE `files_products`
  ADD PRIMARY KEY (`product_id`,`file_id`),
  ADD KEY `file_id` (`file_id`);

--
-- Indexes for table `i18n`
--
ALTER TABLE `i18n`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `I18N_LOCALE_FIELD` (`locale`,`model`(100),`foreign_key`,`field`(100)),
  ADD KEY `I18N_FIELD` (`model`(100),`foreign_key`,`field`(100));

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products_stores`
--
ALTER TABLE `products_stores`
  ADD PRIMARY KEY (`product_id`,`store_id`),
  ADD KEY `store_id` (`store_id`);

--
-- Indexes for table `stores`
--
ALTER TABLE `stores`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `stores_store_types_id_fk` (`store_type_id`);

--
-- Indexes for table `store_types`
--
ALTER TABLE `store_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `files`
--
ALTER TABLE `files`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `i18n`
--
ALTER TABLE `i18n`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `stores`
--
ALTER TABLE `stores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `store_types`
--
ALTER TABLE `store_types`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `files_products`
--
ALTER TABLE `files_products`
  ADD CONSTRAINT `files_products_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `files_products_ibfk_2` FOREIGN KEY (`file_id`) REFERENCES `files` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Constraints for table `products_stores`
--
ALTER TABLE `products_stores`
  ADD CONSTRAINT `products_stores_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `products_stores_ibfk_2` FOREIGN KEY (`store_id`) REFERENCES `stores` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Constraints for table `stores`
--
ALTER TABLE `stores`
  ADD CONSTRAINT `stores_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `stores_store_types_id_fk` FOREIGN KEY (`store_type_id`) REFERENCES `store_types` (`id`);
--
-- Database: `pmadb`
--
CREATE DATABASE IF NOT EXISTS `pmadb` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `pmadb`;

-- --------------------------------------------------------

--
-- Table structure for table `pma__bookmark`
--

CREATE TABLE `pma__bookmark` (
  `id` int(10) UNSIGNED NOT NULL,
  `dbase` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `user` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `label` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `query` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Bookmarks';

-- --------------------------------------------------------

--
-- Table structure for table `pma__central_columns`
--

CREATE TABLE `pma__central_columns` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_type` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_length` text COLLATE utf8_bin,
  `col_collation` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_isNull` tinyint(1) NOT NULL,
  `col_extra` varchar(255) COLLATE utf8_bin DEFAULT '',
  `col_default` text COLLATE utf8_bin
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Central list of columns';

-- --------------------------------------------------------

--
-- Table structure for table `pma__column_info`
--

CREATE TABLE `pma__column_info` (
  `id` int(5) UNSIGNED NOT NULL,
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `column_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `comment` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `mimetype` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `transformation` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `transformation_options` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `input_transformation` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `input_transformation_options` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Column information for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__designer_settings`
--

CREATE TABLE `pma__designer_settings` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `settings_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Settings related to Designer';

--
-- Dumping data for table `pma__designer_settings`
--

INSERT INTO `pma__designer_settings` (`username`, `settings_data`) VALUES
('root', '{\"angular_direct\":\"angular\",\"relation_lines\":\"true\",\"snap_to_grid\":\"off\"}');

-- --------------------------------------------------------

--
-- Table structure for table `pma__export_templates`
--

CREATE TABLE `pma__export_templates` (
  `id` int(5) UNSIGNED NOT NULL,
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `export_type` varchar(10) COLLATE utf8_bin NOT NULL,
  `template_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `template_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Saved export templates';

-- --------------------------------------------------------

--
-- Table structure for table `pma__favorite`
--

CREATE TABLE `pma__favorite` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `tables` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Favorite tables';

-- --------------------------------------------------------

--
-- Table structure for table `pma__history`
--

CREATE TABLE `pma__history` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `timevalue` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `sqlquery` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='SQL history for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__navigationhiding`
--

CREATE TABLE `pma__navigationhiding` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `item_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `item_type` varchar(64) COLLATE utf8_bin NOT NULL,
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Hidden items of navigation tree';

-- --------------------------------------------------------

--
-- Table structure for table `pma__pdf_pages`
--

CREATE TABLE `pma__pdf_pages` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `page_nr` int(10) UNSIGNED NOT NULL,
  `page_descr` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='PDF relation pages for phpMyAdmin';

--
-- Dumping data for table `pma__pdf_pages`
--

INSERT INTO `pma__pdf_pages` (`db_name`, `page_nr`, `page_descr`) VALUES
('cake_tp_1', 1, 'Main');

-- --------------------------------------------------------

--
-- Table structure for table `pma__recent`
--

CREATE TABLE `pma__recent` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `tables` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Recently accessed tables';

--
-- Dumping data for table `pma__recent`
--

INSERT INTO `pma__recent` (`username`, `tables`) VALUES
('root', '[{\"db\":\"cake_tp_1\",\"table\":\"products_stores\"},{\"db\":\"cake_tp_1\",\"table\":\"products\"},{\"db\":\"cake_tp_1\",\"table\":\"stores\"},{\"db\":\"cake_tp_1\",\"table\":\"users\"}]');

-- --------------------------------------------------------

--
-- Table structure for table `pma__relation`
--

CREATE TABLE `pma__relation` (
  `master_db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `master_table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `master_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Relation table';

--
-- Dumping data for table `pma__relation`
--

INSERT INTO `pma__relation` (`master_db`, `master_table`, `master_field`, `foreign_db`, `foreign_table`, `foreign_field`) VALUES
('cake_tp_1', 'cake_tp_1.stores', 'user_id', 'cake_tp_1', 'cake_tp_1.users', 'id');

-- --------------------------------------------------------

--
-- Table structure for table `pma__savedsearches`
--

CREATE TABLE `pma__savedsearches` (
  `id` int(5) UNSIGNED NOT NULL,
  `username` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `search_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `search_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Saved searches';

-- --------------------------------------------------------

--
-- Table structure for table `pma__table_coords`
--

CREATE TABLE `pma__table_coords` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `pdf_page_number` int(11) NOT NULL DEFAULT '0',
  `x` float UNSIGNED NOT NULL DEFAULT '0',
  `y` float UNSIGNED NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Table coordinates for phpMyAdmin PDF output';

--
-- Dumping data for table `pma__table_coords`
--

INSERT INTO `pma__table_coords` (`db_name`, `table_name`, `pdf_page_number`, `x`, `y`) VALUES
('cake_tp_1', 'products', 1, 382, 50),
('cake_tp_1', 'products_stores', 1, 449, 239),
('cake_tp_1', 'stores', 1, 426, 449),
('cake_tp_1', 'users', 1, 141, 428);

-- --------------------------------------------------------

--
-- Table structure for table `pma__table_info`
--

CREATE TABLE `pma__table_info` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `display_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Table information for phpMyAdmin';

--
-- Dumping data for table `pma__table_info`
--

INSERT INTO `pma__table_info` (`db_name`, `table_name`, `display_field`) VALUES
('cake_tp_1', 'stores', 'name');

-- --------------------------------------------------------

--
-- Table structure for table `pma__table_uiprefs`
--

CREATE TABLE `pma__table_uiprefs` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `prefs` text COLLATE utf8_bin NOT NULL,
  `last_update` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Tables'' UI preferences';

-- --------------------------------------------------------

--
-- Table structure for table `pma__tracking`
--

CREATE TABLE `pma__tracking` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `version` int(10) UNSIGNED NOT NULL,
  `date_created` datetime NOT NULL,
  `date_updated` datetime NOT NULL,
  `schema_snapshot` text COLLATE utf8_bin NOT NULL,
  `schema_sql` text COLLATE utf8_bin,
  `data_sql` longtext COLLATE utf8_bin,
  `tracking` set('UPDATE','REPLACE','INSERT','DELETE','TRUNCATE','CREATE DATABASE','ALTER DATABASE','DROP DATABASE','CREATE TABLE','ALTER TABLE','RENAME TABLE','DROP TABLE','CREATE INDEX','DROP INDEX','CREATE VIEW','ALTER VIEW','DROP VIEW') COLLATE utf8_bin DEFAULT NULL,
  `tracking_active` int(1) UNSIGNED NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Database changes tracking for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__userconfig`
--

CREATE TABLE `pma__userconfig` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `timevalue` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `config_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='User preferences storage for phpMyAdmin';

--
-- Dumping data for table `pma__userconfig`
--

INSERT INTO `pma__userconfig` (`username`, `config_data`) VALUES
('root', '{\"Console\\/Mode\":\"show\",\"Console\\/Height\":0}');

-- --------------------------------------------------------

--
-- Table structure for table `pma__usergroups`
--

CREATE TABLE `pma__usergroups` (
  `usergroup` varchar(64) COLLATE utf8_bin NOT NULL,
  `tab` varchar(64) COLLATE utf8_bin NOT NULL,
  `allowed` enum('Y','N') COLLATE utf8_bin NOT NULL DEFAULT 'N'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='User groups with configured menu items';

-- --------------------------------------------------------

--
-- Table structure for table `pma__users`
--

CREATE TABLE `pma__users` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `usergroup` varchar(64) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Users and their assignments to user groups';

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pma__bookmark`
--
ALTER TABLE `pma__bookmark`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pma__central_columns`
--
ALTER TABLE `pma__central_columns`
  ADD PRIMARY KEY (`db_name`,`col_name`);

--
-- Indexes for table `pma__column_info`
--
ALTER TABLE `pma__column_info`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `db_name` (`db_name`,`table_name`,`column_name`);

--
-- Indexes for table `pma__designer_settings`
--
ALTER TABLE `pma__designer_settings`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma__export_templates`
--
ALTER TABLE `pma__export_templates`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `u_user_type_template` (`username`,`export_type`,`template_name`);

--
-- Indexes for table `pma__favorite`
--
ALTER TABLE `pma__favorite`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma__history`
--
ALTER TABLE `pma__history`
  ADD PRIMARY KEY (`id`),
  ADD KEY `username` (`username`,`db`,`table`,`timevalue`);

--
-- Indexes for table `pma__navigationhiding`
--
ALTER TABLE `pma__navigationhiding`
  ADD PRIMARY KEY (`username`,`item_name`,`item_type`,`db_name`,`table_name`);

--
-- Indexes for table `pma__pdf_pages`
--
ALTER TABLE `pma__pdf_pages`
  ADD PRIMARY KEY (`page_nr`),
  ADD KEY `db_name` (`db_name`);

--
-- Indexes for table `pma__recent`
--
ALTER TABLE `pma__recent`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma__relation`
--
ALTER TABLE `pma__relation`
  ADD PRIMARY KEY (`master_db`,`master_table`,`master_field`),
  ADD KEY `foreign_field` (`foreign_db`,`foreign_table`);

--
-- Indexes for table `pma__savedsearches`
--
ALTER TABLE `pma__savedsearches`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `u_savedsearches_username_dbname` (`username`,`db_name`,`search_name`);

--
-- Indexes for table `pma__table_coords`
--
ALTER TABLE `pma__table_coords`
  ADD PRIMARY KEY (`db_name`,`table_name`,`pdf_page_number`);

--
-- Indexes for table `pma__table_info`
--
ALTER TABLE `pma__table_info`
  ADD PRIMARY KEY (`db_name`,`table_name`);

--
-- Indexes for table `pma__table_uiprefs`
--
ALTER TABLE `pma__table_uiprefs`
  ADD PRIMARY KEY (`username`,`db_name`,`table_name`);

--
-- Indexes for table `pma__tracking`
--
ALTER TABLE `pma__tracking`
  ADD PRIMARY KEY (`db_name`,`table_name`,`version`);

--
-- Indexes for table `pma__userconfig`
--
ALTER TABLE `pma__userconfig`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma__usergroups`
--
ALTER TABLE `pma__usergroups`
  ADD PRIMARY KEY (`usergroup`,`tab`,`allowed`);

--
-- Indexes for table `pma__users`
--
ALTER TABLE `pma__users`
  ADD PRIMARY KEY (`username`,`usergroup`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pma__bookmark`
--
ALTER TABLE `pma__bookmark`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pma__column_info`
--
ALTER TABLE `pma__column_info`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pma__export_templates`
--
ALTER TABLE `pma__export_templates`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pma__history`
--
ALTER TABLE `pma__history`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pma__pdf_pages`
--
ALTER TABLE `pma__pdf_pages`
  MODIFY `page_nr` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pma__savedsearches`
--
ALTER TABLE `pma__savedsearches`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
