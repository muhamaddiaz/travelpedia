-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 20, 2018 at 11:09 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pariwisata`
--

-- --------------------------------------------------------

--
-- Table structure for table `hotel`
--

CREATE TABLE `hotel` (
  `id_hotel` int(10) UNSIGNED NOT NULL,
  `nama_hotel` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi_hotel` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `lokasi_hotel` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `link_image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `kapasitas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `hotel`
--

INSERT INTO `hotel` (`id_hotel`, `nama_hotel`, `deskripsi_hotel`, `lokasi_hotel`, `link_image`, `kapasitas`) VALUES
(1, 'Louis Kienne', 'Salah satu hotel mewah berbintang 4 \n                                  di semarang lokasi di strategis di \n                                  tengah kota', 'Semarang', 'https://bit.ly/2q3oQmx', 40),
(2, 'Hotel Mawar', 'Hotel yang ada di bandung', 'Bandung', 'bit.ly', 20),
(3, 'JW Marriot', 'Hotel yang berada di ibukota jakarta', 'Jakarta', 'bit.ly', 30),
(4, 'Hotel Melati', 'Hotel yang berada di semarang', 'Semarang', 'bit.ly', 30);

-- --------------------------------------------------------

--
-- Table structure for table `komentar`
--

CREATE TABLE `komentar` (
  `id_komentar` int(10) UNSIGNED NOT NULL,
  `id_wisata` int(11) UNSIGNED NOT NULL,
  `id_user` int(11) UNSIGNED NOT NULL,
  `isi_komentar` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `komentar`
--

INSERT INTO `komentar` (`id_komentar`, `id_wisata`, `id_user`, `isi_komentar`) VALUES
(5, 1, 3, 'barbar'),
(7, 1, 2, 'hayu lah'),
(8, 1, 3, 'komen'),
(9, 3, 2, 'Bagus nih'),
(10, 3, 1, 'hai'),
(11, 1, 1, 'Coba komen'),
(12, 2, 2, 'hello'),
(13, 4, 6, 'Lemur urang yeuh');

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2018_04_15_021330_wisata', 1),
(4, '2018_04_15_031649_komentar', 1),
(5, '2018_04_15_105054_hotel', 1),
(6, '2018_04_15_105230_transport', 1),
(7, '2018_04_18_190237_rating', 1),
(8, '2018_04_20_072531_replykomentar', 2);

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
-- Table structure for table `rating`
--

CREATE TABLE `rating` (
  `id_rating` int(10) UNSIGNED NOT NULL,
  `id_user` int(11) UNSIGNED NOT NULL,
  `id_wisata` int(11) UNSIGNED NOT NULL,
  `rate` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `rating`
--

INSERT INTO `rating` (`id_rating`, `id_user`, `id_wisata`, `rate`) VALUES
(1, 2, 1, 5),
(2, 3, 1, 1),
(3, 1, 3, 4),
(4, 1, 1, 5),
(5, 4, 1, 1),
(6, 2, 3, 5),
(7, 6, 4, 5),
(8, 2, 4, 5),
(9, 7, 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `reply_komentar`
--

CREATE TABLE `reply_komentar` (
  `id_reply` int(10) UNSIGNED NOT NULL,
  `id_komentar` int(11) UNSIGNED NOT NULL,
  `id_user` int(10) UNSIGNED NOT NULL,
  `isi_komentar` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `reply_komentar`
--

INSERT INTO `reply_komentar` (`id_reply`, `id_komentar`, `id_user`, `isi_komentar`) VALUES
(13, 5, 2, 'skuylay'),
(14, 7, 2, 'kamana boi'),
(15, 5, 3, 'boi'),
(16, 9, 2, 'iya nih'),
(18, 8, 1, 'Coba ini'),
(19, 7, 1, 'Liat'),
(20, 5, 1, 'Ini'),
(21, 11, 4, 'Balas komen'),
(22, 13, 2, 'aslina, anjeun orang sukabumi ?');

-- --------------------------------------------------------

--
-- Table structure for table `transport`
--

CREATE TABLE `transport` (
  `id_transport` int(10) UNSIGNED NOT NULL,
  `nama_transport` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_transport` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `tujuan_transport` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `link_image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `kapasitas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `transport`
--

INSERT INTO `transport` (`id_transport`, `nama_transport`, `jenis_transport`, `tujuan_transport`, `link_image`, `kapasitas`) VALUES
(1, 'Garuda Indonesia', 'Pesawat', 'Semarang', 'https://bit.ly/2q2tUaB', 40),
(2, 'Lion Air', 'Pesawat', 'Bandung', 'bit.ly', 20),
(3, 'Kereta Api', 'Kereta', 'Jakarta', 'bit.ly', 30);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `admin` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `admin`, `created_at`, `updated_at`) VALUES
(1, 'Muhamad Diaz', 'muhamaddiaz10@gmail.com', '$2y$10$FQI2uGGvggjdDZcMRgkoZOitBG3AOhF1D.ow0SwZVAvSmUwDy6Y/.', 'por5Cvw7AmwLRtnvAvRGwUJE959Wf7CO61Ly2dYdCKGadqFWQOZyVAxpz6vD', 1, NULL, NULL),
(2, 'stepen', 'stepen@gmail.com', '$2y$10$uU/A9CFb9k05B1AmcHwLh.0F5QHfv/6.C2h9rg0ZwupGd.cA26Ag6', '3yZpKgRTdFmbo2z5lrvnWscy9EkUar5X0eDEpuhipPrtE81QvWH81t7LaXTf', 0, '2018-04-20 14:49:35', '2018-04-20 14:49:35'),
(3, 'carlos', 'carlos@gmail.com', '$2y$10$4cMH1RPm/N6jVghldASbQu/R06JBTrxdQDIFP4wlB.jAF/yXdht5W', 'pSY2tBCNMetiyM8XXdnziyzQkTSXPdMgRMTCiEWGsZ8IXlAM3xwomTE4KnsM', 0, '2018-04-20 15:26:41', '2018-04-20 15:26:41'),
(4, 'Coba Rekruitasi', 'rek@ans.lab', '$2y$10$LPN4S5wz.iCKP7BeQiR9TuDD7AuVdIqptET42Pv4zZSs6IBrYkeMq', 'LTvV3ZnGQ8AiK2FTastUqDK7tLsNVKMiDIIe62mEcc9KpzwQDQ3uVZlK2Gkc', 0, '2018-04-20 21:28:27', '2018-04-20 21:28:27'),
(5, 'asdf', 'asdf@gmail.com', '$2y$10$8pw4C9vKzGnPy2BXNVdb3uW0pbXXRV8DQiG7Wbu2wqZBT7Amcj2xm', 'hwtBTf3VCMIMVRIylgejOzrpagGz5QaTm9qSla0PKTTJofqQCtz88XvahDmi', 0, '2018-04-20 21:48:17', '2018-04-20 21:48:17'),
(6, 'samsul', 'sams@gmail.com', '$2y$10$v17njaP5KQCMhmfVxdswoO3pL7fWLhjLt.TIqFnz7ZDlKQTRQ7EpG', '4z8pf35knDL8fQZfNkQ8teHwTxXPiAC9KLgJku0YkD2vp0v6kHcuuBCgTZqR', 0, '2018-04-21 00:10:20', '2018-04-21 00:10:20'),
(7, '12345', '123223@gmail.com', '$2y$10$SuyHhQ/PpDQkvqJrgGzkyexzRjhkRAa8o7laUPYKG0Ho7fazGMn4y', '9mvZvi55cczNVTEF32nWd022P3nSTBzYQDRfZ5HBqYWaJRdfwe7JEELkBxsC', 0, '2018-04-21 01:12:39', '2018-04-21 01:12:39');

-- --------------------------------------------------------

--
-- Table structure for table `wisata`
--

CREATE TABLE `wisata` (
  `id_wisata` int(10) UNSIGNED NOT NULL,
  `nama_wisata` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi_wisata` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `lokasi_wisata` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `link_image` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `wisata`
--

INSERT INTO `wisata` (`id_wisata`, `nama_wisata`, `deskripsi_wisata`, `lokasi_wisata`, `link_image`) VALUES
(1, 'Lawang Sewu', 'Salah satu tempat wisata di kota semarang \n                                   yang memiliki sejarah pada masa penjajahan \n                                   belanda dan jepang, ini adalah salah satu \n                                   tempat wisata yang unik karena terdapat \n                                   1000 pintu didalamnya makanya diberi nama \n                                   lawang sewu kalo ga percaya itung sendiri \n                                   - sumber orang semarang asli (hanip)', 'Semarang', 'https://bit.ly/2GyUqmj'),
(2, 'Alun alun Bandung', 'Alun alun di tengah kota bandung', 'Bandung', 'bit.ly'),
(3, 'Monas', 'Monumen nasional yang berada di ibukota indonesia', 'Jakarta', 'bit.ly'),
(4, 'Geopark Ciletuh', 'Salah satu geopark di indonesia yang diakui unesco', 'Sukabumi', 'bit.ly');

-- --------------------------------------------------------

--
-- Stand-in structure for view `wisata_favorit`
-- (See below for the actual view)
--
CREATE TABLE `wisata_favorit` (
`id_wisata` int(10) unsigned
,`nama_wisata` text
,`deskripsi_wisata` text
,`lokasi_wisata` text
,`link_image` text
,`id_rating` int(10) unsigned
,`id_user` int(11) unsigned
,`rate` double
,`rate_wisata` double
);

-- --------------------------------------------------------

--
-- Structure for view `wisata_favorit`
--
DROP TABLE IF EXISTS `wisata_favorit`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `wisata_favorit`  AS  select `wisata`.`id_wisata` AS `id_wisata`,`wisata`.`nama_wisata` AS `nama_wisata`,`wisata`.`deskripsi_wisata` AS `deskripsi_wisata`,`wisata`.`lokasi_wisata` AS `lokasi_wisata`,`wisata`.`link_image` AS `link_image`,`rating`.`id_rating` AS `id_rating`,`rating`.`id_user` AS `id_user`,`rating`.`rate` AS `rate`,avg(`rating`.`rate`) AS `rate_wisata` from (`wisata` join `rating` on((`wisata`.`id_wisata` = `rating`.`id_wisata`))) group by `wisata`.`id_wisata` order by avg(`rating`.`rate`) desc ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `hotel`
--
ALTER TABLE `hotel`
  ADD PRIMARY KEY (`id_hotel`);

--
-- Indexes for table `komentar`
--
ALTER TABLE `komentar`
  ADD PRIMARY KEY (`id_komentar`),
  ADD KEY `id_user_komen` (`id_user`),
  ADD KEY `id_wisata_komen` (`id_wisata`);

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
-- Indexes for table `rating`
--
ALTER TABLE `rating`
  ADD PRIMARY KEY (`id_rating`),
  ADD KEY `id_user_rating` (`id_user`),
  ADD KEY `id_wisata_rating` (`id_wisata`);

--
-- Indexes for table `reply_komentar`
--
ALTER TABLE `reply_komentar`
  ADD PRIMARY KEY (`id_reply`),
  ADD KEY `id_komen_reply` (`id_komentar`),
  ADD KEY `id_user_reply` (`id_user`);

--
-- Indexes for table `transport`
--
ALTER TABLE `transport`
  ADD PRIMARY KEY (`id_transport`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wisata`
--
ALTER TABLE `wisata`
  ADD PRIMARY KEY (`id_wisata`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `hotel`
--
ALTER TABLE `hotel`
  MODIFY `id_hotel` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `komentar`
--
ALTER TABLE `komentar`
  MODIFY `id_komentar` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `rating`
--
ALTER TABLE `rating`
  MODIFY `id_rating` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `reply_komentar`
--
ALTER TABLE `reply_komentar`
  MODIFY `id_reply` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `transport`
--
ALTER TABLE `transport`
  MODIFY `id_transport` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `wisata`
--
ALTER TABLE `wisata`
  MODIFY `id_wisata` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `komentar`
--
ALTER TABLE `komentar`
  ADD CONSTRAINT `id_user_komen` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `id_wisata_komen` FOREIGN KEY (`id_wisata`) REFERENCES `wisata` (`id_wisata`) ON DELETE CASCADE;

--
-- Constraints for table `rating`
--
ALTER TABLE `rating`
  ADD CONSTRAINT `id_user_rating` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `id_wisata_rating` FOREIGN KEY (`id_wisata`) REFERENCES `wisata` (`id_wisata`) ON DELETE CASCADE;

--
-- Constraints for table `reply_komentar`
--
ALTER TABLE `reply_komentar`
  ADD CONSTRAINT `id_komen_reply` FOREIGN KEY (`id_komentar`) REFERENCES `komentar` (`id_komentar`) ON DELETE CASCADE,
  ADD CONSTRAINT `id_user_reply` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
