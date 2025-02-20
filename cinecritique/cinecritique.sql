-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 16, 2023 at 11:47 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cinecritique`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(255) NOT NULL,
  `uname` varchar(255) NOT NULL,
  `pwd` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `uname`, `pwd`) VALUES
(1, 'Ramisha', '$2y$10$17SDVdlVl35PKEM5KnFUK.4PdFAP8OhiNVJnkhaOvrNWTI7i1.20G');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(255) NOT NULL,
  `category_id` int(255) NOT NULL,
  `category_name` varchar(255) NOT NULL,
  `genre_id` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `category_id`, `category_name`, `genre_id`) VALUES
(1, 1, 'Action', 1),
(2, 2, 'Comedy', 2),
(3, 1, 'Drama', 1),
(4, 3, 'Thriller', 3),
(5, 6, 'Horror', 6),
(6, 5, 'Sci-fi', 5),
(7, 1, 'Fantasy', 1),
(8, 7, 'Adventure', 7),
(9, 4, 'Suspense', 4),
(10, 2, 'Historical', 2),
(11, 5, 'Mystry', 5),
(12, 6, 'Psycological', 6),
(13, 2, 'Documentary', 2);

-- --------------------------------------------------------

--
-- Table structure for table `completecontact`
--

CREATE TABLE `completecontact` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL,
  `Moviename` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `id` int(11) NOT NULL,
  `uname` varchar(255) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL,
  `Moviename` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`id`, `uname`, `mail`, `message`, `Moviename`) VALUES
(1, 'Any', 'any@gmail.com', 'Awesome movie', 'Suronggo');

-- --------------------------------------------------------

--
-- Table structure for table `genre`
--

CREATE TABLE `genre` (
  `id` int(255) NOT NULL,
  `genre_name` varchar(255) NOT NULL,
  `category_id` int(255) NOT NULL,
  `genreid` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `genre`
--

INSERT INTO `genre` (`id`, `genre_name`, `category_id`, `genreid`) VALUES
(1, 'Bollywood', 1, 1),
(2, 'Hollywood', 2, 2),
(3, 'Tollywood', 3, 3),
(4, 'Dallywood', 4, 4),
(5, 'Hallyuwood', 5, 5),
(6, 'Kollywood', 6, 6),
(7, 'Nollywood', 7, 7);

-- --------------------------------------------------------

--
-- Table structure for table `movie`
--

CREATE TABLE `movie` (
  `id` int(11) NOT NULL,
  `cat_id` int(255) NOT NULL,
  `genre_id` int(255) NOT NULL,
  `mv_name` varchar(255) NOT NULL,
  `mv_des` varchar(255) NOT NULL,
  `mv_tag` varchar(255) NOT NULL,
  `link1` varchar(255) NOT NULL,
  `link2` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `lang` varchar(255) NOT NULL,
  `director` varchar(255) NOT NULL,
  `meta_description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `movie`
--

