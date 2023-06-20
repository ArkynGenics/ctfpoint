-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 15, 2023 at 06:04 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ctfpoint`
--

create database ctfpoint;
use ctfpoint;
-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`category_id`, `category_name`) VALUES
(2, 'Cryptography'),
(3, 'Pwn'),
(4, 'Reverse Engineering'),
(1, 'Web');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `event_id` int(11) NOT NULL,
  `event_name` varchar(50) NOT NULL,
  `event_description` text NOT NULL,
  `start_date` date NOT NULL,
  `event_organizer` varchar(50) DEFAULT NULL,
  `status` int(11) NOT NULL,
  `event_url` text DEFAULT NULL,
  `image_url` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`event_id`, `event_name`, `event_description`, `start_date`, `event_organizer`, `status`, `event_url`, `image_url`) VALUES
(1, 'CTF Contest 2023', 'Join our exciting CTF contest and test your hacking skills!', '2023-06-15', 'XYZ Security', 1, 'http://www.example.com/ctf-contest', 'http://www.example.com/images/ctf-contest.jpg'),
(2, 'Hackers Paradise CTF', 'Get ready for an intense CTF challenge with mind-bending puzzles!', '2023-07-01', 'ABC Cybersecurity', 1, 'http://www.example.com/hackers-paradise-ctf', 'http://www.example.com/images/hackers-paradise-ctf.jpg'),
(3, 'CyberWar CTF Championship', 'Compete against the best hackers worldwide and claim the title!', '2023-08-10', 'Cyber Warriors', 1, 'http://www.example.com/cyberwar-ctf-championship', 'http://www.example.com/images/cyberwar-ctf-championship.jpg'),
(4, 'CTF Mastermind Challenge', 'Test your skills in this unique CTF event where only the best prevail.', '2023-09-05', 'Mastermind Security', 1, 'http://www.example.com/ctf-mastermind-challenge', 'http://www.example.com/images/ctf-mastermind-challenge.jpg'),
(5, 'Code Breakers CTF', 'Crack the codes and puzzles to emerge as the ultimate code breaker!', '2023-10-20', 'Code Crackers Inc.', 1, 'http://www.example.com/code-breakers-ctf', 'http://www.example.com/images/code-breakers-ctf.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `feedbacks`
--

CREATE TABLE `feedbacks` (
  `feedback_id` int(11) NOT NULL,
  `full_name` text NOT NULL,
  `email_address` varchar(100) NOT NULL,
  `feedback_content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `feedbacks`
--

