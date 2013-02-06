-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- GÃ©nÃ©rÃ© le : Mer 06 FÃ©vrier 2013 Ã  10:00
-- Version du serveur: 5.5.16
-- Version de PHP: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de donnÃ©es: `ecommerce`
--

-- --------------------------------------------------------

--
-- Structure de la table `articles`
--

CREATE TABLE IF NOT EXISTS `articles` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `ref` varchar(20) NOT NULL,
  `theme` varchar(20) NOT NULL,
  `description` text NOT NULL,
  `prix` float NOT NULL,
  `image` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=31 ;

--
-- Contenu de la table `articles`
--

INSERT INTO `articles` (`id`, `ref`, `theme`, `description`, `prix`, `image`) VALUES
(12, 'Paysage bucolique 1', 'Espagne', 'Curabitur vel nunc odio. Mauris vehicula erat in tortor congue vel consequat tellus varius. Aliquam pharetra bibendum pulvinar. Mauris rutrum ultricies est, eget gravida ipsum cursus id. Nam nulla enim, mattis non dapibus vitae, commodo non mauris. Ut congue euismod turpis eu pellentesque. Sed dignissim leo et lectus vulputate euismod. Sed eleifend consectetur ligula. ', 120, './images/Photos_Celine/123.jpg'),
(13, 'LibertÃƒÂ©3', 'LibertÃƒÂ©', 'Pellentesque convallis elit vel sapien dapibus tristique. Nam rutrum sagittis purus a iaculis. Quisque cursus purus ultricies dui porta consectetur. Praesent rhoncus mi sed eros auctor quis viverra ligula luctus. Quisque adipiscing lobortis nunc, at facilisis tellus auctor ut. Morbi convallis lacus ut nisl tempor molestie. Sed mattis consectetur erat eu venenatis. Morbi eget vulputate libero. Suspendisse eros erat, lacinia eu porta non, porta sit amet dolor. Cras dictum porttitor purus non scelerisque. ', 135, './images/Photos_Celine/113.jpg'),
(14, 'La religin de l''espa', 'Espagne', 'Nam vitae dolor tellus, in sodales lectus. Ut sit amet dolor mauris, vel tristique magna. Sed adipiscing diam non eros pellentesque ultrices. Fusce eget ultrices urna. Aenean augue risus, eleifend eget aliquet ut, egestas eget nisl. Integer egestas pellentesque dapibus. Morbi tincidunt, risus in venenatis aliquet, magna orci ultrices orci, non gravida arcu lorem vitae eros. Pellentesque viverra dictum dolor non faucibus. Vivamus elementum facilisis augue ut mollis. Suspendisse dignissim ultrices laoreet. Donec bibendum egestas ipsum sit amet pulvinar. Morbi ac enim nunc, id pharetra urna. ', 125, './images/Photos_Celine/126.jpg'),
(15, 'Palmier et immeuble', 'Ville', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam mattis ipsum eu mi venenatis semper. Duis elit neque, suscipit quis pulvinar sed, rutrum eu ipsum. Praesent ultricies convallis tortor, et congue lectus mollis eu. Morbi eget arcu hendrerit eros commodo vestibulum ac in dui. Praesent eu dolor sit amet diam fringilla fermentum in non enim. Duis mollis egestas faucibus. Fusce molestie suscipit sem, ac cursus odio volutpat sed. Phasellus ut massa in ante accumsan rhoncus. Phasellus accumsan elit placerat justo tincidunt blandit. ', 125, './images/Photos_Celine/126b.jpg'),
(16, 'Femme valise', 'Portrait', 'shqjgvc', 125, './images/Photos_Celine/129.jpg'),
(19, 'Mons 2016', 'Ville', 'Pellentesque velit ipsum, lobortis a pharetra vitae, sodales eget est. Curabitur vehicula, enim eu commodo rutrum, ante nisl tincidunt lectus, in dictum ligula metus in tellus. Quisque ultricies tempus ligula in ultrices. Sed lacinia orci at felis pretium in feugiat enim porta. Cras leo turpis, aliquet non posuere non, vehicula in enim. Donec sit amet justo sit amet libero semper pellentesque. Vivamus mollis cursus urna et lacinia. Pellentesque pretium sem at ipsum lacinia eu convallis augue sagittis. Suspendisse et elit lacus, non mollis augue. Integer euismod tristique est, ac consectetur neque gravida eleifend. Maecenas et erat non nibh eleifend porttitor. Nullam in purus vitae dui malesuada posuere in egestas nulla. Morbi lectus sem, ornare quis pharetra quis, adipiscing sit amet velit. Vivamus non orci quam, ac lacinia massa. ', 125, './images/Photos_Celine/02.jpg'),
(20, 'Mannequin', 'Portrait', 'Femme mannequin\r\n', 120, './images/Photos_Celine/123b.jpg'),
(21, 'Graffiti banlieue es', 'Ville', 'Pellentesque convallis elit vel sapien dapibus tristique. Nam rutrum sagittis purus a iaculis. Quisque cursus purus ultricies dui porta consectetur. Praesent rhoncus mi sed eros auctor quis viverra ligula luctus. Quisque adipiscing lobortis nunc, at facilisis tellus auctor ut. Morbi convallis lacus ut nisl tempor molestie. Sed mattis consectetur erat eu venenatis. Morbi eget vulputate libero. Suspendisse eros erat, lacinia eu porta non, porta sit amet dolor. Cras dictum porttitor purus non scelerisque. ', 123, './images/Photos_Celine/132.jpg'),
(22, 'Lapin dÃƒÂ©vorÃƒÂ© N/B', 'Portrait', 'Pellentesque convallis elit vel sapien dapibus tristique. Nam rutrum sagittis purus a iaculis. Quisque cursus purus ultricies dui porta consectetur. Praesent rhoncus mi sed eros auctor quis viverra ligula luctus. Quisque adipiscing lobortis nunc, at facilisis tellus auctor ut. Morbi convallis lacus ut nisl tempor molestie. Sed mattis consectetur erat eu venenatis. Morbi eget vulputate libero. Suspendisse eros erat, lacinia eu porta non, porta sit amet dolor. Cras dictum porttitor purus non scelerisque. ', 124, './images/Photos_Celine/141.jpg'),
(23, 'La photographe N/B', 'Portrait', '', 135, './images/Photos_Celine/141b.jpg'),
(24, 'Sortie de poubelle N', 'Portrait', '', 141, './images/Photos_Celine/149.jpg'),
(25, 'De face et de profil', 'Portrait', '', 141, './images/Photos_Celine/151.jpg'),
(26, 'Oasis HLM', 'Ville', 'Pellentesque convallis elit vel sapien dapibus tristique. Nam rutrum sagittis purus a iaculis. Quisque cursus purus ultricies dui porta consectetur. Praesent rhoncus mi sed eros auctor quis viverra ligula luctus. Quisque adipiscing lobortis nunc, at facilisis tellus auctor ut. Morbi convallis lacus ut nisl tempor molestie. Sed mattis consectetur erat eu venenatis. Morbi eget vulputate libero. Suspendisse eros erat, lacinia eu porta non, porta sit amet dolor. Cras dictum porttitor purus non scelerisque. ', 136, './images/Photos_Celine/l.jpg'),
(27, 'Skate', 'Loris', '', 120, './images/Photos_Loris/1.jpg'),
(28, 'Grimace', 'Loris', '', 125, './images/Photos_Loris/2.jpg'),
(29, 'AÃƒÂ©roport', 'Loris', '', 125, './images/Photos_Loris/3.jpg'),
(30, 'Pierre', 'Loris', '', 125, './images/Photos_Loris/Pierre.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `commandes`
--

CREATE TABLE IF NOT EXISTS `commandes` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `id_membre` bigint(20) NOT NULL,
  `id_panier` bigint(20) NOT NULL,
  `Confirme` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=21 ;

--
-- Contenu de la table `commandes`
--

INSERT INTO `commandes` (`id`, `id_membre`, `id_panier`, `Confirme`) VALUES
(15, 1, 19, 1),
(16, 2, 20, 0),
(17, 1, 21, 0),
(18, 6, 23, 1),
(19, 6, 25, 0),
(20, 6, 26, 1);

-- --------------------------------------------------------

--
-- Structure de la table `membres`
--

CREATE TABLE IF NOT EXISTS `membres` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `pseudo` varchar(20) NOT NULL,
  `mail` varchar(200) NOT NULL,
  `mdp` binary(32) NOT NULL,
  `admin` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=14 ;

--
-- Contenu de la table `membres`
--

INSERT INTO `membres` (`id`, `pseudo`, `mail`, `mdp`, `admin`) VALUES
(6, 'guguspass', 'pgvcr@hotmail.com', 'Öú§Úënã;©°æx‚Š\Z8#Oz8)0¬§‹éZ', 0),
(9, '', '', '¶gšÙìw/•×xÃ_Åÿ—Ä“qVSÆÇB’Å­', 0),
(10, 'aurore', 'hhhh.ddd@ss.com', '\r{N^bÎÅÃ|\ZòµN&yÑÜCñì¾[3_™Å(…\0', 0),
(11, 'ggggggg', 'ffff@fff.com', 'Ï°t˜€\rÒ´tí(oû	bÌ¼Phžc&iúþ', 0),
(12, 'admin', 'admin@celine.com', ':üÓùjú¯Ù€ë•Ê¤«¯Æª)öÊ¨Bt=òŠ˜²`—', 1),
(13, 'eeeeee', 'gggg@dddd.com', '²qÜô}p°ƒv×ðLš‡üäŒ.ÓÍ,ä×¨w.è4', 0);

-- --------------------------------------------------------

--
-- Structure de la table `paniers`
--

CREATE TABLE IF NOT EXISTS `paniers` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `articles` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=27 ;

--
-- Contenu de la table `paniers`
--

INSERT INTO `paniers` (`id`, `articles`) VALUES
(19, 'array (\r\n  0 => \r\n  array (\r\n    ''id'' => ''12'',\r\n    ''ref'' => ''Paysage bucolique'',\r\n    ''theme'' => ''espagne'',\r\n    ''description'' => ''Ce paysage'',\r\n    ''prix'' => ''120'',\r\n    ''image'' => '''',\r\n    ''qte'' => 1,\r\n  ),\r\n  1 => \r\n  array (\r\n    ''id'' => ''13'',\r\n    ''ref'' => ''LibertÃƒÂ©1'',\r\n    ''theme'' => ''LibertÃƒÂ©'',\r\n    ''description'' => ''dsvfsvf'',\r\n    ''prix'' => ''135'',\r\n    ''image'' => '''',\r\n    ''qte'' => 2,\r\n  ),\r\n)'),
(20, 'array (\n  0 => \n  array (\n    ''id'' => ''12'',\n    ''ref'' => ''Paysage bucolique'',\n    ''theme'' => ''espagne'',\n    ''description'' => ''Ce paysage'',\n    ''prix'' => ''120'',\n    ''image'' => '''',\n    ''qte'' => 4,\n  ),\n  1 => \n  array (\n    ''id'' => ''13'',\n    ''ref'' => ''LibertÃƒÂ©1'',\n    ''theme'' => ''LibertÃƒÂ©'',\n    ''description'' => ''dsvfsvf'',\n    ''prix'' => ''135'',\n    ''image'' => '''',\n    ''qte'' => 3,\n  ),\n)'),
(21, 'array (\n  0 => \n  array (\n    ''id'' => ''12'',\n    ''ref'' => ''Paysage bucolique'',\n    ''theme'' => ''espagne'',\n    ''description'' => ''Ce paysage'',\n    ''prix'' => ''120'',\n    ''image'' => '''',\n    ''qte'' => 5,\n  ),\n  1 => \n  array (\n    ''id'' => ''13'',\n    ''ref'' => ''LibertÃƒÂ©1'',\n    ''theme'' => ''LibertÃƒÂ©'',\n    ''description'' => ''dsvfsvf'',\n    ''prix'' => ''135'',\n    ''image'' => '''',\n    ''qte'' => 4,\n  ),\n)'),
(22, 'array (\n  0 => \n  array (\n    ''id'' => ''12'',\n    ''ref'' => ''Paysage bucolique 1'',\n    ''theme'' => ''espagne'',\n    ''description'' => ''Ce paysage'',\n    ''prix'' => ''120'',\n    ''image'' => '''',\n    ''qte'' => 1,\n  ),\n  1 => \n  array (\n    ''id'' => ''13'',\n    ''ref'' => ''LibertÃƒÂ©3'',\n    ''theme'' => ''LibertÃƒÂ©'',\n    ''description'' => ''dsvfsvf'',\n    ''prix'' => ''135'',\n    ''image'' => '''',\n    ''qte'' => 3,\n  ),\n)'),
(23, 'array (\n  0 => \n  array (\n    ''id'' => ''12'',\n    ''ref'' => ''Paysage bucolique'',\n    ''theme'' => ''espagne'',\n    ''description'' => ''Ce paysage'',\n    ''prix'' => ''120'',\n    ''image'' => '''',\n    ''qte'' => 1,\n  ),\n  1 => \n  array (\n    ''id'' => ''13'',\n    ''ref'' => ''LibertÃƒÂ©1'',\n    ''theme'' => ''LibertÃƒÂ©'',\n    ''description'' => ''dsvfsvf'',\n    ''prix'' => ''135'',\n    ''image'' => '''',\n    ''qte'' => 2,\n  ),\n)'),
(24, 'array (\n  0 => \n  array (\n    ''id'' => ''12'',\n    ''ref'' => ''Paysage bucolique 1'',\n    ''theme'' => ''espagne'',\n    ''description'' => ''Ce paysage'',\n    ''prix'' => ''120'',\n    ''image'' => '''',\n    ''qte'' => 4,\n  ),\n)'),
(25, 'array (\n  0 => \n  array (\n    ''id'' => ''12'',\n    ''ref'' => ''Paysage bucolique 1'',\n    ''theme'' => ''espagne'',\n    ''description'' => ''Ce paysage'',\n    ''prix'' => ''120'',\n    ''image'' => '''',\n    ''qte'' => 4,\n  ),\n)'),
(26, 'array (\n  0 => \n  array (\n    ''id'' => ''12'',\n    ''ref'' => ''Paysage bucolique 1'',\n    ''theme'' => ''Espagne'',\n    ''description'' => ''Curabitur vel nunc odio. Mauris vehicula erat in tortor congue vel consequat tellus varius. Aliquam pharetra bibendum pulvinar. Mauris rutrum ultricies est, eget gravida ipsum cursus id. Nam nulla enim, mattis non dapibus vitae, commodo non mauris. Ut congue euismod turpis eu pellentesque. Sed dignissim leo et lectus vulputate euismod. Sed eleifend consectetur ligula. '',\n    ''prix'' => ''120'',\n    ''image'' => ''./images/Photos_Celine/123.jpg'',\n    ''qte'' => 2,\n  ),\n  1 => \n  array (\n    ''id'' => ''13'',\n    ''ref'' => ''LibertÃƒÂ©3'',\n    ''theme'' => ''LibertÃƒÂ©'',\n    ''description'' => ''Pellentesque convallis elit vel sapien dapibus tristique. Nam rutrum sagittis purus a iaculis. Quisque cursus purus ultricies dui porta consectetur. Praesent rhoncus mi sed eros auctor quis viverra ligula luctus. Quisque adipiscing lobortis nunc, at facilisis tellus auctor ut. Morbi convallis lacus ut nisl tempor molestie. Sed mattis consectetur erat eu venenatis. Morbi eget vulputate libero. Suspendisse eros erat, lacinia eu porta non, porta sit amet dolor. Cras dictum porttitor purus non scelerisque. '',\n    ''prix'' => ''135'',\n    ''image'' => ''./images/Photos_Celine/113.jpg'',\n    ''qte'' => 4,\n  ),\n)');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
