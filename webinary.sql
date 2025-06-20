-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 19, 2025 at 02:03 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webinary`
--

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `company` varchar(255) DEFAULT NULL,
  `designation` varchar(255) DEFAULT NULL,
  `feedback` text DEFAULT NULL,
  `comment` text DEFAULT NULL,
  `homeview` tinyint(1) NOT NULL DEFAULT 0,
  `project_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`id`, `name`, `email`, `company`, `designation`, `feedback`, `comment`, `homeview`, `project_id`, `created_at`, `updated_at`) VALUES
(1, 'John Doe', 'john@example.com', 'TechNova Ltd.', 'CTO', 'Webinary helped us launch our platform faster than expected.', 'Amazing service and support.', 1, 1, '2025-06-19 10:09:10', '2025-06-19 04:48:54'),
(2, 'Sara Ahmed', 'sara@innovatehub.io', 'Innovate Hub', 'Product Manager', 'The AI integration was smooth and impactful.', 'Great experience overall.', 0, 2, '2025-06-19 10:09:10', '2025-06-19 04:48:54'),
(3, 'Carlos Reyes', 'carlos@finverse.com', 'Finverse', 'Lead Developer', 'Backend scalability was on point.', 'Highly recommended.', 0, 1, '2025-06-19 10:09:10', '2025-06-19 04:48:54'),
(4, 'Emily Zhang', 'emily@healthlytics.com', 'Healthlytics', 'Data Scientist', 'Their analytics dashboard really changed how we operate.', 'Excellent UX.', 0, 3, '2025-06-19 10:09:10', '2025-06-19 04:48:54'),
(5, 'David Smith', 'david@quantumcore.io', 'QuantumCore', 'Founder', 'Secure and performant cloud systems.', 'Top-notch engineering.', 0, 4, '2025-06-19 10:09:10', '2025-06-19 04:48:54'),
(6, 'Lina Kapoor', 'lina@edutechx.com', 'EduTechX', 'Director', 'Great LMS integration and support.', '5 stars service.', 0, 2, '2025-06-19 10:09:10', '2025-06-19 04:48:54'),
(7, 'Robert Kim', 'robert@autonomech.com', 'AutonoMech', 'Operations Head', 'Helped optimize our automation stack.', 'Would work again.', 0, 5, '2025-06-19 10:09:10', '2025-06-19 04:48:54'),
(8, 'Fatima Al-Mansoori', 'fatima@securegrid.ae', 'SecureGrid', 'Security Analyst', 'Security-first design was deeply appreciated.', 'Responsive and skilled.', 0, 4, '2025-06-19 10:09:10', '2025-06-19 04:48:54'),
(9, 'Miguel Santos', 'miguel@blockify.mx', 'Blockify', 'Blockchain Architect', 'Helped us scale our blockchain solution.', 'Highly skilled dev team.', 0, 3, '2025-06-19 10:09:10', '2025-06-19 04:48:54'),
(10, 'Sophia Lee', 'sophia@greenglobe.org', 'GreenGlobe', 'Digital Strategist', 'Eco-friendly and efficient tech delivery.', 'Great collaboration.', 1, 2, '2025-06-19 10:09:10', '2025-06-19 04:48:54');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `header`
--

CREATE TABLE `header` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `option` varchar(255) NOT NULL,
  `link` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `header`
--