INSERT INTO `feedbacks` (`feedback_id`, `full_name`, `email_address`, `feedback_content`) VALUES
(1, 'John Doe', 'johndoe@example.com', 'I really like the design of the website. It\'s visually appealing and user-friendly.'),
(2, 'Jane Smith', 'janesmith@example.com', 'The website\'s loading speed is impressive. It makes browsing a seamless experience.'),
(3, 'Alice Johnson', 'alicejohnson@example.com', 'I encountered a broken link on the website. Please fix it.'),
(4, 'Bob Anderson', 'bobanderson@example.com', 'The content on the website is informative and well-written. Great job!'),
(5, 'Sarah Williams', 'sarahwilliams@example.com', 'I had some trouble navigating through the website. It would be helpful to have a more intuitive menu.'),
(6, 'David Thompson', 'davidthompson@example.com', 'The contact form on the website is not working. I tried submitting my query, but it failed.'),
(7, 'Emily Davis', 'emilydavis@example.com', 'The website lacks a search functionality. It would be convenient for users to search for specific information.');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `full_name` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobile_number` varchar(50) NOT NULL,
  `education` varchar(50) NOT NULL,
  `country` varchar(50) NOT NULL,
  `region` varchar(100) NOT NULL,
  `profession` varchar(100) DEFAULT NULL,
  `password` varchar(100) NOT NULL,
  `role` int(11) NOT NULL DEFAULT 0,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `full_name`, `email`, `mobile_number`, `education`, `country`, `region`, `profession`, `password`, `role`, `updated_at`, `created_at`) VALUES
(1, 'john_doe', 'John Doe', 'johndoe@example.com', '1234567890', 'Bachelor\'s Degree', 'United States', 'California', 'Software Engineer', '$2b$10$dkWUjOrgWn1e/XlBTP9JoOSL0nhDvVQ4aaJlrLf296PVoeBwDu4oq', 0, '2023-06-08 00:36:42', '2023-06-08 00:36:42'),
(2, 'arkoov', 'arkoov', 'arkoov@gmail.com', '08283427423493', 'Highschooler', 'Indonesia', '-', 'Student', '$2b$10$xcGZOzxwR5y3kMdNDL8jSuSjNJ/ZRThk5s6vJnjs2hvB8uTkrLKzC', 0, '2023-06-08 00:44:15', '2023-06-08 00:44:15'),
(3, 'mole', 'mole', 'mole@gmail.com', '29r2045r2', 'adfasdfasadfasd', 'dasdfsad', 'dfadsfa', 'sdaffasdf', '$2b$10$ZY34fp1JkB24rwsSVAo15ugumW0IyFP6XbqKafgyCF682GfhvRNym', 0, '2023-06-08 01:02:00', '2023-06-08 01:02:00'),
(6, 'molen', 'molen', 'molen@gmail.com', '29r2045r2', 'adfasdfasadfasd', 'dasdfsad', 'dfadsfa', 'sdaffasdf', '$2b$10$NljbwVEKtTvhBVOMXTpAwOpWU4.HJSW1bOe7bnBp37EhswFzuK09O', 0, '2023-06-08 01:02:57', '2023-06-08 01:02:57'),
(7, 'nicholas', 'Nicholas', 'nicsap@gmail.com', '082938943', '', 'singapore', 'alabama', 'Student', '$2b$10$DpCIU9waGl4ZB6.YSF3uCuJRrJKzA9PANdZ4NM2VjHywTbZMXuWaW', 0, '2023-06-08 02:39:30', '2023-06-08 02:39:30'),
(8, 'jon', 'Nicolas Saputra Gunawan', 'nicolas.gunawan001@binus.ac.id', '08577776121212', 'Bachelor of Science', 'Indonesia', 'West Java', 'Pentester', '$2b$10$2M9RNMxC7vcw9ygT7NMM0eHdyr3BhINXWYvoUrKVNRmitu8iVHdxa', 0, '2023-06-08 03:12:12', '2023-06-08 03:12:12');

-- --------------------------------------------------------

--
-- Table structure for table `writeups`
--

CREATE TABLE `writeups` (
  `writeup_id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `author` text NOT NULL,
  `category_id` int(11) NOT NULL,
  `language_used` varchar(10) DEFAULT NULL,
  `like_count` int(11) DEFAULT 0,
  `is_premium` int(11) NOT NULL,
  `wu_filename` text NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `writeups`
--

INSERT INTO `writeups` (`writeup_id`, `title`, `author`, `category_id`, `language_used`, `like_count`, `is_premium`, `wu_filename`, `status`) VALUES
(1, 'Web Exploitation - XSS Attack', 'John Doe', 1, 'EN-US', 0, 0, 'ctf_intro.pdf', 1),
(2, 'Cryptography - Caesar Cipher', 'Jane Smith', 2, 'EN-US', 0, 1, 'crypto_challenges.pdf', 1),
(3, 'Pwn - Buffer Overflow', 'Alice Johnson', 3, 'id-ID', 0, 0, 'pwn_exploits.pdf', 1),
(4, 'Reverse Engineering - CrackMe Challenge', 'Bob Anderson', 4, 'EN-US', 0, 1, 're_techniques.pdf', 1),
(5, 'Web Exploitation - SQL Injection', 'Sarah Williams', 1, 'id-ID', 0, 1, 'sql_injection_writeup.pdf', 1),
(6, 'Cryptography - RSA Encryption', 'David Thompson', 2, 'id-ID', 0, 0, 'rsa_encryption_writeup.pdf', 1),
(7, 'Pwn - Return-Oriented Programming (ROP)', 'Emily Davis', 3, 'id-ID', 0, 1, 'rop_writeup.pdf', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`category_id`),
  ADD UNIQUE KEY `category_name` (`category_name`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`event_id`),
  ADD UNIQUE KEY `event_name` (`event_name`);

--
-- Indexes for table `feedbacks`
--
ALTER TABLE `feedbacks`
  ADD PRIMARY KEY (`feedback_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `writeups`
--
ALTER TABLE `writeups`
  ADD PRIMARY KEY (`writeup_id`),
  ADD UNIQUE KEY `title` (`title`),
  ADD KEY `category_id` (`category_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `event_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `feedbacks`
--
ALTER TABLE `feedbacks`
  MODIFY `feedback_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `writeups`
--
ALTER TABLE `writeups`
  MODIFY `writeup_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `writeups`
--
ALTER TABLE `writeups`
  ADD CONSTRAINT `writeups_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `categories` (`category_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