INSERT INTO `movie` (`id`, `cat_id`, `genre_id`, `mv_name`, `mv_des`, `mv_tag`, `link1`, `link2`, `img`, `date`, `lang`, `director`, `meta_description`) VALUES
(1, 4, 4, 'Suronggo', 'A simple electrician from a village turns to crime and goes to extreme lengths to satisfy his love.', 'Suspense', 'https://www.google.com/search?sca_esv=557502889&hl=en&q=surongo+movie&tbm=vid&source=lnms&sa=X&ved=2ahUKEwio1bzy7uGAAxWtT2wGHazVBkcQ0pQJegQIDRAB&biw=1366&bih=619&dpr=1#fpstate=ive&vld=cid:a2a55ad7,vid:EoL_3rl2nPE', 'N/A', 'suronggo.jpg', '2023-06-29', 'Bangla', 'Raihan Rafi', 'Chorki'),
(2, 3, 1, 'Pathaan', 'Pathaan is a 2023 Indian Hindi-language action thriller film directed by Siddharth Anand and written by Shridhar Raghavan and Abbas Tyrewala, from a story by Anand. The fourth installment in the YRF Spy Universe, it stars Shah Rukh Khan in the titular rol', 'Action Packed film', 'https://www.google.com/search?sca_esv=557502889&hl=en&q=pathaan+movie&tbm=vid&source=lnms&sa=X&ved=2ahUKEwjB5fTq7OGAAxVdTGwGHdkACVEQ0pQJegQIDRAB&biw=1366&bih=619&dpr=1#fpstate=ive&vld=cid:35c6de4a,vid:vqu4z34wENw', 'N/A', 'Paathaan.jpg', '2023-01-25', 'Hindi', 'Siddharth Anand', 'Yash Raj'),
(3, 3, 2, 'Mission Impossible', 'Mission: Impossible is a series of American action spy films, based on the 1966 TV series created by Bruce Geller. The series is mainly produced by and stars Tom Cruise, who plays Ethan Hunt, an agent of the Impossible Missions Force.', 'Action film', 'https://www.google.com/search?sca_esv=557502889&hl=en&q=mission+impossible&tbm=vid&source=lnms&sa=X&ved=2ahUKEwj62OKx8uGAAxXMwzgGHbXOBaoQ0pQJegQIDBAB&biw=1366&bih=619&dpr=1#fpstate=ive&vld=cid:f3a5fab5,vid:avz06PDqDbM', 'N/A', 'MI.jpeg', '2023-07-10', 'English', ' Christopher McQuarrie', 'Cruise'),
(4, 7, 2, 'Deadpool', 'Deadpool is the alter ego of Wade Wilson, a disfigured Canadian mercenary with superhuman regenerative healing abilities. He is known for his tendency to joke', 'Adventure', 'https://www.google.com/search?sca_esv=557502889&hl=en&q=deadpool&tbm=vid&source=lnms&sa=X&ved=2ahUKEwiOxLy29-GAAxUD2DgGHY-bCcYQ0pQJegQICBAB&biw=1366&bih=619&dpr=1#fpstate=ive&vld=cid:c968bbd9,vid:ONHBaC-pfsk', '', 'Dp.jpeg', '2016-05-17', 'English', 'Tim Miller', 'Fox'),
(5, 6, 5, 'Dabbe', 'The Possession ... Preparing for her wedding, Kübra gets possessed by unknown livings. To cure Kübra, a psychiatrist, Ebru, gets on way.', 'Horror movie', 'https://www.google.com/search?sca_esv=557502889&hl=en&q=dabbe&tbm=vid&source=lnms&sa=X&ved=2ahUKEwjh-fSR-eGAAxWXyjgGHUZyDTwQ0pQJegQICBAB&biw=1366&bih=619&dpr=1#fpstate=ive&vld=cid:c3f6f750,vid:GnduZWRT-rs', 'https://www.google.com/search?sca_esv=557502889&hl=en&q=dabbe&tbm=vid&source=lnms&sa=X&ved=2ahUKEwjh-fSR-eGAAxWXyjgGHUZyDTwQ0pQJegQICBAB&biw=1366&bih=619&dpr=1#fpstate=ive&vld=cid:c3f6f750,vid:GnduZWRT-rs', 'dabb.jpeg', '2013-02-17', 'Turkish', ' Hasan Karacada', ''),
(6, 9, 3, 'Ratsasan', 'A sub-inspector sets out in pursuit of a mysterious serial killer who targets teen school girls and murders them brutally', 'Thriller', 'https://www.google.com/search?sca_esv=557502889&hl=en&q=ratsasan&tbm=vid&source=lnms&sa=X&ved=2ahUKEwjW-6_NiOKAAxWKTmwGHT8DAb8Q0pQJegQICxAB&biw=1366&bih=619&dpr=1#fpstate=ive&vld=cid:ebce7332,vid:GsrN7rNch9Y', 'N/A', 'Rat.jpeg', '2018-10-18', 'Tamil', 'Ram Kumar', 'Axes'),
(7, 4, 7, 'Brotherhood', 'After years of fighting to survive on the streets of Lagos, two brothers fall on opposite sides of the law.', 'Thriller', 'https://www.imdb.com/title/tt19704920/', 'N/A', 'bh.jpg', '2023-08-23', 'English', ' Loukman Ali', 'Gensis'),
(8, 4, 6, 'Jailer', 'Muthuvel Pandian, a stern yet compassionate jailer, sets out to stop a gang when they try to flee their leader from prison.', 'Action thriller', 'https://www.imdb.com/title/tt11663228/', 'N/A', 'jailer.jpeg', '2023-08-10', 'Tamil', 'Nelson Dilipkumar', 'Sun');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `completecontact`
--
ALTER TABLE `completecontact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `genre`
--
ALTER TABLE `genre`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `movie`
--
ALTER TABLE `movie`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `completecontact`
--
ALTER TABLE `completecontact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contactus`
--
ALTER TABLE `contactus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `genre`
--
ALTER TABLE `genre`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `movie`
--
ALTER TABLE `movie`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
