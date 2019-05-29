/*
Navicat MySQL Data Transfer

Source Server         : informatica
Source Server Version : 50051
Source Host           : localhost:3306
Source Database       : utltic2019

Target Server Type    : MYSQL
Target Server Version : 50051
File Encoding         : 65001

Date: 2019-05-27 21:01:39
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for alumnos
-- ----------------------------
DROP TABLE IF EXISTS `alumnos`;
CREATE TABLE `alumnos` (
  `id_alumno` int(11) NOT NULL auto_increment,
  `no_control` text,
  `id_carrera` int(11) default NULL,
  `id_persona` int(11) default NULL,
  `id_registro` int(11) default NULL,
  `fecha_registro` date default NULL,
  `hora_registro` time default NULL,
  `activo` int(11) default NULL,
  PRIMARY KEY  (`id_alumno`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of alumnos
-- ----------------------------
INSERT INTO `alumnos` VALUES ('1', '02720145', '1', '12', '1', '2019-05-08', '19:38:36', '1');
INSERT INTO `alumnos` VALUES ('2', '1245789', '2', '13', '1', '2019-05-08', '16:18:52', '1');

-- ----------------------------
-- Table structure for carreras
-- ----------------------------
DROP TABLE IF EXISTS `carreras`;
CREATE TABLE `carreras` (
  `id_carrera` int(11) NOT NULL auto_increment,
  `nombre` text,
  `abreviatura` text,
  `id_registro` int(11) default NULL,
  `fecha_registro` date default NULL,
  `hora_registro` time default NULL,
  `activo` int(11) default NULL,
  PRIMARY KEY  (`id_carrera`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of carreras
-- ----------------------------
INSERT INTO `carreras` VALUES ('1', 'Ingenieria en Sistemas Computacionales', 'ISC', '1', '2019-05-08', '16:03:13', '1');
INSERT INTO `carreras` VALUES ('2', 'Ingenieria Industrial', 'II', '1', '2019-05-08', '16:06:32', '1');
INSERT INTO `carreras` VALUES ('3', 'Ingenieria Electromecanica', 'IE', '1', '2019-05-09', '17:16:50', '1');

-- ----------------------------
-- Table structure for personas
-- ----------------------------
DROP TABLE IF EXISTS `personas`;
CREATE TABLE `personas` (
  `id_persona` int(11) NOT NULL auto_increment,
  `nombre` text,
  `ap_paterno` text,
  `ap_materno` text,
  `sexo` text,
  `direccion` text,
  `telefono` text,
  `fecha_nacimiento` date default NULL,
  `correo` text,
  `tipo_persona` text,
  `id_registro` int(11) default NULL,
  `fecha_registro` date default NULL,
  `hora_registro` time default NULL,
  `activo` int(11) default NULL,
  PRIMARY KEY  (`id_persona`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of personas
-- ----------------------------
INSERT INTO `personas` VALUES ('1', 'Pablo Adrian', 'Perez', 'Briseño', 'M', 'Ahuehuete 675 Colonia Porvileonx', '8212128033x', '1984-03-05', 'papb100@hotmail.comx', 'trabajador', '1', '2019-05-06', '21:25:20', '1');
INSERT INTO `personas` VALUES ('10', 'Maria Juanita', 'Perez', 'Acosta', 'F', 'Cactus 1218', '82155789', '2019-04-09', 'papb100@hotmail.com', 'trabajador', '1', '2019-05-06', '21:25:24', '1');
INSERT INTO `personas` VALUES ('11', 'Pablo Saeed', 'Perez', 'Muñiz', 'M', 'Cactus 1218', '2128033', '2019-04-25', 'correo@correo.com', 'trabajador', '1', '2019-04-30', '17:57:04', '1');
INSERT INTO `personas` VALUES ('12', 'SIlvia', 'Juarez', 'Tienda', 'F', 'Provielon', '8211478599', '2010-05-05', 'notiene@hptmial.com', 'estudiante', '1', '2019-05-08', '16:07:46', '1');
INSERT INTO `personas` VALUES ('13', 'Manuel', 'Rosales', 'Bravo', 'M', 'Merida 1258', '8245896', '2019-05-08', 'notiene@hptmial.com', 'estudiante', '1', '2019-05-08', '16:11:49', '1');

-- ----------------------------
-- Table structure for registros
-- ----------------------------
DROP TABLE IF EXISTS `registros`;
CREATE TABLE `registros` (
  `id_registro` int(11) NOT NULL auto_increment,
  `id_alumno` int(11) default NULL,
  `matricula` text,
  `fecha_ingreso` date default NULL,
  `hora_ingreso` time default NULL,
  `fecha_salida` date default NULL,
  `hora_salida` time default NULL,
  `fecha_actualiza` date default NULL,
  `hora_actualiza` time default NULL,
  `activo` int(11) default NULL,
  PRIMARY KEY  (`id_registro`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of registros
-- ----------------------------

-- ----------------------------
-- Table structure for usuarios
-- ----------------------------
DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL auto_increment,
  `usuario` text,
  `contra` text,
  `id_persona` int(11) default NULL,
  `id_registro` int(11) default NULL,
  `pvez` int(11) default NULL,
  `fecha_registro` date default NULL,
  `hora_registro` time default NULL,
  `activo` int(11) default NULL,
  PRIMARY KEY  (`id_usuario`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of usuarios
-- ----------------------------
INSERT INTO `usuarios` VALUES ('1', 'paperez', '827ccb0eea8a706c4c34a16891f84e7b', '1', '1', '0', '2019-05-13', '22:12:54', '1');
INSERT INTO `usuarios` VALUES ('7', 'maria', '827ccb0eea8a706c4c34a16891f84e7b', '10', '1', '0', '2019-05-09', '16:28:27', '1');
INSERT INTO `usuarios` VALUES ('8', 'saeed', '827ccb0eea8a706c4c34a16891f84e7b', '11', '1', '0', '2019-05-09', '16:28:29', '1');
