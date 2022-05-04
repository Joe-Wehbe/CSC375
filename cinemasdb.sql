-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 04, 2022 at 10:28 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cinemasdb`
--
CREATE DATABASE IF NOT EXISTS `cinemasdb` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `cinemasdb`;

-- --------------------------------------------------------

--
-- Table structure for table `administrators`
--

DROP TABLE IF EXISTS `administrators`;
CREATE TABLE `administrators` (
  `id` int(11) NOT NULL,
  `first_name` varchar(45) NOT NULL,
  `last_name` varchar(45) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `cinema_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `administrators`
--

INSERT INTO `administrators` (`id`, `first_name`, `last_name`, `email`, `password`, `cinema_id`) VALUES
(2, 'joe', 'wehbe', 'joewehbe@yahoo.com', '16a9a54ddf4259952e3c118c763138e83693d7fd', 3),
(3, 'charbel', 'daoud', 'charbeldaoud@gmail.com', 'ff32395017fed0b24244c588d09db4369bab2925', 1),
(4, 'john', 'smith', 'johnsmith@hotmail.com', 'a51dda7c7ff50b61eaea0444371f4a6a9301e501', 2);

-- --------------------------------------------------------

--
-- Table structure for table `cinemas`
--

DROP TABLE IF EXISTS `cinemas`;
CREATE TABLE `cinemas` (
  `id` int(11) NOT NULL,
  `rating` decimal(10,1) NOT NULL,
  `phone_number` varchar(8) NOT NULL,
  `ticket_price` decimal(10,0) NOT NULL,
  `name` varchar(50) NOT NULL,
  `location` varchar(50) NOT NULL,
  `image_path` varchar(45) NOT NULL,
  `image_path2` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cinemas`
--

INSERT INTO `cinemas` (`id`, `rating`, `phone_number`, `ticket_price`, `name`, `location`, `image_path`, `image_path2`) VALUES
(1, '4.4', '01285582', '65000', 'VOX Cinemas', 'Beirut, Hazmieh', 'assets/voxCityCenter.jpg', 'assets/vox.jpg'),
(2, '3.9', '01544051', '70000', 'Galaxy Grand Cinemas', 'Camil Chamoun, Beirut', 'assets/grandGalaxy.jpg', ''),
(3, '4.3', ' 0444429', '75000', 'Cinemall', 'Dbayeh', 'assets/cinemall.jpg', 'assets/lemall.jpg'),
(4, '4.5', '01209109', '75000', 'Grand Cinemas ABC Verdun', 'Baabda', 'assets/grandcinemaabcverdun.jpg', 'assets/abc,jpg'),
(5, '4.3', '01616707', '70000', 'Empire Cinemas Premiere', 'Beirut', 'assets/empirepremiere.jpg', 'assets/empire.jpg'),
(6, '4.5', '01995195', '100000', 'CinemaCity', 'Beirut', 'assets/cinemacity.jpg', 'assets/cc.jpg'),
(7, '4.4', '01209109', '75000', 'Grand Cinemas', 'Beirut', 'assets/grandcinemas.jpg', 'assets/ggc.jpg'),
(8, '4.4', '04444650', '75000', 'Grand Cinemas ABC Dbayeh', 'Dbayeh, Kfartay', 'assets/dbaye.jpg', 'assets/abc,jpg'),
(9, '4.2', '06540973', '90000', 'Grand Cinema Las Salinas', 'Anfeh', 'assets/cin.jpg', 'assets/lc.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `cinema_has_movies`
--

DROP TABLE IF EXISTS `cinema_has_movies`;
CREATE TABLE `cinema_has_movies` (
  `cinema_id` int(11) NOT NULL,
  `movie_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cinema_has_movies`
--

INSERT INTO `cinema_has_movies` (`cinema_id`, `movie_id`) VALUES
(3, 1),
(3, 2),
(3, 3),
(3, 4),
(3, 5),
(3, 20),
(3, 21),
(3, 22),
(1, 20),
(1, 1),
(1, 4),
(1, 5),
(1, 3),
(1, 2),
(1, 23),
(1, 24),
(2, 5),
(2, 21),
(2, 3),
(2, 20),
(2, 4),
(2, 1),
(2, 24),
(2, 25),
(2, 26),
(4, 21),
(4, 3),
(4, 26),
(4, 20),
(4, 4),
(4, 1),
(4, 27),
(5, 3),
(5, 4),
(5, 5),
(5, 1),
(6, 1),
(6, 4),
(6, 20),
(6, 3),
(6, 5),
(6, 2),
(7, 1),
(7, 26),
(7, 20),
(7, 4),
(7, 24),
(7, 25),
(8, 27),
(8, 21),
(8, 3),
(8, 25),
(8, 20),
(8, 4),
(8, 1),
(9, 1),
(9, 21),
(9, 20),
(3, 79);

-- --------------------------------------------------------

--
-- Table structure for table `genres`
--

DROP TABLE IF EXISTS `genres`;
CREATE TABLE `genres` (
  `id` int(11) NOT NULL,
  `genre` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `genres`
--

INSERT INTO `genres` (`id`, `genre`) VALUES
(1, 'Drama'),
(2, 'Action'),
(3, 'Horror'),
(4, 'Comedy'),
(5, 'Romance'),
(6, 'Sci-Fi'),
(7, 'Thriller'),
(8, 'Crime'),
(9, 'Animation'),
(10, 'Adventure'),
(11, 'Fantasy'),
(12, 'Documentary'),
(13, 'Family'),
(14, 'War');

-- --------------------------------------------------------

--
-- Table structure for table `languages`
--

DROP TABLE IF EXISTS `languages`;
CREATE TABLE `languages` (
  `id` int(11) NOT NULL,
  `language` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `languages`
--

INSERT INTO `languages` (`id`, `language`) VALUES
(1, 'English'),
(2, 'French'),
(3, 'Arabic');

-- --------------------------------------------------------

--
-- Table structure for table `movies`
--

DROP TABLE IF EXISTS `movies`;
CREATE TABLE `movies` (
  `id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `director` varchar(45) NOT NULL,
  `cast` varchar(250) NOT NULL,
  `runtime` varchar(50) NOT NULL,
  `release_date` date NOT NULL,
  `rating_id` int(11) NOT NULL,
  `language_id` int(11) NOT NULL,
  `synopsis` varchar(800) NOT NULL,
  `image_path` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `movies`
--

INSERT INTO `movies` (`id`, `name`, `director`, `cast`, `runtime`, `release_date`, `rating_id`, `language_id`, `synopsis`, `image_path`) VALUES
(1, 'Morbius', 'Daniel Espinosa', ' Jared Leto, Michael Keaton, Adria Arjona', '1h 48min', '2022-04-14', 3, 1, 'Biochemist Michael Morbius tries to cure himself of a rare blood disease, but he inadvertently infects himself with a form of vampirism instead.', 'assets/morbius.jpg'),
(2, 'Uncharted', 'Ruben Fleischer', 'Antonio Banderas, Tom Holland, Mark Wahlberg', '1h 55min', '2022-02-10', 3, 1, 'The story is a prequel to the games, starring Holland as a younger Drake, showing us details of how he came to meet and befriend Sully.', 'assets/uncharted.jpg'),
(3, 'The Batman', 'Matt Reeves', 'Zoë Kravitz, Amber Sienna, Robert Pattinson', '2h 55mins', '2022-03-03', 3, 1, 'In his second year of fighting crime, Batman uncovers corruption in Gotham City that connects to his own family while facing a serial killer known as the Riddler.', 'assets/batman.jpg'),
(4, 'The Lost City', 'Aaron Nee, Adam Nee', 'Brad Pitt, Daniel Radcliffe, Sandra Bullock', '1h 32min', '2022-03-24', 3, 1, 'A reclusive romance novelist on a book tour with her cover model gets swept up in kidnapping attempt that lands them them both in a cutthroat jungle adventure.', 'assets/lostCity.jpg'),
(5, 'Ambulance', 'Michael Bay', 'Eiza González, Jake Gyllenhaal, Devan Long', '2h 16min', '2022-03-17', 6, 1, 'Two robbers steal an ambulance after their heist goes awry.', 'assets/ambulance.jpg'),
(7, 'The Contractor', 'Tarik Saleh', 'Gillian Jacobs, Chris Pine, Eddie Marsan', '1h 42min', '2022-04-28', 3, 1, 'After being involuntarily discharged from the Marines, James Harper (Pine) joins a paramilitary organization in order to support his family in the only way he knows how.', 'assets/contractor.jpg'),
(8, 'Panama', 'Mark Neveldine', 'Cole Hauser, Mel Gibson, Charlie Weber', '2h 36min', '2022-04-28', 4, 1, 'An ex-marine is hired by a defense contractor to travel to Panama to complete an arms deal. In the process he becomes involved with the U.S. invasion of Panama, and learns an important lesson about the true nature of political power.', 'assets/panama.jpg'),
(9, 'Broken Keys', 'Jimmy Keyrouz', 'Tarek Yaacoub, Adel Karam, Roula Boksmati, Badih Abou Chakra, Sara Abi Kanaan, Said Serhan, Gabriel Yammin, Julien Farhat, Fadi Abi Samra, Mounir Maasiri.', '1h 30min', '2022-04-28', 3, 3, 'A pianist tries to escape persecution in a Middle Eastern town where an extremist group has banned modern living and music', 'assets/bk.jpg'),
(10, 'Fantastic Beasts The Secrets Of Dumbledore', 'David Yates', 'Jude Law, Mads Mikkelsen, Katherine Waterston', '', '2022-04-28', 3, 1, 'The third installment of the \'Fantastic Beasts and Where to Find Them\' series which follows the adventures of Newt Scamander.', 'assets/fantastic.jpg'),
(11, 'Fireheart', 'Theodore Ty, Laurent Zeitoun', 'Kenneth Branagh, Olivia Cooke, Vincent Cassel', '1h 32min', '2022-04-28', 2, 1, 'Sixteen-year-old Georgia Nolan dreams of being the world\'s first-ever female firefighter. When a mysterious arsonist starts burning down Broadway, and New York\'s firemen begin vanishing, Georgia disguises herself as a young man called \"Joe\" and joins a small group of firefighters trying to stop the arsonist.', 'assets/fireheart.jpg'),
(12, 'A Day To Die', 'Wes Miller', 'Bruce Willis, Frank Grillo, Kevin Dillon', '1h 45min', '2022-06-02', 4, 1, 'Connor Connolly has one day to pay reparations to Tyrone Pettis. He is forced to ask his old military ops crew, led by Brice Mason, to come together to get him two million dollars before he loses everyone he loves in the process.', 'assets/adaytodie.jpg'),
(13, 'Memory', 'Martin Campbell', 'Liam Neeson, Monica Bellucci, Ray Stevenson', '', '2022-06-30', 4, 1, 'An assassin-for-hire finds that he\'s become a target after he refuses to complete a job for a dangerous criminal organization. A remake of the 2003 Belgian film \'The Memory of a Killer\'.\r\n\r\n', 'assets/memory.jpg'),
(14, 'Dr. Strange: In The Multiverse Of Madness', 'Sam Raimi', 'Elizabeth Olsen, Rachel McAdams, Benedict Wong', '2h 3min', '2022-05-05', 3, 1, 'Dr. Stephen Strange casts a forbidden spell that opens the door to the multiverse, including an alternate version of himself, whose threat to humanity is too great for the combined forces of Strange, Wong, and Wanda Maximoff.', 'assets/drstrange.jpg'),
(16, 'Avatar 2', 'James Cameron', 'Kate Winslet, Zoe Saldana, Vin Diesel', '', '2022-12-15', 3, 1, 'A sequel to Avatar (2009).', 'assets/avatar.jpg'),
(17, 'John Wick 4', 'Chad Stahelski', 'Keanu Reeves, Laurence Fishburne, Hiroyuki Sanada', '', '2023-03-23', 4, 1, 'The continuing adventures of assassin John Wick.', 'assets/johnwick.jpg'),
(18, 'Thor: Love and Thunder', 'Taika Waititi', 'Natalie Portman, Karen Gillan, Chris Hemsworth, Matt Damon', '', '2022-07-07', 3, 1, 'The sequel to Thor: Ragnarok and the fourth movie in the Thor saga.', 'assets/thor.jpg'),
(19, 'The Expandables', 'Scott Waugh', 'Sylvester Stallone, Jason Statham, Megan Fox, 50 cent, Andy Garcia', '', '2022-07-14', 3, 1, '', 'assets/expandables.jpg'),
(20, 'Sonic the Hedgehog 2', 'Jeff Fowler', 'Jim Carrey, James Marsden, Shemar Moore', '2h 02min', '2022-04-21', 2, 1, 'When the manic Dr Robotnik returns to Earth with a new ally, Knuckles the Echidna, Sonic and his new friend Tails is all that stands in their way.', 'assets/sonic.jpg'),
(21, 'Turning Red', 'Domee Shi', 'Rosalie Chiang, Sandra Oh, Maitreyi Ramakrishnan', '1h 39min', '2022-03-10', 2, 1, 'A 13-year-old girl turns into a giant red panda whenever she gets too excited.', 'assets/turningred.jpg'),
(22, 'The Smurfs: Amazing Adventures', '', '', '1h 30min', '2022-02-24', 2, 1, 'The tiny blue creatures are here again!\r\n\r\nThe Smurfs in their new animation style, and with the new characters, will take you and your kids to live amazing adventures inside \"The Smurfs Village\", where Gargamel is not the only danger they have to face.\r\n\r\nTeam spirit, friendship, respect, and tolerance are all blue in “The Smurfs: Amazing Adventures”.', 'assets/smurfs.jpg'),
(23, 'Carona', 'Shady Hanna', 'Abboudy Mallah, Nada Abou Farhat, Joy Hallak, Daniel Abou Chakra, Francois Naoum Naoum', '1h 30min', '2021-11-18', 2, 3, 'A modern upper middle class family trapped in it’s luxurious apartment due to covid is forced to flee the city when the door to door neighbour is diagnosed with Covid. Staying at the parents’ old , run down house in the village with no electricity and no internet, things get chaotic!', 'assets/carona.jpg'),
(24, 'The Bad Guys', 'Pierre Perifel', 'Sam Rockwell, Awkwafina, Anthony Ramos', '1h 40min', '2022-03-17', 2, 1, 'Mr. Wolf, Mr. Snake, Mr. Piranha, Mr. Shark and Ms. Tarantula hatch a plot to pull off the ultimate heist.', 'assets/thebadguys.jpg'),
(25, 'The Wolf and the Lion', 'Gilles de Maistre', 'Graham Greene, Molly Kunz, Charlie Karrick', '1h 40min', '2022-03-17', 2, 1, 'A wolf pup and a lost lion cub are rescued by a girl in the heart of the Canadian wilderness. Their friendship will change their lives forever.', 'assets/thewolfandthelion.jpg'),
(26, 'Cinderella and the Little Sorcerer', 'Alice Blehart', 'Geri Austein, Ashley Bornancin, Tony Azzolino', '1h 30min', '2022-04-07', 2, 1, 'When Prince Alex is trapped in the body of a mouse, Ella and her friends set off on a journey to find the magic potion ingredients that can change him back. On a quest that tests fate itself, they discover that friendship is the most potent cure of all.', 'assets/cindrella.jpg'),
(27, '10 Jours Sans Maman', 'Ludovic Bernard', 'Franck Dubosc, Aure Atika, Alexis Michalik', '1h 44min', '2022-03-17', 5, 2, 'Arthur Curry learns that he is the heir to the underwater kingdom of Atlantis, and must step forward to lead his people and be a hero to the world.\r\n', 'assets/10jours.jpg'),
(79, 'Another One', 'Mohamed Shaker', 'Ahmed Helmy, Ahmed Malek, Sayed Ragab', '1h 49min', '2022-04-28', 3, 3, 'Mustafa, who works in the rehabilitation of prisoners, is trying to fight himself, who has begun to love apathy and monotony, he undergoes a long journey to discover that he is actually fighting himself.', 'assets/anotherone.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `movie_has_genres`
--

DROP TABLE IF EXISTS `movie_has_genres`;
CREATE TABLE `movie_has_genres` (
  `movie_id` int(11) NOT NULL,
  `genre_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `movie_has_genres`
--

INSERT INTO `movie_has_genres` (`movie_id`, `genre_id`) VALUES
(1, 1),
(1, 2),
(1, 10),
(2, 2),
(2, 10),
(3, 1),
(3, 2),
(3, 8),
(4, 2),
(4, 4),
(4, 5),
(5, 1),
(5, 2),
(5, 8),
(7, 2),
(7, 7),
(8, 2),
(8, 7),
(9, 1),
(8, 14),
(10, 10),
(10, 13),
(10, 11),
(11, 9),
(11, 13),
(11, 10),
(13, 2),
(13, 7),
(12, 2),
(14, 2),
(14, 10),
(14, 11),
(16, 2),
(16, 10),
(16, 6),
(17, 2),
(17, 8),
(17, 7),
(18, 2),
(18, 10),
(18, 11),
(19, 2),
(19, 10),
(19, 7),
(20, 9),
(20, 2),
(20, 10),
(21, 9),
(21, 10),
(21, 4),
(22, 13),
(23, 4),
(24, 9),
(25, 13),
(26, 9),
(27, 4),
(27, 13);

-- --------------------------------------------------------

--
-- Table structure for table `movie_has_showtimes`
--

DROP TABLE IF EXISTS `movie_has_showtimes`;
CREATE TABLE `movie_has_showtimes` (
  `movie_id` int(11) NOT NULL,
  `showtime_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `movie_has_showtimes`
--

INSERT INTO `movie_has_showtimes` (`movie_id`, `showtime_id`) VALUES
(1, 2),
(1, 6),
(1, 7),
(1, 8),
(2, 1),
(2, 3),
(2, 4),
(2, 5),
(3, 2),
(3, 9),
(3, 10),
(4, 2),
(4, 6),
(4, 11),
(4, 8),
(5, 1),
(5, 12),
(5, 5),
(20, 1),
(20, 3),
(20, 12),
(20, 5),
(21, 1),
(21, 13),
(21, 14),
(22, 2),
(22, 13),
(23, 4),
(25, 2),
(25, 13),
(26, 2),
(26, 13),
(24, 3),
(27, 3);

-- --------------------------------------------------------

--
-- Table structure for table `ratings`
--

DROP TABLE IF EXISTS `ratings`;
CREATE TABLE `ratings` (
  `id` int(11) NOT NULL,
  `rating` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ratings`
--

INSERT INTO `ratings` (`id`, `rating`) VALUES
(1, 'G'),
(2, 'PG'),
(3, 'PG-13'),
(4, 'R'),
(5, 'NR'),
(6, 'PG-16'),
(7, '18+');

-- --------------------------------------------------------

--
-- Table structure for table `showtimes`
--

DROP TABLE IF EXISTS `showtimes`;
CREATE TABLE `showtimes` (
  `id` int(11) NOT NULL,
  `time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `showtimes`
--

INSERT INTO `showtimes` (`id`, `time`) VALUES
(1, '14:15:00'),
(2, '14:30:00'),
(3, '17:00:00'),
(4, '19:15:00'),
(5, '22:00:00'),
(6, '17:30:00'),
(7, '20:00:00'),
(8, '22:15:00'),
(9, '18:00:00'),
(10, '21:30:00'),
(11, '19:45:00'),
(12, '19:30:00'),
(13, '16:30:00'),
(14, '18:45:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `administrators`
--
ALTER TABLE `administrators`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cinema_id` (`cinema_id`);

--
-- Indexes for table `cinemas`
--
ALTER TABLE `cinemas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cinema_has_movies`
--
ALTER TABLE `cinema_has_movies`
  ADD KEY `cinema_id` (`cinema_id`),
  ADD KEY `movie_id` (`movie_id`);

--
-- Indexes for table `genres`
--
ALTER TABLE `genres`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `languages`
--
ALTER TABLE `languages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `movies`
--
ALTER TABLE `movies`
  ADD PRIMARY KEY (`id`),
  ADD KEY `language_id` (`language_id`),
  ADD KEY `rating_id` (`rating_id`);

--
-- Indexes for table `movie_has_genres`
--
ALTER TABLE `movie_has_genres`
  ADD KEY `movie_id` (`movie_id`),
  ADD KEY `genre_id` (`genre_id`);

--
-- Indexes for table `movie_has_showtimes`
--
ALTER TABLE `movie_has_showtimes`
  ADD KEY `movie_id` (`movie_id`),
  ADD KEY `showtime_id` (`showtime_id`);

--
-- Indexes for table `ratings`
--
ALTER TABLE `ratings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `showtimes`
--
ALTER TABLE `showtimes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `administrators`
--
ALTER TABLE `administrators`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `cinemas`
--
ALTER TABLE `cinemas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `genres`
--
ALTER TABLE `genres`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `languages`
--
ALTER TABLE `languages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `movies`
--
ALTER TABLE `movies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;

--
-- AUTO_INCREMENT for table `ratings`
--
ALTER TABLE `ratings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `showtimes`
--
ALTER TABLE `showtimes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `administrators`
--
ALTER TABLE `administrators`
  ADD CONSTRAINT `administrators_ibfk_1` FOREIGN KEY (`cinema_id`) REFERENCES `cinemas` (`id`);

--
-- Constraints for table `cinema_has_movies`
--
ALTER TABLE `cinema_has_movies`
  ADD CONSTRAINT `cinema_has_movies_ibfk_1` FOREIGN KEY (`cinema_id`) REFERENCES `cinemas` (`id`),
  ADD CONSTRAINT `cinema_has_movies_ibfk_2` FOREIGN KEY (`movie_id`) REFERENCES `movies` (`id`),
  ADD CONSTRAINT `cinema_has_movies_ibfk_3` FOREIGN KEY (`cinema_id`) REFERENCES `cinemas` (`id`),
  ADD CONSTRAINT `cinema_has_movies_ibfk_4` FOREIGN KEY (`movie_id`) REFERENCES `movies` (`id`),
  ADD CONSTRAINT `cinema_has_movies_ibfk_5` FOREIGN KEY (`cinema_id`) REFERENCES `cinemas` (`id`),
  ADD CONSTRAINT `cinema_has_movies_ibfk_6` FOREIGN KEY (`movie_id`) REFERENCES `movies` (`id`);

--
-- Constraints for table `movies`
--
ALTER TABLE `movies`
  ADD CONSTRAINT `movies_ibfk_1` FOREIGN KEY (`language_id`) REFERENCES `languages` (`id`),
  ADD CONSTRAINT `movies_ibfk_2` FOREIGN KEY (`rating_id`) REFERENCES `ratings` (`id`);

--
-- Constraints for table `movie_has_genres`
--
ALTER TABLE `movie_has_genres`
  ADD CONSTRAINT `movie_has_genres_ibfk_1` FOREIGN KEY (`movie_id`) REFERENCES `movies` (`id`),
  ADD CONSTRAINT `movie_has_genres_ibfk_2` FOREIGN KEY (`genre_id`) REFERENCES `genres` (`id`);

--
-- Constraints for table `movie_has_showtimes`
--
ALTER TABLE `movie_has_showtimes`
  ADD CONSTRAINT `movie_has_showtimes_ibfk_1` FOREIGN KEY (`movie_id`) REFERENCES `movies` (`id`),
  ADD CONSTRAINT `movie_has_showtimes_ibfk_2` FOREIGN KEY (`showtime_id`) REFERENCES `showtimes` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
