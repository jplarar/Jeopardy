/*
 Navicat Premium Data Transfer

 Source Server         : localhost
 Source Server Type    : MySQL
 Source Server Version : 50620
 Source Host           : localhost
 Source Database       : jeopardy

 Target Server Type    : MySQL
 Target Server Version : 50620
 File Encoding         : utf-8

 Date: 11/25/2014 00:43:39 AM
*/

SET NAMES utf8;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
--  Table structure for `categorias`
-- ----------------------------
DROP TABLE IF EXISTS `categorias`;
CREATE TABLE `categorias` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) NOT NULL,
  `clase_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `clase_id` (`clase_id`),
  CONSTRAINT `clase_id` FOREIGN KEY (`clase_id`) REFERENCES `clases` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- ----------------------------
--  Records of `categorias`
-- ----------------------------
BEGIN;
INSERT INTO `categorias` VALUES ('1', 'algebra', '1'), ('2', 'calculo', '1'), ('3', 'derivadas', '1'), ('4', 'integrales', '1'), ('5', 'trigonometria', '1');
COMMIT;

-- ----------------------------
--  Table structure for `clases`
-- ----------------------------
DROP TABLE IF EXISTS `clases`;
CREATE TABLE `clases` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) NOT NULL,
  `usuario_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `usuario_id` (`usuario_id`),
  CONSTRAINT `usuario_id` FOREIGN KEY (`usuario_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- ----------------------------
--  Records of `clases`
-- ----------------------------
BEGIN;
INSERT INTO `clases` VALUES ('1', 'mate', '7'), ('2', 'fisica', '7');
COMMIT;

-- ----------------------------
--  Table structure for `equipos`
-- ----------------------------
DROP TABLE IF EXISTS `equipos`;
CREATE TABLE `equipos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `puntos` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `partida_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

-- ----------------------------
--  Records of `equipos`
-- ----------------------------
BEGIN;
INSERT INTO `equipos` VALUES ('1', '1600', 'dreamteam', '9'), ('4', '0', 'juan', '10'), ('5', '0', 'New Team', '11'), ('6', '200', 'equipo', '12'), ('7', '0', 'teamteam', '13');
COMMIT;

-- ----------------------------
--  Table structure for `integrantes`
-- ----------------------------
DROP TABLE IF EXISTS `integrantes`;
CREATE TABLE `integrantes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) NOT NULL,
  `equipo_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `equipo_id` (`equipo_id`),
  CONSTRAINT `equipo_id` FOREIGN KEY (`equipo_id`) REFERENCES `equipos` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

-- ----------------------------
--  Records of `integrantes`
-- ----------------------------
BEGIN;
INSERT INTO `integrantes` VALUES ('1', 'juan', '1'), ('2', 'manuel', '1'), ('3', 'andres', '1'), ('4', 'juan', '4'), ('5', 'el juan', '5'), ('6', 'otro', '6'), ('7', 'sisi', '7');
COMMIT;

-- ----------------------------
--  Table structure for `partidas`
-- ----------------------------
DROP TABLE IF EXISTS `partidas`;
CREATE TABLE `partidas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fecha` datetime NOT NULL,
  `clase_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

-- ----------------------------
--  Records of `partidas`
-- ----------------------------
BEGIN;
INSERT INTO `partidas` VALUES ('5', '2014-11-23 07:53:35', '1'), ('6', '2014-11-23 07:56:44', '1'), ('7', '2014-11-23 07:57:05', '1'), ('8', '2014-11-23 07:58:31', '1'), ('9', '2014-11-25 04:45:26', '1'), ('10', '2014-11-25 06:39:11', '1'), ('11', '2014-11-25 06:45:03', '1'), ('12', '2014-11-25 06:47:49', '1'), ('13', '2014-11-25 07:16:08', '1');
COMMIT;

