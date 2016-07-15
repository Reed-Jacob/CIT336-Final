-- phpMyAdmin SQL Dump
-- version 4.6.2
-- https://www.phpmyadmin.net/
--
-- Host: mysql.vgnostalgia.com
-- Generation Time: Jul 15, 2016 at 02:57 PM
-- Server version: 5.6.25-log
-- PHP Version: 7.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vgnostalgia`
--

-- --------------------------------------------------------

--
-- Table structure for table `content`
--

CREATE TABLE `content` (
  `content_id` int(3) NOT NULL,
  `title` text,
  `platform` text,
  `year` int(11) DEFAULT NULL,
  `video` text,
  `description` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `content`
--

INSERT INTO `content` (`content_id`, `title`, `platform`, `year`, `video`, `description`) VALUES
(2, 'Pokemon Red Version', 'Game Boy', 1998, '5P10bGIQ5CM', 'Pokemon Red Version and Pokemon Blue Version, originally released in Japan as Pocket Monsters: Red & Green, are role-playing video games developed by Game Freak and published by Nintendo for the Game Boy. They are the first installments of the Pokemon series.'),
(3, 'Super Mario Bros. 2', 'Nintendo Entertainment System', 1988, 'eMk9lIXj6ys', 'Super Mario Bros. 2, released in Japan as Super Mario USA, is a 1988 platform game developed and published by Nintendo for the Nintendo Entertainment System. Super Mario Bros. 2 has been remade or re-released for several video game consoles.'),
(4, 'Mega Man 2', 'Nintendo Entertainment System', 1988, 'SgU5EUKfw1c', 'Mega Man 2, known in Japan as Rockman 2: Dr. Wily no Nazo, is a platform game developed and published by Capcom for the Nintendo Entertainment System. Mega Man 2 continues the titular protagonist\'s battle against the evil Dr. Wily and his rogue robots. The game features graphical and gameplay changes from the first Mega Man game, many of which have remained throughout the series.'),
(5, 'Ape Escape', 'Sony PlayStation', 1999, '0I5DTlbcHKQ', 'Ape Escape is a series of video games made by Sony Computer Entertainment, starting with Ape Escape for PlayStation in 1999. The series often incorporates ape-related humour, unique gameplay, and a wide variety of pop culture references; it is also notable for being the first game to make the DualShock or Dual Analog controller mandatory. '),
(6, 'The Legend of Zelda: Link\'s Awakening', 'Game Boy', 1993, 'BwnOuxZQlyM', 'The Legend of Zelda: Link\'s Awakening, known as Zelda no Densetsu: Yume o Miru Shima in Japan, is a 1993 action-adventure video game developed by Nintendo Entertainment Analysis & Development and published by Nintendo for the Game Boy. It is the fourth installment in the The Legend of Zelda series, and the first for a handheld game console.'),
(7, 'Final Fantasy VII', 'Sony PlayStation', 1997, '19FGCpOTwgw', 'Final Fantasy VII is a role-playing video game developed and published by Square (now Square Enix) for the PlayStation platform. Released in 1997, it is the seventh installment in the Final Fantasy series and the first in the series to use 3D computer graphics, featuring fully rendered characters on pre-rendered backgrounds. It was also the first game in the main series to be released in Europe.'),
(8, 'The Legend of Zelda: Ocarina of Time', 'Nintendo 64', 1998, '1JZ7HV64N1c', 'The Legend of Zelda: Ocarina of Time is an action-adventure video game developed and published by Nintendo for the Nintendo 64.  Originally developed for the 64DD peripheral, the game was instead released on a 256-megabit (32-megabyte) cartridge, the largest-capacity cartridge Nintendo produced at that time. Ocarina of Time is the fifth game in the The Legend of Zelda series, and the first with 3D graphics.'),
(9, 'Mario Tennis', 'Game Boy Color', 2001, 'oBIkFHNzcO4', 'Mario Tennis, released as Mario Tennis GB in Japan (2000), features a wide variety of human and Mario characters for the player to use.  An RPG mode appears on the Game Boy Color version, which is not in the Nintendo 64 version. In this mode, players begin as a rookie tennis player at the Royal Tennis Academy, who must build up his/her skill (by leveling-up) through training and practice matches before entering various tournaments.'),
(10, 'Pokemon Silver Version', 'Game Boy Color', 2000, 'WXNyZAb01HM', 'Pokemon Gold Version and Silver Version are the second installments of the Pokemon series of role-playing video games, developed by Game Freak and published by Nintendo for the Game Boy Color. They were released in Japan in 1999, Australia and North America in 2000, and Europe in 2001. Pokemon Crystal, a special edition, was released roughly a year later in each region. In 2009, Nintendo remade Gold and Silver for the Nintendo DS as Pokemon HeartGold and SoulSilver.'),
(11, 'Sonic the Hedgehog 2', 'Sega Genesis', 1992, '5I5DzKSwBHQ', 'Sonic the Hedgehog 2 is a platform video game developed by Sonic Team, with assistance from Sega Technical Institute, and published by Sega for the Sega Genesis console. It was released worldwide in November 1992. The game is the second main entry in the Sonic the Hedgehog series, and the first to feature Miles \'Tails\' Prower, a flying two-tailed fox. He and protagonist Sonic the Hedgehog must stop the series antagonist Dr. Ivo Robotnik from stealing the Chaos Emeralds in order to power his space station, called the Death Egg.'),
(12, 'Streets of Rage 2', 'Sega Genesis', 1992, 'I9ixoK1mVko', 'Streets of Rage 2, released in Japan as Bare Knuckle II: The Requiem of the Deadly Battle, is a side-scrolling beat \'em up video game developed and published by Sega in 1992 for the Mega Drive/Genesis console. It is the second game in the Streets of Rage series, a sequel to Streets of Rage and followed by Streets of Rage 3.'),
(13, 'Super Mario 64', 'Nintendo 64', 1996, 'Ha9bLD349Ks', 'Super Mario 64  is a 1996 platform video game developed and published by Nintendo for the Nintendo 64. Along with Pilotwings 64, it was one of the launch titles for the console. It was released in Japan on June 23, 1996, and later in North America, Europe, and Australia. It is the best-selling game on the Nintendo 64, with more than eleven million copies sold. An enhanced remake called Super Mario 64 DS was released for the Nintendo DS in 2004.'),
(14, 'Super Mario Kart', 'Super Nintendo Entertainment System', 1992, 'jih8TVNXsd4', 'Super Mario Kart  is a 1992 go-kart racing video game developed and published by Nintendo for the Super Nintendo Entertainment System video game console. The first game of the Mario Kart series, it was launched in Japan on August 27, 1992, in North America on September 1, 1992, and in Europe on January 21, 1993. Selling nine million copies worldwide, the game went on to become the third best selling SNES game of all time.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `content`
--
ALTER TABLE `content`
  ADD PRIMARY KEY (`content_id`),
  ADD UNIQUE KEY `content_id` (`content_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `content`
--
ALTER TABLE `content`
  MODIFY `content_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
