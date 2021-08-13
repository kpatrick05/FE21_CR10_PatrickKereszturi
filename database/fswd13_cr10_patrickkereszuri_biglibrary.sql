-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 13, 2021 at 03:14 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fswd13_cr10_patrickkereszuri_biglibrary`
--
CREATE DATABASE IF NOT EXISTS `fswd13_cr10_patrickkereszuri_biglibrary` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `fswd13_cr10_patrickkereszuri_biglibrary`;

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `img` varchar(255) DEFAULT NULL,
  `isbn_code` int(15) DEFAULT NULL,
  `short_description` varchar(255) DEFAULT NULL,
  `type` varchar(255) DEFAULT NULL,
  `author_first_name` varchar(255) DEFAULT NULL,
  `author_last_name` varchar(255) DEFAULT NULL,
  `publisher_name` varchar(255) DEFAULT NULL,
  `publisher_address` varchar(255) DEFAULT NULL,
  `publish_date` date DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `title`, `img`, `isbn_code`, `short_description`, `type`, `author_first_name`, `author_last_name`, `publisher_name`, `publisher_address`, `publish_date`, `status`) VALUES
(7, 'Bilbo’s Last Song', '61165c1a7ebbf.jpg', 1559, 'Something', 'book', 'J.R.R.', 'Tolkien', 'London TImes', 'London something', '1990-08-12', 'available'),
(8, 'The Shaping of Middlee arth', '61165cbe63ad5.jpg', 1168, 'A part of lotr', 'DVD', 'J.R.R.', 'Tolkien', 'London Times', 'London', '1985-08-11', 'Reserved'),
(9, 'The War of the Ring', '61165d399b00c.jpg', 1735, 'The History of Middle-earth', 'book', 'J.R.R.', 'Tolkien', 'London Times', 'London', '1989-08-19', 'available'),
(10, 'Sauron Defeated', '61165da760330.jpg', 1735, 'The History of Middle-earth', 'CD', 'J.R.R.', 'Tolkien', 'London Times', 'London', '1992-05-10', 'Reserved'),
(11, 'Harry Potter and the Philosophers Stone', '61165f746dad3.jpg', 3651, 'Harry Potter is a wizard', 'book', 'J.K.', 'Rowling', 'Wizard World', 'London Statford', '2005-08-17', 'available'),
(12, 'Harry Potter and the Chamber of Secrets', '61165fce7eab7.jpg', 3251, 'Harry Potter is a wizard part 2', 'book', 'J.K.', 'Rowling', 'Wizard World', 'London Statford', '2010-08-12', 'available'),
(13, 'Harry Potter and the Goblet of Fire', 'book.jpg', 3512, 'Harry Potter is a wizard part 3', 'Book', 'J.K.', 'Rowling', 'Wizard World', 'London Statford', '2015-08-10', 'Available'),
(14, 'Where the Crawdads Sing', '611661023a17d.jpg', 9352, 'For years, rumors of the Marsh Girl haunted Barkley Cove, a quiet fishing village.', 'book', 'Delia', 'Owens', 'Usa', 'Unknown', '2021-08-11', 'available'),
(15, 'Atomic Habits', '6116614ee51b5.png', 3571, 'An Easy & Proven Way to Build Good Habits & Break Bad Ones', 'book', 'James', 'Clear', 'No info', 'No info', '0016-08-25', 'available'),
(16, 'The midnight library', '61166212594a8.jpg', 9521, 'Lets be kind to the people in our own existence.', 'book', 'Matt', 'Haig', 'Unknown', 'Usa', '2015-08-24', 'available');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
