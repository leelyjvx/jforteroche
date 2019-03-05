-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mar. 29 jan. 2019 à 16:21
-- Version du serveur :  5.7.23
-- Version de PHP :  7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `p3`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(25) NOT NULL,
  `password` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Structure de la table `comments`
--

DROP TABLE IF EXISTS `comments`;
CREATE TABLE IF NOT EXISTS `comments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `postid` int(11) NOT NULL,
  `pseudo` varchar(50) NOT NULL,
  `comment` varchar(450) NOT NULL,
  `commentdate` datetime NOT NULL,
  `reported` int(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `comments`
--

INSERT INTO `comments` (`id`, `postid`, `pseudo`, `comment`, `commentdate`, `reported`) VALUES
(1, 1, 'Commentaire n*1', 'DTYFYFTYFYT ', '2019-01-29 14:27:18', 2);

-- --------------------------------------------------------

--
-- Structure de la table `posts`
--

DROP TABLE IF EXISTS `posts`;
CREATE TABLE IF NOT EXISTS `posts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` text NOT NULL,
  `content` text NOT NULL,
  `postdate` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `posts`
--

INSERT INTO `posts` (`id`, `title`, `content`, `postdate`) VALUES
(1, 'Chapitre 1', '              All right me luvver ipsum dolor sit amet non smorning enim eu, officia minim ginormous nulla deserunt in gas ed. Reprehenderit safternun praps, minim deserunt almunsbree plasterscene member me babber culpa waz satter. Cheers drive veniam oo done it fugiat, ut zider occaecat amblance quis fornbree in. Tight pariatur tamorra mind aarsh theys ginormous anim largurr gurt big. Eadfit qui you gone and done it, me luvver smorning nostrud brissle aliquip.\r\n\r\nPlasterscene praps nulla alright me babber do, occaecat dolore. Veniam officia brissle thats proper, safternun ow bist amblance ut plasterscene ad elit ill aute cillum. Praps eiusmod wassat duis dont do that, mind. He dos it discolated waz satter lush mint in it ee magna in pacifically quicken innit. In he dos it magna cillum zider esse dolore. Eadfit oo done it dont do that, mind, innit reprehenderit all right me luvver nulla sint aarsh cupidatat bemmie mind. Consequat masarge proident, lectric wheres attoo gas ed alright me babber.\r\n\r\nNostrud do ungray, ut pacifically smorning chimley consequat were bis to kinave it wanna bemminser hark at ee gashead. Nulla ut laborum, ungray eadfit member oozee lectric gurt big luvver casnt wassat dolore. Cupidatat ceptible quis, commodo ex bemminser pariatur proident bemmie mind laboris. Reprehenderit aute et gurt big, oo done it elit plasterscene thee safternun esse. Mollit luvver masarge irure, tempor ut thats proper nostrud anim esse smorning labore dolor.\r\n\r\nCulpa fornbree dolor largurr lush amblance. Ex eu dolore, do smorning jammer tempor pariatur plasterscene ee anim sunt aliquip listen to yourself eadfit. Gas ed were bis to member ex non cillum ea he dos it waz satter eu duis minim. Almunsbree id he dos it me babber you gone and done it lush in ea. Do ut member discolated. Bemminser oozee wheres attoo dint member laborum. In praps sunt Cane Shum laboris were bis to kinave it sed.\r\n\r\nMollit aarsh almunsbree zat alright dolore zider dollop aliquip bemmie i didnt do nothing eiusmod. Listen to yourself warter idut bemmie tiz zat alright ea aliqua smorning nisi non ohm ex. Oozee inchew culpa aliquip exercitation dolore dolor cupidatat Cane Shum deserunt. Gurt big luvver quis largurr in member casnt almunsbree mint in it ut deserunt praps me eds erting eiusmod. Ill fugiat Cane Shum thee, nostrud gas ed lush. Aute warter zider sunt.              ', '2019-01-22 20:39:35'),
(2, 'Chapitre 2', 'All right me luvver ipsum dolor sit amet non smorning enim eu, officia minim ginormous nulla deserunt in gas ed. Reprehenderit safternun praps, minim deserunt almunsbree plasterscene member me babber culpa waz satter. Cheers drive veniam oo done it fugiat, ut zider occaecat amblance quis fornbree in. Tight pariatur tamorra mind aarsh theys ginormous anim largurr gurt big. Eadfit qui you gone and done it, me luvver smorning nostrud brissle aliquip.\r\n\r\nPlasterscene praps nulla alright me babber do, occaecat dolore. Veniam officia brissle thats proper, safternun ow bist amblance ut plasterscene ad elit ill aute cillum. Praps eiusmod wassat duis dont do that, mind. He dos it discolated waz satter lush mint in it ee magna in pacifically quicken innit. In he dos it magna cillum zider esse dolore. Eadfit oo done it dont do that, mind, innit reprehenderit all right me luvver nulla sint aarsh cupidatat bemmie mind. Consequat masarge proident, lectric wheres attoo gas ed alright me babber.\r\n\r\nNostrud do ungray, ut pacifically smorning chimley consequat were bis to kinave it wanna bemminser hark at ee gashead. Nulla ut laborum, ungray eadfit member oozee lectric gurt big luvver casnt wassat dolore. Cupidatat ceptible quis, commodo ex bemminser pariatur proident bemmie mind laboris. Reprehenderit aute et gurt big, oo done it elit plasterscene thee safternun esse. Mollit luvver masarge irure, tempor ut thats proper nostrud anim esse smorning labore dolor.\r\n\r\nCulpa fornbree dolor largurr lush amblance. Ex eu dolore, do smorning jammer tempor pariatur plasterscene ee anim sunt aliquip listen to yourself eadfit. Gas ed were bis to member ex non cillum ea he dos it waz satter eu duis minim. Almunsbree id he dos it me babber you gone and done it lush in ea. Do ut member discolated. Bemminser oozee wheres attoo dint member laborum. In praps sunt Cane Shum laboris were bis to kinave it sed.\r\n\r\nMollit aarsh almunsbree zat alright dolore zider dollop aliquip bemmie i didnt do nothing eiusmod. Listen to yourself warter idut bemmie tiz zat alright ea aliqua smorning nisi non ohm ex. Oozee inchew culpa aliquip exercitation dolore dolor cupidatat Cane Shum deserunt. Gurt big luvver quis largurr in member casnt almunsbree mint in it ut deserunt praps me eds erting eiusmod. Ill fugiat Cane Shum thee, nostrud gas ed lush. Aute warter zider sunt.', '2019-01-22 20:40:11'),
(3, 'Chapitre 3', 'All right me luvver ipsum dolor sit amet non smorning enim eu, officia minim ginormous nulla deserunt in gas ed. Reprehenderit safternun praps, minim deserunt almunsbree plasterscene member me babber culpa waz satter. Cheers drive veniam oo done it fugiat, ut zider occaecat amblance quis fornbree in. Tight pariatur tamorra mind aarsh theys ginormous anim largurr gurt big. Eadfit qui you gone and done it, me luvver smorning nostrud brissle aliquip.\r\n\r\nPlasterscene praps nulla alright me babber do, occaecat dolore. Veniam officia brissle thats proper, safternun ow bist amblance ut plasterscene ad elit ill aute cillum. Praps eiusmod wassat duis dont do that, mind. He dos it discolated waz satter lush mint in it ee magna in pacifically quicken innit. In he dos it magna cillum zider esse dolore. Eadfit oo done it dont do that, mind, innit reprehenderit all right me luvver nulla sint aarsh cupidatat bemmie mind. Consequat masarge proident, lectric wheres attoo gas ed alright me babber.\r\n\r\nNostrud do ungray, ut pacifically smorning chimley consequat were bis to kinave it wanna bemminser hark at ee gashead. Nulla ut laborum, ungray eadfit member oozee lectric gurt big luvver casnt wassat dolore. Cupidatat ceptible quis, commodo ex bemminser pariatur proident bemmie mind laboris. Reprehenderit aute et gurt big, oo done it elit plasterscene thee safternun esse. Mollit luvver masarge irure, tempor ut thats proper nostrud anim esse smorning labore dolor.\r\n\r\nCulpa fornbree dolor largurr lush amblance. Ex eu dolore, do smorning jammer tempor pariatur plasterscene ee anim sunt aliquip listen to yourself eadfit. Gas ed were bis to member ex non cillum ea he dos it waz satter eu duis minim. Almunsbree id he dos it me babber you gone and done it lush in ea. Do ut member discolated. Bemminser oozee wheres attoo dint member laborum. In praps sunt Cane Shum laboris were bis to kinave it sed.\r\n\r\nMollit aarsh almunsbree zat alright dolore zider dollop aliquip bemmie i didnt do nothing eiusmod. Listen to yourself warter idut bemmie tiz zat alright ea aliqua smorning nisi non ohm ex. Oozee inchew culpa aliquip exercitation dolore dolor cupidatat Cane Shum deserunt. Gurt big luvver quis largurr in member casnt almunsbree mint in it ut deserunt praps me eds erting eiusmod. Ill fugiat Cane Shum thee, nostrud gas ed lush. Aute warter zider sunt.', '2019-01-22 20:40:24');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
