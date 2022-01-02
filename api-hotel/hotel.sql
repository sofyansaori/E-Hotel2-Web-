-- Adminer 4.8.1 MySQL 5.5.5-10.3.31-MariaDB-0ubuntu0.20.04.1 dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

SET NAMES utf8mb4;

DROP TABLE IF EXISTS `admin`;
CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`id_admin`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `admin` (`id_admin`, `username`, `password`) VALUES
(1,	'admin',	'4acb4bc224acbbe3c2bfdcaa39a4324e');

DROP TABLE IF EXISTS `kamar`;
CREATE TABLE `kamar` (
  `id_kamar` int(10) NOT NULL AUTO_INCREMENT,
  `kodehotel` varchar(8) NOT NULL,
  `typekamar` varchar(20) NOT NULL,
  `hargapermalam` int(9) NOT NULL,
  PRIMARY KEY (`id_kamar`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `kamar` (`id_kamar`, `kodehotel`, `typekamar`, `hargapermalam`) VALUES
(1,	'PRES001',	'Presidential',	1250000);

DROP TABLE IF EXISTS `transaksi`;
CREATE TABLE `transaksi` (
  `id_transaksi` int(11) NOT NULL AUTO_INCREMENT,
  `id_kamar` int(50) NOT NULL,
  `id_user` int(50) NOT NULL,
  `checkin` datetime NOT NULL,
  `checkout` datetime NOT NULL,
  PRIMARY KEY (`id_transaksi`),
  KEY `fk_kamar` (`id_kamar`),
  KEY `fk_user` (`id_user`),
  CONSTRAINT `fk_kamar` FOREIGN KEY (`id_kamar`) REFERENCES `kamar` (`id_kamar`),
  CONSTRAINT `fk_user` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(25) NOT NULL,
  `nama` varchar(100) CHARACTER SET utf8mb4 NOT NULL,
  `pass` varchar(50) NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `user` (`id_user`, `username`, `nama`, `pass`) VALUES
(1,	'user',	'User Default',	'6ad14ba9986e3615423dfca256d04e3f');

-- 2021-10-17 12:21:26