INSERT INTO `header` (`id`, `option`, `link`, `created_at`, `updated_at`) VALUES
(1, 'home', '', '2025-06-15 18:30:00', '2025-06-15 18:30:00'),
(2, 'about', 'about', NULL, NULL),
(3, 'services', 'services', NULL, NULL),
(4, 'portfolio', 'portfolio', NULL, NULL),
(5, 'contact', 'contact', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `homepagesections`
--

CREATE TABLE `homepagesections` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `section` varchar(255) NOT NULL,
  `content` longtext NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp(),
  `title` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `homepagesections`
--

INSERT INTO `homepagesections` (`id`, `section`, `content`, `created_at`, `updated_at`, `title`) VALUES
(1, 'first', 'At WEBINARY, we are at the forefront of technological advancement, specializing in four key areas: Artificial Intelligence, Cloud Computing, Engineering Solutions, and Mobile Development. Our mission is to bring innovation to your fingertips, empowering your business to thrive in a rapidly evolving digital landscape. Artificial Intelligence (AI): Harness the power of AI to transform your operations. Our team of experts develops intelligent systems that enhance decision-making, automate processes, and provide deep insights through data analysis. From machine learning algorithms to natural language processing, we tailor AI solutions that meet your unique business needs. Cloud Computing: Embrace the future with our cloud computing services. We offer scalable and secure cloud solutions that enable you to store, manage, and analyze data efficiently. Whether you need public, private, or hybrid cloud services, our cloud experts ensure seamless integration and optimal performance, allowing you to focus on what matters most—growing your business. Engineering Solutions: Our engineering solutions are designed to solve complex challenges and drive innovation. We leverage cutting-edge technologies and methodologies to deliver high-quality products and services. From product design and development to system integration and testing, our engineering team is dedicated to providing solutions that are not only effective but also sustainable. Mobile Development: In today’s mobile-first world, having a robust mobile presence is essential. Our mobile development team creates user-friendly applications that engage your audience and enhance customer experience. We specialize in both iOS and Android platforms, ensuring that your app is optimized for performance and usability. At [Your Company Name], we believe in collaboration and innovation. Our expert solutions are tailored to meet the specific needs of your business, ensuring that you stay ahead of the competition. Let us partner with you to explore new possibilities and drive your success in the digital age.', NULL, '2025-06-19 00:32:46', 'Welcome to WEBINARY'),
(2, 'aboutus', 'At Webinary, we are passionate about shaping the future through technology. Our expertise spans across Artificial Intelligence, Cloud Computing, Engineering Solutions, and Mobile Development.\n\nWe deliver cutting-edge solutions designed to transform businesses, empower innovation, and drive digital growth. Whether you\'re looking to harness the power of AI, build scalable cloud systems, engineer complex systems, or create powerful mobile experiences — we’ve got you covered. We deliver cutting-edge solutions designed to transform businesses, empower innovation, and drive digital growth. Whether you\'re looking to harness the power of AI, build scalable cloud systems, engineer complex systems, or create powerful mobile experiences — we’ve got you covered. We deliver cutting-edge solutions designed to transform businesses, empower innovation, and drive digital growth. Whether you\'re looking to harness the power of AI, build scalable cloud systems, engineer complex systems, or create powerful mobile experiences — we’ve got you covered. We deliver cutting-edge solutions designed to transform businesses, empower innovation, and drive digital growth. Whether you\'re looking to harness the power of AI, build scalable cloud systems, engineer complex systems, or create powerful mobile experiences — we’ve got you covered.\n', '2025-06-18 11:34:55', '2025-06-18 11:34:55', 'About Us'),
(3, 'services', 'At Webinary, we provide innovative and scalable technology solutions designed to meet the evolving needs of modern businesses. Our expertise spans artificial intelligence, cloud computing, engineering systems, and mobile application development. We help organizations harness the power of technology to drive efficiency, accelerate growth, and stay ahead of the curve. Whether you\'re building from the ground up or optimizing existing systems, Webinary is your trusted partner in delivering impactful digital transformation.\r\nAt Webinary, we provide innovative and scalable technology solutions designed to meet the evolving needs of modern businesses. Our expertise spans artificial intelligence, cloud computing, engineering systems, and mobile application development. We help organizations harness the power of technology to drive efficiency, accelerate growth, and stay ahead of the curve. Whether you\'re building from the ground up or optimizing existing systems, Webinary is your trusted partner in delivering impactful digital transformation.', '2025-06-18 11:37:19', '2025-06-19 00:51:31', 'Services');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `menu_options`
--

CREATE TABLE `menu_options` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `section` varchar(255) DEFAULT NULL,
  `options` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `menu_options`
--

INSERT INTO `menu_options` (`id`, `section`, `options`, `created_at`, `updated_at`) VALUES
(1, 'header_section', 'home,About,Services,Portfolio,Contact', NULL, NULL);

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
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2025_06_11_095802_services', 2),
(5, '2025_06_12_094546_create_projects_table', 3),
(6, '2025_06_12_102404_create_reviews_table', 4),
(7, '2025_06_16_054345_menu_options', 5),
(8, '2025_06_16_063047_header_options', 6),
(9, '2025_06_18_111450_create_homepagesections_table', 7),
(10, '2025_06_19_100641_create_clients_table', 8);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `link` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `playstoreId` varchar(255) DEFAULT NULL,
  `homeview` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `title`, `description`, `image`, `link`, `created_at`, `updated_at`, `playstoreId`, `homeview`) VALUES
