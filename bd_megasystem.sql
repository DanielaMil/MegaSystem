/*
 Navicat Premium Data Transfer

 Source Server         : BD_Gaby
 Source Server Type    : MySQL
 Source Server Version : 100131
 Source Host           : localhost:3306
 Source Schema         : bd_megasystem

 Target Server Type    : MySQL
 Target Server Version : 100131
 File Encoding         : 65001

 Date: 25/11/2019 22:47:59
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for alumno
-- ----------------------------
DROP TABLE IF EXISTS `alumno`;
CREATE TABLE `alumno`  (
  `idAlumno` int(4) NOT NULL AUTO_INCREMENT,
  `dni` char(8) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `nombre` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `apPaterno` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `apMaterno` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `genero` bit(1) NULL DEFAULT NULL,
  `celular` char(9) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `feNacimiento` date NULL DEFAULT NULL,
  `direccion` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`idAlumno`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 41 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of alumno
-- ----------------------------
INSERT INTO `alumno` VALUES (16, '70409311', 'Jose Luis', 'Cruz', 'Julcarima', b'0', '948795936', '1997-05-02', 'calle Arica#1247');
INSERT INTO `alumno` VALUES (17, '70409359', 'Chrintian', 'Carrasco', 'García', b'0', '948759784', '1995-06-15', 'Piura');
INSERT INTO `alumno` VALUES (18, '74809025', 'Patricia Daniela', 'Mil', 'Limo', b'0', '847958629', '1997-11-14', 'Chiclayo-09 de Octubre');
INSERT INTO `alumno` VALUES (19, '12345678', 'Gómez', 'Jese', 'Mongragón', b'1', '124569878', '2019-11-18', 'sadfsdfe we fw');
INSERT INTO `alumno` VALUES (22, '12345678', 'aaaaaaaa', 'aaaaaaaaaa', 'aaaaaaaaaaa', b'1', '234234234', '2019-11-25', 'asdasd');
INSERT INTO `alumno` VALUES (23, '12345678', 'aaaaaaaa', 'aaaaaaaaaa', 'aaaaaaaaaaa', b'1', '234234234', '2019-11-25', 'asdasd');
INSERT INTO `alumno` VALUES (24, '70409311', 'Jose Luis', 'Cruz', 'Julcarima', b'1', '948795936', '1997-05-02', 'calle Arica#1247');
INSERT INTO `alumno` VALUES (25, '77137872', 'gabriela', 'sanchez', 'maza', b'1', '973309886', '1997-10-26', 'victor raul 107');
INSERT INTO `alumno` VALUES (26, '77137872', 'gabriela', 'sanchez', 'maza', b'1', '973309886', '1997-10-26', 'victor raul 107');
INSERT INTO `alumno` VALUES (27, '77137872', 'gabriela', 'sanchez', 'maza', b'1', '973309886', '1997-10-26', 'victor raul 107');
INSERT INTO `alumno` VALUES (28, '77137872', 'gabriela', 'sanchez', 'maza', b'1', '973309886', '1997-10-26', 'victor raul 107');
INSERT INTO `alumno` VALUES (29, '77137872', 'gabriela', 'sanchez', 'maza', b'1', '973309886', '1997-10-26', 'victor raul 107');
INSERT INTO `alumno` VALUES (30, '77137872', 'gabriela', 'sanchez', 'maza', b'1', '973309886', '1997-10-26', 'victor raul 107');
INSERT INTO `alumno` VALUES (31, '77137872', 'gabriela', 'sanchez', 'maza', b'1', '973309886', '1997-10-26', 'victor raul 107');
INSERT INTO `alumno` VALUES (32, '77137872', 'gabriela', 'sanchez', 'maza', b'1', '973309886', '1997-10-26', 'victor raul 107');
INSERT INTO `alumno` VALUES (33, '77137872', 'gabriela', 'sanchez', 'maza', b'1', '973309886', '1997-10-26', 'victor raul 107');
INSERT INTO `alumno` VALUES (34, '77137872', 'gabriela', 'sanchez', 'maza', b'1', '973309886', '1997-10-26', 'victor raul 107');
INSERT INTO `alumno` VALUES (35, '77137872', 'gabriela', 'sanchez', 'maza', b'1', '973309886', '1997-10-26', 'victor raul 107');
INSERT INTO `alumno` VALUES (36, '77137872', 'gabriela', 'sanchez', 'maza', b'1', '973309886', '1997-10-26', 'victor raul 107');
INSERT INTO `alumno` VALUES (37, '77137872', 'gabriela', 'sanchez', 'maza', b'1', '973309886', '1997-10-26', 'victor raul 107');
INSERT INTO `alumno` VALUES (38, '77137872', 'gabriela', 'sanchez', 'maza', b'1', '973309886', '1997-10-26', 'victor raul 107');
INSERT INTO `alumno` VALUES (39, '77137872', 'gabriela', 'sanchez', 'maza', b'1', '973309886', '1997-10-26', 'victor raul 107');
INSERT INTO `alumno` VALUES (40, '77137872', 'gabriela', 'sanchez', 'maza', b'1', '973309886', '1997-10-26', 'victor raul 107');

-- ----------------------------
-- Table structure for apoderado
-- ----------------------------
DROP TABLE IF EXISTS `apoderado`;
CREATE TABLE `apoderado`  (
  `idApoderado` int(4) NOT NULL AUTO_INCREMENT,
  `dni` char(8) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `nombre` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `apPaterno` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `apMaterno` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `celular` char(9) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `direccion` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `parentesco` char(10) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`idApoderado`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 20 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of apoderado
-- ----------------------------
INSERT INTO `apoderado` VALUES (1, '87654321', 'bbbbbb', 'bbbbbbbb', 'bbbbbbbb', '234', 'sdfsdf', 'sfsd');
INSERT INTO `apoderado` VALUES (2, '87654321', 'bbbbbb', 'bbbbbbbb', 'bbbbbbbb', '234', 'sdfsdf', 'sfsd');
INSERT INTO `apoderado` VALUES (3, '11111111', 'qqqq', 'qqqqq', 'qqqq', '145662', 'sadfsdf', 'tio');
INSERT INTO `apoderado` VALUES (4, '80517256', 'doris', 'maza', 'lopez', '956575335', 'victor raul 107', 'mama');
INSERT INTO `apoderado` VALUES (5, '80517256', 'doris', 'maza', 'lopez', '956575335', 'victor raul 107', 'mama');
INSERT INTO `apoderado` VALUES (6, '80517256', 'doris', 'maza', 'lopez', '956575335', 'victor raul 107', 'mama');
INSERT INTO `apoderado` VALUES (7, '80517256', 'doris', 'maza', 'lopez', '956575335', 'victor raul 107', 'mama');
INSERT INTO `apoderado` VALUES (8, '80517256', 'doris', 'maza', 'lopez', '956575335', 'victor raul 107', 'mama');
INSERT INTO `apoderado` VALUES (9, '80517256', 'doris', 'maza', 'lopez', '956575335', 'victor raul 107', 'mama');
INSERT INTO `apoderado` VALUES (10, '80517256', 'doris', 'maza', 'lopez', '956575335', 'victor raul 107', 'mama');
INSERT INTO `apoderado` VALUES (11, '80517256', 'doris', 'maza', 'lopez', '956575335', 'victor raul 107', 'mama');
INSERT INTO `apoderado` VALUES (12, '80517256', 'doris', 'maza', 'lopez', '956575335', 'victor raul 107', 'mama');
INSERT INTO `apoderado` VALUES (13, '80517256', 'doris', 'maza', 'lopez', '956575335', 'victor raul 107', 'mama');
INSERT INTO `apoderado` VALUES (14, '80517256', 'doris', 'maza', 'lopez', '956575335', 'victor raul 107', 'mama');
INSERT INTO `apoderado` VALUES (15, '80517256', 'doris', 'maza', 'lopez', '956575335', 'victor raul 107', 'mama');
INSERT INTO `apoderado` VALUES (16, '80517256', 'doris', 'maza', 'lopez', '956575335', 'victor raul 107', 'mama');
INSERT INTO `apoderado` VALUES (17, '80517256', 'doris', 'maza', 'lopez', '956575335', 'victor raul 107', 'mama');
INSERT INTO `apoderado` VALUES (18, '80517256', 'doris', 'maza', 'lopez', '956575335', 'victor raul 107', 'mama');
INSERT INTO `apoderado` VALUES (19, '80517256', 'doris', 'maza', 'lopez', '956575335', 'victor raul 107', 'mama');

-- ----------------------------
-- Table structure for ciclo
-- ----------------------------
DROP TABLE IF EXISTS `ciclo`;
CREATE TABLE `ciclo`  (
  `idCiclo` int(4) NOT NULL AUTO_INCREMENT,
  `nombre` char(15) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `feInicio` date NULL DEFAULT NULL,
  `feFin` date NULL DEFAULT NULL,
  `activo` bit(1) NULL DEFAULT NULL COMMENT '1-> Activo ',
  PRIMARY KEY (`idCiclo`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of ciclo
-- ----------------------------
INSERT INTO `ciclo` VALUES (2, '2020_I', '2020-01-06', '2020-04-30', b'1');

-- ----------------------------
-- Table structure for concepto
-- ----------------------------
DROP TABLE IF EXISTS `concepto`;
CREATE TABLE `concepto`  (
  `idConcepto` int(2) NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `moTotal` float(4, 2) NULL DEFAULT NULL,
  PRIMARY KEY (`idConcepto`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of concepto
-- ----------------------------
INSERT INTO `concepto` VALUES (1, 'Certificado', NULL);

-- ----------------------------
-- Table structure for cuota
-- ----------------------------
DROP TABLE IF EXISTS `cuota`;
CREATE TABLE `cuota`  (
  `idCuota` int(4) NOT NULL AUTO_INCREMENT,
  `importe` float(4, 2) NULL DEFAULT NULL,
  `feEmision` datetime(0) NULL DEFAULT NULL,
  `idMatricula` int(4) NULL DEFAULT NULL,
  `idPago` int(4) NULL DEFAULT NULL,
  PRIMARY KEY (`idCuota`) USING BTREE,
  INDEX `idMatricula`(`idMatricula`) USING BTREE,
  INDEX `idPago`(`idPago`) USING BTREE,
  CONSTRAINT `cuota_ibfk_1` FOREIGN KEY (`idPago`) REFERENCES `pago` (`idPago`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Table structure for curso
-- ----------------------------
DROP TABLE IF EXISTS `curso`;
CREATE TABLE `curso`  (
  `idCurso` int(4) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`idCurso`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 9 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of curso
-- ----------------------------
INSERT INTO `curso` VALUES (5, 'Word');
INSERT INTO `curso` VALUES (6, 'Excel');
INSERT INTO `curso` VALUES (7, 'Power Point');
INSERT INTO `curso` VALUES (8, 'Computación');

-- ----------------------------
-- Table structure for grupo
-- ----------------------------
DROP TABLE IF EXISTS `grupo`;
CREATE TABLE `grupo`  (
  `idGrupo` int(4) NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `idCurso` int(4) NULL DEFAULT NULL,
  `duMeses` int(2) NULL DEFAULT NULL,
  `duTotalHoras` int(3) NULL DEFAULT NULL,
  `idCiclo` int(4) NULL DEFAULT NULL,
  `vacante` int(2) NULL DEFAULT NULL,
  `hoInicio` time(2) NULL DEFAULT NULL,
  `hoFin` time(2) NULL DEFAULT NULL,
  `dia` char(9) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`idGrupo`) USING BTREE,
  INDEX `idCurso`(`idCurso`) USING BTREE,
  INDEX `idCiclo`(`idCiclo`) USING BTREE,
  CONSTRAINT `grupo_ibfk_1` FOREIGN KEY (`idCurso`) REFERENCES `curso` (`idCurso`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT `grupo_ibfk_2` FOREIGN KEY (`idCiclo`) REFERENCES `ciclo` (`idCiclo`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 6 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of grupo
-- ----------------------------
INSERT INTO `grupo` VALUES (3, 'A (9:00am - 1:00pm)', 5, 4, 64, 2, 5, '00:00:09.00', '00:00:01.00', 'Sábado');
INSERT INTO `grupo` VALUES (4, 'B (2:00pm - 6:00pm)', 5, 4, 64, 2, 4, '00:00:02.00', '00:00:06.00', 'Sábado');
INSERT INTO `grupo` VALUES (5, 'A (9:00am - 1:00pm)', 6, 3, 48, 2, 4, '00:00:09.00', '00:00:01.00', 'Sábado');

-- ----------------------------
-- Table structure for matricula
-- ----------------------------
DROP TABLE IF EXISTS `matricula`;
CREATE TABLE `matricula`  (
  `idMatricula` int(4) NOT NULL AUTO_INCREMENT,
  `fecha` datetime(0) NULL DEFAULT NULL,
  `idGrupo` int(4) NULL DEFAULT NULL,
  `idApoderado` int(4) NULL DEFAULT NULL,
  `idAlumno` int(4) NULL DEFAULT NULL,
  `idPromotor` int(4) NULL DEFAULT NULL,
  PRIMARY KEY (`idMatricula`) USING BTREE,
  INDEX `idPromotor`(`idPromotor`) USING BTREE,
  INDEX `idAlumno`(`idAlumno`) USING BTREE,
  INDEX `idApoderado`(`idApoderado`) USING BTREE,
  INDEX `idGrupo`(`idGrupo`) USING BTREE,
  CONSTRAINT `matricula_ibfk_1` FOREIGN KEY (`idApoderado`) REFERENCES `apoderado` (`idApoderado`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT `matricula_ibfk_2` FOREIGN KEY (`idPromotor`) REFERENCES `promotor` (`idPromotor`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT `matricula_ibfk_3` FOREIGN KEY (`idAlumno`) REFERENCES `alumno` (`idAlumno`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT `matricula_ibfk_5` FOREIGN KEY (`idGrupo`) REFERENCES `grupo` (`idGrupo`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT `matricula_ibfk_6` FOREIGN KEY (`idMatricula`) REFERENCES `pago` (`idMatricula`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Table structure for pago
-- ----------------------------
DROP TABLE IF EXISTS `pago`;
CREATE TABLE `pago`  (
  `idPago` int(4) NOT NULL AUTO_INCREMENT,
  `monto` float(4, 2) NULL DEFAULT NULL,
  `feVencimiento` date NULL DEFAULT NULL,
  `idConcepto` int(4) NULL DEFAULT NULL,
  `idMatricula` int(4) NULL DEFAULT NULL,
  `saldo` float(4, 2) NULL DEFAULT NULL,
  `pagado` bit(1) NULL DEFAULT NULL,
  `raDescuento` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `moDescuento` float(4, 2) NULL DEFAULT NULL,
  PRIMARY KEY (`idPago`) USING BTREE,
  INDEX `idConcepto`(`idConcepto`) USING BTREE,
  INDEX `idMatricula`(`idMatricula`) USING BTREE,
  CONSTRAINT `pago_ibfk_1` FOREIGN KEY (`idConcepto`) REFERENCES `concepto` (`idConcepto`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Table structure for promotor
-- ----------------------------
DROP TABLE IF EXISTS `promotor`;
CREATE TABLE `promotor`  (
  `idPromotor` int(4) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `apPaterno` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `apMaterno` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `dni` char(8) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`idPromotor`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Procedure structure for buscarAlumnodni
-- ----------------------------
DROP PROCEDURE IF EXISTS `buscarAlumnodni`;
delimiter ;;
CREATE PROCEDURE `buscarAlumnodni`(IN `_auxDni` VARCHAR(10))
BEGIN
	IF (LENGTH(_auxDni) = 8) THEN
		SELECT * FROM alumno WHERE alumno.dni = _auxDni;
	END IF;
END
;;
delimiter ;

-- ----------------------------
-- Function structure for nuevo
-- ----------------------------
DROP FUNCTION IF EXISTS `nuevo`;
delimiter ;;
CREATE FUNCTION `nuevo`(num INTEGER)
 RETURNS int(11)
BEGIN
declare 
	total,cont int default 1;


RETURN cade;
END
;;
delimiter ;

-- ----------------------------
-- Procedure structure for registrarAlumno
-- ----------------------------
DROP PROCEDURE IF EXISTS `registrarAlumno`;
delimiter ;;
CREATE PROCEDURE `registrarAlumno`(IN `_dni` VARCHAR(10),
IN `_nombre` VARCHAR(20),
IN `_apPaterno` VARCHAR(20),
IN `_apMaterno` VARCHAR(20),
IN `_genero` char(1),
IN `_celular` VARCHAR(10),
IN `_feNacimiento` date,
IN `_direccion` VARCHAR(50))
BEGIN
	
		INSERT INTO alumno(dni,nombre,apPaterno,apMaterno,genero,celular,feNacimiento,direccion) VALUES(_dni,_nombre,_apPaterno,_apMaterno,_genero,_celular,_feNacimiento,_direccion);

END
;;
delimiter ;

-- ----------------------------
-- Procedure structure for registrarApoderado
-- ----------------------------
DROP PROCEDURE IF EXISTS `registrarApoderado`;
delimiter ;;
CREATE PROCEDURE `registrarApoderado`(IN `_dni` VARCHAR(18),IN `_nombre` VARCHAR(30),IN `_apPaterno` VARCHAR(20), IN `_apMaterno` VARCHAR(20), IN `_celular` VARCHAR(10), IN `_direccion` VARCHAR(50),IN `_parentesco` VARCHAR(20))
BEGIN


			INSERT INTO apoderado(dni,nombre,apPaterno,apMaterno,celular,direccion,parentesco) VALUES(_dni,_nombre,_apPaterno,_apMaterno,_celular,_direccion,_parentesco);

END
;;
delimiter ;

SET FOREIGN_KEY_CHECKS = 1;
