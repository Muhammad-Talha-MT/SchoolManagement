-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 12, 2019 at 09:37 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ci_crud`
--
CREATE DATABASE IF NOT EXISTS `ci_crud` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `ci_crud`;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `last_signin` int(11) DEFAULT NULL,
  `created_date` int(11) NOT NULL,
  `ip` varchar(255) DEFAULT NULL,
  `verification_key` varchar(255) NOT NULL,
  `admin_group` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `address2` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `state` varchar(255) DEFAULT NULL,
  `zip` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `email`, `last_signin`, `created_date`, `ip`, `verification_key`, `admin_group`, `name`, `address`, `address2`, `city`, `state`, `zip`) VALUES
(1, 'admin', 'a1fa99a1724242d0931d4f9c62dd56a6', 'support@lenapo.com', 2147483647, 123132121, '127.0.0.1', 'dfasdfa3a33a', 1, 'Joseph Opanel', NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `admin_groups`
--

CREATE TABLE `admin_groups` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_groups`
--

INSERT INTO `admin_groups` (`id`, `name`) VALUES
(1, 'Administrator');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `name`, `email`, `date`) VALUES
(2, 'Muhammad Hammad', 'zain5242@outlook.com', '2019-07-06'),
(4, 'Ahsan Ul haq', 'ahsanulhaq', '2019-07-05'),
(5, 'Ahsan Ul haq', 'muhammadbilalshahidszh@yahoo.com', '2019-07-05'),
(6, 'Usman Javed', 'Usmanchaudhry1810@gmail.com', '2019-07-05'),
(8, 'Muhammad Talha', 'zain5242@outlook.com', '2019-07-06'),
(9, 'Google I/O', 'googleio@gmail.com', '2019-07-06'),
(10, 'Usman Javed', 'ahsanulhaq@gmail.com', '2019-07-06');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin_groups`
--
ALTER TABLE `admin_groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `admin_groups`
--
ALTER TABLE `admin_groups`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- Database: `data_base1`
--
CREATE DATABASE IF NOT EXISTS `data_base1` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `data_base1`;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(3, '2019_03_26_175913_project', 2),
(5, '2014_10_12_000000_create_users_table', 3),
(6, '2014_10_12_100000_create_password_resets_table', 3),
(7, '2019_03_26_180213_create_project_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `title`, `description`, `created_at`, `updated_at`) VALUES
(2, 'Jazim Abbas Hafiz', 'Jazim Abbas is nice boy Hello how are you', '2019-03-27 00:30:50', '2019-04-03 05:19:29'),
(4, 'Muhammad ismail bashir', 'good teacher', '2019-03-28 02:38:18', '2019-03-30 10:00:01'),
(5, 'Hafeez', 'Batting good', '2019-03-30 13:03:47', '2019-03-30 13:03:47'),
(7, 'Professional Web-based software developer', 'kljkjklj', '2019-03-30 23:35:55', '2019-03-30 23:35:55'),
(8, 'Hy Brother', 'THeis is ML', '2019-03-31 03:48:57', '2019-03-31 03:48:57'),
(11, 'Muhammad ismail', 'hello sir', '2019-04-03 05:29:15', '2019-04-03 05:29:15');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

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
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- Database: `login_test`
--
CREATE DATABASE IF NOT EXISTS `login_test` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `login_test`;

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE `city` (
  `id` int(10) NOT NULL,
  `cityNam` varchar(255) NOT NULL,
  `countryId` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`id`, `cityNam`, `countryId`) VALUES
(1, 'Lahore', 1),
(2, 'Islamabad', 1),
(3, 'Karachi', 1),
(4, 'Dehli', 2),
(5, 'Mumbai', 2),
(6, 'Kolkata', 2),
(7, 'Komela', 3),
(8, 'Dhaka', 3),
(9, 'Chitagong', 3),
(10, 'Colombo', 4),
(11, 'Humbantota', 4);

-- --------------------------------------------------------

--
-- Table structure for table `country`
--

CREATE TABLE `country` (
  `id` int(10) NOT NULL,
  `countryNam` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `country`
--

INSERT INTO `country` (`id`, `countryNam`) VALUES
(1, 'Pakistan'),
(2, 'India'),
(3, 'Bangaladash'),
(4, 'Srilanka');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(10) NOT NULL,
  `login` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `login`, `password`, `name`, `city`) VALUES
(1, 'talha112@uet', 'cs112@uet', 'Talha', '0'),
(2, 'hammad@2005', '12345', 'Hammad', '0'),
(4, 'ammar@pucit', '111@pucit', 'Hafiz Ammar', '0'),
(5, 'ammar@pucit', '111@pucit', 'Hafiz Ammar', '0');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `country`
--
ALTER TABLE `country`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `city`
--
ALTER TABLE `city`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `country`
--
ALTER TABLE `country`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- Database: `phpmyadmin`
--
CREATE DATABASE IF NOT EXISTS `phpmyadmin` DEFAULT CHARACTER SET utf8 COLLATE utf8_bin;
USE `phpmyadmin`;

-- --------------------------------------------------------

--
-- Table structure for table `pma__bookmark`
--

CREATE TABLE `pma__bookmark` (
  `id` int(11) NOT NULL,
  `dbase` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `user` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `label` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
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
  `comment` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `mimetype` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
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

--
-- Dumping data for table `pma__export_templates`
--

INSERT INTO `pma__export_templates` (`id`, `username`, `export_type`, `template_name`, `template_data`) VALUES
(1, 'root', 'server', 'sms', '{\"quick_or_custom\":\"quick\",\"what\":\"sql\",\"db_select[]\":[\"ci_crud\",\"data_base1\",\"login_test\",\"phpmyadmin\",\"school_mangement\",\"shop\",\"sql1\",\"student_data\"],\"aliases_new\":\"\",\"output_format\":\"sendit\",\"filename_template\":\"@SERVER@\",\"remember_template\":\"on\",\"charset\":\"utf-8\",\"compression\":\"none\",\"maxsize\":\"\",\"codegen_structure_or_data\":\"data\",\"codegen_format\":\"0\",\"csv_separator\":\",\",\"csv_enclosed\":\"\\\"\",\"csv_escaped\":\"\\\"\",\"csv_terminated\":\"AUTO\",\"csv_null\":\"NULL\",\"csv_structure_or_data\":\"data\",\"excel_null\":\"NULL\",\"excel_columns\":\"something\",\"excel_edition\":\"win\",\"excel_structure_or_data\":\"data\",\"json_structure_or_data\":\"data\",\"json_unicode\":\"something\",\"latex_caption\":\"something\",\"latex_structure_or_data\":\"structure_and_data\",\"latex_structure_caption\":\"Structure of table @TABLE@\",\"latex_structure_continued_caption\":\"Structure of table @TABLE@ (continued)\",\"latex_structure_label\":\"tab:@TABLE@-structure\",\"latex_relation\":\"something\",\"latex_comments\":\"something\",\"latex_mime\":\"something\",\"latex_columns\":\"something\",\"latex_data_caption\":\"Content of table @TABLE@\",\"latex_data_continued_caption\":\"Content of table @TABLE@ (continued)\",\"latex_data_label\":\"tab:@TABLE@-data\",\"latex_null\":\"\\\\textit{NULL}\",\"mediawiki_structure_or_data\":\"data\",\"mediawiki_caption\":\"something\",\"mediawiki_headers\":\"something\",\"htmlword_structure_or_data\":\"structure_and_data\",\"htmlword_null\":\"NULL\",\"ods_null\":\"NULL\",\"ods_structure_or_data\":\"data\",\"odt_structure_or_data\":\"structure_and_data\",\"odt_relation\":\"something\",\"odt_comments\":\"something\",\"odt_mime\":\"something\",\"odt_columns\":\"something\",\"odt_null\":\"NULL\",\"pdf_report_title\":\"\",\"pdf_structure_or_data\":\"data\",\"phparray_structure_or_data\":\"data\",\"sql_include_comments\":\"something\",\"sql_header_comment\":\"\",\"sql_use_transaction\":\"something\",\"sql_compatibility\":\"NONE\",\"sql_structure_or_data\":\"structure_and_data\",\"sql_create_table\":\"something\",\"sql_auto_increment\":\"something\",\"sql_create_view\":\"something\",\"sql_create_trigger\":\"something\",\"sql_backquotes\":\"something\",\"sql_type\":\"INSERT\",\"sql_insert_syntax\":\"both\",\"sql_max_query_size\":\"50000\",\"sql_hex_for_binary\":\"something\",\"sql_utc_time\":\"something\",\"texytext_structure_or_data\":\"structure_and_data\",\"texytext_null\":\"NULL\",\"yaml_structure_or_data\":\"data\",\"\":null,\"as_separate_files\":null,\"csv_removeCRLF\":null,\"csv_columns\":null,\"excel_removeCRLF\":null,\"json_pretty_print\":null,\"htmlword_columns\":null,\"ods_columns\":null,\"sql_dates\":null,\"sql_relation\":null,\"sql_mime\":null,\"sql_disable_fk\":null,\"sql_views_as_tables\":null,\"sql_metadata\":null,\"sql_drop_database\":null,\"sql_drop_table\":null,\"sql_if_not_exists\":null,\"sql_procedure_function\":null,\"sql_truncate\":null,\"sql_delayed\":null,\"sql_ignore\":null,\"texytext_columns\":null}');

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
  `page_descr` varchar(50) CHARACTER SET utf8 NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='PDF relation pages for phpMyAdmin';

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
('root', '[{\"db\":\"school_mangement\",\"table\":\"tbSubjectResult\"},{\"db\":\"school_mangement\",\"table\":\"tbSubject\"},{\"db\":\"school_mangement\",\"table\":\"tbFee\"},{\"db\":\"school_mangement\",\"table\":\"tbClass\"},{\"db\":\"school_mangement\",\"table\":\"tbAttendance\"},{\"db\":\"school_mangement\",\"table\":\"tbStudent\"},{\"db\":\"school_mangement\",\"table\":\"tbstudent\"},{\"db\":\"school_mangement\",\"table\":\"tbuser\"},{\"db\":\"School_Mangement\",\"table\":\"tbUser\"},{\"db\":\"ci_crud\",\"table\":\"users\"}]');

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

-- --------------------------------------------------------

--
-- Table structure for table `pma__table_info`
--

CREATE TABLE `pma__table_info` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `display_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Table information for phpMyAdmin';

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

--
-- Dumping data for table `pma__table_uiprefs`
--

INSERT INTO `pma__table_uiprefs` (`username`, `db_name`, `table_name`, `prefs`, `last_update`) VALUES
('root', 'login_test', 'user', '{\"sorted_col\":\"`user`.`password`  DESC\"}', '2019-07-04 07:53:44');

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

INSERT INTO `pma__userconfig` (`username`, `timevalue`, `config_data`) VALUES
('root', '2019-10-12 07:30:58', '{\"Console\\/Mode\":\"collapse\",\"NavigationWidth\":242}');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pma__column_info`
--
ALTER TABLE `pma__column_info`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pma__export_templates`
--
ALTER TABLE `pma__export_templates`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pma__history`
--
ALTER TABLE `pma__history`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pma__pdf_pages`
--
ALTER TABLE `pma__pdf_pages`
  MODIFY `page_nr` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pma__savedsearches`
--
ALTER TABLE `pma__savedsearches`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- Database: `school_mangement`
--
CREATE DATABASE IF NOT EXISTS `school_mangement` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `school_mangement`;

-- --------------------------------------------------------

--
-- Table structure for table `tbattendance`
--

CREATE TABLE `tbattendance` (
  `id` int(11) NOT NULL,
  `studentId` int(11) NOT NULL,
  `attendanceDate` date NOT NULL,
  `attendanded` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbclass`
--

CREATE TABLE `tbclass` (
  `id` int(110) NOT NULL,
  `className` varchar(255) NOT NULL,
  `fee` int(110) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbfee`
--

CREATE TABLE `tbfee` (
  `id` int(11) NOT NULL,
  `classId` int(11) NOT NULL,
  `studentId` int(11) NOT NULL,
  `month` int(11) NOT NULL,
  `recievedDate` date NOT NULL,
  `recievedBy` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbstudent`
--

CREATE TABLE `tbstudent` (
  `id` int(110) NOT NULL,
  `studentName` varchar(255) NOT NULL,
  `fatherName` varchar(255) NOT NULL,
  `studentCnic` varchar(255) NOT NULL,
  `fatherCnic` varchar(255) NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(255) NOT NULL,
  `cellNumber` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `admissionBy` int(110) NOT NULL,
  `admissionDate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbsubject`
--

CREATE TABLE `tbsubject` (
  `id` int(110) NOT NULL,
  `subjectName` varchar(255) NOT NULL,
  `classId` int(100) NOT NULL,
  `totalMarks` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbsubjectresult`
--

CREATE TABLE `tbsubjectresult` (
  `id` int(100) NOT NULL,
  `subjectId` int(100) NOT NULL,
  `studentId` int(100) NOT NULL,
  `obtainedMarks` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbuser`
--

CREATE TABLE `tbuser` (
  `id` int(11) NOT NULL,
  `userName` varchar(50) NOT NULL,
  `passsword` varchar(50) NOT NULL,
  `createdDate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbattendance`
--
ALTER TABLE `tbattendance`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbclass`
--
ALTER TABLE `tbclass`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbfee`
--
ALTER TABLE `tbfee`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbstudent`
--
ALTER TABLE `tbstudent`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbsubject`
--
ALTER TABLE `tbsubject`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbsubjectresult`
--
ALTER TABLE `tbsubjectresult`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbuser`
--
ALTER TABLE `tbuser`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbattendance`
--
ALTER TABLE `tbattendance`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbclass`
--
ALTER TABLE `tbclass`
  MODIFY `id` int(110) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbfee`
--
ALTER TABLE `tbfee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbstudent`
--
ALTER TABLE `tbstudent`
  MODIFY `id` int(110) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbsubject`
--
ALTER TABLE `tbsubject`
  MODIFY `id` int(110) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbsubjectresult`
--
ALTER TABLE `tbsubjectresult`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbuser`
--
ALTER TABLE `tbuser`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- Database: `shop`
--
CREATE DATABASE IF NOT EXISTS `shop` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `shop`;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(100) NOT NULL,
  `userName` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `userName`, `email`, `password`) VALUES
(1, 'Muhamad Talha', 'mmm@gmial.com', 'hhh'),
(4, 'Toseef Afzal', 'toseefafzal11212@gmail.com', '1234'),
(5, 'Muhamad javed', 'm.javid@gmail.com', '123'),
(6, 'waseem', 'waseem@gmail.com', 'waseem@123'),
(7, 'waseem1', 'waseem1@gmail.com', 'waseem1@123'),
(8, 'waseem1', 'waseem1@gmail.com', 'waseem1@123'),
(9, 'Hammad Ismail', 'hammadismail905@gmail.com', 'cs112@uet'),
(10, 'Hammad Ismail', 'hammadismail@gmail.com', 'cs112@uet');

-- --------------------------------------------------------

--
-- Table structure for table `attributes`
--

CREATE TABLE `attributes` (
  `Id` bigint(20) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Description` text NOT NULL,
  `Status` smallint(6) NOT NULL,
  `CreatedBy` int(11) NOT NULL,
  `CreatedDate` date NOT NULL,
  `ModifiedBy` int(11) NOT NULL,
  `ModifiedDate` int(11) NOT NULL,
  `inputType` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `attributes`
--

INSERT INTO `attributes` (`Id`, `Name`, `Description`, `Status`, `CreatedBy`, `CreatedDate`, `ModifiedBy`, `ModifiedDate`, `inputType`) VALUES
(5, 'Back Color', 'jjj', 33, 1, '2019-07-24', 1, 2019, 'checkBox'),
(6, 'Color', 'this is color', 88, 1, '2019-07-24', 1, 2019, 'text');

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int(23) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `title` text NOT NULL,
  `quote` text NOT NULL,
  `picture` varchar(255) NOT NULL,
  `createdDate` varchar(244) NOT NULL,
  `createdBy` int(23) NOT NULL,
  `status` int(33) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `name`, `description`, `title`, `quote`, `picture`, `createdDate`, `createdBy`, `status`) VALUES
(1, 'new blog', 'new', '', '', '[\"Toys_For_Girls_1.jpg\"]', '2019-08-08', 5, 0),
(2, 'Unknown printer took a galley book.', '<p style=\"box-sizing: border-box; margin: 0px; padding: 0px; color: #808080; font-family: Raleway, sans-serif; font-size: 14px; letter-spacing: 0.5px; background-color: #ffffff;\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae provid', '<h1 style=\"box-sizing: border-box; margin: 0px; font-size: 24px; font-family: Raleway, sans-serif; font-weight: 500; line-height: 1; color: #ffffff; letter-spacing: 0.5px; text-align: left;\">Faons fade.ashions fade.Fashions fade.</h1>', '<p><span style=\"color: #808080; font-family: Raleway, sans-serif; font-size: 17.5px; letter-spacing: 0.5px; background-color: #ffffff;\">consectetur adipiscing elit. In rutrum odio urna, vitae ultrices mi malesuada ut. Praesent lacus erat, ultricies ut risus nec, pellentesque interdum purus. In mi justo, consectetur tincidunt sapien eget, venenatis volutpat risus. Maecenas eget pretium eros. Integer tincidunt aliquet ligula in vulputate. Ut ut justo facilisis, vulputate augue vel, vestibulum tortor. Nullam varius lacus non porttitor sodales. Vivamus ultricies est vitae pharetra convallis. Sed suscipit, nisi sit amet tempus mollis, mauris ante tempor risu</span></p>', '[\"sub-Img-03.jpg\"]', '2019-08-19', 3, 0),
(3, 'Car Blog ', '<p style=\"box-sizing: border-box; margin: 0px 0px 10px; font-size: 16px; line-height: 1.8em; color: #333333; font-family: \'Open Sans\', sans-serif; background-color: #ffffff;\">The User_Authentication controller handles the Facebook API authentication proce', '<p>This is title of Car Blog</p>', '<p>This quote is my blog</p>', '[\"Baby_Gear_Banner13.jpg\"]', '2019-08-20', 1, 0),
(4, 'Helicopter Blog ', '<p style=\"box-sizing: border-box; margin: 0px 0px 10px; font-size: 16px; line-height: 1.8em; color: #333333; font-family: \'Open Sans\', sans-serif; background-color: #ffffff;\">The User_Authentication controller handles the Facebook API authentication proce', '<p>Blog title</p>', '<p>this is quote</p>', '[\"blog-img-011.jpg\"]', '2019-08-20', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `brand`
--

CREATE TABLE `brand` (
  `Id` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Code` varchar(255) NOT NULL,
  `Description` text NOT NULL,
  `ParentCategoryId` int(11) NOT NULL,
  `Picture` varchar(255) NOT NULL,
  `Published` smallint(6) NOT NULL,
  `ShowOnHomePage` smallint(6) NOT NULL,
  `IncludeTopMenu` smallint(6) NOT NULL,
  `PriceRange` varchar(255) NOT NULL,
  `DisplayOrder` int(11) NOT NULL,
  `Searchenginefriendly` varchar(255) NOT NULL,
  `Metatitle` varchar(255) NOT NULL,
  `Metakeywords` varchar(1000) NOT NULL,
  `Metadescription` text NOT NULL,
  `CreatedBy` int(11) NOT NULL,
  `CreatedDate` datetime NOT NULL,
  `ModifiedBy` int(11) NOT NULL,
  `ModifiedDate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `brand`
--

INSERT INTO `brand` (`Id`, `Name`, `Code`, `Description`, `ParentCategoryId`, `Picture`, `Published`, `ShowOnHomePage`, `IncludeTopMenu`, `PriceRange`, `DisplayOrder`, `Searchenginefriendly`, `Metatitle`, `Metakeywords`, `Metadescription`, `CreatedBy`, `CreatedDate`, `ModifiedBy`, `ModifiedDate`) VALUES
(3, 'hhh', '', '', 0, '<p>You did not select a file to upload.</p>', 0, 0, 0, '', 0, '', '', '', '', 1, '2019-07-10 00:00:00', 0, '0000-00-00 00:00:00'),
(4, 'hhhfgh', '', '', 0, '<p>You did not select a file to upload.</p>', 0, 0, 0, '', 0, '', '', '', '', 1, '2019-07-10 00:00:00', 0, '0000-00-00 00:00:00'),
(5, 'hhhfgh', '', '', 0, '<p>You did not select a file to upload.</p>', 0, 0, 0, '', 0, '', '', '', '', 1, '2019-07-10 00:00:00', 0, '0000-00-00 00:00:00'),
(7, 'nn', '', '', 0, 'C:/xampp/htdocs/toys/upload/ahaha6.PNG', 0, 0, 0, '', 0, '', '', '', '', 1, '2019-07-12 00:00:00', 0, '0000-00-00 00:00:00'),
(8, 'new o', '', '', 0, 'ahaha7.PNG', 0, 0, 0, '', 0, '', '', '', '', 1, '2019-07-12 00:00:00', 0, '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(100) NOT NULL,
  `ProductName` varchar(255) NOT NULL,
  `Price` double NOT NULL,
  `Quantity` int(100) NOT NULL,
  `Picture` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `ProductName`, `Price`, `Quantity`, `Picture`) VALUES
(10, 'talha', 0, 5, '[\"best-seller-img-01.jpg\",\"best-seller-img-02.jpg\"]'),
(11, 'New House', 517, 0, '[\"featured-img-01.jpg\",\"featured-img-1.jpg\",\"featured-img-3.jpg\"]'),
(12, 'toseef', 88, 0, '[\"featured-img-056.jpg\",\"featured-img-5.jpg\"]'),
(16, 'talha', 0, 0, '[\"best-seller-img-01.jpg\",\"best-seller-img-02.jpg\"]');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `Id` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Code` varchar(255) NOT NULL,
  `Description` text NOT NULL,
  `ParentCategoryId` int(11) NOT NULL,
  `Picture` varchar(255) NOT NULL,
  `Published` smallint(6) NOT NULL,
  `ShowOnHomePage` smallint(6) NOT NULL,
  `IncludeTopMenu` smallint(6) NOT NULL,
  `PriceRange` varchar(255) NOT NULL,
  `DisplayOrder` int(11) NOT NULL,
  `Searchenginefriendly` varchar(255) NOT NULL,
  `Metatitle` varchar(255) NOT NULL,
  `Metakeywords` varchar(1000) NOT NULL,
  `Metadescription` text NOT NULL,
  `CreatedBy` int(11) NOT NULL,
  `CreatedDate` datetime NOT NULL,
  `ModifiedBy` int(11) NOT NULL,
  `ModifiedDate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`Id`, `Name`, `Code`, `Description`, `ParentCategoryId`, `Picture`, `Published`, `ShowOnHomePage`, `IncludeTopMenu`, `PriceRange`, `DisplayOrder`, `Searchenginefriendly`, `Metatitle`, `Metakeywords`, `Metadescription`, `CreatedBy`, `CreatedDate`, `ModifiedBy`, `ModifiedDate`) VALUES
(49, 'Toys', '1', '', 0, 'featured-img-62.jpg', 1, 1, 1, '222', 26, 'SEO', 'MK', 'MT', 'Description', 1, '2019-08-02 00:00:00', 0, '0000-00-00 00:00:00'),
(50, 'Toys For Kids', '32', '', 49, 'best-seller-img-022.jpg', 0, 0, 1, '200', 52, 'SEO', 'MK', 'MT', '', 1, '2019-08-02 00:00:00', 0, '2019-08-02 00:00:00'),
(51, 'Baby Care', '2', '', 0, 'featured-img-82.jpg', 1, 1, 1, '300', 84, 'SEO', 'MK', 'MT', '', 1, '2019-08-02 00:00:00', 0, '0000-00-00 00:00:00'),
(52, 'Baby Gear', '3', '33', 0, 'best-seller-img-11.jpg', 1, 1, 1, '400', 52, 'SEO', 'MK', '', '', 1, '2019-08-02 00:00:00', 0, '0000-00-00 00:00:00'),
(53, 'Birthday & Gift', '4', '400', 0, 'featured-img-11.jpg', 1, 1, 1, '200', 52, 'SEO', 'MK', 'MT', '', 1, '2019-08-02 00:00:00', 0, '0000-00-00 00:00:00'),
(54, 'School Supplies', '5', '', 0, 'new-item-img-7.jpg', 1, 1, 1, '500', 52, 'SEO', 'MK', 'MT', '', 1, '2019-08-02 00:00:00', 0, '0000-00-00 00:00:00'),
(55, 'Educational Toys', '433', '544', 49, 'best-seller-img-012.jpg', 1, 1, 1, '200', 220, 'SEO', 'MK', 'MT', '', 1, '2019-08-02 00:00:00', 0, '0000-00-00 00:00:00'),
(56, 'Stuff Toys', '43', '', 50, 'best-seller-img-031.jpg', 1, 1, 1, '200', 67, 'SEO', 'MK', 'MT', '', 1, '2019-08-02 00:00:00', 0, '0000-00-00 00:00:00'),
(57, 'Car Trains & Vehicles', '30', '', 50, 'best-seller-img-3.jpg', 1, 1, 1, '200', 53, 'SEO', 'MK', 'MT', '', 1, '2019-08-02 00:00:00', 0, '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `Id` bigint(20) NOT NULL,
  `UserName` varchar(255) NOT NULL,
  `EmailAddress` varchar(300) NOT NULL,
  `contact` varchar(100) NOT NULL,
  `address` varchar(255) NOT NULL,
  `Password` varchar(300) NOT NULL,
  `CreatedBy` int(11) NOT NULL,
  `ModifiedBy` int(11) NOT NULL,
  `CreatedDate` date NOT NULL,
  `ModifiedDate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`Id`, `UserName`, `EmailAddress`, `contact`, `address`, `Password`, `CreatedBy`, `ModifiedBy`, `CreatedDate`, `ModifiedDate`) VALUES
(3, 'Muhammad Hammad', 'muhammadhammad112@gmail.com', '03234018318', 'mehar chowk jail road lahore', 'hammad123', 1, 1, '2019-07-17', '2019-08-06'),
(5, 'ahmad', 'ahmad@gmail.com', '', '', 'ahmad112', 1, 1, '2019-07-17', '2019-07-17'),
(8, 'Muhammad Talha', 'm.javid@gmail.com', '', '', 'cs112@uet', 1, 0, '2019-07-17', '0000-00-00'),
(9, 'toseef afzal', 'toseefafzal11212@gmail.com', '', '', 'toseef132', 1, 0, '2019-07-17', '0000-00-00'),
(10, 'Muhammad Talha', 'fgag@gmial.com', '03054752512', 'mehar chowk jail road lahore', 'cs112@uet', 1, 0, '2019-08-21', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `discount`
--

CREATE TABLE `discount` (
  `Id` bigint(20) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `DiscountType` varchar(255) NOT NULL,
  `PerFlat` smallint(6) NOT NULL,
  `ReqCuponCode` smallint(6) NOT NULL,
  `StartDate` date NOT NULL,
  `EndDate` date NOT NULL,
  `Status` smallint(6) NOT NULL,
  `CreatedBy` int(11) NOT NULL,
  `CreatedDate` date NOT NULL,
  `ModifiedBy` int(11) NOT NULL,
  `ModifiedDate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `discountproduct`
--

CREATE TABLE `discountproduct` (
  `Id` int(11) NOT NULL,
  `ProductId` bigint(20) NOT NULL,
  `DiscountId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `dynamicpages`
--

CREATE TABLE `dynamicpages` (
  `id` int(100) NOT NULL,
  `picture` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `body` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dynamicpages`
--

INSERT INTO `dynamicpages` (`id`, `picture`, `title`, `body`) VALUES
(1, '', 'About Us', '<h2 style=\"text-align: center;\">Mission</h2>\r\n<p style=\"text-align: center;\">\"Our Mission is to seccure the world\"</p>'),
(2, '', 'About Us', '<h4 style=\"box-sizing: border-box; margin: 0.5em 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 1.375rem; line-height: 1.3636; font-family: AvenirNext, \'Helvetica Neue\', Helvetica, Arial, sans-serif; vertical-align: baseline; color: #33475b; text-align: center;\">Why the \"About Me\" Page Rocks: It\'s data-driven.</h4>\r\n<p style=\"box-sizing: border-box; margin: 1em 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 18px; line-height: inherit; font-family: AvenirNext, \'Helvetica Neue\', Helvetica, Arial, sans-serif; vertical-align: baseline; color: #33475b; text-align: center;\">\"Alright, we might be biased in highlighting this professional, as Aja is our very own SEO strategist at HubSpot. Nonetheless, the ingenuity she brings to the company isn\'t lost on her website\'s \"About Me\" page\"</p>'),
(3, '', 'Our Mission ', '<h2 style=\"text-align: center;\">OUR MISSION</h2>\r\n<p style=\"text-align: center;\">\"Those who never change thier mind, never change anything\"</p>'),
(4, '[\"blog-img-02.jpg\"]', 'About Us', '<p><span style=\"color: #808080; font-family: Raleway, sans-serif; font-size: 14px; letter-spacing: 0.5px; background-color: #ffffff;\">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</span></p>');

-- --------------------------------------------------------

--
-- Table structure for table `giftcard`
--

CREATE TABLE `giftcard` (
  `Id` bigint(20) NOT NULL,
  `Type` varchar(255) NOT NULL,
  `InitialValue` double NOT NULL,
  `Activated` smallint(6) NOT NULL,
  `CuponCode` varchar(255) NOT NULL,
  `RecName` varchar(1000) NOT NULL,
  `RecEmail` varchar(255) NOT NULL,
  `SendName` varchar(1000) NOT NULL,
  `SendEmail` varchar(255) NOT NULL,
  `Message` text NOT NULL,
  `CreatedBy` int(11) NOT NULL,
  `CreatedDate` date NOT NULL,
  `ModifiedBy` int(11) NOT NULL,
  `ModifiedDate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `giftcard`
--

INSERT INTO `giftcard` (`Id`, `Type`, `InitialValue`, `Activated`, `CuponCode`, `RecName`, `RecEmail`, `SendName`, `SendEmail`, `Message`, `CreatedBy`, `CreatedDate`, `ModifiedBy`, `ModifiedDate`) VALUES
(2, '0', 400, 0, 'YcBuBKZQ', 'muhammadtalha1726@gmail.com', 'Talha', 'Hammad', 'hammad@gmail.com', 'Helllo', 1, '2019-07-31', 0, '0000-00-00'),
(3, '0', 48, 0, 'Oth&rI&&', 'muhammadtalha1726@gmail.com', 'Talha', 'Hammad', 'hammad@gmail.com', 'fff', 1, '2019-07-31', 0, '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `id` int(100) NOT NULL,
  `userid` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `subject` text NOT NULL,
  `message` text NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`id`, `userid`, `name`, `email`, `contact`, `subject`, `message`, `date`) VALUES
(1, 3, 'Muhammad Hammad', 'muhammadhammad112@gmail.com', '03234018318', 'Follow Me', 'I haaa', '2019-08-19');

-- --------------------------------------------------------

--
-- Table structure for table `newsitem`
--

CREATE TABLE `newsitem` (
  `id` int(100) NOT NULL,
  `heading` varchar(255) NOT NULL,
  `detail` text NOT NULL,
  `createdDate` date NOT NULL,
  `metaTitle` varchar(255) NOT NULL,
  `metaKeyword` text NOT NULL,
  `metaDescription` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `newsitem`
--

INSERT INTO `newsitem` (`id`, `heading`, `detail`, `createdDate`, `metaTitle`, `metaKeyword`, `metaDescription`) VALUES
(1, 'heading', 'description', '2019-08-16', 'MT', 'MK', 'meta d'),
(3, 'heading 1 2', 'hhh', '2019-08-16', 'MT', 'MK', '');

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `orderId` int(100) NOT NULL,
  `userId` int(100) NOT NULL,
  `orderDate` date NOT NULL,
  `cartGrandTotal` int(240) NOT NULL,
  `contact` int(100) NOT NULL,
  `address` varchar(255) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`orderId`, `userId`, `orderDate`, `cartGrandTotal`, `contact`, `address`, `status`) VALUES
(17, 3, '2019-07-30', 1288, 0, '', 'Shipped'),
(18, 8, '2019-07-30', 2574, 0, '', 'Completed'),
(19, 8, '2019-07-30', 1735, 2147483647, 'Jeef Heights, Gulberg, Lahore', 'Pending'),
(20, 8, '2019-07-30', 645, 2147483647, 'Jeef Heights , Lahore', 'Pending'),
(21, 8, '2019-07-30', 645, 2147483647, 'Jeef Heights , Lahore', 'Shipped'),
(22, 8, '2019-07-30', 645, 2147483647, 'Jeef Heights , Lahore', 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `orderdetail`
--

CREATE TABLE `orderdetail` (
  `orderdetailid` int(11) NOT NULL,
  `orderid` int(11) NOT NULL,
  `productid` int(11) NOT NULL,
  `quantity` int(22) NOT NULL,
  `price` int(100) NOT NULL,
  `discount` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orderdetail`
--

INSERT INTO `orderdetail` (`orderdetailid`, `orderid`, `productid`, `quantity`, `price`, `discount`) VALUES
(1, 7, 68, 1, 0, 0),
(2, 7, 73, 1, 0, 0),
(3, 7, 69, 1, 0, 0),
(4, 8, 88, 3, 22, 0),
(5, 9, 91, 5, 545, 0),
(6, 10, 91, 5, 545, 0),
(7, 11, 91, 5, 545, 0),
(8, 15, 92, 5, 643, 0),
(9, 15, 91, 4, 545, 0),
(10, 16, 91, 5, 545, 0),
(11, 17, 92, 1, 643, 0),
(12, 17, 91, 1, 545, 0),
(13, 18, 91, 1, 545, 0),
(14, 18, 92, 3, 643, 0),
(15, 19, 91, 3, 545, 0),
(16, 20, 91, 1, 545, 0),
(17, 21, 91, 1, 545, 0);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `Id` bigint(20) NOT NULL,
  `Code` varchar(255) NOT NULL,
  `Name` varchar(500) NOT NULL,
  `ShortDescription` text NOT NULL,
  `LongDescription` text NOT NULL,
  `CategoryId` int(11) NOT NULL,
  `BrandId` int(11) DEFAULT NULL,
  `Published` smallint(6) NOT NULL,
  `ShowOnHomePage` smallint(6) NOT NULL,
  `ProductType` varchar(255) NOT NULL,
  `VendorId` int(11) NOT NULL,
  `ReqOtherProduct` smallint(6) NOT NULL,
  `CustomerReview` smallint(6) NOT NULL,
  `AvailStartDate` date NOT NULL,
  `AvailEndDate` date NOT NULL,
  `MarkNew` int(11) NOT NULL,
  `Price` double NOT NULL,
  `OldPrice` double NOT NULL,
  `CostPrice` double NOT NULL,
  `RValue` double NOT NULL,
  `STax` double NOT NULL,
  `STaxPer` float NOT NULL,
  `DisableBuyButton` smallint(6) NOT NULL,
  `DisableWishList` smallint(6) NOT NULL,
  `DownloadAble` smallint(6) NOT NULL,
  `Rental` smallint(6) NOT NULL,
  `SEFriendlyPage` text NOT NULL,
  `MetaTitle` varchar(255) NOT NULL,
  `MetaKeyword` text NOT NULL,
  `CallForPrice` smallint(6) NOT NULL,
  `Discount` double NOT NULL,
  `ShippingEnable` smallint(6) NOT NULL,
  `ShipSep` smallint(6) NOT NULL,
  `AddChargesShip` double NOT NULL,
  `DeliveryTime` varchar(255) NOT NULL,
  `InventoryMethod` varchar(255) NOT NULL,
  `MinCartQty` int(11) NOT NULL,
  `MaxCartQty` int(11) NOT NULL,
  `NotReturnAble` smallint(6) NOT NULL,
  `IsGiftCard` smallint(6) NOT NULL,
  `CreatedBy` int(11) NOT NULL,
  `CreatedDate` date NOT NULL,
  `ModifiedBy` int(11) NOT NULL,
  `ModifiedDate` date NOT NULL,
  `Featured` smallint(6) NOT NULL,
  `BestSeller` smallint(6) NOT NULL,
  `Picture` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`Id`, `Code`, `Name`, `ShortDescription`, `LongDescription`, `CategoryId`, `BrandId`, `Published`, `ShowOnHomePage`, `ProductType`, `VendorId`, `ReqOtherProduct`, `CustomerReview`, `AvailStartDate`, `AvailEndDate`, `MarkNew`, `Price`, `OldPrice`, `CostPrice`, `RValue`, `STax`, `STaxPer`, `DisableBuyButton`, `DisableWishList`, `DownloadAble`, `Rental`, `SEFriendlyPage`, `MetaTitle`, `MetaKeyword`, `CallForPrice`, `Discount`, `ShippingEnable`, `ShipSep`, `AddChargesShip`, `DeliveryTime`, `InventoryMethod`, `MinCartQty`, `MaxCartQty`, `NotReturnAble`, `IsGiftCard`, `CreatedBy`, `CreatedDate`, `ModifiedBy`, `ModifiedDate`, `Featured`, `BestSeller`, `Picture`) VALUES
(91, '', 'hello', '', '', 49, 4, 0, 0, '', 0, 0, 0, '0000-00-00', '0000-00-00', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', '', 0, 0, 0, 0, 0, '', '0', 0, 0, 0, 0, 1, '2019-07-26', 1, '2019-08-07', 0, 0, '[\"best-seller-img-021.jpg\",\"best-seller-img-2.jpg\",\"best-seller-img-048.jpg\",\"best-seller-img-48.jpg\",\"featured-img-059.jpg\",\"featured-img-51.jpg\",\"featured-img-067.jpg\",\"featured-img-61.jpg\"]'),
(92, '', 'talha', 'kjj', '', 49, 5, 0, 0, '', 0, 0, 0, '0000-00-00', '0000-00-00', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', '', 0, 0, 0, 0, 0, '', '0', 0, 0, 0, 0, 1, '2019-07-29', 1, '2019-08-07', 1, 0, '[\"fish-img-01.jpg\",\"fish-img-1.jpg\"]'),
(119, '', 'Helicoper Toy', '', '', 0, 4, 0, 0, '', 0, 0, 0, '0000-00-00', '0000-00-00', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', '', 0, 0, 0, 0, 0, '', '0', 0, 0, 0, 0, 1, '2019-08-07', 1, '2019-08-07', 1, 1, '[\"best-seller-img-03_-_Copy7.jpg\"]'),
(120, '434', 'Helicoper Toy', 'New', 'fast ', 50, 8, 0, 0, 'product type', 1, 0, 0, '2019-08-23', '2019-08-24', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'SEO', 'MK', 'MT', 0, 0, 0, 0, 0, '', '0', 0, 0, 0, 0, 1, '2019-08-08', 1, '2019-08-08', 1, 1, '[\"best-seller-img-25.jpg\",\"best-seller-img-03_-_Copy9.jpg\",\"best-seller-img-35.jpg\"]'),
(121, '', 'new laptop', 'jdjjd', 'ddfasfda', 50, 5, 1, 1, '', 0, 1, 1, '0000-00-00', '0000-00-00', 1, 0, 0, 1, 0, 0, 0, 1, 1, 1, 1, 'SEO', 'MK', 'MT', 1, 0, 1, 1, 0, '', '0', 0, 0, 0, 1, 1, '2019-08-08', 1, '2019-08-08', 1, 1, '[\"Agent-avatar-img-22.png\",\"Agent-avatar-img-35.png\",\"Baby_Gear_Banner11.jpg\",\"baby-of-summer-19-block3.jpg\"]'),
(122, '', 'Toys Car', '', '', 55, 5, 0, 0, '', 0, 0, 0, '0000-00-00', '0000-00-00', 0, 22, 42, 0, 0, 0, 0, 0, 0, 0, 0, '', '', '', 0, 0, 0, 0, 0, '', '0', 0, 0, 0, 0, 1, '2019-08-20', 1, '2019-08-20', 0, 0, '[\"best-seller-img-2_-_Copy1.jpg\",\"best-seller-img-210.jpg\",\"best-seller-img-03_-_Copy11.jpg\"]');

-- --------------------------------------------------------

--
-- Table structure for table `productattributes`
--

CREATE TABLE `productattributes` (
  `Id` bigint(20) NOT NULL,
  `ProductId` bigint(20) NOT NULL,
  `AttributeId` bigint(20) NOT NULL,
  `AttValue` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `productattributes`
--

INSERT INTO `productattributes` (`Id`, `ProductId`, `AttributeId`, `AttValue`) VALUES
(1, 86, 5, '0'),
(2, 86, 6, 'Black'),
(3, 87, 5, '0'),
(4, 87, 6, 'Black'),
(5, 96, 5, '1'),
(6, 96, 6, 'purple'),
(7, 89, 5, '0'),
(8, 89, 6, 'Black'),
(9, 90, 5, '0'),
(10, 90, 6, '1'),
(11, 91, 5, '0'),
(12, 91, 6, '1'),
(13, 92, 5, '1'),
(14, 92, 6, 'Green'),
(15, 93, 5, '0'),
(16, 93, 6, '1'),
(17, 94, 5, '0'),
(18, 94, 6, 'Black'),
(19, 95, 5, '0'),
(20, 95, 6, 'Black'),
(21, 96, 5, '1'),
(22, 96, 6, 'purple'),
(23, 97, 5, '0'),
(24, 97, 6, 'Green'),
(25, 98, 5, '0'),
(26, 98, 6, 'Green'),
(27, 99, 5, '0'),
(28, 99, 6, 'Red'),
(29, 100, 5, '0'),
(30, 100, 6, 'Green'),
(31, 101, 5, '0'),
(32, 101, 6, '1'),
(33, 102, 5, '0'),
(34, 102, 6, '1'),
(35, 103, 5, '0'),
(36, 103, 6, '1'),
(37, 96, 5, '1'),
(38, 96, 6, 'purple'),
(39, 96, 5, '1'),
(40, 96, 6, 'purple'),
(41, 96, 5, '1'),
(42, 96, 6, 'purple'),
(43, 104, 5, '0'),
(44, 104, 6, 'Yellow'),
(45, 111, 5, '0'),
(46, 111, 6, 'greeb'),
(47, 112, 5, '1'),
(48, 112, 6, 'Hala'),
(49, 117, 5, '1'),
(50, 117, 6, 'GREEN'),
(51, 118, 5, 'true'),
(52, 118, 6, 'asdadadasdasd'),
(53, 119, 6, 'Green'),
(54, 120, 6, '1'),
(55, 121, 6, 'purple'),
(56, 122, 6, 'Green');

-- --------------------------------------------------------

--
-- Table structure for table `productpicture`
--

CREATE TABLE `productpicture` (
  `Id` bigint(20) NOT NULL,
  `ProductId` bigint(20) NOT NULL,
  `PicSmall` varchar(1000) NOT NULL,
  `PicLarge` varchar(1000) NOT NULL,
  `Status` smallint(6) NOT NULL,
  `CreatedBy` int(11) NOT NULL,
  `CreatedDate` date NOT NULL,
  `ModifiedBy` int(11) NOT NULL,
  `ModifiedDate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `productreview`
--

CREATE TABLE `productreview` (
  `Id` bigint(20) NOT NULL,
  `ProductId` bigint(20) NOT NULL,
  `CustomerId` bigint(20) NOT NULL,
  `CustomerEmail` varchar(255) NOT NULL,
  `ReviewText` text NOT NULL,
  `ReplyText` text NOT NULL,
  `Rating` int(11) NOT NULL,
  `IsApproved` varchar(110) NOT NULL,
  `CreatedDate` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `productreview`
--

INSERT INTO `productreview` (`Id`, `ProductId`, `CustomerId`, `CustomerEmail`, `ReviewText`, `ReplyText`, `Rating`, `IsApproved`, `CreatedDate`) VALUES
(5, 91, 3, 'muhammadhammad@gmail.com', 'first review', '', 5, 'Approved', 2019),
(6, 91, 3, 'muhammadhammad@gmail.com', 'second review', '', 3, 'Approved', 2019),
(7, 92, 3, 'muhammadhammad@gmail.com', 'Best Item', '', 3, 'Approved', 2019),
(8, 92, 3, 'muhammadhammad@gmail.com', 'new Item', '', 3, 'Approved', 2019),
(9, 92, 3, 'muhammadhammad@gmail.com', 'allaw\r\n', '', 3, 'Approved', 2019),
(10, 92, 3, 'muhammadhammad@gmail.com', 'best item allaw', '', 2, 'Approved', 2019);

-- --------------------------------------------------------

--
-- Table structure for table `productspecification`
--

CREATE TABLE `productspecification` (
  `Id` bigint(20) NOT NULL,
  `ProductId` bigint(20) NOT NULL,
  `SpecificationId` bigint(20) NOT NULL,
  `AttValue` varchar(1000) NOT NULL,
  `Status` smallint(6) NOT NULL,
  `CreatedBy` smallint(6) NOT NULL,
  `CreatedDate` date NOT NULL,
  `ModifiedBy` smallint(6) NOT NULL,
  `ModifiedDate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `producttag`
--

CREATE TABLE `producttag` (
  `Id` bigint(20) NOT NULL,
  `ProductId` bigint(20) NOT NULL,
  `TagId` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `producttag`
--

INSERT INTO `producttag` (`Id`, `ProductId`, `TagId`) VALUES
(19, 103, 3),
(20, 103, 4),
(21, 104, 4),
(22, 104, 5),
(23, 111, 3),
(24, 111, 4),
(27, 112, 3),
(28, 112, 4),
(29, 112, 5),
(30, 112, 6),
(31, 119, 3),
(32, 119, 4),
(33, 119, 5),
(34, 119, 6),
(35, 92, 3),
(36, 92, 4),
(37, 92, 5),
(38, 92, 6),
(41, 120, 3),
(42, 120, 4),
(43, 121, 3),
(44, 121, 4),
(45, 122, 3),
(46, 122, 4),
(47, 122, 5),
(48, 122, 6);

-- --------------------------------------------------------

--
-- Table structure for table `relatedproduct`
--

CREATE TABLE `relatedproduct` (
  `Id` bigint(20) NOT NULL,
  `ProductId` bigint(20) NOT NULL,
  `RelatedProductId` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(100) NOT NULL,
  `bannerName` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `facebook` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `linkedin` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `bannerName`, `address`, `contact`, `facebook`, `email`, `linkedin`) VALUES
(1, 'Baby Land', 'mehar chowk jail road lahore', '03234018318', 'kdklfja', 'm.javid@gmail.com', 'daklfj');

-- --------------------------------------------------------

--
-- Table structure for table `specification`
--

CREATE TABLE `specification` (
  `Id` bigint(20) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Description` text NOT NULL,
  `Status` smallint(6) NOT NULL,
  `CreatedBy` int(11) NOT NULL,
  `CreatedDate` date NOT NULL,
  `ModifiedBy` int(11) NOT NULL,
  `ModifiedDate` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `specification`
--

INSERT INTO `specification` (`Id`, `Name`, `Description`, `Status`, `CreatedBy`, `CreatedDate`, `ModifiedBy`, `ModifiedDate`) VALUES
(2, 'jajaj', 'hahaha', 0, 1, '2019-07-15', 1, 2019);

-- --------------------------------------------------------

--
-- Table structure for table `stores`
--

CREATE TABLE `stores` (
  `id` int(122) NOT NULL,
  `StoreName` varchar(255) NOT NULL,
  `DisplayOrder` int(123) NOT NULL,
  `HostValue` varchar(255) NOT NULL,
  `CompanyName` varchar(255) NOT NULL,
  `CompanyAddress` varchar(255) NOT NULL,
  `CompanyPhone` varchar(255) NOT NULL,
  `CompanyVAT` varchar(255) NOT NULL,
  `URL` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stores`
--

INSERT INTO `stores` (`id`, `StoreName`, `DisplayOrder`, `HostValue`, `CompanyName`, `CompanyAddress`, `CompanyPhone`, `CompanyVAT`, `URL`) VALUES
(2, 'new store', 543, 'dafjka', 'kdjf', 'akdjfka', 'adjfkal', 'dfa', 'http://hahaha.com');

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

CREATE TABLE `tags` (
  `Id` bigint(20) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Description` text NOT NULL,
  `Status` smallint(6) NOT NULL,
  `CreatedBy` int(11) NOT NULL,
  `CreatedDate` date NOT NULL,
  `ModifiedBy` int(11) NOT NULL,
  `ModifiedDate` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tags`
--

INSERT INTO `tags` (`Id`, `Name`, `Description`, `Status`, `CreatedBy`, `CreatedDate`, `ModifiedBy`, `ModifiedDate`) VALUES
(3, 'business', 'jj', 0, 1, '2019-08-05', 1, 2019),
(4, 'clean', '', 0, 1, '2019-08-05', 1, 2019),
(5, 'corporate', '', 0, 1, '2019-08-05', 1, 2019),
(6, 'blog', '', 0, 1, '2019-08-05', 1, 2019);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(100) NOT NULL,
  `userName` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `wishlist`
--

CREATE TABLE `wishlist` (
  `wishlistid` int(100) NOT NULL,
  `userid` int(100) NOT NULL,
  `productid` int(100) NOT NULL,
  `createdDate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wishlist`
--

INSERT INTO `wishlist` (`wishlistid`, `userid`, `productid`, `createdDate`) VALUES
(1, 3, 91, '2019-07-29'),
(2, 3, 91, '2019-07-29'),
(3, 3, 91, '2019-07-29'),
(4, 3, 91, '2019-07-29'),
(5, 3, 91, '2019-07-29'),
(6, 0, 92, '2019-07-30'),
(7, 0, 91, '2019-10-08');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `attributes`
--
ALTER TABLE `attributes`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `brand`
--
ALTER TABLE `brand`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `discount`
--
ALTER TABLE `discount`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `discountproduct`
--
ALTER TABLE `discountproduct`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `dynamicpages`
--
ALTER TABLE `dynamicpages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `giftcard`
--
ALTER TABLE `giftcard`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `newsitem`
--
ALTER TABLE `newsitem`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`orderId`);

--
-- Indexes for table `orderdetail`
--
ALTER TABLE `orderdetail`
  ADD PRIMARY KEY (`orderdetailid`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `productattributes`
--
ALTER TABLE `productattributes`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `productpicture`
--
ALTER TABLE `productpicture`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `productreview`
--
ALTER TABLE `productreview`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `productspecification`
--
ALTER TABLE `productspecification`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `producttag`
--
ALTER TABLE `producttag`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `relatedproduct`
--
ALTER TABLE `relatedproduct`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `specification`
--
ALTER TABLE `specification`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `stores`
--
ALTER TABLE `stores`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wishlist`
--
ALTER TABLE `wishlist`
  ADD PRIMARY KEY (`wishlistid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `attributes`
--
ALTER TABLE `attributes`
  MODIFY `Id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(23) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `brand`
--
ALTER TABLE `brand`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `Id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `discount`
--
ALTER TABLE `discount`
  MODIFY `Id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `discountproduct`
--
ALTER TABLE `discountproduct`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `dynamicpages`
--
ALTER TABLE `dynamicpages`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `giftcard`
--
ALTER TABLE `giftcard`
  MODIFY `Id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `newsitem`
--
ALTER TABLE `newsitem`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `orderId` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `orderdetail`
--
ALTER TABLE `orderdetail`
  MODIFY `orderdetailid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `Id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=123;

--
-- AUTO_INCREMENT for table `productattributes`
--
ALTER TABLE `productattributes`
  MODIFY `Id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `productpicture`
--
ALTER TABLE `productpicture`
  MODIFY `Id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `productreview`
--
ALTER TABLE `productreview`
  MODIFY `Id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `productspecification`
--
ALTER TABLE `productspecification`
  MODIFY `Id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `producttag`
--
ALTER TABLE `producttag`
  MODIFY `Id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `relatedproduct`
--
ALTER TABLE `relatedproduct`
  MODIFY `Id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `specification`
--
ALTER TABLE `specification`
  MODIFY `Id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `stores`
--
ALTER TABLE `stores`
  MODIFY `id` int(122) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tags`
--
ALTER TABLE `tags`
  MODIFY `Id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `wishlist`
--
ALTER TABLE `wishlist`
  MODIFY `wishlistid` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- Database: `sql1`
--
CREATE DATABASE IF NOT EXISTS `sql1` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `sql1`;

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `dob` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `name`, `contact`, `dob`) VALUES
(1, 'Muhammad Talha', '03054752512', '2019-07-16'),
(2, 'Muhammad Bilal', '03433434543', '2019-07-16'),
(3, 'Muhammad Bilal', '03433434543', '2019-07-16'),
(4, 'Muhammad Hammad', '03302234583', '2019-07-26'),
(5, 'Muhammad Ahamd', '03054752512', '0000-00-00'),
(6, 'Muhammad Ahamd', '03054752512', '0000-00-00'),
(7, 'Muhammad Ahamd', '03054752512', '0000-00-00'),
(8, 'Muhammad Ahamd', '03054752512', '2000-04-20'),
(9, 'Muhammad Ahamd', '03054752512', '2000-04-20'),
(10, 'Muhammad Ahamd', '03054752512', '2000-04-20'),
(11, 'Muhammad Ahamd', '03054752512', '2000-04-20'),
(12, 'Muhammad Ahamd', '03054752512', '2000-04-20'),
(13, 'Muhammad Ahamd', '03054752512', '2000-04-20'),
(14, 'Muhammad Ahamd', '03054752512', '2000-04-20'),
(15, 'Muhammad Ahamd', '03054752512', '2000-04-20'),
(16, 'Muhammad Ahamd', '03054752512', '2000-04-20'),
(17, 'Muhammad Ahamd', '03054752512', '2000-04-20'),
(18, 'Muhammad Ahamd', '03054752512', '2000-04-20'),
(19, 'Muhammad Ahamd', '03054752512', '2000-04-20'),
(20, 'Muhammad Ahamd', '03054752512', '2000-04-20'),
(21, 'Muhammad Ahamd', '03054752512', '2000-04-20'),
(22, 'Muhammad Ahamd', '03054752512', '2000-04-20'),
(23, 'Muhammad Ahamd', '03054752512', '2000-04-20'),
(24, 'Muhammad Ahamd', '03054752512', '2000-04-20'),
(25, 'Muhammad Ahamd', '03054752512', '2000-04-20'),
(26, 'Muhammad Ahamd', '03054752512', '2000-04-20'),
(27, 'Muhammad Ahamd', '03054752512', '2000-04-20');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
--
-- Database: `student_data`
--
CREATE DATABASE IF NOT EXISTS `student_data` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `student_data`;

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(100) NOT NULL,
  `name` varchar(255) NOT NULL,
  `father` varchar(255) NOT NULL,
  `dob` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `name`, `father`, `dob`) VALUES
(20, 'haseeb', 'ali', '2019-02-07'),
(21, 'Talha', 'Ismail', '2019-02-14'),
(24, 'Zain Iftikhar', 'Iftikhar', '2019-02-14'),
(25, 'Zain Iftikhar', 'Iftikhar', '2019-02-14'),
(26, 'zain ul abdin', 'amjad', '0000-00-00'),
(27, 'Hahhaa', '', '0000-00-00'),
(28, '', '', '0000-00-00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