(1, 'E-commerce Platform', 'A full-stack web store with admin dashboard.', NULL, 'https://example.com/project1', '2025-06-12 09:46:54', '2025-06-19 05:34:06', NULL, 1),
(2, 'Mobile App UI', 'A modern app interface design.', NULL, 'https://example.com/project2', '2025-06-12 09:46:54', '2025-06-19 05:34:06', NULL, 1),
(3, 'E-commerce Platform', 'A full-stack web store with admin dashboard.', NULL, 'https://example.com/project1', '2025-06-12 09:55:27', '2025-06-19 05:34:06', NULL, 1),
(4, 'Mobile App UI', 'A modern app interface design.', NULL, 'https://example.com/project2', '2025-06-12 09:55:27', '2025-06-19 05:34:06', NULL, 1),
(5, 'Portfolio Website', 'A personal portfolio site built with HTML, CSS, and JavaScript.', NULL, 'https://example.com/project3', '2025-06-12 09:55:27', '2025-06-19 05:34:06', NULL, 0),
(6, 'Blog System', 'A dynamic blog system with admin panel and user comments.', NULL, 'https://example.com/project4', '2025-06-12 09:55:27', '2025-06-19 05:34:06', NULL, 0),
(7, 'Restaurant App', 'An ordering and reservation system for a restaurant.', NULL, 'https://example.com/project5', '2025-06-12 09:55:27', '2025-06-19 05:34:06', NULL, 0),
(8, 'Task Management Tool', 'A project and task management app like Trello.', NULL, 'https://example.com/project6', '2025-06-12 09:55:27', '2025-06-19 05:34:06', NULL, 1),
(9, 'Online Learning Platform', 'A course management system with video streaming.', NULL, 'https://example.com/project7', '2025-06-12 09:55:27', '2025-06-19 05:34:06', NULL, 0),
(10, 'Weather Forecast App', 'A responsive app showing real-time weather updates.', NULL, 'https://example.com/project8', '2025-06-12 09:55:27', '2025-06-19 05:34:06', NULL, 0),
(11, 'Finance Tracker', 'A budgeting app for personal expense tracking.', NULL, 'https://example.com/project9', '2025-06-12 09:55:27', '2025-06-19 05:34:06', NULL, 0),
(12, 'Event Booking System', 'A complete system for managing and booking events.', NULL, 'https://example.com/project10', '2025-06-12 09:55:27', '2025-06-19 05:34:06', NULL, 0),
(13, 'doodhvale', 'This application is used for ordering milk and various daily essential. Payment is done through Paytm and HDFC payment gateways.', NULL, 'https://www.doodhvale.com/', NULL, '2025-06-19 05:34:06', 'com.technologies.subtlelabs.doodhvale', 0),
(14, 'Kripalu Nidhi', 'Kripalu Nidhi application is developed for Jagatguru Kripalu Parishad where user and see Video and listen to Audio of jagatguru Kripalu Maharaj we have implemented Razorpay and PayPal payment gateway also we have implemented Exo player and YouTube player for playing video.', NULL, 'https://kripalunidhi.org/', NULL, '2025-06-19 05:34:06', 'com.kripalunidhi', 0);

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `client_name` varchar(255) NOT NULL,
  `designation` varchar(255) DEFAULT NULL,
  `comment` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `homeview` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`id`, `client_name`, `designation`, `comment`, `created_at`, `updated_at`, `homeview`) VALUES
(1, 'John Doe', 'CEO, TechNova', 'Webinary transformed our digital presence beyond expectations!', '2025-06-12 10:27:25', '2025-06-19 04:46:38', 1),
(2, 'Jane Smith', 'CTO, InnovateX', 'Highly professional team with innovative solutions.', '2025-06-12 10:27:25', '2025-06-19 04:46:38', 1),
(3, 'Alice Johnson', 'Marketing Lead, SkyReach', 'They helped us scale our marketing automation efficiently.', '2025-06-12 10:27:25', '2025-06-19 04:46:38', 0),
(4, 'Robert Brown', 'Founder, CodeGrid', 'Great experience working with Webinary – would definitely recommend.', '2025-06-12 10:27:25', '2025-06-19 04:46:38', 0),
(5, 'Emily Davis', 'Product Manager, NextGenApps', 'Our product launch went flawlessly thanks to their tech expertise.', '2025-06-12 10:27:25', '2025-06-19 04:46:38', 0),
(6, 'Michael Lee', 'Operations Head, Finverse', 'Reliable, smart, and always on time. Fantastic service.', '2025-06-12 10:27:25', '2025-06-19 04:46:38', 0),
(7, 'Sarah Wilson', 'UX Designer, PixelWave', 'The UI/UX support was top-notch and aligned with our goals.', '2025-06-12 10:27:25', '2025-06-19 04:46:38', 1),
(8, 'David Clark', 'Manager, CloudSphere', 'They delivered exactly what we envisioned for our cloud migration.', '2025-06-12 10:27:25', '2025-06-19 04:46:38', 1),
(9, 'Laura Hall', 'Engineer, FutureTech', 'Always proactive, responsive, and knowledgeable. Highly satisfied.', '2025-06-12 10:27:25', '2025-06-19 04:46:38', 0),
(10, 'Daniel Lewis', 'Director, GreenStack', 'The best tech partner we’ve worked with in the last 5 years.', '2025-06-12 10:27:25', '2025-06-19 04:46:38', 0);

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `service_name` varchar(255) NOT NULL,
  `service_content` longtext NOT NULL,
  `service_list` varchar(255) NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `service_name`, `service_content`, `service_list`, `created_at`) VALUES
