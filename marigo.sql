-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 21, 2020 at 04:25 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `marigo`
--

-- --------------------------------------------------------

--
-- Table structure for table `auth_activation_attempts`
--

CREATE TABLE `auth_activation_attempts` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(255) NOT NULL,
  `user_agent` varchar(255) NOT NULL,
  `token` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `auth_groups`
--

CREATE TABLE `auth_groups` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `auth_groups_permissions`
--

CREATE TABLE `auth_groups_permissions` (
  `group_id` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `permission_id` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `auth_groups_users`
--

CREATE TABLE `auth_groups_users` (
  `group_id` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `user_id` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `auth_logins`
--

CREATE TABLE `auth_logins` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `user_id` int(11) UNSIGNED DEFAULT NULL,
  `date` datetime NOT NULL,
  `success` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `auth_logins`
--

INSERT INTO `auth_logins` (`id`, `ip_address`, `email`, `user_id`, `date`, `success`) VALUES
(1, '::1', 'indofiz@gmail.com', 1, '2020-10-29 16:37:23', 1),
(2, '::1', 'indofiz@gmail.com', 1, '2020-10-29 16:42:32', 1),
(3, '::1', 'indofiz@gmail.com', NULL, '2020-10-29 16:43:02', 0),
(4, '::1', 'indofiz@gmail.com', 1, '2020-10-29 16:43:21', 1);

-- --------------------------------------------------------

--
-- Table structure for table `auth_permissions`
--

CREATE TABLE `auth_permissions` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `auth_reset_attempts`
--

CREATE TABLE `auth_reset_attempts` (
  `id` int(11) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `ip_address` varchar(255) NOT NULL,
  `user_agent` varchar(255) NOT NULL,
  `token` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `auth_tokens`
--

CREATE TABLE `auth_tokens` (
  `id` int(11) UNSIGNED NOT NULL,
  `selector` varchar(255) NOT NULL,
  `hashedValidator` varchar(255) NOT NULL,
  `user_id` int(11) UNSIGNED NOT NULL,
  `expires` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `auth_users_permissions`
--

CREATE TABLE `auth_users_permissions` (
  `user_id` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `permission_id` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `data_pesanan`
--

CREATE TABLE `data_pesanan` (
  `pesanan_id` int(100) NOT NULL,
  `nomor_invoice` varchar(200) NOT NULL,
  `pelanggan_nama` varchar(200) NOT NULL,
  `pelanggan_institusi` varchar(200) NOT NULL,
  `pelanggan_email` varchar(200) NOT NULL,
  `pelanggan_telepon` varchar(100) NOT NULL,
  `pelanggan_asal` varchar(200) NOT NULL,
  `pelanggan_permintaan` text NOT NULL,
  `tour_id` int(100) NOT NULL,
  `total_harga` int(100) NOT NULL,
  `quantity` int(100) NOT NULL,
  `dp` tinyint(1) NOT NULL,
  `status` tinyint(1) DEFAULT NULL,
  `tanggal` date NOT NULL,
  `diskon` int(100) DEFAULT NULL,
  `asuransi` int(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_pesanan`
--

INSERT INTO `data_pesanan` (`pesanan_id`, `nomor_invoice`, `pelanggan_nama`, `pelanggan_institusi`, `pelanggan_email`, `pelanggan_telepon`, `pelanggan_asal`, `pelanggan_permintaan`, `tour_id`, `total_harga`, `quantity`, `dp`, `status`, `tanggal`, `diskon`, `asuransi`) VALUES
(24, '2020-11-19', 'Juliansyah', 'Bithub', 'indofiz@gmail.com', '083175087363', 'dsfwafwaef', '', 81, 10200000, 12, 1, 1, '2020-11-19', NULL, NULL),
(25, '2020-11-25', 'Juliansyah', '', 'indofiz@gmail.com', '083175087363', 'wefawef', '', 81, 2000000, 2, 1, 1, '2020-11-25', NULL, NULL),
(26, '2020-11-25', 'Juliansyah', 'Bithub', 'indofiz@gmail.com', '083175087363', 'weafwafwaf', '', 81, 4500000, 5, 1, 1, '2020-11-25', NULL, NULL),
(27, '2020-11-25', 'Juliansyah', 'Bithub', 'indofiz@gmail.com', '083175087363', 'fewafweaf', '', 81, 4500000, 5, 1, 1, '2020-11-25', NULL, NULL),
(28, '2020-11-26', 'Alfajri', 'Bithub', 'alfajrihilvi14@gmail.com', '083175087363', 'Merapen', '', 81, 2000000, 2, 1, 1, '2020-11-26', NULL, NULL),
(29, '2020-11-25', 'Alfajri', 'Bithub', 'alfajrihulvi14@gmail.com', '083175087363', 'merapen', '', 81, 1000000, 1, 1, 1, '2020-11-25', NULL, NULL),
(30, '2020-11-19', 'Alfajri', 'Bithub', 'alfajrihulvi81@gmail.com', '083175087363', 'merapen', '', 81, 2000000, 2, 0, 0, '2020-11-19', NULL, NULL),
(31, '2020-11-19', 'Juliansyah', 'Bithub', 'indofiz@gmail.com', '083175087363', 'hchxcjhgdcyj', '', 81, 5400000, 6, 1, 1, '2020-11-19', NULL, NULL),
(32, '2020-11-25', 'Juliansyah', 'Bithub', 'indofiz@gmail.com', '083175087363', 'jhfvghfgh', '', 81, 2000000, 2, 0, 0, '2020-11-25', NULL, NULL),
(33, '2020-11-23', 'Juliansyah', 'Bithub', 'indofiz@gmail.com', '083175087363', 'hfghfghdgfhdfgdfg', '', 81, 4500000, 5, 1, 1, '2020-11-23', NULL, NULL),
(34, '2020-11-16', 'Alfajri', 'Bithub', 'alfajrihulvi14@gmail.com', '083175087363', 'ggargawg', '', 81, 7500000, 5, 1, 0, '2020-11-16', NULL, NULL),
(35, '2020-11-16', 'Juliansyah', 'Bithub', 'indofiz@gmail.com', '083175087363', 'fewaf', 'fewafa', 81, 1500000, 5, 1, 0, '2020-11-16', 10, 10000),
(36, '2020-11-16', 'Juliansyah', 'Bithub', 'indofiz@gmail.com', '083175087363', 'faawef', 'fweafw', 81, 890000, 1, 1, 0, '2020-11-16', 10, 10000),
(37, '2020-11-19', 'Juliansyah', 'Bithub', 'indofiz@gmail.com', '083175087363', 'fewafwefweaf', 'wefawefwaf', 81, 890000, 3, 1, 0, '2020-11-19', 10, 10000),
(38, '2020-11-19', 'Juliansyah', 'Bithub', 'indofiz@gmail.com', '083175087363', 'awfwaf', 'wafwafwf', 81, 1340000, 4, 1, 0, '2020-11-19', 10, 10000),
(39, '2020-11-20', 'Juliansyah', 'Bithub', 'indofiz@gmail.com', '083175087363', 'fewafwef', 'wafewefwef', 81, 1340000, 5, 1, 0, '2020-11-20', 10, 10000),
(40, '2020-11-19', 'Juliansyah', 'Bithub', 'indofiz@gmail.com', '083175087363', 'fewafwaef', 'fwaefwefwef', 81, 1790000, 12, 1, 0, '2020-11-19', 10, 10000),
(41, '2020-11-19', 'fweaf', 'fef', 'indofiz@gmail.com', '083175087363', 'weafweaf', 'fwaefwea', 81, 1790000, 21, 1, 0, '2020-11-19', 10, 10000),
(42, '2020-11-19', 'Juliansyah', 'Bithub', 'indofiz@gmail.com', '083175087363', 'fweafwa', 'fwae', 81, 1340000, 5, 1, 0, '2020-11-19', 10, 10000),
(43, '2020-11-20', 'Juliansyah', 'Bithub', 'indofiz@gmail.com', '083175087363', 'fwaefwef', 'fewfawef', 81, 1340000, 5, 1, 0, '2020-11-20', 10, 10000),
(44, '2020-11-19', 'Juliansyah', 'Bithub', 'indofiz@gmail.com', '083175087363', 'fewafew', 'fewafawef', 81, 1340000, 5, 1, 0, '2020-11-19', 10, 10000),
(45, '2020-11-20', 'Juliansyah', 'Bithub', 'indofiz@gmail.com', '083175087363', 'fewafwe', 'fweaf', 81, 1340000, 5, 1, 0, '2020-11-20', 10, 10000),
(46, '2020-11-19', 'Juliansyah', 'Bithub', 'indofiz@gmail.com', '083175087363', 'fawefwe', 'fweafweaf', 81, 1340000, 5, 1, 0, '2020-11-19', 10, 10000),
(47, '2020-11-19', 'Juliansyah', 'Bithub', 'indofiz@gmail.com', '083175087363', 'asfwefawe', 'fwaefweaff', 81, 1340000, 5, 1, 0, '2020-11-19', 10, 10000),
(48, '2020-11-19', 'Juliansyah', 'Bithub', 'indofiz@gmail.com', '083175087363', 'fewaf', 'fweafa', 81, 1340000, 5, 1, 0, '2020-11-19', 10, 10000),
(49, '2020-11-19', 'Juliansyah', 'efawefeawf', 'indofiz@gmail.com', '083175087363', 'ctc', 'ctcc', 81, 1340000, 5, 0, 0, '2020-11-19', 10, 10000),
(50, '2020-11-19', 'Juliansyah', 'Bithub', 'indofiz@gmail.com', '083175087363', 'fewafawef', 'fwefawefwa', 81, 1790000, 8, 1, 0, '2020-11-19', 10, 10000),
(51, '2020-11-20', 'Alfajri', 'Bithub', 'alfajrihulvi14@gmail.com', '083175087363', 'fweafawe', 'fewafawfe', 81, 1340000, 6, 0, 0, '2020-11-20', 10, 10000),
(52, '#TOK601', 'Juliansyah', 'Bithub', 'indofiz@gmail.com', '083175087363', 'fwefwe', '', 81, 1340000, 6, 1, 0, '2020-11-21', 10, 10000),
(53, '#Zru374', 'Juliansyah', 'Bithub', 'indofiz@gmail.com', '083175087363', 'fewafweafweaf', '', 81, 1790000, 44, 0, 0, '2020-11-26', 10, 10000),
(54, 'vPf241', 'Juliansyah', 'Bithub', 'indofiz@gmail.com', '083175087363', 'fewafwaf', '', 81, 890000, 3, 0, 0, '2020-11-19', 10, 10000),
(55, '#GPb026', 'Juliansyah', 'Bithub', 'indofiz@gmail.com', '083175087363', 'fef', '', 81, 1340000, 6, 1, 0, '2020-11-21', 10, 10000);

-- --------------------------------------------------------

--
-- Table structure for table `destinasi`
--

CREATE TABLE `destinasi` (
  `destinasi_id` int(100) NOT NULL,
  `destinasi` varchar(100) NOT NULL,
  `image_destinasi` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `destinasi`
--

INSERT INTO `destinasi` (`destinasi_id`, `destinasi`, `image_destinasi`) VALUES
(55, 'Bangka', '1604386295_a9e9a47c0380609199c1.png'),
(56, 'Belitung', '1604385910_9097343a44eb448d7810.png'),
(57, 'Bandung', '1604385901_21aabf1ead2dd4dd04fa.png'),
(59, 'Lombok', '1604385895_728f82737ba96b5a7493.png'),
(60, 'Palembang', '1604385888_9cce9323af20af0a625a.png'),
(69, 'Bali', '1604386282_a6edeff0a5e209657bcc.png');

-- --------------------------------------------------------

--
-- Table structure for table `durasi`
--

CREATE TABLE `durasi` (
  `durasi_id` int(100) NOT NULL,
  `durasi` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `durasi`
--

INSERT INTO `durasi` (`durasi_id`, `durasi`) VALUES
(1, '3 hari 2 malam'),
(3, '5 hari 4 malam'),
(4, '2 hari 1 malam'),
(7, '4 hari 3 malam');

-- --------------------------------------------------------

--
-- Table structure for table `harga`
--

CREATE TABLE `harga` (
  `harga_id` int(100) NOT NULL,
  `min_orang` int(100) NOT NULL,
  `max_orang` int(100) NOT NULL,
  `harga` int(100) NOT NULL,
  `id_tour` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `harga`
--

INSERT INTO `harga` (`harga_id`, `min_orang`, `max_orang`, `harga`, `id_tour`) VALUES
(7, 213, 213, 123, 72),
(8, 32, 323, 12, 73),
(9, 0, 0, 0, 74),
(10, 213, 213, 123, 75),
(11, 1, 7, 1000000, 76),
(12, 7, 19, 7000000, 76),
(13, 0, 0, 0, 77),
(14, 0, 0, 0, 78),
(242, 0, 0, 0, 79),
(243, 0, 0, 0, 80),
(245, 1, 5, 12000000, 48),
(246, 6, 10, 11000000, 48),
(247, 11, 15, 10000000, 48),
(251, 1, 4, 1000000, 82),
(252, 5, 10, 900000, 82),
(253, 0, 0, 0, 83),
(254, 0, 0, 0, 84),
(263, 0, 0, 0, 85),
(267, 1, 3, 1000000, 81),
(268, 4, 6, 1500000, 81),
(269, 7, 9, 2000000, 81);

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `kategori_id` int(100) NOT NULL,
  `kategori` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`kategori_id`, `kategori`) VALUES
(2, 'HoneyMoon'),
(3, 'Coorporate'),
(4, 'Group'),
(6, 'Family m');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `version` varchar(255) NOT NULL,
  `class` text NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int(11) NOT NULL,
  `batch` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
(1, '2017-11-20-223112', 'Myth\\Auth\\Database\\Migrations\\CreateAuthTables', 'default', 'Myth\\Auth', 1603997246, 1),
(2, '20121031100537', 'App\\Database\\Migrations\\AddUsers', 'default', 'App', 1604233596, 2);

-- --------------------------------------------------------

--
-- Table structure for table `paket_tour`
--

CREATE TABLE `paket_tour` (
  `tour_id` int(100) NOT NULL,
  `tour_judul` varchar(200) NOT NULL,
  `tour_url` varchar(200) NOT NULL,
  `tour_image` text NOT NULL,
  `tour_destinasi` int(100) NOT NULL,
  `tour_durasi` int(100) NOT NULL,
  `tour_kategori` int(100) NOT NULL,
  `tour_jadwal` text DEFAULT NULL,
  `tour_fasilitas` text DEFAULT NULL,
  `tour_diskon` int(100) NOT NULL,
  `tour_asuransi` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `paket_tour`
--

INSERT INTO `paket_tour` (`tour_id`, `tour_judul`, `tour_url`, `tour_image`, `tour_destinasi`, `tour_durasi`, `tour_kategori`, `tour_jadwal`, `tour_fasilitas`, `tour_diskon`, `tour_asuransi`) VALUES
(48, 'Tour Belitung Manggar Tanjung', 'tour-belitung-manggar-tanjung', '1603972504_44e6de2deb649abf9083.png', 56, 4, 2, '<ol><li>Ke pantai</li><li>Ke Belitung</li><li>Makan</li><li>Balik</li></ol>', '<ul><li>Handuk</li><li>Sepatu</li><li>Hotel</li><li>Mobil</li><li>Salto</li></ul>', 0, 0),
(79, 'Belanje', 'belanje', '1604421186_64cfb840397a2aa6a835.png', 69, 7, 6, '', '', 0, 0),
(80, 'Berenang', 'berenang', '1604421212_8d792edbfec2fd9c9f9a.png', 59, 3, 4, '', '', 0, 0),
(81, 'Gi nyemak', 'gi-nyemak', '1604421231_66beae820fb469ce6147.png', 57, 3, 3, '', '', 10, 10000),
(82, 'Merajuk', 'merajuk', '1605347990_554724b2e11d54ae932e.png', 57, 3, 3, '', '', 0, 0),
(83, 'Merajuk agik', 'merajuk-agik', '1605348036_a3f96139bb41c8286f50.png', 59, 3, 3, '', '', 0, 0),
(84, 'Merajuk agik 2', 'merajuk-agik-2', '1605348182_ce90f47cb9b34cd1e5a4.png', 57, 7, 6, '<ul><li>fweaf</li><li>fwaefwaef</li><li>ewafwef</li></ul>', '<ul><li>fweafawef</li><li>fwaefwaf</li><li>wefwaf</li></ul>', 0, 0),
(85, 'Laporan WOi', 'laporan-woi', '1605348234_4c84b3e5ec37f71aaaa8.png', 55, 7, 6, '<ul><li>fewaf</li><li>fewaf</li><li>fweaf</li></ul>', '<ul><li>fewafw</li><li>wefawef</li><li>wfawef</li><li>fwaefwaef</li><li>makan</li><li>salto</li></ul>', 2321, 123213);

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `produk_id` int(100) NOT NULL,
  `produk_judul` varchar(100) NOT NULL,
  `kode_produk` varchar(200) NOT NULL,
  `produk_stok` int(100) NOT NULL,
  `produk_harga` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `email`, `password`, `created_at`, `updated_at`) VALUES
(2, 'Marigo', 'Trip', 'marigo@gmail.com', '$2y$10$EJT5.ltmdLqzn4rQgnBlHuosl8SCLml3vjLIGiFiDt4J9L4tqrHb.', '2020-11-12 01:11:43', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `auth_activation_attempts`
--
ALTER TABLE `auth_activation_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auth_groups`
--
ALTER TABLE `auth_groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auth_groups_permissions`
--
ALTER TABLE `auth_groups_permissions`
  ADD KEY `auth_groups_permissions_permission_id_foreign` (`permission_id`),
  ADD KEY `group_id_permission_id` (`group_id`,`permission_id`);

--
-- Indexes for table `auth_groups_users`
--
ALTER TABLE `auth_groups_users`
  ADD KEY `auth_groups_users_user_id_foreign` (`user_id`),
  ADD KEY `group_id_user_id` (`group_id`,`user_id`);

--
-- Indexes for table `auth_logins`
--
ALTER TABLE `auth_logins`
  ADD PRIMARY KEY (`id`),
  ADD KEY `email` (`email`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `auth_permissions`
--
ALTER TABLE `auth_permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auth_reset_attempts`
--
ALTER TABLE `auth_reset_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auth_tokens`
--
ALTER TABLE `auth_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `auth_tokens_user_id_foreign` (`user_id`),
  ADD KEY `selector` (`selector`);

--
-- Indexes for table `auth_users_permissions`
--
ALTER TABLE `auth_users_permissions`
  ADD KEY `auth_users_permissions_permission_id_foreign` (`permission_id`),
  ADD KEY `user_id_permission_id` (`user_id`,`permission_id`);

--
-- Indexes for table `data_pesanan`
--
ALTER TABLE `data_pesanan`
  ADD PRIMARY KEY (`pesanan_id`),
  ADD KEY `tour_id` (`tour_id`);

--
-- Indexes for table `destinasi`
--
ALTER TABLE `destinasi`
  ADD PRIMARY KEY (`destinasi_id`);

--
-- Indexes for table `durasi`
--
ALTER TABLE `durasi`
  ADD PRIMARY KEY (`durasi_id`);

--
-- Indexes for table `harga`
--
ALTER TABLE `harga`
  ADD PRIMARY KEY (`harga_id`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`kategori_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `paket_tour`
--
ALTER TABLE `paket_tour`
  ADD PRIMARY KEY (`tour_id`),
  ADD KEY `tour_destinasi` (`tour_destinasi`),
  ADD KEY `tour_durasi` (`tour_durasi`),
  ADD KEY `tour_kategori` (`tour_kategori`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`produk_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `auth_activation_attempts`
--
ALTER TABLE `auth_activation_attempts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `auth_groups`
--
ALTER TABLE `auth_groups`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `auth_logins`
--
ALTER TABLE `auth_logins`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `auth_permissions`
--
ALTER TABLE `auth_permissions`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `auth_reset_attempts`
--
ALTER TABLE `auth_reset_attempts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `auth_tokens`
--
ALTER TABLE `auth_tokens`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `data_pesanan`
--
ALTER TABLE `data_pesanan`
  MODIFY `pesanan_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `destinasi`
--
ALTER TABLE `destinasi`
  MODIFY `destinasi_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT for table `durasi`
--
ALTER TABLE `durasi`
  MODIFY `durasi_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `harga`
--
ALTER TABLE `harga`
  MODIFY `harga_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=270;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `kategori_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `paket_tour`
--
ALTER TABLE `paket_tour`
  MODIFY `tour_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=86;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `produk_id` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `auth_groups_permissions`
--
ALTER TABLE `auth_groups_permissions`
  ADD CONSTRAINT `auth_groups_permissions_group_id_foreign` FOREIGN KEY (`group_id`) REFERENCES `auth_groups` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `auth_groups_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `auth_permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `auth_groups_users`
--
ALTER TABLE `auth_groups_users`
  ADD CONSTRAINT `auth_groups_users_group_id_foreign` FOREIGN KEY (`group_id`) REFERENCES `auth_groups` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `auth_groups_users_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `auth_tokens`
--
ALTER TABLE `auth_tokens`
  ADD CONSTRAINT `auth_tokens_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `auth_users_permissions`
--
ALTER TABLE `auth_users_permissions`
  ADD CONSTRAINT `auth_users_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `auth_permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `auth_users_permissions_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