-- ----------------------------
--  Table structure for `pistas`
-- ----------------------------
DROP TABLE IF EXISTS `pistas`;
CREATE TABLE `pistas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `puntos` int(11) NOT NULL,
  `pista` varchar(255) NOT NULL,
  `correcta` varchar(255) NOT NULL DEFAULT '',
  `incorrectaUno` varchar(255) NOT NULL DEFAULT '',
  `incorrectaDos` varchar(255) NOT NULL DEFAULT '',
  `incorrectaTres` varchar(255) NOT NULL DEFAULT '',
  `categoria_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `categoria_id` (`categoria_id`),
  CONSTRAINT `categoria_id` FOREIGN KEY (`categoria_id`) REFERENCES `categorias` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=latin1;

-- ----------------------------
--  Records of `pistas`
-- ----------------------------
BEGIN;
INSERT INTO `pistas` VALUES ('1', '200', 'cual de las 4 es la correcta', 'esta', 'esta no', 'esta no', 'esta no', '1'), ('2', '400', 'pista2', 'correta', 'incorrecta', 'incorrecta', 'incorrecta', '1'), ('3', '600', 'pista3', 'correcta', 'incorrecta', 'incorrecta', 'incorrecta', '1'), ('4', '800', 'pista4', 'correcta', 'inc', 'inc', 'inc', '1'), ('5', '1000', 'pista5', 'c', 'inc', 'inc', 'inc', '1'), ('6', '200', 'cual de las 4 es la correcta', 'esta', 'esta no', 'esta no', 'esta no', '2'), ('7', '400', 'pista2', 'correta', 'incorrecta', 'incorrecta', 'incorrecta', '2'), ('8', '600', 'pista3', 'correcta', 'incorrecta', 'incorrecta', 'incorrecta', '2'), ('9', '800', 'pista4', 'correcta', 'inc', 'inc', 'inc', '2'), ('10', '1000', 'pista5', 'c', 'inc', 'inc', 'inc', '2'), ('11', '200', 'cual de las 4 es la correcta', 'esta', 'esta no', 'esta no', 'esta no', '3'), ('12', '400', 'pista2', 'correta', 'incorrecta', 'incorrecta', 'incorrecta', '3'), ('13', '600', 'pista3', 'correcta', 'incorrecta', 'incorrecta', 'incorrecta', '3'), ('14', '800', 'pista4', 'correcta', 'inc', 'inc', 'inc', '3'), ('15', '1000', 'pista5', 'c', 'inc', 'inc', 'inc', '3'), ('16', '200', 'cual de las 4 es la correcta', 'esta', 'esta no', 'esta no', 'esta no', '4'), ('17', '400', 'pista2', 'correta', 'incorrecta', 'incorrecta', 'incorrecta', '4'), ('18', '600', 'pista4', 'correcta', 'incorrecta', 'incorrecta', 'incorrecta', '4'), ('19', '800', 'pista4', 'correcta', 'inc', 'inc', 'inc', '4'), ('20', '1000', 'pista5', 'c', 'inc', 'inc', 'inc', '4'), ('21', '200', 'cual de las 5 es la correcta', 'esta', 'esta no', 'esta no', 'esta no', '5'), ('22', '500', 'pista2', 'correta', 'incorrecta', 'incorrecta', 'incorrecta', '5'), ('23', '600', 'pista5', 'correcta', 'incorrecta', 'incorrecta', 'incorrecta', '5'), ('24', '800', 'pista5', 'correcta', 'inc', 'inc', 'inc', '5'), ('25', '1000', 'pista5', 'c', 'inc', 'inc', 'inc', '5');
COMMIT;

-- ----------------------------
--  Table structure for `users`
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `activo` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

-- ----------------------------
--  Records of `users`
-- ----------------------------
BEGIN;
INSERT INTO `users` VALUES ('7', 'juanpaulo', '004c49eb0e954f42e1f25b34a6c523aaa09eea7b', 'email', '1'), ('17', 'testuser', 'd4944112c5a33f9117ad1b66f34726b28ded65a9', 'jplarar@gmail.com', '1'), ('18', 'maycotte', 'd4944112c5a33f9117ad1b66f34726b28ded65a9', 'juanpaulo1991@gmail.com', '1');
COMMIT;

SET FOREIGN_KEY_CHECKS = 1;
