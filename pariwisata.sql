-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 20, 2018 at 11:15 AM
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
(1, 'Louis Kienne', 'Salah satu hotel mewah berbintang 4 \n                                  di semarang lokasi di strategis di \n                                  tengah kota', 'Semarang', 'https://bit.ly/2q3oQmx', 40);

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
(5, 1, 3, 'barbar');

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
(1, 2, 1, 3);

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
(10, 5, 3, 'keren');

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
(1, 'Garuda Indonesia', 'Pesawat', 'Semarang', 'https://bit.ly/2q2tUaB', 40);

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
(1, 'Muhamad Diaz', 'muhamaddiaz10@gmail.com', '$2y$10$FQI2uGGvggjdDZcMRgkoZOitBG3AOhF1D.ow0SwZVAvSmUwDy6Y/.', 'bozAqihogWazMkN3EsMWiyqmeJQHBhLgOpnZKZZsTtscLf3pP6nR6WIrM0RU', 1, NULL, NULL),
(2, 'stepen', 'stepen@gmail.com', '$2y$10$uU/A9CFb9k05B1AmcHwLh.0F5QHfv/6.C2h9rg0ZwupGd.cA26Ag6', '4vjrB0KFMx0I6yRbc2RGK0GW46NIH37pGXGOliubxvRFEygxkbXbRUbJb4VX', 0, '2018-04-20 14:49:35', '2018-04-20 14:49:35'),
(3, 'carlos', 'carlos@gmail.com', '$2y$10$4cMH1RPm/N6jVghldASbQu/R06JBTrxdQDIFP4wlB.jAF/yXdht5W', '2PZT87qmRI6DuL34OWpuxskZzv8jV0iBFHf1E1PeoEJWene1oEaKsVlSkMxw', 0, '2018-04-20 15:26:41', '2018-04-20 15:26:41');

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
(1, 'Lawang Sewu', 'Salah satu tempat wisata di kota semarang \n                                   yang memiliki sejarah pada masa penjajahan \n                                   belanda dan jepang, ini adalah salah satu \n                                   tempat wisata yang unik karena terdapat \n                                   1000 pintu didalamnya makanya diberi nama \n                                   lawang sewu kalo ga percaya itung sendiri \n                                   - sumber orang semarang asli (hanip)', 'Semarang', 'https://bit.ly/2GyUqmj');

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
  MODIFY `id_hotel` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `komentar`
--
ALTER TABLE `komentar`
  MODIFY `id_komentar` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `rating`
--
ALTER TABLE `rating`
  MODIFY `id_rating` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `reply_komentar`
--
ALTER TABLE `reply_komentar`
  MODIFY `id_reply` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `transport`
--
ALTER TABLE `transport`
  MODIFY `id_transport` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `wisata`
--
ALTER TABLE `wisata`
  MODIFY `id_wisata` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

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
