-- phpMyAdmin SQL Dump
-- version 3.4.10.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 03, 2012 at 06:56 PM
-- Server version: 5.1.52
-- PHP Version: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `dynamicw_moore`
--

-- --------------------------------------------------------

--
-- Table structure for table `baddies`
--

CREATE TABLE IF NOT EXISTS `baddies` (
  `bad_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(25) NOT NULL,
  `health` int(11) NOT NULL,
  `attack` int(11) NOT NULL,
  `defense` int(11) NOT NULL,
  `min_xp` int(11) NOT NULL,
  `max_xp` int(11) NOT NULL,
  PRIMARY KEY (`bad_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=23 ;

--
-- Dumping data for table `baddies`
--

INSERT INTO `baddies` (`bad_id`, `name`, `health`, `attack`, `defense`, `min_xp`, `max_xp`) VALUES
(1, 'protagonist', 30, 6, 1, 0, 0),
(2, 'oquatoo', 12, 3, 1, 3, 7),
(3, 'chaweon', 16, 4, 2, 5, 10),
(4, 'wild loyios', 22, 5, 2, 8, 13),
(5, 'loobat', 25, 6, 3, 5, 13),
(6, 'shock', 10, 10, 1, 2, 6),
(7, 'mole loyios', 36, 7, 5, 13, 20),
(8, 'lost soul', 23, 6, 5, 11, 15),
(9, 'sawyrm', 42, 8, 6, 23, 26),
(10, 'feral loyios', 63, 12, 8, 30, 37),
(11, 'bandkin', 46, 9, 7, 16, 21),
(12, 'skuloyios', 30, 7, 6, 15, 19),
(13, 'zealot', 56, 10, 8, 26, 36),
(14, 'elemental', 200, 12, 6, 135, 200),
(15, 'kolossoyios', 350, 20, 12, 243, 296),
(16, 'war''osu', 60, 10, 10, 40, 50),
(17, 'crystoise', 97, 15, 14, 46, 53),
(18, 'siren', 64, 22, 6, 36, 48),
(19, 'blood spirit', 83, 14, 13, 49, 57),
(20, 'defender', 94, 16, 17, 43, 51),
(21, 'craragyn', 117, 23, 20, 55, 67),
(22, 'false idol', 600, 35, 26, 465, 530);

-- --------------------------------------------------------

--
-- Table structure for table `Blog`
--

CREATE TABLE IF NOT EXISTS `Blog` (
  `post_id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `postdate` datetime NOT NULL,
  PRIMARY KEY (`post_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

-- --------------------------------------------------------

--
-- Table structure for table `Comments`
--

CREATE TABLE IF NOT EXISTS `Comments` (
  `comment_id` int(11) NOT NULL AUTO_INCREMENT,
  `post_id` int(11) NOT NULL,
  `comment` text NOT NULL,
  `commentdate` datetime NOT NULL,
  PRIMARY KEY (`comment_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `Comments`
--

INSERT INTO `Comments` (`comment_id`, `post_id`, `comment`, `commentdate`) VALUES
(1, 1, 'You suck', '2012-02-16 15:09:16'),
(2, 1, 'You suck', '2012-02-16 15:11:06'),
(3, 1, 'rrrr', '2012-02-16 15:11:10'),
(4, 1, 'rrrr', '2012-02-16 15:14:15'),
(5, 1, 'ggg', '2012-02-16 15:14:18'),
(6, 1, 'ggg', '2012-02-16 15:15:38'),
(7, 11, 'hello', '2012-02-16 15:16:07'),
(8, 11, 'hello', '2012-02-16 15:16:26'),
(9, 11, 'hello', '2012-02-16 15:18:52'),
(10, 11, 'yes he does', '2012-02-16 15:19:00'),
(11, 11, 'yes he does', '2012-02-16 15:19:54'),
(12, 11, 'hello', '2012-02-16 15:20:17'),
(13, 11, 'hello', '2012-02-16 15:21:12'),
(14, 11, 'hello', '2012-02-16 15:21:19'),
(15, 13, 'Yea boye', '2012-02-22 03:00:46'),
(16, 14, 'Yes it is.', '2012-02-22 03:01:56'),
(17, 14, 'No it isn''t.', '2012-02-22 03:02:00'),
(18, 15, 'Yes it is.', '2012-02-23 13:14:07'),
(19, 16, 'Yes it is.', '2012-02-27 12:42:41'),
(20, 18, 'comment', '2012-03-10 17:48:44');

-- --------------------------------------------------------

--
-- Table structure for table `exp`
--

CREATE TABLE IF NOT EXISTS `exp` (
  `xp_id` int(11) NOT NULL AUTO_INCREMENT,
  `level` int(11) NOT NULL,
  `next_lvl` int(11) NOT NULL,
  `hp_up` int(11) NOT NULL,
  `atk_up` int(11) NOT NULL,
  `def_up` int(11) NOT NULL,
  PRIMARY KEY (`xp_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `exp`
--

INSERT INTO `exp` (`xp_id`, `level`, `next_lvl`, `hp_up`, `atk_up`, `def_up`) VALUES
(1, 1, 25, 4, 2, 1),
(2, 2, 76, 3, 2, 2),
(3, 3, 163, 2, 1, 2),
(4, 4, 347, 3, 2, 1),
(5, 5, 786, 4, 2, 2),
(6, 6, 1345, 2, 2, 3),
(7, 7, 2035, 3, 3, 1),
(8, 8, 3149, 2, 1, 2),
(9, 9, 4576, 3, 2, 2),
(10, 10, 6332, 4, 1, 1),
(11, 11, 9827, 2, 2, 1),
(12, 12, 13544, 3, 1, 2),
(13, 13, 17457, 2, 2, 1),
(14, 14, 23675, 3, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `Feed`
--

CREATE TABLE IF NOT EXISTS `Feed` (
  `feed_id` int(11) NOT NULL AUTO_INCREMENT,
  `feedurl` varchar(255) NOT NULL,
  `channeltitle` varchar(255) NOT NULL,
  PRIMARY KEY (`feed_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=44 ;

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE IF NOT EXISTS `items` (
  `item_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(25) NOT NULL,
  `add_hp` int(11) NOT NULL,
  `add_ap` int(11) NOT NULL,
  `add_dp` int(11) NOT NULL,
  PRIMARY KEY (`item_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`item_id`, `name`, `add_hp`, `add_ap`, `add_dp`) VALUES
(1, 'potion', 10, 0, 0),
(2, 'iron sword', 0, 2, 0),
(3, 'chain mace', 1, 2, 0),
(4, 'halberd', -1, 2, 2),
(5, 'steel lance', 0, 3, -1),
(6, 'leather vest', 0, 0, 2),
(7, 'chainmail', -2, 0, 3),
(8, 'chestplate', -1, 0, 2),
(9, 'spiked vest', 0, 1, 2),
(10, 'rosary', 5, -1, 0),
(11, 'iron ring', 2, 1, 1),
(12, 'odd amulet', -10, 3, 3),
(13, 'gold brooch', 3, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `Songs`
--

CREATE TABLE IF NOT EXISTS `Songs` (
  `song_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `artist` varchar(255) NOT NULL,
  `album` varchar(255) NOT NULL,
  `genre` varchar(255) NOT NULL,
  `submitdate` datetime NOT NULL,
  PRIMARY KEY (`song_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `Songs`
--

INSERT INTO `Songs` (`song_id`, `name`, `artist`, `album`, `genre`, `submitdate`) VALUES
(1, 'Seth Really Smells', 'Dr. Awesomer', 'Smells of the Manhole', 'Alt-Rock', '2012-02-02 13:55:47'),
(2, 'Dirty Chris', 'Dr. Awesomer', 'Smells of the Manhole', 'Alt-Rock', '2012-02-02 13:57:03'),
(4, 'Seth Really Smells', 'The Awesomeness', 'Covers of the Doctor', 'Metal', '2012-02-02 13:59:53'),
(5, 'Nick is the Best', 'Dr. Awesomer', 'Smells of the Manhole (Bonus Track)', 'Alt-Rock', '2012-02-02 14:00:35'),
(6, 'Money Money Money Money (Money)', 'The Big Man', 'I Sure Do Love Nick', 'Hip-Hop', '2012-02-02 14:02:35');

-- --------------------------------------------------------

--
-- Table structure for table `tasks`
--

CREATE TABLE IF NOT EXISTS `tasks` (
  `task_id` int(11) NOT NULL AUTO_INCREMENT,
  `taskname` varchar(25) NOT NULL,
  `taskdesc` varchar(255) NOT NULL,
  PRIMARY KEY (`task_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `tasks`
--

INSERT INTO `tasks` (`task_id`, `taskname`, `taskdesc`) VALUES
(1, 'submit this task', 'Welcome to sideQUEST! This task is activated to familiarize you with the task input system. Submit this task to advance in the game.'),
(4, 'do the dishes', 'The room ahead is strangely quiet. Your hair stands on end, as if from more than just nerves. What lies in store for you when you complete this task?'),
(3, 'run a mile', 'Gain access to the Loyios Tower by completing this task. This structure was a great house of worship for the Loyios people before the Taaskian settlement, but now it lies mostly abandoned.'),
(2, 'empty the trash', 'Gain access to the Taaskian Mine by completing this task. One of the first tasks the Taaskian people underwent when first settling Enthysia was to search for valuable resources deep below the surrounding lands.'),
(5, 'brush your teeth', 'In the world of sideQUEST, tasks are equivalent to currency. This task is exchangeable for 1 unit of currency to be spent in town. Complete this task multiple times to build up your currency.'),
(6, 'go to the gym', 'The Loyios people are mainly a lazy, underachieving people. One of the main reasons the Tasskians were able to wrest control of the lands from them is because of their lack of effort in fighting back.'),
(7, 'read', 'Whether it be the newspaper, a chapter of a book, or the back of a cereal box, the quest for knowledge was what brought the Taaskian people to Enthysia. Replicate their drive to access this area.'),
(8, 'dust', 'A clean home is a happy one, and cleanliness is what separates the Taaskian towns fro Loyios hovels. For each piece of furniture or area of the house you dust, you will gain one credit of currency to be used in town.'),
(9, 'cook a meal', 'While overall lazy people, the hordes of Loyios you had to fight have left you exhausted. Cook and eat a healthy meal for yourself in order to build energy for what awaits in this room, where low grumbling sounds are emitting.'),
(10, 'take a shower', 'Adventuring is hard work, and the amount of it you have been doing lately has left you smelling like a Loyios, which the townspeople have noticed. Earn yourself 5 units of currency to spend in town once you wash the wastes of the world from your body.'),
(11, 'clean a room', 'The shrines of Enthysia are used for more than worship. In fact, most of them are interconnected by a series of underground tunnels, assisting the Taaskian people across the lands without having to tame the savage seas.'),
(12, 'feed the pet', 'Gain access to the Blessed Shrine by completing this task. Contained within an ancient crystal cove discovered by the Taaskian people, the shrine is now host to much of the religious practices of the people, despite some ethic concerns.'),
(13, 'mop the floor', 'Once a home of a great many of fascinating species, these crystal caves lie mostly deserted by the wildlife, and those that decided to stay have been strangely affected by the magically mutated crystalline structures.'),
(14, 'vacuum', 'The strange, almost glowing red floors were not a natural element of the caves upon their discovery. It''s as if the area has absorbed the horrors it has seen practiced here, all in the name of the Taaskian''s new, unforgiving God.'),
(15, 'study', 'The combination of experiments in light magic and vicious sacrificial arts have created hostile inhabitants of these once peaceful caves. Lost spirits and fabricated nightmares await those who are brave enough to trek further.'),
(16, 'do the wash', 'That is not to say that some magic did not persist within these amazing walls long before the Taaskian''s inhabited it. This magic seeks to protect its host from further atrocities, almost reaching out and ripping it away.'),
(17, 'wash the car', 'Strange effects of the religious practices have mutated this magical area into a near death trap for those not prepared. Now, in the deepest part of the shrine, the upcoming room seems less dangerous, containing nothing but a harmless golden statue.');

-- --------------------------------------------------------

--
-- Table structure for table `tiles`
--

CREATE TABLE IF NOT EXISTS `tiles` (
  `tile_id` int(11) NOT NULL AUTO_INCREMENT,
  `task_check` int(11) NOT NULL DEFAULT '0',
  `ow_bound` int(11) NOT NULL DEFAULT '0',
  `shrine_bound` int(11) NOT NULL DEFAULT '0',
  `mine_bound` int(11) NOT NULL DEFAULT '0',
  `tower_bound` int(11) NOT NULL DEFAULT '0',
  `bless_bound` int(11) NOT NULL DEFAULT '0',
  `xpos` int(11) NOT NULL,
  `ypos` int(11) NOT NULL,
  PRIMARY KEY (`tile_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=442 ;

--
-- Dumping data for table `tiles`
--

INSERT INTO `tiles` (`tile_id`, `task_check`, `ow_bound`, `shrine_bound`, `mine_bound`, `tower_bound`, `bless_bound`, `xpos`, `ypos`) VALUES
(1, 0, 1, 1, 1, 1, 1, 0, 0),
(2, 0, 1, 1, 1, 1, 1, 0, 1),
(3, 0, 1, 1, 1, 1, 1, 0, 2),
(4, 0, 1, 1, 1, 1, 1, 0, 3),
(5, 0, 1, 1, 1, 1, 1, 0, 4),
(6, 0, 1, 1, 1, 1, 1, 0, 5),
(7, 0, 1, 1, 1, 1, 1, 0, 6),
(8, 0, 1, 1, 1, 1, 1, 0, 7),
(9, 0, 1, 1, 1, 1, 1, 0, 8),
(10, 0, 1, 1, 1, 1, 1, 0, 9),
(11, 0, 1, 1, 1, 1, 1, 0, 10),
(12, 0, 1, 1, 1, 1, 1, 0, 11),
(13, 0, 1, 1, 1, 1, 1, 0, 12),
(14, 0, 1, 1, 1, 1, 1, 0, 13),
(15, 0, 1, 1, 1, 1, 1, 0, 14),
(16, 0, 1, 1, 1, 1, 1, 0, 15),
(17, 0, 1, 1, 1, 1, 1, 0, 16),
(18, 0, 1, 1, 1, 1, 1, 0, 17),
(19, 0, 1, 1, 1, 1, 1, 0, 18),
(20, 0, 1, 1, 1, 1, 1, 0, 19),
(21, 0, 1, 1, 1, 1, 1, 0, 20),
(22, 0, 1, 1, 1, 1, 1, 1, 0),
(23, 0, 1, 1, 1, 0, 1, 1, 1),
(24, 0, 1, 1, 1, 0, 0, 1, 2),
(25, 0, 1, 1, 1, 0, 0, 1, 3),
(26, 0, 1, 1, 0, 0, 0, 1, 4),
(27, 0, 1, 1, 0, 0, 1, 1, 5),
(28, 0, 1, 1, 0, 1, 0, 1, 6),
(29, 0, 1, 1, 0, 0, 0, 1, 7),
(30, 0, 1, 1, 1, 0, 0, 1, 8),
(31, 0, 1, 1, 1, 0, 1, 1, 9),
(32, 0, 1, 1, 1, 0, 1, 1, 10),
(33, 0, 1, 1, 1, 0, 1, 1, 11),
(34, 0, 1, 1, 1, 1, 1, 1, 12),
(35, 0, 0, 1, 1, 1, 0, 1, 13),
(36, 3, 0, 1, 1, 1, 0, 1, 14),
(37, 0, 0, 1, 1, 1, 0, 1, 15),
(38, 0, 1, 1, 1, 1, 1, 1, 16),
(39, 0, 1, 1, 1, 1, 0, 1, 17),
(40, 0, 1, 1, 1, 1, 0, 1, 18),
(41, 0, 1, 1, 1, 1, 0, 1, 19),
(42, 0, 1, 1, 1, 1, 1, 1, 20),
(43, 0, 1, 1, 1, 1, 1, 2, 0),
(44, 0, 1, 1, 1, 0, 1, 2, 1),
(45, 0, 1, 1, 1, 1, 0, 2, 2),
(46, 0, 1, 1, 1, 1, 1, 2, 3),
(47, 0, 1, 1, 0, 1, 0, 2, 4),
(48, 0, 1, 1, 1, 0, 1, 2, 5),
(49, 0, 1, 1, 1, 1, 0, 2, 6),
(50, 0, 1, 1, 0, 0, 1, 2, 7),
(51, 0, 1, 1, 1, 1, 0, 2, 8),
(52, 0, 1, 1, 1, 1, 1, 2, 9),
(53, 0, 1, 1, 0, 1, 0, 2, 10),
(54, 0, 1, 1, 1, 0, 0, 2, 11),
(55, 0, 1, 1, 1, 1, 1, 2, 12),
(56, 0, 0, 1, 1, 1, 0, 2, 13),
(57, 0, 0, 1, 1, 1, 1, 2, 14),
(58, 0, 1, 1, 1, 1, 0, 2, 15),
(59, 0, 1, 1, 1, 1, 1, 2, 16),
(60, 0, 1, 1, 1, 1, 0, 2, 17),
(61, 0, 1, 1, 1, 1, 1, 2, 18),
(62, 0, 1, 1, 1, 1, 0, 2, 19),
(63, 0, 1, 1, 1, 1, 1, 2, 20),
(64, 0, 1, 1, 1, 1, 1, 3, 0),
(65, 0, 1, 1, 1, 1, 1, 3, 1),
(66, 0, 1, 1, 1, 1, 1, 3, 2),
(67, 0, 1, 1, 1, 1, 0, 3, 3),
(68, 0, 1, 1, 0, 1, 0, 3, 4),
(69, 0, 1, 1, 1, 0, 0, 3, 5),
(70, 0, 1, 1, 0, 1, 0, 3, 6),
(71, 0, 1, 1, 0, 1, 0, 3, 7),
(72, 0, 1, 1, 1, 1, 1, 3, 8),
(73, 1, 1, 1, 1, 0, 0, 3, 9),
(74, 2, 1, 1, 1, 0, 1, 3, 10),
(75, 0, 1, 1, 1, 0, 0, 3, 11),
(76, 0, 0, 1, 1, 1, 1, 3, 12),
(77, 0, 0, 1, 1, 1, 0, 3, 13),
(78, 0, 1, 1, 1, 1, 0, 3, 14),
(79, 0, 1, 1, 1, 1, 1, 3, 15),
(80, 0, 1, 1, 1, 1, 1, 3, 16),
(81, 0, 1, 1, 1, 1, 1, 3, 17),
(82, 0, 1, 1, 1, 1, 0, 3, 18),
(83, 0, 1, 1, 1, 1, 0, 3, 19),
(84, 0, 1, 1, 1, 1, 1, 3, 20),
(85, 0, 1, 1, 1, 1, 1, 4, 0),
(86, 0, 1, 1, 1, 0, 0, 4, 1),
(87, 0, 1, 1, 1, 1, 0, 4, 2),
(88, 0, 1, 1, 1, 1, 0, 4, 3),
(89, 0, 1, 1, 0, 1, 1, 4, 4),
(90, 0, 1, 1, 0, 0, 0, 4, 5),
(91, 0, 0, 0, 1, 1, 1, 4, 6),
(92, 0, 1, 1, 1, 0, 0, 4, 7),
(93, 0, 1, 1, 1, 1, 1, 4, 8),
(94, 0, 1, 1, 1, 1, 0, 4, 9),
(95, 0, 1, 1, 1, 1, 0, 4, 10),
(96, 0, 0, 1, 1, 0, 0, 4, 11),
(97, 0, 0, 1, 1, 1, 1, 4, 12),
(98, 0, 0, 1, 1, 1, 1, 4, 13),
(99, 0, 0, 1, 1, 1, 1, 4, 14),
(100, 0, 1, 1, 1, 1, 1, 4, 15),
(101, 0, 1, 1, 1, 1, 1, 4, 16),
(102, 0, 1, 1, 1, 1, 1, 4, 17),
(103, 0, 1, 1, 1, 1, 1, 4, 18),
(104, 0, 1, 1, 1, 1, 1, 4, 19),
(105, 0, 1, 1, 1, 1, 1, 4, 20),
(106, 0, 1, 1, 1, 1, 1, 5, 0),
(107, 0, 1, 1, 1, 0, 0, 5, 1),
(108, 0, 1, 1, 1, 0, 1, 5, 2),
(109, 0, 1, 1, 1, 0, 0, 5, 3),
(110, 0, 1, 1, 1, 0, 0, 5, 4),
(111, 0, 0, 1, 1, 0, 1, 5, 5),
(112, 2, 0, 1, 1, 1, 0, 5, 6),
(113, 0, 0, 1, 1, 0, 0, 5, 7),
(114, 0, 1, 1, 1, 0, 1, 5, 8),
(115, 0, 1, 1, 1, 0, 1, 5, 9),
(116, 0, 1, 1, 0, 0, 1, 5, 10),
(117, 0, 1, 1, 1, 0, 1, 5, 11),
(118, 0, 0, 1, 1, 1, 1, 5, 12),
(119, 0, 1, 1, 1, 1, 1, 5, 13),
(120, 0, 1, 1, 1, 1, 0, 5, 14),
(121, 0, 1, 1, 1, 1, 0, 5, 15),
(122, 0, 1, 1, 1, 1, 0, 5, 16),
(123, 0, 1, 1, 1, 1, 0, 5, 17),
(124, 0, 1, 1, 1, 1, 0, 5, 18),
(125, 0, 1, 1, 1, 1, 1, 5, 19),
(126, 0, 1, 1, 1, 1, 1, 5, 20),
(127, 0, 1, 1, 1, 1, 1, 6, 0),
(128, 0, 1, 1, 0, 1, 0, 6, 1),
(129, 0, 1, 1, 0, 1, 0, 6, 2),
(130, 0, 1, 1, 0, 1, 1, 6, 3),
(131, 0, 0, 1, 1, 1, 0, 6, 4),
(132, 0, 0, 1, 1, 1, 1, 6, 5),
(133, 0, 0, 0, 1, 1, 1, 6, 6),
(134, 0, 0, 0, 1, 1, 1, 6, 7),
(135, 0, 0, 0, 1, 1, 0, 6, 8),
(136, 0, 1, 0, 1, 1, 0, 6, 9),
(137, 0, 1, 0, 0, 1, 0, 6, 10),
(138, 0, 1, 0, 1, 1, 0, 6, 11),
(139, 0, 1, 1, 1, 1, 1, 6, 12),
(140, 0, 1, 1, 1, 1, 1, 6, 13),
(141, 0, 1, 1, 0, 1, 0, 6, 14),
(142, 0, 1, 1, 0, 1, 1, 6, 15),
(143, 0, 1, 1, 0, 1, 0, 6, 16),
(144, 0, 1, 1, 1, 1, 1, 6, 17),
(145, 0, 1, 1, 1, 1, 0, 6, 18),
(146, 0, 1, 1, 1, 1, 1, 6, 19),
(147, 0, 1, 1, 1, 1, 1, 6, 20),
(148, 0, 1, 1, 1, 1, 1, 7, 0),
(149, 0, 1, 1, 1, 0, 1, 7, 1),
(150, 0, 1, 1, 1, 0, 1, 7, 2),
(151, 0, 1, 1, 0, 0, 1, 7, 3),
(152, 0, 0, 1, 1, 0, 1, 7, 4),
(153, 0, 0, 1, 1, 0, 0, 7, 5),
(154, 0, 0, 1, 1, 1, 1, 7, 6),
(155, 0, 0, 1, 1, 0, 1, 7, 7),
(156, 0, 0, 1, 1, 0, 0, 7, 8),
(157, 0, 1, 1, 1, 0, 1, 7, 9),
(158, 0, 1, 1, 0, 0, 1, 7, 10),
(159, 0, 0, 1, 0, 0, 0, 7, 11),
(160, 0, 1, 1, 0, 1, 1, 7, 12),
(161, 0, 1, 1, 0, 1, 1, 7, 13),
(162, 0, 1, 1, 0, 1, 1, 7, 14),
(163, 0, 1, 1, 1, 1, 1, 7, 15),
(164, 0, 1, 1, 0, 1, 0, 7, 16),
(165, 0, 1, 1, 1, 1, 0, 7, 17),
(166, 0, 1, 1, 1, 1, 0, 7, 18),
(167, 0, 1, 1, 1, 1, 0, 7, 19),
(168, 0, 1, 1, 1, 1, 1, 7, 20),
(169, 0, 1, 1, 1, 1, 1, 8, 0),
(170, 0, 1, 1, 1, 0, 0, 8, 1),
(171, 0, 1, 1, 1, 1, 0, 8, 2),
(172, 2, 1, 1, 0, 1, 0, 8, 3),
(173, 1, 0, 1, 0, 1, 1, 8, 4),
(174, 0, 0, 1, 0, 0, 0, 8, 5),
(175, 0, 0, 1, 1, 1, 0, 8, 6),
(176, 0, 0, 1, 1, 0, 0, 8, 7),
(177, 0, 0, 1, 1, 1, 0, 8, 8),
(178, 1, 0, 1, 1, 1, 1, 8, 9),
(179, 0, 0, 1, 1, 1, 0, 8, 10),
(180, 2, 0, 1, 0, 0, 0, 8, 11),
(181, 0, 0, 1, 1, 1, 1, 8, 12),
(182, 0, 1, 1, 0, 1, 0, 8, 13),
(183, 0, 1, 1, 1, 1, 0, 8, 14),
(184, 0, 1, 1, 1, 1, 0, 8, 15),
(185, 0, 1, 1, 0, 1, 1, 8, 16),
(186, 0, 1, 1, 1, 1, 0, 8, 17),
(187, 0, 1, 1, 1, 1, 1, 8, 18),
(188, 0, 1, 1, 1, 1, 0, 8, 19),
(189, 0, 1, 1, 1, 1, 1, 8, 20),
(190, 0, 1, 1, 1, 1, 1, 9, 0),
(191, 0, 1, 1, 1, 1, 0, 9, 1),
(192, 0, 1, 1, 0, 1, 1, 9, 2),
(193, 1, 1, 1, 0, 1, 0, 9, 3),
(194, 0, 0, 1, 1, 1, 1, 9, 4),
(195, 0, 0, 1, 0, 0, 1, 9, 5),
(196, 0, 0, 1, 1, 1, 1, 9, 6),
(197, 0, 0, 1, 1, 1, 1, 9, 7),
(198, 7, 0, 1, 1, 1, 0, 9, 8),
(199, 0, 0, 1, 1, 0, 1, 9, 9),
(200, 0, 0, 1, 1, 0, 1, 9, 10),
(201, 0, 0, 1, 0, 0, 1, 9, 11),
(202, 0, 0, 1, 1, 1, 1, 9, 12),
(203, 0, 1, 1, 0, 1, 0, 9, 13),
(204, 0, 1, 1, 1, 1, 1, 9, 14),
(205, 0, 1, 1, 1, 1, 0, 9, 15),
(206, 0, 1, 1, 0, 1, 0, 9, 16),
(207, 0, 1, 1, 1, 1, 0, 9, 17),
(208, 0, 1, 1, 1, 1, 0, 9, 18),
(209, 0, 1, 1, 1, 1, 1, 9, 19),
(210, 0, 1, 1, 1, 1, 1, 9, 20),
(211, 0, 1, 1, 1, 1, 1, 10, 0),
(212, 0, 1, 1, 1, 0, 0, 10, 1),
(213, 0, 1, 1, 0, 1, 1, 10, 2),
(214, 0, 1, 1, 1, 1, 1, 10, 3),
(215, 0, 0, 1, 1, 1, 1, 10, 4),
(216, 0, 0, 1, 0, 0, 0, 10, 5),
(217, 0, 0, 1, 0, 1, 0, 10, 6),
(218, 0, 0, 1, 1, 0, 0, 10, 7),
(219, 0, 0, 1, 0, 1, 0, 10, 8),
(220, 0, 0, 1, 0, 1, 0, 10, 9),
(221, 0, 0, 1, 1, 1, 1, 10, 10),
(222, 0, 0, 1, 1, 1, 0, 10, 11),
(223, 0, 0, 1, 1, 1, 0, 10, 12),
(224, 0, 0, 1, 0, 1, 1, 10, 13),
(225, 0, 0, 1, 1, 1, 0, 10, 14),
(226, 0, 0, 1, 1, 1, 0, 10, 15),
(227, 1, 0, 1, 1, 1, 1, 10, 16),
(228, 0, 1, 1, 1, 1, 1, 10, 17),
(229, 0, 1, 1, 1, 1, 1, 10, 18),
(230, 0, 1, 1, 1, 1, 1, 10, 19),
(231, 0, 1, 1, 1, 1, 1, 10, 20),
(232, 0, 1, 1, 1, 1, 1, 11, 0),
(233, 0, 1, 1, 1, 0, 0, 11, 1),
(234, 0, 1, 1, 0, 0, 0, 11, 2),
(235, 0, 1, 1, 1, 0, 0, 11, 3),
(236, 7, 0, 1, 1, 0, 0, 11, 4),
(237, 0, 0, 1, 1, 0, 0, 11, 5),
(238, 0, 0, 1, 0, 1, 1, 11, 6),
(239, 0, 0, 1, 1, 1, 1, 11, 7),
(240, 0, 1, 1, 0, 1, 1, 11, 8),
(241, 0, 0, 1, 1, 1, 0, 11, 9),
(242, 0, 0, 1, 1, 1, 1, 11, 10),
(243, 0, 0, 1, 1, 1, 0, 11, 11),
(244, 0, 0, 1, 0, 1, 1, 11, 12),
(245, 0, 0, 1, 0, 1, 1, 11, 13),
(246, 0, 0, 1, 1, 1, 1, 11, 14),
(247, 0, 0, 1, 1, 1, 1, 11, 15),
(248, 0, 0, 1, 1, 1, 0, 11, 16),
(249, 2, 0, 1, 1, 1, 0, 11, 17),
(250, 0, 1, 1, 1, 1, 0, 11, 18),
(251, 0, 1, 1, 1, 1, 1, 11, 19),
(252, 0, 1, 1, 1, 1, 1, 11, 20),
(253, 0, 1, 1, 1, 1, 1, 12, 0),
(254, 0, 1, 1, 0, 1, 1, 12, 1),
(255, 0, 1, 1, 0, 1, 1, 12, 2),
(256, 0, 1, 1, 1, 1, 0, 12, 3),
(257, 0, 0, 1, 0, 1, 1, 12, 4),
(258, 0, 1, 1, 1, 1, 0, 12, 5),
(259, 0, 1, 1, 0, 1, 1, 12, 6),
(260, 0, 0, 1, 1, 1, 1, 12, 7),
(261, 0, 0, 1, 0, 1, 1, 12, 8),
(262, 0, 0, 1, 0, 1, 0, 12, 9),
(263, 0, 0, 1, 0, 1, 1, 12, 10),
(264, 0, 0, 1, 0, 1, 0, 12, 11),
(265, 0, 0, 1, 0, 1, 1, 12, 12),
(266, 0, 0, 1, 1, 1, 1, 12, 13),
(267, 0, 0, 1, 1, 1, 1, 12, 14),
(268, 0, 0, 1, 1, 1, 1, 12, 15),
(269, 0, 0, 1, 1, 1, 0, 12, 16),
(270, 0, 0, 1, 1, 1, 1, 12, 17),
(271, 0, 0, 1, 1, 1, 0, 12, 18),
(272, 0, 1, 1, 1, 1, 1, 12, 19),
(273, 0, 1, 1, 1, 1, 1, 12, 20),
(274, 0, 1, 1, 1, 1, 1, 13, 0),
(275, 0, 1, 1, 1, 0, 1, 13, 1),
(276, 0, 1, 1, 0, 0, 1, 13, 2),
(277, 0, 0, 1, 0, 0, 0, 13, 3),
(278, 0, 0, 1, 0, 0, 1, 13, 4),
(279, 0, 0, 1, 1, 0, 0, 13, 5),
(280, 0, 1, 1, 0, 1, 1, 13, 6),
(281, 0, 0, 1, 1, 1, 1, 13, 7),
(282, 0, 0, 1, 1, 1, 1, 13, 8),
(283, 0, 0, 1, 1, 1, 0, 13, 9),
(284, 7, 0, 1, 1, 1, 0, 13, 10),
(285, 0, 0, 1, 1, 1, 0, 13, 11),
(286, 0, 0, 1, 0, 1, 0, 13, 12),
(287, 0, 0, 1, 0, 1, 0, 13, 13),
(288, 0, 0, 1, 0, 1, 1, 13, 14),
(289, 0, 0, 1, 0, 1, 0, 13, 15),
(290, 0, 0, 1, 1, 1, 0, 13, 16),
(291, 0, 0, 1, 1, 1, 0, 13, 17),
(292, 1, 0, 1, 1, 1, 1, 13, 18),
(293, 0, 0, 1, 1, 1, 1, 13, 19),
(294, 0, 1, 1, 1, 1, 1, 13, 20),
(295, 0, 1, 1, 1, 1, 1, 14, 0),
(296, 0, 1, 1, 1, 0, 1, 14, 1),
(297, 0, 0, 1, 1, 1, 0, 14, 2),
(298, 0, 0, 1, 1, 1, 0, 14, 3),
(299, 0, 0, 1, 1, 1, 1, 14, 4),
(300, 0, 1, 1, 1, 0, 0, 14, 5),
(301, 0, 0, 1, 0, 1, 0, 14, 6),
(302, 0, 0, 1, 1, 1, 0, 14, 7),
(303, 0, 0, 1, 1, 1, 0, 14, 8),
(304, 0, 0, 1, 1, 1, 0, 14, 9),
(305, 0, 0, 1, 1, 1, 1, 14, 10),
(306, 0, 0, 1, 1, 1, 1, 14, 11),
(307, 0, 0, 1, 1, 1, 1, 14, 12),
(308, 0, 0, 1, 1, 1, 0, 14, 13),
(309, 0, 0, 1, 1, 1, 1, 14, 14),
(310, 0, 0, 1, 0, 1, 0, 14, 15),
(311, 0, 0, 1, 1, 1, 1, 14, 16),
(312, 0, 0, 1, 1, 1, 0, 14, 17),
(313, 0, 0, 1, 1, 1, 0, 14, 18),
(314, 1, 0, 1, 1, 1, 0, 14, 19),
(315, 0, 1, 1, 1, 1, 1, 14, 20),
(316, 0, 1, 1, 1, 1, 1, 15, 0),
(317, 0, 1, 1, 1, 1, 1, 15, 1),
(318, 0, 1, 1, 1, 1, 1, 15, 2),
(319, 0, 1, 1, 1, 1, 1, 15, 3),
(320, 0, 1, 1, 1, 1, 1, 15, 4),
(321, 0, 1, 1, 1, 0, 1, 15, 5),
(322, 7, 0, 1, 1, 1, 0, 15, 6),
(323, 0, 0, 1, 1, 1, 1, 15, 7),
(324, 0, 0, 1, 1, 1, 1, 15, 8),
(325, 0, 0, 1, 1, 1, 1, 15, 9),
(326, 0, 0, 1, 1, 1, 1, 15, 10),
(327, 0, 0, 1, 1, 1, 0, 15, 11),
(328, 0, 0, 1, 1, 1, 1, 15, 12),
(329, 0, 0, 1, 1, 1, 0, 15, 13),
(330, 0, 0, 1, 1, 1, 1, 15, 14),
(331, 0, 0, 1, 1, 1, 1, 15, 15),
(332, 0, 0, 1, 1, 1, 0, 15, 16),
(333, 0, 0, 1, 1, 1, 0, 15, 17),
(334, 0, 0, 1, 1, 1, 1, 15, 18),
(335, 0, 0, 1, 1, 1, 0, 15, 19),
(336, 0, 1, 1, 1, 1, 1, 15, 20),
(337, 0, 1, 1, 1, 1, 1, 16, 0),
(338, 0, 1, 1, 1, 0, 1, 16, 1),
(339, 0, 1, 1, 1, 1, 1, 16, 2),
(340, 0, 1, 1, 1, 1, 0, 16, 3),
(341, 0, 1, 1, 1, 1, 0, 16, 4),
(342, 0, 0, 1, 1, 0, 1, 16, 5),
(343, 0, 0, 1, 1, 1, 0, 16, 6),
(344, 0, 0, 1, 1, 1, 0, 16, 7),
(345, 0, 0, 1, 1, 1, 0, 16, 8),
(346, 0, 1, 1, 1, 1, 0, 16, 9),
(347, 0, 0, 1, 1, 1, 1, 16, 10),
(348, 0, 0, 1, 1, 1, 0, 16, 11),
(349, 0, 0, 1, 1, 1, 0, 16, 12),
(350, 0, 0, 1, 1, 1, 0, 16, 13),
(351, 0, 0, 1, 1, 1, 1, 16, 14),
(352, 0, 0, 1, 1, 1, 1, 16, 15),
(353, 0, 0, 1, 1, 1, 1, 16, 16),
(354, 0, 0, 1, 1, 1, 1, 16, 17),
(355, 0, 0, 1, 1, 1, 0, 16, 18),
(356, 0, 1, 1, 1, 1, 0, 16, 19),
(357, 0, 1, 1, 1, 1, 1, 16, 20),
(358, 0, 1, 1, 1, 1, 1, 17, 0),
(359, 0, 1, 1, 1, 0, 0, 17, 1),
(360, 0, 1, 1, 1, 0, 1, 17, 2),
(361, 0, 1, 1, 1, 0, 0, 17, 3),
(362, 0, 0, 1, 1, 0, 1, 17, 4),
(363, 0, 0, 1, 1, 0, 1, 17, 5),
(364, 0, 0, 1, 1, 1, 0, 17, 6),
(365, 0, 0, 1, 1, 1, 1, 17, 7),
(366, 0, 1, 1, 1, 1, 1, 17, 8),
(367, 0, 1, 1, 1, 1, 0, 17, 9),
(368, 0, 1, 1, 1, 1, 1, 17, 10),
(369, 0, 0, 1, 1, 1, 1, 17, 11),
(370, 0, 0, 1, 1, 1, 1, 17, 12),
(371, 0, 0, 1, 1, 1, 1, 17, 13),
(372, 0, 0, 1, 1, 1, 0, 17, 14),
(373, 0, 1, 1, 1, 1, 1, 17, 15),
(374, 0, 1, 1, 1, 1, 0, 17, 16),
(375, 0, 1, 1, 1, 1, 0, 17, 17),
(376, 0, 1, 1, 1, 1, 1, 17, 18),
(377, 0, 1, 1, 1, 1, 1, 17, 19),
(378, 0, 1, 1, 1, 1, 1, 17, 20),
(379, 0, 1, 1, 1, 1, 1, 18, 0),
(380, 0, 1, 1, 1, 1, 1, 18, 1),
(381, 0, 1, 1, 1, 1, 1, 18, 2),
(382, 0, 1, 1, 1, 1, 0, 18, 3),
(383, 0, 1, 1, 1, 1, 0, 18, 4),
(384, 0, 1, 1, 1, 1, 0, 18, 5),
(385, 0, 1, 1, 1, 1, 0, 18, 6),
(386, 0, 1, 1, 1, 1, 1, 18, 7),
(387, 0, 1, 1, 1, 1, 1, 18, 8),
(388, 0, 1, 1, 1, 1, 1, 18, 9),
(389, 0, 1, 1, 1, 1, 1, 18, 10),
(390, 0, 1, 1, 1, 1, 1, 18, 11),
(391, 0, 1, 1, 1, 1, 0, 18, 12),
(392, 0, 1, 1, 1, 1, 1, 18, 13),
(393, 0, 1, 1, 1, 1, 0, 18, 14),
(394, 0, 1, 1, 1, 1, 1, 18, 15),
(395, 0, 1, 1, 1, 1, 0, 18, 16),
(396, 0, 1, 1, 1, 1, 1, 18, 17),
(397, 0, 1, 1, 1, 1, 0, 18, 18),
(398, 0, 1, 1, 1, 1, 1, 18, 19),
(399, 0, 1, 1, 1, 1, 1, 18, 20),
(400, 0, 0, 1, 1, 1, 1, 19, 0),
(401, 0, 0, 1, 1, 1, 1, 19, 1),
(402, 0, 1, 1, 1, 1, 1, 19, 2),
(403, 0, 1, 1, 1, 1, 1, 19, 3),
(404, 0, 1, 1, 1, 1, 1, 19, 4),
(405, 0, 1, 1, 1, 1, 1, 19, 5),
(406, 0, 1, 1, 1, 1, 1, 19, 6),
(407, 0, 1, 1, 1, 1, 1, 19, 7),
(408, 0, 1, 1, 1, 1, 1, 19, 8),
(409, 0, 1, 1, 1, 1, 1, 19, 9),
(410, 0, 1, 1, 1, 1, 1, 19, 10),
(411, 0, 1, 1, 1, 1, 1, 19, 11),
(412, 0, 1, 1, 1, 1, 0, 19, 12),
(413, 0, 1, 1, 1, 1, 0, 19, 13),
(414, 0, 1, 1, 1, 1, 0, 19, 14),
(415, 0, 1, 1, 1, 1, 1, 19, 15),
(416, 0, 1, 1, 1, 1, 0, 19, 16),
(417, 0, 1, 1, 1, 1, 0, 19, 17),
(418, 0, 1, 1, 1, 1, 0, 19, 18),
(419, 0, 1, 1, 1, 1, 1, 19, 19),
(420, 0, 1, 1, 1, 1, 1, 19, 20),
(421, 0, 0, 1, 1, 1, 1, 20, 0),
(422, 0, 0, 1, 1, 1, 1, 20, 1),
(423, 0, 0, 1, 1, 1, 1, 20, 2),
(424, 0, 1, 1, 1, 1, 1, 20, 3),
(425, 0, 1, 1, 1, 1, 1, 20, 4),
(426, 0, 1, 1, 1, 1, 1, 20, 5),
(427, 0, 1, 1, 1, 1, 1, 20, 6),
(428, 0, 1, 1, 1, 1, 1, 20, 7),
(429, 0, 1, 1, 1, 1, 1, 20, 8),
(430, 0, 1, 1, 1, 1, 1, 20, 9),
(431, 0, 1, 1, 1, 1, 1, 20, 10),
(432, 0, 1, 1, 1, 1, 1, 20, 11),
(433, 0, 1, 1, 1, 1, 1, 20, 12),
(434, 0, 1, 1, 1, 1, 1, 20, 13),
(435, 0, 1, 1, 1, 1, 1, 20, 14),
(436, 0, 1, 1, 1, 1, 1, 20, 15),
(437, 0, 1, 1, 1, 1, 1, 20, 16),
(438, 0, 1, 1, 1, 1, 1, 20, 17),
(439, 0, 1, 1, 1, 1, 1, 20, 18),
(440, 0, 1, 1, 1, 1, 1, 20, 19),
(441, 0, 1, 1, 1, 1, 1, 20, 20);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(25) NOT NULL,
  `nickname` varchar(4) NOT NULL,
  `userpassword` varchar(255) NOT NULL,
  `useremail` varchar(255) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=43 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `nickname`, `userpassword`, `useremail`, `date`) VALUES
(41, '123455', 'NS12', 'fcea920f7412b5da7be0cf42b8c93759', '123@aol.com', '2012-04-20'),
(40, 'grumpy1111', 'mike', '6061345f984b43041dd6bc1fcbfc45a4', '', '2012-04-20'),
(39, 'H-Money', 'H$$$', 'c41e6f93d619054c3f95499dc32e0eb3', '', '2012-04-20'),
(38, 'EmmyOtter', 'Emmy', '0800b9cb683051e22935376e06880065', 'calfo2@tcnj.edu', '2012-04-20'),
(36, 'admin', 'nick', '5f4dcc3b5aa765d61d8327deb882cf99', 'myrmidon16@gmail.com', '2012-04-20'),
(37, 'RyanBailey', 'Bail', '175fae795451067d6a8b7900ac4ba1c9', '', '2012-04-20'),
(42, 'errchy', 'rick', 'bddf1b45931e3dc988edff3a39f50ce2', 'errchy@gmail.com', '2012-04-23');

-- --------------------------------------------------------

--
-- Table structure for table `user_items`
--

CREATE TABLE IF NOT EXISTS `user_items` (
  `ui_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `owned` int(11) NOT NULL,
  PRIMARY KEY (`ui_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `user_items`
--

INSERT INTO `user_items` (`ui_id`, `user_id`, `item_id`, `owned`) VALUES
(1, 37, 13, 1),
(2, 38, 5, 1),
(3, 42, 1, 1),
(4, 42, 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `user_stats`
--

CREATE TABLE IF NOT EXISTS `user_stats` (
  `pro_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `level` int(2) NOT NULL,
  `experience` int(11) NOT NULL,
  `lv_up` int(11) NOT NULL,
  `damage` int(11) NOT NULL,
  `health` int(11) NOT NULL,
  `attack` int(11) NOT NULL,
  `defense` int(11) NOT NULL,
  PRIMARY KEY (`pro_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `user_stats`
--

INSERT INTO `user_stats` (`pro_id`, `user_id`, `level`, `experience`, `lv_up`, `damage`, `health`, `attack`, `defense`) VALUES
(6, 36, 1, 884, 1345, 30, 30, 6, 1),
(2, 37, 1, 884, 1345, 30, 30, 6, 1),
(3, 38, 1, 884, 1345, 30, 30, 6, 1),
(4, 39, 1, 884, 1345, 30, 30, 6, 1),
(5, 40, 1, 884, 1345, 30, 30, 6, 1),
(7, 41, 6, 884, 1345, 30, 3021, 62, 11),
(8, 42, 1, 0, 25, 30, 30, 6, 1);

-- --------------------------------------------------------

--
-- Table structure for table `user_tasks`
--

CREATE TABLE IF NOT EXISTS `user_tasks` (
  `ut_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `task_id` int(11) NOT NULL,
  `taskstatus` int(11) NOT NULL,
  `taskactive` int(11) NOT NULL,
  PRIMARY KEY (`ut_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=28 ;

--
-- Dumping data for table `user_tasks`
--

INSERT INTO `user_tasks` (`ut_id`, `user_id`, `task_id`, `taskstatus`, `taskactive`) VALUES
(27, 42, 1, 0, 1),
(26, 36, 1, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `user_tile`
--

CREATE TABLE IF NOT EXISTS `user_tile` (
  `pl_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `xpos` int(11) NOT NULL,
  `ypos` int(11) NOT NULL,
  PRIMARY KEY (`pl_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `user_tile`
--

INSERT INTO `user_tile` (`pl_id`, `user_id`, `xpos`, `ypos`) VALUES
(9, 39, 13, 19),
(8, 38, 13, 19),
(7, 36, 13, 19),
(10, 40, 13, 19),
(11, 41, 8, 10),
(12, 42, 13, 19);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
