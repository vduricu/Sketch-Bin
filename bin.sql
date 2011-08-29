-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Gazda: localhost
-- Timp de generare: 29 Aug 2011 la 18:50
-- Versiune server: 5.5.8
-- Versiune PHP: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Baza de date: `skbin`
--

-- --------------------------------------------------------

--
-- Structura de tabel pentru tabelul `config`
--

CREATE TABLE IF NOT EXISTS `config` (
  `name` varchar(128) NOT NULL,
  `value` text NOT NULL,
  PRIMARY KEY (`name`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Salvarea datelor din tabel `config`
--

INSERT INTO `config` (`name`, `value`) VALUES
('plugins', 'a:0:{}'),
('timezone', 'Europe/Bucharest'),
('title', 'Sketch Bin'),
('path', '/Sketch-Bin'),
('default_height', '580'),
('default_width', '850'),
('description', 'Draw and share your draw.'),
('keywords', 'sketch, spark, drawing pad, sketch pad');

-- --------------------------------------------------------

--
-- Structura de tabel pentru tabelul `draws`
--

CREATE TABLE IF NOT EXISTS `draws` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `filename` varchar(255) NOT NULL,
  `creationdate` datetime NOT NULL,
  `modificationdate` datetime NOT NULL,
  `type` enum('normal','extended') NOT NULL DEFAULT 'normal',
  `width` int(4) unsigned NOT NULL DEFAULT '850',
  `height` int(4) unsigned NOT NULL DEFAULT '580',
  `bkgcolor` varchar(10) NOT NULL DEFAULT 'none',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Salvarea datelor din tabel `draws`
--

INSERT INTO `draws` (`id`, `title`, `filename`, `creationdate`, `modificationdate`, `type`, `width`, `height`, `bkgcolor`) VALUES
(1, 'Dogz', 'A4ioRrcRnaup', '2011-08-29 20:22:55', '2011-08-29 20:35:19', 'extended', 850, 580, 'none'),
(2, 'pinguin', 'Jhpheo8EqeN8', '2011-08-29 20:55:20', '2011-08-29 20:55:20', 'extended', 850, 580, '#d80000'),
(3, '3unghi', 'FFs3tcQXYAoy', '2011-08-29 21:02:17', '2011-08-29 21:02:17', 'extended', 850, 580, 'axis'),
(4, 'das', 'ukc4RnR0rcs5', '2011-08-29 21:02:34', '2011-08-29 21:02:34', 'extended', 850, 580, 'axis');
