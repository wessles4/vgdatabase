-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 16, 2011 at 03:01 PM
-- Server version: 5.1.37
-- PHP Version: 5.3.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Database: `games`
--

CREATE DATABASE IF NOT EXISTS games;
GRANT ALL PRIVILEGES ON games.* to 'admin'@'localhost' identified by 'user';
USE games;
-- --------------------------------------------------------

--
-- Table structure for table `favorites`
--

CREATE TABLE IF NOT EXISTS `favorites` (
  `game_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `game_name` VARCHAR(40) DEFAULT NULL,
  PRIMARY KEY (`game_id`,`user_id`),
  CONSTRAINT `game_id_user_id_fk`
  FOREIGN KEY (game_id) REFERENCES videogames (game_id),
  FOREIGN KEY (user_id) REFERENCES users (user_id)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `favorites`
--


-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(30) DEFAULT NULL,
  `username` varchar(30) DEFAULT NULL,
  `gender` char(1) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `email`, `username`, `gender`, `password`) VALUES
(1, 'admin@admin.com', 'admin', 'M', 'password'),
(2, 'wessles4@gmail.com', 'wesley.frank', 'M', 'scout');

-- --------------------------------------------------------

--
-- Table structure for table `videogames`
--

CREATE TABLE IF NOT EXISTS `videogames` (
  `game_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(40) DEFAULT NULL,
  `platform` varchar(5) DEFAULT NULL,
  `genre` varchar(15) DEFAULT NULL,
  `developer` varchar(20) DEFAULT NULL,
  `rating` varchar(2) DEFAULT NULL,
  `single_player` tinyint(1) DEFAULT NULL,
  `multi_player` tinyint(1) DEFAULT NULL,
  `ign_score` decimal(2,1) DEFAULT NULL,
  `user_rating` decimal(2,1) DEFAULT NULL,
  PRIMARY KEY (`game_id`),
  INDEX(game_id)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=41 ;

--
-- Dumping data for table `videogames`
--

INSERT INTO `videogames` (`game_id`, `name`, `platform`, `genre`, `developer`, `rating`, `single_player`, `multi_player`, `ign_score`, `user_rating`) VALUES
(1, 'Warcraft III: Reign of Chaos', 'PC', 'Blizzard', 'RTS', 'T', 1, 1, '9.3', '0.0'),
(2, 'World of Warcraft', 'PC', 'MMORPG', 'Blizzard', 'T', 0, 1, '9.1', '0.0'),
(3, 'Call of Duty: Black Ops', 'XBOX', 'FPS', 'Treyarch', 'M', 1, 1, '8.5', '0.0'),
(4, 'Call of Duty: Black Ops', 'PS3', 'FPS', 'Treyarch', 'M', 1, 1, '8.5', '0.0'),
(5, 'Call of Duty: Black Ops', 'PC', 'FPS', 'Treyarch', 'M', 1, 1, '8.5', '0.0'),
(6, 'Call of Duty: Black Ops', 'WII', 'FPS', 'Treyarch', 'M', 1, 1, '7.5', '0.0'),
(7, 'Halo: Reach', 'XBOX ', 'FPS', 'Bungie', 'M', 1, 1, '9.5', '0.0'),
(8, 'Gran Turismo 5', 'PS3', 'Racing', 'Sony', 'E', 1, 1, '8.5', '0.0'),
(9, 'FIFA 11', 'PS3', 'Sports', 'Electronic Arts', 'E', 1, 1, '8.5', '0.0'),
(10, 'FIFA 11', 'PC', 'Sports', 'Electronic Arts', 'E', 1, 1, '8.0', '0.0'),
(11, 'FIFA 11', 'XBOX', 'Sports', 'Electronic Arts', 'E', 1, 1, '8.5', '0.0'),
(12, 'FIFA 11', 'WII', 'Sports', 'Electronic Arts', 'E', 1, 1, '6.0', '0.0'),
(13, 'Grand Theft Auto IV', 'PS3', 'Open World', 'Rockstar', 'M', 1, 1, '9.9', '0.0'),
(14, 'Grand Theft Auto IV', 'XBOX', 'Open World', 'Rockstar', 'M', 1, 1, '9.9', '0.0'),
(15, 'Grand Theft Auto IV', 'PC', 'Open World', 'Rockstar', 'M', 1, 1, '9.2', '0.0'),
(16, 'Madden NFL 11', 'WII', 'Sports', 'Electronic Arts', 'E', 1, 1, '7.5', '0.0'),
(17, 'Madden NFL 11', 'PS3', 'Sports', 'Electronic Arts', 'E', 1, 1, '8.0', '0.0'),
(18, 'Madden NFL 11', 'XBOX', 'Sports', 'Electronic Arts', 'E', 1, 1, '8.0', '0.0'),
(19, 'Rock Band 3', 'PS3', 'Music', 'Harmonix', 'T', 1, 1, '8.5', '0.0'),
(20, 'Rock Band 3', 'WII', 'Music', 'Harmonix', 'T', 1, 1, '8.5', '0.0'),
(21, 'Rock Band 3', 'XBOX', 'Music', 'Harmonix', 'T', 1, 1, '8.5', '0.0'),
(22, 'NBA 2K11', 'PC', 'Sports', '2K Sports', 'E', 1, 1, '8.0', '0.0'),
(23, 'NBA 2K11', 'PS3', 'Sports', '2K Sports', 'E', 1, 1, '9.5', '0.0'),
(24, 'NBA 2K11', 'XBOX', 'Sports', '2K Sports', 'E', 1, 1, '9.5', '0.0'),
(25, 'Guitar Hero 5', 'WII', 'Music', 'Neversoft', 'T', 1, 1, '9.3', '0.0'),
(26, 'Guitar Hero 5', 'PS3', 'Music', 'Neversoft', 'T', 1, 1, '8.9', '0.0'),
(27, 'Guitar Hero 5', 'XBOX', 'Music', 'Neversoft', 'T', 1, 1, '8.9', '0.0'),
(28, 'Power Gig: Rise of the SixString', 'XBOX', 'Music', 'Seven45', 'T', 1, 0, '4.0', '0.0'),
(29, 'Power Gig: Rise of the SixString', 'PS3', 'Music', 'Seven45', 'T', 1, 0, '4.0', '0.0'),
(30, 'Pro Evolution Soccer 2011', 'PS3', 'Sports', 'Konami', 'E', 1, 1, '9.0', '0.0'),
(31, 'Pro Evolution Soccer 2011', 'XBOX', 'Sports', 'Konami', 'E', 1, 1, '9.0', '0.0'),
(32, 'Pro Evolution Soccer 2011', 'WII', 'Sports', 'Konami', 'E', 1, 1, '8.5', '0.0'),
(33, 'Mario Kart Wii', 'WII', 'Racing', 'Nintendo', 'E', 1, 1, '8.5', '0.0'),
(34, 'Donkey Kong Country Returns', 'WII', 'Platform', 'Nintendo', 'E', 1, 1, '9.0', '0.0'),
(35, 'Portal', 'PC', 'Platform', 'Valve', 'T', 1, 0, '8.2', '0.0'),
(36, 'Team Fortress 2', 'PC', 'FPS', 'Valve', 'M', 0, 1, '8.9', '0.0'),
(37, 'Dead Space 2', 'PS3', 'Horror', 'Visceral Games', 'M', 1, 1, '9.0', '0.0'),
(38, 'Dead Space 2', 'XBOX', 'Horror', 'Visceral Games', 'M', 1, 1, '9.0', '0.0'),
(39, 'Mafia II', 'XBOX', 'Open World', '2K Games', 'M', 1, 0, '7.0', '0.0'),
(40, 'Mafia II', 'PS3', 'Open World', '2K Games', 'M', 1, 0, '7.0', '0.0');
