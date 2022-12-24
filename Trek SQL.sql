-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 24, 2022 at 03:07 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `trek`
--

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `type` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `info` text DEFAULT NULL,
  `specialtext` text DEFAULT NULL,
  `user` text DEFAULT NULL,
  `userimage` text DEFAULT NULL,
  `aboutuser` text DEFAULT NULL,
  `tags` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `firstname` varchar(255) DEFAULT NULL,
  `lastname` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `contact` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `postal` varchar(255) DEFAULT NULL,
  `people` varchar(255) DEFAULT NULL,
  `male` varchar(255) DEFAULT NULL,
  `female` varchar(255) DEFAULT NULL,
  `kids` varchar(255) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `isPaid` tinyint(1) DEFAULT 0,
  `event_info_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`id`, `firstname`, `lastname`, `email`, `contact`, `city`, `postal`, `people`, `male`, `female`, `kids`, `price`, `isPaid`, `event_info_id`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'Kunal', 'Pandharkar', 'kpthebaa@gmail.com', '7774843561', 'Pune', '431512', '12', '8', '2', '2', 80, 1, 1, 1, '2022-12-24 13:57:55', '2022-12-24 13:58:34');

-- --------------------------------------------------------

--
-- Table structure for table `enquiries`
--

CREATE TABLE `enquiries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `destination` varchar(255) DEFAULT NULL,
  `date` varchar(255) DEFAULT NULL,
  `toor_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `event_categories`
--

CREATE TABLE `event_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `event_categories`
--

