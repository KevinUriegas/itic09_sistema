/*
Navicat MySQL Data Transfer

Source Server         : local
Source Server Version : 50715
Source Host           : localhost:3306
Source Database       : utltic2019

Target Server Type    : MYSQL
Target Server Version : 50715
File Encoding         : 65001

Date: 2019-05-14 00:05:54
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for alumnos
-- ----------------------------
DROP TABLE IF EXISTS `alumnos`;
CREATE TABLE `alumnos` (
  `id_alumno` int(11) NOT NULL AUTO_INCREMENT,
  `no_control` text,
  `id_carrera` int(11) DEFAULT NULL,
  `id_persona` int(11) DEFAULT NULL,
  `id_registro` int(11) DEFAULT NULL,
  `fecha_registro` date DEFAULT NULL,
  `hora_registro` time DEFAULT NULL,
  `activo` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_alumno`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of alumnos
-- ----------------------------
INSERT INTO `alumnos` VALUES ('1', '0001', '1', '3', '1', '2019-05-14', '00:04:45', '1');

-- ----------------------------
-- Table structure for carreras
-- ----------------------------
DROP TABLE IF EXISTS `carreras`;
CREATE TABLE `carreras` (
  `id_carrera` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` text,
  `abreviatura` text,
  `id_registro` int(11) DEFAULT NULL,
  `fecha_registro` date DEFAULT NULL,
  `hora_registro` time DEFAULT NULL,
  `activo` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_carrera`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of carreras
-- ----------------------------
INSERT INTO `carreras` VALUES ('1', 'Ingenieria en TIC', 'ITIC', '1', '2019-05-14', '05:05:10', '1');

-- ----------------------------
-- Table structure for personas
-- ----------------------------
DROP TABLE IF EXISTS `personas`;
CREATE TABLE `personas` (
  `id_persona` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` text,
  `ap_paterno` text,
  `ap_materno` text,
  `sexo` text,
  `direccion` text,
  `telefono` text,
  `fecha_nacimiento` date DEFAULT NULL,
  `correo` text,
  `tipo_persona` text,
  `id_registro` int(11) DEFAULT NULL,
  `fecha_registro` date DEFAULT NULL,
  `hora_registro` time DEFAULT NULL,
  `activo` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_persona`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of personas
-- ----------------------------
INSERT INTO `personas` VALUES ('2', 'Kevin Alexis', 'Uriegas', 'Lopez', 'M', 'La Petaca', '8211173214', '0000-00-00', 'kevin.uriegaslo@icloud.com', 'estudiante', '1', '2019-05-14', '05:04:00', '1');
INSERT INTO `personas` VALUES ('3', 'Alex', 'Lopez', 'Lopez', 'F', 'La Petaca', '8211240781', '0000-00-00', 'kevin.uriegaslo@gmail.com', 'estudiante', '1', '2019-05-14', '05:04:01', '1');

-- ----------------------------
-- Table structure for registros
-- ----------------------------
DROP TABLE IF EXISTS `registros`;
CREATE TABLE `registros` (
  `id_registro` int(11) NOT NULL AUTO_INCREMENT,
  `id_alumno` int(11) DEFAULT NULL,
  `matricula` text,
  `fecha_ingreso` date DEFAULT NULL,
  `hora_ingreso` time DEFAULT NULL,
  `fecha_salida` date DEFAULT NULL,
  `hora_salida` time DEFAULT NULL,
  `fecha_actualiza` date DEFAULT NULL,
  `hora_actualiza` time DEFAULT NULL,
  `activo` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_registro`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of registros
-- ----------------------------

-- ----------------------------
-- Table structure for usuarios
-- ----------------------------
DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL AUTO_INCREMENT,
  `usuario` text,
  `contra` text,
  `id_persona` int(11) DEFAULT NULL,
  `id_registro` int(11) DEFAULT NULL,
  `fecha_registro` date DEFAULT NULL,
  `hora_registro` time DEFAULT NULL,
  `activo` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_usuario`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of usuarios
-- ----------------------------
INSERT INTO `usuarios` VALUES ('1', 'KevinU', 'kevinalexis', '2', '1', '2019-05-14', '00:05:36', '1');
