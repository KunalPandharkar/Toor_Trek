-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 23, 2022 at 09:56 AM
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

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `type`, `title`, `image`, `info`, `specialtext`, `user`, `userimage`, `aboutuser`, `tags`, `created_at`, `updated_at`) VALUES
(12, 'Trekking', 'Maharashtra Forts', '/blogs/Trekking_Maharashtra Forts/RZfdNtAsku93MDHaWRXzM3uVE8ywIeAJVfoiKz5U.jpg', '<h3><strong>Mahimangad Fort Information</strong></h3><p>One of the finest forts built in Satara District, Maharashtra, India, is Mahimangad Fort. This forts fortification is still strong and looks good. This fort is about 3200 feet above sea level. The trail of the fort isn’t that difficult. The tail is easy, and it hardly takes about an hour to reach the fort. The fort huge and a beautiful place to explore. Mahimangad Village is the base village of this fort.&nbsp;</p><ul><li><strong>Starting point:&nbsp;</strong>Mahimangad village, Satara District, Maharashtra.</li><li><strong>Water resources:</strong>&nbsp;No proper drinking water facility available on the fort. It is preferred to carry own drinking water. 2 liters minimum per person.</li><li><strong>Trek Gradient:</strong>&nbsp;The trail till the top of the fort is straightforward. One of the easiest and finest forts of Satara District.</li><li><strong>Best months to visit the fort:</strong>&nbsp;Winter season is the best time to visit this place. From December to February is the peak time to visit the fort.</li></ul><p><strong>Getting there:</strong></p><ul><li>Phaltan Taluka is the main and the nearest town from the fort.</li><li>The base village, which is Mahimangad, is only 1km away from the main road.</li><li>Phaltan Taluka is about 46 km till the fort.</li><li>Local vehicles are also available till the fort. The frequency of busses is regular at specific intervals.</li><li>People approaching from Satara District will take about 1 hour to reach the fort. It is about 51km away from the Satara Bust Depot.</li><li>Mahimangad is approximately 150km from Pune.</li><li>From Mumbai, one will take around 5 to 6 hours till the fort, which is about 300 km.</li></ul><h3><strong>Mahimangad Fort Trek Blog</strong></h3><p>Mahimangad Fort was built by Chhatrapati Shivaji Maharaj and was one of the forts with Varugad, Vardhangad, and many more in the Satara region. Turjabhavani temple is the starting point of the trek. From here, we can see the fortification of the fort. Walking ahead, one will also see a Bhavani Mata Mandir, which is also well maintained. Both the temples are in good condition. The villagers recently built Bhavani temple’s roof. Behind this temple, there is a huge water tank. This water tank has steps made for dipping in and take out water. After climbing for about half an hour, the rock-cut steps will take you till the fort\'s entrance. The fortification of the fort is healthy after so many years. One will reach the first door within five minutes. Moving on from there, one will see the second door, which is named “Hastmukh Darwaja”.&nbsp;</p><p>This door has small carvings of an elephant on both sides of the door at the bottom. The second door is now disputed; the door is assumed to be huge and built with strategical importance as its remnants are seen around the door after entering it. One can visit Lord Hanuman temple, which is beautifully placed on the fort, moving ahead on the top. This temple will be seen easily as soon as one walks on to the fort crossing the second door. A small water tank is also placed on the fort. This water tank has water all the 12 months of the year. Many Secret doors are also seen on the fort, also locally known as “Chor Darwaja.” The fortress and its fortification are huge to explore and visit. It will take around one hour to explore the fort.</p>', 'One of the finest forts built in Satara District, Maharashtra, India, is Mahimangad Fort. This forts fortification is still strong and looks good. This fort is about 3200 feet above sea level.', 'Kunal Pandharkar', '/blogs/Trekking_Maharashtra Forts/users//W3gFu0fBv4CaYoRlzEQadJpFsczAMG5vN9Sr0dSe.jpg', 'One of the finest forts built in Satara District, Maharashtra, India, is Mahimangad Fort. This forts fortification is still strong and looks good. This fort is about 3200 feet above sea level.', 'Forts,Trekking,Maharashtra', '2022-12-23 01:58:59', '2022-12-23 01:58:59'),
(13, 'Trekking', 'Maharashtra Forts', '/blogs/Trekking_Maharashtra Forts/RZfdNtAsku93MDHaWRXzM3uVE8ywIeAJVfoiKz5U.jpg', '<h3><strong>Mahimangad Fort Information</strong></h3><p>One of the finest forts built in Satara District, Maharashtra, India, is Mahimangad Fort. This forts fortification is still strong and looks good. This fort is about 3200 feet above sea level. The trail of the fort isn’t that difficult. The tail is easy, and it hardly takes about an hour to reach the fort. The fort huge and a beautiful place to explore. Mahimangad Village is the base village of this fort.&nbsp;</p><ul><li><strong>Starting point:&nbsp;</strong>Mahimangad village, Satara District, Maharashtra.</li><li><strong>Water resources:</strong>&nbsp;No proper drinking water facility available on the fort. It is preferred to carry own drinking water. 2 liters minimum per person.</li><li><strong>Trek Gradient:</strong>&nbsp;The trail till the top of the fort is straightforward. One of the easiest and finest forts of Satara District.</li><li><strong>Best months to visit the fort:</strong>&nbsp;Winter season is the best time to visit this place. From December to February is the peak time to visit the fort.</li></ul><p><strong>Getting there:</strong></p><ul><li>Phaltan Taluka is the main and the nearest town from the fort.</li><li>The base village, which is Mahimangad, is only 1km away from the main road.</li><li>Phaltan Taluka is about 46 km till the fort.</li><li>Local vehicles are also available till the fort. The frequency of busses is regular at specific intervals.</li><li>People approaching from Satara District will take about 1 hour to reach the fort. It is about 51km away from the Satara Bust Depot.</li><li>Mahimangad is approximately 150km from Pune.</li><li>From Mumbai, one will take around 5 to 6 hours till the fort, which is about 300 km.</li></ul><h3><strong>Mahimangad Fort Trek Blog</strong></h3><p>Mahimangad Fort was built by Chhatrapati Shivaji Maharaj and was one of the forts with Varugad, Vardhangad, and many more in the Satara region. Turjabhavani temple is the starting point of the trek. From here, we can see the fortification of the fort. Walking ahead, one will also see a Bhavani Mata Mandir, which is also well maintained. Both the temples are in good condition. The villagers recently built Bhavani temple’s roof. Behind this temple, there is a huge water tank. This water tank has steps made for dipping in and take out water. After climbing for about half an hour, the rock-cut steps will take you till the fort\'s entrance. The fortification of the fort is healthy after so many years. One will reach the first door within five minutes. Moving on from there, one will see the second door, which is named “Hastmukh Darwaja”.&nbsp;</p><p>This door has small carvings of an elephant on both sides of the door at the bottom. The second door is now disputed; the door is assumed to be huge and built with strategical importance as its remnants are seen around the door after entering it. One can visit Lord Hanuman temple, which is beautifully placed on the fort, moving ahead on the top. This temple will be seen easily as soon as one walks on to the fort crossing the second door. A small water tank is also placed on the fort. This water tank has water all the 12 months of the year. Many Secret doors are also seen on the fort, also locally known as “Chor Darwaja.” The fortress and its fortification are huge to explore and visit. It will take around one hour to explore the fort.</p>', 'One of the finest forts built in Satara District, Maharashtra, India, is Mahimangad Fort. This forts fortification is still strong and looks good. This fort is about 3200 feet above sea level.', 'Kunal Pandharkar', '/blogs/Trekking_Maharashtra Forts/users//W3gFu0fBv4CaYoRlzEQadJpFsczAMG5vN9Sr0dSe.jpg', 'One of the finest forts built in Satara District, Maharashtra, India, is Mahimangad Fort. This forts fortification is still strong and looks good. This fort is about 3200 feet above sea level.', 'Forts,Trekking,Maharashtra', '2022-12-23 01:58:59', '2022-12-23 01:58:59'),
(14, 'Trekking', 'Maharashtra Forts', '/blogs/Trekking_Maharashtra Forts/RZfdNtAsku93MDHaWRXzM3uVE8ywIeAJVfoiKz5U.jpg', '<h3><strong>Mahimangad Fort Information</strong></h3><p>One of the finest forts built in Satara District, Maharashtra, India, is Mahimangad Fort. This forts fortification is still strong and looks good. This fort is about 3200 feet above sea level. The trail of the fort isn’t that difficult. The tail is easy, and it hardly takes about an hour to reach the fort. The fort huge and a beautiful place to explore. Mahimangad Village is the base village of this fort.&nbsp;</p><ul><li><strong>Starting point:&nbsp;</strong>Mahimangad village, Satara District, Maharashtra.</li><li><strong>Water resources:</strong>&nbsp;No proper drinking water facility available on the fort. It is preferred to carry own drinking water. 2 liters minimum per person.</li><li><strong>Trek Gradient:</strong>&nbsp;The trail till the top of the fort is straightforward. One of the easiest and finest forts of Satara District.</li><li><strong>Best months to visit the fort:</strong>&nbsp;Winter season is the best time to visit this place. From December to February is the peak time to visit the fort.</li></ul><p><strong>Getting there:</strong></p><ul><li>Phaltan Taluka is the main and the nearest town from the fort.</li><li>The base village, which is Mahimangad, is only 1km away from the main road.</li><li>Phaltan Taluka is about 46 km till the fort.</li><li>Local vehicles are also available till the fort. The frequency of busses is regular at specific intervals.</li><li>People approaching from Satara District will take about 1 hour to reach the fort. It is about 51km away from the Satara Bust Depot.</li><li>Mahimangad is approximately 150km from Pune.</li><li>From Mumbai, one will take around 5 to 6 hours till the fort, which is about 300 km.</li></ul><h3><strong>Mahimangad Fort Trek Blog</strong></h3><p>Mahimangad Fort was built by Chhatrapati Shivaji Maharaj and was one of the forts with Varugad, Vardhangad, and many more in the Satara region. Turjabhavani temple is the starting point of the trek. From here, we can see the fortification of the fort. Walking ahead, one will also see a Bhavani Mata Mandir, which is also well maintained. Both the temples are in good condition. The villagers recently built Bhavani temple’s roof. Behind this temple, there is a huge water tank. This water tank has steps made for dipping in and take out water. After climbing for about half an hour, the rock-cut steps will take you till the fort\'s entrance. The fortification of the fort is healthy after so many years. One will reach the first door within five minutes. Moving on from there, one will see the second door, which is named “Hastmukh Darwaja”.&nbsp;</p><p>This door has small carvings of an elephant on both sides of the door at the bottom. The second door is now disputed; the door is assumed to be huge and built with strategical importance as its remnants are seen around the door after entering it. One can visit Lord Hanuman temple, which is beautifully placed on the fort, moving ahead on the top. This temple will be seen easily as soon as one walks on to the fort crossing the second door. A small water tank is also placed on the fort. This water tank has water all the 12 months of the year. Many Secret doors are also seen on the fort, also locally known as “Chor Darwaja.” The fortress and its fortification are huge to explore and visit. It will take around one hour to explore the fort.</p>', 'One of the finest forts built in Satara District, Maharashtra, India, is Mahimangad Fort. This forts fortification is still strong and looks good. This fort is about 3200 feet above sea level.', 'Kunal Pandharkar', '/blogs/Trekking_Maharashtra Forts/users//W3gFu0fBv4CaYoRlzEQadJpFsczAMG5vN9Sr0dSe.jpg', 'One of the finest forts built in Satara District, Maharashtra, India, is Mahimangad Fort. This forts fortification is still strong and looks good. This fort is about 3200 feet above sea level.', 'Forts,Trekking,Maharashtra', '2022-12-23 01:58:59', '2022-12-23 01:58:59'),
(15, 'Trekking', 'Maharashtra Forts', '/blogs/Trekking_Maharashtra Forts/RZfdNtAsku93MDHaWRXzM3uVE8ywIeAJVfoiKz5U.jpg', '<h3><strong>Mahimangad Fort Information</strong></h3><p>One of the finest forts built in Satara District, Maharashtra, India, is Mahimangad Fort. This forts fortification is still strong and looks good. This fort is about 3200 feet above sea level. The trail of the fort isn’t that difficult. The tail is easy, and it hardly takes about an hour to reach the fort. The fort huge and a beautiful place to explore. Mahimangad Village is the base village of this fort.&nbsp;</p><ul><li><strong>Starting point:&nbsp;</strong>Mahimangad village, Satara District, Maharashtra.</li><li><strong>Water resources:</strong>&nbsp;No proper drinking water facility available on the fort. It is preferred to carry own drinking water. 2 liters minimum per person.</li><li><strong>Trek Gradient:</strong>&nbsp;The trail till the top of the fort is straightforward. One of the easiest and finest forts of Satara District.</li><li><strong>Best months to visit the fort:</strong>&nbsp;Winter season is the best time to visit this place. From December to February is the peak time to visit the fort.</li></ul><p><strong>Getting there:</strong></p><ul><li>Phaltan Taluka is the main and the nearest town from the fort.</li><li>The base village, which is Mahimangad, is only 1km away from the main road.</li><li>Phaltan Taluka is about 46 km till the fort.</li><li>Local vehicles are also available till the fort. The frequency of busses is regular at specific intervals.</li><li>People approaching from Satara District will take about 1 hour to reach the fort. It is about 51km away from the Satara Bust Depot.</li><li>Mahimangad is approximately 150km from Pune.</li><li>From Mumbai, one will take around 5 to 6 hours till the fort, which is about 300 km.</li></ul><h3><strong>Mahimangad Fort Trek Blog</strong></h3><p>Mahimangad Fort was built by Chhatrapati Shivaji Maharaj and was one of the forts with Varugad, Vardhangad, and many more in the Satara region. Turjabhavani temple is the starting point of the trek. From here, we can see the fortification of the fort. Walking ahead, one will also see a Bhavani Mata Mandir, which is also well maintained. Both the temples are in good condition. The villagers recently built Bhavani temple’s roof. Behind this temple, there is a huge water tank. This water tank has steps made for dipping in and take out water. After climbing for about half an hour, the rock-cut steps will take you till the fort\'s entrance. The fortification of the fort is healthy after so many years. One will reach the first door within five minutes. Moving on from there, one will see the second door, which is named “Hastmukh Darwaja”.&nbsp;</p><p>This door has small carvings of an elephant on both sides of the door at the bottom. The second door is now disputed; the door is assumed to be huge and built with strategical importance as its remnants are seen around the door after entering it. One can visit Lord Hanuman temple, which is beautifully placed on the fort, moving ahead on the top. This temple will be seen easily as soon as one walks on to the fort crossing the second door. A small water tank is also placed on the fort. This water tank has water all the 12 months of the year. Many Secret doors are also seen on the fort, also locally known as “Chor Darwaja.” The fortress and its fortification are huge to explore and visit. It will take around one hour to explore the fort.</p>', 'One of the finest forts built in Satara District, Maharashtra, India, is Mahimangad Fort. This forts fortification is still strong and looks good. This fort is about 3200 feet above sea level.', 'Kunal Pandharkar', '/blogs/Trekking_Maharashtra Forts/users//W3gFu0fBv4CaYoRlzEQadJpFsczAMG5vN9Sr0dSe.jpg', 'One of the finest forts built in Satara District, Maharashtra, India, is Mahimangad Fort. This forts fortification is still strong and looks good. This fort is about 3200 feet above sea level.', 'Forts,Trekking,Maharashtra', '2022-12-23 01:58:59', '2022-12-23 01:58:59');

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
  `event_info_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`id`, `firstname`, `lastname`, `email`, `contact`, `city`, `postal`, `people`, `male`, `female`, `kids`, `event_info_id`, `created_at`, `updated_at`) VALUES
(1, 'Kunal', 'Pandharkar', 'kpthebaa@gmail.com', '7774843561', 'Aurangabad', '431001', '12', '5', '3', '4', 1, '2022-12-22 06:11:53', '2022-12-22 06:11:53');

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

--
-- Dumping data for table `enquiries`
--

INSERT INTO `enquiries` (`id`, `name`, `destination`, `date`, `toor_id`, `created_at`, `updated_at`) VALUES
(1, 'Kunal Yadav Pandharkar', 'Aurangabad', '12/30/2022', 1, '2022-12-22 06:08:37', '2022-12-22 06:08:37'),
(2, 'Sayali Wagh', 'Pune', '12/29/2022', 1, '2022-12-22 06:08:50', '2022-12-22 06:08:50'),
(5, 'sayali', 'aurangabad', '2022-12-30', NULL, '2022-12-23 02:17:29', '2022-12-23 02:17:29');

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
(1, 'Trekking', NULL, 'Deep in the belly of Sahyadri, lies this beautiful and unexplored Aadrai Jungle where the forest floor seldom feels the warm embrace of the sun. The Aadrai trek location was actually', '2022-12-22 03:43:31', '2022-12-22 03:55:30'),
(2, 'Camping', NULL, NULL, '2022-12-22 03:43:38', '2022-12-22 03:43:38'),
(3, 'Workation', NULL, NULL, '2022-12-22 03:43:44', '2022-12-22 03:43:49'),
(4, 'Corporate Trek', NULL, NULL, '2022-12-22 03:43:58', '2022-12-22 03:43:58'),
(5, 'Road Trips', NULL, NULL, '2022-12-22 03:44:12', '2022-12-22 03:44:12');

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
(5, '1 Night, 1 Day', 'Without Transportation', '2022-12-23', 699, 1, '2022-12-22 03:54:19', '2022-12-22 03:54:19'),
(6, '2 Night, 2 Day', 'Without Transportation', '2022-12-23', 1699, 1, '2022-12-22 03:54:19', '2022-12-22 03:54:19');

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
(1, 'Adrai Jungle Trek', '/tours/Trekking_Adrai Jungle Trek - The Unexplored Jungle Trek/iQO7Qh9GNh7P6S78PgojhQhwHofd4BXm1rPcD8IE.jpg', '<h2><strong>Batches&nbsp;:&nbsp;</strong></h2><p><strong>Mumbai:</strong></p><ul><li><strong>July:</strong>&nbsp;22nd, 23rd, 29th, 30th</li><li><strong>August</strong>:&nbsp;5th,<strong>&nbsp;</strong>6th, 12th, 13th,19th,&nbsp; 20th, 26th, 27th</li><li><strong>September</strong>:<strong>&nbsp;</strong>2nd,&nbsp;3rd, 9th, 10th, 16th, 17th, 23rd 24th</li><li><strong>October :</strong> 29th, 30th, 06th, 07th,13th, 14th, 20th, 21st, 27th, 28th</li></ul><p><strong>Note: We need a minimum of 10&nbsp;people to operate Friday batches, if not then it will be shifted to the Saturday batch.</strong></p><p><strong>Pune:</strong></p><ul><li><strong>July:</strong>&nbsp;23rd, 24th,&nbsp;30th, 31st</li><li><strong>August</strong>:<strong>&nbsp;</strong>6th, 7th,&nbsp;13th, 14th,&nbsp;20th, 21st,&nbsp;27th, 28th</li><li><strong>September</strong>:<strong>&nbsp;</strong>3rd, 4th,10th, 11th,17th, 18th,&nbsp;24th, 25th</li></ul><p><strong>Note: We need a minimum of 10&nbsp;people to operate Saturday batches, if not then it will be shifted to the Sunday batch.</strong></p><h2><strong>Event Fees:</strong></h2><ul><li><strong>Mumbai:&nbsp;</strong>1400/-</li><li><strong>Pune:</strong>&nbsp;1400/-</li><li><strong>Base Village:</strong>&nbsp;Rs 699/-</li></ul><p><i>( <strong>Mumbai Pickup</strong>: Borivali, Malad, Goregaon, Andheri, Bandra, Sion, Ghatkopar, Thane, Kalyan&nbsp;)</i></p><p><i>( <strong>Pune Pickup:</strong> Fergussion colllege gate, Kasarwadi )</i></p>', 'shared', '1 Night, 1 Day', 'Adrai Jungle Trek', 699, 1000, '399', '<h2><strong>Aadrai Jungle Trek Information:</strong></h2><ul><li>Deep in the belly of Sahyadri, lies this beautiful and unexplored Aadrai Jungle where the forest floor seldom feels the warm embrace of the sun. The Aadrai trek location was actually discovered by a local villager, who came across the Aadrai forest location by fluke as he had lost his way while hunting.</li><li>This beautiful trek location dates back to the 1st millennium and is located in the Junnar city in the Pune district. Aadrai Jungle trek is a paradise for all trek lovers who are looking for an escape from the monotony of city life. This jungle trek offers the trekkers a much-needed break from the polluted air and every breath of air here feels rejuvenating and refreshing.</li><li>The Aadrai Jungle Trek is a treat for all your senses given its abundant flora and fauna. Along the trail, one will witness various streams and passing waterfalls including a mega 1200 feet tall waterfall.</li><li>The mesmerizing view will seem like out of a fairy-tale with the lush green forests, melodious chirping of the birds, the chittering of the forest animals, and invigorating streams and waterfalls.</li><li>Apart from the lush green forest, the Aadrai trek has a lot to offer like the Kalu waterfall, Nageshwar temple, and many ancient caves- each with a story to tell. Due to Aadrai’s Jungle location, it is one of the most sought-after jungle treks.</li><li>During Monsoons, the Aadrai jungle trek is one of the most exhilarating treks because of its dense forest area. It is one of the most thrilling treks of the Sahyadri range that lies deep within Malshej Ghat.</li></ul><h2><strong>Places to visit near Aadrai Forest :</strong></h2><ul><li>Kalu Waterfall</li><li>Nageshwar temple</li><li>Ancient Caves</li><li>Aadrai jungle</li></ul><h2><strong>Trek Details:&nbsp;</strong></h2><ul><li><strong>Trek Trail:</strong> Jungle trail</li><li><strong>Trek Difficulty</strong>: Easy to Moderate</li><li><strong>Trek Endurance:</strong>&nbsp;Medium/ Average</li><li><strong>Trek Length</strong>: Approx.7 km (One side)</li><li><strong>Trek Duration:</strong>&nbsp;3 hrs&nbsp;(One side)</li><li><strong>Trail Location</strong>: Near Khireshwar Village</li><li><strong>Best Time:</strong> June to October</li><li><strong>Distance from Mumbai:</strong> 138km</li><li><strong>Distance from Pune:</strong> 129km</li></ul><h2><strong>Why Trekhievers for Aadrai Jungle Trek ?</strong></h2><ul><li>3&nbsp;years experience in organizing Aadrai Jungle&nbsp;Trek with all safety protocols.</li><li>Served over 400+ customers last year with amazing reviews.</li><li>We provide one trek leader for every group of 10 people</li><li>We will donate a partial amount of your fee for&nbsp;the village development.</li></ul>', '2022-12-31', NULL, 1, '2022-12-22 03:52:57', '2022-12-22 03:54:19'),
(3, 'Adrai Jungle Trek', '/tours/Trekking_Adrai Jungle Trek - The Unexplored Jungle Trek/iQO7Qh9GNh7P6S78PgojhQhwHofd4BXm1rPcD8IE.jpg', '<h2><strong>Batches&nbsp;:&nbsp;</strong></h2><p><strong>Mumbai:</strong></p><ul><li><strong>July:</strong>&nbsp;22nd, 23rd, 29th, 30th</li><li><strong>August</strong>:&nbsp;5th,<strong>&nbsp;</strong>6th, 12th, 13th,19th,&nbsp; 20th, 26th, 27th</li><li><strong>September</strong>:<strong>&nbsp;</strong>2nd,&nbsp;3rd, 9th, 10th, 16th, 17th, 23rd 24th</li><li><strong>October :</strong> 29th, 30th, 06th, 07th,13th, 14th, 20th, 21st, 27th, 28th</li></ul><p><strong>Note: We need a minimum of 10&nbsp;people to operate Friday batches, if not then it will be shifted to the Saturday batch.</strong></p><p><strong>Pune:</strong></p><ul><li><strong>July:</strong>&nbsp;23rd, 24th,&nbsp;30th, 31st</li><li><strong>August</strong>:<strong>&nbsp;</strong>6th, 7th,&nbsp;13th, 14th,&nbsp;20th, 21st,&nbsp;27th, 28th</li><li><strong>September</strong>:<strong>&nbsp;</strong>3rd, 4th,10th, 11th,17th, 18th,&nbsp;24th, 25th</li></ul><p><strong>Note: We need a minimum of 10&nbsp;people to operate Saturday batches, if not then it will be shifted to the Sunday batch.</strong></p><h2><strong>Event Fees:</strong></h2><ul><li><strong>Mumbai:&nbsp;</strong>1400/-</li><li><strong>Pune:</strong>&nbsp;1400/-</li><li><strong>Base Village:</strong>&nbsp;Rs 699/-</li></ul><p><i>( <strong>Mumbai Pickup</strong>: Borivali, Malad, Goregaon, Andheri, Bandra, Sion, Ghatkopar, Thane, Kalyan&nbsp;)</i></p><p><i>( <strong>Pune Pickup:</strong> Fergussion colllege gate, Kasarwadi )</i></p>', 'shared', '1 Night, 1 Day', 'Adrai Jungle Trek', 699, 1000, '399', '<h2><strong>Aadrai Jungle Trek Information:</strong></h2><ul><li>Deep in the belly of Sahyadri, lies this beautiful and unexplored Aadrai Jungle where the forest floor seldom feels the warm embrace of the sun. The Aadrai trek location was actually discovered by a local villager, who came across the Aadrai forest location by fluke as he had lost his way while hunting.</li><li>This beautiful trek location dates back to the 1st millennium and is located in the Junnar city in the Pune district. Aadrai Jungle trek is a paradise for all trek lovers who are looking for an escape from the monotony of city life. This jungle trek offers the trekkers a much-needed break from the polluted air and every breath of air here feels rejuvenating and refreshing.</li><li>The Aadrai Jungle Trek is a treat for all your senses given its abundant flora and fauna. Along the trail, one will witness various streams and passing waterfalls including a mega 1200 feet tall waterfall.</li><li>The mesmerizing view will seem like out of a fairy-tale with the lush green forests, melodious chirping of the birds, the chittering of the forest animals, and invigorating streams and waterfalls.</li><li>Apart from the lush green forest, the Aadrai trek has a lot to offer like the Kalu waterfall, Nageshwar temple, and many ancient caves- each with a story to tell. Due to Aadrai’s Jungle location, it is one of the most sought-after jungle treks.</li><li>During Monsoons, the Aadrai jungle trek is one of the most exhilarating treks because of its dense forest area. It is one of the most thrilling treks of the Sahyadri range that lies deep within Malshej Ghat.</li></ul><h2><strong>Places to visit near Aadrai Forest :</strong></h2><ul><li>Kalu Waterfall</li><li>Nageshwar temple</li><li>Ancient Caves</li><li>Aadrai jungle</li></ul><h2><strong>Trek Details:&nbsp;</strong></h2><ul><li><strong>Trek Trail:</strong> Jungle trail</li><li><strong>Trek Difficulty</strong>: Easy to Moderate</li><li><strong>Trek Endurance:</strong>&nbsp;Medium/ Average</li><li><strong>Trek Length</strong>: Approx.7 km (One side)</li><li><strong>Trek Duration:</strong>&nbsp;3 hrs&nbsp;(One side)</li><li><strong>Trail Location</strong>: Near Khireshwar Village</li><li><strong>Best Time:</strong> June to October</li><li><strong>Distance from Mumbai:</strong> 138km</li><li><strong>Distance from Pune:</strong> 129km</li></ul><h2><strong>Why Trekhievers for Aadrai Jungle Trek ?</strong></h2><ul><li>3&nbsp;years experience in organizing Aadrai Jungle&nbsp;Trek with all safety protocols.</li><li>Served over 400+ customers last year with amazing reviews.</li><li>We provide one trek leader for every group of 10 people</li><li>We will donate a partial amount of your fee for&nbsp;the village development.</li></ul>', '2022-12-31', NULL, 1, '2022-12-22 03:52:57', '2022-12-22 03:54:19'),
(4, 'Adrai Jungle Trek', '/tours/Trekking_Adrai Jungle Trek - The Unexplored Jungle Trek/iQO7Qh9GNh7P6S78PgojhQhwHofd4BXm1rPcD8IE.jpg', '<h2><strong>Batches&nbsp;:&nbsp;</strong></h2><p><strong>Mumbai:</strong></p><ul><li><strong>July:</strong>&nbsp;22nd, 23rd, 29th, 30th</li><li><strong>August</strong>:&nbsp;5th,<strong>&nbsp;</strong>6th, 12th, 13th,19th,&nbsp; 20th, 26th, 27th</li><li><strong>September</strong>:<strong>&nbsp;</strong>2nd,&nbsp;3rd, 9th, 10th, 16th, 17th, 23rd 24th</li><li><strong>October :</strong> 29th, 30th, 06th, 07th,13th, 14th, 20th, 21st, 27th, 28th</li></ul><p><strong>Note: We need a minimum of 10&nbsp;people to operate Friday batches, if not then it will be shifted to the Saturday batch.</strong></p><p><strong>Pune:</strong></p><ul><li><strong>July:</strong>&nbsp;23rd, 24th,&nbsp;30th, 31st</li><li><strong>August</strong>:<strong>&nbsp;</strong>6th, 7th,&nbsp;13th, 14th,&nbsp;20th, 21st,&nbsp;27th, 28th</li><li><strong>September</strong>:<strong>&nbsp;</strong>3rd, 4th,10th, 11th,17th, 18th,&nbsp;24th, 25th</li></ul><p><strong>Note: We need a minimum of 10&nbsp;people to operate Saturday batches, if not then it will be shifted to the Sunday batch.</strong></p><h2><strong>Event Fees:</strong></h2><ul><li><strong>Mumbai:&nbsp;</strong>1400/-</li><li><strong>Pune:</strong>&nbsp;1400/-</li><li><strong>Base Village:</strong>&nbsp;Rs 699/-</li></ul><p><i>( <strong>Mumbai Pickup</strong>: Borivali, Malad, Goregaon, Andheri, Bandra, Sion, Ghatkopar, Thane, Kalyan&nbsp;)</i></p><p><i>( <strong>Pune Pickup:</strong> Fergussion colllege gate, Kasarwadi )</i></p>', 'shared', '1 Night, 1 Day', 'Adrai Jungle Trek', 699, 1000, '399', '<h2><strong>Aadrai Jungle Trek Information:</strong></h2><ul><li>Deep in the belly of Sahyadri, lies this beautiful and unexplored Aadrai Jungle where the forest floor seldom feels the warm embrace of the sun. The Aadrai trek location was actually discovered by a local villager, who came across the Aadrai forest location by fluke as he had lost his way while hunting.</li><li>This beautiful trek location dates back to the 1st millennium and is located in the Junnar city in the Pune district. Aadrai Jungle trek is a paradise for all trek lovers who are looking for an escape from the monotony of city life. This jungle trek offers the trekkers a much-needed break from the polluted air and every breath of air here feels rejuvenating and refreshing.</li><li>The Aadrai Jungle Trek is a treat for all your senses given its abundant flora and fauna. Along the trail, one will witness various streams and passing waterfalls including a mega 1200 feet tall waterfall.</li><li>The mesmerizing view will seem like out of a fairy-tale with the lush green forests, melodious chirping of the birds, the chittering of the forest animals, and invigorating streams and waterfalls.</li><li>Apart from the lush green forest, the Aadrai trek has a lot to offer like the Kalu waterfall, Nageshwar temple, and many ancient caves- each with a story to tell. Due to Aadrai’s Jungle location, it is one of the most sought-after jungle treks.</li><li>During Monsoons, the Aadrai jungle trek is one of the most exhilarating treks because of its dense forest area. It is one of the most thrilling treks of the Sahyadri range that lies deep within Malshej Ghat.</li></ul><h2><strong>Places to visit near Aadrai Forest :</strong></h2><ul><li>Kalu Waterfall</li><li>Nageshwar temple</li><li>Ancient Caves</li><li>Aadrai jungle</li></ul><h2><strong>Trek Details:&nbsp;</strong></h2><ul><li><strong>Trek Trail:</strong> Jungle trail</li><li><strong>Trek Difficulty</strong>: Easy to Moderate</li><li><strong>Trek Endurance:</strong>&nbsp;Medium/ Average</li><li><strong>Trek Length</strong>: Approx.7 km (One side)</li><li><strong>Trek Duration:</strong>&nbsp;3 hrs&nbsp;(One side)</li><li><strong>Trail Location</strong>: Near Khireshwar Village</li><li><strong>Best Time:</strong> June to October</li><li><strong>Distance from Mumbai:</strong> 138km</li><li><strong>Distance from Pune:</strong> 129km</li></ul><h2><strong>Why Trekhievers for Aadrai Jungle Trek ?</strong></h2><ul><li>3&nbsp;years experience in organizing Aadrai Jungle&nbsp;Trek with all safety protocols.</li><li>Served over 400+ customers last year with amazing reviews.</li><li>We provide one trek leader for every group of 10 people</li><li>We will donate a partial amount of your fee for&nbsp;the village development.</li></ul>', '2022-12-31', NULL, 1, '2022-12-22 03:52:57', '2022-12-22 03:54:19'),
(5, 'Adrai Jungle Trek', '/tours/Trekking_Adrai Jungle Trek - The Unexplored Jungle Trek/iQO7Qh9GNh7P6S78PgojhQhwHofd4BXm1rPcD8IE.jpg', '<h2><strong>Batches&nbsp;:&nbsp;</strong></h2><p><strong>Mumbai:</strong></p><ul><li><strong>July:</strong>&nbsp;22nd, 23rd, 29th, 30th</li><li><strong>August</strong>:&nbsp;5th,<strong>&nbsp;</strong>6th, 12th, 13th,19th,&nbsp; 20th, 26th, 27th</li><li><strong>September</strong>:<strong>&nbsp;</strong>2nd,&nbsp;3rd, 9th, 10th, 16th, 17th, 23rd 24th</li><li><strong>October :</strong> 29th, 30th, 06th, 07th,13th, 14th, 20th, 21st, 27th, 28th</li></ul><p><strong>Note: We need a minimum of 10&nbsp;people to operate Friday batches, if not then it will be shifted to the Saturday batch.</strong></p><p><strong>Pune:</strong></p><ul><li><strong>July:</strong>&nbsp;23rd, 24th,&nbsp;30th, 31st</li><li><strong>August</strong>:<strong>&nbsp;</strong>6th, 7th,&nbsp;13th, 14th,&nbsp;20th, 21st,&nbsp;27th, 28th</li><li><strong>September</strong>:<strong>&nbsp;</strong>3rd, 4th,10th, 11th,17th, 18th,&nbsp;24th, 25th</li></ul><p><strong>Note: We need a minimum of 10&nbsp;people to operate Saturday batches, if not then it will be shifted to the Sunday batch.</strong></p><h2><strong>Event Fees:</strong></h2><ul><li><strong>Mumbai:&nbsp;</strong>1400/-</li><li><strong>Pune:</strong>&nbsp;1400/-</li><li><strong>Base Village:</strong>&nbsp;Rs 699/-</li></ul><p><i>( <strong>Mumbai Pickup</strong>: Borivali, Malad, Goregaon, Andheri, Bandra, Sion, Ghatkopar, Thane, Kalyan&nbsp;)</i></p><p><i>( <strong>Pune Pickup:</strong> Fergussion colllege gate, Kasarwadi )</i></p>', 'shared', '1 Night, 1 Day', 'Adrai Jungle Trek', 699, 1000, '399', '<h2><strong>Aadrai Jungle Trek Information:</strong></h2><ul><li>Deep in the belly of Sahyadri, lies this beautiful and unexplored Aadrai Jungle where the forest floor seldom feels the warm embrace of the sun. The Aadrai trek location was actually discovered by a local villager, who came across the Aadrai forest location by fluke as he had lost his way while hunting.</li><li>This beautiful trek location dates back to the 1st millennium and is located in the Junnar city in the Pune district. Aadrai Jungle trek is a paradise for all trek lovers who are looking for an escape from the monotony of city life. This jungle trek offers the trekkers a much-needed break from the polluted air and every breath of air here feels rejuvenating and refreshing.</li><li>The Aadrai Jungle Trek is a treat for all your senses given its abundant flora and fauna. Along the trail, one will witness various streams and passing waterfalls including a mega 1200 feet tall waterfall.</li><li>The mesmerizing view will seem like out of a fairy-tale with the lush green forests, melodious chirping of the birds, the chittering of the forest animals, and invigorating streams and waterfalls.</li><li>Apart from the lush green forest, the Aadrai trek has a lot to offer like the Kalu waterfall, Nageshwar temple, and many ancient caves- each with a story to tell. Due to Aadrai’s Jungle location, it is one of the most sought-after jungle treks.</li><li>During Monsoons, the Aadrai jungle trek is one of the most exhilarating treks because of its dense forest area. It is one of the most thrilling treks of the Sahyadri range that lies deep within Malshej Ghat.</li></ul><h2><strong>Places to visit near Aadrai Forest :</strong></h2><ul><li>Kalu Waterfall</li><li>Nageshwar temple</li><li>Ancient Caves</li><li>Aadrai jungle</li></ul><h2><strong>Trek Details:&nbsp;</strong></h2><ul><li><strong>Trek Trail:</strong> Jungle trail</li><li><strong>Trek Difficulty</strong>: Easy to Moderate</li><li><strong>Trek Endurance:</strong>&nbsp;Medium/ Average</li><li><strong>Trek Length</strong>: Approx.7 km (One side)</li><li><strong>Trek Duration:</strong>&nbsp;3 hrs&nbsp;(One side)</li><li><strong>Trail Location</strong>: Near Khireshwar Village</li><li><strong>Best Time:</strong> June to October</li><li><strong>Distance from Mumbai:</strong> 138km</li><li><strong>Distance from Pune:</strong> 129km</li></ul><h2><strong>Why Trekhievers for Aadrai Jungle Trek ?</strong></h2><ul><li>3&nbsp;years experience in organizing Aadrai Jungle&nbsp;Trek with all safety protocols.</li><li>Served over 400+ customers last year with amazing reviews.</li><li>We provide one trek leader for every group of 10 people</li><li>We will donate a partial amount of your fee for&nbsp;the village development.</li></ul>', '2022-12-31', NULL, 1, '2022-12-22 03:52:57', '2022-12-22 03:54:19');

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

--
-- Dumping data for table `gallaries`
--

INSERT INTO `gallaries` (`id`, `albumtitle`, `cover`, `location`, `created_at`, `updated_at`) VALUES
(1, 'Pawna Lake', '/albums/Pawna Lake_Lonavala/mJbfnPE8EFEe0ZPMQqD85jXHaJQqoBzEcaJx5D28.jpg', 'Lonavala', '2022-12-22 04:45:23', '2022-12-22 04:45:23'),
(2, 'Kedarnath', '/albums/Kedarnath_Bhadri Kedarnath/o5JZEKdiqlPGNDyZ8SSA2uxiPYBDUXXFfjlAs6uX.jpg', 'Bhadri Kedarnath', '2022-12-22 04:46:19', '2022-12-22 04:46:19'),
(3, 'Alibaug Beach', '/albums/Alibaug Beach Camping - Revdanda Beach_Alibaug Beach Camping - Revdanda Beach/Fj1CiSmUVa4dUpqzHBUexBYvsTENsORiPFjXuPbz.jpg', 'Alibaug Beach Camping - Revdanda Beach', '2022-12-22 04:47:11', '2022-12-22 04:47:28'),
(4, 'Revdanda Beach', '/albums/Revdanda Beach_Revdanda Beach/RCunuR4UnHvmCWwYVFm5q8gX8vjeKqpn5pl2gaqf.jpg', 'Revdanda Beach', '2022-12-22 04:48:00', '2022-12-22 04:48:00');

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

--
-- Dumping data for table `gallary_images`
--

INSERT INTO `gallary_images` (`id`, `image`, `name`, `gallary_id`, `created_at`, `updated_at`) VALUES
(1, '/albums/Pawna Lake_Lonavalaimages/6zKir6GsD7jXVT20ACLM6qBmcso1sUEYVLkgksri.jpg', NULL, 1, '2022-12-22 04:45:37', '2022-12-22 04:45:37'),
(2, '/albums/Pawna Lake_Lonavalaimages/mK2KchNTdkjok3854gst0w3TQL1tr8DCPGOSNKjA.jpg', NULL, 1, '2022-12-22 04:45:37', '2022-12-22 04:45:37'),
(3, '/albums/Pawna Lake_Lonavalaimages/EHKMTaFOyxGFlwuZ8nvxbGvZ5tlLI5j3UFLZueVL.jpg', NULL, 1, '2022-12-22 04:45:37', '2022-12-22 04:45:37'),
(4, '/albums/Pawna Lake_Lonavalaimages/uEWOKF8f0mQwFssG2MoLCh7f14RFGnJjxsVxzfIC.jpg', NULL, 1, '2022-12-22 04:45:37', '2022-12-22 04:45:37'),
(5, '/albums/Pawna Lake_Lonavalaimages/8pv0ET3U1snqsF85iqnePDUD2uHDqwyxmhuinwnU.jpg', NULL, 1, '2022-12-22 04:45:37', '2022-12-22 04:45:37'),
(6, '/albums/Pawna Lake_Lonavalaimages/RnCkykaLABWMgZyLZ9g6vbuuaPnYklqaSubImvCz.jpg', NULL, 1, '2022-12-22 04:45:37', '2022-12-22 04:45:37'),
(7, '/albums/Pawna Lake_Lonavalaimages/XW3RBmhjZ8Dr00MWR4KqeLcVtAE1mh6oLvwmrHSl.jpg', NULL, 1, '2022-12-22 04:45:37', '2022-12-22 04:45:37'),
(8, '/albums/Pawna Lake_Lonavalaimages/JxbeLImsxPp0vTUPwch5WtsGdklZHu0QwNSeki0N.jpg', NULL, 1, '2022-12-22 04:45:37', '2022-12-22 04:45:37'),
(9, '/albums/Pawna Lake_Lonavalaimages/CilMdwiSdskK8EoEZvs75KF7DQGlvUnAasYs0LX2.jpg', NULL, 1, '2022-12-22 04:45:37', '2022-12-22 04:45:37'),
(10, '/albums/Pawna Lake_Lonavalaimages/s818DiEVXpx2eqNl2J8Ak8pVVjO4FZn0qnSGenW8.jpg', NULL, 1, '2022-12-22 04:45:37', '2022-12-22 04:45:37'),
(11, '/albums/Kedarnath_Bhadri Kedarnathimages/wfdVGbbBsiWk9LayUmNm7M6tokuBLJ1Z5ij5qC9T.jpg', NULL, 2, '2022-12-22 04:46:42', '2022-12-22 04:46:42'),
(12, '/albums/Kedarnath_Bhadri Kedarnathimages/XHh9gyCYxf90PTnRrzGroBvdSyEHWEUtzaetnUo9.jpg', NULL, 2, '2022-12-22 04:46:42', '2022-12-22 04:46:42'),
(13, '/albums/Kedarnath_Bhadri Kedarnathimages/ezmt25onuy3XeqXKG4tYpgNgUl9CTiUsMPoyRRhj.jpg', NULL, 2, '2022-12-22 04:46:42', '2022-12-22 04:46:42'),
(14, '/albums/Kedarnath_Bhadri Kedarnathimages/QQdjTM8xX5C5ITI9C3ep9qjxcxodhGjQ3PkMH8Yx.jpg', NULL, 2, '2022-12-22 04:46:42', '2022-12-22 04:46:42'),
(15, '/albums/Kedarnath_Bhadri Kedarnathimages/XuLMW26j7xptldO7DYatgQ6SpDxvIh0tXpqJLUAP.jpg', NULL, 2, '2022-12-22 04:46:42', '2022-12-22 04:46:42'),
(16, '/albums/Alibaug Beach_Alibaug Beach Camping - Revdanda Beachimages/yihOVPGvOX0ZsCjQtC3BC8xmUM7Brf2B62Bz4q02.jpg', NULL, 3, '2022-12-22 04:48:17', '2022-12-22 04:48:17'),
(17, '/albums/Alibaug Beach_Alibaug Beach Camping - Revdanda Beachimages/SL99vXceVdO3VPc0jGhXXfjJ7u4Fb0VWyY9GGJiS.jpg', NULL, 3, '2022-12-22 04:48:17', '2022-12-22 04:48:17'),
(18, '/albums/Alibaug Beach_Alibaug Beach Camping - Revdanda Beachimages/z0OjWct7uYhRh8KaEjgqnTFuIYc4n67S1F3MZh1M.jpg', NULL, 3, '2022-12-22 04:48:17', '2022-12-22 04:48:17'),
(19, '/albums/Alibaug Beach_Alibaug Beach Camping - Revdanda Beachimages/PEI9wH2qSl4qqe5Pjyv0exPNtRVxj3RJMtywt2KC.jpg', NULL, 3, '2022-12-22 04:48:17', '2022-12-22 04:48:17'),
(20, '/albums/Revdanda Beach_Revdanda Beachimages/ZhT5TD36GAweKolEGTfkfU6L5YzICEvmURfbKBDW.jpg', NULL, 4, '2022-12-22 04:48:26', '2022-12-22 04:48:26'),
(21, '/albums/Revdanda Beach_Revdanda Beachimages/3wO8DGX7IYoNjCe5P4QEOx6Q8LPN74BaIr2XxfMi.jpg', NULL, 4, '2022-12-22 04:48:26', '2022-12-22 04:48:26'),
(22, '/albums/Revdanda Beach_Revdanda Beachimages/U9Z7TBgXoACbCNyJYa7pfKHSY0OrX5BrCqZ6nNbG.jpg', NULL, 4, '2022-12-22 04:48:26', '2022-12-22 04:48:26'),
(23, '/albums/Revdanda Beach_Revdanda Beachimages/6xmPVrULRZdYah5txLBgmJeRphaZ3uYycIHhLrHf.jpg', NULL, 4, '2022-12-22 04:48:26', '2022-12-22 04:48:26');

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
(11, '2022_12_22_075634_create_blogs_table', 1);

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
(1, '/tours/Trekking_Adrai Jungle Trek - The Unexplored Jungle Trek/trips/bf3VT3SIlIULIc8wVJnV2M4u8V8I2eh2EZiDO7iZ.jpg', 1, '2022-12-22 03:52:57', '2022-12-22 03:52:57'),
(2, '/tours/Trekking_Adrai Jungle Trek - The Unexplored Jungle Trek/trips/VVFCWePcUmkNUeK8JVMNDjQMaywEc37mPizvwVzh.jpg', 1, '2022-12-22 03:52:57', '2022-12-22 03:52:57'),
(3, '/tours/Trekking_Adrai Jungle Trek - The Unexplored Jungle Trek/trips/A8ueET55Oq4rCTMj7WcrHN4iy53cnNsrW23pMTwf.jpg', 1, '2022-12-22 03:52:57', '2022-12-22 03:52:57'),
(4, '/tours/Trekking_Adrai Jungle Trek - The Unexplored Jungle Trek/trips/pgPpfCViUi9d9Ow5Ea46JlTN2nkh3xqwkvhnl9Dw.jpg', 1, '2022-12-22 03:52:57', '2022-12-22 03:52:57'),
(5, '/tours/Trekking_Adrai Jungle Trek - The Unexplored Jungle Trek/trips/xjq7sOEwb6gCUP9dewVL1Z2IvGLNrNF1KFkIYQ4L.jpg', 1, '2022-12-22 03:52:57', '2022-12-22 03:52:57'),
(6, '/tours/Trekking_Adrai Jungle Trek - The Unexplored Jungle Trek/trips/iE07010QV7eL5Q45Ow9wQVj1V4mTaaWvwvFBi1MB.jpg', 1, '2022-12-22 03:52:57', '2022-12-22 03:52:57'),
(7, '/tours/Trekking_Adrai Jungle Trek - The Unexplored Jungle Trek/trips/CtRJ6YQGlOMiHvaigeCb3cLLWTdNVqUkCzwANqit.jpg', 1, '2022-12-22 03:52:57', '2022-12-22 03:52:57');

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
(1, 'Kunal Yadav Pandharkar', '/users/Kunal Yadav Pandharkar 1/vsvjKWKLs5YIxDkpbR6zidGfWxvqMO7B3wZWLoZH.jpg', '21', 'Male', '7774843561', 'Adarsh Colony, Purna, Dist. Parbhani', NULL, 'kpthebaa@gmail.com', 0, 1, NULL, '$2y$10$y7I2HDbphm19WopcfHxYveFos1DgFJHiPS4/gnGhtp91mQ/HhPa62', NULL, '2022-12-22 03:41:59', '2022-12-22 05:39:27'),
(2, 'sayali wagh', NULL, NULL, NULL, NULL, NULL, NULL, 'sayali@gmail.com', 0, 1, NULL, '$2y$10$qP8jPsQc/yR/4v1jfD.L/e8dCgIeD6esXHDH8v.qPyDdsQRrCMSlq', NULL, '2022-12-23 02:23:41', '2022-12-23 02:23:41');

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
  ADD KEY `bookings_event_info_id_foreign` (`event_info_id`);

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
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `enquiries`
--
ALTER TABLE `enquiries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `event_categories`
--
ALTER TABLE `event_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `event_dates_rates`
--
ALTER TABLE `event_dates_rates`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `event_infos`
--
ALTER TABLE `event_infos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `gallaries`
--
ALTER TABLE `gallaries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `gallary_images`
--
ALTER TABLE `gallary_images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tourimages`
--
ALTER TABLE `tourimages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bookings`
--
ALTER TABLE `bookings`
  ADD CONSTRAINT `bookings_event_info_id_foreign` FOREIGN KEY (`event_info_id`) REFERENCES `event_infos` (`id`) ON DELETE CASCADE;

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
-- Constraints for table `tourimages`
--
ALTER TABLE `tourimages`
  ADD CONSTRAINT `tourimages_event_info_id_foreign` FOREIGN KEY (`event_info_id`) REFERENCES `event_infos` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
