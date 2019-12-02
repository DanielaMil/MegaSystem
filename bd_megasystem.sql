/*
 Navicat Premium Data Transfer

 Source Server         : jcjMysql
 Source Server Type    : MySQL
 Source Server Version : 100134
 Source Host           : localhost:3306
 Source Schema         : bd_megasystem

 Target Server Type    : MySQL
 Target Server Version : 100134
 File Encoding         : 65001

 Date: 01/12/2019 23:56:16
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
) ENGINE = InnoDB AUTO_INCREMENT = 66 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of alumno
-- ----------------------------
INSERT INTO `alumno` VALUES (56, '70409311', 'aaaaaaa', 'aaaaaaaa', 'aaaaaaaaaa', b'1', '23423', '2019-12-04', 'sadasd23');
INSERT INTO `alumno` VALUES (57, '70409311', 'aaaaaaa', 'aaaaaaaa', 'aaaaaaaaaa', b'1', '23423', '2019-12-04', 'sadasd23');
INSERT INTO `alumno` VALUES (58, '70409311', 'aaaaaaa', 'aaaaaaaa', 'aaaaaaaaaa', b'1', '23423', '2019-12-04', 'sadasd23');
INSERT INTO `alumno` VALUES (59, '70409311', 'aaaaaaa', 'aaaaaaaa', 'aaaaaaaaaa', b'1', '23423', '2019-12-04', 'sadasd23');
INSERT INTO `alumno` VALUES (60, '70409311', 'aaaaaaa', 'aaaaaaaa', 'aaaaaaaaaa', b'1', '23423', '2019-12-04', 'sadasd23');
INSERT INTO `alumno` VALUES (61, NULL, NULL, NULL, NULL, b'1', NULL, NULL, NULL);
INSERT INTO `alumno` VALUES (62, NULL, NULL, NULL, NULL, b'1', NULL, NULL, NULL);
INSERT INTO `alumno` VALUES (63, NULL, NULL, NULL, NULL, b'1', NULL, NULL, NULL);
INSERT INTO `alumno` VALUES (64, NULL, NULL, NULL, NULL, b'1', NULL, NULL, NULL);
INSERT INTO `alumno` VALUES (65, NULL, NULL, NULL, NULL, b'1', NULL, NULL, NULL);

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
) ENGINE = InnoDB AUTO_INCREMENT = 43 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of apoderado
-- ----------------------------
INSERT INTO `apoderado` VALUES (36, '12345678', 'bbbbbbbbbbbb', 'bbbb', 'bbbbbbb', '2323', 'dfgdfg', 'dfgd');
INSERT INTO `apoderado` VALUES (37, '12345678', 'bbbbbbbbbbbb', 'bbbb', 'bbbbbbb', '2323', 'dfgdfg', 'dfgd');
INSERT INTO `apoderado` VALUES (38, '12345678', 'bbbbbbbbbbbb', 'bbbb', 'bbbbbbb', '2323', 'dfgdfg', 'dfgd');
INSERT INTO `apoderado` VALUES (39, '12345678', 'bbbbbbbbbbbb', 'bbbb', 'bbbbbbb', '2323', 'dfgdfg', 'dfgd');
INSERT INTO `apoderado` VALUES (40, '12345678', 'bbbbbbbbbbbb', 'bbbb', 'bbbbbbb', '2323', 'dfgdfg', 'dfgd');
INSERT INTO `apoderado` VALUES (41, '12345678', NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `apoderado` VALUES (42, '12345678', NULL, NULL, NULL, NULL, NULL, NULL);

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
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of concepto
-- ----------------------------
INSERT INTO `concepto` VALUES (1, 'Certificado', 20.00);
INSERT INTO `concepto` VALUES (2, 'Matricula', 50.00);
INSERT INTO `concepto` VALUES (3, 'Mensualidad', 60.00);

-- ----------------------------
-- Table structure for cuota
-- ----------------------------
DROP TABLE IF EXISTS `cuota`;
CREATE TABLE `cuota`  (
  `idCuota` int(4) NOT NULL AUTO_INCREMENT,
  `monto` float(4, 2) NULL DEFAULT NULL,
  `feVencimiento` date NULL DEFAULT NULL,
  `idConcepto` int(4) NULL DEFAULT NULL,
  `idMatricula` int(4) NULL DEFAULT NULL,
  `saldo` float(4, 2) NULL DEFAULT NULL,
  `pagado` bit(1) NOT NULL COMMENT '0 aún debe 1 cuota pagada',
  `raDescuento` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `moDescuento` float(4, 2) NULL DEFAULT NULL,
  PRIMARY KEY (`idCuota`) USING BTREE,
  INDEX `idConcepto`(`idConcepto`) USING BTREE,
  INDEX `idMatricula`(`idMatricula`) USING BTREE,
  CONSTRAINT `cuota_ibfk_1` FOREIGN KEY (`idConcepto`) REFERENCES `concepto` (`idConcepto`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT `cuota_ibfk_2` FOREIGN KEY (`idMatricula`) REFERENCES `matricula` (`idMatricula`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 152 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of cuota
-- ----------------------------
INSERT INTO `cuota` VALUES (49, 60.00, NULL, 3, NULL, 60.00, b'0', NULL, 0.00);
INSERT INTO `cuota` VALUES (50, 60.00, NULL, 3, NULL, 60.00, b'0', NULL, 0.00);
INSERT INTO `cuota` VALUES (51, 60.00, NULL, 3, NULL, 60.00, b'0', NULL, 0.00);
INSERT INTO `cuota` VALUES (52, 60.00, NULL, 3, NULL, 60.00, b'0', NULL, 0.00);
INSERT INTO `cuota` VALUES (53, 50.00, NULL, 3, NULL, 50.00, b'0', 'sdfsdf10', 10.00);
INSERT INTO `cuota` VALUES (54, 50.00, NULL, 3, NULL, 50.00, b'0', 'sdfsdf10', 10.00);
INSERT INTO `cuota` VALUES (55, 50.00, NULL, 3, NULL, 50.00, b'0', 'sdfsdf10', 10.00);
INSERT INTO `cuota` VALUES (56, 60.00, NULL, 3, NULL, 60.00, b'0', NULL, 0.00);
INSERT INTO `cuota` VALUES (57, 60.00, NULL, 3, NULL, 60.00, b'0', NULL, 0.00);
INSERT INTO `cuota` VALUES (58, 60.00, NULL, 3, NULL, 60.00, b'0', NULL, 0.00);
INSERT INTO `cuota` VALUES (59, 60.00, NULL, 3, NULL, 60.00, b'0', NULL, 0.00);
INSERT INTO `cuota` VALUES (60, 50.00, NULL, 3, NULL, 50.00, b'0', 'sdfsdf10', 10.00);
INSERT INTO `cuota` VALUES (61, 50.00, NULL, 3, NULL, 50.00, b'0', 'sdfsdf10', 10.00);
INSERT INTO `cuota` VALUES (62, 50.00, NULL, 3, NULL, 50.00, b'0', 'sdfsdf10', 10.00);
INSERT INTO `cuota` VALUES (63, 60.00, NULL, 3, NULL, 60.00, b'0', NULL, 0.00);
INSERT INTO `cuota` VALUES (64, 60.00, NULL, 3, NULL, 60.00, b'0', NULL, 0.00);
INSERT INTO `cuota` VALUES (65, 60.00, NULL, 3, NULL, 60.00, b'0', NULL, 0.00);
INSERT INTO `cuota` VALUES (66, 60.00, NULL, 3, NULL, 60.00, b'0', NULL, 0.00);
INSERT INTO `cuota` VALUES (67, 50.00, NULL, 3, NULL, 50.00, b'0', 'sdfsdf10', 10.00);
INSERT INTO `cuota` VALUES (68, 50.00, NULL, 3, NULL, 50.00, b'0', 'sdfsdf10', 10.00);
INSERT INTO `cuota` VALUES (69, 50.00, NULL, 3, NULL, 50.00, b'0', 'sdfsdf10', 10.00);
INSERT INTO `cuota` VALUES (70, 60.00, NULL, 3, NULL, 60.00, b'0', NULL, 0.00);
INSERT INTO `cuota` VALUES (71, 60.00, NULL, 3, NULL, 60.00, b'0', NULL, 0.00);
INSERT INTO `cuota` VALUES (72, 60.00, NULL, 3, NULL, 60.00, b'0', NULL, 0.00);
INSERT INTO `cuota` VALUES (73, 60.00, NULL, 3, NULL, 60.00, b'0', NULL, 0.00);
INSERT INTO `cuota` VALUES (74, 50.00, NULL, 3, NULL, 50.00, b'0', 'sdfsdf10', 10.00);
INSERT INTO `cuota` VALUES (75, 50.00, NULL, 3, NULL, 50.00, b'0', 'sdfsdf10', 10.00);
INSERT INTO `cuota` VALUES (76, 50.00, NULL, 3, NULL, 50.00, b'0', 'sdfsdf10', 10.00);
INSERT INTO `cuota` VALUES (77, 60.00, NULL, 3, NULL, 60.00, b'0', NULL, 0.00);
INSERT INTO `cuota` VALUES (78, 60.00, NULL, 3, NULL, 60.00, b'0', NULL, 0.00);
INSERT INTO `cuota` VALUES (79, 60.00, NULL, 3, NULL, 60.00, b'0', NULL, 0.00);
INSERT INTO `cuota` VALUES (80, 60.00, NULL, 3, NULL, 60.00, b'0', NULL, 0.00);
INSERT INTO `cuota` VALUES (81, 50.00, NULL, 3, NULL, 50.00, b'0', 'sdfsdf10', 10.00);
INSERT INTO `cuota` VALUES (82, 50.00, NULL, 3, NULL, 50.00, b'0', 'sdfsdf10', 10.00);
INSERT INTO `cuota` VALUES (83, 50.00, NULL, 3, NULL, 50.00, b'0', 'sdfsdf10', 10.00);
INSERT INTO `cuota` VALUES (84, 60.00, NULL, 3, NULL, 60.00, b'0', NULL, 0.00);
INSERT INTO `cuota` VALUES (85, 60.00, NULL, 3, NULL, 60.00, b'0', NULL, 0.00);
INSERT INTO `cuota` VALUES (86, 60.00, NULL, 3, NULL, 60.00, b'0', NULL, 0.00);
INSERT INTO `cuota` VALUES (87, 60.00, NULL, 3, NULL, 60.00, b'0', NULL, 0.00);
INSERT INTO `cuota` VALUES (88, 50.00, NULL, 3, NULL, 50.00, b'0', 'sfsdf', 10.00);
INSERT INTO `cuota` VALUES (89, 50.00, NULL, 3, NULL, 50.00, b'0', 'sfsdf', 10.00);
INSERT INTO `cuota` VALUES (90, 50.00, NULL, 3, NULL, 50.00, b'0', 'sfsdf', 10.00);
INSERT INTO `cuota` VALUES (91, 60.00, NULL, 3, NULL, 60.00, b'0', NULL, 0.00);
INSERT INTO `cuota` VALUES (92, 60.00, NULL, 3, NULL, 60.00, b'0', NULL, 0.00);
INSERT INTO `cuota` VALUES (93, 60.00, NULL, 3, NULL, 60.00, b'0', NULL, 0.00);
INSERT INTO `cuota` VALUES (94, 60.00, NULL, 3, NULL, 60.00, b'0', NULL, 0.00);
INSERT INTO `cuota` VALUES (95, 50.00, NULL, 3, NULL, 50.00, b'0', 'sfsdf', 10.00);
INSERT INTO `cuota` VALUES (96, 50.00, NULL, 3, NULL, 50.00, b'0', 'sfsdf', 10.00);
INSERT INTO `cuota` VALUES (97, 50.00, NULL, 3, NULL, 50.00, b'0', 'sfsdf', 10.00);
INSERT INTO `cuota` VALUES (98, 60.00, NULL, 3, NULL, 60.00, b'0', NULL, 0.00);
INSERT INTO `cuota` VALUES (99, 60.00, NULL, 3, NULL, 60.00, b'0', NULL, 0.00);
INSERT INTO `cuota` VALUES (100, 60.00, NULL, 3, NULL, 60.00, b'0', NULL, 0.00);
INSERT INTO `cuota` VALUES (101, 60.00, NULL, 3, NULL, 60.00, b'0', NULL, 0.00);
INSERT INTO `cuota` VALUES (102, 50.00, NULL, 3, NULL, 50.00, b'0', 'sfsdf', 10.00);
INSERT INTO `cuota` VALUES (103, 50.00, NULL, 3, NULL, 50.00, b'0', 'sfsdf', 10.00);
INSERT INTO `cuota` VALUES (104, 50.00, NULL, 3, NULL, 50.00, b'0', 'sfsdf', 10.00);
INSERT INTO `cuota` VALUES (105, 60.00, NULL, 3, NULL, 60.00, b'0', NULL, 0.00);
INSERT INTO `cuota` VALUES (106, 60.00, NULL, 3, NULL, 60.00, b'0', NULL, 0.00);
INSERT INTO `cuota` VALUES (107, 60.00, NULL, 3, NULL, 60.00, b'0', NULL, 0.00);
INSERT INTO `cuota` VALUES (108, 60.00, NULL, 3, NULL, 60.00, b'0', NULL, 0.00);
INSERT INTO `cuota` VALUES (109, 50.00, NULL, 3, NULL, 50.00, b'0', 'sfsdf', 10.00);
INSERT INTO `cuota` VALUES (110, 50.00, NULL, 3, NULL, 50.00, b'0', 'sfsdf', 10.00);
INSERT INTO `cuota` VALUES (111, 50.00, NULL, 3, NULL, 50.00, b'0', 'sfsdf', 10.00);
INSERT INTO `cuota` VALUES (112, 50.00, NULL, 3, NULL, 50.00, b'0', 'dfgdfg', 10.00);
INSERT INTO `cuota` VALUES (113, 50.00, NULL, 3, NULL, 50.00, b'0', 'dfgdfg', 10.00);
INSERT INTO `cuota` VALUES (114, 50.00, NULL, 3, NULL, 50.00, b'0', 'dfgdfg', 10.00);
INSERT INTO `cuota` VALUES (115, 50.00, NULL, 3, NULL, 50.00, b'0', 'dfgdfg', 10.00);
INSERT INTO `cuota` VALUES (116, 60.00, NULL, 3, NULL, 60.00, b'0', NULL, 0.00);
INSERT INTO `cuota` VALUES (117, 60.00, NULL, 3, NULL, 60.00, b'0', NULL, 0.00);
INSERT INTO `cuota` VALUES (118, 60.00, NULL, 3, NULL, 60.00, b'0', NULL, 0.00);
INSERT INTO `cuota` VALUES (119, 60.00, NULL, 3, NULL, 60.00, b'0', NULL, NULL);
INSERT INTO `cuota` VALUES (120, 60.00, NULL, 3, NULL, 60.00, b'0', NULL, NULL);
INSERT INTO `cuota` VALUES (121, 60.00, NULL, 3, NULL, 60.00, b'0', NULL, NULL);
INSERT INTO `cuota` VALUES (122, 60.00, NULL, 3, NULL, 60.00, b'0', NULL, NULL);
INSERT INTO `cuota` VALUES (123, 60.00, NULL, 3, NULL, 60.00, b'0', NULL, 0.00);
INSERT INTO `cuota` VALUES (124, 60.00, NULL, 3, NULL, 60.00, b'0', NULL, 0.00);
INSERT INTO `cuota` VALUES (125, 60.00, NULL, 3, NULL, 60.00, b'0', NULL, 0.00);
INSERT INTO `cuota` VALUES (126, 60.00, NULL, 3, NULL, 60.00, b'0', NULL, 0.00);
INSERT INTO `cuota` VALUES (127, 50.00, NULL, 3, NULL, 50.00, b'0', 'jhvbjhb', 10.00);
INSERT INTO `cuota` VALUES (128, 50.00, NULL, 3, NULL, 50.00, b'0', 'jhvbjhb', 10.00);
INSERT INTO `cuota` VALUES (129, 50.00, NULL, 3, NULL, 50.00, b'0', 'jhvbjhb', 10.00);
INSERT INTO `cuota` VALUES (130, 50.00, NULL, 3, NULL, 50.00, b'0', 'jhvbjhb', 10.00);
INSERT INTO `cuota` VALUES (131, 50.00, NULL, 3, NULL, 50.00, b'0', 'jhvbjhb', 10.00);
INSERT INTO `cuota` VALUES (132, 50.00, NULL, 3, NULL, 50.00, b'0', 'jhvbjhb', 10.00);
INSERT INTO `cuota` VALUES (133, 50.00, NULL, 3, NULL, 50.00, b'0', 'jhvbjhb', 10.00);
INSERT INTO `cuota` VALUES (134, 50.00, NULL, 3, NULL, 50.00, b'0', 'jhvbjhb', 10.00);
INSERT INTO `cuota` VALUES (135, 50.00, '2019-11-28', 3, NULL, 50.00, b'0', 'jhvbjhb', 10.00);
INSERT INTO `cuota` VALUES (136, 50.00, '2019-11-28', 3, NULL, 50.00, b'0', 'jhvbjhb', 10.00);
INSERT INTO `cuota` VALUES (137, 50.00, '2019-11-28', 3, NULL, 50.00, b'0', 'jhvbjhb', 10.00);
INSERT INTO `cuota` VALUES (138, 50.00, '2019-11-28', 3, NULL, 50.00, b'0', 'jhvbjhb', 10.00);
INSERT INTO `cuota` VALUES (139, 50.00, '2019-11-28', 3, NULL, 50.00, b'0', 'jhvbjhb', 10.00);
INSERT INTO `cuota` VALUES (140, 50.00, '2019-11-28', 3, NULL, 50.00, b'0', 'jhvbjhb', 10.00);
INSERT INTO `cuota` VALUES (141, 50.00, '2019-11-28', 3, NULL, 50.00, b'0', 'jhvbjhb', 10.00);
INSERT INTO `cuota` VALUES (142, 50.00, '2019-11-28', 3, NULL, 50.00, b'0', 'jhvbjhb', 10.00);
INSERT INTO `cuota` VALUES (143, 50.00, '2019-05-02', 3, 262, 20.00, b'0', 'jvjhv', 10.00);
INSERT INTO `cuota` VALUES (144, 50.00, '2019-05-02', 3, 262, 20.00, b'0', 'jvjhv', 10.00);
INSERT INTO `cuota` VALUES (145, 50.00, '2019-07-02', 3, 262, 20.00, b'0', 'jvjhv', 10.00);
INSERT INTO `cuota` VALUES (146, 50.00, '2019-07-02', 3, 262, 20.00, b'0', 'jvjhv', 10.00);
INSERT INTO `cuota` VALUES (147, 50.00, '2019-08-02', 3, 262, 20.00, b'0', 'jvjhv', 10.00);
INSERT INTO `cuota` VALUES (148, 50.00, '2019-12-28', 3, NULL, 50.00, b'0', 'jhvbjhb', 10.00);
INSERT INTO `cuota` VALUES (149, 50.00, '2020-01-28', 3, NULL, 50.00, b'0', 'jhvbjhb', 10.00);
INSERT INTO `cuota` VALUES (150, 50.00, '2020-02-28', 3, NULL, 50.00, b'0', 'jhvbjhb', 10.00);
INSERT INTO `cuota` VALUES (151, 50.00, '2020-03-28', 3, NULL, 50.00, b'0', 'jhvbjhb', 10.00);

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
  `feInicio` date NULL DEFAULT NULL,
  PRIMARY KEY (`idGrupo`) USING BTREE,
  INDEX `idCurso`(`idCurso`) USING BTREE,
  INDEX `idCiclo`(`idCiclo`) USING BTREE,
  CONSTRAINT `grupo_ibfk_1` FOREIGN KEY (`idCurso`) REFERENCES `curso` (`idCurso`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT `grupo_ibfk_2` FOREIGN KEY (`idCiclo`) REFERENCES `ciclo` (`idCiclo`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 9 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of grupo
-- ----------------------------
INSERT INTO `grupo` VALUES (3, 'A (9:00am - 1:00pm)', 5, 4, 64, 2, 5, '00:00:09.00', '00:00:01.00', 'Sábado', '2019-11-28');
INSERT INTO `grupo` VALUES (4, 'B (2:00pm - 18:00pm)', 5, 4, 64, 2, 4, '00:00:02.00', '00:00:06.00', 'Sábado', '2019-11-27');
INSERT INTO `grupo` VALUES (5, 'A (9:00am - 13:00pm)', 6, 3, 48, 2, 4, '00:00:09.00', '00:00:01.00', 'Sábado', '2019-11-13');
INSERT INTO `grupo` VALUES (6, 'A (8:00am - 12:30pm)', 8, 3, 50, 2, 3, '08:00:39.00', '12:30:58.00', 'Domingo', '2019-11-25');
INSERT INTO `grupo` VALUES (7, 'A (7:30am - 11:30pm)', 7, 3, 50, 2, 3, '11:00:40.00', '12:00:43.00', 'Domingo', '2019-11-04');
INSERT INTO `grupo` VALUES (8, 'B (8:30am - 13:00pm)', 7, 4, 55, 2, 5, '11:01:25.00', '15:01:28.00', 'Sábado', '2019-11-18');

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
  CONSTRAINT `matricula_ibfk_1` FOREIGN KEY (`idPromotor`) REFERENCES `promotor` (`idPromotor`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT `matricula_ibfk_2` FOREIGN KEY (`idAlumno`) REFERENCES `alumno` (`idAlumno`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT `matricula_ibfk_3` FOREIGN KEY (`idApoderado`) REFERENCES `apoderado` (`idApoderado`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT `matricula_ibfk_4` FOREIGN KEY (`idGrupo`) REFERENCES `grupo` (`idGrupo`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 264 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of matricula
-- ----------------------------
INSERT INTO `matricula` VALUES (165, '2019-12-01 20:19:09', 4, 36, 56, NULL);
INSERT INTO `matricula` VALUES (166, '2019-12-01 20:19:09', 5, 36, 56, NULL);
INSERT INTO `matricula` VALUES (167, '2019-12-01 22:35:42', 3, 36, 56, NULL);
INSERT INTO `matricula` VALUES (168, '2019-12-01 22:35:43', 3, 36, 56, NULL);
INSERT INTO `matricula` VALUES (169, '2019-12-01 22:35:45', 3, 36, 56, NULL);
INSERT INTO `matricula` VALUES (170, '2019-12-01 22:35:46', 3, 36, 56, NULL);
INSERT INTO `matricula` VALUES (171, '2019-12-01 22:36:38', 4, 36, 56, NULL);
INSERT INTO `matricula` VALUES (172, '2019-12-01 22:36:39', 4, 36, 56, NULL);
INSERT INTO `matricula` VALUES (173, '2019-12-01 22:36:40', 4, 36, 56, NULL);
INSERT INTO `matricula` VALUES (174, '2019-12-01 22:36:41', 4, 36, 56, NULL);
INSERT INTO `matricula` VALUES (175, '2019-12-01 22:38:25', 4, 36, 56, NULL);
INSERT INTO `matricula` VALUES (176, '2019-12-01 22:38:25', 4, 36, 56, NULL);
INSERT INTO `matricula` VALUES (177, '2019-12-01 22:38:26', 4, 36, 56, NULL);
INSERT INTO `matricula` VALUES (178, '2019-12-01 22:39:47', 3, 36, 56, NULL);
INSERT INTO `matricula` VALUES (179, '2019-12-01 22:39:48', 3, 36, 56, NULL);
INSERT INTO `matricula` VALUES (180, '2019-12-01 22:39:49', 3, 36, 56, NULL);
INSERT INTO `matricula` VALUES (181, '2019-12-01 22:40:45', 3, 36, 56, NULL);
INSERT INTO `matricula` VALUES (182, '2019-12-01 22:41:20', 3, 36, 56, NULL);
INSERT INTO `matricula` VALUES (183, '2019-12-01 22:41:21', 3, 36, 56, NULL);
INSERT INTO `matricula` VALUES (184, '2019-12-01 22:41:23', 3, 36, 56, NULL);
INSERT INTO `matricula` VALUES (185, '2019-12-01 22:41:49', 3, 36, 56, NULL);
INSERT INTO `matricula` VALUES (186, '2019-12-01 22:41:50', 3, 36, 56, NULL);
INSERT INTO `matricula` VALUES (187, '2019-12-01 22:41:51', 3, 36, 56, NULL);
INSERT INTO `matricula` VALUES (188, '2019-12-01 22:41:51', 3, 36, 56, NULL);
INSERT INTO `matricula` VALUES (189, '2019-12-01 22:41:51', 3, 36, 56, NULL);
INSERT INTO `matricula` VALUES (190, '2019-12-01 22:42:20', 3, 36, 56, NULL);
INSERT INTO `matricula` VALUES (191, '2019-12-01 22:42:20', 3, 36, 56, NULL);
INSERT INTO `matricula` VALUES (192, '2019-12-01 22:42:21', 3, 36, 56, NULL);
INSERT INTO `matricula` VALUES (193, '2019-12-01 22:42:29', 3, 36, 56, NULL);
INSERT INTO `matricula` VALUES (194, '2019-12-01 22:42:34', 3, 36, 56, NULL);
INSERT INTO `matricula` VALUES (195, '2019-12-01 22:43:36', 3, 36, 56, NULL);
INSERT INTO `matricula` VALUES (196, '2019-12-01 22:43:37', 3, 36, 56, NULL);
INSERT INTO `matricula` VALUES (197, '2019-12-01 22:43:37', 3, 36, 56, NULL);
INSERT INTO `matricula` VALUES (198, '2019-12-01 22:43:38', 3, 36, 56, NULL);
INSERT INTO `matricula` VALUES (199, '2019-12-01 22:43:56', 3, 36, 56, NULL);
INSERT INTO `matricula` VALUES (200, '2019-12-01 22:43:57', 3, 36, 56, NULL);
INSERT INTO `matricula` VALUES (201, '2019-12-01 22:43:57', 3, 36, 56, NULL);
INSERT INTO `matricula` VALUES (202, '2019-12-01 22:43:57', 3, 36, 56, NULL);
INSERT INTO `matricula` VALUES (203, '2019-12-01 22:43:58', 3, 36, 56, NULL);
INSERT INTO `matricula` VALUES (204, '2019-12-01 22:46:11', 3, 36, 56, NULL);
INSERT INTO `matricula` VALUES (205, '2019-12-01 22:53:05', 3, 36, 56, NULL);
INSERT INTO `matricula` VALUES (206, '2019-12-01 22:54:52', 3, 36, 56, NULL);
INSERT INTO `matricula` VALUES (207, '2019-12-01 22:55:59', 3, 36, 56, NULL);
INSERT INTO `matricula` VALUES (208, '2019-12-01 22:56:28', 3, 36, 56, NULL);
INSERT INTO `matricula` VALUES (209, '2019-12-01 23:02:05', 3, 36, 56, NULL);
INSERT INTO `matricula` VALUES (210, '2019-12-01 23:02:32', 3, 36, 56, NULL);
INSERT INTO `matricula` VALUES (211, '2019-12-01 23:03:04', 3, 36, 56, NULL);
INSERT INTO `matricula` VALUES (212, '2019-12-01 23:03:18', 3, 36, 56, NULL);
INSERT INTO `matricula` VALUES (213, '2019-12-01 23:03:50', 3, 36, 56, NULL);
INSERT INTO `matricula` VALUES (214, '2019-12-01 23:04:44', 3, 36, 56, NULL);
INSERT INTO `matricula` VALUES (215, '2019-12-01 23:06:23', 3, 36, 56, NULL);
INSERT INTO `matricula` VALUES (216, '2019-12-01 23:07:37', 3, 36, 56, NULL);
INSERT INTO `matricula` VALUES (217, '2019-12-01 23:07:39', 3, 36, 56, NULL);
INSERT INTO `matricula` VALUES (218, '2019-12-01 23:07:40', 3, 36, 56, NULL);
INSERT INTO `matricula` VALUES (219, '2019-12-01 23:08:36', 3, 36, 56, NULL);
INSERT INTO `matricula` VALUES (220, '2019-12-01 23:08:38', 3, 36, 56, NULL);
INSERT INTO `matricula` VALUES (221, '2019-12-01 23:08:38', 3, 36, 56, NULL);
INSERT INTO `matricula` VALUES (222, '2019-12-01 23:09:07', 3, 36, 56, NULL);
INSERT INTO `matricula` VALUES (223, '2019-12-01 23:09:15', 3, 36, 56, NULL);
INSERT INTO `matricula` VALUES (224, '2019-12-01 23:09:16', 3, 36, 56, NULL);
INSERT INTO `matricula` VALUES (225, '2019-12-01 23:10:11', 3, 36, 56, NULL);
INSERT INTO `matricula` VALUES (226, '2019-12-01 23:10:12', 3, 36, 56, NULL);
INSERT INTO `matricula` VALUES (227, '2019-12-01 23:10:16', 3, 36, 56, NULL);
INSERT INTO `matricula` VALUES (228, '2019-12-01 23:10:17', 3, 36, 56, NULL);
INSERT INTO `matricula` VALUES (229, '2019-12-01 23:10:44', 3, 36, 56, NULL);
INSERT INTO `matricula` VALUES (230, '2019-12-01 23:10:44', 3, 36, 56, NULL);
INSERT INTO `matricula` VALUES (231, '2019-12-01 23:10:44', 3, 36, 56, NULL);
INSERT INTO `matricula` VALUES (232, '2019-12-01 23:11:04', 3, 36, 56, NULL);
INSERT INTO `matricula` VALUES (233, '2019-12-01 23:11:55', 3, 36, 56, NULL);
INSERT INTO `matricula` VALUES (234, '2019-12-01 23:12:35', 3, 36, 56, NULL);
INSERT INTO `matricula` VALUES (235, '2019-12-01 23:13:09', 3, 36, 56, NULL);
INSERT INTO `matricula` VALUES (236, '2019-12-01 23:14:04', 3, 36, 56, NULL);
INSERT INTO `matricula` VALUES (237, '2019-12-01 23:14:05', 3, 36, 56, NULL);
INSERT INTO `matricula` VALUES (238, '2019-12-01 23:14:06', 3, 36, 56, NULL);
INSERT INTO `matricula` VALUES (239, '2019-12-01 23:15:55', 3, 36, 56, NULL);
INSERT INTO `matricula` VALUES (240, '2019-12-01 23:16:45', 3, 36, 56, NULL);
INSERT INTO `matricula` VALUES (241, '2019-12-01 23:17:50', 3, 36, 56, NULL);
INSERT INTO `matricula` VALUES (242, '2019-12-01 23:17:52', 3, 36, 56, NULL);
INSERT INTO `matricula` VALUES (243, '2019-12-01 23:17:54', 3, 36, 56, NULL);
INSERT INTO `matricula` VALUES (244, '2019-12-01 23:17:56', 3, 36, 56, NULL);
INSERT INTO `matricula` VALUES (245, '2019-12-01 23:17:56', 3, 36, 56, NULL);
INSERT INTO `matricula` VALUES (246, '2019-12-01 23:17:56', 3, 36, 56, NULL);
INSERT INTO `matricula` VALUES (247, '2019-12-01 23:17:56', 3, 36, 56, NULL);
INSERT INTO `matricula` VALUES (248, '2019-12-01 23:17:56', 3, 36, 56, NULL);
INSERT INTO `matricula` VALUES (249, '2019-12-01 23:17:57', 3, 36, 56, NULL);
INSERT INTO `matricula` VALUES (250, '2019-12-01 23:18:15', 3, 36, 56, NULL);
INSERT INTO `matricula` VALUES (251, '2019-12-01 23:18:25', 3, 36, 56, NULL);
INSERT INTO `matricula` VALUES (252, '2019-12-01 23:18:25', 3, 36, 56, NULL);
INSERT INTO `matricula` VALUES (253, '2019-12-01 23:18:25', 3, 36, 56, NULL);
INSERT INTO `matricula` VALUES (254, '2019-12-01 23:18:26', 3, 36, 56, NULL);
INSERT INTO `matricula` VALUES (255, '2019-12-01 23:18:26', 3, 36, 56, NULL);
INSERT INTO `matricula` VALUES (256, '2019-12-01 23:18:27', 3, 36, 56, NULL);
INSERT INTO `matricula` VALUES (257, '2019-12-01 23:18:27', 3, 36, 56, NULL);
INSERT INTO `matricula` VALUES (258, '2019-12-01 23:18:27', 3, 36, 56, NULL);
INSERT INTO `matricula` VALUES (259, '2019-12-01 23:18:27', 3, 36, 56, NULL);
INSERT INTO `matricula` VALUES (260, '2019-12-01 23:19:24', 3, 36, 56, NULL);
INSERT INTO `matricula` VALUES (261, '2019-12-01 23:19:25', 3, 36, 56, NULL);
INSERT INTO `matricula` VALUES (262, '2019-12-01 23:19:34', 3, 36, 56, NULL);
INSERT INTO `matricula` VALUES (263, '2019-12-01 23:50:01', 3, 36, 56, NULL);

-- ----------------------------
-- Table structure for pago
-- ----------------------------
DROP TABLE IF EXISTS `pago`;
CREATE TABLE `pago`  (
  `idPago` int(4) NOT NULL AUTO_INCREMENT,
  `importe` float(4, 2) NULL DEFAULT NULL,
  `feEmision` datetime(0) NULL DEFAULT NULL,
  `nuRecibo` int(4) NULL DEFAULT NULL,
  `idCuota` int(4) NULL DEFAULT NULL,
  PRIMARY KEY (`idPago`) USING BTREE,
  INDEX `idMatricula`(`nuRecibo`) USING BTREE,
  INDEX `idPago`(`idCuota`) USING BTREE,
  CONSTRAINT `pago_ibfk_1` FOREIGN KEY (`idCuota`) REFERENCES `cuota` (`idCuota`) ON DELETE RESTRICT ON UPDATE RESTRICT
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
-- Procedure structure for buscarApoderado
-- ----------------------------
DROP PROCEDURE IF EXISTS `buscarApoderado`;
delimiter ;;
CREATE PROCEDURE `buscarApoderado`(IN `_dni` VARCHAR(10))
BEGIN

		SELECT * FROM apoderado WHERE apoderado.dni = _dni;

END
;;
delimiter ;

-- ----------------------------
-- Procedure structure for listarCurso
-- ----------------------------
DROP PROCEDURE IF EXISTS `listarCurso`;
delimiter ;;
CREATE PROCEDURE `listarCurso`()
BEGIN
	#SELECT c.nombre 
	#FROM curso as c INNER JOIN grupo as g on c.idCurso = g.idCurso
	#where g.vacante > 0;
	SELECT * FROM curso;
END
;;
delimiter ;

-- ----------------------------
-- Procedure structure for listarGrupos
-- ----------------------------
DROP PROCEDURE IF EXISTS `listarGrupos`;
delimiter ;;
CREATE PROCEDURE `listarGrupos`()
BEGIN
	SELECT * FROM grupo;

END
;;
delimiter ;

-- ----------------------------
-- Procedure structure for listarMeses
-- ----------------------------
DROP PROCEDURE IF EXISTS `listarMeses`;
delimiter ;;
CREATE PROCEDURE `listarMeses`(IN `_feNacimiento` date)
BEGIN
select DATE_ADD(_feNacimiento, INTERVAL 1 month);
select DATE_ADD(_feNacimiento, INTERVAL 2 month);
select DATE_ADD(_feNacimiento, INTERVAL 3 month);
END
;;
delimiter ;

-- ----------------------------
-- Procedure structure for montoPagoConcepto
-- ----------------------------
DROP PROCEDURE IF EXISTS `montoPagoConcepto`;
delimiter ;;
CREATE PROCEDURE `montoPagoConcepto`(IN `_tipo` VARCHAR(15))
BEGIN
	SELECT * FROM concepto
	WHERE concepto.descripcion = _tipo;

END
;;
delimiter ;

-- ----------------------------
-- Procedure structure for mostrarConcepto
-- ----------------------------
DROP PROCEDURE IF EXISTS `mostrarConcepto`;
delimiter ;;
CREATE PROCEDURE `mostrarConcepto`()
  NO SQL 
SELECT concepto.descripcion, concepto.moTotal, concepto.idConcepto from concepto WHERE concepto.idConcepto <=3
;;
delimiter ;

-- ----------------------------
-- Procedure structure for mostrarMesesPagos
-- ----------------------------
DROP PROCEDURE IF EXISTS `mostrarMesesPagos`;
delimiter ;;
CREATE PROCEDURE `mostrarMesesPagos`(IN `_idGrupo` INT)
BEGIN
	SELECT * FROM grupo WHERE grupo.idGrupo = _idGrupo;
END
;;
delimiter ;

-- ----------------------------
-- Procedure structure for nombreDni
-- ----------------------------
DROP PROCEDURE IF EXISTS `nombreDni`;
delimiter ;;
CREATE PROCEDURE `nombreDni`(IN `DNI` CHAR(9))
  NO SQL 
BEGIN
    SELECT
        concat(alumno.nombre,' ',alumno.apPaterno ,' ',alumno.apMaterno) nombreCompleto, curso.nombre, grupo.descripcion, matricula.idMatricula
    FROM
        alumno INNER JOIN matricula on matricula.idAlumno = alumno.idAlumno 		INNER JOIN grupo on grupo.idGrupo = matricula.idGrupo 
        INNER JOIN curso on curso.idCurso =  grupo.idCurso
    WHERE
        alumno.dni = DNI;
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

-- ----------------------------
-- Procedure structure for registrarCuotaIngreso
-- ----------------------------
DROP PROCEDURE IF EXISTS `registrarCuotaIngreso`;
delimiter ;;
CREATE PROCEDURE `registrarCuotaIngreso`(IN `monto` FLOAT(4,2), IN `feVencimiento` DATE, IN `idConcepto` INT(4), IN `idMatricula` INT(4), IN `saldo` FLOAT(4,2), IN `raDescuento` VARCHAR(200), IN `moDescuento` FLOAT(4,2))
  NO SQL 
BEGIN
insert into cuota(cuota.monto, cuota.feVencimiento, cuota.idConcepto, cuota.idMatricula, cuota.saldo, cuota.raDescuento, cuota.moDescuento) VALUES(monto, feVencimiento, idConcepto, idMatricula, saldo, raDescuento, moDescuento);
END
;;
delimiter ;

-- ----------------------------
-- Procedure structure for RegistroCuotas
-- ----------------------------
DROP PROCEDURE IF EXISTS `RegistroCuotas`;
delimiter ;;
CREATE PROCEDURE `RegistroCuotas`(IN `_monto` FLOAT,IN `_feVencimiento` date,IN `_idConcepto` INT,IN `_idMatricula` INT,IN `_saldo` FLOAT,IN `_pagado` INT,IN `_raDescuento` VARCHAR(60),IN `_moDescuento` FLOAT,IN ´_numero´ int)
BEGIN
	
	DECLARE _auxFecha Date;
	
	set _auxFecha = DATE(DATE_ADD(_feVencimiento, INTERVAL ´_numero´ MONTH));
	
		INSERT INTO cuota(monto,feVencimiento,idConcepto,idMatricula,saldo,pagado,raDescuento,moDescuento) VALUES(_monto,_auxFecha,_idConcepto,_idMatricula,_saldo,_pagado,_raDescuento,_moDescuento);
	
	
	
END
;;
delimiter ;

-- ----------------------------
-- Procedure structure for RegistroMatricula
-- ----------------------------
DROP PROCEDURE IF EXISTS `RegistroMatricula`;
delimiter ;;
CREATE PROCEDURE `RegistroMatricula`(IN `_idGrupo` INT,IN `_idApoderado` INT,IN `_idAlumno` INT,IN `_idPromotor` INT)
BEGIN
	INSERT INTO matricula(fecha,idGrupo,idApoderado,idAlumno,idPromotor) VALUES(NOW(),_idGrupo,_idApoderado,_idAlumno,_idPromotor);
	
END
;;
delimiter ;

-- ----------------------------
-- Procedure structure for ultimaMatricula
-- ----------------------------
DROP PROCEDURE IF EXISTS `ultimaMatricula`;
delimiter ;;
CREATE PROCEDURE `ultimaMatricula`()
BEGIN
#declare set
	select idMatricula 
	from Matricula 
	order by idGrupo desc limit 1;

END
;;
delimiter ;

SET FOREIGN_KEY_CHECKS = 1;
