SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

USE app;

DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `user` (`id`, `email`, `password`) VALUES
(1,	'rkdtnrkdtn55@gmail.com',	'123456');

DROP TABLE IF EXISTS `File`;
CREATE TABLE `File` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Filename` varchar(255) NOT NULL,
  `Type` varchar(255) NOT NULL,
  `Size` int(11) NOT NULL,
  `Content` longblob NOT NULL,
  `Message` varchar(255) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