(1, 'Website Design Development', 'Explore our comprehensive range of website development services, covering everything from initial consultation to final delivery and ongoing maintenance.', 'eCommerce Website Development,Content Management System Development,Mobile Website Development,Search Engine Optimization,Front-end Development,Back-end Development,Enterprise Website Application,this also', 20250611),
(2, 'Custom SoftwareDevelopment', 'Address intricate business obstacles with our adept team of software engineers and architects. We stand at the forefront as a premier software engineering firm, harnessing cutting-edge technologies to deliver innovative, agile, and accurate solutions.', 'Software Consulting,Web App Development,Mobile App Development,Software QA and Testing,DevOps,Software Modernization', 20250611),
(4, 'Mobile App Development', 'We create fast, reliable, and user-friendly mobile applications for iOS and Android platforms.', 'iOS Development, Android Development, Flutter Apps, Cross-Platform Solutions', 2025),
(5, 'Cloud Solutions', 'Scalable and secure cloud infrastructure setup, deployment, and management for businesses.', 'AWS, Azure, Google Cloud, DevOps Automation, Cloud Migration', 2025),
(6, 'AI & Machine Learning', 'Build intelligent systems using AI and ML to automate tasks and gain insights from data.', 'Predictive Analytics, NLP, Chatbots, Data Mining, Model Training', 2025),
(7, 'Software Consulting', 'Expert software consulting services to streamline your tech stack and development process.', 'Technical Strategy, Architecture Review, Code Audits, Project Planning', 2025),
(9, 'UI/UX Design', 'Create stunning, user-centered interfaces with our expert UI/UX design services.', 'Wireframing, Prototyping, User Research, Mobile Design, Web App Design', 2025),
(10, 'IT Infrastructure Management', 'Reliable infrastructure management services to ensure performance and security.', 'Network Setup, Server Monitoring, Security Audits, Backup Solutions', 2025);

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('2F58ldVdjd01jLy5zxBA4BUo8g07pexgcAvkX5cs', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/137.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoidzFTdjFqNE5lbGw4WXAwRFZIalBJQ09EZzBVUUpvZDZRRjdyNEpBQyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1750163136),
('zXJFI7gt9mMeadEjsPHe28DpdJK0zyplbkdl0EPs', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/137.0.0.0 Safari/537.36', 'YTozOntzOjk6Il9wcmV2aW91cyI7YToxOntzOjM6InVybCI7czozMjoiaHR0cDovLzEyNy4wLjAuMTo4MDAwL2FkbWluTG9naW4iO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjY6Il90b2tlbiI7czo0MDoieUxLM2ZkdFlWSldUMnBXc1FOcFZ5N3VxdWpsa21tcGt1UkdoalhQbyI7fQ==', 1750240224);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`),
  ADD KEY `clients_project_id_foreign` (`project_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `header`
--
ALTER TABLE `header`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `homepagesections`
--
ALTER TABLE `homepagesections`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu_options`
--
ALTER TABLE `menu_options`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`),
  ADD KEY `services_service_name_index` (`service_name`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

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
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `header`
--
ALTER TABLE `header`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `homepagesections`
--
ALTER TABLE `homepagesections`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `menu_options`
--
ALTER TABLE `menu_options`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `clients`
--
ALTER TABLE `clients`
  ADD CONSTRAINT `clients_project_id_foreign` FOREIGN KEY (`project_id`) REFERENCES `projects` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