INSERT INTO `event_categories` (`id`, `title`, `image`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Corporate Trek', '/events/Corporate Trek/yexnp4PmiLxcfhzWZYt0CLgZiFBf1Wd71dOzFFZX.jpg', 'Corporate Trek', '2022-12-24 13:50:13', '2022-12-24 13:50:13');

-- --------------------------------------------------------

--
-- Table structure for table `event_dates_rates`
--

CREATE TABLE `event_dates_rates` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `duration` varchar(255) DEFAULT NULL,
  `variant` varchar(255) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `event_info_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `event_dates_rates`
--

INSERT INTO `event_dates_rates` (`id`, `duration`, `variant`, `date`, `price`, `event_info_id`, `created_at`, `updated_at`) VALUES
(4, '3 Nights, 4 Days', 'Variant 1', '2022-12-17', 1200, 1, '2022-12-24 14:00:27', '2022-12-24 14:00:27');

-- --------------------------------------------------------

--
-- Table structure for table `event_infos`
--

CREATE TABLE `event_infos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `offers` text DEFAULT NULL,
  `type` varchar(255) DEFAULT NULL,
  `duration` varchar(255) DEFAULT NULL,
  `destination` varchar(255) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `mrp` int(11) DEFAULT NULL,
  `discount` varchar(255) DEFAULT NULL,
  `details` text DEFAULT NULL,
  `departure` date DEFAULT NULL,
  `description` text DEFAULT NULL,
  `event_category_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `event_infos`
--

INSERT INTO `event_infos` (`id`, `title`, `image`, `offers`, `type`, `duration`, `destination`, `price`, `mrp`, `discount`, `details`, `departure`, `description`, `event_category_id`, `created_at`, `updated_at`) VALUES
(1, 'Devkund Waterfall Trek', '/tours/Corporate Trek_Devkund Waterfall Trek/5gQIaM94KP0A94zGWvjuRGW0edRYUQ362VWQoTz8.jpg', '<p><strong>Offers</strong></p><p>&nbsp;</p><p><strong>Use any one code to avail this offer</strong></p><p><a href=\"https://www.trekhievers.com/coupon/get-50-off-on-booking-3-or-more-people-with-trekhievers\">GROUP 3</a></p><p>- Flat ₹50 on group of 3 and above</p><p><a href=\"https://www.trekhievers.com/coupon/get-100-off-on-booking-5-or-more-people-with-trekhievers\">GROUP 5</a></p><p>- Flat ₹100 on group of 5 and above</p><p><a href=\"https://www.trekhievers.com/coupon/get-150-off-on-booking-10-or-more-people-with-trekhievers\">GROUP 10</a></p><p>- Flat ₹150 on group of 10 and above</p><p>&nbsp;</p>', 'shared', '3 Nights, 4 Days', 'Devkund Waterfall, Pune', 80, 100, '20', '<h2><strong>Trek Details:</strong></h2><ul><li><strong>Height:</strong>&nbsp;2,700 ft</li><li><strong>Trek Route</strong>: Jungle trail</li><li><strong>Trek Difficulty</strong>: Easy to Moderate</li><li><strong>Trek Endurance</strong>: Medium</li><li><strong>Trek Length</strong>: 03&nbsp;km&nbsp;Approx.</li><li><strong>Trek Location: </strong>Patnus, Mangaon, Raigad, Pune, Maharashtra 402308</li><li><strong>Trek Best Time: </strong>June to December</li><li><strong>Distance from Mumbai:&nbsp;</strong>130&nbsp;km</li><li><strong>Distance from Pune: </strong>100<strong>&nbsp;</strong>km</li><li><strong>Distance from Lonavala: </strong>83<strong>&nbsp;</strong>km</li></ul><p><br><strong>Batches&nbsp;:&nbsp;</strong></p><ul><li><strong>September</strong>:<strong>&nbsp;</strong>02nd<strong>,&nbsp;</strong>3rd, 09th, 10th, 16th,17th, 23rd, 24th, 30th</li><li><strong>October: </strong>01, 07th, 08th, 14th, 15th, 21nd, 22rd, 28th, 29th</li></ul><p><strong>Note: We need a minimum of 10&nbsp;people to operate Friday batches, if not then it will be shifted to the Saturday batch.</strong></p><h2><strong>Event Fees:</strong></h2><ul><li><strong>Mumbai</strong>: 1500/-</li><li><strong>Pune</strong>: 1300/-</li><li><strong>Base Village:</strong>&nbsp;799/-</li></ul><h3><strong>(&nbsp;</strong><a href=\"https://www.townscript.com/v2/e/devkund-waterfall-trek-003334/booking/calendar\"><strong>Click here to&nbsp;Book Now</strong></a><strong>&nbsp;)</strong></h3><p><i>(&nbsp;<strong>Mumbai Pickup</strong>: Borivali, Malad, Goregaon, Andheri, Bandra, Sion, Chembur, Vashi, Nerul, Kharghar, Kalamboli McD&nbsp;)</i></p><p>(&nbsp;<strong>Pune&nbsp;Pickup</strong>: Starbucks FC Road, Wakad bridge&nbsp;)</p><p>&nbsp;</p>', '2022-12-30', NULL, 1, '2022-12-24 13:52:55', '2022-12-24 14:00:27');

-- --------------------------------------------------------

--
-- Table structure for table `gallaries`
--

CREATE TABLE `gallaries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `albumtitle` varchar(255) DEFAULT NULL,
  `cover` varchar(255) DEFAULT NULL,
  `location` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `gallary_images`
--

CREATE TABLE `gallary_images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `gallary_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `getin_touches`
--

CREATE TABLE `getin_touches` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(3, '2022_12_06_185708_create_event_categories_table', 1),
(4, '2022_12_06_185732_create_event_infos_table', 1),
(5, '2022_12_06_191003_create_event_dates_rates_table', 1),
(6, '2022_12_20_101033_create_tourimages_table', 1),
(7, '2022_12_20_165007_create_enquiries_table', 1),
(8, '2022_12_21_191313_create_bookings_table', 1),
(9, '2022_12_22_043846_create_gallaries_table', 1),
(10, '2022_12_22_043856_create_gallary_images_table', 1),
(11, '2022_12_22_075634_create_blogs_table', 1),
(12, '2022_12_23_140258_create_payments_table', 1),
(13, '2022_12_24_081032_create_getin_touches_table', 1),
(14, '2022_12_24_090222_create_tour_messages_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `amount` varchar(255) DEFAULT NULL,
  `razorpay_id` varchar(255) DEFAULT NULL,
  `order_id` varchar(255) DEFAULT NULL,
  `isPaid` tinyint(1) NOT NULL DEFAULT 0,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `booking_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`id`, `amount`, `razorpay_id`, `order_id`, `isPaid`, `user_id`, `booking_id`, `created_at`, `updated_at`) VALUES
(1, '80', 'pay_KvlvftFKOn2nEg', 'order_Kvlv6rXfeEhAoh', 1, 1, 1, '2022-12-24 13:57:55', '2022-12-24 13:58:34');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tourimages`
--

CREATE TABLE `tourimages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `event_info_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tourimages`
--

INSERT INTO `tourimages` (`id`, `image`, `event_info_id`, `created_at`, `updated_at`) VALUES
(1, '/tours/Corporate Trek_Devkund Waterfall Trek/trips/Gue23CvXSw9OK1KJPtQjjphT3CQi1y2NA7bxFY71.jpg', 1, '2022-12-24 13:52:55', '2022-12-24 13:52:55'),
(2, '/tours/Corporate Trek_Devkund Waterfall Trek/trips/Jz7ze8LYq4zHKZtywk86MGmuEoBLalwr2H8f4rbC.jpg', 1, '2022-12-24 13:52:55', '2022-12-24 13:52:55'),
(3, '/tours/Corporate Trek_Devkund Waterfall Trek/trips/lNLon2AAlvpbFJO8dwG4jQLJYKVrPe6xfOLg0fh2.jpg', 1, '2022-12-24 13:52:55', '2022-12-24 13:52:55'),
(4, '/tours/Corporate Trek_Devkund Waterfall Trek/trips/RMPOhkemLGTRQst2xgVCwELqZMg83MMiFiYwBfAo.jpg', 1, '2022-12-24 13:52:55', '2022-12-24 13:52:55'),
(5, '/tours/Corporate Trek_Devkund Waterfall Trek/trips/sJjKsRmHRwkjVQxjbUq8naI5YBTyJAV0jOxoNwMY.jpg', 1, '2022-12-24 13:52:55', '2022-12-24 13:52:55'),
(6, '/tours/Corporate Trek_Devkund Waterfall Trek/trips/kvrZdVoesov48kkFq955HnakMZTvO3lEFfmoIP0L.jpg', 1, '2022-12-24 13:52:55', '2022-12-24 13:52:55'),
(7, '/tours/Corporate Trek_Devkund Waterfall Trek/trips/ABanSflkrZ2jXsiPKCliIrIFJsjySsbXTwODFpsR.jpg', 1, '2022-12-24 13:52:55', '2022-12-24 13:52:55'),
(8, '/tours/Corporate Trek_Devkund Waterfall Trek/trips/G389dOTwSbKLSpM4VamKfhDKgVSQvAOrslmG7rt0.jpg', 1, '2022-12-24 13:52:55', '2022-12-24 13:52:55'),
(9, '/tours/Corporate Trek_Devkund Waterfall Trek/trips/KYIvBeHXeWEWBWY3EsQjbk7YDlqGPWk6R7BODVD5.jpg', 1, '2022-12-24 13:52:55', '2022-12-24 13:52:55');

-- --------------------------------------------------------

--
-- Table structure for table `tour_messages`
--

CREATE TABLE `tour_messages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `message` text NOT NULL,
  `event_info_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tour_messages`
--

INSERT INTO `tour_messages` (`id`, `message`, `event_info_id`, `created_at`, `updated_at`) VALUES
(1, 'We are now going to Lonavala, Pune.', 1, '2022-12-24 14:01:44', '2022-12-24 14:01:44');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `age` varchar(255) DEFAULT NULL,
  `gender` varchar(255) DEFAULT NULL,
  `contact` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `isBlocked` tinyint(1) NOT NULL DEFAULT 0,
  `isAdmin` tinyint(1) NOT NULL DEFAULT 0,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `image`, `age`, `gender`, `contact`, `address`, `city`, `email`, `isBlocked`, `isAdmin`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Kunal Yadav Pandharkar', NULL, '21', 'Male', '7774843561', 'Cidco N6, Aurangabad', NULL, 'kpthebaa@gmail.com', 0, 1, NULL, '$2y$10$3HMOr..fLEJzXn71j643LeHjAcZTq3CK40Y9vLyxSS1DqT5suvyJ.', NULL, '2022-12-24 13:48:59', '2022-12-24 13:49:28');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `bookings_event_info_id_foreign` (`event_info_id`),
  ADD KEY `bookings_user_id_foreign` (`user_id`);

--
-- Indexes for table `enquiries`
--
ALTER TABLE `enquiries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `event_categories`
--
ALTER TABLE `event_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `event_dates_rates`
--
ALTER TABLE `event_dates_rates`
  ADD PRIMARY KEY (`id`),
  ADD KEY `event_dates_rates_event_info_id_foreign` (`event_info_id`);

--
-- Indexes for table `event_infos`
--
ALTER TABLE `event_infos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `event_infos_event_category_id_foreign` (`event_category_id`);

--
-- Indexes for table `gallaries`
--
ALTER TABLE `gallaries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallary_images`
--
ALTER TABLE `gallary_images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `gallary_images_gallary_id_foreign` (`gallary_id`);

--
-- Indexes for table `getin_touches`
--
ALTER TABLE `getin_touches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `payments_user_id_foreign` (`user_id`),
  ADD KEY `payments_booking_id_foreign` (`booking_id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `tourimages`
--
ALTER TABLE `tourimages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tourimages_event_info_id_foreign` (`event_info_id`);

--
-- Indexes for table `tour_messages`
--
ALTER TABLE `tour_messages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tour_messages_event_info_id_foreign` (`event_info_id`);

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
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `enquiries`
--
ALTER TABLE `enquiries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `event_categories`
--
ALTER TABLE `event_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `event_dates_rates`
--
ALTER TABLE `event_dates_rates`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `event_infos`
--
ALTER TABLE `event_infos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `gallaries`
--
ALTER TABLE `gallaries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `gallary_images`
--
ALTER TABLE `gallary_images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `getin_touches`
--
ALTER TABLE `getin_touches`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tourimages`
--
ALTER TABLE `tourimages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tour_messages`
--
ALTER TABLE `tour_messages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bookings`
--
ALTER TABLE `bookings`
  ADD CONSTRAINT `bookings_event_info_id_foreign` FOREIGN KEY (`event_info_id`) REFERENCES `event_infos` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `bookings_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `event_dates_rates`
--
ALTER TABLE `event_dates_rates`
  ADD CONSTRAINT `event_dates_rates_event_info_id_foreign` FOREIGN KEY (`event_info_id`) REFERENCES `event_infos` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `event_infos`
--
ALTER TABLE `event_infos`
  ADD CONSTRAINT `event_infos_event_category_id_foreign` FOREIGN KEY (`event_category_id`) REFERENCES `event_categories` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `gallary_images`
--
ALTER TABLE `gallary_images`
  ADD CONSTRAINT `gallary_images_gallary_id_foreign` FOREIGN KEY (`gallary_id`) REFERENCES `gallaries` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `payments`
--
ALTER TABLE `payments`
  ADD CONSTRAINT `payments_booking_id_foreign` FOREIGN KEY (`booking_id`) REFERENCES `bookings` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `payments_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `tourimages`
--
ALTER TABLE `tourimages`
  ADD CONSTRAINT `tourimages_event_info_id_foreign` FOREIGN KEY (`event_info_id`) REFERENCES `event_infos` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `tour_messages`
--
ALTER TABLE `tour_messages`
  ADD CONSTRAINT `tour_messages_event_info_id_foreign` FOREIGN KEY (`event_info_id`) REFERENCES `event_infos` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
