-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.1.37-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win32
-- HeidiSQL Version:             10.1.0.5464
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Dumping database structure for afternotes
CREATE DATABASE IF NOT EXISTS `afternotes` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `afternotes`;

-- Dumping structure for table afternotes.diary
CREATE TABLE IF NOT EXISTS `diary` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `review` text NOT NULL,
  `rating` int(5) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_diary_movie` (`judul`),
  KEY `FK_diary_user` (`username`),
  CONSTRAINT `FK_diary_movie` FOREIGN KEY (`judul`) REFERENCES `movie` (`judul`) ON DELETE NO ACTION,
  CONSTRAINT `FK_diary_user` FOREIGN KEY (`username`) REFERENCES `user` (`username`) ON DELETE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

-- Dumping data for table afternotes.diary: ~8 rows (approximately)
/*!40000 ALTER TABLE `diary` DISABLE KEYS */;
INSERT INTO `diary` (`id`, `username`, `judul`, `date`, `review`, `rating`) VALUES
	(1, 'baziyad', 'Shazam!', '2019-05-01', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', 5),
	(2, 'baziyad', 'The Night Comes for Us', '2019-04-21', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', 3),
	(3, 'baziyad', 'Be with You', '2019-04-20', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', 4),
	(4, 'baziyad', 'Pengabdi Setan', '2019-04-19', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', 3),
	(5, 'baziyad', 'Thor: Ragnarok', '2019-04-18', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', 3),
	(6, 'baziyad', 'Us', '2019-04-17', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', 5),
	(8, 'baziyad', 'The Night Comes for Us', '2019-04-16', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', 3),
	(9, 'hae', 'Shazam!', '2019-05-02', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', 4);
/*!40000 ALTER TABLE `diary` ENABLE KEYS */;

-- Dumping structure for table afternotes.movie
CREATE TABLE IF NOT EXISTS `movie` (
  `judul` varchar(255) NOT NULL,
  `id` int(11) NOT NULL,
  `poster` varchar(255) NOT NULL,
  `year` varchar(4) NOT NULL,
  `genre` varchar(255) NOT NULL,
  `sinopsis` text NOT NULL,
  `cast` varchar(255) NOT NULL,
  `sutradara` varchar(255) NOT NULL,
  PRIMARY KEY (`judul`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table afternotes.movie: ~12 rows (approximately)
/*!40000 ALTER TABLE `movie` DISABLE KEYS */;
INSERT INTO `movie` (`judul`, `id`, `poster`, `year`, `genre`, `sinopsis`, `cast`, `sutradara`) VALUES
	('Alita: Battle Angel', 1, 'assets/images/poster/alita.jpg', '2019', 'Action, Adventure, Sci-Fi', 'When Alita awakens with no memory of who she is in a future world she does not recognize, she is taken in by Ido, a compassionate doctor who realizes that somewhere in this abandoned cyborg shell is the heart and soul of a young woman with an extraordinary past.', 'Rosa Salazar, Christoph Waltz, Jennifer Connelly ', 'Robert Rodriguez'),
	('Be with You', 2, 'assets/images/poster/bewithyou.jpg', '2018', 'Drama, Fantasy, Romance', 'Along with his young son, Ji-ho, Woo-jin misses his wife Soo-a, who died after promising to return a year later with the rainy season. Miraculously, they reunite with Soo-a when the rainy season comes around, but she has no memory of her husband and son whom she dearly loved.', 'Ji-seob So, Ye-jin Son, Yoo-ram Bae', 'Jang-Hoon Lee'),
	('Instant Family', 3, 'assets/images/poster/instantfamily.jpg', '2018', 'Comedy, Drama', 'When Pete and Ellie decide to start a family, they stumble into the world of foster care adoption. They hope to take in one small child but when they meet three siblings, including a rebellious 15 year old girl, they find themselves speeding from zero to three kids overnight.', 'Mark Wahlberg, Rose Byrne, Isabela Moner', 'Sean Anders'),
	('John Wick: Chapter 3 – Parabellum', 4, 'assets/images/poster/johnwick.jpg', '2019', 'Action, Thriller ', 'John Wick is on the run for two reasons… he’s being hunted for a global $14 million dollar open contract on his life, and for breaking a central rule: taking a life on Continental Hotel grounds. The victim was a member of the High Table who ordered the open contract. John should have already been executed, except the Continental’s manager, Winston, has given him a one-hour grace period before he’s “Excommunicado” – membership revoked, banned from all services and cut off from other members. John uses the service industry to stay alive as he fights and kills his way out of New York City.', 'Keanu Reeves, Asia Kate Dillon, Jerome Flynn', 'Chad Stahelski'),
	('Pengabdi Setan', 5, 'assets/images/poster/pengabdisetan.jpg', '2017', 'Drama, Horror, Mystery', 'After the death of Rini’s mother, something is disturbing her family.', 'Tara Basro, Bront Palarae, Dimas Aditya', 'Joko Anwar'),
	('Pet Sematary', 6, 'assets/images/poster/petsematary.jpg', '2019', 'Horror, Mystery, Thriller', 'Louis Creed, his wife Rachel and their two children Gage and Ellie move to a rural home where they are welcomed and enlightened about the eerie ‘Pet Sematary’ located nearby. After the tragedy of their cat being killed by a truck, Louis resorts to burying it in the mysterious pet cemetery, which is definitely not as it seems, as it proves to the Creeds that sometimes dead is better.', 'Jason Clarke, Amy Seimetz, John Lithgow', 'Kevin Kölsch, Dennis Widmyer'),
	('Ready Player One', 7, 'assets/images/poster/readyplayerone.jpg', '2018', 'Action, Adventure, Sci-Fi ', 'When the creator of a popular video game system dies, a virtual contest is created to compete for his fortune.', 'Tye Sheridan, Olivia Cooke, Ben Mendelsohn', 'Steven Spielberg'),
	('Shazam!', 8, 'assets/images/poster/shazam.jpg', '2019', 'Action, Adventure, Comedy', 'A boy is given the ability to become an adult superhero in times of need with a single magic word.', 'Zachary Levi, Mark Strong, Asher Angel', 'David F. Sandberg'),
	('The Dark Knight', 9, 'assets/images/poster/batman.jpg', '2008', 'Action, Crime, Drama', 'Batman raises the stakes in his war on crime. With the help of Lt. Jim Gordon and District Attorney Harvey Dent, Batman sets out to dismantle the remaining criminal organizations that plague the streets. The partnership proves to be effective, but they soon find themselves prey to a reign of chaos unleashed by a rising criminal mastermind known to the terrified citizens of Gotham as the Joker.', 'Christian Bale, Heath Ledger, Aaron Eckhart', 'Christopher Nolan'),
	('The Night Comes for Us', 10, 'assets/images/poster/tncfu.jpg', '2018', 'Action, Thriller', 'After sparing a girl’s life during a massacre, an elite Triad assassin is targeted by an onslaught of murderous gangsters.', 'Iko Uwais, Joe Taslim, Julie Estelle', 'Timo Tjahjanto'),
	('Thor: Ragnarok', 11, 'assets/images/poster/thorragnarok.jpg', '2017', 'Action, Adventure, Comedy', 'Thor is imprisoned on the other side of the universe and finds himself in a race against time to get back to Asgard to stop Ragnarok, the destruction of his home-world and the end of Asgardian civilization, at the hands of an all-powerful new threat, the ruthless Hela.', 'Chris Hemsworth, Tom Hiddleston, Cate Blanchett', 'Taika Waititi'),
	('Us', 12, 'assets/images/poster/us.jpg', '2019', 'Horror, Thriller', 'Husband and wife Gabe and Adelaide Wilson take their kids to their beach house expecting to unplug and unwind with friends. But as night descends, their serenity turns to tension and chaos when some shocking visitors arrive uninvited.', 'Lupita Nyong\'o, Winston Duke, Elisabeth Moss', 'Jordan Peele');
/*!40000 ALTER TABLE `movie` ENABLE KEYS */;

-- Dumping structure for table afternotes.user
CREATE TABLE IF NOT EXISTS `user` (
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table afternotes.user: ~2 rows (approximately)
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` (`username`, `email`, `password`) VALUES
	('admin', 'admin@gmail.com', '21232f297a57a5a743894a0e4a801fc3'),
	('baziyad', 'baziyad@gmail.com', '89b3c8da22ae6942c498546b5ef3c7e5'),
	('hae', 'haechal@gmail.com', 'e807f1fcf82d132f9bb018ca6738a19f');
/*!40000 ALTER TABLE `user` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
